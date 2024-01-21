<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Check for POST data
if (isset($_POST['song_title'], $_POST['artist'], $_POST['video'], $_POST['chord_notation'], $_POST['tab_notation'])) {
    $id = $_SESSION['id'];
    $song_title = $_POST['song_title'];
    $artist = $_POST['artist'];
    $video = $_POST['video'];
    $chord_notation = $_POST['chord_notation'];
    $tab_notation = $_POST['tab_notation'];

    $sql = "INSERT INTO chords_tab (id_utilizador, song_title, artist, video, chord_notation, tab_notation) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // Assuming id is an integer and the rest are strings
    $stmt->bind_param('isssss', $id, $song_title, $artist, $video, $chord_notation, $tab_notation);

    if ($stmt->execute()) {
        header('Location: cifras.php');
    } else {
        echo "Erro ao inserir os dados: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Missing form data.";
}

$conn->close();
?>

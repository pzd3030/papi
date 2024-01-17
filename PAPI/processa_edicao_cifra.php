<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_POST['id_cifra'], $_POST['song_title'], $_POST['artist'], $_POST['tab_notation'], $_POST['chord_notation'])) {
    $id_cifra = $_POST['id_cifra'];
    $song_title = $_POST['song_title'];
    $artist = $_POST['artist'];
    $tab_notation = $_POST['tab_notation'];
    $chord_notation = $_POST['chord_notation'];

  
    $sql_update = "UPDATE chords_tab SET song_title = ?, artist = ?, tab_notation = ?, chord_notation = ? WHERE id_cifra = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param('ssssi', $song_title, $artist, $tab_notation, $chord_notation, $id_cifra);

    if ($stmt_update->execute()) {
        header('Location: cifra_details.php?id=' . $id_cifra);
    } else {
        echo "Erro ao atualizar as informações: " . $stmt_update->error;
    }

    $stmt_update->close();
} else {
    echo "Dados de formulário ausentes.";
}

$conn->close();
?>

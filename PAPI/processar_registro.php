<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com a base de dados: " . $conn->connect_error);
}


$email = $_POST['email'];
$senha = $_POST['senha'];
// Encriptar senha
$senhaEncriptada = password_hash($senha, PASSWORD_DEFAULT);
$nome = $_POST['nome'];
$nome_usuario = $_POST['nome_usuario'];


$verificar_query = "SELECT * FROM perfis WHERE Email='$email' OR Nome_usuario='$nome_usuario'";
$resultado = $conn->query($verificar_query);

if ($resultado->num_rows > 0) {
    echo "Erro: O email ou nome de usuário já estão em uso.";
} else {
    
    $inserir_query = "INSERT INTO perfis (Email, Senha, Nome, Nome_usuario) VALUES ('$email', '$senhaEncriptada', '$nome', '$nome_usuario')";

    if ($conn->query($inserir_query) === true) {
        header('Location: login.php');
    } else {
        echo "Erro ao registrar: " . $conn->error;
    }
}

$conn->close();

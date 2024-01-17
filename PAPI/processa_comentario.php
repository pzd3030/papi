<?php
session_start();

if (isset($_SESSION['id'])) {
    // Verifique se o usuário está logado

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Certifique-se de que o formulário foi submetido via POST

        $comentario = $_POST['comentario'];
        $nome_user = $_POST['nome_user'];
        $usuarioID = $_SESSION['id'];
        $id_cifra = $_POST['id_cifra']; // Adiciona esta linha para obter o id_cifra do formulário

        // Conexão com o banco de dados (substitua as configurações de conexão)
        $conn = new mysqli("localhost", "root", "", "site");

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Preparar a consulta para inserir o comentário na tabela de comentários
        $query = "INSERT INTO comentarios (id_cifra, nome, comentario) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iss", $id_cifra, $nome_user, $comentario);

        if ($stmt->execute()) {
            // Comentário adicionado com sucesso
            header("Location: cifra_details.php?id=" . $id_cifra); // Redireciona de volta para a página de detalhes da cifra
        } else {
            echo "Erro ao adicionar o comentário.";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Acesso inválido.";
    }
} else {
    header("Location: login.php"); // Redireciona para a página de login se o usuário não estiver logado
}
?>

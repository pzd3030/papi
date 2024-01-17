<!DOCTYPE HTML>


<html>
	<head>
		<title>nese</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
			<div id="wrapper">
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<header id="header">	
								<a href="indice.php" class="logo" ><strong>CHORD</strong>REALM</a>
								<div style="text-align: right;">								
									</div>
						
								</header>

						<!DOCTYPE HTML>
<html>
<head>
    <title>Minha Página de Perfil</title>
</head>
<body>
	<div class="">
	<h1 >Meu Perfil</h1>

<p><a href="logout.php">Logout</a></p>
<?php

session_start();
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root"; // Substitua pelo nome de usuário do seu banco de dados
$password = ""; // Substitua pela senha do seu banco de dados
$dbname = "site";

// Criar uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$id = $_SESSION['id'];

// Consulta SQL para buscar os dados do usuário (substitua com sua própria lógica de consulta)
$query = "SELECT Email, Nome, Nome_usuario FROM perfis WHERE ID = $id"; // Supondo que o ID do usuário seja 1

$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row["Email"];
    $nome = $row["Nome"];
    $nomeUsuario = $row["Nome_usuario"];
    
    echo "Email: " . $email . "<br>";
    echo "Nome: " . $nome . "<br>";
    echo "Nome de Usuário: " . $nomeUsuario . "<br>";
} else {
    echo "Nenhum usuário encontrado";
}

$conn->close();
?>
</div>

    <div id="content">
		<header class="major"><h2>As minhas cifras</h2></header>
	
<?php
include_once("conexao.php");
$id = $_SESSION['id'];

// Select cifras for the user with the given ID
$sql = "SELECT * FROM chords_tab WHERE id_utilizador = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    $result = $stmt->get_result();

    // Check if there are cifras for the user
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li><a href='cifra_details.php?id={$row['id_cifra']}'>{$row['song_title']} - {$row['artist']}</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Você ainda não criou nenhuma cifra.</p>";
    }
} else {
    echo "Erro ao executar a consulta: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
	</div>
    <script src="perfil.js"></script>
</body>
</html>

								

						</div>
					</div>

				<!-- Sidebar --> 
					<div id="sidebar">
						<div class="inner">

							

							<!-- Menu -->
							<nav id="menu">
								<header class="major">
									<h2>Menu</h2>
								</header>
								<ul>
									<li><a href="indice.php">Homepage</a></li>
									<?php
								        // Verifica se o usuário é um administrador
								        if ($_SESSION['admin'] == 1) {
								            echo '<li><a href="administracao.php">Administração</a></li>';
								        }
								        ?>
									<li><a href="cifras.php">Minhas Cifras</a></li>
									
									<li><a href="perfis.php">Perfis</a></li>
									
									<li></li>
										
								</ul>
							</nav>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<!DOCTYPE HTML>
<?php
session_start();

?>

<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
 <table class="product-table">
       
        <!-- Adicione mais linhas para mais produtos -->
    </table>
							<header id="header">	
								<a href="indice.php" class="logo"><strong>CHORD</strong>REALM</a>
								
							
							</header>
							 

							<!-- Content -->

							<body>
								<br></br>
								<ul class="actions">
									<li><a href="criar.php" class="button big">+ CRIE SUA CIFRA</a></li>
								</ul>
<div class="">
	<header class="major">
	<h2>REGRAS</h2>
</header>
<div class="content">
<span>	
<p> 
<span>
<p>Para criar uma cifra,</p> 
<p>há algumas regras que devem ser seguidas para manter a organização do site, e facilitar a visualização de conteúdo</p>
<h2>Como fazer uma tablatura?</h2>
<p>Na tablatura, as cordas do instrumento são representadas por linhas horizontais, e os números nas linhas indicam as casas onde se devem pressionar as cordas para tocar as notas desejadas.</p>
<p>Por exemplo, o número 3 na linha correspondente à corda de baixo E (corda mais grossa) indica que se deve pressionar a terceira casa dessa corda para tocar a nota Sol.</p>
<p>As tablaturas são representadas da seguinte forma:</p>
    
    <pre>
    e|---------------------|------------------|------------------|------------------|
    B|---------------------|------------------|------------------|------------------|
    G|---------------------|------------------|------------------|------------------|
    D|----0---2---3---2----|----0---2---3-----|----0---2---3---2-|-----0---2---3----|
    A|--3---3---3---3---3--|--3---3---3---3---|--3---3---3---3---|--3---3---3---3---|
    E|---------------------|------------------|------------------|------------------|
    </pre>
    
    <p>Essa é uma tablatura simples representando um riff de guitarra. Cada linha corresponde a uma corda da guitarra, e os números indicam a casa em que você deve pressionar a corda para tocar a nota desejada.</p>
</span>
</p>


<h3>As minhas cifras</h3>
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


</div>

							
								
							</body>
								<section>
									<header class="main">
										

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
								<?php
								        // Verifica se o usuário é um administrador
								        if (isset($_SESSION['id'])) {
								            echo '<li><a href="perfis.php">Perfis</a></li>';
								        }
								        ?>
								
								 
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
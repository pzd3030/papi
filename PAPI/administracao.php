<!DOCTYPE HTML>
<?php
session_start();
?>

<html>
	<head>
		<title>CHORDREALM</title>
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

							<!-- Header -->
								<header id="header">
									<a href="indice.php" class="logo"><strong>CHORD</strong>REALM</a>
									
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h2>Pesquisar</h2>
											<p>Encontre suas músicas favoritas:</p>
										</header>
										<p><form action="resultado_pesquisa.php" method="get">
  <input type="text" name="termo_pesquisa" placeholder="Pesquisar cifras"></p>

  <button type="submit">Pesquisar</button>
</form>
							
									</div>

								</section>
								<section id="banner">
									<div class="content">
    <header>
        <h2>Todas as cifras</h2>
    </header>
    <?php
    include_once("conexao.php");

    // Select all cifras
    $sql_todas_cifras = "SELECT * FROM chords_tab";
    $result_todas_cifras = $conn->query($sql_todas_cifras);

    // Check if there are cifras
    if ($result_todas_cifras->num_rows > 0) {
        echo "<ul>";
        while ($row_todas_cifras = $result_todas_cifras->fetch_assoc()) {
            echo "<li><a href='cifra_details.php?id={$row_todas_cifras['id_cifra']}'>{$row_todas_cifras['song_title']} - {$row_todas_cifras['artist']}</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhuma cifra encontrada.</p>";
    }
    ?>
</div>

<div class="content">
    <header>
        <h3>As minhas cifras</h3>
    </header>
    <?php
    $id = $_SESSION['id'];

    // Select cifras for the user with the given ID
    $sql_minhas_cifras = "SELECT * FROM chords_tab WHERE id_utilizador = ?";
    $stmt_minhas_cifras = $conn->prepare($sql_minhas_cifras);
    $stmt_minhas_cifras->bind_param('i', $id);

    if ($stmt_minhas_cifras->execute()) {
        $result_minhas_cifras = $stmt_minhas_cifras->get_result();

        // Check if there are cifras for the user
        if ($result_minhas_cifras->num_rows > 0) {
            echo "<ul>";
            while ($row_minhas_cifras = $result_minhas_cifras->fetch_assoc()) {
                echo "<li><a href='cifra_details.php?id={$row_minhas_cifras['id_cifra']}'>{$row_minhas_cifras['song_title']} - {$row_minhas_cifras['artist']}</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Você ainda não criou nenhuma cifra.</p>";
        }
    } else {
        echo "Erro ao executar a consulta: " . $stmt_minhas_cifras->error;
    }

    $stmt_minhas_cifras->close();
    ?>
</div>

<?php
$conn->close();
?>


								</section>

							

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Precisa de ajuda?</h2>
									</header>
									<div class="posts">
									<div id="main">
						<div class="inner">

						
							
                                            
						</div>
					</div>
									</div>
								</section>

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
										<li><a href="cifras.php">minhas cifras</a></li>
										<li><a href="perfis.php">Perfis</a></li>
										
									</ul>
								</nav>
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
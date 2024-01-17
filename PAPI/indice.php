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
										<p><form style="width: 300px;" action="resultado_pesquisa.php" method="get">
  											<input type="text" name="termo_pesquisa" placeholder="Pesquisar cifras"></p>

  											<button type="submit">Pesquisar</button>
</form>
							
									</div>

								</section>
								<section id="banner">
									<div class="content">
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
   


								</section>
										
</form>
							
									</div>

								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Musicas para iniciantes</h2>
									</header>
									<div class="features">
	
									
				
										<article>
										
											<div class="content">
												<a href="creep.php" class="button2 big" style="height: 100px;">Radiohead - Creep</a>
											</div>
										</article>
										<article>
											
											<div class="content">
												<a href="Oasis.php" class="button2 big" style="height: 100px;">Oasis - Wonderwall</a>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Precisa de ajuda?</h2>
									</header>
									<div class="posts">
									<div id="main">
						<div class="inner">

						
								
                                <h1>O que são tablaturas?</h1>
                     
<p>A tablatura de guitarra, frequentemente chamada de "tab", é uma notação musical simplificada que torna mais acessível para os guitarristas iniciantes a aprendizagem de músicas de forma rápida e direta. Ela apresenta semelhanças com a partitura tradicional ao indicar as notas a serem tocadas, sua duração e as técnicas a serem empregadas. No entanto, o grande diferencial da tablatura em relação à notação musical convencional é a sua capacidade de mostrar exatamente onde tocar essas notas no braço da guitarra.</p>

<p>Isso se revela particularmente valioso, uma vez que a guitarra oferece múltiplas posições para a execução das mesmas notas. Portanto, compreender a tablatura de guitarra se mostra especialmente benéfico para os iniciantes, permitindo que eles aprendam a tocar o instrumento sem a necessidade de dominar a leitura da notação musical tradicional.</p>
<a class="image"><img src="images/tablatura1.jpg" alt="" /></a>
<h2>Como ler uma tablatura</h2>
<p>A tablatura de guitarra é a representação visual das notas de uma música. A tablatura de guitarra padrão consiste em seis linhas horizontais, cada linha representa uma das seis cordas da guitarra. Ao olhar a tablatura de guitarra de cima para baixo, a linha superior representa a corda E agudo (a corda mais fina) seguida das linhas que representam o B, G, D, A e o E grave (a corda mais grossa).</p>
<p>Por exemplo, quando o número 0 está na corda, isso significa que você deve tocá-la “aberta”, ou seja, deixá-la solta, sem usar a mão que está no traste. Se a corda tem o número 1, então você deve tocar usando o primeiro traste. Ao aprender como ler tablaturas de guitarra, é importante entender que o 1 representa o primeiro traste; 2, o segundo; 3, o terceiro e assim por diante. </p>
<p>Isso também reflete a visão das cordas conforme você olha para baixo enquanto segura a guitarra. Por isso, pense na tablatura de guitarra como um mapa, pois ele vai te fornecer o caminho mais rápido para aprender a tocar músicas.</p>
<h2>ENTENDENDO OS TRASTES</h2>
<a class="image"><img src="images/trastes.jpg" alt="" /></a>
<p>Os trastes da guitarra são as faixas de metal que percorrem o braço da guitarra.</p>

<p>A maioria das guitarras terão de 19 a 24 trastes. Cada traste é uma nota ou meio tom do outro (o que também pode ser chamado de semitom). Existem 12 notas (ou trastes) em cada oitava e a maioria das guitarras tem marcadores de trastes na lateral do braço da guitarra. Esses marcadores geralmente estão no 3º, 5º, 7º, 9º e 12º trastes e podem te ajudar a reconhecer facilmente a posição dos trastes ao tocar.</p>

<p>Lembre-se: ao olhar para as cordas da guitarra, as cordas com trastes são indicadas por números e cordas abertas são indicadas pelo número “0”. Isso mostra que você deve tocá-la “aberta” sem usar a mão que está no braço da guitarra. Você só seleciona e dedilha a corda e a deixa soar.</p>

<h2>ENTENDENDO OS ACORDES NA TABLATURA DE GUITARRA</h2>
<p>Embora os acordes não tenham nenhum símbolo na tablatura de guitarra, eles podem ser identificados facilmente pela sua posição. Quando várias notas são mostradas alinhadas verticalmente, elas são tocadas juntas, fazendo um acorde. Se um acorde for arpejado, ele vai aparecer como notas únicas, mesmo que você esteja fazendo um acorde.</p>
<a class="image"><img src="images/SOL.png" alt="" /></a>
<p> Isto por exemplo, é um acorde SOL, sendo representado em uma tablatura.</p> 
<h2>BEND</h2>
<p>Técnica que tem como objetivo ir de uma nota a outra sem trocar de casa, levantando ou abaixando a corda.</p>
<p>Um detalhe importante no bend, é que ele deve ser feito com o movimento do braço e não com o movimento de flexão dos dedos.</P>
<p>o bend geralmente é representado em cifras da seguinte forma:</p>
<a class="image"><img src="images/bend.png" alt="" /></a>



<h2>SLIDING</h2>
<p>O sliding é outra técnica útil; você pode deslizar para cima ou para baixo para a próxima nota. <p>Isso é diferente do bending, pois você desliza o dedo para cima ou para baixo até o traste desejado.</p></p><p>Nas tablaturas, os slides costumam ser representados com /, por exemplo, um slide do traste 4 para o cinco é representado como 4/5 na tablatura.</p>
<a class="image"><img src="images/slide.jpg" alt="" /></a>

                                            
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
										<?php
								        // Verifica se o usuário é um administrador
								        if (isset($_SESSION['id'])) {
								            echo '<li><a href="perfis.php">Perfis</a></li>';
								        }
								        ?>
										
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
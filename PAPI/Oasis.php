<!DOCTYPE HTML>
<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Check if 'id' key exists in the $_SESSION array
if (isset($_SESSION['id'])) {
    $id_user = $_SESSION['id'];

    $sql = "SELECT * FROM perfis WHERE ID=$id_user";
    $result_user = $conn->query($sql);
    $row_user = $result_user->fetch_assoc();

    $name_user = $row_user['Nome_usuario'];
} else {
    // Handle the case when 'id' is not set in the session (redirect or display an error)
    header("Location: login.php"); // You can redirect to a login page or handle it accordingly
    exit();
}
?>

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
                        <a href="indice.php" class="logo"><strong>SITE</strong> Verde</a>
					</header>
					<h2>Wonderwall </h2>
					<h3>Oasis</h3>
					<h3>Afinação: E A D G B e </h3>
					
					<h3>Autor da cifra: CHORDREALM</h3>
			
					<section id="banner">
						<div class="content">
							<div style="background-color: #1b1a1a; min-height: 100px; overflow:hidden; max-width: 660px;border-radius: 20px;" >
								<pre>
                                [Intro]
Em   G   D   A7sus4
Em   G   D   A7sus4
Em   G   D   A7sus4
Em   G   D   A7sus4
 
 
[Verse 1]
Em       G
Today is gonna be the day
              D                  A7sus4
That they're gonna throw it back to you
Em          G
By now you should've somehow
    D                A7sus4
Realised what you gotta do
 
Em                   G
I don't believe that anybody
 D           A7sus4              C D  A7sus4  A7sus4
Feels the way I do about you now
 
 
[Verse 2]
Em           G
Backbeat the word is on the street
          D                 A7sus4
That the fire in your heart is out
Em              G
I'm sure you've heard it all before
          D             A7sus4
But you never really had a doubt
Em                   G       D
I don't believe that anybody feels
           A7sus4            Em  G  D  A7sus4
The way I do about you now
 
 
[Pre-Chorus]
     C                D            Em
And all the roads we have to walk are winding
     C                D                Em
And all the lights that lead us there are blinding
 C              D
There are many things that I would
G       D      Em
Like to say to you
       D      A7sus4
But I don't know how
 
 
[Chorus]
         C    Em  G
Because maybe
        Em                   C        Em  G
You're gonna be the one that saves me?
     Em   C  Em  G
And after all
                Em  C  Em  G   Em
You're my wonderwall
 
 
[Verse 3]
Em        G
Today was gonna be the day
             D                  A7sus4
But they'll never throw it back to you
Em         G
By now you should've somehow
    D                    A7sus4
Realised what you're not to do
Em                   G
I don't believe that anybody
D            A7sus4
Feels the way I do
           Em  G  D  A7sus4
About you now
 
 
[Pre-Chorus]
     C                  D              Em
And all the roads that lead you there are winding
     C                   D             Em
And all the lights that light the way are blinding
 C              D                  G       D      Em
There are many things that I would like to say to you
       D      A7sus4
But I don't know how
 
 
[Chorus]
        C    Em  G
I said maybe
        Em                   C        Em  G
You're gonna be the one that saves me?
     Em   C  Em  G
And after all
           Em   C   Em  G  Em
You're my wonderwall
        C             Em   G
I said maybe (I said maybe)
        Em                   C        Em  G
You're gonna be the one that saves me?
     Em   C  Em  G
And after all
           Em   C   Em  G  Em
You're my wonderwall
        C             Em   G
I said maybe (I said maybe)
        Em                   C               Em      G
You're gonna be the one that saves me? (that saves me)
        Em                   C               Em      G
You're gonna be the one that saves me? (that saves me)
        Em                   C               Em      G  Em
You're gonna be the one that saves me? (that saves me)
 
 
[Solo]
e|--------3-0----|
B|-1-0-1---------|
G|---------------|
D|---------------|   x8
A|---------------|
E|---------------|
								</pre>
							</div>
						</section>

						<!DOCTYPE HTML>
						<html>
						<head>
						    <title>Comentários</title>
						    <meta charset="utf-8" />
						</head>
						<body>
						    <h1>Deixe seu comentário</h1>   
						    <form action="processa_comentario.php" method="post">
						        <label for="comentario">Comentário:</label><br>
						        <input style="width: 800px; height:36.6px;" type="text" id="comentario" name="comentario" required><br>
								<input type="hidden" id="nome_user" name="nome_user" value="<?php echo $name_user ?>">

						        <input type="submit" value="Enviar Comentário">
						    </form>
						    <?php

						    // Query para selecionar todos os comentários
						    $query = "SELECT nome, comentario, data_publicacao FROM comentarios ORDER BY data_publicacao DESC";

						    $result = $conn->query($query);

						    // Verifica se há comentários
						    if ($result->num_rows > 0) {
						        while ($row = $result->fetch_assoc()) {
						            $nome = $row["nome"];
						            $comentario = $row["comentario"];
						            $data_publicacao = $row["data_publicacao"];

						            echo "De <strong>$nome</strong> em $data_publicacao:<br>$comentario<br><br>";
						        }
						    } else {
						        echo "Nenhum comentário encontrado.";
						    }

						    $conn->close();
						    ?>

						</body>
						</html>

					</div>
				</div>

				<div id="sidebar">
					<div class="inner">
						<!-- Menu -->
						<nav id="menu">
							<header class="major">
								<h2>Menu</h2>
							</header>
							<ul>
								<li><a href="indice.php">Homepage</a></li>
								<li><a href="cifras.php">Minhas Cifras</a></li>
								<li><a href="perfis.php">Perfis</a></li>
								
							</ul>
						</nav>
					</div>
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

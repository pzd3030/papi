<!DOCTYPE HTML>
<?php
session_start();

if (isset($_GET['termo_pesquisa'])) {
    // Conecte-se ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "site";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Limpe e escape o termo de pesquisa
    $termo_pesquisa = mysqli_real_escape_string($conn, $_GET['termo_pesquisa']);

    // Query para pesquisar na tabela chords_tab
    $query = "SELECT song_title, artist, chord_notation, tab_notation, id_cifra FROM chords_tab WHERE 
              song_title LIKE '%$termo_pesquisa%' OR 
              artist LIKE '%$termo_pesquisa%' OR 
              chord_notation LIKE '%$termo_pesquisa%' OR 
              tab_notation LIKE '%$termo_pesquisa'";

    $result = $conn->query($query);

    $conn->close();
} else {
    $result = null;
}
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
                        <form action="resultado_pesquisa.php" method="get">
                            <input type="text" name="termo_pesquisa" placeholder="Pesquisar cifras">
                            <button type="submit">Pesquisar</button>
                        </form>
                    </div>
                </section>

                <!-- Resultado das cifras -->
                <section id="banner">
                    <div class="content">
                        <header>
                            
                        </header>

                        <?php
                        if ($result && $result->num_rows > 0) {
            echo "<h2>Resultados da pesquisa:</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "<h3><a href='cifra_details.php?id={$row['id_cifra']}'>{$row['song_title']} - {$row['artist']}</a></h3>";
                echo "<div id='{$row['song_title']}' style='display: none;'>";
                echo "<p>Acordes: {$row['chord_notation']}</p>";
                echo "<pre>{$row['tab_notation']}</pre>";
                echo "</div>";
            }
        } else {
            echo "Nenhum resultado encontrado.";
        }
                        ?>
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
                                <!-- Conteúdo da seção se necessário -->
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

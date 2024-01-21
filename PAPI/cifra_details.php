<?php
function obterNomeUsuario($conn, $id_utilizador) {
    $sql_usuario = "SELECT Nome_usuario FROM perfis WHERE ID = ?";
    $stmt_usuario = $conn->prepare($sql_usuario);
    $stmt_usuario->bind_param('i', $id_utilizador);

    if ($stmt_usuario->execute()) {
        $result_usuario = $stmt_usuario->get_result();

        // Verifica se o usuário é encontrado
        if ($result_usuario->num_rows > 0) {
            $row_usuario = $result_usuario->fetch_assoc();
            return $row_usuario['Nome_usuario'];
        } else {
            return "Desconhecido";
        }
    } else {
        return "Erro ao obter nome do usuário";
    }
}

session_start();

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

// Verifica se o ID do usuário está definido na sessão
if (isset($_SESSION['id'])) {
    $id_user = $_SESSION['id'];

    // Obtém os detalhes do usuário
    $sql_user = "SELECT * FROM perfis WHERE ID = ?";
    $stmt_user = $conn->prepare($sql_user);
    $stmt_user->bind_param('i', $id_user);

    if ($stmt_user->execute()) {
        $result_user = $stmt_user->get_result();

        // Verifica se os detalhes do usuário foram encontrados
        if ($result_user->num_rows > 0) {
            $row_user = $result_user->fetch_assoc();
            $name_user = $row_user['Nome_usuario'];

            // Verifica se o parâmetro 'id' está definido na URL
            if (isset($_GET['id'])) {
                $id_cifra = $_GET['id'];

                // Seleciona a cifra específica para o usuário administrador ou a cifra específica para usuários normais
                $sql_cifra = "SELECT * FROM chords_tab WHERE id_cifra = ?";
                $stmt_cifra = $conn->prepare($sql_cifra);
                $stmt_cifra->bind_param('i', $id_cifra);

                if ($stmt_cifra->execute()) {
                    $result_cifra = $stmt_cifra->get_result();

                    // Verifica se a cifra foi encontrada
                    if ($result_cifra->num_rows > 0) {
                        $row_cifra = $result_cifra->fetch_assoc();

                        // Exibe a página da cifra
                        ?>
                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <title>Cifra de <?php echo $row_cifra['song_title']; ?></title>
                            <meta charset="utf-8" />
                            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                            <link rel="stylesheet" href="assets/css/main.css" />
                        </head>
                        <body>
                        
                        <div id="wrapper">
                            <div id="main">
                                <div class="inner">
                                    <!-- Header -->
                                    <header id="header">
                                        <a href="indice.php" class="logo"><strong>SITE</strong> Verde</a>
                                    </header>
                        
                                    <!-- Exibe informações sobre o usuário -->
                                    <h2><?php echo $row_cifra['song_title']; ?></h2>
                                    <h3><?php echo $row_cifra['artist']; ?></h3>
                                    <h3>Afinacao: <?php echo $row_cifra['tab_notation']; ?></h3>
                                     <iframe width="420" height="420" src="<?php echo $row_cifra['video']; ?>"></iframe>
                                    <h3>Autor da cifra: <?php echo obterNomeUsuario($conn, $row_cifra['id_utilizador']); ?></h3>
                        
                                    <!-- Adicione outros detalhes do usuário conforme necessário -->
                        
                                    <!-- Exibe a cifra para o usuário -->
                                    <section id="banner">
                                        <div class="content">
                                            <h2><?php echo $row_cifra['song_title']; ?></h2>
                                            <h3></h3>
                        
                                            <!-- Exibe a notação de acordes com formatação -->
                                            <div style="background-color: #1b1a1a; min-height: 100px; overflow:hidden; max-width: 660px; border-radius: 20px;">
                                                <pre><?php echo nl2br(htmlspecialchars($row_cifra['chord_notation'])); ?></pre>
                                            </div>
                                        </div>
                                    </section>
                                     <?php
            // Verifica se o usuário é um administrador ou o criador da cifra
            if ($_SESSION['admin'] == 1 || $id_user == $row_cifra['id_utilizador']) {
                ?>
                                    <h1>Editar Informações da Cifra</h1> <!-- Movido o heading para cá -->

                                        <!-- Formulário de edição movido para dentro do heading -->
                                        <form action="processa_edicao_cifra.php" method="post">
                                            <label for="song_title">Título da Música:</label>
                                            <input type="text" id="song_title" name="song_title" value="<?php echo htmlspecialchars($row_cifra['song_title']); ?>" required><br>
                                            <label for="artist">Artista:</label>
                                            <input type="text" id="artist" name="artist" value="<?php echo htmlspecialchars($row_cifra['artist']); ?>" required><br>

                                            <!-- Código para o <select> -->
                                            <label for="tab_notation">Afinacao:</label>
                                            <select style="width: 300px; height:36.66px;" id="tab_notation" name="tab_notation">
                                                <?php
                                                $afinacoes = array(
                                                    "E A D B G e",
                                                    "Eb Ab Db Gb Bb eb",
                                                    "D G C F A D",
                                                    "D A D G A D",
                                                    "C# G# C# F# A# D#",
                                                    "D G D G B D",
                                                    "C G C G C E",
                                                    "E# A# D# G B E",
                                                    "A E A D Gb B"
                                                );

                                                foreach ($afinacoes as $afinacao) {
                                                    $selected = ($afinacao == $row_cifra['tab_notation']) ? 'selected' : '';
                                                    echo '<option value="' . $afinacao . '" ' . $selected . '>' . $afinacao . '</option>';
                                                }
                                                ?>
                                            </select><br>

                                            <!-- Código para <textarea> -->
                                            <label for="chord_notation">Letra & Acordes:</label>
                                            <textarea style="width: 632px; height:700px;" name="chord_notation" rows="10" cols="50"><?php echo htmlspecialchars($row_cifra['chord_notation']); ?></textarea><br>

                                            <input type="hidden" id="id_cifra" name="id_cifra" value="<?php echo $id_cifra; ?>">
                                            <input type="submit" value="Salvar">
                                        </form>
                                         <?php
            }
            ?>
                        
                                    <h1>Deixe seu comentário</h1>
                                    <form action="processa_comentario.php" method="post">
                                        <label for="comentario">Comentário:</label><br>
                                        <input style="width: 800px; height:36.6px;" type="text" id="comentario" name="comentario" required><br>
                                        <input type="hidden" id="nome_user" name="nome_user" value="<?php echo $name_user ?>">
                                        <input type="hidden" id="id_cifra" name="id_cifra" value="<?php echo $id_cifra ?>">
                                        <input type="submit" value="Enviar Comentário">
                                    </form>
                        
                                    <?php
                                    // Consulta para selecionar todos os comentários relacionados à cifra específica
                                    $query_comentarios_cifra = "SELECT nome, comentario, data_publicacao FROM comentarios WHERE id_cifra = ? ORDER BY data_publicacao DESC";
                                    $stmt_comentarios_cifra = $conn->prepare($query_comentarios_cifra);
                                    $stmt_comentarios_cifra->bind_param('i', $id_cifra);
                        
                                    if ($stmt_comentarios_cifra->execute()) {
                                        $result_comentarios_cifra = $stmt_comentarios_cifra->get_result();
                        
                                        // Verifica se há comentários relacionados à cifra
                                        if ($result_comentarios_cifra->num_rows > 0) {
                                            while ($row_comentario_cifra = $result_comentarios_cifra->fetch_assoc()) {
                                                $nome_comentario_cifra = $row_comentario_cifra["nome"];
                                                $comentario_cifra = $row_comentario_cifra["comentario"];
                                                $data_publicacao_cifra = $row_comentario_cifra["data_publicacao"];
                        
                                                echo "De <strong>$nome_comentario_cifra</strong> em $data_publicacao_cifra:<br>$comentario_cifra<br><br>";
                                            }
                                        } else {
                                            echo "Nenhum comentário encontrado para esta cifra.";
                                        }
                                    } else {
                                        echo "Erro ao executar a consulta de comentários: " . $stmt_comentarios_cifra->error;
                                    }
                        
                                    $stmt_comentarios_cifra->close();
                                    ?>
                        
                                </div>
                            </div>
                        
                            <!-- Barra lateral -->
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
                        <?php
                    } else {
                        echo "<p>Cifra não encontrada.</p>";
                    }
                } else {
                    echo "Erro ao executar a consulta: " . $stmt_cifra->error;
                }

                $stmt_cifra->close();
            } else {
                echo "<p>ID da cifra não fornecido.</p>";
            }
        } else {
            echo "<p>Usuário não encontrado.</p>";
        }
    } else {
        echo "Erro ao executar a consulta: " . $stmt_user->error;
    }

    $stmt_user->close();
} else {
    // Lidar com o caso em que 'id' não está definido na sessão (redirecionar ou exibir um erro)
    header("Location: login.php"); // Você pode redirecionar
}
?>

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jan-2024 às 11:00
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acordes`
--

CREATE TABLE `acordes` (
  `ID` int(11) NOT NULL,
  `Acorde` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acordes/cifra`
--

CREATE TABLE `acordes/cifra` (
  `id_cifra` int(11) NOT NULL,
  `id_numero` int(11) NOT NULL,
  `id_acorde` int(11) NOT NULL,
  `duração` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `id_artista` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `membros` varchar(255) NOT NULL,
  `nacionalidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chords_tab`
--

CREATE TABLE `chords_tab` (
  `id_cifra` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `song_title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `chord_notation` text NOT NULL,
  `tab_notation` text NOT NULL,
  `id_acorde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Extraindo dados da tabela `chords_tab`
--

INSERT INTO `chords_tab` (`id_cifra`, `id_utilizador`, `song_title`, `artist`, `chord_notation`, `tab_notation`, `id_acorde`) VALUES
(17, 3, 'editado', '123123', 'editado com sucesso', 'C# G# C# F# A# D#', 0),
(18, 5, 'tOP', 'tt', 'tt', 'E A D B G e', 0),
(19, 3, 'este', 'este', 'e', 'E A D B G e', 0),
(20, 1, 'Radio Friendly Unit Shifter', 'Nirvana', '[Intro]\r\n \r\nA C G E B F# E F# E (x2)\r\n \r\nA5 C5 G5 E B5 F#5 E F#5 E (x2)\r\n \r\n \r\n[Refrão]\r\n \r\nA C    G    E    B F#  E  F#   E\r\n   Use just once,  and destroy,\r\nA C       G E B   F#     E F# E\r\n   Invasion of our  piracy\r\nA C     G    E B F# E F# E  A   C\r\n   Afterbirth    of a     nation\r\n    G      E  B     F#     E F# E\r\nStarve without your skeleton    key\r\nA C       G   E  B     F# E F# E\r\n   I love you for what I  am   not\r\nA C      G   E   B     F# E  F# E\r\n   I did not want what I  have  got\r\nA C       G  E    B     F#       E F# E\r\n   A blanket acned with cigarette     burns\r\nA C    G    E   B      F#    E F# E\r\n   Speak at once while taking     turns\r\n \r\n \r\n[Refrão]\r\n \r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E  B5 F#5 E F#5 E\r\n           What is wrong with me?\r\n \r\n \r\n[Verso]\r\n \r\nA C G     E    B       F#   E  F# E\r\n    Nothing to do with what you   think,\r\nA C    G  E B    F#   E F#  E\r\n    If you  ever think  at all\r\nA C     G    E    B   F# E  F#   E\r\n    Bi-polar opposites   attract,\r\nA C     G      E   B   F#   E F# E\r\n    All of a sudden my water     broke\r\nA C        G   E  B     F# E F# E\r\n    I love you for what I  am   not\r\nA C      G   E   B     F# E  F# E\r\n   I did not want what I  have  got\r\nA C      G   E    B     F#       E F# E\r\n   A blanket acned with cigarette      burns\r\nA C    G  E   B F#    E  F#  E\r\n   Second-rate  third degree burns\r\n \r\n \r\n[Refrão]\r\n \r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5        F#5   E F#5  E\r\n           What do I think?  I think\r\n \r\nA5 C5 G5 E B5 F#5 E F#5 E\r\n \r\n \r\n[Meio]\r\n \r\nC5 E5              A5     G5\r\n   Hate, hate your enemies\r\n     C5    E5     A5     G5\r\nSave,  save  your friends\r\n     C5    E5          A5 G5\r\nFind,  find  your place\r\n      C5     E5\r\nSpeak,  speak  the truth\r\n \r\n \r\n[Refrão]\r\n \r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5     F#5     E  F#5   E\r\n           What do   I think?   I think\r\n \r\n \r\n[Instrumental]\r\n \r\nA C G E B F# E F# E (x2)\r\n \r\n \r\n[Verso]\r\n \r\nA C    G    E    B F#  E  F#   E\r\n   Use just once,  and destroy,\r\nA C       G E B   F#     E F# E\r\n   Invasion of our  piracy\r\nA C     G    E B F# E F# E  A   C\r\n   Afterbirth    of a     nation\r\n    G      E  B     F#     E F# E\r\nStarve without your skeleton    key\r\nA C       G   E  B     F# E F# E\r\n   I love you for what I  am   not\r\nA C      G   E   B     F# E  F# E\r\n   I did not want what I  have  got\r\nA C       G  E    B     F#       E F# E\r\n   A blanket acned with cigarette     burns\r\nA C    G    E   B      F#    E F# E\r\n   Speak at once while taking     turns\r\n \r\n \r\n[Refrão]\r\n \r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5     F#5     E  F#5   E\r\n           What do   I think?   I think', 'Eb Ab Db Bb Gb eb', 0),
(21, 1, 'Happiness Is A Warm Gun', 'The Beatles', '  Am7    Am6       Em9      Em     Am7            \r\nShe\'s not a girl  who misses much        \r\nAm6    Em9       Em\r\nDu du du du du du      Oh yeah\r\nDm6                                                              Am\r\n She\'s well acquainted with the touch of the velvet hand like a lizard on a window pane               \r\n    Dm6                                                    Am\r\nThe man in the crowd with the multicolored mirrors on his hobnail boots\r\nDm6                                                  Am\r\nLying with his eyes while his hands are busy working overtime\r\nDm6                                                    Am\r\n A soap impression of his wife which he ate and donated to the national trust\r\n\r\nRiff 1: A7 C  Am\r\n\r\nE|-----------------------------------------------------------------------------------------|\r\nB|-----------------------------------------------------------------------------------------|\r\nG|-----------------------------------------------------------------------------------------|\r\nD|-----------------------------------------------------------------------------------------|\r\nA|----\\7--8b--3---3--5b~--3-----/7--8b--3---3---/7--8b--/7--7b-h8~~-----3---3--5b~--3------|\r\nE|--------------5-----------5-------------5-------------------------------5-----------5----|\r\n\r\n\r\nA7                                                                   A7  A#7  B7  C\r\nI need a fix \'cause I\'m goin\' down, down to the bits that I left up to________own\r\nC                        A\r\nI need a fix \'cause I\'m goin\' down\r\n\r\n A7              C  (riff 2)      A7              G  (riff 3)\r\nMother Superior jump the gun     Mother Superior jump the gun     (x3)\r\n\r\nRiff 2:                              Riff 3:\r\n\r\nE|-------------------|              E|--------------------|\r\nB|-------------------|              B|--------------------|\r\nG|----------2-------|             G|--------------------|\r\nD|----2-5---5-2---|             D|----------2---------|\r\nA|---/3-------------|              A|------2-5---5-2-----|\r\nE|-------------------|             E|---/3-----------3---|\r\n\r\n\r\nC       Am        F       G    C       Am        F           G\r\n  Happiness is a warm gun        Happiness is a warm gun, mama\r\nC    Am        F      G     C       Am      F          G\r\nWhen I hold you in my arms   And I feel my finger on your trigger  \r\nC     Am    F              G          C\r\n  I know nobody can do me no harm, because\r\n      Am        F           G\r\nhappiness is a warm gun, mama\r\nC      Am        F               G\r\n Happiness is a warm gun, yes it is\r\nFm\r\nHappiness is a warm, yes it is...  \r\n   C         Am     F       G\r\nGun   (Happiness...   Bang bang, shoot shoot)\r\n                     C    Am        F    G                           C\r\nDon\'t you know that happiness is a warm gun, mama?  \r\n(is a warm gun, yeah)\r\n', 'E A D B G e', 0),
(22, 1, 'Butterfly', 'WEEZER', 'Riff 1\r\neb|--0------------|\r\nBb|---3-1-0---0-1-|\r\nGb|---------2-----|\r\nDb|---------------|\r\nAb|---------------|\r\nEb|---------------|\r\n \r\nRiff 2\r\neb|--0--------|\r\nBb|---3-1-0-0-|\r\nGb|--------2--|\r\nDb|-----------|\r\nAb|-----------|\r\nEb|-----------|\r\n \r\nRiff 3\r\neb|-----1---------|\r\nBb|-------3-1-0---|\r\nGb|-------------2-|\r\nDb|---------------|\r\nAb|--3------------|\r\nEb|---------------|\r\n \r\n \r\n[Verse]\r\n \r\nG     Em            C\r\nYesterday I went outside\r\n        D             G\r\nWith my momma\'s mason jar\r\n         Em           C  Riff 1\r\nCaught a lovely butterfly\r\nG      Em        C\r\nWhen I woke up today\r\n          D           G\r\nLooked in on my fairy pet\r\n          Em          C\r\nShe had withered all away\r\nRiff 1                 D\r\nNo more sighing in her breast\r\n \r\n \r\n[Chorus]\r\n \r\n                     G\r\nI\'m sorry for what I did\r\n      Em           C\r\nI did what my body told me to\r\n  D                     G\r\nI didn\'t mean to do you harm\r\n      G7              C      D       G\r\nEvery time I pin down what I think I want\r\nRiff 2    Em\r\nIt slips away\r\n         C\r\nThere it goes slips away\r\n \r\n \r\n[Verse]\r\n \r\nG         Em             C\r\nSmell you on my hand for days\r\n        D              G\r\nI can\'t wash away your scent\r\n      Em                C Riff 1\r\nI\'m a dog then you\'re a bitch\r\nG         Em                C\r\n  I guess you\'re as real as me\r\n      D               G\r\nMaybe I can live with that\r\n      Em       C\r\nMaybe I need fantasy\r\nRiff 1                D\r\nLife of chasing butterfly\r\n \r\n \r\n[Chorus]\r\n \r\n                     G\r\nI\'m sorry for what I did\r\n      Em           C\r\nI did what my body told me to\r\n  D                     G\r\nI didn\'t mean to do you harm\r\n      G7              C      D       G\r\nEvery time I pin down what I think I want\r\nRiff 2    Em\r\nIt slips away\r\n         C\r\nThere it goes slips away\r\n \r\n \r\n[Verse]\r\n \r\nG      Em              C\r\nI told you I would return\r\n         D               G\r\nWhen the robin makes his nest\r\n            Em      C   Riff 3\r\nBut I ain\'t never coming back\r\nG              Em         C C/B  G\r\nI\'m sorry, I\'m sorry, I\'m sorry', 'E A D B G e', 0),
(23, 5, 'FELIz natal', 'papai noel', 'FELIZ FELIZ NATALE', 'E A D B G e', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `comentario` text NOT NULL,
  `data_publicacao` timestamp NULL DEFAULT current_timestamp(),
  `id_cifra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `comentario`, `data_publicacao`, `id_cifra`) VALUES
(1, '123', 'test', '2023-11-21 09:11:20', NULL),
(2, 'Gabruel', 'asaaa', '2023-11-23 14:38:39', NULL),
(3, 'tsk', 'teste', '2023-12-14 17:55:53', NULL),
(4, 'tsk', 'muito bem', '2023-12-14 17:56:13', NULL),
(6, 'tsk', 'teste', '2023-12-14 18:22:11', NULL),
(12, 'tsk', 'coooooooco', '2023-12-14 18:46:32', 17),
(15, 'Gabruel', 'Teste Comentário 1', '2023-12-20 09:26:18', 20),
(16, 'Gabruel', 'Comentario cifra bitous', '2023-12-20 09:27:01', 21),
(17, 'Gabruel', 'Cifra uizer comentario', '2023-12-20 09:27:26', 22),
(18, 'tt', 'teste', '2023-12-20 11:37:11', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis`
--

CREATE TABLE `perfis` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Nome_usuario` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Extraindo dados da tabela `perfis`
--

INSERT INTO `perfis` (`ID`, `Email`, `Senha`, `Nome`, `Nome_usuario`, `admin`) VALUES
(1, 'gabriel@gmail.com', '1234', 'Gabriel', 'Gabruel', 0),
(3, 'tanjil99games@gmail.com', 'voutersida2005', 'tanjil', 'tsk', 0),
(4, 'admin@chordrealm.com', 'admin', 'admin', 'admin', 1),
(5, 'tt', 'tt', 'tt', 'tt', 0),
(6, '', '', '', '', 0),
(7, '1234@gmail.com', '1234', 'Gabriel', 'utilizador', 0),
(8, 'pedrorolagrande@gmail.com', 'leitedeminhapica', 'Pedro Leite ', 'leitedeminhapica', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acordes`
--
ALTER TABLE `acordes`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `acordes/cifra`
--
ALTER TABLE `acordes/cifra`
  ADD PRIMARY KEY (`id_cifra`,`id_numero`),
  ADD KEY `id_acorde` (`id_acorde`);

--
-- Índices para tabela `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id_artista`);

--
-- Índices para tabela `chords_tab`
--
ALTER TABLE `chords_tab`
  ADD PRIMARY KEY (`id_cifra`),
  ADD KEY `id_utilizador` (`id_utilizador`) USING BTREE,
  ADD KEY `id_acorde` (`id_acorde`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comentarios_cifra` (`id_cifra`);

--
-- Índices para tabela `perfis`
--
ALTER TABLE `perfis`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acordes`
--
ALTER TABLE `acordes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `artista`
--
ALTER TABLE `artista`
  MODIFY `id_artista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `chords_tab`
--
ALTER TABLE `chords_tab`
  MODIFY `id_cifra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `perfis`
--
ALTER TABLE `perfis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `acordes`
--
ALTER TABLE `acordes`
  ADD CONSTRAINT `acordes_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `acordes/cifra` (`id_acorde`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `acordes/cifra`
--
ALTER TABLE `acordes/cifra`
  ADD CONSTRAINT `acordes/cifra_ibfk_1` FOREIGN KEY (`id_cifra`) REFERENCES `chords_tab` (`id_cifra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `artista_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `chords_tab` (`id_cifra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `chords_tab`
--
ALTER TABLE `chords_tab`
  ADD CONSTRAINT `chords_tab_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `perfis` (`ID`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_cifra` FOREIGN KEY (`id_cifra`) REFERENCES `chords_tab` (`id_cifra`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

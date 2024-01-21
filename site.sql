-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2024 at 04:49 PM
-- Server version: 8.0.35-0ubuntu0.20.04.1
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `acordes`
--

CREATE TABLE `acordes` (
  `ID` int NOT NULL,
  `Acorde` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acordes/cifra`
--

CREATE TABLE `acordes/cifra` (
  `id_cifra` int NOT NULL,
  `id_numero` int NOT NULL,
  `id_acorde` int NOT NULL,
  `duração` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artista`
--

CREATE TABLE `artista` (
  `id_artista` int NOT NULL,
  `Nome` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `membros` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidade` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chords_tab`
--

CREATE TABLE `chords_tab` (
  `id_cifra` int NOT NULL,
  `id_utilizador` int NOT NULL,
  `song_title` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `artist` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `chord_notation` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `tab_notation` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `chords_tab`
--

INSERT INTO `chords_tab` (`id_cifra`, `id_utilizador`, `song_title`, `artist`, `chord_notation`, `tab_notation`, `video`) VALUES
(17, 3, 'editado', '123123', 'editado com sucesso', 'C# G# C# F# A# D#', ''),
(18, 5, 'tOP', 'tt', 'tt', 'E A D B G e', ''),
(19, 3, 'este', 'este', 'e', 'E A D B G e', ''),
(20, 1, 'Radio Friendly Unit Shifter', 'Nirvana', '[Intro]\r\n \r\nA C G E B F# E F# E (x2)\r\n \r\nA5 C5 G5 E B5 F#5 E F#5 E (x2)\r\n \r\n \r\n[Refrão]\r\n \r\nA C    G    E    B F#  E  F#   E\r\n   Use just once,  and destroy,\r\nA C       G E B   F#     E F# E\r\n   Invasion of our  piracy\r\nA C     G    E B F# E F# E  A   C\r\n   Afterbirth    of a     nation\r\n    G      E  B     F#     E F# E\r\nStarve without your skeleton    key\r\nA C       G   E  B     F# E F# E\r\n   I love you for what I  am   not\r\nA C      G   E   B     F# E  F# E\r\n   I did not want what I  have  got\r\nA C       G  E    B     F#       E F# E\r\n   A blanket acned with cigarette     burns\r\nA C    G    E   B      F#    E F# E\r\n   Speak at once while taking     turns\r\n \r\n \r\n[Refrão]\r\n \r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E  B5 F#5 E F#5 E\r\n           What is wrong with me?\r\n \r\n \r\n[Verso]\r\n \r\nA C G     E    B       F#   E  F# E\r\n    Nothing to do with what you   think,\r\nA C    G  E B    F#   E F#  E\r\n    If you  ever think  at all\r\nA C     G    E    B   F# E  F#   E\r\n    Bi-polar opposites   attract,\r\nA C     G      E   B   F#   E F# E\r\n    All of a sudden my water     broke\r\nA C        G   E  B     F# E F# E\r\n    I love you for what I  am   not\r\nA C      G   E   B     F# E  F# E\r\n   I did not want what I  have  got\r\nA C      G   E    B     F#       E F# E\r\n   A blanket acned with cigarette      burns\r\nA C    G  E   B F#    E  F#  E\r\n   Second-rate  third degree burns\r\n \r\n \r\n[Refrão]\r\n \r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5        F#5   E F#5  E\r\n           What do I think?  I think\r\n \r\nA5 C5 G5 E B5 F#5 E F#5 E\r\n \r\n \r\n[Meio]\r\n \r\nC5 E5              A5     G5\r\n   Hate, hate your enemies\r\n     C5    E5     A5     G5\r\nSave,  save  your friends\r\n     C5    E5          A5 G5\r\nFind,  find  your place\r\n      C5     E5\r\nSpeak,  speak  the truth\r\n \r\n \r\n[Refrão]\r\n \r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5     F#5     E  F#5   E\r\n           What do   I think?   I think\r\n \r\n \r\n[Instrumental]\r\n \r\nA C G E B F# E F# E (x2)\r\n \r\n \r\n[Verso]\r\n \r\nA C    G    E    B F#  E  F#   E\r\n   Use just once,  and destroy,\r\nA C       G E B   F#     E F# E\r\n   Invasion of our  piracy\r\nA C     G    E B F# E F# E  A   C\r\n   Afterbirth    of a     nation\r\n    G      E  B     F#     E F# E\r\nStarve without your skeleton    key\r\nA C       G   E  B     F# E F# E\r\n   I love you for what I  am   not\r\nA C      G   E   B     F# E  F# E\r\n   I did not want what I  have  got\r\nA C       G  E    B     F#       E F# E\r\n   A blanket acned with cigarette     burns\r\nA C    G    E   B      F#    E F# E\r\n   Speak at once while taking     turns\r\n \r\n \r\n[Refrão]\r\n \r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5      F#5  E F#5 E\r\n           What is wrong  with me?\r\nA5 C5 G5 E B5     F#5     E  F#5   E\r\n           What do   I think?   I think', 'Eb Ab Db Bb Gb eb', ''),
(21, 1, 'Happiness Is A Warm Gun', 'The Beatles', '  Am7    Am6       Em9      Em     Am7            \r\nShe\'s not a girl  who misses much        \r\nAm6    Em9       Em\r\nDu du du du du du      Oh yeah\r\nDm6                                                              Am\r\n She\'s well acquainted with the touch of the velvet hand like a lizard on a window pane               \r\n    Dm6                                                    Am\r\nThe man in the crowd with the multicolored mirrors on his hobnail boots\r\nDm6                                                  Am\r\nLying with his eyes while his hands are busy working overtime\r\nDm6                                                    Am\r\n A soap impression of his wife which he ate and donated to the national trust\r\n\r\nRiff 1: A7 C  Am\r\n\r\nE|-----------------------------------------------------------------------------------------|\r\nB|-----------------------------------------------------------------------------------------|\r\nG|-----------------------------------------------------------------------------------------|\r\nD|-----------------------------------------------------------------------------------------|\r\nA|----\\7--8b--3---3--5b~--3-----/7--8b--3---3---/7--8b--/7--7b-h8~~-----3---3--5b~--3------|\r\nE|--------------5-----------5-------------5-------------------------------5-----------5----|\r\n\r\n\r\nA7                                                                   A7  A#7  B7  C\r\nI need a fix \'cause I\'m goin\' down, down to the bits that I left up to________own\r\nC                        A\r\nI need a fix \'cause I\'m goin\' down\r\n\r\n A7              C  (riff 2)      A7              G  (riff 3)\r\nMother Superior jump the gun     Mother Superior jump the gun     (x3)\r\n\r\nRiff 2:                              Riff 3:\r\n\r\nE|-------------------|              E|--------------------|\r\nB|-------------------|              B|--------------------|\r\nG|----------2-------|             G|--------------------|\r\nD|----2-5---5-2---|             D|----------2---------|\r\nA|---/3-------------|              A|------2-5---5-2-----|\r\nE|-------------------|             E|---/3-----------3---|\r\n\r\n\r\nC       Am        F       G    C       Am        F           G\r\n  Happiness is a warm gun        Happiness is a warm gun, mama\r\nC    Am        F      G     C       Am      F          G\r\nWhen I hold you in my arms   And I feel my finger on your trigger  \r\nC     Am    F              G          C\r\n  I know nobody can do me no harm, because\r\n      Am        F           G\r\nhappiness is a warm gun, mama\r\nC      Am        F               G\r\n Happiness is a warm gun, yes it is\r\nFm\r\nHappiness is a warm, yes it is...  \r\n   C         Am     F       G\r\nGun   (Happiness...   Bang bang, shoot shoot)\r\n                     C    Am        F    G                           C\r\nDon\'t you know that happiness is a warm gun, mama?  \r\n(is a warm gun, yeah)\r\n', 'E A D B G e', ''),
(22, 1, 'Butterfly', 'WEEZER', 'Riff 1\r\neb|--0------------|\r\nBb|---3-1-0---0-1-|\r\nGb|---------2-----|\r\nDb|---------------|\r\nAb|---------------|\r\nEb|---------------|\r\n \r\nRiff 2\r\neb|--0--------|\r\nBb|---3-1-0-0-|\r\nGb|--------2--|\r\nDb|-----------|\r\nAb|-----------|\r\nEb|-----------|\r\n \r\nRiff 3\r\neb|-----1---------|\r\nBb|-------3-1-0---|\r\nGb|-------------2-|\r\nDb|---------------|\r\nAb|--3------------|\r\nEb|---------------|\r\n \r\n \r\n[Verse]\r\n \r\nG     Em            C\r\nYesterday I went outside\r\n        D             G\r\nWith my momma\'s mason jar\r\n         Em           C  Riff 1\r\nCaught a lovely butterfly\r\nG      Em        C\r\nWhen I woke up today\r\n          D           G\r\nLooked in on my fairy pet\r\n          Em          C\r\nShe had withered all away\r\nRiff 1                 D\r\nNo more sighing in her breast\r\n \r\n \r\n[Chorus]\r\n \r\n                     G\r\nI\'m sorry for what I did\r\n      Em           C\r\nI did what my body told me to\r\n  D                     G\r\nI didn\'t mean to do you harm\r\n      G7              C      D       G\r\nEvery time I pin down what I think I want\r\nRiff 2    Em\r\nIt slips away\r\n         C\r\nThere it goes slips away\r\n \r\n \r\n[Verse]\r\n \r\nG         Em             C\r\nSmell you on my hand for days\r\n        D              G\r\nI can\'t wash away your scent\r\n      Em                C Riff 1\r\nI\'m a dog then you\'re a bitch\r\nG         Em                C\r\n  I guess you\'re as real as me\r\n      D               G\r\nMaybe I can live with that\r\n      Em       C\r\nMaybe I need fantasy\r\nRiff 1                D\r\nLife of chasing butterfly\r\n \r\n \r\n[Chorus]\r\n \r\n                     G\r\nI\'m sorry for what I did\r\n      Em           C\r\nI did what my body told me to\r\n  D                     G\r\nI didn\'t mean to do you harm\r\n      G7              C      D       G\r\nEvery time I pin down what I think I want\r\nRiff 2    Em\r\nIt slips away\r\n         C\r\nThere it goes slips away\r\n \r\n \r\n[Verse]\r\n \r\nG      Em              C\r\nI told you I would return\r\n         D               G\r\nWhen the robin makes his nest\r\n            Em      C   Riff 3\r\nBut I ain\'t never coming back\r\nG              Em         C C/B  G\r\nI\'m sorry, I\'m sorry, I\'m sorry', 'E A D B G e', ''),
(23, 5, 'FELIz natal', 'papai noel', 'FELIZ FELIZ NATALE', 'E A D B G e', ''),
(24, 3, 'What i\'ve done', 'Linking Park', 'testestestestestes', 'Eb Ab Db Bb Gb eb', 'https://www.youtube.com/watch?v=8sgycukafqQ');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `comentario` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `data_publicacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cifra` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `comentarios`
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
-- Table structure for table `perfis`
--

CREATE TABLE `perfis` (
  `ID` int NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Senha` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Nome` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Nome_usuario` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `perfis`
--

INSERT INTO `perfis` (`ID`, `Email`, `Senha`, `Nome`, `Nome_usuario`, `admin`) VALUES
(1, 'gabriel@gmail.com', '1234', 'Gabriel', 'Gabruel', 0),
(3, 'tanjil99games@gmail.com', 'voutersida2005', 'tanjil', 'tsk', 0),
(4, 'admin@chordrealm.com', 'admin', 'admin', 'admin', 1),
(5, 'tt', 'tt', 'tt', 'tt', 0),
(6, '', '', '', '', 0),
(7, '1234@gmail.com', '1234', 'Gabriel', 'utilizador', 0),
(8, 'pedrorolagrande@gmail.com', 'leitedeminhapica', 'Pedro Leite ', 'leitedeminhapica', 0),
(9, 'jose@gmail.com', 'jose', 'josegomes', 'jose', 0),
(10, 'pass@gmail.com', 'pass', 'pass', 'pass', 0),
(11, 'pass123@gmail.com', '$2y$10$VlU589FGzJE7qaw7Thx1ZuBn4K8uIf.06YQJmOZlwnUdro26RG63G', 'pass123', 'pass123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acordes`
--
ALTER TABLE `acordes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `acordes/cifra`
--
ALTER TABLE `acordes/cifra`
  ADD PRIMARY KEY (`id_cifra`,`id_numero`),
  ADD KEY `id_acorde` (`id_acorde`);

--
-- Indexes for table `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id_artista`);

--
-- Indexes for table `chords_tab`
--
ALTER TABLE `chords_tab`
  ADD PRIMARY KEY (`id_cifra`),
  ADD KEY `id_utilizador` (`id_utilizador`) USING BTREE;

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comentarios_cifra` (`id_cifra`);

--
-- Indexes for table `perfis`
--
ALTER TABLE `perfis`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acordes`
--
ALTER TABLE `acordes`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artista`
--
ALTER TABLE `artista`
  MODIFY `id_artista` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chords_tab`
--
ALTER TABLE `chords_tab`
  MODIFY `id_cifra` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `perfis`
--
ALTER TABLE `perfis`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acordes`
--
ALTER TABLE `acordes`
  ADD CONSTRAINT `acordes_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `acordes/cifra` (`id_acorde`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acordes/cifra`
--
ALTER TABLE `acordes/cifra`
  ADD CONSTRAINT `acordes/cifra_ibfk_1` FOREIGN KEY (`id_cifra`) REFERENCES `chords_tab` (`id_cifra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `artista_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `chords_tab` (`id_cifra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chords_tab`
--
ALTER TABLE `chords_tab`
  ADD CONSTRAINT `chords_tab_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `perfis` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_cifra` FOREIGN KEY (`id_cifra`) REFERENCES `chords_tab` (`id_cifra`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

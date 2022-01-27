-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Sty 2022, 07:19
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `e-ksiegarnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(2, 'Adam Mickiewicz'),
(3, 'Clare Cassandra'),
(4, 'Mróz Remigiusz'),
(5, 'Pratchett Terry'),
(6, 'Coben Harlan'),
(7, 'Martin George R.R.'),
(8, 'Sparks Nicholas'),
(9, 'Hoover Colleen'),
(10, 'Sapkowski Andrzej'),
(11, 'praca zbiorowa'),
(12, 'Ruiz Zafón Carlos'),
(13, 'Tolkien J.R.R.'),
(14, 'Rowling J.K.'),
(15, 'Gaiman Neil'),
(16, 'Nesbø Jo'),
(17, 'Riordan Rick'),
(18, 'Gerritsen Tess'),
(19, 'Sanderson Brandon'),
(20, 'Maas Sarah J.'),
(21, 'Picoult Jodi'),
(22, 'Pilipiuk Andrzej'),
(23, 'Schmitt Éric-Emmanuel'),
(24, 'Murakami Haruki'),
(25, 'Dostojewski Fiodor'),
(26, 'Lem Stanisław'),
(27, 'Roberts Nora'),
(28, 'Canavan Trudi'),
(29, 'Masterton Graham'),
(30, 'Läckberg Camilla'),
(31, 'Austen Jane'),
(32, 'Green John'),
(33, 'Tokarczuk Olga'),
(34, 'Piekara Jacek'),
(35, 'Witkiewicz Magdalena'),
(36, 'García Márquez Gabriel'),
(37, 'Brown Dan'),
(38, 'Lewis C.S.'),
(39, 'Shepard Sara'),
(40, 'Miszczuk Katarzyna Bereni...'),
(41, 'Flanagan John'),
(42, 'Glukhovsky Dmitry'),
(43, 'Doyle Arthur Conan'),
(44, 'Moyes Jojo'),
(45, 'Cast Phyllis Christine'),
(46, 'Sandemo Margit'),
(47, 'Orwell George'),
(48, 'Musso Guillaume'),
(49, 'Rice Anne'),
(50, 'Mead Richelle'),
(51, 'Eco Umberto'),
(52, 'Grzędowicz Jarosław'),
(53, 'Larsson Stieg'),
(54, 'Michalak Katarzyna'),
(55, 'Dukaj Jacek'),
(56, 'Chmielewska Joanna'),
(57, 'Lingas-Łoniewska Agnieszk...'),
(58, 'Ćwiek Jakub'),
(59, 'Steinbeck John'),
(60, 'Dick Philip K.'),
(61, 'Kossakowska Maja Lidia'),
(62, 'Armentrout Jennifer L.'),
(63, 'Bonda Katarzyna'),
(64, 'Cast Kristin'),
(65, 'Bardugo Leigh'),
(66, 'Coelho Paulo'),
(67, 'Tołstoj Lew'),
(68, 'Ahern Cecelia'),
(69, 'Fitzpatrick Becca'),
(70, 'Dickens Charles'),
(71, 'Collins Suzanne'),
(72, 'Meyer Stephenie'),
(73, 'Roth Veronica'),
(74, 'Beckett Simon'),
(75, 'Małecki Jakub'),
(76, 'Nabokov Vladimir'),
(77, 'Puzo Mario'),
(78, 'Harari Yuval Noah'),
(79, 'Link Charlotte'),
(80, 'Simmons Dan'),
(81, 'Oliver Lauren'),
(82, 'Chmielarz Wojciech'),
(83, 'Żulczyk Jakub'),
(84, 'Le Guin Ursula K.'),
(85, 'Gregory Philippa'),
(86, 'Zusak Markus'),
(87, 'Montgomery Lucy Maud'),
(88, 'Vonnegut Kurt'),
(89, 'Brett Peter V.'),
(90, 'Smith Lisa Jane'),
(91, 'Follett Ken'),
(92, 'Ziemiański Andrzej'),
(93, 'Child Lee'),
(94, 'Kapuściński Ryszard'),
(95, 'Myśliwski Wiesław'),
(96, 'Miłoszewski Zygmunt'),
(97, 'Twardoch Szczepan'),
(98, 'Koontz Dean'),
(99, 'Bułhakow Michaił'),
(100, 'Card Orson Scott'),
(101, 'Kundera Milan'),
(102, 'Gier Kerstin'),
(103, 'Herbert Frank'),
(104, 'Vargas Llosa Mario'),
(105, 'Cass Kiera'),
(106, 'Stiefvater Maggie'),
(107, 'Wiśniewski Janusz Leon'),
(108, 'Mafi Tahereh'),
(109, 'Evans Richard Paul'),
(110, 'Forman Gayle'),
(111, 'Glines Abbi'),
(112, 'Orbitowski Łukasz'),
(113, 'Huxley Aldous'),
(114, 'Jadowska Aneta'),
(115, 'Grisham John'),
(116, 'Hannah Kristin'),
(117, 'Atwood Margaret'),
(118, 'Harris Charlaine'),
(119, 'Shakespeare William'),
(120, 'Cherezińska Elżbieta'),
(121, 'Dashner James'),
(122, 'Black Holly'),
(123, 'Szczygieł Mariusz'),
(124, 'Krajewski Marek'),
(125, 'Kate Lauren'),
(126, 'Young Samantha'),
(127, 'Bishop Anne'),
(128, 'Poe Edgar Allan'),
(129, 'Puzyńska Katarzyna'),
(130, 'Mankell Henning'),
(131, 'Marsden John'),
(132, 'Thorwald Jürgen'),
(133, 'Deaver Jeffery'),
(134, 'Riley Lucinda'),
(135, 'Bukowski Charles'),
(136, 'Lovecraft H.P.'),
(137, 'Wilde Oscar'),
(138, 'Musierowicz Małgorzata'),
(139, 'Daugherty Christi'),
(140, 'Simons Paullina'),
(141, 'Lee Harper'),
(142, 'Bator Joanna'),
(143, 'Patterson James'),
(144, 'Pawlikowska Beata'),
(145, 'Czornyj Max'),
(146, 'Andrews Virginia Cleo'),
(147, 'Dumas Aleksander'),
(148, 'Cabot Meg'),
(149, 'Kańtoch Anna'),
(150, 'Woolf Virginia'),
(151, 'Erikson Steven'),
(152, 'Caine Rachel'),
(153, 'Aveyard Victoria'),
(154, 'Hosseini Khaled'),
(155, 'McCarthy Cormac'),
(156, 'Keeland Vi'),
(157, 'Schwab Victoria'),
(158, 'Steel Danielle'),
(159, 'Komuda Jacek'),
(160, 'Sheridan Mia'),
(161, 'Gombrowicz Witold'),
(162, 'de la Cruz Melissa'),
(163, 'Aleksijewicz Swietłana'),
(164, 'Sienkiewicz Henryk'),
(165, 'Bracken Alexandra'),
(166, 'Paris B.A.'),
(167, 'Wharton William'),
(168, 'autor nieznany'),
(169, 'Harris Thomas'),
(170, 'Gabaldon Diana'),
(171, 'Shannon Samantha'),
(172, 'Kava Alex'),
(173, 'Levithan David'),
(174, 'Springer Filip'),
(175, 'Chamberlain Diane'),
(176, 'Fisher Tarryn'),
(177, 'Remarque Erich Maria'),
(178, 'Fitzgerald F. Scott'),
(179, 'Stasiuk Andrzej'),
(180, 'Tucker K.A.'),
(181, 'Cornwell Bernard'),
(182, 'Gargaś Gabriela'),
(183, 'Haner K.N.'),
(184, 'Slaughter Karin'),
(185, 'Tartt Donna'),
(186, 'Yanagihara Hanya'),
(187, 'Kafka Franz'),
(188, 'Rowell Rainbow'),
(189, 'Moccia Federico'),
(190, 'Quick Matthew'),
(191, 'Grabowska Ałbena'),
(192, 'Hawking Stephen'),
(193, 'Mirek Krystyna'),
(194, 'Cook Robin'),
(195, 'Mann Thomas'),
(196, 'Tochman Wojciech'),
(197, 'Brontë Charlotte'),
(198, 'Rudnicka Olga'),
(199, 'Hemingway Ernest'),
(200, 'Ward Penelope'),
(201, 'Grant Michael'),
(202, 'Day Sylvia June'),
(203, 'Bradbury Ray'),
(204, 'Dawkins Richard'),
(205, 'Camus Albert'),
(206, 'Houellebecq Michel'),
(207, 'Palahniuk Chuck'),
(208, 'Boyne John'),
(209, 'Irving John'),
(210, 'Gardner Lisa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_polish_ci NOT NULL,
  `author` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `pages` varchar(8) COLLATE utf8mb4_polish_ci NOT NULL,
  `path` varchar(800) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `pages`, `path`) VALUES
(1, 'Pan Tadeusz', 2, 9, '308', 'assets/images/books/i-pan-tadeusz.jpg'),
(2, 'Rok 1984', 47, 1, '328', 'assets/images/books/1984.jpg'),
(3, 'Stary człowiek i morze', 199, 3, '456', 'assets/images/books/stary czlowiek i morze.jpg'),
(4, 'Gra o tron', 7, 1, ' 694', 'assets/images/books/got.jpg'),
(5, 'Game of Thrones 2: Clash of Kings - George R. R. Martin', 7, 1, '928', 'assets/images/books/got2.jpg'),
(6, 'Quo Vadis', 164, 3, '536', 'assets/images/books/quo-vadis.jpg'),
(7, 'Dla Ciebie wszystko', 8, 5, '304', 'assets/images/books/dlacbwszystko.jpg'),
(8, 'War Lord\r\n', 181, 1, '567', 'assets/images/books/warlord.jpg'),
(9, 'Epidemia', 194, 2, '366', 'assets/images/books/epidemia.jpg'),
(10, 'Brief Answers to the Big Questions', 192, 10, '256', 'assets/images/books/biganswer.jpg'),
(11, 'Monster\r\n', 201, 1, '390', 'assets/images/books/monster.jpg'),
(12, 'W jednej osobie\r\n', 209, 8, '432', 'assets/images/books/wjednejosobie.jpg'),
(13, 'Moje śliczne', 184, 3, '421', 'assets/images/books/mojesli.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Fantasy.'),
(2, 'Sci-Fi.'),
(3, 'Mystery.'),
(4, 'Thriller.'),
(5, 'Romance.'),
(6, 'Westerns.'),
(7, 'Dystopian.'),
(8, 'Contemporary.'),
(9, 'Poem'),
(10, 'autobiography');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_polish_ci NOT NULL,
  `firstName` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(1, 'Heisenberg', 'Walter', 'White', 'Walter@white.pl', '60cd3bdda00ceb496ef83550d37fc92d', '2022-01-21 00:00:00', 'assetsimagesprofile-picshead_emerald.png'),
(2, 'ADMIN', 'Administrator', 'Pierwszy', 'Admin@eksiegarnia.pl', '0062d21c1a97acad0fff653df56849b2', '2022-01-21 00:00:00', 'assetsimagesprofile-picshead_emerald.png'),
(3, 'oliwia99', 'Oliwia', 'Kowalska', 'Oliwia@wp.pl', '0062d21c1a97acad0fff653df56849b2', '2022-01-23 00:00:00', 'assetsimagesprofile-picshead_emerald.png'),
(4, 'user1', 'User1', 'User1', 'User1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2022-01-26 00:00:00', 'assetsimagesprofile-picshead_emerald.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczone`
--

CREATE TABLE `wypozyczone` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_polish_ci NOT NULL,
  `bookId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `wypozyczone`
--

INSERT INTO `wypozyczone` (`id`, `username`, `bookId`) VALUES
(2, 'ADMIN', 2),
(3, 'ADMIN', 8),
(38, 'ADMIN', 3),
(39, 'ADMIN', 5),
(40, 'Heisenberg', 9),
(41, 'Heisenberg', 5),
(42, 'Heisenberg', 10),
(43, 'Heisenberg', 8),
(44, 'Heisenberg', 13),
(45, 'Heisenberg', 8),
(46, 'Heisenberg', 8),
(98, 'user1', 7),
(99, 'user1', 7);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wypozyczone`
--
ALTER TABLE `wypozyczone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT dla tabeli `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `wypozyczone`
--
ALTER TABLE `wypozyczone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

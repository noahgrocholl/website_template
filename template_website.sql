-- phpMyAdmin SQL Dump
-- version 5.0.4deb2ubuntu5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 23. Apr 2022 um 16:51
-- Server-Version: 8.0.28-0ubuntu0.21.10.3
-- PHP-Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `template_website`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int NOT NULL,
  `number` int NOT NULL,
  `item_name` text NOT NULL,
  `item_keyingredients` text NOT NULL,
  `item_price` float NOT NULL,
  `item_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `menu_items`
--

INSERT INTO `menu_items` (`id`, `number`, `item_name`, `item_keyingredients`, `item_price`, `item_category`) VALUES
(1, 9, 'Gemischter Salat klein', 'Salat, Tomaten & Gurken', 4.7, 1),
(2, 9, 'Gemischter Salat groß', 'Salat, Tomaten & Gurken', 6.2, 1),
(3, 10, 'Insalata Pomodori klein', 'Salat, Tomaten & Zwiebel', 4.9, 1),
(4, 10, 'Insalata Pomodori groß', 'Salat, Tomaten & Zwiebel', 6.2, 1),
(5, 11, 'Tomaten und Mozzarella klein', 'Tomaten & Mozzarella', 6.4, 1),
(6, 11, 'Tomaten und Mozzarella groß', 'Tomaten & Mozzarella', 7.4, 1),
(7, 12, 'Insalata Carciofini klein', 'Salat & Artischoken', 5.7, 1),
(8, 12, 'Insalata Carciofini groß', 'Salat & Artischoken', 7.9, 1),
(9, 13, 'Italienische Salatplatte klein', 'Salat, Tomaten, Gurke & Thunfisch', 6.4, 1),
(10, 13, 'Italienische Salatplatte groß', 'Salat, Tomaten, Gurke & Thunfisch', 7.9, 1),
(11, 14, 'Insalata Prinzess klein', 'Salat, Tomaten & Gurke (Dressing Kräuter oder Joghurt)', 6.4, 1),
(12, 14, 'Insalata Prinzess groß', 'Salat, Tomaten & Gurke (Dressing Kräuter oder Joghurt)', 7.9, 1),
(13, 15, 'Insalata Mista klein', 'Salat, Thunfisch, Schinken & Ei', 6.9, 1),
(14, 15, 'Insalata Mista groß', 'Salat, Thunfisch, Schinken & Ei', 7.9, 1),
(15, 16, 'Insalata Caprese klein', 'Salat, Tomaten, Mozzarella & Basilikum', 6.9, 1),
(16, 16, 'Insalata Caprese groß', 'Salat, Tomaten, Mozzarella & Basilikum', 7.9, 1),
(17, 23, 'Pizza Margherita klein', 'Tomaten & Käse', 4.4, 2),
(18, 23, 'Pizza Margherita groß', 'Tomaten & Käse', 7.2, 2),
(19, 24, 'Pizza Sicilia klein', 'Zwiebeln', 4.7, 2),
(20, 24, 'Pizza Sicilia groß', 'Zwiebeln', 7.4, 2),
(21, 25, 'Pizza Salami klein', 'Salami', 4.9, 2),
(22, 25, 'Pizza Salami groß', 'Salami', 7.7, 2),
(23, 26, 'Pizza Funghi klein', 'Champignons', 4.9, 2),
(24, 26, 'Pizza Funghi groß', 'Champignons', 7.7, 2),
(25, 27, 'Pizza Prosciutto klein', 'Schinken & Pilze', 4.9, 2),
(26, 27, 'Pizza Prosciutto groß', 'Schinken & Pilze', 8.2, 2),
(27, 28, 'Pizza Davide klein', 'Schinken, Pilze & Ei', 5.4, 2),
(28, 28, 'Pizza Davide groß', 'Schinken, Pilze & Ei', 8.2, 2),
(29, 29, 'Pizza Melissano klein', 'Peperoni, Pilze & Artischocken', 5.4, 2),
(30, 29, 'Pizza Melissano groß', 'Peperoni, Pilze & Artischocken', 8.2, 2),
(31, 30, 'Pizza Capricciosa klein', 'Schinken, Oliven & Artischocken', 5.4, 2),
(32, 30, 'Pizza Capricciosa groß', 'Schinken, Oliven & Artischocken', 8.4, 2),
(33, 31, 'Pizza Trattoria klein', 'Schinken, Oliven, Peperoni, Artischocken & Zwiebel', 5.4, 2),
(34, 31, 'Pizza Trattoria groß', 'Schinken, Oliven, Peperoni, Artischocken & Zwiebel', 8.7, 2),
(35, 32, 'Pizza 4 Stagioni klein', 'Schinken, Salami, Pilze, Peperoni, Oliven & Artischocken', 5.4, 2),
(36, 32, 'Pizza 4 Stagioni groß', 'Schinken, Salami, Pilze, Peperoni, Oliven & Artischocken', 8.7, 2),
(37, 33, 'Pizza Calzone klein', 'Schinken, Zwiebeln & Pilze', 5.4, 2),
(38, 33, 'Pizza Calzone groß', 'Schinken, Zwiebeln & Pilze', 8.7, 2),
(39, 34, 'Pizza Sardelle klein', 'Oliven, Kapern, Artischocken & Sardellen', 5.9, 2),
(40, 34, 'Pizza Sardelle groß', 'Oliven, Kapern, Artischocken & Sardellen', 9.2, 2),
(41, 35, 'Pizza Frutti di Mare klein', 'Meeresfrüchte', 5.9, 2),
(42, 35, 'Pizza Frutti di Mare groß', 'Meeresfrüchte', 9.9, 2),
(43, 36, 'Pizza Milano klein', 'Salami & Pilze', 4.9, 2),
(44, 36, 'Pizza Milano groß', 'Salami & Pilze', 8.2, 2),
(45, 37, 'Pizza Firenze klein', 'Schinken, Salami & Peperoni', 4.9, 2),
(46, 37, 'Pizza Firenze groß', 'Schinken, Salami & Peperoni', 8.2, 2),
(47, 38, 'Pizza Riviera klein', 'Salami & Peperoni', 4.9, 2),
(48, 38, 'Pizza Riviera groß', 'Salami & Peperoni', 8.2, 2),
(49, 39, 'Pizza Cattolica klein', 'Schinken', 4.9, 2),
(50, 39, 'Pizza Cattolica groß', 'Schinken', 8.2, 2),
(51, 40, 'Pizza Roma klein', 'Schinken, Salami & Pilze', 5.4, 2),
(52, 40, 'Pizza Roma groß', 'Schinken, Salami & Pilze', 8.2, 2),
(53, 41, 'Pizza Lecce klein', 'Schinken, Sardelle & Oliven', 5.9, 2),
(54, 41, 'Pizza Lecce groß', 'Schinken, Sardelle & Oliven', 8.4, 2),
(55, 42, 'Pizza Pappa klein', 'KEIN Käse, Schinken, Salami, Paprika, Peperoni & Zwiebeln', 5.4, 2),
(56, 42, 'Pizza Pappa groß', 'KEIN Käse, Schinken, Salami, Paprika, Peperoni & Zwiebeln', 8.4, 2),
(57, 43, 'Pizza Vegetarisch klein', 'Brokkoli, Aubergine & Zucchini', 5.4, 2),
(58, 43, 'Pizza Vegetarisch groß', 'Brokkoli, Aubergine & Zucchini', 8.4, 2),
(59, 44, 'Pizza Hawaii klein', 'Schinken & Ananas', 5.4, 2),
(60, 44, 'Pizza Hawaii groß', 'Schinken & Ananas', 9.2, 2),
(61, 45, 'Pizza Cocco klein', 'Tomaten, Mozzarella & Basilikum', 5.4, 2),
(62, 45, 'Pizza Cocco groß', 'Tomaten, Mozzarella & Basilikum', 9.2, 2),
(63, 46, 'Pizza Spinat klein', 'Spinat & Brokkoli', 5.4, 2),
(64, 46, 'Pizza Spinat groß', 'Spinat & Brokkoli', 9.2, 2),
(65, 47, 'Pizza Tonno klein', 'Thunfisch, Kapern, Oliven & Artischocken', 5.9, 2),
(66, 47, 'Pizza Tonno groß', 'Thunfisch, Kapern, Oliven & Artischocken', 9.2, 2),
(67, 48, 'Pizza Mamma klein', 'Schinken, Peperoni, Zwiebel & Oliven', 5.9, 2),
(68, 48, 'Pizza Mamma groß', 'Schinken, Peperoni, Zwiebel & Oliven', 9.2, 2),
(69, 49, 'Pizza Kothail klein', 'Garnelen', 5.9, 2),
(70, 49, 'Pizza Kothail groß', 'Garnelen', 9.2, 2),
(71, 51, 'Spaghetti Napoli', 'Tomatensauce', 7.4, 3),
(72, 52, 'Spaghetti alla Ciociara', 'Tomatensauce, Erbsen & Schinken', 7.9, 3),
(73, 53, 'Spaghetti Bolognese', 'Fleischsauce', 7.9, 3),
(74, 54, 'Spaghetti, Aghoi, Peperoni', 'Knoblauch, Öl & Peperocini', 7.9, 3),
(75, 55, 'Spaghetti alla Mastriciana', 'Tomatensauce & Speck', 7.9, 3),
(76, 56, 'Tortellini Bolognese', 'Fleischsauce', 7.9, 3),
(77, 57, 'Tortellini alla Panna', 'Schinken & Sahnesauce', 8.4, 3),
(78, 58, 'Rigattoni alla Panna', 'Schinken, Sahnesauce & Käse (überbacken)', 8.4, 3),
(79, 59, 'Gnocchi', 'Fleischsauce', 8.9, 3),
(80, 60, 'Gnocchi ', 'Tomatensauce', 8.4, 3),
(81, 61, 'Gnocchi', 'Gorgonzolasauce', 9.4, 3),
(82, 62, 'Pommes Frites klein', 'mit Ketchup oder Mayonese', 2.7, 4),
(83, 62, 'Pommes Frites groß', 'mit Ketchup oder Mayonese', 3.9, 4),
(84, 63, 'Currywurst', 'mit Pommes Frites', 6.5, 4),
(85, 65, 'Gambas', 'mit Käse überbacken', 14.9, 4);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

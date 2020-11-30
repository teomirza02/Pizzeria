-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Nov 30, 2020 alle 20:14
-- Versione del server: 10.4.16-MariaDB
-- Versione PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Pizzeria`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Commenti`
--

CREATE TABLE `Commenti` (
  `IDCommento` int(11) NOT NULL,
  `NomeUtente` varchar(256) NOT NULL,
  `Data` date NOT NULL,
  `Testo` longtext NOT NULL,
  `FK_Nome_Pizza` varchar(256) NOT NULL,
  `Valutazione` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Commenti`
--

INSERT INTO `Commenti` (`IDCommento`, `NomeUtente`, `Data`, `Testo`, `FK_Nome_Pizza`, `Valutazione`) VALUES
(1, 'franco pippo', '2020-11-29', 'La pizza mi fa schifo', 'Patatine', 0),
(2, 'Francesco Pippo', '2020-11-29', 'Che bella la pizza in questo ristorante!', 'Patatine', 0),
(3, 'Giulio de franchini', '2020-11-29', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec rhoncus nisi. Sed sit amet lectus consequat, rhoncus ante non, tristique nisi. Nam rutrum elit in euismod gravida. In in rutrum erat, a commodo tortor. Nullam non ornare mauris. Phasellus eget viverra urna. Integer pulvinar dictum mi in efficitur. Donec semper ut dui quis molestie. Donec aliquam iaculis velit, a eleifend diam ultrices ut. Nunc imperdiet accumsan risus, non pellentesque est euismod in.', 'Margherita', 0),
(4, 'Pippo di Francesco', '2020-11-29', 'è buonissima questa pizza', 'Salsiccia', 0),
(5, 'Franco Franchini', '2020-11-29', 'Personale disgustoso!', 'Salsiccia', 0),
(6, 'Franchini De filippo', '2020-11-29', 'Wow!', 'Patatine', 0),
(7, 'Frank', '2020-11-29', 'è buonissima questa pizza', 'Margherita', 0),
(8, 'zuzanna kacka', '2020-11-29', 'fa schifo', 'Margherita', 0),
(9, 'Ciao Ciao', '2020-11-30', 'è buonissima questa pizza', ' Patatine', 0),
(10, 'Filippo di Bonaventura', '2020-11-30', 'Wowoowowowowoowoww', ' Margherita', 0),
(12, 'Ciao Ciao', '2020-11-30', 'Personale disgustoso!', ' Prosciutto Cotto', 9),
(13, 'Anonimo', '2020-11-30', 'Buuuuuuuuuu!', ' Altro', 8),
(14, 'Anonimo', '2020-11-30', 'Tutto Perfetto!', ' Altro', 9),
(15, 'Anonimo', '2020-11-30', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna.', ' Diavola', 8),
(16, 'Pippo di Francesco', '2020-11-30', 'Personale disgustoso!', ' Funghi', 4),
(17, 'Anonimo', '2020-11-30', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna.', ' Crudo e gorgonzola', 3),
(18, 'Franco Franchini', '2020-11-30', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna.', ' Crudo e gorgonzola', 3),
(19, 'Magnifico Insigne ', '2020-11-30', 'è buonissima questa pizza', ' Bufala', 10),
(20, 'Franco Franchini', '2020-11-30', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna.', ' Salsiccia e Patate', 6),
(21, 'Anonimo', '2020-11-30', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna.', ' Diavola', 4),
(22, 'Magnifico Insigne ', '2020-11-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna', ' Altro', 1),
(23, 'Anonimo', '2020-11-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna', ' Crudo e gorgonzola', 3),
(24, 'Magnifico Insigne ', '2020-11-30', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna.', ' Bufala', 7),
(25, 'Franco Franchini', '2020-11-30', '', ' Altro', 7),
(26, 'Anonimo', '2020-11-30', 'Personale disgustoso!', ' Altro', 1),
(27, 'Pippo di Francesco', '2020-11-30', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna.', ' Prosciutto Cotto', 6),
(28, 'Pippo di Francesco', '2020-11-30', 'è buonissima questa pizza', ' Bufala', 10),
(29, 'Franco Franchini', '2020-11-30', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna.', ' Diavola', 3),
(30, 'Anonimo', '2020-11-30', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna.', ' Marinara', 5),
(31, 'Pippo di Francesco', '2020-11-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna', ' Prosciutto Cotto', 5),
(32, 'Anonimo', '2020-11-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna', ' Margherita', 10),
(33, 'Franco Franchini', '2020-11-30', 'è buonissima questa pizza', ' Crudo e gorgonzola', 7),
(34, 'Anonimo', '2020-11-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna', ' Prosciutto Cotto', 8),
(35, 'Magnifico Insigne ', '2020-11-30', 'è buonissima questa pizza', ' Funghi', 7),
(36, 'Gabriela Petronela', '2020-11-30', 'Pizza buonissimaaaaa!!!! MLMLMMLMLMLLML', ' Salsiccia e Patate', 10),
(37, 'Franco Franchini', '2020-11-30', 'è buonissima questa pizza', ' Diavola', 8),
(38, 'Franco Franchini', '2020-11-30', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna.', ' Patatine', 7),
(39, 'Anonimo', '2020-11-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique nisl ut nisi suscipit laoreet. Pellentesque ac consequat dolor. Aenean accumsan pellentesque mauris, et finibus nibh auctor iaculis. Curabitur pellentesque semper tortor, eu convallis enim. Vivamus justo neque, ultricies eget hendrerit eu, laoreet at magna', ' Funghi', 6),
(40, 'Mirza Toader', '2020-11-30', 'QUESTO SITO è MAGNIFICOOOOOOOOO!', ' Altro', 10);

-- --------------------------------------------------------

--
-- Struttura della tabella `Pizze`
--

CREATE TABLE `Pizze` (
  `IDPizza` int(11) NOT NULL,
  `Nome_Pizza` varchar(256) NOT NULL,
  `Ingredienti` text NOT NULL,
  `Prezzo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Pizze`
--

INSERT INTO `Pizze` (`IDPizza`, `Nome_Pizza`, `Ingredienti`, `Prezzo`) VALUES
(1, 'Margherita', 'Mozzarella, Pomodoro, Basilico, Olio Extra Vergine di Oliva', '10'),
(2, 'Patatine', 'Mozzarella, Pomodoro, Basilico, Olio Extra Vergine di Oliva, Patatine Fritte', '12'),
(3, 'Crudo e gorgonzola', 'Mozzarella, Pomodoro, Olio Extra Vergine di Oliva, Crudo, Gorgonzola', '11'),
(4, 'Prosciutto Cotto', 'Mozzarella, Pomodoro, Prosciutto Cotto', '12'),
(6, 'Bufala', 'Mozzarella di Bufala, Pomodoro, Olio Extra Vergine di Oliva', '15'),
(7, 'Marinara', 'Mozzarella, Pomodoro, Aglio, Origano', '11'),
(8, 'Diavola', 'Mozzarella, Pomodoro, Salame Piccante', '10'),
(9, 'Quattro Formaggi', 'Mozzarella, Pomodoro, Parmigiano, Gorgonzola, Provola', '13'),
(10, 'Capricciosa', 'Mozzarella, Pomodoro, Carciofi, Prosciutto Cotto, Funghi, Olive', '12'),
(11, 'Funghi', 'Mozzarella, Pomodoro, Funghi trifolati', '12'),
(12, 'Salsiccia', 'Mozzarella, Pomodoro, Salsiccia', '10'),
(13, 'Salsiccia e Patate', 'Mozzarella, Pomodoro, Salsiccia, Patate', '13');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Commenti`
--
ALTER TABLE `Commenti`
  ADD PRIMARY KEY (`IDCommento`);

--
-- Indici per le tabelle `Pizze`
--
ALTER TABLE `Pizze`
  ADD PRIMARY KEY (`IDPizza`),
  ADD UNIQUE KEY `Nome_Pizza` (`Nome_Pizza`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Commenti`
--
ALTER TABLE `Commenti`
  MODIFY `IDCommento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT per la tabella `Pizze`
--
ALTER TABLE `Pizze`
  MODIFY `IDPizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

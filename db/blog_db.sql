-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 10:51 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `date`, `body`) VALUES
(1, 'Renault 19', '2018-10-16 16:36:53', 'Buenas noches a todos, Soy Christian, uno de los integrantes de Estiloracing y aquí dejo mi pequeña aportación y uno de los motivos por lo que comenzó toda esta historia. El coche que hace 24 años compro mi madre, nuevo a estrenar. Tras heredarlo y llegar a odiarlo por cabezonería y pensar que tenía un coche que no merecía la pena, el tiempo y el trabajo han hecho de este coche, una parte de mi vida, de la que no me puedo desprender. Espero que os guste y os guste la iniciativa que hemos tenido con el foro. Un saludo a todos!'),
(2, 'Seat Leon FR 5F', '2018-10-16 16:36:53', 'Hola amigos! Muchos ya me conocéis , soy David propietario de un modesto leon FR SC 5F . Lo compre harán ya 3 años en un conce de la zona , pensando en un coche nuevo , bonito y cómodo para olvidarme de ruidos averías y quebraderos de cabeza . Como muchos dije... este no lo toco... luego dije... va unas llantas y ya.'),
(4, 'VW GOLF MK3', '2018-10-16 17:07:52', 'Muuuy buenas a todos! Yo soy Joseba, y soy dueño de este Volkswagen Golf Mk3, lleva un afn de de un Ibiza 6k (1.9 gt tdi) con repro a 140. Llevo con el coche justo ahora hace 2 años y pese a que pareciese que estaba bastante bien, tenia cosillas para hacerle y otras muchas para quitarle jajajaja viendo el gusto de los anteriores propietarios.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

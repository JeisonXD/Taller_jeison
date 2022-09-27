-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2022 at 06:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Registro_de_notas`
--

-- --------------------------------------------------------

--
-- Table structure for table `Estudiantes`
--

CREATE TABLE `Estudiantes` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Ciudad` varchar(30) NOT NULL,
  `Telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Estudiantes`
--

INSERT INTO `Estudiantes` (`id`, `Nombre`, `Ciudad`, `Telefono`) VALUES
(2, 'Jeison Manuel Ruiz Solano', 'Monteria', 305);

-- --------------------------------------------------------

--
-- Table structure for table `Notas`
--

CREATE TABLE `Notas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `ingreso_nota` date DEFAULT NULL,
  `consulta_nota` datetime DEFAULT NULL,
  `nota` float DEFAULT NULL,
  `corte` int(11) DEFAULT NULL,
  `materia` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_estudiante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Notas`
--

INSERT INTO `Notas` (`id`, `nombre`, `ingreso_nota`, `consulta_nota`, `nota`, `corte`, `materia`, `email`, `id_estudiante`) VALUES
(1, 'quiz 2', '2022-09-01', '2022-09-10 09:10:15', 3.7, 2, 'desarrollo web', 'correoarrobaalgo.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Estudiantes`
--
ALTER TABLE `Estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Notas`
--
ALTER TABLE `Notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Estudiantes`
--
ALTER TABLE `Estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Notas`
--
ALTER TABLE `Notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Notas`
--
ALTER TABLE `Notas`
  ADD CONSTRAINT `Notas_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `Estudiantes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

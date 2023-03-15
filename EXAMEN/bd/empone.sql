-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2023 a las 06:19:10
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empone`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspitantes`
--

CREATE TABLE `aspitantes` (
  `idA` bigint(20) UNSIGNED NOT NULL,
  `nomA` varchar(50) NOT NULL,
  `fecA` date NOT NULL,
  `edA` int(11) NOT NULL,
  `escA` varchar(50) NOT NULL,
  `prmA` int(11) NOT NULL,
  `munA` varchar(50) NOT NULL,
  `srtA` char(2) NOT NULL,
  `urlA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Indices de la tabla `aspitantes`
--
ALTER TABLE `aspitantes`
  ADD PRIMARY KEY (`idA`),
  ADD UNIQUE KEY `idA` (`idA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aspitantes`
--
ALTER TABLE `aspitantes`
  MODIFY `idA` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2023 a las 00:13:00
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `demo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `myusers`
--

CREATE TABLE `myusers` (
  `IdUser` int(10) NOT NULL,
  `emailUser` varchar(50) DEFAULT NULL,
  `passwordUser` varchar(250) DEFAULT NULL,
  `nameUser` varchar(100) DEFAULT NULL,
  `createUser` varchar(30) DEFAULT NULL,
  `sesionDesde` varchar(30) DEFAULT NULL,
  `sesionHasta` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `myusers`
--

INSERT INTO `myusers` (`IdUser`, `emailUser`, `passwordUser`, `nameUser`, `createUser`, `sesionDesde`, `sesionHasta`) VALUES
(24, 'demo@gmail.com', '$2y$10$94z6MvIYLQ1TrqumMPF64.Ra29V3lZC4tGu7Q4n2x4SLQHjOmqJyC', 'Urian', '2023-04-11 16:57:PM', '2023-04-11 17:12:PM', '2023-04-11 17:12:PM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `myusers`
--
ALTER TABLE `myusers`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `myusers`
--
ALTER TABLE `myusers`
  MODIFY `IdUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2025 a las 21:15:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` varchar(150) NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `mensaje`, `fecha`) VALUES
(20, 'montalvo', 'sergioperezmontalvo@gmail.com', 'Tot ben', '14/01/25'),
(21, 'montalvo', 'sergioperezmontalvo@gmail.com', 'Tot ben', '14/01/25'),
(22, 'Sergio', 'sergioperezmontalvo@gmail.com', 'Bon dia a tuts', '14/01/25'),
(23, 'Sergio', 'sergioperezmontalvo@gmail.com', 'Bon dia a tuts', '14/01/25'),
(24, 'Sergio', 'sergioperezmontalvo@gmail.com', 'Bon dia a tuts', '14/01/25'),
(25, 'Sergio', 'sergioperezmontalvo@gmail.com', 'Bon dia a tuts', '14/01/25'),
(26, 'Sergio', 'sergioperezmontalvo@gmail.com', 'Bon dia a tuts', '14/01/25'),
(27, 'sergio', 'sergioperezmontalvo@gmail.com', 'sergio perez montalvc', '16/01/25'),
(28, 'sergio', 'sergioperezmontalvo@gmail.com', 'sergio perez montalvc', '16/01/25'),
(29, 'sergio', 'sergioperezmontalvo@gmail.com', 'sergio perez montalvc', '16/01/25'),
(30, 'Sergio', 'sergioperezmontalvo@gmail.com', 'dfwgrgrg', '16/01/25'),
(31, 'Sergio', 'sergioperezmontalvo@gmail.com', 'Sergio', '17/01/25'),
(32, 'Sergio', 'sergioperezmontalvo@gmail.com', 'me ha redirigido', '17/01/25'),
(33, 'Sergio', 'sergioperezmontalvo@gmail.com', 'me ha redirigido 2vez', '17/01/25'),
(34, 'siuuuu', 'siuuu@gmail.com', 'siuuuu', '17/01/25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

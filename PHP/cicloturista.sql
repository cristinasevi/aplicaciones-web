-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2024 a las 09:21:10
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cicloturista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clubes`
--

CREATE TABLE `clubes` (
  `idClub` int(11) NOT NULL,
  `nombreClub` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clubes`
--

INSERT INTO `clubes` (`idClub`, `nombreClub`) VALUES
(1, 'Club Ciclista ZARABICI'),
(2, 'Club Ciclista Cataluña'),
(3, 'Club Ciclista Madrileño'),
(4, 'Club Ciclista Valenciano'),
(5, 'Club Ciclista Andaluz'),
(6, 'Club Ciclista Gallego'),
(7, 'Club Ciclista Español'),
(8, 'Club Ciclista de Aragón'),
(9, 'Club Ciclista Pedaleantes'),
(10, 'Club Ciclista Bicis'),
(11, 'Sin club');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `idParticipante` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `idProvincia` int(11) NOT NULL,
  `idClub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`idParticipante`, `Nombre`, `Apellidos`, `idProvincia`, `idClub`) VALUES
(1, 'Viviana', 'De La Cruz', 3, 6),
(2, 'Rafa', 'Navarro', 8, 5),
(3, 'Javier', 'Morer', 7, 3),
(4, 'Adrián', 'Morer', 4, 2),
(5, 'Juan Antonio', 'Alfaro', 5, 4),
(6, 'Javier', 'Vicente', 10, 8),
(7, 'Izan', 'Ruiz', 2, 9),
(8, 'Jeremy', 'Díaz', 1, 10),
(9, 'Ángel', 'Xu', 6, 6),
(10, 'Alejandro', 'Palazón', 9, 4),
(11, 'Merche', 'López', 8, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `idProvincia` int(11) NOT NULL,
  `nombreProvincia` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`idProvincia`, `nombreProvincia`) VALUES
(1, 'Álava'),
(2, 'Albacete'),
(3, 'A Coruña'),
(4, 'Barcelona'),
(5, 'Castellón'),
(6, 'Lugo'),
(7, 'Madrid'),
(8, 'Sevilla'),
(9, 'Valencia'),
(10, 'Zaragoza');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clubes`
--
ALTER TABLE `clubes`
  ADD PRIMARY KEY (`idClub`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`idParticipante`),
  ADD KEY `provincia` (`idProvincia`),
  ADD KEY `club` (`idClub`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idProvincia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clubes`
--
ALTER TABLE `clubes`
  MODIFY `idClub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `idParticipante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `idProvincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`idProvincia`) REFERENCES `provincias` (`idProvincia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participantes_ibfk_2` FOREIGN KEY (`idClub`) REFERENCES `clubes` (`idClub`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2024 a las 10:11:09
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
-- Base de datos: `bancolibros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `idAutor` int(11) NOT NULL,
  `autor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`idAutor`, `autor`) VALUES
(1, 'Sin autor'),
(2, 'Pepa Martinez'),
(3, 'Agatha Christie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idBitacora` int(11) NOT NULL,
  `accion` varchar(20) NOT NULL,
  `idUsuario` varchar(9) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`idBitacora`, `accion`, `idUsuario`, `fecha`) VALUES
(1, 'Acceso usuario', 'merche', '2024-02-19 09:05:48'),
(2, 'Acceso usuario', 'admin', '2024-02-19 09:21:11'),
(3, 'Acceso usuario', 'admin', '2024-02-19 09:22:21'),
(4, 'Acceso usuario', 'admin', '2024-02-19 09:41:27'),
(5, 'Acceso usuario', 'admin', '2024-02-19 09:43:04'),
(6, 'Acceso usuario', 'merche', '2024-02-19 09:43:44'),
(7, 'Acceso usuario', 'admin', '2024-02-19 09:44:56'),
(8, 'Acceso usuario', 'admin', '2024-02-19 11:14:56'),
(9, 'Acceso usuario', 'merche', '2024-02-19 12:17:06'),
(10, 'Acceso usuario', 'admin', '2024-02-19 12:17:12'),
(11, 'Acceso usuario', 'merche', '2024-02-20 08:11:23'),
(12, 'Acceso usuario', 'merche', '2024-02-20 08:22:06'),
(13, 'Acceso usuario', 'merche', '2024-02-20 08:39:23'),
(14, 'Acceso usuario', 'admin', '2024-02-20 08:49:38'),
(15, 'Acceso usuario', 'merche', '2024-02-20 08:50:03'),
(16, 'Acceso usuario', 'admin', '2024-02-20 09:02:07'),
(17, 'Acceso usuario', 'merche', '2024-02-20 09:10:08'),
(18, 'Acceso usuario', 'merche', '2024-02-20 10:19:13'),
(19, 'Acceso usuario', 'admin', '2024-02-21 09:01:26'),
(20, 'Acceso usuario', 'merche', '2024-02-21 09:01:33'),
(21, 'Acceso usuario', 'admin', '2024-02-21 09:01:39'),
(22, 'Acceso usuario', 'admin', '2024-02-21 09:37:46'),
(23, 'Acceso usuario', 'admin', '2024-02-26 09:02:39'),
(24, 'Acceso usuario', 'merche', '2024-02-26 09:06:47'),
(25, 'Acceso usuario', 'admin', '2024-02-26 09:21:40'),
(26, 'Acceso usuario', 'admin', '2024-02-27 08:25:39'),
(27, 'Acceso usuario', 'merche', '2024-02-27 08:35:57'),
(28, 'Acceso usuario', 'admin', '2024-02-27 08:38:32'),
(29, 'Acceso usuario', 'admin', '2024-02-27 08:38:43'),
(30, 'Acceso usuario', 'admin', '2024-02-27 08:38:48'),
(31, 'Acceso usuario', 'admin', '2024-02-27 08:49:19'),
(32, 'Acceso usuario', 'admin', '2024-02-27 08:52:50'),
(33, 'Acceso usuario', 'merche', '2024-02-27 08:53:10'),
(34, 'Acceso usuario', 'admin', '2024-02-27 10:03:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos`
--

CREATE TABLE `ciclos` (
  `idCiclo` int(11) NOT NULL,
  `ciclo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciclos`
--

INSERT INTO `ciclos` (`idCiclo`, `ciclo`) VALUES
(1, 'Sistemas Microinformáticos y Redes'),
(2, 'Automoción'),
(3, 'Desarrollo Aplicaciones Multiplataforma'),
(4, 'Robótica'),
(5, 'Automoción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idContacto` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `idLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`idContacto`, `nombre`, `email`, `idLibro`) VALUES
(1, 'Pepe', 'pepe@gmail.com', 31),
(2, 'Sonia', 'sonia@gmail.com', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `idEditorial` int(11) NOT NULL,
  `editorial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`idEditorial`, `editorial`) VALUES
(1, 'Edebé'),
(2, 'Alfaguara'),
(3, 'Express Publishing'),
(4, 'Edelvives'),
(5, 'Anaya'),
(8, 'Planeta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL,
  `isbn` varchar(17) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `idModulo` int(11) NOT NULL,
  `idEditorial` int(11) NOT NULL,
  `idUsuario` varchar(9) NOT NULL,
  `precio` decimal(10,2) NOT NULL DEFAULT 0.00,
  `vendido` tinyint(1) NOT NULL DEFAULT 0,
  `fechaAlta` datetime NOT NULL DEFAULT current_timestamp(),
  `comentarios` longtext DEFAULT NULL,
  `imagenportada` varchar(255) NOT NULL,
  `descuento` int(11) NOT NULL,
  `idAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `isbn`, `titulo`, `idModulo`, `idEditorial`, `idUsuario`, `precio`, `vendido`, `fechaAlta`, `comentarios`, `imagenportada`, `descuento`, `idAutor`) VALUES
(28, '12345-25', 'Inglés para programadores', 1, 3, 'merche', '15.00', 0, '2024-02-20 08:15:02', '', './ficheros/Computing.png', 10, 1),
(29, '12345-27', 'Java para Novatos', 16, 2, 'merche', '25.00', 0, '2024-02-20 08:53:03', '', './ficheros/javanovatos.jpg', 10, 1),
(31, '12345-27', 'Aprendiendo a Programar', 16, 1, 'merche', '20.00', 0, '2024-02-20 09:00:18', '', './ficheros/vacia.png', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `idModulo` int(11) NOT NULL,
  `modulo` varchar(50) NOT NULL,
  `idCiclo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`idModulo`, `modulo`, `idCiclo`) VALUES
(1, 'Inglés', 1),
(5, 'Sistemas Operativos', 1),
(16, 'Aplicaciones Web', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` varchar(9) NOT NULL,
  `nombrecompleto` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `movil` varchar(13) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `fechaultimoacceso` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombrecompleto`, `email`, `movil`, `clave`, `fechaultimoacceso`) VALUES
('admin', '', '', '', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-27 10:03:50'),
('juanape', '', '', '', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00 00:00:00'),
('merche', '', '', '', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-27 08:53:10'),
('sonia', '', '', '', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00 00:00:00');

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `RegistroUsuarios` AFTER UPDATE ON `usuarios` FOR EACH ROW BEGIN
	INSERT INTO bitacora (accion, idUsuario, fecha) VALUES ("Acceso usuario",old.idUsuario,now());
    
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idBitacora`);

--
-- Indices de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  ADD PRIMARY KEY (`idCiclo`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idContacto`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`idEditorial`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`),
  ADD KEY `idmodulo` (`idModulo`),
  ADD KEY `ideditorial` (`idEditorial`),
  ADD KEY `idusuario` (`idUsuario`),
  ADD KEY `idUsuario_2` (`idUsuario`),
  ADD KEY `idAutor` (`idAutor`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`idModulo`),
  ADD KEY `idciclo` (`idCiclo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idBitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  MODIFY `idCiclo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `idEditorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `idModulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`idEditorial`) REFERENCES `editorial` (`idEditorial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`idModulo`) REFERENCES `modulos` (`idModulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_3` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_4` FOREIGN KEY (`idAutor`) REFERENCES `autores` (`idAutor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_ibfk_1` FOREIGN KEY (`idCiclo`) REFERENCES `ciclos` (`idCiclo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

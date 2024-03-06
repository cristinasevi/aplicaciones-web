-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2024 a las 09:21:40
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
-- Base de datos: `inventarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE `aula` (
  `idUbicacion` int(11) NOT NULL,
  `idAula` varchar(5) NOT NULL,
  `idDepartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`idUbicacion`, `idAula`, `idDepartamento`) VALUES
(2, '1T1', 6),
(2, '1T2', 6),
(2, '1T3', 6),
(2, '1T4', 6),
(2, '1T5', 4),
(2, '1T6', 4),
(2, '1T6.1', 4),
(2, '1T7', 4),
(2, '1T8', 4),
(2, '1T9', 1),
(2, '2T2', 1),
(2, '2T3', 1),
(2, '2T4', 1),
(2, '2T5', 3),
(2, '2T6', 3),
(2, '2T7', 3),
(2, '2T8', 3),
(2, '2T9', 3),
(1, 'BT1.2', 6),
(2, 'BT2', 1),
(2, 'BT3', 1),
(2, 'BT4', 1),
(2, 'BT5', 1),
(2, 'BT6', 5),
(2, 'BT7', 5),
(2, 'BT8', 5),
(2, 'BT8.1', 5),
(2, 'BT8.2', 5),
(2, 'ST1', 2),
(2, 'ST1.1', 2),
(2, 'ST2', 2),
(2, 'ST3', 2),
(2, 'ST4', 2),
(2, 'ST5', 2),
(2, 'ST6', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departec`
--

CREATE TABLE `departec` (
  `idDepartamento` int(11) NOT NULL,
  `NombreDepar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departec`
--

INSERT INTO `departec` (`idDepartamento`, `NombreDepar`) VALUES
(1, 'Informatica'),
(2, 'Mecanizado'),
(3, 'Telecomunicaciones'),
(4, 'Róbotica'),
(5, 'Automoción'),
(6, 'Electricidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `NombreMarca` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `NombreMarca`) VALUES
(1, 'Dell'),
(2, 'Fujitsu siemens'),
(3, 'Fabricación propia'),
(4, 'Logitech'),
(5, 'Sin marca'),
(6, 'ProFusion'),
(7, 'AVK'),
(8, 'Blueweld by Telwin.'),
(9, 'KINGBOLEN'),
(10, 'Brembo'),
(11, 'Renault'),
(12, 'Fmf'),
(13, 'Rs Pro'),
(14, 'Schneider'),
(15, 'Hellermanntyton'),
(16, 'Siemens'),
(17, 'Toyota'),
(18, 'Canon'),
(19, 'Sennheiser'),
(36, 'Pinacho'),
(37, 'Makita'),
(38, 'Big red'),
(39, 'Hp'),
(40, 'Belllabot'),
(41, 'Yamaha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `idMateriales` int(11) NOT NULL,
  `NombreMat` varchar(30) NOT NULL,
  `idAula` varchar(5) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`idMateriales`, `NombreMat`, `idAula`, `Cantidad`, `idProveedor`, `idMarca`, `imagen`) VALUES
(5, 'Pantalla', '2T3', 30, 7, 1, './ficheros/pantalla.jpg'),
(6, 'Ordenador', '2T3', 30, 7, 39, './ficheros/ordenador.jpg'),
(7, 'Raton', '2T3', 30, 7, 4, './ficheros/raton.jpg'),
(8, 'Teclado', '2T3', 30, 7, 4, './ficheros/teclado.jpg'),
(9, 'Silla', '2T3', 30, 1, 3, './ficheros/silla.jpg'),
(12, 'Pantalla', '2T4', 30, 7, 2, './ficheros/pantalla.jpg'),
(13, 'Ordenador', '2T4', 30, 7, 39, './ficheros/ordenador.jpg'),
(14, 'Raton', '2T4', 30, 7, 4, './ficheros/raton.jpg'),
(15, 'Teclado', '2T4', 30, 7, 4, './ficheros/teclado.jpg'),
(16, 'Silla', '2T4', 30, 1, 3, './ficheros/silla.jpg'),
(19, 'Pantalla', '2T2', 15, 7, 2, './ficheros/pantalla.jpg'),
(21, 'Raton', '2T2', 15, 7, 4, './ficheros/raton.jpg'),
(22, 'Teclado', '2T2', 15, 7, 4, './ficheros/teclado.jpg'),
(23, 'Silla', '2T2', 15, 1, 3, './ficheros/silla.jpg'),
(28, 'Mesa', 'ST1', 30, 1, 3, './ficheros/mesa.jpg'),
(29, 'Silla', 'ST1', 30, 1, 3, './ficheros/silla.jpg'),
(30, 'Tornos', 'ST1', 15, 2, 36, './ficheros/torno.jpg'),
(31, 'Fresadoras', 'ST1', 15, 2, 37, './ficheros/fresadora.png'),
(32, 'Metales', 'ST1.1', 300, 34, 5, './ficheros/metales.jpg'),
(33, 'Aluminios', 'ST1.1', 300, 34, 5, './ficheros/aluminios.jpg'),
(34, 'Silla', 'ST2', 30, 1, 3, './ficheros/silla.jpg'),
(35, 'Mesa', 'ST2', 30, 1, 3, './ficheros/mesa.jpg'),
(36, 'Fluidos Hidráulicos ', 'ST3', 300, 3, 6, './ficheros/fluidos_hidraulicos.jpg'),
(37, 'Válvulas ', 'ST4', 20, 4, 7, './ficheros/valvulas.jpg'),
(38, 'Aceros', 'ST5', 500, 5, 5, './ficheros/aceros.jpg'),
(39, 'Cobre', 'BT1.2', 300, 6, 5, './ficheros/cobre.jpg'),
(40, 'Hierro', 'BT1.2', 300, 6, 5, './ficheros/hierro.jpg'),
(41, 'Hierro', '1T1', 300, 6, 5, './ficheros/hierro.jpg'),
(42, 'Cobre', '1T1', 300, 6, 5, './ficheros/cobre.jpg'),
(43, 'Gatos hidráulicos', 'BT8', 5, 35, 38, './ficheros/gatos_hidraulicos.jpg'),
(44, 'Mesas', 'BT2', 20, 1, 3, './ficheros/mesa.jpg'),
(45, 'Ordenadores', 'BT2', 30, 7, 39, './ficheros/ordenador.jpg'),
(46, 'Sillas', 'BT2', 30, 1, 3, './ficheros/silla.jpg'),
(47, 'Mesas ', 'BT3', 20, 1, 3, './ficheros/mesa.jpg'),
(48, 'Sillas', 'BT3', 30, 1, 3, './ficheros/silla.jpg'),
(49, 'Ordenadores', 'BT3', 1, 7, 39, './ficheros/ordenador.jpg'),
(50, 'Mesas ', 'BT4', 20, 1, 3, './ficheros/mesa.jpg'),
(51, 'Sillas', 'BT4', 30, 1, 3, './ficheros/silla.jpg'),
(52, 'Ordenadores', 'BT4', 1, 7, 39, './ficheros/ordenador.jpg'),
(53, 'Mesas', 'BT5', 20, 1, 3, './ficheros/mesa.jpg'),
(54, 'Ordenadores', 'BT5', 30, 7, 39, './ficheros/ordenador.jpg'),
(55, 'Sillas', 'BT5', 30, 1, 3, './ficheros/silla.jpg'),
(56, 'Soldadores Eléctricos', 'BT6', 15, 36, 8, './ficheros/soldador.jpg'),
(57, 'Comprobador de baterías', 'BT6', 10, 37, 9, './ficheros/comprobador_baterias.jpg'),
(58, 'Discos de freno', 'BT7', 50, 38, 10, './ficheros/discos_freno.jpg'),
(60, 'Motores', 'BT8.2', 10, 9, 11, './ficheros/motor.jpg'),
(65, 'Disyuntores', '1T2', 12, 10, 12, './ficheros/disyuntor.jpg'),
(67, 'Fusibles', '1T2', 30, 10, 13, './ficheros/fusible.jpg'),
(69, 'Sensores ', '1T3', 30, 10, 14, './ficheros/sensor.jpg'),
(70, 'Kits Terminales', '1T4', 30, 39, 15, './ficheros/kit_terminal.jpg'),
(71, 'Mesas', '1T5', 30, 1, 3, './ficheros/mesa.jpg'),
(72, 'Sillas', '1T5', 30, 1, 3, './ficheros/silla.jpg'),
(75, 'Acero Inoxidable', '1T6', 300, 44, 5, './ficheros/acero_inoxidable.jpg'),
(77, 'Robot Industrial', '1T6.1', 1, 45, 40, './ficheros/robot_industrial.jpg'),
(78, 'Plcs', '1T7', 20, 11, 16, './ficheros/plcs.png'),
(79, 'Transformadores', '1T8', 50, 46, 16, './ficheros/transformadores.jpg'),
(80, 'Ordenadores', '1T9', 30, 7, 39, './ficheros/ordenador.jpg'),
(81, 'Pantalla', '1T9', 30, 7, 1, './ficheros/pantalla.jpg'),
(82, 'Silla', '1T9', 30, 1, 3, './ficheros/silla.jpg'),
(83, 'Mesa ', '1T9', 30, 1, 3, './ficheros/mesa.jpg'),
(84, 'Sistemas de Transmisión Variab', 'BT8.1', 30, 12, 17, './ficheros/sistemas_transmision.jpg'),
(85, 'Cámaras', '2T5', 3, 13, 18, './ficheros/camara.jfif'),
(86, 'Antenas', '2T6', 10, 47, 19, './ficheros/antena.jpg'),
(87, 'Pantalla', '2T7', 30, 7, 2, './ficheros/pantalla.jpg'),
(88, 'Mesa', '2T7', 15, 1, 3, './ficheros/mesa.jpg'),
(89, 'Ordenadores', '2T7', 30, 7, 39, './ficheros/ordenador.jpg'),
(90, 'Sillas', '2T7', 30, 1, 3, './ficheros/silla.jpg'),
(91, 'Cobre', '2T8', 300, 6, 5, './ficheros/cobre.jpg'),
(92, 'Hierro', '2T8', 300, 6, 5, './ficheros/hierro.jpg'),
(93, 'Altavoces profesionales', '2T9', 5, 14, 41, './ficheros/altavoces.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prov`
--

CREATE TABLE `prov` (
  `idProveedor` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Direccion` varchar(80) NOT NULL,
  `Municipio` varchar(30) NOT NULL,
  `Provincia` varchar(30) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `idTipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prov`
--

INSERT INTO `prov` (`idProveedor`, `Nombre`, `Direccion`, `Municipio`, `Provincia`, `Telefono`, `idTipo`) VALUES
(1, 'Salesianos', 'Don Bosco', 'Zaragoza', 'Zaragoza', 1234, 3),
(2, 'Maquinaria Barruiso', 'Polígono Industrial de Barros, Parcela 12 Naves 2 y 3, 39408, Barros, Cantabria', 'Cantabria', 'Cantabria', 942555348, 9),
(3, 'BOMBAS Y FLUIDOS, S.L', 'C. Alejandro Bell, 11, B, 50014 Zaragoza', 'Zaragoza', 'Zaragoza', 976574127, 9),
(4, 'Grm ', 'Lugar Monte Perdido, 3, 50015 Zaragoza', 'Zaragoza', 'Zaragoza', 456789123, 9),
(5, 'AUSA Special Steels | Aceros especiales y Aceros calibrados ', 'Polígono Malpica, Calle D, 19, 50016 Zaragoza', 'Zaragoza', 'Zaragoza', 976138122, 9),
(6, 'Euroferrasa', 'C. Geranio, 57, 50171 La Puebla de Alfindén, Zaragoza', 'Zaragoza', 'Zaragoza', 628733751, 15),
(7, 'Pcbox', 'C. de la Corona de Aragón, 14, 50009 Zaragoza', 'Zaragoza', 'Zaragoza', 976557473, 34),
(9, 'Loma', 'Av. de Cataluña, 290, 50014 Zaragoza', 'Zaragoza', 'Zaragoza', 976574828, 12),
(10, 'Distrimel Zaragoza', 'Urb. local 13, 50010 Zaragoza', 'Zaragoza', 'Zaragoza', 976078277, 13),
(11, 'Automatizaciones Zaragoza, S.L.', 'C. de María Zambrano, 31, 50018 Zaragoza', 'Zaragoza', 'Zaragoza', 876200210, 5),
(12, 'Elesa', 'C. de Zurbarán, 16, Chamberí, 28010 Madrid', 'Madrid', 'Madrid', 913197930, 6),
(13, 'Fotosonic', 'Av. de Cesáreo Alierta, 47, 50008 Zaragoza', 'Zaragoza', 'Zaragoza', 976299648, 10),
(14, 'VIENA AUDIO ', 'C. de Manuel Serrano Sanz, 3, Local Izdo, 50009 Zaragoza', 'Zaragoza', 'Zaragoza', 976567940, 10),
(34, 'Velca', 'C. de Monegros, 6, Local, 50003 Zaragoza', 'Zaragoza', 'Zaragoza', 633361705, 9),
(35, 'Carretillas HC', 'C. Romero, 6, 50171 La Puebla de Alfindén, Zaragoza', 'Zaragoza', 'Zaragoza', 976455281, 6),
(36, 'Fercas Soldadura SL', 'Av. de la Jota, 52, 50014 Zaragoza', 'Zaragoza', 'Zaragoza', 976474353, 6),
(37, 'Baterias Litio', 'C. de Desiderio Escosura, 47, Delicias, 50005 Zaragoza', 'Zaragoza', 'Zaragoza', 629367697, 6),
(38, 'Frenos Bolca', 'C. del Alcalde Burriel, 7, 50005 Zaragoza', 'Zaragoza', 'Zaragoza', 976550188, 6),
(39, 'Rs Iberia ', 'Av. de Bruselas, 6, Planta 3, 28108 Alcobendas, Madrid', 'Madrid', 'Madrid', 915129699, 25),
(44, 'AUSA Special Steels | Aceros especiales y Aceros calibrados ', 'Polígono Malpica, Calle D, 19, 50016 Zaragoza', 'Zaragoza', 'Zaragoza', 976138122, 5),
(45, 'Moontech Industrial', 'C. María de Luna, 11, Nave 7, 50018 Zaragoza', 'Zaragoza', 'Zaragoza', 976588391, 5),
(46, 'ABB', 'Av. de Juan Pablo II, 35, Torre Aragonia, 50009 Zaragoza', 'Zaragoza', 'Zaragoza', 976769300, 5),
(47, 'Monolitic, S.A.', 'P.E. Granland, Carrer de la Mora, 34, 08918 Badalona, Barcelona', 'Barcelona', 'Barcelona', 932859292, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoprod`
--

CREATE TABLE `tipoprod` (
  `idTipo` int(11) NOT NULL,
  `NombreTipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoprod`
--

INSERT INTO `tipoprod` (`idTipo`, `NombreTipo`) VALUES
(1, 'Papeleria'),
(2, 'Tecnología'),
(3, 'Carpintería'),
(4, 'Electrónica'),
(5, 'Robótica'),
(6, 'Automoción'),
(7, 'Iluminación'),
(8, 'Hardware'),
(9, 'Mecanizado'),
(10, 'Telecomunicaciones'),
(11, 'Automatización'),
(12, 'Motores'),
(13, 'Circuitos eléctricos'),
(14, 'Software'),
(15, 'Metales'),
(16, 'Redes'),
(17, 'Inteligencia artificial'),
(18, 'Carrocería'),
(19, 'Energía renovable'),
(20, 'Impresoras'),
(21, 'Herramientas'),
(22, 'Comunicaciones'),
(23, 'Sensores'),
(24, 'Neumáticos'),
(25, 'Instalaciones eléctricas'),
(26, 'Suministros de oficina'),
(27, 'Materiales de construcción'),
(28, 'Telefonía móvil'),
(29, 'Drones'),
(30, 'Aceites y lubricantes'),
(31, 'Generadores'),
(34, 'Hardware');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubi`
--

CREATE TABLE `ubi` (
  `idUbicacion` int(11) NOT NULL,
  `NombreUbicacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ubi`
--

INSERT INTO `ubi` (`idUbicacion`, `NombreUbicacion`) VALUES
(1, 'Pabellón'),
(2, 'Edificio Talleres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUser` int(11) NOT NULL,
  `NombreUser` varchar(30) NOT NULL,
  `NombreCompleto` varchar(50) NOT NULL,
  `clave` text NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `Nivel` int(11) NOT NULL,
  `fechaUltima` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUser`, `NombreUser`, `NombreCompleto`, `clave`, `idDepartamento`, `Nivel`, `fechaUltima`) VALUES
(13, 'Admin', 'Merche Lopez', 'd322e6fd7b4d3383562b9dfdb918a62e07a634a8af68dea3e172034647d2f2c2', 1, 1, '2024-03-06 08:08:46'),
(16, 'Juan', 'Juan Antonio', '6038f600d1af4bf6187cfdff90d7115f0b188410462fe77d00fd2d0ec7a13d21', 6, 2, '2024-03-06 07:26:51'),
(17, 'Adri', 'Adrian Morer', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 1, 2, '2024-03-06 07:42:40'),
(19, 'Javi', 'Javier Morer', '9c8d2a4dbf811a755f227cb804ebdc37e09ad76f2cd533c4a5bfe836c0570ad4', 1, 3, '2024-03-06 07:26:51'),
(22, 'Merche', 'Merche Lopez', '9dd9c53282d281fb37bcacfea5509cbeda8b335a143f64f5b7d06ae1e3accc75', 1, 1, '2024-03-06 07:26:51'),
(23, 'Rafa', 'Rafael Navarro', '34d544f5576628288f0ba151af8a8ec93326213ce6376688d1684f8a30fcf09f', 2, 3, '2024-03-06 07:26:51'),
(27, 'Cristina', 'Crisitina Serrano', '0092350ac0d6648ec093543745bb9a0b7ec00394e01c536a5e61f71d86831855', 3, 3, '2024-03-06 07:26:51'),
(28, 'Izan', 'Izan Ruiz', '2b6dd24f1f2ee61040b6ca1189ed8673f1bee19a8a91fe1a44663b6006814e8b', 3, 2, '2024-03-06 07:26:51'),
(29, 'Diego', 'Diego Julian', 'd39a4946a35c7a1fd2f898d99a4218db343468e79a778814b1f7c064720ba203', 2, 2, '2024-03-06 07:26:51'),
(30, 'Daniel', 'Daniel Planté', '73bdffa30be02fdd17eb3ed955058477007f39facd36c5af59282ea0abd077a2', 4, 2, '2024-03-06 07:26:51'),
(31, 'Victor', 'Victor Archidona', 'e70e23df4a1c4b73f61bddd52328458ab6e4934b3126de4b7aded2ed412b259e', 4, 3, '2024-03-06 07:26:51'),
(32, 'Asier', 'Asier Ezquerra', 'b75269ade25668a81d32aea042a22645580e4bb8c880f9f95738d964ef3772d0', 5, 2, '2024-03-06 07:26:51'),
(33, 'Darius', 'Darius Rus', '487c4e64d9963d350d43a5c1fb9f941601d8653bf4c406ea6e67a53538449498', 5, 3, '2024-03-06 07:26:51'),
(34, 'Geany', 'Geany Vlad', 'ead3b2c3c75c191df3fdff534c1ba9c437b5411423aba8e22219c55d3a253cc0', 6, 3, '2024-03-06 07:26:51'),
(36, 'Viviana', 'Viviana De La Cruz', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 5, 0, '2024-03-06 07:35:06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`idAula`),
  ADD KEY `idUbicacion` (`idUbicacion`),
  ADD KEY `idDepartamento` (`idDepartamento`);

--
-- Indices de la tabla `departec`
--
ALTER TABLE `departec`
  ADD PRIMARY KEY (`idDepartamento`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`idMateriales`),
  ADD KEY `idAula` (`idAula`),
  ADD KEY `idProveedor` (`idProveedor`),
  ADD KEY `idMarca` (`idMarca`);

--
-- Indices de la tabla `prov`
--
ALTER TABLE `prov`
  ADD PRIMARY KEY (`idProveedor`),
  ADD KEY `idTipo` (`idTipo`);

--
-- Indices de la tabla `tipoprod`
--
ALTER TABLE `tipoprod`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `ubi`
--
ALTER TABLE `ubi`
  ADD PRIMARY KEY (`idUbicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idDepartamento` (`idDepartamento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departec`
--
ALTER TABLE `departec`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `idMateriales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `prov`
--
ALTER TABLE `prov`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `tipoprod`
--
ALTER TABLE `tipoprod`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `ubi`
--
ALTER TABLE `ubi`
  MODIFY `idUbicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `aula_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departec` (`idDepartamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aula_ibfk_2` FOREIGN KEY (`idUbicacion`) REFERENCES `ubi` (`idUbicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD CONSTRAINT `materiales_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `marca` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materiales_ibfk_2` FOREIGN KEY (`idProveedor`) REFERENCES `prov` (`idProveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materiales_ibfk_3` FOREIGN KEY (`idAula`) REFERENCES `aula` (`idAula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prov`
--
ALTER TABLE `prov`
  ADD CONSTRAINT `prov_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `tipoprod` (`idTipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departec` (`idDepartamento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

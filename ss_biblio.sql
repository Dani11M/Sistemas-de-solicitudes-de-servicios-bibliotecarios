-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 20:19:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ss_biblio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `IdCateg` varchar(50) NOT NULL,
  `Genero` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `IdLibro` varchar(50) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Autor` varchar(50) DEFAULT NULL,
  `editorial` varchar(50) DEFAULT NULL,
  `FechaIngreso` date DEFAULT NULL,
  `Dispon` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listcategor`
--

CREATE TABLE `listcategor` (
  `IdLC` varchar(50) NOT NULL,
  `IdLibro` varchar(50) DEFAULT NULL,
  `IdCateg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `fechaNa` date DEFAULT NULL,
  `Sexo` tinyint(1) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `email`, `password`, `Nombre`, `Apellido`, `fechaNa`, `Sexo`, `Telefono`) VALUES
(17, '', 'camilo12345@gmail.com', '12345', 'heidy', '0000-00-00', 127, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sollibros`
--

CREATE TABLE `sollibros` (
  `IdSL` int(11) NOT NULL,
  `IdLibro` varchar(50) DEFAULT NULL,
  `idRegistro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscrip`
--

CREATE TABLE `suscrip` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `Valor` int(11) DEFAULT NULL,
  `Benef` varchar(50) DEFAULT NULL,
  `FeRenov` date DEFAULT NULL,
  `idRegistro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IdCateg`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`IdLibro`);

--
-- Indices de la tabla `listcategor`
--
ALTER TABLE `listcategor`
  ADD PRIMARY KEY (`IdLC`),
  ADD KEY `FKLiCa_Lib` (`IdLibro`),
  ADD KEY `FKSLL_Cat` (`IdCateg`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `sollibros`
--
ALTER TABLE `sollibros`
  ADD PRIMARY KEY (`IdSL`),
  ADD KEY `fkso_re` (`idRegistro`),
  ADD KEY `fkso_li` (`IdLibro`);

--
-- Indices de la tabla `suscrip`
--
ALTER TABLE `suscrip`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `sus_registro` (`idRegistro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `sollibros`
--
ALTER TABLE `sollibros`
  MODIFY `IdSL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `suscrip`
--
ALTER TABLE `suscrip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `listcategor`
--
ALTER TABLE `listcategor`
  ADD CONSTRAINT `FKLiCa_Lib` FOREIGN KEY (`IdLibro`) REFERENCES `libros` (`IdLibro`),
  ADD CONSTRAINT `FKSLL_Cat` FOREIGN KEY (`IdCateg`) REFERENCES `categoria` (`IdCateg`);

--
-- Filtros para la tabla `sollibros`
--
ALTER TABLE `sollibros`
  ADD CONSTRAINT `fkso_li` FOREIGN KEY (`IdLibro`) REFERENCES `libros` (`IdLibro`),
  ADD CONSTRAINT `fkso_re` FOREIGN KEY (`idRegistro`) REFERENCES `registro` (`id`);

--
-- Filtros para la tabla `suscrip`
--
ALTER TABLE `suscrip`
  ADD CONSTRAINT `fksu_re` FOREIGN KEY (`idRegistro`) REFERENCES `registro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

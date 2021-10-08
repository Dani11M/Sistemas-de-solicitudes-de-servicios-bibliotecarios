-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2021 a las 00:41:02
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
-- Base de datos: `ss_bibliotecario`
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
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(50) DEFAULT NULL,
  `IdSuscrip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `IdRegistro` varchar(50) NOT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `FeNa` date DEFAULT NULL,
  `Sexo` tinyint(1) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sollibros`
--

CREATE TABLE `sollibros` (
  `IdSL` varchar(50) NOT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `IdLibro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscrip`
--

CREATE TABLE `suscrip` (
  `IdSuscrip` varchar(50) NOT NULL,
  `Valor` int(11) DEFAULT NULL,
  `Benef` varchar(50) DEFAULT NULL,
  `FeRenov` date DEFAULT NULL
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
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Correo`),
  ADD KEY `FKLog_Susc` (`IdSuscrip`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`IdRegistro`),
  ADD KEY `FKReg_Log` (`Correo`);

--
-- Indices de la tabla `sollibros`
--
ALTER TABLE `sollibros`
  ADD PRIMARY KEY (`IdSL`),
  ADD KEY `FKSLL_Log` (`Correo`),
  ADD KEY `FKSLL_Lib` (`IdLibro`);

--
-- Indices de la tabla `suscrip`
--
ALTER TABLE `suscrip`
  ADD PRIMARY KEY (`IdSuscrip`);

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
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `FKLog_Susc` FOREIGN KEY (`IdSuscrip`) REFERENCES `suscrip` (`IdSuscrip`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `FKReg_Log` FOREIGN KEY (`Correo`) REFERENCES `login` (`Correo`);

--
-- Filtros para la tabla `sollibros`
--
ALTER TABLE `sollibros`
  ADD CONSTRAINT `FKSLL_Lib` FOREIGN KEY (`IdLibro`) REFERENCES `libros` (`IdLibro`),
  ADD CONSTRAINT `FKSLL_Log` FOREIGN KEY (`Correo`) REFERENCES `login` (`Correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

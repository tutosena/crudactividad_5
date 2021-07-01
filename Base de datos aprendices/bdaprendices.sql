-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2021 a las 21:17:59
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdaprendices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblaprendices`
--

CREATE TABLE `tblaprendices` (
  `apre_id` int(10) NOT NULL,
  `apre_tipoid` varchar(3) DEFAULT NULL,
  `apre_numid` varchar(20) DEFAULT NULL,
  `apre_nombres` varchar(60) DEFAULT NULL,
  `apre_apellidos` varchar(60) DEFAULT NULL,
  `apre_direccion` varchar(80) DEFAULT NULL,
  `apre_telefono` varchar(20) DEFAULT NULL,
  `apre_ficha` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblficha`
--

CREATE TABLE `tblficha` (
  `ficha_numero` int(10) DEFAULT NULL,
  `ficha_progra` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprograma`
--

CREATE TABLE `tblprograma` (
  `prograp_id` int(10) NOT NULL,
  `progra_nombre` varchar(20) DEFAULT NULL,
  `progra_tipo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltiposprograma`
--

CREATE TABLE `tbltiposprograma` (
  `tiposp_id` int(10) NOT NULL,
  `tiposp_tipos` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

CREATE TABLE `tblusuario` (
  `usua_id` int(10) NOT NULL,
  `usua_nomuser` varchar(50) DEFAULT NULL,
  `usua_contra` varchar(20) DEFAULT NULL,
  `usua_tipo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblaprendices`
--
ALTER TABLE `tblaprendices`
  ADD PRIMARY KEY (`apre_id`),
  ADD KEY `apre_ficha` (`apre_ficha`);

--
-- Indices de la tabla `tblficha`
--
ALTER TABLE `tblficha`
  ADD KEY `ficha_progra` (`ficha_progra`);

--
-- Indices de la tabla `tblprograma`
--
ALTER TABLE `tblprograma`
  ADD PRIMARY KEY (`prograp_id`),
  ADD KEY `progra_tipo` (`progra_tipo`);

--
-- Indices de la tabla `tbltiposprograma`
--
ALTER TABLE `tbltiposprograma`
  ADD PRIMARY KEY (`tiposp_id`);

--
-- Indices de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`usua_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblaprendices`
--
ALTER TABLE `tblaprendices`
  ADD CONSTRAINT `apre_ficha` FOREIGN KEY (`apre_ficha`) REFERENCES `tblficha` (`ficha_progra`);

--
-- Filtros para la tabla `tblficha`
--
ALTER TABLE `tblficha`
  ADD CONSTRAINT `ficha_progra` FOREIGN KEY (`ficha_progra`) REFERENCES `tblprograma` (`prograp_id`);

--
-- Filtros para la tabla `tblprograma`
--
ALTER TABLE `tblprograma`
  ADD CONSTRAINT `progra_tipo` FOREIGN KEY (`progra_tipo`) REFERENCES `tbltiposprograma` (`tiposp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2021 a las 23:23:49
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

--
-- Volcado de datos para la tabla `tblaprendices`
--

INSERT INTO `tblaprendices` (`apre_id`, `apre_tipoid`, `apre_numid`, `apre_nombres`, `apre_apellidos`, `apre_direccion`, `apre_telefono`, `apre_ficha`) VALUES
(3, 'CC', '98470778', 'OMAR', 'MONSALVE', 'CARRERA 19B #16C-57', '3205612458', 2068058);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblficha`
--

CREATE TABLE `tblficha` (
  `ficha_numero` int(10) NOT NULL,
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
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`usua_id`, `usua_nomuser`, `usua_contra`, `usua_tipo`) VALUES
(1065598062, 'EDUARDSENA', '123456', 'ADMINISTRADOR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblaprendices`
--
ALTER TABLE `tblaprendices`
  ADD PRIMARY KEY (`apre_id`);

--
-- Indices de la tabla `tblficha`
--
ALTER TABLE `tblficha`
  ADD PRIMARY KEY (`ficha_numero`);

--
-- Indices de la tabla `tblprograma`
--
ALTER TABLE `tblprograma`
  ADD PRIMARY KEY (`prograp_id`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblaprendices`
--
ALTER TABLE `tblaprendices`
  MODIFY `apre_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

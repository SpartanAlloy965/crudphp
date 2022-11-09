-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 14:49:28
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
-- Base de datos: `oscar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `IdAlumno` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `Apellido` varchar(10) NOT NULL,
  `Correo` varchar(10) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Programa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`IdAlumno`, `nombre`, `Apellido`, `Correo`, `Telefono`, `Programa`) VALUES
(1, 'Alexandra', 'Gonzalez ', 'Alexandra@', 2147483647, 'vendedora'),
(2, 'Alexandra', 'Gonzalez ', 'Alexandra@', 2147483647, 'vendedora'),
(8, 'Alexandra', 'Gonzalez ', 'Alexandra@', 2147483647, 'vendedora'),
(9, 'Alexandra', 'Gonzalez ', 'Alexandra@', 2147483647, 'vendedora'),
(52969647, 'Alexandra', 'Gonzalez ', 'Alexandra@', 2147483647, 'vendedora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `IdCoordinador` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Correo` text NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Sede` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`IdCoordinador`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `Sede`) VALUES
(23, 'Heidy', 'castro', 'Heidy@gmail.com', 2147483647, 'CBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `nombre` text NOT NULL,
  `descripción` text NOT NULL,
  `coordinadorId` int(11) NOT NULL,
  `aprendizId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`IdAlumno`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`IdCoordinador`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`coordinadorId`),
  ADD UNIQUE KEY `aprendizId` (`aprendizId`),
  ADD UNIQUE KEY `coordinadorId` (`coordinadorId`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD CONSTRAINT `novedad_ibfk_1` FOREIGN KEY (`aprendizId`) REFERENCES `alumno` (`IdAlumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `novedad_ibfk_2` FOREIGN KEY (`coordinadorId`) REFERENCES `coordinador` (`IdCoordinador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2024 a las 01:17:03
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
-- Base de datos: `numismatica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conservado`
--

CREATE TABLE `conservado` (
  `id_ec` int(11) NOT NULL,
  `nam_conservado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `conservado`
--

INSERT INTO `conservado` (`id_ec`, `nam_conservado`) VALUES
(1, 'PR - Mala conservacion'),
(2, 'G - Buena conservacion'),
(3, 'F - Regular conservacion'),
(4, 'VF - Muy buena conservacion '),
(5, 'XF - Excelente conservacion'),
(6, 'UNC - Sin circular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

CREATE TABLE `moneda` (
  `id_moneda` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `cara` varchar(100) NOT NULL,
  `cruz` varchar(100) NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `peso` float NOT NULL,
  `material` varchar(30) NOT NULL,
  `lugar_acuñacion` varchar(30) NOT NULL,
  `circulacion` int(11) NOT NULL,
  `lote_origen` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `año_acuñacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monedero`
--

CREATE TABLE `monedero` (
  `id_monedero` int(3) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_moneda` int(11) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `id_ec` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tusuario` int(11) NOT NULL,
  `nombre_tu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tusuario`, `nombre_tu`) VALUES
(0, 'usuario'),
(1, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_tusuario` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_tusuario`, `nombre_usuario`, `correo`, `contraseña`) VALUES
(1, 1, 'Matias', 'matias@gmail.com', '1234'),
(2, 0, 'Arguello', 'arguello@gmail.com', '2233');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conservado`
--
ALTER TABLE `conservado`
  ADD PRIMARY KEY (`id_ec`);

--
-- Indices de la tabla `moneda`
--
ALTER TABLE `moneda`
  ADD PRIMARY KEY (`id_moneda`);

--
-- Indices de la tabla `monedero`
--
ALTER TABLE `monedero`
  ADD KEY `id_usuario` (`id_usuario`,`id_moneda`),
  ADD KEY `monedero_ibfk_1` (`id_moneda`),
  ADD KEY `id_ec` (`id_ec`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_tusuario` (`id_tusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `moneda`
--
ALTER TABLE `moneda`
  MODIFY `id_moneda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `monedero`
--
ALTER TABLE `monedero`
  ADD CONSTRAINT `monedero_ibfk_1` FOREIGN KEY (`id_moneda`) REFERENCES `moneda` (`id_moneda`) ON UPDATE CASCADE,
  ADD CONSTRAINT `monedero_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `monedero_ibfk_3` FOREIGN KEY (`id_ec`) REFERENCES `conservado` (`id_ec`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

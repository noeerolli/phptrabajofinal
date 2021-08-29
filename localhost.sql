-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-08-2021 a las 23:01:50
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id17291699_gestion_alquileres`
--
CREATE DATABASE IF NOT EXISTS `id17291699_gestion_alquileres` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id17291699_gestion_alquileres`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Contrato`
--

CREATE TABLE `Contrato` (
  `id` int(4) NOT NULL,
  `id_propiedad` int(11) DEFAULT NULL,
  `id_propietario` int(20) NOT NULL,
  `id_inquilino` int(20) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `precio` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Contrato`
--

INSERT INTO `Contrato` (`id`, `id_propiedad`, `id_propietario`, `id_inquilino`, `fecha_inicio`, `fecha_fin`, `precio`) VALUES
(17, 31, 15349459, 19456234, '2021-08-27', '2021-10-05', 32000),
(20, 37, 45965446, 12958631, '2021-08-01', '2024-09-23', 30000),
(21, 36, 33922237, 23657495, '2021-01-06', '2024-12-31', 42000),
(22, 30, 34788453, 32560023, '2021-09-06', '2024-05-31', 23000),
(24, 39, 21898448, 12449539, '2021-08-12', '2024-10-06', 40000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Inquilino`
--

CREATE TABLE `Inquilino` (
  `dni` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `telefono` int(40) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Inquilino`
--

INSERT INTO `Inquilino` (`dni`, `nombre`, `telefono`, `email`) VALUES
(12449539, 'Gloria, Fuentes', 221567334, 'gloria@gmail.com'),
(12958631, 'Antonio, Bernal', 1194558, 'antonio@gmail.com'),
(19456234, 'Pedro, Vera', 21893455, 'pepe@gmail'),
(23657495, 'Maria, Enriquez', 22356400, 'mariae@hotmail'),
(32560023, 'Sebastián, Roca', 11776234, 'sebas@hotmail.com'),
(32995023, 'Ana, Martinez', 223554395, 'ana@gmail.com'),
(34439345, 'Franco, Gutierrez', 221567443, 'franco@hotmail');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Propiedad`
--

CREATE TABLE `Propiedad` (
  `id` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `comodidades` text NOT NULL,
  `id_propietario` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Propiedad`
--

INSERT INTO `Propiedad` (`id`, `tipo`, `direccion`, `comodidades`, `id_propietario`) VALUES
(30, 'Local', '11 N°776', 'Salon, baño, depósito', 34788453),
(31, 'Departamento', '45 N1082', 'Cocina, 1 habitacion, baño', 15349459),
(34, 'Vivienda', '480 N°1365', 'cocina comedor, living, 2 habitaciones, cochera', 41459881),
(35, 'Departamento', '120 N°2845', 'Cocina, 1 habitacion, baño', 41459881),
(36, 'Local', '9 N°226', 'Salon, baño, depósito', 33922237),
(37, 'Casa', '24 N°1020', 'Cocina comedor, living, 1 habitacion, baño, parrilla, pileta, cochera', 45965446),
(39, 'Vivienda', '47 N°332', 'cocina,  comedor, living, 2 habitaciones, baño, cochera, pileta', 21898448);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `dni` int(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `telefono` int(40) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`dni`, `nombre`, `telefono`, `email`) VALUES
(15349459, 'Federico, Barrios', 223059883, 'federicob@gmail'),
(21898448, 'Esteban, Torres', 221473780, 'esteban@gmail.com'),
(33922237, 'Carlos, Duran', 221992456, 'carlosduran@gmail'),
(34788453, 'Camila, Lopez', 221997593, 'cami@gmail'),
(41459881, 'Laura, Ramos', 221776883, 'laura@gmail'),
(45965446, 'Elena, Amendola', 221982784, 'elena@gmail');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Contrato`
--
ALTER TABLE `Contrato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_propiedad` (`id_propiedad`),
  ADD KEY `id_propietario` (`id_propietario`),
  ADD KEY `id_inquilino` (`id_inquilino`);

--
-- Indices de la tabla `Inquilino`
--
ALTER TABLE `Inquilino`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `Propiedad`
--
ALTER TABLE `Propiedad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_propietario` (`id_propietario`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Contrato`
--
ALTER TABLE `Contrato`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `Propiedad`
--
ALTER TABLE `Propiedad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Contrato`
--
ALTER TABLE `Contrato`
  ADD CONSTRAINT `Contrato_ibfk_1` FOREIGN KEY (`id_inquilino`) REFERENCES `Inquilino` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Contrato_ibfk_2` FOREIGN KEY (`id_propietario`) REFERENCES `propietario` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_propiedad` FOREIGN KEY (`id_propiedad`) REFERENCES `Propiedad` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

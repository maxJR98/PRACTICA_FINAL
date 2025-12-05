-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2025 a las 02:17:00
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
-- Base de datos: `bdrutavehicular`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chofer`
--

CREATE TABLE `chofer` (
  `idchofer` int(11) NOT NULL,
  `nombrecompleto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `chofer`
--

INSERT INTO `chofer` (`idchofer`, `nombrecompleto`) VALUES
(1, 'Jhonatan Rodrigo Laruta Quino'),
(2, 'Freddy Mamani Condori'),
(3, 'Sonia Apaza Quispe'),
(4, 'Luis Fernando Choque'),
(5, 'Carla Mendoza Vaca'),
(6, 'Roberto Carlos Salinas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parada`
--

CREATE TABLE `parada` (
  `idparada` int(11) NOT NULL,
  `puntoparada` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parada`
--

INSERT INTO `parada` (`idparada`, `puntoparada`, `descripcion`) VALUES
(1, 'Universidad Pública de El Alto (UPEA)', 'Zona Villa Esperanza, Av. Sucre'),
(2, 'Plaza Murillo', 'Centro Político, Km 0'),
(3, 'La Ceja', 'Puente Distribuidor, El Alto'),
(4, 'Terminal de Buses La Paz', 'Zona Challapampa'),
(5, 'Estación Teleférico Rojo', 'Zona 16 de Julio'),
(6, 'El Prado', 'Av. 16 de Julio, Centro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recorrido`
--

CREATE TABLE `recorrido` (
  `idrecorrido` int(11) NOT NULL,
  `idchofer` int(11) NOT NULL,
  `idvehiculo` int(11) NOT NULL,
  `idparada` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recorrido`
--

INSERT INTO `recorrido` (`idrecorrido`, `idchofer`, `idvehiculo`, `idparada`, `fecha`, `hora`) VALUES
(1, 1, 1, 1, '2025-12-02', '08:00:00'),
(2, 2, 4, 3, '2025-12-02', '09:30:00'),
(3, 3, 3, 2, '2025-12-03', '14:15:00'),
(4, 4, 2, 5, '2025-12-03', '10:00:00'),
(5, 5, 5, 6, '2025-12-04', '19:00:00'),
(6, 6, 6, 4, '2025-12-04', '06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idvehiculo` int(11) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idvehiculo`, `placa`, `color`, `modelo`, `tipo`) VALUES
(1, '4092-NKS', 'Negro', 'Mustang Shelby GT500', 'Deportivo'),
(2, '2356-XRT', 'Blanco', 'Toyota Hilux 4x4', 'Camioneta'),
(3, '5890-LPD', 'Plata', 'Nissan Versa', 'Sedan'),
(4, '1029-UPE', 'Blanco', 'Minibus Toyota Hiace', 'Transporte Público'),
(5, '3478-ZZZ', 'Gris', 'Suzuki Grand Vitara', 'Vagoneta'),
(6, '9081-PTR', 'Azul', 'Volvo F12', 'Camión Pesado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chofer`
--
ALTER TABLE `chofer`
  ADD PRIMARY KEY (`idchofer`);

--
-- Indices de la tabla `parada`
--
ALTER TABLE `parada`
  ADD PRIMARY KEY (`idparada`);

--
-- Indices de la tabla `recorrido`
--
ALTER TABLE `recorrido`
  ADD PRIMARY KEY (`idrecorrido`),
  ADD KEY `idchofer` (`idchofer`),
  ADD KEY `idvehiculo` (`idvehiculo`),
  ADD KEY `idparada` (`idparada`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`idvehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chofer`
--
ALTER TABLE `chofer`
  MODIFY `idchofer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `parada`
--
ALTER TABLE `parada`
  MODIFY `idparada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `recorrido`
--
ALTER TABLE `recorrido`
  MODIFY `idrecorrido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idvehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recorrido`
--
ALTER TABLE `recorrido`
  ADD CONSTRAINT `recorrido_ibfk_1` FOREIGN KEY (`idchofer`) REFERENCES `chofer` (`idchofer`),
  ADD CONSTRAINT `recorrido_ibfk_2` FOREIGN KEY (`idvehiculo`) REFERENCES `vehiculo` (`idvehiculo`),
  ADD CONSTRAINT `recorrido_ibfk_3` FOREIGN KEY (`idparada`) REFERENCES `parada` (`idparada`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

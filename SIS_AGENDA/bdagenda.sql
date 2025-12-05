-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2025 a las 01:55:32
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
-- Base de datos: `bdagenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendacion`
--

CREATE TABLE `agendacion` (
  `idagendacion` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `actividad` varchar(100) DEFAULT NULL,
  `completado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agendacion`
--

INSERT INTO `agendacion` (`idagendacion`, `idpersona`, `fecha`, `hora`, `actividad`, `completado`) VALUES
(1, 1, '2025-12-04', '20:48:00', 'tarea emergentes completo', 'SI'),
(2, 2, '2024-03-15', '09:00:00', 'Revisión de avance de proyecto', 'NO'),
(3, 3, '2026-01-10', '10:30:00', 'Capacitación de nuevo personal', 'SI'),
(4, 4, '2024-11-05', '14:00:00', 'Entrega de informes mensuales', 'NO'),
(5, 5, '2025-05-22', '16:00:00', 'Mantenimiento de servidores', 'NO'),
(6, 6, '2026-02-14', '08:30:00', 'Reunión con proveedores', 'SI'),
(7, 7, '2024-08-30', '11:00:00', 'Auditoría interna de sistemas', 'NO'),
(8, 8, '2025-09-12', '09:15:00', 'Actualización de base de datos', 'SI'),
(9, 9, '2024-04-18', '15:45:00', 'Presentación de prototipo', 'NO'),
(10, 10, '2026-06-25', '13:00:00', 'Almuerzo de equipo', 'SI'),
(11, 11, '2024-12-08', '17:00:00', 'Respaldo de información (Backup)', 'NO'),
(12, 12, '2025-02-14', '10:00:00', 'Planificación semanal', 'NO'),
(13, 13, '2026-08-03', '12:30:00', 'Soporte técnico a gerencia', 'SI'),
(14, 14, '2024-05-20', '08:45:00', 'Instalación de software contable', 'NO'),
(15, 15, '2025-10-10', '14:20:00', 'Revisión de contratos', 'SI'),
(16, 16, '2026-03-28', '09:30:00', 'Capacitación en seguridad', 'NO'),
(17, 17, '2024-11-15', '11:15:00', 'Inventario de equipos', 'NO'),
(18, 18, '2025-01-05', '15:00:00', 'Testing de nueva aplicación', 'SI'),
(19, 4, '2026-04-12', '10:00:00', 'Videoconferencia con sucursal', 'NO'),
(20, 5, '2025-07-20', '16:30:00', 'Limpieza de archivos temporales', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `nombre`, `paterno`, `materno`, `fechanacimiento`) VALUES
(1, 'Jhonatan Rodrigo', 'Laruta', 'Quino', '2005-05-21'),
(2, 'Maria', 'Gomez', 'Arce', '1995-08-20'),
(3, 'Carlos', 'Mamani', 'Quispe', '1988-12-10'),
(4, 'Ana', 'Flores', 'Mamani', '1992-03-15'),
(5, 'Pedro', 'Quispe', 'Vargas', '1985-07-22'),
(6, 'Luisa', 'Gutierrez', 'Condori', '1998-11-05'),
(7, 'Jorge', 'Silva', 'Mendoza', '1990-01-30'),
(8, 'Sofia', 'Rojas', 'Aliaga', '1995-09-12'),
(9, 'Miguel', 'Fernandez', 'Choque', '1988-04-18'),
(10, 'Carmen', 'Villarroel', 'Paz', '1993-06-25'),
(11, 'Roberto', 'Justiniano', 'Vaca', '1982-12-08'),
(12, 'Patricia', 'Torrez', 'Duran', '1997-02-14'),
(13, 'Diego', 'Castro', 'Guzman', '1991-08-03'),
(14, 'Elena', 'Morales', 'Apaza', '1994-05-20'),
(15, 'Javier', 'Ortega', 'Lima', '1989-10-10'),
(16, 'Valeria', 'Mendez', 'Copa', '1999-03-28'),
(17, 'Fernando', 'Romero', 'Salvatierra', '1987-11-15'),
(18, 'Gabriela', 'Suarez', 'Ticona', '1996-01-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendacion`
--
ALTER TABLE `agendacion`
  ADD PRIMARY KEY (`idagendacion`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendacion`
--
ALTER TABLE `agendacion`
  MODIFY `idagendacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

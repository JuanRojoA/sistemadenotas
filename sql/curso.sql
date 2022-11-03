-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2022 a las 19:26:02
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `correo` varchar(100) NOT NULL,
  `contrasena` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`correo`, `contrasena`) VALUES
('david3166727378@gmail.com', 1127207842);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `documento` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `programa` varchar(100) NOT NULL,
  `contrasena` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`documento`, `nombre`, `numero`, `correo`, `programa`, `contrasena`) VALUES
(10002345242, 'Juan Granados', 1213513511, 'jaunmagrana@hotmail.com', 'Informatica', 9999),
(11200122300, 'Ferndado Alpujarra', 2147483647, 'fernsa@gmail.com', 'Programacion de Software', 55555),
(856342754272, 'Andrés Valdés', 654354646, 'andres@gmail.com', 'Matemáticas', 11111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `documento` bigint(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `numero` int(15) NOT NULL,
  `edad` int(2) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `nota3` float NOT NULL,
  `contrasena` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`documento`, `correo`, `curso`, `nombre`, `apellido`, `numero`, `edad`, `nota1`, `nota2`, `nota3`, `contrasena`) VALUES
(112001223, 'mendosarosales@gmail.com', 'Programación', 'Juan Manuel', 'Mendosa Rosales ', 2147483647, 21, 3, 4.2, 5, '12345'),
(1127207842, 'david3166727378@gmail.com', 'Ingles', 'Isaac David', 'Delgado Londoño', 1354351321, 16, 3.2, 2, 5, '123456'),
(6121321321, 'salo@hotmail.com', 'diseño grafico', 'Salome', 'Vásquez', 2147483647, 16, 3.2, 4.6, 2.9, '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

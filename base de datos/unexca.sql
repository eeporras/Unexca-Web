-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 00:39:28
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unexca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_usuario` int(10) NOT NULL,
  `primer_nombre` varchar(40) NOT NULL,
  `segundo_nombre` varchar(40) NOT NULL,
  `primer_apellido` varchar(40) NOT NULL,
  `segundo_apellido` varchar(40) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `cedula` int(8) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `numero_telefonico1` varchar(14) NOT NULL,
  `numero_telefonico2` varchar(14) NOT NULL,
  `fecha_inscripcion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_usuario`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `cedula`, `genero`, `correo`, `numero_telefonico1`, `numero_telefonico2`, `fecha_inscripcion`) VALUES
(1, 'Maglio', 'Alfonso', 'Padron', 'Parra', '1997-03-20', 27107056, 'Masculino', 'magliopadron49@gmail.com', '2147483647', '2147483647', '2011-03-23 04:00:00'),
(7, 'Ernesto', 'Ezequiel', 'Porras', 'Garcia', '2001-03-25', 28027516, 'Masculino', 'ernestoezequiel813@gmail.com', '04126350834', '02124824616', '2023-03-12 03:42:50'),
(8, 'gabriel', 'Alejandro', 'Arias', 'Jardin', '2000-03-02', 27515654, 'Masculino', 'ernestoezequiel813@gmail.com', '04126350834', '02124824616', '2023-03-12 04:05:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `parroquia` varchar(40) NOT NULL,
  `avenida` varchar(60) NOT NULL,
  `casa` varchar(20) NOT NULL,
  `apartamento` varchar(5) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id_direccion`, `estado`, `ciudad`, `municipio`, `parroquia`, `avenida`, `casa`, `apartamento`, `id_usuario`) VALUES
(6, 'Distrito Capital', 'Caracas', 'libertador', 'el paraiso', 'av paez', 'residencia victoria', '8a', 7),
(7, 'Distrito Capital', 'Caracas', 'libertador', 'Los teques', 'av paez', 'Casa 80', '80', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio`
--

CREATE TABLE `estudio` (
  `id_estudio` int(11) NOT NULL,
  `carrera` varchar(40) NOT NULL,
  `turno` varchar(40) NOT NULL,
  `plan_estudio` varchar(40) NOT NULL,
  `trayecto` varchar(5) NOT NULL,
  `semestre` varchar(5) NOT NULL,
  `id_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudio`
--

INSERT INTO `estudio` (`id_estudio`, `carrera`, `turno`, `plan_estudio`, `trayecto`, `semestre`, `id_usuario`) VALUES
(6, 'PNF Inform�tica', 'Diurno', 'TSU (T�cnico Superior Universitario)', 'II', 'II', 7),
(7, 'PNF Inform�tica', 'Diurno', 'TSU (T�cnico Superior Universitario)', 'II', 'II', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_alumnos` int(11) NOT NULL,
  `id_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(10) NOT NULL,
  `primer_nombre` varchar(40) NOT NULL,
  `segundo_nombre` varchar(40) NOT NULL,
  `primer_apellido` varchar(40) NOT NULL,
  `segundo_apellido` varchar(40) NOT NULL,
  `cedula` int(8) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `materia` varchar(40) NOT NULL,
  `codigo_materia` int(20) NOT NULL,
  `codigo_profesor` int(20) NOT NULL,
  `usuario` int(8) NOT NULL,
  `contraseña` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` int(9) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `password`, `id_usuario`) VALUES
(33, 28027516, '123', 0),
(34, 14194223, '123', 0),
(35, 25795654, 'leones11', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD PRIMARY KEY (`id_estudio`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_alumnos`,`id_direccion`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estudio`
--
ALTER TABLE `estudio`
  MODIFY `id_estudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `alumnos` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD CONSTRAINT `estudio_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `alumnos` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`id_alumnos`) REFERENCES `alumnos` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

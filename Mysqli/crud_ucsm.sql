-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2022 a las 00:25:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_ucsm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(8) UNSIGNED NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `phone` int(9) NOT NULL,
  `direction` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `firstname`, `last_name`, `phone`, `direction`, `email`) VALUES
(11111111, 'Marcos', 'Calderon', 912919191, 'Calle Narnia SN', 'marco@hotmail.com'),
(73327472, 'Bryan', 'Torres', 932618981, 'AV Ejercito', 'aaa@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciocliente`
--

CREATE TABLE `serviciocliente` (
  `ID_SERVICIOCLIENTE` int(11) UNSIGNED NOT NULL,
  `ID_SERVICIO` int(11) UNSIGNED NOT NULL,
  `ID_CLIENTE` int(11) UNSIGNED NOT NULL,
  `FECHA_ENTREGA` date NOT NULL,
  `FECHA_HORA` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `serviciocliente`
--

INSERT INTO `serviciocliente` (`ID_SERVICIOCLIENTE`, `ID_SERVICIO`, `ID_CLIENTE`, `FECHA_ENTREGA`, `FECHA_HORA`) VALUES
(13, 132932199, 73327472, '2022-11-23', '2022-11-03 23:27:05'),
(16, 132932199, 73327472, '2022-11-28', '2022-11-04 00:16:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `cost` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `firstname`, `cost`) VALUES
(1, 'Transporte', 100),
(132932199, 'Limpieza', 700);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `birthday`, `username`, `password`) VALUES
(1, 'Pepito', 'Jose', 'Ruiz', '1900-01-01', 'pepito', 'pepito'),
(2, 'Jose', 'Enrrique', 'Vilca', '2000-02-12', 'josee', 'josee');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `serviciocliente`
--
ALTER TABLE `serviciocliente`
  ADD PRIMARY KEY (`ID_SERVICIOCLIENTE`),
  ADD KEY `ID_SERVICIO` (`ID_SERVICIO`),
  ADD KEY `ID_CLIENTE` (`ID_CLIENTE`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `serviciocliente`
--
ALTER TABLE `serviciocliente`
  MODIFY `ID_SERVICIOCLIENTE` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `serviciocliente`
--
ALTER TABLE `serviciocliente`
  ADD CONSTRAINT `clientes_id_serviciocliente` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `estudiantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `servicios_id_serviciocliente` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 09-05-2025 a las 01:55:23
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
-- Base de datos: `phpsena_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `pk_id_persona` int(11) NOT NULL,
  `pers_nombre` varchar(40) NOT NULL,
  `pers_telefono` varchar(15) NOT NULL,
  `pers_correo` varchar(50) NOT NULL,
  `pers_clave` varchar(255) NOT NULL,
  `pers_fecha_registro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`pk_id_persona`, `pers_nombre`, `pers_telefono`, `pers_correo`, `pers_clave`, `pers_fecha_registro`) VALUES
(1, 'Juanito Velez', '3105679808', 'juanito@sena.edu.co', '12345', '2025-04-30 20:45:31'),
(2, 'Danilo', '36665985', 'cabarrientos@sena.edu.co', '123', '2025-05-02 18:22:11'),
(3, 'sdads', 'adsasd', 'cabarrientos@sena.edu.co', '123', '2025-05-02 18:49:13'),
(4, 'asdad', 'asdasd', 'cabarrientos@sena.edu.co', '123', '2025-05-02 18:50:18'),
(5, 'Danilo', '315259652', 'danilo@gmail.com', '123', '2025-05-05 18:34:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `pk_id_iproducto` int(11) NOT NULL,
  `prod_nombre` varchar(20) NOT NULL,
  `prod_cantidad` int(10) NOT NULL,
  `prod_precio` float NOT NULL,
  `prod_fecha_registro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`pk_id_iproducto`, `prod_nombre`, `prod_cantidad`, `prod_precio`, `prod_fecha_registro`) VALUES
(1, 'Play', 1000, 1000000, '2025-05-05 18:37:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`pk_id_persona`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`pk_id_iproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `pk_id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `pk_id_iproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2023 a las 15:49:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_autos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_autos`
--

CREATE TABLE `tb_autos` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `agno` varchar(50) NOT NULL,
  `motor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_autos`
--

INSERT INTO `tb_autos` (`id`, `marca`, `modelo`, `color`, `agno`, `motor`) VALUES
(37, 'Renault', 'CElysee', 'Azul light', '2010', 1600),
(41, 'Fiat', 'Palio', 'Verde musgo', '2005', 1400),
(43, 'Peugeot', '405', 'Burdeos', '2011', 1800),
(44, 'Opel', 'Astra', 'Verde acqua', '2000', 2000),
(45, 'Citroen', 'CElysee', 'Negro', '2020', 2023),
(46, 'Audi', 'A5', 'Rojo', '2023', 2400),
(47, 'Hyundai', 'Sonata', 'Amarillo', '2018', 1800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `nombre`, `url`, `estado`) VALUES
(1, 'insertar', 'insertar.php', 1),
(2, 'leer-todos', 'leer-todos.php', 1),
(3, 'modificar', 'modificar.php', 1),
(4, 'eliminar', 'eliminar.php', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_autos`
--
ALTER TABLE `tb_autos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_autos`
--
ALTER TABLE `tb_autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

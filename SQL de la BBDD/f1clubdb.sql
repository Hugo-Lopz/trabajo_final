-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-03-2024 a las 13:03:45
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
-- Base de datos: `f1clubdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupon`
--

CREATE TABLE `cupon` (
  `id` int(11) NOT NULL,
  `codigo_cupon` varchar(20) NOT NULL,
  `porcentaje_descuento` int(11) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cupon`
--

INSERT INTO `cupon` (`id`, `codigo_cupon`, `porcentaje_descuento`, `fecha_caducidad`, `descripcion`) VALUES
(1, 'rebajaEquipoRedBull', 20, '2024-03-22', 'Todos los productos del equipo red bull tendrán una rebaja del 20%');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupon_usuario`
--

CREATE TABLE `cupon_usuario` (
  `cupon_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento`
--

CREATE TABLE `descuento` (
  `id` int(11) NOT NULL,
  `porcentaje_descuento` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_finalizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240131200451', '2024-01-31 20:05:58', 968),
('DoctrineMigrations\\Version20240201184748', '2024-02-01 18:48:04', 1575),
('DoctrineMigrations\\Version20240201200654', '2024-02-01 20:07:02', 1256),
('DoctrineMigrations\\Version20240201200832', '2024-02-01 20:08:35', 2416),
('DoctrineMigrations\\Version20240201201213', '2024-02-01 20:12:16', 361),
('DoctrineMigrations\\Version20240206140846', '2024-02-06 14:09:06', 9590),
('DoctrineMigrations\\Version20240206141556', '2024-02-06 14:16:20', 5386),
('DoctrineMigrations\\Version20240206142135', '2024-02-06 14:21:42', 5584),
('DoctrineMigrations\\Version20240206142535', '2024-02-06 14:25:43', 7565),
('DoctrineMigrations\\Version20240206143158', '2024-02-06 14:32:03', 2647),
('DoctrineMigrations\\Version20240206143357', '2024-02-06 14:34:02', 8394),
('DoctrineMigrations\\Version20240206144329', '2024-02-06 14:43:37', 2141),
('DoctrineMigrations\\Version20240206164629', '2024-02-06 16:46:35', 5344),
('DoctrineMigrations\\Version20240206165310', '2024-02-06 16:53:19', 1510),
('DoctrineMigrations\\Version20240206175644', '2024-02-06 17:56:50', 4571),
('DoctrineMigrations\\Version20240206180521', '2024-02-06 18:05:26', 9979),
('DoctrineMigrations\\Version20240206180654', '2024-02-06 18:06:59', 9470),
('DoctrineMigrations\\Version20240206180906', '2024-02-06 18:09:14', 5844),
('DoctrineMigrations\\Version20240206181758', '2024-02-06 18:18:06', 9251),
('DoctrineMigrations\\Version20240207195724', '2024-02-07 19:57:38', 40086),
('DoctrineMigrations\\Version20240207200441', '2024-02-07 20:04:51', 20732),
('DoctrineMigrations\\Version20240209154827', '2024-02-09 15:48:43', 77877),
('DoctrineMigrations\\Version20240209161329', '2024-02-09 16:13:41', 328),
('DoctrineMigrations\\Version20240209161521', '2024-02-09 16:15:28', 16986),
('DoctrineMigrations\\Version20240216152623', '2024-02-16 15:27:17', 1162),
('DoctrineMigrations\\Version20240216153120', '2024-02-16 15:31:26', 4212),
('DoctrineMigrations\\Version20240220163648', '2024-02-26 11:59:00', 5677),
('DoctrineMigrations\\Version20240220180906', '2024-02-26 11:59:05', 46),
('DoctrineMigrations\\Version20240220181105', '2024-02-26 11:59:05', 31),
('DoctrineMigrations\\Version20240226120027', '2024-02-26 12:00:33', 13),
('DoctrineMigrations\\Version20240227104219', '2024-02-27 10:42:28', 92),
('DoctrineMigrations\\Version20240301094507', '2024-03-01 09:45:13', 103),
('DoctrineMigrations\\Version20240304093742', '2024-03-04 09:37:49', 87),
('DoctrineMigrations\\Version20240304100103', '2024-03-04 10:01:09', 18),
('DoctrineMigrations\\Version20240309123802', '2024-03-09 12:38:17', 62);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(11) NOT NULL,
  `nombre_equipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `nombre_equipo`) VALUES
(1, 'Red Bull'),
(2, 'Aston Martin'),
(3, 'Mercedes'),
(4, 'Mclaren'),
(5, 'Ferrari'),
(6, 'Alpine'),
(7, 'Haas'),
(8, 'Alfa Romeo'),
(9, 'Alpha Tauri'),
(10, 'Williams');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escala`
--

CREATE TABLE `escala` (
  `id` int(11) NOT NULL,
  `nombre_escala` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `escala`
--

INSERT INTO `escala` (`id`, `nombre_escala`) VALUES
(1, '1/18'),
(2, '1/24'),
(3, '1/43'),
(4, '1/64');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabricante`
--

CREATE TABLE `fabricante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fabricante`
--

INSERT INTO `fabricante` (`id`, `nombre`) VALUES
(1, 'Spark'),
(2, 'Minichamps'),
(3, 'Premium Collectibles'),
(4, 'Tarmac');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `url_imagen` varchar(255) NOT NULL,
  `producto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `url_imagen`, `producto_id`) VALUES
(1, 'fotos_catalogo/aston-martin-amr23-lance-stroll-spark-1-18-1.jpg', 1),
(3, 'fotos_catalogo/aston-martin-amr23-lance-stroll-spark-1-18-2.jpg', 1),
(4, 'fotos_catalogo/aston-martin-amr23-lance-stroll-spark-1-18-3.jpg', 1),
(5, 'fotos_catalogo/red-bull-rb18-m-verstappen-minichamps-escala-1-18-1.jpg', 2),
(6, 'fotos_catalogo/red-bull-rb18-m-verstappen-minichamps-escala-1-18-2.jpg', 2),
(7, 'fotos_catalogo/red-bull-rb18-m-verstappen-minichamps-escala-1-18-3.jpg', 2),
(8, 'fotos_catalogo/alfa-romeo-c43-guanyu-zhou-spark-1-43-1.jpg', 3),
(9, 'fotos_catalogo/alfa-romeo-c43-guanyu-zhou-spark-1-43-2.jpg', 3),
(10, 'fotos_catalogo/alfa-romeo-c43-guanyu-zhou-spark-1-43-3.jpg', 3),
(11, 'fotos_catalogo/alpine-a521-fernando-alonso-minichamps-1-43-1.jpg', 4),
(12, 'fotos_catalogo/alpine-a521-fernando-alonso-minichamps-1-43-2.jpg', 4),
(13, 'fotos_catalogo/alpine-a521-fernando-alonso-minichamps-1-43-3.jpg', 4),
(14, 'fotos_catalogo/ferrari-312t-niki-lauda-premium-collectibles-1-24-1.jpg', 5),
(15, 'fotos_catalogo/ferrari-312t-niki-lauda-premium-collectibles-1-24-2.jpg', 5),
(16, 'fotos_catalogo/ferrari-312t-niki-lauda-premium-collectibles-1-24-3.jpg', 5),
(17, 'fotos_catalogo/williams-fw14b-nigel-mansell-premium-collectibles-1-24-1.jpg', 6),
(18, 'fotos_catalogo/williams-fw14b-nigel-mansell-premium-collectibles-1-24-2.jpg', 6),
(19, 'fotos_catalogo/williams-fw14b-nigel-mansell-premium-collectibles-1-24-3.jpg', 6),
(20, 'fotos_catalogo/mclaren-mcl35m-lando-norris-tarmac-1-64-1.jpg', 8),
(21, 'fotos_catalogo/mclaren-mcl35m-lando-norris-tarmac-1-64-2.jpg', 8),
(22, 'fotos_catalogo/mclaren-mcl35m-lando-norris-tarmac-1-64-3.jpg', 8),
(23, 'fotos_catalogo/mercedes-w11-lewis-hamilton-tarmac-1-64-1.jpg', 7),
(24, 'fotos_catalogo/mercedes-w11-lewis-hamilton-tarmac-1-64-2.jpg', 7),
(25, 'fotos_catalogo/mercedes-w11-lewis-hamilton-tarmac-1-64-3.jpg', 7),
(26, 'fotos_catalogo/alpha-tauri-at04-yuki-tsunoda-spark-1-43-1.jpg', 9),
(27, 'fotos_catalogo/alpha-tauri-at04-yuki-tsunoda-spark-1-43-2.jpg', 9),
(28, 'fotos_catalogo/alpha-tauri-at04-yuki-tsunoda-spark-1-43-3.jpg', 9),
(29, 'fotos_catalogo/alpha-tauri-at03-pierre-gasly-minichamps-1-18-1.jpg', 10),
(30, 'fotos_catalogo/alpha-tauri-at03-pierre-gasly-minichamps-1-18-2.jpg', 10),
(31, 'fotos_catalogo/alpha-tauri-at03-pierre-gasly-minichamps-1-18-3.jpg', 10),
(32, 'fotos_catalogo/haas-vf-21-mick-schumacher-minichamps-1-18-1.jpg', 11),
(33, 'fotos_catalogo/haas-vf-21-mick-schumacher-minichamps-1-18-2.jpg', 11),
(34, 'fotos_catalogo/haas-vf-21-mick-schumacher-minichamps-1-18-3.jpg', 11),
(35, 'fotos_catalogo/haas-vf-22-mick-schumacher-minichamps-1-43-1.jpg', 12),
(36, 'fotos_catalogo/haas-vf-22-mick-schumacher-minichamps-1-43-2.jpg', 12),
(37, 'fotos_catalogo/haas-vf-22-mick-schumacher-minichamps-1-43-3.jpg', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_pedido`
--

CREATE TABLE `linea_pedido` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `linea_pedido`
--

INSERT INTO `linea_pedido` (`id`, `nombre_producto`, `cantidad`, `precio`, `pedido_id`, `producto_id`) VALUES
(7, 'Mercedes-AMG W11 Lewis Hamilton ', 1, 20.96, 6, 7),
(8, 'Alpha Tauri AT03 Pierre Gasly', 1, 169.95, 7, 10),
(9, 'Haas VF-21 Mick Schumacher', 1, 149.95, 8, 11),
(10, 'Aston Martin AMR23 Lance Stroll', 1, 209.95, 8, 1),
(11, 'Ferrari 312t Niki Lauda', 2, 42.42, 9, 5),
(12, 'Alpine A521 Fernando Alonso', 9, 683.55, 9, 4),
(13, 'Mercedes-AMG W11 Lewis Hamilton ', 1, 20.96, 10, 7),
(14, 'Mclaren MCL35M Lando Norris', 1, 24.95, 10, 8),
(15, 'Haas VF-21 Mick Schumacher', 2, 299.9, 11, 11),
(16, 'Alfa Romeo C43 GuanYu Zhou', 2, 149.9, 11, 3),
(17, 'Mercedes-AMG W11 Lewis Hamilton ', 3, 62.88, 11, 7),
(18, 'Williams FW14B Nigel Mansell', 3, 63.63, 11, 6),
(19, 'Red Bull RB18 Max Verstappen', 2, 299.9, 12, 2),
(20, 'Alpha Tauri AT03 Pierre Gasly', 2, 339.9, 12, 10),
(21, 'Aston Martin AMR23 Lance Stroll', 2, 419.9, 12, 1),
(22, 'Haas VF-21 Mick Schumacher', 1, 149.95, 13, 11),
(23, 'Red Bull RB18 Max Verstappen', 3, 449.85, 13, 2),
(24, 'Ferrari 312t Niki Lauda', 2, 42.42, 13, 5),
(25, 'Alpha Tauri AT04 Yuki Tsunoda', 1, 74.95, 13, 9),
(26, 'Red Bull RB18 Max Verstappen', 2, 299.9, 14, 2),
(27, 'Aston Martin AMR23 Lance Stroll', 2, 419.9, 14, 1),
(28, 'Alfa Romeo C43 GuanYu Zhou', 2, 149.9, 15, 3),
(29, 'Ferrari 312t Niki Lauda', 2, 42.42, 16, 5),
(30, 'Williams FW14B Nigel Mansell', 2, 42.42, 17, 6),
(31, 'Ferrari 312t Niki Lauda', 1, 21.21, 18, 5),
(32, 'Haas VF-21 Mick Schumacher', 1, 149.95, 19, 11),
(33, 'Red Bull RB18 Max Verstappen', 1, 149.95, 20, 2),
(34, 'Red Bull RB18 Max Verstappen', 1, 149.95, 21, 2),
(35, 'Red Bull RB18 Max Verstappen', 1, 149.95, 22, 2),
(36, 'Alpha Tauri AT03 Pierre Gasly', 1, 169.95, 23, 10),
(37, 'Alfa Romeo C43 GuanYu Zhou', 1, 74.95, 24, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_deseos`
--

CREATE TABLE `lista_deseos` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lista_deseos`
--

INSERT INTO `lista_deseos` (`id`) VALUES
(5),
(8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_de_pago`
--

CREATE TABLE `metodo_de_pago` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metodo_de_pago`
--

INSERT INTO `metodo_de_pago` (`id`, `nombre`) VALUES
(1, 'Tarjeta de crédito'),
(2, 'PayPal'),
(4, 'Transferencia bancaria'),
(5, 'Contra reembolso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `estado_pedido` varchar(100) NOT NULL,
  `fecha_envio` date NOT NULL,
  `coste_total` double NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `metodo_de_pago_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `fecha_pedido`, `estado_pedido`, `fecha_envio`, `coste_total`, `usuario_id`, `metodo_de_pago_id`) VALUES
(6, '2024-03-06', 'En reparto', '2024-03-13', 20.96, 19, 2),
(7, '2024-03-06', 'En reparto', '2024-03-13', 169.95, 19, 4),
(8, '2024-03-06', 'En reparto', '2024-03-13', 359.9, 19, 2),
(9, '2024-03-08', 'En reparto', '2024-03-15', 725.97, 19, 4),
(10, '2024-03-09', 'En reparto', '2024-03-16', 45.91, 19, 4),
(11, '2024-03-09', 'En reparto', '2024-03-16', 576.31, 23, 5),
(12, '2024-03-09', 'En reparto', '2024-03-16', 1059.7, 23, 4),
(13, '2024-03-09', 'En reparto', '2024-03-16', 717.17, 23, 2),
(14, '2024-03-09', 'En reparto', '2024-03-16', 719.8, 19, 2),
(15, '2024-03-09', 'En reparto', '2024-03-16', 149.9, 19, 4),
(16, '2024-03-09', 'En reparto', '2024-03-16', 42.42, 19, 2),
(17, '2024-03-09', 'En reparto', '2024-03-16', 42.42, 19, 2),
(18, '2024-03-10', 'En reparto', '2024-03-17', 21.21, 19, 4),
(19, '2024-03-10', 'En reparto', '2024-03-17', 149.95, 19, 2),
(20, '2024-03-10', 'En reparto', '2024-03-17', 149.95, 19, 1),
(21, '2024-03-10', 'En reparto', '2024-03-17', 149.95, 19, 2),
(22, '2024-03-10', 'En reparto', '2024-03-17', 149.95, 19, 4),
(23, '2024-03-11', 'En reparto', '2024-03-18', 169.95, 23, 5),
(24, '2024-03-11', 'En reparto', '2024-03-18', 74.95, 23, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `nombre_producto` varchar(200) NOT NULL,
  `fabricante_id` int(11) NOT NULL,
  `descuento_id` int(11) DEFAULT NULL,
  `equipo_id` int(11) NOT NULL,
  `precio` double DEFAULT NULL,
  `escala_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `stock`, `nombre_producto`, `fabricante_id`, `descuento_id`, `equipo_id`, `precio`, `escala_id`) VALUES
(1, 35, 'Aston Martin AMR23 Lance Stroll', 1, NULL, 2, 209.95, 1),
(2, 88, 'Red Bull RB18 Max Verstappen', 2, NULL, 1, 149.95, 1),
(3, 20, 'Alfa Romeo C43 GuanYu Zhou', 1, NULL, 8, 74.95, 3),
(4, 1, 'Alpine A521 Fernando Alonso', 2, NULL, 6, 75.95, 3),
(5, 60, 'Ferrari 312t Niki Lauda', 3, NULL, 5, 21.21, 2),
(6, 40, 'Williams FW14B Nigel Mansell', 3, NULL, 10, 21.21, 2),
(7, 10, 'Mercedes-AMG W11 Lewis Hamilton ', 4, NULL, 3, 20.96, 4),
(8, 34, 'Mclaren MCL35M Lando Norris', 4, NULL, 4, 24.95, 4),
(9, 4, 'Alpha Tauri AT04 Yuki Tsunoda', 1, NULL, 9, 74.95, 3),
(10, 0, 'Alpha Tauri AT03 Pierre Gasly', 2, NULL, 9, 169.95, 1),
(11, 2, 'Haas VF-21 Mick Schumacher', 2, NULL, 7, 149.95, 1),
(12, 40, 'Haas VF-22 Mick Schumacher', 2, NULL, 7, 75.95, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_lista_deseos`
--

CREATE TABLE `producto_lista_deseos` (
  `producto_id` int(11) NOT NULL,
  `lista_deseos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_lista_deseos`
--

INSERT INTO `producto_lista_deseos` (`producto_id`, `lista_deseos_id`) VALUES
(2, 5),
(10, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `codigo_postal` int(11) DEFAULT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `nombre` varchar(70) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `dinero_gastado` int(11) DEFAULT NULL,
  `fecha_de_creacion` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `lista_deseos_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `roles`, `password`, `codigo_postal`, `calle`, `ciudad`, `nombre`, `apellidos`, `dinero_gastado`, `fecha_de_creacion`, `lista_deseos_id`) VALUES
(19, 'hugo@gmail.com', '[\"ROLE_USER\"]', '$2y$13$gHNum/3OH5hqOQqdrYx0PeJnSh3XrvNByyksG0kGEtCcMNfBLxnTK', 3344, 'ldkd', 'dfd', 'Hugo', 'Lopez', 3418, '2024-02-28 12:10:19', 5),
(23, 'carmen@gmail.com', '[\"ROLE_USER\"]', '$2y$13$JKdmkkRyDeYUA3owiHEhlOQhVZjPxdLAZ2Ol6MJBq/4iaeqKX9epq', 12324, 'dfdf', 'fdfdfd', 'Carmen', 'Torres', 2595, '2024-03-08 14:59:43', 8),
(24, 'hugomanager@gmail.com', '[\"ROLE_MANAGER\"]', '$2y$13$6lnzC/7GRjQvTDDzbj5E5.6YsGkgVxTiu3S0mw0MAyzHw/pAlNt/y', NULL, NULL, NULL, 'Manager', 'Hugo', NULL, NULL, NULL),
(25, 'hugoadmin@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$5mRZl/fwhoHcQQKFH8jP8uJt3V67vtewT.yD0Efq6fgur168JLPmy', NULL, NULL, NULL, 'SuperAdmin', 'Hugo', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id` int(11) NOT NULL,
  `valoracion_numerica` int(11) NOT NULL,
  `comentario` longtext DEFAULT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id`, `valoracion_numerica`, `comentario`, `nombre_usuario`, `producto_id`, `usuario_id`) VALUES
(1, 4, 'Muy buena calidad en el producto', 'Hugo', 5, 19),
(2, 5, 'Producto muy detallado', 'Hugo', 8, 19),
(3, 4, 'Le ha encantado a mi hijo', 'Carmen', 10, 23);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cupon`
--
ALTER TABLE `cupon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cupon_usuario`
--
ALTER TABLE `cupon_usuario`
  ADD PRIMARY KEY (`cupon_id`,`usuario_id`),
  ADD KEY `IDX_79C4DF87D7AFF6F2` (`cupon_id`),
  ADD KEY `IDX_79C4DF87DB38439E` (`usuario_id`);

--
-- Indices de la tabla `descuento`
--
ALTER TABLE `descuento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `escala`
--
ALTER TABLE `escala`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8319D2B37645698E` (`producto_id`);

--
-- Indices de la tabla `linea_pedido`
--
ALTER TABLE `linea_pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_183C31654854653A` (`pedido_id`),
  ADD KEY `IDX_183C31657645698E` (`producto_id`);

--
-- Indices de la tabla `lista_deseos`
--
ALTER TABLE `lista_deseos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metodo_de_pago`
--
ALTER TABLE `metodo_de_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C4EC16CEDB38439E` (`usuario_id`),
  ADD KEY `IDX_C4EC16CE7E666606` (`metodo_de_pago_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A7BB0615F045077C` (`descuento_id`),
  ADD KEY `IDX_A7BB061523BFBED` (`equipo_id`),
  ADD KEY `IDX_A7BB0615ED8CDAB9` (`escala_id`),
  ADD KEY `IDX_A7BB0615C0A0FDFA` (`fabricante_id`);

--
-- Indices de la tabla `producto_lista_deseos`
--
ALTER TABLE `producto_lista_deseos`
  ADD PRIMARY KEY (`producto_id`,`lista_deseos_id`),
  ADD KEY `IDX_F1D104AB7645698E` (`producto_id`),
  ADD KEY `IDX_F1D104ABEC717891` (`lista_deseos_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2265B05DE7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_2265B05DEC717891` (`lista_deseos_id`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6D3DE0F47645698E` (`producto_id`),
  ADD KEY `IDX_6D3DE0F4DB38439E` (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cupon`
--
ALTER TABLE `cupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `descuento`
--
ALTER TABLE `descuento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `escala`
--
ALTER TABLE `escala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `fabricante`
--
ALTER TABLE `fabricante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `linea_pedido`
--
ALTER TABLE `linea_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `lista_deseos`
--
ALTER TABLE `lista_deseos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `metodo_de_pago`
--
ALTER TABLE `metodo_de_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cupon_usuario`
--
ALTER TABLE `cupon_usuario`
  ADD CONSTRAINT `FK_79C4DF87D7AFF6F2` FOREIGN KEY (`cupon_id`) REFERENCES `cupon` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_79C4DF87DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `FK_8319D2B37645698E` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `linea_pedido`
--
ALTER TABLE `linea_pedido`
  ADD CONSTRAINT `FK_183C31654854653A` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `FK_183C31657645698E` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_C4EC16CE7E666606` FOREIGN KEY (`metodo_de_pago_id`) REFERENCES `metodo_de_pago` (`id`),
  ADD CONSTRAINT `FK_C4EC16CEDB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_A7BB061523BFBED` FOREIGN KEY (`equipo_id`) REFERENCES `equipo` (`id`),
  ADD CONSTRAINT `FK_A7BB0615C0A0FDFA` FOREIGN KEY (`fabricante_id`) REFERENCES `fabricante` (`id`),
  ADD CONSTRAINT `FK_A7BB0615ED8CDAB9` FOREIGN KEY (`escala_id`) REFERENCES `escala` (`id`),
  ADD CONSTRAINT `FK_A7BB0615F045077C` FOREIGN KEY (`descuento_id`) REFERENCES `descuento` (`id`);

--
-- Filtros para la tabla `producto_lista_deseos`
--
ALTER TABLE `producto_lista_deseos`
  ADD CONSTRAINT `FK_F1D104AB7645698E` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F1D104ABEC717891` FOREIGN KEY (`lista_deseos_id`) REFERENCES `lista_deseos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_2265B05DEC717891` FOREIGN KEY (`lista_deseos_id`) REFERENCES `lista_deseos` (`id`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `FK_6D3DE0F47645698E` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `FK_6D3DE0F4DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2022 a las 11:44:34
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sacyr_inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id`, `nombre`, `descripcion`, `estado`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 'Almacén', NULL, NULL, '2022-09-16 09:37:02', 1),
(2, 'Almacén 2', NULL, NULL, '2022-09-16 09:39:12', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen_producto`
--

CREATE TABLE `almacen_producto` (
  `id` int(11) NOT NULL,
  `almacen_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `umbral` int(11) DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `almacen_producto`
--

INSERT INTO `almacen_producto` (`id`, `almacen_id`, `producto_id`, `cantidad`, `umbral`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 1, 1, 11, 0, '2022-09-16 09:40:48', 1),
(2, 2, 1, 1, 0, '2022-09-16 09:42:21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_servicio`
--

CREATE TABLE `area_servicio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `area_servicio`
--

INSERT INTO `area_servicio` (`id`, `nombre`, `descripcion`, `estado`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 'Área de servicio', NULL, NULL, '2022-09-16 09:38:46', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id` int(11) NOT NULL,
  `almacen_id` int(11) DEFAULT NULL,
  `terceros` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encargado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `ordenTrabajo` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `areaServicio_id` int(11) DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id`, `almacen_id`, `terceros`, `encargado`, `fecha`, `ordenTrabajo`, `observaciones`, `fechaCreado`, `areaServicio_id`, `usuarioCreado_id`) VALUES
(1, 1, NULL, '', '2022-09-16 00:00:00', '', '', '2022-09-16 09:41:57', 1, 1),
(2, 1, NULL, 'Lanjarón', '2022-09-19 00:00:00', '', '', '2022-09-19 10:30:56', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_lote`
--

CREATE TABLE `asignacion_lote` (
  `id` int(11) NOT NULL,
  `asignacion_id` int(11) DEFAULT NULL,
  `lote_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asignacion_lote`
--

INSERT INTO `asignacion_lote` (`id`, `asignacion_id`, `lote_id`, `cantidad`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 1, 1, 1, '2022-09-16 09:41:57', 1),
(2, 2, 1, 2, '2022-09-19 10:30:56', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`, `estado`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 'Categoría', NULL, NULL, '2022-09-16 09:37:40', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ext_log_entries`
--

CREATE TABLE `ext_log_entries` (
  `id` int(11) NOT NULL,
  `action` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logged_at` datetime NOT NULL,
  `object_id` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '(DC2Type:array)',
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `ext_log_entries`
--

INSERT INTO `ext_log_entries` (`id`, `action`, `logged_at`, `object_id`, `object_class`, `version`, `data`, `username`) VALUES
(1, 'create', '2022-09-16 09:37:02', '1', 'App\\Entity\\Almacen', 1, 'a:5:{s:6:\"nombre\";s:8:\"Almacén\";s:11:\"descripcion\";N;s:6:\"estado\";N;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:37:02.346471\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(2, 'update', '2022-09-16 09:37:23', '1', 'App\\Entity\\Usuario', 1, 'a:1:{s:9:\"almacenes\";a:1:{i:0;s:1:\"1\";}}', 'admin'),
(3, 'create', '2022-09-16 09:37:40', '1', 'App\\Entity\\Categoria', 1, 'a:5:{s:6:\"nombre\";s:10:\"Categoría\";s:11:\"descripcion\";N;s:6:\"estado\";N;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:37:40.066348\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(4, 'create', '2022-09-16 09:37:49', '1', 'App\\Entity\\Subcategoria', 1, 'a:4:{s:6:\"nombre\";s:13:\"Subcategoría\";s:11:\"descripcion\";N;s:6:\"estado\";N;s:9:\"categoria\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(5, 'create', '2022-09-16 09:38:12', '1', 'App\\Entity\\Proveedor', 1, 'a:6:{s:6:\"nombre\";s:9:\"Proveedor\";s:11:\"descripcion\";s:0:\"\";s:9:\"direccion\";s:0:\"\";s:6:\"estado\";N;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:38:12.036053\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(6, 'create', '2022-09-16 09:38:46', '1', 'App\\Entity\\AreaServicio', 1, 'a:5:{s:6:\"nombre\";s:17:\"Área de servicio\";s:11:\"descripcion\";N;s:6:\"estado\";N;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:38:46.007513\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(7, 'create', '2022-09-16 09:39:12', '2', 'App\\Entity\\Almacen', 1, 'a:5:{s:6:\"nombre\";s:10:\"Almacén 2\";s:11:\"descripcion\";N;s:6:\"estado\";N;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:39:12.260694\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(8, 'create', '2022-09-16 09:40:14', '1', 'App\\Entity\\Producto', 1, 'a:12:{s:6:\"codigo\";s:4:\"5555\";s:10:\"referencia\";s:3:\"555\";s:11:\"codigoBarra\";s:3:\"555\";s:6:\"nombre\";s:4:\"5555\";s:6:\"precio\";d:10;s:8:\"cantidad\";N;s:11:\"descripcion\";s:0:\"\";s:4:\"foto\";N;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:40:14.234239\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:9:\"categoria\";a:1:{s:2:\"id\";i:1;}s:12:\"subcategoria\";N;s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(9, 'create', '2022-09-16 09:40:48', '1', 'App\\Entity\\Importacion', 1, 'a:8:{s:5:\"fecha\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"observaciones\";s:0:\"\";s:7:\"albaran\";s:8:\"Albarán\";s:7:\"factura\";s:0:\"\";s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:40:47.989635\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:7:\"almacen\";a:1:{s:2:\"id\";i:1;}s:9:\"proveedor\";N;s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(10, 'create', '2022-09-16 09:40:48', '1', 'App\\Entity\\AlmacenProducto', 1, 'a:6:{s:8:\"cantidad\";i:0;s:6:\"umbral\";i:0;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:40:48.045663\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:7:\"almacen\";a:1:{s:2:\"id\";i:1;}s:8:\"producto\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(11, 'create', '2022-09-16 09:40:48', '1', 'App\\Entity\\Lote', 1, 'a:6:{s:4:\"lote\";s:3:\"555\";s:8:\"cantidad\";i:0;s:14:\"fechaCaducidad\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:40:48.058560\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:8:\"producto\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(12, 'update', '2022-09-16 09:40:48', '1', 'App\\Entity\\AlmacenProducto', 2, 'a:1:{s:8:\"cantidad\";i:3;}', 'admin'),
(13, 'create', '2022-09-16 09:40:48', '1', 'App\\Entity\\ImportacionLote', 1, 'a:6:{s:6:\"precio\";d:10;s:8:\"cantidad\";i:3;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:40:48.098081\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:11:\"importacion\";a:1:{s:2:\"id\";i:1;}s:4:\"lote\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(14, 'update', '2022-09-16 09:40:48', '1', 'App\\Entity\\Lote', 2, 'a:1:{s:8:\"cantidad\";i:3;}', 'admin'),
(15, 'create', '2022-09-16 09:41:57', '1', 'App\\Entity\\Asignacion', 1, 'a:9:{s:8:\"terceros\";N;s:9:\"encargado\";s:0:\"\";s:5:\"fecha\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:12:\"ordenTrabajo\";s:0:\"\";s:13:\"observaciones\";s:0:\"\";s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:41:57.638741\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:7:\"almacen\";a:1:{s:2:\"id\";i:1;}s:12:\"areaServicio\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(16, 'create', '2022-09-16 09:41:57', '1', 'App\\Entity\\AsignacionLote', 1, 'a:5:{s:8:\"cantidad\";i:1;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:41:57.718745\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:10:\"asignacion\";a:1:{s:2:\"id\";i:1;}s:4:\"lote\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(17, 'update', '2022-09-16 09:41:57', '1', 'App\\Entity\\Lote', 3, 'a:1:{s:8:\"cantidad\";i:2;}', 'admin'),
(18, 'update', '2022-09-16 09:41:57', '1', 'App\\Entity\\AlmacenProducto', 3, 'a:1:{s:8:\"cantidad\";i:2;}', 'admin'),
(19, 'create', '2022-09-16 09:42:21', '1', 'App\\Entity\\Traslado', 1, 'a:6:{s:5:\"fecha\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"observaciones\";s:0:\"\";s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:42:21.786539\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:8:\"almacenA\";a:1:{s:2:\"id\";i:1;}s:8:\"almacenB\";a:1:{s:2:\"id\";i:2;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(20, 'create', '2022-09-16 09:42:21', '2', 'App\\Entity\\AlmacenProducto', 1, 'a:6:{s:8:\"cantidad\";i:0;s:6:\"umbral\";i:0;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:42:21.861153\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:7:\"almacen\";a:1:{s:2:\"id\";i:2;}s:8:\"producto\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(21, 'update', '2022-09-16 09:42:21', '1', 'App\\Entity\\Lote', 4, 'a:1:{s:8:\"cantidad\";i:1;}', 'admin'),
(22, 'update', '2022-09-16 09:42:21', '1', 'App\\Entity\\AlmacenProducto', 4, 'a:1:{s:8:\"cantidad\";i:1;}', 'admin'),
(23, 'create', '2022-09-16 09:42:21', '2', 'App\\Entity\\Lote', 1, 'a:6:{s:4:\"lote\";s:3:\"555\";s:8:\"cantidad\";i:0;s:14:\"fechaCaducidad\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:42:21.936433\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:8:\"producto\";a:1:{s:2:\"id\";i:2;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(24, 'update', '2022-09-16 09:42:21', '2', 'App\\Entity\\AlmacenProducto', 2, 'a:1:{s:8:\"cantidad\";i:1;}', 'admin'),
(25, 'create', '2022-09-16 09:42:21', '1', 'App\\Entity\\TrasladoLote', 1, 'a:5:{s:8:\"cantidad\";i:1;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 09:42:21.946063\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:8:\"traslado\";a:1:{s:2:\"id\";i:1;}s:4:\"lote\";a:1:{s:2:\"id\";i:2;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(26, 'update', '2022-09-16 09:42:21', '2', 'App\\Entity\\Lote', 2, 'a:1:{s:8:\"cantidad\";i:1;}', 'admin'),
(27, 'update', '2022-09-16 10:02:29', '1', 'App\\Entity\\Proveedor', 2, 'a:2:{s:11:\"descripcion\";s:12:\"gfageageagfa\";s:9:\"direccion\";s:7:\"dsasawd\";}', 'admin'),
(28, 'create', '2022-09-16 10:43:17', '2', 'App\\Entity\\Importacion', 1, 'a:8:{s:5:\"fecha\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-17 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"observaciones\";s:0:\"\";s:7:\"albaran\";s:0:\"\";s:7:\"factura\";s:2:\"10\";s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 10:43:17.504316\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:7:\"almacen\";a:1:{s:2:\"id\";i:1;}s:9:\"proveedor\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(29, 'create', '2022-09-16 10:43:17', '2', 'App\\Entity\\ImportacionLote', 1, 'a:6:{s:6:\"precio\";d:10;s:8:\"cantidad\";i:1;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 10:43:17.821994\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:11:\"importacion\";a:1:{s:2:\"id\";i:2;}s:4:\"lote\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(30, 'update', '2022-09-16 10:43:17', '1', 'App\\Entity\\AlmacenProducto', 5, 'a:1:{s:8:\"cantidad\";i:2;}', 'admin'),
(31, 'update', '2022-09-16 10:43:17', '1', 'App\\Entity\\Lote', 5, 'a:1:{s:8:\"cantidad\";i:2;}', 'admin'),
(32, 'create', '2022-09-16 12:49:12', '2', 'App\\Entity\\Proveedor', 1, 'a:6:{s:6:\"nombre\";s:9:\"Lanjarón\";s:11:\"descripcion\";s:0:\"\";s:9:\"direccion\";s:16:\"C/Río Llobregat\";s:6:\"estado\";N;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 12:49:12.634453\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(33, 'create', '2022-09-16 12:50:02', '3', 'App\\Entity\\Importacion', 1, 'a:8:{s:5:\"fecha\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"observaciones\";s:0:\"\";s:7:\"albaran\";s:0:\"\";s:7:\"factura\";s:0:\"\";s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 12:50:02.666889\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:7:\"almacen\";a:1:{s:2:\"id\";i:1;}s:9:\"proveedor\";a:1:{s:2:\"id\";i:2;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(34, 'create', '2022-09-16 12:50:02', '3', 'App\\Entity\\ImportacionLote', 1, 'a:6:{s:6:\"precio\";d:10;s:8:\"cantidad\";i:3;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 12:50:02.747199\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:11:\"importacion\";a:1:{s:2:\"id\";i:3;}s:4:\"lote\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(35, 'update', '2022-09-16 12:50:02', '1', 'App\\Entity\\AlmacenProducto', 6, 'a:1:{s:8:\"cantidad\";i:5;}', 'admin'),
(36, 'update', '2022-09-16 12:50:02', '1', 'App\\Entity\\Lote', 6, 'a:1:{s:8:\"cantidad\";i:5;}', 'admin'),
(37, 'create', '2022-09-16 13:08:42', '4', 'App\\Entity\\ImportacionLote', 1, 'a:6:{s:6:\"precio\";d:10;s:8:\"cantidad\";i:2;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 13:08:42.123506\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:11:\"importacion\";a:1:{s:2:\"id\";i:3;}s:4:\"lote\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(38, 'update', '2022-09-16 13:08:42', '1', 'App\\Entity\\AlmacenProducto', 7, 'a:1:{s:8:\"cantidad\";i:7;}', 'admin'),
(39, 'update', '2022-09-16 13:08:42', '1', 'App\\Entity\\Lote', 7, 'a:1:{s:8:\"cantidad\";i:7;}', 'admin'),
(40, 'update', '2022-09-16 13:08:51', '3', 'App\\Entity\\Importacion', 2, 'a:1:{s:5:\"fecha\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-16 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}}', 'admin'),
(41, 'create', '2022-09-19 08:58:19', '2', 'App\\Entity\\Usuario', 1, 'a:8:{s:6:\"nombre\";s:8:\"Gestor 1\";s:9:\"apellidos\";s:6:\"Gestor\";s:5:\"email\";s:15:\"Gestor@sacyr.es\";s:8:\"username\";s:6:\"Gestor\";s:9:\"almacenes\";a:1:{i:0;s:1:\"1\";}s:5:\"roles\";a:1:{i:0;s:11:\"ROLE_GESTOR\";}s:8:\"password\";s:60:\"$2y$15$TXBzY2XCBlEx2TAHFzlhlOi1ZgOPO0xGMC6g8h98XoTS/hcDQiHa6\";s:6:\"estado\";b:1;}', 'admin'),
(42, 'create', '2022-09-19 10:30:56', '2', 'App\\Entity\\Asignacion', 1, 'a:9:{s:8:\"terceros\";N;s:9:\"encargado\";s:9:\"Lanjarón\";s:5:\"fecha\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-19 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:12:\"ordenTrabajo\";s:0:\"\";s:13:\"observaciones\";s:0:\"\";s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-19 10:30:56.138449\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:7:\"almacen\";a:1:{s:2:\"id\";i:1;}s:12:\"areaServicio\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:2;}}', 'Gestor'),
(43, 'create', '2022-09-19 10:30:56', '2', 'App\\Entity\\AsignacionLote', 1, 'a:5:{s:8:\"cantidad\";i:2;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-19 10:30:56.673115\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:10:\"asignacion\";a:1:{s:2:\"id\";i:2;}s:4:\"lote\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:2;}}', 'Gestor'),
(44, 'update', '2022-09-19 10:30:56', '1', 'App\\Entity\\Lote', 8, 'a:1:{s:8:\"cantidad\";i:5;}', 'Gestor'),
(45, 'update', '2022-09-19 10:30:56', '1', 'App\\Entity\\AlmacenProducto', 8, 'a:1:{s:8:\"cantidad\";i:5;}', 'Gestor'),
(46, 'create', '2022-09-20 08:53:53', '4', 'App\\Entity\\Importacion', 1, 'a:8:{s:5:\"fecha\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-20 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"observaciones\";s:0:\"\";s:7:\"albaran\";s:0:\"\";s:7:\"factura\";s:0:\"\";s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-20 08:53:53.271478\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:7:\"almacen\";a:1:{s:2:\"id\";i:1;}s:9:\"proveedor\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(47, 'create', '2022-09-20 08:53:53', '5', 'App\\Entity\\ImportacionLote', 1, 'a:6:{s:6:\"precio\";d:10;s:8:\"cantidad\";i:3;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-20 08:53:53.614034\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:11:\"importacion\";a:1:{s:2:\"id\";i:4;}s:4:\"lote\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(48, 'update', '2022-09-20 08:53:53', '1', 'App\\Entity\\AlmacenProducto', 9, 'a:1:{s:8:\"cantidad\";i:8;}', 'admin'),
(49, 'update', '2022-09-20 08:53:53', '1', 'App\\Entity\\Lote', 9, 'a:1:{s:8:\"cantidad\";i:8;}', 'admin'),
(50, 'create', '2022-09-20 08:54:41', '5', 'App\\Entity\\Importacion', 1, 'a:8:{s:5:\"fecha\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-20 00:00:00.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:13:\"observaciones\";s:0:\"\";s:7:\"albaran\";s:0:\"\";s:7:\"factura\";s:0:\"\";s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-20 08:54:41.661236\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:7:\"almacen\";a:1:{s:2:\"id\";i:1;}s:9:\"proveedor\";a:1:{s:2:\"id\";i:2;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(51, 'create', '2022-09-20 08:54:41', '6', 'App\\Entity\\ImportacionLote', 1, 'a:6:{s:6:\"precio\";d:10;s:8:\"cantidad\";i:3;s:11:\"fechaCreado\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2022-09-20 08:54:41.746849\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:11:\"importacion\";a:1:{s:2:\"id\";i:5;}s:4:\"lote\";a:1:{s:2:\"id\";i:1;}s:13:\"usuarioCreado\";a:1:{s:2:\"id\";i:1;}}', 'admin'),
(52, 'update', '2022-09-20 08:54:41', '1', 'App\\Entity\\AlmacenProducto', 10, 'a:1:{s:8:\"cantidad\";i:11;}', 'admin'),
(53, 'update', '2022-09-20 08:54:41', '1', 'App\\Entity\\Lote', 10, 'a:1:{s:8:\"cantidad\";i:11;}', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `importacion`
--

CREATE TABLE `importacion` (
  `id` int(11) NOT NULL,
  `almacen_id` int(11) DEFAULT NULL,
  `proveedor_id` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factura` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `importacion`
--

INSERT INTO `importacion` (`id`, `almacen_id`, `proveedor_id`, `fecha`, `observaciones`, `albaran`, `factura`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 1, NULL, '2022-09-16', '', 'Albarán', '', '2022-09-16 09:40:47', 1),
(2, 1, 1, '2022-09-17', '', '', '10', '2022-09-16 10:43:17', 1),
(3, 1, 2, '2022-09-16', '', '', '', '2022-09-16 12:50:02', 1),
(4, 1, 1, '2022-09-20', '', '', '', '2022-09-20 08:53:53', 1),
(5, 1, 2, '2022-09-20', '', '', '', '2022-09-20 08:54:41', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `importacion_lote`
--

CREATE TABLE `importacion_lote` (
  `id` int(11) NOT NULL,
  `importacion_id` int(11) DEFAULT NULL,
  `lote_id` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `importacion_lote`
--

INSERT INTO `importacion_lote` (`id`, `importacion_id`, `lote_id`, `precio`, `cantidad`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 1, 1, 10, 3, '2022-09-16 09:40:48', 1),
(2, 2, 1, 10, 1, '2022-09-16 10:43:17', 1),
(3, 3, 1, 10, 3, '2022-09-16 12:50:02', 1),
(4, 3, 1, 10, 2, '2022-09-16 13:08:42', 1),
(5, 4, 1, 10, 3, '2022-09-20 08:53:53', 1),
(6, 5, 1, 10, 3, '2022-09-20 08:54:41', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `ip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`id`, `usuario`, `fecha`, `ip`, `accion`) VALUES
(1, 1, '2022-09-16 09:36:25', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(2, 1, '2022-09-16 09:36:42', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(3, 1, '2022-09-16 09:36:51', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(4, 1, '2022-09-16 09:37:03', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=El%20almac%C3%A9n%20se%20ha%20a%C3%B1adido%20correctamente'),
(5, 1, '2022-09-16 09:37:08', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(6, 1, '2022-09-16 09:37:18', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/1/detalle'),
(7, 1, '2022-09-16 09:37:24', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/1/detalle?excepcion=1&codigo=%C2%A1Correcto!&mensaje=El%20usuario%20se%20ha%20modificado%20correctamente'),
(8, 1, '2022-09-16 09:37:28', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(9, 1, '2022-09-16 09:37:34', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/'),
(10, 1, '2022-09-16 09:37:40', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20categor%C3%ADa%20se%20ha%20a%C3%B1adido%20correctamente'),
(11, 1, '2022-09-16 09:37:43', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/1/subcategorias/'),
(12, 1, '2022-09-16 09:37:50', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/1/subcategorias/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20subcategor%C3%ADa%20se%20ha%20a%C3%B1adido%20correctamente'),
(13, 1, '2022-09-16 09:37:54', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(14, 1, '2022-09-16 09:38:12', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=El%20proveedor%20se%20ha%20a%C3%B1adido%20correctamente'),
(15, 1, '2022-09-16 09:38:17', '::1', '/sacyr_inventario/public/index.php/administracion/areas-de-servicio/'),
(16, 1, '2022-09-16 09:38:46', '::1', '/sacyr_inventario/public/index.php/administracion/areas-de-servicio/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=El%20%C3%A1rea%20de%20servicio%20se%20ha%20a%C3%B1adido%20correctamente'),
(17, 1, '2022-09-16 09:39:03', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(18, 1, '2022-09-16 09:39:12', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=El%20almac%C3%A9n%20se%20ha%20a%C3%B1adido%20correctamente'),
(19, 1, '2022-09-16 09:39:18', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(20, 1, '2022-09-16 09:39:28', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(21, 1, '2022-09-16 09:40:48', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20importaci%C3%B3n%20de%20productos%20se%20ha%20realizado%20correctamente'),
(22, 1, '2022-09-16 09:41:03', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(23, 1, '2022-09-16 09:41:13', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/1/detalle'),
(24, 1, '2022-09-16 09:41:24', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(25, 1, '2022-09-16 09:41:36', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/'),
(26, 1, '2022-09-16 09:41:58', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20asignaci%C3%B3n%20de%20productos%20se%20ha%20realizado%20correctamente'),
(27, 1, '2022-09-16 09:42:04', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/1/detalle'),
(28, 1, '2022-09-16 09:42:09', '::1', '/sacyr_inventario/public/index.php/almacen/1/traslados/'),
(29, 1, '2022-09-16 09:42:22', '::1', '/sacyr_inventario/public/index.php/almacen/1/traslados/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=El%20traslado%20de%20productos%20se%20ha%20realizado%20correctamente'),
(30, 1, '2022-09-16 09:42:26', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(31, 1, '2022-09-16 09:42:36', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(32, 1, '2022-09-16 09:42:39', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(33, 1, '2022-09-16 09:46:03', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(34, 1, '2022-09-16 09:46:17', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(35, 1, '2022-09-16 09:46:20', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(36, 1, '2022-09-16 09:46:26', '::1', '/sacyr_inventario/public/index.php/administracion/productos/1/detalle'),
(37, 1, '2022-09-16 09:46:45', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(38, 1, '2022-09-16 09:47:33', '::1', '/sacyr_inventario/public/index.php/administracion/areas-de-servicio/'),
(39, 1, '2022-09-16 09:48:22', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(40, 1, '2022-09-16 09:48:25', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(41, 1, '2022-09-16 09:48:40', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(42, 1, '2022-09-16 09:49:13', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(43, 1, '2022-09-16 09:49:15', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(44, 1, '2022-09-16 09:49:24', '::1', '/sacyr_inventario/public/index.php/administracion/areas-de-servicio/'),
(45, 1, '2022-09-16 09:49:26', '::1', '/sacyr_inventario/public/index.php/administracion/areas-de-servicio/1/detalle'),
(46, 1, '2022-09-16 09:49:32', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(47, 1, '2022-09-16 09:49:34', '::1', '/sacyr_inventario/public/index.php/administracion/productos/1/detalle'),
(48, 1, '2022-09-16 09:52:19', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(49, 1, '2022-09-16 09:52:21', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(50, 1, '2022-09-16 10:00:56', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(51, 1, '2022-09-16 10:01:06', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(52, 1, '2022-09-16 10:01:12', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(53, 1, '2022-09-16 10:01:34', '::1', '/sacyr_inventario/public/index.php/almacen/1/traslados/'),
(54, 1, '2022-09-16 10:01:37', '::1', '/sacyr_inventario/public/index.php/almacen/1/traslados/1/detalle'),
(55, 1, '2022-09-16 10:01:42', '::1', '/sacyr_inventario/public/index.php/almacen/1/traslados/1/detalle/1/lote'),
(56, 1, '2022-09-16 10:01:47', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(57, 1, '2022-09-16 10:01:55', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(58, 1, '2022-09-16 10:01:58', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(59, 1, '2022-09-16 10:02:05', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(60, 1, '2022-09-16 10:02:29', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle?excepcion=1&codigo=%C2%A1Correcto!&mensaje=El%20proveedor%20se%20ha%20modificado%20correctamente'),
(61, 1, '2022-09-16 10:02:34', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(62, 1, '2022-09-16 10:02:44', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(63, 1, '2022-09-16 10:02:49', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(64, 1, '2022-09-16 10:03:41', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/?excepcion=2&codigo=%C2%A1Error!&mensaje=La%20importaci%C3%B3n%20no%20se%20ha%20podido%20realizar,%20tienes%20que%20a%C3%B1adir%20productos.'),
(65, 1, '2022-09-16 10:03:51', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(66, 1, '2022-09-16 10:40:44', '::1', '/sacyr_inventario/public/index.php/administracion/productos/1/detalle'),
(67, 1, '2022-09-16 10:41:18', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(68, 1, '2022-09-16 10:41:36', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(69, 1, '2022-09-16 10:41:49', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(70, 1, '2022-09-16 10:42:36', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(71, 1, '2022-09-16 10:42:45', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(72, 1, '2022-09-16 10:42:51', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(73, 1, '2022-09-16 10:43:18', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20importaci%C3%B3n%20de%20productos%20se%20ha%20realizado%20correctamente'),
(74, 1, '2022-09-16 10:43:30', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(75, 1, '2022-09-16 10:43:34', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(76, 1, '2022-09-16 10:43:42', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/?tipoFecha=fecha&desde=16-08-2022&hasta=17-09-2022&albaran=&factura=&producto=&id=&categoria=&proveedor='),
(77, 1, '2022-09-16 10:43:57', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(78, 1, '2022-09-16 10:44:50', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(79, 1, '2022-09-16 10:45:01', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(80, 1, '2022-09-16 10:46:12', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(81, 1, '2022-09-16 10:46:17', '::1', '/sacyr_inventario/public/index.php/almacen/1/traslados/'),
(82, 1, '2022-09-16 10:46:52', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/'),
(83, 1, '2022-09-16 10:46:56', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/1/detalle'),
(84, 1, '2022-09-16 10:47:08', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(85, 1, '2022-09-16 10:47:51', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(86, 1, '2022-09-16 10:47:56', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(87, 1, '2022-09-16 10:50:44', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/'),
(88, 1, '2022-09-16 10:50:49', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/1/detalle'),
(89, 1, '2022-09-16 10:57:45', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(90, 1, '2022-09-16 10:57:49', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(91, 1, '2022-09-16 10:57:54', '::1', '/sacyr_inventario/public/index.php/almacen/1/traslados/'),
(92, 1, '2022-09-16 10:57:58', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/'),
(93, 1, '2022-09-16 10:58:01', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(94, 1, '2022-09-16 11:04:29', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(95, 1, '2022-09-16 11:04:34', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(96, 1, '2022-09-16 11:04:49', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(97, 1, '2022-09-16 11:07:21', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(98, 1, '2022-09-16 11:08:01', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(99, 1, '2022-09-16 11:08:22', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(100, 1, '2022-09-16 11:10:38', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(101, 1, '2022-09-16 11:10:42', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(102, 1, '2022-09-16 11:11:00', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(103, 1, '2022-09-16 11:11:40', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(104, 1, '2022-09-16 11:11:43', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(105, 1, '2022-09-16 11:13:23', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(106, 1, '2022-09-16 11:13:25', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(107, 1, '2022-09-16 11:14:52', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(108, 1, '2022-09-16 11:15:02', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(109, 1, '2022-09-16 11:16:39', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(110, 1, '2022-09-16 11:16:44', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(111, 1, '2022-09-16 11:17:06', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(112, 1, '2022-09-16 11:17:41', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(113, 1, '2022-09-16 11:18:35', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(114, 1, '2022-09-16 11:20:41', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(115, 1, '2022-09-16 11:21:37', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(116, 1, '2022-09-16 11:21:45', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/'),
(117, 1, '2022-09-16 11:21:49', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(118, 1, '2022-09-16 11:22:04', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(119, 1, '2022-09-16 11:22:57', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(120, 1, '2022-09-16 11:23:00', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(121, 1, '2022-09-16 11:24:05', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(122, 1, '2022-09-16 11:24:08', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(123, 1, '2022-09-16 11:28:24', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(124, 1, '2022-09-16 11:30:03', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(125, 1, '2022-09-16 11:30:08', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(126, 1, '2022-09-16 11:30:11', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(127, 1, '2022-09-16 11:30:18', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(128, 1, '2022-09-16 11:30:20', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(129, 1, '2022-09-16 11:30:26', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(130, 1, '2022-09-16 11:30:29', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(131, 1, '2022-09-16 11:32:06', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(132, 1, '2022-09-16 11:32:09', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(133, 1, '2022-09-16 11:34:04', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(134, 1, '2022-09-16 11:35:38', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(135, 1, '2022-09-16 11:51:00', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(136, 1, '2022-09-16 11:53:41', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(137, 1, '2022-09-16 11:53:58', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(138, 1, '2022-09-16 11:56:32', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(139, 1, '2022-09-16 11:56:38', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(140, 1, '2022-09-16 12:01:03', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(141, 1, '2022-09-16 12:07:24', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(142, 1, '2022-09-16 12:07:27', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(143, 1, '2022-09-16 12:07:29', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(144, 1, '2022-09-16 12:07:36', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(145, 1, '2022-09-16 12:08:59', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(146, 1, '2022-09-16 12:09:02', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(147, 1, '2022-09-16 12:13:54', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(148, 1, '2022-09-16 12:16:57', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(149, 1, '2022-09-16 12:20:02', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(150, 1, '2022-09-16 12:20:08', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(151, 1, '2022-09-16 12:29:15', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(152, 1, '2022-09-16 12:29:21', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(153, 1, '2022-09-16 12:29:32', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(154, 1, '2022-09-16 12:29:35', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(155, 1, '2022-09-16 12:35:02', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(156, 1, '2022-09-16 12:35:07', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(157, 1, '2022-09-16 12:36:44', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(158, 1, '2022-09-16 12:36:48', '::1', '/sacyr_inventario/public/index.php/administracion/productos/1/detalle'),
(159, 1, '2022-09-16 12:37:10', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(160, 1, '2022-09-16 12:37:14', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/2/detalle'),
(161, 1, '2022-09-16 12:47:39', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(162, 1, '2022-09-16 12:47:51', '::1', '/sacyr_inventario/public/index.php/administracion/areas-de-servicio/'),
(163, 1, '2022-09-16 12:48:00', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(164, 1, '2022-09-16 12:48:25', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(165, 1, '2022-09-16 12:49:13', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=El%20proveedor%20se%20ha%20a%C3%B1adido%20correctamente'),
(166, 1, '2022-09-16 12:49:23', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(167, 1, '2022-09-16 12:50:03', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20importaci%C3%B3n%20de%20productos%20se%20ha%20realizado%20correctamente'),
(168, 1, '2022-09-16 12:50:15', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(169, 1, '2022-09-16 12:50:18', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(170, 1, '2022-09-16 12:51:40', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(171, 1, '2022-09-16 12:51:43', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(172, 1, '2022-09-16 12:53:26', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(173, 1, '2022-09-16 12:53:28', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(174, 1, '2022-09-16 12:57:25', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(175, 1, '2022-09-16 13:01:10', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(176, 1, '2022-09-16 13:02:39', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(177, 1, '2022-09-16 13:03:25', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(178, 1, '2022-09-16 13:03:36', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(179, 1, '2022-09-16 13:03:41', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(180, 1, '2022-09-16 13:05:50', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(181, 1, '2022-09-16 13:07:55', '::1', '/sacyr_inventario/public/index.php/almacen/1/traslados/'),
(182, 1, '2022-09-16 13:08:00', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(183, 1, '2022-09-16 13:08:07', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/3/detalle'),
(184, 1, '2022-09-16 13:08:42', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/3/detalle?excepcion=1&codigo=%C2%A1Correcto!&mensaje=Se%20han%20a%C3%B1adido%20lotes%20nuevos%20a%20la%20importaci%C3%B3n%20correctamente'),
(185, 1, '2022-09-16 13:08:52', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/3/detalle?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20importaci%C3%B3n%20se%20ha%20modificado%20correctamente'),
(186, 1, '2022-09-16 13:08:56', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(187, 1, '2022-09-16 13:12:19', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(188, 1, '2022-09-16 13:15:45', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(189, 1, '2022-09-16 13:29:51', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(190, 1, '2022-09-16 13:30:16', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(191, 1, '2022-09-16 13:34:46', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(192, 1, '2022-09-16 13:35:08', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(193, 1, '2022-09-16 13:37:53', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(194, 1, '2022-09-16 13:39:20', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(195, 1, '2022-09-16 13:39:25', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(196, 1, '2022-09-16 13:39:27', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(197, 1, '2022-09-16 13:39:41', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(198, 1, '2022-09-16 13:39:44', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(199, 1, '2022-09-16 13:43:42', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(200, 1, '2022-09-16 13:43:47', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(201, 1, '2022-09-16 13:43:49', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(202, 1, '2022-09-16 13:48:05', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(203, 1, '2022-09-16 13:48:09', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(204, 1, '2022-09-16 13:49:03', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(205, 1, '2022-09-16 13:49:58', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(206, 1, '2022-09-16 13:55:39', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(207, 1, '2022-09-16 13:56:05', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(208, 1, '2022-09-16 13:57:15', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(209, 1, '2022-09-16 13:57:40', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(210, 1, '2022-09-16 13:58:38', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(211, 1, '2022-09-16 13:58:42', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(212, 1, '2022-09-16 13:58:50', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(213, 1, '2022-09-16 13:58:58', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(214, 1, '2022-09-16 14:01:41', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(215, 1, '2022-09-16 14:05:38', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(216, 1, '2022-09-16 14:05:57', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(217, 1, '2022-09-16 14:06:09', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(218, 1, '2022-09-16 14:07:34', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(219, 1, '2022-09-16 14:07:44', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(220, 1, '2022-09-16 14:08:49', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(221, 1, '2022-09-16 14:08:53', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(222, 1, '2022-09-16 14:08:58', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(223, 1, '2022-09-16 14:14:31', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(224, 1, '2022-09-16 14:17:09', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(225, 1, '2022-09-16 14:17:32', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(226, 1, '2022-09-16 14:17:36', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(227, 1, '2022-09-16 14:17:46', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(228, 1, '2022-09-16 14:17:49', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(229, 1, '2022-09-19 08:21:20', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(230, 1, '2022-09-19 08:21:32', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(231, 1, '2022-09-19 08:21:37', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(232, 1, '2022-09-19 08:27:40', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(233, 1, '2022-09-19 08:28:09', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(234, 1, '2022-09-19 08:28:11', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(235, 1, '2022-09-19 08:41:47', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/1/detalle'),
(236, 1, '2022-09-19 08:41:59', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(237, 1, '2022-09-19 08:42:02', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(238, 1, '2022-09-19 08:42:34', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(239, 1, '2022-09-19 08:42:51', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/2/detalle'),
(240, 1, '2022-09-19 08:43:27', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(241, 1, '2022-09-19 08:43:37', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(242, 1, '2022-09-19 08:43:40', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(243, 1, '2022-09-19 08:44:43', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(244, 1, '2022-09-19 08:48:00', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(245, 1, '2022-09-19 08:48:29', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(246, 1, '2022-09-19 08:56:26', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(247, 1, '2022-09-19 08:58:19', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=El%20usuario%20se%20ha%20a%C3%B1adido%20correctamente'),
(248, 2, '2022-09-19 09:12:30', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(249, 2, '2022-09-19 09:14:54', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(250, 2, '2022-09-19 09:15:26', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(251, 2, '2022-09-19 09:16:01', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(252, 2, '2022-09-19 09:16:52', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(253, 2, '2022-09-19 09:20:00', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(254, 2, '2022-09-19 09:22:35', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(255, 2, '2022-09-19 09:24:09', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(256, 2, '2022-09-19 09:26:29', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(257, 2, '2022-09-19 09:26:51', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(258, 2, '2022-09-19 09:27:38', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(259, 2, '2022-09-19 09:28:16', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(260, 2, '2022-09-19 09:28:50', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(261, 2, '2022-09-19 09:30:04', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(262, 2, '2022-09-19 09:32:08', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(263, 2, '2022-09-19 09:32:36', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(264, 2, '2022-09-19 10:11:05', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/1/detalle'),
(265, 2, '2022-09-19 10:11:47', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(266, 2, '2022-09-19 10:11:53', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(267, 2, '2022-09-19 10:11:58', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(268, 2, '2022-09-19 10:12:08', '::1', '/sacyr_inventario/public/index.php/almacen/1/traslados/'),
(269, 2, '2022-09-19 10:12:11', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/'),
(270, 2, '2022-09-19 10:12:17', '::1', '/sacyr_inventario/public/index.php/almacen/1/productos/'),
(271, 2, '2022-09-19 10:29:39', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(272, 2, '2022-09-19 10:29:45', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/'),
(273, 2, '2022-09-19 10:30:57', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20asignaci%C3%B3n%20de%20productos%20se%20ha%20realizado%20correctamente'),
(274, 2, '2022-09-19 10:42:41', '::1', '/sacyr_inventario/public/index.php/almacen/1/asignacion-de-materiales/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20asignaci%C3%B3n%20de%20productos%20se%20ha%20realizado%20correctamente'),
(275, 1, '2022-09-19 10:43:03', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(276, 1, '2022-09-19 10:43:18', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(277, 1, '2022-09-19 10:43:25', '::1', '/sacyr_inventario/public/index.php/administracion/productos/1/detalle'),
(278, 1, '2022-09-19 10:44:06', '::1', '/sacyr_inventario/public/index.php/administracion/productos/1/detalle'),
(279, 1, '2022-09-19 10:44:38', '::1', '/sacyr_inventario/public/index.php/administracion/productos/1/detalle'),
(280, 1, '2022-09-19 10:47:00', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(281, 1, '2022-09-19 10:49:09', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(282, 1, '2022-09-19 10:51:39', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(283, 1, '2022-09-19 10:52:58', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(284, 1, '2022-09-19 10:53:58', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(285, 1, '2022-09-19 10:54:14', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(286, 1, '2022-09-19 10:54:19', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(287, 1, '2022-09-19 10:54:27', '::1', '/sacyr_inventario/public/index.php/administracion/productos/1/detalle'),
(288, 1, '2022-09-19 10:54:38', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(289, 1, '2022-09-19 10:54:43', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(290, 1, '2022-09-19 10:54:47', '::1', '/sacyr_inventario/public/index.php/administracion/productos/1/detalle'),
(291, 1, '2022-09-19 10:55:49', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/'),
(292, 1, '2022-09-19 10:55:52', '::1', '/sacyr_inventario/public/index.php/administracion/proveedores/1/detalle'),
(293, 1, '2022-09-19 12:53:44', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(294, 1, '2022-09-19 12:57:20', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/1/detalle'),
(295, 1, '2022-09-19 12:57:27', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(296, 1, '2022-09-19 12:57:33', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(297, 1, '2022-09-19 13:23:00', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(298, 1, '2022-09-19 13:23:39', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(299, 1, '2022-09-19 13:23:47', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(300, 1, '2022-09-19 13:40:47', '::1', '/sacyr_inventario/public/index.php/administracion/productos/'),
(301, 1, '2022-09-19 13:40:55', '::1', '/sacyr_inventario/public/index.php/administracion/productos/1/detalle'),
(302, 1, '2022-09-20 08:51:27', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(303, 1, '2022-09-20 08:51:42', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(304, 1, '2022-09-20 08:53:11', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/'),
(305, 1, '2022-09-20 08:53:54', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20importaci%C3%B3n%20de%20productos%20se%20ha%20realizado%20correctamente'),
(306, 1, '2022-09-20 08:54:42', '::1', '/sacyr_inventario/public/index.php/almacen/1/recepcion-de-pedidos/?excepcion=1&codigo=%C2%A1Correcto!&mensaje=La%20importaci%C3%B3n%20de%20productos%20se%20ha%20realizado%20correctamente'),
(307, 1, '2022-09-20 11:24:32', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(308, 1, '2022-09-20 11:24:51', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(309, 1, '2022-09-20 11:24:58', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(310, 1, '2022-09-20 11:27:28', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(311, 1, '2022-09-20 11:27:33', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(312, 1, '2022-09-20 11:42:30', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(313, 1, '2022-09-20 11:42:38', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(314, 1, '2022-09-20 11:48:08', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(315, 1, '2022-09-20 11:49:08', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(316, 1, '2022-09-20 11:51:36', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(317, 1, '2022-09-20 12:24:40', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(318, 1, '2022-09-20 13:59:03', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(319, 1, '2022-09-21 08:39:29', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(320, 1, '2022-09-21 09:37:07', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(321, 1, '2022-09-21 09:38:56', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(322, 1, '2022-09-21 09:39:42', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(323, 1, '2022-09-21 09:39:53', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(324, 1, '2022-09-21 09:39:58', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(325, 1, '2022-09-21 09:40:12', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(326, 1, '2022-09-21 09:40:19', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(327, 1, '2022-09-21 09:40:39', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(328, 1, '2022-09-21 09:41:48', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(329, 1, '2022-09-21 09:42:20', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(330, 1, '2022-09-21 09:47:30', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(331, 1, '2022-09-21 09:47:55', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(332, 1, '2022-09-21 09:50:58', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(333, 1, '2022-09-21 09:51:52', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(334, 1, '2022-09-21 09:52:53', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(335, 1, '2022-09-21 09:53:12', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(336, 1, '2022-09-21 09:54:31', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(337, 1, '2022-09-21 09:54:59', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/'),
(338, 1, '2022-09-21 09:55:26', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/?categoria=dsfdsfd'),
(339, 1, '2022-09-21 09:55:35', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/?categoria=categoria'),
(340, 1, '2022-09-21 09:55:38', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/?categoria=categoria'),
(341, 1, '2022-09-21 09:55:42', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/?categoria=ria'),
(342, 1, '2022-09-21 09:56:36', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(343, 1, '2022-09-21 09:57:00', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(344, 1, '2022-09-21 10:00:16', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(345, 1, '2022-09-21 10:00:45', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(346, 1, '2022-09-21 10:02:47', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(347, 1, '2022-09-21 10:04:45', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(348, 1, '2022-09-21 10:06:14', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(349, 1, '2022-09-21 10:06:25', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(350, 1, '2022-09-21 10:06:57', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(351, 1, '2022-09-21 10:08:15', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(352, 1, '2022-09-21 10:09:32', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(353, 1, '2022-09-21 10:09:45', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(354, 1, '2022-09-21 10:09:51', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(355, 1, '2022-09-21 10:10:35', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(356, 1, '2022-09-21 10:11:31', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(357, 1, '2022-09-21 10:11:37', '::1', '/sacyr_inventario/public/index.php/administracion/almacenes/'),
(358, 1, '2022-09-21 10:11:41', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(359, 1, '2022-09-21 10:11:57', '::1', '/sacyr_inventario/public/index.php/administracion/usuarios/'),
(360, 1, '2022-09-21 10:12:04', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/'),
(361, 1, '2022-09-21 10:13:39', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(362, 1, '2022-09-21 10:13:44', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(363, 1, '2022-09-21 10:13:52', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/'),
(364, 1, '2022-09-21 10:13:57', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/'),
(365, 1, '2022-09-21 10:17:16', '::1', '/sacyr_inventario/public/index.php/administracion/categorias/'),
(366, 1, '2022-09-21 10:17:22', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(367, 1, '2022-09-21 10:18:32', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(368, 1, '2022-09-21 10:19:11', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(369, 1, '2022-09-21 10:23:01', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(370, 1, '2022-09-21 10:23:33', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(371, 1, '2022-09-21 11:02:03', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(372, 1, '2022-09-21 11:02:24', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(373, 1, '2022-09-21 11:02:42', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(374, 1, '2022-09-21 11:11:19', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(375, 1, '2022-09-21 11:12:44', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(376, 1, '2022-09-21 11:12:56', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(377, 1, '2022-09-21 13:10:19', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(378, 1, '2022-09-21 13:23:59', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(379, 1, '2022-09-21 14:10:31', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(380, 1, '2022-09-21 14:10:35', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(381, 1, '2022-09-21 14:10:39', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(382, 1, '2022-09-21 14:29:37', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(383, 1, '2022-09-21 14:32:08', '::1', '/sacyr_inventario/public/index.php/administracion/informes/'),
(384, 1, '2022-09-22 09:17:00', '::1', '/sacyr_inventario/public/index.php/almacen/1/stock/'),
(385, 1, '2022-09-22 09:17:15', '::1', '/sacyr_inventario/public/index.php/administracion/informes/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_importacion`
--

CREATE TABLE `log_importacion` (
  `id` int(11) NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fechaCaducidad` datetime DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`id`, `producto_id`, `lote`, `cantidad`, `fechaCaducidad`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 1, '555', 11, '2022-09-16 00:00:00', '2022-09-16 09:40:48', 1),
(2, 2, '555', 1, '2022-09-16 00:00:00', '2022-09-16 09:42:21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `subcategoria_id` int(11) DEFAULT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigoBarra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `categoria_id`, `subcategoria_id`, `codigo`, `referencia`, `codigoBarra`, `nombre`, `precio`, `cantidad`, `descripcion`, `foto`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 1, NULL, '5555', '555', '555', '5555', 10, NULL, '', NULL, '2022-09-16 09:40:14', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `descripcion`, `direccion`, `estado`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 'Proveedor', 'gfageageagfa', 'dsasawd', NULL, '2022-09-16 09:38:12', 1),
(2, 'Lanjarón', '', 'C/Río Llobregat', NULL, '2022-09-16 12:49:12', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id`, `categoria_id`, `nombre`, `descripcion`, `estado`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 1, 'Subcategoría', NULL, NULL, '2022-09-16 09:37:49', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslado`
--

CREATE TABLE `traslado` (
  `id` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `almacenA_id` int(11) DEFAULT NULL,
  `almacenB_id` int(11) DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `traslado`
--

INSERT INTO `traslado` (`id`, `fecha`, `observaciones`, `fechaCreado`, `almacenA_id`, `almacenB_id`, `usuarioCreado_id`) VALUES
(1, '2022-09-16 00:00:00', '', '2022-09-16 09:42:21', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslado_lote`
--

CREATE TABLE `traslado_lote` (
  `id` int(11) NOT NULL,
  `traslado_id` int(11) DEFAULT NULL,
  `lote_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fechaCreado` datetime DEFAULT NULL,
  `usuarioCreado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `traslado_lote`
--

INSERT INTO `traslado_lote` (`id`, `traslado_id`, `lote_id`, `cantidad`, `fechaCreado`, `usuarioCreado_id`) VALUES
(1, 1, 2, 1, '2022-09-16 09:42:21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almacenes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`almacenes`)),
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `email`, `username`, `almacenes`, `roles`, `password`, `estado`) VALUES
(1, 'Administrador', '', 'admin@gmail.es', 'admin', '[\"1\"]', '[\"ROLE_GESTOR\", \"ROLE_ADMINISTRADOR\"]', '$2y$15$b4ulGL6oF3h1llPyr.rbduD3TJ8YMX7drRG6w8TH1Sq3G.fEoxIFu', 1),
(2, 'Gestor 1', 'Gestor', 'Gestor@gmail.com', 'Gestor', '[\"1\"]', '[\"ROLE_GESTOR\"]', '$2y$15$TXBzY2XCBlEx2TAHFzlhlOi1ZgOPO0xGMC6g8h98XoTS/hcDQiHa6', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D5B2D250A5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `almacen_producto`
--
ALTER TABLE `almacen_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4A08A0779C9C9E68` (`almacen_id`),
  ADD KEY `IDX_4A08A0777645698E` (`producto_id`),
  ADD KEY `IDX_4A08A077A5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `area_servicio`
--
ALTER TABLE `area_servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_889ACE2A5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_256292719C9C9E68` (`almacen_id`),
  ADD KEY `IDX_256292711BED3EF2` (`areaServicio_id`),
  ADD KEY `IDX_25629271A5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `asignacion_lote`
--
ALTER TABLE `asignacion_lote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_48CA6D7DD3B92F9E` (`asignacion_id`),
  ADD KEY `IDX_48CA6D7DB172197C` (`lote_id`),
  ADD KEY `IDX_48CA6D7DA5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4E10122DA5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `ext_log_entries`
--
ALTER TABLE `ext_log_entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_class_lookup_idx` (`object_class`),
  ADD KEY `log_date_lookup_idx` (`logged_at`),
  ADD KEY `log_user_lookup_idx` (`username`),
  ADD KEY `log_version_lookup_idx` (`object_id`,`object_class`,`version`);

--
-- Indices de la tabla `importacion`
--
ALTER TABLE `importacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F483A40E9C9C9E68` (`almacen_id`),
  ADD KEY `IDX_F483A40ECB305D73` (`proveedor_id`),
  ADD KEY `IDX_F483A40EA5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `importacion_lote`
--
ALTER TABLE `importacion_lote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D60BF3D7D20543B9` (`importacion_id`),
  ADD KEY `IDX_D60BF3D7B172197C` (`lote_id`),
  ADD KEY `IDX_D60BF3D7A5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `log_importacion`
--
ALTER TABLE `log_importacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_65B4329F7645698E` (`producto_id`),
  ADD KEY `IDX_65B4329FA5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A7BB06153397707A` (`categoria_id`),
  ADD KEY `IDX_A7BB061588D3B71A` (`subcategoria_id`),
  ADD KEY `IDX_A7BB0615A5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_16C068CEA5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DA7FB9143397707A` (`categoria_id`),
  ADD KEY `IDX_DA7FB914A5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `traslado`
--
ALTER TABLE `traslado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AF6CFC27FEA6F8FB` (`almacenA_id`),
  ADD KEY `IDX_AF6CFC27EC135715` (`almacenB_id`),
  ADD KEY `IDX_AF6CFC27A5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `traslado_lote`
--
ALTER TABLE `traslado_lote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EF928AEDA74E1638` (`traslado_id`),
  ADD KEY `IDX_EF928AEDB172197C` (`lote_id`),
  ADD KEY `IDX_EF928AEDA5B39F3F` (`usuarioCreado_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2265B05DF85E0677` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `almacen_producto`
--
ALTER TABLE `almacen_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `area_servicio`
--
ALTER TABLE `area_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `asignacion_lote`
--
ALTER TABLE `asignacion_lote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ext_log_entries`
--
ALTER TABLE `ext_log_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `importacion`
--
ALTER TABLE `importacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `importacion_lote`
--
ALTER TABLE `importacion_lote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;

--
-- AUTO_INCREMENT de la tabla `log_importacion`
--
ALTER TABLE `log_importacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `traslado`
--
ALTER TABLE `traslado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `traslado_lote`
--
ALTER TABLE `traslado_lote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD CONSTRAINT `FK_D5B2D250A5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `almacen_producto`
--
ALTER TABLE `almacen_producto`
  ADD CONSTRAINT `FK_4A08A0777645698E` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `FK_4A08A0779C9C9E68` FOREIGN KEY (`almacen_id`) REFERENCES `almacen` (`id`),
  ADD CONSTRAINT `FK_4A08A077A5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `area_servicio`
--
ALTER TABLE `area_servicio`
  ADD CONSTRAINT `FK_889ACE2A5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `FK_256292711BED3EF2` FOREIGN KEY (`areaServicio_id`) REFERENCES `area_servicio` (`id`),
  ADD CONSTRAINT `FK_256292719C9C9E68` FOREIGN KEY (`almacen_id`) REFERENCES `almacen` (`id`),
  ADD CONSTRAINT `FK_25629271A5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `asignacion_lote`
--
ALTER TABLE `asignacion_lote`
  ADD CONSTRAINT `FK_48CA6D7DA5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `FK_48CA6D7DB172197C` FOREIGN KEY (`lote_id`) REFERENCES `lote` (`id`),
  ADD CONSTRAINT `FK_48CA6D7DD3B92F9E` FOREIGN KEY (`asignacion_id`) REFERENCES `asignacion` (`id`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `FK_4E10122DA5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `importacion`
--
ALTER TABLE `importacion`
  ADD CONSTRAINT `FK_F483A40E9C9C9E68` FOREIGN KEY (`almacen_id`) REFERENCES `almacen` (`id`),
  ADD CONSTRAINT `FK_F483A40EA5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `FK_F483A40ECB305D73` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedor` (`id`);

--
-- Filtros para la tabla `importacion_lote`
--
ALTER TABLE `importacion_lote`
  ADD CONSTRAINT `FK_D60BF3D7A5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `FK_D60BF3D7B172197C` FOREIGN KEY (`lote_id`) REFERENCES `lote` (`id`),
  ADD CONSTRAINT `FK_D60BF3D7D20543B9` FOREIGN KEY (`importacion_id`) REFERENCES `importacion` (`id`);

--
-- Filtros para la tabla `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `FK_65B4329F7645698E` FOREIGN KEY (`producto_id`) REFERENCES `almacen_producto` (`id`),
  ADD CONSTRAINT `FK_65B4329FA5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_A7BB06153397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `FK_A7BB061588D3B71A` FOREIGN KEY (`subcategoria_id`) REFERENCES `subcategoria` (`id`),
  ADD CONSTRAINT `FK_A7BB0615A5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `FK_16C068CEA5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `FK_DA7FB9143397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `FK_DA7FB914A5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `traslado`
--
ALTER TABLE `traslado`
  ADD CONSTRAINT `FK_AF6CFC27A5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `FK_AF6CFC27EC135715` FOREIGN KEY (`almacenB_id`) REFERENCES `almacen` (`id`),
  ADD CONSTRAINT `FK_AF6CFC27FEA6F8FB` FOREIGN KEY (`almacenA_id`) REFERENCES `almacen` (`id`);

--
-- Filtros para la tabla `traslado_lote`
--
ALTER TABLE `traslado_lote`
  ADD CONSTRAINT `FK_EF928AEDA5B39F3F` FOREIGN KEY (`usuarioCreado_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `FK_EF928AEDA74E1638` FOREIGN KEY (`traslado_id`) REFERENCES `traslado` (`id`),
  ADD CONSTRAINT `FK_EF928AEDB172197C` FOREIGN KEY (`lote_id`) REFERENCES `lote` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2022 a las 12:57:12
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anei`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ahorro`
--

CREATE TABLE `ahorro` (
  `cedula_ahorro` bigint(20) NOT NULL,
  `valor_ahorro` bigint(20) NOT NULL,
  `fecha_ahorro` date NOT NULL,
  `hora_ahorro` time NOT NULL,
  `nombre_ahorro` varchar(40) NOT NULL,
  `codigo_ahorro` varchar(40) NOT NULL,
  `kilos_ahorro` bigint(20) NOT NULL,
  `cantidad_ahorro` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ahorro`
--

INSERT INTO `ahorro` (`cedula_ahorro`, `valor_ahorro`, `fecha_ahorro`, `hora_ahorro`, `nombre_ahorro`, `codigo_ahorro`, `kilos_ahorro`, `cantidad_ahorro`) VALUES
(77039834846, 144800, '2022-08-05', '12:05:43', '', 'AC 2022-08-04 1', 0, 0),
(34535346, 90400, '2022-08-05', '12:10:11', 'adriana', 'VP 2022-08-04 1', 0, 0),
(398453456, 214400, '2022-08-05', '12:14:04', 'pablo', 'VP 2022-08-05 2', 0, 0),
(77039834846, 67200, '2022-08-05', '01:20:12', 'carlos', 'AC 2022-08-05 1', 224, 300),
(77039834846, 134000, '2022-08-09', '03:06:07', 'carlos', 'AC 2022-08-09 2', 335, 400),
(77924393476, 44400, '2022-08-09', '08:23:17', 'keterine', 'AC 2022-08-09 1', 222, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisisfisico`
--

CREATE TABLE `analisisfisico` (
  `codigo_analisisfisico` varchar(40) NOT NULL,
  `fecha_analisisfisico` date NOT NULL,
  `almendra_total` float(10,1) NOT NULL,
  `almendra_sana` float(10,1) NOT NULL,
  `broca` float(10,1) NOT NULL,
  `broca_punto` float(10,1) NOT NULL,
  `negro` float(10,1) NOT NULL,
  `vinagre` float(10,1) NOT NULL,
  `humedad` float(10,1) NOT NULL,
  `factor` float(10,1) NOT NULL,
  `observaciones_analisisfisico` varchar(40) NOT NULL,
  `almendra_sana1` float(10,1) NOT NULL,
  `almendra_total1` float(10,1) NOT NULL,
  `broca1` float(10,1) NOT NULL,
  `broca_punto1` float(10,1) NOT NULL,
  `negro1` float(10,1) NOT NULL,
  `vinagre1` float(10,1) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `analisisfisico`
--

INSERT INTO `analisisfisico` (`codigo_analisisfisico`, `fecha_analisisfisico`, `almendra_total`, `almendra_sana`, `broca`, `broca_punto`, `negro`, `vinagre`, `humedad`, `factor`, `observaciones_analisisfisico`, `almendra_sana1`, `almendra_total1`, `broca1`, `broca_punto1`, `negro1`, `vinagre1`, `numero`) VALUES
('AC 2022-08-03 3', '2022-08-03', 230.0, 210.0, 3.0, 3.0, 3.0, 3.0, 3.0, 83.3, 'bim', 84.0, 92.0, 1.2, 1.2, 1.2, 1.2, 1),
('AC 2022-08-09 2', '2022-08-09', 250.0, 200.0, 3.0, 3.0, 3.0, 3.0, 12.0, 87.5, '', 80.0, 0.2, 1.2, 1.2, 1.2, 1.2, 4),
('PB 2022-07-31 1', '2022-08-02', 210.0, 200.0, 3.0, 3.0, 3.0, 3.0, 12.0, 87.5, '34', 80.0, 84.0, 1.2, 1.2, 1.2, 1.2, 5),
('PB 2022-07-31 2', '2022-07-31', 198.0, 200.0, 45.0, 45.0, 45.0, 45.0, 54.0, 87.5, 'gh', 80.0, 79.2, 18.0, 18.0, 18.0, 18.0, 6),
('PB 2022-07-31 3', '2022-08-01', 178.0, 200.0, 34.0, 54.0, 23.0, 23.0, 23.0, 87.5, '3bn', 80.0, 71.2, 13.6, 21.6, 9.2, 9.2, 7),
('VP 2022-08-04 1', '2022-08-04', 210.0, 200.0, 3.0, 3.0, 3.0, 3.0, 8.0, 87.5, 'BUENO', 80.0, 84.0, 1.2, 1.2, 1.2, 1.2, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisissensorial`
--

CREATE TABLE `analisissensorial` (
  `codigo_sensorial` varchar(40) NOT NULL,
  `fecha_sensorial` date NOT NULL,
  `puntaje_scaa` float(10,1) NOT NULL,
  `acidez` varchar(40) NOT NULL,
  `notas` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `analisissensorial`
--

INSERT INTO `analisissensorial` (`codigo_sensorial`, `fecha_sensorial`, `puntaje_scaa`, `acidez`, `notas`, `numero`) VALUES
('AC 2022-08-09 2', '2022-08-09', 82.0, 'media', 'se puede comprar', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE `asociados` (
  `nombre_usuario` varchar(40) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `vereda` varchar(40) NOT NULL,
  `finca` varchar(40) NOT NULL,
  `fecha_registro` date NOT NULL,
  `cedula_usuario` bigint(20) NOT NULL,
  `codigo_up` varchar(40) NOT NULL,
  `estatus` varchar(40) NOT NULL,
  `contacto` bigint(20) NOT NULL,
  `cupo_cafe` bigint(20) NOT NULL,
  `tipo_vinculacion` varchar(40) NOT NULL,
  `cupo_cacao` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asociados`
--

INSERT INTO `asociados` (`nombre_usuario`, `municipio`, `vereda`, `finca`, `fecha_registro`, `cedula_usuario`, `codigo_up`, `estatus`, `contacto`, `cupo_cafe`, `tipo_vinculacion`, `cupo_cacao`, `numero`) VALUES
('adriana', 'valledupar', 'cecili', 'el paraiso', '2022-08-04', 34535346, 'xv5g', 'estandar', 300832475, 6000, 'estandar', 1000, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `cedula` bigint(20) NOT NULL,
  `producto` varchar(40) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `numero_estopas` bigint(20) NOT NULL,
  `estado_estopas` varchar(40) NOT NULL,
  `numero_sacos` bigint(20) NOT NULL,
  `estado_sacos` varchar(40) NOT NULL,
  `observaciones` varchar(40) NOT NULL,
  `fecha_compra` date NOT NULL,
  `kilos_brutos` bigint(20) NOT NULL,
  `kilos_netos` bigint(20) NOT NULL,
  `municipio_compra` varchar(40) NOT NULL,
  `tipo_grano` varchar(40) NOT NULL,
  `latas_compra` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`cedula`, `producto`, `unidad`, `marca`, `numero_estopas`, `estado_estopas`, `numero_sacos`, `estado_sacos`, `observaciones`, `fecha_compra`, `kilos_brutos`, `kilos_netos`, `municipio_compra`, `tipo_grano`, `latas_compra`, `numero`) VALUES
(77039834846, 'cafe pergamino seco', 'kilo', 'AC 2022-08-04 1', 10, 'buena', 4, 'seleccione', 'mj', '2022-08-04', 368, 362, 'codazzi', 'organico', 0, 1),
(77039834846, 'cafe pergamino seco', 'kilo', 'AC 2022-08-05 1', 12, 'buena', 13, 'buena', 'er', '2022-08-05', 234, 224, 'codazzi', 'organico', 0, 2),
(34535346, 'cafe pergamino seco', 'kilo', 'VP 2022-08-04 1', 12, 'buena', 8, 'buena', 'BU', '2022-08-04', 234, 226, 'valledupar', 'estandar', 0, 5),
(398453456, 'cacao seco', 'kilo', 'VP 2022-08-05 1', 12, 'buena', 8, 'buena', 'bh', '2022-08-05', 564, 556, 'valledupar', 'estandar', 0, 6),
(398453456, 'cafe mojado', 'lata', 'VP 2022-08-05 2', 5, 'seleccione', 0, 'seleccione', '45', '2022-08-05', 0, 536, 'valledupar', 'estandar', 67, 7),
(34535346, 'cafe pergamino seco', 'kilo', 'VP 2022-08-14 1', 14, 'buena', 34, 'buena', '', '2022-08-14', 426, 399, 'valledupar', 'estandar', 0, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlsecadora`
--

CREATE TABLE `controlsecadora` (
  `cod_secadora` bigint(20) NOT NULL,
  `fecha_secadora` date NOT NULL,
  `hora_secadora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `controlsecadora`
--

INSERT INTO `controlsecadora` (`cod_secadora`, `fecha_secadora`, `hora_secadora`) VALUES
(131, '2022-08-09', '05:36:52'),
(132, '2022-08-09', '05:37:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion`
--

CREATE TABLE `liquidacion` (
  `codigo_liquidacion` varchar(40) NOT NULL,
  `precio_dia` bigint(20) NOT NULL,
  `rendimiento` bigint(20) NOT NULL,
  `bonificacion` bigint(20) NOT NULL,
  `prima` bigint(20) NOT NULL,
  `precio_final` bigint(20) NOT NULL,
  `subtotal` bigint(20) NOT NULL,
  `fecha_liquidacion` date NOT NULL,
  `hora_liquidacion` time NOT NULL,
  `politica` varchar(40) NOT NULL,
  `observaciones_liquidacion` varchar(40) NOT NULL,
  `dian` bigint(20) NOT NULL,
  `asociados` bigint(20) NOT NULL,
  `neto_pagar` bigint(20) NOT NULL,
  `ahorro` bigint(20) NOT NULL,
  `total_ahorro` bigint(20) NOT NULL,
  `kilos_liquidacion` bigint(20) NOT NULL,
  `cedula_liquidacion` bigint(20) NOT NULL,
  `aporte` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `liquidacion`
--

INSERT INTO `liquidacion` (`codigo_liquidacion`, `precio_dia`, `rendimiento`, `bonificacion`, `prima`, `precio_final`, `subtotal`, `fecha_liquidacion`, `hora_liquidacion`, `politica`, `observaciones_liquidacion`, `dian`, `asociados`, `neto_pagar`, `ahorro`, `total_ahorro`, `kilos_liquidacion`, `cedula_liquidacion`, `aporte`, `numero`) VALUES
('AC 2022-08-03 1', 20000, 0, 35, 1500, 1535, 514225, '2022-08-03', '01:06:39', 'politica1', 'falto realizar el analisis fisico', 2571, 5142, 506512, 400, 134000, 335, 23, 10000, 2),
('AC 2022-08-04 1', 15000, 16711, 200, 800, 17710, 6411020, '2022-08-04', '02:23:49', 'politica1', 'bien', 32055, 64110, 5819000, 500, 181000, 362, 77039834846, 314855, 3),
('VP 2022-08-04 1', 20000, 21211, 130, 1500, 22841, 5162066, '2022-08-04', '12:11:07', 'politica1', 'BN', 25810, 51621, 5084636, 500, 113000, 226, 34535346, 10000, 4),
('VP 2022-08-05 1', 7800, 0, 300, 900, 9000, 5004000, '2022-08-05', '11:50:40', 'politica1', 'mi primer ahorro', 15012, 50040, 4696548, 400, 222400, 556, 398453456, 20000, 5),
('AC 2022-08-04 1', 15000, 16711, 200, 800, 17710, 6411020, '2022-08-05', '12:04:14', 'politica1', 'rt', 32055, 64110, 6150055, 400, 144800, 362, 77039834846, 20000, 6),
('AC 2022-08-04 1', 15000, 16711, 200, 800, 17710, 6411020, '2022-08-05', '12:05:43', 'politica1', 'ty', 32055, 64110, 6150055, 400, 144800, 362, 77039834846, 20000, 7),
('VP 2022-08-04 1', 20000, 21211, 45, 1500, 22756, 5142856, '2022-08-05', '12:10:11', 'politica1', 'tr', 25714, 51429, 4974858, 400, 90400, 226, 34535346, 456, 8),
('VP 2022-08-05 2', 14000, 0, 45, 1200, 15245, 8171320, '2022-08-05', '12:14:04', 'politica1', '56', 40857, 81713, 7814351, 400, 214400, 536, 398453456, 20000, 9),
('AC 2022-08-05 1', 15000, 15114, 200, 800, 16114, 3609536, '2022-08-05', '01:20:12', 'politica1', 'segundo ahorro', 18048, 36095, 3487194, 300, 67200, 224, 77039834846, 1000, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noasociados`
--

CREATE TABLE `noasociados` (
  `cedula_noasociados` bigint(20) NOT NULL,
  `centro_acopio` varchar(40) NOT NULL,
  `fecha_noasociado` date NOT NULL,
  `nombres_completos` varchar(60) NOT NULL,
  `contacto_noasociado` bigint(20) NOT NULL,
  `tipo_cliente` varchar(40) NOT NULL,
  `municipio_noasociado` varchar(40) NOT NULL,
  `vereda_noasociado` varchar(40) NOT NULL,
  `finca_noasociado` varchar(40) NOT NULL,
  `producion_noasociado` float(10,1) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noasociados`
--

INSERT INTO `noasociados` (`cedula_noasociados`, `centro_acopio`, `fecha_noasociado`, `nombres_completos`, `contacto_noasociado`, `tipo_cliente`, `municipio_noasociado`, `vereda_noasociado`, `finca_noasociado`, `producion_noasociado`, `numero`) VALUES
(0, '', '0000-00-00', 'sara', 0, '', 'san diego', 'media luna', 'alaska', 0.0, 1),
(1, '', '0000-00-00', 'sara', 0, 'estandar', 'san diego', 'media luna', 'alaska', 0.0, 3),
(2, '', '2022-07-19', 'sara', 2, 'organico', 'san diego', 'media luna', 'alaska', 2.0, 4),
(5, '5', '0000-00-00', '5', 5, '5', '5', '5', '5', 5.0, 0),
(8, '8', '0000-00-00', '8', 8, '8', '8', '8', '8', 8.0, 8),
(9, '9', '0000-00-00', '9', 9, '9', '9', '9', '9', 9.0, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `tipo` varchar(40) NOT NULL,
  `precio` bigint(20) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `prima_producto` bigint(20) NOT NULL,
  `politica` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`tipo`, `precio`, `descripcion`, `prima_producto`, `politica`, `nombre`, `numero`) VALUES
('estandar', 20000, 'el mejor', 1500, 'politica1', 'cafe pergamino seco', 1),
('organico', 18000, 'el mejor', 1600, 'politica1', 'cafe mojado', 2),
('organico', 15000, 'cafe regular', 800, 'politica1', 'cafe pergamino seco', 3),
('estandar', 14000, 'cafe regular', 1200, 'politica1', 'cafe mojado', 4),
('estandar', 7800, 'cacao regular', 900, 'politica1', 'cacao seco', 5),
('organico', 9000, 'el mejor', 1200, 'politica1', 'cacao seco', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadosecado`
--

CREATE TABLE `resultadosecado` (
  `codigo_resultado` varchar(40) NOT NULL,
  `fecha_resultado` date NOT NULL,
  `cantidad_resultado` bigint(20) NOT NULL,
  `costo_resultado` bigint(20) NOT NULL,
  `costo_total_resultado` bigint(20) NOT NULL,
  `observaciones_resultado` varchar(40) NOT NULL,
  `tipo_pago` varchar(40) NOT NULL,
  `tipograno_resultado` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultadosecado`
--

INSERT INTO `resultadosecado` (`codigo_resultado`, `fecha_resultado`, `cantidad_resultado`, `costo_resultado`, `costo_total_resultado`, `observaciones_resultado`, `tipo_pago`, `tipograno_resultado`, `numero`) VALUES
('1', '0000-00-00', 3, 3, 3, '3', 'efectivo', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiro`
--

CREATE TABLE `retiro` (
  `cedula_retiro` bigint(20) NOT NULL,
  `fecha_retiro` date NOT NULL,
  `hora_retiro` time NOT NULL,
  `valor_retiro` bigint(20) NOT NULL,
  `nombre_retiro` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `retiro`
--

INSERT INTO `retiro` (`cedula_retiro`, `fecha_retiro`, `hora_retiro`, `valor_retiro`, `nombre_retiro`) VALUES
(34535346, '2022-08-06', '04:21:10', 400, 'adriana'),
(34535346, '2022-08-06', '04:24:53', 50000, 'adriana'),
(398453456, '2022-08-06', '04:25:28', 44000, 'pablo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secado`
--

CREATE TABLE `secado` (
  `producto_secado` varchar(40) NOT NULL,
  `numero_latas` bigint(20) NOT NULL,
  `fecha_secado` date NOT NULL,
  `tipo_usuario` varchar(40) NOT NULL,
  `observaciones_secado` varchar(40) NOT NULL,
  `humedad_secado` varchar(40) NOT NULL,
  `codigo_secado` varchar(40) NOT NULL,
  `cedula_secado` bigint(20) NOT NULL,
  `municipio_secado` varchar(40) NOT NULL,
  `tiposecado_resultado` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secado`
--

INSERT INTO `secado` (`producto_secado`, `numero_latas`, `fecha_secado`, `tipo_usuario`, `observaciones_secado`, `humedad_secado`, `codigo_secado`, `cedula_secado`, `municipio_secado`, `tiposecado_resultado`, `numero`) VALUES
('cafe mojado', 14, '2022-08-03', 'asociado', 'lo necesita para mañana', 'oreado', 'AC 2022-08-03 3', 23, 'codazzi', 'patio', 1),
('cafe mojado', 23, '2022-08-09', 'estandar', '', 'mojado', 'AC 2022-08-09 2', 77039834846, 'codazzi', 'patio mini', 2),
('cafe mojado', 21, '2022-08-10', 'estandar', '', 'mojado', 'AC 2022-08-10 1', 77924393476, 'codazzi', 'patio', 3),
('cafe mojado', 8, '2022-07-31', 'estandar', '1', 'mojado', 'PB 2022-07-31 1', 0, '', 'secadora la mesa', 4),
('cafe mojado', 4, '2022-07-31', 'estandar', 'ummmm', 'oreado', 'PB 2022-07-31 3', 0, '', 'secadora la mesa', 6),
('cafe mojado', 2, '2022-07-31', 'estandar', '434', 'mojado', 'PB 2022-07-31 4', 1, '', '', 7),
('cafe mojado', 10, '2022-08-01', 'estandar', 'fg', 'mojado', 'PB 2022-08-01 1', 1, 'pueblo bello', '', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secadora`
--

CREATE TABLE `secadora` (
  `codigo_secadora` bigint(20) NOT NULL,
  `codigo_producto` varchar(40) NOT NULL,
  `cantidad_secadora` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secadora`
--

INSERT INTO `secadora` (`codigo_secadora`, `codigo_producto`, `cantidad_secadora`) VALUES
(119, 'EREW', 4),
(119, 'sd', 1),
(119, 'EREW', 200),
(120, 'FDFSD', 200),
(121, 'FDFSD', 2),
(121, 'FG567', 3),
(121, 'sds', 3),
(123, 'FDFSD', 5),
(126, 'FDFSD', 23),
(126, 'sds', 35),
(126, '432', 14),
(126, 'FG567', 4),
(126, 'EREW', 3),
(126, 'sds', 2),
(128, '46', 46),
(128, 'FDFSD', 32),
(129, 'wqwqwq', 45),
(129, 'dffg', 15),
(129, 'fgf', 4),
(129, 'sf4', 12),
(129, 'dfddsfd', 6),
(129, 'fdf', 1),
(129, 'fdf', 1),
(129, 'scsd', 1),
(129, '2312', 1),
(129, '21321', 1),
(129, '13d', 1),
(129, 'wewe', 1),
(130, 'jfhfgy', 45),
(130, '27', 27),
(130, 'sd', 12),
(130, 'FG567', 5),
(130, '1', 1),
(130, 'cvxv', 5),
(0, 'EREW', 35),
(0, 'wqwqwq', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `cedula_turno` bigint(20) NOT NULL,
  `municipio_turno` varchar(40) NOT NULL,
  `fecha_turno` date NOT NULL,
  `hora_turno` time NOT NULL,
  `turno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`cedula_turno`, `municipio_turno`, `fecha_turno`, `hora_turno`, `turno`) VALUES
(1, 'P. Bello', '2022-07-22', '02:08:53', 0),
(34535346, '', '2022-08-07', '02:58:30', 1),
(34535346, 'valledupar', '2022-08-07', '03:01:22', 1),
(34535346, 'valledupar', '2022-08-07', '03:01:51', 2),
(34535346, 'valledupar', '2022-08-07', '03:11:23', 3),
(34535346, 'valledupar', '2022-08-07', '03:16:29', 4),
(34535346, 'valledupar', '2022-08-07', '05:03:41', 5),
(34535346, 'valledupar', '2022-08-07', '05:04:13', 6),
(34535346, 'valledupar', '2022-08-07', '05:07:16', 7),
(34535346, 'valledupar', '2022-08-07', '05:08:30', 8),
(34535346, 'valledupar', '2022-08-07', '05:28:54', 9),
(34535346, 'valledupar', '2022-08-07', '05:29:12', 10),
(34535346, 'valledupar', '2022-08-07', '05:30:03', 11),
(34535346, 'valledupar', '2022-08-07', '05:35:27', 12),
(34535346, 'valledupar', '2022-08-07', '05:35:43', 13),
(34535346, 'valledupar', '2022-08-07', '05:55:01', 14),
(34535346, 'valledupar', '2022-08-07', '05:55:09', 15),
(34535346, 'valledupar', '2022-08-07', '05:55:33', 16),
(34535346, 'valledupar', '2022-08-14', '03:16:13', 1),
(34535346, 'valledupar', '2022-08-14', '03:16:40', 2),
(34535346, 'valledupar', '2022-08-14', '03:16:51', 3),
(34535346, 'valledupar', '2022-08-14', '03:18:26', 4),
(34535346, 'valledupar', '2022-08-14', '03:20:52', 5),
(34535346, 'valledupar', '2022-08-14', '03:22:11', 6),
(34535346, 'valledupar', '2022-08-14', '03:24:47', 7),
(34535346, 'valledupar', '2022-08-14', '03:26:04', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisisfisico`
--
ALTER TABLE `analisisfisico`
  ADD PRIMARY KEY (`codigo_analisisfisico`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `analisissensorial`
--
ALTER TABLE `analisissensorial`
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD PRIMARY KEY (`codigo_up`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`marca`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `controlsecadora`
--
ALTER TABLE `controlsecadora`
  ADD PRIMARY KEY (`cod_secadora`);

--
-- Indices de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `noasociados`
--
ALTER TABLE `noasociados`
  ADD PRIMARY KEY (`cedula_noasociados`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `resultadosecado`
--
ALTER TABLE `resultadosecado`
  ADD PRIMARY KEY (`codigo_resultado`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `secado`
--
ALTER TABLE `secado`
  ADD PRIMARY KEY (`codigo_secado`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisisfisico`
--
ALTER TABLE `analisisfisico`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `analisissensorial`
--
ALTER TABLE `analisissensorial`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `asociados`
--
ALTER TABLE `asociados`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `controlsecadora`
--
ALTER TABLE `controlsecadora`
  MODIFY `cod_secadora` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `noasociados`
--
ALTER TABLE `noasociados`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `resultadosecado`
--
ALTER TABLE `resultadosecado`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `secado`
--
ALTER TABLE `secado`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

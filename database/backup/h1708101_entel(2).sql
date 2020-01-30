-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2020 a las 22:12:02
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `h1708101_entel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acumulado`
--

CREATE TABLE `acumulado` (
  `id` int(11) UNSIGNED NOT NULL,
  `tipo` varchar(200) NOT NULL DEFAULT '0',
  `codigo` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `megas` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `minutos` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `sms` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `megas_alta` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=Aria DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acumulado`
--

INSERT INTO `acumulado` (`id`, `tipo`, `codigo`, `megas`, `minutos`, `sms`, `megas_alta`, `updated_at`, `created_at`) VALUES
(1, 'persona', 2, 242, 0, 0, 0, '2020-01-08 03:32:56', '2020-01-08 03:32:56'),
(2, 'persona', 2, 242, 0, 0, 0, '2020-01-08 03:52:09', '2020-01-08 03:52:09'),
(3, 'grupo', 10, 242, 0, 0, 0, '2020-01-08 03:52:09', '2020-01-08 03:52:09'),
(4, 'persona', 2, 475, 0, 0, 0, '2020-01-08 03:52:40', '2020-01-08 03:52:40'),
(5, 'grupo', 12, 475, 0, 0, 0, '2020-01-08 03:52:40', '2020-01-08 03:52:40'),
(6, 'persona', 2, 224, 0, 0, 0, '2020-01-08 03:56:50', '2020-01-08 03:56:50'),
(7, 'grupo', 12, 224, 0, 0, 0, '2020-01-08 03:56:50', '2020-01-08 03:56:50'),
(8, 'persona', 2, 248, 0, 0, 0, '2020-01-08 03:57:44', '2020-01-08 03:57:44'),
(9, 'grupo', 12, 248, 0, 0, 0, '2020-01-08 03:57:44', '2020-01-08 03:57:44'),
(10, 'persona', 2, 282, 0, 0, 0, '2020-01-08 17:38:48', '2020-01-08 17:38:48'),
(11, 'grupo', 57, 282, 0, 0, 0, '2020-01-08 17:38:48', '2020-01-08 17:38:48'),
(12, 'persona', 2, 248, 0, 0, 0, '2020-01-08 17:39:42', '2020-01-08 17:39:42'),
(13, 'grupo', 57, 248, 0, 0, 0, '2020-01-08 17:39:42', '2020-01-08 17:39:42'),
(14, 'persona', 52, 698, 0, 0, 0, '2020-01-22 02:41:21', '2020-01-22 02:41:21'),
(15, 'grupo', 10, 698, 0, 0, 0, '2020-01-22 02:41:21', '2020-01-22 02:41:21'),
(16, 'persona', 2, 312, 0, 0, 0, '2020-01-22 02:41:39', '2020-01-22 02:41:39'),
(17, 'grupo', 10, 312, 0, 0, 0, '2020-01-22 02:41:39', '2020-01-22 02:41:39'),
(18, 'persona', 44, 99, 0, 0, 0, '2020-01-22 02:55:38', '2020-01-22 02:55:38'),
(19, 'grupo', 10, 99, 0, 0, 0, '2020-01-22 02:55:38', '2020-01-22 02:55:38'),
(20, 'persona', 44, 1076, 0, 0, 0, '2020-01-22 19:51:39', '2020-01-22 19:51:39'),
(21, 'grupo', 62, 1076, 0, 0, 0, '2020-01-22 19:51:40', '2020-01-22 19:51:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficios`
--

CREATE TABLE `beneficios` (
  `id_beneficio` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `tipo` varchar(250) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `url_beneficio` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beneficios`
--

INSERT INTO `beneficios` (`id_beneficio`, `nombre`, `tipo`, `descripcion`, `url_beneficio`) VALUES
(1, 'BEMBOS 2 X 1', 'personal', 'Disfruta de estas hamburguesas medianas a 2×1', 'BEMBOS.jpg'),
(2, '2x1 en Cineplanet', 'personal', 'Obtén este beneficio para salas 2D, 3D y Xtreme Láser.', 'CINE.jpg'),
(3, '25% de dscto Cineplanet', 'personal', 'En entradas a Cineplanet salas Prime o 2 entradas a S/ 8.50 en todas las salas de CineStar y Movietime.', 'Spotify.jpg'),
(4, '600mb', 'masivo', 'Entel te premia con 600 megas ', '600mb.png'),
(5, '1200mb', 'masivo', 'Entel te premia con 1200 megas ', '1200mb.png'),
(6, '300mb', 'masivo', 'Entel te premia con 300 megas ', '300mb.png'),
(7, '500mb', 'masivo', 'Entel te premia con 500 megas ', '500mb.png'),
(8, '24gb', 'masivo', 'Entel te premia con 24 gb para todo el año', '24gb.png'),
(9, '1 iphone', 'personalisado', '11 gratis por haber hecho migrar a 12 amigos a tu mancha power entel', 'iphone.jpg'),
(10, 'Descuento ', 'personalizado', 'En tu siguiente pago de plan a mitad de precio.', 'mitad.jpg'),
(11, 'Un starbucks', 'personalizado', 'Con dona gratis', 'starbucks.jpg'),
(12, 'Megas de velocidad rápida', 'personalizado', 'Por un día', 'alta.png'),
(13, 'Un viaje de ida y vuelta gratis', 'personalizado', ' En Uber,BEAT, etc', 'uber.jpg'),
(14, 'Envío de rappi de gasto', 'personalizado', 'Máximo de 50soles', 'rappi.jpg'),
(15, '2 tuelve packs', 'personalizado', 'De cornona o pilsen ', 'tuelve.jpg'),
(16, '25% en tragos', 'personalizado', 'en Tambo o Mass', 'tambo.png'),
(17, 'entrada doble', 'personalizado', 'Para hablando huevadas standup comedy', 'standup.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) UNSIGNED NOT NULL,
  `id_usuario` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `nombre` varchar(250) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `url_icono` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `id_usuario`, `nombre`, `tipo`, `url_icono`, `updated_at`, `created_at`) VALUES
(10, 2, 'pedas', 'amigos', 'canto.jpg', '2019-12-29 01:51:58', '2019-12-29 01:51:58'),
(11, 2, 'oratoria', 'trabajos', 'surf.jpg', '2019-12-29 01:56:51', '2019-12-29 01:56:51'),
(12, 2, 'pedas', 'trabajos', 'canto.jpg', '2019-12-29 02:33:50', '2019-12-29 02:33:50'),
(13, 2, 'rap', 'amigos', 'futbol.jpg', '2019-12-29 02:40:11', '2019-12-29 02:40:11'),
(15, 2, 'coment', 'amigos', '1577835551509768149543315727953.jpg', '2019-12-31 23:39:30', '2019-12-31 23:39:30'),
(22, 2, 'los fabitos', 'amigos', 'pubg.jpg', '2020-01-06 23:09:03', '2020-01-06 23:09:03'),
(52, 2, 'ddd', 'familia', 'pubg.jpg', '2020-01-07 02:30:04', '2020-01-07 02:30:04'),
(53, 2, 'dddddd', 'amigos', 'pubg2.jpg', '2020-01-07 02:31:18', '2020-01-07 02:31:18'),
(54, 2, 'test sansung', 'amigos', 'IMG-20200105-WA0007.jpg', '2020-01-07 02:37:24', '2020-01-07 02:37:24'),
(55, 2, 'los bebitos', 'amigos', '15784194001276841032308351262293.jpg', '2020-01-07 17:50:43', '2020-01-07 17:50:43'),
(56, 2, 'los bebitos', 'amigos', '15784194001276841032308351262293.jpg', '2020-01-07 17:50:53', '2020-01-07 17:50:53'),
(57, 2, 'test pc', 'familia', 'WhatsApp Image 2020-01-02 at 10.07.26 PM (1).jpeg', '2020-01-08 17:38:28', '2020-01-08 17:38:28'),
(60, 1, 'dota', 'familia', 'mancha_logo2.png', '2020-01-14 16:57:44', '2020-01-14 16:57:44'),
(61, 52, 'macha test', 'familia', 'img-fondo.jpg', '2020-01-22 01:59:18', '2020-01-22 01:59:18'),
(62, 44, 'pedas', 'trabajos', 'default.png', '2020-01-22 02:47:30', '2020-01-22 02:47:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `numero` varchar(200) DEFAULT NULL,
  `imgUrl` varchar(220) DEFAULT NULL,
  `dni` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nom`, `numero`, `imgUrl`, `dni`) VALUES
(1, 'orlando', '924883963', 'orlando.jpg', '70022054'),
(2, 'fabio', '945623606', 'fabio.jpg', '70022045'),
(3, 'hilda', '995712588', 'hilda.jpg', '08045524'),
(4, 'beto', '994536855', 'beto.jpg', '70022051'),
(5, 'franco', '999999999', 'franco.jpg', '70022033'),
(6, 'vanessa', '945883695', 'vanessa.jpg', '70011158'),
(7, 'tatiana', '987456123', 'tati.jpg', '70011156'),
(8, 'calin', '987632145', 'calin.jpg', '78896612');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(11) UNSIGNED NOT NULL,
  `id_categoria` int(11) UNSIGNED DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas`
--

CREATE TABLE `metas` (
  `id_metas` int(11) UNSIGNED NOT NULL,
  `nombre_meta` varchar(250) DEFAULT '0',
  `id_beneficio` int(11) DEFAULT 0,
  `megas` int(11) DEFAULT NULL,
  `minutos` int(11) DEFAULT NULL,
  `sms` int(11) DEFAULT NULL,
  `megas_alta` int(11) DEFAULT NULL,
  `miembros` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metas`
--

INSERT INTO `metas` (`id_metas`, `nombre_meta`, `id_beneficio`, `megas`, `minutos`, `sms`, `megas_alta`, `miembros`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 'meta1', 1, 400, 0, 0, 0, 4, '2020-01-22', '2020-03-23'),
(2, 'meta2', 2, 800, 0, 0, 0, 8, '2020-01-21', '2020-03-23'),
(3, 'meta3', 3, 400, 0, 0, 0, 6, '2020-01-09', '2020-03-10'),
(4, 'meta4', 4, 1000, 0, 0, 0, 10, '2020-01-09', '2020-03-20'),
(5, 'meta5', 5, 2000, 0, 0, 0, 10, '2020-01-08', '2020-03-08'),
(6, 'meta6', 6, 600, 0, 0, 0, 4, '2020-01-08', '2020-03-09'),
(7, 'meta7', 7, 1000, 0, 0, 0, 6, '2020-01-20', '2020-03-23'),
(8, 'meta7', 8, 1000, 0, 0, 0, 6, '2020-01-20', '2020-03-24'),
(9, 'meta6', 9, 600, 0, 0, 0, 4, '2020-01-08', '2020-03-09'),
(10, 'meta3', 10, 400, 0, 0, 0, 6, '2020-01-09', '2020-03-10'),
(11, 'meta7', 11, 1000, 0, 0, 0, 6, '2020-01-20', '2020-03-23'),
(12, 'meta6', 12, 600, 0, 0, 0, 4, '2020-01-08', '2020-03-09'),
(13, 'meta3', 13, 400, 0, 0, 0, 6, '2020-01-09', '2020-03-10'),
(14, 'meta1', 14, 400, 0, 0, 0, 4, '2020-01-22', '2020-03-23'),
(15, 'meta5', 15, 2000, 0, 0, 0, 10, '2020-01-08', '2020-03-08'),
(16, 'meta7', 16, 1000, 0, 0, 0, 6, '2020-01-20', '2020-03-23'),
(17, 'meta5', 17, 2000, 0, 0, 0, 10, '2020-01-08', '2020-03-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id_miembro` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_contacto` int(11) DEFAULT NULL,
  `id_google` varchar(100) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id_miembro`, `nombre`, `id_categoria`, `id_contacto`, `id_google`, `avatar`, `updated_at`, `created_at`) VALUES
(42, 'calin', 10, NULL, NULL, 'calin.jpg', '2019-12-30 14:26:44', '2019-12-30 14:26:44'),
(43, 'franco', 10, NULL, NULL, 'franco.jpg', '2019-12-30 14:26:49', '2019-12-30 14:26:49'),
(44, 'fabio', 11, NULL, NULL, 'fabio.jpg', '2019-12-30 14:26:54', '2019-12-30 14:26:54'),
(45, 'hilda', 11, NULL, NULL, 'hilda.jpg', '2019-12-30 14:26:58', '2019-12-30 14:26:58'),
(51, 'orlando', 10, NULL, NULL, 'orlando.jpg', '2019-12-30 18:29:59', '2019-12-30 18:29:59'),
(52, 'beto', 10, NULL, NULL, 'beto.jpg', '2019-12-30 18:30:09', '2019-12-30 18:30:09'),
(53, 'vanessa', 10, NULL, NULL, 'vanessa.jpg', '2019-12-30 18:30:15', '2019-12-30 18:30:15'),
(54, 'calin', 11, NULL, NULL, 'calin.jpg', '2019-12-31 22:58:21', '2019-12-31 22:58:21'),
(55, 'orlando', 11, NULL, NULL, 'orlando.jpg', '2019-12-31 22:58:29', '2019-12-31 22:58:29'),
(56, 'tatiana', 12, NULL, NULL, 'tati.jpg', '2019-12-31 23:18:39', '2019-12-31 23:18:39'),
(57, 'fabio', 12, NULL, NULL, 'fabio.jpg', '2019-12-31 23:18:52', '2019-12-31 23:18:52'),
(58, 'orlando', 12, NULL, NULL, 'orlando.jpg', '2019-12-31 23:19:08', '2019-12-31 23:19:08'),
(59, 'beto', 12, NULL, NULL, 'beto.jpg', '2019-12-31 23:21:22', '2019-12-31 23:21:22'),
(60, 'franco', 12, NULL, NULL, 'franco.jpg', '2019-12-31 23:21:31', '2019-12-31 23:21:31'),
(61, 'hilda', 12, NULL, NULL, 'hilda.jpg', '2019-12-31 23:34:51', '2019-12-31 23:34:51'),
(62, 'fabio', 10, NULL, NULL, 'fabio.jpg', '2020-01-02 01:43:16', '2020-01-02 01:43:16'),
(63, 'orlando', 13, NULL, NULL, 'orlando.jpg', '2020-01-06 04:52:27', '2020-01-06 04:52:27'),
(64, 'fabio', 13, NULL, NULL, 'fabio.jpg', '2020-01-06 04:58:11', '2020-01-06 04:58:11'),
(65, 'orlando', 16, NULL, NULL, 'orlando.jpg', '2020-01-06 18:02:14', '2020-01-06 18:02:14'),
(66, 'orlando', 49, NULL, NULL, 'orlando.jpg', '2020-01-07 02:25:52', '2020-01-07 02:25:52'),
(67, 'orlando', 52, NULL, NULL, 'orlando.jpg', '2020-01-07 02:30:31', '2020-01-07 02:30:31'),
(68, 'franco', 52, NULL, NULL, 'franco.jpg', '2020-01-07 02:30:35', '2020-01-07 02:30:35'),
(69, 'beto', 22, NULL, NULL, 'beto.jpg', '2020-01-07 02:30:42', '2020-01-07 02:30:42'),
(70, 'fabio', 22, NULL, NULL, 'fabio.jpg', '2020-01-07 02:30:53', '2020-01-07 02:30:53'),
(71, 'fabio', 22, NULL, NULL, 'fabio.jpg', '2020-01-07 02:31:04', '2020-01-07 02:31:04'),
(72, 'vanessa', 53, NULL, NULL, 'vanessa.jpg', '2020-01-07 02:31:25', '2020-01-07 02:31:25'),
(73, 'hilda', 54, NULL, NULL, 'hilda.jpg', '2020-01-07 02:37:39', '2020-01-07 02:37:39'),
(74, 'vanessa', 57, NULL, NULL, 'vanessa.jpg', '2020-01-08 17:38:38', '2020-01-08 17:38:38'),
(75, 'tatiana', 57, NULL, NULL, 'tati.jpg', '2020-01-08 17:38:40', '2020-01-08 17:38:40'),
(76, 'orlando', 60, NULL, NULL, 'orlando.jpg', '2020-01-14 17:00:54', '2020-01-14 17:00:54'),
(78, 'fabio', 60, NULL, NULL, 'fabio.jpg', '2020-01-14 17:00:59', '2020-01-14 17:00:59'),
(79, 'Monica Mavila', 10, NULL, NULL, 'blob:http://localhost:8000/b3b1d7e9-5974-43ea-801f-550e9e559682', '2020-01-16 21:59:22', '2020-01-16 21:59:22'),
(80, 'elvin', NULL, NULL, NULL, 'elvin.png', '2020-01-18 00:00:33', '2020-01-18 00:00:33'),
(81, 'Ivan Crispin Sanchez', NULL, NULL, NULL, 'Ivan Crispin Sanchez.png', '2020-01-18 00:16:20', '2020-01-18 00:16:20'),
(82, 'Erick Benites', 10, NULL, NULL, 'Erick Benites.png', '2020-01-18 00:18:31', '2020-01-18 00:18:31'),
(83, 'Lesly Becerra Villafranca', 10, NULL, NULL, 'Lesly Becerra Villafranca.png', '2020-01-18 00:20:31', '2020-01-18 00:20:31'),
(84, 'Lesly Becerra Villafranca', 10, NULL, NULL, 'Lesly Becerra Villafranca.png', '2020-01-18 00:20:32', '2020-01-18 00:20:32'),
(128, 'porrasquintana@gmail.com', 57, 23, NULL, 'porrasquintana@gmail.com.png', '2020-01-21 22:26:52', '2020-01-21 22:26:52'),
(129, 'romero.yx@gmail.com', 57, 25, NULL, 'romero.yx@gmail.com.png', '2020-01-21 22:30:14', '2020-01-21 22:30:14'),
(130, 'lospemas@gmail.com', 57, 26, NULL, 'lospemas@gmail.com.png', '2020-01-21 22:31:11', '2020-01-21 22:31:11'),
(131, 'sussanzubiate@gmail.com', 57, 28, NULL, 'sussanzubiate@gmail.com.png', '2020-01-21 22:33:00', '2020-01-21 22:33:00'),
(132, 'irina.avila@pucp.pe', 57, 30, NULL, 'irina.avila@pucp.pe.png', '2020-01-21 22:33:24', '2020-01-21 22:33:24'),
(133, 'Jarenascondor@gmail.com', 57, 31, NULL, 'Jarenascondor@gmail.com.png', '2020-01-21 22:33:54', '2020-01-21 22:33:54'),
(134, 'rrhh@inspirait.com', 57, 32, NULL, 'rrhh@inspirait.com.png', '2020-01-21 22:36:03', '2020-01-21 22:36:03'),
(135, 'cct.music71@gmail.com', 57, 34, NULL, 'cct.music71@gmail.com.png', '2020-01-21 22:36:24', '2020-01-21 22:36:24'),
(136, 'alex.misari@gmail.com', 57, 35, NULL, 'alex.misari@gmail.com.png', '2020-01-21 22:36:33', '2020-01-21 22:36:33'),
(141, 'Jarenascondor@gmail.com', 57, 41, NULL, 'Jarenascondor@gmail.com.png', '2020-01-21 22:48:22', '2020-01-21 22:48:22'),
(144, 'Lesly Becerra Villafranca', 60, 44, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/2f369e1d88f5c714', 'LeslyBecerraVillafranca.png', '2020-01-22 00:27:53', '2020-01-22 00:27:53'),
(145, 'Monica Mavila', 60, 45, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/2c2d74c90997defd', 'MonicaMavila.png', '2020-01-22 00:27:57', '2020-01-22 00:27:57'),
(154, 'elvin', 60, 54, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/41a4cb9188d8d58f', 'elvin.png', '2020-01-22 00:46:55', '2020-01-22 00:46:55'),
(155, 'Elvin Mejía', 60, 55, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/39eae4960ff40092', 'ElvinMejía.png', '2020-01-22 00:46:58', '2020-01-22 00:46:58'),
(156, 'Erick Benites', 61, 56, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/43ed963c0a3a7732', 'ErickBenites.png', '2020-01-22 02:00:01', '2020-01-22 02:00:01'),
(157, 'Elvin Mejía', 61, 57, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/39eae4960ff40092', 'ElvinMejía.png', '2020-01-22 02:00:02', '2020-01-22 02:00:02'),
(158, 'SINPROSA PROFESIONALES DE LA SALUD', 61, 58, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/1487bf438f28aa58', 'SINPROSAPROFESIONALESDELASALUD.png', '2020-01-22 02:00:10', '2020-01-22 02:00:10'),
(159, 'SINPROSA PROFESIONALES DE LA SALUD', 61, 59, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/1487bf438f28aa58', 'SINPROSAPROFESIONALESDELASALUD.png', '2020-01-22 02:00:10', '2020-01-22 02:00:10'),
(160, 'SINPROSA PROFESIONALES DE LA SALUD', 61, 60, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/1487bf438f28aa58', 'SINPROSAPROFESIONALESDELASALUD.png', '2020-01-22 02:00:11', '2020-01-22 02:00:11'),
(161, 'SINPROSA PROFESIONALES DE LA SALUD', 61, 61, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/1487bf438f28aa58', 'SINPROSAPROFESIONALESDELASALUD.png', '2020-01-22 02:00:12', '2020-01-22 02:00:12'),
(162, 'SINPROSA PROFESIONALES DE LA SALUD', 61, 62, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/1487bf438f28aa58', 'SINPROSAPROFESIONALESDELASALUD.png', '2020-01-22 02:00:14', '2020-01-22 02:00:14'),
(163, 'lospemas@gmail.com', 61, 63, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/4c7070760e9e43c8', 'lospemas@gmail.com.png', '2020-01-22 02:00:18', '2020-01-22 02:00:18'),
(164, 'Erick Benites', 61, 64, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/43ed963c0a3a7732', 'ErickBenites.png', '2020-01-22 02:00:23', '2020-01-22 02:00:23'),
(165, 'Ivan Crispin Sanchez', 62, 65, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/567c811f0de1b8c2', 'IvanCrispinSanchez.png', '2020-01-22 02:48:18', '2020-01-22 02:48:18'),
(166, 'Erick Benites', 62, 66, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/43ed963c0a3a7732', 'ErickBenites.png', '2020-01-22 02:48:20', '2020-01-22 02:48:20'),
(167, 'Monica Mavila', 62, 67, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/2c2d74c90997defd', 'MonicaMavila.png', '2020-01-22 02:48:25', '2020-01-22 02:48:25'),
(168, 'Cristina Yulissa Diego Orihuela', 62, 68, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/3c057e0b8f17bfc0', 'CristinaYulissaDiegoOrihuela.png', '2020-01-22 02:48:27', '2020-01-22 02:48:27'),
(169, 'mireya alfaro paucarchuco', 62, 69, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/ad0112e88e36875', 'mireyaalfaropaucarchuco.png', '2020-01-22 02:48:30', '2020-01-22 02:48:30'),
(170, 'Lesly Becerra Villafranca', 62, 70, 'http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/2f369e1d88f5c714', 'LeslyBecerraVillafranca.png', '2020-01-22 02:48:32', '2020-01-22 02:48:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id_plan` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `id_contacto` int(11) DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `megas` int(11) DEFAULT 0,
  `minutos` int(11) DEFAULT 0,
  `sms` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id_plan`, `nombre`, `id_contacto`, `tipo`, `megas`, `minutos`, `sms`, `created_at`, `updated_at`) VALUES
(1, 'Entel Power 5', 1, 'pre-pago', 1869, 60, 60, '2020-01-21 16:32:04', '2020-01-21 16:32:04'),
(2, 'Entel Power 15', 2, 'pre-pago', 2686, 120, 120, '2020-01-21 16:32:04', '2020-01-21 16:32:04'),
(3, 'Entel Power 3', 3, 'pre-pago', 150, 15, 15, '2020-01-21 16:32:04', '2020-01-21 16:32:04'),
(4, 'Entel Power 7', 4, 'pre-pago', 800, 80, 80, '2020-01-21 16:32:04', '2020-01-21 16:32:04'),
(5, 'Entel Power 5', 5, 'pre-pago', 1119, 60, 60, '2020-01-21 16:32:04', '2020-01-21 16:32:04'),
(6, 'Entel Power 10', 8, 'pre-pago', 4157, 120, 120, '2020-01-21 16:32:04', '2020-01-21 16:32:04'),
(7, 'Entel Power 7', 6, 'pre-pago', 1330, 80, 80, '2020-01-21 16:32:04', '2020-01-21 16:32:04'),
(8, 'Entel Power 3', 7, 'pre-pago', 150, 60, 60, '2020-01-21 16:32:04', '2020-01-21 16:32:04'),
(9, 'Entel Power', 11, 'pre-pago', 5443, 5443, 5443, '2020-01-21 21:33:56', '2020-01-21 21:33:56'),
(10, 'Entel Power', 12, 'pre-pago', 5808, 5808, 5808, '2020-01-21 21:41:14', '2020-01-21 21:41:14'),
(11, 'Entel Power', 13, 'pre-pago', 6141, 6141, 6141, '2020-01-21 21:44:17', '2020-01-21 21:44:17'),
(12, 'Entel Power', 14, 'pre-pago', 6396, 6396, 6396, '2020-01-21 22:10:39', '2020-01-21 22:10:39'),
(13, 'Entel Power', 15, 'pre-pago', 3238, 3238, 3238, '2020-01-21 22:18:43', '2020-01-21 22:18:43'),
(14, 'Entel Power', 21, 'pre-pago', 7935, 7935, 7935, '2020-01-21 22:23:04', '2020-01-21 22:23:04'),
(15, 'Entel Power', 23, 'pre-pago', 8496, 8496, 8496, '2020-01-21 22:26:52', '2020-01-21 22:26:52'),
(16, 'Entel Power', 25, 'pre-pago', 7059, 7059, 7059, '2020-01-21 22:30:14', '2020-01-21 22:30:14'),
(17, 'Entel Power', 26, 'pre-pago', 7906, 7906, 7906, '2020-01-21 22:31:11', '2020-01-21 22:31:11'),
(18, 'Entel Power', 28, 'pre-pago', 6864, 6864, 6864, '2020-01-21 22:33:00', '2020-01-21 22:33:00'),
(19, 'Entel Power', 30, 'pre-pago', 8354, 8354, 8354, '2020-01-21 22:33:24', '2020-01-21 22:33:24'),
(20, 'Entel Power', 34, 'pre-pago', 8110, 8110, 8110, '2020-01-21 22:36:24', '2020-01-21 22:36:24'),
(21, 'Entel Power', 35, 'pre-pago', 2186, 2186, 2186, '2020-01-21 22:36:33', '2020-01-21 22:36:33'),
(22, 'Entel Power', 38, 'pre-pago', 7656, 7656, 7656, '2020-01-21 22:39:17', '2020-01-21 22:39:17'),
(23, 'Entel Power', 40, 'pre-pago', 5132, 5132, 5132, '2020-01-21 22:40:21', '2020-01-21 22:40:21'),
(24, 'Entel Power', 41, 'pre-pago', 4811, 4811, 4811, '2020-01-21 22:48:22', '2020-01-21 22:48:22'),
(25, 'Entel Power', 42, 'pre-pago', 4832, 4832, 4832, '2020-01-21 23:49:03', '2020-01-21 23:49:03'),
(26, 'Entel Power', 43, 'pre-pago', 5583, 5583, 5583, '2020-01-21 23:54:35', '2020-01-21 23:54:35'),
(27, 'Entel Power', 44, 'pre-pago', 5866, 7041, 7041, '2020-01-22 00:27:53', '2020-01-22 00:27:53'),
(28, 'Entel Power', 45, 'pre-pago', 3799, 3799, 3799, '2020-01-22 00:27:57', '2020-01-22 00:27:57'),
(29, 'Entel Power', 46, 'pre-pago', 4315, 4315, 4315, '2020-01-22 00:28:00', '2020-01-22 00:28:00'),
(30, 'Entel Power', 47, 'pre-pago', 5330, 5330, 5330, '2020-01-22 00:28:02', '2020-01-22 00:28:02'),
(31, 'Entel Power', 48, 'pre-pago', 9139, 9139, 9139, '2020-01-22 00:29:42', '2020-01-22 00:29:42'),
(32, 'Entel Power', 49, 'pre-pago', 8481, 8481, 8481, '2020-01-22 00:29:53', '2020-01-22 00:29:53'),
(33, 'Entel Power', 50, 'pre-pago', 9960, 9960, 9960, '2020-01-22 00:29:56', '2020-01-22 00:29:56'),
(34, 'Entel Power', 51, 'pre-pago', 1398, 1398, 1398, '2020-01-22 00:30:04', '2020-01-22 00:30:04'),
(35, 'Entel Power', 52, 'pre-pago', 4336, 5034, 5034, '2020-01-22 00:36:14', '2020-01-22 00:36:14'),
(36, 'Entel Power', 53, 'pre-pago', 4215, 4215, 4215, '2020-01-22 00:38:54', '2020-01-22 00:38:54'),
(37, 'Entel Power', 54, 'pre-pago', 3871, 3871, 3871, '2020-01-22 00:46:55', '2020-01-22 00:46:55'),
(38, 'Entel Power', 55, 'pre-pago', 9565, 9565, 9565, '2020-01-22 00:46:58', '2020-01-22 00:46:58'),
(39, 'Entel Power', 56, 'pre-pago', 2356, 2356, 2356, '2020-01-22 02:00:01', '2020-01-22 02:00:01'),
(40, 'Entel Power', 57, 'pre-pago', 8752, 7742, 7742, '2020-01-22 02:00:02', '2020-01-22 02:00:02'),
(41, 'Entel Power', 58, 'pre-pago', 4120, 4120, 4120, '2020-01-22 02:00:10', '2020-01-22 02:00:10'),
(42, 'Entel Power', 59, 'pre-pago', 5320, 5320, 5320, '2020-01-22 02:00:10', '2020-01-22 02:00:10'),
(43, 'Entel Power', 60, 'pre-pago', 5324, 5324, 5324, '2020-01-22 02:00:11', '2020-01-22 02:00:11'),
(44, 'Entel Power', 61, 'pre-pago', 3196, 3196, 3196, '2020-01-22 02:00:12', '2020-01-22 02:00:12'),
(45, 'Entel Power', 62, 'pre-pago', 7727, 7727, 7727, '2020-01-22 02:00:14', '2020-01-22 02:00:14'),
(46, 'Entel Power', 63, 'pre-pago', 2434, 2434, 2434, '2020-01-22 02:00:18', '2020-01-22 02:00:18'),
(47, 'Entel Power', 64, 'pre-pago', 3709, 3709, 3709, '2020-01-22 02:00:23', '2020-01-22 02:00:23'),
(48, 'Entel Power', 65, 'pre-pago', 3881, 3782, 3782, '2020-01-22 02:48:18', '2020-01-22 02:48:18'),
(49, 'Entel Power', 66, 'pre-pago', 6174, 6174, 6174, '2020-01-22 02:48:20', '2020-01-22 02:48:20'),
(50, 'Entel Power', 67, 'pre-pago', 5825, 5825, 5825, '2020-01-22 02:48:25', '2020-01-22 02:48:25'),
(51, 'Entel Power', 68, 'pre-pago', 6658, 6658, 6658, '2020-01-22 02:48:27', '2020-01-22 02:48:27'),
(52, 'Entel Power', 69, 'pre-pago', 5288, 4212, 4212, '2020-01-22 02:48:30', '2020-01-22 02:48:30'),
(53, 'Entel Power', 70, 'pre-pago', 6589, 6589, 6589, '2020-01-22 02:48:32', '2020-01-22 02:48:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `roles_id`, `email`, `telefono`, `dni`, `url_image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Orlando', '1', 'nexuscode25@gmail.com', '924883963', '', '', NULL, '$2y$10$FBkAV7XMdBjsp1MASO35I.2JGLe9hG0zrMeBa3qpTrNF9gFXEv/5S', NULL, '2020-01-14 07:40:50', '2020-01-14 07:40:50'),
(2, 'orlando', '1', 'orkube_123@hotmail.com', '995713588', '70022022', 'default.png', NULL, '$2y$10$bjSzUVQvs0uRnXqymCvhpubrX1gggModE0Omg9AN.0/M0RwsiIz1C', NULL, '2020-01-14 10:38:00', '2020-01-14 10:38:00'),
(3, 'Erick Benites', '1', 'Erick Benites', '626747035', '85865882', 'ErickBenites.png', NULL, '$2y$10$yTQO.zhw3OV7wyfL2GscwOr2KP1rq4chjLAhSDaLIDtbZZqIhatai', NULL, '2020-01-22 02:03:36', '2020-01-22 02:03:36'),
(5, 'Ivan Crispin Sanchez', '1', 'Ivan Crispin Sanchez', '186001968', '23160605', 'IvanCrispinSanchez.png', NULL, '$2y$10$1fHXx0GJEzd.gSOC8vteJuL6dzp0e2iNfnHkSpF05sQR5Opd1zDtS', NULL, '2020-01-22 02:20:40', '2020-01-22 02:20:40'),
(6, 'elvin', '1', 'elvin', '567972840', '28580064', 'elvin.png', NULL, '$2y$10$tiiRQO5Ehx.10gFF2moSoeu/afqkRo/IMwvsCPO7ggbTzxuSINMha', NULL, '2020-01-22 02:26:09', '2020-01-22 02:26:09'),
(8, 'Monica Mavila', '1', 'Monica Mavila', '270263476', '65356866', 'MonicaMavila.png', NULL, '$2y$10$SyCCfX/BI3K1eCi4dPb8o.yS5vtiSrr/IGCVCNgShlDbG0lOG1Mqu', NULL, '2020-01-22 02:32:44', '2020-01-22 02:32:44'),
(9, 'tati.hlg.16@gmail.com', '1', 'tati.hlg.16@gmail.com', '983909100', '99034204', 'tati.hlg.16@gmail.com.png', NULL, '$2y$10$faffwi3rQCZj4RSld.sdq.YvEoTq6dfLnxF/pGawWX5VRjtbNtR1a', NULL, '2020-01-22 02:33:10', '2020-01-22 02:33:10'),
(11, 'SINPROSA PROFESIONALES DE LA SALUD', '1', 'SINPROSA PROFESIONALES DE LA SALUD', '842052011', '57382387', 'SINPROSAPROFESIONALESDELASALUD.png', NULL, '$2y$10$I6Ymiqj0Iiq2IMNmM3D3gONAK4/3nN3KraksfLLn2p3hazWb8ef3q', NULL, '2020-01-22 02:33:56', '2020-01-22 02:33:56'),
(12, 'rrcaballero151@gmail.com', '1', 'rrcaballero151@gmail.com', '960185001', '38907476', 'rrcaballero151@gmail.com.png', NULL, '$2y$10$7I2u9gCOlgcBOVTMKF2dt.Nvy6NWivxfmhelevoncq8q.O1yLY1LG', NULL, '2020-01-22 02:41:14', '2020-01-22 02:41:14'),
(13, 'jimreynor24@hotmail.com', '1', 'jimreynor24@hotmail.com', '646571960', '80200403', 'jimreynor24@hotmail.com.png', NULL, '$2y$10$UGkyf0zsDNEAknDA1/sH0ey/qhpcvPitPEe0xd3XUC1ZRsfNtKLhC', NULL, '2020-01-22 02:44:17', '2020-01-22 02:44:17'),
(14, 'mireya alfaro paucarchuco', '1', 'mireya alfaro paucarchuco', '359011388', '53651587', 'mireyaalfaropaucarchuco.png', NULL, '$2y$10$85HUWXjkbUgO92CC6FzkKOysCtB66uTrn00zyWnhqqZ2R2A8pyaf.', NULL, '2020-01-22 03:10:39', '2020-01-22 03:10:39'),
(15, 'Cristina Yulissa Diego Orihuela', '1', 'Cristina Yulissa Diego Orihuela', '776524958', '26874532', 'CristinaYulissaDiegoOrihuela.png', NULL, '$2y$10$YSRv/528uoxFhWZrtZ.3f.8T3.3Xa6SMndCwlRawwmYJFudVHR3cK', NULL, '2020-01-22 03:18:43', '2020-01-22 03:18:43'),
(16, 'Elvin Mejía', '1', 'Elvin Mejía', '472946410', '26094629', 'ElvinMejía.png', NULL, '$2y$10$w7KjO2MP6yISjUQ8MLU1T.Ry4YZZmX5iGGesJHKX/CTqUWWabpocm', NULL, '2020-01-22 03:20:44', '2020-01-22 03:20:44'),
(19, 'icallupeh@gmail.com', '1', 'icallupeh@gmail.com', '798505462', '10558886', 'icallupeh@gmail.com.png', NULL, '$2y$10$V7N2y6YkkzcxMp1WhPNcH.A2daHvU.39ORyCamNkoJtqrsjRk8DQa', NULL, '2020-01-22 03:21:55', '2020-01-22 03:21:55'),
(20, 'nest@platanitos.com', '1', 'nest@platanitos.com', '649880320', '22423513', 'nest@platanitos.com.png', NULL, '$2y$10$SUbr/HqZnCjaEyqcBJDU3OHT5Woa.u2LXId6YieBbk8RFv5HR.EOO', NULL, '2020-01-22 03:22:35', '2020-01-22 03:22:35'),
(21, 'jeancarlos_26699@hotmail.com', '1', 'jeancarlos_26699@hotmail.com', '406880626', '86449521', 'jeancarlos_26699@hotmail.com.png', NULL, '$2y$10$KBzH7XUZVfraSdY3hEv2pOKxFUmDOsHA9R.ba2RIgqBB7bByGBLcK', NULL, '2020-01-22 03:23:04', '2020-01-22 03:23:04'),
(23, 'porrasquintana@gmail.com', '1', 'porrasquintana@gmail.com', '214205421', '58423204', 'porrasquintana@gmail.com.png', NULL, '$2y$10$Un9f7RX1I3Ye7fDYFCEk..qH9KFWemj4Izo/Q1HpfxH5pihEsY0Oi', NULL, '2020-01-22 03:26:52', '2020-01-22 03:26:52'),
(25, 'romero.yx@gmail.com', '1', 'romero.yx@gmail.com', '326495612', '55518539', 'romero.yx@gmail.com.png', NULL, '$2y$10$MLirknbYaFQwzAFGq6N7XuXMQdtShN3jiGr0PUBRZbjJZhsnUhY0m', NULL, '2020-01-22 03:30:14', '2020-01-22 03:30:14'),
(26, 'lospemas@gmail.com', '1', 'lospemas@gmail.com', '541862874', '27384029', 'lospemas@gmail.com.png', NULL, '$2y$10$3Z7AeXEeKOh2b3ecgKnwzukdO6bg0JUNswRK5N4cHiDLDapfe5miq', NULL, '2020-01-22 03:31:11', '2020-01-22 03:31:11'),
(28, 'sussanzubiate@gmail.com', '1', 'sussanzubiate@gmail.com', '390546236', '95168796', 'sussanzubiate@gmail.com.png', NULL, '$2y$10$HB0JnKQqvEtTEuZ1Zl2iFufs6FFNOVJEi1orkFhRAFxGuBAiyoTPG', NULL, '2020-01-22 03:33:00', '2020-01-22 03:33:00'),
(30, 'irina.avila@pucp.pe', '1', 'irina.avila@pucp.pe', '809053771', '58607195', 'irina.avila@pucp.pe.png', NULL, '$2y$10$DrL/ViRYmGepMxONzx4jJOrI1kuVmzVfCF.EEnqb2FRuk7QVLMQW2', NULL, '2020-01-22 03:33:24', '2020-01-22 03:33:24'),
(31, 'Jarenascondor@gmail.com', '1', 'Jarenascondor@gmail.com', '691444503', '38760735', 'Jarenascondor@gmail.com.png', NULL, '$2y$10$XBosf0kD1qI81km8LJvZguDUq9KFk4m1YVkg3a0buMvRTPC0kbyji', NULL, '2020-01-22 03:33:54', '2020-01-22 03:33:54'),
(32, 'rrhh@inspirait.com', '1', 'rrhh@inspirait.com', '536907583', '98684262', 'rrhh@inspirait.com.png', NULL, '$2y$10$p2HJ59jmt4aSM6wAblTKB.GqltMctyyfidvwdx15pJ0ac.Vzyg9Ey', NULL, '2020-01-22 03:36:03', '2020-01-22 03:36:03'),
(40, 'alex.misari@gmail.com', '1', 'alex.misari@gmail.com', '547278109', '13638654', 'alex.misari@gmail.com.png', NULL, '$2y$10$fxzLyxtLwIGQwQesJl29d./fSlyRvbzKFOZfZDKOP3Qw/8j0ei5Ze', NULL, '2020-01-22 03:40:21', '2020-01-22 03:40:21'),
(41, 'Jarenascondor@gmail.com', '1', 'Jarenascondor@gmail.com', '598855818', '77901480', 'Jarenascondor@gmail.com.png', NULL, '$2y$10$yXdlYezBZN8hRtZzE7ic5.O7i8p8TMN3s/I6BHx3jJmFOfByoUiiS', NULL, '2020-01-22 03:48:22', '2020-01-22 03:48:22'),
(42, 'lospemas@gmail.com', '1', 'lospemas@gmail.com', '204500624', '56015575', 'lospemas@gmail.com.png', NULL, '$2y$10$2NKNmmtgH4t3T4WokMyYq.Xjn9os7FP3ZeflBOeeL4tWyBAgROIau', NULL, '2020-01-22 04:49:03', '2020-01-22 04:49:03'),
(43, 'Elvin Mejía', '1', 'Elvin Mejía', '147313862', '90367431', 'ElvinMejía.png', NULL, '$2y$10$Zp4IETVcLUCwBIYPH4vSo.b6FEWD4cXIQTDDGcxr7shD4v6xX./4q', NULL, '2020-01-22 04:54:35', '2020-01-22 04:54:35'),
(44, 'Lesly Becerra Villafranca', '1', 'Lesly Becerra Villafranca', '171664726', '50468959', 'LeslyBecerraVillafranca.png', NULL, '$2y$10$pbAnNuqMaOr2lbwWbr4Tp.TWlVF9UPwXBuwGCZAzkOufkuf6kgkde', NULL, '2020-01-22 05:27:53', '2020-01-22 05:27:53'),
(45, 'Monica Mavila', '1', 'Monica Mavila', '128079343', '57619424', 'MonicaMavila.png', NULL, '$2y$10$hmOVLgx0ShNCwWnGE5WQBeKB4gRT88fqvrVZNNZxGjeYR.DvJlqsK', NULL, '2020-01-22 05:27:57', '2020-01-22 05:27:57'),
(46, 'Erick Benites', '1', 'Erick Benites', '215135642', '66531956', 'ErickBenites.png', NULL, '$2y$10$AnimWFRDrRkGTkkCIEwdgOXce2eXV.uCJQIcKzo1c5c8.nRGMzJmC', NULL, '2020-01-22 05:28:00', '2020-01-22 05:28:00'),
(47, 'sussanzubiate@gmail.com', '1', 'sussanzubiate@gmail.com', '262658733', '95958200', 'sussanzubiate@gmail.com.png', NULL, '$2y$10$27oXNa/ZoBJ5sR/kDWU39.640xJvw8QneanYLigrZtDKAcN9Nk7xS', NULL, '2020-01-22 05:28:02', '2020-01-22 05:28:02'),
(48, 'SINPROSA PROFESIONALES DE LA SALUD', '1', 'SINPROSA PROFESIONALES DE LA SALUD', '562413736', '69664909', 'SINPROSAPROFESIONALESDELASALUD.png', NULL, '$2y$10$lS1McTOTx6.cEvUbtRF2mOMfy7B8iplIQoXt/vf6LI.oA9sQ7wIyW', NULL, '2020-01-22 05:29:42', '2020-01-22 05:29:42'),
(49, 'mireya alfaro paucarchuco', '1', 'mireya alfaro paucarchuco', '799839262', '77862689', 'mireyaalfaropaucarchuco.png', NULL, '$2y$10$EMAYSaCn/Vfi4xtIGbD2tOzQcEV95rhK1Xg3RjVvmM2MnUfndIq2G', NULL, '2020-01-22 05:29:53', '2020-01-22 05:29:53'),
(50, 'SINPROSA PROFESIONALES DE LA SALUD', '1', 'SINPROSA PROFESIONALES DE LA SALUD', '145384279', '61876098', 'SINPROSAPROFESIONALESDELASALUD.png', NULL, '$2y$10$I5QPIgARDqlfTjAWPsCOLePnXMzJfzV3JMxVVX8jtM6zlnWGrt66.', NULL, '2020-01-22 05:29:56', '2020-01-22 05:29:56'),
(51, 'SINPROSA PROFESIONALES DE LA SALUD', '1', 'SINPROSA PROFESIONALES DE LA SALUD', '356919222', '74357244', 'SINPROSAPROFESIONALESDELASALUD.png', NULL, '$2y$10$knkfqrsq4zbM4dEcSOwaH.wJgMQLg4NHvVjK0MzgePJTYCMzVjWC6', NULL, '2020-01-22 05:30:04', '2020-01-22 05:30:04'),
(53, 'Monica Mavila', '1', 'Monica Mavila', '600576703', '90426722', 'MonicaMavila.png', NULL, '$2y$10$4RQXQbTTNNMnpqXNiUXFNuwuK138jXUQuANnOY/Vbi0u9wQjVMA4q', NULL, '2020-01-22 05:38:54', '2020-01-22 05:38:54'),
(54, 'elvin', '1', 'elvin', '384570891', '53327409', 'elvin.png', NULL, '$2y$10$vHwivmR3XRkSPMSRSUuLmePCUfLHQh.vtN.hIiJG92cyKawLD.Mvi', NULL, '2020-01-22 05:46:55', '2020-01-22 05:46:55'),
(55, 'Elvin Mejía', '1', 'Elvin Mejía', '786280204', '80476847', 'ElvinMejía.png', NULL, '$2y$10$pZNnOm3uKmJcJo5cvbIm6u8ggF4r6aTZ.mVnq1Vhm9BuYHtYpHJuK', NULL, '2020-01-22 05:46:58', '2020-01-22 05:46:58'),
(56, 'Erick Benites', '1', 'Erick Benites', '369808598', '19543546', 'ErickBenites.png', NULL, '$2y$10$hUbeL86zRz9uKlrMcBnLCOBOr30z99l4MoKnxND/jC1XrhnRw.2FS', NULL, '2020-01-22 07:00:01', '2020-01-22 07:00:01'),
(57, 'Elvin Mejía', '1', 'Elvin Mejía', '489305207', '43381190', 'ElvinMejía.png', NULL, '$2y$10$IWUf4ErTtUWkf1z1bNW6pO5lqs6iUlKdruEbJUftoYkYNxugIgBJ.', NULL, '2020-01-22 07:00:02', '2020-01-22 07:00:02'),
(58, 'SINPROSA PROFESIONALES DE LA SALUD', '1', 'SINPROSA PROFESIONALES DE LA SALUD', '290086651', '93222635', 'SINPROSAPROFESIONALESDELASALUD.png', NULL, '$2y$10$iX9LFm6eWgarJMTfVcZoYONba5sB2ZwMK2WNG5Vi82uJbrICZbfm.', NULL, '2020-01-22 07:00:10', '2020-01-22 07:00:10'),
(63, 'lospemas@gmail.com', '1', 'lospemas@gmail.com', '716251788', '90884026', 'lospemas@gmail.com.png', NULL, '$2y$10$f9Tz6n7S1X9MIKARj2TvQ.s3ma4juWX.A18UUIgU9k1JrhwSaGOgm', NULL, '2020-01-22 07:00:18', '2020-01-22 07:00:18'),
(64, 'Erick Benites', '1', 'Erick Benites', '825846630', '21860908', 'ErickBenites.png', NULL, '$2y$10$PB2D8kLuURyNloLUNBY.JeCSZUNo7Uttt0mRzb44wArYo2JoJPX4i', NULL, '2020-01-22 07:00:23', '2020-01-22 07:00:23'),
(65, 'Ivan Crispin Sanchez', '1', 'Ivan Crispin Sanchez', '482953745', '74585770', 'IvanCrispinSanchez.png', NULL, '$2y$10$p6HEHw2kP.Kp7V9ISU79nu17iEk6IlywZw0qoMRvDsXT9pQR8W07a', NULL, '2020-01-22 07:48:18', '2020-01-22 07:48:18'),
(66, 'Erick Benites', '1', 'Erick Benites', '887875789', '99104644', 'ErickBenites.png', NULL, '$2y$10$Cmzwt.TSY0qxrDBE5f1E1exHe2xykISkAH7t.yBYIr8sCCIK1iyCG', NULL, '2020-01-22 07:48:20', '2020-01-22 07:48:20'),
(67, 'Monica Mavila', '1', 'Monica Mavila', '750673736', '48130058', 'MonicaMavila.png', NULL, '$2y$10$EAmBmyml6cpXz602Iiw5zela.8crBdcxoGGSJsNeHPK02kofBDkRO', NULL, '2020-01-22 07:48:25', '2020-01-22 07:48:25'),
(68, 'Cristina Yulissa Diego Orihuela', '1', 'Cristina Yulissa Diego Orihuela', '774625010', '17245892', 'CristinaYulissaDiegoOrihuela.png', NULL, '$2y$10$XS8GtvwqVylUC7ra42JX8exK243KERWm2hbxm7D/nUItWI92hB/hq', NULL, '2020-01-22 07:48:27', '2020-01-22 07:48:27'),
(69, 'mireya alfaro paucarchuco', '1', 'mireya alfaro paucarchuco', '774228296', '50067639', 'mireyaalfaropaucarchuco.png', NULL, '$2y$10$G4s9pE6AfRCodT5Eht82Duww7jTCVtSzCmBuYADQfWfeRBdojdu7e', NULL, '2020-01-22 07:48:30', '2020-01-22 07:48:30'),
(70, 'Lesly Becerra Villafranca', '1', 'Lesly Becerra Villafranca', '436210792', '27273003', 'LeslyBecerraVillafranca.png', NULL, '$2y$10$ke9Vfdc4WRXNDwOsgmiTs.aj5cxyQH4RpTi2KZaM.iT40T4k63NOu', NULL, '2020-01-22 07:48:32', '2020-01-22 07:48:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acumulado`
--
ALTER TABLE `acumulado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `beneficios`
--
ALTER TABLE `beneficios`
  ADD PRIMARY KEY (`id_beneficio`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id_metas`);

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id_miembro`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_telefono_unique` (`telefono`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acumulado`
--
ALTER TABLE `acumulado`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `beneficios`
--
ALTER TABLE `beneficios`
  MODIFY `id_beneficio` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `metas`
--
ALTER TABLE `metas`
  MODIFY `id_metas` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id_miembro` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id_plan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2017 a las 21:15:24
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marketing`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campanas`
--

CREATE TABLE `campanas` (
  `id_campana` int(11) NOT NULL,
  `nombre_campana` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `objetivos` varchar(500) DEFAULT NULL,
  `fecha_inicio` varchar(15) NOT NULL,
  `fecha_final` varchar(15) NOT NULL,
  `fid_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `campanas`
--

INSERT INTO `campanas` (`id_campana`, `nombre_campana`, `descripcion`, `objetivos`, `fecha_inicio`, `fecha_final`, `fid_cliente`) VALUES
(72, 'publicidad', 'Aumentar el numero de clientes', 'Maximizar ganancias', '17/12/2017 13:1', '31/12/2017 13:1', 1),
(73, '23', '23', '23', '23/12/2017 12:2', '23/12/2017 12:2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campanas_generador`
--

CREATE TABLE `campanas_generador` (
  `fid_generador` int(11) DEFAULT NULL,
  `fid_campana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(30) DEFAULT NULL,
  `apellido_cliente` varchar(30) DEFAULT NULL,
  `nombre_negocio` varchar(30) DEFAULT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_baja` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `nombre_negocio`, `fecha_alta`, `fecha_baja`) VALUES
(1, 'rosa', 'cano', 'restaurante', '2017-12-14 06:00:00', '2017-12-30 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_usuarios`
--

CREATE TABLE `clientes_usuarios` (
  `fid_cliente` int(11) NOT NULL,
  `fid_usuario` int(11) DEFAULT NULL,
  `fid_tipos_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id_contenido` int(11) NOT NULL,
  `nombre_contenido` varchar(50) DEFAULT NULL,
  `nombre_imagen` varchar(200) NOT NULL,
  `link_img` varchar(250) DEFAULT NULL,
  `fid_campana` int(11) DEFAULT NULL,
  `fid_generador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id_contenido`, `nombre_contenido`, `nombre_imagen`, `link_img`, `fid_campana`, `fid_generador`) VALUES
(16, 'status', 'a', '', 72, 1),
(17, 'aa', 'bd_old1.png', 'http://localhost/marketingp/images/bd_old1.png', 72, 1),
(18, 'dos por uno', '#', 'https://res.cloudinary.com/dcnx5ee9r/image/upload/v1513488251/oae1pvd7ht9pbvxfwa9q.jpg', 72, 1),
(19, 'jordan', '#', 'https://res.cloudinary.com/dcnx5ee9r/image/upload/v1513535160/hfnirusdjwnuzypqo6ii.jpg', 73, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` varchar(250) NOT NULL,
  `url` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `title`, `body`, `url`, `class`, `start`, `end`) VALUES
(1, 'aaa', 'asdas', 'http://localhost/bootstrap-calendar/events', 'event-important', '0000-00-00 00:0', '0000-00-00 00:0'),
(2, 'demo', 'asa', 'http://localhost/bootstrap-calendar/events', 'event-important', '0000-00-00 00:0', '0000-00-00 00:0'),
(3, 'demo', 'asas', 'http://localhost/bootstrap-calendar/events', 'event-important', '1513464360000', '1514587560000'),
(4, 'demo', 'gdfgd', 'http://localhost/bootstrap-calendar/events', 'event-warning', '1513550820000', '1513637220000'),
(5, 'demo', 'bbbbb', 'http://localhost/bootstrap-calendar/events', 'event-success', '1514675580000', '1515885180000'),
(6, 'demo', 'http://localhost/bootstrap-calendar/events', 'http://localhost/bootstrap-calendar/events', 'event-success', '1513469700000', '1513638960000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `tags` varchar(300) DEFAULT NULL,
  `hashtags` varchar(500) DEFAULT NULL,
  `descripcion` varchar(2000) DEFAULT NULL,
  `estado` varchar(50) NOT NULL,
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `class` varchar(100) NOT NULL,
  `fecha_publicar` varchar(20) NOT NULL,
  `fid_contenido` int(11) DEFAULT NULL,
  `fid_sobrinity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id_post`, `tipo`, `tags`, `hashtags`, `descripcion`, `estado`, `start`, `end`, `class`, `fecha_publicar`, `fid_contenido`, `fid_sobrinity`) VALUES
(26, 'status', '23', '23', '23', 'rechazado', '1513536720000', '1513536720000', 'event-important', '', 16, 1),
(27, 'status', 't', '23', 'd', 'pendiente', '1513796040000', '1513796040000', 'event-important', '', 16, 1),
(28, 'photo', NULL, '23', '23', 'rechazado', '', '', '', '', 17, 1),
(29, 'photo', NULL, 'no se', 'marketing', 'pendiente', '', '', '', '', 17, 1),
(30, 'status', NULL, '23', 'zxczx', 'pendiente', '1514576640000', '1514576640000', 'event-important', '', 16, 1),
(31, '', NULL, '', '', 'pendiente', '', '', '', '', 17, 1),
(32, 'status', NULL, '', '', 'pendiente', '0', '0', 'event-important', '', 16, 1),
(33, 'status', NULL, '1', '1', 'pendiente', '1514238300000', '1514238300000', 'event-important', '', 16, 1),
(34, 'photo', NULL, '23', '23', 'pendiente', '', '', '', '', 19, 1),
(35, 'status', NULL, '23', '23', 'pendiente', '1515587580000', '1515587580000', 'event-important', '', 16, 1),
(36, 'status', NULL, 'adsasd', 'asdasd', 'pendiente', '1516710900000', '1516710900000', 'event-important', '', 16, 1),
(37, 'status', NULL, 'pppp', 'ppp', 'pendiente', '1519390860000', '1519390860000', 'event-important', '23/02/2018 14:01', 16, 1),
(38, 'status', NULL, '23', 'puro 100', 'pendiente', '1514639460000', '1514639460000', 'event-important', '30/12/2017 14:11', 16, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `id_tipo` int(11) NOT NULL,
  `nombre_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nick_usuario` varchar(30) DEFAULT NULL,
  `contrasena_usuario` varchar(30) DEFAULT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_baja` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fid_tipos_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nick_usuario`, `contrasena_usuario`, `fecha_alta`, `fecha_baja`, `fid_tipos_usuarios`) VALUES
(1, 'Admin0302', '123', '2017-12-14 21:00:09', '0000-00-00 00:00:00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campanas`
--
ALTER TABLE `campanas`
  ADD PRIMARY KEY (`id_campana`),
  ADD KEY `fid_cliente` (`fid_cliente`);

--
-- Indices de la tabla `campanas_generador`
--
ALTER TABLE `campanas_generador`
  ADD KEY `fid_generador` (`fid_generador`),
  ADD KEY `fid_campana` (`fid_campana`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `clientes_usuarios`
--
ALTER TABLE `clientes_usuarios`
  ADD KEY `fid_cliente` (`fid_cliente`),
  ADD KEY `fid_usuario` (`fid_usuario`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id_contenido`),
  ADD KEY `fid_generador` (`fid_generador`),
  ADD KEY `fid_campana` (`fid_campana`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `fid_sobrinity` (`fid_sobrinity`),
  ADD KEY `fid_contenido` (`fid_contenido`);

--
-- Indices de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campanas`
--
ALTER TABLE `campanas`
  MODIFY `id_campana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `clientes_usuarios`
--
ALTER TABLE `clientes_usuarios`
  MODIFY `fid_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id_contenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campanas`
--
ALTER TABLE `campanas`
  ADD CONSTRAINT `campanas_ibfk_1` FOREIGN KEY (`fid_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `campanas_generador`
--
ALTER TABLE `campanas_generador`
  ADD CONSTRAINT `campanas_generador_ibfk_1` FOREIGN KEY (`fid_generador`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `campanas_generador_ibfk_2` FOREIGN KEY (`fid_campana`) REFERENCES `campanas` (`id_campana`);

--
-- Filtros para la tabla `clientes_usuarios`
--
ALTER TABLE `clientes_usuarios`
  ADD CONSTRAINT `clientes_usuarios_ibfk_1` FOREIGN KEY (`fid_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `clientes_usuarios_ibfk_2` FOREIGN KEY (`fid_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD CONSTRAINT `contenidos_ibfk_1` FOREIGN KEY (`fid_generador`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `contenidos_ibfk_2` FOREIGN KEY (`fid_campana`) REFERENCES `campanas` (`id_campana`);

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`fid_sobrinity`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`fid_contenido`) REFERENCES `contenidos` (`id_contenido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

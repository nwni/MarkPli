-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2018 a las 07:30:43
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_usuarios`
--

CREATE TABLE `clientes_usuarios` (
  `fid_cliente` int(11) NOT NULL,
  `fid_usuario` int(11) DEFAULT NULL,
  `fid_tipos_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes_usuarios`
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id_contenido` int(11) NOT NULL,
  `nombre_contenido` varchar(50) DEFAULT NULL,
  `nombre_imagen` varchar(200) NOT NULL,
  `link_img` varchar(250) DEFAULT NULL,
  `tipo` varchar(150) NOT NULL,
  `fid_campana` int(11) DEFAULT NULL,
  `fid_generador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenidos`
--


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
  `start` varchar(20) NOT NULL,
  `end` varchar(20) NOT NULL,
  `class` varchar(100) NOT NULL,
  `fecha_publicar` varchar(20) DEFAULT NULL,
  `fid_contenido` int(11) DEFAULT NULL,
  `fid_sobrinity` int(11) DEFAULT NULL,
  `fid_campana` int(11) DEFAULT NULL,
  `contenido_bandera` int(11) NOT NULL,
  `x` varchar(45) NOT NULL,
  `fecha_actual` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TipoPublicacion` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posts`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nick_usuario` varchar(30) DEFAULT NULL,
  `contrasena_usuario` varchar(30) DEFAULT NULL,
  `tipos_usuarios` int(11) NOT NULL,
  `tipo_usuario_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campanas`
--
ALTER TABLE `campanas`
  ADD PRIMARY KEY (`id_campana`),
  ADD KEY `fid_cliente` (`fid_cliente`) USING BTREE;

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
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `fid_sobrinity` (`fid_sobrinity`),
  ADD KEY `fid_contenido` (`fid_contenido`),
  ADD KEY `fid_campana` (`fid_campana`) USING BTREE;

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
  MODIFY `id_campana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes_usuarios`
--
ALTER TABLE `clientes_usuarios`
  MODIFY `fid_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id_contenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campanas`
--
ALTER TABLE `campanas`
  ADD CONSTRAINT `campanas_ibfk_1` FOREIGN KEY (`fid_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `clientes_usuarios_ibfk_2` FOREIGN KEY (`fid_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD CONSTRAINT `contenidos_ibfk_2` FOREIGN KEY (`fid_campana`) REFERENCES `campanas` (`id_campana`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contenidos_ibfk_3` FOREIGN KEY (`fid_generador`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_4` FOREIGN KEY (`fid_contenido`) REFERENCES `contenidos` (`id_contenido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_5` FOREIGN KEY (`fid_campana`) REFERENCES `campanas` (`id_campana`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_6` FOREIGN KEY (`fid_sobrinity`) REFERENCES `usuarios` (`id_usuario`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

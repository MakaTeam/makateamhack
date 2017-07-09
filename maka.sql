-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2017 a las 16:14:45
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maka`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociacion`
--

CREATE TABLE `asociacion` (
  `id_asociacion` int(10) UNSIGNED NOT NULL,
  `id_paquete` int(10) UNSIGNED NOT NULL,
  `aso_nombre` varchar(255) NOT NULL,
  `aso_estado_val` tinyint(4) NOT NULL,
  `aso_telefono` varchar(10) NOT NULL,
  `aso_correo` varchar(50) NOT NULL,
  `aso_descripcion_causa` text NOT NULL,
  `aso_contacto` varchar(128) NOT NULL,
  `aso_fec_fundacion` datetime NOT NULL,
  `aso_facebook` varchar(128) DEFAULT NULL,
  `aso_twitter` varchar(128) DEFAULT NULL,
  `aso_instagram` varchar(128) DEFAULT NULL,
  `aso_web` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(10) UNSIGNED NOT NULL,
  `id_asociacion` int(10) UNSIGNED NOT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `calle` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL,
  `colonia` varchar(45) NOT NULL,
  `cp` varchar(6) NOT NULL,
  `delegacion` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `id_donacion` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_asociacion` int(10) UNSIGNED NOT NULL,
  `don_fecha` datetime NOT NULL,
  `don_descripcion` varchar(255) NOT NULL,
  `don_cantidad` double NOT NULL,
  `don_estatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(10) UNSIGNED NOT NULL,
  `emp_direccion` varchar(255) NOT NULL,
  `emp_telefono` varchar(10) NOT NULL,
  `emp_sitioweb` varchar(80) DEFAULT NULL,
  `emp_categoria` varchar(45) NOT NULL,
  `emp_verificada` tinyint(4) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `id_asociacion` int(10) UNSIGNED NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `link` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_paquete`
--

CREATE TABLE `tipo_paquete` (
  `id_paquete` int(10) UNSIGNED NOT NULL,
  `paq_tipo` char(1) NOT NULL,
  `paq_pagina` char(1) NOT NULL,
  `paq_redes_sociales` char(1) NOT NULL,
  `paq_eventos_ilimitados` char(1) NOT NULL,
  `paq_banner` char(1) NOT NULL,
  `paq_envio_notificaciones` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario_id_tipo` int(10) UNSIGNED NOT NULL,
  `usr_alias` varchar(32) NOT NULL,
  `usr_correo` varchar(32) NOT NULL,
  `usr_pwd` varchar(16) NOT NULL,
  `usr_nombre` varchar(32) DEFAULT NULL,
  `usr_foto` blob,
  `usr_tipo` char(1) NOT NULL,
  `usr_nivel` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  ADD PRIMARY KEY (`id_asociacion`),
  ADD KEY `fk_asociacion_tipo_paquete1_idx` (`id_paquete`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `fk_direccion_usuario_asociacion1_idx` (`id_asociacion`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`id_donacion`),
  ADD KEY `fk_donacion_usuario1_idx` (`id_usuario`),
  ADD KEY `fk_donacion_usuario_asociacion1_idx` (`id_asociacion`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `fk_usuario_empresa_usuario1_idx` (`usuario_id_usuario`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`,`id_asociacion`),
  ADD KEY `fk_evento_asociacion1_idx` (`id_asociacion`);

--
-- Indices de la tabla `tipo_paquete`
--
ALTER TABLE `tipo_paquete`
  ADD PRIMARY KEY (`id_paquete`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  MODIFY `id_asociacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `id_donacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_paquete`
--
ALTER TABLE `tipo_paquete`
  MODIFY `id_paquete` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asociacion`
--
ALTER TABLE `asociacion`
  ADD CONSTRAINT `fk_asociacion_tipo_paquete1` FOREIGN KEY (`id_paquete`) REFERENCES `tipo_paquete` (`id_paquete`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `fk_direccion_usuario_asociacion1` FOREIGN KEY (`id_asociacion`) REFERENCES `asociacion` (`id_asociacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `fk_donacion_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donacion_usuario_asociacion1` FOREIGN KEY (`id_asociacion`) REFERENCES `asociacion` (`id_asociacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_usuario_empresa_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `fk_evento_asociacion1` FOREIGN KEY (`id_asociacion`) REFERENCES `asociacion` (`id_asociacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

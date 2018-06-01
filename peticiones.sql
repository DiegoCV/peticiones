-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2018 a las 04:34:14
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peticiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antivirus`
--

CREATE TABLE `antivirus` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_vencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `antivirus`
--

INSERT INTO `antivirus` (`id`, `nombre`, `fecha_registro`, `fecha_vencimiento`) VALUES
(5, 'avast', '2018-05-10', '2018-05-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidad`
--

CREATE TABLE `calidad` (
  `id` int(11) NOT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  `cambio_contra` varchar(45) DEFAULT NULL,
  `bloquea_auto` varchar(45) DEFAULT NULL,
  `bloqueo` varchar(45) DEFAULT NULL,
  `copia_seguridad` varchar(45) DEFAULT NULL,
  `antivirus` varchar(45) DEFAULT NULL,
  `progra_no _auto` varchar(45) DEFAULT NULL,
  `carpeta_compartido` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `departamentos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `nombre`, `departamentos_id`) VALUES
(0, 'costurero', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `claves`
--

CREATE TABLE `claves` (
  `id` int(11) NOT NULL,
  `windows_user` varchar(45) NOT NULL,
  `windows_pass` varchar(45) NOT NULL,
  `correo_user` varchar(45) NOT NULL,
  `correo_pass` varchar(45) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpu`
--

CREATE TABLE `cpu` (
  `id` int(11) NOT NULL,
  `tipoCpu` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `serial` varchar(45) NOT NULL,
  `memoria` varchar(45) NOT NULL,
  `discoduro` varchar(45) NOT NULL,
  `procesador` varchar(45) NOT NULL,
  `dvd` varchar(45) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(0, 'costura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresora`
--

CREATE TABLE `impresora` (
  `id` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `serial` varchar(45) NOT NULL,
  `tipoConector` varchar(45) NOT NULL,
  `ipImpresora` varchar(50) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitor`
--

CREATE TABLE `monitor` (
  `id` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `serial` varchar(45) NOT NULL,
  `pulgadas` varchar(45) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mouse`
--

CREATE TABLE `mouse` (
  `id` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `serial` varchar(45) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones_analisis`
--

CREATE TABLE `peticiones_analisis` (
  `id` int(11) NOT NULL,
  `peticion` varchar(10000) NOT NULL,
  `fecha_ini` varchar(45) NOT NULL,
  `fecha_fin` varchar(45) NOT NULL,
  `solucion` varchar(10000) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones_soporte`
--

CREATE TABLE `peticiones_soporte` (
  `id` int(11) NOT NULL,
  `peticion` varchar(2000) NOT NULL,
  `fecha_ini` varchar(45) NOT NULL,
  `fecha_fin` varchar(45) NOT NULL,
  `solucion` varchar(2000) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `red`
--

CREATE TABLE `red` (
  `id` int(11) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `masc` varchar(45) NOT NULL,
  `puertaEnlace` varchar(45) NOT NULL,
  `dns1` varchar(45) NOT NULL,
  `dns2` varchar(45) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id` int(11) NOT NULL,
  `fecha_ini` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` datetime DEFAULT '0000-00-00 00:00:00',
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `sistemaOperativo` varchar(45) NOT NULL,
  `antivirus` int(11) NOT NULL,
  `ofimatica` varchar(45) NOT NULL,
  `paqueteContable` varchar(45) NOT NULL,
  `otros` varchar(45) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teclado`
--

CREATE TABLE `teclado` (
  `id` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `serial` varchar(45) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `roll` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `contrasena`, `roll`, `estado`, `cargo_id`) VALUES
(2, 'Diego', 'los', 1, 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antivirus`
--
ALTER TABLE `antivirus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calidad`
--
ALTER TABLE `calidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_calidad_cargo1_idx` (`cargo_id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cargo_departamentos_idx` (`departamentos_id`);

--
-- Indices de la tabla `claves`
--
ALTER TABLE `claves`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_id_UNIQUE` (`usuario_id`),
  ADD KEY `fk_claves_usuario1_idx` (`usuario_id`);

--
-- Indices de la tabla `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cpu_cargo1_idx` (`cargo_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `impresora`
--
ALTER TABLE `impresora`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_impresora_cargo1_idx` (`cargo_id`);

--
-- Indices de la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_monitor_cargo1_idx` (`cargo_id`);

--
-- Indices de la tabla `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mouse_cargo1_idx` (`cargo_id`);

--
-- Indices de la tabla `peticiones_analisis`
--
ALTER TABLE `peticiones_analisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peticiones_analisis_usuario1_idx` (`usuario_id`);

--
-- Indices de la tabla `peticiones_soporte`
--
ALTER TABLE `peticiones_soporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peticiones_soporte_usuario1_idx` (`usuario_id`);

--
-- Indices de la tabla `red`
--
ALTER TABLE `red`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_red_cargo1_idx` (`cargo_id`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sesion_usuario` (`usuario`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cargo_id_UNIQUE` (`cargo_id`),
  ADD KEY `fk_Software_cargo1_idx` (`cargo_id`),
  ADD KEY `fk_Software_antivirus` (`antivirus`);

--
-- Indices de la tabla `teclado`
--
ALTER TABLE `teclado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_teclado_cargo1_idx` (`cargo_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cargo_id_UNIQUE` (`cargo_id`),
  ADD KEY `fk_usuario_cargo1_idx` (`cargo_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calidad`
--
ALTER TABLE `calidad`
  ADD CONSTRAINT `fk_calidad_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `fk_cargo_departamentos` FOREIGN KEY (`departamentos_id`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `claves`
--
ALTER TABLE `claves`
  ADD CONSTRAINT `fk_claves_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cpu`
--
ALTER TABLE `cpu`
  ADD CONSTRAINT `fk_cpu_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `impresora`
--
ALTER TABLE `impresora`
  ADD CONSTRAINT `fk_impresora_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `fk_monitor_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mouse`
--
ALTER TABLE `mouse`
  ADD CONSTRAINT `fk_mouse_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `peticiones_analisis`
--
ALTER TABLE `peticiones_analisis`
  ADD CONSTRAINT `fk_peticiones_analisis_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `peticiones_soporte`
--
ALTER TABLE `peticiones_soporte`
  ADD CONSTRAINT `fk_peticiones_soporte_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `red`
--
ALTER TABLE `red`
  ADD CONSTRAINT `fk_red_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD CONSTRAINT `fk_sesion_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `fk_Software_antivirus` FOREIGN KEY (`antivirus`) REFERENCES `antivirus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Software_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `teclado`
--
ALTER TABLE `teclado`
  ADD CONSTRAINT `fk_teclado_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_cargo` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

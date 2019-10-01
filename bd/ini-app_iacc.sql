-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2019 a las 03:04:20
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_iacc`
--
CREATE DATABASE IF NOT EXISTS `app_iacc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `app_iacc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
CREATE TABLE `bitacora` (
  `ID_registro` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `fecha_salida` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `bitacora`
--

TRUNCATE TABLE `bitacora`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_departamento`
--

DROP TABLE IF EXISTS `tm_departamento`;
CREATE TABLE `tm_departamento` (
  `ID_departamento` int(11) NOT NULL,
  `nombre_departamento` varchar(255) DEFAULT NULL,
  `ID_establecimiento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tm_departamento`
--

TRUNCATE TABLE `tm_departamento`;
--
-- Volcado de datos para la tabla `tm_departamento`
--

INSERT INTO `tm_departamento` (`ID_departamento`, `nombre_departamento`, `ID_establecimiento`) VALUES
(0, 'DEPARTAMENTO TEST', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_establecimiento`
--

DROP TABLE IF EXISTS `tm_establecimiento`;
CREATE TABLE `tm_establecimiento` (
  `ID_establecimiento` int(11) NOT NULL,
  `nombre_establecimiento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tm_establecimiento`
--

TRUNCATE TABLE `tm_establecimiento`;
--
-- Volcado de datos para la tabla `tm_establecimiento`
--

INSERT INTO `tm_establecimiento` (`ID_establecimiento`, `nombre_establecimiento`) VALUES
(0, 'ESTABLECIMIENTO TEST'),
(1, 'ESTABBLECIMIENTO NUEVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_estado_planificacion`
--

DROP TABLE IF EXISTS `tm_estado_planificacion`;
CREATE TABLE `tm_estado_planificacion` (
  `ID_estado` int(11) NOT NULL,
  `desc_estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tm_estado_planificacion`
--

TRUNCATE TABLE `tm_estado_planificacion`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_estado_planificacion_detalle`
--

DROP TABLE IF EXISTS `tm_estado_planificacion_detalle`;
CREATE TABLE `tm_estado_planificacion_detalle` (
  `ID_estado` int(11) NOT NULL,
  `desc_estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tm_estado_planificacion_detalle`
--

TRUNCATE TABLE `tm_estado_planificacion_detalle`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_perfil`
--

DROP TABLE IF EXISTS `tm_perfil`;
CREATE TABLE `tm_perfil` (
  `ID_perfil` int(11) NOT NULL,
  `nombre_perfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tm_perfil`
--

TRUNCATE TABLE `tm_perfil`;
--
-- Volcado de datos para la tabla `tm_perfil`
--

INSERT INTO `tm_perfil` (`ID_perfil`, `nombre_perfil`) VALUES
(0, 'ADMINISTRADOR'),
(1, 'FUNCIONARIO'),
(2, 'ABASTECIMIENTO'),
(3, 'FINANZAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_presupuesto`
--

DROP TABLE IF EXISTS `tm_presupuesto`;
CREATE TABLE `tm_presupuesto` (
  `ID_presupuesto` int(11) NOT NULL,
  `ID_departamento` int(11) DEFAULT NULL,
  `dinero` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tm_presupuesto`
--

TRUNCATE TABLE `tm_presupuesto`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_producto`
--

DROP TABLE IF EXISTS `tm_producto`;
CREATE TABLE `tm_producto` (
  `ID_producto` int(11) NOT NULL,
  `desc_producto` varchar(255) DEFAULT NULL,
  `modelo_producto` varchar(255) DEFAULT NULL,
  `ID_tipo_producto` int(11) DEFAULT NULL,
  `ID_unidad_medida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tm_producto`
--

TRUNCATE TABLE `tm_producto`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_tipo_producto`
--

DROP TABLE IF EXISTS `tm_tipo_producto`;
CREATE TABLE `tm_tipo_producto` (
  `ID_tipo_producto` int(11) NOT NULL,
  `desc_tipo_producto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tm_tipo_producto`
--

TRUNCATE TABLE `tm_tipo_producto`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_unidad_medida`
--

DROP TABLE IF EXISTS `tm_unidad_medida`;
CREATE TABLE `tm_unidad_medida` (
  `ID_unidad_medida` int(11) NOT NULL,
  `desc_unidad_medida` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tm_unidad_medida`
--

TRUNCATE TABLE `tm_unidad_medida`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

DROP TABLE IF EXISTS `tm_usuario`;
CREATE TABLE `tm_usuario` (
  `ID_usuario` int(11) NOT NULL,
  `run_usuario` varchar(255) DEFAULT NULL,
  `dv_usuario` varchar(255) DEFAULT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellido_paterno` varchar(255) DEFAULT NULL,
  `apellido_materno` varchar(255) DEFAULT NULL,
  `contrasena` varbinary(255) DEFAULT NULL,
  `ID_departamento` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tm_usuario`
--

TRUNCATE TABLE `tm_usuario`;
--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`ID_usuario`, `run_usuario`, `dv_usuario`, `nombres`, `apellido_paterno`, `apellido_materno`, `contrasena`, `ID_departamento`) VALUES
(1, '1', '9', 'Administrador', NULL, NULL, 0x3230326362393632616335393037356239363462303731353264323334623730, 0),
(2, '17513705', 'K', 'Felipe editado', 'Villalon', 'Segura', 0x3230326362393632616335393037356239363462303731353264323334623730, 0),
(6, '2', '7', 'NUEVO', 'USUARIO', 'TEST', 0x3230326362393632616335393037356239363462303731353264323334623730, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tr_producto_precio`
--

DROP TABLE IF EXISTS `tr_producto_precio`;
CREATE TABLE `tr_producto_precio` (
  `ID_producto` int(11) NOT NULL,
  `ID_establecimiento` int(11) NOT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tr_producto_precio`
--

TRUNCATE TABLE `tr_producto_precio`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tr_usuario_departamento`
--

DROP TABLE IF EXISTS `tr_usuario_departamento`;
CREATE TABLE `tr_usuario_departamento` (
  `ID_usuario` int(11) NOT NULL,
  `ID_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tr_usuario_departamento`
--

TRUNCATE TABLE `tr_usuario_departamento`;
--
-- Volcado de datos para la tabla `tr_usuario_departamento`
--

INSERT INTO `tr_usuario_departamento` (`ID_usuario`, `ID_departamento`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tr_usuario_perfil`
--

DROP TABLE IF EXISTS `tr_usuario_perfil`;
CREATE TABLE `tr_usuario_perfil` (
  `ID_usuario` int(11) NOT NULL,
  `ID_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tr_usuario_perfil`
--

TRUNCATE TABLE `tr_usuario_perfil`;
--
-- Volcado de datos para la tabla `tr_usuario_perfil`
--

INSERT INTO `tr_usuario_perfil` (`ID_usuario`, `ID_perfil`) VALUES
(6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tt_planificacion`
--

DROP TABLE IF EXISTS `tt_planificacion`;
CREATE TABLE `tt_planificacion` (
  `ID_planificacion` int(11) NOT NULL,
  `ID_presupuesto` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `fecha_modificacion` int(11) DEFAULT NULL,
  `ID_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tt_planificacion`
--

TRUNCATE TABLE `tt_planificacion`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tt_planificacion_detalle`
--

DROP TABLE IF EXISTS `tt_planificacion_detalle`;
CREATE TABLE `tt_planificacion_detalle` (
  `ID_planificacion` int(11) NOT NULL,
  `ID_producto` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `ID_estado` int(11) DEFAULT NULL,
  `cant_ene` int(11) DEFAULT NULL,
  `cant_feb` int(11) DEFAULT NULL,
  `cant_mar` int(11) DEFAULT NULL,
  `cant_abr` int(11) DEFAULT NULL,
  `cant_may` int(11) DEFAULT NULL,
  `cant_jun` int(11) DEFAULT NULL,
  `cant_jul` int(11) DEFAULT NULL,
  `cant_ago` int(11) DEFAULT NULL,
  `cant_sep` int(11) DEFAULT NULL,
  `cant_oct` int(11) DEFAULT NULL,
  `cant_nov` int(11) DEFAULT NULL,
  `cant_dic` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tt_planificacion_detalle`
--

TRUNCATE TABLE `tt_planificacion_detalle`;
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_funcionario`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_funcionario`;
CREATE TABLE `vw_funcionario` (
`run_usuario` varchar(255)
,`nombres` varchar(255)
,`nombre_departamento` varchar(255)
,`nombre_establecimiento` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_funcionario`
--
DROP TABLE IF EXISTS `vw_funcionario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_funcionario`  AS  (select `t1`.`run_usuario` AS `run_usuario`,`t1`.`nombres` AS `nombres`,`t2`.`nombre_departamento` AS `nombre_departamento`,`t3`.`nombre_establecimiento` AS `nombre_establecimiento` from ((`tm_usuario` `t1` join `tm_departamento` `t2` on(`t2`.`ID_departamento` = `t1`.`ID_departamento`)) join `tm_establecimiento` `t3` on(`t3`.`ID_establecimiento` = `t2`.`ID_departamento`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`ID_registro`),
  ADD KEY `ID_usuario` (`ID_usuario`);

--
-- Indices de la tabla `tm_departamento`
--
ALTER TABLE `tm_departamento`
  ADD PRIMARY KEY (`ID_departamento`),
  ADD KEY `ID_establecimiento` (`ID_establecimiento`);

--
-- Indices de la tabla `tm_establecimiento`
--
ALTER TABLE `tm_establecimiento`
  ADD PRIMARY KEY (`ID_establecimiento`);

--
-- Indices de la tabla `tm_estado_planificacion`
--
ALTER TABLE `tm_estado_planificacion`
  ADD PRIMARY KEY (`ID_estado`);

--
-- Indices de la tabla `tm_estado_planificacion_detalle`
--
ALTER TABLE `tm_estado_planificacion_detalle`
  ADD PRIMARY KEY (`ID_estado`);

--
-- Indices de la tabla `tm_perfil`
--
ALTER TABLE `tm_perfil`
  ADD PRIMARY KEY (`ID_perfil`);

--
-- Indices de la tabla `tm_presupuesto`
--
ALTER TABLE `tm_presupuesto`
  ADD PRIMARY KEY (`ID_presupuesto`),
  ADD KEY `ID_departamento` (`ID_departamento`);

--
-- Indices de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  ADD PRIMARY KEY (`ID_producto`),
  ADD KEY `ID_unidad_medida` (`ID_unidad_medida`),
  ADD KEY `ID_tipo_producto` (`ID_tipo_producto`);

--
-- Indices de la tabla `tm_tipo_producto`
--
ALTER TABLE `tm_tipo_producto`
  ADD PRIMARY KEY (`ID_tipo_producto`);

--
-- Indices de la tabla `tm_unidad_medida`
--
ALTER TABLE `tm_unidad_medida`
  ADD PRIMARY KEY (`ID_unidad_medida`);

--
-- Indices de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD UNIQUE KEY `run_usuario` (`run_usuario`),
  ADD KEY `ID_departamento` (`ID_departamento`);

--
-- Indices de la tabla `tr_producto_precio`
--
ALTER TABLE `tr_producto_precio`
  ADD PRIMARY KEY (`ID_producto`,`ID_establecimiento`),
  ADD KEY `ID_establecimiento` (`ID_establecimiento`);

--
-- Indices de la tabla `tr_usuario_departamento`
--
ALTER TABLE `tr_usuario_departamento`
  ADD PRIMARY KEY (`ID_usuario`,`ID_departamento`);

--
-- Indices de la tabla `tr_usuario_perfil`
--
ALTER TABLE `tr_usuario_perfil`
  ADD PRIMARY KEY (`ID_usuario`,`ID_perfil`),
  ADD KEY `ID_perfil` (`ID_perfil`);

--
-- Indices de la tabla `tt_planificacion`
--
ALTER TABLE `tt_planificacion`
  ADD PRIMARY KEY (`ID_planificacion`),
  ADD KEY `ID_presupuesto` (`ID_presupuesto`),
  ADD KEY `ID_estado` (`ID_estado`);

--
-- Indices de la tabla `tt_planificacion_detalle`
--
ALTER TABLE `tt_planificacion_detalle`
  ADD PRIMARY KEY (`ID_planificacion`),
  ADD KEY `ID_producto` (`ID_producto`),
  ADD KEY `ID_estado` (`ID_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `ID_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `tm_usuario` (`ID_usuario`);

--
-- Filtros para la tabla `tm_departamento`
--
ALTER TABLE `tm_departamento`
  ADD CONSTRAINT `tm_departamento_ibfk_1` FOREIGN KEY (`ID_establecimiento`) REFERENCES `tm_establecimiento` (`ID_establecimiento`);

--
-- Filtros para la tabla `tm_presupuesto`
--
ALTER TABLE `tm_presupuesto`
  ADD CONSTRAINT `tm_presupuesto_ibfk_1` FOREIGN KEY (`ID_departamento`) REFERENCES `tm_departamento` (`ID_departamento`);

--
-- Filtros para la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  ADD CONSTRAINT `tm_producto_ibfk_1` FOREIGN KEY (`ID_unidad_medida`) REFERENCES `tm_unidad_medida` (`ID_unidad_medida`),
  ADD CONSTRAINT `tm_producto_ibfk_2` FOREIGN KEY (`ID_tipo_producto`) REFERENCES `tm_tipo_producto` (`ID_tipo_producto`);

--
-- Filtros para la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD CONSTRAINT `tm_usuario_ibfk_1` FOREIGN KEY (`ID_departamento`) REFERENCES `tm_departamento` (`ID_departamento`);

--
-- Filtros para la tabla `tr_producto_precio`
--
ALTER TABLE `tr_producto_precio`
  ADD CONSTRAINT `tr_producto_precio_ibfk_1` FOREIGN KEY (`ID_producto`) REFERENCES `tm_producto` (`ID_producto`),
  ADD CONSTRAINT `tr_producto_precio_ibfk_2` FOREIGN KEY (`ID_establecimiento`) REFERENCES `tm_establecimiento` (`ID_establecimiento`);

--
-- Filtros para la tabla `tr_usuario_perfil`
--
ALTER TABLE `tr_usuario_perfil`
  ADD CONSTRAINT `tr_usuario_perfil_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `tm_usuario` (`ID_usuario`),
  ADD CONSTRAINT `tr_usuario_perfil_ibfk_2` FOREIGN KEY (`ID_perfil`) REFERENCES `tm_perfil` (`ID_perfil`);

--
-- Filtros para la tabla `tt_planificacion`
--
ALTER TABLE `tt_planificacion`
  ADD CONSTRAINT `tt_planificacion_ibfk_1` FOREIGN KEY (`ID_presupuesto`) REFERENCES `tm_presupuesto` (`ID_presupuesto`),
  ADD CONSTRAINT `tt_planificacion_ibfk_2` FOREIGN KEY (`ID_estado`) REFERENCES `tm_estado_planificacion` (`ID_estado`);

--
-- Filtros para la tabla `tt_planificacion_detalle`
--
ALTER TABLE `tt_planificacion_detalle`
  ADD CONSTRAINT `tt_planificacion_detalle_ibfk_1` FOREIGN KEY (`ID_producto`) REFERENCES `tm_producto` (`ID_producto`),
  ADD CONSTRAINT `tt_planificacion_detalle_ibfk_2` FOREIGN KEY (`ID_estado`) REFERENCES `tm_estado_planificacion_detalle` (`ID_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

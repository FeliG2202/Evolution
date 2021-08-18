-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3325
-- Tiempo de generación: 18-08-2021 a las 21:04:50
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evolution2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario_respuesta`
--

CREATE TABLE `cuestionario_respuesta` (
  `idCuestionarioRespuesta` int(11) NOT NULL,
  `CuestionariorRespuestaFecha` date NOT NULL DEFAULT current_timestamp(),
  `idUsuarios` int(11) NOT NULL,
  `idRespuestas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `idEjercicios` int(11) NOT NULL,
  `ejercicios_nombre` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ejercicios_imagen` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ejercicios_descripcion` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ejercicios_fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ejercicios_code` varchar(14) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `menuDetalle` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `menuEstado` enum('true','false') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`idMenu`, `menuDetalle`, `menuEstado`) VALUES
(1, 'Clientes', 'true'),
(2, 'Usuarios', 'true'),
(3, 'Cuestionarios', 'true'),
(4, 'Test', 'true'),
(5, 'Soporte', 'true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionesmenu`
--

CREATE TABLE `opcionesmenu` (
  `idOpcionesMenu` int(11) NOT NULL,
  `opcionesMenuNombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `opcionesMenuEnlace` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `opcionesmenu`
--

INSERT INTO `opcionesmenu` (`idOpcionesMenu`, `opcionesMenuNombre`, `opcionesMenuEnlace`) VALUES
(1, 'Inicio', 'Home'),
(2, 'Cuestionarios', 'regCuestionario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `persona_nombres` varchar(70) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `persona_apellidos` varchar(70) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `persona_documento` int(11) NOT NULL,
  `persona_fecha_nacimineto` date NOT NULL,
  `persona_email` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `persona_genero` enum('Masculino','Femenino','Otro') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `persona_tipo_sangre` enum('O+','O-','B+','B-','A+','A-','AB+','AB-') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `persona_problema` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `persona_nombres`, `persona_apellidos`, `persona_documento`, `persona_fecha_nacimineto`, `persona_email`, `persona_genero`, `persona_tipo_sangre`, `persona_problema`) VALUES
(1, 'felipe', 'gavilan', 1005958885, '2003-02-22', 'felipegavilan2202@gmail.com', 'Masculino', 'O+', 'mdgd'),
(2, 'andre', 'castaño', 10098990, '2003-02-27', 'andre@gmail.com', 'Masculino', 'O+', 'mdgd'),
(3, 'olga lucia', 'Patanchique', 11111111, '2001-01-16', 'olga@correo.com', '', 'AB+', 'Pereza'),
(4, 'Carlos Fernando', 'Cometa', 2222222, '1970-07-23', 'cometa@correo.com', 'Masculino', 'A-', 'Ninguna'),
(6, 'Carlos Fernando', 'Cometa', 2222222, '1970-07-23', 'cometa@correo.com', 'Masculino', 'A-', 'Ninguna'),
(7, 'Fernando ', 'Gonzalez Pacheco', 333333, '1950-03-21', 'pachecho@correo.com', 'Masculino', 'AB-', 'Ninguna'),
(8, 'Fernando ', 'Gonzalez Pacheco', 333333, '1950-03-21', 'pachecho@correo.com', 'Masculino', 'AB-', 'Ninguna'),
(9, 'Fernando ', 'Gonzalez Pacheco', 333333, '1950-03-21', 'pachecho@correo.com', 'Masculino', 'AB-', 'Ninguna'),
(10, 'Fernando ', 'Gonzalez Pacheco', 333333, '1950-03-21', 'pachecho@correo.com', 'Masculino', 'AB-', 'Ninguna'),
(11, 'camilo alberto', 'ramirez', 223333, '2021-08-05', 'alberto@correo.com', 'Masculino', 'AB+', 'pereza'),
(12, 'camilo alberto', 'ramirez', 223333, '2021-08-05', 'alberto@correo.com', 'Masculino', 'AB+', 'pereza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `idpreguntas` int(11) NOT NULL,
  `preguntadetalle` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `preguntaestado` enum('true','false') COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `idtipocuestionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idpreguntas`, `preguntadetalle`, `preguntaestado`, `idtipocuestionario`) VALUES
(1, 'Durante los últimos 7 días, ¿Cuántos días realizó usted actividades físicas vigorosas como levantar objetos pesados, excavar, aeróbicos, o pedalear rápido en bicicleta?', 'true', 1),
(2, '¿Cuánto tiempo en total usualmente le tomó realizar actividades físicas vigorosas en uno de esos días que las realizó?', 'true', 1),
(3, 'Inducción del dormir (tiempo que le toma quedarse dormido una vez acostado).', 'true', 3),
(4, 'Despertares durante la noche.', 'true', 3),
(5, 'Despertar final más temprano de lo deseado.', 'true', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problemas_usuarios`
--

CREATE TABLE `problemas_usuarios` (
  `idproblemas_usuarios` int(11) NOT NULL,
  `problemas_usuarios_nombre` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `problemas_usuarios_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `problemas_usuarios_mensaje` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `problemas_usuarios_code` varchar(14) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `idrespuestas` int(11) NOT NULL,
  `respuestadetalle` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `respuestapuntaje` int(11) NOT NULL,
  `respuestaestado` enum('true','false') COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `idpreguntas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`idrespuestas`, `respuestadetalle`, `respuestapuntaje`, `respuestaestado`, `idpreguntas`) VALUES
(1, '0d', 0, 'true', 1),
(2, '1 dia', 1, 'true', 1),
(3, '2 dias', 2, 'true', 1),
(4, '3 dias', 3, 'true', 1),
(5, '4 dias', 4, 'true', 1),
(6, '5 dias', 5, 'true', 1),
(7, '6 dias', 6, 'true', 1),
(8, '7 dias', 7, 'true', 1),
(9, '10 min', 10, 'true', 2),
(10, '20 min', 20, 'true', 2),
(11, '30 min', 30, 'true', 2),
(12, '40 min', 40, 'true', 2),
(13, '50 min', 50, 'true', 2),
(14, '60 min', 60, 'true', 2),
(15, 'Ningún problema', 0, 'true', 3),
(16, 'Ligeramente retrasado', 1, 'true', 3),
(17, 'Marcadamente retrasado', 2, 'true', 3),
(18, 'Ningún problema', 0, 'true', 4),
(19, 'Problema menor', 0, 'true', 4),
(20, 'Problema considerable', 0, 'true', 4),
(21, 'No más temprano', 0, 'true', 5),
(22, 'Un poco más temprano', 0, 'true', 5),
(23, 'Marcadamente más temprano', 0, 'true', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `rolesdescripcion` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rolesestado` enum('true','false') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rolesdescripcion`, `rolesestado`) VALUES
(1, 'Cliente', 'true'),
(2, 'Administrador', 'true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolesopcionesmenu`
--

CREATE TABLE `rolesopcionesmenu` (
  `idRolesOpcionesMenu` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `idOpcionesMenu` int(11) NOT NULL,
  `rolesOpcionesMenuEstado` enum('true','false') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rolesopcionesmenu`
--

INSERT INTO `rolesopcionesmenu` (`idRolesOpcionesMenu`, `idRol`, `idOpcionesMenu`, `rolesOpcionesMenuEstado`) VALUES
(1, 2, 1, 'true'),
(2, 2, 2, 'true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutinas_ejercicios`
--

CREATE TABLE `rutinas_ejercicios` (
  `idRutinas_ejercicios` int(11) NOT NULL,
  `rutinas_ejercicios_series` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `rutinas_ejercicios_repeticiones` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `rutinas_ejercicios_tiempo` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `rutinas_ejercicios_fecha_inicio` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rutinas_ejercicios_fecha_fin` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `rutinas_ejercicios_code` varchar(14) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idEjercicios` int(11) NOT NULL,
  `idUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cuestionario`
--

CREATE TABLE `tipo_cuestionario` (
  `idtipo_cuestionario` int(11) NOT NULL,
  `tipo_cuestionario_detalle` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo_cuestionario_estado` enum('true','false') COLLATE utf8mb4_spanish2_ci DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_cuestionario`
--

INSERT INTO `tipo_cuestionario` (`idtipo_cuestionario`, `tipo_cuestionario_detalle`, `tipo_cuestionario_estado`) VALUES
(1, 'Fantastico', 'true'),
(2, 'Insomnio', 'true'),
(3, 'Ipaq', 'true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuLogin` char(60) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuPassword` varchar(60) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuEstado` enum('true','false') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'true',
  `idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuLogin`, `usuPassword`, `usuEstado`, `idpersona`) VALUES
(1, 'gavilan', '123', 'true', 1),
(2, 'Andres', '1234', 'true', 2),
(3, 'olga', '1234', 'true', 3),
(4, 'olga', '1234', 'true', 3),
(5, 'okoko', '1234', 'true', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosroles`
--

CREATE TABLE `usuariosroles` (
  `idusuariosRoles` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `usuariosRolesEstado` enum('true','false') COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuariosroles`
--

INSERT INTO `usuariosroles` (`idusuariosRoles`, `idUsuario`, `idRol`, `usuariosRolesEstado`) VALUES
(1, 1, 2, 'true'),
(2, 1, 1, 'true'),
(3, 2, 1, 'true');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_cuestionariorespuestas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_cuestionariorespuestas` (
`idCuestionarioRespuesta` int(11)
,`cuestionarioRespuestaFecha` date
,`idUsuarios` int(11)
,`idRespuestas` int(11)
,`usuLogin` char(60)
,`respuestadetalle` varchar(50)
,`respuestapuntaje` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_cuestionarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_cuestionarios` (
`idtipo_cuestionario` int(11)
,`tipo_cuestionario_detalle` varchar(45)
,`idpreguntas` int(11)
,`preguntadetalle` text
,`idrespuestas` int(11)
,`respuestadetalle` varchar(50)
,`respuestapuntaje` int(11)
,`idCuestionarioRespuesta` int(11)
,`CuestionariorRespuestaFecha` date
,`idUsuario` int(11)
,`usuLogin` char(60)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_rolesopcionesmenu`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_rolesopcionesmenu` (
`idRol` int(11)
,`idOpcionesMenu` int(11)
,`rolesOpcionesMenuEstado` enum('true','false')
,`rolesdescripcion` varchar(50)
,`opcionesMenuNombre` varchar(50)
,`opcionesMenuEnlace` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_usuariosroles`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_usuariosroles` (
`idusuariosRoles` int(11)
,`idUsuario` int(11)
,`idRol` int(11)
,`usuariosRolesEstado` enum('true','false')
,`usuLogin` char(60)
,`rolesdescripcion` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `view_cuestionariorespuestas`
--
DROP TABLE IF EXISTS `view_cuestionariorespuestas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_cuestionariorespuestas`  AS  select `a`.`idCuestionarioRespuesta` AS `idCuestionarioRespuesta`,`a`.`CuestionariorRespuestaFecha` AS `cuestionarioRespuestaFecha`,`a`.`idUsuarios` AS `idUsuarios`,`a`.`idRespuestas` AS `idRespuestas`,`b`.`usuLogin` AS `usuLogin`,`c`.`respuestadetalle` AS `respuestadetalle`,`c`.`respuestapuntaje` AS `respuestapuntaje` from ((`cuestionario_respuesta` `a` join `usuarios` `b`) join `respuestas` `c`) where `a`.`idUsuarios` = `b`.`idUsuario` and `a`.`idRespuestas` = `c`.`idrespuestas` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_cuestionarios`
--
DROP TABLE IF EXISTS `view_cuestionarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_cuestionarios`  AS  select `a`.`idtipo_cuestionario` AS `idtipo_cuestionario`,`a`.`tipo_cuestionario_detalle` AS `tipo_cuestionario_detalle`,`b`.`idpreguntas` AS `idpreguntas`,`b`.`preguntadetalle` AS `preguntadetalle`,`c`.`idrespuestas` AS `idrespuestas`,`c`.`respuestadetalle` AS `respuestadetalle`,`c`.`respuestapuntaje` AS `respuestapuntaje`,`d`.`idCuestionarioRespuesta` AS `idCuestionarioRespuesta`,`d`.`CuestionariorRespuestaFecha` AS `CuestionariorRespuestaFecha`,`e`.`idUsuario` AS `idUsuario`,`e`.`usuLogin` AS `usuLogin` from ((((`tipo_cuestionario` `a` join `preguntas` `b`) join `respuestas` `c`) join `cuestionario_respuesta` `d`) join `usuarios` `e`) where `a`.`idtipo_cuestionario` = `b`.`idtipocuestionario` and `b`.`idpreguntas` = `c`.`idpreguntas` and `c`.`idrespuestas` = `d`.`idRespuestas` and `d`.`idUsuarios` = `e`.`idUsuario` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_rolesopcionesmenu`
--
DROP TABLE IF EXISTS `view_rolesopcionesmenu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rolesopcionesmenu`  AS  select `a`.`idRol` AS `idRol`,`a`.`idOpcionesMenu` AS `idOpcionesMenu`,`a`.`rolesOpcionesMenuEstado` AS `rolesOpcionesMenuEstado`,`b`.`rolesdescripcion` AS `rolesdescripcion`,`c`.`opcionesMenuNombre` AS `opcionesMenuNombre`,`c`.`opcionesMenuEnlace` AS `opcionesMenuEnlace` from ((`rolesopcionesmenu` `a` join `roles` `b`) join `opcionesmenu` `c`) where `a`.`idRol` = `b`.`idRol` and `a`.`idOpcionesMenu` = `c`.`idOpcionesMenu` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_usuariosroles`
--
DROP TABLE IF EXISTS `view_usuariosroles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_usuariosroles`  AS  select `a`.`idusuariosRoles` AS `idusuariosRoles`,`a`.`idUsuario` AS `idUsuario`,`a`.`idRol` AS `idRol`,`a`.`usuariosRolesEstado` AS `usuariosRolesEstado`,`b`.`usuLogin` AS `usuLogin`,`c`.`rolesdescripcion` AS `rolesdescripcion` from ((`usuariosroles` `a` join `usuarios` `b`) join `roles` `c`) where `a`.`idUsuario` = `b`.`idUsuario` and `a`.`idRol` = `c`.`idRol` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionario_respuesta`
--
ALTER TABLE `cuestionario_respuesta`
  ADD PRIMARY KEY (`idCuestionarioRespuesta`);

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`idEjercicios`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indices de la tabla `opcionesmenu`
--
ALTER TABLE `opcionesmenu`
  ADD PRIMARY KEY (`idOpcionesMenu`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`idpreguntas`),
  ADD KEY `idtipo_cuestionario_fk` (`idtipocuestionario`);

--
-- Indices de la tabla `problemas_usuarios`
--
ALTER TABLE `problemas_usuarios`
  ADD PRIMARY KEY (`idproblemas_usuarios`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`idrespuestas`),
  ADD KEY `idpreguntas` (`idpreguntas`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `rolesopcionesmenu`
--
ALTER TABLE `rolesopcionesmenu`
  ADD PRIMARY KEY (`idRolesOpcionesMenu`),
  ADD KEY `rolesopcionesmenu_ibfk_1` (`idRol`),
  ADD KEY `rolesopcionesmenu_ibfk_2` (`idOpcionesMenu`);

--
-- Indices de la tabla `rutinas_ejercicios`
--
ALTER TABLE `rutinas_ejercicios`
  ADD PRIMARY KEY (`idRutinas_ejercicios`);

--
-- Indices de la tabla `tipo_cuestionario`
--
ALTER TABLE `tipo_cuestionario`
  ADD PRIMARY KEY (`idtipo_cuestionario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idpersona_fk` (`idpersona`);

--
-- Indices de la tabla `usuariosroles`
--
ALTER TABLE `usuariosroles`
  ADD PRIMARY KEY (`idusuariosRoles`),
  ADD KEY `usuariosroles_ibfk_1` (`idUsuario`),
  ADD KEY `usuariosroles_ibfk_2` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuestionario_respuesta`
--
ALTER TABLE `cuestionario_respuesta`
  MODIFY `idCuestionarioRespuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `idEjercicios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `opcionesmenu`
--
ALTER TABLE `opcionesmenu`
  MODIFY `idOpcionesMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idpreguntas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `problemas_usuarios`
--
ALTER TABLE `problemas_usuarios`
  MODIFY `idproblemas_usuarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `idrespuestas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rolesopcionesmenu`
--
ALTER TABLE `rolesopcionesmenu`
  MODIFY `idRolesOpcionesMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rutinas_ejercicios`
--
ALTER TABLE `rutinas_ejercicios`
  MODIFY `idRutinas_ejercicios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_cuestionario`
--
ALTER TABLE `tipo_cuestionario`
  MODIFY `idtipo_cuestionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuariosroles`
--
ALTER TABLE `usuariosroles`
  MODIFY `idusuariosRoles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `idtipo_cuestionario_fk` FOREIGN KEY (`idtipocuestionario`) REFERENCES `tipo_cuestionario` (`idtipo_cuestionario`);

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `idpreguntas` FOREIGN KEY (`idpreguntas`) REFERENCES `preguntas` (`idpreguntas`);

--
-- Filtros para la tabla `rolesopcionesmenu`
--
ALTER TABLE `rolesopcionesmenu`
  ADD CONSTRAINT `rolesopcionesmenu_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`),
  ADD CONSTRAINT `rolesopcionesmenu_ibfk_2` FOREIGN KEY (`idOpcionesMenu`) REFERENCES `opcionesmenu` (`idOpcionesMenu`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `idpersona_fk` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`);

--
-- Filtros para la tabla `usuariosroles`
--
ALTER TABLE `usuariosroles`
  ADD CONSTRAINT `usuariosroles_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `usuariosroles_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

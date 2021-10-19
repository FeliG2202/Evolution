-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2021 a las 16:05:56
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rolesusuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionariorespuesta`
--

CREATE TABLE `cuestionariorespuesta` (
  `idCuestionarioRespuesta` int(11) NOT NULL,
  `CuestionariorRespuestaFecha` date NOT NULL DEFAULT current_timestamp(),
  `idUsuarios` int(11) NOT NULL,
  `idRespuestas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichaantropometrica`
--

CREATE TABLE `fichaantropometrica` (
  `idfichaantropometrica` int(11) NOT NULL,
  `fichas_antropometricas_fecha` date NOT NULL DEFAULT current_timestamp(),
  `fichaAntropometricaPeso` int(11) NOT NULL,
  `fichaAntropometricaAltura` int(11) NOT NULL,
  `fichaAntropometricaPectoral` double NOT NULL,
  `fichaAntropometricaAbdominal` double NOT NULL,
  `fichaAntropometricaMusloFrontal` double NOT NULL,
  `fichaAntropometricaBrazoRelajado` double NOT NULL,
  `fichaAntropometricaBrazoTensionado` double NOT NULL,
  `fichaAntropometricaAntebrazo` double NOT NULL,
  `fichaAntropometricaMuñeca` double NOT NULL,
  `fichaAntropometricaPecho` double NOT NULL,
  `fichaAntropometricaGluteos` double NOT NULL,
  `fichaAntropometricaMuslo` double NOT NULL,
  `idUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `idMenu` int(11) NOT NULL,
  `menuNombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `menuEstado` enum('true','false') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`idMenu`, `menuNombre`, `menuEstado`) VALUES
(1, 'Personas', 'true'),
(2, 'Usuarios', 'true'),
(3, 'Perfiles', 'true'),
(4, 'Menu', 'false'),
(10, 'Perfiles Usuario', 'true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionesmenu`
--

CREATE TABLE `opcionesmenu` (
  `idOpcionMenu` int(11) NOT NULL,
  `opcionMenuNombre` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `opcionMenuEnlace` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `opcionMenuEstado` enum('true','false') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'true',
  `idMenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `opcionesmenu`
--

INSERT INTO `opcionesmenu` (`idOpcionMenu`, `opcionMenuNombre`, `opcionMenuEnlace`, `opcionMenuEstado`, `idMenu`) VALUES
(6, 'registrar Opciones Menu', 'frmRegOpcionesMenu', 'true', 4),
(7, 'registrar Menu', 'frmRegMenu', 'true', 4),
(8, 'Consultar Menu', 'frmConMenu', 'true', 4),
(12, 'Registrar personas', 'frmRegPersona', 'true', 1),
(13, 'registrar Usuarios', 'frmRegUsuario', 'true', 2),
(14, 'consultar personas', 'FrmConPersona', 'true', 1),
(15, 'Consultar Usuarios', 'frmConUsuarios', 'true', 2),
(16, 'registrar perfiles', 'frmRegRol', 'true', 3),
(17, 'Registrar Rol Usuario', 'frmRegRolUsuario', 'true', 10),
(18, 'Asignar Menu Principal a Perfiles', 'frmRegRolMenu', 'true', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `idPersona` int(11) NOT NULL,
  `personaNombres` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `personaApellidos` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `personaGenero` enum('Femenino','Masculino') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `personaDocumento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idPersona`, `personaNombres`, `personaApellidos`, `personaGenero`, `personaDocumento`) VALUES
(1, 'Maria Antonieta d', 'De las Nieves ', 'Masculino', 123),
(2, 'Ubaldo Matildo', 'Fillol Rodriguez', 'Masculino', 12345),
(4, 'Maxilimiliano', 'Cortes Glindo', 'Masculino', 51351511),
(6, 'maria', 'cordova', 'Masculino', 23456),
(7, 'felipee', 'gavi', 'Masculino', 123456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `idPregunta` int(11) NOT NULL,
  `preguntaDetale` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `preguntaEstado` enum('true','false') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'true',
  `idTipoCuestionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `idRespuesta` int(11) NOT NULL,
  `respuestaDetalle` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `respuestaPuntaje` int(11) NOT NULL,
  `respuestaEstado` enum('true','false') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'true',
  `idPregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `rolNombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rolNombre`) VALUES
(5, 'Administrador'),
(8, 'Aprendiz'),
(7, 'Instructor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolesmenu`
--

CREATE TABLE `rolesmenu` (
  `idRolMenu` int(11) NOT NULL,
  `rolMenuEstado` enum('activo','Inactivo') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idMenu` int(11) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocuestionario`
--

CREATE TABLE `tipocuestionario` (
  `idTipoCuestionario` int(11) NOT NULL,
  `tipoCuestionarioDetalle` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipoCuestionarioEstado` enum('true','false') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuarioLogin` char(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuarioPassword` varchar(60) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuarioEstado` enum('Activo','Inactivo') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idPersonas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuarioLogin`, `usuarioPassword`, `usuarioEstado`, `idPersonas`) VALUES
(1, 'Maria sdssds', 'Maria123', 'Activo', 1),
(2, 'Ubaldo', 'Ubaldo123', 'Activo', 2),
(3, 'maxi', 'Maxi123', 'Activo', 4),
(6, 'Maria', '11323232', 'Activo', 1),
(12, 'Maxi1231', 'Maxi1232', 'Inactivo', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosroles`
--

CREATE TABLE `usuariosroles` (
  `idUsuarioRol` int(11) NOT NULL,
  `usuarioRolEstado` enum('true','false') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'true',
  `idUsuario` int(11) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuariosroles`
--

INSERT INTO `usuariosroles` (`idUsuarioRol`, `usuarioRolEstado`, `idUsuario`, `idRol`) VALUES
(13, 'true', 2, 5),
(14, 'true', 2, 7),
(15, 'true', 3, 5),
(16, 'true', 3, 7),
(17, 'true', 12, 5),
(18, 'true', 12, 7),
(27, 'true', 6, 8),
(29, 'true', 6, 5),
(30, 'true', 2, 8),
(32, 'true', 1, 5),
(33, 'true', 1, 8);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_rolesusuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_rolesusuarios` (
`idUsuarioRol` int(11)
,`idUsuario` int(11)
,`idRol` int(11)
,`usuarioRolEstado` enum('true','false')
,`usuarioLogin` char(15)
,`rolNombre` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_usuariosroles`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_usuariosroles` (
`idUsuarioRol` int(11)
,`usuarioRolEstado` enum('true','false')
,`idUsuario` int(11)
,`idRol` int(11)
,`usuarioLogin` char(15)
,`usuarioEstado` enum('Activo','Inactivo')
,`rolNombre` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `view_rolesusuarios`
--
DROP TABLE IF EXISTS `view_rolesusuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rolesusuarios`  AS SELECT `a`.`idUsuarioRol` AS `idUsuarioRol`, `a`.`idUsuario` AS `idUsuario`, `a`.`idRol` AS `idRol`, `a`.`usuarioRolEstado` AS `usuarioRolEstado`, `b`.`usuarioLogin` AS `usuarioLogin`, `c`.`rolNombre` AS `rolNombre` FROM ((`usuariosroles` `a` join `usuarios` `b`) join `roles` `c`) WHERE `a`.`idUsuario` = `b`.`idUsuario` AND `a`.`idRol` = `c`.`idRol` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_usuariosroles`
--
DROP TABLE IF EXISTS `view_usuariosroles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_usuariosroles`  AS SELECT `ur`.`idUsuarioRol` AS `idUsuarioRol`, `ur`.`usuarioRolEstado` AS `usuarioRolEstado`, `ur`.`idUsuario` AS `idUsuario`, `ur`.`idRol` AS `idRol`, `us`.`usuarioLogin` AS `usuarioLogin`, `us`.`usuarioEstado` AS `usuarioEstado`, `ro`.`rolNombre` AS `rolNombre` FROM ((`usuariosroles` `ur` join `usuarios` `us`) join `roles` `ro`) WHERE `ur`.`idUsuario` = `us`.`idUsuario` AND `ur`.`idRol` = `ro`.`idRol` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionariorespuesta`
--
ALTER TABLE `cuestionariorespuesta`
  ADD PRIMARY KEY (`idCuestionarioRespuesta`),
  ADD KEY `fk-idUsuarios-usuarios_idx` (`idUsuarios`),
  ADD KEY `fk-idRespuestas-respuestas_idx` (`idRespuestas`);

--
-- Indices de la tabla `fichaantropometrica`
--
ALTER TABLE `fichaantropometrica`
  ADD PRIMARY KEY (`idfichaantropometrica`),
  ADD KEY `fk-idUsuarios-usuario_idx` (`idUsuarios`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indices de la tabla `opcionesmenu`
--
ALTER TABLE `opcionesmenu`
  ADD PRIMARY KEY (`idOpcionMenu`),
  ADD KEY `FK-idMenu-opcionesmenu_idx` (`idMenu`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`idPregunta`),
  ADD KEY `fk-idTipoCuestionario-TipoCuestionario_idx` (`idTipoCuestionario`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`idRespuesta`),
  ADD KEY `fk-idPregunta-Pregunta_idx` (`idPregunta`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`),
  ADD UNIQUE KEY `rolNombre` (`rolNombre`);

--
-- Indices de la tabla `rolesmenu`
--
ALTER TABLE `rolesmenu`
  ADD PRIMARY KEY (`idRolMenu`),
  ADD KEY `fk_rolesxmenu_roles1_idx` (`idRol`),
  ADD KEY `fk-idMenu-RolesMenu_idx` (`idMenu`);

--
-- Indices de la tabla `tipocuestionario`
--
ALTER TABLE `tipocuestionario`
  ADD PRIMARY KEY (`idTipoCuestionario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `login` (`usuarioLogin`),
  ADD UNIQUE KEY `usuarioLogin_2` (`usuarioLogin`),
  ADD KEY `idPersonas` (`idPersonas`),
  ADD KEY `usuarioLogin` (`usuarioLogin`);

--
-- Indices de la tabla `usuariosroles`
--
ALTER TABLE `usuariosroles`
  ADD PRIMARY KEY (`idUsuarioRol`),
  ADD UNIQUE KEY `indx-unico-idrol-idusuario-usuarioroles` (`idUsuario`,`idRol`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuestionariorespuesta`
--
ALTER TABLE `cuestionariorespuesta`
  MODIFY `idCuestionarioRespuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fichaantropometrica`
--
ALTER TABLE `fichaantropometrica`
  MODIFY `idfichaantropometrica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `opcionesmenu`
--
ALTER TABLE `opcionesmenu`
  MODIFY `idOpcionMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipocuestionario`
--
ALTER TABLE `tipocuestionario`
  MODIFY `idTipoCuestionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuariosroles`
--
ALTER TABLE `usuariosroles`
  MODIFY `idUsuarioRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuestionariorespuesta`
--
ALTER TABLE `cuestionariorespuesta`
  ADD CONSTRAINT `fk-idRespuestas-respuestas` FOREIGN KEY (`idRespuestas`) REFERENCES `respuestas` (`idRespuesta`),
  ADD CONSTRAINT `fk-idUsuarios-usuarios` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `fichaantropometrica`
--
ALTER TABLE `fichaantropometrica`
  ADD CONSTRAINT `fk-idUsuarios-usuario` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `opcionesmenu`
--
ALTER TABLE `opcionesmenu`
  ADD CONSTRAINT `FK-idMenu-opcionesmenu` FOREIGN KEY (`idMenu`) REFERENCES `menus` (`idMenu`);

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `fk-idTipoCuestionario-TipoCuestionario` FOREIGN KEY (`idTipoCuestionario`) REFERENCES `tipocuestionario` (`idTipoCuestionario`);

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `fk-idPregunta-Pregunta` FOREIGN KEY (`idPregunta`) REFERENCES `preguntas` (`idPregunta`);

--
-- Filtros para la tabla `rolesmenu`
--
ALTER TABLE `rolesmenu`
  ADD CONSTRAINT `fk-idMenu-RolesMenu` FOREIGN KEY (`idMenu`) REFERENCES `menus` (`idMenu`),
  ADD CONSTRAINT `fk-idRol-RolesMenu` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk-idPersona-usuarios` FOREIGN KEY (`idPersonas`) REFERENCES `personas` (`idPersona`);

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

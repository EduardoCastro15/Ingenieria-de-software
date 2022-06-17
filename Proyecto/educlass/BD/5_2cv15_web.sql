-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 07-01-2022 a las 11:56:46
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `5_2cv15_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `ID_act` int(15) NOT NULL,
  `Boleta` int(10) NOT NULL,
  `no_empleado` int(10) NOT NULL,
  `ID_gpos` int(10) NOT NULL,
  `ID_bloque` int(1) NOT NULL,
  `ID_tema` int(2) NOT NULL,
  `Fecha_inicio` date NOT NULL,
  `Fecha_fin` date NOT NULL,
  `desc_act` text NOT NULL,
  `Calificacion` int(2) NOT NULL,
  `Comentarios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque_3`
--

CREATE TABLE `bloque_3` (
  `ID_bloq` int(1) NOT NULL,
  `desc_bloq` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bloque_3`
--

INSERT INTO `bloque_3` (`ID_bloq`, `desc_bloq`) VALUES
(3, 'Bloque 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_gpos`
--

CREATE TABLE `cat_gpos` (
  `ID_gpos` int(10) NOT NULL,
  `desc_gpos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_gpos`
--

INSERT INTO `cat_gpos` (`ID_gpos`, `desc_gpos`) VALUES
(1, '2cv15'),
(6, '1cv2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_materiales`
--

CREATE TABLE `cat_materiales` (
  `ID_tipoM` int(10) NOT NULL,
  `nom_material` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_materiales`
--

INSERT INTO `cat_materiales` (`ID_tipoM`, `nom_material`) VALUES
(3, 'Actividad en linea'),
(4, 'Evaluacion'),
(2, 'Impresion'),
(5, 'Libro'),
(1, 'Video');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_roles`
--

CREATE TABLE `cat_roles` (
  `ID_rol` char(1) NOT NULL,
  `desc_rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_roles`
--

INSERT INTO `cat_roles` (`ID_rol`, `desc_rol`) VALUES
('A', 'Administrador'),
('E', 'Alumno'),
('P', 'Profesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_tema`
--

CREATE TABLE `cat_tema` (
  `ID_bloq` int(1) NOT NULL,
  `ID_tema` int(2) NOT NULL,
  `desc_tema` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_tema`
--

INSERT INTO `cat_tema` (`ID_bloq`, `ID_tema`, `desc_tema`) VALUES
(3, 1, 'Otra vez 100.'),
(3, 2, 'Más sobre el peso.'),
(3, 3, 'Secuencia de sucesos en el tiempo: día, semana y mes.'),
(3, 4, 'Estrategias de suma y resta.'),
(3, 5, 'Mosaicos y configuraciones geometricas. '),
(3, 6, 'Más sobre las longitudes.'),
(3, 7, 'Figuras en cuerpos geométricos.'),
(3, 8, 'Más de capacidad.'),
(3, 9, 'Cooperativa de manteles.'),
(3, 10, 'Evaluación.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `ID_citas` int(15) NOT NULL,
  `ID_gpos` int(10) NOT NULL,
  `boleta` int(10) NOT NULL,
  `no_empleado` int(10) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`ID_citas`, `ID_gpos`, `boleta`, `no_empleado`, `fecha`) VALUES
(1, 1, 2016630534, 2019630500, '2022-01-07 10:00:00'),
(2, 1, 2016630534, 2019630500, '2022-01-06 04:34:16'),
(3, 1, 2016630534, 2019630500, '2022-01-13 00:39:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_admin`
--

CREATE TABLE `datos_admin` (
  `Nom_adm` varchar(30) NOT NULL,
  `ApP_adm` varchar(30) NOT NULL,
  `ApM_adm` varchar(30) NOT NULL,
  `clave` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_admin`
--

INSERT INTO `datos_admin` (`Nom_adm`, `ApP_adm`, `ApM_adm`, `clave`) VALUES
('Alan', 'Montero', 'Mireles', 2019630534),
('Alan', 'Mireles', 'Montero', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_alumno`
--

CREATE TABLE `datos_alumno` (
  `Nom_alum` varchar(30) NOT NULL,
  `ApP_alum` varchar(30) NOT NULL,
  `ApM_alumn` varchar(30) NOT NULL,
  `Boleta` int(10) NOT NULL,
  `Correo_altU` varchar(90) NOT NULL,
  `telefono` int(30) NOT NULL,
  `nom_tutor` varchar(230) NOT NULL,
  `tutor_tel` int(30) NOT NULL,
  `ID_gpo` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_alumno`
--

INSERT INTO `datos_alumno` (`Nom_alum`, `ApP_alum`, `ApM_alumn`, `Boleta`, `Correo_altU`, `telefono`, `nom_tutor`, `tutor_tel`, `ID_gpo`, `status`) VALUES
('Alan', 'Mont', 'M', 2016630534, 'alanA@mail.com', 1022552250, 'Mcl', 1042552250, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_prof`
--

CREATE TABLE `datos_prof` (
  `Nomr_prof` varchar(30) NOT NULL,
  `ApP_prof` varchar(30) NOT NULL,
  `ApM_prof` varchar(30) NOT NULL,
  `no_empleado` int(10) NOT NULL,
  `correo_altU` varchar(30) NOT NULL,
  `ID_gpos` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_prof`
--

INSERT INTO `datos_prof` (`Nomr_prof`, `ApP_prof`, `ApM_prof`, `no_empleado`, `correo_altU`, `ID_gpos`, `status`) VALUES
('Jorge', 'Campa', 'Zam', 1111111111, 'jcz2@mail.com', 6, 1),
('Gab', 'Lop', 'Ruz', 2019630500, 'alterp@mail.com', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `ID_mat` int(15) NOT NULL,
  `ID_tipoM` int(10) NOT NULL,
  `Fecha_carga` date NOT NULL,
  `desc_mat` text NOT NULL,
  `no_empleado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`ID_mat`, `ID_tipoM`, `Fecha_carga`, `desc_mat`, `no_empleado`) VALUES
(1, 1, '2022-01-03', 'https://www.youtube.com/', 2019630500),
(2, 2, '2022-01-02', 'https://d20ohkaloyme4g.cloudfront.net/img/document_thumbnails/241b36f95c032b1aa1dceb26447d340f/thumb_1200_1553.png', 2019630500),
(3, 3, '2022-01-04', 'https://www.google.com/intl/es_mx/forms/about/', 2019630500),
(4, 4, '2022-01-03', 'https://www.google.com/intl/es_mx/docs/about/', 2019630500),
(5, 5, '2022-01-03', 'https://libros.conaliteg.gob.mx/2021/P1MAA.htm', 2019630500),
(7, 1, '2022-01-03', 'google.com', 1111111111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progreso_parcial_alumno`
--

CREATE TABLE `progreso_parcial_alumno` (
  `ID_usuAlm` int(10) NOT NULL,
  `Prom_calf` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `progreso_parcial_alumno`
--

INSERT INTO `progreso_parcial_alumno` (`ID_usuAlm`, `Prom_calf`) VALUES
(2016630534, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte`
--

CREATE TABLE `soporte` (
  `ID_sop` int(10) NOT NULL,
  `nom_sop` text NOT NULL,
  `correo_sop` text NOT NULL,
  `asunto_sop` text NOT NULL,
  `usu_sop` varchar(30) NOT NULL,
  `desc_sop` text NOT NULL,
  `status_sop` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `soporte`
--

INSERT INTO `soporte` (`ID_sop`, `nom_sop`, `correo_sop`, `asunto_sop`, `usu_sop`, `desc_sop`, `status_sop`) VALUES
(1, 'Ricardo H', 'muestra@mail.com', 'Error Boleta', 'Ninguno', 'Dice ya registrado', 1),
(2, 'Profesor Veg', 'veg@mail.com', 'Ingreso', 'Ninguno', 'No me deja registrar', 1),
(3, 'Alan Montero', 'alan@mail.com', 'Prueba', 'Ninguno', 'Prueba Reg', 1),
(5, 'ruben m', 'teacher@gmail.com', 'Prueba', 'Administrador', 'Prueba 3 de soporte', 1),
(6, 'AlanMontM', 'student@gmail.com', 'Prueba', 'Alumno', 'Registro desde estudiante', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_usu` int(15) NOT NULL,
  `ID_rol` char(1) NOT NULL,
  `clave_usuario` int(10) NOT NULL,
  `correo_usuario` varchar(90) NOT NULL,
  `pass_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_usu`, `ID_rol`, `clave_usuario`, `correo_usuario`, `pass_usuario`) VALUES
(1, 'A', 2019630534, 'alanmont@gmail.com', '123'),
(2, 'P', 2019630500, 'teacher@gmail.com', 'anzm'),
(3, 'E', 2016630534, 'student@gmail.com', '1234'),
(19, 'A', 2147483647, 'ap90@mail.com', '123'),
(21, 'P', 1111111111, 'jcz@mail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`ID_act`),
  ADD KEY `Boleta` (`Boleta`,`no_empleado`,`ID_gpos`,`ID_bloque`,`ID_tema`),
  ADD KEY `no_empleado` (`no_empleado`),
  ADD KEY `ID_gpos` (`ID_gpos`),
  ADD KEY `ID_bloque` (`ID_bloque`),
  ADD KEY `ID_tema` (`ID_tema`);

--
-- Indices de la tabla `bloque_3`
--
ALTER TABLE `bloque_3`
  ADD PRIMARY KEY (`ID_bloq`);

--
-- Indices de la tabla `cat_gpos`
--
ALTER TABLE `cat_gpos`
  ADD PRIMARY KEY (`ID_gpos`);

--
-- Indices de la tabla `cat_materiales`
--
ALTER TABLE `cat_materiales`
  ADD PRIMARY KEY (`ID_tipoM`),
  ADD KEY `nom_material` (`nom_material`);

--
-- Indices de la tabla `cat_roles`
--
ALTER TABLE `cat_roles`
  ADD PRIMARY KEY (`ID_rol`);

--
-- Indices de la tabla `cat_tema`
--
ALTER TABLE `cat_tema`
  ADD PRIMARY KEY (`ID_tema`),
  ADD KEY `ID_bloq` (`ID_bloq`) USING BTREE;

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`ID_citas`),
  ADD KEY `ID_gpos` (`ID_gpos`),
  ADD KEY `boleta` (`boleta`,`no_empleado`),
  ADD KEY `no_empleado` (`no_empleado`);

--
-- Indices de la tabla `datos_admin`
--
ALTER TABLE `datos_admin`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `datos_alumno`
--
ALTER TABLE `datos_alumno`
  ADD PRIMARY KEY (`Boleta`),
  ADD KEY `ID_gpo` (`ID_gpo`);

--
-- Indices de la tabla `datos_prof`
--
ALTER TABLE `datos_prof`
  ADD PRIMARY KEY (`no_empleado`),
  ADD KEY `ID_gpos` (`ID_gpos`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`ID_mat`),
  ADD KEY `no_empleado` (`no_empleado`),
  ADD KEY `ID_tipoM` (`ID_tipoM`);

--
-- Indices de la tabla `progreso_parcial_alumno`
--
ALTER TABLE `progreso_parcial_alumno`
  ADD PRIMARY KEY (`ID_usuAlm`);

--
-- Indices de la tabla `soporte`
--
ALTER TABLE `soporte`
  ADD PRIMARY KEY (`ID_sop`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usu`),
  ADD UNIQUE KEY `clave_usuario` (`clave_usuario`),
  ADD KEY `ID_rol` (`ID_rol`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_gpos`
--
ALTER TABLE `cat_gpos`
  MODIFY `ID_gpos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cat_tema`
--
ALTER TABLE `cat_tema`
  MODIFY `ID_tema` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `ID_citas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `ID_mat` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `soporte`
--
ALTER TABLE `soporte`
  MODIFY `ID_sop` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usu` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`no_empleado`) REFERENCES `datos_prof` (`no_empleado`),
  ADD CONSTRAINT `actividades_ibfk_2` FOREIGN KEY (`Boleta`) REFERENCES `datos_alumno` (`Boleta`),
  ADD CONSTRAINT `actividades_ibfk_3` FOREIGN KEY (`ID_gpos`) REFERENCES `cat_gpos` (`ID_gpos`),
  ADD CONSTRAINT `actividades_ibfk_4` FOREIGN KEY (`ID_bloque`) REFERENCES `bloque_3` (`ID_bloq`),
  ADD CONSTRAINT `actividades_ibfk_5` FOREIGN KEY (`ID_tema`) REFERENCES `cat_tema` (`ID_tema`);

--
-- Filtros para la tabla `cat_tema`
--
ALTER TABLE `cat_tema`
  ADD CONSTRAINT `cat_tema_ibfk_1` FOREIGN KEY (`ID_bloq`) REFERENCES `bloque_3` (`ID_bloq`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`ID_gpos`) REFERENCES `cat_gpos` (`ID_gpos`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`boleta`) REFERENCES `datos_alumno` (`Boleta`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`no_empleado`) REFERENCES `datos_prof` (`no_empleado`);

--
-- Filtros para la tabla `datos_admin`
--
ALTER TABLE `datos_admin`
  ADD CONSTRAINT `datos_admin_ibfk_1` FOREIGN KEY (`clave`) REFERENCES `usuario` (`clave_usuario`);

--
-- Filtros para la tabla `datos_alumno`
--
ALTER TABLE `datos_alumno`
  ADD CONSTRAINT `datos_alumno_ibfk_1` FOREIGN KEY (`Boleta`) REFERENCES `usuario` (`clave_usuario`),
  ADD CONSTRAINT `datos_alumno_ibfk_2` FOREIGN KEY (`ID_gpo`) REFERENCES `cat_gpos` (`ID_gpos`);

--
-- Filtros para la tabla `datos_prof`
--
ALTER TABLE `datos_prof`
  ADD CONSTRAINT `datos_prof_ibfk_1` FOREIGN KEY (`no_empleado`) REFERENCES `usuario` (`clave_usuario`),
  ADD CONSTRAINT `datos_prof_ibfk_2` FOREIGN KEY (`ID_gpos`) REFERENCES `cat_gpos` (`ID_gpos`);

--
-- Filtros para la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD CONSTRAINT `materiales_ibfk_1` FOREIGN KEY (`no_empleado`) REFERENCES `datos_prof` (`no_empleado`),
  ADD CONSTRAINT `materiales_ibfk_2` FOREIGN KEY (`ID_tipoM`) REFERENCES `cat_materiales` (`ID_tipoM`);

--
-- Filtros para la tabla `progreso_parcial_alumno`
--
ALTER TABLE `progreso_parcial_alumno`
  ADD CONSTRAINT `progreso_parcial_alumno_ibfk_1` FOREIGN KEY (`ID_usuAlm`) REFERENCES `datos_alumno` (`Boleta`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_rol`) REFERENCES `cat_roles` (`ID_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

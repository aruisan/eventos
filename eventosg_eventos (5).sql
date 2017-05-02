-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2017 a las 00:52:57
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventosg_eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_actividad` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `id_categoria` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_actividad`, `nombre`, `id_categoria`) VALUES
(1, 'REINADO NACIONAL DEL TURISMO', 1),
(2, 'REINADO POPULAR SEÑORITA GIRARDOT', 1),
(3, 'REINADO VEREDAL', 1),
(4, 'REINADO DEL ADULTO MAYOR', 1),
(5, 'REINADO LGTBI', 1),
(6, 'CLASICA CICLISTICA CIUDAD DE GIRARDOT', 1),
(7, 'CARRERA ATLETICA CIUDAD DE GIRARDOT', 1),
(8, 'JUEGOS CAMPESINOS', 1),
(9, 'JUEGOS INTERCOLEGIALES', 1),
(10, 'JUEGOS DEPORTIVOS FUNCIONARIOS PUBLICOS', 1),
(11, 'JUEGOS DEPORTIVOS MUNICIPALES', 1),
(12, 'JUEGOS COMUNALES GIRARDOT', 1),
(13, 'TORNEO DE BALONCESTO CIUDAD DE GIRARDOT', 1),
(14, 'TORNEO DE PONY FUTBOL', 1),
(15, 'OLIMPIADAS DEL ADULTO MAYOR', 1),
(16, 'ENCUENTRO DEPORTES NAUTICOS', 1),
(17, 'FESTIVAL DE VIENTO Y COMETAS', 1),
(18, 'FERIA EXPOSICION GRADO A', 1),
(19, 'FERIA EQUINA GRADO B', 1),
(20, 'CABALGATA ECOLOGICA', 1),
(21, 'CABALGATA CIUDAD DE GIRARDOT', 1),
(22, 'CELEBRACION DEL CAMPESINO', 1),
(23, 'MUESTRA ARTESANAL', 1),
(24, 'MUESTRA REGIONAL DE ARTES PLASTICAS', 1),
(25, 'FESTIVAS GASTRONOMICO', 1),
(26, 'MITOS', 1),
(27, 'SEMANA SANTA (TURISTICA Y RELIGIOSA)', 1),
(28, 'SEMANA CULTURAL', 1),
(29, 'SEMANA DEL TEATRO', 1),
(30, 'FESTIVAL DE LEYENDAS', 1),
(31, 'FESTIVAL MUSICAL URBANA', 1),
(32, 'FESTIVAL RAMON BUENO', 1),
(33, 'FESTIVAL NAVIDEÑO', 1),
(34, 'FERIA ANATO', 1),
(35, 'DIA DEL MAESTRO', 1),
(36, 'DIA DE LA NIÑEZ Y LA RECREACION', 1),
(37, 'DIA DEL SERVIDOR PUBLICO', 1),
(38, 'DIA DEL DIRECTIVO DOCENTE', 1),
(39, 'DIA DEL AGUA', 1),
(40, 'DIA DEL ARBOL', 1),
(41, 'DIA DEL MEDIO AMBIENTE', 1),
(42, 'DIA DE LA FAMILIA', 1),
(43, 'DIA DE LA UVENTUD Y SEMANA ANDINA', 1),
(44, 'DIA DEL ADULTO MAYOR', 1),
(45, 'DIA DE LA MUJER', 1),
(46, 'DIA DE LA MADRE', 1),
(47, 'DIA DEL PERIODISTA', 1),
(48, 'DIA DE LA INDEPENDENCIA', 1),
(49, 'DIA DE LA SECRETARIA', 1),
(50, 'DIA VICTIMAS DEL CONFLICTO', 1),
(51, 'FORO EDUCATIVO MUNICIPAL', 1),
(52, 'RENDICION DE CUENTAS', 1),
(53, 'RUEDA DE NEGOCIOS', 1),
(54, 'CUMPLEAÑOS DE GIRARDOT', 1),
(55, 'CONVERSACION ESCNNA', 1),
(56, 'CONGRESO DEL TURISMO', 1),
(57, 'FORMACION DE LIDERAZGO SOCIAL', 1),
(58, 'MUJERES EMPRENDEDORAS', 1),
(59, 'POLITICAS PUBLICAS', 1),
(60, 'CAPACITACION HOTELEROS', 1),
(61, 'CAPACITACION COMERCIANTES', 1),
(62, 'CAPACITACION FUNCIONARIOS', 1),
(63, 'CAPACITACION BPM', 1),
(64, 'CAPACITACION TAXISTAS', 1),
(65, 'CAPACITACION CAFETERIAS Y BARES', 1),
(66, 'CAPACITACION DE EMPRENDEDORES', 1),
(67, 'NUEVO CODIGO DE POLICIA (CIUDADANOS)', 3),
(68, 'NUEVO CODIGO DE POLICIA (FUNCIONARIOS)', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'EVENTOS'),
(2, 'FOROS'),
(3, 'CAPACITACIONES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conteo_evento`
--

CREATE TABLE `conteo_evento` (
  `id_conteo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `conteo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conteo_evento`
--

INSERT INTO `conteo_evento` (`id_conteo`, `id_usuario`, `id_evento`, `conteo`) VALUES
(1, 1, 6, 1),
(2, 0, 0, 1),
(3, 1, 5, 1),
(4, 3, 5, 1),
(5, 3, 7, 1),
(6, 1, 7, 1),
(7, 3, 6, 1),
(8, 2, 5, 1),
(9, 2, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `ff_inicio` datetime DEFAULT NULL,
  `ff_final` datetime DEFAULT NULL,
  `id_actividad` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` longblob NOT NULL,
  `activo` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id_fotoso` int(11) NOT NULL,
  `archivo` longblob,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE `talleres` (
  `id_taller` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `lugar` varchar(120) DEFAULT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`id_taller`, `nombre`, `fecha`, `lugar`, `id_evento`) VALUES
(1, 'introduccion codigo de policia', '2017-04-28 08:21:20', 'HOTEL TOCAREMA', 5),
(2, 'cuantos codigos reglamentarios ahi', '2017-04-30 02:12:04', 'HOTEL BACHUE', 5),
(3, '¿para quienes son?', '2018-04-20 15:00:00', 'biblioteca municipal (girardot)', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `num_dc` varchar(20) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `celular` bigint(11) NOT NULL,
  `nacimiento` date DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `tipo` varchar(8) NOT NULL,
  `clave` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `num_dc`, `email`, `celular`, `nacimiento`, `sexo`, `tipo`, `clave`) VALUES
(1, 'oskr amortegui', '1108452824', 'oskr@gmail.com', 3133424512, '1987-09-15', 'M', 'NATURAL', '12345678'),
(2, 'aurora garcia ', '1070405236', 'aurora@gmail.com', 3133424512, '1987-09-15', 'M', 'NATURAL', '12345678'),
(3, 'oscar', '1108452824', 'oskrjag@gmail.com', 3133424512, '1987-09-15', 'M', 'NATURAL', '11223344');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `conteo_evento`
--
ALTER TABLE `conteo_evento`
  ADD PRIMARY KEY (`id_conteo`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `fk_evento_actividades1_idx` (`id_actividad`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_fotoso`),
  ADD KEY `fk_fotos_evento_idx` (`id_evento`);

--
-- Indices de la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`id_taller`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `conteo_evento`
--
ALTER TABLE `conteo_evento`
  MODIFY `id_conteo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_fotoso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id_taller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `fk_evento_actividades1` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fk_fotos_evento` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

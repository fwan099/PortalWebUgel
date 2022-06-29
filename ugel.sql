-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2022 a las 23:46:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ugel`
--
-- FREDDY HU
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicados`
--

CREATE TABLE `comunicados` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `fecha` date NOT NULL,
  `documento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comunicados`
--

INSERT INTO `comunicados` (`id`, `titulo`, `fecha`, `documento`) VALUES
(25, 'COPANI OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-05-30', 'Vistas/files/comunicados/C345.pdf'),
(26, 'OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-05-31', 'Vistas/files/comunicados/C511.pdf'),
(28, 'OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-01', 'Vistas/files/comunicados/C769.pdf'),
(29, 'OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-02', 'Vistas/files/comunicados/C895.pdf'),
(30, 'OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-03', 'Vistas/files/comunicados/C768.pdf'),
(31, 'OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-04', 'Vistas/files/comunicados/C464.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria_auxiliar`
--

CREATE TABLE `convocatoria_auxiliar` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `bases` text NOT NULL,
  `cv1` text NOT NULL,
  `reclamos` text NOT NULL,
  `cv2` text NOT NULL,
  `entrevista` text NOT NULL,
  `final` text NOT NULL,
  `estado` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `convocatoria_auxiliar`
--

INSERT INTO `convocatoria_auxiliar` (`id`, `titulo`, `bases`, `cv1`, `reclamos`, `cv2`, `entrevista`, `final`, `estado`, `fecha`) VALUES
(3, 'TERCERA CONVOCATORIA PARA ESPECIALISTA DE RECURSOS HUMANOS – CAS N°. 016-UGEL-YUNGUYO', 'Vistas/files/convocatoriasauxiliar/C927.pdf', '', '', '', '', '', 'Vigente', '2022-06-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria_cap`
--

CREATE TABLE `convocatoria_cap` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `bases` text NOT NULL,
  `cv1` text NOT NULL,
  `reclamos` text NOT NULL,
  `cv2` text NOT NULL,
  `entrevista` text NOT NULL,
  `final` text NOT NULL,
  `estado` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `convocatoria_cap`
--

INSERT INTO `convocatoria_cap` (`id`, `titulo`, `bases`, `cv1`, `reclamos`, `cv2`, `entrevista`, `final`, `estado`, `fecha`) VALUES
(1, 'CAP FREDDY CONVOCATORIASSS', 'Vistas/files/convocatoriascap/C726.pdf', 'Vistas/files/convocatoriascap/C189.pdf', '', '', '', '', 'Vigente', '2022-01-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria_cas`
--

CREATE TABLE `convocatoria_cas` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `bases` text NOT NULL,
  `cv1` text NOT NULL,
  `reclamos` text NOT NULL,
  `cv2` text NOT NULL,
  `entrevista` text NOT NULL,
  `final` text NOT NULL,
  `estado` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `convocatoria_cas`
--

INSERT INTO `convocatoria_cas` (`id`, `titulo`, `bases`, `cv1`, `reclamos`, `cv2`, `entrevista`, `final`, `estado`, `fecha`) VALUES
(30, '	 TERCERA CONVOCATORIA PARA ESPECIALISTA DE RECURSOS HUMANOS – CAS N°. 016-UGEL-YUNGUYO', 'Vistas/files/convocatoriascas/C902.pdf', '', '', '', '', '', 'Vigente', '2022-06-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria_directivo`
--

CREATE TABLE `convocatoria_directivo` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `bases` text NOT NULL,
  `cv1` text NOT NULL,
  `reclamos` text NOT NULL,
  `cv2` text NOT NULL,
  `entrevista` text NOT NULL,
  `final` text NOT NULL,
  `estado` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `convocatoria_directivo`
--

INSERT INTO `convocatoria_directivo` (`id`, `titulo`, `bases`, `cv1`, `reclamos`, `cv2`, `entrevista`, `final`, `estado`, `fecha`) VALUES
(2, 'CONVOCATORIA DIRECTIVO PRUEBA v', 'Vistas/files/convocatoriasdirectivo/C259.pdf', '', '', '', '', '', 'Concluido', '2022-01-25'),
(3, 'DIRECTIVOS PRUEBA', 'Vistas/files/convocatoriasdirectivo/C678.pdf', 'Vistas/files/convocatoriasdirectivo/C487.pdf', 'Vistas/files/convocatoriasdirectivo/C816.pdf', '', '', '', 'Vigente', '2022-01-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria_docente`
--

CREATE TABLE `convocatoria_docente` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `bases` text NOT NULL,
  `cv1` text NOT NULL,
  `reclamos` text NOT NULL,
  `cv2` text NOT NULL,
  `entrevista` text NOT NULL,
  `final` text NOT NULL,
  `estado` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `convocatoria_docente`
--

INSERT INTO `convocatoria_docente` (`id`, `titulo`, `bases`, `cv1`, `reclamos`, `cv2`, `entrevista`, `final`, `estado`, `fecha`) VALUES
(13, 'TERCERA CONVOCATORIA PARA ESPECIALISTA DE RECURSOS HUMANOS  CAS N°. 016-UGEL-YUNGUYO', 'Vistas/files/convocatoriasdocente/C325.pdf', '', '', '', '', '', 'Vigente', '2022-06-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'prueba', 'dvsd344444444444', 'etce@gmail.com', '967444616', 'Vistas/img/jefeArea/N891.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones_a`
--

CREATE TABLE `funciones_a` (
  `id` int(11) NOT NULL,
  `funcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `funciones_a`
--

INSERT INTO `funciones_a` (`id`, `funcion`) VALUES
(1, 'administracion'),
(2, 'hola mundo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones_aj`
--

CREATE TABLE `funciones_aj` (
  `id` int(11) NOT NULL,
  `funcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `funciones_aj`
--

INSERT INTO `funciones_aj` (`id`, `funcion`) VALUES
(1, 'funciones de asesoria jurudica'),
(2, 'hgch');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones_gi`
--

CREATE TABLE `funciones_gi` (
  `id` int(11) NOT NULL,
  `funcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `funciones_gi`
--

INSERT INTO `funciones_gi` (`id`, `funcion`) VALUES
(1, 'gestion institucional funciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones_gp`
--

CREATE TABLE `funciones_gp` (
  `id` int(11) NOT NULL,
  `funcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `funciones_gp`
--

INSERT INTO `funciones_gp` (`id`, `funcion`) VALUES
(12, 'Orientar y supervisar la aplicación de la política y normatividad educativa nacional y regional, en materia de gestión institucional, en las instituciones y programas educativos de su ámbito territorial.'),
(13, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones_rh`
--

CREATE TABLE `funciones_rh` (
  `id` int(11) NOT NULL,
  `funcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `funciones_rh`
--

INSERT INTO `funciones_rh` (`id`, `funcion`) VALUES
(1, 'sxc'),
(2, 'dasdas'),
(3, 'ccccc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefesubarea_a`
--

CREATE TABLE `jefesubarea_a` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefesubarea_a`
--

INSERT INTO `jefesubarea_a` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'contabuliad', 'wegEQG', 'wegq', 'QFGQW', 'Vistas/img/jefeArea/N674.jpg'),
(2, 'tesoreria', 'wqfqw', 'qwfqw', 'qwfqwf', 'Vistas/img/jefeArea/N475.jpg'),
(3, 'remuneacion', 'fsasf', 'asfas', 'asfas', 'Vistas/img/jefeArea/N682.jpg'),
(4, 'abste', 'asfsf', 'asfas', 'asfas', 'Vistas/img/jefeArea/N237.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefesubarea_aj`
--

CREATE TABLE `jefesubarea_aj` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefesubarea_aj`
--

INSERT INTO `jefesubarea_aj` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'juridica', 'safa', 'asf', '989875789', 'Vistas/img/jefeArea/N116.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefesubarea_gi`
--

CREATE TABLE `jefesubarea_gi` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefesubarea_gi`
--

INSERT INTO `jefesubarea_gi` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'FREDDY WALTER HUAYNAPATA UCHARICO', '967444616', 'freddy@gmail.com', 'link', 'Vistas/img/jefeArea/N695.png'),
(2, 'MARIO', '86786', 'mario@gmail.com', 'regerggrergr', 'Vistas/img/jefeArea/N63.png'),
(3, 'MARIA', '4536346', 'sfasfa@', 'asfasaeg', 'Vistas/img/jefeArea/N109.png'),
(4, 'OFICIOA', 'asdvds', 'sadvdsv', 'sdvdvds', 'Vistas/img/jefeArea/N997.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefesubarea_gp`
--

CREATE TABLE `jefesubarea_gp` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefesubarea_gp`
--

INSERT INTO `jefesubarea_gp` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'ddddd', 'asfas', 'asfdas', 'asfasf', 'Vistas/img/jefeArea/N706.png'),
(2, 'asfasf', 'asfasf', 'asfas', 'asfas', 'Vistas/img/jefeArea/N636.png'),
(3, 'awhjujyt', 'ahyt6', 'tyyyyye', 'asfas', 'Vistas/img/jefeArea/N79.jpg'),
(4, 'sgerhew', 'egawg', 'QFAWG', 'Ags', 'Vistas/img/jefeArea/N336.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefesubarea_rh`
--

CREATE TABLE `jefesubarea_rh` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefesubarea_rh`
--

INSERT INTO `jefesubarea_rh` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'recursos humanos', 'efqweag', 'egaweg', 'ewage', 'Vistas/img/jefeArea/N674.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_a`
--

CREATE TABLE `jefe_a` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefe_a`
--

INSERT INTO `jefe_a` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'Guido Quispe Mamani', '923162638', 'quispe@gmail.com', '972832912', 'Vistas/img/jefeArea/N943.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_aj`
--

CREATE TABLE `jefe_aj` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefe_aj`
--

INSERT INTO `jefe_aj` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'Asesoria Juridica', '934434', 'sdfdsddd', 'https://wa.me/51967444616?text=(Le habla desde la pagina web UGEL Yunguyo).', 'Vistas/img/jefeArea/N777.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_gi`
--

CREATE TABLE `jefe_gi` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefe_gi`
--

INSERT INTO `jefe_gi` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'Gestion Institucional', '9999999999999', 'sdfdsaf@gmail.comm', '967444616', 'Vistas/img/jefeArea/N971.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_gp`
--

CREATE TABLE `jefe_gp` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefe_gp`
--

INSERT INTO `jefe_gp` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'Gestion pedagogica', 'sdasdas', 'asdasd', 'asdas', 'Vistas/img/jefeArea/N692.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_rh`
--

CREATE TABLE `jefe_rh` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `celular` text NOT NULL,
  `correo` text NOT NULL,
  `whatsapp` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefe_rh`
--

INSERT INTO `jefe_rh` (`id`, `nombres`, `celular`, `correo`, `whatsapp`, `foto`) VALUES
(1, 'Carlos Mamani Yujra', '94837283', 'carlos@gamil.com', '93748329', 'Vistas/img/jefeArea/N641.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `id` int(11) NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`id`, `mision`, `vision`, `imagen`) VALUES
(2, 'hola', 'munco', 'Vistas/img/nosotros/N231.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficios`
--

CREATE TABLE `oficios` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `fecha` date NOT NULL,
  `documento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oficios`
--

INSERT INTO `oficios` (`id`, `titulo`, `fecha`, `documento`) VALUES
(16, 'OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-03', 'Vistas/files/oficios/O220.pdf'),
(17, 'OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-03', 'Vistas/files/oficios/O789.pdf'),
(18, 'OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-03', 'Vistas/files/oficios/O559.pdf'),
(19, 'CPC MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-03', 'Vistas/files/oficios/O676.pdf'),
(20, 'OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-03', 'Vistas/files/oficios/O899.pdf'),
(21, 'OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-04', 'Vistas/files/oficios/O618.pdf'),
(22, '	OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-04', 'Vistas/files/oficios/O127.pdf'),
(23, '	OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-04', 'Vistas/files/oficios/O52.pdf'),
(24, '	OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-04', 'Vistas/files/oficios/O498.pdf'),
(25, '	OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-04', 'Vistas/files/oficios/O971.pdf'),
(26, '	OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO OFICIO MULTIPLE PARA PRUEBA DEL PORTAL WEB INSTITUCIONAL DE LA UGEL YUNGUYO', '2022-06-04', 'Vistas/files/oficios/O517.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `orden` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id`, `orden`, `imagen`) VALUES
(12, '1', 'Vistas/img/slide/S222.png'),
(13, '2', 'Vistas/img/slide/S14.png'),
(14, '3', 'Vistas/img/slide/S320.png'),
(15, '4', 'Vistas/img/slide/S45.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `foto` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `usuario`, `clave`, `foto`, `rol`) VALUES
(1, 'Freddy', 'Huaynapata Ucharico', 'ugeladmin', '12344321', 'Vistas/img/usuarios/U235png', 'Administrador'),
(10, 'Yoel Marcos', 'Chambilla Gutierrez', 'rh', '123', 'Vistas/img/usuarios/U187png', 'Jefe de Recursos Humanos'),
(12, 'Luis', 'Quispe Chura', 'gp', '123', 'Vistas/img/usuarios/U686jpg', 'Jefe de Gestion Pedagogica'),
(13, 'walter', 'eodon', 'a', '123', 'Vistas/img/usuarios/U400png', 'Jefe de Administracion'),
(14, 'vrfevfv', 'wdvdv', 'aj', '123', 'Vistas/img/usuarios/U835png', 'Jefe de Asesoria Juridica'),
(15, 'Yobana', 'Quispe Mamani', 'gi', '123', 'Vistas/img/usuarios/U935png', 'Jefe de Gestion Institucional');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convocatoria_auxiliar`
--
ALTER TABLE `convocatoria_auxiliar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convocatoria_cap`
--
ALTER TABLE `convocatoria_cap`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convocatoria_cas`
--
ALTER TABLE `convocatoria_cas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convocatoria_directivo`
--
ALTER TABLE `convocatoria_directivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convocatoria_docente`
--
ALTER TABLE `convocatoria_docente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `funciones_a`
--
ALTER TABLE `funciones_a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `funciones_aj`
--
ALTER TABLE `funciones_aj`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `funciones_gi`
--
ALTER TABLE `funciones_gi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `funciones_gp`
--
ALTER TABLE `funciones_gp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `funciones_rh`
--
ALTER TABLE `funciones_rh`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefesubarea_a`
--
ALTER TABLE `jefesubarea_a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefesubarea_aj`
--
ALTER TABLE `jefesubarea_aj`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefesubarea_gi`
--
ALTER TABLE `jefesubarea_gi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefesubarea_gp`
--
ALTER TABLE `jefesubarea_gp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefesubarea_rh`
--
ALTER TABLE `jefesubarea_rh`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefe_a`
--
ALTER TABLE `jefe_a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefe_aj`
--
ALTER TABLE `jefe_aj`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefe_gi`
--
ALTER TABLE `jefe_gi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefe_gp`
--
ALTER TABLE `jefe_gp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefe_rh`
--
ALTER TABLE `jefe_rh`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oficios`
--
ALTER TABLE `oficios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `convocatoria_auxiliar`
--
ALTER TABLE `convocatoria_auxiliar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `convocatoria_cap`
--
ALTER TABLE `convocatoria_cap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `convocatoria_cas`
--
ALTER TABLE `convocatoria_cas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `convocatoria_directivo`
--
ALTER TABLE `convocatoria_directivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `convocatoria_docente`
--
ALTER TABLE `convocatoria_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `funciones_a`
--
ALTER TABLE `funciones_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `funciones_aj`
--
ALTER TABLE `funciones_aj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `funciones_gi`
--
ALTER TABLE `funciones_gi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `funciones_gp`
--
ALTER TABLE `funciones_gp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `funciones_rh`
--
ALTER TABLE `funciones_rh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `jefesubarea_a`
--
ALTER TABLE `jefesubarea_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `jefesubarea_aj`
--
ALTER TABLE `jefesubarea_aj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jefesubarea_gi`
--
ALTER TABLE `jefesubarea_gi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `jefesubarea_gp`
--
ALTER TABLE `jefesubarea_gp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `jefesubarea_rh`
--
ALTER TABLE `jefesubarea_rh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jefe_a`
--
ALTER TABLE `jefe_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `jefe_aj`
--
ALTER TABLE `jefe_aj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jefe_gi`
--
ALTER TABLE `jefe_gi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jefe_gp`
--
ALTER TABLE `jefe_gp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jefe_rh`
--
ALTER TABLE `jefe_rh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oficios`
--
ALTER TABLE `oficios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

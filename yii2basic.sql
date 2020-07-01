-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2020 a las 22:42:38
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yii2basic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idAlumno` int(2) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `aPaterno` varchar(15) NOT NULL,
  `aMaterno` varchar(15) NOT NULL,
  `dia_nac` int(2) NOT NULL,
  `mes_nac` int(2) NOT NULL,
  `ano_nac` int(4) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_grupo` int(4) NOT NULL,
  `promedio` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idAlumno`, `nombre`, `aPaterno`, `aMaterno`, `dia_nac`, `mes_nac`, `ano_nac`, `sexo`, `rfc`, `status`, `id_grupo`, `promedio`) VALUES
(1, 'mauricio ', 'villanueva', 'olarra', 0, 0, 0, '', '', '', 0, '9'),
(2, 'dario', 'rodriguez', 'villanueva', 0, 0, 0, '', '', '', 0, '7'),
(3, 'marisa ', 'villanueva', 'corona', 0, 0, 0, '', '', '', 0, '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campus`
--

CREATE TABLE `campus` (
  `idCampus` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `calle` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `colonia` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `numero` int(6) NOT NULL,
  `cp` int(6) NOT NULL,
  `telefono` int(11) NOT NULL,
  `ciudad` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `campus`
--

INSERT INTO `campus` (`idCampus`, `nombre`, `calle`, `colonia`, `numero`, `cp`, `telefono`, `ciudad`, `estado`) VALUES
(1, 'Lazaro Cardenas', '', '', 0, 0, 0, '', ''),
(2, 'Ocolusen', '', '', 0, 0, 0, '', ''),
(3, 'Camelinas', '', '', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(3) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `id_formato` int(2) NOT NULL,
  `id_campus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `idDepartamento` int(10) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `IdCampus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`idDepartamento`, `nombre`, `descripcion`, `telefono`, `IdCampus`) VALUES
(1, 'TI', '', 0, 1),
(2, 'Recursos Humanos', '', 0, 2),
(3, 'Contabilidad', '', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_Docente` int(4) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `aPaterno` varchar(15) NOT NULL,
  `aMaterno` varchar(15) NOT NULL,
  `dia_nac` int(2) NOT NULL,
  `mes_nac` int(2) NOT NULL,
  `ano_nac` int(4) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `rfc` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `calle` varchar(20) NOT NULL,
  `num_calle` int(5) NOT NULL,
  `colonia` varchar(20) NOT NULL,
  `cp` int(6) NOT NULL,
  `id_Materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `id_formato` int(2) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(4) NOT NULL,
  `id parcial` int(2) NOT NULL,
  `salon` varchar(20) NOT NULL,
  `turno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `idPersona` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `aPaterno` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `aMaterno` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `dia_nac` int(2) NOT NULL,
  `mes_nac` int(2) NOT NULL,
  `ano_nac` int(2) NOT NULL,
  `sexo` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `rfc` varchar(13) COLLATE latin1_spanish_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `idDepartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`idPersona`, `nombre`, `aPaterno`, `aMaterno`, `dia_nac`, `mes_nac`, `ano_nac`, `sexo`, `rfc`, `status`, `idDepartamento`) VALUES
(1, 'Mauricio', 'Villaneuva', 'Olarra', 1, 12, 1996, 'Hombre', 'VIOM961201JC4', 'soltero', 1),
(2, 'oscar', 'Ayala', 'soto', 0, 0, 0, '', '', '', 2),
(3, 'Rodrigo', 'Vazquez', 'Torres', 0, 0, 0, '', '', '', 3),
(4, 'Maur', 'a', 'c', 1, 12, 1998, 'masculino', 'asdfghjkl', 'soltero', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idAlumno`),
  ADD KEY `grupo` (`id_grupo`);

--
-- Indices de la tabla `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`idCampus`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`),
  ADD UNIQUE KEY `id_formato` (`id_formato`),
  ADD UNIQUE KEY `id_campus` (`id_campus`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`idDepartamento`),
  ADD KEY `IdCampus` (`IdCampus`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_Docente`);

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`id_formato`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`idPersona`),
  ADD KEY `idDepartamento` (`idDepartamento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idAlumno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `campus`
--
ALTER TABLE `campus`
  MODIFY `idCampus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `idDepartamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_Docente` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formato`
--
ALTER TABLE `formato`
  MODIFY `id_formato` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`id_campus`) REFERENCES `campus` (`idCampus`),
  ADD CONSTRAINT `carrera_ibfk_2` FOREIGN KEY (`id_formato`) REFERENCES `formato` (`id_formato`);

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `departamentos_ibfk_1` FOREIGN KEY (`IdCampus`) REFERENCES `campus` (`idCampus`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamentos` (`idDepartamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

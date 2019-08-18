-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-08-2019 a las 05:49:29
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `piedradelcanada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidosUsuario` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `distancia` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `valorPagar` int(11) DEFAULT NULL,
  `correoElectronico` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipoIdentificacion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `numeroIdentificacion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `sexo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `departamento` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipoSangre` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `entidadSalud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tallaCamisa` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contactoEmergenciaNombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contactoEmergenciaTelefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estadoIncripcion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estadoKit` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombreUsuario`, `apellidosUsuario`, `distancia`, `valorPagar`, `correoElectronico`, `tipoIdentificacion`, `numeroIdentificacion`, `fechaNacimiento`, `sexo`, `telefono`, `pais`, `departamento`, `ciudad`, `tipoSangre`, `entidadSalud`, `tallaCamisa`, `contactoEmergenciaNombre`, `contactoEmergenciaTelefono`, `estadoIncripcion`, `estadoKit`) VALUES
(20, '', '', '10K', 60000, 'example@com.co', 'Tarjeta de Identidad', '212121212', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'pago', 'Sin entregar'),
(21, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '212121212', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(22, 'Carlos', 'Rubio', '21K', 70000, 'rubiogallegoc@gmail.com', 'Tarjeta de Identidad', '', NULL, 'Masculino', '315787213', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(23, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(24, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(25, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(26, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '12312312312', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(27, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '212121212', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(28, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(29, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(30, 'Jaiver Alexis', 'Balanta Gonzales', '10K', 60000, 'carlos@gmail.com', 'CÃ©dula de Ciudadania', '1112323232', NULL, 'Femenino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'A-', 'coomeva', 'S', '', '', 'registrado', 'Sin entregar'),
(31, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(32, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(33, 'Jaiver Alexis', 'Balanta Gonzales', '10K', 60000, 'carlos@gmail.com', 'Tarjeta de Identidad', '111111122', NULL, 'Femenino', '222222222', 'Colombia', 'Valle del Cauca', 'Palmira', 'A-', 'coomeva', 'S', '', '', 'registrado', 'Sin entregar'),
(34, 'Jaiver Alexis', 'Balanta Gonzales', '30K', 90000, 'carlos@gmail.com', 'Tarjeta de Identidad', '1111111', NULL, 'Femenino', '222222222', 'Colombia', 'Valle del Cauca', 'Palmira', 'A-', 'coomeva', 'S', '', '', 'registrado', 'Sin entregar'),
(35, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(36, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(37, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(38, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(39, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(40, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(41, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(42, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(43, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(44, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(45, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(46, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(47, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(48, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(49, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(50, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(51, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(52, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(53, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(54, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(55, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(56, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(57, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(58, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(59, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(60, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(61, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(62, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(63, 'aa', 'assssssssssssssssssss', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(64, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(65, '', '', '10K', 60000, '', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(66, 'Juan Manuel', 'Rubio GAllego', '10K', 60000, 'carlos@gmail.com', 'Tarjeta de Identidad', '', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(67, 'Juan Manuel', 'Rubio GAllego', '10K', 60000, 'carlos@gmail.com', 'CÃ©dula de Ciudadania', '1113687342', NULL, 'Femenino', '', '', '', '', 'A-', '', 'S', '', '', 'registrado', 'Sin entregar'),
(68, 'carlos', 'rubio', '21k', 90000, 'rubiogallegoc@gmail.com', 'CÃ©dula de Ciudadania', '1234', NULL, 'masculino', '3123123', 'colomba', 'dasdad', 'dasdasda', 'O+', 'dasdasda', 'l', '', NULL, 'registrado', 'Sin entregar'),
(69, 'Carlos ', 'Rubio ', '21k', 90000, 'rubiogallegoc@gmail.com', 'CÃ©dula de Ciudadania', '11321321', NULL, 'masculino', '3158772', 'Colombia ', 'Valle del Cauca ', 'Palmira ', 'A+', 'Coomeva ', 's', '', NULL, 'registrado', 'Sin entregar'),
(70, 'carlos', 'rubio', '10k', 90000, 'rubiogallegoc@gmail.com', 'CÃ©dula de Ciudadania', '1234', NULL, 'femenino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'A-', 'coomeva', 'l', '', NULL, 'registrado', 'Sin entregar'),
(71, 'carlos', 'rubio', '10k', 90000, 'rubiogallegoc@gmail.com', 'CÃ©dula de Ciudadania', '22222222', NULL, 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'B-', 'coomeva', 'xl', '', NULL, 'registrado', 'Sin entregar'),
(72, 'Jaiver Alexis', 'rubio', '21k', 90000, 'juan@gmail.com', 'CÃ©dula de Ciudadania', '74322', NULL, 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'O-', 'ccccscs', 'm', '', NULL, 'registrado', 'Sin entregar'),
(73, 'Jaiver Alexis', 'rubio', '21k', 90000, 'ejempl12121@gmail.com', 'Pasaporte', '78787800', NULL, 'masculino', '3123232', 'Colombia', 'Valle del Cauca', 'Palmira', 'A+', 'cccccc', 'm', '', NULL, 'registrado', 'Sin entregar'),
(74, 'Jaiver Alexis', 'Martinez Robledo', '21k', 90000, 'admin1111@example.com', 'CÃ©dula de Ciudadania', '312312313123', NULL, 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'A+', 'casas', 'l', '', NULL, 'registrado', 'Sin entregar'),
(75, 'carlos', 'dasdasdasd', '21k', 90000, 'rubiogallegoc@gmail.com', 'Pasaporte', '3123231231232313', '2019-08-15', 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'B-', 'coomeva', 'l', '', NULL, 'registrado', 'Sin entregar'),
(76, 'carlos', 'Martinez Robledo', '30k', 90000, 'admin@example.com', 'Tarjeta de Identidad', '3333333333333333332222222', '2019-08-05', 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'AB+', 'sssss', 'xl', '', NULL, 'registrado', 'Sin entregar'),
(77, 'Duvan andres', 'Pineda', '10k', 90000, 'duvan@example22.com', 'Tarjeta de Identidad', '1113786542', '2019-08-25', 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'O+', 'cccccccccccccccccccccccc', 'xl', '', NULL, 'registrado', 'Sin entregar'),
(78, 'carlos', 'rubio', '21k', 90000, 'carlos@gmail.com', 'CÃ©dula de Ciudadania', '23123123', '2019-08-03', 'femenino', '3157873181', 'Colombia', 'Valle de cauca', 'Palmira', 'AB-', 'coomeac', 'xl', '', NULL, 'registrado', 'Sin entregar'),
(79, 'jose', 'gallego', '10k', 90000, 'josegakel@hotmail.com', 'CÃ©dula de Ciudadania', '1234567789', '1972-08-24', 'masculino', '3191289428', 'Colombia', 'Valle del Cauca', 'Palmira', 'B+', 'cosmitet', 'm', 'dfksdfjkdsh', NULL, 'registrado', 'Sin entregar'),
(80, 'Juan Manuel', 'Rubio GAllego', '30k', 90000, 'juan3.4@hotmail.com', 'CÃ©dula de Ciudadania', '1113678977', '1996-03-04', 'masculino', '3158293271', 'Colombia', 'Valle del Cauca', 'Palmira', 'A+', 'Emssanar', 's', 'carlos rubio', NULL, 'registrado', 'Sin entregar'),
(81, 'Julano', 'De Tal', '10k', 90000, 'julanito@gmail.com', 'Pasaporte', '9876543', '1994-08-11', 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'AB-', 'coomeva', 'l', '', NULL, 'registrado', 'Sin entregar'),
(82, 'jaiver', 'martinez', '10k', NULL, 'jaiveraaa@gm.com', 'CÃ©dula de Ciudadania', '7567675', '2019-08-01', 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'B+', 'coomeva', 'l', '', NULL, 'registrado', 'Sin entregar'),
(83, 'juan andres', 'arara ocoro', '21K', 70000, 'ejemplossss@gm.com', 'CÃ©dula de Ciudadania', '4545454', '2019-08-13', 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'B-', 'coomeva', 'xl', '', NULL, 'registrado', 'Sin entregar'),
(84, 'Jaiver Alexis', 'Balanta Gonzales', '21K', 70000, 'rubiogallegoc@gmail.com', 'Tarjeta de Identidad', '1234323232', '2019-08-14', 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'B-', 'coomeva', 's', '', NULL, 'registrado', 'Sin entregar'),
(85, 'carlos', 'albertico', '10K', 60000, 'carlos@gmail.com', 'CÃ©dula de Ciudadania', '32313131', '2019-08-31', 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'B+', 'dsadasd', 'm', '', NULL, 'registrado', 'Sin entregar'),
(86, 'mayra', 'pineda', '30K', 90000, 'maypin@gmail.com', 'CÃ©dula de Ciudadania', '1136918977', '2019-08-31', 'femenino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'A+', 'coomeva', 'xs', 'juan', NULL, 'pago', 'Sin entregar'),
(87, 'carlos', 'Rubio GAllego', '21K', 70000, 'admin@example.com', 'CÃ©dula de Ciudadania', '212121', '2019-08-28', 'masculino', '3157873181', 'Colombia', 'Valle del Cauca', 'Palmira', 'A-', 'dsadasd', 'm', '', '', 'pago', 'Sin entregar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2015 a las 16:23:40
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `animals home`
--
CREATE DATABASE IF NOT EXISTS `animals home` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `animals home`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido_p` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido_m` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `direccion`, `telefono`) VALUES
('loas', 'loas', 'loas', 'loas', 'loas@gmail.com', 'cubiculo 104 a', '0'),
('dan', 'dan', 'dan', 'dan', 'dan@gmail.com', 'cubiculo 11 c', '0'),
('jane', 'jane', 'jane', 'jane', 'jane@gmail.com', 'cubiculo 11 d', '0'),
('pep', 'pep', 'pep', 'pep', 'pep@gmail.com', 'cubiculo 12 b', '0'),
('fed', 'fed', 'fed', 'fed', 'fed@hotmail.com', 'cubiculo 22 d', '0'),
('red', 'red', 'red', 'red', 'red@hotmail.com', 'planta baja edif 11 e', '0'),
('jess', 'jess', 'jess', 'jess', 'jess@gmail.com', 'cubiculo 102 f', '0'),
('ges', 'ges', 'ges', 'ges', 'ges@hotmail.com', 'cubito 104 c', '0'),
('das', 'das', 'das', 'das', 'das@gmail.com', 'cubito', '0'),
('ces', 'ces', 'ces', 'ces', 'ces@hotmail.com', 'cubo 104 f edif 104 d ', '0'),
('va', 'va', 'va', 'va', 'va@gmail.com', 'va', '0'),
('le', 'le', 'le', 'le', 'le@hotmail.com', 'cubito', 'l 1:00'),
('ke', 'ke', 'KE', 'KE', 'ke@hotmail.com', 'andador a lago num 20', '1111111111'),
('dxn', 'daniela', 'lopez', 'suarez', 'daniela@hotmail.com', 'andador a lago num 24', '2221234567'),
('angie', 'angelica', 'cabrera', 'ramos', 'angie@gmail.com', 'U.H. san bartolo edif a int i', '1111111111'),
('charly', 'carlos', 'perez', 'gomez', 'charly@hotmail.com', 'U.H.I. san pedro cholula num 2345 col. centro', '4444444444'),
('chely', 'aracely', 'martinez', 'fuentes', 'chely@hotmail.com', 'av. san claudio y 14 sur num 444444', '3232323232'),
('rojas', 'esteban', 'rojas', 'castillo', 'esteban_rojas@hotmail.com', 'avenida margaritas y 16 de septiembre num ext. 4545', '3434343434'),
('mar', 'mar', 'mar', 'mar', 'mar@hotmail.com', 'pepethtyht', '0000000000'),
('m', 'm', 'm', 'm', 'm@hotmail.com', 'm', '1111111'),
('z', 'x', 'x', 'x', 'x@hotmlail.com', '1', '11111111'),
('s', 's', 's', 's', 's@hotmial.com', 'dsd', '111111133'),
('l', 'l', 'l', 'l', 'bib-58@hotmail.com', 'asd', 'asdas'),
('qw', 'as', 'as', 'as', 'mar@hotmail.com', 'sfsd', 's'),
('sd', 'as', 's', 'zsc', 'bib-58@hotmail.com', 'asd', 'asd'),
('ms', 'asd', 'ASD', 'ASD', 'mar@hotmail.com', 'ASF', 'ADADADFA'),
('loaoaoa', 'asdasd', 'ads', 'asd', 'mar@hotmail.com', 'asd', 'asdasd'),
('asd', 'asdaf', 'f', 'zsd', 'bib-58@hotmail.com', 'asd', 'asd'),
('monica', 'monica', 'conde', 'dominguez', 'quiensabwe@hotmail.com', 'asdasd', '21548263'),
('san', 'loas ', 'aloas', 'loas', 'mar@hotmail.com', 'loas', 'loas'),
('loas', 'as', 'asd', 'as', 'mar@hotmail.com', 'asd', 'asd'),
('perro', 'asasd', 'asd', 'asd', 'mar@hotmail.com', 'asd', 'asd'),
('las', 'as', 'as', 'as', 'mar@hotmail.com', 'as', 'as'),
('lasd', 'asd', 'asd', 'asd', 'mar@hotmail.com', 'asd', 'asd'),
('las', 'as', 'as', 'as', 'mar@hotmail.com', 'as', 'asd'),
('lasl', 'las', 'as', 'asd', 'mar@hotmail.com', 'loas', 'as'),
('loas', 'las', 'as', 'as', 'mar@hotmail.com', 'asd', 'asd'),
('loas', 'loas', 'loas', 'loas', 'mar@hotmail.com', 'as', 'asd'),
('loaslas', 'as', 'as', 'as', 'mar@hotmail.com', 'asd', 'asd'),
('loas', 'as', 'as', 'as', 'mar@hotmail.com', 'as', 'as'),
('l', 'a', 'a', 'a', 'mar@hotmail.com', 'as', 'as'),
('kas', 'as', 'as', 'as', 'mar@hotmail.com', 'asd', 'as'),
('perr', 'dsdf', 'df', 'df', 'mar@hotmail.com', 'ad', 'd'),
('ped', 's', 'A', 'A', 'mar@hotmail.com', 'AS', 'AS'),
('LOAS', 's', 'as', 'as', 'mar@hotmail.com', 'as', 'ds'),
('loas', 'as', 'as', 'as', 'mar@hotmail.com', 'as', 'as'),
('las', 'las', 'las', 'las', 'bib-58@hotmail.com', 'as', 'as'),
('loas', 'loas', 'loas', 'loas', 'mar@hotmail.com', 'loas', 'd'),
('loas', 'las', 'as', 'as', 'mar@hotmail.com', 'as', 'as'),
('p', 'p', 'p', 'p', 'm@hotmail.com', 'l', 'l'),
('loas', 'loas', 'loas', 'loas', 'mar@hotmail.com', 'as', 'as'),
('loas', 'loas', 'loas', 'loas', 'mar@hotmail.com', 'as', 'as'),
('l|l', 'l', 'l', 'l', 'mar@hotmail.com', 'm', 'm'),
('peroo', 'o', 'o', 'o', 'mar@hotmail.com', 'dm', 'lsdsd'),
('loas', 'loas', 'loas', 'loas', 'mar@hotmail.com', 'loas', 'loas'),
('pe', 'l', 'l', 'l', 'mar@hotmail.com', 'kk', 'sdf'),
('loas', 'loas', 'loas', 'loas', 'mar@hotmail.com', 'loaas', 'asas'),
('loas', 'loaslo', 'loas', 'loas', 'mar@hotmail.com', 'loas', 'loas'),
('loas', 'loas', 'loas', 'loas', 'mar@hotmail.com', 'loas', 'zdad'),
('loas', 'loas', 'loas', 'loas', 'mar@hotmail.com', 'loas', 'asas'),
('l', 'l', 'l', 'l', 'mar@hotmail.com', 'l', 'l'),
('l', 'l', 'l', 'l', 'mar@hotmail.com', 'm', 'm'),
('jose', 'k', 'k', 'k', 'mar@hotmail.com', 'j', 'j'),
('perzz', 'x', 'x', 'x', 'mar@hotmail.com', 'ad', 'sdfsd'),
('zzz', 'zzz', 'zz', 'zz', 'mar@hotmail.com', 'xcx', 'sdcsdc'),
('as', 'as', 'as', 'sds', 'mar@hotmail.com', 'dads', 'sdc'),
('asd', 'as', 'zs', 's', 'mar@hotmail.com', 'ad', 'asd'),
('qq', 'q', 'q', 'q', 'mar@hotmail.com', 'sd', 'ada'),
('ss', 'as', 'as', 'as', 'mar@hotmail.com', 'as', 'sd'),
('dddqdd', 'j', 'j', 'j', 'mar@hotmail.com', 'k', 'k'),
('loasss', 'as', 'as', 'as', 'mar@hotmail.com', 'adsd', 'as'),
('llll', 'l', 'l', 'l', 'mar@hotmail.com', 'm', 'ed'),
('llll', 'l', 'l', 'l', 'mar@hotmail.com', 'm', 'ed'),
('ese', 's', 's', 's', 'mar@hotmail.com', 's', 's'),
('ese', 's', 's', 's', 'mar@hotmail.com', 's', 's'),
('ese', 's', 's', 's', 'mar@hotmail.com', 's', 's'),
('ese', 's', 's', 's', 'mar@hotmail.com', 's', 's'),
('e', 'e', 'e', 'e', 'mar@hotmail.com', 'asd', 'asd'),
('e', 'e', 'e', 'e', 'mar@hotmail.com', 'asd', 'asd'),
('e', 'e', 'e', 'e', 'mar@hotmail.com', 'asd', 'asd'),
('w', 'w', 'w', 'w', 'mar@hotmail.com', 's', 's'),
('e', 'e', 'e', 'e', 'mar@hotmail.com', 's', 's'),
('e', 'e', 'e', 'e', 'mar@hotmail.com', 'w', 's'),
('l', 'l', 'l', 'l', 'mar@hotmail.com', 'm', 'm'),
('s', 's', 's', 's', 'mar@hotmail.com', 's', 's'),
('s', 's', 's', 's', 'mar@hotmail.com', 's', 's'),
('s', 's', 's', 's', 'mar@hotmail.com', 's', 's'),
('s', 's', 's', 's', 'mar@hotmail.com', 's', 's'),
('s', 's', 's', 's', 'mar@hotmail.com', 's', 's'),
('m', 'm', 'm', 'm', 'mar@hotmail.com', 'm', 'm'),
('m', 'm', 'm', 'm', 'mar@hotmail.com', 'm', 'm'),
('sS', 's', 's', 's', 'mar@hotmail.com', 's', 's'),
('p', 'p', 'p', 'p', 'mar@hotmail.com', 'l', 'l'),
('s', 's', 's', 's', 'mar@hotmail.com', 'k', 'k'),
('u', 'u', 'u', 'u', 'mar@hotmail.com', 'u', 'u'),
('o', 'o', 'o', 'o', 'mar@hotmail.com', 'o', 'o'),
('o', 'o', 'o', 'o', 'mar@hotmail.com', 'o', 'o'),
('p', 'p', 'p', 'p', 'mar@hotmail.com', 'p', 'p'),
('o', 'o', 'o', 'o', 'mar@hotmail.com', 'm', 'm'),
('l', 'l', 'l', 'l', 'mar@hotmail.com', 'l', 'l'),
('loas', 'loas', 'a', 'a', 'mar@hotmail.com', 'ygyguj', 'kgkhhjj'),
('q', 'q', 'q', 'q', 'mar@hotmail.com', 'a', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `imagen` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_propietario` varchar(65) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`imagen`, `descripcion`, `id_propietario`) VALUES
('peluk.jpg', 'm', ''),
('peluk.jpg', 'es macho', ''),
('3mascotas.jpg', 'me gusta', ''),
('1.jpg', 'mi imagen', ''),
('7.png', 'hdhhd', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitado`
--

CREATE TABLE IF NOT EXISTS `invitado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `numeroventa` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `invitado`
--

INSERT INTO `invitado` (`id`, `usuario`, `numeroventa`) VALUES
(34, 's', 1),
(35, 'u', 2),
(36, 'u', 2),
(37, 'o', 3),
(38, 'o', 3),
(39, 'o', 3),
(40, 'o', 3),
(41, 'o', 3),
(42, 'o', 4),
(43, 'o', 4),
(44, 'o', 4),
(45, 'o', 4),
(46, 'o', 4),
(47, 'p', 5),
(48, 'ges', 7),
(49, 'ges', 7),
(50, 'ges', 8),
(51, 'ges', 9),
(52, 'o', 10),
(53, 'o', 11),
(54, 'o', 12),
(55, 'l', 13),
(56, 'l', 14),
(57, 'loas', 16),
(58, 'q', 17),
(59, 'l', 19),
(60, 'l', 20),
(61, 'l', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroventa` int(11) NOT NULL,
  `imagen` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `talla` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `subtotal` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=225 ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `numeroventa`, `imagen`, `nombre`, `precio`, `cantidad`, `talla`, `subtotal`) VALUES
(198, 1, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(199, 2, '1ag.jpg', 'Vaso juego', 250, 1, ' ', 250),
(200, 3, '4ag.jpg', 'Juego pelota', 390, 1, ' ', 390),
(201, 4, 'rop1.jpg', 'chaleco', 250, 1, ' ', 250),
(202, 5, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(203, 6, '1ag.jpg', 'Vaso juego', 250, 1, ' ', 250),
(204, 7, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(205, 8, '1ag.jpg', 'Vaso juego', 250, 1, ' ', 250),
(206, 8, 'pri3.jpg', 'Vestido Blanco Moño Rojo', 400, 30, ' ', 12000),
(207, 8, 'pri2.png', 'Vestido Rosa', 360, 1, ' ', 360),
(208, 8, 'pri.jpg', 'Vestido Tul', 300, 3, ' ', 900),
(209, 9, 'rop4.jpg', 'Chaleco negro', 390, 1, ' ', 390),
(210, 10, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(211, 10, 'patria.jpg', 'Blusa&Falda', 200, 3, ' ', 600),
(212, 10, 'navg1.jpg', 'Capucha', 60, 1, ' ', 60),
(213, 11, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(214, 12, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(215, 13, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(216, 14, '3ap.jpg', 'Cama desplegable', 400, 1, ' ', 400),
(217, 14, 'pri1.jpg', 'Vestido-Bolitas Rosa', 400, 1, ' ', 400),
(218, 15, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(219, 16, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(220, 17, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(221, 18, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(222, 19, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(223, 20, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300),
(224, 21, '1ap.jpg', 'Cama alfombra', 300, 1, ' ', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=111 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(1, 'Cama alfombra', 'Excelente cama la cual tu perro se volverá loco.', '1ap.jpg', 300),
(2, 'Castijuegos', 'Castillo de juegos para tu perro, el cual ya no tendrá por que explotar la sala.', '2ap.jpg', 400),
(3, 'Cama dona', 'Excelente cama en forma de dona.', '4ap.jpg', 450),
(4, 'Cama desplegable', 'Casa desplegable para tu perro excelente comodidad.', '3ap.jpg', 400),
(5, 'Moño elegante', 'Este moño le dará una apariencia espectacular a tu perro.', '5ap.jpg', 200),
(6, 'Seccion de correas', 'Excelentes sección de correas para darle un toque especial a tu perro.', '6ap.jpg', 150),
(7, 'Moños cool', 'Excelente moño para hacer de tu perro la envidia de tu colonia.', '7ap.jpg', 200),
(8, 'Cama rosa', 'Excelente cama con mayor comodidad para tu perro.', '8ap.jpg', 350),
(9, 'Cama pro', 'Esta cama traerá loco a tu perro, y sera la envidia de tus vecinos.', '9ap.jpg', 500),
(10, 'Casa cueva', 'Maravillosa casa den forma de cueva, para que inverne tu perro por horas.', '10ap.jpg', 400),
(11, 'Vaso juego', 'Excelente juego para entretener a tu gato.', '1ag.jpg', 250),
(12, 'Castijuegos', 'Castillo de juegos para tu gato, el cual ya no tendrá por que explotar la sala.', '2ag.jpg', 320),
(13, 'Cama pantunfla\r\n', 'Excelente cama en forma de pantumfla.', '3ag.jpg', 280),
(14, 'Juego pelota', 'Juego con pelota el cual tendrá toda la atención de tu gato.', '4ag.jpg', 390),
(15, 'Cama pro', 'Excelente cama que asemeja tu propia cama.', '5ag.jpg', 550),
(16, 'Arenero', 'tu sabes por que.', '6ag.jpg', 500),
(17, 'Ratones', 'Enseña a tu gato a cazar con estos bonitos ratones.', '7ag.jpg', 150),
(18, 'Sección de juegos', 'Sección de juegos con pelotas.', '8ag.jpg', 350),
(19, 'Rascadero', 'Ya no habrá motivos para pegarle a tu gato, ya que este articulo tiene los beneficios de salvar tus sillones o sala.', '9ag.jpg', 360),
(20, 'Arenero baño', 'Excelente arenero en forma de baño humano.', '10ag.jpg', 600),
(21, 'chaleco', 'Excelente chaleco para que tu perro no pase mas frió.', 'rop1.jpg', 250),
(22, 'Traje colonial', 'Excelente traje para que tu perro sea la novedad en tu colonia.', 'rop2.jpg', 320),
(23, 'Vestido colonial', 'Excelente vestido para tu perro.', 'rop3.jpg', 280),
(24, 'Chaleco negro', 'Mas oscuro que la noche pero muy abrigador.', 'rop4.jpg', 390),
(25, 'Casual', 'Ropa casual para tu perro.', 'rop5.jpg', 550),
(26, 'Chaleco wow', 'No hay mas que decir.', 'rop6.jpg', 500),
(27, 'Militar', 'Para que intimide a los demás.', 'rop7.jpg', 450),
(28, 'Vestido princesa', 'Excelente vestido para tu perro', 'rop8.jpg', 450),
(29, 'Vestido rosa', 'Excelente vestido en color rosa u otros colores .', 'rop9.jpg', 360),
(30, 'Ropa especial', 'Excelente ropa para tu perro, para que luzca wow.', 'rop10.jpg', 600),
(31, 'vestido cool', 'Excelente vestido para tu gato.', '1.jpg', 300),
(32, 'Chaleco a la moda', 'Solo para gatos cool.', '2.jpg', 320),
(33, 'Fiesta.', 'también tu gato quiere divertirse mas de la cuenta.', '3.jpg', 280),
(34, 'Sombrero y corbata', 'Excelente no!!! Claro que si tu gato sera la envidia de tu colonia o de otras mas que visite.', '4.jpg', 390),
(35, '¿Raton?', 'Hermoso conjunto que simula un ratón.', '5.jpg', 550),
(36, 'Chaleco wow2', 'No hay mas que decir.', '6.png', 500),
(37, 'De gala', 'Tu gato sera la sensación de las gatitas.', '7.png', 450),
(38, 'Trabajo', 'Excelente traje para que tu gato salga a buscar empleo.', '8.jpg', 450),
(39, 'Cochinito', 'Excelente vestuario que simula a un cochinito.', '9.jpg', 360),
(40, 'Muy pro', 'Excelente ropa para tu gato, para que luzca wow.', '10.jpg', 400),
(41, 'Vestido Tul', 'Hermoso vestido con tul rosa y flores estampadas.', 'pri.jpg', 300),
(42, 'Vestido-Bolitas Rosa', 'Ideal para las temporadas de calor.', 'pri1.jpg', 400),
(43, 'Vestido Rosa', 'Para lucir en fiestas y reuniones', 'pri2.png', 360),
(44, 'Vestido Blanco Moño Rojo', 'Atuendo para fiestas', 'pri3.jpg', 400),
(45, 'Vestido Fresitas-Tul', 'Atuendo coqueto para gatos/perros', 'pri4.jpg', 320),
(46, 'Vestidos-Tul Colores', 'Ideal para pacear en días calurosos', 'pri5.jpg', 300),
(47, 'Camisa Hawaiana', 'Para que tu perro lusca entre las cachorritas', 'pri6.jpg', 400),
(48, 'Vestido Mezclilla', 'Haz que tu cachorrita se sienta a la moda.', 'pri7.jpg', 320),
(49, 'Licra-Tul-Moño', 'Haz que se sienta comoda tu mascota', 'pri8.jpg', 300),
(50, 'Vestido Rosa con estrellas negras', 'Entre lo mas fashion entre las gatitas.', 'pri9.jpg', 400),
(51, 'Marinero Azul', 'Ideal para la playa', 'ver1.jpg', 320),
(52, 'Marinero Azul-Rojo', 'Corbatin coqueto para tu mascota', 'ver2.jpg', 320),
(53, 'Pantalon Marinero', 'Conjunto idela para tu cachorro', 'ver3.jpg', 450),
(54, 'Marinero estampado', 'Ideal para el calor', 'ver4.jpg', 200),
(55, 'Vestido Marinero', 'Será el centro de atención en la playa.', 'ver5.jpg', 350),
(56, 'Mezclilla y chaleco', 'Ideal para vestir formal.', 'ver6.jpg', 450),
(57, 'Black&White', 'Para lucir en el dia y la noche', 'ver7.jpg', 600),
(58, 'White&collar', 'Vestido de día con accesorio(collar)', 'ver8.jpg', 350),
(59, 'White', 'Vestido para salir de día', 'ver9.png', 300),
(60, 'Chaleco&Moño', 'Atuendo a cuadros para lucir a tu mascota', 'ver10.jpg', 320),
(61, 'Trajes', 'Para que tu  perro se  vea elegante  en esta temporada', 'oto1.jpg', 350),
(62, 'Gorros', 'Gorros hermosos de acuerdo ala  temporada ', 'otog1.jpg', 150),
(63, 'Vestido', 'Un vestido que  va  de acuerdo a  la ocasion ', 'oto2.jpg', 250),
(64, 'Sueter', 'Un sueter que  les da un estilo elegante a  tu  gato', 'otog2.jpg', 200),
(65, 'Sudaderas', 'Con estas sudaderas se vera muy bien tu  mascota', 'oto3.jpg', 300),
(66, 'Sueter Colorido', 'Este hermoso y colorido sueter para tu  gato alegre', 'otog3.jpg', 120),
(67, 'Sueter', 'Para este inicio de frios una  buena  sudadera', 'oto4.jpg', 220),
(68, 'Sudadera', 'Una buena sudadera para esta temporada', 'otog4.jpg', 210),
(69, 'Elegante', 'Unos buenos moños para un estilo elegante a  la ocasion', 'oto5.jpg', 350),
(70, 'Sueter Rojo', 'Para los que  les gusta estos tonos de  colores', 'otog5.jpg', 180),
(71, 'Abrigo Rosa', 'Para esta temporada de  frios  un buen abrigo ', 'in1.jpg', 250),
(72, 'Gorro', 'Para los gatos que  les encanta los gorros', 'ing1.jpg', 60),
(73, 'Conjunto', 'Conjunto de abrigo y pantalon para que  no  pasen frios', 'in2.jpg', 350),
(74, 'Panda', 'Se vera muy tierno tu gato vestido  de  panda', 'ing2.jpg', 250),
(75, 'Abrigo ', 'Este es un abrigo Rayado y muy calientito para tu  mascota', 'in3.jpg', 200),
(76, 'Abrigo para Gato', 'Un buen abrigo para este tiempo  de  frios', 'ing3.jpg', 160),
(77, 'Sueter', 'Con este sueter color azul se vera muy lindo  y estara calientito tu perro ', 'in4.jpg', 220),
(78, 'Sueter rayado', 'Este lindo sueter para que tu  gato  no  sufra frio', 'ing4.jpg', 200),
(79, 'Abrigo Elegante ', 'Por que en este invierno tambien se puede vestir elegante a  tu mascota', 'in5.jpg', 350),
(80, 'Calsetas', 'Para que sus patitas no  sufran  frio estas coloridas y calientitas calsetas', 'ing5.jpg', 50),
(81, 'Blusa&Falda', 'Celebrar con comodidad', 'patria.jpg', 200),
(82, 'fiestas patrias', 'descripcion', 'patria13.jpg', 150),
(83, 'Adelita Tricolor', 'Metalico', 'patria2.jpg', 200),
(84, 'Listones Patrios', 'Moñitos de colores', 'patria3.jpg', 20),
(85, 'Moño de Ranchero', 'Moño Bandera', 'patria4.jpg', 50),
(86, 'Adelita-Encaje', 'Ideal para razas pequeñas', 'patria5.jpg', 120),
(87, 'Paliacate', 'Accesorio ideal para tu mascota', 'patria6.jpg', 50),
(88, 'Tul para cachorritas', 'Tul-Bandera', 'patria9.jpg', 250),
(89, 'Vestido Completo', 'Porque ella tambien es una adelita', 'patria8.jpg', 350),
(90, 'Traje Charro', 'Atuendo ideal para tu perro', 'patria11.png', 500),
(91, 'Calabaza', 'Con este increíble disfraz tu perro sera el mas aterrador en la noche', 'h1.jpg', 250),
(92, 'Dracula', 'Quien dijo que solo los humanos era vampiros tu gato sera un dracula pero lindo.', 'h2.jpg', 150),
(93, 'Batman', 'Llego la justicia a ciudad de puebla el gato de la noche.', 'h3.jpg', 200),
(94, 'Capa de dracula', 'Con esta capa tu perro parecerá un vampiro.', 'h4.jpg', 200),
(95, 'Gato araña', 'El mundo o mas bien la cuidad de puebla morirá de miedo al ver una gigantes araña, sin saber que debajo de ese disfraz esta un lindo e inofensivo gatito.', 'h5.jpg', 300),
(96, 'Sombrero de brujo', 'Sensacional sombrero de brujo.', 'h6.jpg', 200),
(97, 'Calabaza', 'Sensacional traje en forma de una aterradora calabaza', 'h7.jpg', 350),
(98, 'Diablito', 'Con este traje hasta tu te morirás del miedo.', 'h8.jpg', 350),
(99, 'Conjunto de bruja', 'Conjunto de un disfraz de un brujo que por cierto es muy colorido y bonito', 'h9.jpg', 400),
(100, 'Disfraz de calabaza', 'Disfraz de calabaza para convertir a tu linda mascota en algo aterrador.', 'h10.jpg', 450),
(101, 'Duende', 'Con este  traje  de  duende  sera el mejor duende  de santa', 'nav1.jpg', 350),
(102, 'Capucha', 'Para esta navidad de frios  esta capucha los  cubrira muy bien aparte  de  que estara a la moda', 'navg1.jpg', 60),
(103, 'Traje Santa', 'Un buen traje para tu mascota de acuerdo a  la  temporada', 'nav2.jpg', 150),
(104, 'Bufanda', 'Por que ellos  tambien  pueden lucir una hermosa bufanda de navidad', 'navg2.jpg', 250),
(105, 'Vestido Navideño', 'Un buen vestido  para esta navidad', 'nav3.jpg', 200),
(106, 'Gato Santa', 'Por que tu  gato  tambien  ama a santa', 'navg3.jpg', 160),
(107, 'Conjunto Navideño', 'Para que  este bien  equipado tu mascota en esta navidad', 'nav4.jpg', 550),
(108, 'Vestido', 'Un vestido rojo y elegante para lucir  en esta  navidad', 'navg4.jpg', 200),
(109, 'Perro Santa', 'Quien  dijo que  tu perro no podra ser santa', 'nav5.jpg', 200),
(110, 'Abrigo Navideño', 'Este abrigo  los mantendra muy calientitos y ademas estaran con el  estilo navideño', 'navg5.jpg', 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `password`, `tipo`) VALUES
('ges', 'ges', 0),
('das', 'das', 0),
('ces', 'ces', 0),
('va', 'va', 0),
('le', 'le', 0),
('ke', 'ke', 0),
('dxn', '12345', 0),
('angie', '1111', 0),
('charly', '2222', 0),
('chely', '3333', 0),
('rojas', '1212', 0),
('mar', 'mar', 0),
('m', 'm', 0),
('z', 'z', 0),
('s', 's', 0),
('l', 'l', 0),
('qw', 'aw', 0),
('sd', 'zsc', 0),
('ms', 'loas', 0),
('loaoaoa', 'oaoaoa', 0),
('asd', 'sd', 0),
('monica', 'chocolate', 0),
('san', 'pedro', 0),
('loas', 'las', 0),
('perro', 'per', 0),
('las', 'law', 0),
('lasd', 'asd', 0),
('las', 'as', 0),
('lasl', 'loas', 0),
('loas', 'loas', 0),
('loas', 'loas', 0),
('loaslas', 'as', 0),
('loas', 'las', 0),
('l', 'a', 0),
('kas', 'as', 0),
('perr', 'peaa', 0),
('ped', 'a', 0),
('LOAS', 'aas', 0),
('loas', 'as', 0),
('las', 'las', 0),
('loas', 'loas', 0),
('loas', 'loas', 0),
('p', 'p', 0),
('loas', 'loas', 0),
('loas', 'loas', 0),
('l|l', 'l', 0),
('peroo', 'oo', 0),
('loas', 'loas', 0),
('pe', 'pe', 0),
('loas', 'loas', 0),
('loas', 'loas', 0),
('loas', 'loas', 0),
('loas', 'loas', 0),
('l', 'l', 0),
('l', 'l', 0),
('jose', 'jose', 0),
('perzz', 'ss', 0),
('zzz', 'zz', 0),
('as', 'as', 0),
('asd', 'sdcAS', 0),
('qq', 'qq', 0),
('ss', 'sa', 0),
('dddqdd', 'j', 0),
('loasss', 'las', 0),
('llll', 'l', 0),
('llll', 'l', 0),
('ese', 'se', 0),
('ese', 'se', 0),
('ese', 'se', 0),
('ese', 'se', 0),
('e', 'e', 0),
('e', 'e', 0),
('e', 'e', 0),
('w', 'w', 0),
('e', 'e', 0),
('e', 'e', 0),
('l', 'l', 0),
('s', 's', 0),
('s', 's', 0),
('s', 's', 0),
('s', 's', 0),
('s', 's', 0),
('m', 'm', 0),
('m', 'm', 0),
('sS', 's', 0),
('p', 'p', 0),
('s', 's', 0),
('u', 'u', 0),
('o', 'o', 0),
('o', 'o', 0),
('p', 'p', 0),
('o', 'o', 0),
('l', 'l', 0),
('loas', 'loas', 0),
('q', 'q', 0),
('Luisito', 'loas', 1),
('Luisito', 'loas', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

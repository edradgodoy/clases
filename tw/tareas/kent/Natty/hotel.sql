-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2021 a las 18:28:18
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `ubicacion` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `ubicacion`, `telefono`, `correo`) VALUES
(1, 'Nueva Jerusalen ', '84235429', 'barber.@gmail.com'),
(2, 'nggt', '76543', 'kjhgfd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `orden` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `imagen`, `titulo`, `subtitulo`, `descripcion`, `orden`) VALUES
(17, 'Vistas/img/galeria/Gal54.jpg', 'corte con  raya ', 'Precio:50', 'corte para niño', '1'),
(18, 'Vistas/img/galeria/Gal164.jpg', 'corte a la moda', 'Precio: 80', 'corte de cabello de niño ', '1'),
(19, 'Vistas/img/galeria/Gal74.jpg', 'corte de cabello', 'Precio:90 ', 'corte de cabello', '2'),
(20, 'Vistas/img/galeria/Gal791.jpg', 'corte de cabello y barba', 'Precio: 80', 'corte de cabello', '2'),
(23, 'Vistas/img/galeria/Gal719.jpg', 'corte cejas', '50', ' delineación de cejas ', '1'),
(24, 'Vistas/img/galeria/Gal230.jpg', 'corte adolescente', '80', 'corte', '1'),
(25, 'Vistas/img/galeria/Gal67.jpeg', 'corte', '12', 'corte de cabello', '2'),
(26, 'Vistas/img/galeria/Gal159.jpeg', 'corte', '90', 'corte', '3'),
(27, 'Vistas/img/galeria/Gal261.jpeg', 'corte', '80', 'corte', '2'),
(28, 'Vistas/img/galeria/Gal316.jpeg', 'corte', '90', 'corte', '2'),
(29, 'Vistas/img/galeria/Gal108.jpeg', 'afeitado de barba', '90', 'afeitacion y corte', '1'),
(30, 'Vistas/img/galeria/Gal144.jpeg', 'delineacion de barba', '80', 'corte', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generales`
--

CREATE TABLE `generales` (
  `id` int(11) NOT NULL,
  `favicon` text COLLATE utf8_spanish_ci NOT NULL,
  `titular` text COLLATE utf8_spanish_ci NOT NULL,
  `logotipo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `generales`
--

INSERT INTO `generales` (`id`, `favicon`, `titular`, `logotipo`) VALUES
(1, 'Vistas/img/Generales/612.jpg', 'Barberia Kenji Reyes Ingram', 'Vistas/img/Generales/L819.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hsimple`
--

CREATE TABLE `hsimple` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `estrellas` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `hsimple`
--

INSERT INTO `hsimple` (`id`, `imagen`, `estrellas`, `precio`) VALUES
(1, 'Vistas/img/hs/HS916.jpg', '2', '600');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `asunto` text COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `email`, `telefono`, `asunto`, `mensaje`, `fecha`) VALUES
(1, 'Maria', '16elisa.ingram1991@gmail.com', '23468687', 'seregrdfg', 'fvdrthbd', '2020-02-02 22:55:17'),
(2, 'Maria', 'ingrammaria@gmail.com', '57352938', 'mandela', 'iyrytgiuok', '2020-02-04 14:37:34'),
(3, 'maria', '16elisa.ingram1991@gmail.com', '53468734', 'pedidos de corte', 'dnjfnekf', '2021-02-05 17:18:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `introduccion` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`id`, `titulo`, `introduccion`, `descripcion`, `imagen`) VALUES
(1, 'Barberia Kenji Reyes Ingram', 'MISIÓN:\r\n\r\n\r\nSomos una empresa dedicada al mejoramiento de la apariencia física de nuestros clientes, ofreciéndole el mejor servicio, la más alta calidad y con un personal altamente calificado, donde la imagen del hombre toma punto Clave para lograr el éxito...', 'VISIÓN:\r\n\r\nSer una cadena de barbería con un liderazgo de persona profesionales brindándole el mejor servicio de calidad y excelente servicio al cliente lo que nos permita ser la mejor opción en el mercado y que sea reconocido a nivel regional como un ejemplo de organización, ética...\r\n\r\n\r\n\r\n\r\n\r\nHorario de atención 6:00 am -  8:00 pm. Lunes a sábado.\r\n Domingo 6:00 am - 2:00 pm', 'Vistas/img/nosotros/N372.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(11) NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `url` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `icono`, `url`) VALUES
(1, 'facebook', 'www.facebook.com'),
(2, 'youtube', 'www.youtube.com'),
(3, 'whatsapp', 'www.whatsapp.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `icono`, `descripcion`) VALUES
(1, 'Servicios', 'home', 'Servicios al pedido'),
(2, 't2', 'car', 'Seguro'),
(7, 'titulo', 'home', 'xctgvbuhnixisjicsicj'),
(8, 't4', 'car', 'd4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `titular` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `orden` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id`, `titular`, `descripcion`, `orden`, `imagen`) VALUES
(7, 'Barberia Ingram', '               BIENVENIDOS\r\n\r\n              \r\n              ', '1', 'Vistas/img/slide/S645.jpg'),
(12, 'Barberia Ingram', 'La mejor Barbería', '1', 'Vistas/img/slide/S941.jpg'),
(13, 'Barberia Ingram', 'Usted es nuestra prioridad en nuestro barbero', '1', 'Vistas/img/slide/S781.jpg'),
(14, 'Barberia Ingram', 'WELCOME', '1', 'Vistas/img/slide/S124.jpg'),
(15, 'Barberia  Ingram', 'Usted es nuestra prioridad ', '1', 'Vistas/img/slide/S602.jpg'),
(16, 'Barberia Ingram', ' Somos la mejor opcion para ti', '1', 'Vistas/img/slide/S36.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptores`
--

CREATE TABLE `suscriptores` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `foto`, `rol`) VALUES
(9, 'Ingram', '1234', 'Vistas/img/usuarios/U873.jpg', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generales`
--
ALTER TABLE `generales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hsimple`
--
ALTER TABLE `hsimple`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscriptores`
--
ALTER TABLE `suscriptores`
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
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `generales`
--
ALTER TABLE `generales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `hsimple`
--
ALTER TABLE `hsimple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `suscriptores`
--
ALTER TABLE `suscriptores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

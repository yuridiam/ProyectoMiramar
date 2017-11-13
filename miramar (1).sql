-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2017 a las 06:12:21
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miramar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte`
--

CREATE TABLE `corte` (
  `id_corte` int(4) NOT NULL,
  `fecha_corte` date NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevaventa`
--

CREATE TABLE `nuevaventa` (
  `id_venta` int(10) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `id_usuario` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nuevaventa`
--

INSERT INTO `nuevaventa` (`id_venta`, `fecha`, `total`, `id_usuario`) VALUES
(2, '11/11/2017', '1000.30', 1),
(3, '11/11/2017', '200.00', 2),
(4, '12/11/2017', '1300.00', 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `cantidad_stock` int(4) NOT NULL,
  `precio_unitario` decimal(4,2) NOT NULL,
  `eliminado` int(1) NOT NULL DEFAULT '0',
  `id_proveedor` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `cantidad_stock`, `precio_unitario`, `eliminado`, `id_proveedor`) VALUES
(1, 'Aceite', 'Aceite neutrioli de oliva', 3, '15.45', 0, 0),
(2, 'Catsup', 'Salsa de tomate herdez 1 litro', 30, '31.00', 1, 2),
(3, 'Galletas', 'de chocolate', 10, '10.60', 0, 1),
(4, 'JamÃ³n', 'jamon', 8, '10.00', 0, 1),
(5, 'sabritas', 's', 8, '13.20', 0, 2),
(6, 'jugo', 'j', 7, '8.10', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `eliminado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `telefono`, `direccion`, `eliminado`) VALUES
(1, 'hldsjflkjsd', '899879978797', 'hola', 1),
(2, 'Coca Cola', '8341892714', 'jeje', 1),
(3, 'Bimbo', '567785334577', 'hola', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(4) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `eliminado` int(1) NOT NULL DEFAULT '0',
  `edad` int(2) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nickname` varchar(15) NOT NULL,
  `estado` text NOT NULL,
  `ubicacion` varchar(30) NOT NULL,
  `biografia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nom`, `correo`, `pass`, `tipo_usuario`, `eliminado`, `edad`, `direccion`, `telefono`, `foto`, `nickname`, `estado`, `ubicacion`, `biografia`) VALUES
(1, 'Yuridia Montelongo', '1530076@upv.edu.mx', 'yuridia123', 'Administrador', 0, 20, 'mariano matamoros', '8341892714', 'assets/images/users/b3.jpg', 'yuri1', '', '', ''),
(2, 'Mariana Hinojosa', 'mariana@upv.edu.com', 'mariana123', 'Empleado', 1, 20, 'revolucion verde', '8345672536', '', '', '', '', ''),
(55, 'hola2', 'hola@upv.com', 'holi', 'Empleado', 0, 66, 'molongo', '8341892714', '', 'hola', '', '', ''),
(56, 'Yuridia Guadalupe Montelongo Padilla', 'yuurii_97@hotmail.co', 'yuri', 'Empleado', 0, 25, 'calle articulo 15 #152 colonia mariano matamoros', '8341892714', 'assets/images/users/ACCI.jpg', 'yjonas', 'hola', 'jeje', ''),
(57, 'Maria', 'maria@upv.com', 'maria123', 'Empleado', 1, 14, 'mariano', '8341892714', 'assets/images/users/kk.jpg', 'jeje', '', '', ''),
(58, 'hejeljflkj', 'monse@upv.edu.com', 'monse123', 'Empleado', 1, 65, 'mm', '8341892714', '', '', '', '', ''),
(59, 'Mariana Magdalena Hinojosa Tijerina', 'mariana@upv.edu.com', 'mariana123', 'Empleado', 0, 20, 'revolucion verde', '8341892714', 'assets/images/users/tumblr_of5pgu2d3x1tfwcr5o1_128', 'marianita', 'hola', 'cd victoria', ''),
(60, 'Erick Elizondo Rodriguez', 'wiki@upv.edu.com', 'wiki123', 'Empleado', 0, 20, 'del valle', '567785334577', 'assets/images/users/b5.jpg', 'wikilandia', 'hola soy wiki', 'cd victoria', 'wikiwikiwiki'),
(61, 'ksdlgdjflk', 'monse@upv.edu.com', 'maria123', 'Empleado', 1, 78, 'mariano matamoros', '8341892714', 'assets/images/users/b2.jpg', 'juana', 'kdhkdsj', 'kljldkjlkj', 'lkdjslkjkds'),
(62, 'Yuri Montelongo', 'y@h.com', 'yuri', 'Administrador', 1, 20, 'mariano matamoros', '8341892714', 'assets/images/users/b7.jpg', 'yurijonas', 'amo a 5soslkjdslklgjfd', 'jeje', 'djslkjdsfkls'),
(63, 'Dulce', 'monse@upv.edu.com', 'm', 'Administrador', 0, 17, 'mariano matamoros', '8341892714', 'assets/images/users/COSITOS.png', 'monse1', 'jeje', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_producto`
--

CREATE TABLE `venta_producto` (
  `id_venta_producto` int(10) NOT NULL,
  `id_venta` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `eliminado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `corte`
--
ALTER TABLE `corte`
  ADD PRIMARY KEY (`id_corte`);

--
-- Indices de la tabla `nuevaventa`
--
ALTER TABLE `nuevaventa`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `venta_producto`
--
ALTER TABLE `venta_producto`
  ADD PRIMARY KEY (`id_venta_producto`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `corte`
--
ALTER TABLE `corte`
  MODIFY `id_corte` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nuevaventa`
--
ALTER TABLE `nuevaventa`
  MODIFY `id_venta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `venta_producto`
--
ALTER TABLE `venta_producto`
  MODIFY `id_venta_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nuevaventa`
--
ALTER TABLE `nuevaventa`
  ADD CONSTRAINT `nuevaventa_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta_producto`
--
ALTER TABLE `venta_producto`
  ADD CONSTRAINT `venta_producto_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_producto_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `nuevaventa` (`id_venta`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

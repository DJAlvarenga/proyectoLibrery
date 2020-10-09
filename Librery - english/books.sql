-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2020 a las 01:06:22
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `autor` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `anio_edicion` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` varchar(5000) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `autor`, `anio_edicion`, `genero`, `descripcion`) VALUES
(36, 'De la tierra a la luna', 'Julio Verne', '1865-09-14', 'Ciencia Ficcion', 'La obra, que comienza como una sátira del estereotipo estadounidense de la época, es un intento de describir por primera vez con minuciosidad científica los problemas que hay que resolver para lograr enviar un objeto a la Luna. Un intrépido proyecto aviva los corazones de los miembros del Gun-Club. Se trata de enviar a la Luna un proyectil que, auxiliado por el monstruoso cañón Columbiad, hará la función de una auténtica nave espacial para hacer realidad en el siglo XIX un viejo sueño: atravesar el espacio y descubrir un mundo lunar hasta entonces en penumbras. Cien años antes de que en realidad el hombre logre llegar a la Luna. Esta novela se publicó en el \"Journal des Débats Politiques et Littérairs\", y no en la \"Magasin d\'Éducation et de Récréation\" (\"Magazín de ilustración y recreo\") como las demás novelas de los \"Viajes extraordinarios\", debido a que, en el tiempo en que se publicó, seguía publicándose en esta revista \"Las aventuras del capitán Hatteras\".'),
(45, 'El diario de Ana Frank', 'Annelies Marie Frank', '1942-06-12', 'Novela', 'Relata su historia como adolescente y el tiempo de dos años cuando tuvo que ocultarse de los nazis en Ámsterdam.\r\n\r\nOculta con su familia y otra familia judía (los V en una buhardilla de unos almacenes de Ámsterdam durante la ocupación nazi de Holanda. Ana Frank con trece años, cuenta en su diario, al que llamó «Kitty», la vida del grupo. Ayudados por varios empleados de la oficina, permanecieron durante más de dos años en el achterhuis (conocido como «la casa de atrás») hasta que, finalmente, fueron delatados y detenidos.\r\n\r\n\r\n \r\nAna escribió un diario entre el 12 de junio de 1942 y el 1 de agosto de 1944. El 4 de agosto de 1944, unos vecinos (se desconocen los nombres) delatan a los ocho escondidos en \"la casa de atrás\". A\r\n\r\nAdemás del diario escribió varios cuentos que han sido publicados paulatinamente desde 1960. Su hermana, Margot Frank, también escribió un diario, pero nunca se encontró ningún rastro de éste.'),
(44, 'El perfume', 'Patrik Süskind', '1985-06-12', 'Novela', 'La historia del personaje principal, Grenouille, \"uno de los hombres más geniales y abominables de su época\", transcurre en la Francia del siglo XVIII.\r\n\r\nDesde su nacimiento, Grenouille descubre y percibe el mundo a través del sentido del olfato, que tiene más desarrollado que el resto de las personas.\r\n\r\nÉstas, a su vez, en ocasiones encuentran inquietante dicha capacidad en Grenouille. Él carece de un olor propio.'),
(46, 'Harry Poter: y la cámara secreta', 'J. K. Rowling', '1998-07-02', 'Ciencia Ficcion', 'La trama sigue el segundo año de Harry Potter en el Colegio Hogwarts de Magia y Hechicería, durante el cual una serie de mensajes en las paredes de los pasillos de la escuela advierten que la Cámara de los Secretos ha sido abierta y que el «heredero de Slytherin» matará a todos los alumnos que no provengan de familias con sangre mágica. Dichas amenazas se cumplen con ataques que dejan a los alumnos de la escuela «petrificados». Durante todo el año, Harry y sus amigos Ron Weasley y Hermione Granger investigan sobre los ataques, un hecho similar que había ocurrido años antes, lo cual lleva al protagonista a conocer más la historia de su mayor enemigo, Lord Voldemort, quien había asesinado a sus padres cuando era un bebé.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

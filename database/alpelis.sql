-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-08-2024 a las 01:18:02
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alpelis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorio_peliculas`
--

CREATE TABLE `directorio_peliculas` (
  `peliculas_id` int NOT NULL,
  `pelicula_nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pelicula_genero` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pelicula_año` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `actor_1` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `actor_2` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `actor_3` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `director` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pais` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `calificacion_imdb` varchar(10) NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `a_z` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `directorio_peliculas`
--

INSERT INTO `directorio_peliculas` (`peliculas_id`, `pelicula_nombre`, `pelicula_genero`, `pelicula_año`, `actor_1`, `actor_2`, `actor_3`, `director`, `pais`, `calificacion_imdb`, `descripcion`, `a_z`) VALUES
(1, 'Mad max_ Fury road', 'acción', '2015', 'Tom Hardy', 'Charlize Theron', 'Nicholas Hoult', 'Tim Miller', 'Australia', '8.1', 'La serie sigue a Max, quien comienza la serie como un oficial de policía en un futuro Australia que está experimentando un colapso social debido a la guerra, la escasez crítica de recursos y el ecocidio. A medida que Australia se degrada aún más hacia la barbarie, los gánsteres matan a la familia de Max, y él se convierte en un vagabundo errante en el yermo.', ''),
(2, 'Deadpool', 'acción', '2016', 'Ryan Reynolds', 'Morena Baccarin', 'Gina Carano', 'Tim Miller', 'Estados Unidos', '8', 'La película sigue a Wade Wilson, un mercenario con un retorcido sentido del humor que después de ser sometido a un experimento que los deja con deformaciones físicas y nuevas habilidades mutantes, persigue al hombre que casi destrozó su vida. ', ''),
(3, 'Avengers_ Endgame', 'acción', '2019', 'Robert Downey Jr.', 'Scarlett Johansson', 'Chris Evans', 'Anthony Russo', 'Estados Unidos', '8.4', 'Ambientada después de los catastróficos sucesos de Avengers: Infinity War, en los que Thanos eliminó deliberadamente a la mitad del universo al usar las gemas del infinito. Los que no se fueron, están desesperados por hacer algo (lo que sea) para traer de vuelta a sus seres queridos.', ''),
(4, 'Back to the future 2', 'Ciencia ficción', '1989', 'Michael J. Fox', 'Crispin Glover', 'Christopher Lloyd', 'Robert Zemeckis', 'Estados Unidos', '7.8', 'Un adolescente y un inventor extravagante viajan al pasado y al futuro, para alterar una serie de eventos desastrosos.', ''),
(5, 'The fifth element', 'Ciencia ficción', '1997', 'Bruce Willis', 'Milla Jovovich', 'Chris Tucker', 'Luc Besson', 'Francia', '7.6', 'En un colorido futuro, un taxista se convierte involuntariamente en la figura central en la búsqueda de un arma cósmica legendaria para mantener a raya a Zorg y a El Maligno.', ''),
(6, 'Fight club', 'Suspenso', '1999', 'Edward Norton', 'Brad Pitt', 'Helena Bonham Carter', 'David Fincher', 'Estados Unidos', '8.8', 'Un empleado de oficina insomne, harto de su vida, se cruza con un vendedor peculiar. Ambos crean un club de lucha clandestino como forma de terapia y, poco a poco, la organización crece y sus objetivos toman otro rumbo.', ''),
(7, 'Home alone', 'Infantil', '1990', 'Macaulay Culkin', 'Joe Pesci', 'Daniel Stern', 'Chris Columbus', 'Estados Unidos', '7.7', 'Un encantador niño de 8 años desafía a un torpe par de ladrones cuando, accidentalmente, sus padres lo olvidan en casa.', ''),
(8, 'It', 'Terror', '2017', 'Bill Skarsgard', 'Jaeden Martell', 'Finn Wolfhard', 'Andrés Muschietti', 'Estados unidos', '7.3', 'Varios niños de una pequeña ciudad del estado de Maine se alían para combatir a una entidad diabólica que adopta la forma de un payaso y desde hace mucho tiempo emerge cada 27 años para saciarse de sangre infantil', ''),
(9, 'Pulp fiction', 'Crimen', '1994', 'Jhon Travolta', 'Samuel L. Jackson', 'Uma Thurman', 'Quentin Tarantino', 'Estados Unidos', '8.9', 'La vida de un boxeador, dos sicarios, la esposa de un gánster y dos bandidos se entrelaza en una historia de violencia y redención.', ''),
(10, 'Rocky 4', 'Deportes', '1985', 'Sylvester Stallone', 'Dolph Lundgren', 'Carl Weathers', 'Sylvester Stallone', 'Estados Unidos', '6.9', 'El campeón Rocky Balboa va a Siberia para enfrentarse a un colosal oponente soviético: el hombre que mató a Apollo Creed.', ''),
(11, 'Scarface', 'Crimen', '1983', 'Al Pacino', 'Michelle Pfeiffer', 'Steven Bauer', 'Brian De Palma', 'Estados Unidos', '8.3', 'Un inmigrante cubano de las cárceles de Fidel Castro provoca un camino de destrucción en su ascenso en el mundo de las drogas de Miami.', ''),
(12, 'Shining', 'Terror', '1980', 'Jack Nicholson', 'Shelley Duvall', 'Danny Lloyd', 'Stanley Kubrick', 'Estados Unidos', '8.4', 'Jack Torrance se convierte en cuidador de invierno en el Hotel Overlook, en Colorado, con la esperanza de vencer su bloqueo con la escritura. Se instala allí junto con su esposa, Wendy, y su hijo, Danny, que está plagado de premoniciones psíquicas. Mientras la escritura de Jack no fluye y las visiones de Danny se vuelven más preocupantes, Jack descubre oscuros secretos del hotel y comienza a convertirse en un maníaco homicida, empeñado en aterrorizar a su familia', ''),
(13, 'Titanic', 'Romance', '1997', 'Kate Winslet', 'Leonardo DiCaprio', 'Billy Zane', 'James Cameron', 'Estados Unidos', '7.9', 'Una joven de la alta sociedad abandona a su arrogante pretendiente por un artista humilde en el trasatlántico que se hundió durante su viaje inaugural', ''),
(14, 'The wolf of wall street', 'Crimen', '2013', 'Jordan Belfort', 'Leonardo DiCaprio', 'Jonah Hill', 'Martin Scorsese', 'Estados Unidos', '8.2', 'Jordan Belfort, corredor de bolsa de Nueva York, quien fundó la compañía Stratton Oakmont cuando aún era un veinteañero, desarrolla hábitos de exceso y corrupción.', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `directorio_peliculas`
--
ALTER TABLE `directorio_peliculas`
  ADD PRIMARY KEY (`peliculas_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `directorio_peliculas`
--
ALTER TABLE `directorio_peliculas`
  MODIFY `peliculas_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

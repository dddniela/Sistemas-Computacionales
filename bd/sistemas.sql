-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2022 a las 23:54:39
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
-- Base de datos: `sistemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id_maestro` int(11) NOT NULL,
  `nombre_maestro` varchar(50) NOT NULL,
  `palabras_maestro` text NOT NULL,
  `informacion_maestro` text NOT NULL,
  `materias_maestro` text NOT NULL,
  `contacto_maestro` varchar(40) NOT NULL,
  `url_imagen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id_maestro`, `nombre_maestro`, `palabras_maestro`, `informacion_maestro`, `materias_maestro`, `contacto_maestro`, `url_imagen`) VALUES
(1, 'Raúl Héctor Trujillo Jimémez', 'El éxito es la suma de pequeños esfuerzos repetidos día a día.', 'Ing. en sistemas computacionales y Master en sistemas de información así como empresario con mas de 30 años en TI \r\nen el sector Financiero. <br>\r\nCon 35 años Catedrático a nivel licenciatura como maestrías en diversas Universidades en el puerto de Veracruz.', '<ul>\r\n<li>Administración de Proyectos</li>\r\n<li>Fundamentos de Programación</li>\r\n<li>Programación</li>\r\n<li>Fundamentos de Bases de Datos</li>\r\n<li>Administración de Base de Datos</li> \r\n<li>Minería de base de datos</li>\r\n<li>Base de datos distribuidas</li>\r\n<li>Redes</li> \r\n<li>Entre Otras</li>\r\n</ul>', 'raul.tj@veracruz.tecnm.mx', '...'),
(2, 'Rafael Córdoba Del Valle', 'Doctor en Sistemas y Ambientes Educativos. Catedrático del Departamento de Sistemas y Computación. \r\nLínea de investigación que desarrolla: Ambientes Virtuales de Aprendizaje. ', 'Publicación de diversos artículos en revistas nacionales. Participación de Congresos Nacionales e Internacionales. \r\nDesarrollo de un proyecto de investigación acerca de la inclusión de aplicaciones multimedia en la enseñanza y \r\naprendizaje para mejorar la comprensión de las fracciones en estudiantes de primaria. Miembro Activo del Consejo de \r\nTransformación Educativa.', '<ul>\r\n<li>Estructura de Datos</li>\r\n<li>Fundamentos de Programación</li>\r\n<li>Sistemas Operativos</li>\r\n<li>Taller de Investigación</li>\r\n<li>Programación</li>\r\n<li>Programación Estructurada</li>\r\n<li>Programación Orientada a Objetos</li>\r\n<li>Algoritmos y Lenguajes de Programación</li>\r\n<li>Tópicos Selectos de Programación</li>\r\n</ul>', 'rafael.cd@veracruz.tecnm.mx', '..'),
(3, 'Efrén Mendoza Chaparro', '\"Quien se atreve enseñar, nunca puede dejar de aprender\", \r\n10 años de experiencia laboral en maquiladora.', 'ING. EN ELECTRÓNICA (ITV), MAESTRÍA EN ADMINISTRACIÓN DE EMPRESAS (UANL) Manejo de Plataformas Educativas.\r\nCanal de YouTube:<br>\r\nhttps://www.youtube.com/channel/UCCstv4vk254i2SJXhDIFxtw ', '<ul>\r\n<li>Fundamentos de Programación</li>\r\n<li>Programación Básica</li>\r\n<li>Programación Avanzada</li>\r\n<li>Programación Lógica y Funcional</li>\r\n</ul>', 'efren.mc@veracruz.tecnm.mx', '...'),
(4, 'Jose Hernandez Silva', 'Catedrático fundador de la Lic. en Sistemas Computacionales.', 'Licenciatura: Ingeniería Industrial en Electrónica, Posgrado: Maestria en Sistemas de Informacion y Estudios de Doctorado en Arquitectura y Tecnología de los Sistemas Informáticos.', '<ul>\r\n<li>Redes de Computadoras</li>\r\n<li>Administracion de redes</li>\r\n<li>Conmutación y enrutamiento</li>\r\n<li>Lenguajes y Automatas</li>\r\n<li>Sistemas Operativos</li>\r\n<li>Taller de Sistemas Operativos</li>\r\n<li>Taller de Sistemas Concurrentes I y II</li>\r\n</ul>', 'jose.hs@veracruz.tecnm.mx', '...'),
(5, 'José Enrique Torres Montoya ', 'Orgullo ITVer : Bachillerato e Ingeniería en Sistemas Computacionales. Más de 25 años de docencia.', 'Maestría en Tecnología Educativa (Especialidad en Educación a Distancia). Diplomado y seminarista en Educación Ambiental. Artículos varios en ambas temáticas en congresos nacionales  e internacionales.', 'Asignaturas varias en el área de Sistemas. \r\nProgramación y Desarrollo Sustentable para diferentes planes de estudio.', 'enriquetorresmontoya@gmail.com ', '...'),
(6, 'Jorge Estudillo Ramírez', 'Pienso que todos las personas tenemos la capacidad mental de aprender en menor o mayor grado dependiendo de la disponibilidad y la actitud, lo cual nos permitirá enfocar nuestras destrezas y habilidades en la búsqueda del conocimiento. Como profesor, mi compromiso es ser guía y acompañante en dicho proceso para el logro de los objetivos planteados en el programa educativo.', 'Estudié la carrera de Ingeniería en Sistemas Computacionales en el Instituto Tecnológico de Tuxtla Gutiérrez. He realizado tres posgrados, dos maestrías y un doctorado. Cursé la Maestría en Redes y Telecomunicaciones en la Universidad Cristóbal Colón, la Maestría en Ciencias en Ciencias Computacionales y Doctorado en Ciencias en Ciencias Computacionales, éstos últimos en el Instituto Nacional de Astrofísica, Óptica y Electrónica.  Actualmente soy profesor de tiempo completo reconocido con perfil deseable por la Secretaría de Educación Pública.', '<ul>\r\n<li>Lenguajes y autómatas I</li>\r\n<li>Tópicos Avanzados de Programación</li>\r\n<li>Programación Avanzada</li>\r\n<li>Programación Orientada a Objetos</li>\r\n<li>Fundamentos de Programación</li>\r\n<li>Programación Lógica y Funcional</li>\r\n<li>Arquitecturas de Desarrollo Web</li>\r\n<li>Sistemas Distribuidos</li>\r\n<li>Programación Móvil</li>\r\n<li>Tecnologías de Desarrollo Ágil</li>\r\n<li>Taller de Investigación I</li>\r\n<li>Taller de Investigación II</li>\r\n<li>Fundamentos de Bases de Datos</li>\r\n<li>Redes de Computadoras</li>\r\n<li>Teleproceso</li>\r\n</ul>', 'jorge.er@veracruz.tecnm.mx', '...'),
(7, 'Noemi Del Carmen Tenorio Prieto', 'Profesor de tiempo completo con 27 años de experiencia docente, en el Tecnológico Nacional de México, campus Instituto Tecnológico Superior de San Andrés Tuxtla, Instituto Tecnológico Cerro Azul e Instituto Tecnológico de Veracruz.', 'Ha impartido asignaturas en las siguientes ingenierías:<br>\r\nIng. en Sistemas Computacionales, Industrial, Bioquímica, Química, Eléctrica, Electrónica, Energías Renovables, Mecatrónica, Mecánica,  y licenciatura en Administración.<br>\r\nProfesor con reconocimiento de Perfil Deseable.<br>\r\nEjerce la tutoría I y II para los alumnos de la carrera de Ingeniería en Sistemas Computacionales.<br>\r\n<br>\r\nFunciones administrativas ejercidas entre otras:<br>\r\n          &emsp;*  Enlace de Sistemas de Gestión del ITVER<br>\r\n          &emsp;*  Coordinadora de posgrado de la DEPI<br>\r\n          &emsp;*  Subcoordinadora de la Zona V de los Centros de Información del SNIT,<br>\r\n          &emsp;*  Instructor  de la Biblioteca Virtual tecnológica<br>\r\n          &emsp;*  Enlace de Conricyt<br>\r\n<br>\r\nEgresada del Instituto Tecnológico de Orizaba como Técnico laboratorista Químico,  Licenciado en Informática y Maestra en Ingeniería Administrativa.<br> \r\n<br>\r\nProfesor con Reconocimiento de Perfil deseable.<br> \r\n<br>\r\nHa realizado los siguientes diplomados:<br>\r\n       	&emsp;*  Microsoft Teams 4ª Emisión: Alternancia de dinámicas de enseñanza y aprendizaje.<br> \r\n        &emsp;   para la educación híbrida y remota (2021)<br>\r\n	&emsp;*  Educación Inclusiva (2020)<br>\r\n        &emsp;*  Recursos educativos en ambientes virtuales de aprendizaje (2017)<br>\r\n	&emsp;*  Formación de tutores (2016)<br>\r\n	&emsp;*  Formación docente en TIC (2014)<br>\r\n        &emsp;*  Formación y desarrollo de competencias docentes (2011)<br>\r\n	&emsp;*  Ingeniería Administrativa (2008)<br>\r\n	&emsp;*  Praxis de la Docencia (2004)<br>\r\n	&emsp;*  Iniciación a la Docencia (2002)<br>\r\n<br>\r\nCuenta con las siguientes certificaciones:<br>\r\nCertificado de competencias laborales en el estándar de competencia (CONOCER):<br>\r\n         &emsp;Impartición de cursos de formación del capital humano de manera presencial grupal<br> \r\n         &emsp;NORMA EC0217<br>\r\n         <br>\r\n         &emsp;Evaluación del aprendizaje con enfoque en competencias profesionales<br>\r\n         &emsp;NORMA EC0772<br>\r\n         <br>\r\n	 &emsp;Desarrollo de cursos en línea<br> \r\n         &emsp;NORMA EC0366<br>\r\n	 <br>\r\nHa publicado los siguientes libros:<br>\r\n         &emsp;Análisis de factibilidad de un CRAI, un nuevo paradigma de gestión del conocimiento<br>\r\n         &emsp;ISBN: 978-3-8417-6308-2<br>\r\n<br>\r\nEs coautora del siguiente libro:<br>\r\n        &emsp;Prospectivas y teorías integrales para ingeniería y administración<br>\r\n        &emsp;ISBN: 978-3-639-60263-0<br>\r\n<br>\r\nHa participado en los siguientes capítulos de libro:<br>\r\n         &emsp;Estudio Técnico.<br>\r\n         &emsp;ISBN: 978-1-4633-8127-1<br>\r\n<br>\r\n         &emsp;El efecto de la corrupción en las estrategias de gestión de las micro y pequeñas \r\n         &emsp;empresas. Casos: Boca del Río y Medellín, Veracruz, México.<br>\r\n         &emsp;ISBN: TOMO II 978-607-736-634-8<br>\r\n<br>\r\n         &emsp;Imagen pública de la micro y pequeña empresa en Veracruz, Veracruz.<br>\r\n         &emsp;ISBN:978-607-98311-6-5<br>\r\n<br>\r\n         &emsp;Innovación e Industria 4.0 en las micro y pequeñas empresas de Veracruz, Veracruz.<br>\r\n         &emsp;ISBN TOMO II: 978-1-4562-8208-0<br>\r\n<br>\r\n         &emsp;Caracterización de la cultura financiera en micro y pequeñas empresas del municipio \r\n         &emsp;de Veracruz del estado de Veracruz de Ignacio de la Llave, México.<br>\r\n         &emsp;ISBN TOMO II: 978-607-15-1602-2, entre otros.<br>\r\n<br>\r\nAsí como varios artículos de publicaciones<br>', '<ul>\r\n<li>Fundamentos de programación</li>\r\n<li>Algoritmos y Lenguajes de Programación</li>\r\n<li>Taller de Informática Administrativa I</li>\r\n<li>Análisis de Sistemas</li>\r\n<li>Introducción a la Ingeniería en Sistemas Computacionales</li>\r\n<li>Informática</li> \r\n<li>Planificación y Modelado</li>\r\n<li>Fundamentos de Desarrollo de Sistemas</li>\r\n<li>Taller de Administración</li>\r\n<li>Fundamentos de Investigación</li>\r\n<li>Taller de Investigación I</li>\r\n<li>Taller de Investigación II</li>\r\n<li>Cultura Empresarial</li>\r\n<li>Administración Estratégica</li>\r\n<li>Desarrollo Sustentable</li>\r\n<li>Taller de Gestión Empresarial</li>\r\n<li>Calidad Aplicada a la Gestión Empresarial</li>\r\n</ul>', 'noemi.tp@veracruz.tecnm.mx', ',,,'),
(8, 'Julia Guadalupe Trujillo Salamanca ', 'Bienvenidos a nuestra Alma Mater, espero sea de su agrado y que los servicios prestados se encuentren al nivel de sus expectativas. ', 'Ingeniería en Sistemas computacionales,  egresada del Instituto Tecnológico de Veracruz. \r\nMaestría en Sistemas de Información egresada de la Universidad Mexicana ', '<ul>\r\n<li>Fundamentos de programación</li>\r\n<li>Lenguajes algoritmicos</li>\r\n<li>Estructura de datos</li>\r\n<li>Lenguajes y autómatas</li>\r\n<li>Sistemas Operativos</li>\r\n<li>Taller de Investigacion II</li>\r\n<li>Administración de Centros de Computo</li>\r\n<li>Cultura Empresarial</li>\r\n</ul>', 'julia.ts@veracruz.tecnm.mx ', '...'),
(9, 'Esteban Jesús Mendoza y López', 'La educación es el proceso de facilitar el aprendizaje o la adquisición de conocimientos, habilidades, competencias, valores y hábitos que un grupo de personas transfieren a otras personas a través de la enseñanza, la discusión, el ejemplo, la formación y la investigación. ', 'Licenciatura Ingeniería en Sistemas Computacionales.', '<ul>\r\n<li>Fundamentos de Programación</li>\r\n<li>Sistemas Operativos</li>\r\n<li>Informática para la Administración</li>\r\n<li>Programación</li>\r\n</ul>', 'esteban.my@veracruz.tecnm.mx; ejmelo@yah', '...'),
(10, 'Delio Coss Camilo', 'La buena administración y gestión siempre te llevará a la excelencia.', 'Impacto de las redes sociales en el rendimiento académico (Articulo Journal).', '<ul>\r\n<li>Fundamentos de programación</li>\r\n<li>Programación orientada a objetos</li>\r\n<li>Fundamentos de base de datos</li>\r\n<li>Taller de base de datos</li>\r\n<li>Administración de base de datos</li>\r\n<li>Programación web, gestores de contenido</li>\r\n<li>Programación móvil</li>\r\n<li>Sistemas operativos</li>\r\n<li>Base de datos distribuidas</li>\r\n<li>Programación</li>\r\n<li>Fundamentos de investigación</li>\r\n</ul>', 'delio.cc@veracruz.tecnm.mx', '...'),
(11, 'Virginia Osorio Campos', '...', 'Maestría en Administración.', '<ul>\r\n<li>Programación</li> \r\n<li>Programación Estructurada</li>\r\n<li>Programación Básica</li>\r\n<li>Algoritmos y Lenguajes de Programación</li>\r\n<li>Algoritmos y Programación</li> \r\n<li>Lógica de Programación</li>\r\n<li>Tecnologías de la Información</li>\r\n<li>Taller de Informática Administrativa</li>\r\n</ul>', 'virginia.oc@veracruz.tecnm.mx', '...'),
(12, 'Senén Juárez Tinoco', 'Trabajar por una superación constante.', 'Ingeniero en Sistemas Computacionales, miembro de la primera generación en la Carrera de ISC en el Instituto Tecnológico de Veracruz. Maestría en Sistemas Computacionales con especialidad en Inteligencia Artificial. Experiencia laboral en el área de Tecnologías de la Información en sectores Comercial y Portuario. Empresario en áreas como Tecnologías de la Información y la Seguridad. Consultor en Factorías de Software.', '<ul>\r\n<li>Programación Orientada a Objetos</li>\r\n<li>Tópicos Avanzados de Programación</li>\r\n<li>Ingeniería de Software</li>\r\n<li>Taller de Investigación I y II</li>\r\n<li>Introducción a las Bases de Datos</li>\r\n<li>Administración de Bases de Datos</li>\r\n</ul>', 'senen.jt@veracruz.tecnm.mx', '...'),
(13, 'Lizbeth Sanchez Ferrer', 'El estudio sin deseo estropea la memoria y no retiene nada de lo que toma (Leonardo da Vinci).<br>\r\n<br>\r\nEn las enseñanzas del budismo tibetano, nos dicen que a lo largo de nuestra vida necesitamos siempre tener un maestro que nos guíe y tener la disposición de aprender de cada uno de nuestros maestros. Dicho maestro será alguien formal o informal. ', 'Egresada de licenciatura del IT de Veracruz de la carrera en Ingeniería en \r\nsistemas computacionales y de la Universidad Cristóbal Colón de la maestría en \r\nredes y telecomunicaciones.<br>\r\n<br>\r\nA lo largo de mis 28 años de servicio he colaborado en:<br>\r\n<ul>\r\n<li>Proyectos de investigación.</li>\r\n<li>Cuerpos académicos.</li>\r\n<li>Publicaciones.</li>\r\n<li>Ponencias.</li>\r\n<li>Instructora de cursos.</li>\r\n<li>Certificaciones.</li>\r\n<li>Diseño curricular a nivel nacional.</li>\r\n<li>Concursos de creatividad, innovación.</li>\r\n<li>Puestos administrativos.</li>\r\n<li>Configuración de redes.</li>\r\n<li>Capacitación a empresas.</li>\r\n<li>Asesor de tesis de licenciatura y maestría.</li>\r\n<li>Estadías profesionales en diversas empresas.</li>\r\n<li>Convenios con el sector privado y de gobierno.</li>\r\n</ul>', '<ul>\r\n<li>Programación</li>\r\n<li>Administración de centros de cómputo</li>\r\n<li>Auditoría de datos</li>\r\n<li>Taller de investigación</li>\r\n<li>Telecomunicaciones</li>\r\n<li>Redes de computadoras</li>\r\n<li>Administración de redes</li>\r\n</ul>', 'lizbeth.sf@veracruz.tecnm.mx', '...'),
(14, 'Gabriel Antonio Sánchez Ortiz', 'No sé qué le pasa a la gente: no aprenden comprendiendo; aprenden de alguna otra forma, por la rutina, o de algún otro modo. ¡Que frágil es su conocimiento! R.F.', 'Licenciatura en Ingeniería en Sistemas Computacionales.', '<ul>\r\n<li>Conmutación y Enrutamiento en Redes de Datos</li>\r\n<li>Sistemas Operativos de Red</li>\r\n<li>Algorítmica</li>\r\n<li>Administración de Bases de Datos</li>\r\n<li>Análisis de Algoritmos</li>\r\n<li>Fundamentos de Telecomunicaciones</li>\r\n<li>Fundamentos de Programación</li>\r\n<li>Redes de Computadoras</li>\r\n</ul>', 'gabriel.so@veracruz.tecnm.mx', '...'),
(15, 'Ofelia Gutiérrez Giraldi', '\"Un profesor trabaja para la eternidad, nadie puede decir dónde acaba su influencia\" Henry Adams.', 'Maestría en Educación, con especialidad en Organización y Administración de la Educación Superior. <br>\r\n<br>\r\nMaestría en Sistemas de Información.', 'En licenciatura: \r\n<ul>\r\n<li>Lenguajes y Autómatas I y II</li>\r\n<li>Ingeniería de Software</li>\r\n<li>Estructura de Datos</li>\r\n<li>Taller de Investigación I y II</li>\r\n<li>Compiladores</li>\r\n<li>Teoría de la Computación</li>\r\n</ul>\r\n\r\nEn Maestría: \r\n<ul>\r\n<li>Teoría de la Computación</li>\r\n<li>Seminario de Investigación</li>\r\n<li>Tópicos de Computación</li>\r\n</ul>', 'ofelia.gg@veracruz.tecnm.mx', '..'),
(16, 'Abelardo Rodríguez Leon', 'Desde que fui estudiante (allá por finales de los 90) me gusto impulsar la investigación entre los jóvenes compañeros de ISC. Hoy ya mas de 30 años después y con un cúmulo de experiencia aplicada en el desarrollo de proyectos y haber tenido la formación adecuada (maestría y doctorado) me sigue motivando el hecho de enseñarles a creer a los estudiantes del ITV en sus propias capacidad para crear cosas útiles y sorprendentes. Porque de eso se trata todo, no de ser el mas popular o el que mas sabe, sino de creer que podemos solucionar problemas que ayuden a otros a mejorar su paso por este mundo.', 'Culmine la ISC en 1989, la maestría en Ciencias de la Computación en 1996 y el Doctorado en Ciencias de la Computación en 2007. Desde 1999 he presentado y desarrollado proyectos de investigación financiados por diferentes entidades federales acompañado por otros compañeros profesores y con la participación de alumnos. En 2018 logre mi caro anhelo de ser parte del SNI, logro que ha ayudado a participar también a otras áreas como en la Maestría en Eficiencia Energética y Energías Renovables.', '<ul>\r\n<li>Programación Orientada a Objetos</li>\r\n<li>Graficación</li>\r\n<li>Tópicos Avanzados de Programación</li>\r\n<li>Seminario 1-2</li>\r\n<li>Taller de Sistemas de Altas Prestaciones</li>\r\n<li>Computación Concurrente</li>\r\n<li>Programación Concurrente</li>\r\n<li>Concurrencia con videojuegos y GPUs</li>\r\n</ul>', 'abelardo.rl@veracruz.tecnm.mx y 22917206', '...'),
(17, 'José Gerardo Javier Ortiz Quiroz', 'Desarrolla tu algoritmo para lograr tus objetivos profesionales y personales. existen muchas alternativas, pero siempre hay una mejor. \r\n\"No lo intentes hazlo\": jgjoq.\r\n', 'ingeniero industrial eléctrico con estudios de maestría en sistemas de información, catedrático en el itv desde 1974 y precursor organizador de la carrera de i.s.c. en los institutos tecnológicos. así como ocupado diferentes cargos de jefatura y comisiones académicas.', '<ul>\r\n<li>Calculo</li>\r\n<li>Electricidad y magnetismo</li>\r\n<li>Ingeniería eléctrica</li>\r\n<li>Lenguajes algorítmicos</li>\r\n<li>Introducción a las ciencias computacionales</li>\r\n<li>Lenguajes de programación: fortran, basic, pascal, dbase, c/c++, java</li>\r\n<li>Estructura de datos i y ii</li>\r\n<li>Administración de archivos</li>\r\n<li>Algoritmos computacionales</li>\r\n<li>Bases de datos</li>\r\n</ul>', 'jose.oq@veracruz.tecnm.mx', '...'),
(18, 'Carlos Ley Borraz', 'A mis estudiantes y a la comunidad estudiantil en general del Tecnológico Nacional de México(TECNM), me permito ratificar mi compromiso que como docente adquirimos al tener la oportunidad de ser parte del proyecto educativo a nivel nacional, contribuir directamente en los programas educativos institucionales y coadyuvar a logro de sus metas personales y profesionales.<br>\r\nAgradezco infinitamente la confianza y la oportunidad de servir en esta noble actividad mediante la convivencia y dinámicas educativas que actualmente exigen los retos de nuestro país.<br>\r\n<br>\r\nGracias.', 'Diplomado en formación Docente (ITESM)<br>\r\nEspecialidad en Informática para la administración gerencial(SALLE)<br>\r\nMaestría en Ingeniería de Sistemas (ITESM)<br>\r\nMaestría en Ciencias Computacionales (Instituto de Ingeniería U.V.)<br>', '<ul>\r\n<li>Informática</li>\r\n<li>Gestión de Proyectos</li>\r\n<li>Cultura Empresarial</li>\r\n<li>Taller de Investigación</li>\r\n</ul>', 'carlos.lb@veracruz.tecnm.mx', '...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(50) NOT NULL,
  `area_materia` varchar(20) NOT NULL,
  `semestre_materia` varchar(20) NOT NULL,
  `descripcion_materia` text NOT NULL,
  `especialidad_materia` tinyint(1) NOT NULL,
  `url_materia` varchar(70) NOT NULL,
  `url_programa` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre_materia`, `area_materia`, `semestre_materia`, `descripcion_materia`, `especialidad_materia`, `url_materia`, `url_programa`) VALUES
(47, 'Cálculo Diferencial', 'Calculo', '1', 'Plantea y resuelve problemas utilizando las definiciones de límite y derivada de funciones de una variable para la elaboración de modelos matemáticos aplicados.', 0, '...', '...'),
(48, 'Fundamentos de Programación', 'Programacion', '1', 'Aplica algoritmos y lenguajes de programación para diseñar e implementar soluciones a problemáticas del entorno.', 0, '...', '...'),
(49, 'Taller de Ética', 'Asignaturas Comunes', '1', 'Desarrolla conciencia sobre el significado y sentido de la Ética para orientar su comportamiento en el contexto social y profesional.', 0, '...', '...'),
(50, 'Matemáticas Discretas', 'Automatas', '1', 'Comprende y aplica los conceptos básicos de lógica matemática, relaciones, grafos y árboles para aplicarlos a modelos que resuelvan problemas computacionales.', 0, '...', '...'),
(51, 'Taller de Administración', 'Administracion', '1', 'Comprender y aplicar los procesos en las estructuras y funciones fundamentales de las organizaciones para contribuir sustantivamente con los procesos de planeación.', 0, '...', '...'),
(52, 'Fundamentos de Investigación', 'Investigacion', '1', 'Comprender y aplicar los procesos en las estructuras y funciones fundamentales de las organizaciones para contribuir sustantivamente con los procesos de planeación.', 0, '...', '...'),
(53, 'Cálculo Integral', 'Calculo', '2', 'Aplica la definición de integral y las técnicas de integración para resolver problemas de ingeniería.', 0, '...', '...'),
(54, 'Programación Orientada a Objetos', 'Programacion', '2', 'Aplica la programación orientada a objetos para resolver problemas reales y de ingeniería.', 0, '...', '...'),
(55, 'Contabilidad Financiera', 'Administracion', '2', 'Conoce, analiza e interpreta la información financiera para la toma de decisiones empresariales.', 0, '...', '...'),
(56, 'Química', 'Asignaturas Comunes', '2', 'Comprende la estructura de la materia y su relación con las propiedades físicas y químicas, así como a las técnicas requeridas para la construcción de equipos o sistemas electrónicos.', 0, '...', '...'),
(57, 'Álgebra Lineal', 'Matematicas Aplicada', '2', 'Aplica la definición de integral y las técnicas de integración para resolver problemas de ingeniería.', 0, '...', '...'),
(58, 'Probabilidad y Estadística', 'Estadistica', '2', 'Aplica la programación orientada a objetos para resolver problemas reales y de ingeniería.', 0, '...', '...'),
(59, 'Calculo Vectorial', 'Calculo', '3', 'Aplica los principios y técnicas básicas del cálculo vectorial para resolver problemas de ingeniería del entorno.', 0, '...', '...'),
(60, 'Estructura de datos', 'Programacion', '3', 'Conoce, comprende y aplica eficientemente estructuras de datos, métodos de ordenamiento y búsqueda para la optimización del rendimiento de soluciones a problemas del mundo real.', 0, '...', '...'),
(61, 'Cultura empresarial', 'Administracion', '3', 'Construye un plan de negocios para crear una empresa considerando el análisis de mercado, estudio técnico, organización, análisis financiero y estados financieros del proyecto.', 0, '...', '..'),
(62, 'Investigación de operaciones', 'Estadistica', '3', 'Formula soluciones óptimas para generar una mejor alternativa para la toma de decisiones aplicando conceptos de los modelos matemáticos, técnicas y algoritmos.', 0, '...', '...'),
(63, 'Desarrollo sustentable', 'Asignaturas Comunes', '3', 'Aplica una visión sustentable, en los ámbitos social, económico y ambiental que le permitirá evaluar y disminuir el impacto de la sociedad sobre el entorno, tomando en cuenta estrategias y considerando profesionalmente los valores ambientales.', 0, '...', '...'),
(64, 'Fisca general', 'Matematicas Aplicada', '3', 'Comprender los fenómenos físicos en los que intervienen fuerzas, movimiento, trabajo, energía, así como los principios básicos de Óptica y Termodinámica, además comprende y aplica las leyes y principios fundamentales de la electricidad y el magnetismo.', 0, '...', '...'),
(65, 'Ecuaciones diferenciales', 'Calculo', '4', 'Aplica los métodos de solución de ecuaciones diferenciales ordinarias para resolver problemas que involucran sistemas dinámicos que se presentan en la ingeniería.', 0, '...', '...'),
(66, 'Métodos numéricos', 'Matematicas Aplicada', '4', 'Aplica los métodos numéricos para resolver problemas científicos y de ingeniería utilizando la computadora.', 0, '...', '...'),
(67, 'Tópicos avanzados de programación', 'Programacion', '4', 'Desarrolla soluciones de software para resolver problemas en diversos contextos utilizando programación concurrente, acceso a datos, que soporten interfaz gráfica de usuario y consideren dispositivos móviles.', 0, '...', '...'),
(68, 'Fundamentos de bases de datos', 'Bases de datos', '4', 'Analiza requerimientos y diseña bases de datos para generar soluciones al tratamiento de información basándose en modelos y estándares', 0, '...', '...'),
(69, 'Simulación', 'Estadistica', '4', 'Analiza, modela, desarrolla y experimenta sistemas productivos y de servicios, reales o hipotéticos, a través de la simulación de eventos discretos, para dar servicio al usuario que necesite tomar decisiones, con el fin de describir con claridad su funcionamiento, aplicando herramientas matemáticas.', 0, '...', '...'),
(70, 'Principios eléctricos y aplicaciones digitales', 'Electronica', '4', 'Comprende y aplica las herramientas básicas de análisis de los sistemas analógicos y digitales para resolver problemas del ámbito computacional.', 0, '...', '...'),
(71, 'Graficación', 'Programacion', '5', 'Diseña e implementa modelos gráficos para enriquecer visualmente software diverso de aplicación en entornos de programación web, móvil y stand-alone, con base al trazo, manipulación, iluminación, sombreado y animación de objetos bidimensionales y tridimensionales.', 0, '...', '...'),
(72, 'Fundamentos de telecomunicaciones', 'Redes', '5', 'Analiza los componentes y la funcionalidad de diferentes sistemas de comunicación para evaluar las tecnologías utilizadas actualmente como parte de la solución de un proyecto de conectividad.', 0, '...', '...'),
(73, 'Taller de base de datos', 'Bases de datos', '5', 'Implementa bases de datos para apoyar la toma de decisiones considerando las reglas de negocio', 0, '...', '...'),
(74, 'Sistemas operativos', 'Sistemas operativos', '5', 'Aplica los paradigmas de diseño de los sistemas operativos actuales y emergentes, para el manejo de los recursos del sistema.', 0, '...', '...'),
(75, 'Fundamentos de ingeniería de software', 'Ingenieria', '5', 'Realiza el análisis de un proyecto de software, a partir de la identificación del modelo de negocios de la organización que permita alcanzar estándares y métricas de calidad.', 0, '...', '...'),
(76, 'Arquitectura de computadoras', 'Electronica', '5', 'Conoce diferentes modelos de arquitecturas y recomienda aplicaciones para resolver problemas de su entorno profesional.', 0, '...', '...'),
(77, 'Lenguajes y autómatas I', 'Automatas', '6', 'Define, diseña y programa las fases del analizador léxico y sintáctico de un traductor o compilador para preámbulo de la construcción de un compilador.', 0, '...', '...'),
(78, 'Redes de computadoras', 'Redes', '6', 'Diseña y elabora un proyecto de cableado estructurado aplicando normas y estándares vigentes para la solución de problemas de conectividad.', 0, '...', '...'),
(79, 'Administración de bases de datos', 'Bases de datos', '6', 'Instala, configura y administra un gestor de base de datos para el manejo de la información de una organización, optimizando la infraestructura computacional existente.', 0, '...', '...'),
(80, 'Taller de sistemas operativos', 'Sistemas operativos', '6', 'Conoce, identifica, selecciona y administra diferentes sistemas operativos con el fin de resolver problemáticas reales, así como aplicar procedimientos de interoperabilidad entre diferentes sistemas operativos.', 0, '...', '...'),
(81, 'Ingeniería de software', 'Ingenieria', '6', 'Desarrolla soluciones de software, considerando la metodología y herramientas para la elaboración de un proyecto aplicativo en diferentes escenarios.', 0, '...', '...'),
(82, 'Lenguajes de interfaz', 'Electronica', '6', 'Desarrollar software para establecer la interfaz hombre-máquina y máquina-máquina', 0, '...', '...'),
(83, 'Lenguajes y autómatas II', 'Automatas', '7', 'Implementa un compilador para un lenguaje específico considerando las etapas del mismo.', 0, '...', '...'),
(84, 'Conmutación y enrutamiento de redes de datos', 'Redes', '7', 'Diseña, instala y configura redes LAN inalámbricas aplicando normas y estándares vigentes para la solución de problemas de conectividad.', 0, '...', '...'),
(85, 'Taller de investigación I', 'Investigacion', '7', 'Elabora un protocolo de investigación en el que presenta soluciones científico-tecnológicas a problemáticas relacionadas con su campo profesional en diversos contextos.', 0, '...', '...'),
(86, 'Gestión de proyectos de software', 'Ingenieria', '7', 'Aplica metodologías e instrumentos, para garantizar la gestión adecuada de un proyecto de software.', 0, '...', '...'),
(87, 'Sistemas programables', 'Electronica', '7', 'Aplica microcontroladores en el diseño de interfaces hombre—máquina y máquina-máquina de sistemas programables.', 0, '...', '...'),
(88, 'Programación lógica funcional', 'Programacion', '8', 'Conoce los principios lógicos y funcionales de la programación para aplicarlos en la resolución de problemas.', 0, '...', '...'),
(89, 'Administración de redes', 'Redes', '8', 'Configura y administra servicios de red para el uso eficiente y confiable de la infraestructura tecnológica de la organización.', 0, '...', '...'),
(90, 'Taller de investigación II', 'Investigacion', '8', 'Consolida el protocolo para ejecutar la investigación y obtener productos para su exposición, defensa y gestión de su transcendencia.', 0, '...', '...'),
(91, 'Programación web', 'Web', '8', 'Desarrolla aplicaciones web dinámicas del lado cliente y del servidor, considerando la conectividad a orígenes de datos, la interconectividad entre aplicaciones y cómputo en la nube.', 0, '...', '...'),
(92, 'Inteligencia artificial', 'IA', '9', 'Conocer los principios y el desarrollo de la Inteligencia Artificial, identificando sus\r\naplicaciones (robótica, visión computacional, lógica difusa, redes neuronales y\r\nprocesamiento de lenguaje natural) para emplearlas en el diseño e implementación\r\nde sistemas inteligentes que faciliten las tareas del ser humano.', 0, '...', '...');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

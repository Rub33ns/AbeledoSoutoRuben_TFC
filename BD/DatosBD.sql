SET FOREIGN_KEY_CHECKS = 0;
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `contrasena`,`imagenPerfil`) VALUES
(1, 'Prueba', 'Prueba','Prueba@gmail.com','123456','https://cdn-icons-png.flaticon.com/512/3135/3135768.png');

INSERT INTO `parteCuerpo` (`id`, `nombre`) VALUES
(1, 'Pierna'),
(2, 'Pecho'),
(3, 'Brazo'),
(4, 'Espalda');


INSERT INTO `ejercicios` 
(`idParteCuerpo`, `nombreEjercicio`, `descripcion`, `repeticones`, `tiempoRepeticones`, `imagenEjercicio`) VALUES

(1, 'Sentadillas', 'Fortalece cuádriceps, glúteos y femorales', '15', '30s', '../img/sentadillas.png'),
(1, 'Zancadas', 'Mejora equilibrio y fuerza en piernas', '12', '30s', '../img/zancadas.png'),
(1, 'Elevaciones de talones',  'Trabaja los gemelos', '20', '20s', '../img/elevacionesDeTalones.png'),
(1, 'Sentadilla búlgara',  'Ejercicio unilateral de fuerza', '10', '30s', '../img/sentadillaBulgara.png'),
(1, 'Peso muerto',  'Trabaja glúteos, isquios y zona lumbar', '12', '40s', '../img/pesoMuerto.png'),

(2, 'Flexiones',  'Ejercicio base para el pecho', '15', '30s', '../img/flexiones.png'),
(2, 'Press de banca',  'Fortalece pectorales mayores', '10', '40s', '../img/pressDeBanca.png'),
(2, 'Aperturas con mancuernas',  'Mejora amplitud de pecho', '12', '30s', '../img/aperturaConMancuernas.png'),
(2, 'Fondos en paralelas',  'Trabaja pecho y tríceps', '10', '30s', '../img/fondosEnParalelas.png'),
(2, 'Flexiones inclinadas',  'Mayor énfasis en la parte superior del pecho', '15', '30s', '../img/flexionesInclinadas.png'),

(3, 'Curl de bíceps',  'Aísla y fortalece bíceps', '12', '30s', '../img/curlDeBiceps.png'),
(3, 'Extensión de tríceps', 'Trabaja la parte posterior del brazo', '12', '25s', '../img/extensionDeTriceps.png'),
(3, 'Martillo con mancuernas', 'Estimula antebrazos y bíceps', '10', '20s', '../img/martilloConMancuerna.png'),
(3, 'Curl concentrado',  'Aislamiento máximo del bíceps', '8', '30s', '../img/curlConcentrado.png'),
(3, 'Flexiones de tríceps',  'Trabaja tríceps en posición invertida', '12', '30s', '../img/flexionesDeTriceps.png'),

(4, 'Remo con barra',  'Trabaja la zona media de la espalda', '12', '30s', '../img/remoConBarra.png'),
(4, 'Remo en máquina',  'Fortalece dorsales y romboides', '12', '30s', '../img/remoEnMaquina.png'),
(4, 'Remo en barra T',  'Desarrolla dorsales y zona baja de la espalda', '10', '30s', '../img/remoEnBarraT.png'),
(4, 'Jalón tras nuca',  'Activa dorsales y trapecios', '12', '30s', '../img/jalonTrasLaNuca.png'),
(4, 'Remo con mancuerna a una mano',  'Ejercicio unilateral para espalda media', '12', '30s', '../img/remoConMancuernaAUnaMano.png'),
(4, 'Peso muerto con barra',  'Trabaja espalda baja, glúteos e isquios', '10', '40s', '../img/pesoMuertoConBarra.png'),
(4, 'Dominadas',  'Ejercicio compuesto para dorsales y core', 'Al fallo', '30s', '../img/dominadas.png');

SET FOREIGN_KEY_CHECKS = 1;

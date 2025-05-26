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

(1, 'Sentadillas', 'Fortalece cuádriceps, glúteos y femorales', '15', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Squat_d752e42d-02ba-4692-b300-c6e67ad5a4f5_600x600.png?v=1612138811'),
(1, 'Zancadas', 'Mejora equilibrio y fuerza en piernas', '12', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Lunge_600x600.png?v=1612138903'),
(1, 'Elevaciones de talones',  'Trabaja los gemelos', '20', '20s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Seated-Calf-Raise_8c8641b2-10f2-4dc8-9adb-8d80fd1a16d0_600x600.png?v=1612137064'),
(1, 'Sentadilla búlgara',  'Ejercicio unilateral de fuerza', '10', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Bodyweight-Bulgarian-Split-Squat_600x600.png?v=1655223826'),
(1, 'Peso muerto',  'Trabaja glúteos, isquios y zona lumbar', '12', '40s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Dumbbell-Romanian-Deadlift_35135213-e0df-4ef2-b093-22ed8d04dc41_600x600.png?v=1621162896'),

(2, 'Flexiones',  'Ejercicio base para el pecho', '15', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Push-Ups_600x600.png?v=1640121436'),
(2, 'Press de banca',  'Fortalece pectorales mayores', '10', '40s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Barbell-Bench-Press_0316b783-43b2-44f8-8a2b-b177a2cfcbfc_600x600.png?v=1612137800'),
(2, 'Aperturas con mancuernas',  'Mejora amplitud de pecho', '12', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Incline-Dumbbell-Fly_44d253c3-da60-45b2-b0ba-88a3bb79da09_600x600.png?v=1612137870'),
(2, 'Fondos en paralelas',  'Trabaja pecho y tríceps', '10', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Parallel-Dip-Bar_600x600.png?v=1619977962'),
(2, 'Flexiones inclinadas',  'Mayor énfasis en la parte superior del pecho', '15', '30s', 'https://cdni.iconscout.com/illustration/premium/thumb/flexiones-inclinadas-9297878-7588948.png'),

(3, 'Curl de bíceps',  'Aísla y fortalece bíceps', '12', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Alternating-Dumbbell-Curl_ad879dc4-b4fb-4ca7-b2b1-6e1eb5d78252_600x600.png?v=1612137169'),
(3, 'Extensión de tríceps', 'Trabaja la parte posterior del brazo', '12', '25s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Triceps-Pressdown_e759437b-6200-4b44-b484-14db770024a4_600x600.png?v=1612136845'),
(3, 'Martillo con mancuernas', 'Estimula antebrazos y bíceps', '10', '20s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Hammer-Curl_da9fea8b-fc81-4a4f-9af1-aea1b85239d7_600x600.png?v=1612137282'),
(3, 'Curl concentrado',  'Aislamiento máximo del bíceps', '8', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Dumbbell-Concentration-Curl_289b5739-4bdd-40e6-a195-6ecfcc685126_600x600.png?v=1612137334'),
(3, 'Flexiones de tríceps',  'Trabaja tríceps en posición invertida', '12', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Bench-Dips_600x600.png?v=1619977992'),

(4, 'Remo con barra',  'Trabaja la zona media de la espalda', '12', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Barbell-Row_4beb1d94-bac9-4538-9578-2d9cf93ef008_600x600.png?v=1612138201'),
(4, 'Remo en máquina',  'Fortalece dorsales y romboides', '12', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Seated-Cable-Row_9470fa48-f0d1-40b1-a980-caee9e6f2e53_600x600.png?v=1612138127'),
(4, 'Remo en barra T',  'Desarrolla dorsales y zona baja de la espalda', '10', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/T-Bar-Rows_600x600.png?v=1612092112'),
(4, 'Jalón tras nuca',  'Activa dorsales y trapecios', '12', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Behind-Neck-Pulldown_f0f50b6b-ad34-48cd-8663-84ee6a581928_600x600.png?v=1612138228'),
(4, 'Remo con mancuerna a una mano',  'Ejercicio unilateral para espalda media', '12', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Dumbbell-Bent-Over-Row-_Single-Arm_49867db3-f465-4fbc-b359-29cbdda502e2_600x600.png?v=1612138069'),
(4, 'Peso muerto con barra',  'Trabaja espalda baja, glúteos e isquios', '10', '40s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Barbell-Deadlift_600x600.png?v=1619977112'),
(4, 'Dominadas',  'Ejercicio compuesto para dorsales y core', 'Al fallo', '30s', 'https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Pull-Up_600x600.png?v=1619977612');

SET FOREIGN_KEY_CHECKS = 1;

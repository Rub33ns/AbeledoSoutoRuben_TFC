DROP DATABASE IF EXISTS `PlayFitBD`;

CREATE DATABASE `PlayFitBD`;
USE `PlayFitBD`;

CREATE TABLE usuarios (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(100) NOT NULL,
    `apellido` VARCHAR(100) NOT NULL,
    `correo` VARCHAR(150) NOT NULL UNIQUE,
    `contrasena` VARCHAR(255) NOT NULL,
    `imagenPerfil` VARCHAR(255) NOT NULL
);

CREATE TABLE parteCuerpo (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(100) NOT NULL   
);

CREATE TABLE ejercicios (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `idParteCuerpo` INT NOT NULL,
    `nombreEjercicio` VARCHAR(100) NOT NULL,
    `descripcion` VARCHAR(150) NOT NULL,
    `repeticones` VARCHAR(255) NOT NULL,
    `tiempoRepeticones` VARCHAR(255) NOT NULL,
    `imagenEjercicio` VARCHAR(255) NOT NULL,

    FOREIGN KEY (`idParteCuerpo`) REFERENCES parteCuerpo(`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

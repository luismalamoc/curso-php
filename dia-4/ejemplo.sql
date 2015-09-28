/*
 * CREACIÓN DE BASE DE DATOS
 */
CREATE DATABASE `ejemplo`;

/*
 * UTILIZACIÓN DE BASE DE DATOS
 */
USE `ejemplo`;

/*
 * CREACIÓN DE TABLAS
 */
CREATE TABLE IF NOT EXISTS `persona` 
(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL, 
	`apellido` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL,  
	PRIMARY KEY (`id`)	
) 
ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE utf8_spanish_ci AUTO_INCREMENT=1;

/*
 * CREACIÓN DE USUARIOS Y ASIGNACIÓN DE PERMISOLOGÍAS
 */
GRANT ALL PRIVILEGES ON `ejemplo.*` TO 'prueba'@'localhost' IDENTIFIED BY '12345';
/*
 * asignación de permisologías específicas para el administrador
 */
GRANT SELECT , INSERT , UPDATE , DELETE 
    ON `persona` TO 'prueba';

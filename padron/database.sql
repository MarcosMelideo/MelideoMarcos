create database padron;

use padron;

CREATE TABLE `persona` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` int(100) NOT NULL,
  `fec_nac` date NOT NULL,
  `colegio_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `colegio` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
);
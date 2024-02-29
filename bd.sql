/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - bdmvc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bdmvc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `bdmvc`;

/*Table structure for table `t_programa` */

DROP TABLE IF EXISTS `t_programa`;

CREATE TABLE `t_programa` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_uid` varchar(10) DEFAULT NULL,
  `pro_nombre` varchar(30) NOT NULL,
  `pro_codigo` varchar(20) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_programa` */

/*Table structure for table `t_usuario_programa` */

DROP TABLE IF EXISTS `t_usuario_programa`;

CREATE TABLE `t_usuario_programa` (
  `uspro_id` int(11) NOT NULL AUTO_INCREMENT,
  `uspro_uid` varchar(10) DEFAULT NULL,
  `uspro_usu_id` int(11) DEFAULT NULL,
  `uspro_pro_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`uspro_id`),
  KEY `uspro_usu_id` (`uspro_usu_id`),
  KEY `uspro_pro_id` (`uspro_pro_id`),
  CONSTRAINT `t_usuario_programa_ibfk_1` FOREIGN KEY (`uspro_usu_id`) REFERENCES `usuarios` (`usu_id`),
  CONSTRAINT `t_usuario_programa_ibfk_2` FOREIGN KEY (`uspro_pro_id`) REFERENCES `t_programa` (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_usuario_programa` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_uid` varchar(10) DEFAULT NULL,
  `usu_nombres` varchar(30) NOT NULL,
  `usu_apellidos` varchar(30) NOT NULL,
  `usu_email` varchar(30) NOT NULL,
  `usu_contraseña` varchar(100) NOT NULL,
  `usu_telefono` varchar(10) NOT NULL,
  `usu_fch_nac` date DEFAULT NULL,
  `usu_rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`usu_id`,`usu_uid`,`usu_nombres`,`usu_apellidos`,`usu_email`,`usu_contraseña`,`usu_telefono`,`usu_fch_nac`,`usu_rol`) values 
(16,'65e09498b5','Faver','Marin','faveryesid19@gmail.com','7c4a8d09ca3762af61e59520943dc26494f8941b','9897797','0088-08-08',1),
(19,'65e0996aa7','daniela','lopez','daniela123@gmail.com','7c4a8d09ca3762af61e59520943dc26494f8941b','9976668','0009-09-09',2),
(20,'65e0b1b593','cris','jr','cris123@gmail.com','7c4a8d09ca3762af61e59520943dc26494f8941b','8878787796','0009-09-09',3);

/*CONTRASEÑA DEL 1 AL 6 TODOS LOS USERS*/

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

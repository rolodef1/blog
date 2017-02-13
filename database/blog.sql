/*
SQLyog Community v12.09 (64 bit)
MySQL - 5.7.14 : Database - blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `blog`;

/*Data for the table `articles` */

insert  into `articles`(`id`,`title`,`content`,`user_id`,`category_id`,`created_at`,`updated_at`,`slug`) values (1,'Mi inicio en Laravel','Buscando nuevas tecnologias para iniciar un proyecto personal, encontre recomendaciones sobre Laravel',1,1,'2017-02-12 22:22:08','2017-02-12 22:22:08','mi-inicio-en-laravel');

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`created_at`,`updated_at`) values (1,'PHP','2017-02-12 22:16:51','2017-02-12 22:16:51');

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`type`,`remember_token`,`created_at`,`updated_at`) values (1,'Isaac Carrera','rolodef1@gmail.com','$2y$10$bzKbSMJXVucgNhXO2jH/L.k/MS3j13bhT3fYRD/UZdQXpUITHoosK','member',NULL,'2017-02-12 22:15:29','2017-02-12 22:15:29');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

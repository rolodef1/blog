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

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`type`,`remember_token`,`created_at`,`updated_at`) values (1,'Rodrigo Isaac Carrera Estrada','rolodef1@gmail.com','$2y$10$F7UU2C9EeQ2xS5uuxD1wuup0FrxRW7qw93Y3lDbxU7xHtapJaaYi6','admin','kgea96CD4xt32g5vwFWVrgP59H5B4V7HzDXdxQnPDVll6RlVqwgWs8s3sepM','2017-02-14 15:48:39','2017-02-14 15:48:39');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

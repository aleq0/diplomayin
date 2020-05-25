/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.20 : Database - diplomayin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2020_05_17_233629_create_temperature_table',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `temperatures` */

DROP TABLE IF EXISTS `temperatures`;

CREATE TABLE `temperatures` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `temperatures` */

insert  into `temperatures`(`id`,`value`,`date`,`time`) values 
(1,'16','2020-05-19','00:00:00'),
(2,'29','2020-05-19','01:00:00'),
(3,'17','2020-05-19','02:00:00'),
(4,'16','2020-05-19','03:00:00'),
(5,'27','2020-05-19','04:00:00'),
(6,'27','2020-05-19','05:00:00'),
(7,'23','2020-05-19','06:00:00'),
(8,'22','2020-05-19','07:00:00'),
(9,'28','2020-05-19','08:00:00'),
(10,'20','2020-05-19','09:00:00'),
(11,'12','2020-05-19','10:00:00'),
(12,'12','2020-05-19','11:00:00'),
(13,'13','2020-05-19','12:00:00'),
(14,'26','2020-05-19','13:00:00'),
(15,'30','2020-05-19','14:00:00'),
(16,'12','2020-05-19','15:00:00'),
(17,'25','2020-05-19','16:00:00'),
(18,'29','2020-05-19','17:00:00'),
(19,'12','2020-05-19','18:00:00'),
(20,'12','2020-05-19','19:00:00'),
(21,'15','2020-05-19','20:00:00'),
(22,'19','2020-05-19','21:00:00'),
(23,'12','2020-05-19','22:00:00'),
(24,'14','2020-05-19','23:00:00'),
(25,'15','2020-05-25','00:00:00'),
(26,'12','2020-05-25','01:00:00'),
(27,'22','2020-05-25','02:00:00'),
(28,'29','2020-05-25','03:00:00'),
(29,'24','2020-05-25','04:00:00'),
(30,'13','2020-05-25','05:00:00'),
(31,'10','2020-05-25','06:00:00'),
(32,'28','2020-05-25','07:00:00'),
(33,'16','2020-05-25','08:00:00'),
(34,'23','2020-05-25','09:00:00'),
(35,'29','2020-05-25','10:00:00'),
(36,'26','2020-05-25','11:00:00'),
(37,'21','2020-05-25','12:00:00'),
(38,'17','2020-05-25','13:00:00'),
(39,'15','2020-05-25','14:00:00'),
(40,'24','2020-05-25','15:00:00'),
(41,'28','2020-05-25','16:00:00'),
(42,'16','2020-05-25','17:00:00'),
(43,'16','2020-05-25','18:00:00'),
(44,'11','2020-05-25','19:00:00'),
(45,'26','2020-05-25','20:00:00'),
(46,'27','2020-05-25','21:00:00'),
(47,'12','2020-05-25','22:00:00'),
(48,'26','2020-05-25','23:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Aleq Baghumyan','aleq.baghumyan99@gmail.com','2020-05-17 00:45:21','$2y$10$uHjvaDQBi7BX5sNq5OFB9O9mLLPiuDHpGUgQPWcNiCgTtZaFs/cEy',NULL,'2020-05-17 00:45:21','2020-05-17 00:48:07');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

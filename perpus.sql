/*
SQLyog Professional v12.5.1 (32 bit)
MySQL - 10.1.38-MariaDB : Database - perpus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`perpus` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `perpus`;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(255) DEFAULT NULL,
  `pengarang` varchar(255) DEFAULT NULL,
  `tahun_terbit` varchar(32) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

insert  into `buku`(`id`,`judul_buku`,`pengarang`,`tahun_terbit`,`penerbit`,`deskripsi`) values 
(1,'Analisis Komponen Makanan','Dr. Abdul Rohman','2013','Graha Ilmu','Buku ilmu gizi'),
(2,'Analisis Komponen Minuman','Dr. Abdul Rohman','2013','Graha Ilmu','Buku ilmu gizi');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

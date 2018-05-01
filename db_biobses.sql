/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.19-MariaDB : Database - db_biobses
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_biobses` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_biobses`;

/*Table structure for table `m_penerbit` */

DROP TABLE IF EXISTS `m_penerbit`;

CREATE TABLE `m_penerbit` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kodePenerbit` varchar(255) DEFAULT NULL,
  `Created_by` varchar(255) DEFAULT NULL,
  `Updated_by` varchar(255) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `m_penerbit` */

insert  into `m_penerbit`(`id`,`nama`,`kota`,`kodePenerbit`,`Created_by`,`Updated_by`,`Created_at`,`Updated_at`) values (1,'Topan Tamvan','Bandung','A123','test','test','2018-03-24 10:13:22','2018-03-24 10:32:15'),(2,'penerbit informatika','bandung','003','test',NULL,'2018-03-28 10:37:05','0000-00-00 00:00:00'),(3,'penerbit informatika','bandung','005','test',NULL,'2018-03-28 10:38:41','0000-00-00 00:00:00');

/*Table structure for table `m_penulis` */

DROP TABLE IF EXISTS `m_penulis`;

CREATE TABLE `m_penulis` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `namaPenulis` varchar(255) DEFAULT NULL,
  `namaBuku` varchar(255) DEFAULT NULL,
  `kodePenulis` varchar(255) DEFAULT NULL,
  `Created_by` varchar(255) DEFAULT NULL,
  `Updated_by` varchar(255) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `m_penulis` */

insert  into `m_penulis`(`id`,`namaPenulis`,`namaBuku`,`kodePenulis`,`Created_by`,`Updated_by`,`Created_at`,`Updated_at`) values (1,'Dummy','Dummy','A123','test','test','2018-03-25 13:16:02','2018-03-25 13:16:51'),(2,'benie ilman','algoritma','001','test',NULL,'2018-03-28 10:36:36','0000-00-00 00:00:00');

/*Table structure for table `m_produk` */

DROP TABLE IF EXISTS `m_produk`;

CREATE TABLE `m_produk` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `kodeProduk` varchar(255) DEFAULT NULL,
  `kodePenerbit` varchar(255) DEFAULT NULL,
  `kodePenulis` varchar(255) DEFAULT NULL,
  `isbn` varchar(225) DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `berat` varchar(225) DEFAULT NULL,
  `tahunTerbit` int(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `kategori` varchar(225) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL,
  `diskon` int(255) DEFAULT NULL,
  `totalHarga` int(255) DEFAULT NULL,
  `stok` int(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` text,
  `fotoBesar` text,
  `status` varchar(100) DEFAULT NULL,
  `counter` int(225) DEFAULT NULL,
  `Created_by` varchar(255) DEFAULT NULL,
  `Updated_by` varchar(255) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `m_produk` */

insert  into `m_produk`(`id`,`kodeProduk`,`kodePenerbit`,`kodePenulis`,`isbn`,`ukuran`,`berat`,`tahunTerbit`,`isi`,`kategori`,`deskripsi`,`harga`,`diskon`,`totalHarga`,`stok`,`tanggal`,`foto`,`fotoBesar`,`status`,`counter`,`Created_by`,`Updated_by`,`Created_at`,`Updated_at`) values (1,'A123','A123','A123',NULL,'12','123.00',2018,'12','Airlangga','dummy tersassa',12000,3,12000,12,'2018-04-01','assets/admin/img/produk/A123_A123..png',NULL,NULL,7,'test',NULL,'2018-03-26 11:12:51','0000-00-00 00:00:00'),(2,'D123','A123','001',NULL,'34','5.00',2011,'22','Airlangga','testtset',30000,0,27000,20,'2018-03-25','assets/admin/img/produk/D123_D123..png',NULL,NULL,15,'test',NULL,'2018-03-26 11:18:22','0000-00-00 00:00:00'),(3,'0006','003','A123',NULL,'12x54','15.00',2001,'150','Penerbit Informatika','lorem ipsum dolor',40000,15,34000,40,'2018-03-27','assets/admin/img/produk/0006_0006..png',NULL,'Best Seller',17,'test',NULL,'2018-03-29 12:02:56','0000-00-00 00:00:00'),(4,'G123','003','001',NULL,'12','12.00',2018,'122','Penerbit Informatika','testtestseteeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee',43000,10,38700,20,'2018-03-29','assets/admin/img/produk/G123_G123..png','assets/admin/img/produk/G123_G123_big..png',NULL,11,'test',NULL,'2018-03-30 12:45:40','0000-00-00 00:00:00'),(5,'B1223','A123','001',NULL,'12','12',2010,'dummy','Airlangga','dummy',50000,0,50000,12,'2018-04-18','assets/admin/img/produk/B1223_B1223..png','assets/admin/img/produk/B1223_B1223_big..png',NULL,NULL,'test',NULL,'2018-04-18 20:13:38','0000-00-00 00:00:00'),(6,'G435','005','001',NULL,'45','65',2017,'34','Airlangga','dumyy',35000,0,35000,34,'2018-04-18','assets/admin/img/produk/G435_G435..png','assets/admin/img/produk/G435_G435_big..png',NULL,NULL,'test',NULL,'2018-04-18 20:14:22','0000-00-00 00:00:00'),(7,'G554','003','A123',NULL,'3','4',2011,'5456','Airlangga','dummy',30000,0,30000,45,'2018-04-18','assets/admin/img/produk/G554_G554..png','assets/admin/img/produk/G554_G554_big..png',NULL,1,'test',NULL,'2018-04-18 20:15:06','0000-00-00 00:00:00');

/*Table structure for table `mcart` */

DROP TABLE IF EXISTS `mcart`;

CREATE TABLE `mcart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cart_session` varchar(100) NOT NULL DEFAULT '',
  `kodeProduk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `namaBuku` varchar(100) NOT NULL DEFAULT '',
  `qty` int(2) NOT NULL DEFAULT '1',
  `totalHarga` int(225) NOT NULL DEFAULT '0',
  `foto` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `kodeOrder` varchar(10) NOT NULL,
  `created_by` varchar(225) DEFAULT NULL,
  `updated_by` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `mcart` */

insert  into `mcart`(`id`,`cart_session`,`kodeProduk`,`harga`,`namaBuku`,`qty`,`totalHarga`,`foto`,`status`,`kodeOrder`,`created_by`,`updated_by`,`created_at`,`updated_at`) values (1,'rr20nhlrf0836uq7sh3j3r94v4','1820001',12000,'dummy',10,120000,'images/uploads/dummy_1820001_small..jpg','saved','180200001',NULL,NULL,NULL,NULL),(2,'rr20nhlrf0836uq7sh3j3r94v4','1820001',12000,'dummy',10,120000,'images/uploads/dummy_1820001_small..jpg','saved','',NULL,NULL,NULL,NULL),(3,'t5l5e73nirglisoo20bo4gj7k4','1820001',12000,'dummy',1,12000,'images/uploads/dummy_1820001_small..jpg','saved','180200002',NULL,NULL,NULL,NULL),(4,'es9lbnrsug2b0h2sp6ujrssf62','1820002',250000,'bomber',1,250000,'images/uploads/bomber_1820002_small..jpg','','',NULL,NULL,NULL,NULL),(6,'rdrptb9citb2jreor4fkbnepi0','1820002',250000,'bomber',2,500000,'images/uploads/support_1820002_small..jpg','saved','',NULL,NULL,NULL,NULL),(7,'c1knhg4hdfm4fdvsutc7ln6fk1','1830001',125000,'test',2,250000,'images/uploads/test_1830001_small..jpg','saved','',NULL,NULL,NULL,NULL),(8,'8ooh7pd2i7mgl27dr2t7jj15e0','1830001',125000,'test',2,250000,'images/uploads/test_1830001_small..jpg','','',NULL,NULL,NULL,NULL),(9,'8ooh7pd2i7mgl27dr2t7jj15e0','1820002',250000,'bomber',1,250000,'images/uploads/support_1820002_small..jpg','','',NULL,NULL,NULL,NULL),(10,'e222aacabeb9129d1b49fabb3fd83677d6b1e481','D123',27000,'algoritma',1,27000,'assets/admin/img/produk/D123_D123..png','','','e222aacabeb9129d1b49fabb3fd83677d6b1e481',NULL,'2018-04-14 19:50:43',NULL),(16,'5821ffbfae1753ed5454f06c08d563d7c4e52c2d','D123',27000,'algoritma',1,27000,'assets/admin/img/produk/D123_D123..png','','','5821ffbfae1753ed5454f06c08d563d7c4e52c2d',NULL,'2018-04-14 23:03:21',NULL),(17,'b6513ffd443548bf02498768dca802de19dbdc3c','D123',27000,'algoritma',1,27000,'assets/admin/img/produk/D123_D123..png','','','b6513ffd443548bf02498768dca802de19dbdc3c',NULL,'2018-04-15 13:48:28',NULL),(13,'5821ffbfae1753ed5454f06c08d563d7c4e52c2d','0006',34000,'Dummy',1,34000,'assets/admin/img/produk/0006_0006..png','','','5821ffbfae1753ed5454f06c08d563d7c4e52c2d',NULL,'2018-04-14 20:57:12',NULL),(14,'5821ffbfae1753ed5454f06c08d563d7c4e52c2d','0006',34000,'Dummy',1,34000,'assets/admin/img/produk/0006_0006..png','','','5821ffbfae1753ed5454f06c08d563d7c4e52c2d',NULL,'2018-04-14 20:57:31',NULL),(15,'5821ffbfae1753ed5454f06c08d563d7c4e52c2d','G123',38700,'algoritma',1,38700,'assets/admin/img/produk/G123_G123..png','','','5821ffbfae1753ed5454f06c08d563d7c4e52c2d',NULL,'2018-04-14 21:09:12',NULL),(18,'69ca1a3e75126f41f6a4f47fdfb26118130c0b90','A123',12000,'Dummy',5,60000,'assets/admin/img/produk/A123_A123..png','','','69ca1a3e75126f41f6a4f47fdfb26118130c0b90',NULL,'2018-04-17 21:14:54','2018-04-17 22:19:40'),(19,'69ca1a3e75126f41f6a4f47fdfb26118130c0b90','0006',34000,'Dummy',5,170000,'assets/admin/img/produk/0006_0006..png','','','69ca1a3e75126f41f6a4f47fdfb26118130c0b90',NULL,'2018-04-17 22:25:32','2018-04-17 22:26:14'),(20,'69ca1a3e75126f41f6a4f47fdfb26118130c0b90','D123',27000,'algoritma',1,27000,'assets/admin/img/produk/D123_D123..png','','','69ca1a3e75126f41f6a4f47fdfb26118130c0b90',NULL,'2018-04-17 22:46:20','2018-04-17 22:47:49'),(21,'961000dbbec6b5ed765e1dae210dc56419b9ccc4','0006',34000,'Dummy',3,102000,'assets/admin/img/produk/0006_0006..png','','','961000dbbec6b5ed765e1dae210dc56419b9ccc4',NULL,'2018-04-17 22:57:13','2018-04-17 22:57:27');

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `created_by` varchar(225) DEFAULT NULL,
  `updated_by` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `member` */

insert  into `member`(`id`,`nama`,`password`,`email`,`kategori`,`created_by`,`updated_by`,`created_at`,`updated_at`) values (2,'topan','202cb962ac59075b964b07152d234b70','topannurdiansyah@yahoo.com','user',NULL,NULL,'2018-04-25 21:09:43','0000-00-00 00:00:00');

/*Table structure for table `mkategori` */

DROP TABLE IF EXISTS `mkategori`;

CREATE TABLE `mkategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(225) DEFAULT NULL,
  `created_by` varchar(225) DEFAULT NULL,
  `updated_by` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mkategori` */

insert  into `mkategori`(`id`,`kategori`,`created_by`,`updated_by`,`created_at`,`updated_at`) values (1,'Penerbit Informatika','test',NULL,'2018-04-08 04:39:45','0000-00-00 00:00:00'),(2,'Airlangga',NULL,NULL,'2018-04-10 08:24:45','0000-00-00 00:00:00');

/*Table structure for table `muser` */

DROP TABLE IF EXISTS `muser`;

CREATE TABLE `muser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `nama_lengkap` varchar(225) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `kategori` varchar(25) DEFAULT NULL,
  `Created_by` varchar(225) DEFAULT NULL,
  `Updated_by` varchar(225) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `muser` */

insert  into `muser`(`id`,`username`,`password`,`email`,`nama_lengkap`,`status`,`kategori`,`Created_by`,`Updated_by`,`Created_at`,`Updated_at`) values (1,'test','202cb962ac59075b964b07152d234b70','test@gmail.com','test',1,'admin',NULL,NULL,'2017-06-06 12:37:11','0000-00-00 00:00:00'),(2,'john','202cb962ac59075b964b07152d234b70','john@gmail.com','John Doe',1,'user','test',NULL,'2017-06-06 12:37:01','0000-00-00 00:00:00'),(3,'aldo','202cb962ac59075b964b07152d234b70','aldo@gmail.com','aldo bareto',1,'user','test',NULL,'2017-06-06 12:37:00','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

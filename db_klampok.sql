-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for coba
CREATE DATABASE IF NOT EXISTS `coba` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `coba`;

-- Dumping structure for table coba.pemesanan
CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `jk` tinytext,
  `identitas` int(20) DEFAULT NULL,
  `tipe_kamar` tinytext,
  `harga` int(20) DEFAULT NULL,
  `durasi` int(15) DEFAULT NULL,
  `breakfast` tinytext,
  `diskon` varchar(50) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table coba.pemesanan: ~1 rows (approximately)
/*!40000 ALTER TABLE `pemesanan` DISABLE KEYS */;
INSERT INTO `pemesanan` (`id`, `nama`, `tanggal`, `jk`, `identitas`, `tipe_kamar`, `harga`, `durasi`, `breakfast`, `diskon`, `total`) VALUES
	(4, 'Jean', '2021-12-12', 'Laki-laki', 66666, 'Deluxe', 150000, 4, 'Ya', 'Diskon 10%', '620000'),
	(5, 'TERE', '2021-12-01', 'Perempuan', 111, 'Standard', 100000, 2, 'Ya', 'Tidak Mendapat Diskon', '280000'),
	(6, 'ope', '2021-12-25', 'Laki-laki', 321, 'Standard', 180000, 1, 'Ya', 'Tidak Mendapat Diskon', '180000');
/*!40000 ALTER TABLE `pemesanan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

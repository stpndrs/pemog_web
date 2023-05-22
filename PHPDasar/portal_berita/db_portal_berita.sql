-- --------------------------------------------------------
-- Host:                         localhost
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


-- Dumping database structure for db_portal_berita
CREATE DATABASE IF NOT EXISTS `db_portal_berita` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_portal_berita`;

-- Dumping structure for table db_portal_berita.tb_berita
CREATE TABLE IF NOT EXISTS `tb_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  PRIMARY KEY (`id_berita`),
  KEY `FK_tb_berita_tb_kategori` (`kategori_id`),
  CONSTRAINT `FK_tb_berita_tb_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `tb_kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_portal_berita.tb_berita: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_berita` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_berita` ENABLE KEYS */;

-- Dumping structure for table db_portal_berita.tb_kategori
CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_portal_berita.tb_kategori: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_kategori` DISABLE KEYS */;
REPLACE INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
	(1, 'Kategori 1'),
	(2, 'Kategori 2');
/*!40000 ALTER TABLE `tb_kategori` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

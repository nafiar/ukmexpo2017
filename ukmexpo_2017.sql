-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ukmexpo_2017
CREATE DATABASE IF NOT EXISTS `ukmexpo_2017` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ukmexpo_2017`;

-- Dumping structure for table ukmexpo_2017.anggota_ukm
CREATE TABLE IF NOT EXISTS `anggota_ukm` (
  `nrp_anggota` varchar(11) NOT NULL,
  `id_ukm` varchar(37) NOT NULL,
  `nama_anggota` varchar(30) DEFAULT NULL,
  `jabatan_anggota` varchar(30) DEFAULT NULL,
  `hirarki_anggota` int(11) DEFAULT NULL,
  PRIMARY KEY (`nrp_anggota`),
  KEY `id_ukm` (`id_ukm`),
  CONSTRAINT `FK_ID_UKM` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ukmexpo_2017.anggota_ukm: ~9 rows (approximately)
/*!40000 ALTER TABLE `anggota_ukm` DISABLE KEYS */;
INSERT INTO `anggota_ukm` (`nrp_anggota`, `id_ukm`, `nama_anggota`, `jabatan_anggota`, `hirarki_anggota`) VALUES
	('5114100021', '2768a246-383a-11e7-acec-00ff44baa71c', 'Rina Wijaya', 'Sekretaris', 2),
	('5114100023', '2768a246-383a-11e7-acec-00ff44baa71c', 'Afiif Naufal', 'Anggota', 3),
	('5114100072', '8a323b52-383a-11e7-acec-00ff44baa71c', 'Paul Aldy Sarumaha', 'Ketua Divisi Internal', 3),
	('5114100110', '2768a246-383a-11e7-acec-00ff44baa71c', 'Rafiar Rahmansyah', 'Ketua Divisi PSDM', 3),
	('5114100114', '2768a246-383a-11e7-acec-00ff44baa71c', 'Shafly Naufal W', 'Ketua Divisi Publikasi', 3),
	('5114100122', '8a323b52-383a-11e7-acec-00ff44baa71c', 'Bayu Sektiaji', 'Anggota', 4),
	('5114100124', '8a323b52-383a-11e7-acec-00ff44baa71c', 'Aufar Rizky', 'Ketua Divisi Publikasi', 3),
	('5114100156', '2768a246-383a-11e7-acec-00ff44baa71c', 'Hari Setiawan', 'Ketua', 1),
	('5114100178', '8a323b52-383a-11e7-acec-00ff44baa71c', 'Anindita Larasati', 'Bendahara', 2);
/*!40000 ALTER TABLE `anggota_ukm` ENABLE KEYS */;

-- Dumping structure for table ukmexpo_2017.form_pendaftaran
CREATE TABLE IF NOT EXISTS `form_pendaftaran` (
  `id_form` varchar(37) NOT NULL,
  `id_ukm` varchar(37) NOT NULL,
  `nrp_maba` varchar(11) NOT NULL,
  `asal_form` varchar(40) DEFAULT NULL,
  `nomor_form` varchar(40) DEFAULT NULL,
  `id_line_form` varchar(30) DEFAULT NULL,
  `hobi_form` text,
  `motivasi_form` text,
  `prestasi_form` text,
  `kesibukan_form` text,
  `status_form` int(11) NOT NULL,
  PRIMARY KEY (`id_form`),
  KEY `id_ukm` (`id_ukm`),
  KEY `nrp_maba` (`nrp_maba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ukmexpo_2017.form_pendaftaran: ~8 rows (approximately)
/*!40000 ALTER TABLE `form_pendaftaran` DISABLE KEYS */;
INSERT INTO `form_pendaftaran` (`id_form`, `id_ukm`, `nrp_maba`, `asal_form`, `nomor_form`, `id_line_form`, `hobi_form`, `motivasi_form`, `prestasi_form`, `kesibukan_form`, `status_form`) VALUES
	('0415df70-3ded-11e7-9a5e-47b1b682d118', '2768a246-383a-11e7-acec-00ff44baa71c', '5117100122', 'Mojokerto', '085108678834', 'sekbay', 'Bermain Bola, Ngoding', 'Ingin menjadi pemain Bola terbaik diITS', 'pernah juara 4 NLC waktu SMA', 'Kuliah', 1),
	('3bcf4d60-4158-11e7-bd04-09f0a4bf6081', '8a323b52-383a-11e7-acec-00ff44baa71c', '5117100107', 'Jakarta', '085734557743', 'aryap', 'Main Basket', 'ingin belajar basket', 'juara basket tingkat kota', 'kuliah', 0),
	('6a61a200-3eb5-11e7-8551-3f27c49aa367', '8a323b52-383a-11e7-acec-00ff44baa71c', '5117100010', 'Jakarta', '085774657723', 'aldor', 'Main Basket, Main Game Online, Traveling', 'Ingin Belajar main basket', '-', 'Kuliah', 1),
	('a6858f10-3d4e-11e7-9578-03e2d625042b', '2768a246-383a-11e7-acec-00ff44baa71c', '5117100001', 'Malang', '085771547734', 'munez', 'Main Gitar', 'Ingin Menjadi Pemain Terbaik di ITS', 'Juara Lomba kota Malang Tingkat SMA', 'Kuliah', 0),
	('a8297750-4042-11e7-933b-791040d66db7', '8a323b52-383a-11e7-acec-00ff44baa71c', '5117100101', 'Surabaya', '0987887657889', 'amikar', '-', '-', '-', 'ngoding', 0),
	('b0505230-4157-11e7-866a-a3be1ca94a92', '8a323b52-383a-11e7-acec-00ff44baa71c', '5117100107', 'Jakarta', '085754367745', 'aryap', 'Main Basket, Main Gitar', 'Ingin belajar bermain basket', 'juara basket tingkat kota', 'Kuliah', 0),
	('ce15fbe0-3999-11e7-9cb0-3f534abe11b7', '8a323b52-383a-11e7-acec-00ff44baa71c', '5117100001', 'Malang', '085108678834', 'munez', 'Main Gitar, Menyanyi, Bermain Basket', 'Ingin fokus di basket', 'Jjuara 1 basket di sekolah', 'kuliah', 1),
	('f195db81-390c-11e7-acec-00ff44baa71c', '8a323b52-383a-11e7-acec-00ff44baa71c', '5117100122', 'Mojokerto', '085771547734', 'sekbay', 'Ngoding', 'Ingin menjadi Atlet Bola Basket', 'Juara 1 lomba basket satu sekolah', 'Kuliah', 1);
/*!40000 ALTER TABLE `form_pendaftaran` ENABLE KEYS */;

-- Dumping structure for table ukmexpo_2017.mahasiswa_baru
CREATE TABLE IF NOT EXISTS `mahasiswa_baru` (
  `nrp_maba` varchar(11) NOT NULL,
  `nama_maba` varchar(50) DEFAULT NULL,
  `jurusan_maba` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nrp_maba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ukmexpo_2017.mahasiswa_baru: ~5 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa_baru` DISABLE KEYS */;
INSERT INTO `mahasiswa_baru` (`nrp_maba`, `nama_maba`, `jurusan_maba`) VALUES
	('5117100001', 'Nezar Mahardika', 'Teknik Informatika'),
	('5117100010', 'Rivaldo Alif R', 'Teknik Informatika'),
	('5117100101', 'Amik Ar Rasyid', 'Teknik Informatika'),
	('5117100107', 'Arya Putra', 'Teknik Informatika'),
	('5117100122', 'Bayu Sektiaji', 'Teknik Informatika');
/*!40000 ALTER TABLE `mahasiswa_baru` ENABLE KEYS */;

-- Dumping structure for table ukmexpo_2017.penerimaan_pendaftaran
CREATE TABLE IF NOT EXISTS `penerimaan_pendaftaran` (
  `keterangan_penerimaan` varchar(60) DEFAULT NULL,
  `nrp_maba` varchar(11) DEFAULT NULL,
  `id_ukm` varchar(37) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ukmexpo_2017.penerimaan_pendaftaran: ~4 rows (approximately)
/*!40000 ALTER TABLE `penerimaan_pendaftaran` DISABLE KEYS */;
INSERT INTO `penerimaan_pendaftaran` (`keterangan_penerimaan`, `nrp_maba`, `id_ukm`) VALUES
	(NULL, '5117100122', '8a323b52-383a-11e7-acec-00ff44baa71c'),
	(NULL, '5117100001', '8a323b52-383a-11e7-acec-00ff44baa71c'),
	(NULL, '5117100122', '2768a246-383a-11e7-acec-00ff44baa71c'),
	(NULL, '5117100010', '8a323b52-383a-11e7-acec-00ff44baa71c');
/*!40000 ALTER TABLE `penerimaan_pendaftaran` ENABLE KEYS */;

-- Dumping structure for table ukmexpo_2017.pengumuman_ukm
CREATE TABLE IF NOT EXISTS `pengumuman_ukm` (
  `id_pengumuman` varchar(37) NOT NULL,
  `isi_pengumuman` text,
  `id_ukm_pengumuman` varchar(37) DEFAULT NULL,
  `judul_pengumuman` text,
  PRIMARY KEY (`id_pengumuman`),
  KEY `id_ukm_pengumuman` (`id_ukm_pengumuman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ukmexpo_2017.pengumuman_ukm: ~2 rows (approximately)
/*!40000 ALTER TABLE `pengumuman_ukm` DISABLE KEYS */;
INSERT INTO `pengumuman_ukm` (`id_pengumuman`, `isi_pengumuman`, `id_ukm_pengumuman`, `judul_pengumuman`) VALUES
	('0bf2f610-4021-11e7-bc15-69cf535c1542', 'Akan Diadakan Welcome Party di SAS Mulyosari pukul 19:00 hari jumat', '8a323b52-383a-11e7-acec-00ff44baa71c', 'Welcome Party Calon Anggota');
/*!40000 ALTER TABLE `pengumuman_ukm` ENABLE KEYS */;

-- Dumping structure for table ukmexpo_2017.profil_ukm
CREATE TABLE IF NOT EXISTS `profil_ukm` (
  `id_profil` varchar(37) NOT NULL,
  `isi_profil` text,
  `id_ukm_profil` varchar(37) DEFAULT NULL,
  PRIMARY KEY (`id_profil`),
  KEY `id_ukm_profil` (`id_ukm_profil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ukmexpo_2017.profil_ukm: ~0 rows (approximately)
/*!40000 ALTER TABLE `profil_ukm` DISABLE KEYS */;
/*!40000 ALTER TABLE `profil_ukm` ENABLE KEYS */;

-- Dumping structure for table ukmexpo_2017.ukm
CREATE TABLE IF NOT EXISTS `ukm` (
  `id_ukm` varchar(37) NOT NULL,
  `nama_ukm` varchar(80) DEFAULT NULL,
  `foto_ukm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_ukm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ukmexpo_2017.ukm: ~7 rows (approximately)
/*!40000 ALTER TABLE `ukm` DISABLE KEYS */;
INSERT INTO `ukm` (`id_ukm`, `nama_ukm`, `foto_ukm`) VALUES
	('2768a246-383a-11e7-acec-00ff44baa71c', 'UKM Sepak Bola ITS', 'sepakbolaits.jpg'),
	('8a323b52-383a-11e7-acec-00ff44baa71c', 'UKM Basket Ball ITS', 'basketballits.png'),
	('8a43a307-383a-11e7-acec-00ff44baa71c', 'UKM Billiard ITS', 'billiardits.jpeg'),
	('8a4df4ee-383a-11e7-acec-00ff44baa71c', 'UKM Kendo ITS', 'kendoits.jpg'),
	('8a5fe94f-383a-11e7-acec-00ff44baa71c', 'UKM Musik ITS', 'ukmmusikits.png'),
	('8a6f1e4c-383a-11e7-acec-00ff44baa71c', 'UKM Penalaran ITS', 'ukmpenalaranits.png'),
	('8a7967e8-383a-11e7-acec-00ff44baa71c', 'UKM Tenis Lapangan ITS', 'ukmtenisits.jpg');
/*!40000 ALTER TABLE `ukm` ENABLE KEYS */;

-- Dumping structure for table ukmexpo_2017.user
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(37) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `id_ukm_user` varchar(37) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ukmexpo_2017.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`username`, `password`, `role`, `id_ukm_user`) VALUES
	('admin', '$2y$10$Ye0xkRZS.mQx5WgqOR0gUuzCSrbgoZ2E3vISOGyAciWrn2.k9/N/W', 1, '8a323b52-383a-11e7-acec-00ff44baa71c'),
	('adminsepakbola', '$2y$10$Ye0xkRZS.mQx5WgqOR0gUuzCSrbgoZ2E3vISOGyAciWrn2.k9/N/W', 1, '2768a246-383a-11e7-acec-00ff44baa71c');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

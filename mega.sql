# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.38)
# Database: mega
# Generation Time: 2021-02-14 11:00:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tb_guru
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_guru`;

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `id_sekolah` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `lulusan` varchar(50) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_guru` WRITE;
/*!40000 ALTER TABLE `tb_guru` DISABLE KEYS */;

INSERT INTO `tb_guru` (`id_guru`, `id_sekolah`, `nip`, `nama`, `email`, `telp`, `jabatan`, `lulusan`, `jenis`, `jeniskelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`)
VALUES
	(2,1231,'2147483647123','coba1','blankamade@gmail.com1','1231','staff1','asdads1','swasta','asd1','Denpasar1','2020-12-04','jalan raya no 1'),
	(3,1,'195805151994031','coba','blankamade@gmail.com','1','staff','asdads','swasta','Laki-laki','Denpasar','2020-12-11','jalan raya no 1');

/*!40000 ALTER TABLE `tb_guru` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_inventaris
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_inventaris`;

CREATE TABLE `tb_inventaris` (
  `id_inventaris` int(11) NOT NULL AUTO_INCREMENT,
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sumber` varchar(15) NOT NULL,
  `tahun` date NOT NULL,
  PRIMARY KEY (`id_inventaris`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_inventaris` WRITE;
/*!40000 ALTER TABLE `tb_inventaris` DISABLE KEYS */;

INSERT INTO `tb_inventaris` (`id_inventaris`, `id_sekolah`, `nama`, `status`, `jumlah`, `sumber`, `tahun`)
VALUES
	(2,1,'coba2','Cukup Baik',2000000,'Bantuan','2020-12-04');

/*!40000 ALTER TABLE `tb_inventaris` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_jumlahsiswa
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_jumlahsiswa`;

CREATE TABLE `tb_jumlahsiswa` (
  `id_jumlahsiswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_sekolah` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `jumlah_siswa_masuk` int(11) NOT NULL,
  `jumlah_siswa_keluar` int(11) NOT NULL,
  PRIMARY KEY (`id_jumlahsiswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_jumlahsiswa` WRITE;
/*!40000 ALTER TABLE `tb_jumlahsiswa` DISABLE KEYS */;

INSERT INTO `tb_jumlahsiswa` (`id_jumlahsiswa`, `id_sekolah`, `tahun`, `jumlah_siswa`, `jumlah_siswa_masuk`, `jumlah_siswa_keluar`)
VALUES
	(2,1,'2020',1,1,1),
	(3,1,'2019',100,100,0),
	(8,1,'2020',1,1,1);

/*!40000 ALTER TABLE `tb_jumlahsiswa` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_mapel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_mapel`;

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `id_sekolah` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `matapelajaran` varchar(20) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_mapel` WRITE;
/*!40000 ALTER TABLE `tb_mapel` DISABLE KEYS */;

INSERT INTO `tb_mapel` (`id_mapel`, `id_sekolah`, `id_guru`, `matapelajaran`)
VALUES
	(5,1,2,'b'),
	(6,1,2,'c'),
	(7,1,2,'v');

/*!40000 ALTER TABLE `tb_mapel` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_pengumuman
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_pengumuman`;

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_pengumuman` WRITE;
/*!40000 ALTER TABLE `tb_pengumuman` DISABLE KEYS */;

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `judul`, `deskripsi`, `lampiran`)
VALUES
	(6,'c','c','6.pdf');

/*!40000 ALTER TABLE `tb_pengumuman` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_sekolah
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_sekolah`;

CREATE TABLE `tb_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis` varchar(8) NOT NULL,
  `rayon` varchar(255) NOT NULL,
  `jenjang` varchar(6) NOT NULL,
  `akreditasi` varchar(2) NOT NULL,
  `latLong` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_sekolah` WRITE;
/*!40000 ALTER TABLE `tb_sekolah` DISABLE KEYS */;

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama`, `alamat`, `telp`, `status`, `email`, `keterangan`, `jenis`, `rayon`, `jenjang`, `akreditasi`, `latLong`, `password`)
VALUES
	(1,'a','a',1,'a','blankamade@gmail.com','a','Swasta','a','TK','A','-8.649662261395804, 115.20382425915528','123'),
	(2,'coba2','coba2',2,'Sukses2','blankamade@gmail.com','coba2','Swasta','coba2','SD','B','-8.649662261395804, 115.20382425915528','123'),
	(12,'12','12',12,'12','a@a.a','12','Negeri','12','TK','A','-8.649662261395804, 115.20382425915528',NULL),
	(123,'123','123',123,'123','a@a.a','123','Swasta','123','TK','A','-8.649662261395804, 115.20382425915528',NULL),
	(1232,'123','123',123,'123','a@a.a','123','Swasta','123','TK','A','-8.654511405371702, 115.20808696746826',NULL);

/*!40000 ALTER TABLE `tb_sekolah` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_siswa
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_siswa`;

CREATE TABLE `tb_siswa` (
  `nis` int(11) NOT NULL AUTO_INCREMENT,
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `status_masuk` varchar(20) NOT NULL,
  `status_keluar` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_siswa` WRITE;
/*!40000 ALTER TABLE `tb_siswa` DISABLE KEYS */;

INSERT INTO `tb_siswa` (`nis`, `id_sekolah`, `nama`, `alamat`, `telp`, `kelas`, `jeniskelamin`, `tempat_lahir`, `tanggal_lahir`, `tanggal_masuk`, `tanggal_keluar`, `status_masuk`, `status_keluar`, `agama`, `kewarganegaraan`)
VALUES
	(1,1,'coba2','coba2','1','c','pria','Denpasar','2020-12-05','2020-12-05','2020-12-05','coba','coba','coba','coba'),
	(123,1,'asd','asd','123','123','Laki-laki','123','2021-02-08','2021-02-10','2021-02-25','Siswa Baru','','Hindu','qwe');

/*!40000 ALTER TABLE `tb_siswa` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_staff
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_staff`;

CREATE TABLE `tb_staff` (
  `id_staff` int(11) NOT NULL AUTO_INCREMENT,
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  PRIMARY KEY (`id_staff`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_staff` WRITE;
/*!40000 ALTER TABLE `tb_staff` DISABLE KEYS */;

INSERT INTO `tb_staff` (`id_staff`, `id_sekolah`, `nama`, `telp`, `alamat`, `jabatan`, `status`, `jeniskelamin`)
VALUES
	(1,1,'ab','12','cobab','staffb','ab','pria');

/*!40000 ALTER TABLE `tb_staff` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;

INSERT INTO `tb_user` (`id_user`, `username`, `password`)
VALUES
	(1,'pegawai','pegawai'),
	(2,'kadis','kadis');

/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

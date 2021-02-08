/*
SQLyog Ultimate v11.2 (64 bit)
MySQL - 5.7.24 : Database - mega
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tb_guru` */

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_guru` */

insert  into `tb_guru`(`id_guru`,`id_sekolah`,`nip`,`nama`,`email`,`telp`,`jabatan`,`lulusan`,`jenis`,`jeniskelamin`,`tempat_lahir`,`tanggal_lahir`,`alamat`) values (2,1231,'2147483647123','coba1','blankamade@gmail.com1','1231','staff1','asdads1','swasta','asd1','Denpasar1','2020-12-04','jalan raya no 1'),(3,1,'195805151994031','coba','blankamade@gmail.com','1','staff','asdads','swasta','Laki-laki','Denpasar','2020-12-11','jalan raya no 1');

/*Table structure for table `tb_inventaris` */

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_inventaris` */

insert  into `tb_inventaris`(`id_inventaris`,`id_sekolah`,`nama`,`status`,`jumlah`,`sumber`,`tahun`) values (2,1,'coba2','Cukup Baik',2000000,'Bantuan','2020-12-04');

/*Table structure for table `tb_jumlahsiswa` */

DROP TABLE IF EXISTS `tb_jumlahsiswa`;

CREATE TABLE `tb_jumlahsiswa` (
  `id_jumlahsiswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_sekolah` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `jumlah_siswa_masuk` int(11) NOT NULL,
  `jumlah_siswa_keluar` int(11) NOT NULL,
  PRIMARY KEY (`id_jumlahsiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jumlahsiswa` */

insert  into `tb_jumlahsiswa`(`id_jumlahsiswa`,`id_sekolah`,`tahun`,`jumlah_siswa`,`jumlah_siswa_masuk`,`jumlah_siswa_keluar`) values (2,1,2020,1,1,1),(3,1,2019,100,100,0),(8,1,2020,1,1,1);

/*Table structure for table `tb_mapel` */

DROP TABLE IF EXISTS `tb_mapel`;

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `id_sekolah` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `matapelajaran` varchar(20) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mapel` */

insert  into `tb_mapel`(`id_mapel`,`id_sekolah`,`id_guru`,`matapelajaran`) values (5,1,2,'b'),(6,1,2,'c'),(7,1,2,'v');

/*Table structure for table `tb_pengumuman` */

DROP TABLE IF EXISTS `tb_pengumuman`;

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pengumuman` */

insert  into `tb_pengumuman`(`id_pengumuman`,`judul`,`deskripsi`,`lampiran`) values (6,'c','c','6.pdf');

/*Table structure for table `tb_sekolah` */

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
  `longtitude` double NOT NULL,
  `latitude` double NOT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_sekolah` */

insert  into `tb_sekolah`(`id_sekolah`,`nama`,`alamat`,`telp`,`status`,`email`,`keterangan`,`jenis`,`rayon`,`jenjang`,`akreditasi`,`longtitude`,`latitude`) values (1,'a','a',1,'a','blankamade@gmail.com','a','Swasta','a','TK','A',41.40338,2.17403),(2,'coba2','coba2',2,'Sukses2','blankamade@gmail.com','coba2','Swasta','coba2','SD','B',2,2);

/*Table structure for table `tb_siswa` */

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
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

/*Data for the table `tb_siswa` */

insert  into `tb_siswa`(`nis`,`id_sekolah`,`nama`,`alamat`,`telp`,`kelas`,`jeniskelamin`,`tempat_lahir`,`tanggal_lahir`,`tanggal_masuk`,`tanggal_keluar`,`status_masuk`,`status_keluar`,`agama`,`kewarganegaraan`) values (1,1,'coba2','coba2','1','c','pria','Denpasar','2020-12-05','2020-12-05','2020-12-05','coba','coba','coba','coba'),(123,1,'asd','asd','123','123','Laki-laki','123','2021-02-08','2021-02-10','2021-02-25','Siswa Baru','','Hindu','qwe');

/*Table structure for table `tb_staff` */

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_staff` */

insert  into `tb_staff`(`id_staff`,`id_sekolah`,`nama`,`telp`,`alamat`,`jabatan`,`status`,`jeniskelamin`) values (1,1,'ab','12','cobab','staffb','ab','pria');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`username`,`password`) values (1,'pegawai','pegawai'),(2,'kadis','kadis');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

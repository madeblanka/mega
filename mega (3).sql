-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 03:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mega`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
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
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `id_sekolah`, `nip`, `nama`, `email`, `telp`, `jabatan`, `lulusan`, `jenis`, `jeniskelamin`, `tempat_lahir`, `tanggal_lahir`) VALUES
(2, 1231, '2147483647123', 'coba1', 'blankamade@gmail.com1', '1231', 'staff1', 'asdads1', 'swasta', 'asd1', 'Denpasar1', '2020-12-04'),
(3, 1, '195805151994031', 'coba', 'blankamade@gmail.com', '1', 'staff', 'asdads', 'swasta', 'Laki-laki', 'Denpasar', '2020-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sumber` varchar(15) NOT NULL,
  `tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`id_inventaris`, `id_sekolah`, `nama`, `status`, `jumlah`, `sumber`, `tahun`) VALUES
(2, 1, 'coba2', 'Cukup Baik', 2000000, 'Bantuan', '2020-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jumlahsiswa`
--

CREATE TABLE `tb_jumlahsiswa` (
  `id_jumlahsiswa` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `jumlah_siswa_masuk` int(11) NOT NULL,
  `jumlah_siswa_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jumlahsiswa`
--

INSERT INTO `tb_jumlahsiswa` (`id_jumlahsiswa`, `id_sekolah`, `tahun`, `jumlah_siswa`, `jumlah_siswa_masuk`, `jumlah_siswa_keluar`) VALUES
(2, 1, 2020, 1, 1, 1),
(3, 1, 2019, 100, 100, 0),
(8, 1, 2020, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `matapelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `id_sekolah`, `id_guru`, `matapelajaran`) VALUES
(5, 1, 2, 'b'),
(6, 1, 2, 'c'),
(7, 1, 2, 'v');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `lampiran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `judul`, `deskripsi`, `lampiran`) VALUES
(6, 'c', 'c', '6.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

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
  `latitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama`, `alamat`, `telp`, `status`, `email`, `keterangan`, `jenis`, `rayon`, `jenjang`, `akreditasi`, `longtitude`, `latitude`) VALUES
(1, 'a', 'a', 1, 'a', 'blankamade@gmail.com', 'a', 'Swasta', 'a', 'TK', 'A', 41.40338, 2.17403),
(2, 'coba2', 'coba2', 2, 'Sukses2', 'blankamade@gmail.com', 'coba2', 'Swasta', 'coba2', 'SD', 'B', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(11) NOT NULL,
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
  `kewarganegaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `id_sekolah`, `nama`, `alamat`, `telp`, `kelas`, `jeniskelamin`, `tempat_lahir`, `tanggal_lahir`, `tanggal_masuk`, `tanggal_keluar`, `status_masuk`, `status_keluar`, `agama`, `kewarganegaraan`) VALUES
(1, 1, 'coba2', 'coba2', '1', 'c', 'pria', 'Denpasar', '2020-12-05', '2020-12-05', '2020-12-05', 'coba', 'coba', 'coba', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_staff` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`id_staff`, `id_sekolah`, `nama`, `telp`, `alamat`, `jabatan`, `status`, `jeniskelamin`) VALUES
(1, 1, 'ab', '12', 'cobab', 'staffb', 'ab', 'pria');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(1, 'pegawai', 'pegawai'),
(2, 'kadis', 'kadis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `tb_jumlahsiswa`
--
ALTER TABLE `tb_jumlahsiswa`
  ADD PRIMARY KEY (`id_jumlahsiswa`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jumlahsiswa`
--
ALTER TABLE `tb_jumlahsiswa`
  MODIFY `id_jumlahsiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

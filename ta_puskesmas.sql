-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2019 at 03:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE `administrasi` (
  `id_administrasi` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total_keseluruhan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `administrasi_detail`
--

CREATE TABLE `administrasi_detail` (
  `id_administrasi_detail` int(11) NOT NULL,
  `id_administrasi` int(11) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(255) DEFAULT NULL,
  `jenkel` varchar(10) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `spesialis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `jenkel`, `alamat`, `no_telp`, `spesialis`) VALUES
(3, 'Adjie Kurniawan', 'perempuan', 'Jl. Kapten Sumarsono ', '0987654321', 'kandungan');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1575260373),
('m191202_011157_ta_puskesmas', 1575260410),
('m191202_040443_create_user_table', 1575260410),
('m191205_054744_create_pasien_table', 1575541187),
('m191205_054811_create_pasien_masuk_table', 1575541187),
('m191205_054826_create_pasien_keluar_table', 1575541187),
('m191205_054837_create_registrasi_table', 1575541187),
('m191205_054854_create_rawat_inap_table', 1575541187),
('m191205_054904_create_dokter_table', 1575541187),
('m191205_054911_create_obat_table', 1575541187),
('m191205_054922_create_diagnosa_table', 1575541187),
('m191205_054934_create_administrasi_table', 1575541187),
('m191205_054946_create_administrasi_detail_table', 1575541187);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) DEFAULT NULL,
  `cara_pakai` varchar(255) DEFAULT NULL,
  `harga_obat` varchar(255) DEFAULT NULL,
  `jenis_obat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `cara_pakai`, `harga_obat`, `jenis_obat`) VALUES
(2, 'Amplodiphine', 'Diminum', '150000', 'Tablet');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenkel` varchar(10) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tgl_lahir`, `jenkel`, `alamat`, `notelp`) VALUES
(1, 'nico lahara', '2019-12-09', 'laki-laki', 'Jl. Jangka No 24 A', '1234567890'),
(2, 'Adjie Kurniawan ', '2019-12-10', 'laki-laki', 'Jl. Kapten Sumarsono', '09876543'),
(3, 'Intan Kartini', '2019-12-10', 'Perempuan', 'Jl. Kelambir V', '09876543'),
(8, 'Novia Cahaya', '2019-12-25', 'laki-laki', 'Jl. Jangka no 24', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `pasien_keluar`
--

CREATE TABLE `pasien_keluar` (
  `id_pasien_keluar` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `id_rawat_inap` int(11) DEFAULT NULL,
  `no_registrasi` varchar(255) DEFAULT NULL,
  `tgl_keluar` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasien_masuk`
--

CREATE TABLE `pasien_masuk` (
  `id_pasien_masuk` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `id_rawat_inap` int(11) DEFAULT NULL,
  `no_registrasi` varchar(255) DEFAULT NULL,
  `tgl_masuk` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_diagnosa` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `keluhan` text,
  `nama_penyakit` varchar(255) DEFAULT NULL,
  `no_registrasi` varchar(50) NOT NULL,
  `status` enum('tunggu','pemeriksaan','selesai') NOT NULL,
  `rawat_inap` enum('ya','tidak') NOT NULL,
  `tgl_pemeriksaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `id_rawat_inap` int(11) NOT NULL,
  `ruangan` varchar(50) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `no_registrasi` varchar(255) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `tgl_registrasi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` text,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`id_administrasi`);

--
-- Indexes for table `administrasi_detail`
--
ALTER TABLE `administrasi_detail`
  ADD PRIMARY KEY (`id_administrasi_detail`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pasien_keluar`
--
ALTER TABLE `pasien_keluar`
  ADD PRIMARY KEY (`id_pasien_keluar`);

--
-- Indexes for table `pasien_masuk`
--
ALTER TABLE `pasien_masuk`
  ADD PRIMARY KEY (`id_pasien_masuk`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD PRIMARY KEY (`id_rawat_inap`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `id_administrasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `administrasi_detail`
--
ALTER TABLE `administrasi_detail`
  MODIFY `id_administrasi_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pasien_keluar`
--
ALTER TABLE `pasien_keluar`
  MODIFY `id_pasien_keluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien_masuk`
--
ALTER TABLE `pasien_masuk`
  MODIFY `id_pasien_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  MODIFY `id_rawat_inap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

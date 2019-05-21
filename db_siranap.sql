-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 10:26 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siranap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` char(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `usia` char(2) NOT NULL,
  `tarif` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `alamat`, `spesialis`, `jenis_kelamin`, `ttl`, `no_telp`, `usia`, `tarif`) VALUES
('12357234', 'coba', 'coba', 'jantung', 'L', 'coba', '08535678790', '30', 300000),
('13789667', 'laura', 'kompleks perumahan permata rindu no.35', 'umum', 'P', 'Jakarta 07/08/1993', '072108979064', '25', 4000),
('13789668', 'Odete', 'jl.raden wijaya no 38 lampung selatan', 'Kanker', 'P', 'Jakarta 07/08/1994', '072108979065', '24', 200000),
('13789669', 'Clara', 'Perum pemda wayhuwi jati agung lampung selatan', 'Kulit', 'P', 'Jakarta 07/08/1995', '072108979066', '23', 300000),
('13789670', 'Cintya', 'Komplek perumahan permata asih no.124', 'Penyakit Dalam', 'P', 'Jakarta 07/08/1996', '072108979067', '22', 50000),
('13789671', 'Indra H', 'perum pemda wayhuwi no.123', 'Kandungan', 'L', 'Jakarta 07/08/1995', '072108979068', '23', 40000),
('13789672', 'Taufik', 'kedaton,bandar lampung ', 'Gigi', 'L', 'Jakarta 07/08/1992', '072108979069', '26', 40000),
('13789673', 'Wahyudi', 'Perumahan indah Lestari No.129', 'Mata', 'L', 'Jakarta 07/08/1993', '072108979070', '25', 50000),
('13789674', 'Karen Charlota', 'Perumahan indah Lestari No.133', 'Kelamin', 'P', 'Jakarta 07/08/1995', '072108979071', '23', 100000),
('13789675', 'Isnedi Chandra', 'jl. jendral soedirman samping toko roti maria', 'Tulang', 'L', 'Jakarta 07/08/1989', '072108979072', '28', 75000),
('13789676', 'Yuwanda', 'rumah permata rindu No.555', 'Saraf', 'L', 'Jakarta 07/08/1988', '072108979073', '29', 80000),
('23358647', 'laurent', 'medan', 'kanker', 'P', 'ksdfgys 23 09 1998', '9723900023479', '20', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kode_obat` char(6) NOT NULL,
  `nama_obat` varchar(15) NOT NULL,
  `jenis_obat` varchar(25) NOT NULL,
  `tempat_simpan` varchar(20) NOT NULL,
  `kedaluwarsa` date NOT NULL,
  `harga_obat` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jenis_obat`, `tempat_simpan`, `kedaluwarsa`, `harga_obat`) VALUES
('A003BD', 'aspirin', 'obat sakit kepala', 'sejuk dan kering', '2020-02-21', 35000),
('A003CD', 'Progis', 'saraf', 'sejuk dan kering', '2019-02-21', 85000),
('A008KD', 'aspilets', 'osteoforosis', 'sejuk dan kering', '2019-02-27', 23000),
('B003EF', 'Paracetamol 0,5', 'demam', 'sejuk dan kering', '2019-02-24', 5500),
('C003CU', 'Microlax', 'sembelit', 'sejuk dan kering', '2019-03-02', 20000),
('DFKLJ7', 'bayer', 'obat luka', 'sejuk kering', '2020-05-01', 1000),
('G003BD', 'promag', 'obat sakit perut', 'kering', '2021-02-21', 500),
('H006CT', 'POISON', 'alergi', 'sejuk dan kering', '2019-02-25', 2500),
('K007CE', 'K-Muricata', 'kanker serviks', 'sejuk dan kering', '2019-02-26', 1500000),
('L009CP', 'Alerin', 'alergi dan batuk', 'sejuk dan kering', '2019-03-03', 25000),
('M003RE', 'Nepatik', 'epilepsi', 'sejuk dan kering', '2019-03-01', 25000),
('R003HG', 'Sanmol', 'demam anak', 'sejuk dan kering', '2019-02-28', 20000),
('Y002WD', 'fentanyl', 'analgesik', 'sejuk dan kering', '2019-03-04', 158000);

-- --------------------------------------------------------

--
-- Table structure for table `obat_pasien`
--

CREATE TABLE `obat_pasien` (
  `kode_obat` char(6) NOT NULL,
  `NIK` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat_pasien`
--

INSERT INTO `obat_pasien` (`kode_obat`, `NIK`) VALUES
('A008KD', '1605121706987125'),
('B003EF', '1605121706987128'),
('B003EF', '1605121706987129'),
('C003CU', '1605121706987112'),
('C003CU', '1605121706987126'),
('H006CT', '1605121706987113'),
('K007CE', '1605121706987111'),
('Y002WD', '1605121706987114');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `NIK` char(16) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `usia` varchar(2) NOT NULL,
  `penyakit` varchar(20) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`NIK`, `nama_pasien`, `alamat`, `ttl`, `jenis_kelamin`, `usia`, `penyakit`, `no_telp`) VALUES
('1605121706987111', 'Milea simanjuntak', 'Jalan Way Halim', 'Banten 18 mei 1996', 'P', '22', 'kanker serviks', '072108979022'),
('1605121706987112', 'Yohanes', 'Jalan Way kanda', 'Aceh 27 April 1997', 'L', '21', 'sembelit', '072108979023'),
('1605121706987113', 'Clara evelyn', 'Jalan Way kandis', 'Lampung 17 maret 1988', 'P', '30', 'alergi', '072108979024'),
('1605121706987114', 'michelle', 'Jalan loka', 'Tanggerang 17 Maret 1999', 'P', '19', 'inveksi lambung', '072108979025'),
('1605121706987125', 'ryan', 'jalan lestari', 'ambon 17 Maret 1990', 'L', '28', 'clamidia', '072108979026'),
('1605121706987126', 'dian', 'jalan mangga dua', 'lampung 23 Maret 1971', 'L', '47', 'sembelit', '072108979027'),
('1605121706987128', 'winardi', 'jalan kimaja', 'semarang 24 juni 2003', 'L', '15', 'demam', '072108979029'),
('1605121706987129', 'angeline walandou', 'jalan menteng 2', 'jakarta 19 Maret 2008', 'P', '10', 'demam anak', '072108979030'),
('1605121706987210', 'aditiya bagaskara', 'muratara', 'jajaran baru 17 maret 1998', 'L', '32', 'liver', '085357037093'),
('1605121706987310', 'ryan', 'sdkfjsl', 'kldsjgflsdg', 'L', '87', 'skdfjkj', '08535678790'),
('1605121806888888', 'bejo', 'dkfldsjdlk', 'dksjflskd', 'P', '90', 'sdkfjls', '08535678763'),
('2605121706987110', 'Zul Hidayat', 'Jalan Way Huwi', 'Jakarta 17 Mei 1995', 'L', '23', 'saraf', '072108979021');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `NIK` char(16) NOT NULL,
  `id_dokter` char(8) NOT NULL,
  `nama_ruangan` varchar(10) NOT NULL,
  `waktu_masuk` date NOT NULL,
  `waktu_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat_inap`
--

INSERT INTO `rawat_inap` (`NIK`, `id_dokter`, `nama_ruangan`, `waktu_masuk`, `waktu_keluar`) VALUES
('1605121706987111', '13789668', 'Brahmana', '2018-01-11', '2018-02-02'),
('1605121706987112', '13789667', 'waisya', '2018-02-14', '2018-03-01'),
('1605121706987113', '13789667', 'silver', '2017-12-13', '2017-12-20'),
('1605121706987114', '13789670', 'ksatria', '2018-03-15', '2018-04-02'),
('1605121706987125', '13789674', 'titan', '2017-11-26', '2018-01-01'),
('1605121706987126', '13789667', 'bunga', '2018-01-10', '2018-01-30'),
('1605121706987129', '13789667', 'epic', '2018-04-01', '2018-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `nama_ruangan` varchar(10) NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `tarif_ruangan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`nama_ruangan`, `kelas`, `tarif_ruangan`) VALUES
('Brahmana', 'vvip', 1500000),
('bunga', 'reguler', 150000),
('dragon', 'vip', 850000),
('epic', 'vip', 850000),
('kamboja', 'vip', 500000),
('ksatria', 'vvip', 850000),
('raflesia', 'vvip', 2000000),
('silver', 'reguler', 150000),
('sudra', 'reguler', 150000),
('titan', 'vvip', 1500000),
('waisya', 'reguler', 150000),
('win', 'vip', 850000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `obat_pasien`
--
ALTER TABLE `obat_pasien`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `kode_obat` (`kode_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD PRIMARY KEY (`NIK`,`id_dokter`,`nama_ruangan`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `nama_ruangan` (`nama_ruangan`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`nama_ruangan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat_pasien`
--
ALTER TABLE `obat_pasien`
  ADD CONSTRAINT `obat_pasien_ibfk_1` FOREIGN KEY (`kode_obat`) REFERENCES `obat` (`kode_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `obat_pasien_ibfk_2` FOREIGN KEY (`NIK`) REFERENCES `pasien` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD CONSTRAINT `rawat_inap_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `pasien` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rawat_inap_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rawat_inap_ibfk_3` FOREIGN KEY (`nama_ruangan`) REFERENCES `ruangan` (`nama_ruangan`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

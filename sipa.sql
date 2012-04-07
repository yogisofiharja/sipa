-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2012 at 06:01 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipa`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE IF NOT EXISTS `angkatan` (
  `id_angkatan` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_angkatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_angkatan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `angkatan`
--


-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` text,
  `no_telp` varchar(30) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `golongan` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nama`, `alamat`, `no_telp`, `email`, `golongan`, `tempat_lahir`, `tanggal_lahir`) VALUES
(2, '19981123818', 'Jajang Kusnendar, M.T.', 'Ujung Brunx, Bandung', '087612345681', 'jkusnendar@gmail.com', 'IVB', 'Sumedang', '1976-09-17'),
(3, '192819239485', 'Wahyudin,M.T.', 'Sarijadi, Bandung', '083912347895', 'wahyudin@gmail.com', 'IVB', 'Bandung', '1974-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE IF NOT EXISTS `histori` (
  `id_histori` int(11) NOT NULL AUTO_INCREMENT,
  `mahasiswa_id` int(11) NOT NULL,
  `subjek` varchar(80) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_histori` date NOT NULL,
  PRIMARY KEY (`id_histori`),
  KEY `mahasiswa_id` (`mahasiswa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `histori`
--


-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE IF NOT EXISTS `kehadiran` (
  `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT,
  `mengontrak_id` int(11) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `tanggal_kuliah` date NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kehadiran`),
  KEY `mengontrak_id` (`mengontrak_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kehadiran`
--


-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `prodi_id` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `prodi_id` (`prodi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kelas`
--


-- --------------------------------------------------------

--
-- Table structure for table `kelas_angkatan`
--

CREATE TABLE IF NOT EXISTS `kelas_angkatan` (
  `id_kelas_angkatan` int(11) NOT NULL AUTO_INCREMENT,
  `angkatan_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  PRIMARY KEY (`id_kelas_angkatan`),
  KEY `angkatan_id` (`angkatan_id`),
  KEY `kelas_id` (`kelas_id`),
  KEY `dosen_id` (`dosen_id`),
  KEY `mahasiswa_id` (`mahasiswa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kelas_angkatan`
--


-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text,
  `no_telp` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama`, `alamat`, `no_telp`, `email`, `tempat_lahir`, `tanggal_lahir`) VALUES
(1, '0901939', 'Ridwan Fadjar Septian', 'Gedebage, Bandung', '085759211894', 'ridwanbejo@gmail.com', 'Bandung', '1990-09-29'),
(2, '0902392', 'Zia Ulhafiedz', 'Caringins, Bandung', '08681092919', 'zayretro@gmail.com', 'Bandung', '1991-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(80) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  PRIMARY KEY (`id_matakuliah`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `matakuliah`
--


-- --------------------------------------------------------

--
-- Table structure for table `mengampu`
--

CREATE TABLE IF NOT EXISTS `mengampu` (
  `id_mengampu` int(11) NOT NULL AUTO_INCREMENT,
  `dosen_id` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  PRIMARY KEY (`id_mengampu`),
  KEY `dosen_id` (`dosen_id`),
  KEY `matakuliah_id` (`matakuliah_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mengampu`
--


-- --------------------------------------------------------

--
-- Table structure for table `mengontrak`
--

CREATE TABLE IF NOT EXISTS `mengontrak` (
  `id_mengontrak` int(11) NOT NULL AUTO_INCREMENT,
  `mengampu_id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `tanggal_mengontrak` date NOT NULL,
  `nilai` varchar(10) NOT NULL,
  PRIMARY KEY (`id_mengontrak`),
  KEY `mengampu_id` (`mengampu_id`),
  KEY `mahasiswa_id` (`mahasiswa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mengontrak`
--


-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(80) NOT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `prodi`
--


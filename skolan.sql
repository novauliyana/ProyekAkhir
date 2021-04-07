-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 06:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skolan`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `kategori` (IN `idmpl` INT(11), IN `iduser` INT(11))  BEGIN 

SELECT nis, nama_siswa, kategori(idmpl,iduser) from siswa join mapel USING(id_mapel) where mapel.id_mapel= idmpl;

end$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `kategori` (`iduser` INT(11)) RETURNS VARCHAR(255) CHARSET latin1 BEGIN
DECLARE tugas double;
DECLARE ket varchar(20);

SELECT count(id) into tugas from kumpul_tugas  WHERE id_user=iduser; 

if tugas >=10 then
set ket = "sangat rajin";
elseif tugas <9 and tugas >=5 then
set ket = "rajin";
else
set ket = "Kurang rajin";
end if;
return(ket);
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(11) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `judul_acara` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi_acara` varchar(255) NOT NULL,
  `foto_acara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `tanggal_acara`, `judul_acara`, `lokasi`, `deskripsi_acara`, `foto_acara`) VALUES
(1, '2020-04-19', 'Student Festival', 'Grand Central Park', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.', 'event_1.jpg'),
(2, '2020-04-23', 'Open day in the School X', 'Grand Central Park', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.', 'event_22.jpg'),
(3, '2020-04-20', 'Student Graduation Ceremony', 'Grand Central Park', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.', 'event_3.jpg');

--
-- Triggers `acara`
--
DELIMITER $$
CREATE TRIGGER `after_acara_insert` AFTER INSERT ON `acara` FOR EACH ROW BEGIN
    INSERT INTO triger_acara
    SET aksi = 'insert',
    tanggal_acara = new.tanggal_acara,
	judul_acara = new.judul_acara,
	lokasi = new.lokasi,
	deskripsi_acara = new.deskripsi_acara,
	foto_acara = new.foto_acara,
    id_acara = new.id_acara,
        tglubah = NOW(); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_acara_update` BEFORE UPDATE ON `acara` FOR EACH ROW BEGIN
    INSERT INTO triger_acara
    SET aksi = 'update',
    tanggal_acara = OLD.tanggal_acara,
	judul_acara = OLD.judul_acara,
	lokasi = OLD.lokasi,
	deskripsi_acara = OLD.deskripsi_acara,
	foto_acara = OLD.foto_acara,
        tglubah = NOW(); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_acara_delete` BEFORE DELETE ON `acara` FOR EACH ROW BEGIN
    INSERT INTO triger_acara
    SET aksi = 'delete',
    tanggal_acara = old.tanggal_acara,
	judul_acara = old.judul_acara,
	lokasi = old.lokasi,
	deskripsi_acara = old.deskripsi_acara,
	foto_acara = old.foto_acara,
        tglubah = NOW(); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_guru`
--

CREATE TABLE `audit_guru` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tglubah` datetime NOT NULL,
  `aksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_guru`
--

INSERT INTO `audit_guru` (`id`, `nip`, `nama_guru`, `tglubah`, `aksi`) VALUES
(1, 123, 'a', '2020-04-09 23:17:40', 'insert'),
(2, 321, 'Nadin Amizah', '2020-04-10 07:49:29', 'delete'),
(3, 1234, 'Veronica Joana', '2020-04-10 07:52:35', 'update'),
(4, 123, 'a', '2020-04-10 07:53:21', 'update'),
(5, 1234, 'Veronica Joana', '2020-04-11 15:32:35', 'update'),
(6, 1234, 'Veronica Joana', '2020-04-12 20:48:16', 'update'),
(7, 1234, 'Veronica Joana', '2020-04-12 20:56:34', 'update'),
(8, 1234, 'Veronica Joana', '2020-04-12 21:01:22', 'update'),
(9, 1234, 'Veronica Joana', '2020-04-12 21:03:07', 'update'),
(10, 1234, 'Veronica Joana', '2020-04-12 22:05:02', 'update'),
(11, 4321, 'Jessica Alexandra', '2020-04-12 22:39:11', 'insert'),
(12, 4321, 'Jessica Alexandra', '2020-04-13 10:31:53', 'update'),
(13, 4321, 'Jessica Alexandra', '2020-04-13 10:32:53', 'update'),
(14, 4321, 'Jessica Alexandra', '2020-04-13 10:34:20', 'update'),
(15, 4321, 'Jessica Alexandra', '2020-04-13 10:34:47', 'update'),
(16, 4321, 'Jessica Alexandra', '2020-04-13 10:35:23', 'update'),
(17, 4321, 'Jessica Alexandra', '2020-04-13 10:35:30', 'update'),
(18, 4321, 'Jessica Alexandra', '2020-04-13 10:36:28', 'update'),
(19, 4321, 'Jessica Alexandra', '2020-04-13 10:36:35', 'update'),
(20, 123, 'Lucas', '2020-04-13 11:19:27', 'delete'),
(21, 1234, 'Veronica Joana', '2020-04-14 12:44:55', 'update'),
(22, 4321, 'Jessica Alexandra', '2020-04-14 12:45:12', 'update'),
(23, 1234, 'Veronica Joana', '2020-04-14 12:45:50', 'update'),
(24, 1234, 'Veronica Joana', '2020-04-14 13:32:13', 'update'),
(25, 4321, 'Jessica Alexandra', '2020-04-14 13:32:19', 'update'),
(26, 1234, 'Veronica Joana', '2020-04-14 20:22:11', 'update'),
(27, 1234, 'Veronica Joana', '2020-04-14 20:23:03', 'update'),
(28, 1234, 'Veronica Joana', '2020-04-14 22:50:22', 'update'),
(29, 1234, 'Veronica Joana', '2020-04-14 22:51:14', 'update'),
(30, 4321, 'Jessica Alexandra', '2020-04-14 22:58:20', 'update'),
(31, 1234, 'Veronica Joana', '2020-04-15 16:51:05', 'update'),
(32, 4321, 'Jessica Alexandra', '2020-04-15 16:59:04', 'update'),
(33, 1234, 'Veronica Joana', '2020-04-15 17:01:02', 'update'),
(34, 8765, 'Daniel Bastian', '2020-04-15 17:01:42', 'insert'),
(35, 8765, 'Daniel Bastian', '2020-04-15 17:04:02', 'delete'),
(36, 7654, 'Daniel Bastian', '2020-04-15 17:04:45', 'insert'),
(37, 7654, 'Daniel Bastian', '2020-04-15 17:05:42', 'delete'),
(38, 6543, 'Daniel Bastian', '2020-04-15 17:06:00', 'insert'),
(39, 6543, 'Daniel Bastian', '2020-04-15 17:07:45', 'delete'),
(40, 7654, 'Daniel Bastian', '2020-04-15 17:08:23', 'insert'),
(41, 7654, 'Daniel Bastian', '2020-04-15 17:09:04', 'update'),
(42, 7654, 'Daniel Bastian', '2020-04-18 14:58:52', 'delete'),
(43, 2039, 'Ananda Arif', '2020-04-20 17:13:49', 'insert'),
(44, 98765, 'Sinta', '2020-04-27 21:52:18', 'insert'),
(45, 987654, 'Sinta', '2020-04-27 22:44:57', 'insert');

-- --------------------------------------------------------

--
-- Table structure for table `audit_materi`
--

CREATE TABLE `audit_materi` (
  `id` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `judul_materi` varchar(50) NOT NULL,
  `tglubah` datetime NOT NULL,
  `aksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_materi`
--

INSERT INTO `audit_materi` (`id`, `id_materi`, `judul_materi`, `tglubah`, `aksi`) VALUES
(1, 12, 'a', '2020-04-09 23:11:48', 'insert'),
(2, 12, 'a', '2020-04-10 07:54:06', 'delete'),
(3, 8, 'video', '2020-04-10 23:38:24', 'delete'),
(4, 8, 'bahasa', '2020-04-11 22:58:49', 'insert'),
(5, 8, 'bahasa', '2020-04-12 18:28:21', 'update'),
(6, 8, 'bahasasa', '2020-04-12 18:34:32', 'update'),
(7, 9, 'IPA', '2020-04-12 20:29:12', 'insert'),
(8, 8, 'bah', '2020-04-12 20:31:22', 'update'),
(9, 10, 'ips', '2020-04-14 22:25:20', 'insert'),
(10, 10, 'ips', '2020-04-14 22:46:44', 'delete'),
(11, 9, 'IPA', '2020-04-14 22:46:45', 'delete'),
(12, 8, 'bah b', '2020-04-14 22:46:46', 'delete'),
(13, 7, 'cv', '2020-04-14 22:46:47', 'delete'),
(14, 2, 'bilangan', '2020-04-14 22:46:48', 'delete'),
(15, 1, 'Aritmatika', '2020-04-15 08:02:55', 'insert'),
(16, 1, 'Aritmatika', '2020-04-15 19:05:41', 'update'),
(17, 1, '', '2020-04-15 19:06:18', 'update'),
(18, 1, 'ab', '2020-04-16 20:32:26', 'update'),
(19, 2, 'Indra', '2020-04-16 20:32:47', 'insert'),
(20, 3, 'Algoritma', '2020-04-16 22:06:21', 'update'),
(21, 1, 'Matriks', '2020-04-16 22:51:22', 'update'),
(22, 1, 'Matriks linaer', '2020-04-16 22:52:05', 'update'),
(23, 1, 'Matriks', '2020-04-16 22:52:52', 'update'),
(24, 1, 'Matriks linaer', '2020-04-16 22:53:23', 'update'),
(25, 1, 'Matriks ', '2020-04-16 22:53:56', 'update'),
(26, 1, 'Matriks linaer', '2020-04-16 22:54:23', 'update'),
(27, 1, 'Matriks', '2020-04-16 22:56:40', 'update'),
(28, 6, 'bilangan', '2020-04-17 00:00:06', 'update'),
(29, 6, 'Bilangan', '2020-04-17 00:01:11', 'update'),
(30, 8, 'Imbuhan', '2020-04-17 21:35:28', 'update'),
(31, 8, 'Imbuhan', '2020-04-17 22:57:30', 'update'),
(32, 9, 'Kata', '2020-04-17 22:57:39', 'update'),
(33, 12, 'k', '2020-04-17 22:57:55', 'update');

-- --------------------------------------------------------

--
-- Table structure for table `audit_siswa`
--

CREATE TABLE `audit_siswa` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tglubah` datetime NOT NULL,
  `aksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_siswa`
--

INSERT INTO `audit_siswa` (`id`, `nis`, `nama_siswa`, `tglubah`, `aksi`) VALUES
(1, 1111, 'Angelia Putri', '2020-04-09 22:14:10', 'insert'),
(2, 11112, 'a', '2020-04-09 23:04:22', 'insert'),
(3, 1111, 'Angelia Putri', '2020-04-10 07:46:11', 'update'),
(4, 11112, 'a', '2020-04-10 07:49:08', 'delete'),
(5, 1111, 'Angelia Putri', '2020-04-11 00:12:01', 'update'),
(6, 6543, 'Joshua Abram', '2020-04-13 11:18:37', 'insert'),
(7, 7654, 'Jane Ayu', '2020-04-13 11:19:00', 'insert'),
(8, 2354, 'Lucas Brian', '2020-04-13 11:19:55', 'insert'),
(9, 1111, 'Angelia Putri', '2020-04-15 14:03:51', 'update'),
(10, 1111, 'Angelia Putri', '2020-04-15 14:15:09', 'update'),
(11, 1111, 'Angelia Putri', '2020-04-15 14:24:19', 'update'),
(12, 1111, 'Angelia Putri', '2020-04-15 14:27:58', 'update'),
(13, 1111, 'Angelia Putri', '2020-04-15 14:29:09', 'update'),
(14, 1111, 'Angelia Putri', '2020-04-15 16:26:05', 'update'),
(15, 1111, 'Angelia Putri', '2020-04-15 16:27:42', 'update'),
(16, 4567, 'Melati Sinta', '2020-04-15 17:11:02', 'insert'),
(17, 4567, 'Melati Sinta', '2020-04-15 17:12:48', 'update'),
(18, 1111, 'Angelia Putri', '2020-04-15 23:22:03', 'update'),
(19, 1111, 'Angelia Putri', '2020-04-16 19:42:44', 'update'),
(20, 1111, 'Angelia Putri', '2020-04-16 20:22:50', 'update'),
(21, 5432, 'Gina Sonia', '2020-04-17 07:40:16', 'insert'),
(22, 5432, 'Gina Sonia', '2020-04-17 07:41:31', 'update'),
(23, 5432, 'Gina Sonia', '2020-04-17 07:42:30', 'update'),
(24, 7654, 'Jane Ayu', '2020-04-18 14:58:35', 'delete'),
(25, 6543, 'Joshua Abram', '2020-04-18 14:58:37', 'delete'),
(26, 4567, 'Melati Sinta', '2020-04-18 14:58:39', 'delete'),
(27, 2354, 'Lucas Brian', '2020-04-18 14:58:41', 'delete'),
(28, 6875, 'Lucas Brian', '2020-04-18 15:00:07', 'insert'),
(29, 6875, 'Lucas Brian', '2020-04-18 15:01:11', 'update'),
(30, 887, 'Jane Ayu', '2020-04-18 15:01:41', 'insert'),
(31, 887, 'Jane Ayu', '2020-04-18 15:02:12', 'update'),
(32, 6546, 'Joshua Abram', '2020-04-18 15:02:38', 'insert'),
(33, 6546, 'Joshua Abram', '2020-04-18 15:03:03', 'update'),
(34, 4010, 'Melati Sinta', '2020-04-18 15:03:36', 'insert'),
(35, 4010, 'Melati Sinta', '2020-04-18 15:05:01', 'update'),
(36, 887, 'Jane Ayu', '2020-04-18 15:05:49', 'update'),
(37, 4010, 'Melati Sinta', '2020-04-18 15:06:02', 'update'),
(38, 4010, 'Melati Sinta', '2020-04-18 15:06:18', 'update'),
(39, 6875, 'Lucas Brian', '2020-04-18 15:06:26', 'update'),
(40, 6546, 'Joshua Abram', '2020-04-18 15:06:36', 'update'),
(41, 79687, 'Nova Uliyana', '2020-04-19 20:25:18', 'insert'),
(42, 79687, 'Nova Uliyana', '2020-04-19 20:26:05', 'update'),
(43, 110, 'Na Jaemin', '2020-04-20 16:02:04', 'insert'),
(44, 115, 'Nova Uliyana', '2020-04-20 16:02:38', 'insert'),
(45, 186, 'Theresia Riani', '2020-04-20 16:03:02', 'insert'),
(46, 6546, 'Joshua Abram', '2020-04-20 16:30:39', 'update'),
(47, 101, '', '2020-04-20 18:31:44', 'insert'),
(48, 101, '', '2020-04-20 18:43:34', 'delete'),
(49, 166, 'Kang Daniel', '2020-04-20 21:28:41', 'insert'),
(50, 166, 'Kang Daniel', '2020-04-20 21:30:38', 'update'),
(51, 167, 'Tri Utama Elisabeth', '2020-04-20 21:31:50', 'insert'),
(52, 167, 'Tri Utama Elisabeth', '2020-04-20 21:32:49', 'update'),
(53, 168, 'Theresia Riani', '2020-04-20 21:35:20', 'insert'),
(54, 168, 'Theresia Riani', '2020-04-20 21:35:50', 'update'),
(55, 170, 'Ong Seongwoo', '2020-04-20 22:17:33', 'insert');

-- --------------------------------------------------------

--
-- Table structure for table `audit_tugas`
--

CREATE TABLE `audit_tugas` (
  `id` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `judul_tugas` varchar(50) NOT NULL,
  `tglubah` datetime NOT NULL,
  `aksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_tugas`
--

INSERT INTO `audit_tugas` (`id`, `id_tugas`, `judul_tugas`, `tglubah`, `aksi`) VALUES
(1, 3, 'd', '2020-04-09 23:22:21', 'insert'),
(2, 2, 'a', '2020-04-10 07:47:03', 'update'),
(3, 3, 'd', '2020-04-10 07:48:16', 'update'),
(4, 3, 'Inggris', '2020-04-10 23:49:24', 'delete'),
(5, 4, 'Matematika', '2020-04-10 23:51:24', 'insert'),
(6, 2, 'Bahasa', '2020-04-10 23:51:40', 'delete'),
(7, 4, 'Matematika', '2020-04-12 10:08:50', 'delete'),
(8, 5, 'Bahasa', '2020-04-12 10:12:51', 'insert'),
(9, 5, 'Bahasa', '2020-04-14 22:47:51', 'delete'),
(10, 1, 'Matematika', '2020-04-14 22:47:52', 'delete'),
(11, 1, 'Matematika', '2020-04-15 08:03:42', 'insert'),
(12, 1, 'Matematika', '2020-04-15 08:12:41', 'delete'),
(13, 2, 'Matematika', '2020-04-15 08:12:57', 'insert'),
(14, 2, 'Matematika', '2020-04-15 20:19:17', 'update'),
(15, 2, 'Ipa', '2020-04-17 00:21:50', 'update');

-- --------------------------------------------------------

--
-- Table structure for table `audit_video`
--

CREATE TABLE `audit_video` (
  `id` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(50) NOT NULL,
  `tglubah` datetime NOT NULL,
  `aksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_video`
--

INSERT INTO `audit_video` (`id`, `id_video`, `judul_video`, `tglubah`, `aksi`) VALUES
(1, 22, 'aa', '2020-04-09 23:13:54', 'insert'),
(2, 22, 'aa', '2020-04-10 07:53:36', 'delete'),
(3, 21, 's', '2020-04-10 07:53:56', 'update'),
(4, 21, 'Bahasa', '2020-04-14 22:47:44', 'delete'),
(5, 3, 'Bilangan', '2020-04-14 22:47:45', 'delete'),
(6, 2, 'Matriks', '2020-04-14 22:47:46', 'delete'),
(7, 1, 'a', '2020-04-15 08:03:22', 'insert'),
(8, 1, 'a', '2020-04-15 19:14:57', 'update'),
(9, 1, 'ab', '2020-04-15 19:27:36', 'update'),
(10, 1, 'IPA', '2020-04-16 22:57:19', 'update'),
(11, 1, 'IPA', '2020-04-16 22:57:40', 'update'),
(12, 1, 'Matriks', '2020-04-16 22:58:42', 'update'),
(13, 2, 'Matriks', '2020-04-17 00:11:20', 'insert'),
(14, 3, 'Bilangan', '2020-04-17 00:11:45', 'insert');

-- --------------------------------------------------------

--
-- Table structure for table `banksoal`
--

CREATE TABLE `banksoal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `jawaban_soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `teks_berita` text NOT NULL,
  `foto_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal`, `teks_berita`, `foto_berita`) VALUES
(1, 'Why do you need a qualification?', '2020-04-21', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies.', 'news_11.jpg'),
(3, 'Our new courses just for you?', '2020-04-22', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies.', 'news_2.jpg'),
(4, 'Why take our graduate program??', '2020-04-23', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies.', 'news_3.jpg');

--
-- Triggers `berita`
--
DELIMITER $$
CREATE TRIGGER `after_berita_insert` AFTER INSERT ON `berita` FOR EACH ROW BEGIN
    INSERT INTO triger_berita
    SET aksi = 'insert',
    tanggal = new.tanggal,
	judul_berita= new.judul_berita,
	teks_berita = new.teks_berita,
	foto_berita = new.foto_berita,
        tglubah = NOW(); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_berita_update` BEFORE UPDATE ON `berita` FOR EACH ROW BEGIN
    INSERT INTO triger_berita
    SET aksi = 'update',
    tanggal = OLD.tanggal,
	judul_berita= OLD.judul_berita,
	teks_berita = OLD.teks_berita,
	foto_berita = OLD.foto_berita,
        tglubah = NOW(); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_berita_delet` BEFORE DELETE ON `berita` FOR EACH ROW BEGIN
    INSERT INTO triger_berita
    SET aksi = 'update',
    tanggal = OLD.tanggal,
	judul_berita= OLD.judul_berita,
	teks_berita = OLD.teks_berita,
	foto_berita = OLD.foto_berita,
        tglubah = NOW(); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `berkas_siswa`
--

CREATE TABLE `berkas_siswa` (
  `id_berkas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kartu_keluarga` varchar(100) NOT NULL,
  `akte_kelahiran` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `ktp_ortu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas_siswa`
--

INSERT INTO `berkas_siswa` (`id_berkas`, `id_siswa`, `nama_siswa`, `kartu_keluarga`, `akte_kelahiran`, `ijazah`, `ktp_ortu`) VALUES
(2, 115, 'Nova Uliyana', 'http://localhost/sia/assets/images/berkas_siswa/Annotation_2020-04-16_201247.jpg', 'http://localhost/sia/assets/images/berkas_siswa/Annotation_2020-04-16_201820.jpg', 'http://localhost/sia/assets/images/berkas_siswa/Annotation_2020-04-16_201958.jpg', 'http://localhost/sia/assets/images/berkas_siswa/Annotation_2020-04-16_202209.jpg'),
(8, 186, 'Theresia Riani', 'http://localhost/nopa/assets/images/berkas_siswa/', 'http://localhost/nopa/assets/images/berkas_siswa/', 'http://localhost/nopa/assets/images/berkas_siswa/', 'http://localhost/nopa/assets/images/berkas_siswa/'),
(9, 6546, 'Joshua Abram', 'http://localhost/sia/assets/images/berkas_siswa/', 'http://localhost/sia/assets/images/berkas_siswa/', 'http://localhost/sia/assets/images/berkas_siswa/', 'http://localhost/sia/assets/images/berkas_siswa/'),
(11, 168, 'Theresia Riani', 'http://localhost/sia/assets/images/berkas_siswa/20170407_151415.jpg', 'http://localhost/sia/assets/images/berkas_siswa/tas-robita.jpg', 'http://localhost/sia/assets/images/berkas_siswa/EVyKAMdUYAIfG5u.jpg', 'http://localhost/sia/assets/images/berkas_siswa/tas_robit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id_casis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pembayaran_form` int(1) NOT NULL,
  `isi` int(1) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `nohp_casis` varchar(15) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nomor_ujian` varchar(15) NOT NULL,
  `nilai_un` double NOT NULL,
  `nilai_us` double NOT NULL,
  `nama_ortucasis` varchar(50) NOT NULL,
  `pekerjaan_ortu` varchar(100) NOT NULL,
  `nohp_ortu` varchar(15) NOT NULL,
  `is_lulus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id_casis`, `id_user`, `pembayaran_form`, `isi`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `nohp_casis`, `asal_sekolah`, `nomor_ujian`, `nilai_un`, `nilai_us`, `nama_ortucasis`, `pekerjaan_ortu`, `nohp_ortu`, `is_lulus`) VALUES
(67, 26, 1, 1, 'Nova Uliyana', 'Jakarta', '2000-11-24', 'Perempuan', 'Katolik', 'Jakarta', '081818188181', 'SMK Pangudi Rahayu II', '6701184056', 99, 99, 'J. Samosir', 'Wiraswasta', '0987654456789', 1),
(68, 27, 1, 1, 'Na Jaemin', 'Jeonju', '2000-08-13', 'Laki-laki', 'Katolik', 'Seoul', '01020001308', 'Seoul Of Performing Arts', '1308', 99, 99, 'Na Siwon', 'Ceo', '01021333111', 1),
(71, 34, 1, 1, 'angel', 'Batam', '2020-04-16', 'Perempuan', 'Kristen', 'Batam', '0945678989', 'Sma n 8 batam', '5678', 78, 78, 'lala', 'lala', '086578567', 1),
(72, 0, 0, 0, 'lala', '', '0000-00-00', '', '', '', '', '', '', 0, 0, '', '', '', 0),
(73, 31, 1, 1, 'Tri Utama Elisabeth', 'Jakarta', '2007-03-31', 'Perempuan', 'Katolik', 'Jakarta', '081818188181', 'SMP Pangudi Rahayu', '0985', 88, 88, 'jj', 'kk', '09876', 1),
(77, 35, 1, 1, 'Kang Daniel', 'Busan', '1996-12-10', 'Laki-laki', 'Kristen', 'Seoul', '01020001308', 'Seoul Of Performing Arts', '098765', 99, 99, 'Tuan Kang', 'ce', '0988765', 1),
(78, 36, 1, 1, 'Theresia Riani', 'Jakarta', '1000-12-12', 'Laki-laki', 'Katolik', 'fvgbhnjm', '567890', 'dfcgvhbnjk', '9876', 88, 88, 'xfdcgvhbjn', 'cfvgbhnjk', '908765', 1),
(79, 37, 1, 1, 'Ong Seongwoo', 'Incheon', '1995-08-25', 'Laki-laki', 'Kristen', 'Seoul', '01019950825', 'Seoul Of Performing Arts', '09876', 99, 99, 'Tuan Ong', 'Pdt', '01021333111', 1);

--
-- Triggers `calon_siswa`
--
DELIMITER $$
CREATE TRIGGER `after_casis_insert` AFTER INSERT ON `calon_siswa` FOR EACH ROW BEGIN
 		INSERT INTO calon_siswa_audit
 		SET keterangan = 'insert',
 		id_casis = NEW.id_casis,
		id_user = NEW.id_user,
 		nama = NEW.nama,
		tanggal = NOW();
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_casis_delete` BEFORE DELETE ON `calon_siswa` FOR EACH ROW BEGIN
    INSERT INTO calon_siswa_audit
    SET aksi = 'delete',
        id_casis = OLD.id_casis,
	id_user = OLD.id_user,
	nama = OLD.nama,
        tanggal = NOW();
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_casis_update_data` BEFORE UPDATE ON `calon_siswa` FOR EACH ROW BEGIN
INSERT INTO calon_siswa_audit
SET keterangan='Data telah diperbaharui',
tanggal = now(),
id_casis = old.id_casis,
id_user = new.id_user,
pembayaran_form= new.pembayaran_form,
isi = new.isi,
nama = old.nama,
tempat_lahir = new.tempat_lahir,
tanggal_lahir = new.tanggal_lahir,
jenis_kelamin = new.jenis_kelamin,
agama = new.agama,
alamat = new.alamat,
nohp_casis = new.nohp_casis,
asal_sekolah = new.asal_sekolah,
nomor_ujian = new.nomor_ujian,
nilai_un = new.nilai_un,
nilai_us = new.nilai_us,
nama_ortucasis = new.nama_ortucasis,
pekerjaan_ortu = new.pekerjaan_ortu,
nohp_ortu = new.nohp_ortu,
is_lulus = new.is_lulus;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa_audit`
--

CREATE TABLE `calon_siswa_audit` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `id_casis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pembayaran_form` int(1) NOT NULL,
  `isi` int(1) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `nohp_casis` varchar(15) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nomor_ujian` varchar(15) NOT NULL,
  `nilai_un` double NOT NULL,
  `nilai_us` double NOT NULL,
  `nama_ortucasis` varchar(50) NOT NULL,
  `pekerjaan_ortu` varchar(100) NOT NULL,
  `nohp_ortu` varchar(15) NOT NULL,
  `is_lulus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `casis_audit`
--

CREATE TABLE `casis_audit` (
  `id` int(11) NOT NULL,
  `id_casis` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tglubah` datetime DEFAULT NULL,
  `aksi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casis_audit`
--

INSERT INTO `casis_audit` (`id`, `id_casis`, `id_user`, `nama`, `tglubah`, `aksi`) VALUES
(1, 64, 0, 'Nova', '2020-04-10 08:14:25', 'insert'),
(2, 64, 0, 'Nova', '2020-04-12 20:37:45', 'update'),
(3, 64, 0, 'Nova', '2020-04-12 20:38:52', 'update'),
(4, 64, 0, 'Nova', '2020-04-12 20:39:12', 'update'),
(5, 64, 0, 'Nova', '2020-04-12 20:44:13', 'update'),
(6, 64, 7, 'Nova', '2020-04-12 21:38:18', 'update'),
(7, 63, 6, 'Nova Uliyana', '2020-04-12 21:51:21', 'update'),
(8, 64, 0, 'Nova', '2020-04-12 21:59:40', 'update'),
(9, 64, 0, 'Nova', '2020-04-12 22:06:15', 'update'),
(10, 65, 0, 'Tri Utama Elisabeth', '2020-04-12 22:06:59', 'insert'),
(11, 65, 0, 'Tri Utama Elisabeth', '2020-04-12 22:09:52', 'delete'),
(12, 66, 0, 'Ong Seongwoo', '2020-04-12 22:10:56', 'insert'),
(13, 66, 0, 'Ong Seongwoo', '2020-04-12 22:11:46', 'update'),
(14, 66, 0, 'Ong Seongwoo', '2020-04-12 22:13:50', 'update'),
(15, 64, 7, 'Nova', '2020-04-16 01:02:01', 'update'),
(16, 63, 6, 'Nova Uliyana', '2020-04-16 01:02:37', 'update'),
(17, 63, 6, 'Nova Uliyana', '2020-04-16 01:07:26', 'update'),
(18, 63, 6, 'Nova Uliyana', '2020-04-16 02:40:39', 'update'),
(19, 66, 14, 'Ong Seongwoo', '2020-04-16 02:43:00', 'update'),
(20, 63, 6, 'Nova Uliyana', '2020-04-16 02:47:13', 'delete'),
(21, 64, 7, 'Nova', '2020-04-16 02:47:13', 'delete'),
(22, 66, 14, 'Ong Seongwoo', '2020-04-16 02:47:13', 'delete'),
(23, 67, 0, 'Nova Uliyana', '2020-04-16 02:48:38', 'insert'),
(24, 67, 0, 'Nova Uliyana', '2020-04-16 02:51:49', 'update'),
(25, 67, 0, 'Nova Uliyana', '2020-04-16 02:52:38', 'update'),
(40, 72, 0, 'lala', '2020-04-20 16:51:47', 'insert'),
(41, 71, 0, 'angel', '2020-04-20 17:05:43', 'update'),
(42, 71, 0, 'angel', '2020-04-20 17:09:17', 'update'),
(43, 71, 34, 'angel', '2020-04-20 17:15:59', 'update'),
(44, 73, 0, 'Tri Utama Elisabeth', '2020-04-20 17:50:18', 'insert'),
(45, 73, 0, 'Tri Utama Elisabeth', '2020-04-20 17:50:55', 'update'),
(46, 73, 0, 'Tri Utama Elisabeth', '2020-04-20 17:51:46', 'update'),
(47, 73, 31, 'Tri Utama Elisabeth', '2020-04-20 17:54:38', 'update'),
(48, 73, 31, 'Tri Utama Elisabeth', '2020-04-20 18:19:41', 'update'),
(49, 73, 31, 'Tri Utama Elisabeth', '2020-04-20 18:24:00', 'update'),
(50, 74, 0, 'Theresia Riani', '2020-04-20 18:50:40', 'insert'),
(51, 74, 0, 'Theresia Riani', '2020-04-20 18:51:22', 'delete'),
(52, 70, 33, 'Theresia Riani', '2020-04-20 18:51:45', 'delete'),
(53, 75, 0, 'Theresia Riani', '2020-04-20 18:52:15', 'insert'),
(54, 76, 0, 'Clarinta lala', '2020-04-20 18:55:30', 'insert'),
(55, 76, 0, 'Clarinta lala', '2020-04-20 19:03:18', 'delete'),
(56, 75, 0, 'Theresia Riani', '2020-04-20 19:03:24', 'delete'),
(57, 77, 0, 'Kang Daniel', '2020-04-20 19:04:30', 'insert'),
(58, 77, 0, 'Kang Daniel', '2020-04-20 19:10:21', 'update'),
(59, 77, 0, 'Kang Daniel', '2020-04-20 19:11:07', 'update'),
(60, 77, 35, 'Kang Daniel', '2020-04-20 19:11:37', 'update'),
(61, 78, 0, 'Theresia Riani', '2020-04-20 21:33:48', 'insert'),
(62, 78, 0, 'Theresia Riani', '2020-04-20 21:34:16', 'update'),
(63, 78, 0, 'Theresia Riani', '2020-04-20 21:34:41', 'update'),
(64, 78, 36, 'Theresia Riani', '2020-04-20 21:34:58', 'update'),
(65, 79, 0, 'Ong Seongwoo', '2020-04-20 22:09:25', 'insert'),
(66, 79, 0, 'Ong Seongwoo', '2020-04-20 22:10:09', 'update'),
(67, 79, 0, 'Ong Seongwoo', '2020-04-20 22:11:04', 'update'),
(68, 79, 37, 'Ong Seongwoo', '2020-04-20 22:11:24', 'update');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_siswa`
--

CREATE TABLE `daftar_siswa` (
  `id_daftarsiswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `thn_ajar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_siswa`
--

INSERT INTO `daftar_siswa` (`id_daftarsiswa`, `id_kelas`, `nis`, `thn_ajar`) VALUES
(1, 1, 1111, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_gambar`, `gambar`, `judul`, `deskripsi_gambar`) VALUES
(1, 'Online_Courses.jpg', 'Online Courses', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.'),
(2, 'Indoor_Courses.jpg', 'Indoor Courses', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.'),
(3, 'outdoor.jpg', 'Outdoor Courses', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.'),
(4, 'Amazing_Library.jpg', 'Amazing Library', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.'),
(5, 'laboratory.jpg', 'Laboratory', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.'),
(6, 'kantin.jpg', 'Canteen', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.');

--
-- Triggers `fasilitas`
--
DELIMITER $$
CREATE TRIGGER `after_fasilitas_insert` AFTER INSERT ON `fasilitas` FOR EACH ROW BEGIN
    INSERT INTO triger_fasilitas
    SET aksi = 'update',
    gambar = new.gambar,
	judul= new.judul,
	deskripsi_gambar = new.deskripsi_gambar,
        tglubah = NOW(); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_fasilitas_update` BEFORE UPDATE ON `fasilitas` FOR EACH ROW BEGIN
    INSERT INTO triger_fasilitas
    SET aksi = 'update',
    gambar = old.gambar,
	judul= OLD.judul,
	deskripsi_gambar = OLD.deskripsi_gambar,
        tglubah = NOW(); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_fasilitas_delete` BEFORE DELETE ON `fasilitas` FOR EACH ROW BEGIN
    INSERT INTO triger_fasilitas
    SET aksi = 'update',
    gambar = old.gambar,
	judul= old.judul,
	deskripsi_gambar = old.deskripsi_gambar,
        tglubah = NOW(); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_foto`, `foto`) VALUES
(4, 'Exceptional_Professors.jpg'),
(5, 'Indoor_Courses.jpg'),
(6, 'exdoor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `username` varchar(128) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telp_guru` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `foto_guru` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama_guru`, `username`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telp_guru`, `jenis_kelamin`, `foto_guru`, `id_user`) VALUES
(2, 1234, 'Veronica Joana', 'veronicajo', 'Bandung ', '2000-05-10', 'Bandung ', '0812345678', 'Perempuan', 'assets/profil/71.jpg', 13),
(6, 4321, 'Jessica Alexandra', 'jessicaalex', 'Jakarta Timur', '2000-10-12', 'Jakarta', '0812345678', 'Perempuan', 'assets/profil/8.jpg', 14),
(7, 2039, 'Ananda Arif', 'anandaar', '', '0000-00-00', '', '', 'Laki-Laki', 'assets/profil/default.jpg', 0),
(8, 98765, 'Sinta', 'sinta', '', '0000-00-00', '', '', 'Perempuan', 'assets/profil/default.jpg', 0),
(9, 987654, 'Sinta', 'sinta', '', '0000-00-00', '', '', 'Perempuan', 'assets/profil/default.jpg', 0);

--
-- Triggers `guru`
--
DELIMITER $$
CREATE TRIGGER `after_guru_insert` AFTER INSERT ON `guru` FOR EACH ROW BEGIN
    INSERT INTO audit_guru
    SET aksi = 'insert',
        nip = NEW.nip,
        nama_guru = NEW.nama_guru,
        tglubah = NOW(); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_guru_delete` BEFORE DELETE ON `guru` FOR EACH ROW BEGIN
    INSERT INTO audit_guru
    SET aksi = 'delete',
        nip = OLD.nip,
        nama_guru = OLD.nama_guru,
        tglubah = NOW(); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_guru_update` BEFORE UPDATE ON `guru` FOR EACH ROW BEGIN
    INSERT INTO audit_guru
    SET aksi = 'update',
        nip = OLD.nip,
        nama_guru = OLD.nama_guru,
        tglubah = NOW(); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `deskripsi_informasi` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul_informasi`, `deskripsi_informasi`, `file`) VALUES
(1, 'profil', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'http://localhost:8080/sia/assets/video/pr.mp4');

--
-- Triggers `informasi`
--
DELIMITER $$
CREATE TRIGGER `after_informasi_update` BEFORE UPDATE ON `informasi` FOR EACH ROW BEGIN
    INSERT INTO triger_informasi
    SET aksi = 'update',
	judul_informasi = OLD.judul_informasi,
	deskripsi_informasi = OLD.deskripsi_informasi,
	file = OLD.file,
    tglubah = NOW(); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_informasi_delete` BEFORE DELETE ON `informasi` FOR EACH ROW BEGIN
    INSERT INTO triger_informasi
    SET aksi = 'insert',
	judul_informasi = old.judul_informasi,
	deskripsi_informasi = old.deskripsi_informasi,
	file = old.file,
        tglubah = NOW(); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `item_tugas`
--

CREATE TABLE `item_tugas` (
  `id_itemtugas` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_ulangan`
--

CREATE TABLE `item_ulangan` (
  `id_itemulangan` int(11) NOT NULL,
  `id_ulangan` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` varchar(8) NOT NULL,
  `jam_akhir` varchar(8) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `jam_mulai`, `jam_akhir`, `id_kelas`, `id`, `id_mapel`) VALUES
(7, 'Senin', '07:30', '09.15', 1, 7, 1),
(8, 'Senin', '07:30', '09:15', 2, 6, 2),
(9, 'Senin', '07:30', '09.15', 3, 2, 3),
(12, 'Senin', '21:00', '22:01', 1, 2, 2),
(13, 'Selasa', '12:39', '13:40', 2, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `id_thn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_thn`) VALUES
(1, 'X-IPA-1', 1),
(2, 'X-IPA-2 ', 1),
(3, 'X-IPA-3', 1),
(4, 'X-IPS-1', 1),
(5, 'X-IPS-2', 1),
(6, 'X-IPS-3', 1),
(7, 'X-IPA-1', 2),
(8, 'X-IPA-2', 2),
(9, 'X-IPA-3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE `kuis` (
  `id_kuis` int(11) NOT NULL,
  `judul_kuis` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `deadline` datetime NOT NULL,
  `file` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `id_mapel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuis`
--

INSERT INTO `kuis` (`id_kuis`, `judul_kuis`, `deskripsi`, `deadline`, `file`, `tanggal`, `id_mapel`, `id_user`) VALUES
(2, 'kuis 1', 'Kerjakan!', '0000-00-00 00:00:00', 'assets/elearning/PDF_Konflik_dan_negosiasi_compress_compress10.pdf', '2020-04-17 23:41:07', 3, 14),
(3, 'Kuis 1 Aljabar', 'Kerjakan!', '2020-04-23 00:00:00', 'assets/elearning/Matematika15.docx', '2020-04-18 17:34:06', 1, 13),
(4, 'Kuis 2', 'Kerjakan!', '2020-04-24 00:00:00', 'assets/elearning/Matematika14.docx', '2020-04-18 17:34:22', 1, 13),
(5, 'Kuis 1', 'Kerjakan!', '2020-04-15 00:00:00', 'assets/elearning/Biologi4.docx', '2020-04-18 17:38:26', 2, 13),
(6, 'Kuis 2', 'Kerjakan!', '2020-04-30 00:00:00', 'assets/elearning/Biologi5.docx', '2020-04-18 17:38:45', 2, 13);

--
-- Triggers `kuis`
--
DELIMITER $$
CREATE TRIGGER `after_guru_insert_kuis` AFTER INSERT ON `kuis` FOR EACH ROW BEGIN
INSERT INTO notification
SET notif='menambahkan kuis baru',
tanggal = new.tanggal,
id_mapel = new.id_mapel,
id_user = new.id_user;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kumpul_kuis`
--

CREATE TABLE `kumpul_kuis` (
  `id` int(11) NOT NULL,
  `id_kuis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `nilai` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kumpul_kuis`
--

INSERT INTO `kumpul_kuis` (`id`, `id_kuis`, `id_user`, `nama_file`, `file`, `tanggal`, `nilai`, `id_mapel`) VALUES
(4, 3, 10, 'Matematika19.docx', 'assets/elearning/Matematika19.docx', '2020-04-18 18:06:27', 88, 1);

--
-- Triggers `kumpul_kuis`
--
DELIMITER $$
CREATE TRIGGER `after_siswa_insert_kumpulkuis` AFTER INSERT ON `kumpul_kuis` FOR EACH ROW BEGIN
INSERT INTO notification
SET notif='mengumpulkan kuis',
tanggal = now(),
id_mapel = new.id_mapel,
id_user = new.id_user;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kumpul_tugas`
--

CREATE TABLE `kumpul_tugas` (
  `id` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `nilai` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kumpul_tugas`
--

INSERT INTO `kumpul_tugas` (`id`, `id_tugas`, `id_user`, `nama_file`, `file`, `tanggal`, `nilai`, `id_mapel`) VALUES
(8, 4, 10, 'Matematika18.docx', 'assets/elearning/Matematika18.docx', '2020-04-18 17:51:07', 90, 1),
(9, 4, 24, 'Matematika21.docx', 'assets/elearning/Matematika21.docx', '2020-04-18 23:34:02', 80, 1),
(10, 5, 10, 'Matematika22.docx', 'assets/elearning/Matematika22.docx', '2020-04-18 23:34:43', 88, 1),
(11, 7, 10, 'Biologi9.docx', 'assets/elearning/Biologi9.docx', '2020-04-18 23:38:44', 80, 2),
(12, 8, 10, 'Biologi10.docx', 'assets/elearning/Biologi10.docx', '2020-04-18 23:38:53', 88, 2),
(13, 9, 10, 'Matematika24.docx', 'assets/elearning/Matematika24.docx', '2020-04-19 13:09:49', 0, 1);

--
-- Triggers `kumpul_tugas`
--
DELIMITER $$
CREATE TRIGGER `after_siswa_insert_kumpultugas` AFTER INSERT ON `kumpul_tugas` FOR EACH ROW BEGIN
INSERT INTO notification
SET notif='mengumpulkan tugas',
tanggal = now(),
id_mapel = new.id_mapel,
id_user = new.id_user;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kumpul_ulangan`
--

CREATE TABLE `kumpul_ulangan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `id_ulangan` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `nilai` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kumpul_ulangan`
--

INSERT INTO `kumpul_ulangan` (`id`, `id_user`, `nama_file`, `id_ulangan`, `file`, `tanggal`, `nilai`, `id_mapel`) VALUES
(2, 10, 'Matematika20.docx', 3, 'assets/elearning/Matematika20.docx', '2020-04-18 18:06:56', 92, 1);

--
-- Triggers `kumpul_ulangan`
--
DELIMITER $$
CREATE TRIGGER `after_siswa_insert_kumpululangan` AFTER INSERT ON `kumpul_ulangan` FOR EACH ROW BEGIN
INSERT INTO notification
SET notif='mengumpulkan ulangan',
tanggal = now(),
id_mapel = new.id_mapel,
id_user = new.id_user;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama_mapel` varchar(25) NOT NULL,
  `program` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `kode`, `nama_mapel`, `program`, `semester`, `id_kelas`, `id`) VALUES
(1, '10AMTK', 'Matematika', 'IPA', 'Genap', 7, 2),
(2, '10ABIO', 'Biologi', 'IPA', 'Genap', 7, 2),
(3, '10ABHS', 'Bahasa', 'IPA', 'Genap', 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `judul_materi` varchar(25) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `id_mapel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`, `berkas`, `tanggal`, `id_mapel`, `id_user`) VALUES
(4, 'Bilangan', 'assets/elearning/2__Pendekatan_Pengembangan_Sistem3.pdf', '2020-04-16 22:10:33', 0, 13),
(8, 'Imbuhan', 'assets/elearning/Jurnal_Tugas_Akhir_mod_11.pptx', '2020-04-17 07:47:07', 3, 14),
(9, 'Kata', 'assets/elearning/2__Pendekatan_Pengembangan_Sistem5.pdf', '2020-04-17 08:06:54', 3, 14),
(12, 'k', 'assets/elearning/PDF_Konflik_dan_negosiasi_compress_compress8.pdf', '2020-04-17 22:51:52', 3, 14),
(13, 'Matriks ', 'assets/elearning/', '2020-04-18 17:28:20', 1, 13),
(14, 'Aritmatika', 'assets/elearning/Matematika5.docx', '2020-04-18 17:28:31', 1, 13),
(15, 'Algoritma', 'assets/elearning/Matematika6.docx', '2020-04-18 17:28:41', 1, 13),
(18, 'Indra', 'assets/elearning/Biologi.docx', '2020-04-18 17:36:31', 2, 13),
(19, 'Tubuh', 'assets/elearning/Biologi1.docx', '2020-04-18 17:36:49', 2, 13),
(20, 'Pencernaan', 'assets/elearning/Biologi2.docx', '2020-04-18 17:37:03', 2, 13);

--
-- Triggers `materi`
--
DELIMITER $$
CREATE TRIGGER `after_guru_insert_materi` AFTER INSERT ON `materi` FOR EACH ROW BEGIN
INSERT INTO notification
SET notif='menambahkan materi baru',
tanggal = new.tanggal,
id_mapel = new.id_mapel,
id_user = new.id_user;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `mtk` int(11) NOT NULL,
  `fis` int(11) NOT NULL,
  `bio` int(11) NOT NULL,
  `kim` int(11) NOT NULL,
  `pa` int(11) NOT NULL,
  `pkn` int(11) NOT NULL,
  `ind` int(11) NOT NULL,
  `ing` int(11) NOT NULL,
  `olah` int(11) NOT NULL,
  `seni` int(11) NOT NULL,
  `sej` int(11) NOT NULL,
  `sosio` int(11) NOT NULL,
  `geo` int(11) NOT NULL,
  `id_thn` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_kelas`, `nis`, `mtk`, `fis`, `bio`, `kim`, `pa`, `pkn`, `ind`, `ing`, `olah`, `seni`, `sej`, `sosio`, `geo`, `id_thn`) VALUES
(263, 7, 887, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(265, 8, 6546, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(266, 1, 170, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(267, 2, 4010, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id_notif` int(11) NOT NULL,
  `notif` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `id_mapel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id_notif`, `notif`, `tanggal`, `id_mapel`, `id_user`) VALUES
(12, 'menambahkan materi baru', '2020-04-17 22:45:56', 1, 13),
(13, 'menambahkan materi baru', '2020-04-17 22:49:12', 2, 13),
(14, 'mengumpulkan tugas', '2020-04-17 22:50:56', 1, 10),
(15, 'menambahkan materi baru', '2020-04-17 22:51:52', 3, 14),
(16, 'mengumpulkan tugas', '2020-04-17 22:52:12', 3, 23),
(17, 'mengumpulkan ulangan', '2020-04-17 23:32:58', 1, 10),
(18, 'menambahkan ulangan baru', '2020-04-17 23:40:38', 3, 14),
(19, 'menambahkan kuis baru', '2020-04-17 23:41:07', 3, 14),
(20, 'mengumpulkan kuis', '2020-04-17 23:44:34', 3, 23),
(21, 'mengumpulkan tugas', '2020-04-18 12:30:29', 1, 10),
(22, 'menambahkan materi baru', '2020-04-18 17:28:20', 1, 13),
(23, 'menambahkan materi baru', '2020-04-18 17:28:31', 1, 13),
(24, 'menambahkan materi baru', '2020-04-18 17:28:41', 1, 13),
(25, 'menambahkan materi baru', '2020-04-18 17:28:52', 1, 13),
(26, 'menambahkan materi baru', '2020-04-18 17:29:01', 1, 13),
(27, 'menambahkan video baru', '2020-04-18 17:31:56', 1, 13),
(28, 'menambahkan video baru', '2020-04-18 17:32:16', 1, 13),
(29, 'menambahkan tugas baru', '2020-04-18 17:32:34', 1, 13),
(30, 'menambahkan tugas baru', '2020-04-18 17:32:52', 1, 13),
(31, 'menambahkan tugas baru', '2020-04-18 17:33:12', 1, 13),
(32, 'menambahkan kuis baru', '2020-04-18 17:34:06', 1, 13),
(33, 'menambahkan kuis baru', '2020-04-18 17:34:22', 1, 13),
(34, 'menambahkan ulangan baru', '2020-04-18 17:35:25', 1, 13),
(35, 'menambahkan materi baru', '2020-04-18 17:36:31', 2, 13),
(36, 'menambahkan materi baru', '2020-04-18 17:36:49', 2, 13),
(37, 'menambahkan materi baru', '2020-04-18 17:37:03', 2, 13),
(38, 'menambahkan video baru', '2020-04-18 17:37:27', 2, 13),
(39, 'menambahkan video baru', '2020-04-18 17:37:40', 2, 13),
(40, 'menambahkan tugas baru', '2020-04-18 17:38:02', 2, 13),
(41, 'menambahkan kuis baru', '2020-04-18 17:38:26', 2, 13),
(42, 'menambahkan kuis baru', '2020-04-18 17:38:45', 2, 13),
(43, 'menambahkan ulangan baru', '2020-04-18 17:39:05', 2, 13),
(44, 'mengumpulkan tugas', '2020-04-18 17:51:07', 1, 10),
(45, 'mengumpulkan kuis', '2020-04-18 18:01:50', 1, 10),
(46, 'mengumpulkan kuis', '2020-04-18 18:06:27', 1, 10),
(47, 'mengumpulkan ulangan', '2020-04-18 18:06:56', 1, 10),
(48, 'mengumpulkan tugas', '2020-04-18 23:34:02', 1, 24),
(49, 'mengumpulkan tugas', '2020-04-18 23:34:43', 1, 10),
(50, 'menambahkan tugas baru', '2020-04-18 23:38:27', 2, 13),
(51, 'mengumpulkan tugas', '2020-04-18 23:38:44', 2, 10),
(52, 'mengumpulkan tugas', '2020-04-18 23:38:53', 2, 10),
(53, 'menambahkan tugas baru', '2020-04-19 13:08:59', 1, 13),
(54, 'mengumpulkan tugas', '2020-04-19 13:09:49', 1, 10),
(55, 'menambahkan tugas baru', '2020-04-19 13:10:50', 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `id_ortu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ortu`
--

INSERT INTO `ortu` (`id_ortu`, `id_user`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `pekerjaan`, `id_siswa`) VALUES
(98765, 28, 'Choi Siwon', 'Seoul', '1980-12-13', 'Laki-laki', 'Kristen', 'Seoul', '01010121996', 'Ceo', 110),
(31591762, 32, 'Rismawati', 'Siringan-ringan', '1975-07-11', 'Perempuan', 'Kristen', 'Jl masjid', '081315661761', 'Wiraswasta', 115);

--
-- Triggers `ortu`
--
DELIMITER $$
CREATE TRIGGER `after_ortu_insert` AFTER INSERT ON `ortu` FOR EACH ROW BEGIN
 		INSERT INTO ortu_audit
 		SET aksi = 'insert',
		id_ortu = NEW.id_ortu,
 		nama = NEW.nama,
		tanggal = NOW();
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_ortu_delete` BEFORE DELETE ON `ortu` FOR EACH ROW BEGIN
    INSERT INTO ortu_audit
    SET keterangan = 'delete',
	id_ortu = OLD.id_ortu,
	nama = OLD.nama,
        tanggal = NOW();
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_ortu_update` BEFORE UPDATE ON `ortu` FOR EACH ROW BEGIN
INSERT INTO ortu_audit
SET keterangan='Data telah diperbaharui',
tanggal = now(),
id_ortu = old.id_ortu,
id_user = new.id_user,
nama = old.nama,
tempat_lahir = new.tempat_lahir,
tanggal_lahir = new.tanggal_lahir,
jenis_kelamin = new.jenis_kelamin,
agama = new.agama,
alamat = new.alamat,
no_hp = new.no_hp,
pekerjaan = new.pekerjaan,
id_siswa = new.id_siswa;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ortu_audit`
--

CREATE TABLE `ortu_audit` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `id_ortu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pembayar` varchar(50) NOT NULL,
  `jenis_bayaran` varchar(20) NOT NULL,
  `nama_rekening` varchar(50) NOT NULL,
  `jumlah_bayaran` double NOT NULL,
  `bukti_pembayaran` varchar(500) NOT NULL,
  `tanggal_bayar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pembayaran_form` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_user`, `nama_pembayar`, `jenis_bayaran`, `nama_rekening`, `jumlah_bayaran`, `bukti_pembayaran`, `tanggal_bayar`, `pembayaran_form`) VALUES
(4, 0, 'Nova Uliyana', 'Formulir', 'Nova Uliyana', 150000, 'http://localhost/sia/assets/images/pembayaran/WhatsApp_Image_2020-01-31_at_04_17_10.jpeg', '0000-00-00 00:00:00', 1),
(5, 26, 'Nova Uliyana', 'Uang Sarana', 'Nova Uliyana', 2000000, 'http://localhost/sia/assets/images/pembayaran/7c3c005534e18edf1c0148600450b11135cc52e9_s2_n2.jpg', '0000-00-00 00:00:00', 1),
(6, 26, 'Nova Uliyana', 'Uang Sekolah', 'Daniel Kang', 1000000, 'http://localhost/sia/assets/images/pembayaran/EBOAbdrUEAAloH7_jpeg.jpg', '0000-00-00 00:00:00', 0),
(7, 0, 'Na Jaemin', 'Formulir', 'Na Siwon', 150000, 'http://localhost/sia/assets/images/pembayaran/desk.jpg', '0000-00-00 00:00:00', 1),
(8, 0, 'Theresia Riani', 'Formulir', 'Theresia', 170000, 'http://localhost/sia/assets/images/pembayaran/WhatsApp_Image_2020-03-31_at_14_52_11.jpeg', '0000-00-00 00:00:00', 1),
(9, 0, 'Theresia Riani', 'Formulir', 'Theresia', 150000, 'http://localhost/sia/assets/images/pembayaran/tas-robita.jpg', '0000-00-00 00:00:00', 1),
(10, 26, 'Nova Uliyana', 'Uang Sekolah', 'gv xs', 56789, 'http://localhost/sia/assets/images/pembayaran/Untitled.png', '0000-00-00 00:00:00', 0),
(11, 0, 'angel', 'Formulir', 'gv xs', 56789, 'http://localhost/sia/assets/images/pembayaran/Untitled.png', '0000-00-00 00:00:00', 1),
(12, 0, 'Tri Utama Elisabeth', 'Formulir', 'Nova Uliyana', 150000, 'http://localhost/sia/assets/images/pembayaran/tas-robita.jpg', '0000-00-00 00:00:00', 1),
(13, 0, 'Kang Daniel', 'Formulir', 'Daniel Kang', 150000, 'http://localhost/sia/assets/images/pembayaran/tas-robita.jpg', '0000-00-00 00:00:00', 1),
(14, 0, 'Theresia Riani', 'Formulir', 'Nova Uliyana', 150000, 'http://localhost/sia/assets/images/pembayaran/tas-robita.jpg', '0000-00-00 00:00:00', 1),
(15, 0, 'Ong Seongwoo', 'Formulir', 'Ongniel', 150000, 'http://localhost/sia/assets/images/pembayaran/EV-N3cXU4AERXNd.jpg', '0000-00-00 00:00:00', 1);

--
-- Triggers `pembayaran`
--
DELIMITER $$
CREATE TRIGGER `after_siswa_insert_pembayaran` AFTER INSERT ON `pembayaran` FOR EACH ROW BEGIN
INSERT INTO pembayaran_audit
SET keterangan='Telah melakukan pembayaran',
tanggal_bayar = new.tanggal_bayar,
id_pembayaran = new.id_pembayaran,
id_user = new.id_user,
nama_pembayar = new.nama_pembayar,
jenis_bayaran = new.jenis_bayaran,
nama_rekening = new.nama_rekening,
jumlah_bayaran = new.jumlah_bayaran,
bukti_pembayaran = new.bukti_pembayaran;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_audit`
--

CREATE TABLE `pembayaran_audit` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `id_pembayaran` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_pembayar` varchar(50) NOT NULL,
  `jenis_bayaran` varchar(20) NOT NULL,
  `nama_rekening` varchar(50) NOT NULL,
  `jumlah_bayaran` double NOT NULL,
  `bukti_pembayaran` varchar(500) NOT NULL,
  `tanggal_bayar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajarkelas`
--

CREATE TABLE `pengajarkelas` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `thn_ajar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajarkelas`
--

INSERT INTO `pengajarkelas` (`id`, `id_guru`, `id_kelas`, `thn_ajar`) VALUES
(1, 2, 1, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `ppdb`
--

CREATE TABLE `ppdb` (
  `id_ppdb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `nohp_siswa` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `foto_siswa` varchar(100) NOT NULL,
  `isi` int(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `username`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `nohp_siswa`, `jenis_kelamin`, `agama`, `foto_siswa`, `isi`, `id_user`, `id_kelas`) VALUES
(110, 'Na Jaemin', '', 'Jeonju', '2000-08-13', 'Seoul', '01020001308', 'Laki-laki', 'Katolik', '', 0, 27, 0),
(115, 'Nova Uliyana', '', 'Jakarta', '2000-11-24', 'Jl Masjid', '081398520940', 'Perempuan', 'Katolik', '', 1, 26, 0),
(166, 'Kang Daniel', 'danielk', 'Busan', '1996-12-10', 'Seoul', '01020001308', 'Laki-laki', 'Kristen', '', 0, 35, 0),
(167, 'Tri Utama Elisabeth', 'triutama', 'Jakarta', '2007-03-31', 'Jakarta', '081818188181', 'Perempuan', 'Kristen', '', 0, 31, 0),
(168, 'Theresia Riani', 'there', 'Jakarta', '1000-12-12', 'fvgbhnjm', '567890', 'Perempuan', 'Katolik', 'assets/profil/EVyKAMdVcAM9e49.jpg', 0, 36, 0),
(170, 'Ong Seongwoo', 'ongsw', 'Incheon', '1995-08-25', 'Seoul', '01019950825', 'Laki-laki', 'Kristen', 'http://localhost/sia/assets/images/ESwvbfRUcAAd-UV.jpg', 0, 37, 0),
(186, 'Theresia Riani', '', 'Jakarta', '2004-11-06', 'Jakarta', '0976546789', 'Perempuan', 'Katolik', '', 0, 33, 0),
(887, 'Jane Ayu', 'janeayu', 'Jakarta', '2000-10-10', 'Bandung', '082367543287', 'Laki-Laki', '', 'assets/profil/10.jpg', 0, 25, 7),
(1111, 'Angelia Putri', 'angeliaputri', 'Batam', '2000-06-11', 'Batam', '082367543287', 'Perempuan', '', 'assets/profil/18.jpg', 0, 10, 7),
(4010, 'Melati Sinta', 'melsinta', 'Bandung', '2000-12-01', 'Bandung', '082367543287', 'Perempuan', '', 'assets/profil/13.jpg', 0, 27, 8),
(5432, 'Gina Sonia', 'ginasonia', 'Medan', '2000-10-10', 'Bandung', '082367543287', 'Perempuan', '', 'assets/profil/61.jpg', 0, 23, 8),
(6546, 'Joshua Abram', 'joshuaa', 'Jakarta', '2000-03-01', 'Bandung', '082367543287', 'Laki-Laki', '', 'assets/profil/3.jpg', 1, 26, 8),
(6875, 'Lucas Brian', 'lucassbri', 'Bogor', '2000-11-10', 'Bandung', '082367543287', 'Laki-Laki', '', 'assets/profil/43.jpg', 0, 24, 7),
(79687, 'Nova Uliyana', 'novauliyana', 'Jakarta', '2020-04-16', 'bandung', '082367543287', 'Perempuan', '', 'assets/profil/34.jpg', 0, 28, 0);

--
-- Triggers `siswa`
--
DELIMITER $$
CREATE TRIGGER `after_siswa_insert_data` AFTER INSERT ON `siswa` FOR EACH ROW BEGIN
INSERT INTO siswa_audit
SET keterangan='Siswa Diterima',
tanggal = now(),
nis = new.nis,
nama_siswa= new.nama_siswa,
username = new.username,
tempat_lahir = new.tempat_lahir,
tanggal_lahir = new.tanggal_lahir,
alamat = new.alamat,
nohp_siswa = new.nohp_siswa,
jenis_kelamin = new.jenis_kelamin,
agama = new.agama,
foto_siswa = new.foto_siswa,
isi = new.isi,
id_user = new.id_user,
id_kelas = new.id_kelas;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_siswa_update_data` AFTER UPDATE ON `siswa` FOR EACH ROW BEGIN
INSERT INTO siswa_audit
SET keterangan='Data telah diperbaharui',
nis = old.nis,
nama_siswa= old.nama_siswa,
username = old.username,
tempat_lahir = old.tempat_lahir,
tanggal_lahir = old.tanggal_lahir,
alamat = old.alamat,
nohp_siswa = old.nohp_siswa,
jenis_kelamin = old.jenis_kelamin,
agama = old.agama,
foto_siswa = old.foto_siswa,
isi = old.isi,
id_user = old.id_user,
id_kelas = old.id_kelas;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_siswa_delete` BEFORE DELETE ON `siswa` FOR EACH ROW BEGIN
    INSERT INTO siswa_audit
    SET keterangan = 'delete',
        nis = OLD.nis,
        nama_siswa = OLD.nama_siswa,
        tglubah = NOW(); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_siswa_update` BEFORE UPDATE ON `siswa` FOR EACH ROW BEGIN
    INSERT INTO siswa_audit
    SET keterangan = 'update',
        nis = OLD.nis,
        nama_siswa = OLD.nama_siswa,
        tglubah = NOW(),
username = new.username,
tempat_lahir = new.tempat_lahir,
tanggal_lahir = new.tanggal_lahir,
alamat = new.alamat,
nohp_siswa = new.nohp_siswa,
jenis_kelamin = new.jenis_kelamin,
agama = new.agama,
foto_siswa = new.foto_siswa,
isi = new.isi,
id_user = new.id_user,
id_kelas = new.id_kelas;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_audit`
--

CREATE TABLE `siswa_audit` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(25) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `nohp_siswa` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `foto_siswa` varchar(100) NOT NULL,
  `isi` int(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_thn` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_thn`, `tahun_akademik`, `semester`, `status`) VALUES
(1, '2019/2020', 'Ganjil', 'aktif'),
(2, '2019/2020', 'Genap', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `triger_acara`
--

CREATE TABLE `triger_acara` (
  `id_acara` int(11) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `judul_acara` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi_acara` varchar(255) NOT NULL,
  `foto_acara` varchar(255) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `tglubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `triger_berita`
--

CREATE TABLE `triger_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `teks_berita` text NOT NULL,
  `foto_berita` varchar(255) NOT NULL,
  `tglubah` datetime NOT NULL,
  `aksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `triger_fasilitas`
--

CREATE TABLE `triger_fasilitas` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi_gambar` varchar(255) NOT NULL,
  `tglubah` datetime NOT NULL,
  `aksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `triger_informasi`
--

CREATE TABLE `triger_informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `deskripsi_informasi` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `tglubah` datetime NOT NULL,
  `aksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `triger_informasi`
--

INSERT INTO `triger_informasi` (`id_informasi`, `judul_informasi`, `deskripsi_informasi`, `file`, `tglubah`, `aksi`) VALUES
(1, 'profil', 'hai namaku Dian', '', '2020-04-27 23:15:35', 'update'),
(2, 'profil', 'hai namaku Dian', 'http://localhost:8080/sia/assets/video/pr3.mp4', '2020-04-27 23:23:21', 'update'),
(3, 'profil', 'hai namaku Dian', 'http://localhost:8080/sia/assets/video/forlife2.mp4', '2020-04-27 23:46:45', 'update'),
(4, 'profil', 'hai namaku Dian', 'http://localhost:8080/sia/assets/video/The_K2_Ep_6_–_Yoona_Sings_Amazing_Grace.mp4', '2020-04-27 23:50:20', 'update');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `judul_tugas` varchar(50) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `deadline` datetime NOT NULL,
  `file` varchar(128) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `id_mapel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `judul_tugas`, `deskripsi`, `deadline`, `file`, `tanggal`, `id_mapel`, `id_user`) VALUES
(3, 'Bahasa', 'Kerjakan!', '2020-04-18 00:00:00', 'assets/elearning/PDF_Konflik_dan_negosiasi_compress_compress5.pdf', '2020-04-17 08:07:13', 3, 14),
(4, 'Aljabar', 'Kerjakan!', '2020-04-29 00:00:00', 'assets/elearning/Matematika9.docx', '2020-04-18 17:32:34', 1, 13),
(5, 'Bilangan', 'Kerjakan!', '2020-04-18 00:00:00', 'assets/elearning/Matematika12.docx', '2020-04-18 17:32:52', 1, 13),
(7, 'Indra', 'Kerjakan!', '2020-04-30 00:00:00', 'assets/elearning/Biologi3.docx', '2020-04-18 17:38:02', 2, 13),
(8, 'Pencernaan', 'Kerjakan!', '2020-04-23 00:00:00', 'assets/elearning/Biologi8.docx', '2020-04-18 23:38:27', 2, 13),
(9, 'Matriks', 'Kerjakan!', '2020-04-21 00:00:00', 'assets/elearning/Matematika23.docx', '2020-04-19 13:08:59', 1, 13),
(10, 'Bilangan', 'Kerjakan!', '2020-04-24 00:00:00', 'assets/elearning/Matematika25.docx', '2020-04-19 13:10:50', 1, 13);

--
-- Triggers `tugas`
--
DELIMITER $$
CREATE TRIGGER `after_guru_insert_tugas` AFTER INSERT ON `tugas` FOR EACH ROW BEGIN
INSERT INTO notification
SET notif='menambahkan tugas baru',
tanggal = new.tanggal,
id_mapel = new.id_mapel,
id_user = new.id_user;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ulangan`
--

CREATE TABLE `ulangan` (
  `id_ulangan` int(11) NOT NULL,
  `judul_ulangan` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `deadline` datetime NOT NULL,
  `file` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `id_mapel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulangan`
--

INSERT INTO `ulangan` (`id_ulangan`, `judul_ulangan`, `deskripsi`, `deadline`, `file`, `tanggal`, `id_mapel`, `id_user`) VALUES
(2, 'Kalimat', 'Kerjakan!', '0000-00-00 00:00:00', 'assets/elearning/PDF_Konflik_dan_negosiasi_compress_compress9.pdf', '2020-04-17 23:40:38', 3, 14),
(3, 'Ulangan  1', 'Kerjakan!', '2020-05-23 00:00:00', 'assets/elearning/Matematika17.docx', '2020-04-18 17:35:25', 1, 13),
(4, 'Ulangan  1', 'Kerjakan!', '2020-04-30 00:00:00', 'assets/elearning/Biologi7.docx', '2020-04-18 17:39:05', 2, 13);

--
-- Triggers `ulangan`
--
DELIMITER $$
CREATE TRIGGER `after_guru_insert_ulangan` AFTER INSERT ON `ulangan` FOR EACH ROW BEGIN
INSERT INTO notification
SET notif='menambahkan ulangan baru',
tanggal = new.tanggal,
id_mapel = new.id_mapel,
id_user = new.id_user;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(10, 'Angelia Putri', 'angeliaputri', 'angeliaputri81@gmail.com', 'assets/profil/18.jpg', '123', 2, 1, '0000-00-00 00:00:00'),
(13, 'Veranica Joana', 'veronicajo', 'veronicajo@yahoo.com', 'assets/profil/71.jpg', '$2y$10$CkJFEI0RWKEiwaxyCcLf8.kKcJxrRGe.JbfpJvjBKIMc1cEi0LqmG', 3, 1, '2020-04-08 08:46:48'),
(14, 'Jessica Alex', 'jessicaalex', 'jessicaalex@yahoo.com', 'assets/profil/8.jpg', '$2y$10$6a49rdEGqRLtO4qcRYD90uF4lTQHYhKzkBUvJFjgeDY9eWzNZBGSa', 3, 1, '2020-04-12 22:39:11'),
(23, 'Gina Sonia', 'ginasonia', 'ginasonia@gmail.com', 'assets/profil/61.jpg', '$2y$10$OPSDcBC9IJg0XUS4vsk0ouSALL4PuCt/0/ZZ51GTwPEp6VdspfVSa', 2, 1, '2020-04-17 07:40:16'),
(24, 'Lucas Brian', 'lucassbri', 'lucassbri@yahoo.com', 'assets/profil/43.jpg', '$2y$10$5pMNMEyBhOKI97B9q5RMxugz4YNQUYsBDrIOR.CQRbICi.5goxwDO', 2, 1, '2020-04-18 15:00:07'),
(25, 'Jane Ayu', 'janeayu', 'janeayu@yahoo.com', 'assets/profil/10.jpg', '$2y$10$jqpRBmtgTgDML0vKtdYQDO4uryb4SgUrfkonfvguwBDCmmFQ/3Rl.', 2, 1, '2020-04-18 15:01:41'),
(26, 'Joshua Abram', 'joshuaa', 'joshuaa@yahoo.com', 'assets/profil/3.jpg', '$2y$10$KHl.7HKhZqS.CzSIXVr0CORZ5qboVOP9qJhr1Iup78pwhkdVjhVde', 2, 1, '2020-04-18 15:02:38'),
(27, 'Melati Sinta', 'melsinta', 'melsinta@gmail.com', 'assets/profil/13.jpg', '$2y$10$YnkEYwdOULdbnzXRGcA3o.X/8.YM1I2Sq8mT67K1M24IBBF4XcGOe', 5, 1, '2020-04-18 15:03:36'),
(28, 'Nova Uliyana', 'novauliyana', 'novauliyana@gmail.com', 'assets/profil/34.jpg', '$2y$10$EPh5NR1Tu1rVQZBhJu/E3.M6pK0if4kPGSByMCeoAfALVMHrvDJGe', 2, 1, '2020-04-19 20:25:18'),
(29, 'lala', 'lala', 'lala@gmail.com', 'http://localhost/sia/assets/images/', '123', 5, 1, '0000-00-00 00:00:00'),
(30, 'Ananda Arif', 'anandaar', 'anandaar@gmail.com', 'assets/profil/default.jpg', '123', 3, 1, '2020-04-20 17:13:49'),
(31, 'Tri Utama Elisabeth', 'triutama', 'elis@mail.com', 'http://localhost/sia/assets/images/EVyKAMdVcAM9e49.jpg', 'elis', 3, 1, '0000-00-00 00:00:00'),
(35, 'Kang Daniel', 'danielk', 'daniel10@mail.com', 'http://localhost/sia/assets/images/ESMH7akUYAI1y_I.jpg', 'danil', 3, 1, '0000-00-00 00:00:00'),
(36, 'Theresia Riani', 'there', 'tere@mail.com', 'assets/profil/EVyKAMdVcAM9e49.jpg', 'uiui', 3, 1, '0000-00-00 00:00:00'),
(37, 'Ong Seongwoo', 'ongsw', 'one18@gmail.com', 'http://localhost/sia/assets/images/ESwvbfRUcAAd-UV.jpg', 'ongong', 3, 1, '0000-00-00 00:00:00'),
(38, 'Sinta', 'sinta', 'sinta@gmail.com', 'http://localhost:8080/sia/assets/images/', '123', 5, 1, '0000-00-00 00:00:00'),
(39, 'Sinta', 'sinta', 'sintaa@gmail.com', 'assets/profil/default.jpg', '1234', 3, 1, '2020-04-27 22:44:57');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `after_user_insert` AFTER INSERT ON `user` FOR EACH ROW BEGIN
INSERT INTO user_audit
SET keterangan='Telah melakukan registrasi',
tanggal = now(),
id_user = new.id_user,
nama = new.nama,
username = new.username,
email = new.email,
image = new.image,
password = new.password,
role_id = new.role_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_user_update` BEFORE UPDATE ON `user` FOR EACH ROW BEGIN
INSERT INTO user_audit
SET keterangan='Data diubah',
tanggal = now(),
id_user = old.id_user,
nama = old.nama,
username = new.username,
email = new.email,
image = new.image,
password = new.password,
role_id = new.role_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_akses_menu`
--

CREATE TABLE `user_akses_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_akses_menu`
--

INSERT INTO `user_akses_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_audit`
--

CREATE TABLE `user_audit` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_audit`
--

INSERT INTO `user_audit` (`id`, `keterangan`, `tanggal`, `id_user`, `nama`, `username`, `email`, `image`, `password`, `role_id`) VALUES
(1, 'Telah melakukan regi', '2020-04-27', 38, 'Sinta', 'sinta', 'sinta@gmail.com', 'http://localhost:8080/sia/assets/images/', '123', 5),
(2, 'Telah melakukan regi', '2020-04-27', 39, 'Sinta', 'sinta', 'sintaa@gmail.com', 'assets/profil/default.jpg', '123', 3),
(3, 'Data diubah', '2020-04-27', 39, 'Sinta', 'sinta', 'sintaa@gmail.com', 'assets/profil/default.jpg', '1234', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `nama`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Siswa'),
(3, 'Guru'),
(4, 'Orang Tua');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'mdi mdi-home', 1),
(2, 2, 'My Profile', 'user', 'mdi mdi-account', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vberkas`
-- (See below for the actual view)
--
CREATE TABLE `vberkas` (
`id_user` int(11)
,`nis` int(11)
,`nama_siswa` varchar(50)
,`kartu_keluarga` varchar(100)
,`akte_kelahiran` varchar(100)
,`ijazah` varchar(100)
,`ktp_ortu` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(50) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `id_mapel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul_video`, `berkas`, `tanggal`, `id_mapel`, `id_user`) VALUES
(4, 'Matriks', 'assets/elearning/videotest.mp4', '2020-04-18 17:31:56', 1, 13),
(6, 'Pencernaan', 'assets/elearning/videotest2.mp4', '2020-04-18 17:37:27', 2, 13),
(7, 'Organ tubuh', 'assets/elearning/videotest3.mp4', '2020-04-18 17:37:40', 2, 13);

--
-- Triggers `video`
--
DELIMITER $$
CREATE TRIGGER `after_guru_insert_video` AFTER INSERT ON `video` FOR EACH ROW BEGIN
INSERT INTO notification
SET notif='menambahkan video baru',
tanggal = new.tanggal,
id_mapel = new.id_mapel,
id_user = new.id_user;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `vsistu`
-- (See below for the actual view)
--
CREATE TABLE `vsistu` (
`NIK` int(11)
,`id_user` int(11)
,`nama_ortu` varchar(50)
,`tempat_lahir_ortu` varchar(20)
,`tanggal_lahir_ortu` date
,`alamat_ortu` text
,`nohp_ortu` varchar(13)
,`pekerjaan` varchar(50)
,`nis` int(11)
,`nama_siswa` varchar(50)
,`tempat_lahir_siswa` varchar(50)
,`tanggal_lahir_siswa` date
,`nohp_siswa` varchar(15)
);

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `id_walikelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_daftarsiswa` int(11) NOT NULL,
  `thn_ajar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `vberkas`
--
DROP TABLE IF EXISTS `vberkas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vberkas`  AS  select `s`.`id_user` AS `id_user`,`s`.`nis` AS `nis`,`s`.`nama_siswa` AS `nama_siswa`,`b`.`kartu_keluarga` AS `kartu_keluarga`,`b`.`akte_kelahiran` AS `akte_kelahiran`,`b`.`ijazah` AS `ijazah`,`b`.`ktp_ortu` AS `ktp_ortu` from (`siswa` `s` join `berkas_siswa` `b` on(`s`.`nis` = `b`.`id_siswa`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vsistu`
--
DROP TABLE IF EXISTS `vsistu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsistu`  AS  select `o`.`id_ortu` AS `NIK`,`o`.`id_user` AS `id_user`,`o`.`nama` AS `nama_ortu`,`o`.`tempat_lahir` AS `tempat_lahir_ortu`,`o`.`tanggal_lahir` AS `tanggal_lahir_ortu`,`o`.`alamat` AS `alamat_ortu`,`o`.`no_hp` AS `nohp_ortu`,`o`.`pekerjaan` AS `pekerjaan`,`s`.`nis` AS `nis`,`s`.`nama_siswa` AS `nama_siswa`,`s`.`tempat_lahir` AS `tempat_lahir_siswa`,`s`.`tanggal_lahir` AS `tanggal_lahir_siswa`,`s`.`nohp_siswa` AS `nohp_siswa` from (`ortu` `o` join `siswa` `s` on(`o`.`id_siswa` = `s`.`nis`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`) USING BTREE;

--
-- Indexes for table `audit_guru`
--
ALTER TABLE `audit_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_materi`
--
ALTER TABLE `audit_materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_siswa`
--
ALTER TABLE `audit_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_tugas`
--
ALTER TABLE `audit_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_video`
--
ALTER TABLE `audit_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banksoal`
--
ALTER TABLE `banksoal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `berkas_siswa`
--
ALTER TABLE `berkas_siswa`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id_casis`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `calon_siswa_audit`
--
ALTER TABLE `calon_siswa_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casis_audit`
--
ALTER TABLE `casis_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD PRIMARY KEY (`id_daftarsiswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `item_tugas`
--
ALTER TABLE `item_tugas`
  ADD PRIMARY KEY (`id_itemtugas`),
  ADD KEY `id_tugas` (`id_tugas`),
  ADD KEY `id_soal` (`id_soal`);

--
-- Indexes for table `item_ulangan`
--
ALTER TABLE `item_ulangan`
  ADD PRIMARY KEY (`id_itemulangan`),
  ADD KEY `id_ulangan` (`id_ulangan`),
  ADD KEY `id_soal` (`id_soal`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id_kuis`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `kumpul_kuis`
--
ALTER TABLE `kumpul_kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kumpul_tugas`
--
ALTER TABLE `kumpul_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kumpul_ulangan`
--
ALTER TABLE `kumpul_ulangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`) USING BTREE,
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_thn` (`id_thn`),
  ADD KEY `FK_nilai` (`id_kelas`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`id_ortu`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `ortu_audit`
--
ALTER TABLE `ortu_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pembayaran_audit`
--
ALTER TABLE `pembayaran_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`,`id_mapel`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `pengajarkelas`
--
ALTER TABLE `pengajarkelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `siswa_audit`
--
ALTER TABLE `siswa_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_thn`);

--
-- Indexes for table `triger_acara`
--
ALTER TABLE `triger_acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `triger_berita`
--
ALTER TABLE `triger_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `triger_fasilitas`
--
ALTER TABLE `triger_fasilitas`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `triger_informasi`
--
ALTER TABLE `triger_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `id_mapel` (`id_mapel`) USING BTREE;

--
-- Indexes for table `ulangan`
--
ALTER TABLE `ulangan`
  ADD PRIMARY KEY (`id_ulangan`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`) USING BTREE;

--
-- Indexes for table `user_akses_menu`
--
ALTER TABLE `user_akses_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_audit`
--
ALTER TABLE `user_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `id_mapel` (`id_mapel`) USING BTREE;

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id_walikelas`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_daftarsiswa` (`id_daftarsiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_guru`
--
ALTER TABLE `audit_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `audit_materi`
--
ALTER TABLE `audit_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `audit_siswa`
--
ALTER TABLE `audit_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `audit_tugas`
--
ALTER TABLE `audit_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `audit_video`
--
ALTER TABLE `audit_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `banksoal`
--
ALTER TABLE `banksoal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berkas_siswa`
--
ALTER TABLE `berkas_siswa`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id_casis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `calon_siswa_audit`
--
ALTER TABLE `calon_siswa_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `casis_audit`
--
ALTER TABLE `casis_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  MODIFY `id_daftarsiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_tugas`
--
ALTER TABLE `item_tugas`
  MODIFY `id_itemtugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_ulangan`
--
ALTER TABLE `item_ulangan`
  MODIFY `id_itemulangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id_kuis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kumpul_kuis`
--
ALTER TABLE `kumpul_kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kumpul_tugas`
--
ALTER TABLE `kumpul_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kumpul_ulangan`
--
ALTER TABLE `kumpul_ulangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `ortu_audit`
--
ALTER TABLE `ortu_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pembayaran_audit`
--
ALTER TABLE `pembayaran_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengajarkelas`
--
ALTER TABLE `pengajarkelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa_audit`
--
ALTER TABLE `siswa_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_thn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `triger_acara`
--
ALTER TABLE `triger_acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `triger_berita`
--
ALTER TABLE `triger_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `triger_fasilitas`
--
ALTER TABLE `triger_fasilitas`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `triger_informasi`
--
ALTER TABLE `triger_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ulangan`
--
ALTER TABLE `ulangan`
  MODIFY `id_ulangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_akses_menu`
--
ALTER TABLE `user_akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_audit`
--
ALTER TABLE `user_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id_walikelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `guru` (`id`),
  ADD CONSTRAINT `id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `id_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK_nilai` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `id_thn` FOREIGN KEY (`id_thn`) REFERENCES `tahun_akademik` (`id_thn`),
  ADD CONSTRAINT `nis` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

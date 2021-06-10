-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 09:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klasifikasi`
--

CREATE TABLE `tb_klasifikasi` (
  `id_klasifikasi` int(11) NOT NULL,
  `id_pertumbuhan` varchar(5) NOT NULL,
  `id_ciri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_klasifikasi`
--

INSERT INTO `tb_klasifikasi` (`id_klasifikasi`, `id_pertumbuhan`, `id_ciri`) VALUES
(58, 'A01', 1),
(59, 'A01', 3),
(60, 'A01', 5),
(61, 'A01', 7),
(62, 'A01', 9),
(63, 'A02', 2),
(64, 'A02', 4),
(65, 'A02', 6),
(66, 'A02', 8),
(67, 'A02', 9),
(73, 'A03', 32),
(74, 'A03', 34),
(75, 'A03', 35),
(76, 'A03', 37),
(77, 'A03', 39),
(78, 'A04', 33),
(80, 'A04', 36),
(81, 'A04', 38),
(82, 'A04', 40),
(83, 'A05', 41),
(84, 'A05', 43),
(85, 'A05', 45),
(88, 'A05', 47),
(89, 'A06', 42),
(90, 'A06', 44),
(91, 'A06', 46),
(92, 'A06', 48),
(93, 'A07', 49),
(94, 'A07', 51),
(95, 'A07', 53),
(96, 'A07', 55),
(101, 'A08', 50),
(102, 'A08', 52),
(103, 'A08', 54),
(104, 'A08', 56),
(105, 'A09', 57),
(106, 'A09', 59),
(107, 'A09', 61),
(108, 'A09', 63),
(109, 'A09', 65),
(110, 'A09', 67),
(112, 'A10', 58),
(118, 'A11', 68),
(119, 'A11', 70),
(120, 'A11', 71),
(121, 'A11', 73),
(122, 'A11', 75),
(123, 'A11', 77),
(124, 'A11', 79),
(125, 'A10', 60),
(126, 'A10', 62),
(127, 'A10', 64),
(128, 'A10', 66),
(130, 'A12', 69),
(131, 'A12', 72),
(132, 'A12', 74),
(133, 'A12', 76),
(134, 'A12', 78),
(135, 'A12', 80);

-- --------------------------------------------------------

--
-- Table structure for table `tb_motorik`
--

CREATE TABLE `tb_motorik` (
  `id_ciri` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama_ciri` text NOT NULL,
  `umur` varchar(255) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_motorik`
--

INSERT INTO `tb_motorik` (`id_ciri`, `kode`, `nama_ciri`, `umur`, `bobot`) VALUES
(1, 'G01', 'Menggerakan dan menahan kepala saat tengkurap', '1 - 3 Bulan', 3),
(2, 'G01T', 'Belum bisa menggerakan dan menahan kepala saat tengkurap', '1 - 3 Bulan', 3),
(3, 'G02', 'Mampu mencengkeram, menggenggam, dan meraih benda', '1 - 3 Bulan', 2),
(4, 'G02T', 'Belum bisa mencengkeram, menggenggam, dan meraih benda', '1 - 3 Bulan', 2),
(5, 'G03', 'Berguram, menangis minta digendong, memekik, mulai tertawa', '1 - 3 Bulan', 5),
(6, 'G03T', 'Tidak bisa menangis, memekik, dan tertawa', '1 - 3 Bulan', 5),
(7, 'G04', 'Bisa melihat dan menatap benda bergerak di depannya', '1 - 3 Bulan', 5),
(8, 'G04T', 'Tidak bisa melihat dan menatap benda bergerak di depannya', '1 - 3 Bulan', 5),
(9, 'G05', 'Menghisap ibu jari, menjulurkan lidah', '1 - 3 Bulan', 2),
(32, 'G06', 'Tertawa, berceloteh, menangis saat ditinggal atau kesenengannya di stop', '4 - 6 Bulan', 3),
(33, 'G06T', 'Tidak bisa tertawa, berceloteh dan menangis', '4 - 6 Bulan', 3),
(34, 'G07', 'Mengangkat tangan minta digendong', '4 - 6 Bulan', 2),
(35, 'G08', 'Berguling, memindahkan objek ditangan', '4 - 6 Bulan', 5),
(36, 'G08T', 'Belum bisa berguling, memindahkan objek ditangan', '4 - 6 Bulan', 5),
(37, 'G09', 'Meraih benda kecil dengan belajar merangkak', '4 - 6 Bulan', 5),
(38, 'G09T', 'Belum bisa meraih benda kecil dengan belajar merangkak', '4 - 6 Bulan', 5),
(39, 'G10', 'Mengenali wajah orang yang biasa dilihatnya seperti : mama, papa, pengasuh, dan keluarga', '4 - 6 Bulan', 3),
(40, 'G10T', 'Belum bisa mengenali wajah orang yang biasa dilihatnya seperti : mama, papa, pengasuh, dan keluarga', '4 - 6 Bulan', 3),
(41, 'G11', 'Sudah bisa merangkak dan berdiri', '7 - 12 Bulan', 3),
(42, 'G11T', 'Belum bisa merangkak dan berdiri', '7 - 12 Bulan', 3),
(43, 'G12', 'Mampu duduk tanpa dibantu', '7 - 12 Bulan', 2),
(44, 'G12T', 'Duduk masih dibantu', '7 - 12 Bulan', 2),
(45, 'G13', 'Merambat, Melangkah, dan berjalan', '7 - 12 Bulan', 5),
(46, 'G13T', 'Belum bisa merambat, melangkah, dan berjalan', '7 - 12 Bulan', 5),
(47, 'G14', 'Mengucapkan kata sederhana, seperti : mama dan papa', '7 - 12 Bulan', 5),
(48, 'G14T', 'Belum bisa mengucapkan kata sederhana, seperti : mama dan papa', '7 - 12 Bulan', 5),
(49, 'G15', 'Mampu berjalan dan berlari', '12 - 18 Bulan', 3),
(50, 'G15T', 'Mampu berjalan tetapi belum bisa berlari', '12 - 18 Bulan', 3),
(51, 'G16', 'Mampu duduk sendiri dan berdiri tegak', '12 - 18 Bulan', 3),
(52, 'G16T', 'Duduk masih dibantu dan tidak bisa berdiri tegak', '12 - 18 Bulan', 3),
(53, 'G17', 'Kosakata bertambah 1-6 kata sederhana', '12 - 18 Bulan', 5),
(54, 'G17T', 'Kosakata belum juga bertambah 1-6 kata sederhana', '12 - 18 Bulan', 5),
(55, 'G18', 'Berceloteh lebih sering', '12 - 18 Bulan', 2),
(56, 'G18T', 'Jarang berceloteh', '12 - 18 Bulan', 2),
(57, 'G19', 'Minum dari cangkir, makan menggunakan sendok', '1,5 - 2 tahun', 3),
(58, 'G19T', 'Sudah bisa minum dari cangkir sendiri tetapi belum bisa makan menggunakan sendok', '1,5 - 2 tahun', 3),
(59, 'G20', 'Kosakata meningkat hingga 15 - 50 kata', '1,5 - 2 tahun', 5),
(60, 'G20T', 'Kosakata belum meningkat hingga 15 - 50 kata', '1,5 - 2 tahun', 5),
(61, 'G21', 'Melempar dan menendang bola', '1,5 - 2 tahun', 3),
(62, 'G21T', 'Melempar dan menendang bola masih dibantu', '1,5 - 2 tahun', 3),
(63, 'G22', 'Mampu naik-turun tangga dengan aman.', '1,5 - 2 tahun', 5),
(64, 'G22T', 'Belum mampu naik-turun tangga dengan aman atau masih dibantu', '1,5 - 2 tahun', 5),
(65, 'G23', 'Dapat membuka pakaian sendiri tanpa dibantu', '1,5 - 2 tahun', 5),
(66, 'G23T', 'Belum bisa membuka pakaian sendiri', '1,5 - 2 tahun', 5),
(67, 'G24', 'Bermain dengan maianan', '1,5 - 2 tahun', 2),
(68, 'G25', 'Berpakaian Sendiri', '3 - 5 Tahun', 3),
(69, 'G25T', 'Berpakaian masih dibantu', '3 - 5 Tahun', 3),
(70, 'G26', 'Mengendarai sepeda roda tiga', '3 - 5 Tahun', 2),
(71, 'G27', 'Mampu menerima intruksi : Bawa tasmu sendiri, ya', '3 - 5 Tahun', 5),
(72, 'G27T', 'Belum bisa menerima intruksi', '3 - 5 Tahun', 5),
(73, 'G28', 'Bisa menyanyikan lagu sederhana', '3 - 5 Tahun', 2),
(74, 'G28T', 'Belum bisa menyanyikan lagu sederhana', '3 - 5 Tahun', 2),
(75, 'G29', 'Mampu membuaka dan menutup ritsleting sendiri', '3 - 5 Tahun', 3),
(76, 'G29T', 'Masih dibantu membuaka dan menutup ritsleting', '3 - 5 Tahun', 3),
(77, 'G30', 'Kosakata hingga 1000 kata.', '3 - 5 Tahun', 5),
(78, 'G30T', 'Belum bisa kosata hingga 1000 kata.', '3 - 5 Tahun', 5),
(79, 'G31', 'Bisa diajarkan kemandirian seperti memakai dan melepas sepatu', '3 - 5 Tahun', 5),
(80, 'G31T', 'Belum bisa diajarkan kemandirian seperti memakai dan melepas sepatu', '3 - 5 Tahun', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertumbuhan`
--

CREATE TABLE `tb_pertumbuhan` (
  `id_pertumbuhan` varchar(5) NOT NULL,
  `nama_pertumbuhan` varchar(250) NOT NULL,
  `detail_pertumbuhan` text NOT NULL,
  `solusi_pertumbuhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertumbuhan`
--

INSERT INTO `tb_pertumbuhan` (`id_pertumbuhan`, `nama_pertumbuhan`, `detail_pertumbuhan`, `solusi_pertumbuhan`) VALUES
('A01', 'Pertumbuhan Normal 1- 3 Bulan', 'Pada usia 1- 3 bulan bayi bisa dikatakan normal apabila sudah mencapai gerak motorik dibawah ini :<br>\r\n1. Menggerakan dan menahan kepala saat tengkurap<br>\r\n2. Mampu mencengkeram, menggenggam, dan meraih benda <br>\r\n3. Berguram, menangis minta digendong, memekik, mulai tertawa <br>\r\n4. Bisa melihat dan menatap benda bergerak di depannya<br>\r\n5. Menghisap ibu jari, menjulurkan lidah<br>', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi'),
('A02', 'Pertumbuhan Terlambat 1 - 3 Bulan', 'Pada usia 1 - 3 bulan balita bisa dikatakan pertumbuhan terlambat apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. Belum bisa menggerakan dan menahan kepala saat tengkurap <br>\r\n2. Belum bisa mencengkeram, menggenggam, dan meraih benda<br>\r\n3. Tidak bisa menangis, memekik, dan tertawa <br>\r\n4. Tidak bisa melihat dan menatap benda bergerak di depannya<br>\r\n5. Menghisap ibu jari, menjulurkan lidah<br>', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>\r\n\r\nBiasanya seorang pakar memberikan waktu 1 - 2 bulan untuk bayi yang pertumbuhannya terlambat.<br>\r\nApabila waktu yang sudah ditentukan tidak ada perubahan atau peningkatan, segeralah melakukan tindakan lanjut kepada Dokter terdekat.'),
('A03', 'Pertumbuhan Normal 4 - 6 Bulan', 'Pada usia 4 - 6 bulan balita bisa dikatakan pertumbuhan normal apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. Tertawa, berceloteh, menangis saat ditinggal atau kesenengannya di stop<br>\r\n2. Mengangkat tangan minta digendong<br>\r\n3. Berguling, memindahkan objek ditangan<br> \r\n4. Meraih benda kecil dengan belajar merangkak<br>\r\n5. Mengenali wajah orang yang biasa dilihatnya seperti : mama, papa, pengasuh, dan keluarga', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>'),
('A04', 'Pertumbuhan Terlambat 4 - 6 bulan', 'Pada usia 4 - 6 bulan balita bisa dikatakan pertumbuhan terlambat apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. Tidak bisa tertawa, berceloteh dan menangis<br> \r\n2. Belum bisa berguling, memindahkan objek ditangan<br>\r\n4. Belum bisa mengenali wajah orang yang biasa dilihatnya seperti : mama, papa, pengasuh, dan keluarga', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>\r\n\r\nBiasanya seorang pakar memberikan waktu 1 - 2 bulan untuk bayi yang pertumbuhannya terlambat.<br>\r\nApabila waktu yang sudah ditentukan tidak ada perubahan atau peningkatan, segeralah melakukan tindakan lanjut kepada Dokter terdekat.'),
('A05', 'Pertumbuhan Normal 7 - 12 Bulan', 'Pada usia 7 - 12 bulan balita bisa dikatakan pertumbuhan normal apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. Sudah bisa merangkak dan berdiri<br>\r\n2. Mampu duduk tanpa dibantu<br>\r\n3. Merambat, Melangkah, dan berjalan<br> \r\n4. Mengucapkan kata sederhana, seperti : mama dan papa', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>'),
('A06', 'Pertumbuhan Terlambat 7 - 12 Bulan', 'Pada usia 7 - 12 bulan balita bisa dikatakan pertumbuhan terlambat apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. Belum bisa merangkak dan berdiri<br> \r\n2. Duduk masih dibantu<br> \r\n3. Belum bisa merambat, melangkah, dan berjalan<br> \r\n4. Belum bisa mengucapkan kata sederhana, seperti : mama dan papa', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>\r\n\r\nBiasanya seorang pakar memberikan waktu 1 - 2 bulan untuk bayi yang pertumbuhannya terlambat.<br>\r\nApabila waktu yang sudah ditentukan tidak ada perubahan atau peningkatan, segeralah melakukan tindakan lanjut kepada Dokter terdekat.'),
('A07', 'Pertumbuhan Normal 12 - 18 Bulan', 'Pada usia 12 - 8 bulan balita bisa dikatakan pertumbuhan normal apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. Mampu berjalan dan berlari<br> \r\n2. Mampu duduk sendiri dan berdiri tegak<br>\r\n3. Kosakata bertambah 1-6 kata sederhana<br> \r\n4. Berceloteh lebih sering', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>'),
('A08', 'Pertumbuhan Telambat 12 - 18 Bulan', 'Pada usia 12 - 18 bulan balita bisa dikatakan pertumbuhan terlambat apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. Mampu berjalan tetapi belum bisa berlari<br> \r\n2. Duduk masih dibantu dan tidak bisa berdiri tegak<br> \r\n3. Kosakata belum juga bertambah 1-6 kata sederhana<br>\r\n4. Jarang berceloteh', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>\r\n\r\nBiasanya seorang pakar memberikan waktu 1 - 2 bulan untuk bayi yang pertumbuhannya terlambat.<br>\r\nApabila waktu yang sudah ditentukan tidak ada perubahan atau peningkatan, segeralah melakukan tindakan lanjut kepada Dokter terdekat.'),
('A09', 'Pertumbuhan Normal 1,5 - 2 Tahun', 'Pada usia 1,5 - 2 Tahun balita bisa dikatakan pertumbuhan normal apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. Minum dari cangkir, makan menggunakan sendok<br> \r\n2. Kosakata meningkat hingga 15 - 50 kata<br> \r\n3. Melempar dan menendang bola<br> \r\n4. Mampu naik-turun tangga dengan aman<br> \r\n5. Dapat membuka pakaian sendiri tanpa dibantu<br> \r\n6. Bermain dengan maianan', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>'),
('A10', 'Pertumbuhan Terlambat 1,5 - 2 Tahun', 'Pada usia 1,5 - 2 Tahun balita bisa dikatakan pertumbuhan terlambat apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. udah bisa minum dari cangkir sendiri tetapi belum bisa makan menggunakan sendok<br> \r\n2. Kosakata belum meningkat hingga 15 - 50 kata<br> \r\n3. Melempar dan menendang bola masih dibantu<br> \r\n4. Belum mampu naik-turun tangga dengan aman atau masih dibantu<br> \r\n5. Belum bisa membuka pakaian sendiri', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>\r\n\r\nBiasanya seorang pakar memberikan waktu 1 - 2 bulan untuk bayi yang pertumbuhannya terlambat.<br>\r\nApabila waktu yang sudah ditentukan tidak ada perubahan atau peningkatan, segeralah melakukan tindakan lanjut kepada Dokter terdekat.'),
('A11', 'Pertumbuhan Normal 3 - 5 Tahun', 'Pada usia 3 - 5 Tahun balita bisa dikatakan pertumbuhan normal apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. Berpakaian Sendiri<br> \r\n2. Mengendarai sepeda roda tiga<br> \r\n3. Mampu menerima intruksi : Bawa tasmu sendiri, ya<br>\r\n4. Bisa menyanyikan lagu sederhana<br> \r\n5. Mampu membuaka dan menutup ritsleting sendiri<br>\r\n6. Kosakata hingga 1000 kata<br>\r\n7. Bisa diajarkan kemandirian seperti memakai dan melepas sepatu', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>'),
('A12', 'Pertumbuhan Terlambat 3 - 5 Tahun', 'Pada usia 3 - 5 Tahun balita bisa dikatakan pertumbuhan terlambat apabila memliki banyak ciri-ciri dibawah ini :<br>\r\n\r\n1. Berpakaian masih dibantu<br> \r\n2. Belum bisa menerima intruksi<br> \r\n3. Belum bisa menyanyikan lagu sederhana<br> \r\n4. Masih dibantu membuaka dan menutup ritsleting<br>\r\n5. Belum bisa kosata hingga 1000 kata<br> \r\n6. Belum bisa diajarkan kemandirian seperti memakai dan melepas sepatu', 'Setiap bayi unik, masing-masing mencapai melieostone motorik yang berbeda beda.<br>\r\nSistem ini hanya sebagai pedoman yang bayi bunda bisa capai, <br>\r\nJika bayi bunda terlahir premature, Kemungkinan bayi bunda membutuhkan banyak waktu untuk mencapai melestonenya. \r\nJika milestone motorik tidak tercapai sekarang, maka akan tercapai sebentar lagi<br>\r\n\r\nBiasanya seorang pakar memberikan waktu 1 - 2 bulan untuk bayi yang pertumbuhannya terlambat.<br>\r\nApabila waktu yang sudah ditentukan tidak ada perubahan atau peningkatan, segeralah melakukan tindakan lanjut kepada Dokter terdekat.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `nama_pasien` varchar(1000) NOT NULL,
  `umur_pasien` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `nama_pasien`, `umur_pasien`, `password`) VALUES
(3, 'Michael Butar butar', 'indigomike7@gmail.com', 'Testing', '1', 'testing'),
(5, 'Michael', 'indigomike@gmail.com', 'Baby', '2', 'testing'),
(6, 'Michael', 'indigomike2@gmail.com', 'Baby', '3', 'testing'),
(7, 'Michael', 'indigomike3@gmail.com', 'Baby', '4', 'testing'),
(8, 'Michael', 'indigomike5@gmail.com', 'Baby', '5', 'testing'),
(9, 'Michael', 'indigomike6@gmail.com', 'Baby Cesare', '6', 'testing'),
(10, 'Michael', 'indigomike9@gmail.com', 'Michael', '1', 'testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_klasifikasi`
--
ALTER TABLE `tb_klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`),
  ADD KEY `id_pertumbuhan` (`id_pertumbuhan`),
  ADD KEY `id_ciri` (`id_ciri`);

--
-- Indexes for table `tb_motorik`
--
ALTER TABLE `tb_motorik`
  ADD PRIMARY KEY (`id_ciri`);

--
-- Indexes for table `tb_pertumbuhan`
--
ALTER TABLE `tb_pertumbuhan`
  ADD PRIMARY KEY (`id_pertumbuhan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_klasifikasi`
--
ALTER TABLE `tb_klasifikasi`
  MODIFY `id_klasifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `tb_motorik`
--
ALTER TABLE `tb_motorik`
  MODIFY `id_ciri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_klasifikasi`
--
ALTER TABLE `tb_klasifikasi`
  ADD CONSTRAINT `a` FOREIGN KEY (`id_ciri`) REFERENCES `tb_motorik` (`id_ciri`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `b` FOREIGN KEY (`id_pertumbuhan`) REFERENCES `tb_pertumbuhan` (`id_pertumbuhan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

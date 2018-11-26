-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2018 at 12:15 PM
-- Server version: 5.7.21-1
-- PHP Version: 7.0.29-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lomba_progamming`
--

-- --------------------------------------------------------

--
-- Table structure for table `juri`
--

CREATE TABLE `juri` (
  `id` int(5) NOT NULL,
  `username` varchar(26) NOT NULL,
  `password` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `juri`
--

INSERT INTO `juri` (`id`, `username`, `password`) VALUES
(1, 'uinic', '2018uinic');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id_player` int(5) NOT NULL,
  `id_team` int(100) NOT NULL,
  `nama_player` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `sesi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id_player`, `id_team`, `nama_player`, `username`, `password`, `status`, `sesi`) VALUES
(1, 1, 'Della Herli Rahman', 'della', '12345', 0, 0),
(2, 1, 'Rimba Erlangga', 'rimba', '12345', 0, 0),
(3, 1, 'Ilham Aryasuta Jatinugroho', 'ilham', '12345', 0, 0),
(4, 2, 'Ronald Ferdinand', 'ronald', '12345', 0, 0),
(5, 2, 'Muhammad Asadulloh Al Mubarok', 'asadulloh', '12345', 0, 0),
(6, 2, 'Hammam Afiq Murtadho', 'Hammam', '12345', 0, 0),
(7, 3, 'Arya Yudha Sadewa', 'arya', '12345', 0, 0),
(8, 3, 'Danang Wijaya', 'danang', '12345', 0, 0),
(9, 3, 'Anang Ma\'ruf Budiyanto', 'anang', '12345', 0, 0),
(10, 4, 'NAILY KHAIRIYA', 'naily', '12345', 0, 0),
(11, 4, 'Muhammad Akyas David Al Aleey', 'akyas', '12345', 0, 0),
(12, 5, 'Hanif Muzaki', 'hanif', '12345', 0, 0),
(13, 5, 'Fauqi Al Amin', 'fauqi', '12345', 0, 0),
(14, 6, 'Rofi Anwar', 'rofi', '12345', 0, 0),
(15, 6, 'Fatkhur Rohman', 'faktur', '12345', 0, 0),
(16, 6, 'Atina Hana Maulidina', 'atina', '12345', 0, 0),
(17, 7, 'Eka rahadi', 'rahadi', '12345', 0, 0),
(18, 7, 'Raden Muhammad Saleh Idris', 'raden', '12345', 0, 0),
(19, 7, 'Mohamad Fiqri Rahardian', 'fiqri', '12345', 0, 0),
(20, 8, 'irfan ade pradana', 'ade', '12345', 0, 0),
(21, 8, 'chandra agung rizky', 'chandra', '12345', 0, 0),
(22, 9, 'Yanes Rivki Yunius', 'yanes', '12345', 0, 0),
(23, 9, 'Radianus Raba Ate', 'radianus', '12345', 0, 0),
(24, 9, 'Debora Sopiana Ikawahyuni', 'debora', '12345', 0, 0),
(25, 10, 'Kristian Juri Damai Lase', 'kristian', '12345', 0, 0),
(26, 10, 'jumiati', 'jumiati', '12345', 0, 0),
(27, 10, 'Lertiani Berutu', 'lertiani', '12345', 0, 0),
(28, 11, 'Rospita Gea', 'rospita', '12345', 0, 0),
(29, 11, 'Abte Yulita Sanam', 'abte', '12345', 0, 0),
(30, 11, 'Witti kristine Halawa', 'witti', '12345', 0, 0),
(31, 12, 'Ariska Restu Ginanjar', 'ariska', '12345', 0, 0),
(32, 12, 'Dwiki Likuisa', 'dwiki', '12345', 0, 0),
(33, 12, 'Aditya Hermawan', 'aditya', '12345', 0, 0),
(34, 13, 'Revita Lusiana Sukarno', 'revita', '12345', 0, 0),
(35, 13, 'Eka Aprilia Suci Lestari', 'eka', '12345', 0, 0),
(36, 13, 'Fastina Pratiwi', 'fastina', '12345', 0, 0),
(37, 14, 'Farid Fadullah', 'farid', '12345', 0, 0),
(38, 14, 'Purnomo', 'purnomo', '12345', 0, 0),
(39, 14, 'ahmad hizbullah akbar', 'ahmad', '12345', 0, 0),
(40, 15, 'Rahmat Aji Handoko', 'rahmat', '12345', 0, 0),
(41, 15, 'Aji Wahyu Budiman', 'aji', '12345', 0, 0),
(42, 15, 'Muhammad Syihabuddin Az Zuhair', 'syihabuddin', '12345', 0, 0),
(43, 16, 'Herlandro Tribiakto', 'herlandro', '12345', 0, 0),
(44, 16, 'Rizky Nur Hidayatullah', 'rizky', '12345', 0, 0),
(45, 16, 'Akbar Hari Mukti', 'akbar', '12345', 0, 0),
(46, 4, 'Pikatan Arya Bramajati', 'Pikatan', '12345', 0, 0),
(47, 17, 'Taofik Krisdiyanto', 'taofik', '12345', 0, 1),
(48, 17, 'Fadilah Riczky', 'fadilah', '12345', 0, 0),
(49, 17, 'Rizqi Mirza Fadilla', 'rizqi', '12345', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `selesai`
--

CREATE TABLE `selesai` (
  `id` int(11) NOT NULL,
  `id_soal` varchar(5) NOT NULL,
  `id_sub_soal` varchar(10) NOT NULL,
  `id_team` varchar(5) NOT NULL,
  `jawaban` varchar(200) NOT NULL,
  `jawaban_file` varchar(200) NOT NULL,
  `type` varchar(5) NOT NULL,
  `waktu` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selesai`
--

INSERT INTO `selesai` (`id`, `id_soal`, `id_sub_soal`, `id_team`, `jawaban`, `jawaban_file`, `type`, `waktu`) VALUES
(1, '1', '2', '5', 'A', 'none', '2', '2018-11-26 10:46:23'),
(2, '1', '1', '5', '', 'Kasir.java', '1', '2018-11-26 10:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(5) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `level`) VALUES
(1, '1'),
(2, '1'),
(3, '2'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7');

-- --------------------------------------------------------

--
-- Table structure for table `sub_soal`
--

CREATE TABLE `sub_soal` (
  `id_sub_soal` int(5) NOT NULL,
  `id_soal` varchar(5) NOT NULL,
  `soal` text NOT NULL,
  `type_soal` int(3) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_soal`
--

INSERT INTO `sub_soal` (`id_sub_soal`, `id_soal`, `soal`, `type_soal`, `file`) VALUES
(1, '1', '<p style=\"color:white\"><center>\r\n<h2>\r\nPerkalian Dan Pembagian Tanpa Operator\r\n</h2>\r\n<br>\r\n<br>\r\nBatas Run Time : 1 Detik<br>\r\nBatas Memori   : 32 MB<br> \r\n</center>\r\n\r\n<h3>Deskripsi Soal</h3>\r\n<p style=\"color:white; font-size:16px\">\r\nBuatlah Sebuah program Perkalian Dan Pembagian tanpa Operator Kali(*) dan Bagi(/)\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Petunjuk Soal</h3>\r\n\r\n<p style=\"color:white; font-size:16px\">\r\nBuatlah Dengan Mengunakan Loop \r\n</p>\r\n<br>\r\n<br>\r\n<h3>Petujuk Masukan</h3>\r\n\r\n<p style=\"color:white; font-size:16px\">\r\nMasukan 3 angka, angka terakhir sebagai pembagi\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Petunjuk Keluaran</h3>\r\n\r\n<p style=\"color:white; font-size:16px\">\r\nKeluarkan Bilangan Bulat sebagai hasilnya\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Contoh Masukan : 5 , 5 , 2</h3>\r\n<h3>Contoh Keluaran: 12</h3>\r\n</p>\r\n\r\n', 1, 'soalprog1.png'),
(2, '1', 'Diketahui Soal sebagai berikut jawabalah ?\r\n<br>\r\n<img src=\"assets/soal_img/soal1.png\">', 2, 'soal1.png'),
(3, '2', '<p style=\"color:white\"><center>\n<h2>\nMiaw\n</h2>\n<img src=\"assets/img/miaw.jpeg\">\n<br>\n<br>\nBatas Run Time : 1 Detik<br>\nBatas Memori   : 32 MB<br> \n</center>\n\n<h3>Deskripsi Soal</h3>\n<p style=\"color:white; font-size:16px\">\nStevani Memiliki kucing dan selalu berkata dengan 2 Kata yaitu \"miaw\" dengan nada rendah dan \"Miaw\" dengan nada tinggi, dan stevani ingin tau berapa banyak sih kucing nya \"Miaw\" dengan nada tinggi</p>\n<br>\n<br>\n<h3>Petujuk Masukan</h3>\n\n<p style=\"color:white; font-size:16px\">\nSebaris string tanpa spasi dan dipastikan diawali dengan \"Miaw\" nada tinggi.\n</p>\n<br>\n<br>\n<h3>Petunjuk Keluaran</h3>\n\n<p style=\"color:white; font-size:16px\">\nKeluarkan bilangan bulat jumlah kalimat yang diucapkan\n</p>\n<br>\n<br>\n<h3>Contoh Masukan : MiawmiawmiawMiawmiawMiaw</h3>\n<h3>Contoh Keluaran: 3</h3>\n</p>\n\n', 1, 'sasas'),
(4, '2', 'Pilih yang menurut kamu benar\r\n<br>\r\n<br>\r\n<img src=\"assets/soal_img/soal2.png\">', 2, 'soal2.png'),
(5, '3', '<p style=\"color:white\"><center>\r\n<h2>\r\nMinimum\r\n</h2>\r\n<br>\r\nBatas Run Time : 1 Detik<br>\r\nBatas Memori   : 32 MB<br> \r\n</center>\r\n<h3>Deskripsi Soal</h3>\r\n\r\n<p style=\"color:white; font-size:16px\">\r\nDiberikan N buah bilangan bulat, tentukan nilai paling kecil pada deretan tersebut.\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Petujuk Masukan</h3>\r\n<img src=\"assets/soal_img/soal33.png\">\r\n<br>\r\n<br>\r\n<h3>Petunjuk Keluaran</h3>\r\n\r\n<p style=\"color:white; font-size:16px\">\r\nOutpukan nilai terkecil pada deret tersebut.\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Contoh Masukan :\r\n<br>5<br>\r\n4 1 5 6 7\r\n</h3>\r\n<h3>Contoh Keluaran: 1</h3>\r\n</p>\r\n\r\n\r\n', 1, 'asasasas'),
(6, '3', 'Pilih jawaban yang benar\r\n<br>\r\n<img src=\"assets/soal_img/soal3.png\">', 2, 'soal3.png'),
(7, '4', '<b style=\"color:white\">\n<p style=\"color:white\"><center>\n<h2>\nEMOJI\n</h2>\n<br>\nBatas Run Time : 1 Detik<br>\nBatas Memori   : 32 MB<br> \n</center>\n\n<h3>Deskripsi Soal</h3>\n<p style=\"color:white; font-size:16px\">\nSania sedang bermain-main dengan emoticon yang ada di HP nya. Dan sekarang dia sedang mencoba untuk membuat program yang akan membantunya menentukan emoticon yang tepat untuk ekspresinya. Bantu Sania dalam pembuatan program tersebut.<br>\n<br>\nAgar lebih mudah, Pak Blangkon hanya menentukan tiga ekspresi yang dapat disampaikan dengan emoticon:\n<br>\n1. \"semangat\" dengan emoticon \\(^_^)/\n<br>\n2. \"sebel\" dengan emoticon >.<\"\n<br>\n3. \"bingung\" dengan emoticon (\' \')?\n\n</p>\n<br>\n<br>\n<h3>Petujuk Masukan</h3>\n\n<p style=\"color:white; font-size:16px\">\nSebuah string \"semangat\",\"sebel\", atau \"bingung\". (tanpa tanda petik)\n</p>\n<br>\n<br>\n<h3>Petunjuk Keluaran</h3>\n<p style=\"color:white; font-size:16px\">\nString ekspresi lalu ditambah emoticon yang sesuai dengan ekpresinya yang dipisahkan oleh spasi.\n</p>\n<br>\n<br>\n<h3>Contoh Masukan :\n<br>\nsemangat\n</h3>\n<h3>Contoh Keluaran: \n<br>\nsemangat \\(^_^)/\n</h3>\n</p>\n</b>\n\n', 1, 'none'),
(8, '4', 'Pilih Jawaban Yang Benar\n<br>\n<img src=\"assets/soal_img/soal4.png\">', 2, 'gambar'),
(9, '5', '<b style=\"color:white\">\r\n<p style=\"color:white\"><center>\r\n<h2>\r\nPITAGORAS\r\n</h2>\r\n<br>\r\nBatas Run Time : 1 Detik<br>\r\nBatas Memori   : 32 MB<br> \r\n</center>\r\n\r\n<h3>Deskripsi Soal</h3>\r\n<p style=\"color:white; font-size:16px\">\r\nRumus pitagoras yang terkenal memudahkan kita untuk mencari panjang sisi segitiga siku-siku dengan menggunakan rumus:\r\n<br>\r\na2 + b2 = c2\r\n<br>\r\ndi mana c adalah panjang sisi miring dan a,b adalah panjang sisi sisi lainnya\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Petujuk Masukan</h3>\r\n<p style=\"color:white; font-size:16px\">\r\n<img src=\"assets/soal_img/pita.png\">\r\n\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Petunjuk Keluaran</h3>\r\n<p style=\"color:white; font-size:16px\">\r\noutputkan banyak segitiga siku-siku yang memenuhi rumus pitagoras dengan a2 + b2 = c2, dengan a,b, dan c adalah bilangan bulat.\r\n\r\n\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Contoh 1 Masukan :\r\n<br>\r\n5\r\n</h3>\r\n<h3>Contoh 1 Keluaran: \r\n<br>\r\n2\r\n</h3>\r\n<h3>Contoh 2 Masukan:\r\n<br>\r\n100\r\n</h3>\r\n<h3>Contoh 2 Keluaran:\r\n<br>\r\n4\r\n</h3>\r\n</p>\r\n</b>\r\n\r\n', 1, 'none'),
(10, '5', 'Pilih Yang Menurut Mu Benar\n<br>\n<img src=\"assets/soal_img/soal5.png\">', 2, 'gambar'),
(11, '6', '<b style=\"color:white\">\r\n<p style=\"color:white\"><center>\r\n<h2>\r\nABCD\r\n</h2>\r\n<br>\r\nBatas Run Time : 1 Detik<br>\r\nBatas Memori   : 32 MB<br> \r\n</center>\r\n\r\n<h3>Deskripsi Soal</h3>\r\n<p style=\"color:white; font-size:16px\">\r\n<img src=\"assets/soal_img/soall.png\">\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Petujuk Masukan</h3>\r\n<p style=\"color:white; font-size:16px\">\r\n<img src=\"assets/soal_img/soallx.png\">\r\n\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Petunjuk Keluaran</h3>\r\n<p style=\"color:white; font-size:16px\">\r\nOutputkan A, B, dan C, terurut dari A terkecil, B terkecil, dan seterusnya, dipisahkan dengan satu spasi. A, B, dan C adalah bilangan bulat positif.\r\n\r\n\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Contoh Masukan :\r\n<br>\r\n5\r\n</h3>\r\n<h3>Contoh Keluaran: \r\n<br>\r\n1 1 3\r\n<br>\r\n1 2 2\r\n<br>\r\n1 3 1\r\n<br>\r\n2 1 2\r\n<br>\r\n2 2 1\r\n<br>\r\n3 1 1\r\n</h3>\r\n\r\n</p>\r\n</b>\r\n\r\n', 1, 'none'),
(12, '6', '<img src=\"assets/soal_img/soal7pilihan.png\">', 2, 'none'),
(13, '7', '<b style=\"color:white\">\r\n<p style=\"color:white\"><center>\r\n<h2>\r\nX\r\n</h2>\r\n<br>\r\nBatas Run Time : 1 Detik<br>\r\nBatas Memori   : 32 MB<br> \r\n</center>\r\n\r\n<h3>Deskripsi Soal</h3>\r\n<p style=\"color:white; font-size:16px\">\r\nBuatlah program yang bisa menampilkan Seperti Berikut ini (petujuk Gunakan loop)\r\n<br>\r\n<img src=\"assets/soal_img/soal77.png\">\r\n</p>\r\n<br>\r\n<br>\r\n<h3>Petunjuk Keluaran</h3>\r\n<p style=\"color:white; font-size:16px\">\r\nMenghasilkan output * dan Sama Seperti Gambar Diatas\r\n</p>\r\n<br>\r\n<br>\r\n</p>\r\n</b>\r\n\r\n', 1, 'none'),
(14, '7', '<img src=\"assets/soal_img/soalku.png\">', 2, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id_team` int(5) NOT NULL,
  `nama_team` varchar(100) NOT NULL,
  `region_team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id_team`, `nama_team`, `region_team`) VALUES
(1, 'Nyicip Dulu', 'UGM'),
(2, 'Boruto Stream', 'AMIKOM YOGYAKARTA\r\n'),
(3, 'Code.Infinite', 'Universitas Negeri Yogyakarta'),
(4, 'PAK DIDA FAN CLUB', 'SMA SEMESTA'),
(5, 'Underdog', 'SMK Nurul Iman'),
(6, 'Logical Intelligence', 'Universitas Muhammadiyah Magelang'),
(7, 'erpeel-kaleng', 'Politeknik Negeri Indramayu'),
(8, 'taman kode-kode', 'taman kode-kode'),
(9, 'red', 'Universitas Kristen Immanuel'),
(10, 'Green', 'Universitas Kristen Immanuel'),
(11, 'Blue', 'Universitas Kristen Immanuel'),
(12, 'sudonym', 'Universitas Teknologi Yogyakarta'),
(13, 'SKAYESA2018', 'SMK YPKK 1 SLEMAN'),
(14, 'Alma Ata X-Code', 'Universitas Alma Ata'),
(15, 'ignite', 'Universitas Muhammadiyah Magelang'),
(16, 'IF05', 'Universitas Amikom Yogyakarta'),
(17, 'J-Code', 'Universitas Janabadra');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(5) NOT NULL,
  `id_team` int(11) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `id_team`, `waktu_mulai`, `waktu_akhir`) VALUES
(33, 1, '2018-11-26 08:15:50', '2018-11-26 08:15:50'),
(34, 2, '2018-11-25 19:44:09', '2018-11-25 19:44:18'),
(35, 3, '2018-11-26 10:21:50', '2018-11-26 10:21:50'),
(36, 4, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(37, 5, '2018-11-26 10:49:29', '2018-11-26 10:49:29'),
(38, 6, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(39, 7, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(40, 8, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(41, 9, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(42, 10, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(43, 11, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(44, 12, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(45, 13, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(46, 14, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(47, 15, '2018-11-24 00:00:00', '2018-11-24 00:00:00'),
(48, 16, '2018-11-25 00:00:00', '2018-11-25 00:00:00'),
(49, 17, '2018-11-25 19:47:18', '2018-11-25 19:47:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `juri`
--
ALTER TABLE `juri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id_player`);

--
-- Indexes for table `selesai`
--
ALTER TABLE `selesai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `sub_soal`
--
ALTER TABLE `sub_soal`
  ADD PRIMARY KEY (`id_sub_soal`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `juri`
--
ALTER TABLE `juri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id_player` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `selesai`
--
ALTER TABLE `selesai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sub_soal`
--
ALTER TABLE `sub_soal`
  MODIFY `id_sub_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id_team` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

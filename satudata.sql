-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 20 Jul 2021 pada 09.23
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satudata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `qrcode`
--

CREATE TABLE `qrcode` (
  `id` int(11) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `profesi` varchar(100) NOT NULL,
  `thn-pendaftaran` varchar(10) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `sarana` varchar(250) NOT NULL,
  `nama_qr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `qrcode`
--

INSERT INTO `qrcode` (`id`, `tempat`, `tgl_lahir`, `profesi`, `thn-pendaftaran`, `nohp`, `sarana`, `nama_qr`) VALUES
(1, 'Bandung', '1969-12-31', 'Nelayan', '2020', '083822228343', 'Perahu', ''),
(2, 'Bandung', '1969-12-31', 'Nelayan', '2019', '089678407900', 'Perahu', ''),
(3, 'Bandung', '2000-06-15', 'Nelayan', '2019', '085624193903', 'perahu', ''),
(4, 'Bandung', '2021-07-01', 'Nelayan', '1342', '081517108414', 'efwgr', 'satudata_wN5ks0RL1.jpg'),
(5, 'Bandung', '2007-02-06', 'Nelayan', '2019', '085624193903', 'Perahu', 'satudata_hweNSdMZ9.jpg'),
(6, 'subang', '2021-07-02', 'qfqwfq', '4234', '94823948923', 'fwefwefwe', 'satudata_NvFSqRsHk.jpg'),
(7, 'Bandung', '2021-07-09', 'fwefwef', '42432', '32432423523', 'gewgerger', 'satudata_l8PXi9DpZ.jpg'),
(8, 'Bandung', '2021-07-02', 'Nelayan', '3525', '089678407900', '2t43t34g', 'satudata_f5pQYMTl8.jpg'),
(9, 'Bandung', '2019-07-18', 'Nelayan', '23415', '085624193903', 'gewwegwe', 'satudata_2NY1CihTj.jpg'),
(10, 'Bandung', '2020-06-09', 'Nelayan', '2019', '08558565000', 'sfewfegre', 'satudata_FBwmDSnO7.jpg'),
(11, 'Bandung', '2021-07-02', 'Nelayan', '2019', '081210320490', 'efwew', 'satudata_qSgL9C3bO.jpg'),
(12, 'Bandung', '2021-07-02', 'Nelayan', '2019', '085624193903', 'jfiejifwe', 'satudata_dSF7ofIBL.jpg'),
(13, 'Bandung', '2021-07-02', 'Nelayan', '2020', '081517108414', 'efewfwe', 'satudata_Do6P2pOFa.jpg'),
(14, 'Bandung', '2021-07-07', 'Nelayan', '2019', '089678407900', 'fewfwef', 'satudata_xC7AJPdzU.jpg'),
(15, 'Bandung', '2021-07-02', 'dqwdqwd', '1242', '34234', 'gwegre', 'satudata_YeH0SboKa.jpg'),
(16, 'Bandung', '2021-07-01', 'Nelayan', '2019', '085624193903', 'fwefwe', 'satudata_W2iE3Fxp8.jpg'),
(17, 'Bandung', '2021-07-29', 'Nelayan', '2019', '085624193903', 'wfwefewg', 'satudata_kQg94DUH2.jpg'),
(18, 'Bandung', '2021-07-28', 'Nelayan', '2314', '083822228343', 'r2fewfe', 'satudata_Yy2palVJT.jpg'),
(19, 'Bandung', '2021-07-07', 'Nelayan', '2020', '081517108414', 'fwefew', 'satudata_7NsAdlFIW.jpg'),
(20, 'Bandung', '2021-07-03', 'Nelayan', '2019', '090293', 'whfioejwfw', 'satudata_hn9mkyYwi.jpg'),
(21, 'Bandung', '2020-07-20', 'Nelayan', '2020', '081210320490', 'eegerver', 'satudata_P2Ej0b8IG.jpg'),
(22, 'Bandung', '2016-02-10', 'Nelayan', '2019', '083822228343', 'fnjwenfkwje', 'satudata_2t5nNRGuZ.jpg'),
(23, 'Bandung', '2021-07-02', 'qfqwfq', '2019', '081210320490', 'fhkewbfwe', 'satudata_BSzJD0ulT.jpg'),
(24, 'Bandung', '2021-07-10', 'Nelayan', '2019', '08558565000', 'wefwfe', 'satudata_Tpq0zGg6Z.jpg'),
(25, 'Bandung', '2021-07-03', 'Nelayan', '2018', '083822228343', 'nufnwejfm', 'satudata_32WxlZqMk.jpg'),
(26, 'Bandung', '2021-07-08', 'Nelayan', '2019', '089678407900', 'fwfwe', 'satudata_kdUbWiSIo.jpg'),
(27, 'Bandung', '2021-06-02', 'qfqwfq', '2019', '085624193903', 'midoiwdew', 'satudata_GrSds6kIi.jpg'),
(28, 'Bandung', '2021-06-10', 'Nelayan', '2019', '085624193903', 'asddew', 'satudata.jpg'),
(29, 'Bandung', '2021-07-09', 'fwefwef', '2019', '083822228343', 'diwebnd', 'satudata.jpg'),
(30, 'Bandung', '2021-07-02', 'Nelayan', '2019', '089678407900', 'kamdklamd', 'satudata_7xobwhUA8.jpg'),
(31, 'Bandung', '2021-07-14', 'Nelayan', '2019', '081517108414', 'fwefwe', 'satudata_ycpNmwiQB.jpg'),
(32, 'Bandung', '2021-06-10', 'Nelayan', '2019', '081517108414', 'perahu', 'satudata_UFCjlWR39.jpg'),
(33, 'Bandung', '2021-07-15', 'Nelayan', '2019', '085624193903', 'perahu', 'satudata_HJ5kBMqWg.jpg'),
(34, 'subang', '2013-02-19', 'Nelayan', '2019', '085624193903', 'perahu', 'satudata_PNdlbMD4z.jpg'),
(35, 'Bandung', '2021-07-08', 'Nelayan', '2018', '085624193903', 'nddjwbedw', 'satudata_cUs4ZeR8F.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

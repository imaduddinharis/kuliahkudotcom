-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Apr 2016 pada 19.30
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kuliahkudotcom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE IF NOT EXISTS `tb_dosen` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `img_idcard` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`nip`, `nama`, `jenis_kelamin`, `photo`, `img_idcard`, `user_id`) VALUES
('D1234', 'Dosen', 'Man', 'files/profile/D1234photoprofile.png', 'files/idcard/D1234photoid.png', 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE IF NOT EXISTS `tb_jawaban` (
`id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `judul_file` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kehadiran_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tb_kehadiran_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `total` int(11) NOT NULL,
  `persen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tb_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `img_idcard` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `photo`, `img_idcard`, `user_id`) VALUES
('M1234', 'Mahasiswa', 'Man', 'files/profile/M1234photoprofile.jpg', 'files/idcard/M1234photoid.png', 53),
('s12345', 'student', 'Woman', 'files/profile/s12345photoprofile.jpg', 'files/idcard/s12345photoid.jpg', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_materi`
--

CREATE TABLE IF NOT EXISTS `tb_materi` (
`id` int(11) NOT NULL,
  `nama_file` text NOT NULL,
  `judul` varchar(30) NOT NULL,
  `id_pertemuan` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_nilai` (
`id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `score` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertemuan`
--

CREATE TABLE IF NOT EXISTS `tb_pertemuan` (
`id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trans_kehadiran`
--

CREATE TABLE IF NOT EXISTS `tb_trans_kehadiran` (
`id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tanggal_pertemuan` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tugas_kuis`
--

CREATE TABLE IF NOT EXISTS `tb_tugas_kuis` (
`id` int(11) NOT NULL,
  `nama_file` text NOT NULL,
  `judul` text NOT NULL,
  `durasi` text NOT NULL,
  `id_pertemuan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `path` varchar(100) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `tipe_user` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `email`, `tipe_user`, `user_id`) VALUES
(1, 'mahasiswa', 'm1234', 'mahasiswa@kampus.com', 2, 53),
(2, 'dosen', 'd1234', 'dosen@kampus.com', 1, 54),
(3, 'student', 's12345', 'student@kampus.com', 2, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pertemuan`
--
ALTER TABLE `tb_pertemuan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_trans_kehadiran`
--
ALTER TABLE `tb_trans_kehadiran`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`,`nim`,`tanggal_pertemuan`,`status`);

--
-- Indexes for table `tb_tugas_kuis`
--
ALTER TABLE `tb_tugas_kuis`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_pertemuan`
--
ALTER TABLE `tb_pertemuan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_trans_kehadiran`
--
ALTER TABLE `tb_trans_kehadiran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_tugas_kuis`
--
ALTER TABLE `tb_tugas_kuis`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

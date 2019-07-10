-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jul 2019 pada 06.06
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmjokipolinema`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `kode_alat` int(11) NOT NULL,
  `nama_alat` varchar(25) NOT NULL,
  `jumlah_alat` varchar(23) NOT NULL,
  `kondisi_alat` varchar(22) NOT NULL,
  `gambar_alat` varchar(21) NOT NULL,
  `batas_pinjam` int(11) NOT NULL,
  `fk_ukm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`kode_alat`, `nama_alat`, `jumlah_alat`, `kondisi_alat`, `gambar_alat`, `batas_pinjam`, `fk_ukm`) VALUES
(1, 'Karpet', '20', 'Bagus', '', 3, 1),
(2, 'Sound', '20', 'Bagus', '', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataukm`
--

CREATE TABLE `dataukm` (
  `no_ukm` int(11) NOT NULL,
  `nama_ukm` varchar(23) NOT NULL,
  `nama_ketum` varchar(26) NOT NULL,
  `jumlahanggota` varchar(28) NOT NULL,
  `nama_rt` varchar(23) NOT NULL,
  `cp_rt` varchar(15) NOT NULL,
  `fk_admin_ukm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataukm`
--

INSERT INTO `dataukm` (`no_ukm`, `nama_ukm`, `nama_ketum`, `jumlahanggota`, `nama_rt`, `cp_rt`, `fk_admin_ukm`) VALUES
(1, 'PASTI POLINEMA', 'Ishom', '50000', 'Gak tau', '08123456678', 4),
(2, 'KMK', 'jjjj', '20', 'kk', '087', 2),
(3, 'LPM KOMPEN', 'Mursyid Tamam', '200', 'Gak tau', '082134', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(21) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 1),
(2, 'adminkmk', '6894a08b94d706e670f6efd3469e5701', 2),
(3, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 3),
(4, 'adminpasti', '1e9a64f60402fcf45d76bba56535cef4', 2),
(6, 'ayu', '29c65f781a1068a41f735e1b092546de', 3),
(7, 'fandi', '9bb773615bccfc87168aa059884ca038', 3),
(8, 'adminkompen', 'e9a0893423e015c919f743e2323aa174', 2),
(9, 'adminbkm', 'e5eb9aecc9a1c35c9acdd9d467813a1e', 2),
(11, 'ndan', '15e8d4e206d050a4adc9ddbd203bdaf5', 3),
(12, 'finda', '9b1de3ab70058b24e934b5ef5c3d62f2', 3),
(16, 'chandra', 'ad845a24a47deecbfa8396e90db75c6a', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `fk_alat` int(21) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `jumlah_alat` varchar(12) NOT NULL,
  `kondisi_alat` varchar(21) NOT NULL,
  `kegiatan` varchar(22) NOT NULL,
  `surat` varchar(24) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jaminan` varchar(21) NOT NULL,
  `status` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `fk_alat`, `fk_user`, `jumlah_alat`, `kondisi_alat`, `kegiatan`, `surat`, `tgl_pinjam`, `tgl_kembali`, `jaminan`, `status`) VALUES
(1, 2, 1, '2', 'Bagus', 'DN', 'Ada', '2017-11-25', '2017-11-26', 'KTM', 'Sudah Kembali'),
(129, 2, 2, '2', 'Bagus', 'DN PASTI POLINEMA', 'Ada', '2018-01-06', '2018-01-08', 'ktm', 'Sudah Kembali'),
(131, 2, 3, '1', 'Bagus', 'Makrab', 'Ada', '2018-01-06', '2018-01-08', 'KTM', 'Sudah Kembali'),
(132, 1, 1, '2', 'Bagus', 'DN', 'Ada', '2018-01-08', '2018-01-11', 'KTM', 'Sudah Kembali'),
(133, 1, 1, '2', 'Bagus', 'DN', 'Ada', '2018-01-09', '2018-01-12', 'KTM', 'Sudah Kembali'),
(134, 2, 4, '2', 'Bagus', 'UU', 'Ada', '2018-01-07', '2018-01-08', 'KTM', 'Sudah Kembali'),
(135, 2, 4, '2', 'Bagus', 'DN', 'Tidak Ada', '2018-01-11', '2018-01-13', 'KTM', 'Belum Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` bigint(20) NOT NULL,
  `nama_pjawab` varchar(255) NOT NULL,
  `cp_pjawab` varchar(15) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_ukm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `nim`, `nama_pjawab`, `cp_pjawab`, `fk_user`, `fk_ukm`) VALUES
(1, 'Khamdan', 1541180005, 'Khamdan', '85231374680', 11, 1),
(2, 'Ayu Nur Aini', 153, 'Ayu Nur Aini', '85', 6, 1),
(3, 'Finda', 153114, 'Finda', '865', 12, 1),
(4, 'Chandra', 154116775, 'Gak tau', '082134', 16, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`kode_alat`),
  ADD KEY `fk_ukm` (`fk_ukm`);

--
-- Indexes for table `dataukm`
--
ALTER TABLE `dataukm`
  ADD PRIMARY KEY (`no_ukm`),
  ADD KEY `fk_admin_ukm` (`fk_admin_ukm`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `fk_alat` (`fk_alat`),
  ADD KEY `fk_user` (`fk_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user` (`fk_user`),
  ADD KEY `fk_ukm` (`fk_ukm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `kode_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dataukm`
--
ALTER TABLE `dataukm`
  MODIFY `no_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dataukm`
--
ALTER TABLE `dataukm`
  ADD CONSTRAINT `dataukm_ibfk_1` FOREIGN KEY (`fk_admin_ukm`) REFERENCES `login` (`id`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `login` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`fk_ukm`) REFERENCES `dataukm` (`no_ukm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

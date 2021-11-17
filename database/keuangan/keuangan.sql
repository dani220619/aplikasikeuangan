-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2020 pada 09.15
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `jenis_pem` varchar(40) NOT NULL,
  `tahun` int(10) NOT NULL,
  `nis` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`jenis_pem`, `tahun`, `nis`) VALUES
('Khusus', 2020, 9878),
('Khusus', 2020, 23423),
('Khusus', 2020, 434234),
('Khusus', 2020, 765856),
('ndalem', 2020, 11223344);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `uraian` varchar(60) NOT NULL,
  `debit` float NOT NULL,
  `kredit` float NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kas`
--

INSERT INTO `kas` (`id`, `tgl`, `uraian`, `debit`, `kredit`, `jenis`) VALUES
(1, '2018-11-19', 'pembelian susu bayi 3 kaleng', 0, 500000, 'pengeluaran'),
(2, '2018-11-19', 'pembelian pampers', 0, 125000, 'pengeluaran'),
(11, '2018-11-18', 'donatur a/n jodi saputra', 500000, 0, 'pemasukan'),
(12, '2018-11-19', 'donatur a/n angga suparno', 500000, 0, 'pemasukan'),
(13, '2018-11-20', 'pembayaran uang makan siang', 0, 175000, 'pengeluaran'),
(14, '2020-02-16', 'makan makan', 0, 1000000, 'pengeluaran'),
(15, '2020-02-17', 'jckjsbcdc', 868778, 0, 'pemasukan'),
(16, '2020-02-25', 'mnbmbnbm', 200000, 0, 'pemasukan'),
(17, '2020-02-18', 'opopo', 1000000, 0, 'pemasukan'),
(18, '2020-02-19', 'vbfgfbf', 1000000, 0, 'pemasukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `jenis_pem` varchar(40) NOT NULL,
  `nis` char(10) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `tahun` int(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`jenis_pem`, `nis`, `bulan`, `tahun`, `tgl_bayar`, `jumlah`) VALUES
('Khusus', '23423', 'April', 2020, '2020-03-24', 60000),
('Khusus', '23423', 'February', 2020, '2020-03-24', 60000),
('Khusus', '434234', 'February', 2020, '2020-03-24', 60000),
('Khusus', '434234', 'January', 2020, '2020-03-24', 60000),
('Khusus', '434234', 'March', 2020, '2020-03-24', 60000),
('Khusus', '765856', 'February', 2020, '2020-02-20', 60000),
('Khusus', '765856', 'January', 2020, '2020-02-19', 90000),
('Khusus', '987654', 'January', 0, '2020-02-18', 60000),
('Khusus', '9878', 'February', 2020, '2020-02-20', 60000),
('Khusus', '9878', 'January', 2020, '2020-02-19', 90000),
('ndalem', '11223344', 'April', 2020, '2020-02-19', 90000),
('ndalem', '11223344', 'February', 2020, '2020-02-17', 60000),
('ndalem', '11223344', 'January', 2020, '2020-02-17', 60000),
('ndalem', '11223344', 'June', 2020, '2020-02-19', 60000),
('ndalem', '123', 'January', 2020, '2020-02-18', 60000),
('ndalem', '12345', 'April', 2020, '2020-02-16', 60000),
('ndalem', '12345', 'February', 2020, '2020-02-16', 60000),
('ndalem', '12345', 'January', 2020, '2020-02-16', 60000),
('ndalem', '12345', 'June', 2020, '2020-02-16', 60000),
('ndalem', '12345', 'March', 2020, '2020-02-16', 60000),
('ndalem', '12345', 'May', 2020, '2020-02-16', 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `nis` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_pem` varchar(30) NOT NULL,
  `tahun` int(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `nohp` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`nis`, `nama`, `jenis_pem`, `tahun`, `alamat`, `nohp`) VALUES
(9878, 'afif', 'Khusus', 2020, 'Lampung', '08579798989'),
(23423, 'kaka', 'Khusus', 2020, 'Banyumas', '08579798989'),
(434234, 'hakim', 'Khusus', 2020, 'Banyumas', '08579798989'),
(765856, 'komed', 'Khusus', 2020, 'Banyumas', '08579798989'),
(11223344, 'dani', 'ndalem', 2020, 'Cilacap', '085797887755');

--
-- Trigger `santri`
--
DELIMITER $$
CREATE TRIGGER `data_santri` AFTER INSERT ON `santri` FOR EACH ROW insert into 
kamar set 
jenis_pem = new.jenis_pem,
tahun     = new.tahun,
nis       = new.nis
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `data_santri_delet` AFTER DELETE ON `santri` FOR EACH ROW DELETE FROM kamar
 WHERE 
jenis_pem = old.jenis_pem and
tahun     = old.tahun and
nis       = old.nis
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `data_santri_update` AFTER UPDATE ON `santri` FOR EACH ROW BEGIN
    
        INSERT INTO santri(jenis_pem,tahun, nis)
        VALUES(kamar.jenis_pem, kamar.tahun, new.nis);
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin', '$2y$10$GWq1Nh5D2CGStBP50cx04.Qs7w59IypmxKT6BoGFOPnMr1VYgNjr.', 'admin'),
(2, 'user', 'user', '$2y$10$GWq1Nh5D2CGStBP50cx04.Qs7w59IypmxKT6BoGFOPnMr1VYgNjr.', 'user'),
(3, 'Dani', 'dani', '$2y$10$pSHf.MddhNwLQC7p//jnROfSgwP0T4DIdU5Eh8FWu26jJFE.tbNl2', 'admin'),
(4, 'lukman', 'lukman', '$2y$10$oRFluTs0MTVussf04yfjzO.bXkkvmO5ZJovadoxOEJJt8qyv2sfxq', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `jenis_pem` (`jenis_pem`),
  ADD KEY `nis` (`nis`),
  ADD KEY `tahun` (`tahun`);

--
-- Indeks untuk tabel `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`jenis_pem`,`nis`,`bulan`);

--
-- Indeks untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

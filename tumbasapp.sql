-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2020 pada 11.52
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tumbasapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor` varchar(24) NOT NULL,
  `atas_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` varchar(15) NOT NULL,
  `port_id` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` varchar(15) NOT NULL,
  `kat_id` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `thumbnail` varchar(40) NOT NULL,
  `harga` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `deleted_by` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_kat`
--

CREATE TABLE `paket_kat` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` varchar(15) NOT NULL,
  `kat_id` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `platform` varchar(20) NOT NULL,
  `author` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_by` varchar(15) DEFAULT NULL,
  `updated_by` varchar(15) DEFAULT NULL,
  `deleted_by` varchar(15) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `kat_id`, `nama`, `deskripsi`, `harga`, `platform`, `author`, `status`, `deleted`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
('PFL000000000001', 'KPF000000000001', 'mencoba', 'coba aja gan asghdkhsa aksdgdfkab kjd akhsdfvka bbdjam ckavdjavwkudgamn ', 4500000, 'MOBILE', 'prmsdk', 'PUBLISH', 0, NULL, NULL, NULL, NULL, NULL, NULL),
('PFL000000000002', 'KPF000000000001', 'coba', 'coba', 0, 'WEB & MOBILE', 'author', 'PUBLISH', 0, 'prmsdk', NULL, NULL, '2020-03-05 08:41:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `port_fitur`
--

CREATE TABLE `port_fitur` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `port_fitur`
--

INSERT INTO `port_fitur` (`id`, `nama`) VALUES
('FPF000000000001', 'Keranjang'),
('FPF000000000002', 'Misalkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `port_fitur_detail`
--

CREATE TABLE `port_fitur_detail` (
  `port_id` varchar(15) NOT NULL,
  `fitur_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `port_kat`
--

CREATE TABLE `port_kat` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `port_kat`
--

INSERT INTO `port_kat` (`id`, `nama`) VALUES
('KPF000000000001', 'Kategori Marketplace');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` varchar(15) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `paket_id` varchar(15) NOT NULL,
  `port_id` varchar(15) NOT NULL,
  `bank_id` varchar(15) NOT NULL,
  `nama_app` varchar(50) NOT NULL,
  `deskripsi_app` text NOT NULL,
  `platform` varchar(8) NOT NULL,
  `file` varchar(40) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_app` varchar(20) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(75) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `avatar` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `email_verified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PORT_2` (`port_id`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_KAT_2` (`kat_id`);

--
-- Indeks untuk tabel `paket_kat`
--
ALTER TABLE `paket_kat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_KAT` (`kat_id`);

--
-- Indeks untuk tabel `port_fitur`
--
ALTER TABLE `port_fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `port_fitur_detail`
--
ALTER TABLE `port_fitur_detail`
  ADD KEY `FK_FITUR` (`fitur_id`),
  ADD KEY `FK_DETAIL` (`port_id`);

--
-- Indeks untuk tabel `port_kat`
--
ALTER TABLE `port_kat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER` (`user_id`),
  ADD KEY `FK_PORT` (`port_id`),
  ADD KEY `FK_PAKET` (`paket_id`),
  ADD KEY `FK_BANK` (`bank_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `FK_PORT_2` FOREIGN KEY (`port_id`) REFERENCES `portfolio` (`id`);

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `FK_KAT_2` FOREIGN KEY (`kat_id`) REFERENCES `paket_kat` (`id`);

--
-- Ketidakleluasaan untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `FK_KAT` FOREIGN KEY (`kat_id`) REFERENCES `port_kat` (`id`);

--
-- Ketidakleluasaan untuk tabel `port_fitur_detail`
--
ALTER TABLE `port_fitur_detail`
  ADD CONSTRAINT `FK_DETAIL` FOREIGN KEY (`port_id`) REFERENCES `portfolio` (`id`),
  ADD CONSTRAINT `FK_FITUR` FOREIGN KEY (`fitur_id`) REFERENCES `port_fitur` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_BANK` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`id`),
  ADD CONSTRAINT `FK_PAKET` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id`),
  ADD CONSTRAINT `FK_PORT` FOREIGN KEY (`port_id`) REFERENCES `portfolio` (`id`),
  ADD CONSTRAINT `FK_USER` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

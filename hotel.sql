-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2022 pada 15.13
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(40) NOT NULL,
  `nama_tamu` varchar(35) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `tipe_kamar` text NOT NULL,
  `tgl_cekin` date NOT NULL,
  `tgl_cekout` date NOT NULL,
  `jumblah` int(30) NOT NULL,
  `status` enum('proses','cek in','cek out','batal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_tamu`, `email`, `telp`, `tipe_kamar`, `tgl_cekin`, `tgl_cekout`, `jumblah`, `status`) VALUES
(4, 'santy', 'shantynr11@gmail.com', '081233444555', 'superior', '2022-03-10', '2022-03-11', 1, 'batal'),
(10, 'lingga', 'mlinggaaliftia@gmail.com', '081233444555', 'superior', '2022-03-19', '2022-03-20', 2, 'batal'),
(14, 'talita', 'tata@gamil.com', '0812305097976', 'Vip', '2022-03-21', '2022-03-22', 1, 'cek in'),
(19, 'mahmud', 'mahmud@gmail.com', '081233444555', 'Vip', '2022-04-01', '2022-04-02', 2, 'cek out'),
(21, 'Amel', 'Amel20@gmail.com', '081233444555', 'Vip', '2022-04-04', '2022-04-05', 1, 'cek in'),
(22, 'roni', 'linga@gmail.com', '0812305097976', 'superior', '2022-04-05', '2022-04-06', 1, 'cek out'),
(25, 'chindyzahra', 'chindyzahra@gmail.com', '0812345678', 'deluxe', '2022-04-06', '2022-04-07', 1, 'proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fs_hotel`
--

CREATE TABLE `fs_hotel` (
  `id` int(16) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fs_hotel`
--

INSERT INTO `fs_hotel` (`id`, `nama_fasilitas`, `keterangan`, `gambar`) VALUES
(1, 'Kolam Renang', 'Terdapat di Lantai 1&2                                                                                                    \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n                                                         \r\n                                                         ', 'kolam.jpg'),
(2, 'Lapangan Basket', 'Terdapat di Lantai 1', 'basket.jpg'),
(3, 'Restoran', ' Berada di sebelah loby \r\n                                                         ', 'rstrn.jpg'),
(5, 'Bar', 'Lantai Paling Atas', 'bar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fs_kamar`
--

CREATE TABLE `fs_kamar` (
  `id_kamar` int(16) NOT NULL,
  `tipe_kamar` varchar(35) NOT NULL,
  `nama_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fs_kamar`
--

INSERT INTO `fs_kamar` (`id_kamar`, `tipe_kamar`, `nama_fasilitas`) VALUES
(1, 'deluxe', 'PS5\r\n                                                         '),
(2, 'superior', ' PC\r\n                                                         '),
(3, 'Vip', '                                                                                                              Kulkas dan Sofa Panjang \r\n                                                         \r\n                                                         ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(16) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `total_kamar` int(25) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `total_kamar`, `gambar`) VALUES
(1, 'duluxe', 22, 'kamar1.jpg'),
(2, 'superior', 20, 'kamar3.jpg'),
(3, 'Vip', 8, 'kamar2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_petugas` int(16) NOT NULL,
  `nama_petugas` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','resepsionis','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'admin', 'admin', 'admin', '081230997886', 'admin'),
(2, 'resepsionis', 'resepsionis', 'resepsionis', '081230997886', 'resepsionis');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `fs_hotel`
--
ALTER TABLE `fs_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fs_kamar`
--
ALTER TABLE `fs_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `fs_hotel`
--
ALTER TABLE `fs_hotel`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `fs_kamar`
--
ALTER TABLE `fs_kamar`
  MODIFY `id_kamar` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_petugas` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

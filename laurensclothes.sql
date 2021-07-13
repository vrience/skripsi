-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2021 pada 15.17
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laurensclothes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(512) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL,
  `warna` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`, `warna`) VALUES
(1, 'Walter Set', 'LAST RESTOCK!Fabric : Cotton LaceSize Measurements •TopBust : 90cm with zipper on neck sideLength : 45cmSkirtWaist : 65-75cmHighwaisted and Stretchable! Length : 40cm', 'set', 269000, 23, 'walterset.jpg', 'white'),
(2, 'Walter Set in Black', 'TopBust : 90cm with zipper on neck sideLength : 45cmSkirtWaist : 65-75cmHighwaisted and Stretchable! Length : 40cm', 'set', 289000, 23, 'waltersetblack.jpg', 'black'),
(3, 'Kaitlyn Cardi in Dusty Pink', 'Kaitlyn Cardi \r\nin Dusty Pink\r\nU can wear this one as a top or as an outer!💕\r\n\r\nSizing Details : \r\nBust 90cm | Length 40cm\r\nFabric : Polyester Knit', 'outer', 199000, 6, 'kaitlyn.jpg', 'pink'),
(4, 'Shierly Crop Shirt', 'Shierly Crop Shirt\r\n\r\nFabric : Chiffon - (Lightweight, Easy)\r\nFit to L\r\nBust 106cm, Length 53cm', 'top', 159000, 6, 'shierly.jpg', 'white'),
(5, 'Paula Outer', 'Outer. Premium Cotton.Bust 120cm // Length 90cm', 'Outer', 159000, 4, 'paula.jpg', 'brown'),
(6, 'Emily Dress in Lime', 'Versatile Dress! 4 Ways Wear! \r\n• With Belt\r\n• Without Belt\r\n• As a Top\r\n• As an Outer\r\n\r\nSize Measurements :\r\nBust 90cm | Length 95cm\r\n\r\nFabric : Silk Satin with Extra Lining (Anti Nerawang)', 'dress', 269000, 7, 'emilylime.jpg', 'green'),
(8, 'Frenchie the Corgi Masker', '- Fabric : Cotton with embroidery details\r\n- Color : Cream\r\n- Size : Height 13cm • Width 15cm\r\n- Earloop\r\n- Two ply\r\n- With Filter/Tissue Slot', 'accessories', 32000, 5, 'frenchie.jpg', 'cream'),
(9, 'Eliza the Merdog Mask', '- Fabric : Cotton with embroidery details- Color : Army- Size : Height 13cm • Width 15cm- Earloop- Two plyWith Filter/Tissue Slot', 'accessories', 29000, 12, 'eliza.jpg', 'pink'),
(10, 'Richelle Crop Shirt', 'Coz everything is better in plaid!❤️\r\n\r\nDetails : \r\nRichelle Crop Shirt\r\n\r\nFabric : Cotton Flannel (Soft and Warm) - Premium Quality 💯 \r\nFit to L\r\nBust 106cm, Length 53cm', 'top', 159000, 3, 'richelle.jpg', 'red'),
(11, 'Roger Set in Army', 'Comes with a detachable belt.  Fabric : Import Linen   Size Measurements :  Top  Bust : 85-95cm | Length : 50cm Bottom  Waist : 64-80cm (stretchable with rubber) | Length : 35cm', 'set', 279000, 5, 'rogerarmy.jpg', 'green'),
(12, 'Roger Set in Baby Blue', 'Comes with a detachable belt.  Fabric : Import Linen   Size Measurements :  Top  Bust : 90-100cm | Length : 50cm Bottom  Waist : 64-80cm (stretchable with rubber) | Length : 35cm', 'set', 279000, 6, 'rogerblue.jpg', 'blue'),
(14, 'Li Yen Dress in Coral', 'Fabric : Cotton Crinkle (Bahan adem dan enak banget) Sizing Details :  Bust : 90cm | Length : 90cm', 'dress', 259000, 3, 'liyen2.jpg', 'red'),
(16, '', '', 'Top', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(7, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-24 16:35:42', '2021-04-25 16:35:42'),
(8, 'Paula Carmila Liparissa', 'Kelapa Cengkir', '2021-04-24 17:21:25', '2021-04-25 17:21:25'),
(9, 'Paula Carmila Liparissa', 'Kelapa Cengkir', '2021-04-24 17:30:52', '2021-04-25 17:30:52'),
(10, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-24 21:55:49', '2021-04-25 21:55:49'),
(11, 'Paula Carmila Liparissa', 'Kelapa Cengkir', '2021-04-25 13:06:02', '2021-04-26 13:06:02'),
(12, 'Paula Carmila Liparissa', 'Harapan Indah', '2021-04-25 13:06:32', '2021-04-26 13:06:32'),
(13, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-25 13:09:49', '2021-04-26 13:09:49'),
(14, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-25 15:39:40', '2021-04-26 15:39:40'),
(15, '', '', '2021-04-25 17:38:18', '2021-04-26 17:38:18'),
(16, '', '', '2021-04-25 17:38:33', '2021-04-26 17:38:33'),
(17, '', '', '2021-04-25 17:43:44', '2021-04-26 17:43:44'),
(18, '', '', '2021-04-25 17:52:44', '2021-04-26 17:52:44'),
(19, '', '', '2021-04-25 17:53:00', '2021-04-26 17:53:00'),
(20, '', '', '2021-04-25 17:58:25', '2021-04-26 17:58:25'),
(21, 'Paula Carmila Liparissa', 'Harapan Indah', '2021-04-25 18:08:21', '2021-04-26 18:08:21'),
(22, 'Paula Carmila Liparissa', 'Kelapa Cengkir', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Juvrience Marcius Lim', 'Harapan Indah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Juvrience Marcius Lim', 'Harapan Indah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Juvrience Marcius Lim', 'Harapan Indah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Juvrience Marcius Lim', 'Harapan Indah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Juvrience Marcius Lim', 'Harapan Indah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-25 21:07:28', '2021-04-26 21:07:28'),
(29, '', '', '2021-04-25 21:07:42', '2021-04-26 21:07:42'),
(30, '', '', '2021-04-25 21:09:13', '2021-04-26 21:09:13'),
(31, '', '', '2021-04-25 21:10:52', '2021-04-26 21:10:52'),
(32, 'Paula Carmila Liparissa', '', '2021-04-25 21:11:03', '2021-04-26 21:11:03'),
(33, '', '', '2021-04-25 21:12:00', '2021-04-26 21:12:00'),
(34, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-25 21:12:13', '2021-04-26 21:12:13'),
(35, '', '', '2021-04-25 21:13:07', '2021-04-26 21:13:07'),
(36, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-25 21:13:14', '2021-04-26 21:13:14'),
(37, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-25 21:13:18', '2021-04-26 21:13:18'),
(38, 'Paula Carmila Liparissa', 'Harapan Indah', '2021-04-25 21:13:45', '2021-04-26 21:13:45'),
(39, '', '', '2021-04-25 21:14:24', '2021-04-26 21:14:24'),
(40, '', '', '2021-04-25 21:32:40', '2021-04-26 21:32:40'),
(41, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-25 21:32:46', '2021-04-26 21:32:46'),
(42, 'Paula Carmila Liparissa', 'Harapan Indah', '2021-04-25 21:32:51', '2021-04-26 21:32:51'),
(43, '', '', '2021-04-25 22:03:19', '2021-04-26 22:03:19'),
(44, 'Juvrience Marcius Lim', 'Kelapa Cengkir', '2021-04-25 22:03:25', '2021-04-26 22:03:25'),
(45, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-27 18:19:07', '2021-04-28 18:19:07'),
(46, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-28 13:07:12', '2021-04-29 13:07:12'),
(47, 'Juvrience Marcius Lim', 'Harapan Indah', '2021-04-30 12:03:08', '2021-05-01 12:03:08'),
(48, 'Paula Carmila Liparissa', 'Kelapa Cengkir', '2021-04-30 13:07:40', '2021-05-01 13:07:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(50) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(13, 7, 1, 'Walter Set', 1, 269000, ''),
(14, 7, 2, 'Walter Set in Black', 3, 289000, ''),
(15, 7, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, ''),
(16, 7, 6, 'Emily Dress in Lime', 1, 269000, ''),
(17, 7, 8, 'Frenchie the Corgi Masker', 2, 32000, ''),
(18, 7, 10, 'Richelle Crop Shirt', 1, 159000, ''),
(19, 8, 5, 'Paula Outer', 1, 159000, ''),
(20, 8, 2, 'Walter Set in Black', 1, 289000, ''),
(21, 8, 1, 'Walter Set', 1, 269000, ''),
(22, 8, 4, 'Shierly Crop Shirt', 1, 159000, ''),
(23, 8, 6, 'Emily Dress in Lime', 1, 269000, ''),
(24, 8, 11, 'Roger Set in Army', 1, 279000, ''),
(25, 8, 12, 'Roger Set in Baby Blue', 1, 279000, ''),
(26, 8, 14, 'Li Yen Dress in Coral', 1, 259000, ''),
(27, 8, 8, 'Frenchie the Corgi Masker', 1, 32000, ''),
(28, 8, 10, 'Richelle Crop Shirt', 1, 159000, ''),
(29, 10, 4, 'Shierly Crop Shirt', 1, 159000, ''),
(30, 10, 5, 'Paula Outer', 1, 159000, ''),
(31, 10, 9, 'Eliza the Merdog Mask', 2, 29000, ''),
(32, 10, 1, 'Walter Set', 1, 269000, ''),
(33, 11, 1, 'Walter Set', 2, 269000, ''),
(34, 12, 2, 'Walter Set in Black', 3, 289000, ''),
(35, 13, 2, 'Walter Set in Black', 1, 289000, ''),
(36, 14, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, ''),
(37, 15, 1, 'Walter Set', 1, 269000, ''),
(38, 15, 2, 'Walter Set in Black', 1, 289000, ''),
(39, 16, 1, 'Walter Set', 1, 269000, ''),
(40, 16, 2, 'Walter Set in Black', 2, 289000, ''),
(41, 17, 1, 'Walter Set', 1, 269000, ''),
(42, 17, 2, 'Walter Set in Black', 1, 289000, ''),
(43, 18, 1, 'Walter Set', 1, 269000, ''),
(44, 19, 2, 'Walter Set in Black', 3, 289000, ''),
(45, 20, 1, 'Walter Set', 1, 269000, ''),
(46, 20, 2, 'Walter Set in Black', 1, 289000, ''),
(47, 21, 2, 'Walter Set in Black', 2, 289000, ''),
(48, 21, 1, 'Walter Set', 1, 269000, ''),
(49, 28, 2, 'Walter Set in Black', 2, 289000, ''),
(50, 29, 1, 'Walter Set', 1, 269000, ''),
(51, 29, 2, 'Walter Set in Black', 1, 289000, ''),
(52, 30, 1, 'Walter Set', 1, 269000, ''),
(53, 31, 1, 'Walter Set', 1, 269000, ''),
(54, 32, 1, 'Walter Set', 1, 269000, ''),
(55, 33, 1, 'Walter Set', 1, 269000, ''),
(56, 34, 1, 'Walter Set', 1, 269000, ''),
(57, 35, 1, 'Walter Set', 1, 269000, ''),
(58, 35, 2, 'Walter Set in Black', 1, 289000, ''),
(59, 36, 1, 'Walter Set', 1, 269000, ''),
(60, 36, 2, 'Walter Set in Black', 1, 289000, ''),
(61, 37, 1, 'Walter Set', 1, 269000, ''),
(62, 37, 2, 'Walter Set in Black', 1, 289000, ''),
(63, 38, 1, 'Walter Set', 1, 269000, ''),
(64, 39, 1, 'Walter Set', 1, 269000, ''),
(65, 40, 2, 'Walter Set in Black', 1, 289000, ''),
(66, 41, 2, 'Walter Set in Black', 1, 289000, ''),
(67, 42, 2, 'Walter Set in Black', 1, 289000, ''),
(68, 43, 1, 'Walter Set', 1, 269000, ''),
(69, 44, 1, 'Walter Set', 1, 269000, ''),
(70, 45, 1, 'Walter Set', 1, 269000, ''),
(71, 45, 2, 'Walter Set in Black', 1, 289000, ''),
(72, 46, 1, 'Walter Set', 1, 269000, ''),
(73, 46, 2, 'Walter Set in Black', 1, 289000, ''),
(74, 46, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, ''),
(75, 47, 4, 'Shierly Crop Shirt', 1, 159000, ''),
(76, 47, 2, 'Walter Set in Black', 1, 289000, ''),
(77, 48, 2, 'Walter Set in Black', 1, 289000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
UPDATE tb_barang SET stok = stok-NEW.jumlah
WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'user', 'user', 'user', 2),
(3, 'Juvrience Marcius Lim', 'vrience', '123', 2),
(4, 'tono', 'tono', 'tono', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

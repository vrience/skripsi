-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2021 pada 09.10
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
-- Struktur dari tabel `log_kriteria`
--

CREATE TABLE `log_kriteria` (
  `id` int(11) NOT NULL,
  `s_kenyamanan` int(11) NOT NULL,
  `s_harga` int(11) NOT NULL,
  `s_formalitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `warna` varchar(120) NOT NULL,
  `r_kenyamanan` int(10) NOT NULL,
  `r_harga` int(10) NOT NULL,
  `r_formalitas` int(10) NOT NULL,
  `c_review` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`, `warna`, `r_kenyamanan`, `r_harga`, `r_formalitas`, `c_review`) VALUES
(1, 'Walter Set', 'LAST RESTOCK!Fabric : Cotton LaceSize Measurements •TopBust : 90cm with zipper on neck sideLength : 45cmSkirtWaist : 65-75cmHighwaisted and Stretchable! Length : 40cm', 'Set', 269000, 13, 'walterset1.jpg', 'White', 5, 3, 5, 1),
(2, 'Walter Set in Black', 'TopBust : 90cm with zipper on neck sideLength : 45cmSkirtWaist : 65-75cmHighwaisted and Stretchable! Length : 40cm', 'set', 289000, 12, 'waltersetblack.jpg', 'black', 5, 3, 5, 1),
(3, 'Kaitlyn Cardi in Dusty Pink', 'Kaitlyn Cardi \r\nin Dusty Pink\r\nU can wear this one as a top or as an outer!💕\r\n\r\nSizing Details : \r\nBust 90cm | Length 40cm\r\nFabric : Polyester Knit', 'outer', 199000, 1, 'kaitlyn.jpg', 'pink', 9, 5, 5, 1),
(4, 'Shierly Crop Shirt', 'Shierly Crop ShirtFabric : Chiffon - (Lightweight, Easy)Fit to LBust 106cm, Length 53cm', 'top', 159000, 15, 'shierly.jpg', 'white', 5, 9, 3, 1),
(5, 'Paula Outer', 'Outer. Premium Cotton.Bust 120cm // Length 90cm', 'Outer', 159000, 4, 'paula.jpg', 'brown', 7, 7, 9, 1),
(6, 'Emily Dress in Lime', 'Versatile Dress! 4 Ways Wear! \r\n• With Belt\r\n• Without Belt\r\n• As a Top\r\n• As an Outer\r\n\r\nSize Measurements :\r\nBust 90cm | Length 95cm\r\n\r\nFabric : Silk Satin with Extra Lining (Anti Nerawang)', 'dress', 269000, 6, 'emilylime.jpg', 'green', 7, 7, 7, 1),
(8, 'Frenchie the Corgi Masker', '- Fabric : Cotton with embroidery details\r\n- Color : Cream\r\n- Size : Height 13cm • Width 15cm\r\n- Earloop\r\n- Two ply\r\n- With Filter/Tissue Slot', 'accessories', 32000, 5, 'frenchie.jpg', 'cream', 5, 9, 3, 1),
(9, 'Eliza the Merdog Mask', '- Fabric : Cotton with embroidery details- Color : Army- Size : Height 13cm • Width 15cm- Earloop- Two plyWith Filter/Tissue Slot', 'accessories', 29000, 12, 'eliza.jpg', 'pink', 5, 9, 3, 1),
(10, 'Richelle Crop Shirt', 'Coz everything is better in plaid!❤️\r\n\r\nDetails : \r\nRichelle Crop Shirt\r\n\r\nFabric : Cotton Flannel (Soft and Warm) - Premium Quality 💯 \r\nFit to L\r\nBust 106cm, Length 53cm', 'top', 159000, 3, 'richelle.jpg', 'red', 7, 7, 3, 1),
(11, 'Roger Set in Army', 'Comes with a detachable belt.  Fabric : Import Linen   Size Measurements :  Top  Bust : 85-95cm | Length : 50cm Bottom  Waist : 64-80cm (stretchable with rubber) | Length : 35cm', 'set', 279000, 5, 'rogerarmy.jpg', 'green', 7, 3, 3, 1),
(12, 'Roger Set in Baby Blue', 'Comes with a detachable belt.  Fabric : Import Linen   Size Measurements :  Top  Bust : 90-100cm | Length : 50cm Bottom  Waist : 64-80cm (stretchable with rubber) | Length : 35cm', 'set', 279000, 6, 'rogerblue.jpg', 'blue', 7, 3, 3, 1),
(13, 'Li Yen Dress in Coral', 'Fabric : Cotton Crinkle (Bahan adem dan enak banget) Sizing Details :  Bust : 90cm | Length : 90cm', 'dress', 259000, 3, 'liyen2.jpg', 'red', 7, 5, 9, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `no_telp` int(25) NOT NULL,
  `kurir` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `no_telp`, `kurir`, `bank`, `tgl_pesan`, `batas_bayar`) VALUES
(64, 'test data', 'cengkir', 9876513, 'JNE', 'BCA - 543221', '2021-07-18 13:43:21', '2021-07-19 13:43:21');

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
  `pilihan` text NOT NULL,
  `is_rated` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`, `is_rated`) VALUES
(13, 7, 1, 'Walter Set', 1, 269000, '', 0),
(14, 7, 2, 'Walter Set in Black', 3, 289000, '', 0),
(15, 7, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, '', 0),
(16, 7, 6, 'Emily Dress in Lime', 1, 269000, '', 0),
(17, 7, 8, 'Frenchie the Corgi Masker', 2, 32000, '', 0),
(18, 7, 10, 'Richelle Crop Shirt', 1, 159000, '', 0),
(19, 8, 5, 'Paula Outer', 1, 159000, '', 0),
(20, 8, 2, 'Walter Set in Black', 1, 289000, '', 0),
(21, 8, 1, 'Walter Set', 1, 269000, '', 0),
(22, 8, 4, 'Shierly Crop Shirt', 1, 159000, '', 0),
(23, 8, 6, 'Emily Dress in Lime', 1, 269000, '', 0),
(24, 8, 11, 'Roger Set in Army', 1, 279000, '', 0),
(25, 8, 12, 'Roger Set in Baby Blue', 1, 279000, '', 0),
(26, 8, 14, 'Li Yen Dress in Coral', 1, 259000, '', 0),
(27, 8, 8, 'Frenchie the Corgi Masker', 1, 32000, '', 0),
(28, 8, 10, 'Richelle Crop Shirt', 1, 159000, '', 0),
(29, 10, 4, 'Shierly Crop Shirt', 1, 159000, '', 0),
(30, 10, 5, 'Paula Outer', 1, 159000, '', 0),
(31, 10, 9, 'Eliza the Merdog Mask', 2, 29000, '', 0),
(32, 10, 1, 'Walter Set', 1, 269000, '', 0),
(33, 11, 1, 'Walter Set', 2, 269000, '', 0),
(34, 12, 2, 'Walter Set in Black', 3, 289000, '', 0),
(35, 13, 2, 'Walter Set in Black', 1, 289000, '', 0),
(36, 14, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, '', 0),
(37, 15, 1, 'Walter Set', 1, 269000, '', 0),
(38, 15, 2, 'Walter Set in Black', 1, 289000, '', 0),
(39, 16, 1, 'Walter Set', 1, 269000, '', 0),
(40, 16, 2, 'Walter Set in Black', 2, 289000, '', 0),
(41, 17, 1, 'Walter Set', 1, 269000, '', 0),
(42, 17, 2, 'Walter Set in Black', 1, 289000, '', 0),
(43, 18, 1, 'Walter Set', 1, 269000, '', 0),
(44, 19, 2, 'Walter Set in Black', 3, 289000, '', 0),
(45, 20, 1, 'Walter Set', 1, 269000, '', 0),
(46, 20, 2, 'Walter Set in Black', 1, 289000, '', 0),
(47, 21, 2, 'Walter Set in Black', 2, 289000, '', 0),
(48, 21, 1, 'Walter Set', 1, 269000, '', 0),
(49, 28, 2, 'Walter Set in Black', 2, 289000, '', 0),
(50, 29, 1, 'Walter Set', 1, 269000, '', 0),
(51, 29, 2, 'Walter Set in Black', 1, 289000, '', 0),
(52, 30, 1, 'Walter Set', 1, 269000, '', 0),
(53, 31, 1, 'Walter Set', 1, 269000, '', 0),
(54, 32, 1, 'Walter Set', 1, 269000, '', 0),
(55, 33, 1, 'Walter Set', 1, 269000, '', 0),
(56, 34, 1, 'Walter Set', 1, 269000, '', 0),
(57, 35, 1, 'Walter Set', 1, 269000, '', 0),
(58, 35, 2, 'Walter Set in Black', 1, 289000, '', 0),
(59, 36, 1, 'Walter Set', 1, 269000, '', 0),
(60, 36, 2, 'Walter Set in Black', 1, 289000, '', 0),
(61, 37, 1, 'Walter Set', 1, 269000, '', 0),
(62, 37, 2, 'Walter Set in Black', 1, 289000, '', 0),
(63, 38, 1, 'Walter Set', 1, 269000, '', 0),
(64, 39, 1, 'Walter Set', 1, 269000, '', 0),
(65, 40, 2, 'Walter Set in Black', 1, 289000, '', 0),
(66, 41, 2, 'Walter Set in Black', 1, 289000, '', 0),
(67, 42, 2, 'Walter Set in Black', 1, 289000, '', 0),
(68, 43, 1, 'Walter Set', 1, 269000, '', 0),
(69, 44, 1, 'Walter Set', 1, 269000, '', 0),
(70, 45, 1, 'Walter Set', 1, 269000, '', 0),
(71, 45, 2, 'Walter Set in Black', 1, 289000, '', 0),
(72, 46, 1, 'Walter Set', 1, 269000, '', 0),
(73, 46, 2, 'Walter Set in Black', 1, 289000, '', 0),
(74, 46, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, '', 0),
(75, 47, 4, 'Shierly Crop Shirt', 1, 159000, '', 0),
(76, 47, 2, 'Walter Set in Black', 1, 289000, '', 0),
(77, 48, 2, 'Walter Set in Black', 1, 289000, '', 0),
(78, 49, 2, 'Walter Set in Black', 2, 289000, '', 0),
(79, 50, 2, 'Walter Set in Black', 2, 289000, '', 0),
(80, 51, 2, 'Walter Set in Black', 1, 289000, '', 0),
(81, 52, 4, 'Shierly Crop Shirt', 1, 159000, '', 0),
(82, 53, 4, 'Shierly Crop Shirt', 1, 159000, '', 0),
(83, 54, 4, 'Shierly Crop Shirt', 1, 159000, '', 0),
(84, 55, 4, 'Shierly Crop Shirt', 1, 159000, '', 0),
(85, 55, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, '', 0),
(86, 56, 4, 'Shierly Crop Shirt', 1, 159000, '', 0),
(87, 56, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, '', 0),
(88, 57, 2, 'Walter Set in Black', 1, 289000, '', 0),
(89, 58, 2, 'Walter Set in Black', 1, 289000, '', 0),
(90, 59, 4, 'Shierly Crop Shirt', 1, 159000, '', 0),
(91, 59, 6, 'Emily Dress in Lime', 1, 269000, '', 0),
(92, 60, 2, 'Walter Set in Black', 1, 289000, '', 0),
(93, 60, 1, 'Walter Set', 1, 269000, '', 0),
(94, 61, 4, 'Shierly Crop Shirt', 1, 159000, '', 0),
(95, 61, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, '', 0),
(96, 61, 2, 'Walter Set in Black', 1, 289000, '', 0),
(97, 62, 1, 'Walter Set', 1, 269000, '', 0),
(98, 62, 2, 'Walter Set in Black', 1, 289000, '', 0),
(99, 63, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, '', 0),
(100, 64, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, '', 0),
(101, 64, 2, 'Walter Set in Black', 1, 289000, '', 0);

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
(4, 'tono', 'tono', 'tono', 2),
(5, 'test', 'test', 'test', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log_kriteria`
--
ALTER TABLE `log_kriteria`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `log_kriteria`
--
ALTER TABLE `log_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2021 pada 12.30
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
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `warna` varchar(120) NOT NULL,
  `r_kenyamanan` int(11) NOT NULL,
  `r_harga` int(11) NOT NULL,
  `r_formalitas` int(11) NOT NULL,
  `c_review` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`, `warna`, `r_kenyamanan`, `r_harga`, `r_formalitas`, `c_review`) VALUES
(1, 'Walter Set', 'LAST RESTOCK!Fabric : Cotton LaceSize Measurements •TopBust : 90cm with zipper on neck sideLength : 45cmSkirtWaist : 65-75cmHighwaisted and Stretchable! Length : 40cm', 'Set', 269000, 13, 'walterset1.jpg', 'White', 5, 5, 5, 1),
(2, 'Walter Set in Black', 'TopBust : 90cm with zipper on neck sideLength : 45cmSkirtWaist : 65-75cmHighwaisted and Stretchable! Length : 40cm', 'set', 289000, 9, 'waltersetblack.jpg', 'black', 5, 3, 5, 1),
(3, 'Kaitlyn Cardi in Dusty Pink', 'Kaitlyn Cardi in Dusty PinkU can wear this one as a top or as an outer!?Sizing Details : Bust 90cm | Length 40cmFabric : Polyester Knit', 'outer', 199000, 15, 'kaitlyn.jpg', 'White', 7, 7, 7, 1),
(4, 'Shierly Crop Shirt', 'Shierly Crop ShirtFabric : Chiffon - (Lightweight, Easy)Fit to LBust 106cm, Length 53cm', 'top', 159000, 15, 'shierly.jpg', 'white', 5, 9, 3, 1),
(5, 'Paula Outer', 'Outer. Premium Cotton.Bust 120cm // Length 90cm', 'Outer', 159000, 3, 'paula.jpg', 'brown', 7, 7, 9, 1),
(6, 'Emily Dress in Lime', 'Versatile Dress! 4 Ways Wear! \r\n• With Belt\r\n• Without Belt\r\n• As a Top\r\n• As an Outer\r\n\r\nSize Measurements :\r\nBust 90cm | Length 95cm\r\n\r\nFabric : Silk Satin with Extra Lining (Anti Nerawang)', 'dress', 269000, 5, 'emilylime.jpg', 'green', 7, 7, 7, 1),
(8, 'Frenchie the Corgi Masker', '- Fabric : Cotton with embroidery details\r\n- Color : Cream\r\n- Size : Height 13cm • Width 15cm\r\n- Earloop\r\n- Two ply\r\n- With Filter/Tissue Slot', 'accessories', 32000, 5, 'frenchie.jpg', 'cream', 5, 9, 3, 1),
(9, 'Eliza the Merdog Mask', '- Fabric : Cotton with embroidery details- Color : Army- Size : Height 13cm • Width 15cm- Earloop- Two plyWith Filter/Tissue Slot', 'accessories', 29000, 12, 'eliza.jpg', 'pink', 5, 9, 3, 1),
(10, 'Richelle Crop Shirt', 'Coz everything is better in plaid!❤️\r\n\r\nDetails : \r\nRichelle Crop Shirt\r\n\r\nFabric : Cotton Flannel (Soft and Warm) - Premium Quality 💯 \r\nFit to L\r\nBust 106cm, Length 53cm', 'top', 159000, 3, 'richelle.jpg', 'red', 7, 7, 3, 1),
(11, 'Roger Set in Army', 'Comes with a detachable belt.  Fabric : Import Linen   Size Measurements :  Top  Bust : 85-95cm | Length : 50cm Bottom  Waist : 64-80cm (stretchable with rubber) | Length : 35cm', 'set', 279000, 5, 'rogerarmy.jpg', 'green', 7, 3, 3, 1),
(12, 'Roger Set in Baby Blue', 'Comes with a detachable belt.  Fabric : Import Linen   Size Measurements :  Top  Bust : 90-100cm | Length : 50cm Bottom  Waist : 64-80cm (stretchable with rubber) | Length : 35cm', 'set', 279000, 6, 'rogerblue.jpg', 'blue', 7, 3, 3, 1),
(13, 'Li Yen Dress in Coral', 'Fabric : Cotton Crinkle (Bahan adem dan enak banget) Sizing Details :  Bust : 90cm | Length : 90cm', 'dress', 259000, 3, 'liyen2.jpg', 'red', 5, 5, 7, 1),
(14, 'Test', 'coba coba saja', 'Top', 20000, 1, 'IMG_01171.JPG', 'White', 9, 9, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `kurir` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `no_telp`, `kurir`, `bank`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'paula', 'cengkir', 9876513, 'JNE', 'BCA - 543221', '2021-07-22 20:03:54', '2021-07-23 20:03:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_rated` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `is_rated`) VALUES
(1, 1, 2, 'Walter Set in Black', 2, 289000, 0),
(2, 1, 3, 'Kaitlyn Cardi in Dusty Pink', 1, 199000, 0),
(3, 1, 6, 'Emily Dress in Lime', 1, 269000, 0),
(4, 1, 5, 'Paula Outer', 1, 159000, 0);

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
  `password` varchar(255) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin1805', 1),
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
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

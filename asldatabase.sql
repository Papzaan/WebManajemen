-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2021 pada 08.31
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asldatabase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `no_telp`, `alamat`, `jenis_kelamin`, `email`) VALUES
(2, 'Mahesa Darma Satria', '08827409069', 'Serbajadi 1, Natar, Lampung Selatan, Lampung', 'laki - laki', 'mahesadarmasatria@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_sup` varchar(30) NOT NULL,
  `nama_kategori` varchar(25) DEFAULT NULL,
  `tgl_masuk` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_sup`, `nama_kategori`, `tgl_masuk`, `jumlah`, `harga`) VALUES
(7, 'PT. Merak Jaya Abadi', 'BB+ 300ml', '2021-06-01', 80, '500000'),
(8, 'PT. Merak Jaya Abadi', 'Nanoxy 300ml', '2021-06-01', 100, '168000'),
(27, 'PT. Merak Jaya Abadi', 'Nanoxy 500ml', '2021-09-14', 80, '1000000'),
(28, 'PT. Merak Jaya Abadi', 'Nanoxy 500ml', '2021-09-14', 30, '68000'),
(29, 'PT. Merak Jaya Abadi', 'BB+ 300ml', '2021-09-14', 50, '68000'),
(30, 'PT. Merak Jaya Abadi', 'Nanoxy 300ml', '2021-09-14', 25, '1000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_mitra`
--

CREATE TABLE `barang_mitra` (
  `id_barmit` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `status` enum('lunas','belum lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_admin`
--

CREATE TABLE `catatan_admin` (
  `id_catat` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nik_customer` varchar(20) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `tgl_jual` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `alamat_trank` varchar(100) NOT NULL,
  `status` enum('lunas','belum bayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `catatan_admin`
--

INSERT INTO `catatan_admin` (`id_catat`, `id_admin`, `nik_customer`, `nama_kategori`, `tgl_jual`, `jumlah`, `harga`, `alamat_trank`, `status`) VALUES
(2, 2, '1802010101', 'BB+ 300ml', '2021-09-02', 20, '500000', 'jakarta', 'lunas'),
(7, 2, '1928293938', 'Nanoxy 500ml', '0000-00-00', 30, '68000', 'Serang, Banten, Jawa', 'lunas'),
(8, 2, '1928293938', 'Nanoxy 500ml', '0000-00-00', 50, '1000000', 'Serang, Banten, Jawa', 'lunas'),
(9, 2, '1802010101', 'Nanoxy 300ml', '0000-00-00', 30, '68000', 'Serang, Banten, Jawa', 'lunas'),
(10, 2, '1802010101', 'BB+ 300ml', '0000-00-00', 25, '1000000', 'Serang, Banten, Jawa', 'lunas'),
(11, 2, '1928293938', 'BB+ 300ml', '2021-09-03', 50, '1000000', 'Serang, Banten, Jawa', 'lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `nik_customer` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto_ktp` varchar(30) NOT NULL,
  `foto_customer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`nik_customer`, `nama`, `jenis_kelamin`, `no_telp`, `alamat`, `foto_ktp`, `foto_customer`) VALUES
('1802010101', 'farida', 'perempuan', '088812234344', 'jakarta selatan', 'faridaktp.jpg', 'farida.jpg'),
('1928293938', 'Asril Rinaldi', 'laki - laki', '0982838392', 'palembang', 'fotoktpasril.jpg', 'fotoasril.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `nama_kategori` varchar(30) NOT NULL,
  `harga_dusan` varchar(30) NOT NULL,
  `stok` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`nama_kategori`, `harga_dusan`, `stok`) VALUES
('BB+ 300ml', '168000', 55),
('Nanoxy 300ml', '96000', 95),
('Nanoxy 500ml', '78000', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') DEFAULT NULL COMMENT '1=laki-laki, 2=perempuan',
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `nama`, `nik`, `no_telp`, `alamat`, `jenis_kelamin`, `email`) VALUES
(2, 'Imam Haris syafaat', '180027199271927', '08282939282', 'Bandar jaya, lampung tengah, Lampung', 'laki - laki', 'imamharis@gmail.com'),
(13, 'Oktaviani Rohayu', '18203830290493', '0829273392', 'Serang, Banten, Jawa', 'perempuan', 'via@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_sales` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `alamat_trank` varchar(45) NOT NULL,
  `status` enum('setuju','belum setuju') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_mitra`
--

CREATE TABLE `penjualan_mitra` (
  `id_penjumit` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_barmit` int(11) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tgl_jual` date NOT NULL,
  `harga` int(30) NOT NULL,
  `alamat_trank` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_mitra`
--

CREATE TABLE `pesanan_mitra` (
  `id_pesmit` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `utang` int(11) NOT NULL,
  `bayar` enum('0','1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan_mitra`
--

INSERT INTO `pesanan_mitra` (`id_pesmit`, `id_mitra`, `nama_kategori`, `tgl_pesan`, `jumlah`, `harga`, `utang`, `bayar`) VALUES
(1, 2, 'BB+ 300ml', '2021-09-01', 20, '50000', 0, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_sales`
--

CREATE TABLE `pesanan_sales` (
  `id_pessal` int(11) NOT NULL,
  `id_sales` int(11) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `utang` int(11) NOT NULL,
  `bayar` enum('0','1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan_sales`
--

INSERT INTO `pesanan_sales` (`id_pessal`, `id_sales`, `nama_kategori`, `tgl_pesan`, `jumlah`, `harga`, `utang`, `bayar`) VALUES
(1, 2, 'Nanoxy 500ml', '2021-09-01', 20, '78000', 30000, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id_sales`, `nama`, `nik`, `no_telp`, `alamat`, `jenis_kelamin`, `email`) VALUES
(2, 'aan sanova', '180027199271927', '0883928199208', 'Sukabumi, Bandar Lampung, Lampung', 'laki - laki', 'aansanova@gmail.com'),
(3, 'Reza aji pratama', '360201827292', '08823747383', 'bogor, jawa', 'laki - laki', 'reza@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplayer`
--

CREATE TABLE `suplayer` (
  `nama_sup` varchar(30) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suplayer`
--

INSERT INTO `suplayer` (`nama_sup`, `no_telp`, `alamat`) VALUES
('PT. IAM TECH', '082323232323', 'Lampung Tengah'),
('PT. Merak Jaya Abadi', '0821658920892', 'Jawa'),
('PT. Sejahtera', '999999', 'indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('1','2','3') NOT NULL COMMENT '1=Admin,2=Mitra,3=Sales'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`email`, `password`, `status`) VALUES
('aansanova@gmail.com', '84c1429608e310ce25524b29c4027934', '3'),
('imamharis@gmail.com', '4ec5bd0e06c9aeb02bec530ac3ad617d', '2'),
('mahesadarmasatria@gmail.com', '3051085ddce70013d6c496bd86b4dbe1', '1'),
('reza@gmail.com', '3ed6e995474bc6dddef7a6fc9b97c965', '3'),
('via@gmail.com', 'e5aef89fdd6afdd63e0114c852b0f74c', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_sup` (`nama_sup`),
  ADD KEY `nama` (`nama_kategori`);

--
-- Indeks untuk tabel `barang_mitra`
--
ALTER TABLE `barang_mitra`
  ADD PRIMARY KEY (`id_barmit`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indeks untuk tabel `catatan_admin`
--
ALTER TABLE `catatan_admin`
  ADD PRIMARY KEY (`id_catat`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_customer` (`nik_customer`),
  ADD KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`nik_customer`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`nama_kategori`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_sales` (`id_sales`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `penjualan_mitra`
--
ALTER TABLE `penjualan_mitra`
  ADD PRIMARY KEY (`id_penjumit`),
  ADD KEY `id_mitra` (`id_mitra`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_barmit` (`id_barmit`);

--
-- Indeks untuk tabel `pesanan_mitra`
--
ALTER TABLE `pesanan_mitra`
  ADD PRIMARY KEY (`id_pesmit`),
  ADD KEY `nama_mitra` (`id_mitra`),
  ADD KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `pesanan_sales`
--
ALTER TABLE `pesanan_sales`
  ADD PRIMARY KEY (`id_pessal`),
  ADD KEY `id_sales` (`id_sales`),
  ADD KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indeks untuk tabel `suplayer`
--
ALTER TABLE `suplayer`
  ADD PRIMARY KEY (`nama_sup`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `barang_mitra`
--
ALTER TABLE `barang_mitra`
  MODIFY `id_barmit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `catatan_admin`
--
ALTER TABLE `catatan_admin`
  MODIFY `id_catat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penjualan_mitra`
--
ALTER TABLE `penjualan_mitra`
  MODIFY `id_penjumit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan_mitra`
--
ALTER TABLE `pesanan_mitra`
  MODIFY `id_pesmit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan_sales`
--
ALTER TABLE `pesanan_sales`
  MODIFY `id_pessal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`nama_sup`) REFERENCES `suplayer` (`nama_sup`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`);

--
-- Ketidakleluasaan untuk tabel `barang_mitra`
--
ALTER TABLE `barang_mitra`
  ADD CONSTRAINT `barang_mitra_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`);

--
-- Ketidakleluasaan untuk tabel `catatan_admin`
--
ALTER TABLE `catatan_admin`
  ADD CONSTRAINT `catatan_admin_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `catatan_admin_ibfk_2` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`),
  ADD CONSTRAINT `catatan_admin_ibfk_3` FOREIGN KEY (`nik_customer`) REFERENCES `customer` (`nik_customer`);

--
-- Ketidakleluasaan untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `mitra_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `sales` (`id_sales`),
  ADD CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `penjualan_mitra`
--
ALTER TABLE `penjualan_mitra`
  ADD CONSTRAINT `penjualan_mitra_ibfk_1` FOREIGN KEY (`id_barmit`) REFERENCES `barang_mitra` (`id_barmit`),
  ADD CONSTRAINT `penjualan_mitra_ibfk_2` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`),
  ADD CONSTRAINT `penjualan_mitra_ibfk_3` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Ketidakleluasaan untuk tabel `pesanan_mitra`
--
ALTER TABLE `pesanan_mitra`
  ADD CONSTRAINT `pesanan_mitra_ibfk_1` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`),
  ADD CONSTRAINT `pesanan_mitra_ibfk_2` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`);

--
-- Ketidakleluasaan untuk tabel `pesanan_sales`
--
ALTER TABLE `pesanan_sales`
  ADD CONSTRAINT `pesanan_sales_ibfk_1` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`),
  ADD CONSTRAINT `pesanan_sales_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `sales` (`id_sales`);

--
-- Ketidakleluasaan untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

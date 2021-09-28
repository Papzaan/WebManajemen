-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2021 pada 10.12
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
(7, 'PT. Merak Jaya Abadi', 'BBplus 300ml', '2021-06-01', 80, '500000'),
(8, 'PT. Merak Jaya Abadi', 'Nanoxy 300ml', '2021-06-01', 100, '168000'),
(27, 'PT. Merak Jaya Abadi', 'Nanoxy 500ml', '2021-09-14', 80, '1000000'),
(28, 'PT. Merak Jaya Abadi', 'Nanoxy 500ml', '2021-09-14', 30, '68000'),
(29, 'PT. Merak Jaya Abadi', 'BBplus 300ml', '2021-09-14', 50, '68000'),
(30, 'PT. Merak Jaya Abadi', 'Nanoxy 300ml', '2021-09-14', 25, '1000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_admin`
--

CREATE TABLE `catatan_admin` (
  `id_catat` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `no_telp_customer` varchar(20) NOT NULL,
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

INSERT INTO `catatan_admin` (`id_catat`, `id_admin`, `no_telp_customer`, `nama_kategori`, `tgl_jual`, `jumlah`, `harga`, `alamat_trank`, `status`) VALUES
(2, 2, '1802010101', 'BBplus 300ml', '2021-09-02', 20, '500000', 'jakarta', 'lunas'),
(7, 2, '1928293938', 'Nanoxy 500ml', '0000-00-00', 30, '68000', 'Serang, Banten, Jawa', 'lunas'),
(8, 2, '1928293938', 'Nanoxy 500ml', '0000-00-00', 50, '1000000', 'Serang, Banten, Jawa', 'lunas'),
(9, 2, '1802010101', 'Nanoxy 300ml', '0000-00-00', 30, '68000', 'Serang, Banten, Jawa', 'lunas'),
(10, 2, '1802010101', 'BBplus 300ml', '0000-00-00', 25, '1000000', 'Serang, Banten, Jawa', 'lunas'),
(11, 2, '1928293938', 'BBplus 300ml', '2021-09-03', 50, '1000000', 'Serang, Banten, Jawa', 'lunas'),
(13, 2, '1928293938', 'Nanoxy 300ml', '2021-09-17', 2, '192000', 'Serang, Banten, Jawa', 'lunas'),
(14, 2, '325346546', 'BBplus 300ml', '2021-09-22', 2, '336000', 'Serang, Banten, Jawa', 'lunas'),
(15, 2, '325346546', 'BBplus 300ml', '2021-09-22', 2, '336000', 'Lampung Tengah', 'lunas'),
(16, 2, '1928293938', 'BBplus 300ml', '2021-09-22', 9, '1512000', 'serbajadi', 'lunas'),
(17, 2, '1802010101', 'Nanoxy 300ml', '2021-09-23', 2, '192000', 'Serang, Banten, Jawa', 'lunas'),
(18, 2, '325346546', 'BBplus 300ml', '2021-09-23', 2, '336000', 'bogor, jawa', 'lunas'),
(19, 2, '080909090808', 'BBplus 300ml', '2021-09-01', 2, '336000', 'Lampung Tengah', 'lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `no_telp_customer` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`no_telp_customer`, `nama`, `jenis_kelamin`, `alamat`) VALUES
('080909090808', 'alucard', 'laki - laki', 'land of down'),
('1802010101', 'farida', 'perempuan', 'jakarta selatan'),
('1928293938', 'Asril Rinaldi', 'laki - laki', 'palembang'),
('29203093092039', 'hamzah', 'laki - laki', 'jakarta selatan'),
('325346546', 'lili', 'laki - laki', 'metro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_mitra`
--

CREATE TABLE `customer_mitra` (
  `no_telp_customer_mit` varchar(20) NOT NULL,
  `nama_cusmit` varchar(25) NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_mitra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer_mitra`
--

INSERT INTO `customer_mitra` (`no_telp_customer_mit`, `nama_cusmit`, `jenis_kelamin`, `alamat`, `id_mitra`) VALUES
('0708008908', 'miya', 'perempuan', 'landoensd', 2),
('1234567899', 'liam', 'perempuan', 'rrq', 2),
('2222223322', 'faris', 'laki - laki', 'banten', 13),
('2391801948', 'Toni', 'laki - laki', 'banjar masin', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_sales`
--

CREATE TABLE `customer_sales` (
  `no_telp_customer_sal` varchar(20) NOT NULL,
  `nama_cussal` varchar(25) NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_sales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer_sales`
--

INSERT INTO `customer_sales` (`no_telp_customer_sal`, `nama_cussal`, `jenis_kelamin`, `alamat`, `id_sales`) VALUES
('0809293009', 'aldous', 'laki - laki', 'sumatra utara', 2),
('09843024', 'rio', 'laki - laki', 'papua newginie', 3),
('242342342', 'jhon', 'laki - laki', 'sulawesi', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_salmit`
--

CREATE TABLE `customer_salmit` (
  `no_telp_customer_salmit` varchar(20) NOT NULL,
  `nama_cussalmit` varchar(25) NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `id_salmit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer_salmit`
--

INSERT INTO `customer_salmit` (`no_telp_customer_salmit`, `nama_cussalmit`, `jenis_kelamin`, `alamat`, `id_salmit`) VALUES
('122323445', 'jesica', 'perempuan', 'jakarta jesica', 5),
('23323323', 'nanonano', 'laki - laki', 'nano lampung', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `nama_kategori` varchar(30) NOT NULL,
  `harga_dusan` varchar(30) NOT NULL COMMENT 'untuk customer',
  `stok` int(30) NOT NULL,
  `harga_mitra` varchar(30) NOT NULL,
  `harga_sales` varchar(30) NOT NULL,
  `harga_outlet` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`nama_kategori`, `harga_dusan`, `stok`, `harga_mitra`, `harga_sales`, `harga_outlet`) VALUES
('BBplus 300ml', '168000', 16, '88000', '118000', '138000'),
('Nanoxy 300ml', '96000', 60, '63000', '69000', '76000'),
('Nanoxy 500ml', '78000', 30, '59100', '66000', '72000');

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
-- Struktur dari tabel `penjualan_mitra`
--

CREATE TABLE `penjualan_mitra` (
  `id_penjumit` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `no_telp_customer_mit` varchar(20) NOT NULL,
  `id_stokbarmit` int(11) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tgl_jual` date NOT NULL,
  `harga` int(30) NOT NULL,
  `alamat_trank` varchar(45) NOT NULL,
  `status` enum('lunas','belum lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan_mitra`
--

INSERT INTO `penjualan_mitra` (`id_penjumit`, `id_mitra`, `no_telp_customer_mit`, `id_stokbarmit`, `jumlah`, `tgl_jual`, `harga`, `alamat_trank`, `status`) VALUES
(1, 2, '1234567899', 2, 20, '2021-09-02', 500000, 'jakarta', 'lunas'),
(2, 13, '2222223322', 2, 20, '2021-09-02', 500000, 'banten', 'lunas'),
(4, 2, '1234567899', 2, 3, '2021-09-23', 504000, 'karang', 'lunas'),
(5, 2, '1234567899', 2, 3, '2021-09-23', 504000, 'karang', 'lunas'),
(6, 2, '2391801948', 4, 10, '2021-09-23', 960000, 'Serang, Banten, Jawa', 'lunas'),
(7, 2, '1234567899', 2, 2, '2021-09-24', 336000, 'MGL', 'lunas'),
(8, 2, '0708008908', 2, 2, '2021-09-03', 336000, 'bogor, jawa', 'lunas'),
(9, 2, '0708008908', 4, 9, '2021-09-03', 864000, 'Lampung Tengah', 'lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_sales`
--

CREATE TABLE `penjualan_sales` (
  `id_penjualan` int(11) NOT NULL,
  `no_telp_customer_sal` varchar(20) NOT NULL,
  `id_sales` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `tgl_jual` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `alamat_trank` varchar(45) NOT NULL,
  `status` enum('lunas','belum lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan_sales`
--

INSERT INTO `penjualan_sales` (`id_penjualan`, `no_telp_customer_sal`, `id_sales`, `nama_kategori`, `tgl_jual`, `jumlah`, `harga`, `alamat_trank`, `status`) VALUES
(1, '242342342', 2, 'Nanoxy 300ml', '2021-09-22', 20, '500000', 'papua', 'lunas'),
(2, '242342342', 2, 'Nanoxy 300ml', '2021-09-03', 20, '1920000', 'lampung barat', 'lunas'),
(3, '242342342', 2, 'BBplus 300ml', '2021-09-23', 2, '336000', 'Serang, Banten, Jawa', 'lunas'),
(4, '09843024', 3, 'Nanoxy 300ml', '2021-09-02', 30, '500000', 'jakarta lampung', 'lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_salmit`
--

CREATE TABLE `penjualan_salmit` (
  `id_penjualan` int(11) NOT NULL,
  `no_telp_customer_salmit` varchar(20) NOT NULL,
  `id_salmit` int(11) NOT NULL,
  `id_stokbarmit` int(11) NOT NULL,
  `tgl_jual` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `alamat_trank` varchar(45) NOT NULL,
  `status` enum('lunas','belum lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan_salmit`
--

INSERT INTO `penjualan_salmit` (`id_penjualan`, `no_telp_customer_salmit`, `id_salmit`, `id_stokbarmit`, `tgl_jual`, `jumlah`, `harga`, `alamat_trank`, `status`) VALUES
(1, '122323445', 5, 2, '2021-09-02', 20, '30000', 'jakarta lampung', 'lunas'),
(2, '23323323', 3, 3, '2021-09-01', 30, '500000', 'jakarta nano', 'lunas'),
(3, '122323445', 5, 2, '2021-09-02', 30, '500000', 'papua', 'lunas'),
(4, '122323445', 5, 2, '2021-09-03', 8, '1344000', 'banten, banteng', 'lunas');

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
  `bayar` int(1) NOT NULL,
  `met_bayar` enum('Cash','Transfer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan_mitra`
--

INSERT INTO `pesanan_mitra` (`id_pesmit`, `id_mitra`, `nama_kategori`, `tgl_pesan`, `jumlah`, `harga`, `utang`, `bayar`, `met_bayar`) VALUES
(1, 2, 'BBplus 300ml', '2021-09-01', 20, '50000', 0, 1, 'Cash'),
(2, 13, 'Nanoxy 300ml', '2021-09-01', 100, '500000', 0, 3, 'Cash'),
(3, 2, 'BBplus 300ml', '2021-09-08', 2, '336000', 0, 2, 'Transfer'),
(4, 2, 'BBplus 300ml', '2021-09-23', 3, '264000', 0, 1, 'Cash'),
(7, 2, 'Nanoxy 300ml', '2021-09-23', 9, '567000', 0, 2, 'Cash'),
(8, 2, 'BBplus 300ml', '2021-09-24', 5, '440000', 0, 2, 'Cash'),
(9, 2, 'BBplus 300ml', '2021-09-25', 10, '880000', 880000, 0, 'Transfer');

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
(3, 'Reza aji pratama', '360201827292', '08823747383', 'bogor, jawa tengah', 'laki - laki', 'reza@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `salesnya_mitra`
--

CREATE TABLE `salesnya_mitra` (
  `id_salmit` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `nama_salmit` varchar(25) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `salesnya_mitra`
--

INSERT INTO `salesnya_mitra` (`id_salmit`, `id_mitra`, `nama_salmit`, `nik`, `no_telp`, `alamat`, `jenis_kelamin`, `email`) VALUES
(1, 2, 'salmit', '293029093', '082093920', 'Aceh', 'perempuan', 'salmit@gmail.com'),
(3, 13, 'nino', '13292393', '01293833', 'indonesia nino', 'laki - laki', 'nino@gmail.com'),
(5, 2, 'jess', '180027199271927', '08827409069', 'lampung', 'laki - laki', 'jess@gmail.com'),
(8, 2, 'jonathan', '343243', '42432', 'jonathan jakarta barat', 'laki - laki', 'jo@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_barang_mitra`
--

CREATE TABLE `stok_barang_mitra` (
  `id_stokbarmit` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `stok_mitra` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stok_barang_mitra`
--

INSERT INTO `stok_barang_mitra` (`id_stokbarmit`, `id_mitra`, `nama_kategori`, `stok_mitra`) VALUES
(2, 2, 'BBplus 300ml', 20),
(3, 13, 'Nanoxy 500ml', 30),
(4, 2, 'Nanoxy 300ml', 30),
(5, 2, 'Nanoxy 500ml', 25);

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
('PT. Maju Jaya', '0979786687', 'sjdakjdjsdfkjsd'),
('PT. Merak Jaya Abadi', '0821658920892', 'Jawa'),
('PT. Sejahtera', '999999', 'indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('1','2','3','4') NOT NULL COMMENT '1=Admin,2=Mitra,3=Sales, 4=salmit',
  `status_kepegawaian` enum('pegawai','non pegawai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`email`, `password`, `status`, `status_kepegawaian`) VALUES
('aansanova@gmail.com', '84c1429608e310ce25524b29c4027934', '3', 'pegawai'),
('imamharis@gmail.com', '4ec5bd0e06c9aeb02bec530ac3ad617d', '2', 'pegawai'),
('jess@gmail.com', 'ff6ae2cda9741c0f0c03bce2b6d93af9', '4', 'pegawai'),
('jo@gmail.com', '54533eebc61004baa7a6f12b90785816', '4', 'pegawai'),
('mahesadarmasatria@gmail.com', '3051085ddce70013d6c496bd86b4dbe1', '1', 'pegawai'),
('nino@gmail.com', '6b6ed714bbf04a11070c2687ac776420', '4', 'pegawai'),
('reza@gmail.com', '3ed6e995474bc6dddef7a6fc9b97c965', '3', 'pegawai'),
('salmit@gmail.com', '7e9848d2404bdc68af3c09dca9dd37c1', '4', 'pegawai'),
('via@gmail.com', 'e5aef89fdd6afdd63e0114c852b0f74c', '2', 'pegawai');

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
-- Indeks untuk tabel `catatan_admin`
--
ALTER TABLE `catatan_admin`
  ADD PRIMARY KEY (`id_catat`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_customer` (`no_telp_customer`),
  ADD KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`no_telp_customer`);

--
-- Indeks untuk tabel `customer_mitra`
--
ALTER TABLE `customer_mitra`
  ADD PRIMARY KEY (`no_telp_customer_mit`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indeks untuk tabel `customer_sales`
--
ALTER TABLE `customer_sales`
  ADD PRIMARY KEY (`no_telp_customer_sal`),
  ADD KEY `id_sales` (`id_sales`),
  ADD KEY `id_sales_2` (`id_sales`);

--
-- Indeks untuk tabel `customer_salmit`
--
ALTER TABLE `customer_salmit`
  ADD PRIMARY KEY (`no_telp_customer_salmit`),
  ADD KEY `id_salmit` (`id_salmit`);

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
-- Indeks untuk tabel `penjualan_mitra`
--
ALTER TABLE `penjualan_mitra`
  ADD PRIMARY KEY (`id_penjumit`),
  ADD KEY `id_mitra` (`id_mitra`),
  ADD KEY `id_barmit` (`id_stokbarmit`),
  ADD KEY `nik_customer_mit` (`no_telp_customer_mit`);

--
-- Indeks untuk tabel `penjualan_sales`
--
ALTER TABLE `penjualan_sales`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_customer` (`no_telp_customer_sal`),
  ADD KEY `id_sales` (`id_sales`),
  ADD KEY `id_barang` (`nama_kategori`);

--
-- Indeks untuk tabel `penjualan_salmit`
--
ALTER TABLE `penjualan_salmit`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `nik_customer_salmit` (`no_telp_customer_salmit`),
  ADD KEY `id_salmit` (`id_salmit`),
  ADD KEY `id_stokbarmit` (`id_stokbarmit`);

--
-- Indeks untuk tabel `pesanan_mitra`
--
ALTER TABLE `pesanan_mitra`
  ADD PRIMARY KEY (`id_pesmit`),
  ADD KEY `nama_mitra` (`id_mitra`),
  ADD KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indeks untuk tabel `salesnya_mitra`
--
ALTER TABLE `salesnya_mitra`
  ADD PRIMARY KEY (`id_salmit`),
  ADD KEY `id_mitra` (`id_mitra`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `stok_barang_mitra`
--
ALTER TABLE `stok_barang_mitra`
  ADD PRIMARY KEY (`id_stokbarmit`),
  ADD KEY `nama_kategori` (`nama_kategori`),
  ADD KEY `id_mitra` (`id_mitra`);

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `catatan_admin`
--
ALTER TABLE `catatan_admin`
  MODIFY `id_catat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `penjualan_mitra`
--
ALTER TABLE `penjualan_mitra`
  MODIFY `id_penjumit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penjualan_sales`
--
ALTER TABLE `penjualan_sales`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penjualan_salmit`
--
ALTER TABLE `penjualan_salmit`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan_mitra`
--
ALTER TABLE `pesanan_mitra`
  MODIFY `id_pesmit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `salesnya_mitra`
--
ALTER TABLE `salesnya_mitra`
  MODIFY `id_salmit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `stok_barang_mitra`
--
ALTER TABLE `stok_barang_mitra`
  MODIFY `id_stokbarmit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Ketidakleluasaan untuk tabel `catatan_admin`
--
ALTER TABLE `catatan_admin`
  ADD CONSTRAINT `catatan_admin_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `catatan_admin_ibfk_2` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`),
  ADD CONSTRAINT `catatan_admin_ibfk_3` FOREIGN KEY (`no_telp_customer`) REFERENCES `customer` (`no_telp_customer`);

--
-- Ketidakleluasaan untuk tabel `customer_mitra`
--
ALTER TABLE `customer_mitra`
  ADD CONSTRAINT `customer_mitra_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`);

--
-- Ketidakleluasaan untuk tabel `customer_sales`
--
ALTER TABLE `customer_sales`
  ADD CONSTRAINT `customer_sales_ibfk_1` FOREIGN KEY (`id_sales`) REFERENCES `sales` (`id_sales`);

--
-- Ketidakleluasaan untuk tabel `customer_salmit`
--
ALTER TABLE `customer_salmit`
  ADD CONSTRAINT `customer_salmit_ibfk_1` FOREIGN KEY (`id_salmit`) REFERENCES `salesnya_mitra` (`id_salmit`);

--
-- Ketidakleluasaan untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `mitra_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Ketidakleluasaan untuk tabel `penjualan_mitra`
--
ALTER TABLE `penjualan_mitra`
  ADD CONSTRAINT `penjualan_mitra_ibfk_2` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`),
  ADD CONSTRAINT `penjualan_mitra_ibfk_3` FOREIGN KEY (`no_telp_customer_mit`) REFERENCES `customer_mitra` (`no_telp_customer_mit`),
  ADD CONSTRAINT `penjualan_mitra_ibfk_4` FOREIGN KEY (`id_stokbarmit`) REFERENCES `stok_barang_mitra` (`id_stokbarmit`);

--
-- Ketidakleluasaan untuk tabel `penjualan_sales`
--
ALTER TABLE `penjualan_sales`
  ADD CONSTRAINT `penjualan_sales_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `sales` (`id_sales`),
  ADD CONSTRAINT `penjualan_sales_ibfk_4` FOREIGN KEY (`no_telp_customer_sal`) REFERENCES `customer_sales` (`no_telp_customer_sal`),
  ADD CONSTRAINT `penjualan_sales_ibfk_5` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`);

--
-- Ketidakleluasaan untuk tabel `penjualan_salmit`
--
ALTER TABLE `penjualan_salmit`
  ADD CONSTRAINT `penjualan_salmit_ibfk_1` FOREIGN KEY (`id_stokbarmit`) REFERENCES `stok_barang_mitra` (`id_stokbarmit`),
  ADD CONSTRAINT `penjualan_salmit_ibfk_2` FOREIGN KEY (`no_telp_customer_salmit`) REFERENCES `customer_salmit` (`no_telp_customer_salmit`),
  ADD CONSTRAINT `penjualan_salmit_ibfk_3` FOREIGN KEY (`id_salmit`) REFERENCES `salesnya_mitra` (`id_salmit`);

--
-- Ketidakleluasaan untuk tabel `pesanan_mitra`
--
ALTER TABLE `pesanan_mitra`
  ADD CONSTRAINT `pesanan_mitra_ibfk_1` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`),
  ADD CONSTRAINT `pesanan_mitra_ibfk_2` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`);

--
-- Ketidakleluasaan untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Ketidakleluasaan untuk tabel `salesnya_mitra`
--
ALTER TABLE `salesnya_mitra`
  ADD CONSTRAINT `salesnya_mitra_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`),
  ADD CONSTRAINT `salesnya_mitra_ibfk_2` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`);

--
-- Ketidakleluasaan untuk tabel `stok_barang_mitra`
--
ALTER TABLE `stok_barang_mitra`
  ADD CONSTRAINT `stok_barang_mitra_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`),
  ADD CONSTRAINT `stok_barang_mitra_ibfk_2` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

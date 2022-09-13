-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 04:34 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(30) NOT NULL,
  `kat_brg` int(11) NOT NULL,
  `qty_brg` int(11) NOT NULL,
  `harga_brg` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_brg`, `nama_brg`, `kat_brg`, `qty_brg`, `harga_brg`) VALUES
('BR000001', 'Pensil', 1, 2, 1500),
('BR000002', 'Pulpen', 1, 6, 3000),
('BR000003', 'Buku', 1, 6, 5000),
('BR000004', 'Buku LKS', 2, 8, 15000),
('BR000005', 'Buku Paket', 3, 3, 30000),
('BR000006', 'Topi Sekolah', 3, 4, 12000),
('BR000007', 'Dasi Sekolah', 3, 7, 8000),
('BR000008', 'Cobak', 2, 8, 40000),
('BR000009', 'ddd', 2, 4, 45000),
('BR000010', 'Buku Paket', 3, 10, 399999),
('BR000011', 'Cobak', 2, 1, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `d_transaksi`
--

CREATE TABLE `d_transaksi` (
  `id_dtrans` int(11) NOT NULL,
  `id_transd` varchar(20) NOT NULL,
  `kode_brg_trans` varchar(20) NOT NULL,
  `harga_dtrans` int(20) NOT NULL,
  `jml_dtrans` int(11) NOT NULL,
  `total_dtrans` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d_transaksi`
--

INSERT INTO `d_transaksi` (`id_dtrans`, `id_transd`, `kode_brg_trans`, `harga_dtrans`, `jml_dtrans`, `total_dtrans`) VALUES
(2, 'TR000001', 'BR000002', 3000, 3, 9000),
(3, 'TR000002', 'BR000002', 3000, 1, 3000),
(4, 'TR000003', 'BR000004', 15000, 1, 15000),
(5, 'TR000003', 'BR000003', 5000, 1, 5000),
(6, 'TR000005', 'BR000001', 1500, 1, 1500),
(7, 'TR000006', 'BR000005', 30000, 1, 30000),
(8, 'TR000006', 'BR000003', 5000, 2, 10000),
(9, 'TR000007', 'BR000001', 1500, 1, 1500),
(10, 'TR000009', 'BR000001', 1500, 1, 1500),
(11, 'TR000010', 'BR000005', 30000, 1, 30000),
(12, 'TR000010', 'BR000006', 12000, 2, 24000),
(13, 'TR000017', 'BR000006', 12000, 1, 12000),
(14, 'TR000018', 'BR000001', 1500, 1, 1500),
(15, 'TR000019', 'BR000001', 1500, 1, 1500),
(16, 'TR000020', 'BR000004', 15000, 1, 15000),
(17, 'TR000021', 'BR000003', 5000, 1, 5000),
(18, 'TR000022', 'BR000001', 1500, 1, 1500),
(19, 'TR000023', 'BR000007', 8000, 1, 8000),
(20, 'TR000024', 'BR000006', 12000, 1, 12000),
(21, 'TR000024', 'BR000007', 8000, 1, 8000),
(22, 'TR000025', 'BR000006', 12000, 2, 24000),
(23, 'TR000025', 'BR000007', 8000, 1, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`) VALUES
(1, 'Alat Tulis'),
(2, 'Buku Sekolah'),
(3, 'Perlengkapan Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(35) DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  `user_password` varchar(35) DEFAULT NULL,
  `user_level` varchar(2) DEFAULT NULL,
  `user_status` varchar(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_level`, `user_status`) VALUES
(1, 'M Fikri Setiadi', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '1'),
(2, 'fikri', 'kasir', 'e10adc3949ba59abbe56e057f20f883e', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` varchar(20) NOT NULL,
  `total_trans` int(20) NOT NULL,
  `uang_trans` int(20) NOT NULL,
  `kembalian_trans` int(20) NOT NULL,
  `tgl_trans` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `total_trans`, `uang_trans`, `kembalian_trans`, `tgl_trans`) VALUES
('TR000001', 9000, 10000, 1000, '2021-09-24'),
('TR000002', 3000, 5000, 2000, '2021-09-24'),
('TR000003', 20000, 20000, 0, '2021-09-24'),
('TR000004', 20000, 20000, 0, '2021-09-24'),
('TR000005', 1500, 2000, 500, '2021-09-24'),
('TR000006', 40000, 50000, 10000, '2021-09-24'),
('TR000007', 1500, 2000, 500, '2021-09-24'),
('TR000008', 1500, 2000, 500, '2021-09-24'),
('TR000009', 1500, 2000, 500, '2021-09-24'),
('TR000010', 54000, 55000, 1000, '2021-09-24'),
('TR000011', 54000, 55000, 1000, '2021-09-24'),
('TR000012', 54000, 55000, 1000, '2021-09-24'),
('TR000013', 54000, 55000, 1000, '2021-09-24'),
('TR000014', 54000, 55000, 1000, '2021-09-24'),
('TR000015', 54000, 55000, 1000, '2021-09-24'),
('TR000016', 54000, 55000, 1000, '2021-09-24'),
('TR000017', 12000, 15000, 3000, '2021-09-26'),
('TR000018', 1500, 2000, 500, '2021-09-26'),
('TR000019', 1500, 2000, 500, '2021-09-26'),
('TR000020', 15000, 15000, 0, '2021-09-26'),
('TR000021', 5000, 5000, 0, '2021-09-26'),
('TR000022', 1500, 2000, 500, '2021-09-26'),
('TR000023', 8000, 10000, 2000, '2021-09-26'),
('TR000024', 20000, 20000, 0, '2021-09-28'),
('TR000025', 32000, 35000, 3000, '2021-09-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Indexes for table `d_transaksi`
--
ALTER TABLE `d_transaksi`
  ADD PRIMARY KEY (`id_dtrans`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_transaksi`
--
ALTER TABLE `d_transaksi`
  MODIFY `id_dtrans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

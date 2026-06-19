-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2026 at 02:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pbo_kelas_annisa_nur_safitri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(10,2) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(50) DEFAULT NULL,
  `lokasi_kampus` varchar(50) DEFAULT NULL,
  `jenis_prestasi` varchar(50) DEFAULT NULL,
  `tingkat_prestasi` varchar(30) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(50) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Ahmad Fauzi', 'SMAN 1 Jakarta', '85.50', '150000.00', 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Budi Santoso', 'SMAN 3 Bandung', '78.25', '150000.00', 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(3, 'Citra Lestari', 'SMKN 2 Surabaya', '88.00', '150000.00', 'Reguler', 'Manajemen', 'Kampus B', NULL, NULL, NULL, NULL),
(4, 'Dedi Wijaya', 'SMAN 5 Yogyakarta', '92.10', '150000.00', 'Reguler', 'Teknik Elektro', 'Kampus Utama', NULL, NULL, NULL, NULL),
(5, 'Eka Putri', 'SMAN 1 Medan', '80.00', '150000.00', 'Reguler', 'Akuntansi', 'Kampus B', NULL, NULL, NULL, NULL),
(6, 'Fajar Ramadhan', 'SMAN 8 Makassar', '83.75', '150000.00', 'Reguler', 'Ilmu Komunikasi', 'Kampus C', NULL, NULL, NULL, NULL),
(7, 'Gita Permata', 'SMAN 2 Semarang', '86.40', '150000.00', 'Reguler', 'Teknik Sipil', 'Kampus Utama', NULL, NULL, NULL, NULL),
(8, 'Hendra Kusuma', 'SMAN 1 Surakarta', '90.00', '100000.00', 'Prestasi', NULL, NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(9, 'Indah Permadi', 'SMAN 3 Malang', '94.50', '100000.00', 'Prestasi', NULL, NULL, 'Karya Ilmiah Remaja', 'Internasional', NULL, NULL),
(10, 'Joko Susilo', 'SMKN 1 Balikpapan', '85.00', '100000.00', 'Prestasi', NULL, NULL, 'Lomba Kompetensi Siswa', 'Provinsi', NULL, NULL),
(11, 'Kartika Sari', 'SMAN 4 Denpasar', '89.20', '100000.00', 'Prestasi', NULL, NULL, 'Atlet Bulutangkis', 'Nasional', NULL, NULL),
(12, 'Laksana Tri', 'SMAN 1 Palembang', '87.80', '100000.00', 'Prestasi', NULL, NULL, 'Debat Bahasa Inggris', 'Nasional', NULL, NULL),
(13, 'Mega Utami', 'SMAN 7 Pinrang', '91.00', '100000.00', 'Prestasi', NULL, NULL, 'Tahfidz Al-Quran', 'Provinsi', NULL, NULL),
(14, 'Naufal Hadi', 'SMAN 1 Padang', '93.15', '100000.00', 'Prestasi', NULL, NULL, 'Olimpiade Fisika', 'Nasional', NULL, NULL),
(15, 'Oki Setiawan', 'SMAN 1 Garut', '82.50', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-990/KD/2026', 'Kementerian Perhubungan'),
(16, 'Putri Rahayu', 'SMAN 2 Bogor', '88.60', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-112/STTD/2026', 'Badan Siber dan Sandi Negara'),
(17, 'Qomaruddin', 'SMAN 1 Cirebon', '84.00', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-405/KUMHAM/2026', 'Kementerian Hukum dan HAM'),
(18, 'Rina Marlina', 'SMAN 3 Banda Aceh', '89.90', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-771/FIN/2026', 'Kementerian Keuangan'),
(19, 'Sultan Bahtiar', 'SMAN 1 Samarinda', '81.30', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-202/BPN/2026', 'Badan Pertanahan Nasional'),
(20, 'Tania Kirana', 'SMAN 14 Jakarta', '95.00', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-005/BMKG/2026', 'BMKG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

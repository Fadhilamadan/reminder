-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 03:19 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reminder`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isRead` tinyint(1) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `dosen_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `content`, `date`, `from`, `isRead`, `isActive`, `created_at`, `updated_at`, `mahasiswa_id`, `dosen_id`) VALUES
(1, 'chat', '2017-05-15', 'Robby Ongko Wijoyo', 1, 1, NULL, NULL, 2, 1),
(2, 'chat', '2017-05-19', 'Evin Cintiawan', 1, 1, NULL, NULL, 1, 1),
(3, 'chat', '2017-06-12', 'Rama Adhiguna', 1, 0, NULL, NULL, 1, 1),
(4, 'chat', '2017-07-11', 'Lucas Leonard', 1, 0, NULL, NULL, 4, 2),
(5, 'chat', '2017-05-09', 'Sonny Haryadi', 1, 0, NULL, NULL, 6, 2),
(6, 'chat', '2017-05-08', 'Kevin Andryano', 1, 0, NULL, NULL, 7, 2),
(7, 'chat', '2017-05-22', 'Billie Arianto', 1, 0, NULL, NULL, 5, 2),
(8, 'chat', '2017-05-22', 'Putu Aditya Riva', 1, 0, NULL, NULL, 9, 2),
(9, 'chat', '2017-05-22', 'Fadhil Amadan', 1, 0, NULL, NULL, 10, 2),
(10, 'chat', '2017-05-22', 'Faishal Hendaryawan', 1, 0, NULL, NULL, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `npk` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acceptKP` tinyint(1) NOT NULL,
  `acceptTA` tinyint(1) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `intensitas_mahasiswa` int(11) DEFAULT NULL,
  `reminder_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `npk`, `name`, `password`, `photo`, `acceptKP`, `acceptTA`, `isActive`, `created_at`, `updated_at`, `intensitas_mahasiswa`, `reminder_time`) VALUES
(1, '199013', 'Lisana, S.Kom., M.Inf.Tech.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL),
(2, '210134', 'Tyrza Adelia, S.Sn., M.Inf.Tech.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 0, 0, 1, NULL, NULL, NULL, NULL),
(3, '200046', 'Melissa Angga, S.T., M.M.Comp.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL),
(4, '202017', 'Dhiani Tresna Absari, S.T., M.Kom.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 0, 1, 1, NULL, NULL, NULL, NULL),
(5, '187018', 'Ir. Bambang Prijambodo, M.MT.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL),
(6, '197030', 'Susana Limanto, S.T., M.Si.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL),
(7, '205720', 'Prof. Drs. Nur Iriawan, M.Kom., Ph.D.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL),
(8, '195012', 'Dr. Budi Hartanto, S.T., M.Sc.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL),
(9, '215027', 'Maya Hilda Lestari Louk, S.T., M.Sc.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 0, 0, 1, NULL, NULL, NULL, NULL),
(10, '198032', 'Dr. Joko Siswantoro, S.Si., M.Si.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 0, 1, NULL, NULL, NULL, NULL),
(11, '201026', 'Njoto Benarkah, S.T., M.Sc.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 0, 1, 1, NULL, NULL, NULL, NULL),
(12, '201007', 'Endah Asmawati, S.Si., M.Si.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL),
(13, '  203014', 'Ellysa Tjandra, S.T., M.MT.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 0, 1, NULL, NULL, NULL, NULL),
(14, '216037', 'Mohammad Farid Naufal, S.Kom., M.Kom.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 0, 1, NULL, NULL, NULL, NULL),
(15, '210034', 'Hendra Dinata, S.T., M.Kom.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 0, 1, 1, NULL, NULL, NULL, NULL),
(16, '209023', 'Richard Pramono, S.Kom., M.Sc.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 0, 1, 1, NULL, NULL, NULL, NULL),
(17, '208020', 'Andre, S.T., M.Sc.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL),
(18, '204027', 'Monica Widiasri, S.Kom., M.Kom.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL),
(19, '206020', 'Liliana, S.T., M.MSI.', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL),
(20, '209344', 'Daniel Soesanto, S.T., M.M', '$2y$10$W2adPCOY1Am3vBh6LsAyzuAt.dTLuAFPW3mDPnyp.d68Toa5c/35C', '', 1, 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_konsul`
--

CREATE TABLE `jenis_konsul` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_konsul`
--

INSERT INTO `jenis_konsul` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Matakuliah', NULL, NULL),
(2, 'Kerja Praktek', NULL, NULL),
(3, 'Tugas Akhir', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kerja_praktek`
--

CREATE TABLE `kerja_praktek` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mahasiswa_satu_id` int(10) UNSIGNED DEFAULT NULL,
  `mahasiswa_dua_id` int(10) UNSIGNED DEFAULT NULL,
  `dosen_pembimbing_id` int(10) UNSIGNED NOT NULL,
  `periode_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kerja_praktek`
--

INSERT INTO `kerja_praktek` (`id`, `title`, `isActive`, `created_at`, `updated_at`, `mahasiswa_satu_id`, `mahasiswa_dua_id`, `dosen_pembimbing_id`, `periode_id`) VALUES
(1, 'Pembuatan Game Android', 1, NULL, NULL, 2, 1, 1, 4),
(2, 'Pembuatan Pendaftaran LSTA', 1, NULL, NULL, 3, 4, 3, 5),
(3, 'Pembuatan Game RPG', 1, NULL, NULL, 5, 6, 7, 4),
(4, 'Pembuatan Sistem Kasir', 1, NULL, NULL, 12, 8, 6, 6),
(5, 'Pembuatan Sistem Antrian Layanan', 1, NULL, NULL, 7, 9, 8, 6),
(6, 'Pembuatan Sistem Penjadwalan Karyawan', 1, NULL, NULL, 13, 15, 10, 4),
(7, 'Pembuatan Sistem Pemesanan Makanan', 1, NULL, NULL, 14, 16, 12, 7),
(8, 'Pembuatan Sistem Peminjaman Ruangan Aula', 1, NULL, NULL, 17, 19, 17, 5);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nrp` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `name`, `password`, `photo`, `isActive`, `created_at`, `updated_at`) VALUES
(1, '160401', 'Evin Cintiawan', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(2, '160402', 'Robby Ongko Wijoyo', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(3, '160403', 'Rama Adhiguna', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(4, '160404', 'Lucas Leonard', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(5, '160405', 'Billie Arianto', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(6, '160406', 'Sonny Haryadi', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(7, '160407', 'Kevin Andryano', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(8, '160408', 'Faishal Hendaryawan', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(9, '160409', 'Putu Aditya Riva', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(10, '160410', 'Fadhil Amadan', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 0, NULL, NULL),
(11, '160411', 'Indy Quorrotu Ayuni', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 0, NULL, NULL),
(12, '160412', 'Yudisthira Rahmat', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(13, '160413', 'Yunitasari Ernomo', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(14, '160414', 'Indah Permatasari', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(15, '160415', 'Man Jefri Sanjaya', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(16, '160416', 'Tandry Leonardo', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(17, '160417', 'Aulia Rahman', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL),
(18, '160418', 'Andra Hadi Wijaya', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 0, NULL, NULL),
(19, '160419', 'Agnes Fransisca', '$2y$10$RxYKZrjgPA8JF30KHxNjLuctyC5MpzNVH/F83bslPwwZOD3gFPR0W', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_matakuliah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `id_matakuliah`, `name`, `isActive`, `created_at`, `updated_at`) VALUES
(1, '1604A021', 'Pemrograman Berorientasi Obyek', 0, NULL, NULL),
(2, '19022', 'Data Mining', 1, NULL, NULL),
(3, '1604A051', 'Pemrograman Terdistribusi', 1, NULL, NULL),
(4, '1604A022', 'Sistem Operasi', 1, NULL, NULL),
(5, '1604A072', 'Pemodelan dan Simulasi', 0, NULL, NULL),
(6, '1604A055', 'Statistika', 1, NULL, NULL),
(7, '1607A021', 'Basis Data', 0, NULL, NULL),
(8, '1604A052', 'Information Security and Asurance', 1, NULL, NULL),
(9, '1600A003', 'Kewirausahaan dan Inovasi', 1, NULL, NULL),
(10, '1604A054', 'Desain dan Implementasi Sistem (RPL 2)', 1, NULL, NULL),
(11, '1607A052', 'System Testing & Implementasi', 0, NULL, NULL),
(12, '1604A061', 'Pemrograman Nirkabel', 1, NULL, NULL),
(13, '1604A054', 'Manajemen Teknologi Telematika', 1, NULL, NULL),
(14, '1604A011', 'Algoritma dan Pemrograman', 1, NULL, NULL),
(15, '1604A041', 'Teknologi Multimedia', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah_periode_dosen`
--

CREATE TABLE `matakuliah_periode_dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `matakuliah_id` int(10) UNSIGNED DEFAULT NULL,
  `dosen_id` int(10) UNSIGNED DEFAULT NULL,
  `periode_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah_periode_mahasiswa`
--

CREATE TABLE `matakuliah_periode_mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `matakuliah_id` int(10) UNSIGNED DEFAULT NULL,
  `mahasiswa_id` int(10) UNSIGNED DEFAULT NULL,
  `periode_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_05_07_065217_create_dosen_table', 1),
(4, '2017_05_07_065244_create_mahasiswa_table', 1),
(5, '2017_05_07_065316_create_periode_table', 1),
(6, '2017_05_07_065409_create_tugas_akhir_table', 1),
(7, '2017_05_07_065428_create_kerja_praktek_table', 1),
(8, '2017_05_07_065446_create_chat_table', 1),
(9, '2017_05_07_065500_create_slot_table', 1),
(10, '2017_05_07_065516_create_matakuliah_table', 1),
(11, '2017_05_07_144847_create_foreign_to_tugasakhir', 1),
(12, '2017_05_07_145542_create_foreign_to_chat', 1),
(13, '2017_05_07_145602_create_foreign_to_kerjapraktek', 1),
(14, '2017_05_07_145625_create_foreign_to_slot', 1),
(15, '2017_05_07_154912_create_manytomany_matakuliahPeriodeDosen', 1),
(16, '2017_05_17_040725_create_matakuliahMahasiswaPeriode', 1),
(17, '2017_05_17_051718_create_jeniskonsul_table', 1),
(18, '2017_05_29_164535_update_foreignkey_slot', 1),
(19, '2017_06_19_032507_create_manytomany_slot_mhs', 1),
(20, '2017_06_21_004800_change_table_dosen', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `nama_periode`, `date_start`, `date_end`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 'SEMESTER GENAP 2016-2017', '2017-02-09', '2017-02-22', 0, NULL, NULL),
(2, 'SEMESTER GENAP 2016-2017', '2017-03-01', '2017-03-15', 0, NULL, NULL),
(3, 'SEMESTER GENAP 2016-2017', '2017-04-15', '2017-04-29', 0, NULL, NULL),
(4, 'SEMESTER GENAP 2016-2017', '2017-05-02', '2017-05-18', 1, NULL, NULL),
(5, 'SEMESTER GENAP 2016-2017', '2017-06-09', '2017-06-19', 1, NULL, NULL),
(6, 'SEMESTER GANJIL 2016-2017', '2017-08-10', '2017-08-24', 1, NULL, NULL),
(7, 'SEMESTER GANJIL 2016-2017', '2017-09-01', '2017-09-16', 1, NULL, NULL),
(8, 'SEMESTER GANJIL 2016-2017', '2017-10-01', '2017-10-20', 0, NULL, NULL),
(9, 'SEMESTER GANJIL 2016-2017', '2017-11-05', '2017-11-18', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isRequest` tinyint(1) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mahasiswa_id` int(10) UNSIGNED DEFAULT NULL,
  `dosen_id` int(10) UNSIGNED DEFAULT NULL,
  `jenis_konsul_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slot_mhs`
--

CREATE TABLE `slot_mhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_slot` int(10) UNSIGNED NOT NULL,
  `id_mahasiswa` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dosen_satu_id` int(10) UNSIGNED NOT NULL,
  `dosen_dua_id` int(10) UNSIGNED NOT NULL,
  `mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `periode_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`id`, `title`, `isActive`, `created_at`, `updated_at`, `dosen_satu_id`, `dosen_dua_id`, `mahasiswa_id`, `periode_id`) VALUES
(1, 'Pembuatan Game Android', 1, NULL, NULL, 1, 3, 1, 4),
(2, 'Pembuatan Website Ubaya', 1, NULL, NULL, 1, 4, 2, 4),
(3, 'Pembuatan Game Logo Kuis', 1, NULL, NULL, 6, 5, 3, 5),
(4, 'Pembuatan Website Ormawa', 1, NULL, NULL, 11, 3, 4, 6),
(5, 'Pembuatan Website Fakultas', 0, NULL, NULL, 17, 4, 5, 4),
(6, 'Pembuatan Website Pemesanan Konsumsi Rapat', 0, NULL, NULL, 19, 20, 7, 7),
(7, 'Pembuatan Website E-Commerce', 0, NULL, NULL, 16, 7, 8, 4),
(8, 'Pembuatan Sistem Kasir Waralaba', 0, NULL, NULL, 3, 19, 9, 4),
(9, 'Pembuatan Game Java Basis Web', 0, NULL, NULL, 8, 5, 19, 5),
(10, 'Pembuatan Sistem Perbankan', 0, NULL, NULL, 4, 12, 17, 5),
(11, 'Pembuatan Anti Virus', 0, NULL, NULL, 6, 19, 14, 6),
(12, 'Pembuatan Sistem Keamanan Cloud Computing', 0, NULL, NULL, 20, 6, 15, 6),
(13, 'Pembuatan Aplikasi Pintar', 0, NULL, NULL, 18, 16, 13, 7),
(14, 'Pembuatan Sistem Operasi Linux Terbaru', 0, NULL, NULL, 15, 7, 12, 7),
(15, 'Pembuatan Simulasi Pesawat ', 0, NULL, NULL, 19, 11, 16, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `owner`, `owner_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Evin Cintiawan', '160401@student.ubaya.ac.id', '$2y$10$ERgglhS22X4pP2kMPuJYPu26nMp/WSgydbCcBFRaCV5S0U8kvX0Te', 2, 1, '8HBWzPdZKr5B7Cfj3Y7Xuf2V8Mnaq0JjVqaZkHRf04piJQLIBodsi9cvd2Ge', NULL, NULL),
(2, 'Robby Ongko Wijoyo', '160402@student.ubaya.ac.id', '$2y$10$gmirQCHqySFJhfwm0Rbd9OKtNWY9wzo/vhgy7fORifprWsMk5UVSy', 2, 2, NULL, NULL, NULL),
(3, 'Rama Adhiguna', '160403@student.ubaya.ac.id', '$2y$10$S2TP00QMuc.G1X1Xc.xlGORhxgVd1CTjeISzSAsTJQ1XSWUCW2UY6', 2, 3, NULL, NULL, NULL),
(4, 'Lucas Leonard', '160404@student.ubaya.ac.id', '$2y$10$F5c5mItTfVGAKr23O9FtCeIV/xihtNcSJ4H3hJ5WRS/F.DvWv4cjG', 2, 4, NULL, NULL, NULL),
(5, 'Billie Arianto', '160405@student.ubaya.ac.id', '$2y$10$bxTilm0iprwSdqy8H5Shg.lebNoJFVF.6cT7wovvjd0Ue7s1b1DlW', 2, 5, NULL, NULL, NULL),
(6, 'Sonny Haryadi', '160406@student.ubaya.ac.id', '$2y$10$7trA6mW7cqKmOtXJ.UGPYu./CEdEJWHFXli8I126U0203qYJIyyuW', 2, 6, NULL, NULL, NULL),
(7, 'Kevin Andryano', '160407@student.ubaya.ac.id', '$2y$10$rZBClsnLjXLE5XIGTevOleuokJ/D6Gsf.ijjn7FoaqNKnphcaDDEe', 2, 7, NULL, NULL, NULL),
(8, 'Faishal Hendaryawan', '160408@student.ubaya.ac.id', '$2y$10$LbZE0bHxG4JGwr8Nf2aWguxkj7s0wzgeV89g/uGEj52Xk7o8PPSQG', 2, 8, NULL, NULL, NULL),
(9, 'Putu Aditya Riva', '160409@student.ubaya.ac.id', '$2y$10$9BvNZh6UTwgZU2KFGMFVqOX3awCPAWeJcRfQa8PPv2w4iTB9CzkkC', 2, 9, NULL, NULL, NULL),
(10, 'Fadhil Amadan', '160410@student.ubaya.ac.id', '$2y$10$E6ggNbw2DNOYaLH7IyBAgeXE4/iWIXHFpA680jFLse9AkfULy51bW', 2, 10, NULL, NULL, NULL),
(11, 'Indy Quorrotu Ayuni', '160411@student.ubaya.ac.id', '$2y$10$O0f4nnuoKTkpRJrDulGQXeGCX4nM6oP7GPhwa/GghpX83RyAiUpGW', 2, 11, NULL, NULL, NULL),
(12, 'Yudisthira Rahmat', '160412@student.ubaya.ac.id', '$2y$10$5BMA7Y6Qp3jXZF4DYO/CcOyohHaw9cp85mURi9VhkiunI5G63ApIW', 2, 12, NULL, NULL, NULL),
(13, 'Yunitasari Ernomo', '160413@student.ubaya.ac.id', '$2y$10$hDjRMQzTSYJg9PbKSEZIK.ygIAMs8p1J7aiAK9UBVMop67UVQQdEy', 2, 13, NULL, NULL, NULL),
(14, 'Indah Permatasari', '160414@student.ubaya.ac.id', '$2y$10$UP81U5XzsFqd8A1JfBjhgOHebNGnQc1adQndOxlk5RknsmLEQ.iBO', 2, 14, NULL, NULL, NULL),
(15, 'Man Jefri Sanjaya', '160415@student.ubaya.ac.id', '$2y$10$s11m0EDuM3vaar9tnt7SJOmXVfPfbZfL4Njk0/7dSYj4YtgT7xBtu', 2, 15, NULL, NULL, NULL),
(16, 'Tandry Leonardo', '160416@student.ubaya.ac.id', '$2y$10$U0lxjPiSPWu4BCVFLV5QAekYB0HXE2hZ0aC3bb/PdChk0FvdYwuBG', 2, 16, NULL, NULL, NULL),
(17, 'Aulia Rahman', '160417@student.ubaya.ac.id', '$2y$10$aORA70Pfw74G/X1XCoVfoudkyBfGZSvibHNkrmzRA62Kdw0zXbiZy', 2, 17, NULL, NULL, NULL),
(18, 'Andra Hadi Wijaya', '160418@student.ubaya.ac.id', '$2y$10$aXgHz.p01P.WWD/L.6nm.ucB6xJBnvaODt.9ptX0qb9vh2/gNCRF.', 2, 18, NULL, NULL, NULL),
(19, 'Agnes Fransisca', '160419@student.ubaya.ac.id', '$2y$10$9nQG3jRejn4LF2BCPH8s0.BBSiJ7ae83B9GX1J1JtpIRYSIuATouu', 2, 19, NULL, NULL, NULL),
(20, 'Lisana, S.Kom., M.Inf.Tech.', '199013@staff.ubaya.ac.id', '$2y$10$jwT95OmtUaqdLu0MueV4m.A99KnWaHJp88uaMGv9WHCfjht/acr1C', 3, 1, NULL, NULL, NULL),
(21, 'Tyrza Adelia, S.Sn., M.Inf.Tech.', '210134@staff.ubaya.ac.id', '$2y$10$NtHyTmsaiP2GTHQyPengCeGuEGmY/y.RuT9azzmMlMIfmULIb.0de', 3, 2, NULL, NULL, NULL),
(22, 'Melissa Angga, S.T., M.M.Comp.', '200046@staff.ubaya.ac.id', '$2y$10$QwAeoj/752aQdimTWBFSoevdDk84OePS2Ki3syaRLbNTMxrkBwdQC', 3, 3, NULL, NULL, NULL),
(23, 'Dhiani Tresna Absari, S.T., M.Kom.', '202017@staff.ubaya.ac.id', '$2y$10$kixAAeJGfBo1C7C8IqeQVuBehyy.kCx0iaOETwciQQ/VGOiyUc9Pe', 3, 4, NULL, NULL, NULL),
(24, 'Ir. Bambang Prijambodo, M.MT.', '187018@staff.ubaya.ac.id', '$2y$10$wZshJd1ASW5YMwt76mKN8ehCF34Nz7UabkCQIK9nhJxXZFWxL1T96', 3, 5, NULL, NULL, NULL),
(25, 'Susana Limanto, S.T., M.Si.', '197030@staff.ubaya.ac.id', '$2y$10$6MFF6xURS5JyT9fiBTOWG.UKw.3hjyMqh5TNLtQGsVgH7DTYaQuPK', 3, 6, NULL, NULL, NULL),
(26, 'Prof. Drs. Nur Iriawan, M.Kom., Ph.D.', '205720@staff.ubaya.ac.id', '$2y$10$Nu8vaa94qbI63YgKC775Ou/cwglKlaHaEqe4oJItZfDU4bH7m5uoq', 3, 7, NULL, NULL, NULL),
(27, 'Dr. Budi Hartanto, S.T., M.Sc.', '195012@staff.ubaya.ac.id', '$2y$10$fLo2iwdsE7c6ZAGi8kN8LuX289zTYfULIkJXGSl4qPI.rrPxxQNt6', 3, 8, NULL, NULL, NULL),
(28, 'Maya Hilda Lestari Louk, S.T., M.Sc.', '215027@staff.ubaya.ac.id', '$2y$10$1tTJ01Rlyw24ghrSIvfTMeEsBV7gkDAWlwJ0eSUcdyRIuLOdNgv2S', 3, 9, NULL, NULL, NULL),
(29, 'Dr. Joko Siswantoro, S.Si., M.Si.', '198032@staff.ubaya.ac.id', '$2y$10$GXaB50gyVI7vlu5C/FZUDu8rLSPOr610xevEUuV1.b1xqbirz2YOW', 3, 10, NULL, NULL, NULL),
(30, 'Njoto Benarkah, S.T., M.Sc.', '201026@staff.ubaya.ac.id', '$2y$10$bd4RfBO2Luxp4HzS03SgqOJ3E857LMWGmrVUhVEbOq9vVBY5X.kd6', 3, 11, NULL, NULL, NULL),
(31, 'Endah Asmawati, S.Si., M.Si.', '201007@staff.ubaya.ac.id', '$2y$10$IDP1JzuPNUEe5pxbj4/W2.iIoL9qXTypWTojVFchfHCNwNiDfw64K', 3, 12, NULL, NULL, NULL),
(32, 'Ellysa Tjandra, S.T., M.MT.', '  203014@staff.ubaya.ac.id', '$2y$10$MdaQuvdXSA.HzaCV4Llp7e4vVjgPJ7uwtdpq7qSAEB3S2wMETb9z.', 3, 13, NULL, NULL, NULL),
(33, 'Mohammad Farid Naufal, S.Kom., M.Kom.', '216037@staff.ubaya.ac.id', '$2y$10$zV3EIbYamwpkYUn0opKwAOhrxlgrs2FZC/ewAJDC2ypAw3y9cbp5S', 3, 14, NULL, NULL, NULL),
(34, 'Hendra Dinata, S.T., M.Kom.', '210034@staff.ubaya.ac.id', '$2y$10$4lD1lHW0Auvnz9gaWEYZ7eXgXiBbaKj6bY8852otq.SNj3wkd7aIC', 3, 15, NULL, NULL, NULL),
(35, 'Richard Pramono, S.Kom., M.Sc.', '209023@staff.ubaya.ac.id', '$2y$10$Z5K8EUEbewpwsqhOotNzwu7PYygPT4fgy7CoaWBixLiHfaUcWx2NC', 3, 16, NULL, NULL, NULL),
(36, 'Andre, S.T., M.Sc.', '208020@staff.ubaya.ac.id', '$2y$10$3jwCRviMn3P1bf2.PK0CRO15H4mmSFnYIsBJek3pFAguIcQuHlEEe', 3, 17, NULL, NULL, NULL),
(37, 'Monica Widiasri, S.Kom., M.Kom.', '204027@staff.ubaya.ac.id', '$2y$10$rW0WOJwW58GILnPzGbJKwe4GvsbDGPAZBltdYCxW/vzmVqpEiP3.q', 3, 18, NULL, NULL, NULL),
(38, 'Liliana, S.T., M.MSI.', '206020@staff.ubaya.ac.id', '$2y$10$P0.ggrTRGde3zCk4l7g8ue/ctZ4r1v6UsoKXBliqkaAnv/LGjWeDW', 3, 19, NULL, NULL, NULL),
(39, 'Daniel Soesanto, S.T., M.M', '209344@staff.ubaya.ac.id', '$2y$10$FKDkqN5P5YzyFZFO6lqQ7.7fYYFuktav9hZAfyl0OEEV67XHlpZOe', 3, 20, NULL, NULL, NULL),
(40, 'Admin', 'admin@admin.ubaya.ac.id', '$2y$10$SVOc4XCk8NomJgVVvhf7i.WFAxuLoLahfJUXDuYAz48t6gS/79Vza', 1, 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `chat_dosen_id_foreign` (`dosen_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `9` (`npk`);

--
-- Indexes for table `jenis_konsul`
--
ALTER TABLE `jenis_konsul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerja_praktek`
--
ALTER TABLE `kerja_praktek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kerja_praktek_mahasiswa_satu_id_foreign` (`mahasiswa_satu_id`),
  ADD KEY `kerja_praktek_mahasiswa_dua_id_foreign` (`mahasiswa_dua_id`),
  ADD KEY `kerja_praktek_dosen_pembimbing_id_foreign` (`dosen_pembimbing_id`),
  ADD KEY `kerja_praktek_periode_id_foreign` (`periode_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `9` (`nrp`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah_periode_dosen`
--
ALTER TABLE `matakuliah_periode_dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matakuliah_periode_dosen_matakuliah_id_foreign` (`matakuliah_id`),
  ADD KEY `matakuliah_periode_dosen_dosen_id_foreign` (`dosen_id`),
  ADD KEY `matakuliah_periode_dosen_periode_id_foreign` (`periode_id`);

--
-- Indexes for table `matakuliah_periode_mahasiswa`
--
ALTER TABLE `matakuliah_periode_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matakuliah_periode_mahasiswa_matakuliah_id_foreign` (`matakuliah_id`),
  ADD KEY `matakuliah_periode_mahasiswa_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `matakuliah_periode_mahasiswa_periode_id_foreign` (`periode_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slot_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `slot_dosen_id_foreign` (`dosen_id`),
  ADD KEY `slot_jenis_konsul_id_foreign` (`jenis_konsul_id`);

--
-- Indexes for table `slot_mhs`
--
ALTER TABLE `slot_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slot_mhs_id_slot_foreign` (`id_slot`),
  ADD KEY `slot_mhs_id_mahasiswa_foreign` (`id_mahasiswa`);

--
-- Indexes for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tugas_akhir_dosen_satu_id_foreign` (`dosen_satu_id`),
  ADD KEY `tugas_akhir_dosen_dua_id_foreign` (`dosen_dua_id`),
  ADD KEY `tugas_akhir_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `tugas_akhir_periode_id_foreign` (`periode_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jenis_konsul`
--
ALTER TABLE `jenis_konsul`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kerja_praktek`
--
ALTER TABLE `kerja_praktek`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `matakuliah_periode_dosen`
--
ALTER TABLE `matakuliah_periode_dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matakuliah_periode_mahasiswa`
--
ALTER TABLE `matakuliah_periode_mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slot_mhs`
--
ALTER TABLE `slot_mhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `chat_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`);

--
-- Constraints for table `kerja_praktek`
--
ALTER TABLE `kerja_praktek`
  ADD CONSTRAINT `kerja_praktek_dosen_pembimbing_id_foreign` FOREIGN KEY (`dosen_pembimbing_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `kerja_praktek_mahasiswa_dua_id_foreign` FOREIGN KEY (`mahasiswa_dua_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `kerja_praktek_mahasiswa_satu_id_foreign` FOREIGN KEY (`mahasiswa_satu_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `kerja_praktek_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`id`);

--
-- Constraints for table `matakuliah_periode_dosen`
--
ALTER TABLE `matakuliah_periode_dosen`
  ADD CONSTRAINT `matakuliah_periode_dosen_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matakuliah_periode_dosen_matakuliah_id_foreign` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matakuliah_periode_dosen_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `matakuliah_periode_mahasiswa`
--
ALTER TABLE `matakuliah_periode_mahasiswa`
  ADD CONSTRAINT `matakuliah_periode_mahasiswa_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matakuliah_periode_mahasiswa_matakuliah_id_foreign` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matakuliah_periode_mahasiswa_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slot`
--
ALTER TABLE `slot`
  ADD CONSTRAINT `slot_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `slot_jenis_konsul_id_foreign` FOREIGN KEY (`jenis_konsul_id`) REFERENCES `jenis_konsul` (`id`),
  ADD CONSTRAINT `slot_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`);

--
-- Constraints for table `slot_mhs`
--
ALTER TABLE `slot_mhs`
  ADD CONSTRAINT `slot_mhs_id_mahasiswa_foreign` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `slot_mhs_id_slot_foreign` FOREIGN KEY (`id_slot`) REFERENCES `slot` (`id`);

--
-- Constraints for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD CONSTRAINT `tugas_akhir_dosen_dua_id_foreign` FOREIGN KEY (`dosen_dua_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `tugas_akhir_dosen_satu_id_foreign` FOREIGN KEY (`dosen_satu_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `tugas_akhir_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `tugas_akhir_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

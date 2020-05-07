-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2020 pada 08.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_rt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `access`
--

INSERT INTO `access` (`id`, `tanggal`) VALUES
(1, '2020-05-03'),
(2, '2020-05-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'VehL8asgzay5cZiSR9myB4B93T8xUe3d', 1, '2017-03-09 00:55:53', '2017-03-09 00:55:53', '2017-03-09 00:55:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agamas`
--

CREATE TABLE `agamas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agamas`
--

INSERT INTO `agamas` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Agama Islam', '2020-04-24 16:06:34', '2020-04-24 16:06:34', NULL),
(2, 'Agama Kristen Protestan', '2020-04-24 16:06:42', '2020-04-24 16:06:42', NULL),
(3, 'Agama Katolik', '2020-04-24 16:06:50', '2020-04-24 16:06:50', NULL),
(4, 'Agama Hindu', '2020-04-24 16:07:04', '2020-04-24 16:07:04', NULL),
(5, 'Agama Buddha', '2020-04-24 16:07:13', '2020-04-24 16:07:13', NULL),
(6, 'Agama Kong Hu Cu', '2020-04-24 16:07:20', '2020-04-24 16:07:20', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cacats`
--

CREATE TABLE `cacats` (
  `id` int(10) UNSIGNED NOT NULL,
  `cacat_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cacats`
--

INSERT INTO `cacats` (`id`, `cacat_nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Buta (Tuna Netra)', '2020-04-24 16:07:42', '2020-04-24 16:07:42', NULL),
(2, 'Tuli (Tuna Rungu)', '2020-04-24 16:07:51', '2020-04-24 16:07:51', NULL),
(3, 'Bisu (Tuna Wicara)', '2020-04-24 16:08:05', '2020-04-24 16:08:05', NULL),
(4, 'Cacat Fisik (Tuna Daksa)', '2020-04-24 16:08:13', '2020-04-24 16:08:13', NULL),
(5, 'Keterbelakangan Mental (Tuna Grahita)', '2020-04-24 16:08:24', '2020-04-24 16:08:24', NULL),
(6, 'Cacat Pengendalian Diri (Tuna Laras)', '2020-04-24 16:08:38', '2020-04-24 16:08:38', NULL),
(7, 'Cacat Kombinasi (Tuna Ganda)', '2020-04-24 16:08:52', '2020-04-24 16:08:52', NULL),
(8, 'Tidak Disabilitas', '2020-04-29 22:46:43', '2020-04-29 22:46:43', NULL),
(9, 'Lainnya', '2020-04-29 22:46:55', '2020-04-29 22:46:55', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cara_kbs`
--

CREATE TABLE `cara_kbs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cara_kbs`
--

INSERT INTO `cara_kbs` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IUD', '2020-04-24 16:09:37', '2020-04-24 16:09:37', NULL),
(2, 'Kondom', '2020-04-24 16:09:43', '2020-04-24 16:09:43', NULL),
(3, 'Hormonal (pil)', '2020-04-24 16:09:54', '2020-04-24 16:09:54', NULL),
(4, 'Implan', '2020-04-24 16:09:59', '2020-04-24 16:09:59', NULL),
(5, 'Suntik KB', '2020-04-24 16:10:08', '2020-04-24 16:10:08', NULL),
(6, 'Tubektomi', '2020-04-24 16:10:24', '2020-04-24 16:10:24', NULL),
(7, 'Tidak KB', '2020-04-29 22:47:16', '2020-04-29 22:47:16', NULL),
(8, 'Lainnya', '2020-04-29 22:47:30', '2020-04-29 22:47:30', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `desas`
--

CREATE TABLE `desas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kades_id` int(11) NOT NULL,
  `alamat_kantor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_camat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_camat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dusuns`
--

CREATE TABLE `dusuns` (
  `id` int(10) UNSIGNED NOT NULL,
  `dusun_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun_kadus_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungans`
--

CREATE TABLE `hubungans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hubungans`
--

INSERT INTO `hubungans` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kepala Keluarga', '2020-04-24 16:13:05', '2020-04-24 16:13:05', NULL),
(2, 'Isteri', '2020-04-24 16:13:20', '2020-04-24 16:13:20', NULL),
(3, 'Anak', '2020-04-24 16:13:25', '2020-04-24 16:13:25', NULL),
(4, 'Menantu', '2020-04-24 16:13:31', '2020-04-24 16:13:31', NULL),
(5, 'Cucu', '2020-04-24 16:13:38', '2020-04-24 16:13:38', NULL),
(6, 'Mertua', '2020-04-24 16:13:53', '2020-04-24 16:13:53', NULL),
(7, 'Famili Lain', '2020-04-24 16:14:00', '2020-04-24 16:14:00', NULL),
(8, 'Pembantu', '2020-04-24 16:14:06', '2020-04-24 16:14:06', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatans`
--

CREATE TABLE `jabatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kawins`
--

CREATE TABLE `kawins` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kawins`
--

INSERT INTO `kawins` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kawin', '2020-04-24 16:17:17', '2020-04-24 16:17:17', NULL),
(2, 'Belum Kawin', '2020-04-24 16:17:23', '2020-04-24 16:17:23', NULL),
(3, 'Cerai Hidup', '2020-04-24 16:17:29', '2020-04-24 16:17:29', NULL),
(4, 'Cerai Mati', '2020-04-24 16:17:45', '2020-04-24 16:17:45', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompoks`
--

CREATE TABLE `kelompoks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penanggungjawab` int(11) NOT NULL,
  `nomor_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelompok` int(11) NOT NULL,
  `tanggal_berdiri` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluargas`
--

CREATE TABLE `keluargas` (
  `id` int(10) UNSIGNED NOT NULL,
  `kk_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk_nik_kepala` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk_alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk_id_cluster` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keluargas`
--

INSERT INTO `keluargas` (`id`, `kk_no`, `kk_nik_kepala`, `kk_alamat`, `kk_id_cluster`, `created_at`, `updated_at`) VALUES
(1, '3324152112100001', '3324152107950004', 'Karangsari Kendal', NULL, '2020-04-29 23:20:26', '2020-04-29 23:20:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masukan`
--

CREATE TABLE `masukan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masukan`
--

INSERT INTO `masukan` (`id`, `nama`, `no_hp`, `perihal`, `isi`, `tanggal`) VALUES
(1, 'Agus Siswanto', 81292532673, 'Test Perihal', 'Aplikasi e-RT adalah aplikasi yang dibuat untuk RT.004, Kelurahan Karangsari untuk media mencari data warga RT.004. Diharapkan aplikasi ini dapat menunjang kinerja RT agar dapat melaksanakan pekerjaan dengan mudah.', '2020-04-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(8, '2017_03_12_144222_create_keluargas_table', 2),
(9, '2017_03_13_040625_create_dusuns_table', 2),
(10, '2017_03_13_060708_create_cacats_table', 2),
(11, '2017_03_13_063225_create_cara_kbs_table', 2),
(12, '2017_03_13_063234_create_agamas_table', 2),
(13, '2017_03_13_063243_create_hubungans_table', 2),
(14, '2017_03_13_063250_create_kawins_table', 2),
(15, '2017_03_13_063302_create_pekerjaans_table', 2),
(16, '2017_03_13_063308_create_pendidikans_table', 2),
(17, '2017_03_13_063317_create_statuses_table', 2),
(18, '2017_03_13_080856_create_rws_table', 2),
(19, '2017_03_13_090135_create_rts_table', 2),
(20, '2017_03_14_020038_create_penduduks_table', 2),
(21, '2017_03_21_062549_create_pemerintahs_table', 2),
(22, '2017_03_21_063332_create_jabatans_table', 2),
(23, '2017_03_23_034301_add_soft_deletes_to_agamas_table', 2),
(24, '2017_03_23_043344_add_soft_deletes_to_cacats_table', 2),
(25, '2017_03_23_045253_add_soft_deletes_to_cara_kbs_table', 2),
(26, '2017_03_23_062920_add_soft_deletes_to_hubungans_table', 2),
(27, '2017_03_23_064601_add_soft_deletes_to_jabatans_table', 2),
(28, '2017_03_23_065807_add_soft_deletes_to_kawins_table', 2),
(29, '2017_03_23_071545_add_soft_deletes_to_pekerjaans_table', 2),
(30, '2017_03_23_075338_add_soft_deletes_to_pendidikans_table', 2),
(31, '2017_03_23_081622_add_soft_deletes_to_statuses_table', 2),
(32, '2017_03_28_040235_create_desas_table', 2),
(33, '2017_03_29_024947_create_surat_templates_table', 2),
(34, '2017_03_29_034053_add_keterangan_and_html_code_to_template', 2),
(35, '2017_04_06_095353_create_kelompoks_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pekerjaans`
--

INSERT INTO `pekerjaans` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Wiraswasta', '2020-04-29 22:49:28', '2020-04-29 22:49:28', NULL),
(2, 'Karyawan Swasta', '2020-04-29 22:49:40', '2020-04-29 22:49:40', NULL),
(3, 'Pegawai Negeri Sipil', '2020-04-29 22:50:04', '2020-04-29 22:50:04', NULL),
(4, 'Lainnya', '2020-04-29 22:50:11', '2020-04-29 22:50:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemerintahs`
--

CREATE TABLE `pemerintahs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_jabatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikans`
--

CREATE TABLE `pendidikans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendidikans`
--

INSERT INTO `pendidikans` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sekolah Dasar (SD) / Sederajat', '2020-04-29 22:48:55', '2020-04-29 22:48:55', NULL),
(2, 'Sekolah Menengah Pertama (SMP) / Sederajat', '2020-04-29 22:49:04', '2020-04-29 22:49:04', NULL),
(3, 'Sekolah Menengah Atas (SMA) / Sederajat', '2020-04-29 22:49:10', '2020-04-29 22:49:10', NULL),
(4, 'Universitas (Univ) / Sederajat', '2020-04-29 22:49:16', '2020-04-29 22:49:16', NULL),
(5, 'Lainnya', '2020-04-29 22:50:27', '2020-04-29 22:50:27', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduks`
--

CREATE TABLE `penduduks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` int(11) NOT NULL,
  `pendidikan` int(11) NOT NULL,
  `pekerjaan` int(11) DEFAULT NULL,
  `status_kawin` int(11) NOT NULL,
  `hubungan` int(11) NOT NULL,
  `gol_darah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan` int(11) NOT NULL,
  `alamat_sblm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_skrg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akta_nikah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_nikah` date DEFAULT NULL,
  `akta_cerai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_cerai` date DEFAULT NULL,
  `cacat` int(11) NOT NULL,
  `cara_kb` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `foto_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penduduks`
--

INSERT INTO `penduduks` (`id`, `nik`, `nama`, `no_kk`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_kawin`, `hubungan`, `gol_darah`, `kewarganegaraan`, `alamat_sblm`, `alamat_skrg`, `akta_nikah`, `tanggal_nikah`, `akta_cerai`, `tanggal_cerai`, `cacat`, `cara_kb`, `status`, `foto_penduduk`, `created_at`, `updated_at`) VALUES
(1, '3324152107950004', 'Agus Siswanto', '3324152112100001', 'LAKI-LAKI', 'Kendal', '1995-06-21', 1, 4, 2, 1, 1, 'O', 1, 'Karangsari Kendal', 'Karangsari Kendal', 'SK. 08/11/19', '2019-11-08', NULL, NULL, 1, 1, 1, '20200430-1588229101.png', '2020-04-29 23:09:12', '2020-05-02 18:48:18'),
(2, '3324152107950002', 'Sintia Erawati', '3324152112100001', 'PEREMPUAN', 'Tasikmalaya', '1999-05-03', 1, 2, 1, 1, 2, '-', 1, 'Tagog Tasikmalaya', 'Karangsari Kendal', 'SK. 08/11/19', '2019-11-08', NULL, NULL, 1, 1, 1, '20200430-1588228864.png', '2020-04-29 23:17:50', '2020-05-02 18:47:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(3, 1, 'OgwAORfqs0VtYnJHKdRHJYgaru6iGtVn', '2020-04-25 20:35:11', '2020-04-25 20:35:11'),
(4, 1, 'TPu8hIWvypGMZSwdQvn7TATHwTsyTogk', '2020-04-29 22:45:04', '2020-04-29 22:45:04'),
(5, 1, 'JJbRZ5dNrMfWRnBRb5mbVR6oPTf1DOHB', '2020-04-29 23:07:31', '2020-04-29 23:07:31'),
(6, 1, 'J7M3898R7eF5j8kZCXmgi6jajEWLic38', '2020-05-02 17:46:17', '2020-05-02 17:46:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Superadmin', NULL, NULL, NULL),
(2, 'admin', 'Admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-03-09 00:55:53', '2017-03-09 00:55:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rts`
--

CREATE TABLE `rts` (
  `id` int(10) UNSIGNED NOT NULL,
  `rt_dusun_id` int(11) NOT NULL,
  `rt_rw_id` int(11) NOT NULL,
  `rt_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt_ketua_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rws`
--

CREATE TABLE `rws` (
  `id` int(10) UNSIGNED NOT NULL,
  `rw_dusun_id` int(11) NOT NULL,
  `rw_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw_ketua_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `statuses`
--

INSERT INTO `statuses` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Warga Asli', '2020-04-29 22:48:20', '2020-04-29 22:48:20', NULL),
(2, 'Warga Pindahan', '2020-04-29 22:48:25', '2020-04-29 22:48:25', NULL),
(3, 'Warga Sementara', '2020-04-29 22:48:30', '2020-04-29 22:48:30', NULL),
(4, 'Lainnya', '2020-04-29 22:48:38', '2020-04-29 22:48:38', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_templates`
--

CREATE TABLE `surat_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `html_code` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2017-03-09 01:39:57', '2017-03-09 01:39:57'),
(2, NULL, 'ip', '127.0.0.1', '2017-03-09 01:39:57', '2017-03-09 01:39:57'),
(3, 1, 'user', NULL, '2017-03-09 01:39:57', '2017-03-09 01:39:57'),
(4, NULL, 'global', NULL, '2020-04-24 15:50:55', '2020-04-24 15:50:55'),
(5, NULL, 'ip', '127.0.0.1', '2020-04-24 15:50:55', '2020-04-24 15:50:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'xcodeme21@gmail.com', '$2y$10$k1I/z.RK9c6RG.GFbcG4HuRQxDDdtw5.tG8bzuVoFS1hQvwbSvV7K', NULL, '2020-05-02 17:46:17', 'Agus', 'Siswanto', '2017-03-09 00:55:53', '2020-05-02 17:46:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `agamas`
--
ALTER TABLE `agamas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cacats`
--
ALTER TABLE `cacats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cara_kbs`
--
ALTER TABLE `cara_kbs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dusuns`
--
ALTER TABLE `dusuns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dusuns_dusun_nama_unique` (`dusun_nama`),
  ADD UNIQUE KEY `dusuns_dusun_kadus_id_unique` (`dusun_kadus_id`);

--
-- Indeks untuk tabel `hubungans`
--
ALTER TABLE `hubungans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kawins`
--
ALTER TABLE `kawins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelompoks`
--
ALTER TABLE `kelompoks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluargas`
--
ALTER TABLE `keluargas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keluargas_kk_no_unique` (`kk_no`),
  ADD UNIQUE KEY `keluargas_kk_nik_kepala_unique` (`kk_nik_kepala`);

--
-- Indeks untuk tabel `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemerintahs`
--
ALTER TABLE `pemerintahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikans`
--
ALTER TABLE `pendidikans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduks`
--
ALTER TABLE `penduduks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penduduks_nik_unique` (`nik`);

--
-- Indeks untuk tabel `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indeks untuk tabel `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indeks untuk tabel `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indeks untuk tabel `rts`
--
ALTER TABLE `rts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rts_rt_ketua_id_unique` (`rt_ketua_id`);

--
-- Indeks untuk tabel `rws`
--
ALTER TABLE `rws`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rws_rw_ketua_id_unique` (`rw_ketua_id`);

--
-- Indeks untuk tabel `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_templates`
--
ALTER TABLE `surat_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `agamas`
--
ALTER TABLE `agamas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `cacats`
--
ALTER TABLE `cacats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `cara_kbs`
--
ALTER TABLE `cara_kbs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `desas`
--
ALTER TABLE `desas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dusuns`
--
ALTER TABLE `dusuns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hubungans`
--
ALTER TABLE `hubungans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kawins`
--
ALTER TABLE `kawins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelompoks`
--
ALTER TABLE `kelompoks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keluargas`
--
ALTER TABLE `keluargas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `masukan`
--
ALTER TABLE `masukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemerintahs`
--
ALTER TABLE `pemerintahs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendidikans`
--
ALTER TABLE `pendidikans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penduduks`
--
ALTER TABLE `penduduks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rts`
--
ALTER TABLE `rts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rws`
--
ALTER TABLE `rws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat_templates`
--
ALTER TABLE `surat_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

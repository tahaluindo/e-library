-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2022 pada 03.27
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggotas`
--

CREATE TABLE `anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggotas`
--

INSERT INTO `anggotas` (`id`, `nama_anggota`, `jenis_kelamin`, `alamat`, `email`, `nomor`, `created_at`, `updated_at`) VALUES
(12345, 'Rikiansyah', 'Laki-laki', 'Genteng', 'rikiansyah.aris29@gmail.com', '081230464341', NULL, NULL),
(13452, 'Rikiansyah aris', 'Laki-laki', 'Genteng', 'rikiansyah.aris28@gmail.com', '081230464342', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_bukus`
--

CREATE TABLE `detail_bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_genre` bigint(20) UNSIGNED NOT NULL,
  `foto_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_halaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_bukus`
--

INSERT INTO `detail_bukus` (`id`, `id_genre`, `foto_buku`, `nama_buku`, `penulis_buku`, `penerbit_buku`, `tahun_terbit`, `jumlah_halaman`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 102, 'Tia.jpg', 'Tia', 'kembangmanggis', 'Gramedia Pustaka Utama', '2019', '427', 'Tia, seorang gadis SMA kelas dua, menatap kehidupan dengan penuh ironi. Kedewasaan adalah penghapusan sekian banyak kenikmatan hidup, begitu selalu pendapatnya. Namun tentu saja dia tidak dapat menahan perputaran dunia. Hukum alam berlaku pada setiap manusia, termasuk Tia, yang sejak awal tegas-tegas menolaknya. Di saat dia tengah memasuki arti kedewasaan itu sendiri, Tia sama sekali tidak menyadarinya. Alam telah menjeratnya dengan amat halus, mengantar gadis itu ke dunia barunya tanpa penolakan lagi. Tia kini telah siap menyongsong fajar dengan mata dan hati terbuka. Dia berhasil menembus pintu kedewasaan itu lewat uluran tangan gaib yang menolongnya. Apa lagi kalau bukan tangan-tangan gaib cinta?', NULL, NULL),
(2, 101, 'kisah-tanah-jawa.jpg', 'Kisah Tanah Jawa', '@kisahtanahjawa', 'GagasMedia', '2018', '250', 'Tanah Jawa menyimpan banyak kisah misteri yang takkan habis diceritakan dalam semalam. Sosok misterius, ritual mistis, dan tempat angker, selalu membuat kita penasaran. Buku Kisah Tanah Jawa mengajak pembaca membuka selubung mitos dan mistis yang selama ini hanya menjadi ksak-kusuk di masyarakat', NULL, NULL),
(3, 103, 'kisah-tanah-jawa.jpg', 'Kisah Tanah Jawa', '@kisahtanahjawa', 'GagasMedia', '2018', '250', 'Tanah Jawa menyimpan banyak kisah misteri yang takkan habis diceritakan dalam semalam. Sosok misterius, ritual mistis, dan tempat angker, selalu membuat kita penasaran. Buku Kisah Tanah Jawa mengajak pembaca membuka selubung mitos dan mistis yang selama ini hanya menjadi ksak-kusuk di masyarakat', NULL, NULL),
(4, 104, 'Hyderabad.jpg', 'Hyderabad', 'Irvan Karquza', 'Pendidikan Deepublish.', '2020', '172', 'Pedih, terpaksa aku berpamit dari rumah. Menuju tempat baru yang masih tereka dalam imajinasi. Salah satu hal yang mendasar bagiku merantau adalah, enam orang anak Ibu, tidak satu pun yang kuliah. Bukan tanpa alasan. Karena Penghasilan Ayah yang rendah, pendidikan yang tak sampai, serta relasi yang terbatas. Membuatku ingin mengubah keadaan keluarga ini.\n                Ibuku tidak banyak bicara, tapi ku tahu dia banyak menangis dalam doa.  Setiap aku berdoa aku juga membayangkan wajahnya, air mataku tumpah. Aku katakan “Aku akan membanggakanmu Ibu.”\n                Entah berapa lama lagi aku akan pulang ke kampung halaman. Ibu memberiku uang yang di pinjamnya dari tetangga.\n                “Bismillahi tawakkaltu Allallahi Walahaula Walaquata Ilabillah”.\n                “ Aku berangkat Bu.” Aku melihat senyum itu tersungging di bibirnya.', NULL, NULL),
(5, 104, 'Mindset.jpg', 'Mindset', 'Irvan Karquza', 'Carol S. Dweck', '2006', '172', 'Paparan tentang kesuksesan dalam buku ini sangat mendasar dan langka.\n                Lazimnya, buku-buku tentang kesuksesan lebih menawarkan sisi-sisi\n                praktis. Tetapi, buku ini justru mengajak Anda menggarap inti masalah\n                kesuksesan: pikiran. Tak hanya itu, buku ini mengontraskan dengan apik\n                tokoh-tokoh duniadi bidang musik, sastra, sains, olahraga, dan bisnis\n                yang berpola pikir tetap (fixed mindset) dan berpola pikir berkembang\n                (growth mindset). Ternyata, tokoh yang berpola pikir berkembang lebih\n                mampu mempertahankan kesuksesan dan kegembiraan hidup.\n                ', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorits`
--

CREATE TABLE `favorits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `genres`
--

INSERT INTO `genres` (`id`, `nama_genre`, `created_at`, `updated_at`) VALUES
(101, 'horor', NULL, NULL),
(102, 'romance', NULL, NULL),
(103, 'action', NULL, NULL),
(104, 'umum', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_29_085659_create_genres_table', 1),
(6, '2022_05_30_160001_create_anggotas_table', 1),
(7, '2022_05_30_160031_create_detail_bukus_table', 1),
(8, '2022_05_30_163930_create_penggunas_table', 1),
(9, '2022_05_31_025823_create_pinjams_table', 1),
(10, '2022_05_31_025903_create_histories_table', 1),
(11, '2022_05_31_025917_create_favorits_table', 1),
(12, '2022_05_31_030023_create_peminjamen_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjamen`
--

CREATE TABLE `peminjamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pinjam` bigint(20) UNSIGNED NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `id_pengurus` bigint(20) UNSIGNED NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penggunas`
--

INSERT INTO `penggunas` (`id`, `nip`, `nama_petugas`, `jabatan`, `email`, `nomor`, `created_at`, `updated_at`) VALUES
(1, '1016', 'Rikiansyah', 'Petugas', 'rikiansyah.aris29@gmail.com', '081230464341', NULL, NULL),
(2, '1030', 'Erviannur Rahmasari', 'Petugas', 'erviannur01@gmail.com', '085707811627', '2022-06-02 00:43:34', '2022-06-02 05:38:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjams`
--

CREATE TABLE `pinjams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal_pinjam` date NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `id_pengurus` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_bukus`
--
ALTER TABLE `detail_bukus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_bukus_id_genre_foreign` (`id_genre`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `favorits`
--
ALTER TABLE `favorits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorits_id_buku_foreign` (`id_buku`),
  ADD KEY `favorits_id_anggota_foreign` (`id_anggota`);

--
-- Indeks untuk tabel `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `histories_id_anggota_foreign` (`id_anggota`),
  ADD KEY `histories_id_buku_foreign` (`id_buku`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjamen_id_buku_foreign` (`id_buku`),
  ADD KEY `peminjamen_id_pengurus_foreign` (`id_pengurus`),
  ADD KEY `peminjamen_id_pinjam_foreign` (`id_pinjam`);

--
-- Indeks untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pinjams`
--
ALTER TABLE `pinjams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pinjams_id_anggota_foreign` (`id_anggota`),
  ADD KEY `pinjams_id_pengurus_foreign` (`id_pengurus`);

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
-- AUTO_INCREMENT untuk tabel `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13453;

--
-- AUTO_INCREMENT untuk tabel `detail_bukus`
--
ALTER TABLE `detail_bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `favorits`
--
ALTER TABLE `favorits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `peminjamen`
--
ALTER TABLE `peminjamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pinjams`
--
ALTER TABLE `pinjams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_bukus`
--
ALTER TABLE `detail_bukus`
  ADD CONSTRAINT `detail_bukus_id_genre_foreign` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id`);

--
-- Ketidakleluasaan untuk tabel `favorits`
--
ALTER TABLE `favorits`
  ADD CONSTRAINT `favorits_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggotas` (`id`),
  ADD CONSTRAINT `favorits_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `detail_bukus` (`id`);

--
-- Ketidakleluasaan untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `histories_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggotas` (`id`),
  ADD CONSTRAINT `histories_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `detail_bukus` (`id`);

--
-- Ketidakleluasaan untuk tabel `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD CONSTRAINT `peminjamen_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `detail_bukus` (`id`),
  ADD CONSTRAINT `peminjamen_id_pengurus_foreign` FOREIGN KEY (`id_pengurus`) REFERENCES `penggunas` (`id`),
  ADD CONSTRAINT `peminjamen_id_pinjam_foreign` FOREIGN KEY (`id_pinjam`) REFERENCES `pinjams` (`id`);

--
-- Ketidakleluasaan untuk tabel `pinjams`
--
ALTER TABLE `pinjams`
  ADD CONSTRAINT `pinjams_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggotas` (`id`),
  ADD CONSTRAINT `pinjams_id_pengurus_foreign` FOREIGN KEY (`id_pengurus`) REFERENCES `penggunas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

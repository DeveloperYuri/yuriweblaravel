-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 01:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuridee`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(41, 'afGjMCTmR3iS33zXBpCa3DphoiznhOqikAN6Yiun.png', '7 Langkah Efektif Mencuci Tangan dengan Sabun', '<p>Cara yang paling dianjurkan oleh WHO untuk membersihkan tangan ialah dengan cara mencuci tangan dengan sabun dan menggunakan air bersih yang mengalir dari keran selama 30 detik. Lalu bagaimana cara yang tepat untuk mencuci tangan?</p><ul><li>Basahi kedua telapak setinggi pertengahan lengan memakai air yang mengalir, ambil sabun kemudian usap lalu gosok kedua telapak secara lembut.</li><li>Usap dan gosok juga kedua punggung tangan secara bergantian, jangan terburu-buru.</li><li>Jangan lupa jari-jari anda, gosok sela-sela jari hingga bersih.</li><li>Bersihkan ujung jari secara bergantian dengan mengatupkannya.</li><li>Gosok dan putar kedua ibu jari secara bergantian.</li><li>Letakkan ujung jari ke telapak tangan kemudian gosok perlahan.</li><li>Bersihkan kedua pergelangan secara bergantian dengan cara memutar, kemudian diakhiri dengan membilas seluruh bagian tangan dengan air bersih yang mengalir lalu keringkan memakai handuk atau tisu</li></ul><p>Gunakan <strong>Yuri® Antibacterial Hand Soap</strong> untuk menghilangkan kuman maupun bakteri secara maksimal.</p>', '2024-12-04 18:00:29', '2024-12-04 18:00:29'),
(42, 'GzV2q31JW2XplrfytIkDFTttABgFsyEcYRKiu8RF.png', '9 Tips Cerdas Membersihkan Rumah dan Dapur', '<p>Pekerjaan rumah tangga memang tak pernah ada hentinya dan tak pernah pula ada habisnya. Jika Anda ingin membersihkan rumah tetapi tidak memiliki banyak waktu untuk berbelanja berbagai macam pembersih, yuk, pelajari 9 cara praktis yang bisa mempersingkat dan memudahkan tugas kita di dalam rumah berikut ini :</p><ul><li><strong>Bubuk Kopi</strong></li></ul><p>Gunakan bubuk kopi untuk menghilangkan bau tidak sedap pada lemari pendingin atau lemari penyimpanan lainnya. Anda hanya perlu meletakkan beberapa sendok bubuk kopi, baik yang sudah digunakan atau masih baru, pada sebuah wadah lalu letakkan di daerah yang Anda inginkan. Ganti bubuk kopi tersebut setiap dua bulan sekali untuk menjaga kesegaran dan menghindari bau kafein mendominasi lemari Anda.</p><ul><li><strong>Selotip</strong></li></ul><p>Gunakan selotip untuk membersihkan pecahan beling tipis-tipis yang seringkali luput dari penglihatan pada permukaan lantai. Ambil selotip yang paling besar, lalu tempelkan ke tempat pecahan kaca tadi berada. Maka pecahan kaca bisa terangkat dengan sendirinya melalui selotip tersebut.</p><ul><li><strong>Blender</strong></li></ul><p>Blender merupakan alat rumah tangga yang cukup sulit dibersihkan karena bentuk yang bagian bawahnya memiliki pisau yang menyulitkan kita sehingga harus dibongkar dahulu. Namun kini ada yang lebih mudah yaitu dengan menuangkan sabun cuci piring beserta air panas kedalamnya. Selanjutnya nyalakan mesin blender beberapa menit dan cuci bersih serta bersihkan. Jadi tidak perlu repot melepas bagian-bagian dalam blender untuk hasil yang maksimal.</p><p>&nbsp;<strong>Wastafel yang Tersumbat</strong></p><p>Wastafel yang tersumbat pasti akan menyulitkan kita dalam membersihkannya seperti harus membongkarnya ataupun memanggil tukang yang lebih ahli. Padahal ada cara yang lebih mudah lho yaitu dengan mendidihkan terlebih dahulu campuran antara baking soda dengan cuka. Setelah tercampur, masukkan ke lubang wastafel dan tunggu beberapa menit. Coba alirkan kembali air ke lubang wastafel tersebut dan lihatlah wastafel kembali lancar.</p><ul><li><strong>Sepatu Basah</strong></li></ul><p>Musim hujan seperti ini seringkali menimbulkan permasalahan baru seperti sepatu yang kotor dan susah dikeringkan karena cuaca yang tidak mendukung. Untuk bisa mempercepat pengeringan, masukkan gulungan koran atau majalah dalam sepatu tersebut. kadar air dalam sepatu pun akan sedikit demi sedikit terserap dan mempercepat pengeringan.</p><ul><li><strong>Noda pada Karpet</strong></li></ul><p>Noda pada karpet sangatlah susah untuk dibersihkan. Nah ada cara yang lebih mudah untuk menghilangkannya yaitu dengan menyemprotkan larutan dari campuran 2 gelas air dengan 1 gelas cuka. Tutup noda dengan kain yang basah dan setrika sebentar. Sekitar 1 menit kemudian noda di karpet pun hilang.</p><ul><li><strong>Muntahan</strong></li></ul><p>Tak bisa dipungkiri, bagi kamu yang memiliki anak yang masih kecil akan merasakan yang namanya bekas muntahan di rumah seperti di karpet atau di tempat lainnya. Untuk membersihkannya, tuang baking soda yang dicampur dengan air pada muntahan sebelum dibersihkan. Cukup jeda semalaman, muntahan pun bisa dibersihkan dengan maksimal.</p><ul><li><strong>Spons dan Sikat Arang</strong></li></ul><p>Spon ataupun sikat arang sering digunakan setiap harinya pada peralatan makan seperti piring ataupun wajan. Kamu tahu gak kalau sebenarnya didalam spon tersebut terdapat bakteri yang saat ditempelkan pada piring, maka bakteri tersebut akan menempel dan masuk dalam tubuh kita. Untuk membersihkan spon ataupun sikat arang tersebut agar terhindar dari penyebaran bakteri, letakkan spon dalam microwave dan panaskan selama 2 menit guna menghilangkan 99% bakteri atau kuman di dalamnya.</p><ul><li><strong>Peralatan Berbahan Perak</strong></li></ul><p>Peralatan yang terbuat dari bahan perak seperti alat makan ataupun aksesoris dapur lainnya jika digunakan secara terus menerus akan menimbulkan warna yang lebih pudar dan tak secerah dahulu. Untuk solusinya, rendam peralatan tersebut dalam campuran air panas dan baking soda. Setalah beberapa saat, peralatan tersebut akan berubah seperti baru pertama beli.</p><p>&nbsp;</p><p>&nbsp;</p>', '2024-12-04 18:03:24', '2024-12-19 18:15:35'),
(43, '9b2W0dcgn73YeO08rA791y77dvNuxj0zRkqSn7eg.png', '7 Ciri-ciri Anak Sehat', '<p>Anak yang sehat dengan pertumbuhan dan perkembangan yang normal tentu menjadi idaman semua orang tua. Ciri-ciri anak yang sehat tidak hanya dapat dilihat dari fisiknya, namun juga dari psikis dan sosialisasi terhadap lingkungan di sekitarnya. Seperti apa ciri-ciri anak sehat tersebut? Berikut ulasannya:</p><p><strong>1.Memiliki nafsu makan yang baik</strong></p><p>Anak yang memiliki nafsu makan yang&nbsp; baik tentu kebutuhan nutrisi dan asupan gizinya tercukupi.&nbsp; &nbsp;Anak yang sehat pun pasti pernah mengalami saat dimana mereka malas makan. Namun, jika nafsu makan anak tidak meningkat dalam jangka waktu cukup lama dan disertai dengan penurunan berat badan, ada baiknya Anda berkonsultasi ke dokter.</p><p><strong>2. Pernapasan tidak berbau</strong></p><p>Mayoritas penyebab kondisi nafas bau pada si buah hati disebabkan karena minimnya perawatan kebersihan mulut dan gigi mereka. Agar anak terhindar dari bau nafas, biasakan si kecil untuk merawat dan membersihkan gigi dan mulutnya melalui gosok gigi setidaknya dua kali sehari saat akan pergi tidur dan bangun pagi.</p><p><strong>3. Memiliki gigi cemerlang dan gusi berwarna merah muda</strong></p><p>Gigi anak yang cemerlang serta gusi merah muda berkilat menunjukkan anak memiliki kecukupan asupan niasin, asam folat, riboflavin, dan vitamin B 12.</p><p><strong>4. Kulit bersih dan apabila terluka mudah sembuh</strong></p><p>Kesehatan kulit juga merupakan ciri anak yang sehat. Kulit lembab dan tidak bersisik itu menandakan cukupnya asupan vitamin A, C, dan E.&nbsp;</p><p><strong>5. Suhu tubuh berada di antara 36,3oC – 37,7oC</strong></p><p>Suhu tubuh normal dapat berubah – ubah sepanjang hari. Suhu tubuh terendah terutama terjadi pada pagi hari, suhu tubuh dapat meningkat hingga 0,6 derajat Celcius pada sore hari.&nbsp;</p><p><strong>6. Rambut tidak kusam dan rontok</strong></p><p>Rambut dapat menjadi cerminan kondisi kesehatan secara keseluruhan. Asupan gizi yang cukup jelas akan memengaruhi tekstur rambut. Mereka yang asupan gizi-nya kurang biasanya rambutnya lebih tipis, kering, gampang patah dan rontok, serta cenderung berwarna kemerah-merahan.</p><p><strong>7. Antusias bermain</strong></p><p>Sejauh anak lincah dan ceria serta aktif bergerak dan bermain, berarti dia dalam keadaan sehat dan bugar. Karena balita sehat adalah balita lincah dan ceria serta aktif bergerak dan bermain.</p><p>Jadi, apakah si kecil kesayangan Anda termasuk anak yang sehat?</p>', '2024-12-04 18:06:22', '2024-12-18 23:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Yuri Satu edit', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, '2024-11-14 02:12:11'),
(2, 'Yuri Dua', '<p>yuiiyiyiyiyiyiyi</p>', NULL, '2024-11-14 02:03:03'),
(9, 'tiga', 'bener', '2024-11-13 19:37:44', '2024-11-13 19:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_14_014152_blogs', 2),
(5, '2024_11_15_082831_create_artikels_table', 3),
(6, '2024_11_18_081041_create_produk_barus_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk_barus`
--

CREATE TABLE `produk_barus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_barus`
--

INSERT INTO `produk_barus` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(9, 'GhsN7GfWsqYkeJ66z3HbKGUmHImAKx0VGCzsN1CJ.png', 'baby toilet', '2024-12-19 20:37:28', '2024-12-19 20:37:28'),
(10, 'VGByH9FPCzn39q4xyXEdDwuH4CvLmPvcTFyJe1wD.png', 'Evanyacasaca', '2024-12-19 23:54:10', '2024-12-19 23:54:10'),
(11, 'PPZedQM2o2tu90QTg8WmBbEgFLBjMBxW5TWsFcKo.png', 'Ligent Baby edit lagi', '2024-12-20 00:09:51', '2024-12-20 00:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BO94YeHvQ2jKGBjZvC4LvrRiQCTTaAcEUm4iCiKR', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibWhHT0hXVllScnYyRW1yTkQ0bjl5YTVKMVZKUXB5RWxPNW1mMEZaZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXBlcmFkbWluL2Rhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjk7fQ==', 1734688651);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_role` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Admin=1 ; SuperAdmin=2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_role`, `created_at`, `updated_at`) VALUES
(5, 'Budi Winarno', 'budiwinarno2@gmail.com', NULL, '$2y$12$SpRix5Fp7kOHhtAXLjFGW.sqgzC3KDA2/Bl7bm97Ca7ZYB5taIyRG', 'YC96a0suqR2CV06PJ76egwAAaFAElyYdoJ5Jw5Pp9VHLkXZD5qdrIQM5NZOI', 1, '2024-12-18 19:23:10', '2024-12-18 21:23:29'),
(9, 'Super Admin Yuri', 'developeryuri2@gmail.com', NULL, '$2y$12$FurHo9GIo/ulv7VD8Kf.LuXuHCGXYdfHSvGtCshFtJDluP8l8JeZu', 'wZf71LNTX97mmxUHlkyW5Io8x7yLZRPdgfhHFiECvErKYNYO3D', 2, '2024-12-19 18:41:49', '2024-12-20 00:34:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `produk_barus`
--
ALTER TABLE `produk_barus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk_barus`
--
ALTER TABLE `produk_barus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

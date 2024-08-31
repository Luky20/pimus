-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2023 pada 05.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pimus13_main`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `competition_categories`
--

CREATE TABLE `competition_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `desc` text NOT NULL,
  `competition_type` enum('Individu','Kelompok') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `competition_categories`
--

INSERT INTO `competition_categories` (`id`, `name`, `desc`, `competition_type`) VALUES
(1, 'Pilmapres', 'PILMAPRES merupakan salah satu acara yang diadakan oleh PIMUS XIII diselenggarakan oleh Universitas Surabaya yang terbuka untuk para mahasiswa dari semua fakultas. PILMAPRES adalah singkatan dari Pemilihan Mahasiswa Berprestasi yang dimana dalam perlombaan ini para mahasiswa tidak hanya dapat mengajukan prestasinya pada bidang-bidang tertentu saja, tetapi para mahasiswa dapat berpartisipasi untuk mengajukan tiap prestasi dalam semua bidang maupun keahlian yang dimiliki masing-masing mahasiswa. Tujuan dari diadakannya perlombaan PILMAPRES, yaitu menguatnya kesadaran untuk memfasilitasi kreativitas mahasiswa melalui kegiatan intrakurikuler, kokurikuler, dan ekstrakurikuler, meningkatnya kesadaran kampus dalam memberikan penghargaan kepada mahasiswa berprestasi, dan meningkatnya jumlah gagasan kreatif mahasiswa untuk pembangunan yang berasal dari kampus.', 'Individu'),
(2, 'Debat Inggris', 'Kompetisi Debat Bahasa Inggris merupakan tempat bagi mahasiswa di mana banyak ide berbeda dapat diperdebatkan dengan cara yang bermakna. Bahasa Inggris merupakan bahasa internasional yang penting dalam kehidupan mahasiswa baik untuk akademik, non-akademik maupun untuk bekerja nantinya. Lomba debat Bahasa Inggris merupakan ajang bagi mahasiswa untuk menunjukkan kemampuan terbaik dalam berpikir kritis, serta berkomunikasi dalam Bahasa Inggris, dan berargumen secara logis.', 'Kelompok'),
(3, 'Debat Indonesia', 'Debat Bahasa Indonesia merupakan ajang bagi mahasiswa Universitas Surabaya untuk dapat mengemukakan argumentasinya dalam permasalahan berskala nasional hingga internasional. Melalui kompetisi ini, mahasiswa dapat meningkatkan kemampuan berpikir kritis, logis, dan analitis dengan cara yang sistematis serta meningkatkan kemampuan berbahasa Indonesianya. Harapannya, mahasiswa dapat membangun 6C, yaitu collaboration (kerjasama), creativity (kreativitas), critical thinking (berpikir kritis), communication (berkomunikasi), citizenship (kewarganegaraan), dan character (karakter).', 'Kelompok'),
(5, 'Kompetisi MIPAS', 'K-MIPAS merupakan suatu kompetisi yang diselenggarakan oleh Universitas Surabaya dalam kegiatan PIMUS XIII. K-MIPAS berfokus pada bidang Matematika, Kimia, Fisika, Biologi, dan Statistika. Kompetisi MIPA dan Statistika bertujuan untuk menguji kemampuan mahasiswa dalam memecahkan suatu masalah pada konteks Ilmu Pengetahuan Alam, Matematika, dan Statistika. Pengembangan akademik pada Kompetisi MIPAS diharapkan dapat meningkatkan motivasi dan minat belajar para mahasiswa.', 'Individu'),
(6, 'Poster Digital Pendidikan', 'Poster Digital Pendidikan merupakan salah satu cabang lomba yang diadakan oleh PIMUS XIII yang diselenggarakan oleh Universitas Surabaya. Perlombaan poster digital pendidikan diadakan guna menjadi media/sarana bagi gerakan kepedulian dan kreativitas mahasiswa terhadap percepatan tercapainya SDG’s melalui penerapan teknologi digital dalam bentuk poster. Perlombaan poster sendiri dilakukan dengan membuat poster dengan tema “Gen Z Indonesia: Sang Maestro Masa Depan”. Lingkup yang digunakan ialah \"Gerakan kepedulian terhadap isu-isu kesetaraan gender untuk pembangunan sumber daya manusia Indonesia berkualitas\" dan \"Gerakan kepedulian peningkatan kualitas ketahanan pangan dan kesehatan untuk pembangunan sumber daya yang berkualitas dan berdaya saing\".', 'Kelompok'),
(7, 'Video Digital Pendidikan', 'Video Digital Pendidikan merupakan salah satu cabang lomba yang diadakan oleh PIMUS XIII yang diselenggarakan oleh Universitas Surabaya. Dengan mengangkat tema  “Literasi digital untuk menumbuhkembangkan sumber daya manusia pendidik sebagai talenta nasional menuju Indonesia Maju dengan tatanan kehidupan baru”. Perlombaan ini diharapkan yang menjadi wadah kreativitas mahasiswa dalam menyampaikan pesan yang terkandung dalam karya video sehingga mudah dipahami oleh penonton dan dapat menginspirasi untuk bertindak sesuai dengan tujuan yang telah diharapkan.', 'Kelompok'),
(8, 'PKM-Riset Sosial Humaniora', 'Program Kreativitas Mahasiswa adalah kegiatan dalam Pekan Ilmiah Mahasiswa Universitas Surabaya (PIMUS XIII) untuk meningkatkan mutu peserta didik agar kelak dapat menjadi anggota masyarakat yang memiliki kemampuan akademis dan/atau profesional yang dapat menerapkan, mengembangkan, dan menyebarluaskan ilmu pengetahuan, teknologi dan/atau kesenian serta memperkaya budaya nasional. Terdapat empat cabang PKM yang diperlombakan pada PIMUS XIII ini meliputi PKM-RSH (Riset Sosial Humaniora), PKM-PM (Pengabdian Masyarakat), PKM-K (Kewirausahaan), dan PKM-KC (Karsa Cipta).', 'Kelompok'),
(9, 'PKM-Kewirausahaan', 'Program Kreativitas Mahasiswa adalah kegiatan dalam Pekan Ilmiah Mahasiswa Universitas Surabaya (PIMUS XIII) untuk meningkatkan mutu peserta didik agar kelak dapat menjadi anggota masyarakat yang memiliki kemampuan akademis dan/atau profesional yang dapat menerapkan, mengembangkan, dan menyebarluaskan ilmu pengetahuan, teknologi dan/atau kesenian serta memperkaya budaya nasional. Terdapat empat cabang PKM yang diperlombakan pada PIMUS XIII ini meliputi PKM-RSH (Riset Sosial Humaniora), PKM-PM (Pengabdian Masyarakat), PKM-K (Kewirausahaan), dan PKM-KC (Karsa Cipta).', 'Kelompok'),
(10, 'PKM-Karsa Cipta', 'Program Kreativitas Mahasiswa adalah kegiatan dalam Pekan Ilmiah Mahasiswa Universitas Surabaya (PIMUS XIII) untuk meningkatkan mutu peserta didik agar kelak dapat menjadi anggota masyarakat yang memiliki kemampuan akademis dan/atau profesional yang dapat menerapkan, mengembangkan, dan menyebarluaskan ilmu pengetahuan, teknologi dan/atau kesenian serta memperkaya budaya nasional. Terdapat empat cabang PKM yang diperlombakan pada PIMUS XIII ini meliputi PKM-RSH (Riset Sosial Humaniora), PKM-PM (Pengabdian Masyarakat), PKM-K (Kewirausahaan), dan PKM-KC (Karsa Cipta).', 'Kelompok'),
(11, 'PKM-Pengabdian Kepada Masyarakat', 'Program Kreativitas Mahasiswa adalah kegiatan dalam Pekan Ilmiah Mahasiswa Universitas Surabaya (PIMUS XIII) untuk meningkatkan mutu peserta didik agar kelak dapat menjadi anggota masyarakat yang memiliki kemampuan akademis dan/atau profesional yang dapat menerapkan, mengembangkan, dan menyebarluaskan ilmu pengetahuan, teknologi dan/atau kesenian serta memperkaya budaya nasional. Terdapat empat cabang PKM yang diperlombakan pada PIMUS XIII ini meliputi PKM-RSH (Riset Sosial Humaniora), PKM-PM (Pengabdian Masyarakat), PKM-K (Kewirausahaan), dan PKM-KC (Karsa Cipta).', 'Kelompok'),
(12, 'Ide Bisnis', 'Ide Bisnis merupakan salah satu cabang lomba dalam Pekan Ilmiah Mahasiswa Universitas Surabaya (PIMUS XIII) yang tidak hanya mengevaluasi kemampuan akademik dan nalar mahasiswa dalam bidang ilmu, tetapi juga merupakan sebuah upaya untuk mendekatkan kemitraan antara akademisi, dunia usaha, dan pemerintah. Perlombaan ide bisnis menjadi platform yang relevan untuk mendorong kreativitas, inovasi, dan pengembangan wirausaha.', 'Kelompok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dates`
--

CREATE TABLE `dates` (
  `id` int(11) NOT NULL,
  `open` datetime NOT NULL,
  `close` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `dates`
--

INSERT INTO `dates` (`id`, `open`, `close`) VALUES
(1, '2022-11-07 00:00:00', '2023-12-22 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('s160421098@student.ubaya.ac.id', '$2y$10$ZnfWk3HpkeK6WJbM515o7.4OR5BUp8PGpJAUwVodwZ0kwthLvM/e2', '2022-11-04 12:15:36'),
('s120122041@student.ubaya.ac.id', '$2y$10$t4T1kGjw7T70tM.XF/KC6O8sSvAfz0lwG4VWJBh1avG/dVbv2UqOC', '2022-11-04 12:15:49'),
('s160220019@student.ubaya.ac.id', '$2y$10$2e/UsrXJcPmZYVNddl1m0OxPq9mTKXU8QohbSjSgiLj5W72nWJ3Mq', '2022-11-13 11:41:47'),
('s180222001@student.ubaya.ac.id', '$2y$10$V4VxzteZVeGpvRhJfGvLqeHluYhjsycvSpdHW4q.gLeejoEgOgdne', '2022-11-16 13:30:25'),
('s160422016@student.ubaya.ac.id', '$2y$10$7vLetd8BX8/ebNE.OoogheZyQknmgqW3KtoPV6eZzN1y.Gr7GVihS', '2022-12-05 12:14:26'),
('s110121020@student.ubaya.ac.id', '$2y$10$1dtGHEgUzGVaKvkvLh7cL.o0B030KpNvEH6w5NgkZtSJS/WUjhrfe', '2022-12-07 19:38:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submissions`
--

CREATE TABLE `submissions` (
  `id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `competition_categories_id` int(11) NOT NULL,
  `link_exhibition` varchar(255) DEFAULT NULL,
  `link_proposal` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT 'Tidak perlu deskripsi',
  `like_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `submission_dates`
--

CREATE TABLE `submission_dates` (
  `id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `link_form` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `submission_dates`
--

INSERT INTO `submission_dates` (`id`, `start_date`, `end_date`, `link_form`) VALUES
(1, '2022-09-16 06:12:19', '2023-12-06 00:00:00', '...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `competition_categories_id` int(11) NOT NULL,
  `registration_form` varchar(200) NOT NULL,
  `statement_letter` varchar(200) NOT NULL,
  `status` enum('Pending','Terima','Tolak') NOT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `competition_categories_id`, `registration_form`, `statement_letter`, `status`, `message`) VALUES
(1, 6, 'storage/formPendaftaran/Poster Digital Pendidikan/1/Antonius Yabes Sieman_160421119.pdf', 'storage/suratPernyataan/Poster Digital Pendidikan/1/Surat Pernyataan_Antonius_160421119.pdf', 'Terima', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `nrp` varchar(9) NOT NULL,
  `email` varchar(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vote_tickets` int(11) NOT NULL,
  `role` enum('Admin','Sekre','Panitia','Umum') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nrp`, `email`, `name`, `password`, `vote_tickets`, `role`, `email_verified_at`, `remember_token`) VALUES
('110121020', 's110121020@student.ubaya.ac.id', 'Louise Julyan Sutan', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-03 05:41:30', NULL),
('110121034', 's110121034@student.ubaya.ac.id', 'nicole christianto', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-04 13:40:17', NULL),
('110122273', 's110122273@student.ubaya.ac.id', 'Nabila Aura Tinka', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 0, 'Sekre', '2022-11-04 13:34:16', NULL),
('110122282', 's110122282@student.ubaya.ac.id', 'Sella Andini Margareta', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 0, 'Sekre', '2022-11-04 13:26:01', NULL),
('120120043', 's120120043@student.ubaya.ac.id', 'Sekret', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 1, 'Sekre', '2022-11-04 13:24:06', NULL),
('120120072', 's120120072@student.ubaya.ac.id', 'Gavriel Heavenly Blessing Torar', '$2y$10$Wh.7407vWShsczUJDDVCLuMaw61e3te/lYQB9hH1J4RWYdkvNkK1G', 3, 'Sekre', '2022-11-10 08:03:27', NULL),
('120121048', 's120121048@student.ubaya.ac.id', 'Sekret', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 3, 'Sekre', '2022-10-12 04:09:48', NULL),
('120121161', 's120121161@student.ubaya.ac.id', 'Aldi Christian Phuk', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-09 01:48:31', NULL),
('120122144', 's120122144@student.ubaya.ac.id', 'Sekret', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 3, 'Sekre', '2022-11-04 12:24:02', NULL),
('130220154', 's130220154@student.ubaya.ac.id', 'Acara', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 2, 'Panitia', '2022-11-04 13:34:16', NULL),
('130222117', 's130222117@student.ubaya.ac.id', 'Acara', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-04 13:34:16', NULL),
('130320160', 's130320160@student.ubaya.ac.id', 'Trixie Sheryl Azalia', '$2y$10$eGzwA8/istgVhoa0U2RvFOZXqMJIfeZwl1nJq5OYagOBQIQhTPgEq', 3, 'Sekre', '2022-11-04 13:34:59', 'ZtcwNcrq5crLBOuhIenwkBaxj6abT9cb6lWCf3TFOtDwN87h68llOz20spkF'),
('150120023', 's150120023@student.ubaya.ac.id', 'Sekret', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 3, 'Sekre', '2022-10-12 04:09:48', NULL),
('150121025', 's150121025@student.ubaya.ac.id', 'Anastasia Jesseline', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 3, 'Sekre', '2022-11-04 12:20:22', NULL),
('150121027', 's150121027@student.ubaya.ac.id', 'Stefani Lusia Litmantoro', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 3, 'Sekre', '2022-11-04 12:19:18', NULL),
('150121034', 's150121034@student.ubaya.ac.id', 'Lea Victoria Setyawan', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 3, 'Sekre', '2022-11-04 13:39:56', NULL),
('150121036', 's150121036@student.ubaya.ac.id', 'Shaundra Evangelyn Jap', '$2y$10$nI90naTyttTJ15MH34qn3.DWkLu.efqiBnLM.9V8vHDoNLtlQQKem', 0, 'Panitia', '2022-11-04 12:43:26', 'Jwn68piC32g1aKXty5Ry4UONMHdGBKOaFkWeo1h9e2uWghhj1sJJrL6hpwha'),
('150121166', 's150121166@student.ubaya.ac.id', 'Sandhy, Olivia', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-04 12:54:04', NULL),
('150121184', 's150121184@student.ubaya.ac.id', 'Willingda Tinshia Patty', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-04 12:44:32', NULL),
('150121190', 's150121190@student.ubaya.ac.id', 'Glory Ketshia Alase', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-01 02:16:08', NULL),
('150122019', 's150122019@student.ubaya.ac.id', 'Acara', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-04 13:34:16', NULL),
('150122022', 's150122022@student.ubaya.ac.id', 'Gisela Geraldine Pamula', '$2y$10$L.vTmty4ryQyq8db3ObE5OOisFZEZto.aGNxOX8CtD7m9v5XQPSf.', 2, 'Panitia', '2022-11-10 05:32:20', 'OjmtEN6QPeu3VAkBwUys7stYI6muWF5eZOcpNza32HZHcJ2WdDRl1RYXD708'),
('150122138', 's150122138@student.ubaya.ac.id', 'Rachma Diana Arief', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-08 17:24:01', NULL),
('150122209', 's150122209@student.ubaya.ac.id', 'Sean Sebastian', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-04 13:37:06', NULL),
('150122256', 's150122256@student.ubaya.ac.id', 'Chiara Hanifah', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-04 13:37:04', NULL),
('160221001', 's160221001@student.ubaya.ac.id', 'Sekret', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 3, 'Sekre', '2022-10-12 04:09:48', NULL),
('160222026', 's160222026@student.ubaya.ac.id', 'Sekret', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 0, 'Sekre', '2022-10-12 04:09:48', NULL),
('160320038', 's160320038@student.ubaya.ac.id', 'Sekret', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 3, 'Sekre', '2022-10-12 04:09:48', NULL),
('160321014', 's160321014@student.ubaya.ac.id', 'Monica Natalia', '$2y$10$VA4sEoCSNofpdBvZpqa5ROiAUgzQp6WAhhNVoZPzM6rnuAwN8klUm', 3, 'Panitia', '2022-11-01 02:24:59', 'fvnTMTpm0kuPk7vSuhAiL54TTvrly2oOECJTjO9CblH3ObtcFM8jJbTeW7Pi'),
('160322068', 's160322068@student.ubaya.ac.id', 'Bella Nurafni Maulidina', '$2y$10$KgbLm57F5L8aPWM7kInZ1u.qtpFlDnpKQyF5mrcfZoYTdQWcSQ8Wq', 1, 'Sekre', '2022-11-04 13:44:39', 'vxzK6UKamP3W7O6uwkkXwQynBn7zkR0d91WFwVamkLPUiQjQU6rDjiAE9tdx'),
('160420077', 's160420077@student.ubaya.ac.id', 'Muhammad Ikhsan', '$2y$10$hh7HDGsER9tm.njxHLeDruXI5w.gh3UwImV/nTxRXsVXBlO3QYqhO', 3, 'Sekre', '2022-11-08 09:43:37', 'WPjFZqBQBu8m4jOXjuBxRHzEZgA5fbTx8HWiOqAynllNEly1WF3iEugne4QI'),
('160421066', 's160421066@student.ubaya.ac.id', 'Gregorius Mario', '$2a$04$dXiiLHBXdcVXxKRLiHLc8.E/wm8ZbBJ.JvAHYaBYN2kVNkjDGprs.', 3, 'Sekre', '2022-11-04 12:21:46', NULL),
('160421101', 's160320004@student.ubaya.ac.id', 'Christopher Andrew', '$2a$10$GPA4.WRCJjJgWRD3fCpPQOvXaayki2QLtMywjexCFE8vBPA19k1WO', 3, 'Umum', '2022-11-04 13:08:13', NULL),
('160421117', 's160320067@student.ubaya.ac.id', 'Freddy christianto', '$2a$10$GPA4.WRCJjJgWRD3fCpPQOvXaayki2QLtMywjexCFE8vBPA19k1WO', 3, 'Umum', '2022-11-01 02:20:44', NULL),
('160421119', 's160421119@student.ubaya.ac.id', 'Antonius Yabes Sieman', '$2a$10$0.P3EFCKhKf.MaxYdCDBXeHQUelkFHK1X9NbGUcF6viDST.K2oIt2', 3, 'Umum', '2022-11-01 02:20:44', NULL),
('160421120', 's160421023@student.ubaya.ac.id', 'Lex', '$2a$10$GPA4.WRCJjJgWRD3fCpPQOvXaayki2QLtMywjexCFE8vBPA19k1WO', 3, 'Umum', NULL, NULL),
('160721023', 's160721023@student.ubaya.ac.id', 'Sekret', '$2a$10$hWxhjnBRvozFGFfq8qmIouBs1K5G4MQh84JBM5UUud2goLDvg1YL6', 3, 'Sekre', '2022-10-12 04:09:48', NULL),
('160721047', 's160721047@student.ubaya.ac.id', 'Stiven Suhendra', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 3, 'Panitia', '2022-11-10 09:03:21', NULL),
('180122011', 's180122011@student.ubaya.ac.id', 'Kezia aurelia', '$2a$12$rKQtuLk3ChOwcW1VgFBd3.VueE9gi7uh5PeTPW1eHj.e6FhDHYJ66', 0, 'Sekre', '2022-11-04 13:15:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_details`
--

CREATE TABLE `user_details` (
  `nrp` varchar(9) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `role` enum('Anggota','Ketua') NOT NULL,
  `id_card` varchar(120) NOT NULL,
  `self_photo` varchar(120) NOT NULL,
  `line` varchar(45) DEFAULT NULL,
  `phone_number` varchar(120) DEFAULT NULL,
  `gpa_recap` varchar(120) DEFAULT NULL,
  `borang` varchar(120) DEFAULT NULL,
  `achievement_list` varchar(120) DEFAULT NULL,
  `competition_type` enum('Matematika','Fisika','Kimia','Biologi','Statistika') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_details`
--

INSERT INTO `user_details` (`nrp`, `teams_id`, `role`, `id_card`, `self_photo`, `line`, `phone_number`, `gpa_recap`, `borang`, `achievement_list`, `competition_type`) VALUES
('160421101', 1, 'Anggota', 'storage/ktm/Poster/187/KTM_Christopher Andrew_160421101.pdf', 'storage/pasFoto/Poster/187/Foto_Christopher Andrew_160421101.png', NULL, NULL, NULL, NULL, NULL, NULL),
('160421119', 1, 'Ketua', 'storage/ktm/Poster/187/KTM_Antonius Yabes_160421119.pdf', 'storage/pasFoto/Poster/187/Foto_Antonius Yabes Sieman_160421119.png', 'tokurogt', '082255617244', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `competition_categories`
--
ALTER TABLE `competition_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`,`teams_id`,`competition_categories_id`),
  ADD KEY `fk_submissions_teams1_idx` (`teams_id`,`competition_categories_id`);

--
-- Indeks untuk tabel `submission_dates`
--
ALTER TABLE `submission_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`,`competition_categories_id`),
  ADD KEY `fk_teams_competition_categories1_idx` (`competition_categories_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nrp`);

--
-- Indeks untuk tabel `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`nrp`,`teams_id`),
  ADD KEY `fk_detail_user_user1_idx` (`nrp`),
  ADD KEY `fk_user_details_teams1_idx1` (`teams_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `competition_categories`
--
ALTER TABLE `competition_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `submission_dates`
--
ALTER TABLE `submission_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `fk_submissions_teams1` FOREIGN KEY (`teams_id`,`competition_categories_id`) REFERENCES `teams` (`id`, `competition_categories_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `fk_detail_user_user1` FOREIGN KEY (`nrp`) REFERENCES `users` (`nrp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_details_teams1` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

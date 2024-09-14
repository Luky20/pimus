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
(10, 'PKM-Pengabdian Kepada Masyarakat', 'Program Kreativitas Mahasiswa adalah kegiatan dalam Pekan Ilmiah Mahasiswa Universitas Surabaya (PIMUS XIII) untuk meningkatkan mutu peserta didik agar kelak dapat menjadi anggota masyarakat yang memiliki kemampuan akademis dan/atau profesional yang dapat menerapkan, mengembangkan, dan menyebarluaskan ilmu pengetahuan, teknologi dan/atau kesenian serta memperkaya budaya nasional. Terdapat empat cabang PKM yang diperlombakan pada PIMUS XIII ini meliputi PKM-RSH (Riset Sosial Humaniora), PKM-PM (Pengabdian Masyarakat), PKM-K (Kewirausahaan), dan PKM-KC (Karsa Cipta).', 'Kelompok'),
(11, 'Ide Bisnis', 'Ide Bisnis merupakan salah satu cabang lomba dalam Pekan Ilmiah Mahasiswa Universitas Surabaya (PIMUS XIII) yang tidak hanya mengevaluasi kemampuan akademik dan nalar mahasiswa dalam bidang ilmu, tetapi juga merupakan sebuah upaya untuk mendekatkan kemitraan antara akademisi, dunia usaha, dan pemerintah. Perlombaan ide bisnis menjadi platform yang relevan untuk mendorong kreativitas, inovasi, dan pengembangan wirausaha.', 'Kelompok');

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
(1, now(), '2024-11-04 23:59:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

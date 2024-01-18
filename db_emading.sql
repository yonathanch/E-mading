-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2024 pada 17.41
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_emading`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_articles`
--

CREATE TABLE `tb_articles` (
  `id_artikel` int(4) NOT NULL,
  `header` varchar(160) NOT NULL,
  `judul_artikel` varchar(360) NOT NULL,
  `isi_artikel` text NOT NULL,
  `status_publish` enum('publish','draft') NOT NULL,
  `id_users` int(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_articles`
--

INSERT INTO `tb_articles` (`id_artikel`, `header`, `judul_artikel`, `isi_artikel`, `status_publish`, `id_users`, `created_at`, `updated_at`) VALUES
(13, 'announcement_315675549.jpg', ' Announcement: Graduation Announcement for JeWePe Students', '<p>Dear JeWePe Students and Parents,</p><p>We are thrilled to share the exciting news of the upcoming graduation ceremony for our talented students at JeWePe College. This momentous occasion celebrates the hard work, dedication, and achievements of our graduating class.</p><p><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><b>Graduation Details:</b></span></p><ul><li>Date: June 15, 2024</li><li>Time: 2:00 PM</li><li>Venue: JeWePe College Auditorium</li></ul><p>Highlights of the Graduation Ceremony:</p><ul><li>Graduation Address: A captivating speech will be delivered by our esteemed Principal, Mrs. Elizabeth Thompson.</li><li>Distribution of Certificates: Each student will be presented with their well-deserved graduation certificates.</li><li>Acknowledgments: Notable achievements and contributions will be acknowledged.</li></ul><p>Dress Code:</p><ul><li>Graduates: Please wear your graduation gown and cap.</li><li>Guests: Semi-formal attire.</li></ul><p>RSVP:</p><p>Kindly confirm your attendance by June 1, 2024, to help us make the necessary arrangements for this special day.</p><p>Live Streaming:</p><p>For those unable to attend physically, the graduation ceremony will be live-streamed. Access the live stream on our school website.</p><p>We extend our heartfelt congratulations to all graduating students. Your accomplishments showcase your dedication and determination, and we are immensely proud of each one of you.</p><p>As you embark on this new chapter, may you continue to achieve great success and make meaningful contributions to the world.</p><p>Best Regards,</p><p>JeWePe College</p><p>[08192312389]</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>', 'publish', 1, '2024-01-05 17:17:45', NULL),
(14, 'bg-banner_990971674.jpg', '  Announcement 2', ' <p>Dear JeWePe Students and Parents,</p><p>We are thrilled to share the exciting news of the upcoming graduation ceremony for our talented students at JeWePe College. This momentous occasion celebrates the hard work, dedication, and achievements of our graduating class.</p><p><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: 700;\">Graduation Details:</span></span></p><ul><li>Date: June 15, 2024</li><li>Time: 2:00 PM</li><li>Venue: JeWePe College Auditorium</li></ul><p>Highlights of the Graduation Ceremony:</p><ul><li>Graduation Address: A captivating speech will be delivered by our esteemed Principal, Mrs. Elizabeth Thompson.</li><li>Distribution of Certificates: Each student will be presented with their well-deserved graduation certificates.</li><li>Acknowledgments: Notable achievements and contributions will be acknowledged.</li></ul><p>Dress Code:</p><ul><li>Graduates: Please wear your graduation gown and cap.</li><li>Guests: Semi-formal attire.</li></ul><p>RSVP:</p><p>Kindly confirm your attendance by June 1, 2024, to help us make the necessary arrangements for this special day.</p><p>Live Streaming:</p><p>For those unable to attend physically, the graduation ceremony will be live-streamed. Access the live stream on our school website.</p><p>We extend our heartfelt congratulations to all graduating students. Your accomplishments showcase your dedication and determination, and we are immensely proud of each one of you.</p><p>As you embark on this new chapter, may you continue to achieve great success and make meaningful contributions to the world.</p><p>Best Regards,</p><p>JeWePe College</p><p>[08192312389]</p><p><br></p>', 'publish', 1, '2024-01-05 17:19:03', '2024-01-05 17:23:50'),
(15, 'announcement_456348216.jpg', ' Announcement 3', ' <p>Dear JeWePe Students and Parents,</p><p>We are thrilled to share the exciting news of the upcoming graduation ceremony for our talented students at JeWePe College. This momentous occasion celebrates the hard work, dedication, and achievements of our graduating class.</p><p><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: 700;\">Graduation Details:</span></span></p><ul><li>Date: June 15, 2024</li><li>Time: 2:00 PM</li><li>Venue: JeWePe College Auditorium</li></ul><p>Highlights of the Graduation Ceremony:</p><ul><li>Graduation Address: A captivating speech will be delivered by our esteemed Principal, Mrs. Elizabeth Thompson.</li><li>Distribution of Certificates: Each student will be presented with their well-deserved graduation certificates.</li><li>Acknowledgments: Notable achievements and contributions will be acknowledged.</li></ul><p>Dress Code:</p><ul><li>Graduates: Please wear your graduation gown and cap.</li><li>Guests: Semi-formal attire.</li></ul><p>RSVP:</p><p>Kindly confirm your attendance by June 1, 2024, to help us make the necessary arrangements for this special day.</p><p>Live Streaming:</p><p>For those unable to attend physically, the graduation ceremony will be live-streamed. Access the live stream on our school website.</p><p>We extend our heartfelt congratulations to all graduating students. Your accomplishments showcase your dedication and determination, and we are immensely proud of each one of you.</p><p>As you embark on this new chapter, may you continue to achieve great success and make meaningful contributions to the world.</p><p>Best Regards,</p><p>JeWePe College</p><p>[08192312389]</p><p><br></p>', 'publish', 1, '2024-01-05 17:23:29', '2024-01-05 17:24:09'),
(16, 'announcement_463315246.jpg', 'Announcement 4', '<p>Dear JeWePe Students and Parents,</p><p>We are thrilled to share the exciting news of the upcoming graduation ceremony for our talented students at JeWePe College. This momentous occasion celebrates the hard work, dedication, and achievements of our graduating class.</p><p><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: 700;\">Graduation Details:</span></span></p><ul><li>Date: June 15, 2024</li><li>Time: 2:00 PM</li><li>Venue: JeWePe College Auditorium</li></ul><p>Highlights of the Graduation Ceremony:</p><ul><li>Graduation Address: A captivating speech will be delivered by our esteemed Principal, Mrs. Elizabeth Thompson.</li><li>Distribution of Certificates: Each student will be presented with their well-deserved graduation certificates.</li><li>Acknowledgments: Notable achievements and contributions will be acknowledged.</li></ul><p>Dress Code:</p><ul><li>Graduates: Please wear your graduation gown and cap.</li><li>Guests: Semi-formal attire.</li></ul><p>RSVP:</p><p>Kindly confirm your attendance by June 1, 2024, to help us make the necessary arrangements for this special day.</p><p>Live Streaming:</p><p>For those unable to attend physically, the graduation ceremony will be live-streamed. Access the live stream on our school website.</p><p>We extend our heartfelt congratulations to all graduating students. Your accomplishments showcase your dedication and determination, and we are immensely proud of each one of you.</p><p>As you embark on this new chapter, may you continue to achieve great success and make meaningful contributions to the world.</p><p>Best Regards,</p><p>JeWePe College</p><p>[08192312389]</p><p><br></p>', 'publish', 1, '2024-01-05 17:24:34', NULL),
(17, 'bg-banner_2048332027.jpg', 'Announcement 5', '<p>Dear JeWePe Students and Parents,</p><p>We are thrilled to share the exciting news of the upcoming graduation ceremony for our talented students at JeWePe College. This momentous occasion celebrates the hard work, dedication, and achievements of our graduating class.</p><p><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: 700;\">Graduation Details:</span></span></p><ul><li>Date: June 15, 2024</li><li>Time: 2:00 PM</li><li>Venue: JeWePe College Auditorium</li></ul><p>Highlights of the Graduation Ceremony:</p><ul><li>Graduation Address: A captivating speech will be delivered by our esteemed Principal, Mrs. Elizabeth Thompson.</li><li>Distribution of Certificates: Each student will be presented with their well-deserved graduation certificates.</li><li>Acknowledgments: Notable achievements and contributions will be acknowledged.</li></ul><p>Dress Code:</p><ul><li>Graduates: Please wear your graduation gown and cap.</li><li>Guests: Semi-formal attire.</li></ul><p>RSVP:</p><p>Kindly confirm your attendance by June 1, 2024, to help us make the necessary arrangements for this special day.</p><p>Live Streaming:</p><p>For those unable to attend physically, the graduation ceremony will be live-streamed. Access the live stream on our school website.</p><p>We extend our heartfelt congratulations to all graduating students. Your accomplishments showcase your dedication and determination, and we are immensely proud of each one of you.</p><p>As you embark on this new chapter, may you continue to achieve great success and make meaningful contributions to the world.</p><p>Best Regards,</p><p>JeWePe College</p><p>[08192312389]</p><p><br></p>', 'publish', 1, '2024-01-05 17:24:52', NULL),
(18, 'announcement_1998047641.jpg', 'Announcement 6', '<p>Dear JeWePe Students and Parents,</p><p>We are thrilled to share the exciting news of the upcoming graduation ceremony for our talented students at JeWePe College. This momentous occasion celebrates the hard work, dedication, and achievements of our graduating class.</p><p><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: 700;\">Graduation Details:</span></span></p><ul><li>Date: June 15, 2024</li><li>Time: 2:00 PM</li><li>Venue: JeWePe College Auditorium</li></ul><p>Highlights of the Graduation Ceremony:</p><ul><li>Graduation Address: A captivating speech will be delivered by our esteemed Principal, Mrs. Elizabeth Thompson.</li><li>Distribution of Certificates: Each student will be presented with their well-deserved graduation certificates.</li><li>Acknowledgments: Notable achievements and contributions will be acknowledged.</li></ul><p>Dress Code:</p><ul><li>Graduates: Please wear your graduation gown and cap.</li><li>Guests: Semi-formal attire.</li></ul><p>RSVP:</p><p>Kindly confirm your attendance by June 1, 2024, to help us make the necessary arrangements for this special day.</p><p>Live Streaming:</p><p>For those unable to attend physically, the graduation ceremony will be live-streamed. Access the live stream on our school website.</p><p>We extend our heartfelt congratulations to all graduating students. Your accomplishments showcase your dedication and determination, and we are immensely proud of each one of you.</p><p>As you embark on this new chapter, may you continue to achieve great success and make meaningful contributions to the world.</p><p>Best Regards,</p><p>JeWePe College</p><p>[08192312389]</p><p><br></p>', 'publish', 1, '2024-01-05 17:25:16', NULL),
(19, 'announcement_1009662261.jpg', 'Announcement 7', '<p>Dear JeWePe Students and Parents,</p><p>We are thrilled to share the exciting news of the upcoming graduation ceremony for our talented students at JeWePe College. This momentous occasion celebrates the hard work, dedication, and achievements of our graduating class.</p><p><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: 700;\">Graduation Details:</span></span></p><ul><li>Date: June 15, 2024</li><li>Time: 2:00 PM</li><li>Venue: JeWePe College Auditorium</li></ul><p>Highlights of the Graduation Ceremony:</p><ul><li>Graduation Address: A captivating speech will be delivered by our esteemed Principal, Mrs. Elizabeth Thompson.</li><li>Distribution of Certificates: Each student will be presented with their well-deserved graduation certificates.</li><li>Acknowledgments: Notable achievements and contributions will be acknowledged.</li></ul><p>Dress Code:</p><ul><li>Graduates: Please wear your graduation gown and cap.</li><li>Guests: Semi-formal attire.</li></ul><p>RSVP:</p><p>Kindly confirm your attendance by June 1, 2024, to help us make the necessary arrangements for this special day.</p><p>Live Streaming:</p><p>For those unable to attend physically, the graduation ceremony will be live-streamed. Access the live stream on our school website.</p><p>We extend our heartfelt congratulations to all graduating students. Your accomplishments showcase your dedication and determination, and we are immensely proud of each one of you.</p><p>As you embark on this new chapter, may you continue to achieve great success and make meaningful contributions to the world.</p><p>Best Regards,</p><p>JeWePe College</p><p>[08192312389]</p><p><br></p>', 'publish', 1, '2024-01-05 17:25:39', NULL),
(20, 'bg-banner_501358948.jpg', 'Announcement 8', '<p>Dear JeWePe Students and Parents,</p><p>We are thrilled to share the exciting news of the upcoming graduation ceremony for our talented students at JeWePe College. This momentous occasion celebrates the hard work, dedication, and achievements of our graduating class.</p><p><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: 700;\">Graduation Details:</span></span></p><ul><li>Date: June 15, 2024</li><li>Time: 2:00 PM</li><li>Venue: JeWePe College Auditorium</li></ul><p>Highlights of the Graduation Ceremony:</p><ul><li>Graduation Address: A captivating speech will be delivered by our esteemed Principal, Mrs. Elizabeth Thompson.</li><li>Distribution of Certificates: Each student will be presented with their well-deserved graduation certificates.</li><li>Acknowledgments: Notable achievements and contributions will be acknowledged.</li></ul><p>Dress Code:</p><ul><li>Graduates: Please wear your graduation gown and cap.</li><li>Guests: Semi-formal attire.</li></ul><p>RSVP:</p><p>Kindly confirm your attendance by June 1, 2024, to help us make the necessary arrangements for this special day.</p><p>Live Streaming:</p><p>For those unable to attend physically, the graduation ceremony will be live-streamed. Access the live stream on our school website.</p><p>We extend our heartfelt congratulations to all graduating students. Your accomplishments showcase your dedication and determination, and we are immensely proud of each one of you.</p><p>As you embark on this new chapter, may you continue to achieve great success and make meaningful contributions to the world.</p><p>Best Regards,</p><p>JeWePe College</p><p>[08192312389]</p><p><br></p>', 'publish', 1, '2024-01-05 17:25:59', NULL),
(21, 'announcement_2102481641.jpg', 'Announcement 9', '<p>Dear JeWePe Students and Parents,</p><p>We are thrilled to share the exciting news of the upcoming graduation ceremony for our talented students at JeWePe College. This momentous occasion celebrates the hard work, dedication, and achievements of our graduating class.</p><p><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: 700;\">Graduation Details:</span></span></p><ul><li>Date: June 15, 2024</li><li>Time: 2:00 PM</li><li>Venue: JeWePe College Auditorium</li></ul><p>Highlights of the Graduation Ceremony:</p><ul><li>Graduation Address: A captivating speech will be delivered by our esteemed Principal, Mrs. Elizabeth Thompson.</li><li>Distribution of Certificates: Each student will be presented with their well-deserved graduation certificates.</li><li>Acknowledgments: Notable achievements and contributions will be acknowledged.</li></ul><p>Dress Code:</p><ul><li>Graduates: Please wear your graduation gown and cap.</li><li>Guests: Semi-formal attire.</li></ul><p>RSVP:</p><p>Kindly confirm your attendance by June 1, 2024, to help us make the necessary arrangements for this special day.</p><p>Live Streaming:</p><p>For those unable to attend physically, the graduation ceremony will be live-streamed. Access the live stream on our school website.</p><p>We extend our heartfelt congratulations to all graduating students. Your accomplishments showcase your dedication and determination, and we are immensely proud of each one of you.</p><p>As you embark on this new chapter, may you continue to achieve great success and make meaningful contributions to the world.</p><p>Best Regards,</p><p>JeWePe College</p><p>[08192312389]</p><p><br></p>', 'publish', 1, '2024-01-05 17:26:20', NULL),
(22, 'announcement_1787882574.jpg', 'Announcement 10', '<p>Dear JeWePe Students and Parents,</p><p>We are thrilled to share the exciting news of the upcoming graduation ceremony for our talented students at JeWePe College. This momentous occasion celebrates the hard work, dedication, and achievements of our graduating class.</p><p><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: 700;\">Graduation Details:</span></span></p><ul><li>Date: June 15, 2024</li><li>Time: 2:00 PM</li><li>Venue: JeWePe College Auditorium</li></ul><p>Highlights of the Graduation Ceremony:</p><ul><li>Graduation Address: A captivating speech will be delivered by our esteemed Principal, Mrs. Elizabeth Thompson.</li><li>Distribution of Certificates: Each student will be presented with their well-deserved graduation certificates.</li><li>Acknowledgments: Notable achievements and contributions will be acknowledged.</li></ul><p>Dress Code:</p><ul><li>Graduates: Please wear your graduation gown and cap.</li><li>Guests: Semi-formal attire.</li></ul><p>RSVP:</p><p>Kindly confirm your attendance by June 1, 2024, to help us make the necessary arrangements for this special day.</p><p>Live Streaming:</p><p>For those unable to attend physically, the graduation ceremony will be live-streamed. Access the live stream on our school website.</p><p>We extend our heartfelt congratulations to all graduating students. Your accomplishments showcase your dedication and determination, and we are immensely proud of each one of you.</p><p>As you embark on this new chapter, may you continue to achieve great success and make meaningful contributions to the world.</p><p>Best Regards,</p><p>JeWePe College</p><p>[08192312389]</p><p><br></p>', 'draft', 1, '2024-01-05 17:26:39', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(5) NOT NULL,
  `name` varchar(85) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(261) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '$2y$10$TgezQ/q/HukZah..7rnRTu4GjFW.4H0aWXaLfxuDjk7Po5nJ608Bi', '2024-01-01 15:56:08', '2024-01-01 15:56:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_articles`
--
ALTER TABLE `tb_articles`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_articles`
--
ALTER TABLE `tb_articles`
  MODIFY `id_artikel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_articles`
--
ALTER TABLE `tb_articles`
  ADD CONSTRAINT `tb_artikel_iblk1` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

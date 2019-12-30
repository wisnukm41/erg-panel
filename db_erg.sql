-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 11:58 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erg`
--

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `id` varchar(100) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `date` varchar(20) NOT NULL,
  `year` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`id`, `topic`, `description`, `image`, `date`, `year`) VALUES
('5d6f71261ddab', 'Juara 5 Komurindo', '', 'default.png', '26/08/2019', '2019'),
('5d747dbb5329c', 'Juara 3 KOMBAT (Kompetisi Balon Atmosfer) - Lapan & Kemenristek, Dikti', '-', 'default.png', '01/01/2014', '2014'),
('5d747dce2b041', 'Juara 2 EDC(Electronic Desain Contest) - IEEE SSCS', '-', 'default.png', '01/01/2014', '2014'),
('5d747de53e93f', 'Pemenang Telemetri Terbaik KOMBAT(Kompetisi Balon Atmosfer) - Lapan & Kemenristek, Dikti', '-', 'default.png', '05/01/2014', '2014'),
('5d747dfdddaa9', 'Finalis Nasional KOMURINDO(Kompetisi Muatan Roket)', '-', 'default.png', '01/01/2015', '2015'),
('5d747e0f31c62', 'Juara 3 KOMBAT(Kompetisi Balon Atmosfer) - Lapan & Kemenristek, Dikti', '-', 'default.png', '17/02/2015', '2015'),
('5d747e1d2fc16', 'Juara 3 INAICTA kategori Tourism and Hospotal', '-', 'default.png', '23/07/2015', '2015'),
('5d747e2aa3baf', 'Juara 1 EDC(Electronic Desain Contest) - IEEE SSCS', '-', 'default.png', '24/07/2015', '2015'),
('5d747e40c5c55', 'Finalis Nasional KOMBAT(Kompetisi Balon Atmosfer)', '-', 'default.png', '10/02/2016', '2016'),
('5d747e515b9f3', 'Juara 4 Nasional KOMURINDO(Kompetisi Muatan Roket)', '-', 'default.png', '29/07/2016', '2016'),
('5d747e81356fe', 'Juara 3, EDC (Electronic Desain Contest) - IEEE SSCS', '-', 'default.png', '25/08/2016', '2016'),
('5d747e90e962b', 'Finalis Nasional Gemastik', '-', 'default.png', '25/11/2016', '2016'),
('5d747f57c6c94', 'Finalis Nasional Imagine Cup', '-', 'default.png', '16/03/2017', '2017'),
('5d7480b0355fe', 'Juara Harapan 1, KOMURINDO(Kompetisi Muatan Roket)', '-', 'default.png', '25/07/2017', '2017'),
('5d7480bbbb05d', 'Juara Harapan 1, KOMBAT(Kompetisi Balon Atmosfer)', '-', 'default.png', '19/07/2017', '2017'),
('5d7480c80131e', 'Juara Poster Terbaik, KOMBAT(Kompetisi Balon Atmosfer)', '-', 'default.png', '25/07/2017', '2017'),
('5d7480d42d5d0', 'Juara Ide Terbaik, KOMURINDO(Kompetisi Muatan Roket)', '-', 'default.png', '31/08/2017', '2017'),
('5d7480df7a618', 'Juara 1, Kompetisi Internet of Things(IoT) - IMPLUSE IoT HME ITB', '-', 'default.png', '05/09/2017', '2017'),
('5d7480eb61dce', 'Juara 2, EDC(Electronic Desain Contest) - IEEE SSCS', '-', 'default.png', '13/07/2017', '2017'),
('5d7480ff747a2', 'Juara 3, EDC(Electronic Desain Contest) - IEEE SSCS', '-', 'default.png', '23/08/2017', '2017'),
('5d74810b4680f', 'Finalis Nasional Imagine Cup', '-', 'default.png', '22/08/2018', '2018'),
('5d74811848271', 'Finalis Hackton Jasaraharja', '-', 'default.png', '22/08/2018', '2018'),
('5d7481245670f', 'Juara 1 Nasional Poster Terbaik, KOMURINDO(Kompetisi Muatan Roket)', '-', 'default.png', '22/08/2018', '2018'),
('5d7481322a4f7', 'Juara 1 Nasional TBIG CreatiON', '-', '5d7481322a4f7.jpg', '20/03/2018', '2018'),
('5d79efbfb7ea0', 'Juara 4 Kombat', '', 'default.png', '26/08/2019', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `time` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `date` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `description`, `date`) VALUES
('5d8dc60f87340', 'Rapat', '<p>Rapat Mingguan Divisi ERG<br></p>', '2019-09-28'),
('5d8ddf00e6e03', 'Makan Bersama', '<p>Makan Bersama Divisi ERG</p>', '2019-10-04'),
('5d8de17e65a29', 'Rapat Mingguan', '<p>Rapat</p>', '2019-09-28'),
('5d96c049dc815', 'Rapat Mingguan', '<p>Rapat Tentang Lomba</p>', '2019-10-11'),
('5df1bffb09d08', 'Rapat Mingguan', '<p>Rapat Mingguan Bersama Anggota Mabaa<br></p>', '2019-12-27'),
('5df70d8baaeb0', 'Lomba Medinnovation', 'Batas terakhir pendaftaran tim dan ide&nbsp; <br>', '2019-12-30'),
('5df85c0c27ddd', 'Cisco ', '<p>Batas pengumpulan Cisco Global Problem Solving<br></p>', '2020-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `finence`
--

CREATE TABLE `finence` (
  `id` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(10) NOT NULL,
  `type` enum('in','out','','') NOT NULL,
  `value` text NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finence`
--

INSERT INTO `finence` (`id`, `username`, `date`, `type`, `value`, `description`) VALUES
('5d79f4a13d4e6', 'admin', '12/09/2019', 'in', '100000', 'Uang Kas'),
('5dfc830f65111', 'FachrianHP', '20/12/2019', 'out', '25000', 'Belanja : teh dan sunlight');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'lecturer', 'Dosen'),
(4, 'graduated', 'Alumni'),
(5, 'trainee', 'Kader'),
(6, 'new', 'New'),
(7, 'chief', 'Pengurus');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` varchar(111) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `carousel` tinyint(1) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `description`, `carousel`, `img`) VALUES
('5d6e2e2b57adc', '1', '', 0, '1.jpg'),
('5d6e2e335dd44', '2', '', 0, '2.jpg'),
('5d6e2e3b65cd5', 'Juara 3 Microsoft Imagine Cup 2017', '', 1, '3.jpg'),
('5d6e2e4479cd9', 'Tim Rivest berhasil Menjuarai Kompetisi TBIG CreatiON 2018', '', 1, '4.jpg'),
('5d6e2e4a8c086', '5', '', 0, '5.jpg'),
('5d6e2e5091541', 'Divisi ERG 2018', '', 1, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(100) NOT NULL,
  `writer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `topic`, `description`, `date`, `writer`) VALUES
('5de9fda14db0d', 'Rapat ERG Tanggal 6 Desember 2019', '<ul><li>Membahas Data evaluasi anggota</li><li>Membahas absensi anggota baru</li><li>Membahas keaktifan update system informasi divisi (web dan android)</li><li>Membahas mencari kompetisi untuk tahun 2020</li><li>Membahas update kurikulum riset dengan di koordinasi oleh ketua tim riset</li><li>Membahas untuk memulai penggunaan SCRUM board</li><li>Membahas Evaluasi kegiatan riset</li><li>Membahas Arsip dan dokumentasi produk</li><li>Membahas rencana ERG CAMP 2020</li></ul><p style=\"text-align: center; text-indent: -18pt;\"><img src=\"/assets/uploads/images/14.png\" style=\"width: 800px;\"><span lang=\"EN-ID\" style=\"font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\"><br></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoListParagraphCxSpLast\"><!--[if gte vml 1]><v:shapetype id=\"_x0000_t75\" coordsize=\"21600,21600\"\r\n o:spt=\"75\" o:preferrelative=\"t\" path=\"m@4@5l@4@11@9@11@9@5xe\" filled=\"f\"\r\n stroked=\"f\">\r\n <v:stroke joinstyle=\"miter\"></v:stroke>\r\n <v:formulas>\r\n  <v:f eqn=\"if lineDrawn pixelLineWidth 0\"></v:f>\r\n  <v:f eqn=\"sum @0 1 0\"></v:f>\r\n  <v:f eqn=\"sum 0 0 @1\"></v:f>\r\n  <v:f eqn=\"prod @2 1 2\"></v:f>\r\n  <v:f eqn=\"prod @3 21600 pixelWidth\"></v:f>\r\n  <v:f eqn=\"prod @3 21600 pixelHeight\"></v:f>\r\n  <v:f eqn=\"sum @0 0 1\"></v:f>\r\n  <v:f eqn=\"prod @6 1 2\"></v:f>\r\n  <v:f eqn=\"prod @7 21600 pixelWidth\"></v:f>\r\n  <v:f eqn=\"sum @8 21600 0\"></v:f>\r\n  <v:f eqn=\"prod @7 21600 pixelHeight\"></v:f>\r\n  <v:f eqn=\"sum @10 21600 0\"></v:f>\r\n </v:formulas>\r\n <v:path o:extrusionok=\"f\" gradientshapeok=\"t\" o:connecttype=\"rect\"></v:path>\r\n <o:lock v:ext=\"edit\" aspectratio=\"t\"></o:lock>\r\n</v:shapetype><v:shape id=\"Picture_x0020_1\" o:spid=\"_x0000_i1025\" type=\"#_x0000_t75\"\r\n style=\'width:450.75pt;height:338.25pt;visibility:visible;mso-wrap-style:square\'>\r\n <v:imagedata src=\"file:///C:\\Users\\Whiz\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image001.jpg\"\r\n  o:title=\"\"></v:imagedata>\r\n</v:shape><![endif]--><!--[if !vml]--></p><p class=\"MsoListParagraphCxSpLast\"><!--[if !vml]--><!--[endif]--><span lang=\"EN-ID\" style=\"font-family:\r\n\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\"><o:p></o:p></span></p>', '06/12/2019', 'Wisnu'),
('5de9fe39d3114', 'Rapat ERG Tanggal 30 Agustus 2019', '<ul><li>Evaluasi kompitisi kombat komurindo dan mengumpulkan dokumentasi hasil lomba</li><li>Semua riset akan diberlakukan SCRUM dimulai dari September</li><li>Membentuk panitia dan metode seleksi penerimaan anggota baru ERG</li><li>Analisis anggaran dan membuat struktur organisasi serta membuat video perkenalan Divisi (testimoni dari senior)</li><li>Web dibisi diminta evaluasi/presentasi Bersama anggota lain</li><li>Rencana mebuat mobile Apps untuk informasi Divisi</li><li>Pola test PAB menggunakan test coding dengan dibekali materi sebelumnya</li><li>Membuat reposting sendiri untuk tiap sub riset</li></ul><div><br></div>', '06/12/2019', 'Wisnu'),
('5de9fe9194605', 'Rapat ERG Tanggal 2 September 2019', '<ul><li>Video untuk presentasi pengenalan divisi</li><li>Membuat brosur untuk pengenalan divisi</li><li>Promosi ke jurusan</li><li>Perekrutan tahap 1 coding</li><li>Pendaftaran PAB ERG tgl 11-26 september</li><li>Akhir oktober selesai seleksi</li><li>IT camp Akhir semester</li></ul>', '06/12/2019', 'Wisnu'),
('5de9fec998970', 'Rapat ERG Tanggal 18 Oktober 2019', '<ul><li>Web diisi kontennya, update 1 minggu sekali</li><li>Melengkapkan atau menambahkan kurikulum riset ERG 2019</li><li>Jadwal resmi kegiatan ERG</li></ul>', '06/12/2019', 'Wisnu'),
('5de9ff0922c93', 'Rapat ERG Tanggal 21 November 2019', '<ul><li>Membahas Recrutment anggota desaigner,bisnis analis,dokumentasi produk dan presenter</li><li>Membahas Pembentukan Tim kombat-komurindo&nbsp;</li><li>Membahas kalender riset dan kompetisi</li><li>Membahas persiapan lomba tahun&nbsp; 2020</li><li>Membahas persiapan lomba di Malaysia</li><li>Membahas pengkaderisasian tiap tim</li></ul><p style=\"text-align: center; \"><img src=\"/assets/uploads/images/12.png\" style=\"width: 543.522px; height: 409px;\"><br></p>', '06/12/2019', 'Wisnu'),
('5de9fff9c0617', 'Rapat ERG Tanggal 9 Agustus 2019', '<ul><li style=\"text-align: left;\">Persiapan Final Kombat Komurindo</li><li style=\"text-align: left;\">Bimbingan Checkpoint tgl. 15-16</li><li style=\"text-align: left;\">Persiapan penginapan dan Transportasi</li><li style=\"text-align: left;\">Mempelajari rule book Gemastik</li><li style=\"text-align: left;\">Kategori yang akan di ikuti (gemastik)</li><li style=\"text-align: left;\">Persiapan Hackathon Bosch</li><li style=\"text-align: left;\">Update Web Divisi</li><li style=\"text-align: left;\">Design Jaket</li></ul><p style=\"text-align: center; \"><img src=\"/assets/uploads/images/15.png\" style=\"width: 800px;\"><br></p>', '06/12/2019', 'Wisnu');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `date` varchar(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `img`, `description`, `date`, `slug`) VALUES
(1, 'Tim Rivest berhasil Menjuarai Kompetisi TBIG CreatiON 2018', '1.jpg', '<p>TBIG CreatiON merupakan kompetisi \r\naplikasi dan Internet of Things (IoT) berskala nasional bagi mahasiswa \r\nyang bertujuan untuk memberikan wadah bagi generasi muda dalam \r\nmenciptakan solusi-solusi kreatif dan efektif yang berguna bagi \r\nmasyarakat.\r\n</p><p style=\"text-align: justify;\">\r\nEvent berskala nasional yang mengambil tema \"Unlocking Potential in \r\nCommunity Through Technology Adoption\", ini ditujukan untuk memberikan \r\nwadah bagi generasi muda dalam menyalurkan kreativitas mereka \r\nmenciptakan solusi-solusi kreatif dan efektif yang berguna bagi \r\nmasyarakat di Indonesia. berbagai bentuk Solusi Kreatif yang bisa \r\ndiajukan dalam kompetisi ini bisa berupa:</p>\r\n<ol><li>Mobile Application (berbasis Android atau iOS)</li><li>Desktop Application (berbasis Windows)</li><li>Web Application</li><li>Multimedia Application</li></ol>\r\n<p>Adapun kategori yang dikompetisikan dalam TBIG CreatiON 2018 adalah sebagai berikut:</p><ol><li>Smart Tourism & Travel</li><li>Smart Health</li><li>Smart Manufacture</li><li>Smart Logistics & Transportation</li><li>Smart Telco Solution</li><li>Smart Home & Building</li><li>Smart Agriculture</li><li>Smart Clusters</li><li>Artificial Intelligence</li><li>Ad Tech</li><li>e-Commerce</li><li>Education</li><li>Fintech</li></ol>\r\n<p><strong>Juri dari Kalangan Profesional</strong></p>\r\n<p style=\"text-align: justify;\">TBIG CreatiON 2018 mempercayakan proses \r\npenjurian kepada dewan juri yang berasal dari kalangan profesional. \r\nBerikut susunan dewan juri TBIG CreatiON 2018:</p><p style=\"text-align: justify;\">Ketua:</p>\r\n<p style=\"text-align: justify;\">Gusandi Sjamsudin, Chief of Product & Innovation PT. Tower Bersama Infrastructure, Tbk.</p>\r\n<p style=\"text-align: justify;\">Anggota:</p>\r\n<ul><li>Irsan Saputra – Ecosystem Lead ISV Business Development IBM Indonesia</li><li>Teguh Prasetya – Founder Indonesia IOT Forum</li><li>Henri Kasyfi Soemartono – Sekretaris Jenderal Asosiasi Penyelenggara Jasa Internet Indonesia (APJII)</li><li>Rizki Oceano – Go-Academy (Go-Jek Indonesia)</li><li>Setiaji, ST, MSi. – Kepala Upt Smart City Dki Jakarta</li><li>Lie Si An – Chief Of Business Support PT. Tower Bersama Infrastructure,</li><li>Yogi Pamungkas – Chief of Project & Implementation PT. Tower Bersama Infrastructure,</li></ul><p align=\"center\"><img style=\"width: 800px;\" src=\"assets/uploads/images/TowerBersama-720x480.jpg\"></p><p>Dari 15 tim yang lolos mengikuti babak final, terpilih 3 pemenang utama serta 2 pemenang favorit sebagai berikut:</p>\r\n<ul><li>Juara I : RIVEST – Universitas Komputer Indonesia</li><li>Juara II: PANTAUTERNAK – Universitas Gadjah Mada</li><li>Juara III: JALAN.IN – Universitas Indonesia</li><li>Juara Aplikasi Favorit : ASISTANI – SMK Telkom Purwekorto</li><li>Juara Video Favorit : INVESPROPERTI – SBM Institut Teknologi Bandung</li></ul>\r\n<p style=\"text-align: justify;\">TBIG CreatiON dilaksanakan mulai dari \r\nbulan Juni 2018 dan dibagi dalam beberapa tahap, yaitu: pengajuan dan \r\nseleksi proposal, serta berakhir di tahap penjurian final pada tanggal \r\n14 dan 15 November 2018.</p>', '11/09/2019', 'tim-rivest-berhasil-menjuarai-kompetisi-tbig-creation-2018'),
(2, 'Informasi (BIH) Bosch IoT Hackathon 2019', '2.jpg', '<div>Bosch IoT Hackathon baru saja selesai dilangsungkan pada tanggal 16 - 17 Oktober 2019!</div><div><br></div><div>Sepuluh tim finalis berkompetisi mengembangkan solusi IoT dan business model-nya selama 24 jam non-stop di Bosch Innovation Center, Surabaya.</div><div><br></div><div>Meskipun belum juara, Tim Repollution perwakilan dari Divisi ERG berhasil masuk 5 besar tim terbaik.</div><div>Tim Repollution beranggotakan Dira Emilian, Rony Riyana, dan Jonas Atjas Ualubun mengusung produk Carepol untuk memonitor dan memetakan tingkat polusi udara perkotaan.</div>', '24/10/2019', 'informasi-bih-bosch-iot-hackathon-2019'),
(3, 'Event Informasi Komurindo Kombat 2019', '3.jpg', '<p>Minggu malam (25/08) merupakan saat yang mendebarkan bagi peserta Komurindo – Kombat 2019. Malam itu menjadi momentum bersejarah bagi mereka terhadap hasil kerja kerasnya selama mengikuti kompetisi tahapan demi tahapan. Di mana, pada puncak kompetisi berlangsung dua tahapan penilaian, yaitu uji darat dan uji terbang. Pada hari yang sama uji terbang, malamnya berlangsung pengumuman pemenang kompetisi di halaman Ruang Kontrol Peluncuran Roket LAPAN, Kantor LAPAN Garut, Jawa Barat.</p><p><br></p><p>Tim ERGSAT_XIX dan Tim Arundati perwakilan dari Divisi ERG berhasil menjuarai kategori Muatan Balon Atmosfer dan kategori Muatan Roket yaitu Juara IV dan Juara V.</p><p><br></p><p>Tim ERGSAT_XIX beranggotakan Tosin (Teknik Komputer), Fachrian Harist P (Teknik Informatika), dan Rifan Hidayat (Teknik Informatika). Tim Arundati beranggotakan Adidin Aidin M (Teknik Elektro), Alam Magfirah (Teknik Elektro) dan Fahmi Ahmad F (Teknik Informatika). #komurindo #kombat</p>', '24/10/2019', 'event-informasi-komurindo-kombat-2019'),
(4, '(Medium) Menjelajahi Pengembangan Ide Desain', '4.jpg', '<p><span style=\"color: rgba(0, 0, 0, 0.84); font-family: \" source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 21px;=\"\" letter-spacing:=\"\" -0.084px;\"=\"\">Pernakah kalian membuat produk dari awal hingga peluncuran? pernakah anda mengalami situasi dan kondisi dimana itu tidak dapat mendukung pengembangan produk anda? kali ini saya akan mengantarkan sebuah materi yang penting bagi para calon producer produk dan juga calon programmer.</span><br></p><p>Referensi: <a href=\"https://medium.com/ergunikom/menjelajahi-pengembangan-ide-desain-bagian-1-8492be17a67d\" target=\"_blank\">klik disini</a><br></p>', '28/11/2019', 'medium-menjelajahi-pengembangan-ide-desain');

-- --------------------------------------------------------

--
-- Table structure for table `piket`
--

CREATE TABLE `piket` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `day` int(1) NOT NULL,
  `place` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `piket`
--

INSERT INTO `piket` (`id`, `user_id`, `day`, `place`) VALUES
(10, 47, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `date`) VALUES
(39, 'SIMBAT ', 'Sistem Monitoring Banjir Terpadu', '2016'),
(41, 'iShoot ', '<p>Smart Camera Autosteering<br></p>', '2016'),
(42, 'CaTour ', '<p>Game petualangan seorang anak<br></p>', '2017'),
(44, 'SOILA', 'Sisten Monitoring Keadaan Tanah', '2017'),
(45, 'MY RIVEST ', '<p>Sistem pintar keamanan berkendara<br></p>', '2016'),
(46, 'DESA BABAKAN ASEM Apps', '', ''),
(48, 'Carepol ', '<p>Sistem monitoring tingkat polusi udara<br></p>', '2017'),
(49, ' Smart Traffic ', '<p>Sistem Cerdas Pengatur Lampu Lalu Lintas<br></p>', '2017'),
(50, 'Homic ', '<p>Smart Secure Socket<br></p>', '2017'),
(51, 'E-Voting ', '<p>Sistem pemilihan umum online<br></p>', '2017'),
(52, 'Mata Air ', '<p>Sistem deteksi aliran air<br></p>', '2017'),
(53, 'Sistem Absensi Portable berbasis IoT', '', '2018'),
(55, 'MY RIVEST', '<p>Sistem pintar keamanan berkendara<br></p>', '2019'),
(56, 'SIMONKI', 'Sistem Monitoring Pendaki', '2016'),
(57, 'DAYTER', 'Health Assistant', '2016'),
(58, 'Farmindo', '<p>Sistem Monitoring Pertanian Presisi Berbasis Internet of Thing’s<br></p>', '2019'),
(62, 'SIMBAT ', '<p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, HelveticaNeueW01-45Light, Helvetica, Arial; letter-spacing: 0.16px;\">Perangkat yang dinamakan Simbat, akronim dari Sistem Monitoring Banjir Terpadu itu gagasan dosen Teknik Komputer Unikom, Agus Mulyana. Risetnya dirintis sejak Mei 2015. \"Karena rumah mertua di Dayeuh Kolot suka kebanjiran,\" kata Agus, Selasa malam, 25 Oktober 2016.</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, HelveticaNeueW01-45Light, Helvetica, Arial; letter-spacing: 0.16px;\">Dengan pemasangan Simbat, warga yang pemukimannya biasa atau berpotensi dilanda banjir, bisa siap-siap menyelamatkan diri dan mengamankan barang di rumahnya. Ketika air sungai terus naik, alat dengan kalibrasi parameter banjir di suatu sungai akan menandai level bahaya.</span></p><p style=\"margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: 22px; font-family: Roboto, HelveticaNeueW01-45Light, Helvetica, Arial; vertical-align: baseline; letter-spacing: 0.16px; text-rendering: optimizespeed; -webkit-font-smoothing: antialiased; color: rgb(51, 51, 51);\">Alarm berupa sirine otomatis akan berbunyi disertai informasi kondisi sungai dan langkah evakuasi. Peringatan itu ditujukan ke warga di lokasi yang berpotensi terdampak banjir.</p><div id=\"inarticle\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: Roboto, HelveticaNeueW01-45Light, Helvetica, Arial; vertical-align: baseline; letter-spacing: 0.16px;\"></div><p style=\"margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: 22px; font-family: Roboto, HelveticaNeueW01-45Light, Helvetica, Arial; vertical-align: baseline; letter-spacing: 0.16px; text-rendering: optimizespeed; -webkit-font-smoothing: antialiased; color: rgb(51, 51, 51);\">Simbat memakai empat perangkat keras yang masing-masing dilengkapi aplikasi. Simbat Node merupakan alat dengan beberapa sensor seperti ultrasonik yang dipasang untuk memantau ketinggian air sunga. Informasi dari Node dikirim via sinyal GSM atau GPRS ke web server.</p><p style=\"margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: 22px; font-family: Roboto, HelveticaNeueW01-45Light, Helvetica, Arial; vertical-align: baseline; letter-spacing: 0.16px; text-rendering: optimizespeed; -webkit-font-smoothing: antialiased; color: rgb(51, 51, 51);\">Informasi pantauan lalu bisa diakses Simbat Client yang dipasang di tempat publik seperti masjid atau kantor RW. Jika ada potensi banjir, alat itu akan mengeluarkan bunyi peringatan. Perangkat terakhir yaitu aplikasi buat umum.</p><p style=\"margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: 22px; font-family: Roboto, HelveticaNeueW01-45Light, Helvetica, Arial; vertical-align: baseline; letter-spacing: 0.16px; text-rendering: optimizespeed; -webkit-font-smoothing: antialiased; color: rgb(51, 51, 51);\">Simbat kini tengah dipersiapkan di ajang Pagelaran Mahasiswa Nasional Bidang Teknologi Informasi dan Komunikasi 2016.</p>', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `path`) VALUES
('5d65dca5c7611', 9, NULL),
('5d774695ba0f6', 11, '5d774695ba0f6.png'),
('5d776a7eeef8b', 12, '5d776a7eeef8b.PNG'),
('5d776aad499f4', 13, '5d776aad499f4.jpg'),
('5d7a14ace34ff', 14, '5d7a14ace34ff.jpg'),
('5df4e27410f99', 22, '5df4e27410f99.jpg'),
('5df4ec88eabb2', 39, '5df4ec88eabb2.png'),
('5df4ec9e8d6d3', 41, '5df4ec9e8d6d3.png'),
('5df4ecb2897b2', 42, '5df4ecb2897b2.png'),
('5df4eccb9c60b', 44, NULL),
('5df4ee108df37', 46, '5df4ee108df37.jpg'),
('5df4ef3e3c267', 50, '5df4ef3e3c267.jpg'),
('5df4ef5894866', 51, '5df4ef5894866.jpg'),
('5df4ef71c28c7', 52, '5df4ef71c28c7.png'),
('5df4ef88568dd', 53, '5df4ef88568dd.jpg'),
('5df4effb79f67', 56, NULL),
('5df4f03e13272', 57, '5df4f03e13272.jpg'),
('5df4f05a76e13', 55, '5df4f05a76e13.jpg'),
('5df70c4f9fd72', 48, '5df70c4f9fd72.jpg'),
('5df70c686317a', 49, '5df70c686317a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `riset_group`
--

CREATE TABLE `riset_group` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riset_group`
--

INSERT INTO `riset_group` (`id`, `name`) VALUES
(1, 'Website'),
(2, 'Android'),
(3, 'Desktop'),
(4, 'IoT'),
(5, 'Hardware');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `place` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `description`, `place`, `photo`) VALUES
(1, 'Solder Uap', '                                                                              Blower ( Solder Uap ) Quick 850A                                                                              ', 'Lab Bawah', 'default.png'),
(2, 'Gerinda', '                                                    <p>Untuk memotong</p>                                                    ', 'Lab Bawah', 'default.png'),
(3, 'Bor', '                          <p>Untuk Melubangi </p>                          ', 'Lab Bawah', 'default.png'),
(4, 'Solder Besi', '                                                    <p>Solder besi 60W</p>                                                    ', 'Lab Bawah dan Lab Atas', 'default.png'),
(5, 'Gergaji Besi', '                                                    ', 'Lab Bawah', 'default.png'),
(6, 'Timah', '                                                                                                        ', 'Lab Bawah dan Lab Atas', 'default.png'),
(7, 'MultiMeter', '                                                                              Digital Multimeter AC  DC                                                                              ', 'Lab Bawah dan Lab Atas', 'default.png'),
(8, 'Dudukan Solder', '                                                    ', 'Lab Bawah dan Atas', 'default.png'),
(9, 'Penyedot Timah', '                                                                                                                                                            ', 'Lab Bawah dan Lab Atas', 'default.png'),
(10, 'Kabel Jumper', '                                                    <p>-Male-Male</p><p>-Male-Female</p><p>-Female-Female</p>                                                    ', 'Lab Bawah dan Lab Atas', 'default.png'),
(11, 'Kabel Coaxial', '                                                    ', 'Lab Bawah dan Lab Atas', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.png',
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `sub_riset` int(11) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `major` varchar(100) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `photo`, `company`, `phone`, `sub_riset`, `year`, `major`, `position`) VALUES
(17, '115.178.203.176', 'admin', '$2y$08$LH.dFNpCprZOdKTDR9CwS.EyIDGWyg5Mnuiq6/gc9Bzz0PRb/6.me', NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, 1566941184, 1577703411, 1, 'default.png', NULL, '', 0, '', '', ''),
(18, '36.79.250.221', 'agunwiguna', '$2y$08$.uZ34pWiirq198lWpTNZj.anVoSEwDzueOlFybcd8/bnUaSCYmp/q', NULL, 'wgnagun@gmail.com', NULL, NULL, NULL, NULL, 1566956738, 1566956797, 1, 'default.png', NULL, '082316369078', 1, '2017', 'Teknik Informatika', 'Anggota'),
(19, '10.20.30.1', 'agus', '$2y$08$WJH125ffN1AcjqBtqWOzhe5FGKPqvMQBV7ZdtPnDsDI0kEqC.93PS', NULL, 'bagus081@gmail.com', NULL, NULL, NULL, NULL, 1568497940, 1568497991, 1, 'default.png', NULL, '', 0, '', '', ''),
(22, '10.20.30.1', 'chiqors', '$2y$08$e7szauBoD0vLQieFwYefMOlSr8DzU6Pb.wh4M832aknUICeahyrk6', NULL, 'fathoni105@gmail.com', NULL, NULL, NULL, NULL, 1573106026, 1576308847, 1, '22.jpg', NULL, '081223939528', 1, '2017', 'Teknik Informatika', 'Ketua Mahasiswa'),
(23, '10.20.30.1', 'GamalRobby', '$2y$08$X.1AWfgaIg/cdpr87r66RuBIv4.yQ679vuoRxTcueozgonPFfUI4u', NULL, 'xcleker504@gmail.com', NULL, NULL, NULL, NULL, 1573112143, 1576558511, 1, '23.jpg', NULL, '083820888686', 4, '2017', 'Teknik Informatika', 'Sekertaris'),
(27, '10.20.30.1', 'FachrianHP', '$2y$08$mUnk4kfWW147mKKteRedDe3Sy4EtKKRIeZ0X5bhNk./RSCAWqY2r2', NULL, 'fachrianharis@gmail.com', NULL, NULL, NULL, NULL, 1576110968, 1576829644, 1, '27.jpg', NULL, '', 0, '', '', ''),
(28, '10.20.30.1', 'Bayu', '$2y$08$qKAbKaYuE1E9CAWbKkXgl.mcL2/8ho/egDiTAYuJ3l4Bn7NRN5Z22', NULL, 'bayugustiana88@gmail.com', NULL, NULL, NULL, NULL, 1576240230, 1576474806, 1, 'default.png', NULL, '', 4, '2019', 'Sistem Komputer', ''),
(29, '10.20.30.1', 'geryaf', '$2y$08$ilFLVi7vjshGq2h3Tkoig.dmZr6lOoLNgHW2qb4yzX524t69Rxfey', NULL, 'geryakbarfauzi@gmail.com', NULL, NULL, NULL, NULL, 1576240425, 1576472051, 1, '29.jpg', NULL, '082214399380', 2, '2018', 'Teknik Informatika', NULL),
(30, '10.20.30.1', 'Rimayania', '$2y$08$oyTX7fg7QmMtPzW1CxnZqu7AuhKpLALobNWxUlLCSpXm2df2ZxxEi', NULL, 'rimayaniagustina31@gmail.com', NULL, NULL, NULL, NULL, 1576240534, 1576324685, 1, 'default.png', NULL, '', 4, '2017', 'Teknik Informatika', 'Anggota'),
(31, '10.20.30.1', 'Wisnu_AP', '$2y$08$Ig3KDC9QovD60x.S/XRuSOiN8xoZr0QZKhyGhjSlbdImUMkHhvsAy', NULL, 'wisnuapermana1704@gmail.com', NULL, NULL, NULL, NULL, 1576246241, 1576329163, 1, 'default.png', NULL, '08971558088', 5, '2018', 'Teknik Komputer', 'anggota'),
(32, '10.20.30.1', 'nwidyant9', '$2y$08$rjR/tXTPbsKN1lGCjm943uRxEPOyBVDNQhIUjfXyLnBOZTvRfUmWm', NULL, 'nwidyanto9.nw9@gmail.com', NULL, NULL, NULL, NULL, 1576305284, 1576305412, 1, 'default.png', NULL, '', 0, '', '', ''),
(33, '10.20.30.1', 'alwiyahya99', '$2y$08$W0JlRfNzXGqtxaidkY3Md.rqFzVo.cW3O998Lh1EYoz8jPINL.YVC', NULL, 'alwizero@mahasiswa.unikom.ac.id', NULL, NULL, NULL, NULL, 1576324675, 1576328178, 1, '33.JPG', NULL, '', 4, '2018', 'Teknik Informatika', 'Wakil Mahasiswa'),
(34, '10.20.30.1', 'mohirfan23', '$2y$08$BN.qikEjTx1wd9IcYOqEWef9UbTaxdbTxLL7mrhUh3PvXjyVG.via', NULL, 'baihaqimuhamad79@gmail.com', NULL, NULL, NULL, NULL, 1576324842, NULL, 1, 'default.png', NULL, '', 1, '2016', 'Teknik Informatika', 'Anggota'),
(35, '10.20.30.1', 'mohirfan23', '$2y$08$FmMULpmPOngzOfIIkGXMTuZEdum4GEVkOG0jAPpoBvT0savNdDk1O', NULL, 'mohirfanbyhaqi@email.unikom.ac.id', NULL, NULL, NULL, NULL, 1576324899, 1576325643, 1, 'default.png', NULL, '', 1, '2016', 'Teknik Informatika', 'Anggota'),
(36, '10.20.30.1', 'rifanhidayat', '$2y$08$z69Rot9kyGA.GORiFoxZHuG27Ay/grfxehyXiSbY6QQJlX4g7/RyK', NULL, 'rifanhidayat0811@gmail.com', NULL, NULL, NULL, NULL, 1576325557, 1576325580, 1, 'default.png', NULL, '', 4, '2017', 'Teknik Informatika', 'Anggota'),
(39, '10.20.30.1', 'Huri Hidayat', '$2y$08$UKsummD42cZ.ZA5S6Rxp1O6p2a9ygFzzsKT22I6FJm3hxfGgnQiMq', NULL, 'hurihidayat2@gmail.com', NULL, NULL, NULL, NULL, 1576327669, 1576327825, 1, 'default.png', NULL, '', 2, '2019', 'Sistem Komputer', ''),
(40, '10.20.30.1', 'Cessario', '$2y$08$GZQiEDBWC4BVG964B.CAjeyMXNfMd5hH/.VP1X26yd.Q8l4IM97Ue', NULL, 'deadpoolboi99@gmail.com', NULL, NULL, NULL, NULL, 1576329173, 1576570982, 1, 'default.png', NULL, '', 5, '2018', 'Teknik Informatika', ''),
(41, '10.20.30.1', 'mohripan', '$2y$08$chkX.rqkFgP9ATtMC68.Ke3D4Ukb/CKWyQEQvLeLB/s46GIWuoZO6', NULL, 'mohripan16@gmail.com', NULL, NULL, NULL, NULL, 1576330382, 1576330395, 1, 'default.png', NULL, '', 3, '2019', 'Sistem Komputer', ''),
(42, '10.20.30.1', '10219028', '$2y$08$SQVYbfJha/m2R8MSMx3whu8CcE/FeDr7CYeHy4el0ObHx6Bl8OONm', NULL, 'alfa.10219028@mahasiswa.unikom.ac.id', NULL, NULL, NULL, NULL, 1576338658, 1576338701, 1, 'default.png', NULL, '', 5, '2019', 'Sistem Komputer', 'kader'),
(43, '10.20.30.1', 'MariusMichel LukasRahayaan', '$2y$08$CWoCVV7sbBtliT697P9IwuCa62Cfc9KVvqCgEehtGvRmekOcGzJpi', NULL, 'mariusrahayaan1818@gmail.com', NULL, NULL, NULL, NULL, 1576341426, 1576424454, 1, 'default.png', NULL, '', 5, '2019', 'Sistem Komputer', ''),
(44, '10.20.30.1', 'Rafi', '$2y$08$CUQN0xfa18412vzHZiqgUOUyUfPZF.dQ2R/CiaWXk0a7ZfZeo7LMC', NULL, 'rafibuss4@gmail.com', NULL, NULL, NULL, NULL, 1576372521, 1576474760, 1, 'default.png', NULL, '', 0, '', '', ''),
(46, '10.20.30.1', 'whizard', '$2y$08$nAEoX/RP0cXT5xFYCyzeAOBFV66s87kJR36HKk46S57X.6/smOFxO', NULL, 'wisnukm41@gmail.com', NULL, NULL, NULL, NULL, 1576555159, 1576555217, 1, 'default.png', NULL, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(19, 17, 1),
(20, 18, 2),
(21, 19, 3),
(24, 22, 7),
(25, 23, 7),
(29, 27, 1),
(30, 28, 5),
(31, 29, 7),
(32, 30, 2),
(33, 31, 2),
(34, 32, 5),
(35, 33, 7),
(36, 34, 2),
(37, 35, 2),
(38, 36, 2),
(41, 39, 5),
(42, 40, 7),
(43, 41, 5),
(44, 42, 5),
(45, 43, 5),
(46, 44, 5),
(48, 46, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piket`
--
ALTER TABLE `piket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `piket_ibfk_1` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riset_group`
--
ALTER TABLE `riset_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `piket`
--
ALTER TABLE `piket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

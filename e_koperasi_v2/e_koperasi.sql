-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 09:15 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `IdKota` int(11) NOT NULL,
  `NamaKota` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `IdProvinsi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`IdKota`, `NamaKota`, `IdProvinsi`) VALUES
(1, 'Meulaboh', 1),
(2, 'Blangpidie', 1),
(3, 'Kota Jantho', 1),
(4, 'Calang', 1),
(5, 'Tapak Tuan', 1),
(6, 'Singkil', 1),
(7, 'Karang Baru', 1),
(8, 'Takengon', 1),
(9, 'Kutacane', 1),
(10, 'Idi Rayeuk', 1),
(11, 'Lhoksukon', 1),
(12, 'Simpang Tiga Redelong', 1),
(13, 'Bireuen', 1),
(14, 'Blang Kejeren', 1),
(15, 'Suka Makmue', 1),
(16, 'Siqli', 1),
(17, 'Meureudu', 1),
(18, 'Sinabang', 1),
(19, 'Banda Aceh', 1),
(20, 'Langsa', 1),
(21, 'Lhokseumawe', 1),
(22, 'Sabang', 1),
(23, 'Subulussalam', 1),
(24, 'Kisaran', 2),
(25, 'Limapuluh', 2),
(26, 'Sidikalang', 2),
(27, 'Kabupaten Deli Serdang', 2),
(28, 'Dolok Sanggul', 2),
(29, 'Kabanjahe', 2),
(30, 'Rantau Prapat', 2),
(31, 'Aek Kanopan', 2),
(32, 'Stabat', 2),
(33, 'Penyabungan', 2),
(34, 'Gunung Sitoli', 2),
(35, 'Lahomi', 2),
(36, 'Teluk Dalam', 2),
(37, 'Kabupaten Nias Utara', 2),
(38, 'Sibuhuan', 2),
(39, 'Gunung Tua', 2),
(40, 'Salak', 2),
(41, 'Pangururan', 2),
(42, 'Sei Rampah', 2),
(43, 'Raya', 2),
(44, 'Sipirok', 2),
(45, 'Pandan', 2),
(46, 'Tarutung', 2),
(47, 'Balige', 2),
(48, 'Binjai', 2),
(50, 'Medan', 2),
(51, 'Padang Sidempuan', 2),
(52, 'Pematangsiantar', 2),
(53, 'Sibolga', 2),
(54, 'Tanjung Balai', 2),
(55, 'Tebing Tinggi', 2),
(56, 'Lubuk Basung', 3),
(57, 'Pulau Punjung', 3),
(58, 'Tuapejat', 3),
(59, 'Sarilamak', 3),
(60, 'Parit Malintang', 3),
(61, 'Lubuk Sikaping', 3),
(62, 'Simpang Empat', 3),
(63, 'Painan', 3),
(64, 'Muaro Sijunjung', 3),
(65, 'Arosuka', 3),
(66, 'Padang Aro', 3),
(67, 'Batusangkar', 3),
(68, 'Bukittinggi', 3),
(69, 'Padang', 3),
(70, 'Padangpanjang', 3),
(71, 'Pariaman', 3),
(72, 'Payakumbuh', 3),
(73, 'Sawahlunto', 3),
(74, 'Solok', 3),
(75, 'Bengkalis', 4),
(76, 'Tembilahan', 4),
(77, 'Rengat', 4),
(78, 'Bangkinang', 4),
(79, 'Teluk Kuantan', 4),
(80, 'Pangkal Kerinci', 4),
(81, 'Kabupaten Rokan Hilir', 4),
(82, 'Kabupaten Rokan Hulu', 4),
(83, 'Kabupaten Siak', 4),
(84, 'Pekanbaru', 4),
(85, 'Dumai', 4),
(86, 'Kepulauan Meranti', 4),
(87, 'Muara Bulian', 5),
(88, 'Muara Bungo', 5),
(89, 'Sungaipenuh', 5),
(90, 'Bangko', 5),
(91, 'Sengeti', 5),
(92, 'Sarolangun', 5),
(93, 'Kuala Tungkal', 5),
(94, 'Muara Sabak', 5),
(95, 'Muara Tebo', 5),
(96, 'Jambi', 5),
(97, 'Sunagi Penuh', 5),
(98, 'Banyuasin', 6),
(99, 'Tebing Tinggi', 6),
(100, 'Lahat', 6),
(101, 'Muara Enim', 6),
(102, 'Sekayu', 6),
(103, 'Lubuk Linggau', 6),
(104, 'Indralaya', 6),
(105, 'Kayu Agung', 6),
(106, 'Baturaja', 6),
(107, 'Muaradua', 6),
(108, 'Martapura', 6),
(109, 'Lubuklinggau', 6),
(110, 'Pagar Alam', 6),
(111, 'Palembang', 6),
(112, 'Prabumulih', 6),
(113, 'Kota Manna', 7),
(114, 'Karang Tinggi', 7),
(115, 'Arga Makmur', 7),
(116, 'Kabupaten Kaur', 7),
(117, 'Kepahiang', 7),
(118, 'Muara Aman', 7),
(119, 'Mukomuko', 7),
(120, 'Curup', 7),
(121, 'Tais', 7),
(122, 'Bengkulu', 7),
(123, 'Liwa', 8),
(124, 'Kalianda', 8),
(125, 'Gunungsugih', 8),
(126, 'Sukadana', 8),
(127, 'Kotabumi', 8),
(128, 'Mesuji', 8),
(129, 'Gedong Tataan', 8),
(130, 'Pringsewu', 8),
(131, 'Kota agung', 8),
(132, 'Menggala', 8),
(133, 'Tulang Bawang Barat', 8),
(134, 'Way Kanan', 8),
(135, 'Bandar Lampung', 8),
(136, 'Metro', 8),
(137, 'Sungai Liat', 9),
(138, 'toboali', 9),
(139, 'Mentok', 9),
(140, 'Koba', 9),
(141, 'Tanjungpandan', 9),
(142, 'Manggar', 9),
(143, 'Pangkal Pinang', 9),
(144, 'Bintan', 10),
(145, 'Karimun', 10),
(146, 'Kep. Anambas', 10),
(147, 'Lingga', 10),
(148, 'Natuna', 10),
(149, 'Batam', 10),
(150, 'Tanjung Pinang', 10),
(157, 'Jakarta Barat', 12),
(151, 'Rangkasbitung', 11),
(152, 'Pandeglang', 11),
(153, 'Serang', 11),
(154, 'Tangerang', 11),
(155, 'Cilegon', 11),
(156, 'Kep. Seribu', 12),
(158, 'Jakarta Pusat', 12),
(159, 'Jakarta Selatan', 12),
(160, 'Jakarta Timur', 12),
(161, 'Jakarta Utara', 12),
(162, 'Bandung', 13),
(163, 'Bekasi', 13),
(164, 'Bogor', 13),
(165, 'Ciamis', 13),
(166, 'Cianjur', 13),
(167, 'Cirebon', 13),
(168, 'Garut', 13),
(169, 'Indramayu', 13),
(170, 'Karawang', 13),
(171, 'Kuningan', 13),
(172, 'Majalengka', 13),
(173, 'Purwakarta', 13),
(174, 'Subang', 13),
(175, 'Sukabumi', 13),
(176, 'Sumedang', 13),
(177, 'Tasikmalaya', 13),
(178, 'Cimahi', 13),
(179, 'Depok', 13),
(180, 'Banjarnegara', 14),
(181, 'Banyumas', 14),
(182, 'Batang', 14),
(183, 'Blora', 14),
(184, 'Boyolali', 14),
(185, 'Brebes', 14),
(186, 'Cilacap', 14),
(187, 'Demak', 14),
(188, 'Grobogan', 14),
(189, 'Jepara', 14),
(190, 'Karanganyar', 14),
(191, 'Kebumen', 14),
(192, 'Kendal', 14),
(193, 'Klaten', 14),
(194, 'Kudus', 14),
(195, 'Magelang', 14),
(196, 'Pati', 14),
(197, 'Pekalongan', 14),
(198, 'Pemalang', 14),
(199, 'Purbalingga', 14),
(200, 'Purworejo', 14),
(201, 'Rembang', 14),
(202, 'Semarang', 14),
(203, 'Sragen', 14),
(204, 'Sukoharjo', 14),
(205, 'Tegal', 14),
(206, 'Temanggung', 14),
(207, 'Wonogiri', 14),
(208, 'Wonosobo', 14),
(209, 'Salatiga', 14),
(210, 'Solo', 14),
(211, 'Bantul', 15),
(212, 'Gunung Kidul', 15),
(213, 'Kulon Progo', 15),
(214, 'Sleman', 15),
(215, 'Yogyakarta', 15),
(216, 'Bangkalan', 16),
(217, 'Banyuwangi', 16),
(218, 'Blitar', 16),
(219, 'Bojonegoro', 16),
(220, 'Bondowoso', 16),
(221, 'Gresik', 16),
(222, 'Jember', 16),
(223, 'Jombang', 16),
(224, 'Kediri', 16),
(225, 'Lamongan', 16),
(226, 'Lumajang', 16),
(227, 'Madiun', 16),
(228, 'Magetan', 16),
(229, 'Malang', 16),
(230, 'Mojokerto', 16),
(231, 'Nganjuk', 16),
(232, 'Ngawi', 16),
(233, 'Pacitan', 16),
(234, 'Pamekasan', 16),
(235, 'Pasuruan', 16),
(236, 'Ponorogo', 16),
(237, 'Probolinggo', 16),
(238, 'Sampang', 16),
(239, 'Sidoarjo', 16),
(240, 'Situbondo', 16),
(241, 'Sumenep', 16),
(242, 'Trenggalek', 16),
(243, 'Tuban', 16),
(244, 'Tulungagung', 16),
(245, 'Surabaya', 16),
(246, 'Badung', 17),
(247, 'Bangli', 17),
(248, 'Buleleng', 17),
(249, 'Gianyar', 17),
(250, 'Jembrana', 17),
(251, 'Karangasem', 17),
(252, 'Klungkung', 17),
(253, 'Tabanan', 17),
(254, 'Denpasar', 17),
(255, 'Bima', 18),
(256, 'Dompu', 18),
(257, 'Mataram', 18),
(258, 'Praya', 18),
(259, 'Selong', 18),
(260, 'Tanjung', 18),
(261, 'Sumbawa Besar', 18),
(262, 'Taliwang', 18),
(263, 'Kupang', 19),
(264, 'Soe', 19),
(265, 'Kefamenanu', 19),
(266, 'Atambua', 19),
(267, 'Kalabahi', 19),
(268, 'Larantuka', 19),
(269, 'Maumere', 19),
(270, 'Ende', 19),
(271, 'Bajawa', 19),
(272, 'Ruteng', 19),
(273, 'Waingapu', 19),
(274, 'Waikabubak', 19),
(275, 'Lembata', 19),
(276, 'Rote Ndao', 19),
(277, 'Labuan Bajo', 19),
(278, 'Nagekeo', 19),
(279, 'Waibakul', 19),
(280, 'Tombolaka', 19),
(281, 'Borong', 19),
(282, 'Sabu Raijua', 19),
(283, 'Pontianak', 20),
(284, 'Bengkayang', 20),
(285, 'Kapuas Hulu', 20),
(286, 'Kayong Utara', 20),
(287, 'Ketapang', 20),
(288, 'Kubu Raya', 20),
(289, 'Landak', 20),
(290, 'Melawi', 20),
(291, 'Sambas', 20),
(292, 'Sanggau', 20),
(293, 'Sekadau', 20),
(294, 'Sintang', 20),
(295, 'Singkawang', 20),
(296, 'Buntok', 21),
(297, 'Tamiang', 21),
(298, 'Muara Teweh', 21),
(299, 'Kuala Kurun', 21),
(300, 'Kuala Kapuas', 21),
(301, 'Kasongan', 21),
(302, 'Pangkalan Bun', 21),
(303, 'Sampit', 21),
(304, 'Nanga Bulik', 21),
(305, 'Purukcahu', 21),
(306, 'Pulang Pisau', 21),
(307, 'Sukamara', 21),
(308, 'Kuala Pembuang', 21),
(309, 'Palangkaraya', 21),
(310, 'Paringin', 22),
(311, 'Martapura', 22),
(312, 'Marabahan', 22),
(313, 'Kandangan', 22),
(314, 'Barabai', 22),
(315, 'Amuntai', 22),
(316, 'Kotabaru', 22),
(317, 'Tanjung', 22),
(318, 'Batulicin', 22),
(319, 'Pelaihari', 22),
(320, 'Rantau', 22),
(321, 'Banjarbaru', 22),
(322, 'Banjarmasin', 22),
(323, 'Tanjungredep', 23),
(324, 'Tanjungselor', 23),
(325, 'Sendawar', 23),
(326, 'Tenggarong', 23),
(327, 'Sangatta', 23),
(328, 'Malinau', 23),
(329, 'Nunukan', 23),
(330, 'Tanah Grogot', 23),
(331, 'Penajam', 23),
(332, 'Tideng Pale', 23),
(333, 'Balikpapan', 23),
(334, 'Bontang', 23),
(335, 'Samarinda', 23),
(336, 'Tarakan', 23),
(337, 'Bantaeng', 24),
(338, 'Barru', 24),
(339, 'Watampone', 24),
(340, 'Bulukumba', 24),
(341, 'Enrekang', 24),
(342, 'Sunggu Minasa', 24),
(343, 'Jeneponto', 24),
(344, 'Benteng', 24),
(345, 'Palopo', 24),
(346, 'Malili', 24),
(347, 'Masamba', 24),
(348, 'Maros', 24),
(349, 'Pangkajene', 24),
(350, 'Pinrang', 24),
(351, 'Sidenreng', 24),
(352, 'Sinjai', 24),
(353, 'Watan Soppeng', 24),
(354, 'Takalar', 24),
(355, 'Makale', 24),
(356, 'Rantepao', 24),
(357, 'Sengkang', 24),
(358, 'Makasar', 24),
(359, 'Palopo', 24),
(360, 'Pare-Pare', 24),
(361, 'Majene', 25),
(362, 'Mamasa', 25),
(363, 'Mamuju', 25),
(364, 'Pasangkayu', 25),
(365, 'Polewali Mandar', 25),
(366, 'Rumbia', 26),
(367, 'Buton', 26),
(368, 'Buranga', 26),
(369, 'Kolaka', 26),
(370, 'Lasusua', 26),
(371, 'Konawe', 26),
(372, 'Andolo', 26),
(373, 'Wanggudu', 26),
(374, 'Raha', 26),
(375, 'Wangi-Wangi', 26),
(376, 'Kendari', 26),
(377, 'Luwuk', 27),
(378, 'Banggai', 27),
(379, 'Buol', 27),
(380, 'Donggala', 27),
(381, 'Bungku', 27),
(382, 'Parigi', 27),
(383, 'Poso', 27),
(384, 'Ampana', 27),
(385, 'Toli-Toli', 27),
(386, 'Sigi Biromaru', 27),
(387, 'Palu', 27),
(388, 'Kotamobagu', 28),
(389, 'Bolaang Uki', 28),
(390, 'Tutuyan', 28),
(391, 'Boroko', 28),
(392, 'Tahuna', 28),
(393, 'Ondong Siau', 28),
(394, 'Melonguane', 28),
(395, 'Tondano', 28),
(396, 'Amurang', 28),
(397, 'Ratahan', 28),
(398, 'Airmadidi', 28),
(399, 'Bitung', 28),
(400, 'Kotamobagu', 28),
(401, 'Manado', 28),
(402, 'Tomohon', 28),
(403, 'Tilamuta', 29),
(404, 'Bone Bolango', 29),
(405, 'Gorontalo', 29),
(406, 'Kwandang', 29),
(407, 'Pohuwato', 29),
(408, 'Namlea', 30),
(409, 'Namrole', 30),
(410, 'Kep.Aru', 30),
(411, 'Tiakur', 30),
(412, 'Masohi', 30),
(413, 'Tual', 30),
(414, 'Saumlaki', 30),
(415, 'Dataran Hunipopu', 30),
(416, 'Dataran Hunimoa', 30),
(417, 'Ambon', 30),
(418, 'Tual', 30),
(419, 'Jailolo', 31),
(420, 'Weda', 31),
(421, 'Tobelo', 31),
(422, 'Labuha', 31),
(423, 'Sanana', 31),
(424, 'Maba', 31),
(425, 'Morotai Selatan', 31),
(426, 'Ternate', 31),
(427, 'Tidore', 31),
(428, 'Fakfak', 32),
(429, 'Kaimana', 32),
(430, 'Manokwari', 32),
(431, 'Kumurkek', 32),
(432, 'Waisai', 32),
(433, 'Sorong', 32),
(434, 'Teminabuan', 32),
(435, 'Fef', 32),
(436, 'Bintuni', 32),
(437, 'Rasiei', 32),
(438, 'Sorong', 32),
(439, 'Asmat', 33),
(440, 'Biak', 33),
(441, 'Tanah Merah', 33),
(442, 'Tigi', 33),
(443, 'Kigamani', 33),
(444, 'Sugapa', 33),
(445, 'Sentani', 33),
(446, 'Wamena', 33),
(447, 'Waris', 33),
(448, 'Serui', 33),
(449, 'Tiom', 33),
(450, 'Burmeso', 33),
(451, 'Kobakma', 33),
(452, 'Kepi', 33),
(453, 'Merauke', 33),
(454, 'Timika', 33),
(455, 'Nabire', 33),
(456, 'Kenyam', 33),
(457, 'Enarotali', 33),
(458, 'Oksibil', 33),
(459, 'Ilaga', 33),
(460, 'Kotamulia', 33),
(461, 'Sarmi', 33),
(462, 'Sorendiweri', 33),
(463, 'Karubaga', 33),
(464, 'Botawa', 33),
(465, 'Sumohai', 33),
(466, 'Elelim', 33),
(467, 'Jayapura', 33);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `IdProvinsi` int(11) NOT NULL,
  `NamaProvinsi` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`IdProvinsi`, `NamaProvinsi`) VALUES
(1, 'Nanggroe Aceh Darussalam'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat'),
(4, 'Riau'),
(5, 'Jambi'),
(6, 'Sumatera Selatan'),
(7, 'Bengkulu'),
(8, 'Lampung'),
(9, 'Bangka Belitung'),
(10, 'Kep. Riau'),
(11, 'Banten'),
(12, 'DKI Jakarta'),
(13, 'Jawa Barat'),
(14, 'Jawa Tengah'),
(15, 'DI Yogyakarta'),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Sulawesi Selatan'),
(25, 'Sulawesi Barat'),
(26, 'Sulawesi Tenggara'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Utara'),
(29, 'Gorontalo'),
(30, 'Maluku'),
(31, 'Maluku Utara'),
(32, 'Papua Barat'),
(33, 'Papua'),
(34, 'Semua');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`, `level_admin`) VALUES
(2, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL,
  `noKtp_ang` varchar(35) NOT NULL,
  `nama_ang` varchar(50) NOT NULL,
  `tempat_lahir_ang` varchar(35) NOT NULL,
  `tgl_lahir_ang` date NOT NULL,
  `jk_ang` varchar(10) NOT NULL,
  `alamat_ang` varchar(75) NOT NULL,
  `pekerjaan_ang` varchar(30) NOT NULL,
  `alamatkerja_ang` varchar(75) NOT NULL,
  `telp_ang` varchar(15) NOT NULL,
  `email_ang` varchar(35) NOT NULL,
  `user_ang` varchar(30) NOT NULL,
  `password_ang` varchar(20) NOT NULL,
  `level` varchar(10) DEFAULT NULL,
  `status_ang` varchar(20) NOT NULL,
  `pas_foto_ang` varchar(50) NOT NULL,
  `ktp_ang` varchar(50) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_simpanan`
--

CREATE TABLE `tb_detail_simpanan` (
  `id_detail_simpanan` int(11) NOT NULL,
  `id_anggota_sim` int(11) NOT NULL,
  `id_jenis_sim` int(11) NOT NULL,
  `nominal` int(20) NOT NULL,
  `tgl_simpanan` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hak_akses`
--

CREATE TABLE `tb_hak_akses` (
  `id_hak_akses` int(11) NOT NULL,
  `level` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hak_akses`
--

INSERT INTO `tb_hak_akses` (`id_hak_akses`, `level`, `username`, `password`) VALUES
(2, 'anggota', 'asqiyahtamara', 'tamaraayu'),
(3, 'anggota', 'berlianKitty', 'kittyRa'),
(4, 'anggota', 'berlianKitty', 'kittyra'),
(5, 'anggota', 'berlianKitty', 'kittyra'),
(6, 'anggota', 'fifi', 'fififi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_simpanan`
--

CREATE TABLE `tb_jenis_simpanan` (
  `id_simpanan` int(11) NOT NULL,
  `jenis_simpanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_simpanan`
--

INSERT INTO `tb_jenis_simpanan` (`id_simpanan`, `jenis_simpanan`) VALUES
(1, 'Simpanan Pokok'),
(2, 'Simpanan Wajib'),
(3, 'Simpanan Sukarela');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengundurandiri`
--

CREATE TABLE `tb_pengundurandiri` (
  `id_undurdiri` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `noKtp_ang` varchar(35) NOT NULL,
  `nama_ang` varchar(50) NOT NULL,
  `tempat_lahir_ang` varchar(35) NOT NULL,
  `tgl_lahir_ang` date NOT NULL,
  `jk_ang` varchar(10) NOT NULL,
  `alamat_ang` varchar(75) NOT NULL,
  `pekerjaan_ang` varchar(30) NOT NULL,
  `alamatkerja_ang` varchar(75) NOT NULL,
  `telp_ang` varchar(15) NOT NULL,
  `email_ang` varchar(35) NOT NULL,
  `user_ang` varchar(30) NOT NULL,
  `password_ang` varchar(20) NOT NULL,
  `level` varchar(10) DEFAULT NULL,
  `status_ang` varchar(20) NOT NULL,
  `pas_foto_ang` varchar(50) NOT NULL,
  `ktp_ang` varchar(50) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengundurandiri`
--

INSERT INTO `tb_pengundurandiri` (`id_undurdiri`, `id_anggota`, `noKtp_ang`, `nama_ang`, `tempat_lahir_ang`, `tgl_lahir_ang`, `jk_ang`, `alamat_ang`, `pekerjaan_ang`, `alamatkerja_ang`, `telp_ang`, `email_ang`, `user_ang`, `password_ang`, `level`, `status_ang`, `pas_foto_ang`, `ktp_ang`, `tgl_daftar`, `tgl_keluar`) VALUES
(9, 15, '122212423423', 'Nurul Asqiyah Tamara', 'malang', '1994-12-12', 'Perempuan', 'Jl. Zaenal zakse Gg 6 No 10', 'mahaasiswa', 'Jl Soekarno ', '08955965965', 'asqiyahtamara@gmail.com', 'asqiyahtamara', 'tamara', 'anggota', 'tidak aktif', 'image/foto/lena.jpg', 'image/ktp/lena.jpg', '2016-11-13', '2016-11-13'),
(11, 16, '1331143302', 'Putri Arifiana Rakhmawati', 'malang', '1993-12-12', 'Perempuan', 'Jl. Zaenal zakse Gg 6 No 10', 'Pegawai', 'Jl Sidoarjo', '08955965965', 'putri@gmail.com', 'putri', 'putri3', 'anggota', 'tidak aktif', 'image/foto/3_Novi Widiyawati (2).jpg', 'image/ktp/2_Nindi Rizki Ayudya (1).jpg', '2016-11-13', '2016-11-23'),
(12, 17, '122212423423', 'Tamara', 'malang', '1994-11-09', 'Perempuan', 'Jl. Zaenal zakse', 'PNS', 'Jl Soekarno  hatta', '089683968938', 'asqiyahtamara27@gmail.com', 'tamara', 'tamara12', 'anggota', 'tidak aktif', 'image/foto/lena.jpg', 'image/ktp/OO.PNG', '2016-11-23', '2016-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_simpanan_wajib`
--

CREATE TABLE `tb_simpanan_wajib` (
  `id_simpanan_wjb` int(11) NOT NULL,
  `id_detail_simpanan_wajib` int(11) NOT NULL,
  `Pangkat` varchar(11) NOT NULL,
  `Nominal_Simpanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_simpanan_wajib`
--

INSERT INTO `tb_simpanan_wajib` (`id_simpanan_wjb`, `id_detail_simpanan_wajib`, `Pangkat`, `Nominal_Simpanan`) VALUES
(1, 2, 'Gol I', 25000),
(2, 2, 'Gol II', 60000),
(3, 2, 'Gol III', 75000),
(4, 2, 'Gol IV', 90000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`IdKota`),
  ADD KEY `id_pro` (`IdProvinsi`),
  ADD KEY `IdProvinsi` (`IdProvinsi`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`IdProvinsi`),
  ADD KEY `nama_provinsi` (`NamaProvinsi`),
  ADD KEY `id_provinsi` (`IdProvinsi`),
  ADD KEY `id_provinsi_2` (`IdProvinsi`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_detail_simpanan`
--
ALTER TABLE `tb_detail_simpanan`
  ADD PRIMARY KEY (`id_detail_simpanan`);

--
-- Indexes for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indexes for table `tb_jenis_simpanan`
--
ALTER TABLE `tb_jenis_simpanan`
  ADD PRIMARY KEY (`id_simpanan`);

--
-- Indexes for table `tb_pengundurandiri`
--
ALTER TABLE `tb_pengundurandiri`
  ADD PRIMARY KEY (`id_undurdiri`);

--
-- Indexes for table `tb_simpanan_wajib`
--
ALTER TABLE `tb_simpanan_wajib`
  ADD PRIMARY KEY (`id_simpanan_wjb`),
  ADD KEY `id_detail_simpanan_wajib` (`id_detail_simpanan_wajib`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `IdProvinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_detail_simpanan`
--
ALTER TABLE `tb_detail_simpanan`
  MODIFY `id_detail_simpanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  MODIFY `id_hak_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_jenis_simpanan`
--
ALTER TABLE `tb_jenis_simpanan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pengundurandiri`
--
ALTER TABLE `tb_pengundurandiri`
  MODIFY `id_undurdiri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_simpanan_wajib`
--
ALTER TABLE `tb_simpanan_wajib`
  MODIFY `id_simpanan_wjb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_simpanan_wajib`
--
ALTER TABLE `tb_simpanan_wajib`
  ADD CONSTRAINT `tb_simpanan_wajib_ibfk_1` FOREIGN KEY (`id_detail_simpanan_wajib`) REFERENCES `tb_jenis_simpanan` (`id_simpanan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2017 at 12:18 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.30

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u9898414_db_web_plnbogor`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `namafile` text NOT NULL,
  `ekstensi` varchar(20) NOT NULL,
  `id_kat_dokumen` int(11) NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `count_click` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `judul`, `namafile`, `ekstensi`, `id_kat_dokumen`, `tgl_dibuat`, `count_click`) VALUES
(1, 'Dokumen 1', 'Presentation2.pptx', 'pptx', 2, '2017-08-02 08:31:35', 0),
(2, 'Dokumen 2', 'Presentation21.pptx', 'pptx', 4, '2017-08-04 09:13:40', 0),
(4, 'Dokumen 3', 'CONTOH_LPPK_LPPM1.doc', 'doc', 2, '2017-09-19 15:56:57', 0),
(5, 'Dokumen 4', 'LAPORAN_KEGIATAN_KESEHATAN_KELOMPOK_28_KKN_UIKA_2017.docx', 'docx', 2, '2017-09-19 15:57:31', 0),
(6, 'Dokumen 5', 'LAPORAN_KEGIATAN_PEMBUATAN_WEBSITE_DESA_KELOMPOK_28_DAN_29_KKN_UIKA_2017.docx', 'docx', 4, '2017-09-19 15:57:50', 0),
(7, 'Dokumen 5', 'lembar_pengesahan.docx', 'docx', 2, '2017-09-19 15:58:19', 0),
(8, 'Dokumen 6', 'Pedoman_Pelaporan_PPM_UIKA_2017-edit_-_Copy.doc', 'doc', 2, '2017-09-19 15:58:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_galery` int(11) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_galery`, `judul`, `foto`, `tgl_dibuat`) VALUES
(2, 'Gambar 1', 'portal-2017-09-29 05.33.48pm.jpg', '2017-09-29 22:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_dokumen`
--

CREATE TABLE `kategori_dokumen` (
  `id_kat_dokumen` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_dokumen`
--

INSERT INTO `kategori_dokumen` (`id_kat_dokumen`, `deskripsi`, `tgl_dibuat`) VALUES
(2, 'Dokumen Umum', '2017-07-31 11:07:56'),
(4, 'Arsip Tahunan', '2017-07-31 14:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_konten`
--

CREATE TABLE `kategori_konten` (
  `id_kat_konten` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_konten`
--

INSERT INTO `kategori_konten` (`id_kat_konten`, `deskripsi`, `tgl_dibuat`) VALUES
(5, 'Berita Harian', '2017-07-27 10:01:13'),
(6, 'Arikel PLN Bogor', '2017-07-27 10:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_portal`
--

CREATE TABLE `kategori_portal` (
  `id_kat_portal` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_portal`
--

INSERT INTO `kategori_portal` (`id_kat_portal`, `deskripsi`, `tgl_dibuat`) VALUES
(2, 'Informasi', '2017-08-04 10:39:16'),
(3, 'AMR', '2017-09-27 12:27:48'),
(4, 'Aplikasi Pendukung', '2017-09-27 12:28:01'),
(5, 'Personal', '2017-09-27 12:28:10'),
(6, 'Unjuk Kinerja', '2017-09-27 12:28:24'),
(7, 'Lainnya', '2017-09-27 12:28:35'),
(8, 'Operasional', '2017-09-27 12:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `judul` text NOT NULL,
  `foto` text,
  `isi_deskripsi` text NOT NULL,
  `isi` text NOT NULL,
  `id_kat_konten` int(11) NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `count_click` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `nip`, `judul`, `foto`, `isi_deskripsi`, `isi`, `id_kat_konten`, `tgl_dibuat`, `count_click`) VALUES
(5, '', 'Sejarah SIngkat', 'cover-2017-10-02 03.24.14am.jpg', 'Ini adalah sejarah singkat', '<p>Perjalanan PT PLN Distribusi Jawa Barat dan Banten cukup panjang. Awal kelistrikan di Bumi Parahyangan sudah ada semenjak Pemerintah Kolonial Belanda masih bercokol di tataran tanah Sunda. Di tahun 1905, di Jawa Barat khususnya kota Bandung, berdiri perusahaan yang mengelola penyediaan tenaga listrik bagi kepentingan publik. Nama perusahaan itu&nbsp;<strong><em>Bandungsche Electriciteit Maatschaappij</em>&nbsp;(BEM)</strong>.</p>\r\n\r\n<p>Dalam perjalanannya, BEM pada tanggal 1 Januari 1920 berubah menjadi Perusahaan Perseroan menjadi&nbsp;<strong>Gemeenschapplijk Electriciteit Bedrijf Voor Bandoeng (GEBEO)</strong>&nbsp;yang pendiriannya dikukuhkan melalui akte notaris Mr. Andriaan Hendrik Van Ophuisen dengan Nomor: 213 pada tanggal 31 Desember 1949.</p>\r\n\r\n<p>Setelah kekuasaan penjajahan beralih ke tangan Pemerintah Jepang, di antara rentah waktu 1942 - 1945, pendistribusian tenaga listrik dilaksanakan oleh&nbsp;<strong>Djawa Denki Djigyo Sha Bandoeng Shi Sha</strong>&nbsp;dengan wilayah kerja di seluruh Pulau Jawa.</p>\r\n\r\n<p>Setelah Indonesia merdeka, tahun 1957 menjadi awal penguasaan pengelolaan penyediaan tenaga listrik di seluruh tanah air yang ditangani langsung oleh Pemerintah Indonesia. 27 Desember 1957, GEBEO diambil alih oleh Pemerintah Indonesia yang kemudian dikukuhkan lewat Peraturan Pemerintah No. 86 Tahun 1958 j.o. Peraturan Pemerintah No. 18 Tahun 1959.</p>\r\n\r\n<p>Selanjutnya, di tahun 1961 melalui Peraturan Pemerintah No. 67 dibentuk&nbsp;<strong>Badan Pimpinan Umum Perusahaan Listrik Negara (BPU-PLN)</strong>&nbsp;sebagai wadah kesatuan pimpinan PLN. Sejalan dengan itu, PLN Bandung pun berubah menjadi&nbsp;<strong>PLN Exploitasi XI</strong>&nbsp;sebagai kesatuan BPU-PLN di Jawa Barat, di luar DKI Jaya dan Tangerang.</p>\r\n\r\n<p>Pada tahun 1970-an dikeluarkan Peraturan Pemerintah No. 18 Tahun 1972 tentang Perusahaan Umum Listrik Negara yang menyebutkan status PLN menjadi&nbsp;<strong>Perusahaan Umum Listrik Negara</strong>. Kemudian, berdasarkan Pengumuman PLN Exploitasi XI No. 05/DIII/Sek/1975 tanggal 14 Juli 1975, PLN Exploitasi XI diubah namanya menjadi&nbsp;<strong>Perusahaan Umum Listrik Negara Distribusi Jawa Barat</strong>.</p>\r\n\r\n<p>Memasuki era 1990-an, dengan adanya Peraturan Pemerintah Republik Indonesia No. 23 Tahun 1994 pada tanggal 16 Juni 1994, Perusahaan Umum Listrik Negara Distribusi Jawa Barat diubah lagi menjadi Perusahaan Perseroan (Persero) dengan nama&nbsp;<strong>PT PLN (Persero) Distribusi Jawa Barat</strong>&nbsp;sejak tanggal 30 Juli 1994.</p>\r\n\r\n<p>Untuk memenuhi tuntutan perubahan dan perkembangan kelistrikan yang dari tahun ke tahun cenderung mengalami peningkatan, maka keluarlah Keputusan Direksi PT PLN (Persero) No. 28.K/010/DIR/2001 tanggal 20 Februari 2001 yang menjadi landasan hukum perubahan nama PT PLN (Persero) Distribusi Jawa Barat menjadi PT PLN (Persero) Unit Bisnis Distribusi Jawa Barat.</p>\r\n\r\n<p>Pada akhirnya, dengan mengacu pada Keputusan Direksi PT PLN (Persero) No. 120.K/010/DIR/2002 tanggal 27 Agustus 2002, PT PLN (Persero) Unit Bisnis Distribusi Jawa Barat berubah lagi namanya menjadi&nbsp;<strong>PT PLN (Persero) Distribusi Jawa Barat dan Banten</strong>, di mana&nbsp;<strong>wilayah kerjanya meliputi Propinsi Jawa Barat dan Propinsi Banten</strong>, hingga saat ini.</p>\r\n', 6, '2017-08-08 05:32:59', 0),
(7, '', 'Visi Misi dan Budaya Perusahaan', 'cover-2017-10-02 03.07.47am.jpg', 'Visi Misi PLN BOGOR', '<ul style=\"list-style-type:square\">\r\n	<li><a href=\"indexf9bf.html?content=djbb_falsafah\">Falsafah Perusahaan</a></li>\r\n	<li><a href=\"indexd546.html?content=djbb_visi_misi\">Visi, Misi dan Moto Perusahaan</a></li>\r\n	<li><a href=\"index87ea.html?content=djbb_tata_nilai\">Panduan Tata Nilai Anggota Perusahaan</a></li>\r\n	<li><a href=\"indexd84d.html?content=djbb_pengelolaan\">Prinsip-prinsip Pengelolaan Perusahaan</a></li>\r\n	<li><a href=\"index40a3.html?content=djbb_komitmen\">Komitmen Perusahaan Terhadap Pihak Yang Berkepentingan (Stakeholder)</a></li>\r\n	<li><a href=\"index4fde.html?content=djbb_operasional\">Panduan Operasional</a></li>\r\n	<li><a href=\"indexc277.html?content=djbb_internalisasi\">Internalisasi Budaya Perusahaan</a></li>\r\n</ul>\r\n', 6, '2017-08-08 05:35:11', 0),
(12, '', 'Perkuat Listrik Jakarta PLN Bangun Kabel Listrik Bawah Tanah 129 KM', 'First-Boring-SKTT-150-kV-Jakarta-800x480.jpg', '(Jakarta, 20 September 2017) PLN memulai pembangunan Saluran Kabel Tegangan Tinggi (SKTT) atau kabel listrik bawah tanah 150 kilo Volt (kV) untuk menjadikan sistem kelistrikan Jakarta dan sekitarnya semakin handal.\r\n\r\nFirst boring atau pengeboran pertama sebagai tanda dimulainya pekerjaan dilaksanakan pada hari ini Rabu, (20/9/2017) bertempat di PLTD Senayan, Jakarta Selatan.', '<p>(Jakarta, 20 September 2017) PLN memulai pembangunan Saluran Kabel Tegangan Tinggi (SKTT) atau kabel listrik bawah tanah 150 kilo Volt (kV) untuk menjadikan sistem kelistrikan Jakarta dan sekitarnya semakin handal.</p>\r\n\r\n<p>First boring atau pengeboran pertama sebagai tanda dimulainya pekerjaan dilaksanakan pada hari ini Rabu, (20/9/2017) bertempat di PLTD Senayan, Jakarta Selatan.</p>\r\n\r\n<p>Terdapat 6 (enam) proyek pembangunan SKTT yang segera dimulai serentak pembangunannya dan tersebar di beberapa lokasi di Jakarta dan Banten.</p>\r\n\r\n<p>Total panjang kabel yang dibangun mencapai 129,2 kilo meter, dengan biaya konstruksi sekitar 997 milyar rupiah.</p>\r\n\r\n<p>Direktur PLN Regional Jawa Bagian Barat Haryanto W.S. mengatakan bahwa pengerjaan pemasangan kabel menggunakan metode pengeboran HDD (Horizontal Directional Drilling).</p>\r\n\r\n<p>&ldquo;Dengan cara ini tidak membutuhkan pembebasan lahan, meminimalisir dampak kemacetan pada jalan raya, serta dapat diselesaikan dengan waktu yang relatif lebih cepat,&rdquo; ujar Haryanto.</p>\r\n\r\n<p>&ldquo;Pekerjaan SKTT ini juga telah memaksimalkan komponen dan produksi material dalam negeri. Komponen kabel 150 kV, kandungan TKDN nya mencapai sebesar 80% &ndash; 87% dari total biaya pekerjaan, termasuk pemasangannya yang dilaksanakan oleh anak bangsa,&rdquo; jelas Haryanto.</p>\r\n\r\n<p>Haryanto menambahkan pembangunan jalur kabel SKTT 150 kV yang baru ini juga dimaksudkan untuk menjamin kehandalan pasokan listrik pelaksanaan even internasional Asian Games 2018 dimana Indonesia sebagai tuan rumah acara tersebut.</p>\r\n\r\n<p>&ldquo;Seluruh pekerjaan ini diharapkan selesai pada tahun 2018 sebagai bagian dari penyelesaian proyek Pemerintah 35.000 MW dan 46.000 km sirkit jaringan transmisi dan 109.000 MVA gardu induk,&rdquo; tutup Haryanto.</p>\r\n\r\n<p>Berikut enam (6) lokasi proyek pembangunan kabel bawah tanah yang dimulai pada hari ini :<br />\r\n1. SKTT 150 kV Senayan &ndash; Danayasa, panjang 2,275 km route<br />\r\n2. SKTT 150 kV AGP &ndash; Mampang, panjang 2,250 km route<br />\r\n3. SKTT 150 kV Summarecon &ndash; Bekasi, panjang 4,970 km route<br />\r\n4. SKTT 150 kV Priok &ndash; Pelindo sirkit 2, panjang 5,078 km route<br />\r\n5. SKTT 150 kV Suralaya Lama &ndash; Suralaya Baru, panjang 1,5 km route<br />\r\n6. SKTT 150 kV Muara Karang &ndash; Angke, panjang 4,0 km route</p>\r\n', 5, '2017-09-25 12:59:27', 0),
(14, '', 'PLN Mulai Bangun Transmisi 500 Kilo Volt Jalur Utara Jawa', 'Ground-Breaking-SUTET-Utara-Jawa-800x480.jpg', 'PLN Komitmen Tuntaskan Program 35.000 MW\r\n\r\n(Semarang, 20 September 2017) Hari ini PLN melakukan peletakan batu pertama (Ground Breaking) pembangunan transmisi listrik Saluran Udara Teganan Tinggi (SUTET) 500 kilo Volt jalur utara Jawa di lokasi tower nomor 11 di Desa Gebugan, Kecamatan Bargas, Kabupaten Semarang Jawa Tengah.\r\n\r\nSecara simbolik, peletakan batu pertama dilakukan oleh Bupati Semarang H. Mundjirin dan General Manager PLN Unit Induk Jawa Bagian Tengah II (UIP JBT II) Amihwanuddin.', '<p>PLN Komitmen Tuntaskan Program 35.000 MW</p>\r\n\r\n<p>(Semarang, 20 September 2017) Hari ini PLN melakukan peletakan batu pertama (Ground Breaking) pembangunan transmisi listrik Saluran Udara Teganan Tinggi (SUTET) 500 kilo Volt jalur utara Jawa di lokasi tower nomor 11 di Desa Gebugan, Kecamatan Bargas, Kabupaten Semarang Jawa Tengah.</p>\r\n\r\n<p>Secara simbolik, peletakan batu pertama dilakukan oleh Bupati Semarang H. Mundjirin dan General Manager PLN Unit Induk Jawa Bagian Tengah II (UIP JBT II) Amihwanuddin.</p>\r\n\r\n<p>Amihwanuddin menjelaskan SUTET 500 kV Jalur Utara Jawa ini akan dibangun melintasi 21 Kabupaten/Kota di Provinsi Jawa Tengah sampai Jawa Barat dan mejadi tulang punggung sistem kelistrikan Jawa-Bali yang akan mengevakuasi daya listrik yang nantinya akan dihasilkan oleh pembangkit-pembangkit listrik yang saat ini juga sedang dalam tahap pembangunan.</p>\r\n\r\n<p>&ldquo;Jadi untuk merealisasikan proyek 35.000 MW dari pemerintah ini bukan saja pembangkit listrik yang dibangun, tetapi harus selaras dengan ketersediaan jaringan transmisi dan Gardu Induk,&rdquo; ujar Amihwanuddin.</p>\r\n\r\n<p>&rdquo;Tugas kami adalah melaksanakan pembangunan transmisi dan Gardu Induk untuk jalur utara Jawa ini tepat waktu. Sehingga pada saatnya pembangkit listrik beroperasi, daya listrik dapat dievakuasi menuju ke pusat beban pada pelanggan,&rdquo; tambah Amihwanuddin.</p>\r\n\r\n<p>Oembangunan SUTET 500 kV ini akan dibagi dalam beberapa seksi mulai dari seksi 1 (Tanjung Jati &ndash; TX), seksi 2 (Ungaran-Batang), seksi 3 (Batang-Mandirancan 1), seksi 4 (Batang-Mandirancan 2), seksi 5 (Mandirancan-Indramayu) dan seksi 6 (Indramayu-Cibatu Baru).</p>\r\n\r\n<p>&ldquo;Seluruh seksi ini nantinya menghubungkan pembangkit listrik dari PLTU Tanjung Jati, PLTU Batang, PLTU Indramayu sampai dengan GITET Cibatu Baru,&rdquo; jelas Amihwanuddin.</p>\r\n\r\n<p>Secara teknis, tapak tower yang akan dibangun untuk SUTET 500 kV memerlukan lahan 784 meter persegi, sesuai dengan tipe towernya dengan ketinggian sekitar 50 meter. Jarak antar tower SUTET sekitar 450 meter.</p>\r\n\r\n<p>Sehari sebelumnya (Kamis,19/9) PLN juga telah memulai pembangunan GITET Cibatu Baru di kawasan industri Deltamas, Bekasi Jawa Barat yang juga akan mendapatkan suplai listrik dari jalur SUTET yang akan dibangun ini.</p>\r\n\r\n<p>&ldquo;Ini menjadi bukti keseriusan dan komitmen PLN dalam mensukseskan program 35.000 MW bersama dengan pemerintah daerah dan seluruh stakeholder secara bersama-sama dari pelayanan sektor ketenagalistrikan,&rdquo; pungkas Amihwanuddin</p>\r\n', 5, '2017-09-27 15:25:52', 0),
(15, '', 'Kejar Target 35.000 MW, PLN Siapkan Siswa dan Guru Kompeten', 'cover-2017-09-27 04.15.24pm.jpg', 'Wisuda 163 Siswa Program Vocational Kelas PLN dari 15 SMK\r\n\r\nSurabaya, 22 Mei 2017 – Sebanyak 163 Siswa SMK kelas PJB (PT Pembangkitan Jawa Bali) diwisuda oleh Deputi Menteri Bidang Usaha Energi, Logistik, Kawasan dan Pariwisata (ELKP) Kementerian BUMN Edwin Hidayat Abdullah, didampingi Direktur Human Capital Management (HCM) PLN Muhamad Ali, Direktur Bisnis Regional Jawa Bagian Timur dan Bali PLN Amin Subekti serta Direktur Utama PJB Iwan Agung Firstantara, Senin (22/5). Acara yang digelar di PJB Kantor Pusat, Jl Ketintang Baru 11 Surabaya, ditandai dengan penyerahan ijazah dan sertifikat kompetensi bidang pembangkitan level 1. Bersamaan dengan hal tersebut, PLN juga membuka kelas Program Vocational kelas PLN serta menyerahkan penyerahan sertifikat kompetensi guru produktif kepada 15 orang guru.', '<p><em><strong>Wisuda 163 Siswa Program Vocational Kelas PLN dari 15 SMK</strong></em></p>\r\n\r\n<p>Surabaya, 22 Mei 2017 &ndash; Sebanyak 163 Siswa SMK kelas PJB (PT Pembangkitan Jawa Bali) diwisuda oleh Deputi Menteri Bidang Usaha Energi, Logistik, Kawasan dan Pariwisata (ELKP) Kementerian BUMN Edwin Hidayat Abdullah, didampingi Direktur Human Capital Management (HCM) PLN Muhamad Ali, Direktur Bisnis Regional Jawa Bagian Timur dan Bali PLN Amin Subekti serta Direktur Utama PJB Iwan Agung Firstantara, Senin (22/5). Acara yang digelar di PJB Kantor Pusat, Jl Ketintang Baru 11 Surabaya, ditandai dengan penyerahan ijazah dan sertifikat kompetensi bidang pembangkitan level 1. Bersamaan dengan hal tersebut, PLN juga membuka kelas Program Vocational kelas PLN serta menyerahkan penyerahan sertifikat kompetensi guru produktif kepada 15 orang guru.</p>\r\n\r\n<p>Kelas PJB adalah hasil kerjasama PJB dengan Dinas Pendidikan Provinsi Jawa Timur sejak 2015 lalu. Kerjasama dilakukan dalam upaya meningkatkan kualitas pendidikan, khususnya bagi pelajar tingkat Sekolah Menengah Kejuruan (SMK). Ruang lingkup kerjasama meliputi pengembangan kompetensi di bidang operation &amp; maintenance pembangkit tenaga listrik bagi siswa SMK, penyusunan kurikulum dan penyediaan instruktur, serta penyediaan sarana dan fasilitas untuk kegiatan praktek/magang. Kurikulum dan modul pembelajaran disesuaikan dengan kebutuhan industri pembangkit tenaga listrik, sehingga siswa yang lulus dari kelas PJB siap kerja di bidang pembangkitan. Bahkan dari 163 wisudawan PJB Class, sebanyak 37 diantaranya sedang menjalani On Job Training (OJT) di PJB.</p>\r\n\r\n<p>Dalam sambutannya, Deputi Menteri BUMN mengungkapkan bahwa seperti program pembangunan 35.000 MW pembangkit listrik, ditargetkan selesai dalam lima tahun kedepan, hal ini membutuhkan dukungan sumber daya manusia (SDM) yang kompeten untuk mendukung kebutuhan SDM bidang teknik kelistrikan. Peranan pendidikan sekolah menengah sangat strategis untuk menyiapkan tenaga ahli yang kompeten.</p>\r\n\r\n<p>Senada dengan hal tersebut, Direktur HCM PLN menekankan bahwa PLN akan memberikan perhatian khusus untuk membantu efektifitas dan peningkatan kualitas SDM, terutama sektor kelistrikan, karena untuk mengoperasikan infrastruktur kelistrikan butuh SDM yang handal.</p>\r\n\r\n<p>Di beberapa daerah di Indonesia saat ini telah menjalankan Program PJB Class 2017 antara lain:</p>\r\n\r\n<ol>\r\n	<li>SMKN 5 (STM Pembangunan) Surabaya</li>\r\n	<li>SMK Dwija Bhakti 1 Jombang</li>\r\n	<li>SMKN 1 Kediri</li>\r\n	<li>SMKN 1 Gending Probolinggo</li>\r\n	<li>SMKN I Bangil Pasuruan</li>\r\n	<li>SMKN 2 Kraksaan Probolinggo</li>\r\n	<li>SMK PGRI I Gresik</li>\r\n	<li>SMK PGRI 3 Malang</li>\r\n	<li>SMK Teknologi Balung &ndash; Jember</li>\r\n	<li>SMKN 2 Probolinggo</li>\r\n	<li>SMKN 7 Surabaya</li>\r\n	<li>SMKN 1 Wonoasri Kab. Madiun</li>\r\n	<li>SMKN 3 Boyolangu Kab. Tulungagung</li>\r\n	<li>SMKN 1 Jenangan Kab. Ponorogo</li>\r\n	<li>SMK Brantas Karangkates Kab Malang</li>\r\n</ol>\r\n\r\n<p>Selain mewisuda siswa SMK Kelas PJB, PLN juga menyerahkan sertifikat kompetensi kepada guru SMK yang telah mendapatkan pelatihan di PLN Corporate University. Penyerahan sertifikat ini dilatarbelakangi oleh Instruksi Presiden No. 9 Tahun 2016 tanggal 9 September 2016 tentang Revitalisasi Sekolah Menengah Kejuruan (SMK) dan merupakan tindak lanjut dari kerjasama Kementrian ESDM dan Kemendikbud untuk memenuhi kebutuhan tenaga kerja ketenagalistrikan.</p>\r\n\r\n<p>Guna mendukung terciptanya tenaga kerja yang berkualitas tersebut diperlukan guru-guru SMK yang handal dan memiliki Knowledge, Skill dan Attitude, khususnya untuk Bidang Distribusi dan Bidang Pemanfaatan Tenaga Listrik. Untuk itu, dalam program CSR (Corporate Social Responsibility), PLN mengadakan kerjasama pendidikan dengan SMK terpilih, melalui penandatanganan yang dilaksanakan pada 30 Maret 2017 bersama tiga pemerintahan provinsi, yakni DKI Jakarta, Jawa Barat dan Jawa Timur tentang Peningkatan Kompetensi Bidang Ketenagalistrikan pada Peserta Didik SMK.</p>\r\n\r\n<p>Kegiatan pelatihan bagi guru-guru SMK (Upgrading Guru SMK) tersebut dilaksanakan dengan komposisi 30% teori dan 70% praktek. Diharapkan kegiatan ini dapat memberikan dampak yang signifikan terhadap peningkatan kompetensi baik bagi guru maupun peserta didik nantinya.</p>\r\n\r\n<p>&ldquo;PLN ikut terlibat dalam mencerdaskan kehidupan bangsa baik melalui penyediaan dan penyaluran tenaga listrik untuk pelanggan maupun masyarakat umum, sekaligus ikut terlibat langsung dalam proses transfer knowledge, skill dan attitude pada bidang ketenagalistrikan kepada guru dan siswa SMK,&rdquo; imbuh Muhamad Ali.</p>\r\n\r\n<p>SMK yang terpilih menjadi Pilot Project dalam program ini adalah SMKN 26 Jakarta, SMKN 5 Jakarta, SMKN 2 Bogor dan SMK PGRI 3 Malang, yang secara keseluruhan melibatkan 110 siswa dan 30 orang guru.</p>\r\n\r\n<p><strong>PLN Peduli Ajak Anak Gemar Membaca</strong></p>\r\n\r\n<p>Di kesempatan terpisah, hari ini PLN juga memberikan bantuan untuk pembangunan taman baca di SDN Ketintang 4 Surabaya. Bantuan ini merupakan bentuk kepedulian PLN untuk mengajak anak sekolah dasar (SD) gemar membaca.</p>\r\n\r\n<p>Bantuan senilai lebih dari 170 juta rupiah tersebut diberikan secara simbolis kepada pihak sekolah oleh Direktur HCM PLN Muhamad Ali dan disaksikan oleh Deputi Menteri BUMN Edwin Hidayat Abdullah.</p>\r\n\r\n<p>Salah satu siswa, Subur, mengaku sangat senang dengan adanya taman baca di sekolahnya dan akan memanfaatkan taman bacaan tersebut untuk belajar dan bermain bersama teman-temannya.</p>\r\n\r\n<p>Kontak:</p>\r\n\r\n<p>I Made Suprateka</p>\r\n\r\n<p>Kepala Satuan Komunikasi Korporat</p>\r\n\r\n<p>Tlp. 021 7251234</p>\r\n\r\n<p>Facs. 021 7227059</p>\r\n\r\n<p>Email. suprateka@pln.co.id</p>\r\n', 5, '2017-09-27 15:27:15', 0),
(16, '', 'PLN Bangun Dua Pembangkit Baru Di Papua Bagian 35.000 MW', 'b6f1e6ae1b6bd5fe0ed9b146011fe8bc-pln-bangun-dua-pembangkit-baru-di-papua-bagian-35-000-mw-800x480.jpg', 'Jayapura, 20 April 2017 – PLN tengah membangun dua pembangkit listrik mesin gas (PLTMG) di Kampung Holtekamp, Jayapura sebesar 50 Megawatt (MW) dan di Nabire sebesar 20 MW.\r\n\r\nPembangunan ini merupakan tahap awal dari program 35.000 MW yang ada di tanah Papua. Dalam program 35.000 MW, Papua dan Papua Barat akan mendapatkan tambahan daya sebesar 320 MW.', '<p>Jayapura, 20 April 2017 &ndash; PLN tengah membangun dua pembangkit listrik mesin gas (PLTMG) di Kampung Holtekamp, Jayapura sebesar 50 Megawatt (MW) dan di Nabire sebesar 20 MW.</p>\r\n\r\n<p>Pembangunan ini merupakan tahap awal dari program 35.000 MW yang ada di tanah Papua. Dalam program 35.000 MW, Papua dan Papua Barat akan mendapatkan tambahan daya sebesar 320 MW.</p>\r\n\r\n<p>General Manager PLN Unit Induk Pembangunan (UIP) Papua Henrison Lumbanraja mengatakan pembangunan konstruksi PLTMG Holtekamp sudah mencapai 50%.</p>\r\n\r\n<p>&ldquo;Kita terus berupaya agar tahun ini, lebih tepatnya Oktober nanti, PLTMG sudah dapat bergabung ke sistem kelistrikan Jayapura,&rdquo; ujar Henrison.</p>\r\n\r\n<p>Sementara itu, Henrison menambahkan, perkembangan pembangunan PLTMG di Nabire (20 MW) sebesar 10% karena kontrak pembangunannya baru ditandatangani. Saat ini lahan yang sudah tersedia sedang dalam penimbunan.</p>\r\n\r\n<p>Selain dua pembangkit yang sedang dibangun, PLN akan membangun pembangkit di banyak lokasi di Papua dan Papua Barat seperti di Sorong, Fak-fak, Timika, Manokwari, Bintuni, Biak, Serui, dan Merauke.</p>\r\n\r\n<p>&ldquo;Selama proses pembangunan, PLN meminta dukungan kepada masyarakat dan SKPD setempat agar dapat berjalan dengan lancar. Kami akan terus mengupayakan amanah dari Presiden Joko Widodo, yakni rasio elektrifikasi di tanah Papua dapat mencapai 90% pada tahun 2019,&rdquo; pungkas Henrison.</p>\r\n', 5, '2017-09-27 15:28:36', 0),
(17, '', 'Kekuatan Perusahaan', 'cover-2017-10-02 02.20.35am.jpg', '', '<p>Dalam UU No 30 Tahun 2009 tentang Ketenagalistrikan, PLN bukan lagi satu-satunya pemegang kuasa usaha dalam bisnis ketenagalistrikan. Pemerintah membuka kesempatan bagi swasta, koperasi, maupun swadaya masyarakat untuk berperan serta dalam memberikan penyediaan listrik kepada masyarakat. Sehingga PLN dituntut untuk lebih meningkatkan profesionalitasnya dalam memberikan pelayanan kelistrikan kepada masyarakat.</p>\r\n\r\n<p>Dalam menghadapi tantangan dan konsisi ke depan yang terus berubah, maka beberapa hal dibawah ini merupakan unsur kekuatan PLN DJBB yang harus terus dipelihara, dioptimalkan dan bahkan dikembangkan.</p>\r\n\r\n<p>Kekuatan itu adalah :</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>SDM yang berpengalaman di bidang distribusi tenaga listrik.</li>\r\n	<li>Infrastruktur jaringan komunikasi data dan teknologi informasinya</li>\r\n	<li>Unit-unit Pelayanan yang telah mennyebar dan menjangkau ke pelosok, meliputi 17 Area, 1 Area Pengatur Distribusi, dan 100 Rayon.</li>\r\n	<li>Menguasai pangsa pasar distribusi tenaga listrik, dengan jumlah pelanggan saat ini sebesar 11,8 juta pelanggan (22 %) dari total jumlah pelanggan PLN secara nasional</li>\r\n	<li>Kepercayaan masyarakat dan lembaga/instansi lainnya yang cukup tinggi kepada PLN sebagai pengusaha tenaga listrik yang berpengalaman.</li>\r\n	<li>Infrastruktur jaringan kelistrikan yang cukup luas sebagai berikut :\r\n	<ol style=\"list-style-type:decimal\">\r\n		<li>Jaringan Tegangan Menengah (JTM) 44.970 Kms</li>\r\n		<li>Jaringan Tegangan Rendah (JTR) 147.333 Kms</li>\r\n		<li>Gardu Distribusi 51.530 buah</li>\r\n		<li>Trafo 48.096 buah dengan total kapasitas 9,512 MVA</li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n', 6, '2017-10-02 09:20:35', 0),
(18, '', 'Struktur Organisasi Kantor Distribusi PT PLN (Persero) Distribusi Jawa Barat', 'cover-2017-10-02 02.23.11am.jpg', '', '<table border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Iwan Purwana, General Manager</strong></p>\r\n\r\n			<p>Iwan Purwana menjabat sebagai General Manajer sejak 01 Desember 2015. Sebelum itu ia pernah menjabat sebagai Kepala Seksi Pembangkitan PT PLN (Persero) Wilayah Khusus Batam, Manajer Cabang Rengat PT PLN (Persero) Wilayah III, Manajer Cabang Tanjung Pinang PT PLN (Persero) Wilayah III, Manajer Area Pelayanan Dan Jaringan PT PLN (Persero) Area Sumedang, Manajer Senior Pengadaan Pembangkit III Divisi Pengadaan Strategis Direktorat (Pengadaan Dan Energi Primer) PT PLN (Persero) Kantor Pusat, Kepala Divisi Pengadaan Strategis Pada Direktorat (Pengadaan Dan Energi Primer) PT PLN (Persero) Kantor Pusat. Ia mendapat gelar S-1 Teknik Mesin dari Institut Teknologi Bandung dan S-2 dari University of Missouri.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Hadi Suharto, Pelaksana Tugas Manajer Bidang Perencanaan</strong></p>\r\n\r\n			<p>Menjabat sebagai Pelaksana Tugas Manajer Perencanaan sejak 1 Desember 2015. Hadi Suharto pernah menjabat sebagai Kepala Seksi Perencanaan Sistem, Deputi Manajer Bagian Sistem Informasi Bidang Perencanaan PT PLN (Persero) Wilayah Kalimantan Selatan dan Kalimantan Tengah, Senior Specialist Ii Kinerja Perusahaan PT PLN (Persero) Wilayah Kalimantan Selatan dan Kalimantan Tengah, Senior Specialist I Kinerja dan Operation Performance Improvement Bidang Enginering PT PLN (Persero) Pembangkitan Tanjung Jati B, Senior Specialist I Kinerja (Pelaksana Tugas Manajer Perencanaan) PT PLN (Persero) Wilayah Nusa Tenggara Timur. Ia mendapat gelar S-1 Listrik dari Universitas Gadjah Mada dan gelar S-2 Bidang Kelistrikan dari Universitas Gadjah Mada.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Suhatman, Manajer Bidang Komunikasi, Hukum dan Administrasi</strong></p>\r\n\r\n			<p>Suhatman menjabat sebagai Manajer KHA sejak 1 November 2015. Sebelum itu ia pernah menjabat sebagai Kepala Bagian Tata Usaha Sektor Ombilin PT PLN (Persero) Wilayah III, Kepala Bagian Tata Usaha Sektor Ombilin PT PLN (Persero) Pembangkitan dan Penyaluran Sumatera Bagian Selatan, Kepala Bagian Tata Usaha Sektor Padang PT PLN (Persero) Bagian Pembangkitan dan Penyaluran Sumatera Bagian Selatan, Kepala Bagian Akuntansi Bidang Keuangan PT PLN (Persero) Pembangkitan Dan Penyaluran Sumatera Bagian Selatan, Deputi Manajer Sub Bidang Fasilitas dan Administrasi PT PLN (Persero) Penyaluran dan Pusat Pengatur Beban Sumatera, Manajer Bidang Sumberdaya Manusia PT PLN (Persero) Wilayah Riau dan Kepulauan Riau, Manajer Komunikasi, Hukum Dan Administrasi PT PLN (Persero) Distribusi Jawa Timur. Ia mendapat gelar sarjana Ekonomi Akuntansi dari Universitas Jayabaya, dan menamtka pendidikan S-2 Bidang Manajemen dari Universitas Putra Indonesia.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Marjon Sinaga, Manajer Bidang Niaga</strong></p>\r\n\r\n			<p>Marjon Sinaga menjabat sebagai Manajer Niaga dan Pelayanan Pelanggan sejak 1 Januari 2016. Sebelum itu ia pernah menjabat sebagai Kepala Cabang Manado PT PLN (Persero) Wilayah VII, Kepala Bagian Pendapatan Cabang Manado PT PLN (Persero) Wilayah Sulawesi Utara, Sulawesi Tengah dan Gorontalo, Deputi Manajer Bagian Komersial Bidang Niaga PT PLN (Persero) Wilayah Kalimantan Timur, Manajer Cabang Flores Bagian Barat, Manajer Bidang Keuangan PT PLN (Persero) Wilayah Nusa Tenggara Timur, Senior Specialist I Transaksi Tenaga Listrik Divisi Bisnis dan Transaksi Tenaga Listrik Direktorat (Perencanaan dan Pembinaan Afiliasi) PT PLN (Persero) Kantor Pusat, Senior Officer I Administrasi Divisi Transaksi Tenaga Listrik dan Kemitraan Bisnis Direktorat Perencanaan Korporat PT PLN (Persero) Kantor Pusat. Ia menamatkan pendidikan S-1 Ekonomi Akuntansi dari Universitas Sumatera Utara dan gelar S-2 Bidang Ekonomi Akuntansi dari Universitas Sam Ratulangi.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Agus Kuswardoyo, Manajer Bidang Distribusi</strong></p>\r\n\r\n			<p>Menjabat sebagai Manajer Distribusi sejak 1 November 2015. Sebelum itu ia pernah menjabat sebagai Manajer Cabang Pare-Pare PT PLN (Persero) Wilayah Sulawesi Selatan, Sulawesi Tenggara dan Sulawesi Barat, Manajer Area Pelayanan Dan Jaringan Malang PT PLN (Persero) Distribusi Jawa Timur, Manajer Area Bekasi PT PLN (Persero) Distribusi Jawa Barat dan Banten, Manajer Distribusi PT PLN (Persero) Wilayah Sumatera Selatan, Jambi, dan Bengkulu. Ia mendapat gelar S-1 Teknik dari Universitas Gadjah Mada, dan gelar S-2 Bidang Manajemen Bisnis dari niversitas Jember.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Prasetyorini, Manajer Bidang Sumber Daya Manusia dan Organisasi</strong></p>\r\n\r\n			<p>Menjabat sebagai Manajer SDM dan Organisasi sejak 1 November 2015. Sebelum itu ia pernah menjabat sebagai Kepala Seksi Kepegawaian dan Sekretariat Bagian Tata Usaha Cabang Lhokseumawe PT PLN (Persero) Wilayah I, Kepala Seksi Sekretariat dan Humas Bidang Kepegawaian Dan Administrasi PT PLN (Persero) Wilayah I, Kepala Seksi Seksi Tata Usaha PT PLN (Persero) Wilayah IV, Deputi Manajer Bidang Organisasi dan Sumber Daya Manusia PT PLN (Persero) Wilayah Sumatera Selatan, Jambi, dan Bengkulu, Deputi Manajer Sumber Daya Manusia PT PLN (Persero) Wilayah Lampung, Deputi Manajer Administrasi SDM PT PLN (Persero) Distribusi Jawa Tengah dan D.I. Yogyakarta, Senior Specialist II Manajemen Mutu (Pelaksana Tugas Manajer Bidang Keuangan, SDM dan Administrasi) PT PLN (Persero) Pusat Pemeliharaan Ketenagalistrikan, Manajer Keuangan, SDM dan Administrasi PT PLN (Persero) Pusat Pemeliharaan Ketenagalistrikan. Ia menamatkan pendidikan S-1 Ekonomi Perusahaan dari Universitas Pembangunan Nasional Veteran.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Edward Fahrizal, Manajer Bidang Keuangan</strong></p>\r\n\r\n			<p>Edward Fahrizal menjabat sebagai Manajer Keungan sejak 1 September 2016. Sebelumnya pernah mejabat sebagai Kepala Seksi Keuangan Bagian Anggaran dan Keuangan PT PLN (Persero) Wilayah Khusus Batam, Deputi Manajer Anggaran Bagian Anggaran Bidang Keuangan PT PLN (Persero) Distribusi Jawa Barat dan Banten, Manajer Keuangan PT PLN (Persero) Wilayah Nusa Tenggara Barat. Ia menamatkan pendidikan S-1 Ekonomi Akuntansi di Universitas Islam Indonesia dan mendapt gelar S-2 Bidang Manajemen Bisnis dari Universitas dr. Soetomo.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 6, '2017-10-02 09:23:11', 0),
(19, '', 'Produk dan Layanan', 'cover-2017-10-02 02.24.23am.jpg', '', '<p>Dalam menjual produknya (energi listrik), PLN tidak memiliki kewenangan dalam menetapkan harga jual produknya, melainkan sepenuhnya merupakan kebijakan Pemerintah yang dituangkan melalui Keputusan Presiden (KEPPRES). Harga jual tenaga listrik saat ini mengacu pada Tarif Tenaga Listrik (TTL) tahun 2014 ditetapkan melalui Permen ESDM No. 19 Tahun 2014 tanggal 30 Juni 2014.</p>\r\n\r\n<p>Berdasarkan peruntukannya maka TTL 2014 terbagi dalam 8 Golongan Tarif yaitu:</p>\r\n\r\n<table border=\"0\" cellpadding=\"3\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Tarif Sosial (S)</strong></td>\r\n			<td>:</td>\r\n			<td>untuk kepentingan Sosial</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tarif Rumah Tangga (R)</strong></td>\r\n			<td>:</td>\r\n			<td>untuk kepentingan Rumah Tangga</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tarif Bisnis (B)</strong></td>\r\n			<td>:</td>\r\n			<td>untuk kepentingan Bisnis</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tarif Industri (I)</strong></td>\r\n			<td>:</td>\r\n			<td>untuk kepentingan Industri</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tarif Publik (P)</strong></td>\r\n			<td>:</td>\r\n			<td>untuk kepentingan Kantor Pemerintah dan Penerangan Jalan Umum</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tarif Layanan Khusus (L)</strong></td>\r\n			<td>:</td>\r\n			<td>untuk kepentingan Layanan Khusus</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tarif Traksi (T)</strong></td>\r\n			<td>:</td>\r\n			<td>untuk keperluan jaringan angkutan Traksi (KRL) PT KAI</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tarif Curah (C)</strong></td>\r\n			<td>:</td>\r\n			<td>untuk pemanfaatan secara curah</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Layanan yang disediakan oleh PLN pada dasarnya meliputi beberapa produk layanan, di antaranya:</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>Pelayanan Sambungan Baru, Perubahan Daya, Pelayanan Pengaduan Gangguan, Pelayanan Informasi Tagihan, dan lain-lain : melalui Contact Center PLN 123, website www.pln.co.id, Facebook PLN 123, Twitter @pln123, Email kontakkami@pln.co.id</li>\r\n	<li>Pelayanan Pembayaran Tagihan Listrik dan Token Listrik Prabayar : Di setiap payment point online bank, ATM, Internet Banking, SMS Banking</li>\r\n	<li>Pelayanan Dana Talangan Tagihan Listrik, bekerjasama dengan Bank</li>\r\n</ul>\r\n', 6, '2017-10-02 09:24:23', 0),
(20, '', 'Wilayah Kerja & Front Liner', 'cover-2017-10-02 02.25.11am.jpg', '', '<p>Luas wilayah kerja PT PLN (Persero) Distribusi Jawa Barat dan Banten (PLN DJBB) menjangkau lebih dari 42.196 km? yang meliputi Propinsi Jawa Barat dan Propinsi Banten, kecuali Tangerang. Jumlah konsumen yang mencapai lebih dari 11,8 juta pelanggan, atau 22 % dari jumlah pelanggan PLN secara nasional, menjadikan PLN DJBB merupakan Unit PLN terbesar di Indonesia. Wilayah dan beban kerja yang sedemikian besarnya, dikelola oleh Unit-unit Pelaksana Area Pelayanan dan Area Pengatur Distribusi (APD), dengan komposisi sebagai berikut :</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>Area Pelayanan : 17 Unit</li>\r\n	<li>Area Pengatur Distribusi (APD) : 1 Unit</li>\r\n	<li>Rayon : 100 Unit</li>\r\n	<li>Rayon Prima : 7 Unit</li>\r\n</ul>\r\n\r\n<p>Adapun Unit-unit Pelaksana tersebut adalah :</p>\r\n\r\n<ol style=\"list-style-type:decimal\">\r\n	<li>APD Bandung</li>\r\n	<li>Area Bandung</li>\r\n	<li>Area Banten Utara</li>\r\n	<li>Area Banten Selatan</li>\r\n	<li>Area Bekasi</li>\r\n	<li>Area Bogor</li>\r\n	<li>Area Cianjur</li>\r\n	<li>Area Cimahi</li>\r\n	<li>Area Cirebon</li>\r\n	<li>Area Depok</li>\r\n	<li>Area Garut</li>\r\n	<li>Area Gunung Putri</li>\r\n	<li>Area Karawang</li>\r\n	<li>Area Majalaya</li>\r\n	<li>Area Purwakarta</li>\r\n	<li>Area Sukabumi</li>\r\n	<li>Area Sumedang</li>\r\n	<li>Area Tasikmalaya</li>\r\n</ol>\r\n', 5, '2017-10-02 09:25:11', 0),
(21, '', 'Potensi dan Tantangan ke Depan', 'cover-2017-10-02 02.27.02am.jpg', '', '<p><strong>Potensi</strong></p>\r\n\r\n<p>Di masa depan, perkembangan kelistrikan di Jawa Barat dan Banten diperkirakan masih akan terus mengalami pertumbuhan yang pesat. Hal ini disebabkan besarnya potensi yang ada di Jawa Barat dan Banten khususnya, maupun potensi karena lingkungan nasional yang lebih kondusif, diantaranya :</p>\r\n\r\n<ol>\r\n	<li>Rasio Elektrifikasi yang relatif masih rendah (81 %)</li>\r\n	<li>Daftar tunggu calon pelanggan PLN yang relatif masih cukup besar</li>\r\n	<li>Pertumbuhan ekonomi dan produk ekspor relatif semakin prospektif</li>\r\n	<li>Posisi Jawa Barat dan Banten sebagai penyangga ibukota negara RI</li>\r\n	<li>Potensi alam sebagai modal pertumbuhan pariwisata daerah</li>\r\n	<li>Potensi sumber energi terbarukan yang sangat besar, khususnya panas bumi dan air.</li>\r\n	<li>Berkembangnya sektor Jasa dan Agrobisnis</li>\r\n	<li>Perkembangan daerah sejalan dengan kebijakan Otonomi Daerah</li>\r\n	<li>Minat Pemerintah Daerah untuk memberikan kontribusi di bidang Kelistrikan</li>\r\n	<li>Perkembangan Teknologi, khususnya Teknologi Informasi dan komunikasi</li>\r\n	<li>Dibangunnya beberapa unit pembangkit baru di Jawa Barat &amp; banten</li>\r\n	<li>Potensi pengembangan jaringan distribusi melalui jaringan 70 kV</li>\r\n	<li>Potensi excess power dari pelanggan besar yang memiliki pembangkit sendiri</li>\r\n	<li>Peluang sinergi dengan BUMN lain (Bank, PT Pos, dll)</li>\r\n	<li>Peluang sinergi dengan Anak Perusahaan (Icon+, JP, dll)</li>\r\n</ol>\r\n\r\n<p><strong>Tantangan</strong></p>\r\n\r\n<p>Selain adanya potensi yang memberikan peluang pertumbuhan yang cukup optimis di masa depan, PLN DJBB menghadapi pula beberapa hal yang menjadi tantangan untuk diselesaikan atau bahkan untuk menciptakan peluang usaha baru bagi PLN DJBB. Adapun beberapa tantangan yang ada antara lain :</p>\r\n\r\n<ol>\r\n	<li>Adanya Visi Kepco 2010 DJBB 2015, menuntut segenap jajaran PLN DJBB untuk bekerja lebih keras lagi untuk merealisasikannya di tengah keterbatasan finansial investasinya.</li>\r\n	<li>Kenyataan bahwa harga jual tenaga listrik lebih rendah dibandingkan dengan biaya pokok penyediaan tenaga listrik, menjadi tantangan tersendiri bagi PLN DJBB untuk secara signifikan meningkatkan efisiensi</li>\r\n	<li>Pertumbuhan konsumsi energi listrik yang masih relatif tinggi di Jawa Barat &amp; Banten menuntuk PLN DJBB untuk lebih antisipatif dan sistematis dalam penyiapan infrastruktur dan layanannya.</li>\r\n	<li>Adanya tren pelanggan besar untuk membangun pembangkit listrik sendiri, sehingga dalam jangka pendek mereka meminta untuk turun daya</li>\r\n	<li>Masih besarnya penduduk yang belum menikmati listrik, sedangkan pada umumnya diperlukan investasi yang sangat besar untuk membangun infrastruktur kelistrikannya</li>\r\n	<li>Keterbatasan investasi untuk penyediaan listrik PLN, telah memunculkan keinginan beberapa pihak untuk membangun kawasan eksklusif penyediaan listriknya (seperti kasus Cikarang Listrindo)</li>\r\n	<li>Belum adanya Gardu Induk di kawasan Selatan Jawa Barat dan Banten yang mengakibatkan tegangan suplai ke pelanggan sangat drop.</li>\r\n	<li>Sangat besarnya beban kerja beberapa Area (misal Area Bekasi dan Area Bogor), sehingga diperlukan pembentukan Area-Area baru.</li>\r\n	<li>Masih rendahnya rasio-rasio distribusi (misal ratio kVA trafo distribusi terhadap kVA trafo GI) yang menyebabkan timbulnya bottle-neck maupun rendahnya tingkat keandalan.</li>\r\n	<li>Kondisi eksternal yang sangat berpengaruh, misalnya kenaikan harga minyak dunia, instabilitas situasi politik daerah karena Pilkada atau lainnya, tingkat inflasi, kebijakan UMP, gejolak kurs valuta asing, masyarakat yang semakin kritis, dan sebagainya.</li>\r\n</ol>\r\n', 6, '2017-10-02 09:27:02', 0),
(22, '', 'Strategi dan Kebijakan Yang Inovatif', 'cover-2017-10-02 02.28.07am.jpg', '', '<ul style=\"list-style-type:square\">\r\n	<li><strong>Payment Point Online Bank (PPOB)</strong><br />\r\n	Pada tahun 2007 di-launch sebuah kebijakan yang inovatif, yaitu&nbsp;<em>Payment Point On-line Bank</em>&nbsp;(PPOB). PPOB adalah sebuah layanan pelunasan rekening listrik secara&nbsp;<em>online</em>&nbsp;yang memanfaatkan infrastruktur milik Bank. Dengan demikian pelanggan dapat membayar di ATM maupun&nbsp;<em>payment point</em>&nbsp;mana pun dan kapanpun. Model ini berhasil pula memunculkan peluang usaha baru bagi masyarakat berupa usaha&nbsp;<em>payment point</em>. Di sisi PLN selain mendapat nilai tambah berupa&nbsp;<em>revenue protection</em>, namun juga sebuah efisiensi signifikan karena tidak perlu membangun infrastruktur&nbsp;<em>online</em>&nbsp;sendiri.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Layanan Penyambungan Baru / Perubahan Daya Melalui Contact Center 123 dan Website&nbsp;<a href=\"www.pln.co.html\" target=\"_blank\">www.pln.co.id</a></strong><br />\r\n	Sebuah kebijakan strategis inovatif lainnya adalah layanan sambungan baru (PB) maupun perubahan daya (PD) melalui Contact Center PLN 123 dan website&nbsp;<a href=\"www.pln.co.html\" target=\"_blank\">www.pln.co.id</a>. Kebijakan ini menuntut segenap jajaran PLN untuk lebih antisipatif dan responsif dalam layanan PB / PD.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Layanan Listrik Prabayar</strong><br />\r\n	Dengan layanan prabayar, maka pelanggan akan membayar dulu &#39;pulsa&#39; listriknya (di sini diistilahkan dengan&nbsp;<em>token</em>). Model ini cukup prospektif mengingat bahwa sistem ini akan membantu masyarakat kecil dalam pembayaran listriknya secara &#39;eceran&#39;. Di sisi lain, sistem ini akan merangsang masyarakat dalam pembudayaan penghematan energi.<br />\r\n	&nbsp;</li>\r\n	<li><strong><em>Lending Working-Capital</em></strong><br />\r\n	Sebuah peluang bagi pelanggan besar PLN DJBB untuk menjamin ketepatan waktu pelunasan tagihan listrik, tanpa dihantui denda keterlambatan. Yaitu dengan skema kerjasama segitiga : Pelanggan-Bank-PLN DJBB. Pihak Bank akan membantu menyediakan dana talangan untuk melinasi tagihan listrik pelanggan, dengan tingkat bunga yang lebih rendah dibandingkan denda keterlambatan PLN.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Implementasi Teknologi Baru</strong><br />\r\n	Mulai 2008 PLN DJBB akan banyak mengimplementasikan penerapan Teknologi Baru dalam operasionalnya. Teknologi baru tersebut dapat berupa teknologi informasi, otomasi, telekomunikasi, pemanfaatan GIS (<em>Geographical Information System</em>), pemulihan gangguan dan sebagainya.</li>\r\n</ul>\r\n', 6, '2017-10-02 09:28:07', 0),
(23, '', 'PROGRAM BINA LINGKUNGAN - CSR PLN DISTRIBUSI JAWA BARAT DAN BANTEN TAHUN 2014', 'cover-2017-10-02 02.29.06am.jpg', '', '<p>Sebagai tanggungjawab moral dan sosial Perusahaan kepada lingkungan, yang didorong oleh rasa kepedulian dan keinginan untuk terlibat aktif dalam membangun potensi sosial kemasyarakatan, maka PT PLN DJBB mengembangkan Program Bina Lingkungan - CSR.</p>\r\n\r\n<ol>\r\n	<li>COMMUNITY EMPOWERING\r\n	<p>Kegiatan ini dilakukan melalui pendidikan/ pelatihan masyarakat, pemanfaatan limbah ternak menjadi energi alternatif (bio gas), dan pengembangan usaha masyarakat.</p>\r\n\r\n	<p>Tahun 2013 :<br />\r\n	Dana yang telah disalurkan Rp.1.180.586.000,-</p>\r\n\r\n	<p>Bentuk program :<br />\r\n	Diklat Masyarakat, DME, Beasiswa dan Pengembangan Usaha Masyarakat.<br />\r\n	Program Bina Lingkungan (Community Development).</p>\r\n	</li>\r\n	<li>COMMUNITY SERVICES\r\n	<p>Kegiatan ini dilakukan dengan memberikan bantuan berupa fasilitas ibadah dan kesehatan.</p>\r\n\r\n	<p>Tahun 2013 :<br />\r\n	a. Dana yang telah disalurkan Rp. 209.000.000,-<br />\r\n	b. Bentuk program :</p>\r\n\r\n	<p>Pemberian bantuan sarana umum, sarana ibadah dan peningkatan kesehatan.</p>\r\n	</li>\r\n	<li>PELESTARIAN ALAM\r\n	<p>Kegiatan ini dilakukan dengan memberikan bantuan untuk pelestarian lingkungan berupa penanaman pohon dan penghijauan.</p>\r\n	</li>\r\n	<li>BUMN MEMBANGUN DESA\r\n	<p>Kegiatan ini dilakukan dengan integrasi program pembangunan untuk meningkatkan kesejahteraan yang tercermin dari peningkatan pendapatan masyarakat, peningkatan tingkat pendidikan dan keterampilan, serta perbaikan mutu lingkungan.</p>\r\n\r\n	<p>Tahun 2013 :<br />\r\n	a. Dana yang telah disalurkan Rp. 2.276.672.600,-<br />\r\n	b. Bentuk program :</p>\r\n\r\n	<p>Pemberian bantuan sarana umum, sarana ibadah dan peningkatan kesehatan.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Prinsip Pengelolaan Dana Program Bina Lingkungan - CSR :</p>\r\n\r\n<table border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>1.</td>\r\n			<td>Transparan</td>\r\n			<td>: harus jelas kepada siapa dan mengapa dana diberikan.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2.</td>\r\n			<td>Akuntabilitas</td>\r\n			<td>: harus jelas pertanggung jawabannya, dapat diverifikasi/diaudit.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3.</td>\r\n			<td>Fairness</td>\r\n			<td>: harus dilaksanakan secara jujur.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4.</td>\r\n			<td>Fleksibel</td>\r\n			<td>: harus jelas kriteria dalam penyalurannya.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5.</td>\r\n			<td>Azas manfaat</td>\r\n			<td>: memberikan manfaat terbesar bagi tujuan PLN.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nTotal Dana Tersalurkan dan Rencana Penyaluran Dana CSR Tahun 2013 : Rp. 4.135.261.100,-</p>\r\n', 6, '2017-10-02 09:29:06', 0),
(24, '', 'Bangun Citra Positif, PLN Raih Delapan Penghargaan Indonesia Corporate Public Relations Excellence Award 2017', 'cover-2017-10-02 03.39.41pm.jpeg', '', '<p>Jakarta, 30 September 2017 &ndash; Sebagai BUMN yang bergerak di bidang energi, tentu saja mengharuskan PLN fokus terhadap inti bisnisnya. Namun, citra positif perusahaan tidak akan terwujud jika kinerja dan pencapaian perusahaan tidak terpublikasikan dengan baik. Oleh karena itu,&nbsp;public relations&nbsp;atau hubungan masyarakat (humas)&nbsp;menjadi tonggak utama bagi perusahaan, terutama PLN, untuk menjalakankan fungsi komunikasi manajemen agar mendapatkan dukungan dan kepercayaan dari publik atas kinerja dan pencapaian perusahaan tersebut.</p>\r\n\r\n<p>Dalam hal ini, Public Relations&nbsp;dan pimpinan di PLN terbukti melaksanakan fungsi komunikasi yang baik dengan diraihnya delapan penghargaan Indonesia Corporate Public Relations Excellence Award&nbsp;2017, Jumat (29/9) di Balai Kartini, Jakarta. Penghargaan yang diselenggarakan oleh Warta Ekonomi ini bertujuan untuk memberikan apresiasi kepada perusahaan, kementerian, lembaga maupun tokoh yang menjalankan kinerja PR dengan baik.</p>\r\n\r\n<p>Dari delapan penghargaan yang diraih PLN, enam kategori di antaranya adalah penghargaan untuk PLN sebagai holding, sedangkan dua penghargaan lainnya diraih oleh anak perusahaan PLN, yakni PT Indonesia Power dan PT Pembangkitan Jawa-Bali sebagai The Most Popular Company: Category Energy.<br />\r\n&nbsp;<br />\r\nBerikut kategori penghargaan yang diraih PLN dalam Indonesia Corporate Public Relations Excellence Award&nbsp;2017:<br />\r\n1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Most Popular Company: PT PLN (Persero), PT Indonesia Power, PT Pembangkitan Jawa-Bali.<br />\r\n2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Best PR for CEO: Sofyan Basir.<br />\r\n3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Most Popular CEO: Sofyan Basir.<br />\r\n4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Most Popular Company in Business Performance: PT PLN (Persero).<br />\r\n5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Most Popular Company in Innovation: PT PLN (Persero).<br />\r\n6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Most Popular Company in Business Expansion PT PLN (Persero).</p>\r\n\r\n<p>Penghargaan yang diselenggarakan oleh Warta Ekonomi ini diperoleh berdasarkan kegiatan Media Monitoring dengan proses media content analysis dari 40 media online teratas nasional dan 12 media online teratas internasional selama bulan Januari hingga Juli 2017. Penghargaan ini ditujukan untuk memberikan apresiasi kepada perusahaan, kementerian, lembaga maupun tokoh bisnis yang menjalankan kinerja&nbsp;public relations&nbsp;dengan baik hingga bisa menjadi panutan untuk yang lainnya.</p>\r\n\r\n<p>&ldquo;PLN terus mempublikasikan kinerja dan pencapaian agar publik semakin mendukung PLN. Kita tidak hanya memberikan pelayanan terbaik untuk masyarakat, tetapi juga memberikan informasi dan edukasi bagi masyarakat agar terciptanya good understanding&nbsp;dan komunikasi yang efektif,&rdquo; kata Kepala Satuan Komunikasi Korporat PLN I Made Suprateka.</p>\r\n\r\n<p>Penghargaan ini menambah sejumlah penghargaan yang diraih PLN sepanjang tahun 2017, khususnya dalam bidang public relations yang membangun citra positif untuk perusahaan.</p>\r\n\r\n<p>&ldquo;Penghargaan ini menjadi bukti bahwa PLN selalu siap untuk memberikan informasi yang dapat diakses dengan mudah dan transparan kepada khalayak. Hal ini sesuai dengan komitmen kami pula dalam pelaksanaan Keterbukaan Informasi Publik. Karena dengan masyarakat mempercayai kami, kami bisa mendapatkan dukungan penuh dari mereka,&rdquo; pungkas Made.&nbsp;</p>\r\n\r\n<p>Kontak:<br />\r\nI Made Suprateka<br />\r\nKepala Satuan Komunikasi Korporat<br />\r\nTlp.&nbsp;021 7251234<br />\r\nFacs.&nbsp;021 7227059<br />\r\nHP.&nbsp;0811194260<br />\r\nEmail.&nbsp;suprateka@pln.co.id</p>\r\n', 6, '2017-10-02 22:39:41', 0),
(25, '', 'Listrik Surplus, Jonan Dukung PLN Sambut Investor', 'cover-2017-10-02 03.40.11pm.jpeg', '', '<p>Sidrap 30 September 2017 &ndash; Menteri Energi Sumber Daya Mineral (ESDM) Ignasius Jonan mengunjungi PLTB (Pembangkit Listrik Tenaga Bayu)&nbsp; Sidrap yang terletak di Kecamatan Watang Pulu Kabupaten Sindereng Rappang Provinsi Sulawesi Selatan. Dalam kunjungan tersebut turut mendampingi Anggota DPR Komisi VII,&nbsp; Direktur Bisnis PT PLN (Persero) Regional Sulawesi Selatan Syamsul Huda, GM PLN Wilayah Sulselrabar Bob Saril&nbsp; dan Bupati Sidrap Rusdi Masse Pengerjaan pembangunan akan rampung pada awal tahun 2018</p>\r\n\r\n<p>PLTB Sidrap memiliki kapasitas 75 megawatt (MW) diproyeksikan mampu melistriki 70.000 pelanggan di Sulsel dengan daya listrik rata-rata 900 VA. Total akan terpasang 30 tiang di PLTB tersebut. PLTB Sidrap merupakan pembangkit tenaga angin pertama dan terbesar di Indonesia yang memanfaatkan lahan kurang lebih 100 hektar. Nantinya listrik yang dihasilkan seharga 11 sen per kWh. Dengan adanya PLTB tersebut tentunya akan memperkuat sistem kelistrikan di Sulawesi Selatan sehingga cadangan daya sistem Sulsel sebanyak 500 MW di tahun 2018.</p>\r\n\r\n<p>Dalam kesempatannya Menteri ESDM menyampaikan apresiasi atas pembangunan PLTB Sidrap dan perhatian pemerintah atas bauran energi yang akan terus ditingkatkan. &ldquo;Bauran energi tersebut nantinya akan dimanfaatkan sebagai bahan bakar salah satunya untuk transportasi yaitu mobil listrik,&rdquo; pungkas Jonan.</p>\r\n\r\n<p>Saat ditemui di waktu yang sama General Manager PLN Wilayah Sulselrabar menyampaikan bahwa saat ini listrik PLN sudah surplus dan apabila ada pemadaman itu dikarenakan ada pemeliharaan jaringan bukan kekurangan daya. &ldquo;PLTB Sidrap akan memperkuat sistem kelistrikan di Sulawesi Selatan, oleh karena itu dengan adanya listrik surplus kami siap mendukung perkembangan ekonomi,&rdquo; kata Bob Saril.</p>\r\n\r\n<p>Kondisi kelistrikan PT PLN (Persero) Wilayah Sulselrabar saat ini surplus dengan daya mampu 1250 MW dan beban puncak mencapai&nbsp; 1050 MW. Dengan demikian PLN masih memiliki cadangan daya 200 MW yang dapat memasok ke pelanggan. Seiring dengan sinkronnya beberapa pembangkit baru, pada tahun 2018 PT PLN (Persero) Wilayah Sulselrabar akan memiliki cadangan daya 500 MW.&nbsp; Oleh karena itu PLN mengajak investor agar jangan ragu berinvestasi di Sulsel karena listrik surplus dan jaringan semakin andal.</p>\r\n\r\n<p>Kontak:<br />\r\nRosita Zulkarnaen<br />\r\nHumas PT PLN (Persero) Wilayah Sulselrabar</p>\r\n', 6, '2017-10-02 22:40:11', 0);
INSERT INTO `konten` (`id_konten`, `nip`, `judul`, `foto`, `isi_deskripsi`, `isi`, `id_kat_konten`, `tgl_dibuat`, `count_click`) VALUES
(26, '', 'PLN Rampungkan 99% Infrastruktur Listrik Pulau Pongok dan Celagen', 'cover-2017-10-02 03.40.48pm.jpeg', '', '<p>Warga desa Pulau Pongok dan Celagen, Kabupaten Bangka selatan kini mulai sumringah lantaran petugas PLN berhasil merampungkan pembangunan infrastruktur listrik yang ada di kedua pulau tersebut. Hal ini ditandai dengan dioperasikannya pembangkit listrik tenaga diesel (PLTD) kapasitas 5X200 KW di Pulau Pongok dan 3X100 KW di Pulau Celagen.</p>\r\n\r\n<p>Butuh perjuangan bagi petugas PLN untuk melistriki pulau berpenduduk 1.300 kepala keluarga tersebut. Pasalnya Para petugas harus menempuh tiga jam perjalan darat terlebih dahulu untuk mengangkut mesin dan material dari kota Pangkalpinang ke Pelabuhan Sadai di Bangka Selatan.</p>\r\n\r\n<p>Kemudian mesin dan meterial dibongkar dari truk untuk diangkut menggunakan kapal Nelayan menuju pelabuhan Pulau Lepar dengan lama perjalanan laut kurang lebih 30 menit. Tak sampai di situ, bersama para nelayan, mesin kembali dipindahkan ke dalam mobil dan diangkut menuju pelabuhan Tanjung Labu selama 45 menit perjalanan yang berlokasi di ujung timur pulau lepar.</p>\r\n\r\n<p>Sampai di sini petugas kembali harus melakukan proses loading-unloading mesin untuk kemudian dibawa menuju ke pelabuhan Pulau Pongok dan Celagen yang ditempuh selama 3 jam perjalanan laut.</p>\r\n\r\n<p>Di sana warga sudah menyambut dengan gembira kedatangan mesin-mesin tersebut. Tanpa ragu petugas PLN pun dibantu warga menurunkan mesin dan material dari kapal kemudian diangkut ke lokasi PLTD.</p>\r\n\r\n<p>Upaya yang dimulai dari bulan Maret ini mulai membuahkan hasil. Mesin sudah berhasil terinstal dengan didukung jaringan tegangan menengah (JTM) sepanjang 7,26 KMS, jaringan tegangan rendah (JTR) sepanjang 8,65 KMS, 300 buah batang tiang, empat buah trafo kapasitas 50 kVA, dan tiga buah trafo 100 kVA.</p>\r\n\r\n<p>Rencananya pada bulan Oktober kedua pulau tersebut sudah menyala 24 jam, sebanyak 867 rumah terdaftar sebagai pelanggan PLN. Sebelumnya kedua pulau tersebut dilistriki menggunakan pembangkit listrik tenaga surya (PLTS) yang hanya menyala enam jam di malam hari. Pada akhir tahun 2016 PLN mendatangkan generator mobile kapasitas 150 kVA yang mampu menambah daya mampu listrik menjadi 12 jam di malam hari.</p>\r\n\r\n<p>General Manager PLN Babel menyampaikan pembangunan pembangkit tersebut sebagai bentuk dukungan PLN untuk mendorong pertumbuhan ekonomi di pulau tersebut. &ldquo;Ini merupakan bentuk konkrit komitmen kami mendorong pertumbuhan ekonomi di Pulau Celagen dan Pulau Pongok&rdquo; ujarnya.</p>\r\n\r\n<p>Lebih dari itu, Sapri salah satu warga menyampaikan bahwa dengan adanya listrik menimbulkan gairah dalam melakukan kegiatan &ldquo;dengan listrik yang ada sekarang ini kami jadi lebih antusias dan semangat dalam melaksanakan seluruh kegiatan dan pekerjaan&rdquo; pungkasnya.</p>\r\n', 5, '2017-10-02 22:40:48', 0),
(27, '', 'PLN Siapkan Mesin Pembangkit 45.500 Kilo Watt Untuk Listriki 33 Pulau Di Kepulauan Riau', 'cover-2017-10-02 03.42.29pm.jpeg', '', '<p>(Tanjungpinang, 25 September 2017) PLN telah menyiapkan 84 pembangkit listrik bermesin diesel total 45.500 kilo Watt (kW) untuk melistriki serta meningkatkan kapasitas listrik di 33 pulau di Kepulauan Riau.</p>\r\n\r\n<p>General Manager PLN Wilayah Riau Dan Kepulauan Riau (WRKR) M. Irwansyah Putra mengatakan untuk tahap pertama PLN telah mendatangkan 61 unit pembangkit bermesin diesel dengan total kapasitas 43.200 kW yang di tempatkan di 22 pulau.</p>\r\n\r\n<p>&ldquo;Pada bulan September 2017 sudah banyak mesin yang terpasang diatas pondasi, seperti untuk Selat Lampa, selain 1.000 kW yang telah dioperasikan saat ini 5.000 kW yang siap untuk di operasikan guna mendukung industri kelautan dan perikanan serta melistriki beberapa dusun dan desa di sekitar Selat Lampa Kabupaten Natuna,&rdquo; ungkap Irwansyah saat menghadiri acara hari jadi Provinsi Riau ke-15 tahun 2017.</p>\r\n\r\n<p>&ldquo;Selain itu juga sudah siap di operasikan pembangkit bertenaga diesel yang di Pulau Matak, Pulau Jemaja, Pulau Sugi Bawah, Pulau Buru, Pulau Durai yang masing-masing berkapasitas 1.000 kW,&rdquo; lanjut Irwansyah.</p>\r\n\r\n<p>&ldquo;Untuk tahap dua, sementara ada sekitar 3.200 kW pembangkit bermesin diesel dengan jumlah 23 unit yang kapasitas per-unit nya 100 kW dan 200 kW masih dalam proses pengadaan,&rdquo; tambah Irwansyah.</p>\r\n\r\n<p>Pemasangan mesin-mesin diesel di sejumlah pulau di Kepulauan Riau ini merupakan bukti komitmen pemerintah dan PLN dalam mendorong ekonomi warga yang tinggal di pulau terdepan dan terluar perbatasan negara.</p>\r\n\r\n<p>&ldquo;Selain itu juga untuk meningkatkan kualitas dan kapasitas pasokan energi listrik serta mempersiapkan pasokan listrik ke 97 desa yang belum menikmati Liatrik dari 417 desa yang ada,&rdquo; jelas Irwansyah.</p>\r\n\r\n<p>Di tengah acara hari jadi ke-15 Provinsi Kepulauan Riau, General Manager PT PLN (Persero) Wilayah Riau dan Kepulauan Riau, M Irwansyah Putra bersama dengan Gubernur Kepulauan Riau, Dr. H Nurdin Basirun S.Sos, MSi. meresmikan penyalaan 3 desa yang baru selesai pembangunan jaringan listriknya yaitu Desa Mepar, Kampung Sumber Karya dan Kampung Sinjang serta peningkatan jam nyala untuk listrik Desa Bakong Kecamatan Singkep Barat.</p>\r\n\r\n<p>&ldquo;Itu semua untuk meningkatkan taraf hidup masyarakat dan tumbuhnya perekonomian provinsi Kepulauan Riau,&rdquo; pungkas Irwansyah.</p>\r\n', 6, '2017-10-02 22:42:29', 0),
(28, '', 'Hari Jadi Ke-15 Provinsi Kepulauan Riau, PLN Tambah Listrik 1.000 kW Di Pulau Buru', 'cover-2017-10-02 03.42.56pm.jpeg', '', '<p>Hari Jadi Ke-15 Provinsi Kepulauan Riau, PLN Tambah Listrik 1.000 kW Di Pulau Buru Kepulauan Riau</p>\r\n\r\n<p>(Karimun, 25 September 2017) Setelah berhasil datangkan pembangkit listrik bermesin diesel di Pulau Matak, Pulau Jemaja , Selat Lampa Natuna , Pulau Sugi Bawah kali ini pada hari jadi Provinsi Kepulauan Riau ke 15 , dua unit pembangkit listrik bertenaga diesel dengan kapasitas total 1.000 kW berhasil menempati pondasi yang telah disiapkan diatas tanah milik PLN yang berlokasi di komplek PLN Pulau Buru.</p>\r\n\r\n<p>Masuknya pembangkit bermesin diesel ini akan menambah daya pasok Pulau Buru menjadi 1.700 KW dengan beban puncak saat ini sebesar 650 kW. Sehingga terdapat cadangan daya 1.050 kilo Watt yang akan digunakan untuk meningkatkan keandalan pasokan listrik bagi 1.062 pelanggan.</p>\r\n\r\n<p>Manajer SDM dan Umum PT PLN (Persero) Wilayah Riau dan Kepulauan Riau Dwi Suryo Abdullah menyampaikan sejak awal tahun 2017 PLN kesulitan melayani tambahan daya maupun pasang baru bagi pelanggan atau warga yang bermukin di Pulau Buru , mengingat cadangan listriknya hanya 50 kW.</p>\r\n\r\n<p>&ldquo;Sebagai perayaan hari jadi ke-15 Provinsi Kepulauan Riau PLN berhasil menambahkan 2 unit pembangkit bermesin diesel. Ini merupakan berkah tersendiri bagi warga Pulau Buru, karena keinginan untuk tambah daya dan pasang baru dapat dilayani PLN. Apalagi beberapa tempat yang menjadi pusat budaya untuk dikunjungi setiap akhir pekan nantinya dimalam hari semakin terang,&rdquo; ujar Dwi.</p>\r\n\r\n<p>Dwi pun mengaku optimis cadangan listrik 1.050 kW mampu mendorong pertumbuhan ekonomi dan meningkatkan taraf hidup warga pulau serta mengangkat warisan budaya Melayu sebagai tujuan wisata religi pulau Buru.</p>\r\n\r\n<p>&ldquo;Apabila tidak ada kendala dalam instalasi dua unit Genset berkapasitas 1.000 kW sinkron dengan Jaringan yang sudah ada, kami upayakan pada akhir Oktober 2017,&rdquo; tutup Dwi.</p>\r\n', 5, '2017-10-02 22:42:56', 0),
(29, '', 'PLN Tandatangani 16 Proyek 35.000 MW Total 21,1 Triliun', 'cover-2017-10-02 03.43.44pm.png', '', '<p><em>1.825,5 MW Proyek Pembangkitan &amp; 928 Kms Jaringan Transmisi</em></p>\r\n\r\n<p><br />\r\n<br />\r\nJakarta, 17 Maret 2017 &ndash; PLN siap menggarap 1.825,5 MW Proyek Pembangkit yang merupakan bagian dari Proyek 35.000 Mega Watt (MW) dengan skema EPC (Engineering Procurement, Construction). PLN juga siap membangun Transmisi 500 kilo Volt (kV) sepanjang 928 kilometer sirkit (kms) di Jalur Utara Jawa. Hal ini diperkukuh dengan ditandatanganinya 16 Proyek 35.000 MW pada Jumat, 17 Maret 2017.</p>\r\n\r\n<p>Bertempat di PLN Kantor Pusat, Direktur Utama PLN Sofyan Basir dengan didampingi oleh jajaran Direksi PLN menandatangani 16 proyek dengan nilai investasi pembangkit sebesar Rp 13 triliun (belum termasuk PLTD), nilai investasi transmisi sebesar Rp 2,1 triliun, dan biaya Long Term Service Agreement (LTSA) untuk 5 tahun senilai Rp 6 triliun. Proyek ini terdiri dari :</p>\r\n\r\n<p>A. Empat kontrak proyek pembangkitan sebesar 927,5 MW :</p>\r\n\r\n<ol>\r\n	<li>Proyek PLTGU Muara Tawar Blok 2,3 &amp; 4 Add On Project, 650 MW</li>\r\n	<li>PLTMG Bangkanai (Peaker) Stage-2, 140 MW</li>\r\n	<li>MPP Paket 7 (Flores, Nabire, Ternate dan Bontang), total 100 MW</li>\r\n	<li>PLTD tersebar Lot I dan Lot II, total 37,5 MW</li>\r\n</ol>\r\n\r\n<p>B. Enam Surat Penunjukan (LOI) proyek pembangkitan sebesar 898 MW:</p>\r\n\r\n<ol>\r\n	<li>PLTD tersebar Lot IV, total 328 MW</li>\r\n	<li>MPP Paket 3 (Merauke, Biak, Tj. Selor, Seram dan Langgur), total 90 MW</li>\r\n	<li>MPP Paket 4 (Maumere, Bima, dan Sumbawa), total 140 MW.</li>\r\n	<li>MPP Paket 5 (Bau-Bau, Ambon dan Jayapura), total 100 MW</li>\r\n	<li>PLTG/MG Riau Peaker, 200 MW</li>\r\n	<li>PLTMG Kupang Peaker, 40 MW</li>\r\n</ol>\r\n\r\n<p>C. Enam kontrak pengadaan pembangunan transmisi 500 kV jalur Utara Jawa</p>\r\n\r\n<ol>\r\n	<li>SUTET 500 kV Tx (Ungaran Pedan) &ndash; Batang</li>\r\n	<li>SUTET 500 kV Batang &ndash; Mandirancan Seksi 1</li>\r\n	<li>SUTET 500 kV Batang &ndash; Mandirancan Seksi 2</li>\r\n	<li>GITET 500 kV Batang Ext</li>\r\n	<li>GITET 500 kV Indramayu</li>\r\n	<li>GITET 500 kV Cibatu Baru Ext</li>\r\n</ol>\r\n\r\n<p>Penandatanganan ini disaksikan oleh Jaksa Agung Muda Intelijen Kejaksaan Agung Adi Toegarisman, Direktur I&nbsp; Bidang Perekonomian Pada Jamintel&nbsp; (Ketua TP4P) Aditia Warman, Sekretaris TP4P Yudi Handono, Ketua Tim Satgas Pengawal dan Pengaman Proyek GITET dan SUTET Irwan Sinuraya SH MH.</p>\r\n\r\n<p>Dalam sambutannya, Sofyan menegaskan komitmen Pemerintah untuk merealisasikan penyediaan listrik sebesar 35.000 MW dalam jangka waktu 5 tahun (2014-2019), yang telah dikukuhkan dalam dokumen Rencana Pembangunan Jangka Menengah Nasional (RPJMN) 2015-2019, serta penyediaan tenaga listrik daerah terpencil, pulau terluar dan daerah perbatasan berdasarkan surat Kementrian ESDM No. 8261/23/MEM.L/2014 tertanggal 19 Desember 2015.</p>\r\n\r\n<p>&ldquo;Hal tersebut dalam rangka memenuhi kekurangan pasokan daya, menggantikan pembangkit BBM eksisting yang tidak efisien, menaikkan rasio elektrifikasi pada daerah yang elektrifikasinya masih tertinggal dan meningkatkan kemampuan pasokan daya untuk daerah perbatasan serta pulau terluar,&rdquo; ungkap Sofyan.</p>\r\n\r\n<p>PLTGU Muara Tawar sangat strategis untuk memasok listrik ke pusat beban di Jakarta dan sekitarnya. PLTGU Muara Tawar add-on dibangun di lokasi eksisting, untuk melengkapi PLTG yang sudah ada sebelumnya. Dengan memanfaatkan gas buang dari PLTG, PLN dapat memperoleh tambahan kapasitas sebesar 650 MW tanpa adanya tambahan bahan bakar gas/BBM, sehingga efisiensi pembangkit akan meningkat.</p>\r\n\r\n<p>PLN juga membangun PLTMG Bangkanai-2 (140 MW) sebagai tambahan kapasitas untuk memenuhi kebutuhan listrik beban puncak sistem Barito. Dengan adanya pembangkit ini, total kapasitas PLTMG Bangkanai akan menjadi 295 MW. Sementara pembangkit-pembangkit peaker dibutuhkan untuk memenuhi kebutuhan listrik, khususnya pada saat beban puncak yang saat ini masih menggunakan BBM.</p>\r\n\r\n<p>Untuk memenuhi kebutuhan listrik di daerah-daerah tersebar dengan pembangkit yang efisien, PLN menggunakan MPP (Mobile Power Plant) paket 3, 4, 5 dan 7. Hal ini juga ditujukan untuk mendukung pemerataan akses listrik di wilayah Indonesia Timur. Pembangkit paket ini menggunakan bahan bakar duel fuel. Artinya, sebelum LNG (Liquid Natural Gas) tersedia, pembangkit bisa menggunakan BBM. Jika LNG sudah tersedia, maka dapat menurunkan Biaya Pokok Penyediaan (BPP) tenaga listrik di lokasi-lokasi tersebut.</p>\r\n\r\n<p>&ldquo;Penggunaan MPP dengan bahan bakar duel fuel sangat diperlukan karena manfaatnya sangat luas. Salah satunya, selain menjawab kebutuhan listrik, kita dapat mengurangi penggunaan pembangkit dengan bahan bakar minyak,&rdquo; jelas Sofyan.</p>\r\n\r\n<p>Sementara itu, pengadaan PLTD tersebar bertujuan untuk memenuhi kebutuhan listrik daerah perbatasan dan pulau-pulau terluar. Hal ini sangat diperlukan, karena tidak ada alternatif lain yang sesuai kecuali PLTD berbahan bakar minyak.</p>\r\n\r\n<p>Rencananya pada 2019, 90% pulau terluar berpenghuni sudah dialiri listrik PLN. Selain itu, 694 desa dan 137 kecamatan di pulau terluar, pulau terpencil dan perbatasan juga sudah berlistrik pada 2019.</p>\r\n\r\n<p>Selain pembangkit, PLN juga mengejar pembangunan Saluran Tegangan Ekstra Tinggi (SUTET) 500 kV dan Gardu Induk Tegangan Ekstra Tinggi (GITET) 500 kV di Jalur Utara Jawa. Hal ini bertujuan untuk mengevakuasi daya dari PLTU Indramayu, (2&times;1.000 MW), PLTU Jawa 1 (1&times;1.000 MW), PLTU Jawa 3 (2&times;660 MW), PLTU Jawa Tengah (2&times;950 MW) dan PLTU Jawa 4 (2&times;1.000 MW). Dengan adanya pembangunan jalur transmisi ini, maka PLN dapat menyalurkan daya listrik sebesar 8.820 MW kepada masyarakat. Hal ini tentunya akan berdampak positif bagi pertumbuhan ekonomi di Indonesia.</p>\r\n\r\n<p>Hal ini tak lepas dari peran dan kontribusi Tim Pengawal dan Pengaman Pemerintah dan Pembangunan Pusat (TP4P) yang sangat intensif melakukan pendampingan, pengawalan, pengamanan dan bantuan hukum dalam proses lelang sejak penyiapan proses awal sampai penetapan pelelangan dan penyiapan kontrak.</p>\r\n\r\n<p>&ldquo;Besarnya program 35.000 MW secara fisik dan keuangan, menjadikannya rentan akan berbagai hal terkait hukum, seperti pembebasan tanah dan perijinan. Untuk itu diperlukan pengawalan dan pengamanan dari sisi hukum agar program 35.000 MW menjadi kuat dalam pelaksanaannya. Kami mengucapkan terima kasih yang sebesar-besarnya kepada TP4P yang telah membantu dan berkontribusi demi kelancaran pelaksanaan pengadaan dan proyek ini,&rdquo; ungkap Sofyan.</p>\r\n\r\n<p>Sofyan juga memberikan apresiasi kepada para perusahaan yang telah menandatangani kontrak atas perannya dalam menyelesaikan proyek-proyek strategis ini.</p>\r\n\r\n<p>Penandatanganan 16 proyek pembangkit dan transmisi ini diharapkan menjadi sebuah awal yang baik bagi kesuksesan Program 35.000 MW. Pembangunan proyek pembangkit ini sendiri direncanakan rampung pada 2018. Dengan begitu, rencana Pemerintah untuk mewujudkan target rasio elektrifikasi sebesar 99% pada 2019 dapat tercapai.</p>\r\n\r\n<p>Kontak:<br />\r\nI Made Suprateka<br />\r\nKepala Satuan Komunikasi Korporat<br />\r\nTlp. 021 7251234<br />\r\nFacs. 021 7227059<br />\r\nTelp. 0811-194-260<br />\r\nEmail. suprateka@pln.co.id</p>\r\n', 5, '2017-10-02 22:43:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `page` enum('home','dashboard') NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `jenis` enum('konten','link') NOT NULL,
  `link` text,
  `id_konten` int(11) DEFAULT NULL,
  `icon` varchar(100) DEFAULT 'dashboard',
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `judul`, `page`, `parent`, `jenis`, `link`, `id_konten`, `icon`, `tgl_dibuat`) VALUES
(1, 'Managemen', 'dashboard', 0, 'link', '#', NULL, 'share-alt', '2017-07-26 13:03:34'),
(2, 'Users', 'dashboard', 1, 'link', 'user', NULL, 'user', '2017-07-26 13:04:15'),
(3, 'User Roles', 'dashboard', 1, 'link', 'user_roles', NULL, 'group', '2017-07-26 13:05:41'),
(4, 'Roles Navigation', 'dashboard', 1, 'link', 'navigation_roles', NULL, 'location-arrow', '2017-07-26 13:07:54'),
(5, 'Pengaturan', 'dashboard', 0, 'link', '#', NULL, 'gear', '2017-07-26 13:37:00'),
(6, 'Menu', 'dashboard', 5, 'link', 'menu', NULL, 'navicon', '2017-07-26 13:43:27'),
(8, 'Slider', 'dashboard', 5, 'link', 'slider', NULL, 'file-photo-o', '2017-07-26 13:51:58'),
(9, 'Konten', 'dashboard', 0, 'link', '#', NULL, 'file-word-o', '2017-07-26 13:54:13'),
(10, 'Data Konten', 'dashboard', 9, 'link', 'konten', NULL, 'folder-open-o', '2017-07-26 14:00:37'),
(11, 'Kategori Konten', 'dashboard', 9, 'link', 'kategori_konten', NULL, 'sort-alpha-asc', '2017-07-26 14:02:59'),
(12, 'Portal App', 'dashboard', 0, 'link', '#', NULL, 'rss-square', '2017-07-27 10:11:27'),
(23, 'Data Portal App', 'dashboard', 12, 'link', 'portal_app', NULL, 'folder-open-o', '2017-07-30 17:07:39'),
(37, 'Kategori Portal App', 'dashboard', 12, 'link', 'kategori_portal', NULL, 'sort-alpha-asc', '2017-07-30 19:55:17'),
(38, 'Dokumen', 'dashboard', 0, 'link', '#', NULL, 'sticky-note-o', '2017-07-30 21:20:30'),
(39, 'Data Dokumen', 'dashboard', 38, 'link', 'dokumen', NULL, 'folder-open-o', '2017-07-30 21:23:23'),
(40, 'Kategori Dokumen', 'dashboard', 38, 'link', 'kategori_dokumen', NULL, 'sort-alpha-asc', '2017-07-30 21:24:03'),
(46, 'Dokumen', 'home', 0, 'link', 'home/dokumen', NULL, 'fa fa-server', '2017-08-04 10:01:35'),
(47, 'Aplikasi Internal', 'home', 0, 'link', 'home/portal_app', NULL, 'rss-square', '2017-08-04 10:05:56'),
(48, 'Tentang DJBB', 'home', 0, 'link', 'DJBB', NULL, 'folder', '2017-08-08 05:31:11'),
(49, 'Sejarah SIngkat', 'home', 48, 'konten', NULL, 5, 'list', '2017-08-08 05:33:27'),
(50, 'Visi Misi dan Budaya', 'home', 48, 'konten', NULL, 7, 'list', '2017-08-08 05:37:26'),
(51, 'tes', 'dashboard', 0, 'link', '#', NULL, 'fa fa-document', '2017-08-12 22:07:03'),
(52, 'Gallery', 'dashboard', 0, 'link', 'galery', NULL, 'file-photo-o', '2017-09-29 22:22:37'),
(53, 'Artikel', 'home', 0, 'link', 'home/konten', NULL, 'list', '2017-10-02 09:17:14'),
(54, 'Kekuatan Perusahaan', 'home', 48, 'konten', NULL, 17, 'list', '2017-10-02 09:56:18'),
(55, 'Struktur Organisasi', 'home', 48, 'konten', NULL, 18, 'list', '2017-10-02 09:57:12'),
(56, 'Produk dan Layanan', 'home', 48, 'konten', NULL, 19, 'list', '2017-10-02 09:57:48'),
(57, 'Wilayah Kerja & Fron', 'home', 48, 'konten', NULL, 20, 'list', '2017-10-02 09:58:15'),
(58, 'Potensi dan Tantanga', 'home', 48, 'konten', NULL, 21, 'list', '2017-10-02 09:58:42'),
(59, 'Strategi dan Kebijak', 'home', 48, 'konten', NULL, 22, 'list', '2017-10-02 09:59:26'),
(60, 'PROGRAM BINA LINGKUN', 'home', 48, 'konten', NULL, 23, 'list', '2017-10-02 10:00:02'),
(61, 'Gallery', 'home', 0, 'link', 'home/galery', NULL, 'picture-o', '2017-10-02 21:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `portal_app`
--

CREATE TABLE `portal_app` (
  `id_portal` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `portal_desc` text,
  `url` text NOT NULL,
  `icon` text NOT NULL,
  `id_kat_portal` int(11) NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portal_app`
--

INSERT INTO `portal_app` (`id_portal`, `judul`, `portal_desc`, `url`, `icon`, `id_kat_portal`, `tgl_dibuat`) VALUES
(1, 'AMR APD', 'Ini adalah aplikasi AMR APD', 'google.com', 'portal-2017-09-28 07.45.46am.jpeg', 3, '2017-08-02 14:33:03'),
(2, 'Listrik Pra Bayar', 'ini adalah listrik pra bayar pln', 'listrik.com', 'qlosd1.jpg', 2, '2017-08-04 10:46:10'),
(3, 'Kliping PLN', 'ini adalah kliping PLN', 'kliping.com', 'Rhino.jpg', 5, '2017-08-04 10:46:55'),
(4, 'Informasi PLN', 'afaffa', 'pln.go.id', 'Rhino1.jpg', 6, '2017-09-24 19:19:11'),
(5, 'Porl', 'porarka', 'porl.com', '0098-260x172.jpg', 8, '2017-09-24 19:19:35'),
(6, 'PLN Bogor', 'afanknak', 'pln.co.id', '0098-260x1721.jpg', 7, '2017-09-25 15:56:55'),
(8, 'Aplikasi Callback', 'ini adalah Aplikasi Callback', 'callback.com', 'portal-2017-09-28 06.12.04am.jpg', 4, '2017-09-27 12:40:07'),
(10, 'AMR APD Disjabar	', 'AMR APD Disjabar	', 'amr.com', 'portal-2017-09-28 08.13.27am.jpg', 3, '2017-09-28 11:15:54'),
(11, 'ahfa', '', 'afa.com', 'portal-2017-09-28 08.11.20am.jpeg', 3, '2017-09-28 11:16:19'),
(12, 'tess', 'afaf', 'ada.cim', 'portal-2017-09-28 07.27.10am.png', 5, '2017-09-28 12:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `foto` text NOT NULL,
  `judul` text NOT NULL,
  `slider_desc` text,
  `link` text,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `foto`, `judul`, `slider_desc`, `link`, `tgl_dibuat`) VALUES
(1, 'pln-mob2-01.jpg', '', '', 'google.com', '2017-08-02 15:13:31'),
(2, 'Main-Banner-1600x447-Proper-Hijau.jpg', '', '', 'bing.com', '2017-08-04 08:39:31'),
(3, 'FA-SHP-Digital-20170830_web-banner-800x285-1-2.png', '', '', 'pln.com', '2017-09-27 15:30:11'),
(4, 'slider-2017-09-27 04.08.22pm.jpg', '', '', 'slider.co.id', '2017-09-27 21:08:22'),
(5, 'slider-2017-09-27 04.08.47pm.jpg', '', '', 'slider.co', '2017-09-27 21:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `alamat` text NOT NULL,
  `foto` text,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `id_role` int(11) NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nip`, `nama`, `tgl_lahir`, `jenis_kelamin`, `no_telp`, `email`, `alamat`, `foto`, `username`, `password`, `id_role`, `tgl_dibuat`) VALUES
(2, '000000000000000001', 'Admin Web PLN Bogor', '1980-07-17', 'laki-laki', '0838-1896-6990', 'admin-web-bogor@pln.co.id', 'Bogor, Jawa Barat', 'profil-000000000000000001.png', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2017-07-26 11:43:56'),
(3, '198503302003121001', 'Boy Andreas', '1996-07-03', 'laki-laki', '0838-1231-111', 'boy@gmail.com', 'Bogor', '', 'boy', '04a4793dfe8bda1bc47d680b7c7a289f', 2, '2017-07-26 14:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_nav`
--

CREATE TABLE `user_nav` (
  `id_role_nav` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_nav`
--

INSERT INTO `user_nav` (`id_role_nav`, `id_role`, `id_menu`, `tgl_dibuat`) VALUES
(29, 1, 1, '2017-07-30 17:29:00'),
(30, 1, 2, '2017-07-30 17:31:49'),
(31, 1, 5, '2017-07-30 17:33:18'),
(32, 1, 9, '2017-07-30 17:33:27'),
(34, 1, 3, '2017-07-30 17:37:01'),
(35, 1, 4, '2017-07-30 19:51:16'),
(36, 1, 6, '2017-07-30 19:51:25'),
(38, 1, 8, '2017-07-30 19:51:39'),
(39, 1, 10, '2017-07-30 19:51:45'),
(40, 1, 11, '2017-07-30 19:51:53'),
(42, 2, 9, '2017-07-30 19:52:13'),
(43, 2, 10, '2017-07-30 19:52:23'),
(44, 2, 11, '2017-07-30 19:52:33'),
(51, 1, 12, '2017-07-30 20:12:38'),
(52, 1, 23, '2017-07-30 20:12:47'),
(53, 1, 37, '2017-07-30 20:12:56'),
(54, 1, 38, '2017-07-30 21:20:40'),
(55, 1, 39, '2017-07-30 21:24:15'),
(56, 1, 40, '2017-07-30 21:24:23'),
(57, 2, 38, '2017-07-30 21:24:49'),
(58, 2, 39, '2017-07-30 21:25:16'),
(59, 2, 40, '2017-07-30 21:25:26'),
(60, 3, 2, '2017-07-30 21:25:40'),
(61, 3, 3, '2017-07-30 21:25:54'),
(62, 3, 1, '2017-07-30 21:26:07'),
(63, 3, 4, '2017-07-30 21:26:14'),
(64, 3, 5, '2017-07-30 21:26:47'),
(68, 2, 12, '2017-07-30 21:28:56'),
(69, 2, 23, '2017-07-30 21:29:10'),
(70, 2, 37, '2017-07-30 21:29:19'),
(71, 1, 52, '2017-09-29 22:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(150) NOT NULL,
  `role_desc` varchar(255) NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id_role`, `role_name`, `role_desc`, `tgl_dibuat`) VALUES
(1, 'Super Admin', 'Semua Fungsi Berjalan', '2017-07-25 10:36:40'),
(2, 'Content Creator', 'Khusus Membuat Konten Web', '2017-07-26 11:08:39'),
(3, 'Managemen', 'Melihat Konten Dan Log', '2017-07-26 11:08:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_kat_dokumen` (`id_kat_dokumen`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  ADD PRIMARY KEY (`id_kat_dokumen`);

--
-- Indexes for table `kategori_konten`
--
ALTER TABLE `kategori_konten`
  ADD PRIMARY KEY (`id_kat_konten`);

--
-- Indexes for table `kategori_portal`
--
ALTER TABLE `kategori_portal`
  ADD PRIMARY KEY (`id_kat_portal`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`),
  ADD KEY `id_kat_kontent` (`id_kat_konten`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `portal_app`
--
ALTER TABLE `portal_app`
  ADD PRIMARY KEY (`id_portal`),
  ADD KEY `id_kat_portal` (`id_kat_portal`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `user_nav`
--
ALTER TABLE `user_nav`
  ADD PRIMARY KEY (`id_role_nav`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  MODIFY `id_kat_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori_konten`
--
ALTER TABLE `kategori_konten`
  MODIFY `id_kat_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategori_portal`
--
ALTER TABLE `kategori_portal`
  MODIFY `id_kat_portal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `portal_app`
--
ALTER TABLE `portal_app`
  MODIFY `id_portal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_nav`
--
ALTER TABLE `user_nav`
  MODIFY `id_role_nav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `Cons_Dok_Kategori` FOREIGN KEY (`id_kat_dokumen`) REFERENCES `kategori_dokumen` (`id_kat_dokumen`);

--
-- Constraints for table `konten`
--
ALTER TABLE `konten`
  ADD CONSTRAINT `Cons_Konten_Kat` FOREIGN KEY (`id_kat_konten`) REFERENCES `kategori_konten` (`id_kat_konten`);

--
-- Constraints for table `portal_app`
--
ALTER TABLE `portal_app`
  ADD CONSTRAINT `Cons_Portal_Kat` FOREIGN KEY (`id_kat_portal`) REFERENCES `kategori_portal` (`id_kat_portal`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `Cons_User_idRole` FOREIGN KEY (`id_role`) REFERENCES `user_roles` (`id_role`);

--
-- Constraints for table `user_nav`
--
ALTER TABLE `user_nav`
  ADD CONSTRAINT `Cons_Nav_Menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `Cons_Nav_userRoles` FOREIGN KEY (`id_role`) REFERENCES `user_roles` (`id_role`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

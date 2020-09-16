-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 09:28 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk3l`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_berita` (
  `id_berita` varchar(100) NOT NULL,
  `id_kategori_berita` varchar(100) NOT NULL,
  `cover_berita` varchar(200) NOT NULL,
  `title_berita` varchar(200) NOT NULL,
  `status_berita` varchar(100) NOT NULL,
  `keyword_berita` varchar(200) NOT NULL,
  `desk_berita` text NOT NULL,
  `tgl_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE IF NOT EXISTS `tbl_buku` (
  `id_buku` varchar(50) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `tahun` date NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `file_buku` varchar(100) NOT NULL,
  `status_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `judul_buku`, `tahun`, `penerbit`, `file_buku`, `status_buku`) VALUES
('BP-0001', 'Safety Handbook HSE Edisi ke-3', '2018-01-02', 'Tim HSE PT INTI (Persero)', '', 'Publish'),
('BP-0002', 'Buku Saku Tanggap Tangkas Tangguh Mengahadapi Bencana', '2018-01-01', 'Badan Nasional Penanggulangan Bencana', '', 'Publish'),
('BP-0003', 'Panduan Kesiapsiagaan Bencana Alam', '2017-01-02', 'Safety Sign Indonesia', '', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE IF NOT EXISTS `tbl_config` (
  `config_id` int(11) NOT NULL,
  `nameweb` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `keywords` text NOT NULL,
  `google_maps` text NOT NULL,
  `logo` varchar(225) NOT NULL,
  `icon` varchar(225) NOT NULL,
  `about` text NOT NULL,
  `narasi_qrm` text,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `phone_number` varchar(225) NOT NULL,
  `metatext` text NOT NULL,
  `fax` text NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `instagram` varchar(225) NOT NULL,
  `google_plus` varchar(225) NOT NULL,
  `pinterest` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`config_id`, `nameweb`, `email`, `keywords`, `google_maps`, `logo`, `icon`, `about`, `narasi_qrm`, `address`, `city`, `zip_code`, `phone_number`, `metatext`, `fax`, `facebook`, `twitter`, `instagram`, `google_plus`, `pinterest`) VALUES
(1, 'PT INTI (Persero)', 'info@inti.co.id', 'Quality & Risk Management PT INTI', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1400.4740648152751!2d107.57604933636163!3d-6.873964080876905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e69ddb472b7b%3A0x75bf7284c04da41b!2sCollege+of+Logistics+Management+Indonesia!5e0!3m2!1sen!2sid!4v1539754367421', 'Untitled-35.jpg', 'PHOTO-2018-10-31-14-21-041.jpg', '<p>Perusahaan didirikan sebagai evolusi dari kerja sama PN Telekomunikasi dan Siemen AG pada tahun 1966. Kerja sama ini berlanjut pada pembentukan Pabrik Telepon dan Telegraf (PTT) sebagai Bagian dari LPP Postel pada tahun 1968. Pada tahun 1974, bagian ini dipisahkan dari LPP Postel menjadi sebuah Perseroan Terbatas yang berada di bawah naungan Direktorat Jenderal Pos dan Telekomunikasi. Pendirian Perusahaan ini didasarkan pada Peraturan Pemerintah Republik Indonesia No: 34 tahun 1974 tanggal 23 September 1974 tentang Penyetoran Modal Negara Republik Indonesia untuk Pendirian Perusahaan Perseroan (Persero) di Bidang Industri Telekomunikasi dan Surat Keputusan Menteri Keuangan Republik Indonesia No: Kep-1771/MK/IV/12/1974 tanggal 28 Desember 1974 tentang Penetapan Modal Perusahaan Perseroan. Anggaran Dasar Perusahaan dibuat oleh Akta Notaris Pengganti Warda Sungkar Alurmei, S.H., Nomor 322 tanggal 30 Desember 1974 dan telah disahkan oleh Menteri Kehakiman Republik Indonesia Nomor: Y.A.5/273/10 tanggal 1 Agustus 1975, sebagaimana telah diubah beberapa kali, terakhir dengan Akta Notaris Muhammad Hanafi, S.H., Nomor: 30 tanggal 19 Juli 2012, dan telah mendapat persetujuan berdasarkan Keputusan Menteri Hukum dan Hak Asasi Manusia Republik Indonesia Nomor: AHU-40994.A.H.01.02, Tahun 2012 tanggal 27 Juli 2012.</p>\r\n', '<p>Perusahaan didirikan sebagai evolusi dari kerja sama PN Telekomunikasi dan Siemen AG pada tahun 1966. Kerja sama ini berlanjut pada pembentukan Pabrik Telepon dan Telegraf (PTT) sebagai Bagian dari LPP Postel pada tahun 1968. Pada tahun 1974, bagian ini dipisahkan dari LPP Postel menjadi sebuah Perseroan Terbatas yang berada di bawah naungan Direktorat Jenderal Pos dan Telekomunikasi. Pendirian Perusahaan ini didasarkan pada Peraturan Pemerintah Republik Indonesia No: 34 tahun 1974 tanggal 23 September 1974 tentang Penyetoran Modal Negara Republik Indonesia untuk Pendirian Perusahaan Perseroan (Persero) di Bidang Industri Telekomunikasi dan Surat Keputusan Menteri Keuangan Republik Indonesia No: Kep-1771/MK/IV/12/1974 tanggal 28 Desember 1974 tentang Penetapan Modal Perusahaan Perseroan. Anggaran Dasar Perusahaan dibuat oleh Akta Notaris Pengganti Warda Sungkar Alurmei, S.H., Nomor 322 tanggal 30 Desember 1974 dan telah disahkan oleh Menteri Kehakiman Republik Indonesia Nomor: Y.A.5/273/10 tanggal 1 Agustus 1975, sebagaimana telah diubah beberapa kali, terakhir dengan Akta Notaris Muhammad Hanafi, S.H., Nomor: 30 tanggal 19 Juli 2012, dan telah mendapat persetujuan berdasarkan Keputusan Menteri Hukum dan Hak Asasi Manusia Republik Indonesia Nomor: AHU-40994.A.H.01.02, Tahun 2012 tanggal 27 Juli 2012.</p>\r\n', 'Jl. Moh. Toha No. 77 Cigereleng Regol Bandung Jawa Barat, Cigereleng, Regol, Cigereleng, Regol, Kota Bandung, Jawa Barat ', 'Bandung', '40253', '', 'QRM PT INTI', '', 'https://github.com/alldie1207', 'https://github.com/alldie1207', 'https://github.com/alldie1207', 'https://github.com/alldie1207', 'https://github.com/alldie1207');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumen`
--

CREATE TABLE IF NOT EXISTS `tbl_dokumen` (
  `id_dokumen` varchar(100) NOT NULL,
  `id_kategori_dokumen` varchar(100) NOT NULL,
  `no_dokumen` varchar(100) NOT NULL,
  `nm_dokumen` varchar(200) NOT NULL,
  `file_dokumen` varchar(200) NOT NULL,
  `tgl_sah_dokumen` date NOT NULL,
  `status_dokumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_dokumen`
--

INSERT INTO `tbl_dokumen` (`id_dokumen`, `id_kategori_dokumen`, `no_dokumen`, `nm_dokumen`, `file_dokumen`, `tgl_sah_dokumen`, `status_dokumen`) VALUES
('DK-0001', 'KD-0005', 'DK-0001s', 'Jurnal', 'jurnal5.docx', '2018-10-18', 'Publish'),
('DK-0002', 'KD-0003', 'DK-0002s', 'Aldadf', 'jurnal41.docx', '2018-10-18', 'Publish'),
('DK-0003', 'KD-0010', 'QMS-SUP17-001', '1.Pengendalian Dokumen', '1_Pengendalian_Dokumen_QMS3-SUP17-001.pdf', '2017-02-27', 'Publish'),
('DK-0004', 'KD-0010', 'QMS-SUP17-002', '2. Pengendalian Rekaman', '2__Pengendalian_Rekaman.pdf', '2017-04-19', 'Publish'),
('DK-0005', 'KD-0010', 'QMS-OPS27-001', '3. Pengendalian Produk Jasa Tidak Sesuai', '3__Pengendalian_Produk_Jasa_Tidak_Sesuai.pdf', '2017-04-19', 'Publish'),
('DK-0006', 'KD-0010', 'QMS3-EVL06-001', '4. Audit Internal dan Evaluasi Ketaatan', '4__Audit_Internal_dan_Evaluasi_Ketaatan.pdf', '2017-04-19', 'Publish'),
('DK-0007', 'KD-0010', 'QMS3-IPR01-001', '5. Tindakan Perbaikan', '5__Tindakan_Perbaikan.pdf', '2017-04-19', 'Publish'),
('DK-0008', 'KD-0010', 'QMS3-PLA02-001', '6. Tindakan Pencegahan', '6__Tindakan_Pencegahan.pdf', '2017-04-19', 'Publish'),
('DK-0009', 'KD-0010', 'QMS3-SUP05-001', '7. Pengendalian dan Kalibrasi Alat Ukur', '7__Pengendalian_dan_Kalibrasi_Alat_Ukur.pdf', '2017-04-19', 'Publish'),
('DK-0010', 'KD-0010', 'QMS3-EVL05-001', '8. Penerapan Teknik Statistik', '8__Penerapan_Teknik_Statistik.pdf', '2017-04-19', 'Publish'),
('DK-0011', 'KD-0010', 'QMS3-IPR04-001', '9. Peningkatan Berlanjut Sistem Manajemen Terintegrasi  Edisi 6 ', '9__Peningkatan_Berlanjut_Sistem_Manajemen_Terintegrasi_Edisi_6_(2).pdf', '2017-04-19', 'Publish'),
('DK-0012', 'KD-0010', 'QMS3-OPS22-001', '10. Pelayanan', '10__Pelayanan.pdf', '2017-04-19', 'Publish'),
('DK-0013', 'KD-0010', 'QMS3-SUP06-001', '11.Kebersihan,Kerapihan dan Kenyamanan Lingkungan Kerja', '11_Kebersihan,Kerapihan_dan_Kenyamanan_Lingkungan_Kerja.pdf', '2017-04-26', 'Publish'),
('DK-0014', 'KD-0010', 'QMS3-PLA02-002', '12. Keselamatan Kerja dan Lingkungan', '12__Keselamatan_Kerja_dan_Lingkungan.pdf', '2017-04-26', 'Publish'),
('DK-0015', 'KD-0010', 'QMS3-SUP22-002', '14. Komunikasi, Partisipasi dan Konsultasi', '14__Komunikasi,_Partisipasi_dan_Konsultasi.pdf', '2017-04-26', 'Publish'),
('DK-0016', 'KD-0010', 'QMS3-SUP22-002', '15. Penanganan, Penyimpanan, Pengemasan, Perlindungan dan Penyerahan Produk', '15__Penanganan,_Penyimpanan,_Pengemasan,_Perlindungan_dan_Penyerahan_Produk.pdf', '2017-04-26', 'Publish'),
('DK-0017', 'KD-0010', 'QMS3-OPS06-001', '16. Tinjauan Kontrak', '16__Tinjauan_Kontrak.pdf', '2017-04-26', 'Publish'),
('DK-0018', 'KD-0010', 'QMS3-OPS08-001', '17. Pengendalian Desain', '17__Pengendalian_Desain.pdf', '2017-04-26', 'Publish'),
('DK-0019', 'KD-0010', 'QMS3-OPS25-001', '20. Pemantauan, Pengukuran Proses dan Produk', '20__Pemantauan,_Pengukuran_Proses_dan_Produk.pdf', '2017-04-26', 'Publish'),
('DK-0020', 'KD-0010', 'QMS-PLA03-001', '21. Perencanaan Realisasi Produk QSE Plan Edisi 6_rev', '21__Perencanaan_Realisasi_Produk_QSE_Plan_Edisi_6_rev.pdf', '2017-04-26', 'Publish'),
('DK-0021', 'KD-0010', 'QMS3-OPS05-001', '30. Identifikasi Peraturan Perundangan dan Persyaratan lainnya terkait K3 & Lingkungan', '30__Identifikasi_Peraturan_Perundangan_dan_Persyaratan_lainnya_terkait_K3_Lingkungan.pdf', '2017-04-26', 'Publish'),
('DK-0022', 'KD-0010', 'QMS3-OPS19-011', '15. Instalasi Perangkat Perisalah QMS3-OPS19-011', '15__Instalasi_Perangkat_Perisalah_QMS3-OPS19-011.pdf', '2017-03-24', 'Publish'),
('DK-0023', 'KD-0010', 'QMS3-SUP04-009', 'METODE DASAR PERHITUNGAN MAN POWER PLANNING', 'QMS3-SUP04-009_METODE_DASAR_PERHITUNGAN_MAN_POWER_PLANNING.pdf', '2017-04-18', 'Publish'),
('DK-0024', 'KD-0010', 'QMS3-SUP04-013 ', 'PENYUSUNAN STRUKTUR ORGANISASI', 'QMS3-SUP04-013_PENYUSUNAN_STRUKTUR_ORGANISASI.pdf', '2017-04-12', 'Publish'),
('DK-0026', 'KD-0010', 'QMS3-SUP10-001', 'PERUMUSAN DAN EVALUASI BUDAYA PERUSAHAAN', 'QMS3-SUP10-001_PERUMUSAN_DAN_EVALUASI_BUDAYA_PERUSAHAAN.pdf', '2017-04-18', 'Publish'),
('DK-0027', 'KD-0010', 'QMS3-SUP08-001', 'PERUMUSAN DAN PENILAIAN FAKTOR-FAKTOR KETERIKATAN TENAGA KERJA DAN KEPUASAN KARYAWAN', 'QMS3-SUP08-001_PERUMUSAN_DAN_PENILAIAN_FAKTOR-FAKTOR_KETERIKATAN_TENAGA_KERJA_DAN_KEPUASAN_KARYAWAN.pdf', '2018-12-26', 'Publish'),
('DK-0028', 'KD-0010', 'QMS3-SUP12-002', 'KONSELING', 'QMS3-SUP12-002_KONSELING.pdf', '2017-04-18', 'Publish'),
('DK-0029', 'KD-0010', 'QMS3-SUP12-003', 'COACHING & MENTORING', 'QMS3-SUP12-003_COACHING_MENTORING.pdf', '2017-04-18', 'Publish'),
('DK-0030', 'KD-0010', 'QMS3-SUP12-006', 'PENGGUNAAN I-KNOW', 'QMS3-SUP12-006_PENGGUNAAN_I-KNOW.pdf', '2017-04-18', 'Publish'),
('DK-0031', 'KD-0010', 'QMS3-SUP04-012', 'PROSEDUR KERJA PHK APS', 'PROSEDUR_KERJA_PHK_APS.pdf', '2018-12-26', 'Publish'),
('DK-0032', 'KD-0010', 'QMS3-SUP07-001', 'SOSIALISASI PENILAIAN DAN EVALUASI PENILAIAN BUDAYA PERUSAHAAN', 'QMS3-SUP07-001_SOSIALISASI_PENILAIAN_DAN_EVALUASI_PENILAIAN_BUDAYA_PERUSAHAAN.pdf', '2017-04-18', 'Publish'),
('DK-0033', 'KD-0010', 'QMS3-SUP04-005', 'Prosedur Mutasi Karyawan', 'Prosedur_Mutasi_Karyawan.pdf', '2017-04-12', 'Publish'),
('DK-0034', 'KD-0010', 'QMS3-EVL07-001', 'Tinjauan Manajemen', 'TINJAUAN_MANAJEMEN.pdf', '2017-06-08', 'Publish'),
('DK-0035', 'KD-0010', 'QMS3-COR02-001', 'Konteks Organisasi', 'QRM3-COR02-001_Konteks_Organisasi.pdf', '2017-05-10', 'Publish'),
('DK-0037', 'KD-0014', 'SKN.012/2017', 'Pedoman Manajemen Risiko', 'SKN_012_2017_Pedoman_Manajemen_Risiko.pdf', '2017-05-31', 'Publish'),
('DK-0038', 'KD-0011', '047/PS.22/020801/2017', 'Laporan Manajemen Risiko Jan-Apr 2017', 'LapMan_ManRisk_Jan-Apr_2017.pdf', '2017-05-16', 'Publish'),
('DK-0039', 'KD-0013', 'QMS3-PLA02-006', 'Prosedur Kegiatan Manajemen Risiko', 'QMS3-PLA02-006_Prosedur_Kegiatan_Manajemen_Risiko.pdf', '2017-03-31', 'Publish'),
('DK-0040', 'KD-0010', 'QMS3-OPS03-001', 'Penanganan dan Pemulihan Keadaan Darurat di Lingkungan Gedung Perkantoran', 'QMS3-OPS03-001_PENANGANAN_DAN_PEMULIHAN_KEADAAN_DARURAT_DI_LINGKUNGAN_GEDUNG_PERKANTORAN.pdf', '2018-07-10', 'Publish'),
('DK-0041', 'KD-0010', 'QMS3-SUP06-002', 'Penanganan Pencemaran Udara', 'Penanganan_Pencemaran_Udara1.pdf', '2017-07-06', 'Publish'),
('DK-0042', 'KD-0011', '047/PS.22/020801/2017', 'Lampiran 2 LapMan ManRisk Jan-Apr 2017', 'Lampiran_2_LapMan_ManRisk_Jan-Apr_2017.pdf', '2017-05-16', 'Publish'),
('DK-0043', 'KD-0010', 'QMS3-PLA02-003', 'Penanganan Material B3 dan Limbah B3.', 'Penanganan_Material_B3_dan_Limbah_B32.pdf', '2018-07-16', 'Publish'),
('DK-0044', 'KD-0010', 'QMS3-PLA02-004', 'Identifikasi bahaya dan pengendalian risiko K3', 'QMS3-PLA02-004_IDENTIFIKASI_BAHAYA_DAN_PENGENDALIAN_RISIKO_K31.pdf', '2018-12-27', 'Publish'),
('DK-0045', 'KD-0011', '047/PS.22/020801/2017', 'Lampiran 1 LapMan ManRisk Jan-Apr 2017', 'Lampiran_1_LapMan_ManRisk_Jan-Apr_20172.pdf', '2017-05-16', 'Publish'),
('DK-0046', 'KD-0010', 'QMS3-PLA02-005', 'Aspek Lingkungan Penting dan Analisa Risiko dan Peluang', 'QMS3-PLA02-005_ASPEK_LINGKUNGAN_PENTING_DAN_ANALISA_RISIKO_DAN_PELUANG1.pdf', '2018-07-17', 'Publish'),
('DK-0047', 'KD-0011', '113/PS.22/020801/2017', 'LapMan ManRisk TW III 2017', 'LapMan_ManRisk_TW_III_2017.pdf', '2017-10-10', 'Publish'),
('DK-0048', 'KD-0017', '2017', 'Laporan Umpan Balik KPKU (FBR) Th 2017', 'FBR_INTI_20171.pdf', '2018-12-27', 'Publish'),
('DK-0049', 'KD-0016', '2017', 'KPKU 2017 KAT 1', 'KPKU_2017_-_KAT_1.pdf', '2018-12-27', 'Publish'),
('DK-0050', 'KD-0016', '2017', 'KPKU 2017 KAT 2', 'KPKU_2017_-_KAT_2.pdf', '2018-12-27', 'Publish'),
('DK-0051', 'KD-0016', '2017', 'KPKU 2017 KAT 3', 'KPKU_2017_-_KAT_3.pdf', '2018-12-27', 'Publish'),
('DK-0052', 'KD-0011', '005/PS.22/020801/2018', 'LapMan ManRisk TW IV 2017', 'LapMan_ManRisk_TW_IV_20172.pdf', '2018-01-23', 'Publish'),
('DK-0053', 'KD-0016', '2017', 'KPKU 2017 KAT 4', 'KPKU_2017_-_KAT_42.pdf', '2018-12-27', 'Publish'),
('DK-0054', 'KD-0016', '2017', 'KPKU 2017 KAT 5', 'KPKU_2017_-_KAT_5.pdf', '2018-12-27', 'Publish'),
('DK-0055', 'KD-0006', '2017', 'KPKU 2017 KAT 6', 'KPKU_2017_-_KAT_6.pdf', '2018-12-27', 'Publish'),
('DK-0056', 'KD-0011', '2017', 'Laporan CSI 2017', 'laporan_pengesahan_CSI_2017.pdf', '2017-12-17', 'Publish'),
('DK-0057', 'KD-0010', 'QMS3-SUP04-010', 'Rekrutasi dan Orientasi Karyawan Baru', 'QMS3-SUP04-010_REKRUTASI_DAN_ORIENTASI_KARYAWAN_BARU.pdf', '2017-04-12', 'Publish'),
('DK-0058', 'KD-0011', '006/PS.00/020801/2018', 'Laporan Maturity Level ManRisk Th 2017', 'Laporan_Maturity_Level_ManRisk_Th_20173.pdf', '2018-01-23', 'Publish'),
('DK-0059', 'KD-0011', '104/PS/22/020800/2018', 'Laporan ManRisk TW 1 2018', 'Laporan_ManRisk_TW_1_2018.pdf', '2018-04-17', 'Publish'),
('DK-0060', 'KD-0006', '-', 'Laporan Audit Internal dan Evaluasi Ketaatan SMT Semester I 2018', 'Laporan_Audit_Internal_dan_Evaluasi_Ketaatan_SMT_Semester_I_2018.pdf', '2018-04-18', 'Publish'),
('DK-0061', 'KD-0006', '-', 'Laporan Tinjauan Manajemen SMT 2018', 'Laporan_Tinjauan_Manajemen_SMT_2018.pdf', '2018-04-20', 'Publish'),
('DK-0062', 'KD-0007', '2017', 'SKD No. 51 2017 Tim Audit dan Evaluasi Ketaatan 2017', 'SKD_No_51_2017_Tim_Audit_dan_Evaluasi_Ketaatan_20171.pdf', '2017-03-28', 'Publish'),
('DK-0063', 'KD-0007', '2017', 'SKD 020 Penetapan WR MG 2017', 'SKD_020_PENETAPAN_MR_WG_2017.pdf', '2017-02-10', 'Publish'),
('DK-0064', 'KD-0007', '2017', 'SKD Tim Penyusun KPKU', 'SKD_TIM_PENYUSUN_KPKU1.pdf', '2018-09-05', 'Publish'),
('DK-0065', 'KD-0012', '-', 'Laporan Manrisk TW 2 2018', 'Laporan_ManRisk_TW_2_2018.pdf', '2018-12-27', 'Publish'),
('DK-0066', 'KD-0010', 'QMS3-SUP03-043', 'Permintaan dan Pemenuhan AOD', 'QMS3-SUP03-043_Permintaan_dan_Pemenuhan_AOD.pdf', '2017-04-06', 'Publish'),
('DK-0067', 'KD-0010', 'QMS-SUP12-004', 'PELATIHAN P3K', 'PELATIHAN_P3K_(QMS3-SUP12-004)2.pdf', '2018-05-07', 'Publish'),
('DK-0068', 'KD-0010', 'QMS3-OPS20-008', 'PENGELOLAAN MATERIAL DAN PERPINDAHANNYA', 'PENGELOLAAN_MATERIAL_DAN_PERPINDAHANNYA_(QMS3-OPS20-008).pdf', '2018-05-08', 'Publish'),
('DK-0069', 'KD-0010', 'QMS3-EVL02-004', 'PENYELIDIKAN KECELAKAAN DAN PENYAKIT AKIBAT KERJA', 'PENYELIDIKAN_KECELAKAAN_DAN_PENYAKIT_AKIBAT_KERJA_(QMS3-EVL02-004).pdf', '2018-05-08', 'Publish'),
('DK-0070', 'KD-0007', '-', 'SKD Tim Kesiagaan Tanggap Darurat', 'SKD_TIM_KESIAGAAN_TANGGAP_DARURAT1.pdf', '2018-09-28', 'Publish'),
('DK-0071', 'KD-0007', '-', 'SKD Tim P2K3', 'SKD_TIM_P2K33.pdf', '2018-09-28', 'Publish'),
('DK-0072', 'KD-0010', 'QMS3-SUP13-002', 'PROSEDUR KONSULTASI K3', 'PROSEDUR_KONSULTASI_K3_(QMS3-SUP13-002)2.pdf', '2018-05-08', 'Publish'),
('DK-0073', 'KD-0016', '-', 'KPKU 2017 Kategori 7.1 7.2', 'KPKU_2017_-_Kategori_7_1_dan_7_22.pdf', '2018-12-27', 'Publish'),
('DK-0074', 'KD-0010', 'QMS3-IPR03-003', 'PROSEDUR PELAPORAN INSIDEN KECELAKAAN KERJA', 'PROSEDUR_PELAPORAN_INSIDEN_KECELAKAAN_KERJA_(QMS3-IPR03-003)1.pdf', '2018-05-08', 'Publish'),
('DK-0075', 'KD-0010', 'QMS3-PLA02-010', 'PROSEDUR PENANGGULANGAN KEBAKARAN', 'PROSEDUR_PENANGGULANGAN_KEBAKARAN_(QMS3-PLA02-010).pdf', '2018-05-08', 'Publish'),
('DK-0076', 'KD-0016', '-', 'KPKU 2017 Kategori 7.3', 'KPKU_2017_-_Kategori_7_31.pdf', '2018-12-27', 'Publish'),
('DK-0077', 'KD-0016', '-', 'KPKU 2017 Kategori 7.4', 'KPKU_2017_-_Kategori_7_42.pdf', '2018-12-27', 'Publish'),
('DK-0078', 'KD-0016', '-', 'KPKU 2017 Kategori 7.5', 'KPKU_2017_-_Kategori_7_5.pdf', '2018-12-27', 'Publish'),
('DK-0079', 'KD-0010', 'QMS4-SUP05-010-017', 'Pemeliharaan & Perawatan Sistem Proteksi Kebakaran Bangunan Gedung.pdf', 'QMS4-SUP05-010-017_Pemeliharaan_Perawatan_Sistem_Proteksi_Kebakaran_Bangunan_Gedung1.pdf', '2017-10-25', 'Publish'),
('DK-0080', 'KD-0013', 'QMS4-SUP05-010-017', 'Prosedur Pengukuran Maturity Level ManRisk', 'Prosedur_Pengukuran_Maturity_Level_ManRisk1.pdf', '2018-10-23', 'Publish'),
('DK-0081', 'KD-0012', '-', 'Laporan Manrisk TW III 2018', 'Laporan_ManRisk_TW_III_2018.pdf', '2018-10-18', 'Publish'),
('DK-0082', 'KD-0007', 'QMS5-OPS5-001-01', 'Daftar Perundangan Tentang K3', 'Daftar_Perundangan_Tentang_K3_yang_diikuti_PT_INTI1.pdf', '2018-10-24', 'Publish'),
('DK-0083', 'KD-0007', 'QMS5-OPS5-001-01', 'Daftar Perundangan Tentang Lingkungan', 'Daftar_Perundangan_tentang_Lingkungan_yang_diikuti_oleh_PT_INTI.pdf', '2018-10-24', 'Publish'),
('DK-0084', 'KD-0010', 'QMS3-OPS02-010', 'Prosedur Kerja pada Ketinggian', 'Prosedur_bekerja_pada_ketinggian.pdf', '2018-10-12', 'Publish'),
('DK-0085', 'KD-0006', 'Laporan Audit Internal SMT Semester II 2018', 'Laporan Audit Internal SMT Semester II 2018', 'Laporan_Audit_Internal_dan_Evaluasi_Ketaatan_Sistem_Manajemen_Terintegrsi_(2).pdf', '2018-10-29', 'Publish'),
('DK-0086', 'KD-0010', 'QMS3-SUP08-002', 'Prosedur Kerja Penyusunan SKI', 'QMS3-SUP08-002_Prosedur_Kerja_Penyusunan_SKI.pdf', '2017-04-21', 'Publish'),
('DK-0087', 'KD-0010', 'QMS3-SUP10-002', 'Analisis Kebutuhan, Realisasi & Evaluasi Pelatihan', 'QMS3-SUP10-002_Analisis_Kebutuhan,_Realisasi_Evaluasi_Pelatihan.pdf', '2017-05-05', 'Publish'),
('DK-0088', 'KD-0007', 'KN.012/2018', 'PEDOMAN MANAJEMEN RISIKO DI LINGKUNGAN PERUSAHAAN', 'KN_012_20182.pdf', '2018-07-11', 'Publish'),
('DK-0089', 'KD-0010', 'QMS4-SUP04-014-001', 'PENILAIAN JOB TENDER', 'QMS4-SUP04-014-001-PENILAIAN_JOB_TENDER.pdf', '2018-12-06', 'Publish'),
('DK-0090', 'KD-0007', 'KD.179/KP.10/020800/2018', 'PENETAPAN ORGANISASI MR DAN WG BIDANG MUTU, K3 DAN LINGKUNGAN UNTUK PENERAPAN SISTEM MANAJEMEN MUTU, K3 DAN LINGKUNGAN', 'PENETAPAN_ORGANISASI_MR_DAN_WG_BIDANG_MUTU,_K3_DAN_LINGKUNGAN_UNTUK_PENERAPAN_SISTEM_MANAJEMEN_MUTU,_K3_DAN_LINGKUNGAN.pdf', '2018-11-04', 'Publish'),
('DK-0091', 'KD-0010', 'QMS3-OPS18-002 ', 'PEMBUATAN DOKUMEN SERVICE ACCEPTANCE (SA) (1).', 'QMS3-OPS18-002_PEMBUATAN_DOKUMEN_SERVICE_ACCEPTANCE_(SA)_(1)1.pdf', '2017-06-02', 'Publish'),
('DK-0092', 'KD-0010', 'QMS3-OPS18-001', 'Penanganan Keluhan Mitra', 'QMS3-OPS18-001_PENANGANAN_KELUHAN_MITRA1.pdf', '2017-02-06', 'Publish'),
('DK-0093', 'KD-0010', 'QMS3-SUP17-001', 'PENGENDALIAN DOKUMEN', '1_Pengendalian_DokumenQMS3-SUP17-001.pdf', '2019-01-15', 'Publish'),
('DK-0094', 'KD-0010', 'QMS3-SUP17-002', 'PENGENDALIAN REKAMAN', '2__Pengendalian_Rekaman2.pdf', '2019-01-15', 'Publish'),
('DK-0095', 'KD-0010', 'QMS3-EVL06-001', 'AUDIT INTERNAL DAN EVALUASI KETAATAN', '4__Audit_Internal_dan_Evaluasi_Ketaatan1.pdf', '2019-01-15', 'Publish'),
('DK-0096', 'KD-0020', 'QMS4-OPS16-005-01', 'PRAKUALIFIKASI CALON MITRA/VENDOR', 'QMS4-OPS16-005-001_PRAKUALIFIKASI_CALON_MITRA_VENDOR.pdf', '2019-01-15', 'Publish'),
('DK-0097', 'KD-0020', 'QMS1-LDR05-001', 'KEBIJAKAN SMT', 'Kebijakan_SMT_PT_INTI.pdf', '2019-01-15', 'Publish'),
('DK-0099', 'KD-0020', 'QMS3-EVL05-002', 'PROSES ANALISA DATA STATISTIK', 'QMS3-EVL05-002_PR__PROSES_ANALISA_DATA_STATISTIK.pdf', '2019-01-15', 'Publish'),
('DK-0100', 'KD-0020', 'QMS3-OPS02-007', 'PROSES OUTBOUND', 'QMS3-OPS02-007_PR__PROSES_OUTBOUND.pdf', '2019-01-15', 'Publish'),
('DK-0101', 'KD-0020', 'QMS3-OPS02-006', 'PROSES INBOUND', 'QMS3-OPS02-006_PR__PROSES_INBOUND.pdf', '2019-01-15', 'Publish'),
('DK-0102', 'KD-0020', 'QMS3-OPS19-013', 'MIGRASI LAYANAN EKSISTING FTTH', 'QMS3-OPS19-013_PR_MIGRASI_LAYANAN_EKSISTING_FTTH.pdf', '2019-01-15', 'Publish'),
('DK-0103', 'KD-0020', 'QMS30OPS19-017', 'PEKERJAAN KABEL TANAH TANAM LANGSUNG', 'QMS3-OPS19-017_PEKERJAAN_KABEL_TANAH_TANAM_LANGSUNG.pdf', '2019-01-15', 'Publish'),
('DK-0104', 'KD-0020', 'QMS3-OPS19-019', 'PEMASANGAN TIANG', 'QMS3-OPS19-019_PEMASANGAN_TIANG.pdf', '2019-01-15', 'Draft'),
('DK-0105', 'KD-0020', 'QMS3-OPS19-022', 'INSTALASI SALURAN PENANGGAL (DROP WIRE)', 'QMS3-OPS19-022_INSTALASI_SALURAN_PENANGGAL_(DROP_WIRE).pdf', '2019-01-15', 'Publish'),
('DK-0106', 'KD-0010', 'QMS3-OPS19-024', 'PEMASANGAN RUMAH KABEL', 'QMS3-OPS19-024_PEMASANGAN_RUMAH_KABEL.pdf', '2019-01-15', 'Publish'),
('DK-0107', 'KD-0010', 'QMS3-OPS19-028', 'PEKERJAAN KABEL OPTIK', 'QMS3-OPS19-028_PEKERJAAN_KABEL_OPTIK.pdf', '2019-01-15', 'Publish'),
('DK-0108', 'KD-0010', 'QMS3-OPS19-030', 'INSTALASI KABEL PELANGGAN (IKP)', 'QMS3-OPS19-030_INSTALASI_KABEL_PELANGGAN_(IKP).pdf', '2019-01-15', 'Publish'),
('DK-0109', 'KD-0010', 'QMS3-OPS19-032', 'INSTALASI PERANGKAT OPTIK', 'QMS3-OPS19-032_INSTALASI_PERANGKAT_OPTIK.pdf', '2019-01-15', 'Publish'),
('DK-0110', 'KD-0010', 'QMS3-OPS19-034', 'CUT OVER', 'QMS3-OPS19-034_CUT_OVER.pdf', '2019-01-15', 'Publish'),
('DK-0111', 'KD-0010', 'QMS3-OPS19-036', 'PENARIKAN KABEL FO DISTRIBUSI FTTH', 'QMS3-OPS19-036_PENARIKAN_KABEL_FO_DISTRIBUSI_FTTH.pdf', '2019-01-15', 'Publish'),
('DK-0112', 'KD-0020', 'QMS3-OPS20-003', 'CENTRAL WAREHOUSE', 'QMS3-OPS20-003_PR__CENTRAL_WAREHOUSE.pdf', '2019-01-15', 'Publish'),
('DK-0113', 'KD-0010', 'QMS3-OPS20-005', 'PENGUKURAN KABEL OPTIK', 'QMS3-OPS20-005_PENGUKURAN_KABEL_OPTIK.pdf', '2019-01-15', 'Publish'),
('DK-0114', 'KD-0020', 'QMS3-SUP04-001', 'SUPERVISOR', 'QMS3-SUP01-001_PR__SUPERVISOR.pdf', '2019-01-15', 'Publish'),
('DK-0115', 'KD-0020', 'QMS3-SUP04-002', 'SATPAM', 'QMS3-SUP04-002_PR__SATPAM.pdf', '2019-01-15', 'Publish'),
('DK-0116', 'KD-0010', 'QMS3-OPS19-035', 'PEMASANGAN FEEDER', 'QMS3-OPS19-035_PEMASANGAN_FEEDER.pdf', '2019-01-15', 'Publish'),
('DK-0117', 'KD-0010', 'QMS3-OPS19-038', 'PEMASANGAN GROUNDING PERANGKAT', 'QMS3-OPS19-038_PEMASANGAN_GROUNDING_PERANGKAT.pdf', '2019-01-15', 'Publish'),
('DK-0118', 'KD-0020', 'QMS3-OPS20-004', 'FIELD STORAGE LOCATION (FSL)', 'QMS3-OPS20-004_PR__FIELD_STORAGELOGATION.pdf', '2019-01-15', 'Publish'),
('DK-0119', 'KD-0010', 'QMS4-OPS19-015-02', 'PEMBUATAN MANHOLE DAN HANDHOLE', 'QMS4-OPS19-015-02_PEMBUATAN_MANHOLE_DAN_HANDHOLE_(1).pdf', '2019-01-15', 'Publish'),
('DK-0120', 'KD-0010', 'QMS4-OPS19-016-01', 'PEMBUATAN RUTE DUCT', 'QMS4-OPS19-016-01_PEMBUATAN_RUTE_DUCT.pdf', '2019-01-15', 'Publish'),
('DK-0121', 'KD-0010', 'QMS4-OPS19-016-03', 'PEMBUATAN ALUR KABEL DUCT', 'QMS4-OPS19-016-03_PEMBUATAN_ALUR_KABEL_DUCT.pdf', '2019-01-15', 'Publish'),
('DK-0122', 'KD-0010', 'QMS4-OPS19-016-05', 'PERBAIKAN RUTE DUCT', 'QMS4-OPS19-016-05_PERBAIKAN_RUTE_DUCT.pdf', '2019-01-15', 'Publish'),
('DK-0123', 'KD-0010', 'QMS4-OPS19-017-02', 'PEMBUATAN LINTASAN RUTE KABEL TANAM TANAH MELINTASI JALAN RAYA', 'QMS4-OPS19-017-02_PEMBUATAN_LINTAS_RUTE_KABEL_TANAM_TANAH_MELINTAS_JALAN_RAYA.pdf', '2019-01-15', 'Publish'),
('DK-0124', 'KD-0010', 'QMS4-OPS19-017-04', 'PEMBUATAN LINTASAN RUTE KABEL TANAH PADA SUNGAI', 'QMS4-OPS19-017-04_PEMBUATAN_LINTAS_RUTE_KABEL_TANAH_PADA_SUNGAI.pdf', '2019-01-15', 'Publish'),
('DK-0125', 'KD-0010', 'QMS4-OPS19-017-06', 'PENYAMBUNGAN PANAS KERUT', 'QMS4-OPS19-017-06_PENYAMBUNGAN_PANAS_KERUT.pdf', '2019-01-15', 'Publish'),
('DK-0126', 'KD-0010', 'QMS4-OPS19-020-01', 'PENGUJIAN KONTINUITAS KABEL', 'QMS4-OPS19-020-01_PENGUJIAN_KONTINUITAS_KABEL.pdf', '2019-01-15', 'Publish'),
('DK-0127', 'KD-0010', 'QMS4-OPS19-020-03', 'PENGUJIAN TAHANAN SCREEN', 'QMS4-OPS19-020-03_PENGUJIAN_TAHANAN_SCREEM.pdf', '2019-01-15', 'Publish'),
('DK-0128', 'KD-0010', 'QMS4-OPS19-020-04', 'PENGUJIAN TAHANAN ISOLASI', 'QMS4-OPS19-020-04_PENGUJIAN_TAHANAN_ISOLASI.pdf', '2019-01-15', 'Publish'),
('DK-0129', 'KD-0010', 'QMS4-OPS19-020-06', 'PENGUJIAN CAKAP SILANG', 'QMS4-OPS19-020-06_PENGUJIAN_CAKAP_SILANG.pdf', '2019-01-15', 'Publish'),
('DK-0130', 'KD-0010', 'QMS4-OPS19-021-01', 'OPS PENAMBATAN KABEL UDARA', 'QMS4-OPS19-021-01_OSP_PENAMBATAN_KABEL_UDARA.pdf', '2019-01-15', 'Publish'),
('DK-0131', 'KD-0010', 'QMS4-OPS19-015-03', 'MODIFIKASI MANHOLE', 'QMS4-OPS19-015-03-MODIFIKASI_MANHOLE1.pdf', '2019-01-15', 'Publish'),
('DK-0132', 'KD-0020', 'KN. 015/2017', 'PEDOMAN SISTEM MANAJEMEN TERINTEGRASI (MUTU, KESELAMATAN DAN KESEHATAN KERJA SERTA LINGKUNGAN)', 'PEDOMAN_SMT_Mutu,Keselamatan_dan_Kesehatan_Kerja_serta_Lingkungan_(2).pdf', '2019-01-15', 'Publish'),
('DK-0133', 'KD-0010', 'QMS3-OPS19-026', 'PERBAIKAN KABEL BAWAH TANAH, UDARA DAN DUCT TEMBAGA', 'QMS3-_OPS19-026_PERBAIKAN_KABEL_BAWAH_TANAH,_UDARA_DAN_DUCT_TEMBAGA1.pdf', '2019-01-15', 'Publish'),
('DK-0134', 'KD-0020', 'QMS3-OPS18-004', 'PROSES CALL CENTER', 'QMS3-OPS18-004_PROSES_CALL_CENTER1.pdf', '2019-01-15', 'Publish'),
('DK-0135', 'KD-0020', 'QMS3-OPS19-012', 'IMPLEMENTASI IKR', 'QMS3-OPS19-012_PR_IMPLEMENTASI_IKR1.pdf', '2019-01-15', 'Publish'),
('DK-0136', 'KD-0020', 'QMS3-OPS19-012-01', 'INTRODUCE PELAKSANAAN IKR MIGRASI', 'QMS3-OPS19-012-01_PK_INTRODUCE_PELAKSANAAN_MIGRASI2.pdf', '2019-01-15', 'Publish'),
('DK-0137', 'KD-0010', 'QMS3-OPS19-016', 'PEKERJAAN KABEL DUCT', 'QMS3-OPS19-016_PEKERJAAN_KABEL_DUCT1.pdf', '2019-01-15', 'Publish'),
('DK-0138', 'KD-0010', 'QMS3-OPS19-018', 'PERBAIKAN BEKAS GALIAN', 'QMS3-OPS19-018_PERBAIKAN_BEKAS_GALIAN1.pdf', '2019-01-15', 'Publish'),
('DK-0139', 'KD-0010', 'QMS3-OPS19-023', 'TERMINASI RANGKA PEMBAGI UTAMA (RPU)', 'QMS3-OPS19-023_TERMINASI_RANGKA_PEMBAGI_UTAMA_(RPU)1.pdf', '2019-01-15', 'Publish'),
('DK-0140', 'KD-0010', 'QMS3-OPS19-025', 'PEMASANGAN KOTAK PEMBAGI', 'QMS3-OPS19-025_PEMASANGAN_KOTAK_PEMBAGI1.pdf', '2019-01-15', 'Publish'),
('DK-0141', 'KD-0010', 'QMS3-OPS19-031', 'SURVEY LOKASI', 'QMS3-OPS19-031_SURVEY_LOKASI1.pdf', '2019-01-15', 'Publish'),
('DK-0142', 'KD-0010', 'QMS3-OPS19-033', 'INSTALASI PERANGKAT OUTDOOR', 'QMS3-OPS19-033_INSTALASI_PERANGKAT_INDOOR1.pdf', '2019-01-15', 'Publish'),
('DK-0143', 'KD-0010', 'QMS4-OPS19-021-03', 'PENYAMBUNGAN KABEL UDARA', 'QMS4-OPS19-021-03_PENYAMBUNGAN_KABEL_UDARA.pdf', '2019-01-16', 'Draft'),
('DK-0144', 'KD-0010', 'QMS4-OPS19-022-01', 'PENARIKAN SALURAN PENANGGAL', 'QMS4-OPS19-022-01_PENARIKAN_SALURAN_PENANGGAL.pdf', '2019-01-16', 'Publish'),
('DK-0145', 'KD-0010', 'QMS4-OPS19-024-02', 'PEMBUATAN PONDASI RUMAH KABEL (RK)', 'QMS4-OPS19-024-02_PEMBUATAN_PONDASI_RUMAH_KABEL.pdf', '2019-01-16', 'Publish'),
('DK-0146', 'KD-0010', 'QMS4-OPS19-024-04', 'TERMINASI RUMAH KABEL', 'QMS4-OPS19-024-04_TERMINASI_RUMAH_KABEL.pdf', '2019-01-16', 'Publish'),
('DK-0147', 'KD-0010', 'QMS4-OPS19-25-01', 'TERMINASI KOTAK PEMBAGI', 'QMS4-OPS19-025-01_TERMINASI_KOTAK_PEMBAGI.pdf', '2019-01-16', 'Publish'),
('DK-0148', 'KD-0010', 'QMS4-OPS19-33-02', 'PONDASI ODC FEEDER & MSAN', 'QMS4-OPS19-033-02_PONDASI_ODC_FEEDER___MSAN.pdf', '2019-01-16', 'Publish'),
('DK-0149', 'KD-0010', 'QMS4-OPS19-33-04', 'INSTALASI MSAN', 'QMS4-OPS19-033-04_INSTALASI_MSAN.pdf', '2019-01-16', 'Publish'),
('DK-0150', 'KD-0020', 'QMS3-OPS22-005', 'PENGENDALIAN MATERIAL IKR DAN MIGRASI', 'QMS3-OPS22-005_PR_PENGENDALIAN_MATRIAL_IKR_DAN_MIGRASI3.pdf', '2019-01-16', 'Publish'),
('DK-0151', 'KD-0020', 'QMS3-SUP03-038', 'ADMINISTRASI DAN KEUANGAN', 'QMS3-SUP03-038_PR__ADMINISTRASI_DAN_KEUANGAN1.pdf', '2019-01-16', 'Publish'),
('DK-0152', 'KD-0010', 'QMS4-OPS19-015-01', 'PENENTUAN LETAK MANHOLE DAN HANDHOLE', 'QMS4-OPS19-015-01_PENENTUAN_LETAK_MANHOLE_DAN_HANDHOLE1.pdf', '2019-01-16', 'Publish'),
('DK-0153', 'KD-0010', 'QMS4-OPS19-34-01', 'MIGRASI MSAN', 'QMS4-OPS19-034-01_MIGRASI_MSAN2.pdf', '2019-01-16', 'Publish'),
('DK-0154', 'KD-0010', 'QMS40OPS19-035-02', 'PENARIKAN KABEL SUBDUCT', 'QMS4-OPS19-035-02_PENARIKAN_KABEL_SUBDUCT.pdf', '2019-01-16', 'Publish'),
('DK-0155', 'KD-0010', 'QMS4-OPS19-016-02', 'RODDING DUCT', 'QMS4-OPS19-016-02_RODDING_DUCT1.pdf', '2019-01-16', 'Publish'),
('DK-0156', 'KD-0010', 'QMS4-OPS19-016-04', 'PENYAMBUNGAN KABEL DUCT UC DAN FCS', 'QMS4-OPS19-016-04_PENYAMBUNGAN_KABEL_DUCT_UC_DAN_FCS.pdf', '2019-01-16', 'Publish'),
('DK-0157', 'KD-0010', 'QMS4-OPS19-017-01', 'GALIAN ALUR KABEL TANAH TANAM LANGSUNG', 'QMS4-OPS19-017-01_GALIAN_ALUR_KABEL_TANAH_TANAM_LANGSUNG.pdf', '2019-01-16', 'Publish'),
('DK-0158', 'KD-0010', 'QMS4-OPS19-017-03', 'PENARIKAN KABEL TANAH MELINTASI PARIT SOLOKAN', 'QMS4-OPS19-017-03_PENARIKAN_KABEL_TANAH_MELINTAS_PARIT_SOLOKAN.pdf', '2019-01-16', 'Publish'),
('DK-0159', 'KD-0010', 'QMS4-OPS19-036-01', 'PEMASANGAN TIANG & AKSESORIS TIANG FTTH', 'QMS4-OPS19-036-01_PEMASANGAN_TIANG___AKSESORIS_TIANG_FTTH.pdf', '2019-01-16', 'Publish'),
('DK-0160', 'KD-0010', 'QMS4-OPS19-017-05', 'PENYAMBUNGAN KABEL TANAH TANAM LANGSUNG', 'QMS4-OPS19-017-05_PENYAMBUNGAN_KABEL_TANAH_TANAM_LANGSUNG1.pdf', '2019-01-16', 'Publish'),
('DK-0161', 'KD-0010', 'QMS4-OPS19-036-03', 'INSTALASI SALURAN PENANGGAL (DROP WIRE)', 'QMS4-OPS19-036-03_INSTALASI_SALURAN_PENANGGAL_(DROP_WIRE).pdf', '2019-01-16', 'Publish'),
('DK-0162', 'KD-0010', 'QMS4-OPS19-036-05', 'TESTCOMM & UJI TERIMA FTTH', 'QMS4-OPS19-036-05_TESTCOMM___UJI_TERIMA_FTTH.pdf', '2019-01-16', 'Publish'),
('DK-0163', 'KD-0010', 'QMS4-OPS20-005-02', 'PENGUKURAN KABEL OPTIK MENGGUNAKAN PM', 'QMS4-OPS20-005-02_PENGUKURAN_KABEL_OPTIK_MENGGUNAKAN_PM.pdf', '2019-01-16', 'Publish'),
('DK-0164', 'KD-0020', 'QMS3-OPS20-001', 'MONITORING DAN PENYELESAIAN PROYEK', '2__Monitoring_Penyelesaian_Proyek_QMS3-OPS20-001.pdf', '2019-01-16', 'Publish'),
('DK-0165', 'KD-0010', 'QMS4-OPS19-019-01', 'PEMASANGAN TEMBERANG LABRANG', 'QMS4-OPS19-019-01_PEMASANGAN_TEMBERANG_LABRANG2.pdf', '2019-01-16', 'Publish'),
('DK-0166', 'KD-0010', 'QMS4-OPS19-020-02', 'PENGUJIAN TAHANAN LOOP', 'QMS4-OPS19-020-02_PENGUJIAN_TAHANAN_LOOP1.pdf', '2019-01-16', 'Publish'),
('DK-0167', 'KD-0020', 'QMS3-OPS19-001', 'IMPLEMENTASI PROYEK SHMS', '4__Implementasi_Proyek_SHMS_QMS3-OPS19-0011.pdf', '2019-01-16', 'Publish'),
('DK-0168', 'KD-0020', 'QMS4-OPS19-001-02', 'INSTALASI PERANGKAT SHMS DI JEMBATAN H-BEAM', '6__Instalasi_Perangkat_SHMS_di_Jembatan_H-Beam_QMS4-OPS19-001-02.pdf', '2019-01-16', 'Publish'),
('DK-0169', 'KD-0020', 'QMS4-OPS19-001-04', 'TEST & CIMMISIONING PERANGKAT SHMS', '8__Test_Commisioning_Perangkat_SHMS_QMS4-OPS19-001-04.pdf', '2019-01-16', 'Publish'),
('DK-0170', 'KD-0010', 'QMS4-OPS19-020-07', 'PENGUJIAN TAHANAN PERTANAHAN', 'QMS4-OPS19-020-07_PENGUJIAN_TAHANAN_PERTANAHAN.pdf', '2019-01-16', 'Publish'),
('DK-0171', 'KD-0020', 'QMS4-OPS19-002-01', 'INSTALASI SENSOR SINDILA', '10__Instalasi_Sensor_Sindila_QMS4-OPS19-002-01.pdf', '2019-01-16', 'Publish'),
('DK-0172', 'KD-0020', 'QMS4-OPS19-002-03', 'Instalasi Tiang Sindila', '12__Instalasi_Tiang_Sindila_QMS4-OPS19-002-03.pdf', '2019-01-16', 'Publish'),
('DK-0173', 'KD-0020', 'QMS4-OPS19-002-05', 'Test & Commisioning Sindila', '14__Test_Commisioning_Sindila_QMS4-OPS19-002-05.pdf', '2019-01-16', 'Publish'),
('DK-0174', 'KD-0020', 'QMS4-OPS19-011-01', 'Load Software Security i-PERISALAH', '16__Load_Software_Security_Perisalah_QMS4-OPS19-011-01.pdf', '2019-01-16', 'Publish'),
('DK-0175', 'KD-0010', 'QMS4-OPS19-021-04', 'PENYAMBUNGAN KABEL TEMBAGA MENGGUNAKAN SELONGSONG MEKANIK (UC)', 'QMS4-OPS19-021-04_PENYAMBUNGAN_KABEL_TEMBAGA_MENGGUNAKAN_SELONGSONG_MEKANIK_(UC)1.pdf', '2019-01-16', 'Publish'),
('DK-0176', 'KD-0010', 'QMS4-OPS19-021-02', 'PENYEBRANGAN KABEL UDARA', 'QMS4-OPS19-021-02_PENYEBERANGAN_KABEL_UDARA1.pdf', '2019-01-16', 'Publish'),
('DK-0177', 'KD-0010', 'QMS4-OPS19-024-01', 'PENEMPATAN RUMAH KABEL (RK)', 'QMS4-OPS19-024-01_PENEMPATAN_RUMAH_KABEL(RK).pdf', '2019-01-16', 'Publish'),
('DK-0178', 'KD-0010', 'QMS4-OPS19-024-04', 'TERMINASI RUMAH KABEL', 'QMS4-OPS19-024-04_TERMINASI_RUMAH_KABEL1.pdf', '2019-01-16', 'Publish'),
('DK-0179', 'KD-0010', 'QMS4-OPS19-33-01', 'SITAC PERANGKAT ODC & MSAN', 'QMS4-OPS19-033-01_SITACT_PERANGKAT_ODC__MSAN.pdf', '2019-01-16', 'Publish'),
('DK-0180', 'KD-0010', 'QMS4-OPS19-33-03', 'INSTALASI ODC', 'QMS4-OPS19-033-03_INSTALASI_ODC.pdf', '2019-01-16', 'Publish'),
('DK-0181', 'KD-0010', 'QMS4-OPS19-33-05', 'TESTCOMM & UJI TERIMA FTTC/MSAN', 'QMS4-OPS19-033-05_TESTCOMM___UJI_TERIMA_FTTC_MSAN.pdf', '2019-01-16', 'Publish'),
('DK-0182', 'KD-0010', 'QMS4-OPS19-014-04', 'Instalasi Photovoltaic (PV)', 'QMS4-OPS19-014-04_-_PK_Instalasi_Photovoltaic_(PV)_ok1.pdf', '2019-01-16', 'Publish'),
('DK-0183', 'KD-0010', 'QMS4-OPS19-014-06', 'Instalasi Grounding', 'QMS4-OPS19-014-06-_PK_Instalasi_Grounding_ok.pdf', '2019-01-16', 'Publish'),
('DK-0184', 'KD-0010', 'QMS4-OPS19-014-01', 'Instalasi Baterai Indoor', 'QMS3-OPS19-014_-_PR_Implementasi_Proyek_PLTS_ok_(1).pdf', '2019-01-16', 'Publish'),
('DK-0185', 'KD-0010', 'QMS4-OPS19-035-03', 'PULLING FO (PENARIKAN KABEL SERAT OPTIK PADA SUBDUCT)', 'QMS4-OPS19-035-03_PULLING_FO1.pdf', '2019-01-16', 'Publish'),
('DK-0186', 'KD-0010', 'QMS4-OPS19-035-01', 'GALIAN ALUR BC-TR / DD-BM', 'QMS4-OPS19-035-01_GALIAN_ALUR_BCTR_DDBM1.pdf', '2019-01-16', 'Publish'),
('DK-0187', 'KD-0010', 'QMS4-OPS19-035-06', 'TEST COMMISSIONING FEEDER', 'QMS4-OPS19-035-06_TEST_COMMISSIONING_FEEDER.pdf', '2019-01-16', 'Publish'),
('DK-0188', 'KD-0010', 'QMS4-OPS19-014-10', 'Instalasi Jaringan Listrik', 'QMS4-OPS19-014-10_-_PK_Instalasi_Jaringan_Listrik_ok.pdf', '2019-01-16', 'Publish'),
('DK-0189', 'KD-0010', 'QMS4-OPS19-036-02', 'INSTALASI KABEL OPTIK UDARA', 'QMS4-OPS19-036-02_INSTALASI_KABEL_OPTIK_UDARA.pdf', '2019-01-16', 'Publish'),
('DK-0190', 'KD-0020', 'QMS3-SUP03-001', 'Pindah Dana', '1__Prosedur_Kerja_Pindah_Dana1.pdf', '2019-01-16', 'Publish'),
('DK-0191', 'KD-0010', 'QMS4-OPS20-005-01', 'PENGUKURAN KABEL OPTIK DENGAN OTDR', 'QMS4-OPS20-005-01_PENGUKURAN_KABEL_OPTIK_DENGAN_OTDR.pdf', '2019-01-16', 'Publish'),
('DK-0192', 'KD-0010', 'QMS4-OPS19-036-04', 'PEMASANGAN ODP & SPLITTER FTTH', 'QMS4-OPS19-036-04_PEMASANGAN_ODP___SPLITTER_FTTH1.pdf', '2019-01-16', 'Publish'),
('DK-0193', 'KD-0020', 'QMS3-SUP03-003', 'Penerbitan Letter of Credit (L/C)', '3__Prosedur_Kerja_Penerbitan_LC1.pdf', '2019-01-16', 'Publish'),
('DK-0194', 'KD-0020', 'QMS3-OPS18-003', 'PELAKSANAAN SERVICE ACCEPTANCE MITRA', '3__Pelaksanaan_Service_Acceptance_Mitra_QMS3-OPS18-003.pdf', '2019-01-16', 'Publish'),
('DK-0195', 'KD-0010', 'QMS4-OPS20-005-03', 'PELURUSAN & TEST REDAMAN END TO END FTTH', 'QMS4-OPS20-005-03_PELURUSAN___TEST_REDAMAN_END_TO_END_FTTH1.pdf', '2019-01-16', 'Publish'),
('DK-0196', 'KD-0020', 'QMS3-SUP03-005', 'Penerbitan Referensi Bank, Dukungan Bank dan Bank Garansi', '5__Prosedur_Kerja_Ref_Bank_Dukungan_Bank_dan_Bank_Garansi1.pdf', '2019-01-16', 'Publish'),
('DK-0197', 'KD-0020', 'QMS3-SUP03-007', 'Penarikan Pinjaman dari Lembaga Keuangan', '7__Prosedur_Penarikan_Pinjaman.pdf', '2019-01-16', 'Publish'),
('DK-0198', 'KD-0020', 'QMS3-SUP03-009', 'Penandatanganan Bilyet Giro/Cek dan Surat Transfer', '9__Prosedur_Kerja_Penandatanganan_BGCek_dan_Surat_Transfer.pdf', '2019-01-16', 'Publish'),
('DK-0199', 'KD-0020', 'QMS4-OPS19-001-03', 'INTEGRASI PERANGKAT KE SERVER SHMS', '7__Integrasi_Perangkat_ke_Server_SHMS_QMS4-OPS19-001-031.pdf', '2019-01-16', 'Publish'),
('DK-0200', 'KD-0020', 'QMS4-OPS19-001-01', 'INSTALASI PERANGKAT SHMS DI JEMBATAN BETON', '5__Instalasi_Perangkat_SHMS_di_Jembatan_Beton_QMS4-OPS19-001-011.pdf', '2019-01-16', 'Publish'),
('DK-0201', 'KD-0020', 'QMS3-OPS19-002', 'IMPLEMENTASI SISTEM INFORMASI DINI LALU LINTAS (SINDILA)', '9__Implementasi_Sistem_Informasi_Dini_Lalu_Lintas_(Sindila)_QMS3-OPS19-002.pdf', '2019-01-16', 'Publish'),
('DK-0202', 'KD-0020', 'QMS4-OPS19-002-02', 'INSTALASI SINDILA CONTROLLER', '11__Instalasi_Sindila_Cotroller_QMS4-OPS19-002-02.pdf', '2019-01-16', 'Publish'),
('DK-0203', 'KD-0020', 'QMS4-OPS19-002-04', 'INSTALASI SOLAR PANEL', '13__Instalasi_Solar_Panel_QMS4-OPS19-002-04.pdf', '2019-01-16', 'Publish'),
('DK-0204', 'KD-0020', 'QMS3-OPS08-004', 'Dokumen Proses Pengembangan Produk (DP3)', 'QMS3-OPS08-004,_Dokumen_Proses_Pengembangan_(DP3).pdf', '2019-01-16', 'Publish'),
('DK-0205', 'KD-0020', 'QMS3-SUP03-013', 'PENAGIHAN DAN PENERIMAAN KONTRAK PENJUALAN', '13__Prosedur_Kerja_Penagihan_dan_Penerimaan_Kontrak_Penjualan_(1).pdf', '2019-01-16', 'Publish'),
('DK-0206', 'KD-0020', 'QMS3-SUP03-011', 'Kas Direktorat/SBU', '11__Prosedur_Kerja_Kas_Divisi_Direktorat2.pdf', '2019-01-16', 'Publish'),
('DK-0207', 'KD-0020', 'QMS3-SUP03-050-1', 'Pengendalian Dokumen Pengembangan Produk', 'QMS3-SUP03-050-1_Pengendalian_Dokumen_Pengembangan_Produk.pdf', '2019-01-16', 'Publish'),
('DK-0208', 'KD-0020', 'QMS3-SUP03-050-4', 'PENILAIAN SENDIRI CAPAIAN TINGKAT KOMPONEN DALAM NEGERI (SELF ASSESSMENT ATAU SA TKDN), KEGIATAN PENGEMBANGAN PRODUK DAN PRODUKSI ', 'QMS3-SUP03-050-04,_Penilaian_Sendiri_Capaian_Tingkat_Komponen_Dalam_Negeri(SA_TKDN).pdf', '2019-01-16', 'Publish'),
('DK-0209', 'KD-0020', 'QMS4-OPS08-002-04', 'MANAJEMEN RISIKO PENGEMBANGAN PRODUK', 'QMS4-OPS08-002-04_Manajemen_Risiko_Pengembangan_Produk.pdf', '2019-01-16', 'Publish'),
('DK-0210', 'KD-0020', 'QMS3-OPS20-006', 'PENGENDALIAN ALAT KERJA', 'PENGENDALIAN_ALAT_KERJA.pdf', '2019-01-16', 'Publish'),
('DK-0211', 'KD-0010', 'QMS4-OPS19-032-02', 'Instalasi & Testcom FTM', 'INSTALASI_TEST_COM_FTM.pdf', '2019-01-16', 'Publish'),
('DK-0212', 'KD-0010', 'QMS4-OPS19-032-01', 'Instalasi & Testcom OLT', 'INSTALASI_TESTCOM_OLT.pdf', '2019-01-16', 'Publish'),
('DK-0213', 'KD-0020', 'QMS3-EVL02-003', 'EVALUASI KINERJA SBU DAN UNIT', 'Prosedur_Evaluasi_Kinerja_SBU_Unit.pdf', '2019-01-16', 'Publish'),
('DK-0214', 'KD-0020', 'QMS3-SUP03-037', 'Koreksi Cicilan No Name (NN)', 'prosedur_kerja_koreksi_cicilan_NN.pdf', '2019-01-16', 'Publish'),
('DK-0215', 'KD-0020', 'QMS4-OPS19-011-02', 'TEST & COMMISIONING i-PERISALAH', '17__Test_Commisioning_Perisalah_QMS4-OPS19-011-022.pdf', '2019-01-16', 'Publish'),
('DK-0216', 'KD-0020', 'QMS3-OPS19-011', 'INSTALASI PERANGKAT i-PERISALAH', '15__Instalasi_Perangkat_Perisalah_QMS3-OPS19-0112.pdf', '2019-01-16', 'Publish'),
('DK-0217', 'KD-0010', 'QMS4-OPS19-014-03', 'INSTALASI PENYANGGA PHOTOVOLTAIC (PV)', 'QMS4-OPS19-014-03_-_PK_Instalasi_Penyangga_Photovoltaic_(PV)_ok2.pdf', '2019-01-16', 'Publish'),
('DK-0218', 'KD-0010', 'QMS4-OPS19-014-05', 'INSTALASI INVENTER', 'QMS4-OPS19-014-05_-_PK_Instalasi_Inverter_ok.pdf', '2019-01-16', 'Publish'),
('DK-0219', 'KD-0020', 'QMS3-SUP03-035', 'Penyaluran Dana Program Bina Lingkungan', 'prosedur_kerja_penyaluran_dana_BL2.pdf', '2019-01-16', 'Draft'),
('DK-0220', 'KD-0020', 'QMS3-PLA02-008', 'Penyusunan RKAP', 'Prosedur_Pedoman_Penyusunan_RKAP2.pdf', '2019-01-16', 'Publish'),
('DK-0221', 'KD-0010', 'QMS4-OPS19-014-09', 'INSTALASI SOLAR CHARGER CONTROLLER (SCC)', 'QMS4-OPS19-014-09_-_PK_Instalasi_Solar_Charger_Controller_ok.pdf', '2019-01-16', 'Publish'),
('DK-0222', 'KD-0010', 'QMS4-OPS19-014-07', 'INSTALASI TOWER PENANGKAL PETIR', 'QMS4-OPS19-014-07_-_PK_Instalasi_Tower_Penangkal_Petir_ok1.pdf', '2019-01-16', 'Publish'),
('DK-0223', 'KD-0010', 'QMS4-OPS19-014-11', 'TEST DAN COMMISSIONING SISTEM PLTS', 'QMS4-OPS19-014-11_-_PK_Test_Commisioning_System_PLTS_ok.pdf', '2019-01-16', 'Publish'),
('DK-0224', 'KD-0020', 'QMS3-SUP03-002', 'PENEMPATAN DANA', '2__Prosedur_Kerja_Penempatan_Dana.pdf', '2019-01-16', 'Publish'),
('DK-0226', 'KD-0020', 'QMS3-SUP03-006', 'Transaksi Valuta Asing', '6__Prosedur_Kerja_Transaksi_Valuta_Asing.pdf', '2019-01-16', 'Publish'),
('DK-0227', 'KD-0020', 'QMS3-SUP03-004', 'Penerbitan Surat Kredit Berdokumen Dalam Negeri (SKBDN)', '4__Prosedur_Kerja_SKBDN1.pdf', '2019-01-16', 'Publish'),
('DK-0228', 'KD-0020', 'QMS3-SUP03-008', 'Pembukaan dan Penutupan Rekening Giro', '8__Prosedur_Kerja_Pembukaan_dan_Penutupan_Rekening_Giro.pdf', '2019-01-16', 'Publish'),
('DK-0229', 'KD-0020', 'QMS3-SUP03-010', 'PENGELUARAN KEUANGAN DAN FITUR BAYAR', '10__Prosedur_Kerja_Pengeluaran_Keuangan_dan_Fiatur_Bayar.pdf', '2019-01-16', 'Publish'),
('DK-0230', 'KD-0020', 'QMS3-SUP03-012', 'PEMBAYARAN KEPADA VENDOR', '12__Prosedur_Kerja_Pembayaran_kepada_Vendor.pdf', '2019-01-16', 'Publish'),
('DK-0231', 'KD-0020', 'QMS3-OPS08-002', 'PENGEMBANGAN PRODUK (P2)', 'QMS3-OPS08-002,_Pengembangan_Produk.pdf', '2019-01-16', 'Publish'),
('DK-0232', 'KD-0020', 'QMS3-SUP03-050', 'PENYUSUNAN DOKUMEN PENGEMBANGAN PRODUK', 'QMS3-SUP03-050_Penyusunan_Dokumen_Pengembangan_Produk.pdf', '2019-01-16', 'Publish'),
('DK-0233', 'KD-0020', 'QMS3-SUP03-050-2', 'STANDARD PENOMORAN DOKUMEN PENGEMBANGAN', 'QMS3-SUP03-050-2_Standard_Penomoran_Dokumen_Pengembangan.pdf', '2019-01-16', 'Publish'),
('DK-0234', 'KD-0020', 'QMS3-SUP03-019', 'Pencatatan Transaksi Akuntansi Siklus Penerimaan Lainnya', 'QMS3-SUP03-019_Pencatatan_Transaksi_Akuntansi_Siklus_Penerimaan_lainnya1.pdf', '2019-01-16', 'Publish'),
('DK-0235', 'KD-0020', 'QMS4-OPS08-002-03', 'PENGADAAN BARANG / JASA PENGEMBANGAN PRODUK', 'QMS4-OPS08-002-03_Pengadaan_Barang-Jasa_Pengembangan_Produk.pdf', '2019-01-16', 'Publish'),
('DK-0236', 'KD-0020', 'QMS3-SUP03-021', 'Pencatatan Transaksi Akuntansi Investasi Aset dan Internal Project', 'QMS3-SUP03-021_Pencatatan_Transaksi_Akuntansi_Investasi_dan_Internal_Projec11.pdf', '2019-01-16', 'Publish'),
('DK-0237', 'KD-0020', 'QMS3-OPS20-007', 'PENGENDALIAN ALAT UKUR', 'PENGENDALIAN_ALAT_UKUR.pdf', '2019-01-16', 'Publish'),
('DK-0238', 'KD-0010', 'QMS4-OPS19-28-01', 'PENYAMBUNGAN FIBER OPTIK', 'PENYAMBUNGAN_FIBER_OPTIK.pdf', '2019-01-16', 'Publish'),
('DK-0239', 'KD-0020', 'QMS4-OPS08-002-05', 'PENERIMAAN, PENYIMPANAN DAN PELAYANAN BARANG', 'QMS4-OPS08-002-05_Penerimaan_Penyimpanan_dan_Pelayanan_Barang1.pdf', '2019-01-16', 'Publish'),
('DK-0240', 'KD-0020', 'QMS4-OPS08-002-05', 'PENERIMAAN, PENYIMPANAN DAN PELAYANAN BARANG', 'QMS4-OPS08-002-05_Penerimaan_Penyimpanan_dan_Pelayanan_Barang2.pdf', '2019-01-16', 'Publish'),
('DK-0241', 'KD-0010', 'QMS3-OPS20-008', 'PEMAKAIAN TANGGA', 'PEMAKAIAN_TANGGA.pdf', '2019-01-16', 'Publish'),
('DK-0242', 'KD-0020', 'QMS3-EVL06-002', 'PROSEDUR PELAKSANAAN AUDIT DAN TINDAK LANJUT HASIL AUDIT SATUAN PENGAWASAN INTERN', 'SPI20170621_Prosedur_Kerja_Pelaksanaan_Audit_Tindak_Lanjut_Hasil_Audit_Edisi_5_compressed(1).pdf', '2019-01-16', 'Publish'),
('DK-0243', 'KD-0020', 'QMS3-SUP03-036', 'PENAGIHAN DANA KEMITRAAN', 'prosedur_kerja_penagihan_PKBL.pdf', '2019-01-16', 'Publish'),
('DK-0244', 'KD-0020', 'QMS3-SUP03-034', 'PENYALURAN DANA PINJAMAN PROGRAM KEMITRAAN', 'prosedur_kerja_penyaluran_dana_PKBL.pdf', '2019-01-16', 'Publish'),
('DK-0245', 'KD-0020', 'QMS3-SUP03-023', 'Prosedur Pengajuan Biaya Yang Masih Harus Dibayar (BYMHD) Corporate', 'QMS3-SUP03-023_Prosedur_Pengajuan_Biaya_yang_masih_harus_dibayar_(BYMHD)_Corporate2.pdf', '2019-01-16', 'Publish'),
('DK-0246', 'KD-0020', 'QMS3-SUP03-025', 'Pencatatan Transaksi Akuntansi Penghentian Aset Tetap Menjadi Aset Non Operasional', 'QMS3-SUP03-025_Pencatatan_Transaksi_Akuntansi_Penghentian_Aset_Tetap_Menjadi_Aset_Non_Operasional2.pdf', '2019-01-16', 'Publish'),
('DK-0247', 'KD-0021', 'NO: 047/PS.22/020801/2017', 'NOTA INTERN', 'LapMan_ManRisk_Jan-Apr_20172.pdf', '2019-01-16', 'Publish'),
('DK-0248', 'KD-0020', 'QMS3-PLA02-008', 'Penyusunan RKAP', 'Prosedur_Pedoman_Penyusunan_RKAP3.pdf', '2019-01-16', 'Publish'),
('DK-0249', 'KD-0020', 'QMS4-OPS19-014-08', 'Instalasi Shelter', 'QMS4-OPS19-014-08_-_PK_Instalasi_Shelter_ok2.pdf', '2019-01-16', 'Publish'),
('DK-0250', 'KD-0010', 'QMS4-OPS19-014-02', 'Instalasi Pondasi Penyangga Photovoltaic (PV)', 'QMS4-OPS19-014-02_-_PK_Instalasi_Pondasi_Penyangga_Photovoltaic_(PV)_ok2.pdf', '2019-01-16', 'Publish'),
('DK-0251', 'KD-0010', 'QMS4-OPS19-035-04', 'JOINT CLOSURE (PENYAMBUNGAN SERAT OPTIK PADA CLOSURE)', 'QMS4-OPS19-035-04_JOINT_CLOSURE3.pdf', '2019-01-16', 'Publish'),
('DK-0252', 'KD-0023', 'KD.44/KP/00/020800/2017', 'PENETAPAN RISK CHAMPION BIDANG MANAJEMEN RISIKO UNTUK PENERAPAN "SISTEM MANAJEMEN RISIKO"', 'SKD_44_Risk_Champion_Risk_Representative_ManRisk1.pdf', '2019-01-16', 'Publish'),
('DK-0253', 'KD-0020', 'QMS3-SUP03-018', 'PENCATATAN TRANSASKSI AKUNTANSI SIKLUS PEMBELIAN DAN PEMBAYARAN', 'QMS3-SUP03-018_Pencatatan_Transaksi_Akuntani_Siklus_Pembelian_dan_Pembayaran.pdf', '2019-01-16', 'Publish'),
('DK-0254', 'KD-0020', 'QMS3-OPS02-009', 'Penyusunan Program Kerja Pengawasan Tahunan Dengan Pendekatan Risiko', 'QMS3-OPS02-009_Penyusunan_Program_Kerja_Pengawasan_Tahunan_dengan_Pendekatan_Risiko1.pdf', '2019-01-16', 'Publish'),
('DK-0255', 'KD-0020', 'QMS3-020903-001', 'Layanan Kendaraan Dinas', 'QMS3-020903-001_LAYANAN_KENDARAAN_DINAS.pdf', '2019-01-16', 'Publish'),
('DK-0256', 'KD-0020', 'QMS3-SUP03-020', 'PENCATATAN TRANSAKSI AKUNTANSI SIKLUS PENGELUARAN LAINNYA', 'QMS3-SUP03-020_Pencatatan_Transaksi_Akuntansi_Siklus_Pengeluaran_Lainnya1.pdf', '2019-01-16', 'Publish'),
('DK-0257', 'KD-0020', 'QMS3-020903-005', 'Pengelolaan Sampah', 'QMS3-020903-005,_PENGELOLAAN_SAMPAH.pdf', '2019-01-16', 'Publish'),
('DK-0258', 'KD-0020', 'QMS3-SUP03-022', 'PENCATATAN TRANSAKSI AKUNTANSI PENERIMAAN INSENTIF PEMERINTAH', 'QMS3-SUP03-022_Pencatatan_Transaksi_Akuntansi_Penerimaan_Insentif_Pemerintah.pdf', '2019-01-16', 'Publish'),
('DK-0259', 'KD-0020', 'QMS3-SUP03-024', 'PENCATATAN TRANSAKSI AKUNTANSI SIKLUS MONTH AND YEAR END CLOSING', 'QMS3-SUP03-024_Pencatatan_Transaksi_Akuntansi_Siklus_Month_and_Year_end_Closing.pdf', '2019-01-16', 'Publish'),
('DK-0260', 'KD-0020', 'QMS3-SUP03-026', 'PERHITUNGAN HARGA STANDAR PRODUKSI', 'QMS3-SUP03-026_Perhitungan_harga_Standar_Produksi.pdf', '2019-01-16', 'Publish'),
('DK-0261', 'KD-0020', 'QMS3-PLA02-014', 'Pemeriksaan dan Pemeliharaan Alat Pelindung Diri (APD)', 'QMS3-PLA02-014_Pemeriksaan_dan_pemeliharaan_Alat_Pelindung_Diri.pdf', '2019-01-16', 'Publish'),
('DK-0262', 'KD-0025', 'QMS1-PLA02-001', 'SASARAN MUTU', 'Sasaran_Mutu_2018.pdf', '2019-01-16', 'Publish'),
('DK-0263', 'KD-0020', 'QMS3-SUP03-055', 'Penyusunan Laporan Manajemen Perusahaan', 'QMS3-SUP03-055_Penyusunan_Laporan_Manajemen_Perusahaan1.pdf', '2019-01-16', 'Publish'),
('DK-0264', 'KD-0020', 'QMS3-IPR03-002', 'Prosedur Investigasi Kejadian', 'QMS3-IPR03-002_Prosedur_Investigasi_Kejadian1.pdf', '2019-01-16', 'Publish'),
('DK-0265', 'KD-0024', 'No. QSC 01480', 'SNI ISO 9001:2015 SUCOFINDO INTERNATIONAL CERTIFICATE SERVICES ', '2017_sertificate_SNI_ISO9001_20151.pdf', '2019-01-16', 'Publish'),
('DK-0266', 'KD-0024', 'No. OSH 00452', 'OHSAS 18001:2007 SUCOFINDO INTERNATIONAL CERTIFICATION SERVICES', '2017_Sertifikat_SNI_OHSAS_18001-2007.pdf', '2019-01-16', 'Publish'),
('DK-0267', 'KD-0020', 'QMS3-020903-004', 'PENANGANAN AIR LIMBAH DOMESTIK', 'QMS3-020903-004,_PENANGANAN_AIR_LIMBAH_DOMESTIK1.pdf', '2019-01-16', 'Publish'),
('DK-0268', 'KD-0020', 'QMS3-020903-002', 'PROSEDUR SISTEM PENGAMANAN DI PT INTI', 'QMS3-020903-002_SISTEM_PENGAMANAN_DI_PT_INTI1.pdf', '2019-01-16', 'Publish'),
('DK-0269', 'KD-0020', 'QMS3-020903-006', 'HYGIENE PERUSAHAAN DAN GIZI KERJA', 'QMS3-020903-006,_HYGIENE_PERUSAHAAN_DAN_GIZI_KERJA.pdf', '2019-01-16', 'Publish'),
('DK-0270', 'KD-0020', 'QMS3-EVL04-001', 'PELAKSANAAN CUSTOMER SATISFACTION INDEX (CSI)', 'QMS3-EVL04-001_Pelaksanaan_Customer_Satisfaction_Index_(CSI).pdf', '2019-01-16', 'Publish'),
('DK-0271', 'KD-0020', 'QMS3-SUP13-003', 'Pemuatan Informasi di Website Perusahaan', 'SOP_QMS3-SUP13-003_Pemuatan_Informasi_Di_Website_Perusahaan1.pdf', '2019-01-16', 'Publish'),
('DK-0272', 'KD-0024', 'REG.SMK3.2016.SUC.SK-379', 'SERTIFIKAT SMK3', 'Sertifikat_SMK3_berlaku_sd_Mei_20191.pdf', '2019-01-16', 'Publish'),
('DK-0273', 'KD-0020', 'QMS3-SUP05-013', 'KONTEN IKLAN', 'SOP_QMS3-SUP05-013_Konten_Iklan1.pdf', '2019-01-16', 'Publish'),
('DK-0274', 'KD-0020', 'QMS3-SUP07-003', 'Manajemen Krisis', 'SOP_QMS3-SUP07-003_Manajemen_Krisis1.pdf', '2019-01-16', 'Publish'),
('DK-0275', 'KD-0020', 'QMS3-SUP13-005', 'Pengelolaan Media Sosial (Twitter @pt_inti)', 'SOP_QMS3-SUP13-005_Pengelolaan_Media_Sosial_(Twitter_@pt_inti)06072018110356.pdf', '2019-01-16', 'Publish'),
('DK-0276', 'KD-0020', 'QMS3-SUP13-007', 'Penyediaan dan Pengelolaan Database Public Relations', 'SOP_QMS3-SUP13-007_Penyediaan_dan_Pengelolaan_Database_Purel.pdf', '2019-01-16', 'Publish'),
('DK-0277', 'KD-0020', 'QMS3-SUP17-005', 'Pengelolaan dan Pemutakhiran Website Perusahaan', 'SOP_QMS3-SUP17-005_Pengelolaan_dan_Pemutakhiran_Website_Perusahaan.pdf', '2019-01-16', 'Publish'),
('DK-0278', 'KD-0020', 'QMS3-SUP17-006', 'Pengelolaan dan Pengungkapan Informasi Perusahaan', 'SOP_QMS3-SUP17-006_Pengelolaan_dan_Pengungkapan_Informasi_Perusahaan.pdf', '2019-01-16', 'Publish'),
('DK-0279', 'KD-0020', 'QMS3-SUP04-010', 'Rekrutasi dan Orientasi Karyawan Baru', 'QMS3-SUP04-010_REKRUTASI_DAN_ORIENTASI_KARYAWAN_BARU1.pdf', '2019-01-16', 'Publish'),
('DK-0280', 'KD-0024', '008429', 'CERTIFICATE CIQS 2000:2009 KONTRAKTOR DAN DISTRIBUTOE JARINGAN TELEKOMUNIKASI', 'Sertifikat_CIQS_2000_2009_s_d_20201.pdf', '2019-01-16', 'Publish'),
('DK-0281', 'KD-0010', 'QMS4-OPS19-020-05', 'PENGUJIAN REDAMAN', 'QMS4-OPS19-020-05_PENGUJIAN_REDAMAN3.pdf', '2019-01-17', 'Publish'),
('DK-0282', 'KD-0024', 'No. EMS 00270', 'SNI ISO 14001:2015 SUCOFINDO INTERNATIONAL CERTIFICATION SERVICE', '2017_sertificate_SNI_ISO14001_20151.pdf', '2019-01-17', 'Publish'),
('DK-0283', 'KD-0020', 'QMS4-OPS03-001-001', 'PENANGANAN TUMPAHAN LIMBAH B3', 'QMS4-OPS3-001-001_Tumpahan_Limbah_B32.pdf', '2019-01-17', 'Publish'),
('DK-0284', 'KD-0025', 'QMS1-PLA02-001', 'KEBIJAKAN LARANGAN PEMAKAIAN NARKOBA, MINUMAN KERAS DAN MEROKOK', 'QMS1-PLA02-001_Kebijakan_Narkotika2.jpg', '2019-01-17', 'Publish'),
('DK-0285', 'KD-0025', 'KD.51/KP.03/020801/2017', 'Surat Keputusan Direksi Perusahaan Perseroan (PERSERO) PT INDUSTRI TELEKOMUNIKASI INDONESIA', 'SKD_No_51_2017_Tim_Audit_dan_Evaluasi_Ketaatan_20172.pdf', '2019-01-17', 'Publish'),
('DK-0286', 'KD-0020', 'QMS3-OPS10-010', 'Pemeliharaan Rutin Software Loader', 'QMS3-OPS20-010_PELAKSANAAN_PEMELIHARAAN_SOFTWARE_LOADER.pdf', '2019-01-17', 'Publish'),
('DK-0287', 'KD-0020', 'QMS3-SUP05-014', 'PEMBUATAN MARKETING TOOLS', 'SOP_QMS3-SUP05-014_Pembuatan_Marketing_Tools1.pdf', '2019-01-17', 'Publish'),
('DK-0288', 'KD-0020', 'QMS3-SUP12-007', 'KEIKUTSERTAAN DALAM KEGIATAN AWARDING', 'SOP_QMS3-SUP12-007_Keikutsertaan_dalam_Kegiatan_Awarding.pdf', '2019-01-17', 'Publish'),
('DK-0289', 'KD-0020', 'QMS3-SUP13-004', 'DESAIN LAPORAN TAHUNAN (ANNUAL REPORT)', 'SOP_QMS3-SUP13-004_Desain_LaporanTahunan_(Annual_Report).pdf', '2019-01-17', 'Publish'),
('DK-0290', 'KD-0020', 'QMS4-OPS27-003-10', 'Pengetesan & Perbaikan Modul Secara Offline Pada Rack Referensi DLU', 'QMS4-OPS27-003-10_PENGETESAN_DAN_PERBAIKAN_MODUL_SECARA_OFFLINE_PADA_RACK_REFERENSI_DLU.pdf', '2019-01-17', 'Publish'),
('DK-0291', 'KD-0020', 'QMS3-SUP13-008', 'PENERBITAN PRESS RELEASE', 'SOP_QMS3-SUP13-008_Penerbitan_Press_Release.pdf', '2019-01-17', 'Publish'),
('DK-0292', 'KD-0020', 'QMS3-SUP13-006', 'PENGELOLAAN MEDIA SOSIAL (FACEBOOK PT INTI)', 'SOP_QMS3-SUP13-006_Pengelolaan_Media_Sosial_(Facebook_PT_INTI)1.pdf', '2019-01-17', 'Publish'),
('DK-0293', 'KD-0020', 'QMS3-SUP17-008', 'PENGELOLAAN EMAIL PERUSAHAAN (info@inti.co.id)', 'SOP_QMS3-SUP17-008_Pengelolaan_Email_Perusahaan_(info@inti_co_id).pdf', '2019-01-17', 'Publish'),
('DK-0294', 'KD-0020', 'QMS4-OPS27-003-14', 'Pengetesan & Perbaikan Modul Secara Offline Pada Rack Referensi DLU B', 'QMS4-OPS27-003-14_PENGETESAN_DAN_PERBAIKAN_MODUL_SECARA_ONLINE_PADA_RACK_REFERENSI_DLU_B1.pdf', '2019-01-17', 'Publish'),
('DK-0295', 'KD-0020', 'QMS4-OPS27-003-12', 'Pengetesan & Perbaikan Modul-Modul LTGB/C/CR Secara Offline', 'QMS4-OPS27-003-12_PENGETESAN_DAN_PERBAIKAN_MODUL_LTGBC,CR_SECARA_OFFLINE1.pdf', '2019-01-17', 'Publish'),
('DK-0296', 'KD-0020', 'QMS3-SUP09-001', 'Pengendalian Kalibrasi Peralatan Ukur dan Kalibrator', 'QMS3-SUP09-001_PENGENDALIAN_KALIBRASI_ALAT_UKUR_DAN_KALIBRATOR1.pdf', '2019-01-17', 'Publish'),
('DK-0297', 'KD-0020', 'QMS4-OPS27-003-16', 'Pengetesan Hasil Repair Modul Pada System Test', 'QMS4-OPS27-003-16_PENGETESAN_HASIL_REPAIR_MODUL_PADA_SYSTEM_TEST.pdf', '2019-01-17', 'Publish'),
('DK-0298', 'KD-0020', 'QMS3-OPS27-003', 'PROSES REPAIR MODUL DI URUSAN REPAIR DAN MAINTENANCE BAGIAN PRODUKSI', 'QMS3-OPS27-003_PROSES_REPAIR_MODUL_DI_URUSAN_REPAIR_MAINTENANCE_BAGIAN_PRODUKSI.pdf', '2019-01-17', 'Publish'),
('DK-0299', 'KD-0025', 'KD.020/KP.00/020800/2017', 'PENETAPAN ORGANISASI MANAGEMENT REPRESENTATIVE (MR) DAN WORKING GROUP (WG) BIDANG MUTU, K3 DAN LINGKUNGAN UNTUK PENERAPAN "SISTEM MANAJEMEN MUTU, K3 DAN LINGKUNGAN"', 'SKD_020_PENETAPAN_MR_WG_20172.pdf', '2019-01-17', 'Publish'),
('DK-0300', 'KD-0020', 'QMS4-OPS27-003-11', 'PROSES PELAKSANAAN REPAIR PADA RACK REFERENSI : LTGB/C/CR, DLU & SN', 'QMS4-OPS27-003-11_PROSES_PELAKSANAAN_REPAIR_PADA_RACK_REFERENSI_LTGB,C,CR,DLU,_DAN_SN.pdf', '2019-01-17', 'Publish'),
('DK-0301', 'KD-0020', 'QMS3-0PS27-005', 'PERTOLONGAN PERTAMA PADA KECELAKAAN (P3K)', 'QMS3-OPS27-005_PERTOLONGAN_PERTAMA_PADA_KECELAKAAN_(P3K)1.pdf', '2019-01-17', 'Publish'),
('DK-0302', 'KD-0020', 'QMS3-OPS19-009', 'Produksi Meter Gas', 'QMS3-OPS19-009_PR_Proses_Produksi_meter_gas_ed1rev3_(3).pdf', '2019-01-17', 'Publish'),
('DK-0303', 'KD-0020', 'QMS4-OPS27-003-15', 'PERBAIKAN MODUL RECTIFIER, DC TO DC CONVERTER & INVERTER SECARA MANUAL', 'QMS4-OPS27-003-15_PELAKSANAAN_REPAIR_MODUL_DC_TO_DC_CONVERTER_DAN_INVERTER_SECARA_MANUAL.pdf', '2019-01-17', 'Publish'),
('DK-0304', 'KD-0020', 'QMS4-OPS27-003-13', 'PENGETASAN & PERBAIKAN MODUL-MODUL SNA & SNB SECARA OFFLINE', 'QMS4-OPS27-003-13_PENGETESAN_DAN_PERBAIKAN_MODUL_SNA_DAN_SNB_SECARA_OFFLINE1.pdf', '2019-01-17', 'Publish'),
('DK-0305', 'KD-0020', 'QMS4-OPS19-009-04', 'Uji Akurasi Inti Gas Meter 1.6Q', 'QMS4-OPS19-009-04_PK_Akurasi_Meter_gas_ed01rev01.pdf', '2019-01-17', 'Publish'),
('DK-0306', 'KD-0020', 'qms4-ops19-009-06', 'Pengetesan Meter Gas', 'QMS4-OPS19-009-06_PK_Pengetesan_meter_gas_ed1rev1.pdf', '2019-01-17', 'Publish'),
('DK-0307', 'KD-0020', 'QMS4-OPS19-009-02', 'Load Software Meter Gas Pra Bayar', 'QMS4-OPS19-009-02_PK_Load_SW_Meter_gas_ed01rev01_(2).pdf', '2019-01-17', 'Publish'),
('DK-0308', 'KD-0020', 'QMS3-OPS16-006', 'PENILAIAN KINERJA MITRA/VENDOR', 'QMS3-OPS16-006_PENILAIAN_KINERJA_MITRA_VENDOR.pdf', '2019-01-17', 'Publish'),
('DK-0309', 'KD-0020', 'QMS4-OPS27-003-17', 'PENGETESAN & PERBAIKAN MODUL GPA, PRODUK GENUINE', 'QMS4-OPS27-003-17_PENGETESAN_DAN_PERBAIKAN_GPA_DAN_PRODUK_GENUINE1.pdf', '2019-01-17', 'Publish'),
('DK-0310', 'KD-0020', 'QMS3-OPS19-044', 'Proses Produksi MPOS (Mobile Point Of Sales)', 'QMS3-OPS19-044_PR_Proses_Produksi_MPOS_ed1rev1.pdf', '2019-01-17', 'Publish'),
('DK-0311', 'KD-0020', 'QMS4-OPS19-009-01', 'Perakitan Meter Gas', 'QMS4-OPS19-009-01_PK_Perakitan_meter_gas_ed1rev2.pdf', '2019-01-17', 'Publish'),
('DK-0312', 'KD-0020', 'QMS-OPS19-009-03', 'Entry Serial Nunber (SN) dan Key Change Token (KCT) Meter Gas', 'QMS4-OPS19-009-03_PK_Entry_SN_Entry_KCT_MGPB_ed01rev01.pdf', '2019-01-17', 'Publish'),
('DK-0313', 'KD-0020', 'QMS4-OPS19-009-05', 'Pengoperasian Mesin Crimping', 'QMS4-OPS19-009-05_PK_Pengoperasian_Mesin_Crimping_ed01rev01.pdf', '2019-01-17', 'Publish'),
('DK-0314', 'KD-0020', 'qms3-sup03-044', 'Perbaikan AOD', 'QMS3-SUP03-044_Perbaikan_AOD1.pdf', '2019-01-17', 'Publish'),
('DK-0315', 'KD-0020', 'QMS3-SUP05-006', 'Pengembangan Aplikasi Sistem Informasi', 'QMS3-SUP05-006_Pengembangan_Aplikasi_Sistem_Informasi.pdf', '2019-01-17', 'Publish'),
('DK-0316', 'KD-0020', 'QMS3-OPS19-044-02', 'Load Software dan Test MPOS (Mobile Point Of Sales)', 'QMS4-OPS19-044-02_PK_Load_Software_dan_Test_MPOS_ed1rev11.pdf', '2019-01-17', 'Publish'),
('DK-0317', 'KD-0020', 'QMS3-SUP03-041', 'Pengelolaan Rilis Aplikasi Sistem Informasi', 'QMS3-SUP03-041_Pengelolaan_Rilis_Aplikasi_Sistem_Informasi1.pdf', '2019-01-17', 'Publish');
INSERT INTO `tbl_dokumen` (`id_dokumen`, `id_kategori_dokumen`, `no_dokumen`, `nm_dokumen`, `file_dokumen`, `tgl_sah_dokumen`, `status_dokumen`) VALUES
('DK-0318', 'KD-0020', 'QMS3-SUP05-009', 'Pemenuhan Layanan Infrastruktur Teknologi Informasi', 'QMS3-SUP05-009_Pemenuhan_Layanan_Infrastruktur_Teknologi_Informasi.pdf', '2019-01-17', 'Publish'),
('DK-0319', 'KD-0020', 'QMS4-SUP05-007-02', 'Pemeliharaan UPS', 'QMS4-SUP05-007-03_Pemeliharaan_UPS.pdf', '2019-01-17', 'Publish'),
('DK-0320', 'KD-0020', 'QMS3-SUP03-042', 'PENGELOLAAN PENGGUNA APLIKASI SISTEM INFORMASI', 'QMS3-SUP03-042_Pengelolaan_Pengguna_Aplikasi_Sistem_Informasi.pdf', '2019-01-17', 'Publish'),
('DK-0321', 'KD-0020', 'QMS40SUP05-009-07', 'Instalasi Proxy Server', 'QMS4-SUP05-009-07_Instalasi_Proxy_Server.pdf', '2017-04-06', 'Publish'),
('DK-0322', 'KD-0020', 'QMS3-SUP03-040', 'PENGELOLAAN KLAIM LAYANAN TEKNOLOGI INFORMASI', 'QMS3-SUP03-042_Pengelolaan_Pengguna_Aplikasi_Sistem_Informasi1.pdf', '2019-01-17', 'Publish'),
('DK-0323', 'KD-0020', 'QMS4-OPS19-044-03', 'Packing MPOS (Mobile Point Of Sales)', 'QMS4-OPS19-044-03_PK_Packing_MPOS_ed1rev12.pdf', '2019-01-17', 'Publish'),
('DK-0324', 'KD-0020', 'QMS3-OPS19-044-01', 'Perakitan MPOS', 'QMS4-OPS19-044-01_PK_Perakitan_MPOS_ed1rev12.pdf', '2019-01-17', 'Publish'),
('DK-0325', 'KD-0020', 'QMS4-0209021-008', 'Pemasangan Konektor RJ45 Ke Kabel UTP', 'QMS4-SUP05-009-03_Pemasangan_Konektor_RJ45_ke_Kabel_UTP.pdf', '2019-01-17', 'Publish'),
('DK-0326', 'KD-0020', 'QMS4-SUP05-009-05', 'Instalasi OCS Inventory Agent', 'QMS4-SUP05-009-05__Instalasi_OCS_Inventory_Agent.pdf', '2019-01-17', 'Publish'),
('DK-0327', 'KD-0020', 'QMS4-SUP05-009-09', 'Konfigurasi HP SAN (Storage Area Network) EVA 440', 'QMS4-SUP05-009-09_Konfigurasi_HP_SAN_(_Storage_Area_Network_)_EVA_4400.pdf', '2019-01-17', 'Publish'),
('DK-0328', 'KD-0020', 'QMS4-SUP05-009-11', 'Instalasi Domain Name System (DNS) Server', 'QMS4-SUP05-009-11_Instalasi_Domain_Name_Server_(DNS)_Server.pdf', '2019-01-17', 'Publish'),
('DK-0329', 'KD-0020', 'QMS4-SUP05-009-01', 'Konfigurasi Jaringan Redundansi Untuk Internet Dan SAP', 'QMS4-SUP05-009-01_Konfigurasi_Jaringan_Redudansi_Untuk_Internet_dan_SAP2.pdf', '2019-01-17', 'Publish'),
('DK-0330', 'KD-0020', 'QMS4-SUP05-007-06', 'MONITORING INFRASTRUKTUR JARINGAN KOMPUTER DENGAN SOFTWARE WINBOX', 'QMS4-SUP05-007-06_Monitoring_Infrastruktur_Jaringan_Komputer_dengan_Software_Winbox.pdf', '2019-01-17', 'Publish'),
('DK-0331', 'KD-0020', 'QMS4-SUP05-009-06', 'INSTALASI ZIMBRA MAIL SERVER', 'QMS4-SUP05-009-06_Instalasi_Zimbra_Mail_Server1.pdf', '2019-01-17', 'Publish'),
('DK-0332', 'KD-0020', 'QMS4-SUP05-007-04', 'BACKUP DATABASE ORACLE', 'QMS4-SUP05-007-04_Backup_Database_Oracle1.pdf', '2019-01-17', 'Publish'),
('DK-0333', 'KD-0020', 'QMS4-SUP05-007-02', 'BACKUP DAN RESTORE E-MAIL KARYAWAN', 'QMS4-SUP05-007-02_Backup_dan_Restore_Email_Karyawan1.pdf', '2019-01-17', 'Publish'),
('DK-0334', 'KD-0020', 'QMS3-SUP05-007', 'PENGELOLAAN INFRASTRUKTUR TEKNOLOGI INFORMASI', 'QMS3-SUP05-007_Pengelolaan_Infrastruktur_Teknologi_Informasi1.pdf', '2019-01-17', 'Publish'),
('DK-0335', 'KD-0020', 'QMS4-SUP05-009-02', 'INSTALASI MIKROTIK ROUTER', 'QMS4-SUP05-009-02_Instalasi_Mikrotik_Router.pdf', '2019-01-17', 'Publish'),
('DK-0336', 'KD-0020', 'QMS4-SUP05-009-04', 'PERBAIKAN JARINGAN KOMPUTER', 'QMS4-SUP05-009-04_Perbaikan_Jaringan_Komputer.pdf', '2019-01-17', 'Publish'),
('DK-0337', 'KD-0020', 'QMS3-SUP03-030', 'Pencatatan Transaksi Akuntansi Siklus Produksi', 'Final_Upload_2017_QMS3-SUP03-030_Siklus_Produksi.pdf', '2019-01-17', 'Publish'),
('DK-0338', 'KD-0020', 'QMS4-SUP05-009-10', 'KONFIGURASI VLAN CENTOS 5.5 DLINK DGS-3100', 'QMS4-SUP05-009-10_Konvigurasi_VLAN_CentOS_5_5_pada_DLINK_DGS-3100.pdf', '2019-01-17', 'Publish'),
('DK-0339', 'KD-0020', 'QMS4-SUP05-009-08', 'INSTALASI SISTEM OPERASI LINUX CENTOS 6.5', 'QMS4-SUP05-009-08_Instalasi_Sistem_Operasi_Linux_Cent_OS_6_51.pdf', '2019-01-17', 'Publish'),
('DK-0340', 'KD-0020', 'QMS3-SUP03-029', 'Pencatatan Transaksi Akuntansi Siklus Penggajian', 'Final_Upload_2017_QMS3-SUP03-029_Siklus_Penggajian1.pdf', '2019-01-17', 'Publish'),
('DK-0341', 'KD-0020', 'QMS3-SUP03-027', 'Manajemen Anggaran Perusahaan', 'Final_Upload_2017_QMS3-SUP03-027_Manajemen_Anggaran3.pdf', '2019-01-17', 'Publish'),
('DK-0342', 'KD-0020', 'QMS3-SUP03-028', 'PENCATATAN TRANSAKSI AKUNTANSI SIKLUS PENJUALAN DAN PENERIMAAN KAS', 'Final_Upload_2017_QMS3-SUP03-028_Siklus_Penjualan_dan_Penerimaan_Kas.pdf', '2019-01-17', 'Publish'),
('DK-0343', 'KD-0020', 'QMS4-SUP05-009-12', 'BACKUP DAN RESTORE KONFIGURASI FORTIGATE FIREWALL', 'QMS4-SUP05-009-12_Backup_dan_Restore_Konfigurasi_Fortigate_Firewall1.pdf', '2019-01-17', 'Publish'),
('DK-0344', 'KD-0020', 'QMS3-SUP05-004', 'Penerimaan Tamu Di PT INTI', 'QMS3-SUP05-004_Penerimaan_Tamu_Di_PT_INTI.pdf', '2019-01-17', 'Publish'),
('DK-0345', 'KD-0020', 'QMS4-SUP05-010-02', 'Pemeliharaan dan Perawatan Sistem Proteksi Kebakaran Bangunan Gedung', 'QMS4-SUP05-010-02_Pemeliharaan_Perawatan_Sistem_Proteksi_Kebakaran_Bangunan_Gedung.pdf', '2019-01-17', 'Publish'),
('DK-0346', 'KD-0020', 'QMS4-SUP05-010-06', 'Pemeliharaan Dan Perawatan Sistem Elektrikal', 'QMS4-SUP05-010-06_Pemeliharaan_Perawatan_Sistem_Elektrikal.pdf', '2019-01-17', 'Publish'),
('DK-0347', 'KD-0020', 'QMS3-SUP03-032', 'Pencatatan Transaksi Akuntansi Beban Yang Masih Harus Dibayar (BYMHD) Dan Provisi Masa Garansi', 'Final_Upload_2017_QMS3-SUP03-032_BYMHD_Provisi_Masa_Garansi1.pdf', '2019-01-17', 'Publish'),
('DK-0348', 'KD-0020', 'QMS3-SUP03-054', 'Prosedur Pencatatan Transaksi Penjualan Dan Pembelian Antar SBU', 'Final_Upload_2017_QMS3-SUP03-054_Pencatatan_Transaksi_Akuntansi_Penjualan_dan_Pembelian_antar_SBU1.pdf', '2019-01-17', 'Publish'),
('DK-0349', 'KD-0020', 'QMS4-SUP05-010-10', 'PEMELIHARAAN DAN PERAWATAN KOMPONEN TATA GRAHA GEDUNG', 'QMS4-SUP05-010-010_Pemeliharaan_Perawatan_Komponen_Tata_Graha_Gedung.pdf', '2019-01-17', 'Publish'),
('DK-0350', 'KD-0020', 'QMS4-SUP05-010-13', 'Pemeliharaan dan Perawatan Komponen Struktur Bangunan Gedung', 'QMS4-SUP05-010-013_Pemeliharaan_Perawatan_Komponen_Struktur_Bangunan_Gedung.pdf', '2019-01-17', 'Publish'),
('DK-0351', 'KD-0020', 'QMS3-SUP05-010', 'PEMELIHARAAN SARANA DAN PRASARANA', 'QMS3-SUP05-010_Pemeliharaan_Sarana_Prasarana.pdf', '2019-01-17', 'Publish'),
('DK-0352', 'KD-0020', 'QMS3-SUP03-053', 'PENCATATAN TRANSAKSI AKUNTANSI PENGAKUAN PENDAPATAN BERDASARKAN METODE PERSENTASE PENYELESAIAN', 'Final_Upload_2017_QMS3-SUP03-053_Pengakuan_Pendapatan_Metode_Prosentase_Penyelesaian2.pdf', '2019-01-17', 'Publish'),
('DK-0353', 'KD-0020', 'QMS4-SUP05-010-18', 'Pemeliharaan & Perbaikan Akses Kontrol', 'QMS4-SUP05-010-018_Pemelihraan_Perbaikan_Akses_Kontrol.pdf', '2019-01-17', 'Publish'),
('DK-0354', 'KD-0020', 'QMS4-SUP05-010-15', 'Pemeliharaan dan Perawatan Komponen Ruang Luar Bangunan Gedung', 'QMS4-SUP05-010-015_Pemeliharaan_Perawatan_Komponen_Ruang_Luar_Bangunan_Gedung1.pdf', '2019-01-17', 'Publish'),
('DK-0355', 'KD-0020', 'QMS3-SUP05-002', 'LAYANAN KENDARAAN DINAS', 'QMS3-SUP05-002_Layanan_Kendaraan_Dinas1.pdf', '2019-01-17', 'Publish'),
('DK-0356', 'KD-0020', 'QMS3-SUP12-008', 'Penganugerahan Tanda Kehormatan', 'QMS3-SUP12-008_Penganugrahan_Tanda_Kehormatan.pdf', '2019-01-17', 'Publish'),
('DK-0357', 'KD-0020', 'QMS3-SUP13-012', 'Siaran Radio Internal', 'QMS3-SUP13-012_Siaran_Radio_Internal.pdf', '2019-01-17', 'Publish'),
('DK-0358', 'KD-0020', 'QMS3-SUP03-058', 'Keprotokolan Acara-Acara Internal Perusahaan', 'QMS3-SUP03-058_Keprotokolan_Acara-Acara_Internal_INTI1.pdf', '2019-01-17', 'Publish'),
('DK-0359', 'KD-0020', 'QMS4-SUP05-010-08', 'PEMELIHARAAN DAN PERAWATAN SISTEM PLAMBING BANGUNAN GEDUNG', 'QMS4-SUP05-010-08_Pemeliharaan_Perawatan_Plambing_Bangunan_Gedung1.pdf', '2019-01-17', 'Publish'),
('DK-0360', 'KD-0020', 'QMS4-SUP05-010-03', 'PEMELIHARAAN DAN PERAWATAN ALAT PEMADAM API RINGAN (APAR)', 'QMS4-SUP05-010-03_Pemeliharaan_Perawatan_Alat_Pemadam_Api_Ringan_(APAR)1.pdf', '2019-01-17', 'Publish'),
('DK-0361', 'KD-0020', 'QMS3-SUP03-031', 'PENCATATAN TRANSAKSI AKUNTANSI SIKLUS CONTROLLING AND PROFITABILITY ANALYSIS (COPA)', 'Final_Upload_2017_QMS3-SUP03-031_Pencatatan_Transaksi_Akuntansi_COPA2.pdf', '2019-01-17', 'Publish'),
('DK-0362', 'KD-0020', 'QMS4-SUP-05-010-11', 'PEMELIHARAAN & PERBAIKAN INSTALASI ALARM KEBAKARAN AUTOMATIK', 'QMS4-SUP05-010-011_Pemeliharaan_Perbaikan_Instalasi_Alarm_Kebakaran_Automatik.pdf', '2019-01-17', 'Publish'),
('DK-0363', 'KD-0020', 'QMS4-SUP05-010-14', 'PEMELIHARAAN DAN PERAWATAN KOMPONEN ARSITEKTUR BANGUNAN GEDUNG', 'QMS4-SUP05-010-014_Pemeliharaan_Perawatan_Komponen_Arsitektur_Bangunan_Gedung.pdf', '2019-01-17', 'Publish'),
('DK-0364', 'KD-0020', 'QMS4-OPS19-045-07', 'Load Software PC ALL IN ONE (Produk ADS-B)', 'QMS4-OPS19-045-07_Load_Software_PC_ALL_IN_ONE1.pdf', '2019-01-17', 'Publish'),
('DK-0365', 'KD-0020', 'QMS4-OPS19-045-09', 'Tes Processing Unit (Produk ADS-B)', 'QMS4-OPS19-045-09_TES_PROCESSING_UNIT.pdf', '2019-01-17', 'Publish'),
('DK-0366', 'KD-0020', 'QMS4-OPS19-045-01', 'Perakitan Site Monitor (Produk ADS-B)', 'QMS4-OPS19-045-01_PERAKITAN_SITE_MONITOR_(2)1.pdf', '2019-01-17', 'Publish'),
('DK-0367', 'KD-0020', 'QMS4-OPS19-045-03', 'Perakitan Instalasi Baki (Produk ADS-B)', 'QMS4-OPS19-045-03_Perakitan_Instalasi_Baki1.pdf', '2019-01-17', 'Publish'),
('DK-0368', 'KD-0020', 'QMS4-OPS19-045-05', 'Load Software LCMS dan Processing Unit (Produk ADS-B)', 'QMS4-OPS19-045-05_Load_Software_LCMS_dan_Processing_Unit2.pdf', '2019-01-17', 'Publish'),
('DK-0369', 'KD-0020', 'QMS3-SUP03-057', 'KEPROTOKOLAN UPACARA APEL BENDERA DAN HARI-HARI BESAR NASIONAL', 'QMS3-SUP03-057_Keprotokolan_Upacara_Apel_Bendera_Dan_Hari-Hari_Besar_Nasional1.pdf', '2019-01-17', 'Publish'),
('DK-0370', 'KD-0020', 'QMS3-EVL02-006', 'SURVEI PENGUKURAN TINGKAT KEMATANGAN (MATURITY LEVEL) IMPLEMENTASI MANAJEMEN RISIKO', 'Prosedur_Pengukuran_Maturity_Level_ManRisk3.pdf', '2019-01-17', 'Publish'),
('DK-0371', 'KD-0020', 'QMS4-OPS19-045-13', 'Tes Receiver (Produk ADS-B)', 'QMS4-OPS19-045-13_TES_RECEIVER.pdf', '2019-01-17', 'Publish'),
('DK-0372', 'KD-0020', 'QMS4-OPS19-045-15', 'TES KABEL (PRODUK ADS-B)', 'QMS4-OPS19-045-15_TES_Kabel.pdf', '2019-01-17', 'Publish'),
('DK-0373', 'KD-0020', 'QMS4-SUP05-004-01', 'PERMOHONAN IZIN KERJA', 'QMS4-SUP05-004-01-_PERMOHONAN_IZIN_KERJA.pdf', '2019-01-17', 'Publish'),
('DK-0374', 'KD-0020', 'QMS4-OPS19-045-11', 'Tes Laptop LCMS CLient (Produk ADS-B)', 'QMS4-OPS19-045-11_TES_LAPTOP_LCMS_CLIENT_(1).pdf', '2019-01-17', 'Publish'),
('DK-0375', 'KD-0010', 'QMS4-SUO20-009-01', 'PETUNJUK KERJA PELAKSANAAN PEMELIHARAAN RUTIN SARANA REPAIR DAN PRODUKSI', 'QMS4-OPS20-009-01_PELAKSANAAN_PEMELIHARAAN_RUTIN_SARANA_REPAIR_DAN_PRODUKSI.PDF', '2019-01-17', 'Publish'),
('DK-0376', 'KD-0010', 'QMS4-OPS27-003-01', 'PENANGANAN ATAU PROSES REPAIR MODUL', 'QMS4-OPS27-003-01_PENANGANAN_ATAU_PROSES_REPAIR_MODUL.PDF', '2019-01-17', 'Publish'),
('DK-0377', 'KD-0010', 'QMS4-OPS27-003-03', 'PENGETESAN & PERBAIKAN MODUL SDH ALCATEL SECARA ONLINE', 'QMS4-OPS27-003-03_PENGETESAN_PERBAIKAN_MODUL_SDH_ALCATEL_SECARA_ONLINE.PDF', '2019-01-17', 'Publish'),
('DK-0378', 'KD-0010', 'QMS4-OPS27-003-05', 'PERBAIKAN MODUL RECTIFIER ELTEK VALERE', 'QMS4-OPS27-003-05_PERBAIKAN_MODUL_RECTIFIER_ELTEK_VALERE.PDF', '2019-01-17', 'Publish'),
('DK-0379', 'KD-0010', 'QMS4-OPS27-003-07', 'PENANGANAN MATERIAL LIMBAH REPAIR', 'QMS4-OPS27-003-07_PENANGANAN_MATERIAL_LIMBAH_REPAIR.PDF', '2019-01-17', 'Publish'),
('DK-0380', 'KD-0010', 'QMS4-OPS27-003-18', 'PERBAIKAN SCU', 'QMS4-OPS27-003-18_PERBAIKAN_SCU.PDF', '2019-01-17', 'Publish'),
('DK-0381', 'KD-0010', 'QMS4-OPS27-003-20', 'MONITORING REPAIR', 'QMS4-OPS27-003-20_MONITORING_REPAIR.PDF', '2019-01-17', 'Publish'),
('DK-0382', 'KD-0020', 'QMS4-OPS27-003-22', 'PELAKSANAAN UJI KUALITAS HASIL REPAIR', 'QMS4-OPS27-003-22_PELAKSANAAN_UJI_KUALITAS_HASIL_REPAIR.PDF', '2019-01-17', 'Publish'),
('DK-0383', 'KD-0010', 'QMS4-SUP09-001-01', 'KALIBRASI MULTIMETER', 'QMS4-SUP09-001-01_KALIBRASI_MULTIMETER.PDF', '2019-01-17', 'Publish'),
('DK-0384', 'KD-0020', 'QMS40SUP09-001-04', 'KALIBRASI OSCILLOSCOPE', 'QMS4-SUP09-001-04_KALIBRASI_OSCILLOSCOPE.PDF', '2019-01-17', 'Publish'),
('DK-0385', 'KD-0020', 'QMS4-SUP09-001-05', 'PENGOLAHAN DATA DAN ESTIMASI KETIDAKPASTIAN PENGUKURAN', 'QMS4-SUP09-001-05_PENGOLAHAN_DATA_DAN_ESTIMASI_KETIDAKPASTIAN_PENGUKURAN.PDF', '2019-01-17', 'Publish'),
('DK-0386', 'KD-0020', 'QMS4-SUP09-001-07', 'KALIBRASI COUNTER/UNIVERSAL COUNTER', 'QMS4-SUP09-001-07_KALIBRASI_COUNTER_UNIVERSAL_COUNTER.PDF', '2019-01-17', 'Publish'),
('DK-0387', 'KD-0020', 'QMS3-OPS16-004', 'PENCETAKAN ULANG DOKUMEN PENGADAAN', 'QMS3-OPS16-004_PENCETAKAN_ULANG_DOKUMEN_PENGADAAN.pdf', '2019-01-17', 'Publish'),
('DK-0388', 'KD-0020', 'QMS4-OPS19-045-02', 'PERAKITAN PROCESSING UNIT (Produk ADS-B)', 'QMS4-OPS19-045-02_PERAKITAN_PROCESSING_UNIT2.pdf', '2019-01-17', 'Publish'),
('DK-0389', 'KD-0020', 'QMS4-OPS19-045', 'PROSEDUR KERJA (Produk ADS-B)', 'QMS3-OPS19-045_PROSEDUR_KERJA_ADSB1.pdf', '2019-01-17', 'Publish'),
('DK-0390', 'KD-0020', 'QMS3-SUP13-011', 'PENERBITAN BULETIN INTERNAL', 'QMS3-SUP13-011_Penerbitan_Buletin_Internal1.pdf', '2019-01-17', 'Publish'),
('DK-0391', 'KD-0020', 'QMS3-SUP13-009', 'PEMUATAN BERITA/UPLOAD KONTEN JARING', 'QMS3-SUP13-009_Pemuatan_Berita_atau_Upload_Konten_Jaring1.pdf', '2019-01-17', 'Publish'),
('DK-0392', 'KD-0020', 'QMS3-SUP03-059', 'ADMINISTRASI KEHUMASAN', 'QMS3-SUP03-059_Administrasi_Kehumasan3.pdf', '2019-01-17', 'Publish'),
('DK-0393', 'KD-0020', 'LAPORAN CSI 2017', 'Customer Satisfaction Index Tahun 2017', 'laporan_pengesahan_CSI_20171.pdf', '2019-01-17', 'Publish'),
('DK-0394', 'KD-0020', 'QMS4-OPS19-045', 'PROSEDUR KERJA (Produk ADS-B)', 'QMS3-OPS19-045_PROSEDUR_KERJA_ADSB2.pdf', '2019-01-17', 'Publish'),
('DK-0395', 'KD-0020', 'QMS3-OPS16-005', 'PENGADAAN BARANG DAN ATAU JASA', 'QMS3-OPS16-005_PENGADAAN_BARANG_DAN_ATAU_JASA_(1).pdf', '2019-01-17', 'Publish'),
('DK-0396', 'KD-0023', 'KN.12/2018', 'PEDOMAN MANAJEMEN RISIKO DI LINGKUNGAN PERUSAHAAN', 'KN_012_20184.pdf', '2018-07-11', 'Publish'),
('DK-0397', 'KD-0020', 'qms4-ops19-045-06', 'Load Software Laptop LCMS Client (Produk ADS-B)', 'QMS4-OPS19-045-06_Load_Software_Laptop_LCMS_Client.pdf', '2019-01-17', 'Publish'),
('DK-0398', 'KD-0021', '679/KP.05/020800/2018', 'NOTA INTERN LAPORAN MATURITY LEVEL MANAJEMEN RISIKO 2018', 'Laporan_Maturity_Level_Manajemen_Risiko_20182.pdf', '2019-01-17', 'Publish'),
('DK-0399', 'KD-0025', 'QMS1-PLA02-002', 'SASARAN K3 & LINGKUNGAN PT. INDUSTRI TELEKOMUNIKASI INDONESIA', 'Sasaran_dan_Program_Kerja_K3L.pdf', '2019-01-17', 'Publish'),
('DK-0400', 'KD-0020', 'QMS4-OPS19-045-08', 'TES SITE MONITOR (Produk ADS-B)', 'QMS4-OPS19-045-08_TES_SITE_MONITOR.pdf', '2019-01-17', 'Publish'),
('DK-0401', 'KD-0020', 'QMS4-OPS19-045-10', 'TES GPS DAN SPLITTER (PRODUK ADS-B)', 'QMS4-OPS19-045-10_TES_GPS_DAN_SPLITTER_new.pdf', '2019-01-17', 'Publish'),
('DK-0402', 'KD-0020', 'QMS4-OPS19-045-06', 'LOAD SOFTWARE LAPTOP LCMS CLIENT (PRODUK ADS-B)', 'QMS4-OPS19-045-06_Load_Software_Laptop_LCMS_Client1.pdf', '2019-01-17', 'Publish'),
('DK-0403', 'KD-0020', 'QMS4-OPS19-045-04', 'PROSEDUR CLONE DAN RESTORE SITE MONITOR (Produk ADS-B)', 'QMS4-OPS19-045-04_PROSEDUR_CLONE_DAN_RESTORE_SITE_MONITOR2.pdf', '2019-01-17', 'Publish'),
('DK-0404', 'KD-0020', 'QMS3-OPS02-010', 'BEKERJA PADA KETINGGIAN', 'Prosedur_bekerja_pada_ketinggian1.pdf', '2019-01-17', 'Publish'),
('DK-0405', 'KD-0020', 'QMS3-SUP13-010', 'KEPROTOKOLAN KUNJUNGAN TAMU PERUSAHAAN', 'QMS3-SUP13-010_Keprotokolan_Kunjungan_Tamu_Perusahaan.pdf', '2019-01-17', 'Publish'),
('DK-0406', 'KD-0020', 'QMS4-OPS19-045-16', 'TES FAT (Produk ADS-B)', 'QMS4-OPS19-045-16_TES_FAT.pdf', '2019-01-17', 'Publish'),
('DK-0407', 'KD-0020', 'QMS4-OPS19-045-14', 'TES LCMS (PRODUK ADS-B)', 'QMS4-OPS19-045-14_TES_LCMS.pdf', '2019-01-17', 'Publish'),
('DK-0408', 'KD-0020', 'QMS4-OPS19-045-12', 'TES LAPTOP PC ALL IN ONE (Produk ADS-B)', 'QMS4-OPS19-045-12_TES_LAPTOP_PC_ALL_IN_ONE.pdf', '2019-01-17', 'Publish'),
('DK-0409', 'KD-0020', 'QMS5-IPR04-001-001', 'LAPORAN HASIL EVALUASI SURVEY PERMAHAMAN SMT (SISTEM MANAJEMEN TERINTEGRASI) PT INTI(Persero) TAHUN 2018', 'Laporan_Evaluasi_Kebijakan_SMT.pdf', '2019-01-17', 'Publish'),
('DK-0410', 'KD-0020', 'No.I.021/KP.03/020800/2019', 'Laporan Manajemen Risiko TW IV 2018 NOTA INTERN', 'Laporan_Manajemen_Risiko_TW_IV_2018.pdf', '2019-01-17', 'Publish'),
('DK-0411', 'KD-0020', 'QMS3-OPS16-002', 'MITRA USAHA TERSELEKSI (MUT)', 'QMS3-OPS16-002_MITRA_USAHA_TERSELEKSI_(_MUT).pdf', '2019-01-17', 'Publish'),
('DK-0412', 'KD-0020', 'QMS-OPS16-003', 'KELENGKAPAN PURCHASE REQUISITION (PR)', 'QMS3-OPS16-003_KELENGKAPAN_PURCHASE_REQUISTION_(PR).pdf', '2019-01-17', 'Publish'),
('DK-0413', 'KD-0020', 'QMS4-SUP09-002-01', 'PELAKSANAAN VERIFIKASI ALAT UKUR HASIL KALIBRASI', 'QMS4-SUP09-002-01_PELAKSANAAN_VERIFIKASI_ALAT_UKUR_HASIL_KALIBRASI.PDF', '2019-01-17', 'Publish'),
('DK-0414', 'KD-0020', 'QMS4-SUP09-001-06', 'KALIBRASI GROUNDING TESTER', 'QMS4-SUP09-001-06_KALIBRASI_GROUNDING_TESTER.PDF', '2019-01-17', 'Publish'),
('DK-0415', 'KD-0020', 'QMS4-SUP09-001-02', 'KALIBRASI CLAMP METER', 'QMS4-SUP09-001-02_KALIBRASI_CLAMP_METER.PDF', '2019-01-17', 'Publish'),
('DK-0416', 'KD-0020', 'QMS4-OPS27-003-23', 'PENGENDALIAN KOMPONEN REPAIR', 'QMS4-OPS27-003-23_PENGENDALIAN_KOMPONEN_REPAIR.PDF', '2019-01-17', 'Publish'),
('DK-0417', 'KD-0020', 'QMS4-OPS27-003-21', 'PENYELESAIAN BAST HASIL REPAIR', 'QMS4-OPS27-003-21_PENYELESAIAN_BAST_HASIL_REPAIR.PDF', '2019-01-17', 'Publish'),
('DK-0418', 'KD-0020', 'QMS4-OPS27-003-19', 'SERAH TERIMA HASIL REPAIR', 'QMS4-OPS27-003-19_SERAH_TERIMA_HASIL_REPAIR.PDF', '2019-01-17', 'Publish'),
('DK-0419', 'KD-0020', 'QMS4-OPS27-003-06', 'PENGETESAN & PERBAIKAN MODUL MSAN HUAWEI', 'QMS4-OPS27-003-06_PENGETESAN_PERBAIKAN_MODUL_MSAN_HUAWEI.PDF', '2019-01-17', 'Publish'),
('DK-0420', 'KD-0020', 'QMS4-OPS27-003-04', 'PELAKSANAAN KEGIATAN REPAIR RADIO MW SRAL', 'QMS4-OPS27-003-04_PELAKSANAAN_KEGIATAN_REPAIR_RADIO_MW_SRAL.PDF', '2019-01-17', 'Publish'),
('DK-0421', 'KD-0020', 'QMS4-OPS27-003-02', 'PROSES PELAKSANAAN REPAIR IDU DAN CIM RADIO MW SAGEM', 'QMS4-OPS27-003-02_PROSES_PELAKSANAAN_REPAIR_IDU_DAN_CIM_RADIO_MW_SAGEM.PDF', '2019-01-17', 'Publish'),
('DK-0422', 'KD-0020', 'QMS4-OPS20-010-01', 'PETUNJUK KERJA PEMELIHARAAN RUTIN SOFTWARE LOADER', 'QMS4-OPS20-010-01_PEMELIHARAAN_RUTIN_SOFTWARE_LOADER.PDF', '2019-01-17', 'Publish'),
('DK-0423', 'KD-0006', 'LAPORAN', 'LAPORAN AUDIT INTERNAL DAN EVALUASI KETAATAN SISTEM MANAJEMEN TERINTEGRASI', 'Laporan_Audit_Internal_dan_Evaluasi_Ketaatan_Sistem_Manajemen_Terintegrsi_(2)1.pdf', '2019-01-17', 'Publish'),
('DK-0424', 'KD-0033', 'QMS1-PLA02-002', 'Sasaran Dan Program Kerja K3L', '2_1-Sasaran-K3L.pdf', '2018-07-18', 'Publish'),
('DK-0425', 'KD-0033', 'QMS1-PLA02-002', 'Sasaran K3 dan Lingkungan', 'SASARAN-K3-DAN-LINGKUNGAN.pdf', '2017-07-04', 'Publish'),
('DK-0426', 'KD-0034', 'QMS5-OPS05-001-01', 'Perundangan-K3-PT-INTI', 'Perundangan-K3-PT-INTI.pdf', '2018-07-18', 'Publish'),
('DK-0427', 'KD-0034', 'QMS5-OPS05-001-01', 'Perundangan Lingkungan PT INTI', 'Perundangan-Lingkungan-PT-INTI.pdf', '2018-07-18', 'Publish'),
('DK-0428', 'KD-0036', '566-84-0340', 'Bejana-Penampung-2018', 'Bejana-Penampung-2018.pdf', '2018-03-02', 'Publish'),
('DK-0429', 'KD-0036', '566-1153', 'Elevator', 'ELEVATOR-2018.pdf', '2018-02-28', 'Publish'),
('DK-0430', 'KD-0036', '566-81-0655', 'Forklift', 'FORKLIFT-2018.pdf', '2018-02-28', 'Publish'),
('DK-0431', 'KD-0036', '566-1162', 'Instalasi Listrik', 'INSTALASI-LISTRIK-2018.pdf', '2018-03-02', 'Publish'),
('DK-0432', 'KD-0036', '566-1160-III.IL.PTR-UPD.WIL.IV-2018', 'Instalasi Penyalur Petir', 'INSTALASI-PENYALUR-PETIR-2018.pdf', '2018-02-28', 'Publish'),
('DK-0433', 'KD-0036', '566-1160-III.IL.IPK-UPTD.WIL.IV-2018', 'Instalasi Proteksi Kebakaran', 'INSTALASI-PROTEKSI-KEBAKARAN-20180001.pdf', '2018-03-02', 'Publish'),
('DK-0434', 'KD-0036', '566-1160-III.IL.MD-UPD.WIL.IV-2018', 'Motor Diesel', 'MOTOR-DIESEL-2018.pdf', '2018-02-28', 'Publish'),
('DK-0435', 'KD-0036', 'OSH-00452', 'OSHSAS-18001', 'OHSAS-18001-PT-INTI.pdf', '2017-08-16', 'Publish'),
('DK-0436', 'KD-0036', 'EMS-00270', 'ISO-14001-PT-INTI', 'ISO-14001-PT-INTI.pdf', '2017-08-16', 'Publish'),
('DK-0437', 'KD-0036', '0908606', 'Sertifikat Ahli K3 Konstruksi Madya - Andini Widya', '3_4_3-Sertifikat-Ahli-K3-Konstruksi-Madya-Andini-Widya.pdf', '2017-11-29', 'Publish'),
('DK-0438', 'KD-0036', '143-2016', 'Penghargaan Kecelakaan Nihil', 'Sertifikat-SMK-3-PT-INTI.pdf', '2016-05-16', 'Publish'),
('DK-0439', 'KD-0036', 'KEP.P.1343-NEKER-BINWASK3-V-2016', 'Sertifikat Ahli K3 - Kasino Martowinangun', '3_5_1-Sertifikat-Ahli-K3-Kasino-Martowinangun.pdf', '2016-05-20', 'Publish'),
('DK-0440', 'KD-0036', '48-PPK&K3K3A-U2O1S', 'Lisensi K3 Teknisi Listrik - Jajang Sukanda', '3_4_2-Lisensi-K3-Teknisi-Listrik-Jajang-Sukanda.pdf', '2016-05-20', 'Publish'),
('DK-0441', 'KD-0036', '48/PPK&K3A-VII-2015', '	Lisensi K3 Teknisi Listrik - Agus Suhayat', '3_4_1-Lisensi-K3-Teknisi-Listrik-Agus-Suhayat.pdf', '2016-05-20', 'Publish'),
('DK-0442', 'KD-0036', '3.2.d-SIO-SIM-FORKLIFT', 'SIM - FORKLIFT', '3_2_d-SIO-SIM-FORKLIFT.pdf', '2011-03-31', 'Publish'),
('DK-0443', 'KD-0036', '2018', 'sertifikat materi dasar K3 dan keselamatan kerja 2018', 'sertifikat-materi-dasar-K3-dan-keselamatan-kerja.pdf', '2018-11-08', 'Publish'),
('DK-0444', 'KD-0036', ' KEP.01027 / M / PPK / AK3-LIST/ lX / 2018', 'Angga Adhi_Ahli K3 Listrik dan SKP', 'Angga-Adhi_Ahli-K3-Listrik-dan-SKP1.pdf', '2018-09-05', 'Publish'),
('DK-0445', 'KD-0036', 'KEP.P.1343-NEKER-BINWASK3-V-2019', 'Ahli K3 Umum - Kasino Martowinangun', 'Kartu-Tanda-Kewenangan-Ahli-K3-Umum-Kasino-Martowinangun.pdf', '2019-05-20', 'Publish'),
('DK-0446', 'KD-0036', '5315/PK3/AJ/32/2018/P2', 'Kartu Tanda Kewenangan Ahli K3 Umum - Kasino Martowinangun', 'Ahli-K3-Umum-Kasino-Martowinangun.pdf', '2019-05-20', 'Publish'),
('DK-0447', 'KD-0038', '2019', 'Jadwal Konsultasi K3L', 'Jadwal-Konsultasi-K3L.pdf', '2019-12-31', 'Publish'),
('DK-0448', 'KD-0039', 'QMS3 PLA02 003', 'Penanganan Materi B3 dan Limbah B3', 'Penanganan-Material-B3-dan-Limbah-B3.pdf', '2017-07-06', 'Publish'),
('DK-0449', 'KD-0039', 'QMS3 PLA02 004', 'Identifikasi Bahaya dan Pengendalian Risiko K3', 'QMS3-PLA02-004-IDENTIFIKASI-BAHAYA-DAN-PENGENDALIAN-RISIKO-K3-1.pdf', '2018-07-16', 'Publish'),
('DK-0450', 'KD-0039', 'QMS3 PLA02 010', 'Prosedur Penanggulangan Kebakaran', 'PROSEDUR-PENANGGULANGAN-KEBAKARAN-28QMS3-PLA02-01029.pdf', '2018-08-05', 'Publish'),
('DK-0451', 'KD-0039', 'QMS3 PLA02 014', 'Pemeriksaan dan Pemeliharaan Alat Pelindung Diri (APD)', 'QMS3-PLA02-014-Pemeriksaan-dan-pemeliharaan-Alat-Pelindung-Diri.pdf', '2018-08-27', 'Publish'),
('DK-0452', 'KD-0039', 'QMS3 SUP06 001', 'Kebersihan, Kerapihan dan Kenyamanan Lingkungan Kerja', '11_Kebersihan2CKerapihan-dan-Kenyamanan-Lingkungan-Kerja.pdf', '2017-04-26', 'Publish'),
('DK-0453', 'KD-0039', 'QMS3 SUP12 004', 'Pelatihan P3K', 'PELATIHAN-P3K-28QMS3-SUP12-00429.pdf', '2018-07-05', 'Publish'),
('DK-0454', 'KD-0039', 'QMS3 SUP13 002', 'Prosedur Konsultasi K3', 'PROSEDUR-KONSULTASI-K3-28QMS3-SUP13-00229.pdf', '2018-08-05', 'Publish'),
('DK-0455', 'KD-0039', 'QMS3 OPS03 001', 'Penanganan dan Pemulihan Keadaan Darurat di Lingkungan Gedung Perkantoran', 'QMS3-OPS03-001-PENANGANAN-DAN-PEMULIHAN-KEADAAN-DARURAT-DI-LINGKUNGAN-GEDUNG-PERKANTORAN.pdf', '2018-10-07', 'Publish'),
('DK-0456', 'KD-0039', 'QMS3 OPS05 001', 'Identifikasi Peraturan Perundangan dan Persyaratan Lainnya Terkait K3 dan Lingkungan', '30_-Identifikasi-Peraturan-Perundangan-dan-Persyaratan-lainnya-terkait-K3-26-Lingkungan.pdf', '2017-04-26', 'Publish'),
('DK-0458', 'KD-0039', 'QMS3 EVL02 004', 'Penyelidikan Kecelakaan dan Penyakit Akibat Kerja', 'PENYELIDIKAN-KECELAKAAN-DAN-PENYAKIT-AKIBAT-KERJA-QMS3-EVL02-004.pdf', '2018-08-05', 'Publish'),
('DK-0459', 'KD-0039', 'QMS3 IPR03 002', 'Prosedur Investigasi Kejadian', 'QMS3-IPR03-002-Prosedur-Investigasi-Kejadian.pdf', '2018-08-28', 'Publish'),
('DK-0460', 'KD-0039', 'QMS3 IPR03 003', 'Prosedur Pelaporan Insiden Kecelakaan Kerja', 'PROSEDUR-PELAPORAN-INSIDEN-KECELAKAAN-KERJA-28QMS3-IPR03-00329.pdf', '2018-05-08', 'Publish'),
('DK-0461', 'KD-0039', 'QMS3-EVL05-005', 'Inspeksi K3 dan Pemantauan Lingkungan Kerja', 'Inspeksi-K3-dan-Pemantauan-Lingkungan-Kerja-2019.pdf', '2019-04-03', 'Publish'),
('DK-0462', 'KD-0039', 'QMS3-IPR03-003', 'Prosedur Pelaporan Insiden Kecelakaan Kerja', 'QMS3-IPR03-003-Prosedur-Pelaporan-Insiden-Kecelakaan-Kerja-1.pdf', '2019-03-26', 'Publish'),
('DK-0463', 'KD-0039', 'QMS3-OPS05-001', 'Identifikasi Peraturan perundangan dan persyaratan lainnya terkait K3 dan Lingkungan', '4_1-_a2-Identifikasi-Peraturan-Perundangan-dan-Persyaratan-lainnya-terkait-K3-Lingkungan-.pdf', '2017-04-26', 'Publish'),
('DK-0464', 'KD-0026', 'QMS4-SUP05-010-03', 'Pemeliharaan & Perawatan Alat Pemadam Api Ringan', 'QMS4-03-Pemeliharaan-Perawatan-Alat-Pemadam-Api-Ringan-APAR.pdf', '2017-10-18', 'Publish'),
('DK-0465', 'KD-0026', 'QMS4-SUP05-010-02', 'Pemeliharaan Perawatan Sistem Proteksi Kebakaran Bangunan Gedung', 'QMS4-02-Pemeliharaan-Perawatan-Sistem-Proteksi-Kebakaran-Bangunan-Gedung.pdf', '2017-10-18', 'Publish'),
('DK-0466', 'KD-0026', 'QMS4-SUP05-010-06', 'Pemeliharaan & Perawatan Sistem Elektrikal', 'QMS4-06-Pemeliharaan-Perawatan-Sistem-Elektrikal.pdf', '2017-10-18', 'Publish'),
('DK-0467', 'KD-0026', 'QMS4-SUP05-010-08', 'Pemeliharaan & Perawatan Sistem Plambing Bangunan Gedung', 'QMS4-013-Pemeliharaan-Perawatan-Komponen-Struktur-Bangunan-Gedung.pdf', '2017-10-20', 'Publish'),
('DK-0468', 'KD-0026', 'QMS4-SUP05-010-10', 'Pemeliharaan & Perawatan Komponen Tata Graha Gedung', 'QMS4-011-Pemeliharaan-Perbaikan-Instalasi-Alarm-Kebakaran-Automatik.pdf', '2017-10-19', 'Publish'),
('DK-0469', 'KD-0026', 'QMS4-SUP05-010-11', 'Pemeliharaan & Perbaikan Instalasi Alarm Kebakaran Automatik', 'QMS4-010-Pemeliharaan-Perawatan-Komponen-Tata-Graha-Gedung.pdf', '2017-10-19', 'Publish'),
('DK-0470', 'KD-0026', 'QMS4-SUP05-010-13', 'Pemeliharaan & Perawatan Komponen Struktur Bangunan Gedung', 'QMS4-08-Pemeliharaan-Perawatan-Plambing-Bangunan-Gedung.pdf', '2017-10-19', 'Publish'),
('DK-0471', 'KD-0026', 'QMS4-SUP05-010-14', 'Pemeliharaan & Perawatan Komponen Arsitektur Bangunan Gedung', 'QMS4-017-Pemeliharaan-_-Perawatan-Sistem-Proteksi-Kebakaran-Bangunan-Gedung.pdf', '2017-10-20', 'Publish'),
('DK-0472', 'KD-0026', 'QMS4-SUP05-010-15', 'Pemeliharaan & Perawatan Komponen Ruang Luar Bangunan Gedung', 'QMS4-015-Pemeliharaan-_-Perawatan-Komponen-Ruang-Luar-Bangunan-Gedung.pdf', '2017-10-20', 'Publish'),
('DK-0473', 'KD-0026', 'QMS4-SUP05-010-17', 'Pemeliharaan & Perawatan Sistem Proteksi Kebakaran Bangunan Gedung', 'QMS4-014-Pemeliharaan-Perawatan-Komponen-Arsitektur-Bangunan-Gedung.pdf', '2017-10-20', 'Publish'),
('DK-0474', 'KD-0026', 'QMS4-SUP05-010-018', 'Pemelihraan & Perbaikan Akses Kontrol', 'QMS4-018-Pemelihraan-Perbaikan-Akses-Kontrol.pdf', '2017-10-20', 'Publish'),
('DK-0475', 'KD-0026', 'QMS4-OPS03-001-001', 'Penanganan Tumpahan Limbah B3', 'Penanganan-tumpahan-limbah-B3.pdf', '2018-08-06', 'Publish'),
('DK-0476', 'KD-0026', 'QMS4-SUP05-004-01', 'PERMOHONAN IZIN KERJA', 'QMS4-SUP05-004-01-PERMOHONAN-IZIN-KERJA-1.pdf', '2018-11-05', 'Publish'),
('DK-0477', 'KD-0027', 'QMS5-PLA02-004-01', 'Perawatan dan Pengoperasian Fasilitas Perkantoran', 'IBPR-OTP-EVALUASI.pdf', '2018-07-16', 'Draft'),
('DK-0478', 'KD-0027', 'QMS5-PLA02-005-01', 'Aspek Lingkungan dan IBPR Produksi', 'Aspek-Lingkungan-dan-IBPR-Produksi.pdf', '2018-08-10', 'Publish'),
('DK-0479', 'KD-0027', 'QMS5-PLA02-005-01', '	Aspek Lingkungan dan IBPR SEKPER', 'Aspek-Lingkungan-dan-IBPR-SEKPER.pdf', '2018-10-09', 'Publish'),
('DK-0480', 'KD-0027', 'QMS5-PLA02-005-01', 'Aspek Lingkungan IT&Umum Bag IT Service (TW IV 2018)', 'Aspek-Lingkungan-ITUmum-Bag-IT-Service-TW-IV-2018.pdf', '2018-10-11', 'Publish'),
('DK-0481', 'KD-0027', 'QMS5-PLA02-005-01', 'Aspek Lingkungan IT&Umum Bag Umum (TW IV 2018)', 'Aspek-Lingkungan-ITUmum-Bag-Umum-TW-IV-2018.pdf', '2018-11-13', 'Publish'),
('DK-0482', 'KD-0027', 'QMS5-PLA02-005-01', 'Aspek Lingkungan IT&Umum Bag Umum (TW IV 2018)', 'aspek-lingkungan-penting-Bangbispro-TW-IV-2018.pdf', '2018-11-13', 'Publish'),
('DK-0483', 'KD-0027', 'QMS5-PLA02-005-01', 'aspek lingkungan penting Bangbispro (TW IV 2018)', 'Aspek-Lingkungan-Penting-SBU-DDS.pdf', '2018-10-04', 'Publish'),
('DK-0484', 'KD-0027', 'QMS5-PLA02-005-01', 'Aspek Lingkungan Penting SBU DDS', 'Aspek-Lingkungan-Penting-SBU-DDS1.pdf', '2018-10-12', 'Publish'),
('DK-0485', 'KD-0027', 'QMS5-PLA02-005-01', 'Aspek Lingkungan Penting SBU SE', 'Aspek-Lingkungan-Penting-SBU-SE.pdf', '2018-10-12', 'Publish'),
('DK-0486', 'KD-0027', 'QMS5-PLA02-005-01', 'Aspek Lingkungan SBU BB', 'Aspek-Lingkungan-SBU-BB.pdf', '2018-10-24', 'Publish'),
('DK-0487', 'KD-0027', 'QMS5-PLA02-004-01', 'BPR Bangbispro (TW IV 2018)', 'IBPR-Bangbispro-TW-IV-2018.pdf', '2018-10-04', 'Publish'),
('DK-0488', 'KD-0027', 'QMS5-PLA02-004-01', 'IBPR dan Aspek Lingkungan Penting HCMQ (TW IV 2018)', 'IBPR-OTP-EVALUASI1.pdf', '2018-10-10', 'Publish'),
('DK-0489', 'KD-0027', 'QMS5-PLA02-004-01', 'IBPR IT&Umum Bag IT Service (TW IV 2018)', 'Aspek-Lingkungan-dan-IBPR-Produksi1.pdf', '2018-10-11', 'Publish'),
('DK-0490', 'KD-0027', 'QMS5-PLA02-004-01', 'IBPR IT&UMUM BAGIAN UMUM (TW IV 2018)', 'Aspek-Lingkungan-dan-IBPR-Produksi2.pdf', '2018-07-09', 'Publish'),
('DK-0491', 'KD-0027', 'QMS5-PLA02-004-01', 'IBPR SBU BB', 'Aspek-Lingkungan-ITUmum-Bag-IT-Service-TW-IV-20181.pdf', '2018-10-24', 'Publish'),
('DK-0492', 'KD-0027', 'QMS5-PLA02-004-01', 'IBPR SBU DDS', 'Aspek-Lingkungan-ITUmum-Bag-Umum-TW-IV-20181.pdf', '2018-10-13', 'Publish'),
('DK-0493', 'KD-0027', 'QMS5-PLA02-004-01', 'IBPR SBU SE Administrasi Perkantoran', 'IBPR-SBU-SE-Administrasi-Perkantoran.pdf', '2018-10-24', 'Publish'),
('DK-0494', 'KD-0027', 'QMS5-PLA02-004-01	', 'IBPR SBU SE Converter Kit', 'IBPR-SBU-SE-Converter-Kit.pdf', '2018-10-24', 'Publish'),
('DK-0495', 'KD-0027', 'QMS5-PLA02-004-01', 'IBPR SBU SE lengkap', 'IBPR-SBU-SE-lengkap.pdf', '2018-10-24', 'Publish'),
('DK-0496', 'KD-0027', 'QMS5-PLA02-004-01', 'IBPR SBU SE PLTS PJUTS', 'IBPR-SBU-SE-PLTS-PJUTS.pdf', '2018-10-24', 'Publish'),
('DK-0497', 'KD-0027', 'QMS5-PLA02-004-01', 'IBPR SBU SE', 'IBPR-SBU-SE.pdf', '2018-10-24', 'Publish'),
('DK-0498', 'KD-0029', 'QMS1-PLA02-002', 'Sasaran & K3 Lingkungan PT INTI 2019', 'Sasaran-K3-Lingkungan-PT-INTI-2019.pdf', '2019-05-31', 'Publish'),
('DK-0499', 'KD-0028', 'TIM_P2K3_INTI_2017', 'Risalah Rapat Pertemuan Rutin Bulanan Tim P2K3 & Tim TDB, Rencana Simulasi TDB 2017', '1_2-Risalah-Rapat-dan-Daftar-Hadir-P2K3.pdf', '2017-12-12', 'Publish'),
('DK-0500', 'KD-0028', 'TIM_P2K3_INTI_2017', 'P2K3 Rapat Jan 17', '1_1_c_-P2K3-RAPAT-12-JAN-17.pdf', '2017-01-12', 'Publish'),
('DK-0501', 'KD-0028', 'TIM_P2K3_INTI_2017', 'P2K3 Rapat Feb 17', '1_1_c_-P2K3-RAPAT-16-PEB-17.pdf', '2017-02-16', 'Publish'),
('DK-0502', 'KD-0028', 'TIM_P2K3_INTI_2017', 'P2K3 Rapat Mar 17', '1_1_c_-P2K3-RAPAT-15-MARET-17.pdf', '2017-03-16', 'Publish'),
('DK-0503', 'KD-0028', 'TIM_P2K3_INTI_2017', 'P2K3 Rapat Apr 17', '1_1_c_-P2K3-RAPAT-13-APRIL-17.pdf', '2017-03-13', 'Publish'),
('DK-0504', 'KD-0028', 'TIM_P2K3_INTI_2019', 'Jadwal Pembahasan Rapat Rutin Tim P2K3 2019', 'Jadwal-Pembahasan-Rapat-Rutin-Tim-p2k3-2019.pdf', '2019-01-10', 'Publish'),
('DK-0505', 'KD-0028', '01/KP.02/020801/2018', 'Risalah Rapat - Review Kebijakan SMT-2018', 'Risalah-Rapat-Review-Kebijakan-SMT-2018.pdf', '2019-03-21', 'Publish'),
('DK-0506', 'KD-0028', '05/TU.02/020902/2019', 'Risalah Rapat P2K3 22022019', 'Risalah-Rapat-P2K3-22022019.pdf', '2019-02-22', 'Publish'),
('DK-0507', 'KD-0028', '05/TU.02/020902/2019', 'Risalah Rapat_Pemaparan Job Safety Analysis (JSA)', 'Risalah-Rapat_Pemaparan-Job-Safety-Analysis-JSA.pdf', '2019-05-17', 'Publish'),
('DK-0508', 'KD-0028', 'Rapat TIM P2K3', 'Daftar Hadir Sosialisasi SOP Tanggap Darurat Bencana', '3_b-Daftar-Hadir-Sosialisasi-SOP-Tanggap-Darurat-Bencana.pdf', '2018-07-16', 'Publish'),
('DK-0509', 'KD-0028', 'Daftar Hadir Rapat P2K3', 'Daftar Hadir Rapat P2K3', 'Daftar-Hadir-Rapat-P2K3.pdf', '2019-02-22', 'Publish'),
('DK-0510', 'KD-0028', 'Rapat TIM P2K3_2019', 'Jadwal Pembahasan Rapat Rutin Tim p2k3 2019-1', 'Jadwal-Pembahasan-Rapat-Rutin-Tim-p2k3-2019-1.pdf', '2019-01-20', 'Publish'),
('DK-0511', 'KD-0028', 'QMS4-PLA02-004-01', 'Petunjuk Kerja JSA', 'Petunjuk-Kerja-Pembuatan-Job-Safety-Analysis-JSA.pdf', '2019-07-05', 'Publish'),
('DK-0512', 'KD-0030', '131/2018', 'Panitia Pembina Keselamatan dan Kesehatan Kerja (P2K3)', 'SKD_131-2018-PANITIA-PEMBINA-P2K3-3.pdf', '2018-09-28', 'Publish'),
('DK-0513', 'KD-0030', '132/2018', 'Tim Keseiagaan Menghadapi Keadaan Tanggap Darurat dan Bencana', 'SKD_132-2018-TIM-TANGGAP-DARURAT-1.pdf', '2018-09-28', 'Publish'),
('DK-0514', 'KD-0030', 'KN.004/2018', 'Struktur Organisasi', 'SKD-Struktur-Organisasi.pdf', '2018-09-28', 'Publish'),
('DK-0515', 'KD-0030', 'KN.015/2017', 'Pedoman Sistem Manajemen Terintegrasi (Mutu, Keselamatan dan kesehatan Kerja serta Lingkungan)', 'SKD-1_-PEDOMAN-SMT-MutuKeselamatan-dan-Kesehatan-Kerja-serta-Lingkungan.pdf', '2017-06-20', 'Publish'),
('DK-0516', 'KD-0030', 'KN.015/2017', 'PEDOMAN SISTEM MANAJEMEN TERINTEGERASI', 'PEDOMAN-SMT-Mutu2CKeselamatan-dan-Kesehatan-Kerja-serta-Lingkungan.pdf', '2017-06-20', 'Publish'),
('DK-0517', 'KD-0037', 'QMS5-SUP17-001-01', 'Daftar Induk Dokumen', 'Daftar-Induk-Dokumen-HCMQ-1_(1).xlsx', '2020-01-03', 'Publish'),
('DK-0518', 'KD-0037', 'QMS5-SUP17-001-01', 'Daftar Induk Dokumen All PT INTI', 'DAFTAR-INDUK-DOKUMEN-ALL-PT-INTI-2018_(1).xlsx', '2020-01-03', 'Publish'),
('DK-0519', 'KD-0037', 'QMS5-SUP17-001-01', 'Daftar Induk Dokumen Div. CF', 'DAFTAR-INDUK-DOKUMEN-DIV-CF_(1).xlsx', '2020-01-03', 'Publish'),
('DK-0520', 'KD-0037', 'QMS5-SUP17-001-01', 'Daftar Induk Dokumen Div. HCMQ', 'DAFTAR-INDUK-DOKUMEN-DIV-HCMQ_(1).xlsx', '2020-01-03', 'Publish'),
('DK-0521', 'KD-0037', 'QMS5-SUP17-001-01', 'Daftar Induk Dokumen Div. IT dan Umum', 'DAFTAR-INDUK-DOKUMEN-DIV-ITUMUM_(1).xlsx', '2020-01-03', 'Publish'),
('DK-0522', 'KD-0037', 'QMS5-SUP17-001-01', 'Daftar Induk Dokumen Div. Produksi', 'DAFTAR-INDUK-DOKUMEN-DIV-PRODUKSI.xlsx', '2020-01-03', 'Publish'),
('DK-0523', 'KD-0037', 'QMS5-SUP17-001-01', 'Daftar Induk Dokumen Div. Sekper', 'DAFTAR-INDUK-DOKUMEN-DIV-SEKPER.xlsx', '2020-01-03', 'Publish'),
('DK-0524', 'KD-0037', 'QMS5-SUP17-001-01', 'Daftar Induk Dokumen SBU Broadband', 'DAFTAR-INDUK-DOKUMEN-SBU-BROADBAND.xlsx', '2020-01-03', 'Publish'),
('DK-0525', 'KD-0037', 'QMS5-SUP17-001-01', 'Daftar Induk Dokumen SBU DDS', 'DAFTAR-INDUK-DOKUMEN-SBU-DDS.xlsx', '2020-01-03', 'Publish'),
('DK-0526', 'KD-0037', 'QMS5-SUP17-001-01', 'Daftar Induk Dokumen SBU SE', 'DAFTAR-INDUK-DOKUMEN-SBU-SE.xlsx', '2020-01-03', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form`
--

CREATE TABLE IF NOT EXISTS `tbl_form` (
  `id_form` varchar(100) NOT NULL,
  `nm_form` varchar(200) NOT NULL,
  `file_form` varchar(200) NOT NULL,
  `status_form` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_form`
--

INSERT INTO `tbl_form` (`id_form`, `nm_form`, `file_form`, `status_form`) VALUES
('FR-0001', 'Tesa', 'jadwal_quintescents1.xlsx', 'Publish'),
('FR-0002', 'mncv', 'Nama.docx', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto`
--

CREATE TABLE IF NOT EXISTS `tbl_foto` (
  `id_foto` varchar(100) NOT NULL,
  `file_foto` varchar(200) NOT NULL,
  `nm_foto` varchar(200) NOT NULL,
  `status_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `file_foto`, `nm_foto`, `status_foto`) VALUES
('FT-0001', '7209ee98-a695-44eb-bb94-d360da0b4765.JPG', 'Pemasangan Kabel', 'Publish'),
('FT-0002', 'b2d11ad1-13cc-4057-bbe3-77bd84ac84bb.JPG', 'Pemasangan Kabel', 'Publish'),
('FT-0003', 'e83423a2-fa92-4bcc-9d3a-347dbd00d615.JPG', 'Pemasangan Kabel', 'Publish'),
('FT-0004', '8c8115a2-caaf-4300-a325-544df52bd408.JPG', 'Pemasangan Kabel', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` varchar(100) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nm_kategori`) VALUES
('KT-0001', 'Miss'),
('KT-0002', 'Love');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_berita` (
  `id_kategori_berita` varchar(100) NOT NULL,
  `nm_kategori_berita` varchar(200) NOT NULL,
  `desk_kategori_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_kategori_berita`
--

INSERT INTO `tbl_kategori_berita` (`id_kategori_berita`, `nm_kategori_berita`, `desk_kategori_berita`) VALUES
('KB-0001', 'Internal', 'Internal'),
('KB-0002', 'Eksternal', 'Eksternal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_dokumen`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_dokumen` (
  `id_kategori_dokumen` varchar(100) NOT NULL,
  `nm_kategori_dokumen` varchar(100) NOT NULL,
  `desk_kategori_dokumen` text NOT NULL,
  `has_child` varchar(100) NOT NULL,
  `parrent` varchar(100) DEFAULT NULL,
  `orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_kategori_dokumen`
--

INSERT INTO `tbl_kategori_dokumen` (`id_kategori_dokumen`, `nm_kategori_dokumen`, `desk_kategori_dokumen`, `has_child`, `parrent`, `orders`) VALUES
('KD-0026', 'Petunjuk Kerja', 'Petunjuk Kerja', 'No', NULL, 0),
('KD-0027', 'IBRP', 'IBRP', 'No', NULL, 0),
('KD-0028', 'Form Risalah', 'Form Risalah', 'No', NULL, 0),
('KD-0029', 'Kebijakan dan Sasaran', 'Kebijakan dan Sasaran', 'No', NULL, 0),
('KD-0030', 'SKD/KN', 'SKD/KN', 'No', NULL, 0),
('KD-0031', 'UU dan Permen', 'UU dan Permen', 'No', NULL, 0),
('KD-0032', 'Aspek Lingkungan', 'Aspek Lingkungan', 'No', NULL, 0),
('KD-0033', 'Sasaran & Program Kerja K3L', 'Sasaran & Program Kerja K3L', 'No', NULL, 0),
('KD-0034', 'Peraturan Perundang-Undangan', 'Peraturan Perundang-Undangan', 'No', NULL, 0),
('KD-0035', 'Perizinan', 'Perizinan', 'No', NULL, 0),
('KD-0036', 'Sertifikasi', 'Sertifikasi', 'No', NULL, 0),
('KD-0037', 'Daftar Induk Dokumen', 'Daftar Induk Dokumen', 'No', NULL, 0),
('KD-0038', 'Daftar Rekaman Dokumen', 'Daftar Rekaman Dokumen', 'No', NULL, 0),
('KD-0039', 'Prosedur', 'Prosedur', 'No', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_laporan`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_laporan` (
  `id_kategori_laporan` varchar(100) NOT NULL,
  `nm_kategori_laporan` varchar(100) NOT NULL,
  `desk_kategori_laporan` text NOT NULL,
  `has_child` varchar(100) NOT NULL,
  `parrent` varchar(100) NOT NULL,
  `orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_laporan`
--

INSERT INTO `tbl_kategori_laporan` (`id_kategori_laporan`, `nm_kategori_laporan`, `desk_kategori_laporan`, `has_child`, `parrent`, `orders`) VALUES
('KL-0001', 'Laporan Kagiatan', 'Laporan Kagiatan', 'No', '', 0),
('KL-0002', 'Laporan Kecelakaan', 'Laporan Kecelakaan', 'No', '', 0),
('KL-0003', 'Investigasi Kejadian', 'Investigasi Kejadian', 'No', '', 0),
('KL-0004', 'Laporan Bulanan', 'Laporan Bulanan', 'No', '', 0),
('KL-0005', 'Laporan Inspeksi K3L', 'Laporan Inspeksi K3L', 'No', '', 0),
('KL-0006', 'Laporan Hasil Audit', 'Laporan Hasil Audit', 'No', '', 0),
('KL-0007', 'Laporan Kejadian Kasus', 'Laporan Kejadian Kasus', 'No', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar_berita` (
  `id_komentar_berita` varchar(100) NOT NULL,
  `id_berita` varchar(100) NOT NULL,
  `user_komentar_berita` varchar(200) NOT NULL,
  `email_komentar_berita` varchar(200) NOT NULL,
  `isi_komentar_berita` text NOT NULL,
  `tgl_komentar_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_komentar_berita`
--

INSERT INTO `tbl_komentar_berita` (`id_komentar_berita`, `id_berita`, `user_komentar_berita`, `email_komentar_berita`, `isi_komentar_berita`, `tgl_komentar_berita`) VALUES
('KM-0001', 'BR-0001', 'Aldy Muldani', 'dieabra@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2018-10-29'),
('KM-0002', '', 'Mark Wellbeck', 'AC Software', 'Usu ei porro deleniti similique, per no consetetur necessitatibus. Ut sed augue docendi alienum, ex oblique scaevola inciderint pri, unum movet cu cum. Et cum impedit epicuri', '2018-10-30'),
('KM-0003', 'BR-0001', 'Aldy Muldani', 'dieabra@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2018-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE IF NOT EXISTS `tbl_laporan` (
  `id_laporan` varchar(100) NOT NULL,
  `id_kategori_laporan` varchar(100) NOT NULL,
  `no_laporan` varchar(100) NOT NULL,
  `nm_laporan` varchar(200) NOT NULL,
  `file_laporan` varchar(200) NOT NULL,
  `tgl_sah_laporan` date NOT NULL,
  `status_laporan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id_laporan`, `id_kategori_laporan`, `no_laporan`, `nm_laporan`, `file_laporan`, `tgl_sah_laporan`, `status_laporan`) VALUES
('LR-0001', 'KL-0001', 'QMS0-PLA02-002', 'Laporan Hasil Pengamatan dan pemantauan Identifikasi Penyakit akibat kerja', 'Laporan-Hasil-Pengamatan-dan-pemantauan-Identifikasi-Penyakit-akibat-kerja.pdf', '2018-07-11', 'Publish'),
('LR-0002', 'KL-0001', '02101/ALBFAJ', 'Laporan Hasil Analisa Limbah Cair', '4_2_c-laporan-hasil-analisa-limbah-cair.pdf', '2016-11-03', 'Publish'),
('LR-0003', 'KL-0001', '3361/PS22/020802/2018', 'Laporan Kegiatan Ahli K3 (Juli 2018 - September 2018)', 'Laporan-Kegiatan-Ahli-K3-Periode-Juli-2018-September-2018.pdf', '2018-10-04', 'Publish'),
('LR-0004', 'KL-0001', '3360/PS22/020802/2018', 'Laporan Kegiatan Ahli K3 (April 2018 - Juni 2018)', 'Laporan-Kegiatan-Ahli-K3-Periode-Aprol-2018-Juni-2018.pdf', '2018-10-04', 'Draft'),
('LR-0005', 'KL-0001', '01629/ALBFAL', 'Laporan Hasil Analisa Udara dan Air', '4_2_1-Pemantauan-dan-pengukuran-tempat-kerja.pdf', '2018-08-08', 'Publish'),
('LR-0006', 'KL-0001', 'P2K3 INTI', 'Laporan Simulasi Tanggap Darurat Bencana Desember 2018', 'Laporan-Simulasi-Tanggap-Darurat-Bencana-Desember-2018.pdf', '2018-12-21', 'Publish'),
('LR-0007', 'KL-0001', '1479/PS.22/020802/2018', 'Laporan Kegiatan Ahli K3 (Januari 2018 - Maret 2018)', '6_3_3-Laporan-Tenaga-Ahli-K3-TW1-2018.pdf', '2018-05-09', 'Publish'),
('LR-0008', 'KL-0001', '1480/PS.22/020802/2018', 'Laporan Kegiatan Ahli K3 (Oktober 2017 - Desember 2017)', '6_3_4-Laporan-Tenaga-Ahli-K3-TWIV-2017.pdf', '2018-05-09', 'Publish'),
('LR-0009', 'KL-0001', '7624/PS.22/2017', 'Laporan Kegiatan Ahli K3 (Januari 2017 - Maret 2017)', 'Laporan-Kegiatan-Ahli-K3-TW-I-Periode-Januari-2017-Maret-2017.pdf', '2017-04-04', 'Publish'),
('LR-0010', 'KL-0001', '2640/PS.22/020802/2017', 'Laporan Kegiatan Ahli K3 (April 2017 - Juni 2017)', 'Laporan-Kegiatan-Ahli-K3-TW-II-Periode-April-2017-Juni-2017.pdf', '2017-10-19', 'Publish'),
('LR-0011', 'KL-0002', 'HCMQ_2017', 'Laporan Penyelidikan Kecelakaan GKP LT 1', '4e6a6b-Mesin-Crimping-Cable.pdf', '2017-07-05', 'Publish'),
('LR-0012', 'KL-0003', 'QMS5-010603-036-03', 'Laporan Investigasi Tumpahan', '3_f_2-Laporan-Investigasi-Tumpahan.pdf', '2016-06-28', 'Publish'),
('LR-0013', 'KL-0004', '030/PM.022/980501-60/INTI/2017', 'Laporan Bulanan Satpam PT INTI Periode April 2017', '6_3_cf-Laporan-Bulanan-Satpam-INTI-.pdf', '2017-05-10', 'Publish'),
('LR-0014', 'KL-0004', 'QMS5-PLA02-005-05', 'Laporan Hasil Evaluasi Aspek Lingkungan Penting dan Analisa Risiko dan Peluang PT INTI 2018', 'Laporan-Hasil-Evaluasi-Aspek-Lingkungan-Penting-dan-Analisa-Risiko-dan-Peluang-PT-INTI-2018.pdf', '2019-01-29', 'Publish'),
('LR-0015', 'KL-0004', 'QMS5-PLA02-004-05', 'Laporan Hasil Evaluasi Identifikasi Bahaya dan Pengendalian Risiko K3 PT INTI 2018', 'Laporan-Hasil-Evaluasi-Identifikasi-Bahaya-dan-Pengendalian-Risiko-K3-PT-INTI-2018.pdf', '2018-01-09', 'Publish'),
('LR-0016', 'KL-0004', 'QMS5-IPR04-001-001', 'Laporan Hasil Evaluasi Kebijakan SMT', 'Laporan-Hasil-Evaluasi-Kebijakan-SMT.pdf', '2019-01-09', 'Publish'),
('LR-0017', 'KL-0005', 'QMS5-EVL05-005-0', 'FORM SURAT PERINGATAN', 'FORM-SURAT-PERINGATAN.docx', '2020-01-02', 'Publish'),
('LR-0018', 'KL-0005', 'QMS3-EVL05-005', 'Inspeksi K3 dan Pemantauan Lingkungan Kerja 2019', 'Inspeksi-K3-dan-Pemantauan-Lingkungan-Kerja-20191.pdf', '2019-03-04', 'Publish'),
('LR-0019', 'KL-0005', '145/PL.00/020900/2016', 'Bukti Laporan UKL-UPL Trw. 1-2016', '4_2-Bukti-Laporan-UKL-UPL-Trw_-1-2016.pdf', '2016-05-13', 'Draft'),
('LR-0020', 'KL-0006', 'Audit Semester I 2017', 'Laporan Hasil Audit dan Evaluasi Ketaatan Semester I 2017', '7_1-Laporan-Audit-Internal-dan-Evaluasi-Ketaatan-Semester-I-2017.pdf', '2017-04-17', 'Publish'),
('LR-0021', 'KL-0007', '032117.17.00218', 'Laporan Pengujian Baku Mutu', '6_3_a-Pengujian-Baku-Mutu-1.pdf', '2017-01-11', 'Publish'),
('LR-0022', 'KL-0007', 'K3LH_2017', 'Pelatihan K3LH PT INTI', '3_2-DOKUMENTASI-PELATIHAN-K3LH-PT-INTI.pdf', '2017-03-23', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE IF NOT EXISTS `tbl_media` (
  `id_media` varchar(100) NOT NULL,
  `id_kategori` varchar(100) NOT NULL,
  `tempat_media` varchar(100) NOT NULL,
  `file_media` varchar(100) NOT NULL,
  `status_media` varchar(100) NOT NULL,
  `keterangan_media` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`id_media`, `id_kategori`, `tempat_media`, `file_media`, `status_media`, `keterangan_media`) VALUES
('MD-0001', '', 'Cover Depan', '1.PNG', 'Publish', ''),
('MD-0002', '', 'Cover Depan', '2.PNG', 'Publish', ''),
('MD-0003', '', 'Cover Depan', '3.PNG', 'Publish', ''),
('MD-0004', '', 'Profile Perusahaan', '42.jpg', 'Publish', ''),
('MD-0005', '', 'Struktur Organisasi QRM', 'c.jpg', 'Publish', ''),
('MD-0006', '', 'Narasi Tentang QRM', 'PHOTO-2018-10-31-14-21-0411.jpg', 'Publish', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
  `id_pengguna` varchar(50) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `username_pengguna` varchar(100) NOT NULL,
  `password_pengguna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` varchar(100) NOT NULL,
  `nm_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level_user` enum('Admin','Pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nm_user`, `username`, `password`, `level_user`) VALUES
('US-0001', 'Admin', 'admin123', '0192023a7bbd73250516f069df18b500', 'Admin'),
('US-0002', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', 'Pengguna'),
('US-0003', 'Iqbal', 'Iqbal', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
('US-0004', 'QRM', 'QRM', '33e94428c215e4e4961ebc0022095c6c', 'Admin'),
('US-0005', 'rizki', 'rizki', '3e089c076bf1ec3a8332280ee35c28d4', 'Pengguna'),
('US-0006', 'Naufal Akbar', 'naufal12', 'c23ff576b099ad9d63451d0df246cead', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
  `id_video` varchar(100) NOT NULL,
  `file_video` varchar(200) NOT NULL,
  `nm_video` varchar(200) NOT NULL,
  `status_video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id_video`, `file_video`, `nm_video`, `status_video`) VALUES
('VD-0001', 'MVI_4196.MOV', 'Aldye', 'Publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`) USING BTREE;

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`config_id`) USING BTREE;

--
-- Indexes for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id_dokumen`) USING BTREE;

--
-- Indexes for table `tbl_form`
--
ALTER TABLE `tbl_form`
  ADD PRIMARY KEY (`id_form`) USING BTREE;

--
-- Indexes for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`) USING BTREE;

--
-- Indexes for table `tbl_kategori_berita`
--
ALTER TABLE `tbl_kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`) USING BTREE;

--
-- Indexes for table `tbl_kategori_dokumen`
--
ALTER TABLE `tbl_kategori_dokumen`
  ADD PRIMARY KEY (`id_kategori_dokumen`) USING BTREE;

--
-- Indexes for table `tbl_kategori_laporan`
--
ALTER TABLE `tbl_kategori_laporan`
  ADD PRIMARY KEY (`id_kategori_laporan`);

--
-- Indexes for table `tbl_komentar_berita`
--
ALTER TABLE `tbl_komentar_berita`
  ADD PRIMARY KEY (`id_komentar_berita`) USING BTREE;

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`id_media`) USING BTREE;

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id_video`) USING BTREE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

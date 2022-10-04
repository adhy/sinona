-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 06:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sinona`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_data`
--

CREATE TABLE `pegawai_data` (
  `id_pegawai` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `golongan` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('1','2') DEFAULT NULL COMMENT '2=Laki-laki;1=Perempuan',
  `alamat` text DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status_menikah` enum('0','1','2') DEFAULT NULL COMMENT '0=belum menikah;1=sudah menikah;2=janda/duda',
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_data`
--

INSERT INTO `pegawai_data` (`id_pegawai`, `nama`, `nip`, `golongan`, `jabatan`, `nik`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `telp`, `email`, `status_menikah`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'Pretty Multihartina,Ph.D.', '196309271989012001', 'IV/d', 'Kepala Pusat Kebijakan Upaya Kesehatan', '3175086709630001', 'Maospati Magetan', '1963-09-27', '1', 'KOMP. DEPARTEMEN PERHUBUNGAN C35, RT.010, RW.006, Kel.Cipinang Melayu, Kec.Makasar', '081385895737', 'pmdsasono@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', 'Admin', '2022-03-30 09:30:09'),
(2, 'dr. Mukti Eka Rahadian, MARS, MPH', '197302062006041001', 'IV/b', 'Analis Kebijakan Ahli Madya', '', '', '1973-02-06', '2', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(3, 'Dr. Ir. Bambang Setiaji,', '196711271990031002', 'IV/b', 'Analis Kebijakan Ahli Madya', '', '', '1967-11-27', '2', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(4, 'Nagiot Cansalony Tambunan, SKM, ME', '197310121999031003', 'IV/b', 'Analis Kebijakan Ahli Madya', '3216051210730010', 'Dumai', '1973-10-12', '2', 'Vila Mutiara Gading 2 Blok W7 No. 37, RT.009, RW.018, Kel.Karang Satria, Kec.Tambun Utara', '08129286500', 'cansalony@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(5, 'dr. Dyah Armi Riana, MARS', '197109212002122001', 'IV/b', 'Administrator Kesehatan Ahli Madya', '', '', '1971-09-21', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(6, 'dr. Muhamad Karyana, M.kes', '197012061999031001', 'IV/b', 'Administrator Kesehatan Ahli Madya', '3275040612700012', 'BEKASI', '1970-12-06', '2', 'Jl. Pramuka No. 59, RT.004, RW.006, Kel.Margajaya, Kec.Bekasi Selatan', '0816789817', 'mkaryana@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(7, 'Ferdinan Samson Tarigan , SKM, MKM', '197702062000121004', 'IV/b', 'Pranata Hubungan Masyarakat Ahli Madya', '', '', '1977-02-06', '2', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(8, 'Jusniar  Amati, S.Si.,M.Si', '196907151997032003', 'IV/a', 'Peneliti  Ahli Madya', '', '', '1969-07-15', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(9, 'dr. Made Dewi Susilawati, M.Epid', '197208192002122005', 'IV/a', 'Administrator Kesehatan Ahli Muda', '3271055908720012', 'Singaraja', '1972-08-19', '1', 'Villa Bogor Indah AA 12 No. 17, RT.01, RW.14, Kel.Kedung Halang, Kec.Bogor Utara', '(0251) 8666265/082113636736', 'kiwik72@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(10, 'Dr. Agus Triwinarto, SKM, MKM', '197208051997031002', 'III/d', 'Analis Kebijakan Ahli Muda', '', '', '1972-08-05', '2', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(11, 'Lusitawati, S.Si, M.Si', '197205062006042001', 'III/d', 'Analis Kebijakan Ahli Muda', '3273114605720001', 'Bandung', '1972-05-06', '1', 'Jl. Cemara lll/23 Taman Yasmin Bogor, RT., RW., Kel.Cilendek timur, Kec.', '081383437185', 'lu_cita@yahoo.co.id', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(12, 'Desi Fitrianeti, SKM, M.Si', '198108102006042014', 'III/d', 'Analis Kebijakan Ahli Muda', '1371115008810011', 'Padang', '1981-08-10', '1', 'Jalan Radar AURI KP Tipar No. 157, RT.002, RW.09, Kel.Mekarsari, Kec.Cimanggis', '0887433434002', 'desifitrianeti@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(13, 'drg. Tince Arniati Jovina, MKM', '196909051998032001', 'III/d', 'Analis Kebijakan Ahli Muda', '3173054509690006', 'Jakarta', '1969-09-05', '1', 'JL. DURI NIRMALA X/504, RT.001, RW.010, Kel.Duri Kepa, Kec.Kebon Jeruk', '0811874508', 't.a.jovina@gmail.com', '2', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(14, 'Luci Fransisca Situmorang, S.KEP,NS, M.Kep', '197905172005012002', 'III/d', 'Analis Kebijakan Ahli Muda', '', '', '1978-05-17', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(15, 'Oster Suriani Simarmata,', '197810072002122004', 'III/d', 'Peneliti Ahli Muda', '', '', '1978-10-07', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(16, 'Nurillah Amaliah,  SP.,MKM', '197903222002122002', 'III/d', 'Peneliti Ahli Muda', '', '', '1979-03-22', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(17, 'Yurista Permanasari,  SKM', '197401261999032001', 'III/d', 'Peneliti Ahli Muda', '', '', '1974-01-26', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(18, 'dr. Eva Sulistiowati M.Biomed', '197703092008122002', 'III/d', 'Peneliti Ahli Muda', '3201074903770002', 'Pekalongan', '1977-03-09', '1', 'Cileungsi Hijau Blok K1 No 26 Cileungsi, RT.04, RW.14, Kel.Cileungsi, Kec.Cileungsi', '08176526531', 'evasulistiowati@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(19, 'dr. Tetra Fajarwati, M.Gizi', '197103122005012001', 'III/d', 'Administrator Kesehatan Ahli Muda', '3171055203710004', 'SURABAYA', '1971-03-12', '1', 'Jalan Budi Harapan No. 31, RT.07, RW.10, Kel.Cipinang Melayu, Kec.Cipinang', '081315157563', 'tetra_fs@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(20, 'dr. Cicih Opitasari, MARS', '198202052010122001', 'III/d', 'Peneliti Ahli Muda', '3275034502820025', 'Brebes', '1982-02-05', '1', 'Perum Prima Harapan regency Blok H7 no 6, RT.007, RW.018, Kel.Harapan Baru, Kec.Bekasi Utara', '081326094659', 'vitasari2010@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(21, 'Fitriawaty, SE', '197609232006042002', 'III/d', 'Analis Pengelolaan Keuangan APBN Ahli Muda', '3174036309760003', 'Surabaya', '1976-09-23', '1', 'Jl. Pancoran Barat I No. 9B, RT.003, RW.001, Kel.Pancoran, Kec.Pancoran', '081908613515', 'fit_fit23@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(22, 'Eni Yuwarni, SKM', '196803111990032001', 'III/d', 'Pranata Hubungan Masyarakat Ahli Muda', '3603205103680001', 'Padang', '1968-03-11', '1', 'TERATAI GRIYA ASRI Blok A 5/4, RT.14, RW.04, Kel.Legok, Kec.Legok', '082110605140', 'eniyw@yahoo.co.id', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(23, 'Christa Gumanti Manik, S.Kep, NS, MPH', '198411302010012020', 'III/c', 'Analis Kebijakan Ahli Muda', '1273047011840001', 'Sibolga', '1984-11-30', '1', 'Jl. Perintis Kemerdekaan No.23 (Apartment Tifolia), RT.009, RW.16, Kel.Kayu Putih, Kec.Pulo Gadung', '081370465641', 'manik.litbang@gmail.com', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(24, 'Meda Germana, S.8os, M.Si.', '197309081999031004', 'III/c', 'Analis Kebijakan Ahli Muda', '', '', '1973-09-08', '2', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(25, 'Aditianti,  SP,  M.Si', '198103102005012002', 'III/c', 'Peneliti Ahli Muda', '', '', '1981-03-10', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(26, 'Tri Wahyuni Lestari, S.Farm, M.Si', '197705292000032001', 'III/c', 'Peneliti Ahli Muda', '3201026905770006', 'Tabanan', '1977-05-29', '1', 'Jl. Desa Nagrak, RT.04, RW.03, Kel.Nagrak, Kec.Gunung Putri', '087777165418', 'wahyuni_lestari29@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(27, 'Mujiati, SKM, M.Kes', '198008032010122002', 'III/d', 'Peneliti Ahli Muda', '3172024308800016', 'Purwokerto', '1980-08-03', '1', 'Perum Taman Kebalen Indah I.5/50, RT.02, RW.16, Kel.Kebalen, Kec.Babelan', '087780568230', 'muji_ballz2@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(28, 'dr. Annisa Rizky Afrilia', '198504202015032003', 'III/b', 'Peneliti Ahli Pertama', '3276056004850005', 'Surabaya', '1985-04-20', '1', 'Pondok Sukmajaya Permai Blok B 5 no. 7 Depok, RT.05, RW.03, Kel.Sukmajaya, Kec.Sukmajaya', '081297137462', 'annisa.rizky.aprilia@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(29, 'dr. Aprildah Nur Sapardin', '197504112008122002', 'III/c', 'Peneliti Ahli Muda', '3674055104750003', 'Banda Aceh', '1975-04-11', '1', 'Jl. Melina III/10, RT.004, RW.008, Kel.Pondok Ranji, Kec.Ciputat Timur', '081213582686', 'aprilsapardin@yahoo.co.id', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(30, 'dr. Dona Arlinda', '197912052010122001', 'III/c', 'Peneliti / Analis Ilmu Pengetahuan dan Teknologi', '3276014512790001', 'Depok', '1979-12-05', '1', 'JL. PIPIT 2 NO. 183, RT.006, RW.010, Kel.Depok Jaya, Kec.Pancoran Mas', '0217521300; 0811813632', 'arlindona1@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(31, 'dr. Hadjar Siswantoro, M.Sc', '196801281999031001', 'III/c', 'Peneliti Ahli Muda', '3174012801680007', 'Purworejo', '1968-01-28', '2', 'JL. MANDAR I NO. 18, RT.003, RW.002, Kel.Bukit Duri, Kec.Tebet', '081211137965', 'hadjar.tmk@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(32, 'dr. Yenni Risniati, M.Epid', '197808262008122001', 'III/c', 'Peneliti Ahli Muda', '3171076608780001', 'Jakarta', '1978-08-26', '1', 'Jl. Kebon Kacang 42 No.17, RT.013, RW.008, Kel.Kebon Kacang, Kec.Tanah Abang', '085212237884', 'yrisniati@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(33, 'dr. Rossa Avrina, M.Epid', '198204152008122001', 'III/c', 'Peneliti Ahli Muda', '3275025504820014', 'Bekasi', '1982-04-15', '1', 'Komplek Departemen Koperasi Jl. Kenari Raya No.9, RT.001, RW.004, Kel.Bintara Jaya, Kec.Bekasi Barat', '085263135877', 'rossaavrina@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(34, 'dr. Makassari Dewi', '197902212008122001', 'III/c', 'Peneliti Ahli Muda', '3174016102790004', 'Ujung Pandang', '1979-02-21', '1', 'Jl. Tebet Barat Dalam VI/a No.3, RT., RW., Kel.Tebet Barat, Kec.Tebet', '081382082588', 'makassari.dewi@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(35, 'dr. Srilaning Driyah, M.Si.Med', '197112232006042001', 'III/c', 'Peneliti Ahli Muda', '3602186312710001', 'Sidoarjo', '1971-12-23', '1', 'Jl Percetakan Negara GG Dahlan I No.4, RT.004, RW.010, Kel.Cempaka Putih Barat, Kec.Cempaka Putih', '081330067086', 'laninglitbang@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(36, 'Tri Wahyuningsih, S.Pd', '198609142010122002', 'III/c', 'Perencana Ahli Muda', '3275035409860027', 'Jakarta', '1986-09-14', '1', 'Komplek Jati Unggul Blok A12 No.5, RT.005, RW.014, Kel.Harapan Jaya, Kec.Bekasi Utara', '081212653194', 'triq.1422@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(37, 'Ade Nugraheni  Herawati, M.Si', '197811072009122001', 'III/b', 'Peneliti Ahli Muda', '', '', '1978-11-07', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(38, 'dr. Dewi ltristanti,  M.Epid', '198201312010122002', 'III/c', 'Peneliti Ahli Pertama', '', '', '1982-01-31', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(39, 'dr. Widianto Pancaharjono', '197701302009121001', 'III/c', 'Peneliti Ahli Pertama', '3275013010770016', 'Pekalongan', '1977-01-30', '2', 'Jl. Irigasi Prima Raya C8/6, RT.012, RW.011, Kel.Bekasi Jaya, Kec.Bekasi Timur', '081386999130', 'widiantopancaharjono@gmail.com', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(40, 'dr. Heni Kismayawati', '197804062010122001', 'III/c', 'Peneliti Ahli Pertama', '0954074604780367', 'Jakarta', '1978-04-06', '1', 'Jl. Perumnas VI/I, No.76, RT.002, RW.05, Kel.Malakasari, Kec.Duren Sawit', '02186607213/081807818346', 'heni.kismayawati@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(41, 'Bryan Mario Isakh, SKM, MKM', '197909082006041003', 'III/c', 'Peneliti Ahli Pertama', '3276020809790011', 'Bandung', '1979-09-08', '2', 'Jl. Duta 3 No. 2 Komplek Pondok Duta I, RT.05, RW.14, Kel.Tugu, Kec.Cimanggis', '082124320020', 'bryanmarioisakh@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(42, 'dr. Nova Sri Hartati, M.Gizi', '197810242008122001', 'III/c', 'Peneliti Ahli Pertama', '3174086410780003', 'Bukittinggi', '1978-10-24', '1', 'Cikoko Barat Dalam III No. 10, RT.007, RW.05, Kel.Cikoko, Kec.Pancoran', '+62-812-673-0728', 'nova.srihartati@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(43, 'Bhaskarani Widjiastuti, SKM, MKM', '197205051999032003', 'III/c', 'Peneliti Ahli Pertama', '', '', '1972-05-05', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(44, 'dr. Danny Fajar Mogsa Manalaksak', '198202212009121002', 'III/c', 'Peneliti Ahli Pertama', '3173082102820004', 'Jakarta', '1982-02-21', '2', 'Jalan Duren Sawit Kav. Pengadilan Blok G/2, RT.013, RW.11, Kel.Klender, Kec.Duren Sawit', '081293128800', 'xietanggang@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(45, 'Dara Mitra Wismaningrum, SKM', '198809142014022004', 'III/b', 'Analis Kebijakan Ahli Pertama', '', '', '1988-09-14', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(46, 'Hendrik  Edison Siahainenia,', '19710521200b04l002', 'III/b', 'Peneliti Ahli Pertama', '', '', '1971-05-21', '2', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(47, 'Anggita Bunga Anggraini, Apt, MKM', '198612012010122005', 'III/c', 'Peneliti Ahli Pertama', '3271064112860001', 'Bungo Tebo', '1986-12-01', '1', 'Jl. Pondok Rumput Gg. Ikan Mas No. 12, RT.004, RW.005, Kel.Kebon Pedas, Kec.Tanah Sareal', '02518316660; 085213756066', 'anggita_ba@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(48, 'Agus Dwi Harso, S.Si', '198708022010121002', 'III/b', 'Peneliti Ahli Pertama', '3302270208870003', 'Banjarnegara', '1987-08-02', '2', 'Permata Depok Regency. Cluster Jade Blok E12/12, RT.02, RW.011, Kel.Ratu Jaya, Kec.Cipayung', '081294440543', 'agusdh08@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(49, 'Totih Ratna Sondari Setiadi,', '197010081998032003', 'III/b', 'Peneliti Ahli Pertama', '', '', '1970-10-08', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(50, 'Yuliana, SKM', '198206262005012018', 'III/b', 'Pranata Hubungan Masyarakat Ahli Pertama', '3271046606820021', 'MUARA DUA OKU', '1982-06-26', '1', 'Jl Terapi I A Blok BV No.6, RT.002, RW.016, Kel.Menteng, Kec.Bogor Barat', '081399136313', 'yulia_fhk@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(51, 'Narendro Arifia,  S.Kom  ', '197607142009121001', 'III/b', 'Pranata Komputer Ahli Pertama', '', '', '1976-07-14', '2', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(52, 'Rusdy Setiyabudi Soepardi, S.Gz', '197505052000031008', 'III/b', 'Analis Kepegawaian Ahli Pertama', '3671130505750014', 'Manado', '1975-05-05', '2', 'Jl. Inpres VII, RT.004, RW.007, Kel.Larangan Utara, Kec.Larangan', '082310535177', 'rusheliya_love@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(53, 'Nita Prihartini, SKM', '198001032005012002', 'III/a', 'Peneliti Ahli Pertama', '3275014301800021', 'Jakarta', '1980-01-03', '1', 'Jl. Mandiri 5 No. 55, RT.002, RW.02, Kel.Aren Jaya, Kec.Bekasi Timur', '08561202498', 'nitaprihartini@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(54, 'Rani Marsini, SKM', '198904212010122005', 'III/a', 'Statistisi Ahli Pertama', '3273166104890002', 'Bandung', '1989-04-21', '1', 'Sukapura No. 33, RT.09, RW.01, Kel.Sukapura, Kec.Kiaracondong', '085659143852; 02261730031', 'ranimarsini21@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(55, 'Agnita Triyoga, A.Md', '198708112010122006', 'III/a', 'Pranata Komputer Mahir', '3277035108870007', 'Bandung', '1987-08-11', '1', 'Jl. Balongan No. 133, RT.7, RW.12, Kel.Tanah Baru, Kec.Beji, Depok', '08996822959', 'agnita.triyoga@kemkes.go.id', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', 'Agnita Triyoga', '2022-05-17 10:47:00'),
(56, 'Susanti', '198104152010122004', 'III/a', 'Pranata Keuangan APBN Mahir', '3276035504810006', 'Ngawi', '1981-04-15', '1', 'Perum Bumi Sawangan Indah (BSI-2) Blok C6C No.108, RT.003, RW.011, Kel.Pengasinan, Kec.Sawangan', '081286188465', 'susanti_litbang@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(57, 'Ita Novitawati', '197011141997032002', 'III/a', 'Analis Kepegawaian Mahir', '3271045411700010', 'BOGOR', '1970-11-14', '1', 'Jl. Mayjen Ishak Djuarsa, Gang Budi No. 241, RT.002, RW.012, Kel.Loji, Kec.Bogor Barat', '081399157559', 'itanovitawati@ymail.com', '2', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(58, 'dr. Sri Mardikani Nugraha, MKM', '197209042002122002', 'IV/a', 'Analis Kebijakan / Penyusun Bahan Kebijakan', '3201244409720001', 'JAWA BARAT', '1972-09-04', '1', 'Jl. RAWASARI BARAT III/E48A, RT.03, RW.01, Kel.CEMPAKA PUTIH TIMUR, Kec.CEMPAKA PUTIH', '082310865220', 'sri.mardikani@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(59, 'Eddy Purwanto,  ST,  MKM', '197712012003121002', 'IV/a', 'Pranata Komputer Ahli  / Analis Sistem Informasi (JP)', '', '', '1977-12-01', '2', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(60, 'Linda Nilawati,  SKM, M.Kes', '197404241999032003', 'IV/a', 'Perencana  / Penyusun Program Anggaran dan Pelaporan  (JP)', '', '', '1974-04-24', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(61, 'Arvina Silalahi, S.Kep., Ners', '198504252006042001', 'III/d', 'Analis Kebijakan / Penyusun Bahan Kebijakan', '8201016504850001', 'Ternate', '1985-04-25', '1', 'Desa Soakonara, Kecamatan Jailolo, Kab. Halmahera, Barat, RT., RW., Kel., Kec.', '085340031303', 'arvina.silalahi@mail.ugm.ac.id', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(62, 'dr. Retna Mustika Indah, MKM', '198308212010122001', 'III/d', 'Peneliti / Analis Ilmu Pengetahuan dan Teknologi', '3275126108830010', 'Jakarta', '1983-08-21', '1', 'Komp. Chandra Indah Blok D No. 76, RT.001, RW.016, Kel.Jati Rahayu, Kec.Pondok Melati', '0811987432', 'cagivaluvers@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(63, 'Andi Rahmawati, SKM, MKM', '197302242005022003', 'III/d', 'Pranata Hubungan Masyarakat  Ahli /  Analis Hubungan Masyarakat (JP)', '', '', '1973-02-24', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(64, 'Dewi Supriyani, SE', '197806062009122001', 'III/c', 'Analis Keuangan', '3271044606780023', 'Jakarta', '1978-06-06', '1', 'Jalan Cilendek Timur, RT.004, RW.008, Kel.Cilendek Timur, Kec.Bogor Barat', '081802903931', 'iwed0678@gmail.co,', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(65, 'Hestrika Novia Cahyaningsih Sukandar, S.IP', '198611222010122001', 'III/c', 'Perencana  / Penyusun Program Anggaran dan Pelaporan  (JP)', '3310016211860001', 'Sleman', '1986-11-22', '1', 'Perumahan Jatibening 2 Jl.Enau IV, No.82b, RT.005, RW.008, Kel.Jatibening Baru, Kec.Pondok Gede', '081328997272', 'hestrikanovia22@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(66, 'Agnes Putri Apriliani,  S.Si, M.E', '198604152010122002', 'III/c', 'Perencana  / Penyusun Program Anggaran dan Pelaporan  (JP)', '', '', '1986-04-15', '1', '', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(67, 'Ida Farida, SKM, M.AP', '197507162006042001', 'III/c', 'Perencana  / Penyusun Program Anggaran dan Pelaporan  (JP)', '', '', '1975-07-16', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(68, 'Afifah  Nasyahta Dila, M.P.H.', '199207222020122006', 'III/b', 'Analis Kebijakan /  Penyusun Bahan Kebijakan  (JP)', '', '', '1992-07-22', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(69, 'Anggraeni,  S.AP', '198304072006042001', 'III/b', 'Analis Kepegawaian Ahli Pertama', '', '', '1983-04-07', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(70, 'Ranti Suciati, S.Sos', '197610202010122001', 'III/b', 'Peneliti  /  Analis llmu Pengetahuan dan Teknologi', '', '', '1976-10-20', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(71, 'Dini Resmisari', '197002051997032002', 'III/b', 'Arsiparis / Pranata Kearsipan', '3271044502700020', 'Rangkasbitung', '1970-02-05', '1', 'BLK. Bumi Menteng Asri, RT.04, RW.011, Kel.Menteng, Kec.Bogor Barat', '08568380721', 'diniresmisari05@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(72, 'Ujang Kusdiat, S.Kom', '197203232008121002', 'III/b', 'Perencana  / Penyusun Program Anggaran dan Pelaporan  (JP)', '3271032303720005', 'Bandung', '1972-03-23', '2', 'Gg. Cibalok I No. 64, RT.03, RW.03, Kel.Pabaton, Kec.Bogor Tengah', '085697344265', 'uj.kusdiat@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(73, 'Frita Ramdaniar,  S.I.Kom, MAP', '198401062010122003', 'III/b', 'Perencana  / Penyusun Program Anggaran dan Pelaporan  (JP)', '', '', '1984-01-06', '1', '', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(74, 'Ana Farida, S.KM', '198608122020122005', 'III/a', 'Analis Kebijakan /  Penyusun Bahan Kebijakan (JP)', '', '', '1986-08-12', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(75, 'Rahmi Amelia, S.Si', '199003022020122001', 'III/a', 'Statistisi (Analis Statistik) (JP)', '', '', '1990-03-02', '1', '', '', '', '', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(76, 'Agus Haryana', '196408131994031002', 'III/a', 'Analis Kepegawaian / Pengelola Kepegawaian', '3271041308640007', 'BOGOR', '1964-08-13', '2', 'Gg. Nasedin No. 10, RT.03, RW.02, Kel.CILENDEK BARAT, Kec.BOGOR BARAT', '088213946120', 'noyharyana@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(77, 'Endang Mustofa', '197104092006041002', 'III/a', 'Arsiparis / Pranata Kearsipan', '3271040904710009', 'Bogor', '1971-04-09', '2', 'Kp. Tarikolot, RT.02, RW.14, Kel.Gunung Batu, Kec.Bogor Barat', '081293752500', 'mustofaendang1@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(78, 'Setiawati', '197307062006042006', 'II/d', 'Analis Kepegawaian / Pengelola Kepegawaian', '3271034607730001', 'Bogor', '1973-07-06', '1', 'Jalan Ardio VIII No. 8, RT.001, RW.005, Kel.Cibogor, Kec.Bogor Tengah', '085781508448', 'setiawatijinan1973@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(79, 'Hananto', '197606232007011015', 'II/d', 'Pengelola Barang Milik Negara', '3201292306760007', 'KOTABUMI', '1976-06-23', '2', 'Perum Citoh Cluster Bromo Blok F 17 RT 002/005 Desa Cibatok Satu Kecamatan Cibungbulang Kabupaten Bogor, RT.002, RW.005, Kel.Cibatok Satu, Kec.Cibungbulang', '085283270441', 'hanantoanto6@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(80, 'Ahmad Sayuti', '196506151991031003', 'II/d', 'Pengelola Instalasi Air dan Listrik', '3271041506650027', 'Jasinga/Bogor', '1965-06-15', '2', 'Mekarsari, RT.02, RW.XI, Kel.Gunung Batu, Kec.Bogor Barat', '081337359063', 'sayutiahmad543@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(81, 'Erwin Bahtiar', '197902172009121002', 'II/c', 'Pranata Keuangan APBN Terampil', '3271041702790004', 'Bogor', '1979-02-17', '2', 'Cilendek Timur, RT.04, RW.08, Kel.Cilendek Timur, Kec.Bogor Barat', '081211895422', 'bahtiarerwin2079@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(82, 'Ina Sumiati', '198107182007012001', 'II/b', 'Analis Kepegawaian / Pengelola Kepegawaian', '3271045807810009', 'BOGOR', '1981-07-18', '1', 'BLK BMA Pemutihan, RT.04, RW.11, Kel.Menteng, Kec.Bogor Barat', '081383462716', 'inainsum@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(83, 'Sanusi', '197102132007011015', 'II/a', 'Pengelola Instalasi Air dan Listrik ', '3271061402710010', 'BOGOR', '1971-02-14', '2', 'Cibuluh Kedung Badak, RT.006, RW.003, Kel.Kedung Badak, Kec.Tanah Sareal', '085890096971', 'usanusi1971@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(84, 'Yodia Hadishtis', '920191025201901201', 'NON PNS', 'PPNPN', '3175056510920007', 'JAKARTA', '0000-00-00', '1', 'Jl. Balong Kirai Sari No 37 RT 012 RW 009 Kel. Kausari, Kec. Pasar rebo, Jakarta Timur - DKI Jakarta', '085692311861', 'hadishtisy@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(85, 'Irene Jeshika', '919930903201901201', 'NON PNS', 'PPNPN', '1271214309930003', 'MEDAN', '1993-09-03', '1', 'Jl. Banjarsari GG Tunjungsari RT 001 RW 002 Kel. Tembalang, Kec. tembalang, Kota Semarang - Jawa Tengah', '082168879969', 'irenejeshika@ymail.com ', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(86, 'Muh. Saefullah', '919900120201901101', 'NON PNS', 'PPNPN', '3201292001900005', 'BOGOR', '1990-01-20', '2', 'Babakan Ciomas RT 002 RW 009 Desa Parakan Kecamatan Ciomas, Kabupaten Bogor - Jawa Barat', '081283006350', 'kangpulloh@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(87, 'Putri Audita', 'NON PNS', 'NON PNS', 'PPNPN', '3275015103970014', 'BEKASI', '1997-03-11', '1', 'Jl. P. Karimun Jawa 4/272 RT 004/013 Kel. Aren Jaya, Kec. Bekasi Timur Kota Bekasi - Jawa Barat', '08989820135', 'paudita@ymail.com', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(88, 'Asri Guswati Pertiwi', '919910802201901201', 'NON PNS', 'PPNPN', '3175024208910002', 'JAKARTA', '1991-08-02', '1', 'Perum Villa Nusa Indah Blok N7 No 30 RT 005 RW 015, Desa Bojong Kulur, Kabupaten Gunung Putri - Jawa Barat', '085691031810', 'asrigph@gmail.com', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(89, 'Sonny Novriadi', 'NON PNS', 'NON PNS', 'PPNPN', '3173071011880001', 'JAKARTA', '1988-11-10', '2', 'Duren Villa Blok B 1/15, Kel. Sudimara Selatan, Kec. Ciledug, Kota Tangerang', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(90, 'Mawaddatun Nadiyah', '919910918201901201', 'NON PNS', 'PPNPN', '3173065809910001', 'JAKARTA', '1991-09-18', '1', 'Jl. Peta Utara 94 RT 006 RW 006, Kel. Pegadungan, Kec. Kalideres, Jakarta Barat - DKI Jakarta', '085777449659', 'nadiyah.abdulloh@gmail.com ', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(91, 'Rinda Luxi Hermawati', '919940912201901201', 'NON PNS', 'PPNPN', '3329015209940006', 'BREBES', '1994-09-12', '1', 'Kampung Brak Rt. 01 Rw. 05, Kec. Salem Kab. Brebes Jawa Tengah', '082221818047', 'rindaluxy@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(92, 'Doan M Simanjuntak', 'NON PNS', 'NON PNS', 'PPNPN', '1272013006900001', 'P. SIANTAR', '1990-06-30', '2', 'Jl. Lobak No 24 RT 018 RW 006, Kel. Kebun Sayur, Kec. Siantar Timur, Kota Pematangsiantar', '', 'doan.moreno@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(93, 'Sutarso', '919590323201901101', 'NON PNS', 'PPNPN', ' 3275012303530014', 'PURWONEGORO', '1959-03-23', '2', 'Jl. P. Natuna 3 No 90 RT 004 RW 017 Kel. Aren Jaya, kec. Bekasi Timur, Kota Bekasi - Jawa Barat', '081317123295', 'sutarso2303@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(94, 'Stevinda Dwi Irlindo', 'NON PNS', 'NON PNS', 'PPNPN', '1371084209900005', 'PADANG', '1990-09-02', '1', 'Jln. Kebon Jahe No 20A, RT 013 RW 003 Kel. Kapuk, Kec. Cengkareng , Jakarta Barat', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(95, 'Winda Lesdiana', '919770826201901201', 'NON PNS', 'PPNPN', '3674036608770002', 'JAKARTA', '1977-08-26', '1', 'Jl. Ilyusin No 22 Blok I RT 006/004, Kel. Halim Perdana Kusumah, Kec. Makasar, Jakarta Timur - DKI Jakarta', '081289679924', 'lesdianawinda@gmail.com ', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(96, 'Delta Novitasari', '919921114201901201', 'NON PNS', 'PPNPN', '3523195411920004', 'TUBAN', '1992-11-14', '1', 'Usih RT 002 RW 000, Desa Usih, Kec. Bintang Ara, Kabupaten Tabalong - Kalimantasn Selatan', '082141578696', 'deltanovitasari14@gmail.com', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(97, 'Indra Gunawan', '919870927201901101', 'NON PNS', 'PPNPN', '3275052709870007', 'JAKARTA', '1987-09-27', '2', 'Jl. Delima III No 20 Kel. Pengasinan, Kec. Rawalumbu, Kota Bekasi - Jawa Barat', '081383128669', 'terserahandri@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(98, 'Annisa Rahmawati', 'NON PNS', 'NON PNS', 'PPNPN', '3201154311950004', 'BOGOR', '1995-11-03', '1', 'BTN Sindangsari Blok E-17 RT 003 RW 007, Kel. Bojongrangkas, Kec. Ciampea, Kabupaten Bogor', '', 'annisarachmawati.pro@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(99, 'Dandy Tedja', '919920114201901101', 'NON PNS', 'PPNPN', '1205071401920004', 'KLAMBIR LIMA', '1992-01-14', '2', 'Komp. Unilever A V/6 RT 003 RW 009 Kel. Meruya Selatan, Kec. Kembangan, Jakarta Barat - DKI Jakarta', '082363431288', 'tedjapermana678@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(100, 'Masnur Siringgo', '919821008201901201', 'NON PNS', 'PPNPN', '3275034810820022', 'TAPIAN NAULI', '1982-10-08', '1', 'Kav. Bulak Sentul Jl. Alia III No 5 RT 002 RW 025, Kel. Harapan Jaya, Kec. Bekasi Utara, Kota Bekasi - Jawa Barat', '085261275404', 'nur.ringo@gmail.com', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(101, 'Doni Tamara', '919931007201901101', 'NON PNS', 'PPNPN', '7171080710930001', 'JAKARTA', '1993-10-07', '1', 'Perum SBS Blok CD 13 No 15 RT 008 RW 011 Kel. Harapan jaya, Kec. Bekasi Utara, Kota Bekasi - Jawa Barat', '081294038773', 'donny.oktamara@gmail.com', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(102, 'Unung Yunani', 'NON PNS', 'NON PNS', 'PPNPN', '3212246809900001', 'INDRAMAYU', '1990-09-28', '1', 'Perum Panorama Bali Residence Blok C.p No 1, Desa. Putat Nutug, Kec. Ciseeng, Kabupaten Bogor', '087707754456', 'unungy@yahoo.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(103, 'Budiono', '196604231990031001', 'II/d', 'Pengemudi', '3201122104660002', 'BOGOR', '1966-04-23', '2', 'Semplak RT. 07, RW. 02 Kel./Desa Semplak Kec. Bogor Barat BOGOR - Jawa Barat', '08111134966', 'onobudiono1968@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(104, 'Santi Dwi Astuti', '919900629201901201', 'NON PNS', 'PPNPN', '3201306906900006', 'BOGOR', '1990-06-29', '1', 'Lingkar Cipayung RT 003 RW 001, Kelurahan Abadi Jaya, Kecamatan Sukmajaya, Kota Depok - Jawa Barat', '087770867163', 'santidwi155@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(105, 'Danang Berlianto', '919781018201901101', 'NON PNS', 'PPNPN', '3175071810780008', 'JAKARTA', '1978-10-18', '2', 'Pulo Gebang Permai Blok B.4/35 RT 002 RW 010, Kel. Pulo Gebang, Kec. Cakung, Jakarta Timur - DKI Jakarta', '081806795686', 'danangdenmas@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(106, 'Sakinah Arizal', '919951208201901202', 'NON PNS', 'PPNPN', '1304044812950001', 'BATAM', '1995-12-08', '1', 'Jorong Kampung Baru Desa Baringin, Kec. Lima Kaum, Kab. Tanah Datar, Sumatera Barat', '081364663804', 'sakinaharizal@gmail.com', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(107, 'Salisa Kurnia Sari', '919940106201901201', 'NON PNS', 'PPNPN', '3310150601940001', 'SERANG', '1994-01-06', '1', 'Cijawa Mesjid RT 001 RW 001, Kel. Cipane, Kec. Serang Kota Serang - Banten', '087832471200', 'kurnia.sali06@gmail.com', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(108, 'Mutia Agroli', '919941224201901201', 'NON PNS', 'PPNPN', '1371036412940004', 'PADANG', '1994-12-24', '1', '', '', 'mutiaagroli13@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(109, 'Astri Chya Eka Putri', 'NON PNS', 'NON PNS', 'PPNPN', '3275085911860007', 'LUBUK LINGAU', '1986-11-19', '1', 'Jl. Setia I No 48 RT 005 RW 004 Kel. Jatiwaringin, Kec. Pondokgede, Kota Bekasi', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(110, 'Adi Setyo', 'NON PNS', 'NON PNS', 'PPNPN', '3520101804910002', 'MAGETAN', '1991-04-18', '2', 'Bantrung RT 001 RW 001 Kel. Bantrung, Kec. Batealit, Kabupaten Jepara', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(111, 'Kiki Sumarno', '919820309201501101', 'NON PNS', 'Petugas Keamanan', '3175020903820005', 'JAKARTA', '1982-03-09', '2', 'Rawamangun Muka Selatan I/31 RT 008/013 Kel. Rawamangun, Kec. Pulogadung, Jakarta Timur - DKI Jakarta', '085814464743', 'kikisumarno82@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(112, 'Nasib Wibowo', '919780721201501101', 'NON PNS', 'Petugas Keamanan', '3216072107780004', 'JAKARTA', '1978-07-21', '2', 'Kp. Selang Cau RT 004/012 Desa Wanasari, Kec. Cibitung, Kab. Bekasi - Jawa Barat', '0859343109536', 'wibowocibitung33@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(113, 'Agus Saparudin', '919920804201701101', 'NON PNS', 'Petugas Keamanan', '3201310408920001', 'BOGOR', '1992-08-04', '2', 'Kp. Kebonjati RT 005/001 Desa Sirnagalih, Kec. Tamansari, Kab. Bogor - Jawa Barat', '', 'agoesshava10@gmail.com', '0', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(114, 'Dadang Supriyatna', '919700307201701101', 'NON PNS', 'Petugas Keamanan', '3276100703700003', 'BOGOR', '1970-03-07', '2', 'Kp. Cilangkap RT 003/018 Kel. Cilangkap, Kec. Tapos, Kota Depok - Jawa Barat', '081584758170', 'dadangpusar2@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(115, 'Firmansyah', '919760604201501101', 'NON PNS', 'Petugas Keamanan', '3175100406760014', 'JAKARTA', '1976-06-04', '2', 'Jl. H. Siun RT 002/005 Kel. Ceger, Kec. Cipayung, Jakarta Timur - DKI Jakarta', '085717133210', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(116, 'Sabar Panjaitan', '919730423201701101', 'NON PNS', 'Petugas Keamanan', '3175092404730006', 'KABANJAHE', '1973-04-23', '2', 'Jl. Pulau Harapan No 195 RT 007/006 Kel. Cilangkap, Kec. Cipayung, Jakarta Timur - DKI Jakarta', '', 'sabar.panjaitan2015@gmail.com', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(117, 'Indi Irawan', 'NON PNS', 'NON PNS', 'OB', '3173072412840007', 'JAKARTA', '1984-12-24', '2', 'Kemanggisan Grogol RT 013 RW 008, Kel. Palmerah, Kec. Palmerah, Jakarta Barat', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(118, 'Susanto', '919890421201612201', 'NON PNS', 'OB', '1602132106890001', 'KUTA PANDAN', '1989-04-21', '2', 'Kp. Penggilingan Baru RT 003 RW 006, Kel. Harapan Baru, Kec. Bekasi Utara, Kota Bekasi', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(119, 'Taufik Adiwijaya', '919940708201612201', 'NON PNS', 'OB', '3271060807940002', 'BOGOR', '1994-07-08', '2', 'Cimanggu Gg Mantri Guru RT 004 RW 001, Kel. Kedungjaya, Kec. Tanah Sareal, Kota Bogor', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(120, 'Deri Aria Agustian', '919880810201612201', 'NON PNS', 'OB', '3271041008880024', 'BOGOR', '1986-08-10', '2', 'Cilendek Timur RT 003 RW 001, Kel. Cilendek Timur, Kec. Kota Bogor Barat, Kota Bogor', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', 'Admin', '2022-03-29 04:40:08'),
(121, 'Herlin Rizal', '919880713201612201', 'NON PNS', 'OB', '3171085307220002', 'JAKARTA', '1988-07-13', '1', 'Jl. Rawa Tengah RT 014 RW 005 Kel. Galur, Kec. Johar Baru, Jakarta Pusat', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(122, 'Ridwan', '919861204201904101', 'NON PNS', 'OB', '3171050412840003', 'JAKARTA', '1986-12-04', '2', 'Jl. Cempaka Putih Barat RT 002 RW 002 Kel. Cempaka Putih Barat, kel. Cempaka Putih, Jakarta Pusat - DKI Jakarta', '085894328235', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(123, 'Subandio', 'NON PNS', 'NON PNS', 'SUPIR', '3275010812590012', 'JAKARTA', '1959-12-08', '2', 'Jl. P. Karimun Jawa 4/272 RT 004 RW 013, Kel. Aren Jaya, Kec. Bekasi Timur, Kota Bekasi', '', '', '1', 'Agnita Triyoga', '2022-03-27 07:22:00', '', '0000-00-00 00:00:00'),
(124, 'Herlin', '919721125201901101', 'NON PNS', 'SUPIR', '3275112511720004', 'KEBUMEN', '1972-11-25', '2', 'Jl. Puyuh 3 No. 132', '081388096027', 'herlinn2511@gmail.com', '1', '', '0000-00-00 00:00:00', 'Admin', '2022-03-29 04:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `t_calon_rekomjak`
--

CREATE TABLE `t_calon_rekomjak` (
  `id_calon_rekomjak` int(11) NOT NULL,
  `id_usulan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL COMMENT 'PIC, user yang ditugaskan',
  `arahan_pimpinan` varchar(255) NOT NULL,
  `status_calon_rekomjak` enum('1','2','99') NOT NULL COMMENT '1=Penyusunan TIM;2=Ditindak Lanjuti;99=Ditolak',
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_dakung_rekomjak`
--

CREATE TABLE `t_dakung_rekomjak` (
  `id_dakung` int(11) NOT NULL,
  `judul_dakung` varchar(255) NOT NULL,
  `file_dakung` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jenis_kegiatan` int(11) NOT NULL,
  `id_calon_rekomjak` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_dinkes_kab`
--

CREATE TABLE `t_dinkes_kab` (
  `id_dinkes_kab` int(11) NOT NULL,
  `nama_dinkes_kab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_dinkes_prov`
--

CREATE TABLE `t_dinkes_prov` (
  `id_dinkes_prov` int(11) NOT NULL,
  `nama_dinkes_prov` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_instansi_lembaga`
--

CREATE TABLE `t_instansi_lembaga` (
  `id_instansi_lembaga` int(11) NOT NULL,
  `nama_instansi_lembaga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_instansi_lembaga`
--

INSERT INTO `t_instansi_lembaga` (`id_instansi_lembaga`, `nama_instansi_lembaga`) VALUES
(1, 'Kementerian Kesehatan'),
(2, 'Dinas Kesehatan Provinsi'),
(3, 'Dinas Kesehatan Kab/Kota'),
(4, 'Kementerian/Lembaga Pemerintah lain'),
(5, 'Akademisi/Mahasiswa/Pelajar'),
(6, 'Swasta'),
(7, 'LSM'),
(8, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_satuan_kerja`
--

CREATE TABLE `t_satuan_kerja` (
  `id_satuan_kerja` int(11) NOT NULL,
  `id_unit_utama` int(11) NOT NULL,
  `nama_satuan_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_satuan_kerja`
--

INSERT INTO `t_satuan_kerja` (`id_satuan_kerja`, `id_unit_utama`, `nama_satuan_kerja`) VALUES
(1, 1, 'Biro Perencanaan dan Anggaran'),
(2, 1, 'Biro Keuangan dan Barang Milik Negara'),
(3, 1, 'Biro Hukum'),
(4, 1, 'Biro Organisasi dan Sumber Daya Manusia'),
(5, 1, 'Biro Komunikasi dan Pelayanan Publik'),
(6, 1, 'Biro Pengadaan Barang dan Jasa'),
(7, 1, 'Biro Umum'),
(8, 1, 'Pusat Data dan Teknologi Informasi'),
(9, 1, 'Pusat Sistem dan Strategi Kesehatan'),
(10, 1, 'Pusat Krisis Kesehatan'),
(11, 1, 'Pusat Kesehatan Haji'),
(12, 1, 'Pusat Pengembangan Kompetensi ASN Kemenkes'),
(13, 2, 'Sekretariat Inspektorat Jenderal'),
(14, 2, 'Inspektorat I'),
(15, 2, 'Inspektorat II'),
(16, 2, 'Inspektorat III'),
(17, 2, 'Inspektorat IV'),
(18, 2, 'Inspektorat Investigasi'),
(19, 3, 'Sekretariat Direktorat Jenderal Pelayanan Kesehatan'),
(20, 3, 'Direktorat Pelayanan Kesehatan Primer'),
(21, 3, 'Direktorat Pelayanan Kesehatan Rujukan'),
(22, 3, 'Direktorat Tata Kelola Pelayanan Kesehatan'),
(23, 3, 'Direktorat Fasilitas Pelayanan Kesehatan'),
(24, 3, 'Direktorat Mutu Pelayanan Kesehatan'),
(25, 3, 'Rumah Sakit Anak dan Bunda Harapan Kita Jakarta'),
(26, 3, 'Rumah Sakit Jantung dan Pembuluh Darah Harapan Kita Jakarta'),
(27, 3, 'Rumah Sakit Umum Pusat Dr. Hasan Sadikin Bandung'),
(28, 3, 'Rumah Sakit Umum Pusat Dr. Johannes Leimena Ambon'),
(29, 3, 'Rumah Sakit Umum Pusat Dr. Kariadi Semarang'),
(30, 3, 'Rumah Sakit Umum Pusat Dr. M. Djamil Padang'),
(31, 3, 'Rumah Sakit Umum Pusat Dr. Mohamad Hoesin Palembang'),
(32, 3, 'Rumah Sakit Umum Pusat Dr. Rivai Abdullah Palembang'),
(33, 3, 'Rumah Sakit Umum Pusat Dr. Sardjito Yogyakarta'),
(34, 3, 'Rumah Sakit Umum Pusat Dr. Sitanala Tangerang'),
(35, 3, 'Rumah Sakit Umum Pusat Dr. Soeradji Tirtonegoro Klaten'),
(36, 3, 'Rumah Sakit Umum Pusat Dr. Tadjuddin Chalid Makassar'),
(37, 3, 'Rumah Sakit Umum Pusat Dr. Wahidin Sudirohusodo Makassar'),
(38, 3, 'Rumah Sakit Umum Pusat Fatmawati Jakarta'),
(39, 3, 'Rumah Sakit Umum Pusat H. Adam Malik Medan'),
(40, 3, 'Rumah Sakit Umum Pusat Nasional Dr. Cipto Mangunkusumo Jakarta'),
(41, 3, 'Rumah Sakit Umum Pusat Persahabatan Jakarta'),
(42, 3, 'Rumah Sakit Umum Pusat Prof. Dr. R.D. Kandou Manado'),
(43, 3, 'Rumah Sakit Umum Pusat Ratatotok Buyat'),
(44, 3, 'Rumah Sakit Umum Pusat Sanglah Denpasar'),
(45, 3, 'Rumah Sakit Umum Pusat Surakarta'),
(46, 3, 'Rumah Sakit Otak DR. Drs. M. Hatta Bukittinggi'),
(47, 3, 'Rumah Sakit Pusat Otak Nasional Prof. Dr. dr. Mahar Mardjono Jakarta'),
(48, 3, 'Rumah Sakit Kanker Dharmais Jakarta'),
(49, 3, 'Rumah Sakit Ketergantungan Obat Jakarta'),
(50, 3, 'Rumah Sakit Mata Cicendo Bandung'),
(51, 3, 'Rumah Sakit Ortopedi Prof. Dr. R. Soeharso Surakarta'),
(52, 3, 'Rumah Sakit Penyakit Infeksi Prof. Dr. Sulianti Saroso Jakarta'),
(53, 3, 'Rumah Sakit Jiwa Dr. H. Marzoeki Mahdi Bogor'),
(54, 3, 'Rumah Sakit Jiwa Dr. Radjiman Wediodiningrat Lawang'),
(55, 3, 'Rumah Sakit Jiwa Dr. Soeharto Heerdjan Jakarta'),
(56, 3, 'Rumah Sakit Jiwa Prof. Dr. Soerojo Magelang'),
(57, 3, 'Rumah Sakit Paru dr. Ario Wirawan Salatiga'),
(58, 3, 'Rumah Sakit Paru dr. Goenawan Partowidigdo Cisarua Bogor'),
(59, 3, 'Rumah Sakit Paru dr. H.A. Rotinsulu Bandung'),
(60, 3, 'Rumah Sakit Mata Makassar'),
(61, 3, 'Balai Besar Kesehatan Paru Masyarakat Bandung'),
(62, 3, 'Balai Besar Kesehatan Paru Masyarakat Makassar'),
(63, 3, 'Balai Besar Laboratorium Kesehatan Jakarta'),
(64, 3, 'Balai Besar Laboratorium Kesehatan Makassar'),
(65, 3, 'Balai Besar Laboratorium Kesehatan Palembang'),
(66, 3, 'Balai Besar Laboratorium Kesehatan Surabaya'),
(67, 3, 'Balai Kesehatan Mata Masyarakat Cikampek'),
(68, 3, 'Balai Pengamanan Fasilitas Kesehatan Jakarta'),
(69, 3, 'Balai Pengamanan Fasilitas Kesehatan Surabaya'),
(70, 3, 'Balai Pengamanan Fasilitas Kesehatan Medan'),
(71, 3, 'Balai Pengamanan Fasilitas Kesehatan Makassar'),
(72, 3, 'Loka Pengamanan Fasilitas Kesehatan Banjarbaru'),
(73, 3, 'Loka Pengamanan Fasilitas Kesehatan Surakarta'),
(74, 3, 'Unit Pelayanan Kesehatan Kementerian Kesehatan'),
(75, 4, 'Sekretariat Direktorat Jenderal Pencegahan dan Pengendalian Penyakit'),
(76, 4, 'Direktorat Pencegahan dan Pengendalian Penyakit Menular'),
(77, 4, 'Direktorat Pencegahan dan Pengendalian Penyakit Tidak Menular'),
(78, 4, 'Direktorat Pengelolaan Imunisasi'),
(79, 4, 'Direktorat Surveilans dan Kekarantinaan Kesehatan'),
(80, 4, 'Direktorat Penyehatan Lingkungan'),
(81, 4, 'Kantor Kesehatan Pelabuhan Kelas I Batam'),
(82, 4, 'Kantor Kesehatan Pelabuhan Kelas I Denpasar'),
(83, 4, 'Kantor Kesehatan Pelabuhan Kelas I Makassar'),
(84, 4, 'Kantor Kesehatan Pelabuhan Kelas I Medan'),
(85, 4, 'Kantor Kesehatan Pelabuhan Kelas I Soekarno Hatta'),
(86, 4, 'Kantor Kesehatan Pelabuhan Kelas I Surabaya'),
(87, 4, 'Kantor Kesehatan Pelabuhan Kelas I Tanjung Priok'),
(88, 4, 'Kantor Kesehatan Pelabuhan Kelas II Ambon'),
(89, 4, 'Kantor Kesehatan Pelabuhan Kelas II Balikpapan'),
(90, 4, 'Kantor Kesehatan Pelabuhan Kelas II Banda Aceh'),
(91, 4, 'Kantor Kesehatan Pelabuhan Kelas II Bandung'),
(92, 4, 'Kantor Kesehatan Pelabuhan Kelas II Banjarmasin'),
(93, 4, 'Kantor Kesehatan Pelabuhan Kelas II Banten'),
(94, 4, 'Kantor Kesehatan Pelabuhan Kelas II Cilacap'),
(95, 4, 'Kantor Kesehatan Pelabuhan Kelas II Dumai'),
(96, 4, 'Kantor Kesehatan Pelabuhan Kelas II Gorontalo'),
(97, 4, 'Kantor Kesehatan Pelabuhan Kelas II Jayapura'),
(98, 4, 'Kantor Kesehatan Pelabuhan Kelas II Kendari'),
(99, 4, 'Kantor Kesehatan Pelabuhan Kelas II Kupang'),
(100, 4, 'Kantor Kesehatan Pelabuhan Kelas II Manado'),
(101, 4, 'Kantor Kesehatan Pelabuhan Kelas II Mataram'),
(102, 4, 'Kantor Kesehatan Pelabuhan Kelas II Padang'),
(103, 4, 'Kantor Kesehatan Pelabuhan Kelas II Palembang'),
(104, 4, 'Kantor Kesehatan Pelabuhan Kelas II Panjang'),
(105, 4, 'Kantor Kesehatan Pelabuhan Kelas II Pekanbaru'),
(106, 4, 'Kantor Kesehatan Pelabuhan Kelas II Pontianak'),
(107, 4, 'Kantor Kesehatan Pelabuhan Kelas II Probolinggo'),
(108, 4, 'Kantor Kesehatan Pelabuhan Kelas II Samarinda'),
(109, 4, 'Kantor Kesehatan Pelabuhan Kelas II Semarang'),
(110, 4, 'Kantor Kesehatan Pelabuhan Kelas II Tanjung Balai Karimun'),
(111, 4, 'Kantor Kesehatan Pelabuhan Kelas II Tanjung Pinang'),
(112, 4, 'Kantor Kesehatan Pelabuhan Kelas II Tarakan'),
(113, 4, 'Kantor Kesehatan Pelabuhan Kelas II Ternate'),
(114, 4, 'Kantor Kesehatan Pelabuhan Kelas III Bengkulu'),
(115, 4, 'Kantor Kesehatan Pelabuhan Kelas III Biak'),
(116, 4, 'Kantor Kesehatan Pelabuhan Kelas III Bitung'),
(117, 4, 'Kantor Kesehatan Pelabuhan Kelas III Jambi'),
(118, 4, 'Kantor Kesehatan Pelabuhan Kelas III Lhokseumawe'),
(119, 4, 'Kantor Kesehatan Pelabuhan Kelas III Manokwari'),
(120, 4, 'Kantor Kesehatan Pelabuhan Kelas III Merauke'),
(121, 4, 'Kantor Kesehatan Pelabuhan Kelas III Palangkaraya'),
(122, 4, 'Kantor Kesehatan Pelabuhan Kelas III Palu'),
(123, 4, 'Kantor Kesehatan Pelabuhan Kelas III Pangkal Pinang'),
(124, 4, 'Kantor Kesehatan Pelabuhan Kelas III Poso'),
(125, 4, 'Kantor Kesehatan Pelabuhan Kelas III Sabang'),
(126, 4, 'Kantor Kesehatan Pelabuhan Kelas III Sampit'),
(127, 4, 'Kantor Kesehatan Pelabuhan Kelas III Sorong'),
(128, 4, 'Kantor Kesehatan Pelabuhan Kelas III Tembilahan'),
(129, 4, 'Kantor Kesehatan Pelabuhan Kelas III Yogyakarta'),
(130, 4, 'Kantor Kesehatan Pelabuhan Kelas IV Entikong'),
(131, 4, 'Kantor Kesehatan Pelabuhan Kelas IV Labuan Bajo'),
(132, 4, 'Balai Besar Teknik Kesehatan Lingkungan dan Pengendalian Penyakit Banjarbaru'),
(133, 4, 'Balai Besar Teknik Kesehatan Lingkungan dan Pengendalian Penyakit Jakarta'),
(134, 4, 'Balai Besar Teknik Kesehatan Lingkungan dan Pengendalian Penyakit Surabaya'),
(135, 4, 'Balai Besar Teknik Kesehatan Lingkungan dan Pengendalian Penyakit Yogyakarta'),
(136, 4, 'Balai Teknik Kesehatan Lingkungan dan Pengendalian Penyakit Kelas I Batam'),
(137, 4, 'Balai Teknik Kesehatan Lingkungan dan Pengendalian Penyakit Kelas I Makassar'),
(138, 4, 'Balai Teknik Kesehatan Lingkungan dan Pengendalian Penyakit Kelas I Manado'),
(139, 4, 'Balai Teknik Kesehatan Lingkungan dan Pengendalian Penyakit Kelas I Medan'),
(140, 4, 'Balai Teknik Kesehatan Lingkungan dan Pengendalian Penyakit Kelas I Palembang'),
(141, 4, 'Balai Teknik Kesehatan Lingkungan dan Pengendalian Penyakit Kelas II Ambon'),
(142, 5, 'Sekretariat Direktorat Jenderal Kesehatan Masyarakat'),
(143, 5, 'Direktorat Promosi Kesehatan dan Pemberdayaan Masyarakat'),
(144, 5, 'Direktorat Gizi dan Kesehatan Ibu dan Anak'),
(145, 5, 'Direktorat Kesehatan Usia Produktif dan Lanjut Usia'),
(146, 5, 'Direktorat Kesehatan Jiwa'),
(147, 5, 'Direktorat Tata Kelola Kesehatan Masyarakat'),
(148, 5, 'Balai Kesehatan Olahraga Masyarakat Bandung'),
(149, 5, 'Balai Kesehatan Tradisional Masyarakat Makassar'),
(150, 5, 'Loka Kesehatan Tradisional Masyarakat Palembang'),
(151, 6, 'Sekretariat Direktorat Jenderal Kefarmasian dan Alat Kesehatan'),
(152, 6, 'Direktorat Ketahanan Kefarmasian dan Alat Kesehatan'),
(153, 6, 'Direktorat Produksi dan Distribusi Kefarmasian'),
(154, 6, 'Direktorat Produksi dan Distribusi Alat Kesehatan'),
(155, 6, 'Direktorat Pengelolaan dan Pelayanan Kefarmasian'),
(156, 6, 'Direktorat Pengawasan Alat Kesehatan'),
(157, 7, 'Sekretariat Direktorat Jenderal Tenaga Kesehatan'),
(158, 7, 'Direktorat Perencanaan Tenaga Kesehatan'),
(159, 7, 'Direktorat Penyediaan Tenaga Kesehatan'),
(160, 7, 'Direktorat Pendayagunaan Tenaga Kesehatan'),
(161, 7, 'Direktorat Peningkatan Mutu Tenaga Kesehatan'),
(162, 7, 'Direktorat Pembinaan dan Pengawasan Tenaga Kesehatan'),
(163, 7, 'Balai Besar Pelatihan Kesehatan Ciloto'),
(164, 7, 'Balai Besar Pelatihan Kesehatan Jakarta'),
(165, 7, 'Balai Besar Pelatihan Kesehatan Makassar'),
(166, 7, 'Balai Pelatihan Kesehatan Batam'),
(167, 7, 'Balai Pelatihan Kesehatan Cikarang'),
(168, 7, 'Balai Pelatihan Kesehatan Semarang'),
(169, 7, 'Poltekkes Kemenkes Bandung'),
(170, 7, 'Poltekkes Kemenkes Jakarta III'),
(171, 7, 'Poltekkes Kemenkes Makassar'),
(172, 7, 'Poltekkes Kemenkes Malang'),
(173, 7, 'Poltekkes Kemenkes Medan'),
(174, 7, 'Poltekkes Kemenkes Semarang'),
(175, 7, 'Poltekkes Kemenkes Surabaya'),
(176, 7, 'Poltekkes Kemenkes Surakarta'),
(177, 7, 'Poltekkes Kemenkes Tasikmalaya'),
(178, 7, 'Poltekkes Kemenkes Yogyakarta'),
(179, 7, 'Poltekkes Kemenkes Aceh'),
(180, 7, 'Poltekkes Kemenkes Banjarmasin'),
(181, 7, 'Poltekkes Kemenkes Banten'),
(182, 7, 'Poltekkes Kemenkes Bengkulu'),
(183, 7, 'Poltekkes Kemenkes Denpasar'),
(184, 7, 'Poltekkes Kemenkes Jakarta I'),
(185, 7, 'Poltekkes Kemenkes Jakarta II'),
(186, 7, 'Poltekkes Kemenkes Jayapura'),
(187, 7, 'Poltekkes Kemenkes Kalimantan Timur'),
(188, 7, 'Poltekkes Kemenkes Kendari'),
(189, 7, 'Poltekkes Kemenkes Kupang'),
(190, 7, 'Poltekkes Kemenkes Manado'),
(191, 7, 'Poltekkes Kemenkes Padang'),
(192, 7, 'Poltekkes Kemenkes Palembang'),
(193, 7, 'Poltekkes Kemenkes Pontianak'),
(194, 7, 'Poltekkes Kemenkes Tanjung Karang'),
(195, 7, 'Poltekkes Kemenkes Gorontalo'),
(196, 7, 'Poltekkes Kemenkes Jambi'),
(197, 7, 'Poltekkes Kemenkes Maluku'),
(198, 7, 'Poltekkes Kemenkes Mamuju'),
(199, 7, 'Poltekkes Kemenkes Mataram'),
(200, 7, 'Poltekkes Kemenkes Palangkaraya'),
(201, 7, 'Poltekkes Kemenkes Palu'),
(202, 7, 'Poltekkes Kemenkes Pangkal Pinang'),
(203, 7, 'Poltekkes Kemenkes Riau'),
(204, 7, 'Poltekkes Kemenkes Sorong'),
(205, 7, 'Poltekkes Kemenkes Tanjungpinang'),
(206, 7, 'Poltekkes Kemenkes Ternate'),
(207, 7, 'Balai Pelatihan Kesehatan Mataram'),
(208, 7, 'Sekretariat Konsil Kedokteran Indonesia'),
(209, 7, 'Sekretariat Konsil Tenaga Kesehatan Indonesia'),
(210, 8, 'Sekretariat Badan Kebijakan Pembangunan Kesehatan'),
(211, 8, 'Pusat Kebijakan Upaya Kesehatan'),
(212, 8, 'Pusat Kebijakan Sistem Ketahanan Kesehatan dan Sumber Daya Kesehatan'),
(213, 8, 'Pusat Kebijakan Pembiayaan dan Desentralisasi Kesehatan'),
(214, 8, 'Pusat Kebijakan Kesehatan Global dan Teknologi Kesehatan'),
(215, 8, 'Balai Besar Penelitian dan Pengembangan Vektor dan Reservoir Penyakit (B2P2VRP)'),
(216, 8, 'Balai Besar Penelitian dan Pengembangan Tanaman Obat dan Obat Tradisional (B2P2TOOT)'),
(217, 8, 'Balai Penelitian dan Pengembangan Kesehatan Kelas I Magelang'),
(218, 8, 'Balai Penelitian dan Pengembangan Kesehatan Kelas I Donggala'),
(219, 8, 'Balai Penelitian dan Pengembangan Kesehatan Kelas I Banjarnegara'),
(220, 8, 'Balai Penelitian dan Pengembangan Kesehatan Kelas II Tanah Bumbu'),
(221, 8, 'Balai Penelitian dan Pengembangan Kesehatan Kelas II Papua'),
(222, 8, 'Balai Penelitian dan Pengembangan Kesehatan Kelas II Baturaja'),
(223, 8, 'Balai Penelitian dan Pengembangan Kesehatan Kelas II Banda Aceh'),
(224, 8, 'Loka Penelitian dan Pengembangan Kesehatan Pangandaran'),
(225, 8, 'Loka Penelitian dan Pengembangan Kesehatan Wakaibubak');

-- --------------------------------------------------------

--
-- Table structure for table `t_tim_rekomjak`
--

CREATE TABLE `t_tim_rekomjak` (
  `id_tim_rekomjak` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_calon_rekomjak` int(11) NOT NULL,
  `jabatan_tim` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_unit_utama`
--

CREATE TABLE `t_unit_utama` (
  `id_unit_utama` int(11) NOT NULL,
  `nama_unit_utama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_unit_utama`
--

INSERT INTO `t_unit_utama` (`id_unit_utama`, `nama_unit_utama`) VALUES
(1, 'Sekretariat Jenderal'),
(2, 'Inspektorat Jenderal'),
(3, 'Direktorat Jenderal Pelayanan Kesehatan'),
(4, 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit'),
(5, 'Direktorat Jenderal Kesehatan Masyarakat'),
(6, 'Direktorat Jenderal Kefarmasian Dan Alat Kesehatan'),
(7, 'Direktorat Jenderal Tenaga Kesehatan'),
(8, 'Badan Kebijakan Pembangunan Kesehatan'),
(9, 'Menkes/ Wakil Menkes/ Staf Ahli Menteri Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `t_usulan`
--

CREATE TABLE `t_usulan` (
  `id_usulan` int(11) NOT NULL,
  `kode_usulan` varchar(15) NOT NULL,
  `id_instansi_lembaga` int(11) NOT NULL,
  `id_unit_utama` int(11) NOT NULL,
  `id_satuan_kerja` int(11) NOT NULL,
  `id_dinkes_prov` int(11) NOT NULL,
  `id_dinkes_kab` int(11) NOT NULL,
  `nama_instansi_non_kemenkes` varchar(255) NOT NULL,
  `nama_pengusul` varchar(255) NOT NULL,
  `jabatan_pengusul` varchar(255) NOT NULL,
  `surat_usulan` varchar(255) NOT NULL,
  `tahun_usulan` char(4) NOT NULL,
  `latar_belakang` varchar(500) NOT NULL,
  `identifikasi_masalah` varchar(500) NOT NULL,
  `tujuan` varchar(500) NOT NULL,
  `catatan` varchar(500) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status_usulan` enum('0','1','2','99') NOT NULL COMMENT '0=Usul;1=Sudah di read;2=Ditindak Lanjuti;99=usulan Ditolak',
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `password`, `role_id`, `is_active`, `date_created`, `created_date`, `created_by`) VALUES
(6, 'Admin', 'admin', '$2y$10$k.jcOaeUe5XjYqY063cWW.OthYBUcQIZJCC3u/nhkIV06SL136Ph6', 1, 1, 1635166554, '0000-00-00 00:00:00', ''),
(34, 'Agnita Triyoga', '198708112010122006', '$2y$10$KXfN6ZRNesn6oJiB/cLnAOvS/S7ds/yT96ak8O79Bq3meSQOuLrAK', 1, 1, 1645708194, '2022-02-24 01:09:54', 'Admin'),
(35, 'Rani Marsini', '198904212010122005', '$2y$10$282RlgfDa0iFj/HYFr.j4Ohxcv7judK0enYD8hSreVZ965..bkm6q', 2, 1, 1646586603, '2022-03-06 06:10:03', 'Admin'),
(36, 'Pretty Multihartina', 'kapus', '$2y$10$Dv/7HoBwQuR/q5oLXDvQJuA0wuIisjMYG7/w5IpmsmQVi8ykzHPIy', 3, 1, 1646586688, '2022-03-06 06:11:28', 'Admin'),
(37, 'Satgas', 'satgas', '$2y$10$zaaXUKqBBJD05iuWoOUV5u4gmTiUibmOzYnQFh/mGVLoKhMN.b5mS', 3, 1, 1646586746, '2022-03-06 06:12:26', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'Admin'),
(3, 'User'),
(4, 'Pengawas');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'Pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Pengelolaan Menu', 'admin/menu', 'fas fa-fw fa-folder', 1),
(3, 2, 'Pengelolaan Submenu', 'admin/submenu', 'fas fa-fw fa-folder-open', 1),
(4, 2, 'Pengelolaan Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(5, 1, 'Ubah Password', 'user/changepass', 'fas fa-fw fa-key', 1),
(6, 2, 'Pengelolaan Pengguna', 'admin/pengguna', 'fas fa-users', 1),
(7, 3, 'Data Pegawai', 'user/datapegawai', 'fas fa-users', 1),
(8, 3, 'Data Swab', 'user/dataswab', 'fas fa-magic', 1),
(9, 3, 'Data Covid', 'user/datacovid', 'fas fa-heartbeat', 1),
(10, 3, 'Data Vaksin', 'user/datavaksin', 'fas fa-plus-square', 1),
(11, 4, 'Laporan Riwayat Covid', 'pengawas/datalaporan', 'fas fa-notes-medical', 1),
(12, 3, 'Data Skoring', 'user/dataskoring', 'fas fa-calculator', 1),
(13, 3, 'Data Riwayat Pegawai', 'user/datalaporan', 'far fa-file-alt', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai_data`
--
ALTER TABLE `pegawai_data`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `t_calon_rekomjak`
--
ALTER TABLE `t_calon_rekomjak`
  ADD PRIMARY KEY (`id_calon_rekomjak`);

--
-- Indexes for table `t_dakung_rekomjak`
--
ALTER TABLE `t_dakung_rekomjak`
  ADD PRIMARY KEY (`id_dakung`);

--
-- Indexes for table `t_instansi_lembaga`
--
ALTER TABLE `t_instansi_lembaga`
  ADD PRIMARY KEY (`id_instansi_lembaga`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_satuan_kerja`
--
ALTER TABLE `t_satuan_kerja`
  ADD PRIMARY KEY (`id_satuan_kerja`);

--
-- Indexes for table `t_tim_rekomjak`
--
ALTER TABLE `t_tim_rekomjak`
  ADD PRIMARY KEY (`id_tim_rekomjak`);

--
-- Indexes for table `t_unit_utama`
--
ALTER TABLE `t_unit_utama`
  ADD PRIMARY KEY (`id_unit_utama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai_data`
--
ALTER TABLE `pegawai_data`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `t_calon_rekomjak`
--
ALTER TABLE `t_calon_rekomjak`
  MODIFY `id_calon_rekomjak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_dakung_rekomjak`
--
ALTER TABLE `t_dakung_rekomjak`
  MODIFY `id_dakung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_instansi_lembaga`
--
ALTER TABLE `t_instansi_lembaga`
  MODIFY `id_instansi_lembaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_satuan_kerja`
--
ALTER TABLE `t_satuan_kerja`
  MODIFY `id_satuan_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `t_tim_rekomjak`
--
ALTER TABLE `t_tim_rekomjak`
  MODIFY `id_tim_rekomjak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_unit_utama`
--
ALTER TABLE `t_unit_utama`
  MODIFY `id_unit_utama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

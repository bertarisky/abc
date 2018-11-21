-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 03:01 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polda`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_site_repeater`
--

CREATE TABLE `alat_site_repeater` (
  `id` int(11) NOT NULL,
  `id_site_repeater` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `ukuran` text NOT NULL,
  `milik` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `kapasitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `antena`
--

CREATE TABLE `antena` (
  `id` int(11) NOT NULL,
  `type_antena` varchar(90) NOT NULL,
  `merk` varchar(90) NOT NULL,
  `nomor_seri` varchar(90) NOT NULL,
  `gain` varchar(90) NOT NULL,
  `kontrak` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antena`
--

INSERT INTO `antena` (`id`, `type_antena`, `merk`, `nomor_seri`, `gain`, `kontrak`) VALUES
(5, 'radio mobile', 'Samsung', '1231244746361823', 'asdasd', 'satu'),
(6, 'radio ht', 'szszsz', 'szszsz', 'asdfsd', 'szszs'),
(7, 'repeater', 'dsadsad', 'asdasd', 'asdas', 'asdasd'),
(8, 'radio mobile', 'asasas', 'sadsadasf', 'asfasfsaf', 'asfsafsaf'),
(11, 'radio fixed', 'asd', 'asd', 'asd', 'asd'),
(12, 'radio fixed', 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `fiture_layanan` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aplikasi`
--

INSERT INTO `aplikasi` (`id`, `kesatuan`, `nama`, `fiture_layanan`, `kontrak`) VALUES
(0, 'sad', 'asd', 'ads', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `batere`
--

CREATE TABLE `batere` (
  `id` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `no_seri` varchar(100) NOT NULL,
  `arus` varchar(100) NOT NULL,
  `thn_pembuatan` year(4) NOT NULL,
  `kontrak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batere`
--

INSERT INTO `batere` (`id`, `merk`, `type`, `no_seri`, `arus`, `thn_pembuatan`, `kontrak`) VALUES
(2, 'qqq', 'qqq', 'www', 'eee', 2018, 'ttt'),
(3, 'wwer34', 'weref', 'r5yth', 'njgyjg', 1990, 'r545yg5r');

-- --------------------------------------------------------

--
-- Table structure for table `data_center`
--

CREATE TABLE `data_center` (
  `id` int(11) NOT NULL,
  `grounding` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_center`
--

INSERT INTO `data_center` (`id`, `grounding`) VALUES
(5, 'grounding'),
(6, 'qwe'),
(7, 'wdwqe');

-- --------------------------------------------------------

--
-- Table structure for table `dsp`
--

CREATE TABLE `dsp` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(90) NOT NULL,
  `dsp` varchar(90) NOT NULL,
  `riil` varchar(90) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsp`
--

INSERT INTO `dsp` (`id`, `kesatuan`, `dsp`, `riil`, `keterangan`) VALUES
(11, 'kesatuan asd', 'dsp', '12345', 'keterangan'),
(12, 'wahyu', 'wahyu', '1234', 'bisa'),
(13, 'asd', 'asd', '123', 'asd'),
(14, 'asd', 'asd', '234234', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `gdg`
--

CREATE TABLE `gdg` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type_gdg` varchar(100) NOT NULL,
  `no_seri` varchar(100) NOT NULL,
  `versi_firmware` varchar(100) NOT NULL,
  `band` varchar(100) NOT NULL,
  `daya` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gdg`
--

INSERT INTO `gdg` (`id`, `nama_barang`, `merk`, `type_gdg`, `no_seri`, `versi_firmware`, `band`, `daya`, `kontrak`, `keterangan`) VALUES
(1, 'ddddaa', 'fffff', 'ggg', '12131', '9.9', 'fff', '222', 'ddd', 'fgggg');

-- --------------------------------------------------------

--
-- Table structure for table `internet`
--

CREATE TABLE `internet` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(100) NOT NULL,
  `id_pelanggan` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `bandwidth` varchar(100) NOT NULL,
  `posisi_node` varchar(100) NOT NULL,
  `perangkat_last` varchar(100) NOT NULL,
  `biaya_bulanan` varchar(100) NOT NULL,
  `pemanfaatan` varchar(100) NOT NULL,
  `tanggungjwb_pembayaran` varchar(100) NOT NULL,
  `pemeliharaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internet`
--

INSERT INTO `internet` (`id`, `kesatuan`, `id_pelanggan`, `jenis`, `bandwidth`, `posisi_node`, `perangkat_last`, `biaya_bulanan`, `pemanfaatan`, `tanggungjwb_pembayaran`, `pemeliharaan`) VALUES
(1, 'yyy', '1234567', 'as', '12a', 'wee', 'wew', 'sdsd', 'rtr', 'gfhfh', 'cvfd'),
(2, 'xx', '16', 'xx', '12b', 'xx', 'xx', '44', 'xx', 'xx', 'xx'),
(3, 'kk', '123', 'kk', '123k', 'kk', 'kk', '12300', 'kk', 'kk', 'kk'),
(4, 'wk', '40', 'wk', '40w', 'wk', 'wk', '40000', 'wk', 'wk', 'wk'),
(0, 'sd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'ads', 'ads'),
(0, 'asd', 'asd', 'asd', 'asd', 'asd', 'ad', 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `jardata`
--

CREATE TABLE `jardata` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type_jardata` varchar(100) NOT NULL,
  `no_seri` varchar(100) NOT NULL,
  `versi_firmware` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jardata`
--

INSERT INTO `jardata` (`id`, `nama_barang`, `merk`, `type_jardata`, `no_seri`, `versi_firmware`, `keterangan`) VALUES
(2, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe'),
(4, 'dftt', 'asb', 'ddd', '1111222', 'ddd', 'wdfty');

-- --------------------------------------------------------

--
-- Table structure for table `jaringan_data`
--

CREATE TABLE `jaringan_data` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(90) NOT NULL,
  `nama_perangkat` varchar(90) NOT NULL,
  `merk` varchar(90) NOT NULL,
  `jenis` varchar(90) NOT NULL,
  `seri` varchar(90) NOT NULL,
  `versi` varchar(90) NOT NULL,
  `posisi` varchar(90) NOT NULL,
  `rak` varchar(90) NOT NULL,
  `kondisi_bb` int(1) NOT NULL,
  `kondisi_rr` int(1) NOT NULL,
  `kondisi_rb` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaringan_data`
--

INSERT INTO `jaringan_data` (`id`, `kesatuan`, `nama_perangkat`, `merk`, `jenis`, `seri`, `versi`, `posisi`, `rak`, `kondisi_bb`, `kondisi_rr`, `kondisi_rb`) VALUES
(1, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 1, 1, 1),
(2, 'jardata kesatuan', 'jardata perangkat', 'jardata merk', 'jardata jenis', 'jardata seri', 'jardata firmware', 'jardata posisi', 'jardata rak', 1, 1, 1),
(4, 'newbaru', 'newbaru', 'newbaru', 'newbaru', 'newbaru', 'newbaru', 'newbaru', 'newbaru', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kabel`
--

CREATE TABLE `kabel` (
  `id` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type_kabel` varchar(100) NOT NULL,
  `panjang` varchar(100) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabel`
--

INSERT INTO `kabel` (`id`, `merk`, `type_kabel`, `panjang`, `roll`, `kontrak`) VALUES
(2, 'sams', '21', '124', '2qw', 'qww,dwdew');

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `no_seri` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `memory` varchar(100) NOT NULL,
  `harddisk` varchar(100) NOT NULL,
  `kegunaan` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL,
  `penanggungjawab` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`id`, `jenis`, `no_seri`, `cpu`, `memory`, `harddisk`, `kegunaan`, `posisi`, `kontrak`, `penanggungjawab`, `keterangan`) VALUES
(2, 'komputer', '1234567890', 'bbb', 'ada', 'ada', 'untuk', 'smg', '231qeqda', 'boni', 'qwe'),
(3, 'laptop', '13444444', 'aaa', 'ada', 'zzz', 'untuk', 'srg', 'ss', 'wahyu', 'asa');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL,
  `bb` varchar(2) NOT NULL,
  `rr` varchar(2) NOT NULL,
  `rb` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemeliharaan`
--

CREATE TABLE `pemeliharaan` (
  `id` int(11) NOT NULL,
  `waktu` date NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `hasil` text NOT NULL,
  `personil_pelaksana` varchar(100) NOT NULL,
  `id_tabel` int(11) NOT NULL,
  `nama_tabel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeliharaan`
--

INSERT INTO `pemeliharaan` (`id`, `waktu`, `kegiatan`, `hasil`, `personil_pelaksana`, `id_tabel`, `nama_tabel`) VALUES
(1, '2018-08-15', 'Kegiatan', 'Hasil', 'Personil Pelakasana', 2, 'site_repeater'),
(8, '2018-08-17', 'asdasd', 'asdasd', 'asdasd', 3, 'radio_fixed'),
(11, '2018-08-18', 'kjkjkjkj', 'dddrd', 'dftffr', 2, 'radio_fixed'),
(13, '2018-08-07', 'asd kegiatan', 'asd hasil', 'asd pelaksana', 9, 'site_repeater'),
(14, '2018-08-06', 'pemeliharaan kegiatan', 'pemeliharaan hasil', 'Personil Pelakasana', 5, 'data_center'),
(15, '2018-08-06', 'asdasdasd', 'asdasdasd', 'asdasdasd', 6, 'data_center'),
(16, '2018-08-02', 'pemeliharaan kegiatan rpt', 'pemeliharaan hasil rpt', 'Personil Pelakasana rpt', 1, 'rpt_convensional'),
(18, '2018-08-01', 'qwe', 'asd', 'qwe', 3, 'rpt_convensional'),
(20, '2018-08-18', 'ee', 'e', 'e', 5, 'rpt_convensional'),
(22, '2018-08-15', 'baru', 'baru', 'baru', 4, 'radio_fixed'),
(23, '2018-08-18', 'qwewqe', 'qwewqe', 'qweqwewqe', 2, 'radio_mobil'),
(24, '2018-08-01', 'faf', 'fasf', 'asfasf', 1, 'radio_mobil'),
(25, '2019-05-03', 'radio ht pemeliharaan kegiatan', 'radio ht pemeliharaan hasil', 'radio ht pemeliharaan pelaksana', 3, 'radio_ht'),
(26, '2018-08-09', 'Kegiatan', 'Hasil', 'Personil Pelakasana', 1, 'radio_ht'),
(27, '2018-08-04', 'a', 'a', 'a', 4, 'radio_ht'),
(28, '2018-08-10', 'z', 'z', 'z', 5, 'radio_ht'),
(29, '2018-08-04', 'd', 'd', 'd', 6, 'radio_ht'),
(30, '2018-08-04', 'new', 'new', 'new', 3, 'jaringan_data'),
(31, '2018-12-31', 'newbaru', 'newbaru', 'newbaru', 4, 'jaringan_data'),
(32, '2018-08-18', 'qew', 'qwe', 'qwe', 2, 'jaringan_data'),
(33, '2018-08-17', 'Kegiatan Pemeliharaan', 'Hasil Pemeliharaan', 'Personil Pelakasana pemeliharaan', 1, 'jaringan_data'),
(36, '2018-08-04', 'Kegiatan Pemeliharaan', 'Hasil Pemeliharaan', 'Personil Pelakasana', 4, 'rpt_convensional'),
(39, '2018-08-15', 'a', 'a', 'a', 1, 'radio_fixed'),
(40, '2018-08-20', 'lhlhl', 'fdhdh', 'ghdgh', 6, 'rpt_convensional'),
(41, '2018-08-09', 'vsat kegiatan', 'vsat hasil', 'vsat personil', 1, 'satelit_vsat'),
(42, '2018-08-09', 'trunking pemeliharaan', 'trunking hasil', 'trunking personil', 1, 'rpt_trunking'),
(44, '2018-08-23', 'lhh', 'uhuo', 'guig', 2, 'rpt_trunking'),
(45, '2018-08-09', 'kgkg', 'kgkg', 'kgk', 5, 'radio_fixed'),
(46, '2018-08-15', 'khkh', 'khkh', 'kh', 3, 'rpt_trunking'),
(47, '2018-08-15', 'fgdg', 'dfgdf', 'sdgsd', 6, 'radio_fixed'),
(48, '2018-08-01', 'wewe', 'w', 'weew', 7, 'data_center'),
(49, '2018-08-01', 'wewe', 'w', 'weew', 8, 'data_center'),
(51, '2018-08-08', 'flyaway pemeliharaan kegiatan', 'flyaway pemeliharaan hasil', 'flyaway pemeliharaan pelaksana', 1, 'satelit_flyaway'),
(52, '2018-08-01', 'hkjg', 'kkj', 'gjkg', 2, 'satelit_flyaway'),
(53, '2018-08-14', 'pemeliharaan kegiatan site', 'pemeliharaan hasil site', 'Personil Pelakasana site', 4, 'site_repeater'),
(54, '2018-08-10', 'asd', 'asd', 'asd', 0, 'aplikasi'),
(55, '0000-00-00', '', '', '', 10, 'site_repeater'),
(56, '0000-00-00', '', '', '', 11, 'site_repeater');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemeliharaan_data_center`
--
CREATE TABLE `pemeliharaan_data_center` (
`id` int(11)
,`waktu` date
,`kegiatan` varchar(100)
,`hasil` text
,`personil_pelaksana` varchar(100)
,`id_tabel` int(11)
,`nama_tabel` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemeliharaan_jaringan_data`
--
CREATE TABLE `pemeliharaan_jaringan_data` (
`id` int(11)
,`waktu` date
,`kegiatan` varchar(100)
,`hasil` text
,`personil_pelaksana` varchar(100)
,`id_tabel` int(11)
,`nama_tabel` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemeliharaan_radio_fixed`
--
CREATE TABLE `pemeliharaan_radio_fixed` (
`id` int(11)
,`waktu` date
,`kegiatan` varchar(100)
,`hasil` text
,`personil_pelaksana` varchar(100)
,`id_tabel` int(11)
,`nama_tabel` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemeliharaan_radio_ht`
--
CREATE TABLE `pemeliharaan_radio_ht` (
`id` int(11)
,`waktu` date
,`kegiatan` varchar(100)
,`hasil` text
,`personil_pelaksana` varchar(100)
,`id_tabel` int(11)
,`nama_tabel` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemeliharaan_radio_mobil`
--
CREATE TABLE `pemeliharaan_radio_mobil` (
`id` int(11)
,`waktu` date
,`kegiatan` varchar(100)
,`hasil` text
,`personil_pelaksana` varchar(100)
,`id_tabel` int(11)
,`nama_tabel` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemeliharaan_rpt_convensional`
--
CREATE TABLE `pemeliharaan_rpt_convensional` (
`id` int(11)
,`waktu` date
,`kegiatan` varchar(100)
,`hasil` text
,`personil_pelaksana` varchar(100)
,`id_tabel` int(11)
,`nama_tabel` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemeliharaan_rpt_trunking`
--
CREATE TABLE `pemeliharaan_rpt_trunking` (
`id` int(11)
,`waktu` date
,`kegiatan` varchar(100)
,`hasil` text
,`personil_pelaksana` varchar(100)
,`id_tabel` int(11)
,`nama_tabel` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemeliharaan_satelit_flyaway`
--
CREATE TABLE `pemeliharaan_satelit_flyaway` (
`id` int(11)
,`waktu` date
,`kegiatan` varchar(100)
,`hasil` text
,`personil_pelaksana` varchar(100)
,`id_tabel` int(11)
,`nama_tabel` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemeliharaan_satelit_vsat`
--
CREATE TABLE `pemeliharaan_satelit_vsat` (
`id` int(11)
,`waktu` date
,`kegiatan` varchar(100)
,`hasil` text
,`personil_pelaksana` varchar(100)
,`id_tabel` int(11)
,`nama_tabel` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemeliharaan_site_repeater`
--
CREATE TABLE `pemeliharaan_site_repeater` (
`id` int(11)
,`waktu` date
,`kegiatan` varchar(100)
,`hasil` text
,`personil_pelaksana` varchar(100)
,`id_tabel` int(11)
,`nama_tabel` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `piranti_lunak`
--

CREATE TABLE `piranti_lunak` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tentang` varchar(80) NOT NULL,
  `tgl_pembuatan` date NOT NULL,
  `penanda_tangan` varchar(50) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piranti_lunak`
--

INSERT INTO `piranti_lunak` (`id`, `jenis`, `nama`, `tentang`, `tgl_pembuatan`, `penanda_tangan`, `dokumen`, `keterangan`) VALUES
(1, 'adasdasd', 'asd', 'asd', '2018-08-09', 'fdsa', 'affa', 'fajsdfasfdf hjafsdjfasd hafsdjfjasd jhasdjfjasjd jgadsjdfasdh hfasdfjasd jafsjdhasd jfasjdfkahsd khafsdkhfkasfd khasfdkhfkasgd'),
(2, 'asdsadsad', 'adssadasd', 'asd', '2018-01-29', 'asd', 'asd', 'asd'),
(3, 'sad', 'asd', 'asd', '2018-09-23', 'asd', 'sad', 'berhasil'),
(4, 'asdsadsad', 'asdsad', 'sadsad', '2018-08-30', 'asdasd', 'asdsad', 'Bonifasius Wahyu Setyawan, Bonifasius Wahyu Setyawan, Bonifasius Wahyu Setyawan,');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `nrp` varchar(30) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `kejuruan` varchar(30) NOT NULL,
  `kompetensi` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `kesatuan`, `nama`, `pangkat`, `nrp`, `pendidikan`, `kejuruan`, `kompetensi`, `keterangan`) VALUES
(1, 'Kesatuan Profile', 'Bonifasius Wahyu Setyawan', 'Jendral', '123908785132', 'Sarjana', 'Informatika', 'Kompetensi', 'Keterangan ');

-- --------------------------------------------------------

--
-- Table structure for table `radio_fixed`
--

CREATE TABLE `radio_fixed` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(90) NOT NULL,
  `radio_merk` varchar(90) NOT NULL,
  `radio_jenis` varchar(90) NOT NULL,
  `radio_seri` varchar(90) NOT NULL,
  `radio_id` varchar(90) NOT NULL,
  `radio_dayapancar` varchar(90) NOT NULL,
  `radio_sensitivitas` varchar(90) NOT NULL,
  `radio_kondisi_bb` tinyint(1) NOT NULL,
  `radio_kondisi_rr` int(1) NOT NULL,
  `radio_kondisi_rb` int(1) NOT NULL,
  `supply_merk` varchar(90) NOT NULL,
  `supply_jenis` varchar(90) NOT NULL,
  `supply_seri` varchar(90) NOT NULL,
  `supply_kondisi_bb` int(1) NOT NULL,
  `supply_kondisi_rr` int(1) NOT NULL,
  `supply_kondisi_rb` int(1) NOT NULL,
  `antena_merk` varchar(90) NOT NULL,
  `antena_jenis` varchar(90) NOT NULL,
  `antena_seri` varchar(90) NOT NULL,
  `antena_gain` varchar(90) NOT NULL,
  `antena_kondisi_bb` int(1) NOT NULL,
  `antena_kondisi_rr` int(1) NOT NULL,
  `antena_kondisi_rb` int(1) NOT NULL,
  `tempat_instal` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radio_fixed`
--

INSERT INTO `radio_fixed` (`id`, `kesatuan`, `radio_merk`, `radio_jenis`, `radio_seri`, `radio_id`, `radio_dayapancar`, `radio_sensitivitas`, `radio_kondisi_bb`, `radio_kondisi_rr`, `radio_kondisi_rb`, `supply_merk`, `supply_jenis`, `supply_seri`, `supply_kondisi_bb`, `supply_kondisi_rr`, `supply_kondisi_rb`, `antena_merk`, `antena_jenis`, `antena_seri`, `antena_gain`, `antena_kondisi_bb`, `antena_kondisi_rr`, `antena_kondisi_rb`, `tempat_instal`) VALUES
(1, 'wqeqewqwekesatuan', 'radio merk', 'radio jenis', 'radio nomor seri', 'radio id', 'radio daya pancar', 'radio sensitivitas', 1, 0, 1, 'supply merk', 'supply type', 'supply nomor seri', 1, 1, 1, 'antena merk', 'antena jenis', 'antena gain', 'antena gain', 1, 1, 1, 'tempat instal'),
(2, 'asdsadasd', 'rty', 'rty', 'rty', 'rty', 'rty', 'rty', 0, 1, 1, 'hjk', 'hjk', 'hjk', 1, 1, 1, 'merk antena', 'jenis antena', 'nomor seri antena', 'gain antena', 1, 1, 1, 'dfg'),
(3, 'asd', 'a', 'a', 'a', 'a', 'a', 'a', 1, 1, 1, 'a', 'a', 'a', 0, 0, 0, 'a', 'a', 'a', 'a', 0, 0, 0, 'a'),
(4, 'baru', 'baru', 'baru', 'baru', 'baru', 'baru', 'baru', 1, 0, 1, 'baru', 'baru', 'baru', 0, 1, 0, 'baru', 'baru', 'baru', 'baru', 1, 0, 1, 'baru'),
(5, 'we', 'wee', 'wwee', 'w', 'lh', 'drd', 'dtyd', 1, 1, 1, 'gjfg', 'fg', 'gf', 1, 1, 1, 'hfj', 'jfjf', 'fjf', 'jfj', 1, 1, 1, 'wee'),
(6, 'safda', 'asf', 'asfasf', 'safdasf', 'asfasf', 'afas', 'safaf', 1, 1, 1, 'sdASD', 'ASD', 'ASD', 1, 0, 0, 'SSQ', 'qw', 'qww', 'qwqw', 1, 0, 0, 'asfas');

-- --------------------------------------------------------

--
-- Table structure for table `radio_ht`
--

CREATE TABLE `radio_ht` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(90) NOT NULL,
  `radio_merk` varchar(90) NOT NULL,
  `radio_jenis` varchar(90) NOT NULL,
  `radio_seri` varchar(90) NOT NULL,
  `radio_id` varchar(90) NOT NULL,
  `radio_dayapancar` varchar(90) NOT NULL,
  `radio_sensitivitas` varchar(90) NOT NULL,
  `radio_kondisi_bb` int(1) NOT NULL,
  `radio_kondisi_rr` int(1) NOT NULL,
  `radio_kondisi_rb` int(1) NOT NULL,
  `pemegang` varchar(90) NOT NULL,
  `call_sign` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radio_ht`
--

INSERT INTO `radio_ht` (`id`, `kesatuan`, `radio_merk`, `radio_jenis`, `radio_seri`, `radio_id`, `radio_dayapancar`, `radio_sensitivitas`, `radio_kondisi_bb`, `radio_kondisi_rr`, `radio_kondisi_rb`, `pemegang`, `call_sign`) VALUES
(1, 'radio ht kesatuan', 'ht merk', 'ht jenis', 'ht seri', 'ht id', 'ht daya pancar', 'ht sensitivitas', 1, 0, 0, 'radio ht pemegang', 'radio ht call sign'),
(3, 'radio ht kesatuan', 'radio ht merk ', 'radio ht jenis', 'radio ht seri', 'radio ht id', 'radio ht daya pancar', 'radio ht sensitivitas', 1, 1, 1, 'radio ht pemegang', 'radio ht call sign'),
(4, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 1, 0, 1, 'a', 'a'),
(5, 'z', 'z', 'z', 'z', 'z', 'z', 'z', 1, 1, 1, 'z', 'z'),
(6, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 1, 1, 0, 'd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `radio_mobil`
--

CREATE TABLE `radio_mobil` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(90) NOT NULL,
  `radio_merk` varchar(90) NOT NULL,
  `radio_jenis` varchar(90) NOT NULL,
  `radio_seri` varchar(90) NOT NULL,
  `radio_id` varchar(90) NOT NULL,
  `radio_dayapancar` varchar(90) NOT NULL,
  `radio_sensitivitas` varchar(90) NOT NULL,
  `radio_kondisi_bb` int(1) NOT NULL,
  `radio_kondisi_rr` int(1) NOT NULL,
  `radio_kondisi_rb` int(1) NOT NULL,
  `antena_merk` varchar(90) NOT NULL,
  `antena_jenis` varchar(90) NOT NULL,
  `antena_seri` varchar(90) NOT NULL,
  `antena_gain` varchar(90) NOT NULL,
  `antena_kondisi_bb` int(1) NOT NULL,
  `antena_kondisi_rr` int(1) NOT NULL,
  `antena_kondisi_rb` int(1) NOT NULL,
  `no_pol` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radio_mobil`
--

INSERT INTO `radio_mobil` (`id`, `kesatuan`, `radio_merk`, `radio_jenis`, `radio_seri`, `radio_id`, `radio_dayapancar`, `radio_sensitivitas`, `radio_kondisi_bb`, `radio_kondisi_rr`, `radio_kondisi_rb`, `antena_merk`, `antena_jenis`, `antena_seri`, `antena_gain`, `antena_kondisi_bb`, `antena_kondisi_rr`, `antena_kondisi_rb`, `no_pol`) VALUES
(1, 'radio mobil kesatuan', 'radio mobil merk', 'radio mobil jenis', 'radio mobil no seri', 'radio mobil id', 'radio mobil daya pancar', 'radio mobil sensitivitas', 1, 0, 1, 'radio mobil antena merk', 'radio mobil antena jenis', 'radio mobil antena seri', 'radio mobil antena gain ', 1, 0, 1, 'radio mobil no pol');

-- --------------------------------------------------------

--
-- Table structure for table `rpt_convensional`
--

CREATE TABLE `rpt_convensional` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(90) NOT NULL,
  `site` varchar(90) NOT NULL,
  `rpt_nomor` varchar(90) NOT NULL,
  `rpt_kontrak` varchar(90) NOT NULL,
  `rpt_nama` varchar(90) NOT NULL,
  `rpt_merk` varchar(90) NOT NULL,
  `rpt_jenis` varchar(90) NOT NULL,
  `rpt_teknologi` varchar(90) NOT NULL,
  `rpt_seri` varchar(90) NOT NULL,
  `rpt_versi` varchar(90) NOT NULL,
  `rpt_frek_rx` varchar(90) NOT NULL,
  `rpt_frek_tx` varchar(90) NOT NULL,
  `rpt_tone_rx` varchar(90) NOT NULL,
  `rpt_tone_tx` varchar(90) NOT NULL,
  `rpt_sensitivitas` varchar(90) NOT NULL,
  `rpt_dayapancar` varchar(90) NOT NULL,
  `rpt_power` varchar(90) NOT NULL,
  `rpt_rak` varchar(90) NOT NULL,
  `rpt_kondisi_bb` int(1) NOT NULL,
  `rpt_kondisi_rr` int(1) NOT NULL,
  `rpt_kondisi_rb` int(1) NOT NULL,
  `antena_merk` varchar(90) NOT NULL,
  `antena_jenis` varchar(90) NOT NULL,
  `antena_gain` varchar(90) NOT NULL,
  `antena_posisi` varchar(90) NOT NULL,
  `antena_kontrak` varchar(90) NOT NULL,
  `kabel_merk` varchar(90) NOT NULL,
  `kabel_jenis` varchar(90) NOT NULL,
  `kabel_panjang` varchar(90) NOT NULL,
  `kabel_kontrak` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpt_convensional`
--

INSERT INTO `rpt_convensional` (`id`, `kesatuan`, `site`, `rpt_nomor`, `rpt_kontrak`, `rpt_nama`, `rpt_merk`, `rpt_jenis`, `rpt_teknologi`, `rpt_seri`, `rpt_versi`, `rpt_frek_rx`, `rpt_frek_tx`, `rpt_tone_rx`, `rpt_tone_tx`, `rpt_sensitivitas`, `rpt_dayapancar`, `rpt_power`, `rpt_rak`, `rpt_kondisi_bb`, `rpt_kondisi_rr`, `rpt_kondisi_rb`, `antena_merk`, `antena_jenis`, `antena_gain`, `antena_posisi`, `antena_kontrak`, `kabel_merk`, `kabel_jenis`, `kabel_panjang`, `kabel_kontrak`) VALUES
(6, 'kesatuan', 'jhk', 'hkh', 'khk', 'hkjhjkh', 'hkhk', 'kjh', 'kh', '9869', 'kjhk', 'khk', 'hkjhjk', 'jkhkjh', 'jkhjk', 'hjh', 'kh', 'kjh', 'jkhjk', 0, 1, 1, 'hkjh', 'kjh', 'hjkh', 'jhk', 'khhkjh', 'kjhjh', 'jkhkh', 'kjh', 'kjh');

-- --------------------------------------------------------

--
-- Table structure for table `rpt_trunking`
--

CREATE TABLE `rpt_trunking` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(90) NOT NULL,
  `site` varchar(90) NOT NULL,
  `rbs_kontrak` varchar(90) NOT NULL,
  `rbs_rbs` varchar(90) NOT NULL,
  `rbs_merk` varchar(90) NOT NULL,
  `rbs_jenis` varchar(90) NOT NULL,
  `rbs_teknologi` varchar(90) NOT NULL,
  `rbs_seri` varchar(90) NOT NULL,
  `rbs_versi` varchar(90) NOT NULL,
  `rbs_setup_sensitivitas` varchar(90) NOT NULL,
  `rbs_setup_dayapancar` varchar(90) NOT NULL,
  `rbs_setup_bandwith` varchar(90) NOT NULL,
  `rbs_rak` varchar(90) NOT NULL,
  `rbs_kondisi_bb` tinyint(1) NOT NULL,
  `rbs_kondisi_rr` tinyint(1) NOT NULL,
  `rbs_kondisi_rb` tinyint(1) NOT NULL,
  `router_merk` varchar(90) NOT NULL,
  `router_seri` varchar(90) NOT NULL,
  `router_versi` varchar(90) NOT NULL,
  `router_kontrak` varchar(90) NOT NULL,
  `router_rak` varchar(90) NOT NULL,
  `router_kondisi_bb` tinyint(1) NOT NULL,
  `router_kondisi_rr` tinyint(1) NOT NULL,
  `router_kondisi_rb` tinyint(1) NOT NULL,
  `switch_merk` varchar(90) NOT NULL,
  `switch_seri` varchar(90) NOT NULL,
  `switch_versi` varchar(90) NOT NULL,
  `switch_kontrak` varchar(90) NOT NULL,
  `switch_rak` varchar(90) NOT NULL,
  `switch_kondisi_bb` tinyint(1) NOT NULL,
  `switch_kondisi_rr` tinyint(1) NOT NULL,
  `switch_kondisi_rb` tinyint(1) NOT NULL,
  `antenarx_merk` varchar(90) NOT NULL,
  `antenarx_seri` varchar(90) NOT NULL,
  `antenarx_gain` varchar(90) NOT NULL,
  `antenarx_posisi` varchar(90) NOT NULL,
  `antenarx_pola` varchar(90) NOT NULL,
  `antenarx_kontrak` varchar(90) NOT NULL,
  `antenarx_kondisi_bb` tinyint(1) NOT NULL,
  `antenarx_kondisi_rr` tinyint(1) NOT NULL,
  `antenarx_kondisi_rb` tinyint(1) NOT NULL,
  `antenatx_merk` varchar(90) NOT NULL,
  `antenatx_seri` varchar(90) NOT NULL,
  `antenatx_gain` varchar(90) NOT NULL,
  `antenatx_posisi` varchar(90) NOT NULL,
  `antenatx_pola` varchar(90) NOT NULL,
  `antenatx_kontrak` varchar(90) NOT NULL,
  `antenatx_kondisi_bb` tinyint(1) NOT NULL,
  `antenatx_kondisi_rr` tinyint(1) NOT NULL,
  `antenatx_kondisi_rb` tinyint(1) NOT NULL,
  `tta_merk` varchar(90) NOT NULL,
  `tta_seri` varchar(90) NOT NULL,
  `tta_gain` varchar(90) NOT NULL,
  `tta_posisi` varchar(90) NOT NULL,
  `tta_kontrak` varchar(90) NOT NULL,
  `tta_kondisi_bb` tinyint(1) NOT NULL,
  `tta_kondisi_rr` tinyint(1) NOT NULL,
  `tta_kondisi_rb` tinyint(1) NOT NULL,
  `rmc_merk` varchar(90) NOT NULL,
  `rmc_seri` varchar(90) NOT NULL,
  `rmc_channel` varchar(90) NOT NULL,
  `rmc_rak` varchar(90) NOT NULL,
  `rmc_kontrak` varchar(90) NOT NULL,
  `rmc_kondisi_bb` tinyint(1) NOT NULL,
  `rmc_kondisi_rr` tinyint(1) NOT NULL,
  `rmc_kondisi_rb` tinyint(1) NOT NULL,
  `txcobiner_merk` varchar(90) NOT NULL,
  `txcobiner_seri` varchar(90) NOT NULL,
  `txcobiner_channel` varchar(90) NOT NULL,
  `txcobiner_rak` varchar(90) NOT NULL,
  `txcobiner_kontrak` varchar(90) NOT NULL,
  `txcobiner_kondisi_bb` tinyint(1) NOT NULL,
  `txcobiner_kondisi_rr` tinyint(1) NOT NULL,
  `txcobiner_kondisi_rb` tinyint(1) NOT NULL,
  `kabelrx_merk` varchar(90) NOT NULL,
  `kabelrx_jenis` varchar(90) NOT NULL,
  `kabelrx_panjang` varchar(90) NOT NULL,
  `kabelrx_kontrak` varchar(90) NOT NULL,
  `kabelrx_kondisi_bb` tinyint(1) NOT NULL,
  `kabelrx_kondisi_rr` tinyint(1) NOT NULL,
  `kabelrx_kondisi_rb` tinyint(1) NOT NULL,
  `kabeltx_merk` varchar(90) NOT NULL,
  `kabeltx_jenis` varchar(90) NOT NULL,
  `kabeltx_panjang` varchar(90) NOT NULL,
  `kabeltx_kontrak` varchar(90) NOT NULL,
  `kabeltx_kondisi_bb` tinyint(1) NOT NULL,
  `kabeltx_kondisi_rr` tinyint(1) NOT NULL,
  `kabeltx_kondisi_rb` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpt_trunking`
--

INSERT INTO `rpt_trunking` (`id`, `kesatuan`, `site`, `rbs_kontrak`, `rbs_rbs`, `rbs_merk`, `rbs_jenis`, `rbs_teknologi`, `rbs_seri`, `rbs_versi`, `rbs_setup_sensitivitas`, `rbs_setup_dayapancar`, `rbs_setup_bandwith`, `rbs_rak`, `rbs_kondisi_bb`, `rbs_kondisi_rr`, `rbs_kondisi_rb`, `router_merk`, `router_seri`, `router_versi`, `router_kontrak`, `router_rak`, `router_kondisi_bb`, `router_kondisi_rr`, `router_kondisi_rb`, `switch_merk`, `switch_seri`, `switch_versi`, `switch_kontrak`, `switch_rak`, `switch_kondisi_bb`, `switch_kondisi_rr`, `switch_kondisi_rb`, `antenarx_merk`, `antenarx_seri`, `antenarx_gain`, `antenarx_posisi`, `antenarx_pola`, `antenarx_kontrak`, `antenarx_kondisi_bb`, `antenarx_kondisi_rr`, `antenarx_kondisi_rb`, `antenatx_merk`, `antenatx_seri`, `antenatx_gain`, `antenatx_posisi`, `antenatx_pola`, `antenatx_kontrak`, `antenatx_kondisi_bb`, `antenatx_kondisi_rr`, `antenatx_kondisi_rb`, `tta_merk`, `tta_seri`, `tta_gain`, `tta_posisi`, `tta_kontrak`, `tta_kondisi_bb`, `tta_kondisi_rr`, `tta_kondisi_rb`, `rmc_merk`, `rmc_seri`, `rmc_channel`, `rmc_rak`, `rmc_kontrak`, `rmc_kondisi_bb`, `rmc_kondisi_rr`, `rmc_kondisi_rb`, `txcobiner_merk`, `txcobiner_seri`, `txcobiner_channel`, `txcobiner_rak`, `txcobiner_kontrak`, `txcobiner_kondisi_bb`, `txcobiner_kondisi_rr`, `txcobiner_kondisi_rb`, `kabelrx_merk`, `kabelrx_jenis`, `kabelrx_panjang`, `kabelrx_kontrak`, `kabelrx_kondisi_bb`, `kabelrx_kondisi_rr`, `kabelrx_kondisi_rb`, `kabeltx_merk`, `kabeltx_jenis`, `kabeltx_panjang`, `kabeltx_kontrak`, `kabeltx_kondisi_bb`, `kabeltx_kondisi_rr`, `kabeltx_kondisi_rb`) VALUES
(1, 'trunking kesatuan', 'trunking site', '0', 'trunking rbs rbs', 'trunking rbs merk', 'trunking rbs jenis', 'trunking rbs teknologi', 'trunking rbs seri', 'trunking rbs versi', 'trunking rbs setup sensitivitas', 'trunking rbs setup daya pancar', 'trunking rbs setup bandwidth', '0', 1, 1, 1, 'trunking router merk', 'trunking router seri', 'trunking router versi', 'trunking router kontark', 'trunking router rak', 1, 1, 1, 'trunking switch merk', 'truking switch seri', 'trunking switch versi', 'trunking switch kontrak', 'trunking switch rak', 1, 1, 1, 'trunking antena rx merk', 'trunking antena rx seri', 'trunking antena rx gain', 'trunking antena rx posisi', 'trunking antena rx pola radiasi', 'trunking antena rx kontrak', 1, 1, 1, 'trunking antena tx merk', 'trunking antena tx seri', 'trunking antena tx gain', 'trunking antena tx posisi', 'trunking antena tx pola radiasi', 'trunking antena tx kontrak', 1, 1, 1, 'trunking tta merk', 'trunking tta seri', 'trunking tta gain', 'trunking tta posisi', 'trunking tta kontrak', 1, 1, 1, 'trunking rmc merk', 'trunking rmc seri', 'trunking rmc channel', 'trunking rmc rak', 'trunking rmc kontrak', 1, 1, 1, 'trunking tx cobiner merk', 'trunking tx cobiner seri', 'trunking tx cobiner channel', 'trunking tx cobiner rak', 'trunking tx cobiner kontrak', 1, 1, 1, 'trunking kabel rx merk', 'trunking kabel rx jenis', 'trunking kabel rx panjang', 'trunking kabel rx kontrak', 1, 1, 1, 'trunking kabel tx merk', 'trunking kabel tx jenis', 'trunking kabel tx panjang', 'trunking kabel tx kontrak', 1, 1, 1),
(2, 'asdsad', 'fsdfs', '0', 'hkg', 'hjg', 'hjg', 'hg', 'hh', 'gh', 'gj', 'gh', 'gjhg', '0', 0, 1, 1, 'gkhg', 'gkh', 'hghkgk', 'g', 'kgkhg', 1, 1, 1, 'gjkgkg', 'kg', 'hghk', 'ghg', 'hjghjg', 1, 1, 0, 'hkgkhg', 'kgk', 'gkjg', 'kgk', 'gjkg', 'jkgk', 1, 1, 0, 'hghg', 'fg', 'f', 'c,h', 'yk', 'vyf', 1, 1, 1, 'jk', 'lkio', 'hou', 'huh', 'l', 1, 1, 1, 'khgg', 'g', 'giygig', 'gyig', 'iyg', 1, 1, 0, 'kgu', 'igi', 'ygy', 'gygiy', 'g', 0, 0, 1, 'gigi', 'ygi', 'gig', 'igi', 0, 1, 0, 'ig', 'igi', 'g', 'gi', 1, 0, 1),
(3, 'jkj', 'gk', '0', 'gh', 'gh', 'gh', 'hgh', 'ghg', 'hgh', 'ghgh', 'ghg', 'hgg', '0', 0, 0, 1, 'nb', 'g', 'hgh', 'gh', 'gh', 0, 1, 0, 'gh', 'ghg', 'hg', 'hg', 'hg', 1, 1, 0, 'khkh', 'gjg', 'jg', 'jgj', 'gj', 'gjg', 0, 0, 1, 'j', 'jg', 'jgj', 'gj', 'gj', 'gj', 1, 0, 0, 'jgj', 'gj', 'gj', 'gj', 'gj', 1, 0, 0, 'gj', 'gjg', 'jg', 'jg', 'jgj', 0, 1, 0, 'jg', 'jgj', 'gj', 'gjg', 'jg', 1, 0, 0, 'j', 'jgj', 'gj', 'j', 0, 1, 0, 'kkh', 'gj', 'gjg', 'jg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `satelit_flyaway`
--

CREATE TABLE `satelit_flyaway` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(90) NOT NULL,
  `jenis_antena` varchar(90) NOT NULL,
  `disk_merk` varchar(90) NOT NULL,
  `disk_jenis` varchar(90) NOT NULL,
  `disk_ukuran` varchar(90) NOT NULL,
  `disk_kondisi_bb` tinyint(1) NOT NULL,
  `disk_kondisi_rr` tinyint(1) NOT NULL,
  `disk_kondisi_rb` tinyint(1) NOT NULL,
  `antena_merk` varchar(90) NOT NULL,
  `antena_jenis` varchar(90) NOT NULL,
  `antena_ukuran` varchar(90) NOT NULL,
  `antena_kondisi_bb` tinyint(1) NOT NULL,
  `antena_kondisi_rr` tinyint(1) NOT NULL,
  `antena_kondisi_rb` tinyint(1) NOT NULL,
  `sspa_merk` varchar(90) NOT NULL,
  `sspa_jenis` varchar(90) NOT NULL,
  `sspa_seri` varchar(90) NOT NULL,
  `sspa_frekuensi` varchar(90) NOT NULL,
  `sspa_daya` varchar(90) NOT NULL,
  `sspa_kondisi_bb` tinyint(1) NOT NULL,
  `sspa_kondisi_rr` tinyint(1) NOT NULL,
  `sspa_kondisi_rb` tinyint(1) NOT NULL,
  `up_merk` varchar(90) NOT NULL,
  `up_jenis` varchar(90) NOT NULL,
  `up_seri` varchar(90) NOT NULL,
  `up_frekuensi` varchar(90) NOT NULL,
  `up_daya` varchar(90) NOT NULL,
  `up_kondisi_bb` tinyint(1) NOT NULL,
  `up_kondisi_rr` tinyint(1) NOT NULL,
  `up_kondisi_rb` tinyint(1) NOT NULL,
  `lna_merk` varchar(90) NOT NULL,
  `lna_jenis` varchar(90) NOT NULL,
  `lna_seri` tinyint(90) NOT NULL,
  `lna_frekuensi` varchar(90) NOT NULL,
  `lna_kondisi_bb` tinyint(1) NOT NULL,
  `lna_kondisi_rr` tinyint(1) NOT NULL,
  `lna_kondisi_rb` tinyint(1) NOT NULL,
  `feedhorn_merk` varchar(90) NOT NULL,
  `feedhorn_jenis` varchar(90) NOT NULL,
  `feedhorn_seri` varchar(90) NOT NULL,
  `feedhorn_kondisi_bb` tinyint(1) NOT NULL,
  `feedhorn_kondisi_rr` tinyint(1) NOT NULL,
  `feedhorn_kondisi_rb` tinyint(1) NOT NULL,
  `modem_merk` varchar(90) NOT NULL,
  `modem_jenis` varchar(90) NOT NULL,
  `modem_seri` varchar(90) NOT NULL,
  `modem_kondisi_bb` tinyint(1) NOT NULL,
  `modem_kondisi_rr` tinyint(1) NOT NULL,
  `modem_kondisi_rb` tinyint(1) NOT NULL,
  `codec_merk` varchar(90) NOT NULL,
  `codec_jenis` varchar(90) NOT NULL,
  `codec_seri` varchar(90) NOT NULL,
  `codec_versi` varchar(90) NOT NULL,
  `codec_kondisi_bb` tinyint(1) NOT NULL,
  `codec_kondisi_rr` tinyint(1) NOT NULL,
  `codec_kondisi_rb` tinyint(1) NOT NULL,
  `kamera_merk` varchar(90) NOT NULL,
  `kamera_jenis` varchar(90) NOT NULL,
  `kamera_seri` varchar(90) NOT NULL,
  `kamera_kondisi_bb` tinyint(1) NOT NULL,
  `kamera_kondisi_rr` tinyint(1) NOT NULL,
  `kamera_kondisi_rb` tinyint(1) NOT NULL,
  `televisi_merk` varchar(90) NOT NULL,
  `televisi_jenis` varchar(90) NOT NULL,
  `televisi_seri` varchar(90) NOT NULL,
  `televisi_kondisi_bb` tinyint(1) NOT NULL,
  `televisi_kondisi_rr` tinyint(1) NOT NULL,
  `televisi_kondisi_rb` tinyint(1) NOT NULL,
  `laptop_merk` varchar(90) NOT NULL,
  `laptop_jenis` varchar(90) NOT NULL,
  `laptop_seri` varchar(90) NOT NULL,
  `laptop_kondisi_bb` tinyint(1) NOT NULL,
  `laptop_kondisi_rr` tinyint(1) NOT NULL,
  `laptop_kondisi_rb` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satelit_flyaway`
--

INSERT INTO `satelit_flyaway` (`id`, `kesatuan`, `jenis_antena`, `disk_merk`, `disk_jenis`, `disk_ukuran`, `disk_kondisi_bb`, `disk_kondisi_rr`, `disk_kondisi_rb`, `antena_merk`, `antena_jenis`, `antena_ukuran`, `antena_kondisi_bb`, `antena_kondisi_rr`, `antena_kondisi_rb`, `sspa_merk`, `sspa_jenis`, `sspa_seri`, `sspa_frekuensi`, `sspa_daya`, `sspa_kondisi_bb`, `sspa_kondisi_rr`, `sspa_kondisi_rb`, `up_merk`, `up_jenis`, `up_seri`, `up_frekuensi`, `up_daya`, `up_kondisi_bb`, `up_kondisi_rr`, `up_kondisi_rb`, `lna_merk`, `lna_jenis`, `lna_seri`, `lna_frekuensi`, `lna_kondisi_bb`, `lna_kondisi_rr`, `lna_kondisi_rb`, `feedhorn_merk`, `feedhorn_jenis`, `feedhorn_seri`, `feedhorn_kondisi_bb`, `feedhorn_kondisi_rr`, `feedhorn_kondisi_rb`, `modem_merk`, `modem_jenis`, `modem_seri`, `modem_kondisi_bb`, `modem_kondisi_rr`, `modem_kondisi_rb`, `codec_merk`, `codec_jenis`, `codec_seri`, `codec_versi`, `codec_kondisi_bb`, `codec_kondisi_rr`, `codec_kondisi_rb`, `kamera_merk`, `kamera_jenis`, `kamera_seri`, `kamera_kondisi_bb`, `kamera_kondisi_rr`, `kamera_kondisi_rb`, `televisi_merk`, `televisi_jenis`, `televisi_seri`, `televisi_kondisi_bb`, `televisi_kondisi_rr`, `televisi_kondisi_rb`, `laptop_merk`, `laptop_jenis`, `laptop_seri`, `laptop_kondisi_bb`, `laptop_kondisi_rr`, `laptop_kondisi_rb`) VALUES
(1, 'flyaway kesatuan', 'flyaway jenis antena', 'flyaway disk merk', 'flyaway disk jenis', 'flyaway disk ukuran', 1, 1, 1, 'flyaway antena merk', 'flyaway antena jenis', 'flyaway antena ukuran', 1, 1, 1, 'flyaway sspa merk', 'flyaway sspa jenis', 'flyaway sspa seri', 'flyaway sspa frekuensi', 'flyaway sspa daya', 1, 1, 1, 'flyaway up down merk', 'flyaway up down jenis', 'flyaway up down seri', 'flyaway up down frekuensi', 'flyaway up down daya', 1, 1, 1, 'flyaway lna merk', 'flyaway lna jenis', 0, 'flyaway lna frekuensi kerja', 1, 1, 1, 'flyaway feedhorn merk', 'flyaway feedhorn jenis', 'flyaway feedhorn seri', 1, 1, 1, 'flyaway modem merk', 'flyaway modem jenis', 'flyaway modem seri', 1, 1, 1, 'flyaway codec merk', 'flyaway codec jenis', 'flyaway codec seri', 'flyaway codec versi', 1, 1, 1, 'flyaway kamera merk', 'flyaway kamera jenis', 'flyaway kamera seri', 1, 1, 1, 'flyaway televisi merk', 'flyaway televisi jenis', 'flyaway televisi seri', 1, 1, 1, 'flyaway laptop merk', 'flyaway laptop jenis', 'flyaway laptop seri', 1, 1, 1),
(2, 'jhqjqjhjqj', 'h', 'jh', 'j', 'jh', 0, 0, 0, 'jh', 'jhj', 'hj', 0, 0, 0, 'hj', 'hj', 'hj', 'h', 'jh', 0, 0, 0, 'hj', 'hj', 'hj', 'hj', 'hj', 0, 0, 0, 'jh', 'jg', 0, 'kf', 0, 0, 0, 'hhj', 'fj', 'fg', 0, 0, 0, 'fghf', 'ghf', 'hg', 0, 0, 0, 'ghf', 'ghfg', 'fhg', 'fgh', 0, 0, 0, 'fg', 'fg', 'fg', 0, 0, 0, 'fghf', 'ghf', 'ghf', 0, 0, 0, 'gh', 'fgh', 'fg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `satelit_vsat`
--

CREATE TABLE `satelit_vsat` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(90) NOT NULL,
  `jenis_antena` varchar(90) NOT NULL,
  `disk_merk` varchar(90) NOT NULL,
  `disk_jenis` varchar(90) NOT NULL,
  `disk_ukuran` varchar(90) NOT NULL,
  `disk_kondisi_bb` tinyint(1) NOT NULL,
  `disk_kondisi_rr` tinyint(1) NOT NULL,
  `disk_kondisi_rb` tinyint(1) NOT NULL,
  `sspa_merk` varchar(90) NOT NULL,
  `sspa_jenis` varchar(90) NOT NULL,
  `sspa_seri` varchar(90) NOT NULL,
  `sspa_frekuensi` varchar(90) NOT NULL,
  `sspa_daya` varchar(90) NOT NULL,
  `sspa_kondisi_bb` tinyint(1) NOT NULL,
  `sspa_kondisi_rr` tinyint(1) NOT NULL,
  `sspa_kondisi_rb` tinyint(1) NOT NULL,
  `up_merk` varchar(90) NOT NULL,
  `up_jenis` varchar(90) NOT NULL,
  `up_seri` varchar(90) NOT NULL,
  `up_frekuensi` varchar(90) NOT NULL,
  `up_daya` varchar(90) NOT NULL,
  `up_kondisi_bb` tinyint(1) NOT NULL,
  `up_kondisi_rr` tinyint(1) NOT NULL,
  `up_kondisi_rb` tinyint(1) NOT NULL,
  `lna_merk` varchar(90) NOT NULL,
  `lna_jenis` varchar(90) NOT NULL,
  `lna_seri` varchar(90) NOT NULL,
  `lna_frekuensi` varchar(90) NOT NULL,
  `lna_kondisi_bb` tinyint(1) NOT NULL,
  `lna_kondisi_rr` tinyint(1) NOT NULL,
  `lna_kondisi_rb` tinyint(1) NOT NULL,
  `feedhorn_merk` varchar(90) NOT NULL,
  `feedhorn_jenis` varchar(90) NOT NULL,
  `feedhorn_seri` varchar(90) NOT NULL,
  `feedhorn_kondisi_bb` tinyint(1) NOT NULL,
  `feedhorn_kondisi_rr` tinyint(1) NOT NULL,
  `feedhorn_kondisi_rb` tinyint(1) NOT NULL,
  `modem_merk` varchar(90) NOT NULL,
  `modem_jenis` varchar(90) NOT NULL,
  `modem_seri` varchar(90) NOT NULL,
  `modem_kondisi_bb` tinyint(1) NOT NULL,
  `modem_kondisi_rr` tinyint(1) NOT NULL,
  `modem_kondisi_rb` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satelit_vsat`
--

INSERT INTO `satelit_vsat` (`id`, `kesatuan`, `jenis_antena`, `disk_merk`, `disk_jenis`, `disk_ukuran`, `disk_kondisi_bb`, `disk_kondisi_rr`, `disk_kondisi_rb`, `sspa_merk`, `sspa_jenis`, `sspa_seri`, `sspa_frekuensi`, `sspa_daya`, `sspa_kondisi_bb`, `sspa_kondisi_rr`, `sspa_kondisi_rb`, `up_merk`, `up_jenis`, `up_seri`, `up_frekuensi`, `up_daya`, `up_kondisi_bb`, `up_kondisi_rr`, `up_kondisi_rb`, `lna_merk`, `lna_jenis`, `lna_seri`, `lna_frekuensi`, `lna_kondisi_bb`, `lna_kondisi_rr`, `lna_kondisi_rb`, `feedhorn_merk`, `feedhorn_jenis`, `feedhorn_seri`, `feedhorn_kondisi_bb`, `feedhorn_kondisi_rr`, `feedhorn_kondisi_rb`, `modem_merk`, `modem_jenis`, `modem_seri`, `modem_kondisi_bb`, `modem_kondisi_rr`, `modem_kondisi_rb`) VALUES
(1, 'vsat kesatuan', 'vsat antena', 'disk merk', 'disk jenis', 'disk ukuran', 1, 1, 1, 'sspa merk', 'sspa jenis', 'sspa seri', 'sspa frekuensi', 'sspa daya', 1, 1, 1, 'up merk', 'up jenis', 'up seri', 'up frekuensi', 'up daya', 1, 1, 1, 'lna merk', 'lna jenis', 'lna seri', 'lna frekuensi', 1, 1, 1, 'feedhorn merk', 'feedhorn jenis', 'feedhorn seri', 1, 1, 1, 'modem merk', 'modem jenis', 'modem seri', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `scurity`
--

CREATE TABLE `scurity` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type_scurity` varchar(100) NOT NULL,
  `no_seri` varchar(100) NOT NULL,
  `fungsi` varchar(100) NOT NULL,
  `kondisi_bb` varchar(100) NOT NULL,
  `kondisi_rr` varchar(100) NOT NULL,
  `kondisi_rb` varchar(100) NOT NULL,
  `akses_waktu` date NOT NULL,
  `akses_kegiatan` varchar(100) NOT NULL,
  `akses_pelaksana` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scurity`
--

INSERT INTO `scurity` (`id`, `kesatuan`, `merk`, `type_scurity`, `no_seri`, `fungsi`, `kondisi_bb`, `kondisi_rr`, `kondisi_rb`, `akses_waktu`, `akses_kegiatan`, `akses_pelaksana`, `kontrak`) VALUES
(1, 'asd', 'asd', 'asd', '3453454', 'sdfsd', '1', '1', '1', '2018-08-04', 'wer', 't', 'wet');

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE `server` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type_server` varchar(100) NOT NULL,
  `no_seri` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `memory` varchar(100) NOT NULL,
  `internal_hardisk` varchar(100) NOT NULL,
  `pemanfaatan` varchar(100) NOT NULL,
  `kondisi_bb` varchar(100) NOT NULL,
  `kondisi_rr` varchar(100) NOT NULL,
  `kondisi_rb` varchar(100) NOT NULL,
  `akses_waktu` date NOT NULL,
  `akses_kegiatan` varchar(100) NOT NULL,
  `akses_pelaksana` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server`
--

INSERT INTO `server` (`id`, `kesatuan`, `merk`, `type_server`, `no_seri`, `cpu`, `memory`, `internal_hardisk`, `pemanfaatan`, `kondisi_bb`, `kondisi_rr`, `kondisi_rb`, `akses_waktu`, `akses_kegiatan`, `akses_pelaksana`, `kontrak`) VALUES
(1, 'kesatuan', 'merk', 'jenis', '123', 'cpu', 'memory', 'internal', 'pemanfaatan', '1', '1', '1', '2018-08-03', 'kegiatan', 'pelaksana', 'kontrak');

-- --------------------------------------------------------

--
-- Table structure for table `site_repeater`
--

CREATE TABLE `site_repeater` (
  `id` int(11) NOT NULL,
  `nama_site` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `koordinat` text NOT NULL,
  `elevasi` varchar(100) NOT NULL,
  `jln_akses` text NOT NULL,
  `id_selter` int(11) NOT NULL,
  `id_tower` int(11) NOT NULL,
  `id_genset` int(11) NOT NULL,
  `id_ups` int(11) NOT NULL,
  `id_batere` int(11) NOT NULL,
  `id_rak` int(11) NOT NULL,
  `id_kontak` int(11) NOT NULL,
  `grounding` varchar(100) NOT NULL,
  `coverage` varchar(100) NOT NULL,
  `id_pemeliharaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_repeater`
--

INSERT INTO `site_repeater` (`id`, `nama_site`, `alamat`, `koordinat`, `elevasi`, `jln_akses`, `id_selter`, `id_tower`, `id_genset`, `id_ups`, `id_batere`, `id_rak`, `id_kontak`, `grounding`, `coverage`, `id_pemeliharaan`) VALUES
(10, '1', 'Karangjati', '2', 'Elevasi', 'Jalan Akses', 7, 1, 1, 1, 1, 1, 1, 'Groundiing', 'Coverage', 1),
(11, 'abc', 'abc', 'abc', 'abc', 'abc', 7, 1, 1, 1, 1, 1, 1, 'abc', 'abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_repeater_batere`
--

CREATE TABLE `site_repeater_batere` (
  `id` int(11) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `kapasitas` varchar(100) NOT NULL,
  `milik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_repeater_batere`
--

INSERT INTO `site_repeater_batere` (`id`, `nomor`, `kontrak`, `merk`, `jenis`, `seri`, `kapasitas`, `milik`) VALUES
(1, '123', 'Kontrak C', 'asus', 'iuo', '0987', '128', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `site_repeater_genset`
--

CREATE TABLE `site_repeater_genset` (
  `id` int(11) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `kapasitas` varchar(100) NOT NULL,
  `milik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_repeater_genset`
--

INSERT INTO `site_repeater_genset` (`id`, `nomor`, `kontrak`, `merk`, `jenis`, `seri`, `kapasitas`, `milik`) VALUES
(1, '011', 'kontrak 1', 'samsung', 'qqq', '123456789', '120', 'Saya');

-- --------------------------------------------------------

--
-- Table structure for table `site_repeater_kontak`
--

CREATE TABLE `site_repeater_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_repeater_kontak`
--

INSERT INTO `site_repeater_kontak` (`id`, `nama`, `nomor`) VALUES
(1, 'Bonifasius Wahyu Setyawan', '085799706408'),
(2, 'Berta Risky AP', '086799761234');

-- --------------------------------------------------------

--
-- Table structure for table `site_repeater_pemeliharaan`
--

CREATE TABLE `site_repeater_pemeliharaan` (
  `id` int(11) NOT NULL,
  `waktu` date NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `hasil` text NOT NULL,
  `personil_pelaksana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_repeater_pemeliharaan`
--

INSERT INTO `site_repeater_pemeliharaan` (`id`, `waktu`, `kegiatan`, `hasil`, `personil_pelaksana`) VALUES
(1, '2018-10-16', 'ngecat', 'bagus', 'wahyu');

-- --------------------------------------------------------

--
-- Table structure for table `site_repeater_rak`
--

CREATE TABLE `site_repeater_rak` (
  `id` int(11) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_repeater_rak`
--

INSERT INTO `site_repeater_rak` (`id`, `nomor`, `kontrak`, `ukuran`) VALUES
(1, '432', 'Kontrak Z', '100');

-- --------------------------------------------------------

--
-- Table structure for table `site_repeater_selter`
--

CREATE TABLE `site_repeater_selter` (
  `id` int(11) NOT NULL,
  `kontrak` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `milik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_repeater_selter`
--

INSERT INTO `site_repeater_selter` (`id`, `kontrak`, `jenis`, `ukuran`, `milik`) VALUES
(7, '001', 'Selter A', '200', 'Site Repeater A');

-- --------------------------------------------------------

--
-- Table structure for table `site_repeater_tower`
--

CREATE TABLE `site_repeater_tower` (
  `id` int(11) NOT NULL,
  `kontrak` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `tinggi` varchar(100) NOT NULL,
  `milik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_repeater_tower`
--

INSERT INTO `site_repeater_tower` (`id`, `kontrak`, `jenis`, `tinggi`, `milik`) VALUES
(1, '001', 'Tower A', '500', 'Site Repeater B');

-- --------------------------------------------------------

--
-- Table structure for table `site_repeater_ups`
--

CREATE TABLE `site_repeater_ups` (
  `id` int(11) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `kapasitas` varchar(100) NOT NULL,
  `milik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_repeater_ups`
--

INSERT INTO `site_repeater_ups` (`id`, `nomor`, `kontrak`, `merk`, `jenis`, `seri`, `kapasitas`, `milik`) VALUES
(1, '034', 'kontrak ups', 'xiaomi', 'erd', '543216', '170', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type_storage` varchar(100) NOT NULL,
  `no_seri` varchar(100) NOT NULL,
  `rpm` varchar(100) NOT NULL,
  `kapasitas` varchar(100) NOT NULL,
  `pemanfaatan` varchar(100) NOT NULL,
  `kondisi_bb` varchar(100) NOT NULL,
  `kondisi_rr` varchar(100) NOT NULL,
  `kondisi_rb` varchar(100) NOT NULL,
  `akses_waktu` date NOT NULL,
  `akses_kegiatan` varchar(100) NOT NULL,
  `akses_pelaksana` varchar(100) NOT NULL,
  `kontrak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`id`, `kesatuan`, `merk`, `type_storage`, `no_seri`, `rpm`, `kapasitas`, `pemanfaatan`, `kondisi_bb`, `kondisi_rr`, `kondisi_rb`, `akses_waktu`, `akses_kegiatan`, `akses_pelaksana`, `kontrak`) VALUES
(1, 'keatiugui', 'jgkg', 'kgkhg', '53758', '65884', '78585', 'fjhf', '1', '0', '1', '2018-08-11', 'kjg', 'jkh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `telepon`
--

CREATE TABLE `telepon` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `pengguna` varchar(100) NOT NULL,
  `posisi_node` varchar(100) NOT NULL,
  `perawatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telepon`
--

INSERT INTO `telepon` (`id`, `kesatuan`, `no_telepon`, `pengguna`, `posisi_node`, `perawatan`) VALUES
(1, 'kesatuan', 'telepon', 'pengguna', 'posisi node', 'perawatan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(2, '0', '0', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'asd', 'asd@asd.com', '7815696ecbf1c96e6894b779456d330e'),
(5, 'wahyu', 'wahyu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Bonifasius Wahyu Setyawan', 'wbonifasius@gmail.com', 'eff9ebdfcf6e5afcfc17a21660914d33');

-- --------------------------------------------------------

--
-- Table structure for table `vpn`
--

CREATE TABLE `vpn` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(30) NOT NULL,
  `id_pelanggan` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `bandwidth` varchar(30) NOT NULL,
  `posisi_node` varchar(30) NOT NULL,
  `perangkat_last` varchar(30) NOT NULL,
  `biaya_bulanan` varchar(30) NOT NULL,
  `pemanfaatan` varchar(30) NOT NULL,
  `tanggungjwb_pembayaran` varchar(30) NOT NULL,
  `pemeliharaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vpn`
--

INSERT INTO `vpn` (`id`, `kesatuan`, `id_pelanggan`, `jenis`, `bandwidth`, `posisi_node`, `perangkat_last`, `biaya_bulanan`, `pemanfaatan`, `tanggungjwb_pembayaran`, `pemeliharaan`) VALUES
(1, 'kesatuan', '123', 'jenis', 'bandwith', 'posisi node', 'perangkat', 'biaya', 'pemanfaatan', 'tanggungjawab', 'pemeliharaan');

-- --------------------------------------------------------

--
-- Structure for view `pemeliharaan_data_center`
--
DROP TABLE IF EXISTS `pemeliharaan_data_center`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemeliharaan_data_center`  AS  select `pemeliharaan`.`id` AS `id`,`pemeliharaan`.`waktu` AS `waktu`,`pemeliharaan`.`kegiatan` AS `kegiatan`,`pemeliharaan`.`hasil` AS `hasil`,`pemeliharaan`.`personil_pelaksana` AS `personil_pelaksana`,`pemeliharaan`.`id_tabel` AS `id_tabel`,`pemeliharaan`.`nama_tabel` AS `nama_tabel` from `pemeliharaan` where (`pemeliharaan`.`nama_tabel` = 'data_center') ;

-- --------------------------------------------------------

--
-- Structure for view `pemeliharaan_jaringan_data`
--
DROP TABLE IF EXISTS `pemeliharaan_jaringan_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemeliharaan_jaringan_data`  AS  select `pemeliharaan`.`id` AS `id`,`pemeliharaan`.`waktu` AS `waktu`,`pemeliharaan`.`kegiatan` AS `kegiatan`,`pemeliharaan`.`hasil` AS `hasil`,`pemeliharaan`.`personil_pelaksana` AS `personil_pelaksana`,`pemeliharaan`.`id_tabel` AS `id_tabel`,`pemeliharaan`.`nama_tabel` AS `nama_tabel` from `pemeliharaan` where (`pemeliharaan`.`nama_tabel` = 'jaringan_data') ;

-- --------------------------------------------------------

--
-- Structure for view `pemeliharaan_radio_fixed`
--
DROP TABLE IF EXISTS `pemeliharaan_radio_fixed`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemeliharaan_radio_fixed`  AS  select `pemeliharaan`.`id` AS `id`,`pemeliharaan`.`waktu` AS `waktu`,`pemeliharaan`.`kegiatan` AS `kegiatan`,`pemeliharaan`.`hasil` AS `hasil`,`pemeliharaan`.`personil_pelaksana` AS `personil_pelaksana`,`pemeliharaan`.`id_tabel` AS `id_tabel`,`pemeliharaan`.`nama_tabel` AS `nama_tabel` from `pemeliharaan` where (`pemeliharaan`.`nama_tabel` = 'radio_fixed') ;

-- --------------------------------------------------------

--
-- Structure for view `pemeliharaan_radio_ht`
--
DROP TABLE IF EXISTS `pemeliharaan_radio_ht`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemeliharaan_radio_ht`  AS  select `pemeliharaan`.`id` AS `id`,`pemeliharaan`.`waktu` AS `waktu`,`pemeliharaan`.`kegiatan` AS `kegiatan`,`pemeliharaan`.`hasil` AS `hasil`,`pemeliharaan`.`personil_pelaksana` AS `personil_pelaksana`,`pemeliharaan`.`id_tabel` AS `id_tabel`,`pemeliharaan`.`nama_tabel` AS `nama_tabel` from `pemeliharaan` where (`pemeliharaan`.`nama_tabel` = 'radio_ht') ;

-- --------------------------------------------------------

--
-- Structure for view `pemeliharaan_radio_mobil`
--
DROP TABLE IF EXISTS `pemeliharaan_radio_mobil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemeliharaan_radio_mobil`  AS  select `pemeliharaan`.`id` AS `id`,`pemeliharaan`.`waktu` AS `waktu`,`pemeliharaan`.`kegiatan` AS `kegiatan`,`pemeliharaan`.`hasil` AS `hasil`,`pemeliharaan`.`personil_pelaksana` AS `personil_pelaksana`,`pemeliharaan`.`id_tabel` AS `id_tabel`,`pemeliharaan`.`nama_tabel` AS `nama_tabel` from `pemeliharaan` where (`pemeliharaan`.`nama_tabel` = 'radio_mobil') ;

-- --------------------------------------------------------

--
-- Structure for view `pemeliharaan_rpt_convensional`
--
DROP TABLE IF EXISTS `pemeliharaan_rpt_convensional`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemeliharaan_rpt_convensional`  AS  select `pemeliharaan`.`id` AS `id`,`pemeliharaan`.`waktu` AS `waktu`,`pemeliharaan`.`kegiatan` AS `kegiatan`,`pemeliharaan`.`hasil` AS `hasil`,`pemeliharaan`.`personil_pelaksana` AS `personil_pelaksana`,`pemeliharaan`.`id_tabel` AS `id_tabel`,`pemeliharaan`.`nama_tabel` AS `nama_tabel` from `pemeliharaan` where (`pemeliharaan`.`nama_tabel` = 'rpt_convensional') ;

-- --------------------------------------------------------

--
-- Structure for view `pemeliharaan_rpt_trunking`
--
DROP TABLE IF EXISTS `pemeliharaan_rpt_trunking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemeliharaan_rpt_trunking`  AS  select `pemeliharaan`.`id` AS `id`,`pemeliharaan`.`waktu` AS `waktu`,`pemeliharaan`.`kegiatan` AS `kegiatan`,`pemeliharaan`.`hasil` AS `hasil`,`pemeliharaan`.`personil_pelaksana` AS `personil_pelaksana`,`pemeliharaan`.`id_tabel` AS `id_tabel`,`pemeliharaan`.`nama_tabel` AS `nama_tabel` from `pemeliharaan` where (`pemeliharaan`.`nama_tabel` = 'rpt_trunking') ;

-- --------------------------------------------------------

--
-- Structure for view `pemeliharaan_satelit_flyaway`
--
DROP TABLE IF EXISTS `pemeliharaan_satelit_flyaway`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemeliharaan_satelit_flyaway`  AS  select `pemeliharaan`.`id` AS `id`,`pemeliharaan`.`waktu` AS `waktu`,`pemeliharaan`.`kegiatan` AS `kegiatan`,`pemeliharaan`.`hasil` AS `hasil`,`pemeliharaan`.`personil_pelaksana` AS `personil_pelaksana`,`pemeliharaan`.`id_tabel` AS `id_tabel`,`pemeliharaan`.`nama_tabel` AS `nama_tabel` from `pemeliharaan` where (`pemeliharaan`.`nama_tabel` = 'satelit_flyaway') ;

-- --------------------------------------------------------

--
-- Structure for view `pemeliharaan_satelit_vsat`
--
DROP TABLE IF EXISTS `pemeliharaan_satelit_vsat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemeliharaan_satelit_vsat`  AS  select `pemeliharaan`.`id` AS `id`,`pemeliharaan`.`waktu` AS `waktu`,`pemeliharaan`.`kegiatan` AS `kegiatan`,`pemeliharaan`.`hasil` AS `hasil`,`pemeliharaan`.`personil_pelaksana` AS `personil_pelaksana`,`pemeliharaan`.`id_tabel` AS `id_tabel`,`pemeliharaan`.`nama_tabel` AS `nama_tabel` from `pemeliharaan` where (`pemeliharaan`.`nama_tabel` = 'satelit_vsat') ;

-- --------------------------------------------------------

--
-- Structure for view `pemeliharaan_site_repeater`
--
DROP TABLE IF EXISTS `pemeliharaan_site_repeater`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemeliharaan_site_repeater`  AS  select `pemeliharaan`.`id` AS `id`,`pemeliharaan`.`waktu` AS `waktu`,`pemeliharaan`.`kegiatan` AS `kegiatan`,`pemeliharaan`.`hasil` AS `hasil`,`pemeliharaan`.`personil_pelaksana` AS `personil_pelaksana`,`pemeliharaan`.`id_tabel` AS `id_tabel`,`pemeliharaan`.`nama_tabel` AS `nama_tabel` from `pemeliharaan` where (`pemeliharaan`.`nama_tabel` = 'site_repeater') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_site_repeater`
--
ALTER TABLE `alat_site_repeater`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_site_repeater` (`id_site_repeater`);

--
-- Indexes for table `antena`
--
ALTER TABLE `antena`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_center`
--
ALTER TABLE `data_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dsp`
--
ALTER TABLE `dsp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jaringan_data`
--
ALTER TABLE `jaringan_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piranti_lunak`
--
ALTER TABLE `piranti_lunak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio_fixed`
--
ALTER TABLE `radio_fixed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio_ht`
--
ALTER TABLE `radio_ht`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio_mobil`
--
ALTER TABLE `radio_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rpt_convensional`
--
ALTER TABLE `rpt_convensional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rpt_trunking`
--
ALTER TABLE `rpt_trunking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satelit_flyaway`
--
ALTER TABLE `satelit_flyaway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satelit_vsat`
--
ALTER TABLE `satelit_vsat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scurity`
--
ALTER TABLE `scurity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_repeater`
--
ALTER TABLE `site_repeater`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_selter` (`id_selter`),
  ADD KEY `id_tower` (`id_tower`),
  ADD KEY `id_genset` (`id_genset`),
  ADD KEY `id_ups` (`id_ups`),
  ADD KEY `id_batere` (`id_batere`),
  ADD KEY `id_rak` (`id_rak`),
  ADD KEY `id_kontak` (`id_kontak`),
  ADD KEY `id_pemeliharaan` (`id_pemeliharaan`);

--
-- Indexes for table `site_repeater_batere`
--
ALTER TABLE `site_repeater_batere`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_repeater_genset`
--
ALTER TABLE `site_repeater_genset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_repeater_kontak`
--
ALTER TABLE `site_repeater_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_repeater_pemeliharaan`
--
ALTER TABLE `site_repeater_pemeliharaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_repeater_rak`
--
ALTER TABLE `site_repeater_rak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_repeater_selter`
--
ALTER TABLE `site_repeater_selter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_repeater_tower`
--
ALTER TABLE `site_repeater_tower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_repeater_ups`
--
ALTER TABLE `site_repeater_ups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telepon`
--
ALTER TABLE `telepon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vpn`
--
ALTER TABLE `vpn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_site_repeater`
--
ALTER TABLE `alat_site_repeater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `antena`
--
ALTER TABLE `antena`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `data_center`
--
ALTER TABLE `data_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dsp`
--
ALTER TABLE `dsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jaringan_data`
--
ALTER TABLE `jaringan_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `piranti_lunak`
--
ALTER TABLE `piranti_lunak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `radio_fixed`
--
ALTER TABLE `radio_fixed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `radio_ht`
--
ALTER TABLE `radio_ht`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `radio_mobil`
--
ALTER TABLE `radio_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rpt_convensional`
--
ALTER TABLE `rpt_convensional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rpt_trunking`
--
ALTER TABLE `rpt_trunking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `satelit_flyaway`
--
ALTER TABLE `satelit_flyaway`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `satelit_vsat`
--
ALTER TABLE `satelit_vsat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `scurity`
--
ALTER TABLE `scurity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `server`
--
ALTER TABLE `server`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_repeater`
--
ALTER TABLE `site_repeater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `site_repeater_batere`
--
ALTER TABLE `site_repeater_batere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_repeater_genset`
--
ALTER TABLE `site_repeater_genset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_repeater_kontak`
--
ALTER TABLE `site_repeater_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `site_repeater_pemeliharaan`
--
ALTER TABLE `site_repeater_pemeliharaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_repeater_rak`
--
ALTER TABLE `site_repeater_rak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_repeater_selter`
--
ALTER TABLE `site_repeater_selter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `site_repeater_tower`
--
ALTER TABLE `site_repeater_tower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_repeater_ups`
--
ALTER TABLE `site_repeater_ups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `telepon`
--
ALTER TABLE `telepon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `vpn`
--
ALTER TABLE `vpn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alat_site_repeater`
--
ALTER TABLE `alat_site_repeater`
  ADD CONSTRAINT `alat_site_repeater_ibfk_1` FOREIGN KEY (`id_site_repeater`) REFERENCES `site_repeater` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

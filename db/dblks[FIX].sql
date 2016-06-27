-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2016 at 03:43 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_analyzer`
--

CREATE TABLE `tb_analyzer` (
  `id_analy` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `analyzer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_analyzer`
--

INSERT INTO `tb_analyzer` (`id_analy`, `no_rekmed`, `analyzer`) VALUES
(2, '056569', ''),
(3, '037753', ''),
(5, '043520', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_analyzer_hijau`
--

CREATE TABLE `tb_analyzer_hijau` (
  `id_analy_hijau` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `analyzer_hijau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_analyzer_hijau`
--

INSERT INTO `tb_analyzer_hijau` (`id_analy_hijau`, `no_rekmed`, `analyzer_hijau`) VALUES
(2, '056569', ''),
(3, '037753', ''),
(5, '043520', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_asal_spesimen`
--

CREATE TABLE `tb_asal_spesimen` (
  `id_asal_spesimen` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_vena` tinyint(1) NOT NULL,
  `col_arteri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_asal_spesimen`
--

INSERT INTO `tb_asal_spesimen` (`id_asal_spesimen`, `no_rekmed`, `col_vena`, `col_arteri`) VALUES
(2, '056569', 0, ''),
(3, '037753', 0, ''),
(5, '043520', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_asal_spesimen_hijau`
--

CREATE TABLE `tb_asal_spesimen_hijau` (
  `id_asal_spesimen_hijau` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_vena_hijau` tinyint(1) NOT NULL,
  `col_arteri_hijau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_asal_spesimen_hijau`
--

INSERT INTO `tb_asal_spesimen_hijau` (`id_asal_spesimen_hijau`, `no_rekmed`, `col_vena_hijau`, `col_arteri_hijau`) VALUES
(2, '056569', 0, ''),
(3, '037753', 0, ''),
(5, '043520', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `hasil_1` varchar(10) NOT NULL,
  `hasil_2` varchar(10) NOT NULL,
  `hasil_3` varchar(10) NOT NULL,
  `hasil_4` varchar(10) NOT NULL,
  `hasil_5` varchar(10) NOT NULL,
  `hasil_6` varchar(10) NOT NULL,
  `hasil_7` varchar(10) NOT NULL,
  `hasil_8` varchar(10) NOT NULL,
  `hasil_9` varchar(10) NOT NULL,
  `hasil_10` varchar(10) NOT NULL,
  `hasil_11` varchar(10) NOT NULL,
  `hasil_12` varchar(10) NOT NULL,
  `hasil_13` varchar(10) NOT NULL,
  `hasil_14` varchar(10) NOT NULL,
  `hasil_15` varchar(10) NOT NULL,
  `hasil_16` varchar(10) NOT NULL,
  `hasil_17` varchar(10) NOT NULL,
  `hasil_18` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `no_rekmed`, `hasil_1`, `hasil_2`, `hasil_3`, `hasil_4`, `hasil_5`, `hasil_6`, `hasil_7`, `hasil_8`, `hasil_9`, `hasil_10`, `hasil_11`, `hasil_12`, `hasil_13`, `hasil_14`, `hasil_15`, `hasil_16`, `hasil_17`, `hasil_18`) VALUES
(2, '056569', '7.5', '27', '1.2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '037753', '10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '043520', '4.8', '116', '24', '1.0', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_hijau`
--

CREATE TABLE `tb_hasil_hijau` (
  `id_hasil_hijau` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `hasil_hijau_1` varchar(10) NOT NULL,
  `hasil_hijau_2` varchar(10) NOT NULL,
  `hasil_hijau_3` varchar(10) NOT NULL,
  `hasil_hijau_4` varchar(10) NOT NULL,
  `hasil_hijau_5` varchar(10) NOT NULL,
  `hasil_hijau_6` varchar(10) NOT NULL,
  `hasil_hijau_7` varchar(10) NOT NULL,
  `hasil_hijau_8` varchar(10) NOT NULL,
  `hasil_hijau_9` varchar(10) NOT NULL,
  `hasil_hijau_10` varchar(10) NOT NULL,
  `hasil_hijau_11` varchar(10) NOT NULL,
  `hasil_hijau_12` varchar(10) NOT NULL,
  `hasil_hijau_13` varchar(10) NOT NULL,
  `hasil_hijau_14` varchar(10) NOT NULL,
  `hasil_hijau_15` varchar(10) NOT NULL,
  `hasil_hijau_16` varchar(10) NOT NULL,
  `hasil_hijau_17` varchar(10) NOT NULL,
  `hasil_hijau_18` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil_hijau`
--

INSERT INTO `tb_hasil_hijau` (`id_hasil_hijau`, `no_rekmed`, `hasil_hijau_1`, `hasil_hijau_2`, `hasil_hijau_3`, `hasil_hijau_4`, `hasil_hijau_5`, `hasil_hijau_6`, `hasil_hijau_7`, `hasil_hijau_8`, `hasil_hijau_9`, `hasil_hijau_10`, `hasil_hijau_11`, `hasil_hijau_12`, `hasil_hijau_13`, `hasil_hijau_14`, `hasil_hijau_15`, `hasil_hijau_16`, `hasil_hijau_17`, `hasil_hijau_18`) VALUES
(2, '056569', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '037753', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '043520', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kon_spesimen`
--

CREATE TABLE `tb_kon_spesimen` (
  `id_k_spe` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_baik` tinyint(1) NOT NULL,
  `col_lisis` tinyint(1) NOT NULL,
  `col_lipemik` tinyint(1) NOT NULL,
  `col_ikterik` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kon_spesimen`
--

INSERT INTO `tb_kon_spesimen` (`id_k_spe`, `no_rekmed`, `col_baik`, `col_lisis`, `col_lipemik`, `col_ikterik`) VALUES
(2, '056569', 0, 0, 0, 0),
(3, '037753', 0, 0, 0, 0),
(5, '043520', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kon_spesimen_hijau`
--

CREATE TABLE `tb_kon_spesimen_hijau` (
  `id_k_spe_hijau` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_baik_hijau` tinyint(1) NOT NULL,
  `col_lisis_hijau` tinyint(1) NOT NULL,
  `col_lipemik_hijau` tinyint(1) NOT NULL,
  `col_ikterik_hijau` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kon_spesimen_hijau`
--

INSERT INTO `tb_kon_spesimen_hijau` (`id_k_spe_hijau`, `no_rekmed`, `col_baik_hijau`, `col_lisis_hijau`, `col_lipemik_hijau`, `col_ikterik_hijau`) VALUES
(2, '056569', 0, 0, 0, 0),
(3, '037753', 0, 0, 0, 0),
(5, '043520', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_krm`
--

CREATE TABLE `tb_krm` (
  `id_krm` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_hematologi` tinyint(1) NOT NULL,
  `col_hemostatis` tinyint(1) NOT NULL,
  `col_analisis_cairan` tinyint(1) NOT NULL,
  `col_kimia_klinik` tinyint(1) NOT NULL,
  `col_imunoserologi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_krm`
--

INSERT INTO `tb_krm` (`id_krm`, `no_rekmed`, `col_hematologi`, `col_hemostatis`, `col_analisis_cairan`, `col_kimia_klinik`, `col_imunoserologi`) VALUES
(2, '056569', 0, 0, 0, 0, 0),
(3, '037753', 0, 0, 0, 0, 0),
(5, '043520', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_krm_hijau`
--

CREATE TABLE `tb_krm_hijau` (
  `id_krm_hijau` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_hematologi_hijau` tinyint(1) NOT NULL,
  `col_hemostatis_hijau` tinyint(1) NOT NULL,
  `col_analisis_cairan_hijau` tinyint(1) NOT NULL,
  `col_kimia_klinik_hijau` tinyint(1) NOT NULL,
  `col_imunoserologi_hijau` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_krm_hijau`
--

INSERT INTO `tb_krm_hijau` (`id_krm_hijau`, `no_rekmed`, `col_hematologi_hijau`, `col_hemostatis_hijau`, `col_analisis_cairan_hijau`, `col_kimia_klinik_hijau`, `col_imunoserologi_hijau`) VALUES
(2, '056569', 0, 0, 0, 0, 0),
(3, '037753', 0, 0, 0, 0, 0),
(5, '043520', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nama_tes`
--

CREATE TABLE `tb_nama_tes` (
  `kd_notasi` varchar(5) NOT NULL,
  `nama_tes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nama_tes`
--

INSERT INTO `tb_nama_tes` (`kd_notasi`, `nama_tes`) VALUES
('A1A', 'Alfa 1 Antirispin'),
('AAV', 'Anti HAV IgM'),
('ABAT', 'Analisis Batu'),
('ACTG', 'Anti Chlamydia Trachomatis Lg G'),
('ACTM', 'Anti Chlamydia Trachomatis Lg M'),
('AEBV', 'Anti EBV EA Lg A'),
('AFP', 'Alkali Fortapase'),
('AFP1', 'AFP'),
('AGD', 'Analisis Gas Darah'),
('AHB', 'Analisis HB'),
('AHBC', 'Anti HBc'),
('AHBE', 'Anti Hbe'),
('AHBS', 'Anti Hbs(Kuantitif)'),
('AHCV', 'Anti HCV'),
('AHIV', 'Anti HIV'),
('ALB', 'Albumin'),
('ALP', 'ALP'),
('ALS', 'Amilase'),
('AMFE', 'Amfetamin'),
('AMUB', 'Amuba'),
('APOA', 'Apoa a'),
('APOB', 'Apo b'),
('APTT', 'APTT'),
('AS', 'Asam Folat'),
('ASPE', 'Analisis Sperma'),
('ASTO', 'ASTO'),
('AU', 'Asam Urat'),
('AVCA', 'Anti EBV VCA LG A'),
('BALP', 'BALP'),
('BC12', 'Biomarker C-12 Protein Chip'),
('BD', 'Blirubin Direx'),
('BHUR', 'Beta HGC Urin(Kuantitif)'),
('BJ', 'BJ'),
('BLRU', 'Blirubin'),
('BT', 'Blirubin Total'),
('C3KM', 'C3 Komplemen'),
('C4KM', 'C4 Komplemen'),
('CA', 'Calcium'),
('CA12', 'CA125'),
('CA15', 'CA 15-3'),
('CA19', 'CA 19-9'),
('CA72', 'CA 72-4'),
('CAIA', 'Cairan Asites'),
('CAIO', 'Calcium ION'),
('CAIP', 'Cairan Pleura'),
('CAIS', 'Cairan Sendi'),
('CAO', 'Cairan Otak'),
('CASR', 'Kalsium Serum'),
('CAUR', 'Calcium Urine'),
('CEA', 'CEA'),
('CF21', 'Cyfra 21-1'),
('CHLT', 'Cholonesterasi '),
('CK', 'CK'),
('CKMB', 'CKMB'),
('CL', 'Clorida'),
('CLUR', 'Chlorida Urine'),
('CMVM', 'CMV Lg M'),
('COLI', 'E. Coli'),
('CRP', 'CRP'),
('CSC', 'Cystatin C '),
('DD', 'D. Dinner'),
('DHRT', 'DHF RApid Test'),
('DNSI', 'Dengue NSI Antigen'),
('DRHS', 'Darah Samar (hB Spesi)'),
('EDT', 'Evaluasi Darah Tepi'),
('EST', 'Evaluasi Sumsum Tulang'),
('FA', 'Fosfor Anorganik'),
('FARU', 'Faeces Rutin'),
('FAUR', 'Fosfor Anorganik Urine'),
('FB', 'Fibrinoge'),
('FE', 'Besi'),
('FILA', 'Filaris'),
('FOSR', 'Fosfor Serum'),
('FPSA', 'Free PSA'),
('FRT', 'Feritin'),
('FSH', 'FSH'),
('FT4', 'FT 4'),
('GD', 'Golongan Darah A, B, O, dan Rh'),
('GGT', 'Gamma GT'),
('GK2PP', 'Glukosa 2 Jam PP'),
('GKLS', 'Glukosa'),
('GKP', 'Glukosa Puasa'),
('GKS', 'Glukosa Sewaktu'),
('GLB', 'Globulin'),
('GO', 'Go (Mikroskopik)'),
('GOT', 'GOT'),
('GPT', 'GPT'),
('GRAM', 'Pewarna Gram'),
('HAGK', 'Hbs Ag(Kuantitif)'),
('HAGR', 'Hbs Ag(Rapid)'),
('HB', 'Hemoglobin'),
('HBA1C', 'HbA1c'),
('HBAG', 'Hbs Ag'),
('HBEG', 'Hbe Ag'),
('HCRP', 'Hs CRP'),
('HJL', 'Hitung Jenis Leukosit'),
('HPRI', 'H. Pyolori'),
('HR', 'Hematologi Rutin/CBC(Hemoglobin, Leukosit, Trombosit, Eritrosit, Hematrokit, Nilai-nilai MC'),
('HSCRP', 'HS CRP'),
('HSV2', 'HSV2'),
('ICTM', 'ICT Malaria'),
('ISOS', 'Isospora sp'),
('IW', 'Indeks Wintrobe'),
('K', 'Kalium'),
('KANA', 'Kanabis'),
('KETO', 'Keton'),
('KHDL', 'Kolestrol HDL'),
('KKR', 'Krestinin Klirens'),
('KLDLD', 'Kolestrol LDL(direk)'),
('KLDLI', 'Kolestrol LDL(indirek)'),
('KMTU', 'Kultur M Tuborkolosis'),
('KOKA', 'Kokain'),
('KRT', 'Kreatinin'),
('KTO', 'Kolestrol Total'),
('KULT', 'Kultur'),
('KUR', 'Kalium Urine'),
('LAMB', 'G. Lambida'),
('LDH', 'LDH'),
('LED', 'LED'),
('LEPT', 'Leptodsik'),
('LH', 'LH'),
('LMAK', 'Lemak'),
('LPA', 'Lippoprotein a'),
('LPS', 'Lipase'),
('MCA', 'MCA'),
('MCTB', 'Mycotek TB'),
('MG', 'Magnesium'),
('MGB', 'Mioglobin'),
('MKRS', 'Mikroalbuminuria Semikuantitif'),
('MLRI', 'Malaria (Mikroskopik)'),
('MORF', 'Morfin'),
('NA', 'Natrium'),
('NITR', 'Nitrit'),
('NKCL', 'Na, K, Cl'),
('NSE', 'NSE'),
('NUR', 'Natrium Urine'),
('OSCA', 'Ostecalcin'),
('PBTA', 'Pewarnaan BTA'),
('PCRA', 'Pencernaan '),
('PEWA', 'Pewarnaan '),
('PRBJ', 'Protein Bence Jones'),
('PROE', 'Protein Esbach'),
('PROL', 'Prolaktin'),
('PROT', 'Protein'),
('PRTT', 'Protein Total '),
('PSA', 'PSA'),
('PT', 'Protein Total'),
('PT+IN', 'PT + INR'),
('PTH', 'PTH'),
('PWTA', 'Pewarnaan Tanah Asam'),
('RB', 'Retakan Bekuan'),
('RF', 'RF'),
('RL', 'Rumple Leede'),
('RLG', 'Rubella Lg G'),
('RLM', 'Rubella Lg M'),
('RO', 'Resistent Osmotik'),
('RTK', 'Retikulosit '),
('SCC', 'SCC'),
('SEDI', 'Sedimen'),
('SELE', 'Sel Le'),
('SLCD4', 'Subtipe Limfosit CD4'),
('SLE', 'Sel LE'),
('SOAT', 'Sensivitas OAT'),
('T3', 'T3 Total'),
('T4', 'T4 Total'),
('TBX', 'Tubex'),
('TC', 'Tes Coomb''s'),
('TGL', 'Trigliserida'),
('TIBC', 'TIBC'),
('TIGKO', 'Tes Toleransi Gluokosa Oral'),
('TPHA', 'TPHA'),
('TPI', 'Troponin I'),
('TPSA', 'Total PSA'),
('TPT', 'Troponin T'),
('TRF', 'Transferrin'),
('TSEN', 'Tes Sensivitas'),
('TSHS', 'TSHS'),
('TT', 'Trombin Time'),
('TXLG', 'Toxoplasma Lg G'),
('TXLM', 'Toxoplasma Lg M'),
('UKH', 'Urin Kehamilan'),
('UR', 'Ureum'),
('UROB', 'Uroblin'),
('URRU', 'Urin Rutin'),
('VAGI', 'T. Vaginalis'),
('VB12', 'Vitamin B12'),
('VD', 'Viscositas Darah'),
('VDPR', 'VDRL-RPR'),
('VITC', 'Vitamin C'),
('WB', 'Waktu Bekuan'),
('WDL', 'Widal'),
('WORM', 'Cacing'),
('WP', 'Waktu Pendarahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `no_rekmed` varchar(20) NOT NULL,
  `no_lab` varchar(15) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `lm_puasa` varchar(15) NOT NULL,
  `dokter_krm` varchar(150) NOT NULL,
  `diagnosis` varchar(150) NOT NULL,
  `fle_jam` varchar(10) NOT NULL,
  `tgl_tdy` varchar(30) NOT NULL,
  `tgl_lhr` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`no_rekmed`, `no_lab`, `ruangan`, `nama_pasien`, `lm_puasa`, `dokter_krm`, `diagnosis`, `fle_jam`, `tgl_tdy`, `tgl_lhr`) VALUES
('037753', '201603150064', '', 'Fadhlurrahman Al Fatih', '', 'Dokter Internal Umum', 'Epilepsi', '10:34 AM', '15/03/2016', '05/04/2009'),
('043520', '201603150056', '', 'Neneng Ekawati', '', 'Dokter Internal Umum', 'SN', '10:44 AM', '15/03/2016', '06/06/1979'),
('056569', '201603150053', '', 'AGUSTAM', '', 'Dokter Internal Umum', 'Hidronefrosis', '10:26 AM', '15/03/2016', '13/03/1973');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spesimen`
--

CREATE TABLE `tb_spesimen` (
  `id_spesimen` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_darah` tinyint(1) NOT NULL,
  `col_urine` tinyint(1) NOT NULL,
  `col_feses` tinyint(1) NOT NULL,
  `col_cairan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_spesimen`
--

INSERT INTO `tb_spesimen` (`id_spesimen`, `no_rekmed`, `col_darah`, `col_urine`, `col_feses`, `col_cairan`) VALUES
(2, '056569', 0, 0, 0, ''),
(3, '037753', 0, 0, 0, ''),
(5, '043520', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spesimen_hijau`
--

CREATE TABLE `tb_spesimen_hijau` (
  `id_spesimen_hijau` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_darah_hijau` tinyint(1) NOT NULL,
  `col_urine_hijau` tinyint(1) NOT NULL,
  `col_feses_hijau` tinyint(1) NOT NULL,
  `col_cairan_hijau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_spesimen_hijau`
--

INSERT INTO `tb_spesimen_hijau` (`id_spesimen_hijau`, `no_rekmed`, `col_darah_hijau`, `col_urine_hijau`, `col_feses_hijau`, `col_cairan_hijau`) VALUES
(2, '056569', 0, 0, 0, ''),
(3, '037753', 0, 0, 0, ''),
(5, '043520', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tabung`
--

CREATE TABLE `tb_tabung` (
  `id_tabung` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_EDTA` tinyint(1) NOT NULL,
  `col_plain` tinyint(1) NOT NULL,
  `col_citrate` tinyint(1) NOT NULL,
  `col_heparin` tinyint(1) NOT NULL,
  `col_sst` tinyint(1) NOT NULL,
  `col_led` tinyint(1) NOT NULL,
  `col_tube_etc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tabung`
--

INSERT INTO `tb_tabung` (`id_tabung`, `no_rekmed`, `col_EDTA`, `col_plain`, `col_citrate`, `col_heparin`, `col_sst`, `col_led`, `col_tube_etc`) VALUES
(2, '056569', 0, 0, 0, 0, 0, 0, ''),
(3, '037753', 0, 0, 0, 0, 0, 0, ''),
(5, '043520', 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tabung_hijau`
--

CREATE TABLE `tb_tabung_hijau` (
  `id_tabung_hijau` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_EDTA_hijau` tinyint(1) NOT NULL,
  `col_plain_hijau` tinyint(1) NOT NULL,
  `col_citrate_hijau` tinyint(1) NOT NULL,
  `col_heparin_hijau` tinyint(1) NOT NULL,
  `col_sst_hijau` tinyint(1) NOT NULL,
  `col_led_hijau` tinyint(1) NOT NULL,
  `col_tube_etc_hijau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tabung_hijau`
--

INSERT INTO `tb_tabung_hijau` (`id_tabung_hijau`, `no_rekmed`, `col_EDTA_hijau`, `col_plain_hijau`, `col_citrate_hijau`, `col_heparin_hijau`, `col_sst_hijau`, `col_led_hijau`, `col_tube_etc_hijau`) VALUES
(2, '056569', 0, 0, 0, 0, 0, 0, ''),
(3, '037753', 0, 0, 0, 0, 0, 0, ''),
(5, '043520', 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tes`
--

CREATE TABLE `tb_tes` (
  `id_tes` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `tgl_tdy` varchar(30) NOT NULL,
  `analisis_mulai` varchar(10) NOT NULL,
  `analisis_berakhir` varchar(10) NOT NULL,
  `tes_1` varchar(10) NOT NULL,
  `tes_2` varchar(10) NOT NULL,
  `tes_3` varchar(10) NOT NULL,
  `tes_4` varchar(10) NOT NULL,
  `tes_5` varchar(10) NOT NULL,
  `tes_6` varchar(10) NOT NULL,
  `tes_7` varchar(10) NOT NULL,
  `tes_8` varchar(10) NOT NULL,
  `tes_9` varchar(10) NOT NULL,
  `tes_10` varchar(10) NOT NULL,
  `tes_11` varchar(10) NOT NULL,
  `tes_12` varchar(10) NOT NULL,
  `tes_13` varchar(10) NOT NULL,
  `tes_14` varchar(10) NOT NULL,
  `tes_15` varchar(10) NOT NULL,
  `tes_16` varchar(10) NOT NULL,
  `tes_17` varchar(10) NOT NULL,
  `tes_18` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tes`
--

INSERT INTO `tb_tes` (`id_tes`, `no_rekmed`, `tgl_tdy`, `analisis_mulai`, `analisis_berakhir`, `tes_1`, `tes_2`, `tes_3`, `tes_4`, `tes_5`, `tes_6`, `tes_7`, `tes_8`, `tes_9`, `tes_10`, `tes_11`, `tes_12`, `tes_13`, `tes_14`, `tes_15`, `tes_16`, `tes_17`, `tes_18`) VALUES
(2, '056569', '15/03/2016', '6:00 AM', '6:30 AM', 'AU', 'UR', 'KRT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '037753', '15/03/2016', '6:00 AM', '6:30 AM', 'GPT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '043520', '15/03/2016', '6:00 AM', '6:30 AM', 'ALB', 'GLS', 'UR', 'KRT', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tes_hijau`
--

CREATE TABLE `tb_tes_hijau` (
  `id_tes_hijau` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `tgl_tdy_hijau` varchar(30) NOT NULL,
  `analisis_mulai_hijau` varchar(10) NOT NULL,
  `analisis_berakhir_hijau` varchar(10) NOT NULL,
  `tes_hijau_1` varchar(10) NOT NULL,
  `tes_hijau_2` varchar(10) NOT NULL,
  `tes_hijau_3` varchar(10) NOT NULL,
  `tes_hijau_4` varchar(10) NOT NULL,
  `tes_hijau_5` varchar(10) NOT NULL,
  `tes_hijau_6` varchar(10) NOT NULL,
  `tes_hijau_7` varchar(10) NOT NULL,
  `tes_hijau_8` varchar(10) NOT NULL,
  `tes_hijau_9` varchar(10) NOT NULL,
  `tes_hijau_10` varchar(10) NOT NULL,
  `tes_hijau_11` varchar(10) NOT NULL,
  `tes_hijau_12` varchar(10) NOT NULL,
  `tes_hijau_13` varchar(10) NOT NULL,
  `tes_hijau_14` varchar(10) NOT NULL,
  `tes_hijau_15` varchar(10) NOT NULL,
  `tes_hijau_16` varchar(10) NOT NULL,
  `tes_hijau_17` varchar(10) NOT NULL,
  `tes_hijau_18` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tes_hijau`
--

INSERT INTO `tb_tes_hijau` (`id_tes_hijau`, `no_rekmed`, `tgl_tdy_hijau`, `analisis_mulai_hijau`, `analisis_berakhir_hijau`, `tes_hijau_1`, `tes_hijau_2`, `tes_hijau_3`, `tes_hijau_4`, `tes_hijau_5`, `tes_hijau_6`, `tes_hijau_7`, `tes_hijau_8`, `tes_hijau_9`, `tes_hijau_10`, `tes_hijau_11`, `tes_hijau_12`, `tes_hijau_13`, `tes_hijau_14`, `tes_hijau_15`, `tes_hijau_16`, `tes_hijau_17`, `tes_hijau_18`) VALUES
(2, '056569', '15/03/2016', '6:00 AM', '6:30 AM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '037753', '15/03/2016', '6:00 AM', '6:30 AM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '043520', '15/03/2016', '6:00 AM', '6:30 AM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_t_details`
--

CREATE TABLE `tb_t_details` (
  `t_name` varchar(8) NOT NULL,
  `t_details` text NOT NULL,
  `t_pic` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_t_details`
--

INSERT INTO `tb_t_details` (`t_name`, `t_details`, `t_pic`) VALUES
('EDTA', 'Umumnya tersedia dalam bentuk garam sodium (natrium) atau potassium (kalium), mencegah koagulasi dengan cara mengikat atau mengkhelasi kalsium. EDTA memiliki keunggulan disbanding dengan antikoagulan yang lain, yaitu tidak mempengaruhi sel-sel darah, sehingga ideal untuk pengujian hematologi, seperti pemeriksaan hemoglobin, hematokrit, KED, hitung lekosit, hitung trombosit, retikulosit, apusan darah, dsb.K2EDTA biasanya digunakan dengan konsentrasi 1 - 1,5 mg/ml darah. Penggunaannya harus tepat. Bila jumlah EDTA kurang, darah dapat mengalami koagulasi. Sebaliknya, bila EDTA kelebihan, eritrosit mengalami krenasi, trombosit membesar dan mengalami disintegrasi. Setelah darah dimasukkan ke dalam tabung, segera lakukan pencampuran/homogenisasi dengan cara membolak-balikkan tabung dengan lembut sebanyak 6 kali untuk menghindari penggumpalan trombosit dan pembentukan bekuan darah.Ada tiga macam EDTA, yaitu dinatrium EDTA (Na2EDTA), dipotassium EDTA (K2EDTA) dan tripotassium EDTA (K3EDTA). Na2EDTA dan K2EDTA biasanya digunakan dalam bentuk kering, sedangkan K3EDTA biasanya digunakan dalam bentuk cair. Dari ketiga jenis EDTA tersebut, K2EDTA adalah yang paling baik dan dianjurkan oleh ICSH (International Council for Standardization in Hematology) dan CLSI (Clinical and Laboratory Standards Institute).Tabung EDTA tersedia dalam bentuk tabung hampa udara (vacutainer tube) dengan tutup lavender (purple) atau pink seperti yang diproduksi oleh Becton Dickinson.', 'EDTA_t'),
('CITRATE', 'PT tabung digunakan untuk tes pembekuan darah dan berlaku untuk sistem fibrinolitik (PT, TT, APTT dan fibrinogen, dll). Rasio pencampuran adalah 1 bagian sitrat darah 9 bagian. Rasio akurat dapat menjamin efektivitas hasil pengujian dan menghindari misdiagnosis. Sebagai natrium sitrat memiliki toksisitas sedikit, juga digunakan untuk penyimpanan darah. Jangan menarik volume darah yang cukup untuk memastikan hasil uji yang akurat.Tabung ini berisi natrium sitrat. Umumnya digunakan untuk pemeriksaan koagulasi (mis. PPT, APTT).', 'CITRATE_t'),
('LED', 'Laju endap darah (erithrocyte sedimentation rate, ESR) yang juga disebut kecepatan endap darah (KED) atau laju sedimentasi eritrosit adalah kecepatan sedimentasi eritrosit dalam darah yang belum membeku, dengan satuan mm/jam. LED merupakan uji yang tidak spesifik. LED dijumpai meningkat selama proses inflamasi akut, infeksi akut dan kronis, kerusakan jaringan (nekrosis), penyakit kolagen, rheumatoid, malignansi, dan kondisi stress fisiologis (misalnya kehamilan). Sebagian ahli hematologi, LED tidak andal karena tidak spesifik, dan dipengaruhi oleh faktor fisiologis yang menyebabkan temuan tidak akurat.\r\nPemeriksaan CRP dipertimbangkan lebih berguna daripada LED karena kenaikan kadar CRP terjadi lebih cepat selama proses inflamasi akut, dan lebih cepat juga kembali ke kadar normal daripada LED. Namun, beberapa dokter masih mengharuskan uji LED bila ingin membuat perhitungan kasar mengenai proses penyakit, dan bermanfaat untuk mengikuti perjalanan penyakit. Jika nilai LED meningkat, maka uji laboratorium lain harus dilakukan untuk mengidentifikasi masalah klinis yang muncul.', 'LED_t'),
('HEPARIN', 'Tabung tutup hijau terang.Tabung ini berisi gel separator (plasma separator tube/PST) dengan antikoagulan lithium heparin. Setelah pemusingan, plasma akan berada di bagian atas gel dan sel darah berada di bawah gel. Umumnya digunakan untuk pemeriksaan kimia darah.The antikoagulan natrium heparin dan heparin lithium ditemukan dalam tabung hijau. Tabung ini digunakan dalam berbagai tes laboratorium yang membutuhkan plasma atau darah utuh. yang terutama tes kimia. Tabung Lithium heparin digunakan untuk berbagai tes, termasuk: GLUKOSA, BLOOD UREA NITRPGEM (BUN), STUDI terionisasi KALSIUM, kreatinin, OR ELEKTROLIT. Namun, antikoagulan ini tidak cocok untuk tes melibatkan pengukuran lithium atau tingkat folat. Demikian pula, tabung sodium heparin tidak boleh digunakan untuk tes yang mengukur konsentrasi natrium. Tabung hijau tidak boleh digunakan untuk koleksi untuk noda darah. Ketika digunakan untuk studi sitogenetika, tabung ini harus steril. Harus terbalik 8 lembut inersions segera setelah pengumpulan darah.', 'HEPARIN_t'),
('SST', 'Tabung tutup kuning.Tabung ini berisi gel separator (serum separator tube/SST) yang fungsinya memisahkan serum dan sel darah. Setelah pemusingan, serum akan berada di bagian atas gel dan sel darah berada di bawah gel. Umumnya digunakan untuk pemeriksaan kimia darah, imunologi dan serologi. Kami memproduksi berbagai macam Yellow Non-vakum tabung, yang ideal untuk menjaga karakter asli dari darah dan memecahkan masalah hemolisis. Dinding dalam tabung dilapisi dengan BCA (Darah Koagulasi Accelerator) dan dengan demikian proses melibatkan SSG - Serum Gel Memisahkan diisi di bagian bawah tabung, setelah pengambilan sampel darah, pada saat sentrifugasi SSG akan bergerak ke atas dan bentuk hak penghalang antara serum darah dan bekuan darah, ini memudahkan serum yang akan disedot langsung dari tabung koleksi, menghilangkan kebutuhan untuk transfer ke wadah lain.', 'SST_t'),
('PLAIN', 'Tabung tutup merah.Tabung ini tanpa penambahan zat additive, darah akan menjadi beku dan serum dipisahkan dengan pemusingan. Umumnya digunakan untuk pemeriksaan kimia darah, imunologi, serologi dan bank darah (crossmatching test).Produk ini banyak digunakan di laboratorium untuk pemantauan obat, serum biokimia, imunologi serum dan banyak lagi. Merata dilapisi dengan BCA (Darah Koagulasi Accelerator) di dinding interior tabung. Hal ini memungkinkan mengaktifkan dan mempercepat Proses Pembekuan Darah.', 'PLAIN_t');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `jenis_kel` enum('Laki-laki','Perempuan') NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `level_acc` enum('user','admin') NOT NULL,
  `pic_account` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`, `jenis_kel`, `telpon`, `alamat`, `level_acc`, `pic_account`) VALUES
('admin', '$2y$10$ykdnfU7kSHDm56ILcKoKaOvSCas.dl9EJ8ZDnQmiZcpID/CpIBRGS', 'admin', 'Laki-laki', '123', '', 'admin', 'e00cf25ad42683b3df678c61f42c6bda'),
('gita_s', '$2y$10$WYoFXxtbL/aAIE2SlDU7c.P99Op9OLLdpGXBzBNSZ.NUdO6W4.Zti', 'Gita Medita S', 'Perempuan', '082347713767', '', 'user', 'f8964b123cc4c9e324d7d29c9442b93a'),
('nurhayana_s', '$2y$10$we2UbY.DKp5KZxkChAL9PebqhrsV6.l74r2cfB265napoP9419b/y', 'Nurhayana Sennang', 'Perempuan', '08114446948', '', 'admin', '5292c8e791c366ad5e1cc8ad03bf62be'),
('user', '$2y$10$ubgZkdrllX2skdUtGDyKIO7jT4hblH.Ab61RGNWp2ZxkRMKGOCDsy', 'user', 'Perempuan', '456', '', 'user', '24c9e15e52afc47c225b757e7bee1f9d'),
('yuyun_w', '$2y$10$DBKgrDPhutxBRANRaTgHOeBuTIP/KmGXROWWEXiq40z.tffHc8m0G', 'Yuyun Widaningsih', 'Perempuan', '0', '', 'admin', 'a196e58986b8415774fefff44976e85c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ver_and_val`
--

CREATE TABLE `tb_ver_and_val` (
  `id_verval` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `verifikator_i` varchar(10) NOT NULL,
  `verifikator_ii` varchar(10) NOT NULL,
  `validasi` varchar(10) NOT NULL,
  `interpretasi` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ver_and_val`
--

INSERT INTO `tb_ver_and_val` (`id_verval`, `no_rekmed`, `verifikator_i`, `verifikator_ii`, `validasi`, `interpretasi`) VALUES
(2, '056569', '10:26 AM', '10:26 AM', '10:26 AM', ''),
(3, '037753', '10:34 AM', '10:34 AM', '10:34 AM', ''),
(5, '043520', '10:44 AM', '10:44 AM', '10:44 AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vol_spesimen`
--

CREATE TABLE `tb_vol_spesimen` (
  `id_v_spe` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_cukup` tinyint(1) NOT NULL,
  `col_kurang` tinyint(1) NOT NULL,
  `col_sngtkrng` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_vol_spesimen`
--

INSERT INTO `tb_vol_spesimen` (`id_v_spe`, `no_rekmed`, `col_cukup`, `col_kurang`, `col_sngtkrng`) VALUES
(2, '056569', 0, 0, 0),
(3, '037753', 0, 0, 0),
(5, '043520', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_vol_spesimen_hijau`
--

CREATE TABLE `tb_vol_spesimen_hijau` (
  `id_v_spe_hijau` int(10) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `col_cukup_hijau` tinyint(1) NOT NULL,
  `col_kurang_hijau` tinyint(1) NOT NULL,
  `col_sngtkrng_hijau` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_vol_spesimen_hijau`
--

INSERT INTO `tb_vol_spesimen_hijau` (`id_v_spe_hijau`, `no_rekmed`, `col_cukup_hijau`, `col_kurang_hijau`, `col_sngtkrng_hijau`) VALUES
(2, '056569', 0, 0, 0),
(3, '037753', 0, 0, 0),
(5, '043520', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_analyzer`
--
ALTER TABLE `tb_analyzer`
  ADD PRIMARY KEY (`id_analy`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_analyzer_hijau`
--
ALTER TABLE `tb_analyzer_hijau`
  ADD PRIMARY KEY (`id_analy_hijau`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_asal_spesimen`
--
ALTER TABLE `tb_asal_spesimen`
  ADD PRIMARY KEY (`id_asal_spesimen`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_asal_spesimen_hijau`
--
ALTER TABLE `tb_asal_spesimen_hijau`
  ADD PRIMARY KEY (`id_asal_spesimen_hijau`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tb_hasil_hijau`
--
ALTER TABLE `tb_hasil_hijau`
  ADD PRIMARY KEY (`id_hasil_hijau`);

--
-- Indexes for table `tb_kon_spesimen`
--
ALTER TABLE `tb_kon_spesimen`
  ADD PRIMARY KEY (`id_k_spe`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_kon_spesimen_hijau`
--
ALTER TABLE `tb_kon_spesimen_hijau`
  ADD PRIMARY KEY (`id_k_spe_hijau`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_krm`
--
ALTER TABLE `tb_krm`
  ADD PRIMARY KEY (`id_krm`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_krm_hijau`
--
ALTER TABLE `tb_krm_hijau`
  ADD PRIMARY KEY (`id_krm_hijau`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_nama_tes`
--
ALTER TABLE `tb_nama_tes`
  ADD PRIMARY KEY (`kd_notasi`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`no_rekmed`);

--
-- Indexes for table `tb_spesimen`
--
ALTER TABLE `tb_spesimen`
  ADD PRIMARY KEY (`id_spesimen`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_spesimen_hijau`
--
ALTER TABLE `tb_spesimen_hijau`
  ADD PRIMARY KEY (`id_spesimen_hijau`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_tabung`
--
ALTER TABLE `tb_tabung`
  ADD PRIMARY KEY (`id_tabung`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_tabung_hijau`
--
ALTER TABLE `tb_tabung_hijau`
  ADD PRIMARY KEY (`id_tabung_hijau`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_tes`
--
ALTER TABLE `tb_tes`
  ADD PRIMARY KEY (`id_tes`);

--
-- Indexes for table `tb_tes_hijau`
--
ALTER TABLE `tb_tes_hijau`
  ADD PRIMARY KEY (`id_tes_hijau`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_ver_and_val`
--
ALTER TABLE `tb_ver_and_val`
  ADD PRIMARY KEY (`id_verval`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_vol_spesimen`
--
ALTER TABLE `tb_vol_spesimen`
  ADD PRIMARY KEY (`id_v_spe`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- Indexes for table `tb_vol_spesimen_hijau`
--
ALTER TABLE `tb_vol_spesimen_hijau`
  ADD PRIMARY KEY (`id_v_spe_hijau`),
  ADD KEY `no_rekmed` (`no_rekmed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_analyzer`
--
ALTER TABLE `tb_analyzer`
  MODIFY `id_analy` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_analyzer_hijau`
--
ALTER TABLE `tb_analyzer_hijau`
  MODIFY `id_analy_hijau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_asal_spesimen`
--
ALTER TABLE `tb_asal_spesimen`
  MODIFY `id_asal_spesimen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_asal_spesimen_hijau`
--
ALTER TABLE `tb_asal_spesimen_hijau`
  MODIFY `id_asal_spesimen_hijau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_hasil_hijau`
--
ALTER TABLE `tb_hasil_hijau`
  MODIFY `id_hasil_hijau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_kon_spesimen`
--
ALTER TABLE `tb_kon_spesimen`
  MODIFY `id_k_spe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_kon_spesimen_hijau`
--
ALTER TABLE `tb_kon_spesimen_hijau`
  MODIFY `id_k_spe_hijau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_krm`
--
ALTER TABLE `tb_krm`
  MODIFY `id_krm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_krm_hijau`
--
ALTER TABLE `tb_krm_hijau`
  MODIFY `id_krm_hijau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_spesimen`
--
ALTER TABLE `tb_spesimen`
  MODIFY `id_spesimen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_spesimen_hijau`
--
ALTER TABLE `tb_spesimen_hijau`
  MODIFY `id_spesimen_hijau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_tabung`
--
ALTER TABLE `tb_tabung`
  MODIFY `id_tabung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_tabung_hijau`
--
ALTER TABLE `tb_tabung_hijau`
  MODIFY `id_tabung_hijau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_tes`
--
ALTER TABLE `tb_tes`
  MODIFY `id_tes` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_tes_hijau`
--
ALTER TABLE `tb_tes_hijau`
  MODIFY `id_tes_hijau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_ver_and_val`
--
ALTER TABLE `tb_ver_and_val`
  MODIFY `id_verval` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_vol_spesimen`
--
ALTER TABLE `tb_vol_spesimen`
  MODIFY `id_v_spe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_vol_spesimen_hijau`
--
ALTER TABLE `tb_vol_spesimen_hijau`
  MODIFY `id_v_spe_hijau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_analyzer`
--
ALTER TABLE `tb_analyzer`
  ADD CONSTRAINT `tb_analyzer_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_analyzer_hijau`
--
ALTER TABLE `tb_analyzer_hijau`
  ADD CONSTRAINT `tb_analyzer_hijau_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_asal_spesimen`
--
ALTER TABLE `tb_asal_spesimen`
  ADD CONSTRAINT `tb_asal_spesimen_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_asal_spesimen_hijau`
--
ALTER TABLE `tb_asal_spesimen_hijau`
  ADD CONSTRAINT `tb_asal_spesimen_hijau_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kon_spesimen`
--
ALTER TABLE `tb_kon_spesimen`
  ADD CONSTRAINT `tb_kon_spesimen_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kon_spesimen_hijau`
--
ALTER TABLE `tb_kon_spesimen_hijau`
  ADD CONSTRAINT `tb_kon_spesimen_hijau_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_krm`
--
ALTER TABLE `tb_krm`
  ADD CONSTRAINT `tb_krm_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_krm_hijau`
--
ALTER TABLE `tb_krm_hijau`
  ADD CONSTRAINT `tb_krm_hijau_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_spesimen`
--
ALTER TABLE `tb_spesimen`
  ADD CONSTRAINT `tb_spesimen_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_spesimen_hijau`
--
ALTER TABLE `tb_spesimen_hijau`
  ADD CONSTRAINT `tb_spesimen_hijau_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tabung`
--
ALTER TABLE `tb_tabung`
  ADD CONSTRAINT `tb_tabung_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tabung_hijau`
--
ALTER TABLE `tb_tabung_hijau`
  ADD CONSTRAINT `tb_tabung_hijau_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ver_and_val`
--
ALTER TABLE `tb_ver_and_val`
  ADD CONSTRAINT `tb_ver_and_val_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_vol_spesimen`
--
ALTER TABLE `tb_vol_spesimen`
  ADD CONSTRAINT `tb_vol_spesimen_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_vol_spesimen_hijau`
--
ALTER TABLE `tb_vol_spesimen_hijau`
  ADD CONSTRAINT `tb_vol_spesimen_hijau_ibfk_1` FOREIGN KEY (`no_rekmed`) REFERENCES `tb_pasien` (`no_rekmed`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

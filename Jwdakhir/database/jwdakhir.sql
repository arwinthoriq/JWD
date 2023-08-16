-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 04:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwdakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `wisata` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nomor_identitas` bigint(20) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `pengunjung_dewasa` int(11) NOT NULL,
  `pengunjung_anak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `wisata`, `nama_lengkap`, `nomor_identitas`, `no_hp`, `tanggal_kunjungan`, `pengunjung_dewasa`, `pengunjung_anak`) VALUES
(15, 'Goa Terawang', 'Agung Budi Cahyono', 3113031410200001, '088812341234', '2023-07-23', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `lokasi`, `gambar`, `harga`, `keterangan`) VALUES
(1, 'Waduk Greneng', 'Dukuh Greneng, Desa Tunjungan, Kecamatan Tunjungan, Kabupaten Blora', 'waduk-greneng.jpg', 5000, 'Obyek Wisata Waduk Greneng merupakan Obyek Wisata Alam berupa Waduk terletak didukuh Greneng desa Tunjungan Kecamatan Tunjungan Kabupaten Blora + 12 km kearah barat laut dari Kota Blora. Obyek Wisata ini mempunyai fungsi ganda yaitu sebagai fungsi utama irigasi tanah pertanian dan pembesaran ikan air tawar.'),
(2, 'Goa Terawang\r\n', 'Desa Kedungwungu Kecamatan Todanan', 'goa-terawang.jpg', 10000, 'Goa Terawang merupakan obyek wisata alam, terbentuk di daerah endapan batu Gamping Pegunungan Kapur Utara berumur + 10 juta tahun. Terletak di Desa Kedungwungu Kecamatan Todanan kawasan Hutan KPH Blora + 35 Km. arah Barat Kota Blora. Goa Terawang mempunyai panjang alur/terawang terpanjang + 180 m dengan kedalaman 5-11 m dibawah permukaan tanah. Didalamnya terdapat stalakmit dan stalaktit yang sangat indah dan menawan. '),
(3, 'Goa Sentono', 'Blungun, Jepon, Temengeng, Sambong, Kabupaten Blora, Jawa Tengah', 'goa-sentono.jpg', 4000, 'Goa Sentono, tempat piknik satu ini berlokasi di Blungun, Jepon, Temengeng, Sambong, Kabupaten Blora, Jawa Tengah. Untuk jaraknya sendiri, ketika anda berkunjung dari pusat kota kurang lebih 42 km. Goa Sentono di Blora buka setiap hari mulai dari 08.00 -17.0 WIB'),
(4, 'Kracakan Watu Gong', 'Ngloram, Kapuan, Kec. Cepu, Kabupaten Blora, Jawa Tengah.', 'kracakan-watugong.jpg', 2000, 'Objek wisata alam Karacak Watu Gong Blora menyuguhkan pesona sungai dengan tangga air terjun indah. Banyak tempat liburan di Blora terbaru yang jarang orang tahu pesona keindahannya. Nikmati indahnya pemandangan alam dari Kracakan Watu Gong yang rekomended untuk hunting foto terbaik.\r\nDapatkan sensasi liburan yang menyenangkan di hari libur bersama keluarga dengan menikmati keindahan dan spot terbaik Kracakan Watu Gong.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2026 at 05:05 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_ti1c_indrianasubekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` varchar(10) NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('Regular','IMAX','Velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(10) DEFAULT NULL,
  `kacamata_3d_id` varchar(20) DEFAULT NULL,
  `efek_gerak_fitur` varchar(50) DEFAULT NULL,
  `bantal_selimut_pack` varchar(20) DEFAULT NULL,
  `layanan_butler` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
('TKT001', 'Avengers: Secret Wars', '2026-07-01 13:00:00', 2, '50000.00', 'Regular', 'Dolby Digital 5.1', 'Row E', NULL, NULL, NULL, NULL),
('TKT002', 'Avatar 3', '2026-07-01 15:30:00', 1, '50000.00', 'Regular', 'Dolby Digital 5.1', 'Row F', NULL, NULL, NULL, NULL),
('TKT003', 'Gundala 2', '2026-07-02 19:00:00', 4, '60000.00', 'Regular', 'Standard Stereo', 'Row G', NULL, NULL, NULL, NULL),
('TKT004', 'Inception Re-release', '2026-07-02 21:30:00', 2, '60000.00', 'Regular', 'Dolby Digital 5.1', 'Row D', NULL, NULL, NULL, NULL),
('TKT005', 'Dune: Part Three', '2026-07-03 12:00:00', 1, '50000.00', 'Regular', 'Standard Stereo', 'Row H', NULL, NULL, NULL, NULL),
('TKT006', 'The Batman 2', '2026-07-03 16:45:00', 2, '50000.00', 'Regular', 'Dolby Digital 5.1', 'Row E', NULL, NULL, NULL, NULL),
('TKT007', 'Avatar 3', '2026-07-01 12:00:00', 2, '100000.00', 'IMAX', 'Dolby Atmos 12.1', 'Row A', '3D-IMAX-01', 'High-Vibration', NULL, NULL),
('TKT008', 'Avengers: Secret Wars', '2026-07-01 16:00:00', 2, '100000.00', 'IMAX', 'Dolby Atmos 12.1', 'Row B', '3D-IMAX-02', 'Standard Motion', NULL, NULL),
('TKT009', 'Dune: Part Three', '2026-07-02 13:30:00', 1, '110000.00', 'IMAX', 'Dolby Atmos 12.1', 'Row A', NULL, 'Intense Shaking', NULL, NULL),
('TKT010', 'Interstellar IMAX Special', '2026-07-02 17:00:00', 3, '110000.00', 'IMAX', 'IMAX 6-Track', 'Row C', NULL, 'Subtle Tilt', NULL, NULL),
('TKT011', 'The Batman 2', '2026-07-03 14:00:00', 2, '100000.00', 'IMAX', 'Dolby Atmos 12.1', 'Row B', NULL, 'Standard Motion', NULL, NULL),
('TKT012', 'Star Wars: New Era', '2026-07-03 20:00:00', 2, '120000.00', 'IMAX', 'Dolby Atmos 12.1', 'Row A', '3D-IMAX-09', 'High-Vibration', NULL, NULL),
('TKT013', 'Avatar 3', '2026-07-04 10:00:00', 4, '120000.00', 'IMAX', 'Dolby Atmos 12.1', 'Row C', '3D-IMAX-12', 'Standard Motion', NULL, NULL),
('TKT014', 'Avengers: Secret Wars', '2026-07-01 14:00:00', 2, '250000.00', 'Velvet', NULL, 'Sofa 1', NULL, NULL, 'Premium Pack A', 'Personal Butler - Adi'),
('TKT015', 'The Batman 2', '2026-07-01 18:30:00', 2, '250000.00', 'Velvet', NULL, 'Sofa 3', NULL, NULL, 'Premium Pack B', 'Personal Butler - Siti'),
('TKT016', 'Dune: Part Three', '2026-07-02 15:00:00', 2, '250000.00', 'Velvet', NULL, 'Sofa 2', NULL, NULL, 'Premium Pack A', 'Personal Butler - Rian'),
('TKT017', 'La La Land Anniversary', '2026-07-02 20:15:00', 2, '300000.00', 'Velvet', NULL, 'Sofa 5', NULL, NULL, 'Luxe Gold Pack', 'VIP Butler - Maya'),
('TKT018', 'Avatar 3', '2026-07-03 13:00:00', 2, '250000.00', 'Velvet', NULL, 'Sofa 4', NULL, NULL, 'Premium Pack B', 'Personal Butler - Adi'),
('TKT019', 'Gundala 2', '2026-07-03 17:30:00', 2, '250000.00', 'Velvet', NULL, 'Sofa 1', NULL, NULL, 'Premium Pack A', 'Personal Butler - Siti'),
('TKT020', 'Star Wars: New Era', '2026-07-04 19:00:00', 2, '300000.00', 'Velvet', NULL, 'Sofa 2', NULL, NULL, 'Luxe Gold Pack', 'VIP Butler - Rian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

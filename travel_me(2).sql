-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2018 at 03:18 AM
-- Server version: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.2.7-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_penginapan` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `banyak_kamar` int(11) DEFAULT NULL,
  `kapasitas` int(11) NOT NULL,
  `fasilitas` text,
  `harga` decimal(10,2) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_penginapan`, `nama`, `banyak_kamar`, `kapasitas`, `fasilitas`, `harga`, `foto`) VALUES
(5, 5, 'Superior Twin', -1, 2, 'Free Breakfast, Free WiFi, Area Bebas Rokok, AC, Coffe/Tea Maker, TV, Kulkas, Meja, Free Newspaper, shower, toilet', '450000.00', 'http://muhibush.xyz/api_trme/uploads/istana1.jpeg'),
(6, 5, 'Superior Double', 0, 2, 'Free Breakfast, Free WiFi, AC, Coffe/Tea Maker, TV, Kulkas, Meja, Free Newspaper, shower, toilet', '450000.00', 'http://muhibush.xyz/api_trme/uploads/istana2.jpeg'),
(7, 5, 'Deluxe Twin', 3, 2, 'Free Breakfast, Free WiFi, AC, Coffe/Tea Maker, TV, Kulkas, Meja, Free Newspaper, shower, toilet, Minibar', '500000.00', 'http://muhibush.xyz/api_trme/uploads/istana3.jpeg'),
(8, 5, 'Deluxe Double', 5, 2, 'Free Breakfast, Free WiFi, Area Bebas Rokok, AC, Coffee/Tea Maker, TV, Kulkas, Meja, Free Newspaper, shower, toilet', '500000.00', 'http://muhibush.xyz/api_trme/uploads/istana4.jpeg'),
(9, 3, 'Superior Room', 5, 2, 'Free Breakfast, Free WiFi, AC, Coffee/Tea Maker, Meja, Layanan Kamar, TV, Shower, Bathtub, Toilet', '550000.00', 'http://muhibush.xyz/api_trme/uploads/crown1.jpeg'),
(10, 3, 'Deluxe Room', 5, 2, 'Free Breakfast, Free WiFi, AC, Coffee/Tea Maker, Meja, Layanan Kamar, TV, Shower, Bathtub, Toilet, Minibar, Kulkas', '600000.00', 'http://muhibush.xyz/api_trme/uploads/crown2.jpeg'),
(11, 8, 'Standard Room', 4, 2, 'Free Breakfast, Free WiFi, AC, TV, Kipas Angin, Coffee/Tea Maker, Meja, Kamar andi Dalam, Shower, Toilet, Air Panas', '185000.00', 'http://muhibush.xyz/api_trme/uploads/malinda1.jpeg'),
(12, 8, 'Moderate Room', 5, 2, 'Free Breakfast, Free WiFi, AC, TV, Kipas Angin, Coffee/Tea Maker, Meja, Kamar andi Dalam, Shower, Toilet, Air Panas', '272500.00', 'http://muhibush.xyz/api_trme/uploads/malinda2.jpeg'),
(13, 8, 'Superior Room', 5, 2, 'Free Breakfast, Free WiFi, AC, TV, Kipas Angin, Coffee/Tea Maker, Meja, Kamar andi Dalam, Shower, Toilet, Air Panas', '357500.00', 'http://muhibush.xyz/api_trme/uploads/malinda3.jpeg'),
(14, 8, 'VIP Room 2', 5, 2, 'Free Breakfast, Free WiFi, AC, TV, Coffee/Tea Maker, Meja, Kamar Mandi Dalam, Shower, Toilet, Air Panas, Bathtub, Kulkas', '405500.00', 'http://muhibush.xyz/api_trme/uploads/malinda4.jpeg'),
(15, 8, 'VIP Room 1', 5, 2, 'Free Breakfast, Free WiFi, AC, TV, Coffee/Tea Maker, Meja, Kamar Mandi Dalam, Shower, Toilet, Air Panas, Bathtub, Kulkas', '445000.00', 'http://muhibush.xyz/api_trme/uploads/malinda5.jpeg'),
(16, 6, 'Dam View', 5, 2, 'Free Breakfast, AC, Meja', '300000.00', 'http://muhibush.xyz/api_trme/uploads/swaloh1.jpeg'),
(17, 6, 'Superior Room', 5, 2, 'Free Breakfast, AC, Meja', '350000.00', 'http://muhibush.xyz/api_trme/uploads/swaloh2.jpeg'),
(18, 6, 'Deluxe Room', 5, 2, 'Free Breakfast, AC, Meja', '400000.00', 'http://muhibush.xyz/api_trme/uploads/swaloh3.jpeg'),
(19, 6, 'Bussiness Room', 5, 2, 'Free Breakfast, AC, Meja', '450000.00', 'http://muhibush.xyz/api_trme/uploads/swaloh4.jpeg'),
(20, 6, 'Cabana Room', 5, 2, 'Free Breakfast, AC, Meja', '500000.00', 'http://muhibush.xyz/api_trme/uploads/swaloh5.jpeg'),
(21, 6, 'Junior Room', 5, 2, 'Free Breakfast, AC, Meja', '600000.00', 'http://muhibush.xyz/api_trme/uploads/swaloh6.jpeg'),
(22, 6, 'Khayangan', 5, 2, 'Free Breakfast, AC, Meja', '1200000.00', 'http://muhibush.xyz/api_trme/uploads/swaloh7.jpeg'),
(23, 7, 'Deluxe 2', 5, 2, 'AC, Meja, TV, Air Panas, Shower', '215000.00', 'http://muhibush.xyz/api_trme/uploads/surakarta1.jpg'),
(24, 7, 'Deluxe 1', 5, 3, 'AC, Meja, TV, Air Panas, Shower', '240000.00', 'http://muhibush.xyz/api_trme/uploads/surakarta2.jpg'),
(25, 7, 'Deluxe 3', 5, 2, 'Free WiFi, Coffee/tea Maker, AC, Meja, TV, Air Panas, Shower', '205000.00', 'http://muhibush.xyz/api_trme/uploads/surakarta3.jpg'),
(26, 7, 'Executive 3', 5, 2, 'Free WiFi, Coffee/tea Maker, AC, TV, Air Panas, Shower, Minibar, Hair Dryer', '235000.00', 'http://muhibush.xyz/api_trme/uploads/surakarta4.jpg'),
(27, 9, 'Deluxe Room Only', 5, 2, 'Free Cancel, Free WiFi, AC, Coffee/Tea Maker, TV, Minibar, Meja, Shower, Bathtub, Toilet', '400000.00', 'http://muhibush.xyz/api_trme/uploads/narita1.jpeg'),
(28, 9, 'Deluxe', 5, 2, 'Free Breakfast, Free WiFi, AC, Coffee/Tea Maker, TV, Minibar, Meja, Shower, Bathtub, Toilet', '450500.00', 'http://muhibush.xyz/api_trme/uploads/narita2.jpeg'),
(29, 9, 'Executive Room Only', 5, 2, 'Kulkas, Free WiFi, AC, Coffee/Tea Maker, TV, Minibar, Meja, Shower, Bathtub, Toilet', '488500.00', 'http://muhibush.xyz/api_trme/uploads/narita3.jpeg'),
(30, 9, 'Executive', 5, 2, 'Free Cancel, Free Breakfast, Free WiFi, AC, Coffee/Tea Maker, TV, Kulkas, Minibar, Meja, Shower, Bathtub, Toilet', '538500.00', 'http://muhibush.xyz/api_trme/uploads/narita4.jpeg'),
(31, 10, 'Kamar 1', 2, 2, 'Kamar Mandi Luar, AC, TV LED, Air Panas, Meja, Kursi, Lemari', '100000.00', 'http://muhibush.xyz/api_trme/uploads/kamar1.jpg'),
(32, 10, 'Kamar 2', 4, 2, 'Kamar Mandi Dalam, AC, TV LED, Air Panas, Meja, Kursi, Lemari', '125000.00', 'http://muhibush.xyz/api_trme/uploads/kamar2.jpg'),
(33, 10, 'Kamar 3', 14, 2, 'Kamar Mandi Dalam, AC, TV LED, Air Panas, Meja, Kursi, Lemari', '150000.00', 'http://muhibush.xyz/api_trme/uploads/kamar3.jpg'),
(34, 10, 'Kamar 4', 2, 2, 'Kamar Mandi Dalam, AC, TV LED, Air Panas, Meja, Kursi, Lemari', '200000.00', 'http://muhibush.xyz/api_trme/uploads/kamar4.jpg'),
(35, 4, 'City Room', 5, 2, 'Free Breakfast, Free WiFi, AC, TV, Meja, Kamar mandi dalam, Shower, Air Panas, Toilet.', '385000.00', 'http://muhibush.xyz/api_trme/uploads/pama1.jpg'),
(36, 4, 'Island Room', 5, 2, 'Free Breakfast, Free WiFi, AC, TV, Meja, Kamar mandi dalam, Shower, Air Panas, Toilet.', '490000.00', 'http://muhibush.xyz/api_trme/uploads/pama2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_jenis` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `bahan_bakar` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_jenis`, `merk`, `jenis`, `type`, `bahan_bakar`, `id_user`) VALUES
(1, '11121', '121212', '121121', '1212121', 64);

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `posisi_lat` decimal(10,8) DEFAULT NULL,
  `posisi_lng` decimal(11,8) DEFAULT NULL,
  `harga_tiket_parkir_motor` decimal(10,2) DEFAULT NULL,
  `harga_tiket_parkir_mobil` decimal(10,2) DEFAULT NULL,
  `harga_tiket_parkir_bus` decimal(10,2) DEFAULT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` text,
  `jam_buka` varchar(5) DEFAULT NULL,
  `jam_tutup` varchar(5) DEFAULT NULL,
  `akses` enum('mudah','sulit','sedang') DEFAULT NULL,
  `harga_atas` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `id_user`, `nama`, `alamat`, `no_telp`, `posisi_lat`, `posisi_lng`, `harga_tiket_parkir_motor`, `harga_tiket_parkir_mobil`, `harga_tiket_parkir_bus`, `foto`, `deskripsi`, `fasilitas`, `jam_buka`, `jam_tutup`, `akses`, `harga_atas`) VALUES
(3, 0, 'Kedai Sate Kambing - Gule', 'Jl. W.R. Suratman (Depan Gedung Barata) Tulungagung', '081331254784', '-8.06168180', '111.89905100', '2000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/sate.jpg', 'Menu Andalan : Sate Kambing, Gule Kambing', 'Parkir', '08.00', '22.00', 'mudah', '26000.00'),
(4, 0, 'Dapur Sambal', 'Jl. Urip Sumoharjo No. 195 Kepatihan', '081336664242', '-8.05865370', '111.91622650', '3000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/dapur.jpg', 'Menu Andalan : Gurame Asam Manis, Patin Goreng Pedas, Ayam Saos Jagung, Jamur Pedas Gurih, dan berbagai macam kuliner dengan varian sambal dengan menggunakan rempah-rempah pilihan dan tanpa tambahan MSG.\r\nInstagram  : @warung_dapur_sambal', 'Toilet, Parkir', '10.00', '21.30', 'mudah', '100000.00'),
(5, 0, 'Waroeng Kampoeng AG One', 'Jl. M.T. Haryono No. 77 Tulungagung', '085105677000', '-8.07010550', '111.91452880', '3000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/agone.jpg', 'Menu Andalan : Kepiting Masak Pedas, Lobster Asam Manis, Iga Bakar, dll.\r\nInstagram : @waroengkampoengagone', 'Toilet, Parkir, Musholla', '09.00', '22.00', 'mudah', '50000.00'),
(6, 0, 'Jepun View Resto', 'Jl. Mayor Sujadi No. 97 Tulungagung', '0355-320711', '-8.07389740', '111.90951060', '3000.00', '5000.00', '20000.00', 'http://muhibush.xyz/api_trme/uploads/jepun.jpg', 'Menu Andalan : Ayam Bakar Jepun, Orak Arik Pedho Pete, Dll\r\nInstagram : @jepunviewresto', 'Parkir, Toilet', '10.00', '22.00', 'mudah', '50000.00'),
(7, 0, 'Tiga Dapoer Batavia', 'Jl. Mastrip No. 6 Tulungagung', '0355-336622', '-8.07349240', '111.90731450', '2000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/batavia.jpg', 'Menu Andalan : Gurami Sambal Matah, Gule Gurami Galau, Gurami Bakar Kecap Pedas, Ayam Goreng Lima Rasa, Sapi Lada Hitam, Dll\r\nInstagram : @tigadapoerbatavia', 'Toilet, Parkir, Musholla', '10.00', '22.00', 'mudah', '50000.00'),
(8, 0, 'Warung Lodho Ayam Sumber Rejeki', 'Jl. Jayeng Kusuma No. 22 Tulungagung', '-', '-8.02952170', '111.91846590', '3000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/sumber.jpg', 'Menu Andalan : Lodho Ayam Kampung Khas Tulungagung, Dll', 'Toilet', '09.00', '21.00', 'mudah', '120000.00'),
(9, 0, 'Sate Taichan', 'Jl. Kyai Haji Wahid Hasyim No. 62 Kauman', '-', '-8.06526440', '111.89653000', '2000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/taichan.jpg', 'Sate Taichan pertama di Kota Tulungagung. Menyediakan Sate Ayam dari bahan dan bumbu terbaik yang selalu disediakan segar setiap harinya. Dijamin bikin kamu ketagihan!\r\n\r\nMenyediakan:\r\n1. Sate Taichan (Menu Andalan)\r\n2. Taichan Wings (Spicy Chicken Wing)\r\n3. Mie Taichan\r\nInstagram: @taichantulungagung', 'Toilet, Parkir', '10.00', '22.00', 'mudah', '15000.00'),
(10, 0, 'Dapur Creamy', 'Jl. Sultan Hasanuddin No. 55 Tulungagung', '0355-5250766', '-8.05596160', '111.90471880', '2000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/creamy.jpg', 'Instagram : @dapoercreamy', 'Parkir, Toilet', '09.00', '22.00', 'mudah', '30000.00'),
(11, 0, 'Warung Bothok Ngantru', 'Jl. Raya Ngantru KM 7 Tulungagung', '082141447799', '-7.98489880', '111.94228350', '0.00', '0.00', '0.00', 'http://muhibush.xyz/api_trme/uploads/bothok.jpg', 'Menu Andalan : Bothok Wader, Patin, Tawon, Lele, Kuthuk, Udang, Lodho Ayam, Dll', 'Parkir', '07.00', '', 'mudah', '20000.00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_kuliner` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_kuliner`, `nama`, `harga`, `foto`, `deskripsi`) VALUES
(6, 3, 'Sate Kambing', '13000.00', 'http://muhibush.xyz/api_trme/uploads/6.jpg', ''),
(7, 3, 'Gule Kambing', '20000.00', 'http://muhibush.xyz/api_trme/uploads/7.jpg', ''),
(8, 3, 'Es Teh', '5000.00', 'http://muhibush.xyz/api_trme/uploads/8.jpg', ''),
(9, 3, 'Teh Hangat', '2000.00', 'http://muhibush.xyz/api_trme/uploads/9.jpg', ''),
(10, 3, 'Es Jeruk', '5000.00', 'http://muhibush.xyz/api_trme/uploads/10.jpg', ''),
(11, 4, 'Strawberry Brush', '7500.00', 'http://muhibush.xyz/api_trme/uploads/11.jpg', ''),
(12, 4, 'Lime Squase Ice', '6000.00', 'http://muhibush.xyz/api_trme/uploads/12.jpg', ''),
(13, 4, 'Jus Wortel', '5000.00', 'http://muhibush.xyz/api_trme/uploads/13.jpg', ''),
(14, 4, 'Oreo Milk Blend', '7500.00', 'http://muhibush.xyz/api_trme/uploads/14.jpg', ''),
(15, 4, 'Sambal Cumi', '4000.00', 'http://muhibush.xyz/api_trme/uploads/15.jpg', ''),
(16, 4, 'Bebek Bakar', '20000.00', 'http://muhibush.xyz/api_trme/uploads/16.jpg', ''),
(17, 4, 'Nasi Goreng Rempelo', '10000.00', 'http://muhibush.xyz/api_trme/uploads/17.jpg', ''),
(18, 4, 'Nasi Goreng Selimut Special', '15000.00', 'http://muhibush.xyz/api_trme/uploads/18.jpg', ''),
(19, 4, 'Nasi Putih', '3000.00', 'http://muhibush.xyz/api_trme/uploads/19.jpg', ''),
(20, 5, 'Sate Ayam Ponorogo', '25000.00', 'http://muhibush.xyz/api_trme/uploads/20.jpg', ''),
(21, 5, 'Udang Goreng Tepung', '20000.00', 'http://muhibush.xyz/api_trme/uploads/21.jpg', ''),
(22, 5, 'Nasi Goreng Seafood', '25000.00', 'http://muhibush.xyz/api_trme/uploads/22.jpg', ''),
(23, 5, 'Es Buah', '10000.00', 'http://muhibush.xyz/api_trme/uploads/23.jpg', ''),
(24, 5, 'Gurami Lodho', '30000.00', 'http://muhibush.xyz/api_trme/uploads/24.jpg', ''),
(25, 5, 'Gurami Masak Pedas', '35000.00', 'http://muhibush.xyz/api_trme/uploads/25.jpg', ''),
(26, 5, 'Gurami Kremes', '25000.00', 'http://muhibush.xyz/api_trme/uploads/26.jpg', ''),
(27, 5, 'Es Jeruk', '8000.00', 'http://muhibush.xyz/api_trme/uploads/27.jpg', ''),
(28, 5, 'Es Teh', '6000.00', 'http://muhibush.xyz/api_trme/uploads/28.jpg', ''),
(29, 5, 'Es Degan', '9000.00', 'http://muhibush.xyz/api_trme/uploads/29.jpg', ''),
(30, 6, 'Chicken Teriyaki', '29000.00', 'http://muhibush.xyz/api_trme/uploads/30.jpg', ''),
(31, 6, 'Tahu Goreng Benang Mas', '18000.00', 'http://muhibush.xyz/api_trme/uploads/31.jpg', ''),
(32, 6, 'Snow Mountain Steak', '35000.00', 'http://muhibush.xyz/api_trme/uploads/32.jpg', ''),
(33, 6, 'Sapi Lada Hitam', '28000.00', 'http://muhibush.xyz/api_trme/uploads/33.jpg', ''),
(34, 6, 'Nasi Goreng Jepun', '22500.00', 'http://muhibush.xyz/api_trme/uploads/34.jpg', ''),
(35, 6, 'Fruit Punch', '10000.00', 'http://muhibush.xyz/api_trme/uploads/35.jpg', ''),
(36, 6, 'Teh Tawar', '3000.00', 'http://muhibush.xyz/api_trme/uploads/36.jpg', ''),
(37, 6, 'Lemon (Hot/Cold)', '9000.00', 'http://muhibush.xyz/api_trme/uploads/37.jpg', ''),
(38, 6, 'Jeruk Manis/Nipis (Hot/Cold)', '9000.00', 'http://muhibush.xyz/api_trme/uploads/38.jpg', ''),
(39, 6, 'Wedang Jahe', '7000.00', 'http://muhibush.xyz/api_trme/uploads/39.jpg', ''),
(40, 8, 'Nasi Gurih', '20000.00', 'http://muhibush.xyz/api_trme/uploads/40.jpg', 'untuk 4 porsi'),
(41, 8, 'Urap-urap', '25000.00', 'http://muhibush.xyz/api_trme/uploads/41.jpg', ''),
(42, 8, 'Ayam Bumbu Lodho', '50000.00', 'http://muhibush.xyz/api_trme/uploads/42.jpg', 'untuk 1 ekor ayam'),
(43, 8, 'Nasi Ayam Goreng', '25000.00', 'http://muhibush.xyz/api_trme/uploads/43.jpg', ''),
(44, 8, 'Soda Gembira', '15000.00', 'http://muhibush.xyz/api_trme/uploads/44.jpg', ''),
(45, 8, 'Es Jeruk', '8000.00', 'http://muhibush.xyz/api_trme/uploads/45.jpg', ''),
(46, 8, 'Es Susu', '10000.00', 'http://muhibush.xyz/api_trme/uploads/46.jpg', ''),
(47, 8, 'Mega Mendung', '12000.00', 'http://muhibush.xyz/api_trme/uploads/47.jpg', ''),
(48, 8, 'Air Mineral', '4000.00', 'http://muhibush.xyz/api_trme/uploads/48.jpg', ''),
(49, 8, 'Frestea Susu', '6000.00', 'http://muhibush.xyz/api_trme/uploads/49.jpg', ''),
(50, 9, 'Sate Kulit', '13000.00', 'http://muhibush.xyz/api_trme/uploads/50.jpg', 'Sate Kulit 5 tusuk, Nasi/Lontong, Es Teh/Teh Hangat'),
(51, 9, 'Sate Taichan', '17000.00', 'http://muhibush.xyz/api_trme/uploads/51.jpg', 'Sate Taichan 1 porsi, Nasi/Lontong, Es Teh/Teh Hangat'),
(52, 9, 'Ceker Semur Betawi', '13000.00', 'http://muhibush.xyz/api_trme/uploads/52.jpg', 'Ceker 1 porsi, Nasi/Lontong, Es Teh/Teh Hangat'),
(53, 9, 'Ceker Kare Aceh', '13000.00', 'http://muhibush.xyz/api_trme/uploads/53.jpg', ''),
(54, 9, 'Ceker Bakar', '13000.00', 'http://muhibush.xyz/api_trme/uploads/54.jpg', 'Ceker 1 porsi, Nasi/Lontong, Es Teh/Teh Hangat'),
(55, 10, 'Tenderloin Steak', '30000.00', 'http://muhibush.xyz/api_trme/uploads/55.jpg', ''),
(56, 10, 'Iga Bakar', '30000.00', 'http://muhibush.xyz/api_trme/uploads/56.jpg', ''),
(57, 10, 'Lamb kebab', '18000.00', 'http://muhibush.xyz/api_trme/uploads/57.jpg', ''),
(58, 10, 'Spaghetti Tuna', '15000.00', 'http://muhibush.xyz/api_trme/uploads/58.jpg', ''),
(59, 10, 'Spicy Chicken Mango', '15000.00', 'http://muhibush.xyz/api_trme/uploads/59.jpg', ''),
(60, 10, 'Sosis Bakar', '12000.00', 'http://muhibush.xyz/api_trme/uploads/60.jpg', ''),
(61, 10, 'Lasagna', '20000.00', 'http://muhibush.xyz/api_trme/uploads/61.jpg', ''),
(62, 10, 'Air Mineral', '5000.00', 'http://muhibush.xyz/api_trme/uploads/62.jpg', ''),
(63, 10, 'Ice Cream', '15000.00', 'http://muhibush.xyz/api_trme/uploads/63.jpg', ''),
(64, 10, 'Es Teh', '7000.00', 'http://muhibush.xyz/api_trme/uploads/64.jpg', ''),
(65, 11, 'Bothok Wader', '6000.00', 'http://muhibush.xyz/api_trme/uploads/65.jpg', ''),
(66, 11, 'Bothok Patin', '8000.00', 'http://muhibush.xyz/api_trme/uploads/66.jpg', ''),
(67, 11, 'Bothok Tawon', '5000.00', 'http://muhibush.xyz/api_trme/uploads/67.jpg', ''),
(68, 11, 'Bothok Lele', '7000.00', 'http://muhibush.xyz/api_trme/uploads/68.jpg', ''),
(69, 11, 'Lodho Ayam', '15000.00', 'http://muhibush.xyz/api_trme/uploads/69.jpg', ''),
(70, 11, 'Urap-Urap', '12000.00', 'http://muhibush.xyz/api_trme/uploads/70.jpg', ''),
(71, 11, 'Es Teh', '4000.00', 'http://muhibush.xyz/api_trme/uploads/71.jpg', ''),
(72, 11, 'Es Jeruk', '5000.00', 'http://muhibush.xyz/api_trme/uploads/72.jpg', ''),
(73, 11, 'Teh Hangat', '3000.00', 'http://muhibush.xyz/api_trme/uploads/73.jpg', ''),
(74, 11, 'Bothok Udang', '8000.00', 'http://muhibush.xyz/api_trme/uploads/74.jpg', ''),
(75, 7, 'Nasi Lele Penyet', '15000.00', 'http://muhibush.xyz/api_trme/uploads/75.jpg', ''),
(76, 7, 'Nasi Ayam Penyet', '24000.00', 'http://muhibush.xyz/api_trme/uploads/76.jpg', ''),
(77, 7, 'Mie Ayam Jamur', '15000.00', 'http://muhibush.xyz/api_trme/uploads/77.jpg', ''),
(78, 7, 'Nasi Empal Gentong', '20000.00', 'http://muhibush.xyz/api_trme/uploads/78.jpg', ''),
(79, 7, 'Siomay Lengkap', '11000.00', 'http://muhibush.xyz/api_trme/uploads/79.jpg', 'Siomay, telor, kentang, kol, teh botol'),
(80, 7, 'Jus Buah', '7000.00', 'http://muhibush.xyz/api_trme/uploads/80.jpg', ''),
(81, 7, 'Teh Tawar (Panas/Dingin)', '3000.00', 'http://muhibush.xyz/api_trme/uploads/81.jpg', ''),
(82, 7, 'Milk Shake', '15000.00', 'http://muhibush.xyz/api_trme/uploads/82.jpg', ''),
(83, 7, 'Vantaggio Blended with Coffee', '10000.00', 'http://muhibush.xyz/api_trme/uploads/83.jpg', ''),
(84, 7, 'Jeruk (Panas/Dingin)', '5000.00', 'http://muhibush.xyz/api_trme/uploads/84.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `posisi_lat` decimal(10,8) NOT NULL,
  `posisi_lng` decimal(11,8) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` text,
  `akses` enum('mudah','sulit','sedang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `id_user`, `nama`, `alamat`, `no_telp`, `posisi_lat`, `posisi_lng`, `foto`, `deskripsi`, `fasilitas`, `akses`) VALUES
(3, NULL, 'Hotel Crown Victoria', 'Jl. Supriadi No. 41 Tulungagung', '0355-331321', '-8.07333680', '111.90266870', 'http://muhibush.xyz/api_trme/uploads/crown.jpg', 'Crown Victoria Hotel terletak di jantung kota Tulungagung, cuma 5 menit berkendara dari stasiun kereta api Tulungagung. Hotel ini memiliki kolam renang indoor dan kamar-kamar ber-AC dengan TV kabel layar datar. Wi-Fi gratis tersedia di seluruh bangunan. Dilengkapi dengan interior modern, setiap kamar dilengkapi dengan meja dan lemari. Kamar tertentu memiliki minibar. Staf di meja depan 24-jam tersedia untuk membantu para tamu dengan berbagai layanan, seperti layanan binatu dan menyetrika. Para tamu dapat berolahraga di pusat kebugaran atau bersantai di pusat spa & kesehatan. Layanan penyewaan mobil disediakan dengan biaya tambahan. Parkir gratis tersedia di hotel. Sultan Café & Resto menyajikan masakan Indonesia, masakan Barat dan Cina. Para tamu dapat menikmati suasana pantai sambil makan di Venezia Kedua Resto dan Pool Bar, yang menyajikan masakan internasional.\r\n', 'Kolam renang, Kamar bervariasi, staf 24 jam, layanan laundry, restaurant', 'mudah'),
(4, NULL, 'Pama Hostel', 'Jalan Panglima sudirman Gang VIII No.16, Tulungagung', '082214986655', '-8.06306000', '111.90870800', 'http://muhibush.xyz/api_trme/uploads/pama.jpg', 'Pama Hostel memiliki kamar tidur bersih dan nyaman  lengkap dengan kamar mandi pribadi dan perlengkapan mandi gratis. Hotel beroperasi meja depan 24 jam dan menyediakan fasilitas pertemuan. Lokasi yang strategis sangat cocok bagi wisatawan.', 'Parkir, AC, WiFi', 'mudah'),
(5, NULL, 'Hotel Istana', 'Jl. K.H. Agus Salim No. 73-75, Tulungagung', '0355-332377', '-8.06040460', '111.90287730', 'http://muhibush.xyz/api_trme/uploads/istana.jpg', 'Hotel ini berjarak hanya 5 menit berkendara dari Stasiun Kereta Tulungagung dan pasar tradisional Tulungagung. Menawarkan Wi-Fi gratis, hotel juga memiliki sebuah pusat kebugaran dan spa. Kamar-kamar kontemporer hotel ini memiliki lantai kayu, dan dihias dengan warna-warna netral. Kamar menawarkan TV layar datar dengan saluran kabel, fasilitas membuat teh/kopi, dan minibar. Perlengkapan mandi dan pengering rambut tersedia di kamar mandi dalam. Kartika Sari Restaurant menyajikan hidangan ala carte Indonesia yang lezat di samping masakan Cina. Layanan kamar juga tersedia. Istana Hotel menyediakan meja depan 24 jam yang dapat membantu dengan layanan binatu dan penyewaan mobil. Fasilitas rapat/perjamuan dan pusat bisnis juga tersedia.', 'Wi-Fi, spa, Gym, restaurant, layanan kamar, staf 24 jam, ruang rapat/pertemuan', 'mudah'),
(6, NULL, 'Swaloh Resort', 'Daerah Wisata Bendungan Wonorejo', '0355-335500', '-8.01991910', '111.78752020', 'http://muhibush.xyz/api_trme/uploads/swaloh.jpg', 'Bertempat di area wisata Waduk Wonorejo, dengan jumlah room sebanyak 48 room. Setiap kamar di Swaloh Hill Resort dilengkapi dengan TV dan beberapa unit diantaranya menyediakan teras atau balkon. Sandal dan perlengkapan mandi disediakan gratis untuk kenyamanan Anda. TV layar datar juga tersedia. Anda dapat bermain tenis dan berbagai macam permainan outbound serta karaoke di Swaloh Hill Resort, serta tersedia juga layanan penyewaan sepeda dan mobil.', 'Arena tenis, outbound, penyewaan mobil dan sepeda', 'mudah'),
(7, NULL, 'Hotel Surakarta', 'Jl. H.M. Thamrin No. 5-7 Tulungagung', '0355-321194', '-8.17307990', '111.72817770', 'http://muhibush.xyz/api_trme/uploads/surakarta.jpg', 'Hotel Surakarta terletak di depan Stasiun Kereta Api Tulungagung sehingga sangat mudah untuk dicapai. Memiliki kamar yang bersih dan nyaman, Hotel Surakarta termasuk hotel budget yang sangat recommended.', 'AC, Parkir, WiFi, Staf 24 jam', 'mudah'),
(8, NULL, 'Malinda Indah Hotel', 'Jl. Jayeng Kusuma No. 4 Tulungagung', '0355-321433', '-8.04994300', '111.90905430', 'http://muhibush.xyz/api_trme/uploads/malinda.jpg', 'Hotel Malinda Indah terletak +/- 1 km dari Jembatan Ngujang Tulungagung. Berada di pinggir jalan provinsi yang mengarah ke masuk ke kota Tulungagung, Hotel Malinda Indah sangat cocok untuk melepas lelah. Kamar yang rapi, bersih, dan pelayanan yang ramah akan memberikan kesan yang memuaskan bagi para pengunjung.', 'Restaurant, WiFi, Parkir, AC, 24 jam resepsionis', 'mudah'),
(9, NULL, 'Hotel Narita', 'Jl. K.H. Agus Salim No 87-89 Tulungagung', '0355-321608', '-8.06039230', '111.90127150', 'http://muhibush.xyz/api_trme/uploads/nasional.jpg', 'Narita Hotel menawarkan kamar-kamar dengan perabotan sederhana beserta Wi-Fi gratis dan TV layar datar dengan saluran kabel. Hotel ini menyediakan layanan pijat tradisional di kamar dan sebuah ruang karaoke. Pasar Swalayan Belga terletak di depan hotel. Semua kamar ber-AC dilengkapi dengan brankas untuk keamanan dan kenyamanan para tamu. Setiap kamar memiliki minibar sementara beberapa kamar menawarkan pembuat teh/kopi. Pemandangan taman dan balkon tersedia di kamar tertentu. Café dan Restoran Anjani menyajikan berbagai macam masakan Cina, Eropa, dan lokal Indonesia sepanjang hari.', 'Dekat dengan Swalayan, restaurant, minibar, WIFI', 'mudah'),
(10, NULL, 'Arya Guest House', 'Jl. Dr. Wahidin Sudiro Husodo No. 10, Kedungwaru, Tulungagung', '0355-333685', '-8.05581660', '111.90816330', 'http://muhibush.xyz/api_trme/uploads/arya.JPG', 'Dengan harga yang cukup terjangkau anda bisa mendapatkan penginapan di pusat kota Tulungagung. Fasilitas di setiap kamar pun bervariasi dan dijamin kenyamanan serta keamanannya.', 'Parkir', 'mudah');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_driver` int(11) DEFAULT NULL,
  `posisi_lat` decimal(10,8) DEFAULT NULL,
  `posisi_lng` decimal(11,8) DEFAULT NULL,
  `waktu_pesan` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `waktu_acc` timestamp NULL DEFAULT NULL,
  `total_budget` decimal(10,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `status_selesai` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_customer`, `id_driver`, `posisi_lat`, `posisi_lng`, `waktu_pesan`, `waktu_acc`, `total_budget`, `status`, `status_selesai`) VALUES
(1, 72, NULL, '-7.32339220', '112.74979120', '2018-07-29 04:22:36', NULL, '1083000.00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi_wisata`
--

CREATE TABLE `rekomendasi_wisata` (
  `id_rekomendasi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_tujuan` int(11) DEFAULT NULL,
  `jenis_layanan` varchar(250) NOT NULL,
  `flag` int(2) NOT NULL DEFAULT '0',
  `waktu_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `rekomendasi_wisata`
--

INSERT INTO `rekomendasi_wisata` (`id_rekomendasi`, `id_user`, `id_tujuan`, `jenis_layanan`, `flag`, `waktu_pesan`) VALUES
(1, 72, 5, 'wisata', 0, '2018-07-29 04:51:08'),
(2, 72, 6, 'wisata', 0, '2018-07-29 04:51:08'),
(3, 72, 11, 'kamar', 0, '2018-07-29 04:51:08'),
(4, 72, 3, 'menu', 0, '2018-07-29 04:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `user_type` enum('customer','driver','admin_kuliner','admin_wisata','admin_hotel','admin_sistem') NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '1 : telah verifikasi; 0: belum verifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `no_telp`, `user_type`, `flag`, `status`) VALUES
(5, 'arindatiko', 'arin123', 'Arinda Restu Nandatiko', '123', 'admin_sistem', 1, 0),
(21, 'arinda restu', 'arinda', 'arindatiko', '12345678', 'driver', 0, 1),
(22, 'ali rodhi', 'alialiali', 'aliii', '1234567', 'admin_kuliner', 0, 1),
(23, 'kila kiantari', 'kilakila', 'kilaaa', '12345', 'admin_wisata', 0, 1),
(27, 'nenengsri', '0857302578', '', 'bismillah', 'customer', 0, 0),
(29, 'arindatiko', '0857557282', '', 'arinda', 'customer', 0, 0),
(35, 'alirodhi', 'alirodhi', 'Muhammad Ali Rodhi', '08123181394', 'customer', 0, 0),
(36, 'sherlyfekay', 'sherlyfeka', 'Sherly Febrina Luhukay', '081231328297', 'customer', 0, 0),
(37, 'linamrth', 'linacantik', 'Lina Meritha', '083849317760', 'customer', 0, 0),
(38, 'shelaernita', 'shela', 'Shela Ernita Sari', '081225255168', 'customer', 0, 0),
(39, 'afdolash', 'aldohai', 'Afdolash Nur Kaffah', '08124078773', 'customer', 0, 0),
(40, 'fajargilang', 'fajar123', '', '085730257800', 'customer', 0, 0),
(43, 'jesiwitma', 'jesiwitma', '', '085735799500', 'customer', 0, 0),
(48, 'rahayupeni20', 'RahayuPeni', '', '08973198766', 'customer', 0, 0),
(54, 'arinda', 'arindatiko', '', '085755828293', 'customer', 0, 0),
(58, 'arin', 'arinda', '', '083452136785', 'customer', 1, 0),
(59, 'ardi_ahmad', 'ardiaja', 'Ahmad Ardiansyah', '082334093822', 'admin_kuliner', 0, 1),
(65, 'arinda aja', 'arinda', '', '085214536728', 'customer', 0, 0),
(66, 'arinda', 'arindatiko', '', '085236127356', 'customer', 0, 0),
(72, 'ukiacrew', 'ukiacrew', '', '085733375343', 'customer', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `desa` varchar(250) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `tiket_masuk_dewasa` decimal(10,2) DEFAULT NULL,
  `tiket_masuk_anak` decimal(10,2) DEFAULT NULL,
  `biaya_parkir_motor` decimal(10,2) DEFAULT NULL,
  `biaya_parkir_mobil` decimal(10,2) DEFAULT NULL,
  `biaya_parkir_bus` decimal(10,2) DEFAULT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` text,
  `posisi_lat` decimal(10,8) NOT NULL,
  `posisi_lng` decimal(11,8) NOT NULL,
  `akses` enum('mudah','sulit') NOT NULL,
  `jam_buka` varchar(20) DEFAULT NULL,
  `jam_tutup` varchar(20) DEFAULT NULL,
  `jenis` enum('Buatan','Alam','Sejarah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_user`, `nama`, `desa`, `kecamatan`, `tiket_masuk_dewasa`, `tiket_masuk_anak`, `biaya_parkir_motor`, `biaya_parkir_mobil`, `biaya_parkir_bus`, `foto`, `deskripsi`, `fasilitas`, `posisi_lat`, `posisi_lng`, `akses`, `jam_buka`, `jam_tutup`, `jenis`) VALUES
(3, 23, 'Gunung Budheg', 'Tanggunggunung', 'Campurdarat', '5000.00', '2000.00', '2000.00', '5000.00', '10000.00', 'wisata-1532562073 - 0.jpg**', 'Jika kita sudah mendaki hingga puncak Gunung Budheg maka kita akan bisa melihat seluruh sudut Kabupaten Tulungagung. Namun jalan menuju ke puncak tidak semudah yang dibayangkan karena mulai dari titik awal perjalanan hingga sampai puncak gunung, kita tidak akan mendapatkan tempat datar untuk beristirahat. Jadi persiapkan fisik untuk mendaki gunung yang menjadi salah satu ikon wisata di Tulungagung ini.', 'Toilet, Spot Foto, Penitipan Sepeda Motor', '-8.13619300', '111.90699300', 'sulit', '11:24:00 AM', '11:24:00 AM', 'Alam'),
(5, NULL, 'Pantai Banyu Mulok', 'Besole', 'Besuki', '0.00', '0.00', '3000.00', '5000.00', '0.00', 'http://muhibush.xyz/api_trme/uploads/banyumulok.jpg', 'Sesuai namanya dalam bahasa Jawa, Banyu artinya air, sedangkan Mulok merupakan pengembangan dari muluk yang berarti naik. Penamaan ini didasarkan pada adanya air yang naik ke atas di tepi tebingnnya. Air yang naik ke atas ini tidak se tinggi dan banyak  di pantai Pathok Gebang, walaupun demikian jika beruntung disini terdapat pelangi yang indah hasil dari pembiasan cahaya oleh semburan air.\r\nSelain semburan air dan pelangi, di pantai Banyu Mulok juga terdapat padang rumput di atas bukit. Mungkin kalau padang rumput di bukit saja sudah biasa, tetapi jika dipadukan dengan laut tentu hasilnya akan beda dan sangat indah.', 'Warung, Toilet, Parkir', '-8.27249400', '111.81632300', 'sulit', '08:00:00', '16:00:00', 'Alam'),
(6, NULL, 'Pantai Coro', 'Besole', 'Besuki', '0.00', '0.00', '3000.00', '5000.00', '0.00', 'http://muhibush.xyz/api_trme/uploads/coro.jpg', 'Perjalanan menuju Pantai Coro di mulai dengan melintasi perumahan penduduk dan dilanjutkan melewati perbukitan. Ladang penduduk terhampar sepanjang bukit menuju Pantai Coro. Padi, pisang, ketela pohon dan beberapa pohon jati menjadi komoditas yang ditanam oleh penduduk sekitar. Setelah 30 menit perjalan akhirnya sampailah kita di venue yang dituju. Pantai Coro yang masih perawan, berpasir putih. Layaknya surga pribadi dunia, di pantai ini kita bisa berjemur sepuasnya maupun bermain air sampai capek tanpa takut keramaian dari pengunjung lain.', 'Warung, Toiet, Parkir', '-8.26857800', '111.81555000', 'sulit', '08:00:00', '16:00:00', 'Alam'),
(7, NULL, 'Pantai Kedung Tumpang', 'Pucanglaban', 'Pucanglaban', '5000.00', '5000.00', '3000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/kedungtumpang.jpg', 'Sebenarnya Pantai Kedung Tumpang merupakan tebing-tebing alami yang mempunyai bentuk berbeda-beda bahkan yang spesial membentuk kolam-kolam kecil dan besar. Tebing yang membentuk kolam ini berisi air laut yang jernih. Tebing yang berwarna coklat keemasan, birunya air laut, dan hijaunya warna lumut yang berada di pinggiran tebing kolam membuatnya semakin indah dinikmati mata. Hempasan ombak yang menghantam tebing-tebing menyisakan buih putih sebelum akhirnya surut dan kembali terhantam ombak.', 'Warung, Musholla, Toilet, Parkir Motor, Parkir Mobil', '-8.30328200', '112.01025500', 'sulit', '00:00:00', '23:59:00', 'Alam'),
(8, NULL, 'Pantai Klathak', 'Keboireng', 'Besuki', '0.00', '0.00', '3000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/klathak.jpg', 'Keistimewaan Pantai Klatak adalah banyaknya bebatuan yang tertata rapi di bibir pantai. Batu-batu kecil yang bersih, dan batu itu bukan merupan batu karang tetapi bebatuan yang biasa ada di sungai-sungai. Jika terkena ombak, maka batu-batu tersebut akan menghasilkan suara klatak berulangkali. Konon kata penduduk setempat, dari bunyi itulah nama Pantai Klatak diambil. Batuan yang besar seperti ukiran tebing yang tinggi juga menambah indahnya pemandangan pantai Klatak ini.', 'Warung, Toilet, Parkir Motor, Parkir Mobil, Spot Foto', '-8.26974000', '111.76992500', 'mudah', '06:00:00', '18:00:00', 'Alam'),
(9, NULL, 'Pantai Sine', 'Kalibatur', 'Kalidawir', '10000.00', '5000.00', '3000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/sine.jpg', 'Keindahan pantai yang satu ini memang tak kalah menariknya dari pantai – pantai lainnya yang berada di Tulungagung. Di pantai ini para pengunjung akan bakal akan di suguhi keindahan yang luar biasa di pagi harinya, yaitu dengan sunrise yang ada di pantai ini. Matahari terbit yang begitu cantik bisa Anda semua saksikan di sini pada pagi hari. Perpaduan antara pantai, matahari terbit dan kapal – kapal nelayan yang mengapung di lautan memang begitu memukau mata.', 'Warung, Toilet, Musholla, Arena Bermain, Parkir', '-8.28989400', '111.93548900', 'mudah', '00:00:00', '23:59:00', 'Alam'),
(10, NULL, 'Ranugumbolo', 'Wonorejo', 'Pagerwojo', '5000.00', '3000.00', '2000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/ranugumbolo.jpg', 'Keindahan Bendungan Wonorejo makin lengkap dengan keberadaan sebuah tempat di sekitar bendungan yaitu Ranugumbolo yang disebut-sebut mirip seperti Ranukumbolo yang ada di jalur pendakian menuju puncak Mahameru. Di kalangan backpacker tempat ini disebut sebagai “Ranukumbolo Wonorejo Tulungagung”. Tidak diketahui siapa yang pertama kali mempopulerkan lokasi ini, namun mulai populer sejak 2015 lalu dan kenyataannya memang tempat ini sangat menarik sebagai tempat nongkrong sambil menikmati keindahan alam sekitar yang asri dan alami. Tentunya juga cocok sebagai spot untuk berfoto-foto. Padahal masyarakat lokal Tulungagung biasanya menggunakan tempat ini untuk memancing. Hal ini karena di lokasi itu banyak terdapat ikan antara lain ikan Nila, Mujair, Gurami, Lele, ikan Hias dan kadang juga ditemukan jenis ikan Louhan.', 'Toilet, Spot Foto, Rest Area, Warung', '-8.00677800', '111.81045000', 'mudah', '06:00:00', '17:00:00', 'Alam'),
(11, NULL, 'Pantai Gemah', 'Keboireng', 'Besuki', '10000.00', '5000.00', '3000.00', '10000.00', '20000.00', 'http://muhibush.xyz/api_trme/uploads/gemah.jpg', 'Pantai Gemah ini merupakan salah satu pantai yang mempunyai garis pantai yang cukup panjang. Terlihat di area pinggir pantai ini juga terdapat pohon – pohon cemara yang seakan ikut melengkapi keindahan pantai ini.', 'Toilet, Musholla, Warung, Arena Bermain, Penyewaan ATV, Parkir', '-8.26408800', '111.77128100', 'mudah', '00:00:00', '23:59:00', 'Alam'),
(12, NULL, 'Pantai Sidem', 'Besole', 'Besuki', '3000.00', '3000.00', '0.00', '10000.00', '20000.00', 'http://muhibush.xyz/api_trme/uploads/sidme.jpg', 'Hamparan pasir putih sepanjang pantai serta perahu nelayan yang berjajar, menghiasi birunya air laut di Pantai Sidem. Objek wisata Pantai Sidem menjadi satu paket dengan wisata Pantai Popoh. Wisatawan yang berkunjung biasanya ingin melihat keindahan pasir putihnya. Kesan alami juga terlihat dengan adanya batuan karang yang menghiasi bibir pantai. Hembusan angin pantai yang segar menjadi pelindung teriknya sinar matahari disiang hari. Panas yang menyengat seakan hilang karenanya.', 'Penyewaan ATV, Gazebo, Arena Bermain, Toilet, Parkir', '-8.25761100', '111.80004000', 'mudah', '00:00:00', '00:00:23', 'Alam'),
(13, NULL, 'Waduk Wonorejo', 'Wonorejo', 'Pagerwojo', '10000.00', '5000.00', '5000.00', '10000.00', '20000.00', 'http://muhibush.xyz/api_trme/uploads/waduk.jpg', 'Salah satu waduk/bendungan terbesar di Asia Tenggara yang diresmikan pada tahun 2001 oleh Wakil Presiden Indonesia Megawati Sukarnoputri ini berfungsi sebagai pengendalian banjir di kabupaten Tulungagung yang sekaligus juga sebagai pembangkit tenaga listrik, terutama juga untuk menyediakan pasokan air untuk Surabaya dan sekitarnya. Selain itu, manfaat lain untuk masyarakat sekitar adalah untuk budidaya perikanan, kawasan sabuk hijau untuk tanaman keras produktif, serta beberapa keunggulan dari aspek kepariwisataan.', 'Spot Foto, Warung, Musholla, Parkir, Toilet', '-8.01524500', '111.80060900', 'mudah', '00:00:06', '00:00:17', 'Buatan'),
(14, NULL, 'Taman Aloon-Aloon', 'Jl. R.A. Kartini, Tulungagung', 'Tulungagung', '0.00', '0.00', '2000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/alun.jpg', 'Luas Taman Aloon Aloon kurang lebih sekitar 1 KM persegi dengan desain berbentuk radial karena ditengahnya terdapat ciri khas yaiu menara dengan patung lambang negara Indonesia burung Garuda. Kesan asri, hijau, rindang, dan  menyejukkan akan terucap dalam hati setiap orang yang singgah di sini. Hampir setiap hari libur atau weekend, Taman Aloon-Aloon ramai pengunjung.', 'Spot Foto, Skatepark, Arena Bermain, Gazebo, Warung, Toilet, Masjid, Arena Belajar', '-8.06495600', '111.90056900', 'mudah', '00:00:00', '00:00:23', 'Buatan'),
(15, NULL, 'Kampung Susu Dinasty', 'Sidem', 'Gondang', '0.00', '0.00', '5000.00', '10000.00', '20000.00', 'http://muhibush.xyz/api_trme/uploads/susu.jpg', 'Beberapa aktivitas menarik di Kampung Susu Dinasty (KSD) antara lain adalah memerah susu sapi secara langsung, belajar tentang proses perawatan atau beternak sapi perah, memberi makan sapi, memberi minum, dan masih banyak pelajaran lainnya untuk pengetahuan umum. Tidak hanya itu saja, kita juga bisa langsung merasakan kesegaran susu murni di kedai susu sapi di area KSD.', 'Musholla, Toilet, Parkir', '-8.07206300', '111.80844300', 'mudah', '00:00:08', '00:00:17', 'Buatan'),
(16, NULL, 'Kolam Renang Vidia Tirta', 'Jl. Mayjend Sungkono III/55', 'Tulungagung', '15000.00', '10000.00', '5000.00', '10000.00', '20000.00', 'http://muhibush.xyz/api_trme/uploads/vidia.jpg', 'Kolam renang Vidia Tirta diresmikan tanggal 13 Desember 1997 dengan nama pemilik Adiono. Adapun kolam renang ini mempunyai 2 kolam utama yaitu kolam renang dewasa berukuran 15m x 50m dengan kedalaman 3m dan kolam renang anak-anak berukuran 8m x 8m dengan kedalaman 50-80cm.', 'Warung, Toilet, Parkir, Kamar Mandi, Minimarket, Musholla, Gazebo, Arena Bermain', '-8.06595500', '111.89200600', 'mudah', '00:00:07', '00:00:17', 'Buatan'),
(17, NULL, 'Splash Waterpark', 'Bendilwungu', 'Sumbergempol', '10000.00', '10000.00', '5000.00', '10000.00', '20000.00', 'http://muhibush.xyz/api_trme/uploads/splash.jpg', 'Splash Waterpark Tulungagung ini memiliki 3 kolam renang yang memiliki kedalaman air yang berbeda – beda diantaranya kolam pertama memiliki ukuran kedalaman air sekitar 0,5 meter untuk usia anak – anak, kolam kedua memiliki ukuran kedalaman air sekitar 1 meter sedangkan kolam ketiga memiliki ukuran kedalaman air sekitar 1,5 meter untuk usia dewasa. Selaian itu di lokasi wisata ini juga terdapat fasilitas wahana pelengkap lainya diantaranya yaitu waterboom, ember tumpah, race slide, slide circle, aquarium besar, taman bermain, food court, dan masih banyak lagi wahana menarik lainya. Pokoknya dijamin gak bakalan nyesel deh berkunjung di lokasi tersebut.', 'Food Court, Toilet, Musholla, Parkir, Kamar mandi, Waterboom, Slide Circle, Taman Bermain', '-8.11748400', '111.95296100', 'mudah', '00:00:08', '00:00:16', 'Buatan'),
(18, NULL, 'Kolam Renang Tirta Kencana', 'Jl. Dr. Wahidin Sudiro Husodo No. 29', 'Tulungagung', '10000.00', '10000.00', '5000.00', '10000.00', '20000.00', 'http://muhibush.xyz/api_trme/uploads/tirta.jpg', 'Kolam Renang Tirta Kencana berdiri pada 22 Februari 1993 dengan pemilik adalah bapak Moch.Dyuari. Tirta Kencana saat ini mempunyai 6 kolam renang. Kolam renang utama yaitu standarisasi kolam renang latih atlit dengan ukuran 25m x 12.5m dengan kedalaman 2m. Untuk kolam renang anak-anak mempunyai ukuran 15m x 5m dengan kedalaman 1,25m. Kolam renang utara mempunyai ukuran 25m x 5,5m dengan kedalaman 1,35m. Kolam renang untuk PAUD berbentuk bulat dengan diameter 6m dan kedalaman 0,7m. Selanjutnya untuk kolam renang tengah berukuran 5m x 15m dengan kedalaman 1,25m. Dan yang terakhir adalah kolam renang kecil dengan ukuran 5m x 5m dengan kedalaman 0,5m.', 'Toilet, Musholla, Kamar Mandi, Gazebo', '-8.05611100', '111.91761800', 'mudah', '00:00:07', '00:00:17', 'Buatan'),
(19, NULL, 'Taman Kali Ngrowo', 'Panggungrejo', 'Tulungagung', '0.00', '0.00', '3000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/ngrowo.jpg', 'Taman Kali Ngrowo berada di pinggir sungai Ngrowo Lembupeteng Kabupaten Tulungagung. Di Taman Kali Ngrowo ini terdapat banyak aktivitas refreshing dan olahraga karena sudah disediakan berbagai macam fasilitas agar pengunjung dapat menikmati sisi lain dari sungai Ngrowo. Taman yang rindang, fasilitas bermain anak-anak yang variatif, lintasan skateboard untuk kegiatan anak muda, dan masih banyak lagi.', 'Arena bermain, Parkir, Food Court, Spot Foto, Taman, Skate Park', '-8.06407100', '111.88968500', 'mudah', '00:00:00', '00:00:23', 'Buatan'),
(20, NULL, 'Taman Ketandan', 'Jl. Semeru No. 10B Sidorejo', 'Kauman', '0.00', '0.00', '5000.00', '10000.00', '20000.00', 'http://muhibush.xyz/api_trme/uploads/ketandan.jpg', 'Taman Kentandan merupakan bangunan Ruang Terbuka Hijau (RTH) yang cukup baru di Kabupaten Tulungagung. Taman yang menjadi ikon dari kecamatan Kauman ini berisi banyak varian tumbuhan serta pohon. Tidak lupa juga taman ini dilengkapi dengan berbagai macam fasilitas bermain dan juga tempat-tempat istirahat yang teduh agar pengunjung bisa melepaskan penat.', 'Arena Bermain, Gazebo, Toilet, Parkir, Musholla, Spot Foto', '-8.05369800', '111.86618800', 'mudah', '00:00:00', '00:00:23', 'Buatan'),
(21, NULL, 'Gubug Sawah', 'Sumberejo Wetan', 'Ngunut', '0.00', '0.00', '3000.00', '5000.00', '10000.00', 'http://muhibush.xyz/api_trme/uploads/gubuk.jpg', 'Spot wisata yang satu ini bisa anda kunjungi pada malam hari, kenapa harus malam hari? Karena di spot ini akan terlihat lampu – lampu yang sudah disetting sedemikian rupa dan menghasilkan view yang begitu bagus untuk dijadikan spot berfoto – foto ria bagi para pengunjung.', 'Spot Foto, Gazebo', '-8.11192200', '112.00114300', 'mudah', '00:00:05', '00:00:23', 'Buatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `rekomendasi_wisata`
--
ALTER TABLE `rekomendasi_wisata`
  ADD PRIMARY KEY (`id_rekomendasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `no_telp` (`no_telp`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rekomendasi_wisata`
--
ALTER TABLE `rekomendasi_wisata`
  MODIFY `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

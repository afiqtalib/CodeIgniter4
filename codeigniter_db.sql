-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2024 at 09:18 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust_services`
--

CREATE TABLE `cust_services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `prob_type` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_services`
--

INSERT INTO `cust_services` (`id`, `name`, `phone`, `user_type`, `prob_type`, `message`, `date_created`) VALUES
(1, 'Muhammad Haziq', '0198344325', '2', '7', 'FIRST MESSAGE', '2022-12-11 15:40:45'),
(2, 'Muhammad Haziq', '0198344325', '2', '6', 'KOKOKO', '2022-12-11 15:42:04'),
(3, 'MUHAMMAD AFIQ', '0198344325', '2', '4', 'bcbfdb', '2022-12-13 16:02:11'),
(4, 'MUHAMMAD AFIQ BIN TALIB ALI', '01121828562', '2', '3', 'asasad', '2023-01-02 11:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenum` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `email`, `phonenum`, `username`, `password`) VALUES
(3, 'emp', 'email@gmail.com', '01312423545', 'testuser', '32443');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `p_ayam` int(11) NOT NULL,
  `p_kambing` int(11) NOT NULL,
  `p_campur` int(11) NOT NULL,
  `dk_ayam` int(11) DEFAULT NULL,
  `dk_kambing` int(11) DEFAULT NULL,
  `dk_campur` int(11) DEFAULT NULL,
  `d_ayam` int(11) NOT NULL,
  `d_kambing` int(11) NOT NULL,
  `d_campur` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pay_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `p_ayam`, `p_kambing`, `p_campur`, `dk_ayam`, `dk_kambing`, `dk_campur`, `d_ayam`, `d_kambing`, `d_campur`, `created_date`, `date`, `time`, `link`, `location`, `remark`, `status`, `pay_type`) VALUES
(1, 'SYAZLINA', '01125606056', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2023-03-07 15:46:41', '2023-03-07', '12:00', 'cod', '1', 'COD +RM8', 'paid', 1),
(2, 'Ejen Nasir', '01121828562', 15, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-07 15:48:55', '2023-03-07', '14:00', 'Mahad Sc Tok Guru PC ', '1', 'COD 10 & - RM 15', 'paid', NULL),
(3, 'Kak lin', '0179423828', 15, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-07 15:53:01', '2023-03-07', '13:00', 'cod', '1', 'COD rm 7 & add-on air mineral +RM15', 'paid', NULL),
(4, 'Zulkifli ', '0104064439', 0, 0, 0, 0, 0, 1, 0, 0, 0, '2023-03-07 15:54:36', '2023-03-07', '12:00', 'peringat', '1', 'COD + RM6 ', 'paid', NULL),
(5, 'Kak la @ Azila ', '0199060950', 2, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-07 15:55:39', '2023-03-07', '16:55', 'walk in', '1', 'walk in', 'paid', NULL),
(6, 'Dr Zalina', '0129080886', 0, 0, 0, 0, 0, 1, 0, 0, 0, '2023-03-07 15:56:41', '2023-03-07', '18:00', 'cod', '1', 'COD +RM6', 'paid', NULL),
(7, 'HUSM', '01121828562', 11, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-07 15:58:40', '2023-03-07', '12:00', 'husm', '1', 'COD RM5 & - RM 11', 'paid', NULL),
(8, 'Nadiah', '0107989917', 0, 0, 0, 0, 0, 1, 0, 0, 0, '2023-03-07 16:09:25', '2023-03-07', '15:00', 'cod', '1', 'COD +RM7', 'paid', NULL),
(9, 'Wani ', '0145171345', 0, 0, 0, 1, 1, 0, 0, 0, 0, '2023-03-07 16:59:47', '2023-03-07', '17:00', 'walk in', '1', 'walk in', 'paid', NULL),
(10, 'Syarifah ', '0169893782', 0, 0, 0, 0, 0, 0, 2, 0, 1, '2023-03-07 17:54:19', '2023-03-07', '18:00', 'walk in', '1', 'walk in', 'paid', NULL),
(11, 'Mahfuzah', '0179302243', 1, 2, 0, 0, 0, 0, 0, 0, 0, '2023-03-08 00:58:09', '2023-03-08', '12:00', 'panji', 'panji', 'walk in \n& tak nak paha & wing', 'paid', NULL),
(13, 'shaiful', '0139329007', 0, 0, 0, 0, 0, 1, 0, 0, 0, '2023-03-08 01:56:36', '2023-03-08', '12:00', 'cod', 'kg pasir tok kambing', 'COD RM7', 'paid', NULL),
(14, 'Norhakimah', '0199113003', 0, 0, 0, 0, 1, 0, 1, 1, 0, '2023-03-08 01:59:35', '2023-03-08', '18:00', 'panji', 'panji', 'COD RM 6', 'paid', NULL),
(16, 'Miera', '01111461200', 1, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-08 02:04:35', '2023-03-08', '12:00', 'kk', 'depan mydin kk', 'COD +RM 5', 'paid', NULL),
(17, 'basyir', '01121828562', 0, 0, 0, 0, 0, 1, 0, 0, 0, '2023-03-08 11:39:34', '2023-03-08', '12:00', 'pick up', 'pick up ', 'pick up', 'paid', NULL),
(18, 'walk in', '01121828562', 2, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-08 13:52:37', '2023-03-08', '13:00', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(19, 'walk in', '01121828562', 0, 1, 0, 0, 0, 0, 0, 0, 0, '2023-03-08 14:14:24', '2023-03-08', '14:10', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(20, 'Sakila Dollah', '0199883814', 0, 0, 0, 0, 0, 1, 0, 0, 0, '2023-03-08 15:26:43', '2023-03-08', '18:00', 'cod', 'kg budi', 'COD RM 8', 'paid', NULL),
(21, 'walk in', '01121828562', 2, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-08 16:14:40', '2023-03-08', '15:15', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(22, 'walk in', '01121828562', 0, 0, 0, 1, 0, 0, 0, 0, 0, '2023-03-08 16:20:29', '2023-03-08', '16:20', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(23, 'Suriani', '01121828562', 0, 0, 1, 0, 0, 0, 0, 0, 1, '2023-03-08 16:22:40', '2023-03-08', '17:30', 'pick up', 'pick up ', 'pick up ', 'paid', NULL),
(24, 'Eirah', '0145152823', 0, 0, 0, 0, 0, 0, 0, 0, 2, '2023-03-10 00:24:26', '2023-03-10', '12:00', 'cod', 'kg tiong', 'COD RM6', 'paid', NULL),
(25, 'Ziey', '01121828562', 0, 0, 0, 1, 1, 0, 0, 0, 0, '2023-03-10 00:28:02', '2023-03-10', '12:00', 'cod', 'salamku bukit marak', 'COD RM7 & b4 jumaat ', 'paid', NULL),
(26, 'Alia', '0179359428', 0, 0, 0, 0, 0, 1, 0, 0, 0, '2023-03-10 00:31:18', '2023-03-10', '12:00', 'cod', 'pasir hor', 'COD RM6', 'paid', NULL),
(27, 'Yusmal', '0199915575', 7, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-10 00:33:41', '2023-03-10', '16:00', 'cod', 'belakang mydin kk', 'COD RM5 & paha monggeng', 'paid', NULL),
(28, 'Datin sharifah nor', '0189103807', 0, 0, 0, 1, 1, 0, 1, 1, 0, '2023-03-10 00:36:49', '2023-03-10', '18:00', 'cod', 'panchor', 'COD RM7 & 2pax nasi kosong (transfer)', 'paid', NULL),
(29, 'Nor Ilhamie', '0132280603', 1, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-10 00:38:33', '2023-03-10', '12:00', 'cod', 'lundang', 'COD RM6 & LS 1pax (transfer)', 'paid', NULL),
(30, 'Muhd Khairul', '0199865816', 0, 0, 0, 0, 0, 0, 4, 0, 0, '2023-03-10 00:40:02', '2023-03-10', '12:00', 'cod', 'mulong', 'COD RM8 & majlis lepas jumaat', 'paid', NULL),
(31, 'Maraina', '0129017847', 0, 0, 0, 0, 0, 0, 2, 0, 0, '2023-03-10 00:42:15', '2023-03-10', '12:00', 'cod', 'perupok', 'COD RM11', 'paid', NULL),
(32, 'Masjid Al Wadi', '0145152823', 5, 5, 0, 0, 0, 0, 0, 0, 0, '2023-03-10 00:49:03', '2023-03-10', '14:00', 'cod', 'tiong', 'COD RM6', 'paid', NULL),
(33, 'Yayasan al kariah ', '0139626881', 0, 0, 0, 0, 0, 0, 2, 2, 0, '2023-03-11 09:48:55', '2023-03-11', '12:00', 'cod', 'kk', 'COD RM5', 'paid', NULL),
(34, 'kak nani', '01121828562', 0, 0, 0, 0, 0, 3, 0, 0, 0, '2023-03-11 09:50:23', '2023-03-11', '15:00', 'cod', 'binjai', 'COD RM 5', 'paid', NULL),
(35, 'Imam Zamri', '0129089079', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2023-03-11 09:52:42', '2023-03-11', '12:00', 'cod', 'lundang', 'RM 6 & add on dulang', 'paid', NULL),
(36, 'Rujahan', '01121828562', 4, 2, 0, 0, 0, 0, 0, 0, 0, '2023-03-11 10:26:51', '2023-03-11', '13:00', 'pick up', 'pick up ', 'pickup', 'paid', NULL),
(37, 'walk in', '01121828562', 2, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-11 11:56:02', '2023-03-11', '12:00', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(38, 'Ustaz hafiz', '0189169556', 0, 19, 0, 0, 0, 0, 0, 0, 0, '2023-03-12 11:04:15', '2023-03-12', '12:30', 'cod', 'pc', 'COD RM10', 'paid', NULL),
(39, 'walk in ', '01121828562', 4, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-12 11:04:50', '2023-03-12', '12:00', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(40, 'Amalina', '01161012382', 1, 1, 0, 0, 0, 0, 0, 0, 0, '2023-03-12 11:05:39', '2023-03-12', '12:00', 'cod', 'kk', 'COD RM5', 'paid', NULL),
(41, 'Nurhasliza', '0105583939', 0, 0, 0, 1, 0, 0, 1, 0, 0, '2023-03-12 11:38:49', '2023-03-12', '17:30', 'cod', 'peringat', 'pickup', 'paid', NULL),
(42, 'Khairul', '01121828562', 2, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-12 14:28:23', '2023-03-12', '14:00', 'cod', 'melor', 'COD RM7', 'paid', NULL),
(43, 'kak su', '01121828562', 0, 0, 1, 0, 0, 0, 0, 0, 0, '2023-03-12 14:29:19', '2023-03-12', '15:00', 'pick up', 'pick up ', 'pick up VIP +RM3', 'paid', NULL),
(44, 'HUSM', '01121828562', 20, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-12 17:01:10', '2023-03-12', '12:00', 'husm', 'husm', '-RM30 / 9.50', 'unpaid', NULL),
(45, 'walk in', '01121828562', 1, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-12 17:46:34', '2023-03-12', '17:46', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(46, 'Muhammad afif ', '0133437086', 0, 0, 0, 1, 0, 0, 0, 1, 0, '2023-03-13 01:12:26', '2023-03-13', '16:00', 'cod', 'gunong', 'COD RM10 ', 'paid', NULL),
(47, 'hisyam', '0179761304', 0, 0, 0, 0, 0, 0, 1, 1, 0, '2023-03-13 01:14:26', '2023-03-13', '18:00', 'pick up', 'pick up ', 'add on dulang RM 4', 'unpaid', NULL),
(48, 'siti', '0179984824', 1, 0, 0, 0, 0, 1, 1, 1, 0, '2023-03-13 01:19:41', '2023-03-13', '18:00', 'pick up', 'pick up ', 'pick up', 'unpaid', NULL),
(49, 'asrehan', '01121828562', 3, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-13 01:22:09', '2023-03-13', '16:00', 'pick up', 'pick up ', 'pick up', 'paid', NULL),
(50, 'hamimi', '0139835882', 0, 0, 0, 1, 1, 1, 0, 0, 0, '2023-03-13 01:27:08', '2023-03-13', '12:00', 'cod', 'kk', 'COD rm5 & kull 11, uppr husm', 'paid', NULL),
(51, 'walk in', '01121828562', 11, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-13 14:03:35', '2023-03-13', '14:03', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(52, 'walk in', '01121828562', 2, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-13 15:00:09', '2023-03-13', '14:59', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(53, 'walk in ', '01121828562', 0, 0, 0, 1, 0, 0, 0, 0, 0, '2023-03-13 15:05:24', '2023-03-13', '15:04', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(54, 'hidayah', '01121828562', 10, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-13 15:10:30', '2023-03-13', '13:30', 'cod', 'pc', 'COD RM10', 'paid', NULL),
(55, 'wan rozaini', '01121828562', 3, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-13 15:31:11', '2023-03-13', '16:30', 'cod', 'rekang', 'cod rm15', 'paid', NULL),
(56, 'walk in ', '01121828562', 3, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-13 15:52:25', '2023-03-13', '15:52', 'walk in ', 'walk in ', 'walk in\r\n', 'paid', NULL),
(57, 'HUSM', '01121828562', 18, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-13 17:24:52', '2023-03-13', '12:00', 'husm', 'husm', 'RM9.50', 'paid', NULL),
(58, 'Nurul Waheda', '0145035395', 25, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-14 12:06:02', '2023-03-14', '12:05', 'kb', 'kb', 'COD RM8 buffet +RM1', 'paid', NULL),
(59, 'cikgu ', '01121828562', 4, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-14 12:08:42', '2023-03-14', '12:06', 'binjai', 'binjai', 'COD RM5', 'paid', NULL),
(60, 'Pokcik kopah', '01121828562', 0, 0, 0, 0, 0, 0, 1, 0, 0, '2023-03-14 12:10:17', '2023-03-14', '12:09', 'mentuan', 'mentuan', 'COD RM6 +rm4(dulang)', 'paid', NULL),
(61, 'Fadhli', '01121828562', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2023-03-14 12:11:42', '2023-03-14', '12:10', 'pick up', 'pick up ', 'pick up', 'paid', NULL),
(62, 'Zul', '01121828562', 0, 0, 0, 0, 0, 1, 0, 0, 0, '2023-03-14 12:16:47', '2023-03-14', '12:12', 'pick up', 'pick up ', 'pick up add on sup', 'paid', NULL),
(63, 'Raihan', '01121828562', 0, 0, 0, 0, 0, 0, 0, 0, 2, '2023-03-14 12:21:12', '2023-03-14', '18:00', 'cod', 'PCB', 'COD RM10', 'unpaid', NULL),
(64, 'walk in ', '01121828562', 0, 0, 0, 0, 0, 0, 1, 0, 0, '2023-03-14 15:29:46', '2023-03-14', '15:29', 'walk in', 'walk in ', 'walk in', 'paid', NULL),
(65, 'Vendor Husm', '01121828562', 13, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-14 15:30:27', '2023-03-14', '15:30', 'husm', 'husm', 'husm', 'paid', NULL),
(66, 'walk in', '0123126843', 1, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-14 15:35:07', '2023-03-14', '15:34', 'walk in', 'walk in ', 'walkin', 'paid', NULL),
(67, 'walk in ', '01121828562', 0, 0, 0, 0, 0, 0, 1, 0, 0, '2023-03-14 16:44:06', '2023-03-14', '16:43', 'walk in', 'walk in ', 'add on dulang\r\n', 'unpaid', NULL),
(68, 'walk in ', '01121828562', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2023-03-14 17:12:57', '2023-03-14', '17:12', 'walk in', 'walk in ', 'walk in ', 'unpaid', NULL),
(69, 'adib fidaiy ', '0139019345', 0, 0, 0, 0, 0, 0, 2, 0, 0, '2023-03-16 09:49:57', '2023-03-16', '12:30', 'cod', 'kb', 'cod', 'unpaid', NULL),
(70, 'kak lin', '0179423828', 6, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-16 09:53:41', '2023-03-16', '15:00', 'cod', 'kb', 'COD rm8 paha ', 'unpaid', NULL),
(71, 'roshana', '0179122695', 0, 0, 0, 0, 0, 0, 3, 0, 0, '2023-03-16 09:55:15', '2023-03-16', '12:00', 'cod', 'lundang', 'COD rm6 add-on ayam4ketul  ', 'unpaid', NULL),
(72, 'nasrudin', '01121828562', 0, 0, 0, 0, 0, 0, 0, 1, 0, '2023-03-16 10:32:58', '2023-03-16', '12:00', 'pick up', 'pick up ', 'pick up', 'unpaid', NULL),
(74, 'walk in', '0123126843', 5, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-16 16:21:04', '2023-03-16', '16:20', 'walk in', 'walk in', 'walk in', 'paid', NULL),
(75, 'zulhimi', '01121828562', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2023-03-16 16:23:34', '2023-03-16', '18:00', 'cod', 'pcb', 'COD rm10', 'unpaid', NULL),
(76, 'kak na', '01121828562', 3, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-16 16:27:35', '2023-03-16', '18:00', 'pick up', 'pick up ', 'pick up', 'unpaid', NULL),
(77, 'Norhakimah', '0199113003', 1, 0, 0, 0, 0, 0, 0, 0, 0, '2023-08-04 09:57:23', '2023-08-05', '13:56', 'panji', 'lundang', 'test', 'unpaid', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `gender`, `created_date`, `phone`) VALUES
(1, 'MUHAMMAD AFIQ BIN TALIB ALI', 'user@gmail.com', '12345', 'male', '2022-11-01', '01121828562'),
(2, 'MUHAMMAD AFIQ BIN TALIB ALI', 'rjcasilan@gmail.com', '12345', 'male', '2022-11-17', '0132444353'),
(3, 'abu', 'abu@gmail.com', '132434', 'female', '2022-11-17', '0131743945'),
(4, 'MUHAMMAD AFIQ BIN TALIB ALI', 'afiqtalib2580@gmail.com', '23334', 'male', '2022-11-17', '01121828562'),
(5, 'MUHAMMAD AFIQ BIN TALIB ALI', '2019291398@student.uitm.edu.my', '12345', 'male', '2022-12-06', '01121828562'),
(6, 'MUHAMMAD AFIQ BIN TALIB ALI', '2019291398@student.uitm.edu.my', '12345', 'male', '2022-12-06', '01121828562'),
(7, 'test first user', 'user@gmail.com', '12345', 'male', '2022-12-06', '01121828562'),
(8, 'afiq talib', 'hai@gmail.com', '12345', 'male', '2022-12-13', '01121828562'),
(9, 'book_id', 'hai@gmail.com', 'asass', 'male', '2022-12-13', '0198344325'),
(10, 'dsdsdsd', 'hai@gmail.com', 'asasd', 'female', '2022-12-13', '0198344325'),
(11, 'kokokokok', 'hai@gmail.com', '12345', 'female', '2022-12-13', '0198344325');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust_services`
--
ALTER TABLE `cust_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust_services`
--
ALTER TABLE `cust_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

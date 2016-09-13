-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2016 at 04:19 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clean_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_phinxlog`
--

CREATE TABLE `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_phinxlog`
--

INSERT INTO `acl_phinxlog` (`version`, `start_time`, `end_time`) VALUES
(20141229162641, '2016-01-07 18:56:40', '2016-01-07 18:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 106),
(2, 1, NULL, NULL, 'Groups', 2, 15),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'isAuthorized', 13, 14),
(14, 1, NULL, NULL, 'Users', 16, 37),
(15, 14, NULL, NULL, 'index', 17, 18),
(17, 14, NULL, NULL, 'view', 19, 20),
(18, 14, NULL, NULL, 'add', 21, 22),
(19, 14, NULL, NULL, 'edit', 23, 24),
(20, 14, NULL, NULL, 'delete', 25, 26),
(21, 14, NULL, NULL, 'login', 27, 28),
(22, 14, NULL, NULL, 'logout', 29, 30),
(23, 14, NULL, NULL, 'isAuthorized', 31, 32),
(24, 1, NULL, NULL, 'Acl', 38, 39),
(25, 1, NULL, NULL, 'Bake', 40, 41),
(26, 1, NULL, NULL, 'DebugKit', 42, 57),
(27, 26, NULL, NULL, 'Panels', 43, 48),
(28, 27, NULL, NULL, 'index', 44, 45),
(29, 27, NULL, NULL, 'view', 46, 47),
(30, 26, NULL, NULL, 'Requests', 49, 52),
(31, 30, NULL, NULL, 'view', 50, 51),
(32, 26, NULL, NULL, 'Toolbar', 53, 56),
(33, 32, NULL, NULL, 'clearCache', 54, 55),
(34, 1, NULL, NULL, 'Migrations', 58, 59),
(100, 1, NULL, NULL, 'ToothStatus', 60, 75),
(101, 100, NULL, NULL, 'index', 61, 62),
(102, 100, NULL, NULL, 'view', 63, 64),
(103, 100, NULL, NULL, 'add', 65, 66),
(105, 100, NULL, NULL, 'delete', 67, 68),
(106, 100, NULL, NULL, 'isAuthorized', 69, 70),
(114, 1, NULL, NULL, 'Appointment', 76, 99),
(115, 114, NULL, NULL, 'index', 77, 78),
(116, 114, NULL, NULL, 'view', 79, 80),
(117, 114, NULL, NULL, 'add', 81, 82),
(118, 114, NULL, NULL, 'edit', 83, 84),
(119, 114, NULL, NULL, 'delete', 85, 86),
(120, 114, NULL, NULL, 'isAuthorized', 87, 88),
(147, 100, NULL, NULL, 'update', 71, 72),
(149, 114, NULL, NULL, 'ajax_load_appointments_by_date', 89, 90),
(150, 114, NULL, NULL, 'json_load_events', 91, 92),
(151, 114, NULL, NULL, 'search', 93, 94),
(197, 114, NULL, NULL, 'updateSyncStatus', 95, 96),
(198, 114, NULL, NULL, 'archiveData', 97, 98),
(218, 100, NULL, NULL, 'archiveData', 73, 74),
(228, 1, NULL, NULL, 'Debug', 100, 105),
(229, 228, NULL, NULL, 'debugFtpGet', 101, 102),
(230, 228, NULL, NULL, 'isAuthorized', 103, 104),
(362, 14, NULL, NULL, 'request_forgot_password', 33, 34),
(363, 14, NULL, NULL, 'forgot_password', 35, 36);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `appointment_date` date NOT NULL,
  `patient_id` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `firstname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `note` text COLLATE utf8_unicode_ci,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `is_archive` int(2) NOT NULL,
  `is_sync` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `customer_id`, `appointment_date`, `patient_id`, `type`, `start_time`, `end_time`, `firstname`, `lastname`, `middlename`, `contact_number`, `address`, `note`, `date_created`, `date_updated`, `is_archive`, `is_sync`) VALUES
(1, 'CUS-2016-0081', '2016-08-05', 371, 'Walk-in', '14:30:00', '15:30:00', 'test patient', 'last test patient', 'middle patient', '123123123213', '', '', '2016-08-05 14:38:18', '2016-08-05 14:38:18', 0, 1),
(2, 'CUS-2016-0081', '2016-08-31', 4, 'Walk-in', '11:45:00', '11:45:00', 'LIELA', 'YUMOL', 'A.', '09152620951', 'PH. 1B #12 STA.MARIA ST. PACITA SAN PEDRO LAGUNA', '', '2016-08-31 11:45:39', '2016-08-31 11:45:39', 0, 0),
(3, 'CUS-2016-0081', '2016-08-31', 371, 'Walk-in', '11:45:00', '11:45:00', 'Test patient', 'Last test patient', 'Middle patient', '123123123213', '', '', '2016-08-31 11:55:00', '2016-08-31 11:55:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Groups', 1, NULL, 1, 52),
(2, NULL, 'Groups', 2, NULL, 53, 54),
(3, 1, 'Users', 1, NULL, 2, 3),
(4, NULL, 'Users', 1, NULL, 55, 56),
(5, 1, 'Users', 2, NULL, 4, 5),
(6, 1, 'Users', 1, NULL, 6, 7),
(7, 1, 'Users', 2, NULL, 8, 9),
(8, 1, 'Users', 3, NULL, 10, 11),
(9, 1, 'Users', 4, NULL, 12, 13),
(10, 1, 'Users', 5, NULL, 14, 15),
(11, 1, 'Users', 6, NULL, 16, 17),
(12, 1, 'Users', 7, NULL, 18, 19),
(13, 1, 'Users', 8, NULL, 20, 21),
(14, 1, 'Users', 9, NULL, 22, 23),
(15, 1, 'Users', 10, NULL, 24, 25),
(16, 1, 'Users', 11, NULL, 26, 27),
(17, 1, 'Users', 12, NULL, 28, 29),
(18, 1, 'Users', 1, NULL, 30, 31),
(19, 1, 'Users', 1, NULL, 32, 33),
(20, 1, 'Users', 2, NULL, 34, 35),
(21, 1, 'Users', 3, NULL, 36, 37),
(22, 1, 'Users', 4, NULL, 38, 39),
(23, 1, 'Users', 5, NULL, 40, 41),
(24, 1, 'Users', 6, NULL, 42, 43),
(25, 1, 'Users', 7, NULL, 44, 45),
(26, 1, 'Users', 8, NULL, 48, 49),
(27, 1, 'Users', 9, NULL, 46, 47),
(28, 1, 'Users', 10, NULL, 50, 51);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `city` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `package_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subscription_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_purchase` date DEFAULT NULL,
  `license_key` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `mac_address` text COLLATE utf8_unicode_ci,
  `expiration_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user_id`, `customer_id`, `customer_domain`, `firstname`, `lastname`, `middlename`, `occupation`, `company`, `address`, `city`, `province`, `package_type`, `subscription_type`, `contact_number`, `email_address`, `status`, `date_purchase`, `license_key`, `mac_address`, `expiration_date`) VALUES
(1, 1, 'CUS-2016-0081', 'test', 'Abc', 'Account', 'A', 'B', 'My Test Clinic Abc.', 'C', 'D', 'E', 'Subscription', 'basic', '', 'admin@admin.com', 'Archived', '2016-07-15', '42FDD-20254-5C655', 'D8-50-E6-DA-BC-D3', '2016-09-05'),
(2, 2, 'CUS-2016-0003', '', 'd', 'd', '', '', '', '', '', '', 'One Time', '', '', 'demo@email.com', 'Available', '2016-08-23', '8EFCE-092FD-EAA7A', 'D8-50-E6-DA-BC-D3', '2016-05-15'),
(3, 3, 'CUS-2016-0003', '', 'd', 'd', '', '', '', '', '', '', 'One Time', '', '', 'demo@email.com', 'Active', '2016-08-23', '8EFCE-092FD-EAA7A', 'D8-50-E6-DA-BC-D3', '2016-05-15'),
(4, 4, 'CUS-2016-0003', '', 'd', 'd', '', '', '', '', '', '', 'One Time', '', '', 'demo@email.com', 'Active', '2016-08-23', '8EFCE-092FD-EAA7A', 'D8-50-E6-DA-BC-D3', '2016-05-15'),
(5, 5, 'CUS-2016-0003', '', 'd', 'd', '', '', '', '', '', '', 'One Time', '', '', 'demo@email.com', 'Active', '2016-08-23', '8EFCE-092FD-EAA7A', 'D8-50-E6-DA-BC-D3', '2016-05-15'),
(6, 6, 'CUS-2016-0003', '', 'd', 'd', '', '', '', '', '', '', 'One Time', '', '', 'demo@email.com', 'Active', '2016-08-23', '8EFCE-092FD-EAA7A', 'D8-50-E6-DA-BC-D3', '2016-05-15'),
(7, 7, 'CUS-2016-0003', '', 'd', 'd', '', '', '', '', '', '', 'One Time', '', '', 'demo@email.com', 'Active', '2016-08-23', '8EFCE-092FD-EAA7A', 'D8-50-E6-DA-BC-D3', '2016-05-15'),
(8, 8, 'CUS-2016-0003', '', 'd', 'd', '', '', '', '', '', '', 'One Time', '', '', 'demo@email.com', 'Active', '2016-08-23', '8EFCE-092FD-EAA7A', 'D8-50-E6-DA-BC-D3', '2016-05-15'),
(9, 9, 'CUS-2016-0003', '', 'd', 'd', '', '', '', '', '', '', 'One Time', '', '', 'demo@email.com', 'Active', '2016-08-23', '8EFCE-092FD-EAA7A', 'D8-50-E6-DA-BC-D3', '2016-05-15'),
(10, 10, 'CUS-2016-0003', '', 'd', 'd', '', '', '', '', '', '', 'One Time', '', '', 'demo@email.com', 'Active', '2016-08-23', '8EFCE-092FD-EAA7A', 'D8-50-E6-DA-BC-D3', '2016-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(180) CHARACTER SET latin1 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrator', '2016-01-08 03:01:24', '2016-01-08 03:01:24'),
(2, 'User', '2016-01-08 03:01:33', '2016-01-08 03:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `patient_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `province` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `telephone_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `civil_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `health_card_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `health_card_number` text COLLATE utf8_unicode_ci,
  `is_pregnant` int(2) NOT NULL,
  `is_treatment` int(2) NOT NULL,
  `diagnosis` text COLLATE utf8_unicode_ci,
  `treatment` text COLLATE utf8_unicode_ci,
  `prescriptions` text COLLATE utf8_unicode_ci,
  `alergies` text COLLATE utf8_unicode_ci,
  `diseases` text COLLATE utf8_unicode_ci,
  `referred_by` text COLLATE utf8_unicode_ci,
  `created_by` text COLLATE utf8_unicode_ci,
  `date_created` datetime DEFAULT NULL,
  `remarks` text COLLATE utf8_unicode_ci,
  `date_updated` datetime DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `medical_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_in_good_health` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `last_checkup` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `has_general_health_changes` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `is_taking_medications` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `is_smoker` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `is_nursing` int(11) NOT NULL,
  `is_taking_pills` int(11) NOT NULL,
  `visit_reason` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `former_dentist` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `dentist_address` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `last_dental_care` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_dental_xray` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `other_dental_history` text COLLATE utf8_unicode_ci NOT NULL,
  `often_floss` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `often_brush` int(90) NOT NULL,
  `is_archive` int(2) DEFAULT NULL,
  `is_sync` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `customer_id`, `patient_code`, `firstname`, `lastname`, `middlename`, `occupation`, `company`, `address`, `province`, `city`, `telephone_number`, `mobile_number`, `birthdate`, `age`, `gender`, `civil_status`, `health_card_type`, `health_card_number`, `is_pregnant`, `is_treatment`, `diagnosis`, `treatment`, `prescriptions`, `alergies`, `diseases`, `referred_by`, `created_by`, `date_created`, `remarks`, `date_updated`, `image`, `medical_date`, `is_in_good_health`, `last_checkup`, `has_general_health_changes`, `is_taking_medications`, `is_smoker`, `is_nursing`, `is_taking_pills`, `visit_reason`, `former_dentist`, `dentist_address`, `last_dental_care`, `last_dental_xray`, `other_dental_history`, `often_floss`, `often_brush`, `is_archive`, `is_sync`) VALUES
(1, 'CUS-2016-0081', 'P-W0001', 'Juan', 'Dela Cruz', '', '', NULL, '', 'Laguna', 'Biñan', NULL, '', '1970-01-01', 0, '', '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 10:39:21', '', '2016-07-26 10:39:21', NULL, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 1, 1),
(2, 'CUS-2016-0081', 'P-W0002', 'JEREMIAH', 'YUMOL', 'A.', 'STUDENT', '', 'PH. 1B, STA. MARIA ST. PACITA COMPLEX', 'Laguna', 'San Pedro', '', '09061529607', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 11:07:48', '', '2016-07-26 11:07:48', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(3, 'CUS-2016-0081', 'P-W0003', 'WILHEM', 'YUMOL', 'A.', 'STUDENT', '', 'PH. 1B #12 STA.MARIA ST. PACITA SAN PEDRO LAGUNA', 'Laguna', 'San Pedro', '', '09352015523', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 11:13:23', '', '2016-07-26 11:13:23', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(4, 'CUS-2016-0081', 'P-W0004', 'LIELA', 'YUMOL', 'A.', '', '', 'PH. 1B #12 STA.MARIA ST. PACITA SAN PEDRO LAGUNA', 'Laguna', 'San Pedro', '', '09152620951', '1970-01-01', 20, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 11:15:45', '', '2016-07-26 11:15:45', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(5, 'CUS-2016-0081', 'P-W0005', 'ADRIAN', 'QUEVADA', '', 'STUDENT', '', 'COUNTRY HOMES', 'Laguna', 'Biñan', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 11:17:13', '', '2016-07-26 11:17:13', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(6, 'CUS-2016-0081', 'P-W0006', 'QUEVADA', 'ALDRICH', '', 'GSA', '', 'BLK. 5 LOT 1 COUNTRY HOMES', 'Laguna', 'Biñan', '', '09063577441', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 11:19:54', '', '2016-07-26 11:19:54', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(7, 'CUS-2016-0081', 'P-W0007', 'MARIA ANNA VERONICA', 'AYSON', 'P.', '', '', 'BLK. 5 LOT 4 PACITA HOMES BINAN LAGUNA', 'Laguna', 'Biñan', '', '09063576129', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:05:58', '', '2016-07-26 14:05:58', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(8, 'CUS-2016-0081', 'P-W0008', 'LUIGI', 'ABELARDO', '', '', '', '#61 GEN. CAPINPIN ST. SAN VICENTE BINAN LAGUNA', 'Laguna', 'Biñan', '', '09428172210', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:10:26', '', '2016-07-26 14:10:26', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(9, 'CUS-2016-0081', 'P-W0009', 'SAMANTHA LEONORA', 'ABELARDO', 'V.', '', '', '#61 GEN. CAPINPIN ST. SAN VICENTE BINAN LAGUNA', 'Laguna', 'Biñan', '', '09428472210', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:11:53', '', '2016-07-26 14:11:53', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(10, 'CUS-2016-0081', 'P-W0010', 'RIZZA', 'GARCIA', '', '', '', '', '', '', '', '09162423010', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:13:32', '', '2016-07-26 14:13:32', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(11, 'CUS-2016-0081', 'P-W0011', 'BRIAN', 'GALANG', 'G.', 'STUDENT', '', 'B44 L11 CAMPANILLA ST. ELVINDA VILLAGE,SAN PEDRO,LAGUNA', 'Laguna', 'San Pedro', '8477065', '09179300202', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:21:30', '', '2016-07-26 14:33:15', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(12, 'CUS-2016-0081', 'P-W0012', 'PAULA', 'RAMOS', '', 'STUDENT', '', 'NOEL HOMES', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:23:32', '', '2016-07-26 14:23:32', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(13, 'CUS-2016-0081', 'P-W0013', 'JOHANSSEN RHELIEL', 'SOLETA', 'O.', '', '', '#11 STA.ANA ST., PACITA COMPLEXPH. 1B', 'Laguna', 'San Pedro', '', '09265369821', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:42:35', '', '2016-07-26 14:42:35', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(14, 'CUS-2016-0081', 'P-W0014', 'ROWENA', 'ENERIO', '', '', '', 'BLK. 7 LOT 11 RAYMOND HOMES, CALENDOLA', 'Laguna', 'San Pedro', '8680104', '09152654957', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:44:49', '', '2016-07-26 14:44:49', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(15, 'CUS-2016-0081', 'P-W0015', 'PHILIP', 'AGALOOS', '', '', '', 'PH. 3B BLK 10', 'Laguna', 'Biñan', '2754918', '09421942088', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:46:51', '', '2016-07-26 14:46:51', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(16, 'CUS-2016-0081', 'P-W0016', 'KATHREAN MAE', 'RAMOS', 'T.', '', '', 'BLK. 1 DOOR D MOISES CARMEN GUEVARRA SUBD.', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:49:08', '', '2016-07-26 14:49:08', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(17, 'CUS-2016-0081', 'P-W0017', 'MARIE FRITZIE', 'RECIO', 'T.', '', '', 'BLK. 14 LOT 44 ATHENA ST. PG ALYMANZA SUBD', 'Laguna', 'San Pedro', '8080004', '09433906070', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:52:01', '', '2016-07-26 14:52:01', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(18, 'CUS-2016-0081', 'P-W0018', 'NANCY ANN', 'ROLDAN', 'B.', '', '', '15 SILVER SQUARE ST. PACITA 2', 'Laguna', 'San Pedro', '8681058', '09189261725', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:53:35', '', '2016-07-26 14:53:35', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(19, 'CUS-2016-0081', 'P-W0019', 'REYMUND MARTIN', 'DADULA', 'S.', '', '', 'BLK.19 LOT 9 SO. FAIRWAY', 'Laguna', 'San Pedro', '', '09357434469', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 14:55:35', '', '2016-07-26 14:55:35', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(20, 'CUS-2016-0081', 'P-W0020', 'JHONILAINE VENICE', 'ABULENCIA', 'M.', '', '', 'LOT 8 SAPPHIRE ST. PACITA COMPLEX ', 'Laguna', 'San Pedro', '4785190 ', '09333882627', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:01:59', '', '2016-07-26 15:01:59', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(21, 'CUS-2016-0081', 'P-W0021', 'FRANCIS JIREH', 'ALDAVE', 'C.', '', '', 'PACITA COMPLEX ', 'Laguna', 'San Pedro', '847-9519', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:04:07', '', '2016-07-26 15:04:07', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(22, 'CUS-2016-0081', 'P-W0022', 'JERALD MIGUEL', 'ALDAVE', 'C.', '', '', '8 CARABALLO ST. 4A', 'Laguna', 'San Pedro', '847-9519', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:06:54', '', '2016-07-26 15:06:54', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(23, 'CUS-2016-0081', 'P-W0023', 'ELAIZA', 'LERPIDO', 'K.', '', '', 'BLK15 LOT10 PHASE 2 METROVILLE COMPLEX', 'Laguna', 'Biñan', '', '09228681619', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:10:23', '', '2016-07-26 15:10:23', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(24, 'CUS-2016-0081', 'P-W0024', 'SARAH JANE', 'DEPOSITARIO', 'V.', '', '', '67 JADE ST. CATAQUIZ  V ', 'Laguna', 'San Pedro', '808 97 23', '09363983769', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:14:48', '', '2016-07-26 15:14:48', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(25, 'CUS-2016-0081', 'P-W0025', 'LAETICIA JANE', 'LACERNA', '', '', '', 'PONSETIA ST. SAN JOSE VILL. ', 'Laguna', 'Santa Rosa City', '', '09399076845', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:18:42', '', '2016-07-26 15:18:42', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(26, 'CUS-2016-0081', 'P-W0026', 'MATTY', 'YENKO', '', '', '', '37 VISAYAS DRIVE MACARIA VILLAGE', 'Laguna', 'San Pedro', '', '09089086888', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:20:29', '', '2016-07-26 15:21:43', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(27, 'CUS-2016-0081', 'P-W0027', 'JAN ERNEST', 'TAN', '', '', '', '#18 PIGEON ST. PACITA 2', 'Laguna', 'San Pedro', '869-2517', '09353659926', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:25:01', '', '2016-07-26 15:25:01', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(28, 'CUS-2016-0081', 'P-W0028', 'JEMELEE', 'CARRION', 'A.', '', '', 'BRGY. MALUSAK ', 'Laguna', 'Santa Rosa City', '', '09755862829', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:26:56', '', '2016-07-26 15:26:56', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(29, 'CUS-2016-0081', 'P-W0029', 'JUNEDIL', 'RESTIFICAR', '', '', '', 'ST. RAYMOND HOMES', 'Laguna', 'San Pedro', '', '09174935300', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:28:37', '', '2016-07-26 15:28:37', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(30, 'CUS-2016-0081', 'P-W0030', 'JOSHUA', 'SANTOS', 'I.', '', '', '6 ROSEMARY ST. SOUTH GREEN HEIGHTS MUNTINLUPA CITY', '', '', '809-3588', '09161640522', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:34:34', '', '2016-07-26 15:34:34', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(31, 'CUS-2016-0081', 'P-W0031', 'PATRICIA', 'VILLACORTA', '', '', '', 'MUNTINLUPA CITY', '', '', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:36:08', '', '2016-07-26 15:36:08', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(32, 'CUS-2016-0081', 'P-W0032', 'SHERYL', 'DALMACIO', '', '', '', 'PACITA COMPLEX ', 'Laguna', 'San Pedro', '919-3925', '09054169605 / 09476814898', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:38:52', '', '2016-07-26 15:38:52', '/intellident_wapp_online_v2/webroot/upload/CUS-2016-0081/files/Koala.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 0),
(33, 'CUS-2016-0081', 'P-W0033', 'ANDREA MAE', 'QUEVADA', 'B.', '', '', 'BLK 5 LOT 1 COUNTRY HOME', 'Laguna', 'Biñan', '', '09264653389', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:41:15', '', '2016-07-26 15:41:15', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(34, 'CUS-2016-0081', 'P-W0034', 'NIVERBA', 'BONABE', '', '', '', 'PACITA', 'Laguna', 'San Pedro', '', '09164250095', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:43:15', '', '2016-07-26 15:43:15', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(35, 'CUS-2016-0081', 'P-W0035', 'NICO ', 'MARIANO', 'E.', '', '', 'PHASE 1 LOT 2 BLK 3 PACITA HOMES', 'Laguna', 'San Pedro', '', '09175916000', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:46:01', '', '2016-07-26 15:46:01', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(36, 'CUS-2016-0081', 'P-W0036', 'DAVID ALEXANDER', 'AMANTE', '', '', '', 'SAN VICENTE', 'Laguna', 'Biñan', '', '09193219565', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:49:23', '', '2016-07-26 15:49:23', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(37, 'CUS-2016-0081', 'P-W0037', 'ANALIZA', 'AMANTE', 'R.', '', '', 'SAN VICENTE', 'Laguna', 'Biñan', '', '09193219565', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:56:07', '', '2016-07-26 15:56:21', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(38, 'CUS-2016-0081', 'P-W0038', 'DAYRICH', 'MINDANAO', '', '', '', 'BLK 10 LOT 20 ROSARIO COMPLEX', 'Laguna', 'San Pedro', '', '09228762620', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 15:59:42', '', '2016-07-26 15:59:42', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(39, 'CUS-2016-0081', 'P-W0039', 'ALBIEN', 'SALVADOR', 'V.', '', '', 'BLK 11 LOT 33 ST. RAYMOND HOMES', 'Laguna', 'San Pedro', '387-8107', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:01:04', '', '2016-07-26 16:01:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(40, 'CUS-2016-0081', 'P-W0040', 'ALLIAH ANNE', ' SALVADOR', 'V.', '', '', 'BLK 11 LOT 33 ST. RAYMOND HOMES', 'Laguna', 'San Pedro', '387-8107', '09157412959', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:03:00', '', '2016-07-26 16:03:00', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(41, 'CUS-2016-0081', 'P-W0041', 'PAULINE', 'CALMA', 'T.', '', '', 'BLK 7 LOT 17 ROSEWOOD ST. SOUTHVIEW HOMES 1', 'Laguna', 'San Pedro', '868-7038', '09085319273', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:05:33', '', '2016-07-26 16:05:33', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(42, 'CUS-2016-0081', 'P-W0042', 'LOVELYN', 'MEDINA', '', '', '', 'PACITA COMPLEX', 'Laguna', 'San Pedro', '', '09178742645', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:07:03', '', '2016-07-26 16:07:03', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(43, 'CUS-2016-0081', 'P-W0043', 'MARY ROSE CLAREN', 'TOLENTINO', '', '', '', '', 'Laguna', 'San Pedro', '519-7607', '09192539999/09321883111', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:09:34', '', '2016-07-26 16:09:34', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(44, 'CUS-2016-0081', 'P-W0044', 'GRACE', 'TABERNERO', '', '', '', 'BLK 2 LOT 12 AKLAN ST. MACARIA VILL.', 'Laguna', 'Biñan', '', '09062851977', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:11:33', '', '2016-07-26 16:11:33', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(45, 'CUS-2016-0081', 'P-W0045', 'CHRISTIANA RAE', 'NAVAL', 'D.', '', '', 'BLK 4 LOT 4 CATTLEYA ST. ROSAFLOR SUBD. TAGAPO', 'Laguna', 'Santa Rosa City', '', '09752633509', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:18:31', '', '2016-07-26 16:18:31', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(46, 'CUS-2016-0081', 'P-W0046', 'CARLA MAE', 'TAMAYO', '', '', '', 'BLK 9 LOT 8 JUANA 1', 'Laguna', 'Biñan', '', '09258005127', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:20:14', '', '2016-07-26 16:20:14', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(47, 'CUS-2016-0081', 'P-W0047', 'HAZEL THEA', 'LUMANG', '', '', '', 'BLK 14 LOT 20A PHASE 2A PACITA 1', 'Laguna', 'Biñan', '', '09161477956', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:22:12', '', '2016-07-26 16:22:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(48, 'CUS-2016-0081', 'P-W0048', 'GERALDINE ANN', 'TOLENTINO', 'A.', '', '', 'BLK 5 LOT 19 TANGERINE ST. PACITA HOMES', 'Laguna', 'Biñan', '', '09058720536', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:24:14', '', '2016-07-26 16:24:14', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(49, 'CUS-2016-0081', 'P-W0049', 'MA. EZRALITE', 'LOPEZ', 'D.', '', '', 'BLK 2 LOT 7 PHASE 5 ELVINDA VILL. ', 'Laguna', 'San Pedro', '214-1318', '09263361128', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:26:12', '', '2016-07-26 16:26:24', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(50, 'CUS-2016-0081', 'P-W0050', 'SIMON', 'TOLENTINO', '', '', '', '33 MAESTRANZA ST. LAS VILLAS DE MANILA', 'Laguna', 'Biñan', '478-0292', '09184345775', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:28:17', '', '2016-07-26 16:28:17', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(51, 'CUS-2016-0081', 'P-W0051', 'EDRIK', 'PAGADUAN', '', '', '', '', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:29:39', '', '2016-07-26 16:29:39', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(52, 'CUS-2016-0081', 'P-W0052', 'CHERRY', 'CUEVO', '', '', '', '', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:30:26', '', '2016-07-26 16:30:26', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(53, 'CUS-2016-0081', 'P-W0053', 'KATHLEEN CLAIRE', 'ENERIO', 'C.', '', '', 'ST. RAYMOND HOMES CALENDOLA ', 'Laguna', 'San Pedro', '868-0104', '09153200945', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:32:18', '', '2016-07-26 16:32:18', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(54, 'CUS-2016-0081', 'P-W0054', 'AINNAH MAE', 'DIMAYUGA', 'S.', '', '', '#18 LIBORNIO ST. CHRYSANTHENUM VILL.', 'Laguna', 'San Pedro', '808-7868/778-9174', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:34:42', '', '2016-07-26 16:34:42', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(55, 'CUS-2016-0081', 'P-W0055', 'HANA', 'TANAKA', 'A.', '', '', 'BLK 25 LOT 1 WALING-WALING ST. ELVINDA VILL.', 'Laguna', 'San Pedro', '553-9370', '099984387950', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:37:11', '', '2016-07-26 16:37:11', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(56, 'CUS-2016-0081', 'P-W0056', 'ALIZA', 'MARFIL', '', '', '', 'SAN ANTONIO', 'Laguna', 'Biñan', '', '09175931396', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 16:44:07', '', '2016-07-26 16:44:07', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(57, 'CUS-2016-0081', 'P-W0057', 'KATRINA', 'AGOC', '', '', '', '', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 17:50:58', '', '2016-07-26 17:50:58', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(58, 'CUS-2016-0081', 'P-W0058', 'CRISTINE', 'AGAPITO', 'N.', 'STUDENT', '', '', 'Laguna', 'San Pedro', '', '09354772573', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 17:52:37', '', '2016-07-26 17:52:37', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(59, 'CUS-2016-0081', 'P-W0059', 'YORA', 'AGANAN', 'J.', '', '', '#7 ST. RITA ST., PACITA COMPLEX', 'Laguna', 'San Pedro', '8474879', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 17:54:50', '', '2016-07-26 17:54:50', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(60, 'CUS-2016-0081', 'P-W0060', 'FLORANTE', 'AGALOOS', '', 'OFW', '', 'PH. 3B BLK.10 PACITA ', 'Laguna', 'Biñan', '2140591', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 17:57:49', '', '2016-07-26 17:57:49', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(61, 'CUS-2016-0081', 'P-W0061', 'ERWIN', 'AGAD', '', 'GUARD', '', 'STONE CREST', '', '', '', '09302042853', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 17:59:14', '', '2016-07-26 17:59:14', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(62, 'CUS-2016-0081', 'P-W0062', 'BENEDICT', 'ADEA', '', '', '', 'BLK 18 LOT 6 SPRINGTIME COUNTRY, JUBILLATION', 'Laguna', 'Biñan', '', '09277121754', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:09:26', '', '2016-07-26 18:09:26', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(63, 'CUS-2016-0081', 'P-W0063', 'TRISHA BEATRIZ', 'ADEA', '', '', '', 'BLK 18 LOT 6 SPRINGTIME COUNTRY, JUBILLATION', 'Laguna', 'Biñan', '', '09277121754', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:11:20', '', '2016-07-26 18:11:20', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(64, 'CUS-2016-0081', 'P-W0064', 'NEIZEL', 'ADEA', '', '', '', 'BLK. 18 LOT 6 SPRINGTIME COUNTRY, JUBILLATION', 'Laguna', 'Biñan', '', '09277121754', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:13:04', '', '2016-07-26 18:13:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(65, 'CUS-2016-0081', 'P-W0065', 'LESLIE', 'ADRA', '', '', '', 'CAWACAGAN BATO', 'Camarines Sur', '', '', '09103362987', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:14:29', '', '2016-07-26 18:14:29', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(66, 'CUS-2016-0081', 'P-W0066', 'GLORIA', 'ACUÑA', '', '', '', 'PACITA COMPLEX', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:24:12', '', '2016-07-26 18:24:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(67, 'CUS-2016-0081', 'P-W0067', 'PHILIP', 'ACORDA', '', 'Security Guard', '', 'PH. 6A2 BLK. 3 LOT 9', '', '', '', '09225356614', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:26:33', '', '2016-07-26 18:26:33', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(68, 'CUS-2016-0081', 'P-W0068', 'NESTOR', 'ACEDERA', '', '', '', '17 MAHARLIKA ST. PACITA COMPLEX 1', 'Laguna', 'San Pedro', '8474927', '09479622255', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:28:15', '', '2016-07-26 18:28:15', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(69, 'CUS-2016-0081', 'P-W0069', 'IMELDA', 'ACEDERA', '', '', '', '#17 MAHARLIKA ST., PACITA COMPLEX', 'Laguna', 'San Pedro', '2474927', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:29:54', '', '2016-07-26 18:29:54', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(70, 'CUS-2016-0081', 'P-W0070', 'ACBAY', 'MAX', '', 'CONSULTANT', '', 'CARMONA, CAVITE', 'Cavite', '', '', '09174554301', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:31:22', '', '2016-07-26 18:31:22', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(71, 'CUS-2016-0081', 'P-W0071', 'ABRIL', 'ELIZABETH', '', 'FINANCIAL CONSULTANT', '', 'LANDAYAN, SAN PEDRO LAGUNA', 'Laguna', 'San Pedro', '', '09267024056', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:32:59', '', '2016-07-26 18:32:59', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(72, 'CUS-2016-0081', 'P-W0072', 'ANASTACIO JR.', 'ABREGANA ', 'L.', 'SEAMAN', '', 'ST. FRANCIS IV BIÑAN LAGUNA', 'Laguna', 'Biñan', '0498391690', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:35:16', '', '2016-07-26 18:35:16', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(73, 'CUS-2016-0081', 'P-W0073', 'BAYANI JR.', 'ALORIA', 'S.', 'SEAFARER', '', '2706 ESCARLATA ST. ELVINDA VILLAGE', 'Laguna', 'San Pedro', '5560923', '09495717330', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:37:16', '', '2016-07-26 18:37:16', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(74, 'CUS-2016-0081', 'P-W0074', 'TRISCA JOY', 'ABORDO', '', '', '', 'BLK. 36 LOT 5 MA. TERESA ST. SOUTH CITY HOMES', 'Laguna', 'Biñan', '', '09067071597', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:39:38', '', '2016-07-26 18:39:38', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(75, 'CUS-2016-0081', 'P-W0075', 'JOHN ELIJAH', 'ABON', 'L.', '', '', 'B43 B59 SOUTHVILLE 3A SAN ANTONIO , SAN PEDRO LAGUNA', 'Laguna', 'San Pedro', '', '09064635417', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:41:56', '', '2016-07-26 18:41:56', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(76, 'CUS-2016-0081', 'P-W0076', 'JUNMAR', 'ABOLOC', '', '', '', 'CEZINA SUBD. PH. 4 BLK. 29 LOT 7', '', '', '', '09101433725', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:43:18', '', '2016-07-26 18:43:18', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(77, 'CUS-2016-0081', 'P-W0077', 'RODOLFO ARIEL', 'ABITRIA', 'A.', '', '', 'BLK. 3 LOT 5 CATTLEYA ST. , MACARIA ', '', '', '', '09496678194', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:45:22', '', '2016-07-26 18:45:22', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(78, 'CUS-2016-0081', 'P-W0078', 'MIKE', 'ABESA', '', '', '', '25 LILY ST. SAN ANTONIO VALLEY, LAS PIÑAS', '', '', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:46:42', '', '2016-07-26 18:46:42', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(79, 'CUS-2016-0081', 'P-W0079', 'PERCENCIO', 'ABCEDE', '', '', '', '', '', '', '', '09212827434', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:48:08', '', '2016-07-26 18:48:08', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(80, 'CUS-2016-0081', 'P-W0080', 'ILIGANIE', 'ANDAYA', 'VS', 'Nurse', '', 'BLK. 1 LOT 30 ANTIQUEST. NOEL HOMES', 'Laguna', 'Biñan', '2751855', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:50:27', '', '2016-07-26 18:50:27', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(81, 'CUS-2016-0081', 'P-W0081', 'MARIDEL', 'ABASOLO', '', 'HOUSEWIFE', '', 'BLK. 5 LOT 14 S3 MARINDUQUE ST. MACARIA', 'Laguna', 'San Pedro', '', '09205936891', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:52:36', '', '2016-07-26 18:52:36', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(82, 'CUS-2016-0081', 'P-W0082', 'MARIA HAZEL', 'ABAYAN', 'A.', '', '', 'BLK. 12 LOT 32 JUANA 3A ', 'Laguna', 'Biñan', '', '09175104293', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:54:08', '', '2016-07-26 18:54:08', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(83, 'CUS-2016-0081', 'P-W0083', 'NORMITA', 'ABAT', '', '', 'RUSTAN COMM. CORP AYALA CENTER', 'BLK. 10 LOT 12 BUKIDNON ST. MACARIA', 'Laguna', 'San Pedro', '8133738', '09178520735', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:56:39', '', '2016-07-26 18:56:39', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(84, 'CUS-2016-0081', 'P-W0084', 'JOSEPHINE', 'ABANILLA', '', '', '', '13TH 3RD ST. PACITA COMPLEX 1', 'Laguna', 'San Pedro', '8479605', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:58:12', '', '2016-07-26 18:58:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(85, 'CUS-2016-0081', 'P-W0085', 'NELDA', 'ABANGAN', 'S.', '', '', 'BLK 15 LOT 11 FERN ST. EVERGREEN COUNTRY', '', '', '', '09055890849', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 18:59:53', '', '2016-07-26 18:59:53', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(86, 'CUS-2016-0081', 'P-W0086', 'TESS', 'ANDA', 'B.', '', '', '428 AMARILLO ST. SIBULO SUBD. ', 'Laguna', 'San Pedro', '8697898', '09175835853', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:01:30', '', '2016-07-26 19:01:30', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(87, 'CUS-2016-0081', 'P-W0087', 'RENIEL', 'ABANTE', '', 'IT ADMIN', '', 'BLK. 22 LOT 34 PHASE 1 PACITA 2', 'Laguna', 'San Pedro', '', '09326075860', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:03:27', '', '2016-07-26 19:03:27', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(88, 'CUS-2016-0081', 'P-W0088', 'CHERRY', 'ABANTE', '', '', '', 'WOODSIDE VILLAGE, CANLALAY', 'Laguna', 'Biñan', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:04:26', '', '2016-07-26 19:04:26', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(89, 'CUS-2016-0081', 'P-W0089', 'ALDRIN JOHN', 'ABANTE', '', '', '', 'WOODSIDE VILLAGE,  CANLALAY', 'Laguna', 'Biñan', '', '09175519543', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:05:52', '', '2016-07-26 19:05:52', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(90, 'CUS-2016-0081', 'P-W0090', 'MELITA', 'ABAD', 'B.', '', '', 'PH. 7A BLK. 2 LOT 4 PACITA COMPLEX 1', 'Laguna', 'San Pedro', '8479822', '09213582720', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:07:30', '', '2016-07-26 19:07:30', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(91, 'CUS-2016-0081', 'P-W0091', 'SHERYL', 'ABALA', 'B.', 'HOUSEWIFE', '', 'CANLALAY, BINAN LAGUNA', 'Laguna', 'Biñan', '', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:08:39', '', '2016-07-26 19:08:39', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(92, 'CUS-2016-0081', 'P-W0092', 'JOJIE', 'ABAD', '', '', '', 'CASILE BINAN LAGUNA', '', '', '', '09364948376', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:09:39', '', '2016-07-26 19:09:39', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(93, 'CUS-2016-0081', 'P-W0093', 'DIANNA JANE', 'ALEJO', 'B.', '', '', '2154 BELIZARIO COMPLEX, SAN JOSE BINAN LAGUNA', '', '', '', '09061584011', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:11:43', '', '2016-07-26 19:11:43', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(94, 'CUS-2016-0081', 'P-W0094', 'DARMO', 'ALEJO', '', 'VENDOR', '', 'BINAN LAGUNA', '', '', '', '09367373771', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:13:00', '', '2016-07-26 19:13:00', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(95, 'CUS-2016-0081', 'P-W0095', 'LUIS', 'ALDEGUER', '', '', '', '', '', '', '', '09974251272', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:14:10', '', '2016-07-26 19:14:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(96, 'CUS-2016-0081', 'P-W0096', 'ARLENE', 'ALDAVE', '', 'HOUSEWIFE', '', 'PACITA COMPLEX', 'Laguna', 'San Pedro', '8479519', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:15:40', '', '2016-07-26 19:15:40', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(97, 'CUS-2016-0081', 'P-W0097', 'ANGELICA', 'ALDAVE', '', '', '', 'PACITA COMPLEX 1', 'Laguna', 'San Pedro', '8479519', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:16:47', '', '2016-07-26 19:16:47', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(98, 'CUS-2016-0081', 'P-W0098', 'DONN LORENZ', 'ALCAYDE', '', '', '', 'BLK. 11 LOT 13 JUANA 6 BINAN LAGUNA', 'Laguna', 'Biñan', '', '09266766281', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:19:52', '', '2016-07-26 19:19:52', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(99, 'CUS-2016-0081', 'P-W0099', 'LEONISA', 'ALCALDE', 'S.', 'HOUSEWIFE', '', '#16 MAGSAYSAY ST. PACITA COMPLEX 1', 'Laguna', 'San Pedro', '8692288', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:22:08', '', '2016-07-26 19:22:08', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(100, 'CUS-2016-0081', 'P-W0100', 'MHEA', 'ALCALA', 'S. ', 'DINING SUP', 'MAX RESTAURANT PACITA COMPLEX', 'BLK 4 LOT 9 AGUINALDO ST., REAVILLE ', 'Laguna', 'San Pedro', '', '09477610784', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:24:56', '', '2016-07-26 19:24:56', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(101, 'CUS-2016-0081', 'P-W0101', 'EDMOND', 'ALBURO', '', '', '', 'BRGY., LANDAYAN ', 'Laguna', 'San Pedro', '', '09365196918', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:27:34', '', '2016-07-26 19:27:34', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(102, 'CUS-2016-0081', 'P-W0102', 'JANVIER', 'ALBAY', '', '', '', '10 WALING WALING ST., PH.6A PACITA COMPLEX 1', 'Laguna', 'San Pedro', '', '09205215382', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:29:23', '', '2016-07-26 19:29:23', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(103, 'CUS-2016-0081', 'P-W0103', 'ED VINCENT III', 'ALBANO', '', 'LAWYER', '', 'NO. 19 MURALLA ST., LAS VILLAS DE MANILA', '', '', '', '09178134199', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:31:30', '', '2016-07-26 19:31:30', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(104, 'CUS-2016-0081', 'P-W0104', 'ALYSSA MILES', 'ALAVA', '', '', '', '#2 OPAL ST. PACITA COMPLEX 1 ', 'Laguna', 'San Pedro', '', '09228729070', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:34:31', '', '2016-07-26 19:34:31', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(105, 'CUS-2016-0081', 'P-W0105', 'AILEEN', 'ALAVA', 'E.', 'TEACHER', 'PACITA COMPLEX NATIONAL HIGH SCHOOL', 'BLK. 27 LOT 20 ROSARIO COMPLEX', 'Laguna', 'San Pedro', '5192474', '09052036751', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:37:35', '', '2016-07-26 19:37:35', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(106, 'CUS-2016-0081', 'P-W0106', 'RENE', 'ALARCON', '', '', '', '#15 VALLEY ST., CHRYSANTHEMUM ', '', '', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:38:36', '', '2016-07-26 19:38:36', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(107, 'CUS-2016-0081', 'P-W0107', 'ALARCIO', 'ROCHELLE', '', '', '', 'MACARIA VILLAGE', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:39:36', '', '2016-07-26 19:39:36', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(108, 'CUS-2016-0081', 'P-W0108', 'LORETA', 'ALARCIO', '', '', '', 'BLK. 2 LOT 48 ROSAL ST., ADELINA II', '', '', '8081732', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:41:01', '', '2016-07-26 19:41:01', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(109, 'CUS-2016-0081', 'P-W0109', 'KATLENE', 'ALARCIO', '', '', '', 'BLK. 2 LOT 48 ROSAL ST., ADELINA 2A', 'Laguna', 'San Pedro', '8081732', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:42:34', '', '2016-07-26 19:42:34', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(110, 'CUS-2016-0081', 'P-W0110', 'GABRIEL', 'ALARCIO', '', '', '', 'ADELINA 2A', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:43:28', '', '2016-07-26 19:43:28', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(111, 'CUS-2016-0081', 'P-W0111', 'CELINIA', 'ALARCIO', '', '', '', 'ADELINA 2A', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:44:30', '', '2016-07-26 19:44:30', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(112, 'CUS-2016-0081', 'P-W0112', 'AMANCIO', 'ALARCIO', '', 'DRIVER', '', '48 ROSAL ST. ADELINA 2A', 'Laguna', 'San Pedro', '8081732', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:46:06', '', '2016-07-26 19:46:06', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(113, 'CUS-2016-0081', 'P-W0113', 'BENJAMIN', 'ALAN', '', 'LAWYER', '', 'BLK 1 LOT 8 ROSARIO COMPLEX', 'Laguna', 'San Pedro', '', '09215453364', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:48:42', '', '2016-07-26 19:48:42', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(114, 'CUS-2016-0081', 'P-W0114', 'JOCELYN', 'ALDAMA', 'M.', '', '', 'LANDAYAN, SAN PEDRO LAGUNA', '', '', '', '09983514193', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:49:57', '', '2016-07-26 19:49:57', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(115, 'CUS-2016-0081', 'P-W0115', 'ENRICO', 'ALBULARIO', '', '', '', 'STA. ROSA LAGUNA', 'Laguna', 'Santa Rosa City', '', '09271521991', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:54:38', '', '2016-07-26 19:54:38', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(116, 'CUS-2016-0081', 'P-W0116', 'RENEL', 'ALBINO', 'B.', 'SEAMAN', '', 'PACITA 2C', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:56:41', '', '2016-07-26 19:56:41', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(117, 'CUS-2016-0081', 'P-W0117', 'JOE', 'AGUSTIN', '', 'RETIRED', '', 'EMPRESS ST. BLK 2A LOT 2 LMT2 ', 'Laguna', 'San Pedro', '2140778', '09064245000', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 19:58:29', '', '2016-07-26 19:58:29', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(118, 'CUS-2016-0081', 'P-W0118', 'REENA ANDREA', 'AGUSTIN', 'C.', 'HOUSEWIFE', '', '#51 G. SILANG ST. PACITA', 'Laguna', 'San Pedro', '', '09167127754', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:01:11', '', '2016-07-26 20:01:11', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(119, 'CUS-2016-0081', 'P-W0119', 'MAXINE ALEXANDRIA', 'AGUIMATANG', 'C.', '', '', '#8 CATTLEYA ST. MACARIA VILLAGE PH 2C, CANLALAY', 'Laguna', 'Biñan', '9524865', '09158322106', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:04:28', '', '2016-07-26 20:04:28', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(120, 'CUS-2016-0081', 'P-W0120', 'IRIS JADE', 'AGUIMATANG', '', '', '', '#8 CATTLEYA ST., MACARIA VILLAGE PH 2C CANLALAY', 'Laguna', 'Biñan', '9524865', '09175299076', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:06:12', '', '2016-07-26 20:06:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(121, 'CUS-2016-0081', 'P-W0121', 'PRUDENCIO', 'AGUILAR', '', 'RETIRED', '', '51 J. LUNA ST. PACITA 1', 'Laguna', 'San Pedro', '4780151', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:08:53', '', '2016-07-26 20:08:53', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(122, 'CUS-2016-0081', 'P-W0122', 'CARLOS', 'AGUILAR', '', 'SEAFARER', '', '6-7 LIVINGSTONE TOWN HOMES , PUERTO PRINSESA', 'Palawan', '', '0484341498', '09497808848', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:12:06', '', '2016-07-26 20:12:06', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(123, 'CUS-2016-0081', 'P-W0123', 'JUDAY', 'AGUADO', '', '', '', 'BLK. 4 LOT 32 VILLA CASTILLO PACITA 2', '', '', '8688314', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:13:34', '', '2016-07-26 20:13:34', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(124, 'CUS-2016-0081', 'P-W0124', 'EMMALIZA', 'AGUADA', '', '', '', 'FLORINDA COMPOUND, BRGY., TUBIGAN ', 'Laguna', 'Biñan', '', '09068614844', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:15:38', '', '2016-07-26 20:15:38', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(125, 'CUS-2016-0081', 'P-W0125', 'BONG', 'AGUADO', '', '', '', 'PH 1C PACITA COMPLEX', '', '', '', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:16:44', '', '2016-07-26 20:16:44', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(126, 'CUS-2016-0081', 'P-W0126', 'RICARDO ALAN', 'AYSON', 'P', 'STUDENT', '', 'B5 L4 PACITA HOMES SAN FRANCISCO', 'Laguna', 'Biñan', '875-7291', '09153584363', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:19:42', '', '2016-07-26 20:19:42', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(127, 'CUS-2016-0081', 'P-W0127', 'MERCY', 'AYNERA', '', 'HOUSEWIFE', '', 'SOUTHVILLE 3A BK44 LOT 49', '', '', '', '09468131137', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:21:38', '', '2016-07-26 20:21:38', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(128, 'CUS-2016-0081', 'P-W0128', 'PAMELA', 'AYATON', '', '', '', '16 E VALLEJO ST. CHRYSANTHEMUM VILL.', 'Laguna', 'San Pedro', '', '09062866772', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:26:13', '', '2016-07-26 20:26:13', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(129, 'CUS-2016-0081', 'P-W0129', 'AGNES', 'AYATON', '', 'Nurse', '', '16 E. VALLEJO ST. CHRYSANTHEMUNM VILL.', 'Laguna', 'San Pedro', '893-4538', '09062866772', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:28:36', '', '2016-07-26 20:28:36', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(130, 'CUS-2016-0081', 'P-W0130', 'CHRISTY', 'AUSTRIA', '', '', '', 'LANDAYAN', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:29:53', '', '2016-07-26 20:29:53', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(131, 'CUS-2016-0081', 'P-W0131', 'JOHN MARTIN', 'AUSTRIA', '', '', '', '#7 IST STREET PACITA - 1', 'Laguna', 'San Pedro', '', '09983013151', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:31:24', '', '2016-07-26 20:31:24', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(132, 'CUS-2016-0081', 'P-W0132', 'ALEXANDRA NICOLE', 'AUSTRIA', '', '', '', 'LANDAYAN', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:32:24', '', '2016-07-26 20:32:24', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(133, 'CUS-2016-0081', 'P-W0133', 'CHERYLL', 'AUSTERO', '', '', '', '4TH STREET MACARIA VILLAGE', 'Laguna', 'San Pedro', '808-0494', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:33:44', '', '2016-07-26 20:33:44', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(134, 'CUS-2016-0081', 'P-W0134', 'RENATO', 'ATOLE', '', '', '', 'PLATERO', 'Laguna', 'Biñan', '', '09283387340', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:34:51', '', '2016-07-26 20:34:51', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(135, 'CUS-2016-0081', 'P-W0135', 'EDUARDO', 'ATIENZA', 'M', '', '', 'ROSARIO COMPLEX', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:35:54', '', '2016-07-26 20:35:54', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(136, 'CUS-2016-0081', 'P-W0136', 'FRANCIS', 'ATIENZA', '', '', '', 'BLK.13A L4 ALBANIA ST.', '', '', '938-4892', '09084033148', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:37:41', '', '2016-07-26 20:37:41', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(137, 'CUS-2016-0081', 'P-W0137', 'PAULA', 'ATIENZA', '', '', '', 'BLK.13 L4 ALBANIA ST.', '', '', '938-4892', '09334854405', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:39:05', '', '2016-07-26 20:39:05', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(138, 'CUS-2016-0081', 'P-W0138', 'ANA MARIE ', 'ATIENZA', '', 'CSR', '', 'BLK.4 LOT 7 CONSOLE VILLAGE', 'Laguna', 'San Pedro', '', '09212385793', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:41:14', '', '2016-07-26 20:41:14', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(139, 'CUS-2016-0081', 'P-W0139', 'JOY', 'ASURTO', '', '', '', 'BLK. 39 LT18 SOUTHFAIRWAYS HOMES LANDAYAN', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:42:35', '', '2016-07-26 20:42:35', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(140, 'CUS-2016-0081', 'P-W0140', ' KIM', 'ASANION', '', '', '', '29 MAREMIL SUBD. LANDAYAN', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:44:15', '', '2016-07-26 20:44:15', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(141, 'CUS-2016-0081', 'P-W0141', 'JESSA', 'ARNOZA', '', '', '', 'SAN ANTONIO', 'LAGUNA', '', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:45:00', '', '2016-07-26 20:45:00', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1);
INSERT INTO `patient` (`id`, `customer_id`, `patient_code`, `firstname`, `lastname`, `middlename`, `occupation`, `company`, `address`, `province`, `city`, `telephone_number`, `mobile_number`, `birthdate`, `age`, `gender`, `civil_status`, `health_card_type`, `health_card_number`, `is_pregnant`, `is_treatment`, `diagnosis`, `treatment`, `prescriptions`, `alergies`, `diseases`, `referred_by`, `created_by`, `date_created`, `remarks`, `date_updated`, `image`, `medical_date`, `is_in_good_health`, `last_checkup`, `has_general_health_changes`, `is_taking_medications`, `is_smoker`, `is_nursing`, `is_taking_pills`, `visit_reason`, `former_dentist`, `dentist_address`, `last_dental_care`, `last_dental_xray`, `other_dental_history`, `often_floss`, `often_brush`, `is_archive`, `is_sync`) VALUES
(142, 'CUS-2016-0081', 'P-W0142', 'RHEBSON', 'ARLEGUI', '', '', '', 'B27 L44 GOLDEN CITY', 'Laguna', 'Biñan', '', '09287697048', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:47:18', '', '2016-07-26 20:47:18', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(143, 'CUS-2016-0081', 'P-W0143', 'HAZEL', 'ARSENO', '', '', '', 'BINAN', 'Laguna', 'Biñan', '', '09998474944', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:50:45', '', '2016-07-26 20:50:45', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(144, 'CUS-2016-0081', 'P-W0144', 'FLORDEIZA', 'ASANION', 'A', '', '', '#29 MAREMIL SUBD. LANDAYAN', 'Laguna', 'San Pedro', '', '09984207602', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:52:39', '', '2016-07-26 20:52:39', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(145, 'CUS-2016-0081', 'P-W0145', 'MICHAEL', 'ARIA', 'B', '', '', 'PH7  BLK7 LOT24 PACITA COMPLEX 1', 'Laguna', 'San Pedro', '808-4287', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:54:37', '', '2016-07-26 20:54:37', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(146, 'CUS-2016-0081', 'P-W0146', 'RONALD', 'ARGUILLES', '', '', '', 'STA ROSA', 'Laguna', 'Santa Rosa City', '', '09393730364', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:56:54', '', '2016-07-26 20:56:54', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(147, 'CUS-2016-0081', 'P-W0147', 'CHENEE  MARIE', 'ARENAS', '', '', '', 'SAN PEDRO', 'Laguna', 'San Pedro', '', '09163780992', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 20:58:47', '', '2016-07-26 20:58:47', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(148, 'CUS-2016-0081', 'P-W0148', 'TISHA', 'ARCILLA', '', '', '', '2A MACARIA ITALY ST.', 'Laguna', 'Biñan', '', '09432781190', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:00:10', '', '2016-07-26 21:00:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(149, 'CUS-2016-0081', 'P-W0149', 'LILIA', 'ARCIAGA', '', '', '', '308 MANABAT ST. SAN ANTONIO', 'Laguna', 'Biñan', '', '09156336406', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:04:04', '', '2016-07-26 21:04:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(150, 'CUS-2016-0081', 'P-W0150', 'PENNY LOU', 'ARCEGA', '', '', '', 'BLK10 LOT10 SAPIRE SAINT FAIRVIEW IV', '', '', '', '09355756480', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:05:46', '', '2016-07-26 21:05:46', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(151, 'CUS-2016-0081', 'P-W0151', 'LEONCIA', 'ARANO', '', '', '', '25 REYES ST. CHRYSANTHEMUM VILL.', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Widowed', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:07:21', '', '2016-07-26 21:07:21', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(152, 'CUS-2016-0081', 'P-W0152', 'MILAGROS', 'ARANDA', '', '', '', '', '', '', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:07:58', '', '2016-07-26 21:07:58', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(153, 'CUS-2016-0081', 'P-W0153', 'MELO', 'ARAGONES', '', '', '', '33 4TH ST. PACITA', 'Laguna', 'San Pedro', '803-3610', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:09:06', '', '2016-07-26 21:09:06', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(154, 'CUS-2016-0081', 'P-W0154', 'PRECY', 'ARCANSALIN', '', '', '', 'ELVINDA VILL. ', 'Laguna', 'San Pedro', '847-2895', '09258120708', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:11:04', '', '2016-07-26 21:11:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(155, 'CUS-2016-0081', 'P-W0155', 'IVANB18 LT.59', 'ARAMBALA', 'T', '', '', 'B18 LT.59 JUANA 3B', 'Laguna', 'Biñan', '', '09075296021', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:12:40', '', '2016-07-26 21:12:40', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(156, 'CUS-2016-0081', 'P-W0156', 'MARY GRACE', 'ARAGON', '', '', '', 'RAIBOW AVE. LAVANDER ST.', '', '', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:14:27', '', '2016-07-26 21:14:27', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(157, 'CUS-2016-0081', 'P-W0157', 'ANGELITO', 'ARADILLAS', '', '', '', 'B5 LOT1 MELBOURNE ST. OLYMPIA', 'Laguna', 'San Pedro', '', '09051867724', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:16:40', '', '2016-07-26 21:16:40', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(158, 'CUS-2016-0081', 'P-W0158', 'PERCIVAL', 'AQUINO', 'R', '', '', '', '', '', '', '09158911481', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:17:31', '', '2016-07-26 21:17:31', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(159, 'CUS-2016-0081', 'P-W0159', 'KEISHA CHLOE', 'AQUINO', '', '', '', 'B32 LT 12 METROVILLE', 'Laguna', 'Biñan', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:18:43', '', '2016-07-26 21:18:43', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(160, 'CUS-2016-0081', 'P-W0160', 'JOHN MARC', 'AQUINO', '', '', '', 'B32 L17 METROVILLE', 'Laguna', 'Biñan', '', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:19:43', '', '2016-07-26 21:19:43', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(161, 'CUS-2016-0081', 'P-W0161', 'ELLEN JOY', 'AQUINO', '', '', '', 'IRENEVILLE', 'Laguna', 'Biñan', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:20:30', '', '2016-07-26 21:20:30', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(162, 'CUS-2016-0081', 'P-W0162', 'DONALYN', 'AQUINO', '', '', '', '', '', '', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:20:59', '', '2016-07-26 21:20:59', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(163, 'CUS-2016-0081', 'P-W0163', 'CRISELDA', 'AQUINO', 'L', '', '', 'B32 L17 METROVILLE COMPLEX', 'Laguna', 'Biñan', '', '09059081709', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:22:10', '', '2016-07-26 21:22:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(164, 'CUS-2016-0081', 'P-W0164', 'NORA', 'APOLONA', '', 'Sales Representative', 'BADLIS', 'PACITA', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:23:12', '', '2016-07-26 21:23:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(165, 'CUS-2016-0081', 'P-W0165', 'LUCILLE', 'APARECIO', '', '', '', 'SITIO MALIGAYA 2 PACITA', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:24:07', '', '2016-07-26 21:24:07', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(166, 'CUS-2016-0081', 'P-W0166', 'JONATHAN', 'ANTENOR', 'D', '', '', '#33 CHICODEE ST. PACITA COMPLEX', 'Laguna', 'San Pedro', '', '09202052407', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:25:19', '', '2016-07-26 21:25:19', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(167, 'CUS-2016-0081', 'P-W0167', 'RHEA MAE', 'ANINON', '', '', '', 'KM31 NATINAL HIWAY BARANGAY NUEVA', 'Laguna', 'San Pedro', '', '09473253443', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:27:10', '', '2016-07-26 21:27:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(168, 'CUS-2016-0081', 'P-W0168', 'JOSE ALFREDO', 'ANIMAS', 'L', 'SEAFARER', '', 'STA CCRUZ ST.AREVALO', 'Iloilo', 'Iloilo City', '', '09295232345', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:28:52', '', '2016-07-26 21:28:52', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(169, 'CUS-2016-0081', 'P-W0169', ' AUREA', 'ANGUSTIA', '', '', '', 'CONSOLE 1', '', '', '', '09272605342', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:30:04', '', '2016-07-26 21:30:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(170, 'CUS-2016-0081', 'P-W0170', 'RODEL', 'ANGUSTIA', 'C ', 'BUSINESS', '', 'BLK1 LOT5 GUEVARA SUBD.', 'Laguna', 'San Pedro', '', '09206728603', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:32:50', '', '2016-07-26 21:32:50', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(171, 'CUS-2016-0081', 'P-W0171', 'BONIFACIA', 'ANGUSTIA', '', 'HOUSEWIFE', '', 'BLK1 LOT5 GUEVARA ST.', 'Laguna', 'San Pedro', '847-7962', '09289917101', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:34:44', '', '2016-07-26 21:34:44', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(172, 'CUS-2016-0081', 'P-W0172', 'ROBERT CABURNAY', 'ANGUSTIA', '', '', '', 'B8 LT14 UNIT C GUEVARA SUBD. ', 'Laguna', 'San Pedro', '808-0109', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:36:19', '', '2016-07-26 21:36:19', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(173, 'CUS-2016-0081', 'P-W0173', 'ZENAIDA', 'ANGELES', 'E', '', '', 'BLK1 LT1 PH1 OLIVAREZ HOMES', 'Laguna', 'San Pedro', '847-0802', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:40:59', '', '2016-07-26 21:40:59', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(174, 'CUS-2016-0081', 'P-W0174', 'RODEL', 'ANDRES', '', '', '', 'SITIO MALIGAYA 2', 'Laguna', 'San Pedro', '', '09332092577', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:45:25', '', '2016-07-26 21:45:25', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(175, 'CUS-2016-0081', 'P-W0175', 'HELEN', 'ANDRADA', '', '', '', '#18 DAISY ST. P6A PACITA', 'Laguna', 'San Pedro', '808-0373', '09476919668', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:47:22', '', '2016-07-26 21:47:22', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(176, 'CUS-2016-0081', 'P-W0176', 'MICHELLE', 'ANDOHOYAN', '', 'CREW', '', 'CHRYSANTHEMUM PACITA', 'Laguna', 'San Pedro', '', '09106346415', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:49:14', '', '2016-07-26 21:49:14', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(177, 'CUS-2016-0081', 'P-W0177', 'MARK JOHN', 'ANINO', '', '', '', '#14 CRYSANTHEMUM JUANA 1', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:53:02', '', '2016-07-26 21:53:02', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(178, 'CUS-2016-0081', 'P-W0178', 'JEROME', 'ANDOHOYAN', '', '', '', 'CHYSANTHEMUM VIL. PACITA', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 21:55:26', '', '2016-07-26 21:58:19', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(179, 'CUS-2016-0081', 'P-W0179', 'ANGIE ', 'ANDOHOYAN', '', '', '', '#11 VALLEJO ST. CHRYSANTHEMUM VILL.', 'Laguna', 'San Pedro', '', '09323606955', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:00:22', '', '2016-07-26 22:00:22', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(180, 'CUS-2016-0081', 'P-W0180', 'REECAH ', 'ANDAYA', 'G', 'TEACHER', '', 'B5 L19 LOTUS ST. ST. JOSEPH VILL. 9 LANGGAM', 'Laguna', 'San Pedro', '403-3924', '09236047970', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:03:03', '', '2016-07-26 22:03:03', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(181, 'CUS-2016-0081', 'P-W0181', 'KRISTINA NOELLE', 'ANDAYA', 'S', 'LORITEK', '', 'B1 LOT30 ANTIQUE ST.NOEL HOMES BL', '', '', '3598454', '09062898923', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:05:19', '', '2016-07-26 22:05:19', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(182, 'CUS-2016-0081', 'P-W0182', 'RYAN ', 'ANDAYA', '', 'IT PROF.', '', 'B1 L30 ANTIQUE STNOEL HOMES', '', '', '3598454', '09276798947', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:07:04', '', '2016-07-26 22:07:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(183, 'CUS-2016-0081', 'P-W0183', 'ILIGANIE', 'ANDAYA', 'S.', 'Nurse', '', 'NOEL HOMES', 'Laguna', 'Biñan', '022751855', '09215919618', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:09:12', '', '2016-07-26 22:09:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(184, 'CUS-2016-0081', 'P-W0184', 'JAMES NYAL', 'AMPO', 'L.', 'SEAMAN', '', 'B4 L19 BOXING ST., PH 4 VILLA OLYMPIA', '', '', '8280238', '09166472860', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:11:04', '', '2016-07-26 22:11:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(185, 'CUS-2016-0081', 'P-W0185', 'MARIA YOLANDA', 'AMPO', '', '', '', 'B4 L19 BOXING ST., PH 4 VILLA OLYMPIA', '', '', '8280238/9940921', '09208969615', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:12:49', '', '2016-07-26 22:12:49', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(186, 'CUS-2016-0081', 'P-W0186', 'NESTOR', 'AMPO', 'C.', '', '', 'B4 L19 BOXING ST., PH 4 VILLA OLYMPIA', '', '', '8280238/9940921', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:13:40', '', '2016-07-26 22:13:40', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(187, 'CUS-2016-0081', 'P-W0187', 'LORNA', 'AMPER', '', 'HOUSEWIFE', '', 'OLYMPIA', '', '', '', '09489621440', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:15:10', '', '2016-07-26 22:15:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(188, 'CUS-2016-0081', 'P-W0188', 'CHRISTY', 'AMORA', '', '', '', 'JASMIN ST., ELVINDA VILLAGE ', 'Laguna', 'San Pedro', '4781684', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:16:26', '', '2016-07-26 22:16:26', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(189, 'CUS-2016-0081', 'P-W0189', 'GIL', 'ALMENDRAL', 'R.', 'ENGINEER', '', '39 A. MABINI ST.,', 'Laguna', 'Biñan', '0494112876', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:18:07', '', '2016-07-26 22:18:07', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(190, 'CUS-2016-0081', 'P-W0190', 'ANNE LAENALYNNE', 'AMBAYEC', '', 'NURSE', '', '103 J. HERRERA ST., SAN VICENTE', 'Laguna', 'San Pedro', '', '09322614529', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:19:51', '', '2016-07-26 22:19:51', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(191, 'CUS-2016-0081', 'P-W0191', 'FELICIANO "ALEX'''' ', 'AMANTE', '', 'ELECTRIC ENGINEER', '', 'SAN VICENTE', 'Laguna', 'Biñan', '', '09193219565', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:21:39', '', '2016-07-26 22:21:39', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(192, 'CUS-2016-0081', 'P-W0192', 'ROSE', 'AMAN', '', 'SELF EMPLOYED', '', 'B8 L6 FALCON ST., CARMELLA WOODHILLS', 'Laguna', 'San Pedro', '', '09175427673', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:23:18', '', '2016-07-26 22:23:18', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(193, 'CUS-2016-0081', 'P-W0193', 'BELEN', 'ALVIAN', 'D.', '', '', 'B1 L12 WOODSIDE VILLAGE, CANLALAY', 'Laguna', 'Biñan', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:24:30', '', '2016-07-26 22:24:30', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(194, 'CUS-2016-0081', 'P-W0194', 'SOLON', 'ALVAREZ', 'M.', 'CIVIL ENGINEER', '', '27 CHICKADEE ST., PACITA 2 PH. 1', 'Laguna', 'San Pedro', '', '09228555855', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:26:03', '', '2016-07-26 22:26:03', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(195, 'CUS-2016-0081', 'P-W0195', 'PAULO', 'ALVAREZ', 'V.', '', '', '27 CHICKADEE ST., PACITA 2 PH. 1', 'Laguna', 'San Pedro', '', '09328879299', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:27:24', '', '2016-07-26 22:27:24', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(196, 'CUS-2016-0081', 'P-W0196', 'GERMAN', 'ALVAREZ', 'M.', '', '', 'DELA ROSA TERMINAL', '', '', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:28:10', '', '2016-07-26 22:28:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(197, 'CUS-2016-0081', 'P-W0197', 'RECK KENT', 'ALVAREZ', '', 'BARTENDER', 'CITY OF DREAMS- ASEANA COR. MACAPAGAL P''QUE', '9 VISAYAS DRIVE MACARIA VILLAGE', 'Laguna', 'Biñan', '6912882', '09174969857', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:31:10', '', '2016-07-26 22:31:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(198, 'CUS-2016-0081', 'P-W0198', 'FRANCIS', 'ALVARADO', '', '', '', 'LANDAYAN', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:32:04', '', '2016-07-26 22:32:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(199, 'CUS-2016-0081', 'P-W0199', 'EMILY', 'ALTAVANO', '', '', '', 'B26 L27 SOUTH FAIRWAY, LANDAYAN', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:33:32', '', '2016-07-26 22:33:32', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(200, 'CUS-2016-0081', 'P-W0200', 'REGGIE', 'ALSIM', '', 'ENGINEER', '', 'B4 L6 ST. FRANCIS HOMES 3', 'Laguna', 'San Pedro', '', '09285027469', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:35:28', '', '2016-07-26 22:35:28', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(201, 'CUS-2016-0081', 'P-W0201', 'ARTHUR', 'ALPEZ', '', '', '', 'BEN TAMBONGAN', '', '', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:37:05', '', '2016-07-26 22:37:05', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(202, 'CUS-2016-0081', 'P-W0202', 'ISIDRO JR', 'ALMEYDA', '', '', '', '21 FLAMINGO ST., PACITA 2', '', '', '8475766', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:38:17', '', '2016-07-26 22:38:17', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(203, 'CUS-2016-0081', 'P-W0203', 'MARIEL', 'ALMAZAN', '', 'Nurse', '', 'SAN PEDRO LAGUNA', '', '', '', '09064518053', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:39:24', '', '2016-07-26 22:39:24', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(204, 'CUS-2016-0081', 'P-W0204', 'JAMAICA', 'ALMARIEGO', 'C.', '', '', 'SAN VICENTE', 'Laguna', 'San Pedro', '', '09224093318', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:40:28', '', '2016-07-26 22:40:28', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(205, 'CUS-2016-0081', 'P-W0205', 'JAYMAR', 'ALMARIEGO', '', 'Cook', '', '251 J. HERRERA ST. SAN VICENTE', 'Laguna', 'San Pedro', '', '09161644689', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:41:44', '', '2016-07-26 22:41:44', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(206, 'CUS-2016-0081', 'P-W0206', 'NUMERIANO JR.', 'ALMANZOR', '', '', '', '#24 MAHARLIKA ST. PACITA COMPLEX', 'Laguna', 'San Pedro', '4781831', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:42:58', '', '2016-07-26 22:42:58', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(207, 'CUS-2016-0081', 'P-W0207', 'DAISY', 'ALMANO', '', '', '', 'MALIGAYA 1-B ', 'Laguna', 'San Pedro', '', '09323818640', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:44:04', '', '2016-07-26 22:44:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(208, 'CUS-2016-0081', 'P-W0208', 'CLAIRE', 'ALLUNAR', 'D.', 'LOANS PROCESSOR', 'UPHL COMPOUND BRGY. STO.NIÑO BIÑAN LAGUNA', '#25 MALIGAYA 7 BRGY. SAN VICENTE', 'Laguna', 'San Pedro', '', '09054259901', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:46:21', '', '2016-07-26 22:46:21', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(209, 'CUS-2016-0081', 'P-W0209', 'ARCE', 'ALIPIO', 'M.', 'BPA', 'BLDG. 17 DON MARIANOLIM INDUSTRIAL COMPOUND LAS PIÑAS CITY', 'STA. ROSA CITY OF LAGUNA', '', '', '', '09996836507', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:48:56', '', '2016-07-26 22:48:56', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(210, 'CUS-2016-0081', 'P-W0210', 'MAXXINE XAVIER', 'ALIMPOOS', '', '', '', 'B32 L18 EVERGREEN COUNTRY', 'Laguna', 'Biñan', '', '09335265593', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:50:31', '', '2016-07-26 22:50:31', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(211, 'CUS-2016-0081', 'P-W0211', 'ELAINE SUZETTE', 'ALIMPOOS', '', 'Nurse', '', 'B32 L18 EVERGREEN COUNTRY', 'Laguna', 'Biñan', '', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:51:50', '', '2016-07-26 22:51:50', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(212, 'CUS-2016-0081', 'P-W0212', 'DULCISHA', 'ALFOREM', 'C.', '', '', 'MACARIA VILLAGE', 'Laguna', 'Biñan', '', '09293414220', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:53:54', '', '2016-07-26 22:53:54', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(213, 'CUS-2016-0081', 'P-W0213', 'LETICIA', 'ALFONSO', '', 'HOUSEWIFE', '', 'BLK 26 LOT 5 ', '', '', '5511439', '09288426216', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:55:45', '', '2016-07-26 22:55:45', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(214, 'CUS-2016-0081', 'P-W0214', 'DERIC', 'ALFONSO', '', '', '', '110 MOLAVE ST. ', 'Laguna', 'Santa Rosa City', '', '09771918358', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:56:51', '', '2016-07-26 22:56:51', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(215, 'CUS-2016-0081', 'P-W0215', 'LOLITA', 'ALEJO', '', '', '', 'SAN JOSE', 'Laguna', 'Biñan', '', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:57:38', '', '2016-07-26 22:57:38', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(216, 'CUS-2016-0081', 'P-W0216', 'JOHN PAOLO', 'ANDOR', 'E.', '', '', 'B5 L12 JASMINE ST., ADELINA 2A ', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 22:58:58', '', '2016-07-26 22:58:58', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(217, 'CUS-2016-0081', 'P-W0217', 'LETICIA', 'ANDOR', 'E.', 'EDUCATIONAL SUPERVISOR', '', 'B5 L12 JASMINE ST., ADELINA 2A ', 'Laguna', 'San Pedro', '4869472', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 23:00:35', '', '2016-07-26 23:00:35', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(218, 'CUS-2016-0081', 'P-W0218', 'OSCAR', 'ANDOR', '', 'MECHANIC CHIEF', '', 'B5 L12 JASMINE ST., ADELINA 2A ', 'Laguna', 'San Pedro', '8479578', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-26 23:01:55', '', '2016-07-26 23:01:55', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(219, 'CUS-2016-0081', 'P-W0219', 'FRANCISCO', 'DERIT ', '', 'TEACHER', '', 'LOT 21 BLK 6 PH 1B PACITA COMPLEX', 'Laguna', 'San Pedro', '8083054', '', '1970-01-01', 0, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:08:43', '', '2016-07-27 10:08:43', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(220, 'CUS-2016-0081', 'P-W0220', 'ROSARIO', 'DERIT', 'C.', 'HOUSEWIFE', '', 'LOT 21 BLK 6 PH 1B PACITA COMPLEX', 'Laguna', 'San Pedro', '8083054', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:31:27', '', '2016-07-27 10:31:27', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(221, 'CUS-2016-0081', 'P-W0221', 'MORIE', 'GARCIA', '', '', '', '# 29 2ND ST. PACITA COMPLEX 1', 'Laguna', 'San Pedro', '5191762', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:33:50', '', '2016-07-27 10:33:50', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(222, 'CUS-2016-0081', 'P-W0222', 'LARRY', 'ROSINI', 'G.', '', '', '#18 MLQ ST. PACITA COMPLEX 1', 'Laguna', 'San Pedro', '', '09298954437', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:35:47', '', '2016-07-27 10:35:47', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(223, 'CUS-2016-0081', 'P-W0223', 'JOHN GEOFFREY', 'ROSINI', '', '', '', '#18 M.L. QUEZON ST. PACITA COMPLEX ', 'Laguna', 'San Pedro', '8686876', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:37:55', '', '2016-07-27 10:37:55', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(224, 'CUS-2016-0081', 'P-W0224', 'ROMEO', 'LESCANO', 'M.', 'RETIREE', '', '#38 ST. JOHN PACITA COMPLEX 1', 'Laguna', 'San Pedro', '', '09053694205', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:40:12', '', '2016-07-27 10:40:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(225, 'CUS-2016-0081', 'P-W0225', 'DIONISIO', 'BRITO', '', '', '', 'OLYMPIA S', '', '', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:42:07', '', '2016-07-27 10:42:07', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(226, 'CUS-2016-0081', 'P-W0226', 'CATHERINE', 'AGUILAR', '', '', '', '51 J. LUNA ST. PACITA COMPLEX ', 'Laguna', 'San Pedro', '4780151', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:43:48', '', '2016-07-27 10:43:48', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(227, 'CUS-2016-0081', 'P-W0227', 'SONNY', 'PALING', '', '', '', 'VILLA OLYMPIA', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:46:36', '', '2016-07-27 10:46:36', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(228, 'CUS-2016-0081', 'P-W0228', 'LEONER', 'ALVAREZ', '', 'PRODUCTION HELPER', '', 'BRGY. BAGONG TUBIG, SAN LUIS,  BATANGAS', '', '', '', '09227603025', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:49:12', '', '2016-07-27 10:49:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(229, 'CUS-2016-0081', 'P-W0229', 'PRINCESS ASYA', 'PAPANDAYAN', '', '', '', 'PH. 7 DIAMOND ST.', '', '', '', '09980852440', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:50:33', '', '2016-07-27 10:50:33', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(230, 'CUS-2016-0081', 'P-W0230', 'MONICA', 'AOKI', 'L.', '', '', 'PACITA', '', '', '', '09155957086', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:53:08', '', '2016-07-27 10:53:08', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(231, 'CUS-2016-0081', 'P-W0231', 'GIRARD', 'PADLAN', '', 'MED REP', '', 'B3 L11 ELVINDA VILLAGE', 'Laguna', 'San Pedro', '', '09158472917', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:55:12', '', '2016-07-27 10:55:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(232, 'CUS-2016-0081', 'P-W0232', 'GINA', 'HALINA', 'B.', 'HOUSEWIFE', '', 'B11 LOT 10 BRGY. ESTRELLA', 'Laguna', 'San Pedro', '5197871', '', '1970-01-01', 0, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:57:22', '', '2016-07-27 10:57:22', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(233, 'CUS-2016-0081', 'P-W0233', 'JEREMY', 'EUGENIO', '', 'SALES PERSON', '', 'BIÑAN LAGUNA', '', '', '', '09098016621', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-27 10:58:32', '', '2016-07-27 10:58:32', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(234, 'CUS-2016-0081', 'P-W0234', 'Juan', 'Dela Cruz', 'A', '', '', '', '', '', '', '', '1990-07-02', 25, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 10:29:50', '', '2016-07-29 10:44:10', '/intellident/webroot/upload/files/images/20151127_200744.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(235, 'CUS-2016-0081', 'P-W0235', 'WILSON', 'BASANES', '', 'TECHNICIAN', '', 'MALIGAYA 2 PACITA 2', 'Laguna', 'San Pedro', '', '09277611910', '1970-01-01', 34, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 10:53:51', '', '2016-07-29 10:53:51', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(236, 'CUS-2016-0081', 'P-W0236', 'RACHEL', 'BASA', 'F.', '', '', '#26 STA. FE ST. PACITA COMPLEX ', 'Laguna', 'San Pedro', '8687235', '', '1970-01-01', 38, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 10:55:51', '', '2016-07-29 10:55:51', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(237, 'CUS-2016-0081', 'P-W0237', 'BASA', 'JOHN ALDRIN', 'C.', '', '', 'SPRINGTIME COUNTRY', 'Laguna', 'Biñan', '', '', '1970-01-01', 18, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 10:57:20', '', '2016-07-29 10:57:20', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(238, 'CUS-2016-0081', 'P-W0238', 'JEAN', 'BARSAGA', 'P.', '', '', 'LANDAYAN', 'Laguna', 'San Pedro', '', '09467266746', '1970-01-01', 25, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 10:58:41', '', '2016-07-29 10:58:41', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(239, 'CUS-2016-0081', 'P-W0239', 'MARY FRANC', 'BARRIENTOS', '', '', '', 'BLK. 5 LOT 24 PACITA HOMES', 'Laguna', 'Biñan', '3986465', '', '1970-01-01', 29, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 11:13:29', '', '2016-07-29 11:13:29', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(240, 'CUS-2016-0081', 'P-W0240', 'JOSELITO', 'BARNIZO', '', '', '', 'JUANA 1, SAN FRANCISCO', 'Laguna', 'Biñan', '', '', '1970-01-01', 26, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 11:14:31', '', '2016-07-29 11:14:31', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(241, 'CUS-2016-0081', 'P-W0241', 'DOMINIC', 'BARILLO', '', '', '', 'BLK. 20 LOT 7 JUANA 3B', 'Laguna', 'Biñan', '5291343', '', '1970-01-01', 15, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 11:16:04', '', '2016-07-29 11:16:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(242, 'CUS-2016-0081', 'P-W0242', 'GARRY', 'BARILE', '', 'Nurse', '', 'BLK. 7 LOT 22 LOBELLA ST., ', '', '', '8220459', '09196186496', '1970-01-01', 44, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 11:55:43', '', '2016-07-29 11:55:43', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(243, 'CUS-2016-0081', 'P-W0243', 'LITO', 'BARIAS', '', '', '', 'PACITA COMPLEX', 'Laguna', 'San Pedro', '6988953', '', '1970-01-01', 70, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 11:58:17', '', '2016-07-29 11:58:17', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(244, 'CUS-2016-0081', 'P-W0244', 'ANALIZA', 'BARDAJE', '', '', '', 'BLK 1 LOT 2B PHASE 2B MACARIA VILLAGE', '', '', '', '', '1970-01-01', 26, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:00:29', '', '2016-07-29 12:00:29', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(245, 'CUS-2016-0081', 'P-W0245', 'JUSTINE ACE', 'BARCIA', '', '', '', 'BLK 19 LOT 4A JUANA 3B ', 'Laguna', 'Biñan', '', '', '1970-01-01', 19, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:01:46', '', '2016-07-29 12:01:46', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(246, 'CUS-2016-0081', 'P-W0246', 'MYRON', 'BARBONIO', '', 'SALES ASSOCIATE', 'SECURITY BANK ALABANG', 'B5 L23 ST. JOSEPH 10', '', '', '', '09356105695', '1970-01-01', 26, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:03:32', '', '2016-07-29 12:03:32', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(247, 'CUS-2016-0081', 'P-W0247', 'MILDRED', 'BARACHINA', 'B.', 'EMPLOYEE', '', '#77 PULO CABUYAO LAGUNA', 'Laguna', 'Cabuyao', '', '09185153911', '1970-01-01', 38, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:04:59', '', '2016-07-29 12:04:59', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(248, 'CUS-2016-0081', 'P-W0248', 'JOEL', 'BAOYA', '', 'BROKER', '', 'BLK 1 LO 1 AND 2 SOUTHVIEW 2', '', '', '', '09178617894', '1970-01-01', 35, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:07:24', '', '2016-07-29 12:07:24', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(249, 'CUS-2016-0081', 'P-W0249', 'SHARA', 'BAÑEZ', '', 'STUDENT', '', 'ROSARIO COMPLEX', 'Laguna', 'San Pedro', '', '09083440164', '1970-01-01', 22, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:08:42', '', '2016-07-29 12:08:42', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(250, 'CUS-2016-0081', 'P-W0250', 'VALIRE', 'BAÑAL', '', '', '', 'PACITA COMPLEX', '', '', '', '', '1970-01-01', 20, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:09:47', '', '2016-07-29 12:09:47', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(251, 'CUS-2016-0081', 'P-W0251', 'NELSON', 'BANZALE', '', 'SEAMAN', '', 'BLK. 7A-2 LOT 5 PH 2, GREENMEADOW ST., PACITA 2', 'Laguna', 'San Pedro', '5190878', '09087442235', '1970-01-01', 49, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:12:11', '', '2016-07-29 12:12:11', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(252, 'CUS-2016-0081', 'P-W0252', 'CHRISTOPHER', 'BANGIT', 'B.', 'VENDOR', '', 'B52 L11 SOUTHVILLE 3A ', 'Laguna', 'San Pedro', '', '09163521207', '1970-01-01', 30, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:13:55', '', '2016-07-29 12:13:55', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(253, 'CUS-2016-0081', 'P-W0253', 'GLADYS', 'BANGIBANG', '', 'ADMIN', 'SLMC BGC TAGUIG', 'NEWTON HEIGHTS', 'Laguna', 'Biñan', '7897700', '09194833454', '1970-01-01', 33, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:16:56', '', '2016-07-29 12:16:56', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(254, 'CUS-2016-0081', 'P-W0254', 'EDWIN', 'BANDO', '', '', '', 'PACITA COMPLEX', 'Laguna', 'San Pedro', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:17:48', '', '2016-07-29 12:17:48', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(255, 'CUS-2016-0081', 'P-W0255', 'IMELDA', 'BALLESTEROS', 'M.', '', '', '57 CAMINO REAL ROAD LAS VILLAS', '', '', '', '09276836230', '1970-01-01', 40, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:19:18', '', '2016-07-29 12:19:18', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(256, 'CUS-2016-0081', 'P-W0256', 'LERMA "LOT"', 'BALTAZAR', '', '', '', 'BLK 5 LOT 21 PANGASINAN ST. MACARIA VILLAGE ', 'Laguna', 'Biñan', '8681391', '', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:20:56', '', '2016-07-29 12:20:56', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(257, 'CUS-2016-0081', 'P-W0257', 'ARLENE', 'BALTAZAR', '', '', '', '#8 STA. ELENA ST., PACITA COMPLEX 1', 'Laguna', 'San Pedro', '', '09273828904', '1970-01-01', 45, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:22:18', '', '2016-07-29 12:22:18', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(258, 'CUS-2016-0081', 'P-W0258', 'ROWELL', 'BALMES', '', 'SEA FARER', '', '3 STA. CLARA ST., PACITA COMPLEX', 'Laguna', 'San Pedro', '8082473', '09165852966', '1970-01-01', 32, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:25:46', '', '2016-07-29 12:25:46', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(259, 'CUS-2016-0081', 'P-W0259', 'MARIA SALOME', 'BALLERDA', '', 'OFFICE EMPLOYEE', '3RD FLR SUNTRADE BLDG. ALABANG ZAPOTE RD', '138 COUNTRY HOMES ', 'Laguna', 'Biñan', '8323532', '09178032291', '1970-01-01', 52, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:27:54', '', '2016-07-29 12:27:54', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(260, 'CUS-2016-0081', 'P-W0260', 'CHRISTINE JANE', 'BALLERDA', '', 'STUDENT', '', '138 COUNTRY DRIVE, COUNTRY HOMES', 'Laguna', 'Biñan', '', '09778272291', '1970-01-01', 17, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:29:16', '', '2016-07-29 12:29:16', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(261, 'CUS-2016-0081', 'P-W0261', 'ROGER', 'BALDOMEO', 'M.', '', 'JAM COMPOUND BRGY TUBIGAN BIÑAN LAGUNA', '1-e ILAYA ST., BRGY HALANG', '', '', '', '09330271401', '1970-01-01', 48, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:32:02', '', '2016-07-29 12:32:02', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(262, 'CUS-2016-0081', 'P-W0262', 'ROGER', 'BALDOMERO', 'U.', '', '', 'SAN FRANCISCO', 'Laguna', 'Biñan', '', '09169354997', '1970-01-01', 20, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:33:16', '', '2016-07-29 12:33:16', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(263, 'CUS-2016-0081', 'P-W0263', 'MATTHEW', 'BAJARIAS', '', '', '', 'A RUBY ST., ST. FRANCIS 4', 'Laguna', 'Biñan', '', '09064829908', '1970-01-01', 11, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:34:32', '', '2016-07-29 12:34:32', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(264, 'CUS-2016-0081', 'P-W0264', 'MAYBELLE', 'BALDEVIA', 'P.', '', 'CITTADINI SCHOOL', 'B7 L5 NEWTON HEIGHTS,', 'Laguna', 'Biñan', '', '09152437222', '1970-01-01', 25, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:36:09', '', '2016-07-29 12:36:09', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(265, 'CUS-2016-0081', 'P-W0265', 'LOUISE ANTONETTE', 'BALAMINO', '', '', '', '#15 13TH ST., 1-D PACITA', '', '', '', '', '1970-01-01', 6, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:37:57', '', '2016-07-29 12:37:57', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(266, 'CUS-2016-0081', 'P-W0266', 'RICO "doc"', 'BALITAAN', 'R.', 'Optometrist', '', 'LANGGAM ', 'Laguna', 'San Pedro', '4033293', '09276578860', '1970-01-01', 41, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:40:02', '', '2016-07-29 12:40:02', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(267, 'CUS-2016-0081', 'P-W0267', 'JENELYN', 'BALDESTAMON', '', '', '', 'WOODSIDE VILLAGE CANLALAY', 'Laguna', 'Biñan', '', '09296177747', '1970-01-01', 36, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:41:28', '', '2016-07-29 12:41:28', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(268, 'CUS-2016-0081', 'P-W0268', 'MARK JUSTINE', 'BALBENTA', '', '', '', 'B5 L23 WEDNESDAY ST. PH. 7A PACITA COMPLEX', 'Laguna', 'San Pedro', '8081119', '09176929600', '1970-01-01', 15, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:42:59', '', '2016-07-29 12:42:59', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(269, 'CUS-2016-0081', 'P-W0269', 'DEBBIE', 'BALBAERA', '', '', '', 'BALETE, DIADI NUEVA VIZCAYA', '', '', '', '09153315708', '1970-01-01', 21, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:44:24', '', '2016-07-29 12:44:24', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(270, 'CUS-2016-0081', 'P-W0270', 'MYLA JEAN', 'BARBACENA', '', '', '', 'BLK. 21 LOT 39 MAIN ROAD PACITA 2', '', '', '', '09172005784', '1970-01-01', 23, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:47:49', '', '2016-07-29 12:47:49', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(271, 'CUS-2016-0081', 'P-W0271', 'RC', 'BALANE', '', 'SALES', '', 'METROVILLE SUBD.', 'Laguna', 'Biñan', '', '09066926008', '1970-01-01', 23, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:49:05', '', '2016-07-29 12:49:05', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(272, 'CUS-2016-0081', 'P-W0272', 'KHEA', 'BATITIS', '', '', '', 'BRGY. TAGAPO ', 'Laguna', 'Santa Rosa City', '', '09300796966', '1970-01-01', 22, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:50:16', '', '2016-07-29 12:50:16', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(273, 'CUS-2016-0081', 'P-W0273', 'MARISSA', 'BATACAO', '', '', '', 'BLK 4 LOT 10 PHASE 1B PACITA  COMPLEX', 'Laguna', 'San Pedro', '', '09187575767', '1970-01-01', 25, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:51:44', '', '2016-07-29 12:51:44', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(274, 'CUS-2016-0081', 'P-W0274', 'KAREN', 'BALDEVIA', 'P.', '', '', 'BLK 7 LOT 7 NEWTON HEIGHTS', 'Laguna', 'Biñan', '', '09126041687', '1970-01-01', 20, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:52:55', '', '2016-07-29 12:52:55', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(275, 'CUS-2016-0081', 'P-W0275', 'GODFREY', 'BAINCO', '', '', '', '#20 STA. ELENA ST. PACITA COMPLEX', '', '', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:53:49', '', '2016-07-29 12:53:49', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(276, 'CUS-2016-0081', 'P-W0276', 'EDWIN', 'BAINCO', '', '', '', '20 STA. ELENA ST., PACITA COMPLEX', '', '', '', '', '1970-01-01', 50, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:54:41', '', '2016-07-29 12:54:41', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(277, 'CUS-2016-0081', 'P-W0277', 'MA. CRISTINA', 'BAILON', 'B.', '', '', '#6 STA. MAGDALENA ST., PACITA COMPLEX', 'Laguna', 'San Pedro', '8474526', '', '1970-01-01', 42, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:56:36', '', '2016-07-29 12:56:36', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(278, 'CUS-2016-0081', 'P-W0278', 'ROSA RAFAELA', 'BAILON', 'B. ', '', '', '#6 STA. MAGDALENA ST., PACITA COMPLEX', 'Laguna', 'San Pedro', '8474526', '09774574917', '1970-01-01', 62, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:58:10', '', '2016-07-29 12:58:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(279, 'CUS-2016-0081', 'P-W0279', 'ACE YORK', 'BAGUE', '', '', '', 'ST. FRANCIS 7, SAN ANTONIO', '', '', '', '', '1970-01-01', 30, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:58:58', '', '2016-07-29 12:58:58', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(280, 'CUS-2016-0081', 'P-W0280', 'ROGER', 'BAGACINA', '', '', '', 'CAMELLA SPRINGVILLE', '', '', '', '09358294437', '1970-01-01', 20, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 12:59:57', '', '2016-07-29 12:59:57', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(281, 'CUS-2016-0081', 'P-W0281', 'RENIER', 'BACUNAWA', '', '', '', 'BRGY. BAGONG SILANG', 'Laguna', 'San Pedro', '8330679', '09979178648', '1970-01-01', 32, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:01:42', '', '2016-07-29 13:01:42', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(282, 'CUS-2016-0081', 'P-W0282', 'ALBERT', 'BACLIG', 'F. ', '', '', 'PH 1B B3 L 15', '', '', '', '09172554913', '1970-01-01', 60, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:02:44', '', '2016-07-29 13:02:44', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(283, 'CUS-2016-0081', 'P-W0283', 'EDUARDO', 'BACONGA', '', 'CHEF ', 'HAMILTON BERMUDA', 'RIVERSIDE', 'Laguna', 'San Pedro', '', '09439169076', '1970-01-01', 42, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:04:10', '', '2016-07-29 13:04:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1);
INSERT INTO `patient` (`id`, `customer_id`, `patient_code`, `firstname`, `lastname`, `middlename`, `occupation`, `company`, `address`, `province`, `city`, `telephone_number`, `mobile_number`, `birthdate`, `age`, `gender`, `civil_status`, `health_card_type`, `health_card_number`, `is_pregnant`, `is_treatment`, `diagnosis`, `treatment`, `prescriptions`, `alergies`, `diseases`, `referred_by`, `created_by`, `date_created`, `remarks`, `date_updated`, `image`, `medical_date`, `is_in_good_health`, `last_checkup`, `has_general_health_changes`, `is_taking_medications`, `is_smoker`, `is_nursing`, `is_taking_pills`, `visit_reason`, `former_dentist`, `dentist_address`, `last_dental_care`, `last_dental_xray`, `other_dental_history`, `often_floss`, `often_brush`, `is_archive`, `is_sync`) VALUES
(284, 'CUS-2016-0081', 'P-W0284', 'LOLIT', 'BACLAY', '', '', '', 'OLYMPIA', '', '', '', '09076632302', '1970-01-01', 45, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:05:26', '', '2016-07-29 13:05:26', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(285, 'CUS-2016-0081', 'P-W0285', 'MARJORIE', 'BABARAN', '', '', '', '', '', '', '8686876', '', '1970-01-01', 31, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:06:07', '', '2016-07-29 13:07:36', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(286, 'CUS-2016-0081', 'P-W0286', 'CORAZON', 'BUCALING', '', '', '', 'B3 L19 MAHOGANY ST., VILLA CAROLINA II TUNASAN, MUNTINLUPA CITY', '', '', '', '09297177361', '1970-01-01', 49, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:09:48', '', '2016-07-29 13:09:48', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(287, 'CUS-2016-0081', 'P-W0287', 'JENNIFER', 'BUTANAS', '', '', '', 'B 26 LOT 21 ST. JOSEPH 10', '', '', '', '09198089245', '1970-01-01', 32, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:10:57', '', '2016-07-29 13:10:57', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(288, 'CUS-2016-0081', 'P-W0288', 'NORMAN', 'BUSTO', 'R. ', '', '', 'EMELDA AVE. OLD TENANT ', 'Laguna', 'San Pedro', '', '09235938845', '1970-01-01', 23, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:12:11', '', '2016-07-29 13:12:11', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(289, 'CUS-2016-0081', 'P-W0289', 'EVA', 'BUSLON', 'Q.', '', '', '#LORETO ST., BRGY. SAN VICENTE LAGUNA', '', '', '', '09109729528', '1970-01-01', 25, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:13:56', '', '2016-07-29 13:13:56', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(290, 'CUS-2016-0081', 'P-W0290', 'JAIME', 'BUSIO JR', 'Q. ', '', '', 'LANGGAM ', 'Laguna', 'San Pedro', '', '', '1970-01-01', 17, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:15:10', '', '2016-07-29 13:15:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(291, 'CUS-2016-0081', 'P-W0291', 'RICHARD', 'BURN', '', 'RETIRED', '', 'B 13 L 38 VILLAGGIO', 'Laguna', 'Biñan', '8470797', '', '1970-01-01', 63, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:17:00', '', '2016-07-29 13:17:00', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(292, 'CUS-2016-0081', 'P-W0292', 'MARIA', 'SOCORRO', 'BUNQUIN', '', '', 'B 16 L 19 PH. 1 METROVILLE COMP.', 'Laguna', 'Biñan', '8714231', '', '1970-01-01', 37, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:18:39', '', '2016-07-29 13:18:39', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(293, 'CUS-2016-0081', 'P-W0293', 'JOEY DANIELLE', 'BUNQUIN', 'M. ', '', '', 'B 16 L 19 PHASE 1 METROVILLE', 'Laguna', 'Biñan', '8714231', '', '1970-01-01', 13, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:20:25', '', '2016-07-29 13:20:25', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(294, 'CUS-2016-0081', 'P-W0294', 'JACKLIENE EUNICE', 'BUNQUIN', '', '', '', 'B16 L 19 PH. 1 METROVILLE COMP. BIÑANLAGUNA', '', '', '', '09161308196', '1970-01-01', 14, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:23:25', '', '2016-07-29 13:23:25', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(295, 'CUS-2016-0081', 'P-W0295', 'DAVID RAPHAEL', 'BUNQUIN', '', '', '', 'B16 L 19 PH. 1 METROVILLE COMP. BIÑANLAGUNA', '', '', '8714231', '', '1970-01-01', 10, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 13:24:18', '', '2016-07-29 13:24:18', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(296, 'CUS-2016-0081', 'P-W0296', 'MELVIN', 'BUNAGAN', 'C. ', 'SEAFARER', '', 'SAN PEDRO LAGUNA', '', '', '', '09354996641', '1970-01-01', 25, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:00:35', '', '2016-07-29 14:00:35', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(297, 'CUS-2016-0081', 'P-W0297', 'LEO', 'BUMANGLAG', 'V.', '', '', 'PH. 1 BLK 7 LOT 3 PACITA 2', 'Laguna', 'San Pedro', '8473479', '', '1970-01-01', 33, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:04:59', '', '2016-07-29 14:04:59', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(298, 'CUS-2016-0081', 'P-W0298', 'LINDSAY', 'BUMANGLAG', 'F.  ', '', '', 'PH. 1 BLK 7 LOT 3 PACITA 2', '', '', '8473479', '09178716821/ 09178042011', '1970-01-01', 33, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:06:47', '', '2016-07-29 14:07:46', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(299, 'CUS-2016-0081', 'P-W0299', 'LEILA', 'BUMANGLAG', 'F.  ', '', '', 'PH. 1 BLK 7 LOT 3 PACITA 2', '', '', '8473479', '', '1970-01-01', 6, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:08:54', '', '2016-07-29 14:08:54', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(300, 'CUS-2016-0081', 'P-W0300', 'REBECCA', 'BULATAO', 'C. ', 'HOUSEWIFE', '', 'B12 L21 ACADA ST. SOUTHERN HEIGHTS 2 BRGY. UBL', 'Laguna', 'San Pedro', '8086150', '', '1970-01-01', 35, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:10:49', '', '2016-07-29 14:10:49', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(301, 'CUS-2016-0081', 'P-W0301', 'ALDRIN', 'BULABOG ', 'D. ', '', '', 'BLK 3A LOT 68 BRGY. TEN TIAGO', '', '', '', '09077654628', '1985-08-13', 30, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:13:01', '', '2016-07-29 14:13:01', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(302, 'CUS-2016-0081', 'P-W0302', 'ANDRES', 'BULAON', '', 'C. STEWARD', 'MAKATI CITY', 'UNIT 209 VILLA SOLE CONDO 452 A. RODRIGUEZ AVE., PASIG CITY', '', '', '9983550', '09189157395', '1970-01-01', 46, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:14:53', '', '2016-07-29 14:14:53', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(303, 'CUS-2016-0081', 'P-W0303', 'REYCO', 'BUHAYAN', 'Y.', 'SEAMAN ', '', 'SAGAY CITY NEGROS OCCIDENTAL', '', '', '', '09392826555', '1970-01-01', 30, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:16:11', '', '2016-07-29 14:16:11', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(304, 'CUS-2016-0081', 'P-W0304', 'NEVIE', 'BUHAYAN', '', '', '', 'CAMELLA WOODHILLS, SAN PEDRO LAGUNA', '', '', '', '09091499770', '1970-01-01', 45, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:17:18', '', '2016-07-29 14:17:18', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(305, 'CUS-2016-0081', 'P-W0305', 'YASMIN', 'BUHAIN', '', '', '', 'PACITA 2, PH 2 LOT 3', '', '', '8474381', '', '1970-01-01', 40, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:18:49', '', '2016-07-29 14:18:49', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(306, 'CUS-2016-0081', 'P-W0306', 'REMIGIO', 'BUGNOT', 'M. ', '', '', 'BLK. 30 LOT 35 METROVILLE', '', '', '', '09162226135', '1970-01-01', 69, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:20:04', '', '2016-07-29 14:20:04', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(307, 'CUS-2016-0081', 'P-W0307', 'ISABELITA', 'BUGARIN', 'L. ', 'BANK EMPLOYEE', '', '#14 PACITA COMPLEX', '', '', '5294749', '09178923580', '1970-01-01', 56, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:21:34', '', '2016-07-29 14:21:34', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(308, 'CUS-2016-0081', 'P-W0308', 'RAMINA', 'BUENVIAJE', '', '', '', '#30 BALMACEDA ST., CHRYSANTHEMUM VILLAGE', 'Laguna', 'San Pedro', '5538030', '09152492233', '1970-01-01', 32, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:23:51', '', '2016-07-29 14:23:51', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(309, 'CUS-2016-0081', 'P-W0309', 'ZENJHIE', 'BUENVIAJE', '', '', '', '#30 BALMACEDA ST., CHRYSANTHEMUM VILLAGE', '', '', '', '', '1970-01-01', 17, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:24:51', '', '2016-07-29 14:24:51', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(310, 'CUS-2016-0081', 'P-W0310', 'JONAS', 'BUENAFE JR.', '', 'STUDENT', '', 'L 8 BLK 5 MACARIA VILLAGE', 'Laguna', 'Biñan', '5296948', '', '1970-01-01', 21, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:27:39', '', '2016-07-29 14:27:39', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(311, 'CUS-2016-0081', 'P-W0311', 'CALVIN ZHAR ', 'BUENVIAJE', '', '', '', '#30 BALMACEDA ST., CHRYSANTHEMUM VILLAGE', '', '', '', '', '1970-01-01', 16, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:29:05', '', '2016-07-29 14:29:05', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(312, 'CUS-2016-0081', 'P-W0312', 'IAN', 'CAYE', 'A. ', 'ENGINEER ', '', 'B1 L23 VILLA OLYMPIA PHG', 'Laguna', 'San Pedro', '', '09055736504', '1970-01-01', 23, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:30:58', '', '2016-07-29 14:30:58', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(313, 'CUS-2016-0081', 'P-W0313', 'MIRKO', 'BUENA', '', '', '', 'SAN FRANCISCO, BIÑAN CITY', '', '', '', '09162283477', '1970-01-01', 5, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:32:09', '', '2016-07-29 14:32:09', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(314, 'CUS-2016-0081', 'P-W0314', 'NOEL', 'BUEN', 'B. ', '', '', 'BLK. 1 LOT 26B MARYLAND HOMES', '', '', '', '09176908292', '1970-01-01', 47, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:33:16', '', '2016-07-29 14:33:16', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(315, 'CUS-2016-0081', 'P-W0315', 'FRANCHETTE ', 'BRUCELAS', '', 'MANAGER  ', 'SINGAPORE', '4079 GEN MASCARDO MAKATI CITY', '', '', '', '09228227767', '1970-01-01', 39, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:35:03', '', '2016-07-29 14:35:03', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(316, 'CUS-2016-0081', 'P-W0316', 'CARMEN', 'BROOKS', '', '', '', '', '', '', '', '', '1970-01-01', 14, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:35:39', '', '2016-07-29 14:35:39', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(317, 'CUS-2016-0081', 'P-W0317', 'FRANCISCO', 'BRIONES', 'S. ', '', '', 'B 4-6 PURPLE ST. SAPPHIRE HILLS', '', '', '', '', '1970-01-01', 80, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:37:19', '', '2016-07-29 14:37:19', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(318, 'CUS-2016-0081', 'P-W0318', 'JEFFREY', 'BRIOSO', 'C. ', '', '', 'METROVILLE', '', '', '', '', '1970-01-01', 25, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:38:58', '', '2016-07-29 14:38:58', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(319, 'CUS-2016-0081', 'P-W0319', 'JOMAR', 'BRUCELO', '', '', '', '139 MALIGAYA ST., SAN PEDRO LAGUNA', '', '', '', '09434156687', '1970-01-01', 33, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:40:10', '', '2016-07-29 14:40:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(320, 'CUS-2016-0081', 'P-W0320', 'NELSON', 'BRAVO', '', '', '', 'B1 L22  A MARYLAND , LANDAYAN', '', '', '', '09283138276', '1970-01-01', 51, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:42:03', '', '2016-07-29 14:42:03', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(321, 'CUS-2016-0081', 'P-W0321', 'JENNETH', 'BRAVO', 'P. ', '', 'MODERN CANCER HOSPITAL GUANGZHON CHINA', 'BLK. 7 LOT 8 MUNICH ST.', 'Laguna', 'San Pedro', '', '', '1970-01-01', 39, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:44:38', '', '2016-07-29 14:44:38', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(322, 'CUS-2016-0081', 'P-W0322', 'GLENDA', 'BRAVO', '', '', '', '118 DON PABLO SUBD.', '', '', '', '', '1970-01-01', 23, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:45:36', '', '2016-07-29 14:45:36', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(323, 'CUS-2016-0081', 'P-W0323', 'MARINA', 'BORROMEO', '', '', '', '241 SITIO MALIGAYA 2 SAN VICENTE', 'Laguna', 'San Pedro', '', '09351444037', '1970-01-01', 21, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:46:58', '', '2016-07-29 14:46:58', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(324, 'CUS-2016-0081', 'P-W0324', 'REAH MAE', 'BORKAR', '', '', '', 'SAN PEDRO LAGUNA CHRYSANTHEMUM VILLAGE', '', '', '', '', '1970-01-01', 13, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:48:19', '', '2016-07-29 14:48:19', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(325, 'CUS-2016-0081', 'P-W0325', 'ZEDRICK JAMES', 'BORJA', 'B', '', '', 'SAMPAGUITA VILLAGE SAMPAGUITA AVE. ', 'Laguna', 'San Pedro', '', '', '1970-01-01', 10, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 14:59:50', '', '2016-07-29 14:59:50', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(326, 'CUS-2016-0081', 'P-W0326', 'LANZ JOSEPH', 'BORJA', 'B', '', '', 'SAMPAGUITA VILLAGE SAMPAGUIITA AVE. ', 'Laguna', 'San Pedro', '', '', '1970-01-01', 9, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:01:38', '', '2016-07-29 15:01:38', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(327, 'CUS-2016-0081', 'P-W0327', 'JAZMINE ', 'BORJA', '', '', '', '40 SAMPAGUITA AVE, SAMPAGUTA VILLAGE', 'Laguna', 'San Pedro', '918-9449', '', '1970-01-01', 4, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:03:05', '', '2016-07-29 15:03:05', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(328, 'CUS-2016-0081', 'P-W0328', 'VERNON ADOLFO', 'BORJAL', '', '', '', '#16 MONICA ST. PHASE 1B', 'Laguna', 'San Pedro', '', '', '1970-01-01', 20, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:08:44', '', '2016-07-29 15:08:44', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(329, 'CUS-2016-0081', 'P-W0329', 'JEFFREY', 'BORABIEN', 'M', '', '', 'VILLA PAZ II PACITA COMPLEX', 'Laguna', 'San Pedro', '214-0067', '09061399259', '1970-01-01', 17, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:10:45', '', '2016-07-29 15:10:45', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(330, 'CUS-2016-0081', 'P-W0330', 'ANNE MARIE', 'BOLESA', 'B', '', '', 'BLK L1 SPHC SUBD. LANDAYAN', 'Laguna', 'San Pedro', '', '09394770182', '1970-01-01', 23, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:21:50', '', '2016-07-29 15:21:50', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(331, 'CUS-2016-0081', 'P-W0331', 'ROSE ANN', 'BOLANIO', '', '', '', 'CANLALAY', 'Laguna', 'Biñan', '', '09287867601', '1970-01-01', 19, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:24:11', '', '2016-07-29 15:24:11', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(332, 'CUS-2016-0081', 'P-W0332', 'PATERNO', 'BORLAGDAN', 'C', '', '', 'BAYVIEW SUBD. ', 'Laguna', 'Bay', '304-1715', '0975255580', '1970-01-01', 63, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:27:05', '', '2016-07-29 15:27:05', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(333, 'CUS-2016-0081', 'P-W0333', 'VERA ADELLE ', 'BORJAL', 'M', '', '', '16 STA. MINICA ST. PACITA', 'Laguna', 'San Pedro', '801-0744', '09175680615', '1970-01-01', 33, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:29:38', '', '2016-07-29 15:29:38', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(334, 'CUS-2016-0081', 'P-W0334', 'VERNON ADOLFO', 'BORJAL', 'M', '', '', 'PHASE 1B SANTA MONICO 16 ST. ', 'Laguna', 'San Pedro', '', '09175551024', '1970-01-01', 22, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:31:20', '', '2016-07-29 15:31:20', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(335, 'CUS-2016-0081', 'P-W0335', 'JOSEPHINE', 'BORJA', '', '', '', '40 SAMPAGUITA AVE SAMPAGUITA VILL ', 'Laguna', 'San Pedro', '918-9449', '09182780300', '1970-01-01', 68, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:33:25', '', '2016-07-29 15:33:25', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(336, 'CUS-2016-0081', 'P-W0336', 'JOCELYN', 'BORJA', 'B. ', '', '', '#40 SAMPAGUITA AVE. SAMPAGUITA VILL ', 'Laguna', 'San Pedro', '', '09182780300', '1970-01-01', 33, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:34:53', '', '2016-07-29 15:34:53', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(337, 'CUS-2016-0081', 'P-W0337', 'JERICO', 'BORJA', '', 'ADMINISTRATOR  ', '', 'B23 L5 METROVILLE COMPLEX', 'Laguna', 'Biñan', '', '09324263679', '1970-01-01', 31, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:38:48', '', '2016-07-29 15:38:48', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(338, 'CUS-2016-0081', 'P-W0338', 'JOEL', 'BOÑALES', '', '', '', '3314 CORREGIDOR ST. STA. MESA ', '', '', '', '09212687354', '1970-01-01', 58, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:43:08', '', '2016-07-29 15:43:08', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(339, 'CUS-2016-0081', 'P-W0339', 'BENG ', 'BONSOL', 'C', '', '', '#08 SAPPHIRE ST. PACITA I', 'Laguna', 'San Pedro', '869-0934', '', '1970-01-01', 47, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:45:16', '', '2016-07-29 15:45:16', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(340, 'CUS-2016-0081', 'P-W0340', 'RONNIE', 'BONGAT', '', '', '', 'B44 L22 SOUTHVILL 3A ', 'Laguna', 'San Pedro', '', '09993156784', '1970-01-01', 36, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:46:58', '', '2016-07-29 15:46:58', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(341, 'CUS-2016-0081', 'P-W0341', 'ROSELYN', 'BONGAT', '', '', '', 'B44 L22 SOUTHVILLE 3-A', 'Laguna', 'San Pedro', '', '09396052733', '1970-01-01', 34, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:48:13', '', '2016-07-29 15:48:13', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(342, 'CUS-2016-0081', 'P-W0342', 'CORA', 'BONAGUA', '', '', '', 'L29 B18', 'Laguna', 'San Pedro', '', '09483547621', '1970-01-01', 49, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:50:12', '', '2016-07-29 15:50:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(343, 'CUS-2016-0081', 'P-W0343', 'JOSE', 'BONAGUA', '', '', '', 'B9 L18 BRGY. ESTRELLA', 'Laguna', 'San Pedro', '', '09393092979/09484159190', '1970-01-01', 42, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:51:59', '', '2016-07-29 15:51:59', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(344, 'CUS-2016-0081', 'P-W0344', 'MARK', 'BOLOS', '', 'MERCHANDISER', '', 'SAN ANTONIO', 'Laguna', 'San Pedro', '', '09292867106', '1970-01-01', 23, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:53:28', '', '2016-07-29 15:53:28', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(345, 'CUS-2016-0081', 'P-W0345', 'MANOJ', 'BOKKAR', '', '', '', 'PACITA', 'Laguna', 'San Pedro', '', '', '1970-01-01', 43, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:57:01', '', '2016-07-29 15:57:01', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(346, 'CUS-2016-0081', 'P-W0346', 'CYRIL', 'BOCOLON', '', '', '', '145 MALIGAYA 1 ', 'Laguna', 'San Pedro', '', '', '1970-01-01', 17, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 15:58:43', '', '2016-07-29 15:58:43', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(347, 'CUS-2016-0081', 'P-W0347', 'FLORENDO', 'BOLESA', '', '', '', 'B13 L1 SOUTHFAIRWAY LANDAYAN', 'Laguna', 'San Pedro', '', '09476307261', '1970-01-01', 59, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:00:28', '', '2016-07-29 16:00:28', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(348, 'CUS-2016-0081', 'P-W0348', 'MALCOLM', 'BOJADOR', '', '', '', 'PH2A BLK12 LOT20 PACITA COMPLEX', 'Laguna', 'Biñan', '529-3567', '', '1970-01-01', 22, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:03:26', '', '2016-07-29 16:03:26', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(349, 'CUS-2016-0081', 'P-W0349', 'MARY ANN ', 'BOJADOR', '', '', '', 'BLK12 LOT20 NORWAY ST. PACITA', 'Laguna', 'San Pedro', '', '09151867266', '1970-01-01', 27, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:05:52', '', '2016-07-29 16:05:52', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(350, 'CUS-2016-0081', 'P-W0350', 'DELIA', 'BROMO', 'B', 'C.I.', 'ARELLANO UNIVERSITY', 'L8 B24 BEGONIA ST. ELVINDA VILL', 'Laguna', 'San Pedro', '', '09275659892', '1970-01-01', 57, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:08:32', '', '2016-07-29 16:08:32', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(351, 'CUS-2016-0081', 'P-W0351', 'RONY', 'BODIOLE', '', 'CHEI', '', 'B8 L6 SILCAS ', 'Laguna', 'Biñan', '', '0916645532', '1970-01-01', 48, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:11:15', '', '2016-07-29 16:11:15', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(352, 'CUS-2016-0081', 'P-W0352', 'JOSE ', 'BOBADILLA', '', '', '', 'B13 L27 METROVILLE ', 'Laguna', 'Biñan', '', '09156072311', '1970-01-01', 45, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:13:35', '', '2016-07-29 16:13:35', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(353, 'CUS-2016-0081', 'P-W0353', 'MIA', 'BLANCO', 'C', '', '', 'PACITA', 'Laguna', 'San Pedro', '', '09398212439', '1970-01-01', 22, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:15:00', '', '2016-07-29 16:15:00', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(354, 'CUS-2016-0081', 'P-W0354', 'JOHN FELIX', 'BLANCO', '', 'SEAMAN', 'CASA ROCHA INTRAMUROS MANILA', 'PACITA 1', 'Laguna', 'Biñan', '', '09394000525', '1970-01-01', 30, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:17:30', '', '2016-07-29 16:17:30', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(355, 'CUS-2016-0081', 'P-W0355', 'MARTIN', 'BIOL', 'S', 'ASST.', '', 'B13 L12 PH 1 PACITA 2 COMPLEX', 'Laguna', 'San Pedro', '', '', '1970-01-01', 29, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:19:39', '', '2016-07-29 16:19:39', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(356, 'CUS-2016-0081', 'P-W0356', 'JHESTINE MELLISE', 'BINADAY', '', '', '', 'CANLALAY', 'Laguna', 'Biñan', '', '', '1970-01-01', 6, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:23:33', '', '2016-07-29 16:23:33', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(357, 'CUS-2016-0081', 'P-W0357', 'ROSE ANNE', 'BILLIONES', '', 'BARISTA', 'ROSARIO AVE.', 'B28 L23 ROSARIO COMPLEX', 'Laguna', 'San Pedro', '', '09277210274', '1970-01-01', 26, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:25:46', '', '2016-07-29 16:25:46', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(358, 'CUS-2016-0081', 'P-W0358', 'RANDY', 'BIBON', '', 'PUBLICATION', '', 'LANDAYAN', 'Laguna', 'San Pedro', '', '', '1970-01-01', 36, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:27:54', '', '2016-07-29 16:27:54', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(359, 'CUS-2016-0081', 'P-W0359', 'JHONNA', 'BIAG', 'D', '', '', '#6 SITIO MALIGAYA BRGY. SAN VICENTE', 'Laguna', 'Biñan', '', '09195924843', '1970-01-01', 33, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:29:57', '', '2016-07-29 16:29:57', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(360, 'CUS-2016-0081', 'P-W0360', 'AMIE', 'BETON', '', '', '', 'B18 L2 PACITA COMPLEX', 'Laguna', 'San Pedro', '', '09985497831', '1970-01-01', 46, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:31:19', '', '2016-07-29 16:31:19', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(361, 'CUS-2016-0081', 'P-W0361', 'MARK', 'BERNABE', '', 'COOK', '', 'B1 L12 PH.6-AS', 'Laguna', 'San Pedro', '', '09491200633', '1970-01-01', 29, 'Male', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:32:59', '', '2016-07-29 16:32:59', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(362, 'CUS-2016-0081', 'P-W0362', 'MIKE', 'BERONGOY', '', '', '', 'ELVINDA ', 'Laguna', 'San Pedro', '', '09268045248', '1970-01-01', 22, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:34:24', '', '2016-07-29 16:34:24', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(363, 'CUS-2016-0081', 'P-W0363', 'MELINDA', 'BERNAL', '', '', '', '#24 SAPPHIRE ST. PACITA', 'Laguna', 'San Pedro', '', '09056858158', '1970-01-01', 52, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:36:02', '', '2016-07-29 16:36:02', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(364, 'CUS-2016-0081', 'P-W0364', 'PRINCE CARL', 'BERNABE', '', '', '', '', '', '', '', '09323782728', '1970-01-01', 6, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:37:12', '', '2016-07-29 16:37:12', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(365, 'CUS-2016-0081', 'P-W0365', 'ELIAS', 'BERNABE', 'S', '', '', 'B4 L16 JUANA 1 COMPLEX', 'Laguna', 'San Pedro', '', '09078606698', '1970-01-01', 24, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:40:10', '', '2016-07-29 16:40:10', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(366, 'CUS-2016-0081', 'P-W0366', 'LENORE', 'BERMUDEZ', '', '', '', 'B4 L6 BULGARY ST. CONPIL 3 ', 'Laguna', 'San Pedro', '834-5064', '09165230518', '1970-01-01', 37, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:42:46', '', '2016-07-29 16:42:46', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(367, 'CUS-2016-0081', 'P-W0367', 'ARVIN JAMES', 'BERMUDEZ', 'C', '', '', 'CONPIL VILLAGE III BRGY. SAN VICENTE ', 'Laguna', 'San Pedro', '', '09361021828', '1970-01-01', 22, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:45:02', '', '2016-07-29 16:45:02', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(368, 'CUS-2016-0081', 'P-W0368', 'BETH', 'BERGANTIN', '', '', '', 'CHRYSANTHENUM VILL.', 'Laguna', 'San Pedro', '', '', '1970-01-01', 59, 'Female', 'Married', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:46:40', '', '2016-07-29 16:46:40', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(369, 'CUS-2016-0081', 'P-W0369', 'BEATRIZ', 'BERMUNDO', 'M', 'RETIRED TEACHER', 'PUP COLL. OF SCIENCE', 'B13 L23 SOTO ST. CHRYSANTHENUM', 'Laguna', 'San Pedro', '869-1484', '09216095654', '1970-01-01', 77, 'Female', 'Widowed', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-07-29 16:49:27', '', '2016-07-29 16:49:27', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(370, 'CUS-2016-0081', 'P-W0370', 'Test', 'Test', '', '', '', '', '', '', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-05 14:26:00', '', '2016-08-05 14:26:00', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(371, 'CUS-2016-0081', 'P-W0371', 'Test patient', 'Last test patient', 'Middle patient', '', '', '', 'Laguna', 'Biñan', NULL, '123123123213', '1970-01-01', 30, 'Male', 'Single', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-05 14:38:18', '', '2016-08-05 14:38:18', NULL, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(372, 'CUS-2016-0081', 'P-W0372', 'SHERLIE', 'CULABAN', '', '', '', 'LANDAYAN', 'Laguna', 'San Pedro', '', '09098948359', '1970-01-01', 0, 'Female', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-05 15:03:36', '', '2016-08-05 15:03:36', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 1, 1),
(373, 'CUS-2016-0081', 'P-W0373', 'SHERLIE', 'CULABAN', '', '', '', '', 'Laguna', 'San Pedro', '', '09098948359', '0000-00-00', 20, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-05 16:20:30', '', '2016-08-05 16:20:30', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 0),
(374, 'CUS-2016-0081', 'P-W0374', 'Aaa', 'Aaa', '', '', '', '', '', '', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-08 17:11:29', '', '2016-08-08 17:11:29', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(375, 'CUS-2016-0081', 'P-W0375', 'Jayson', 'Alipala', 'A', '', '', 'Cabuyao', 'Laguna', 'Cabuyao', '', '', '1992-08-05', 24, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-09 13:42:29', '', '2016-08-09 13:42:29', '/intellident_wapp_online_v2/webroot/upload/CUS-2016-0081/files/Koala.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 0),
(376, 'CUS-2016-0081', 'P-W0376', 'Jeniel', 'Mangahis', '', '', '', '', '', '', '', '', '0000-00-00', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-10 17:49:53', '', '2016-08-10 17:49:53', '/intellident_wapp_online_v2/webroot/upload/files/image.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(377, 'CUS-2016-0081', 'P-W0377', 'Marvin', 'Dungog', '', '', '', 'A', 'Laguna', 'Santa Rosa City', '', '', '1970-01-01', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-11 12:52:24', '', '2016-08-11 12:52:24', '/intellident_wapp_online_v2/webroot/upload/CUS-2016-0081/files/Image4.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 0),
(378, 'CUS-2016-0081', 'P-W0378', 'Bryann', 'Revina', 'A', '', '', '', '', '', '', '091921345678', '1985-01-01', 31, 'Male', 'Single', 'MEDICARD', '123456789', 1, 0, NULL, NULL, NULL, 'Latex Allergy | Local Anesthetic | Penicillin or other anitibiotics', 'High Blood Pressure | Chest pain upon exertion | Tuberculosis', '', '', '2016-08-11 16:29:27', '', '2016-08-11 16:29:27', '/intellident_wapp_online_v2/webroot/upload/CUS-2016-0081/files/Koala.jpg', '', '', '', '', '', '', 1, 0, '', '', '', '', '', 'Bad breath | Bleeding gums | Clicking of popping jaw | Food collection between teeth | Grinding Teeth | Loose teeth or broken fillings | Periodontal treatment', '', 0, 0, 0),
(379, 'CUS-2016-0081', 'P-W0379', 'Test', '123', 'A', '', '', '', '', '', '123', '123', '0000-00-00', 20, 'Male', 'Single', 'INTELLICARE', 'aaaa', 0, 0, NULL, NULL, NULL, '', '', '', '', '2016-08-22 11:46:11', '', '2016-08-22 11:46:11', '/intellident_wapp_online_v2/webroot/upload/CUS-2016-0081/files/Koala.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 0),
(380, 'CUS-2016-0081', 'P-W0380', 'Bonn', 'Mendoza', '', '', '', '', '', '', '', '', '0000-00-00', 21, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-31 11:51:35', '', '2016-08-31 11:51:35', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(381, 'CUS-2016-0081', 'P-W0381', 'Asdas', 'Dasdas', '', '', '', '', '', '', '', '', '0000-00-00', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-31 11:52:05', '', '2016-08-31 11:52:05', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(9999, 'CUS-2016-0081', 'P-W9999', 'Ddd', 'Asdsa', 'Asdas', '', '', '', '', '', '', '', '0000-00-00', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-31 11:52:50', '', '2016-08-31 11:52:50', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 1),
(10000, 'CUS-2016-0081', 'P-W10000', 'Test', 'Patient', '', '', '', '', '', '', '', '', '0000-00-00', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-31 11:53:07', '', '2016-08-31 11:53:07', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 0),
(10001, 'CUS-2016-0081', 'P-W10001', 'Another', 'Test', '', '', '', '', '', '', '', '', '0000-00-00', 0, 'Male', 'Single', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2016-08-31 11:54:07', '', '2016-08-31 11:54:07', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tooth_status`
--

CREATE TABLE `tooth_status` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `has_surface` int(2) NOT NULL,
  `cost` float NOT NULL,
  `is_archive` int(2) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `is_sync` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tooth_status`
--

INSERT INTO `tooth_status` (`id`, `customer_id`, `name`, `code`, `has_surface`, `cost`, `is_archive`, `date_created`, `date_updated`, `is_sync`) VALUES
(1, 'CUS-2016-0081', 'Amalgam', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(2, 'CUS-2016-0081', 'Caries', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(3, 'CUS-2016-0081', 'Composite', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(4, 'CUS-2016-0081', 'Extraction', 'EXO', 0, 500, 0, '2016-04-18 04:21:16', '2016-08-05 16:40:01', 1),
(5, 'CUS-2016-0081', 'Glass Ionomer', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(6, 'CUS-2016-0081', 'Inlay', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(7, 'CUS-2016-0081', 'Jacket Crown', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(8, 'CUS-2016-0081', 'Missing', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(9, 'CUS-2016-0081', 'Onlay', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(10, 'CUS-2016-0081', 'Pontic', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(11, 'CUS-2016-0081', 'Root Canal Treatment', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(12, 'CUS-2016-0081', 'Root Fragment', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(13, 'CUS-2016-0081', 'Sealant', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(14, 'CUS-2016-0081', 'Temporary Filling', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(15, 'CUS-2016-0081', 'Unerupted', '', 0, 0, 0, '2016-04-18 04:21:16', '2016-04-18 04:21:16', 0),
(16, 'CUS-2016-0081', 'Root Canal', 'RCT', 0, 3500, 0, '2016-08-05 14:41:14', '2016-08-05 16:40:21', 1),
(17, 'CUS-2016-0081', 'Class 1', 'CL1', 1, 450, 0, '2016-08-05 14:44:42', '2016-08-05 16:40:32', 1),
(18, 'CUS-2016-0081', 'ORAL PROPHYLAXIS', 'OP', 0, 450, 0, '2016-08-05 16:39:41', '2016-08-05 16:39:41', 1),
(24, 'CUS-2016-0003', 'Consultation', 'CON', 0, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(25, 'CUS-2016-0003', 'Amalgam', 'A', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(26, 'CUS-2016-0003', 'Apicoectomy', 'AP', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(27, 'CUS-2016-0003', 'Calculus', 'CA', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(28, 'CUS-2016-0003', 'Complete Denture', 'CD', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(29, 'CUS-2016-0003', 'Crown Full', 'CF', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(30, 'CUS-2016-0003', 'Composite Resin', 'CO', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(31, 'CUS-2016-0003', 'Crown Partial', 'CP', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(32, 'CUS-2016-0003', 'Crown Temporary', 'CT', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(33, 'CUS-2016-0003', 'Crown Veneer', 'CV', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(34, 'CUS-2016-0003', 'Flourosis', 'FL', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(35, 'CUS-2016-0003', 'Fixed Partial', 'FP', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(36, 'CUS-2016-0003', 'Fractured Crown', 'FX', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(37, 'CUS-2016-0003', 'Gold Foil', 'GF', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(38, 'CUS-2016-0003', 'Gold Inlay', 'GI', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(39, 'CUS-2016-0003', 'Irregular Alignment', 'IA', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(40, 'CUS-2016-0003', 'Intermediate Rest', 'IR', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(41, 'CUS-2016-0003', 'Jaw Fragment Missing', 'JM', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(42, 'CUS-2016-0003', 'Malocclusion', 'MC', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(43, 'CUS-2016-0003', 'Periodical Desease', 'PD', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(44, 'CUS-2016-0003', 'Present not restored', 'PN', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(45, 'CUS-2016-0003', 'Root Canal filling', 'RF', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(46, 'CUS-2016-0003', 'Rotated', 'RO', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(47, 'CUS-2016-0003', 'Removable Partial', 'RP', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(48, 'CUS-2016-0003', 'Root Tip', 'RT', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(49, 'CUS-2016-0003', 'Any other metal rest', 'SS', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(50, 'CUS-2016-0003', 'Traumatic Avulsion', 'TA', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(51, 'CUS-2016-0003', 'Abrasion', 'A', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(52, 'CUS-2016-0003', 'Caries', 'C', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(53, 'CUS-2016-0003', 'Distal', 'D', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(54, 'CUS-2016-0003', 'Erosion', 'E', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(55, 'CUS-2016-0003', 'Facial', 'F', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(56, 'CUS-2016-0003', 'Gingivitis', 'G', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(57, 'CUS-2016-0003', 'Incisal', 'I', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(58, 'CUS-2016-0003', 'Lingual', 'L', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(59, 'CUS-2016-0003', 'Mesial', 'M', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(60, 'CUS-2016-0003', 'Occlusal', 'O', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(61, 'CUS-2016-0003', 'Unerupted', 'U', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(62, 'CUS-2016-0003', 'Extracted', 'X', 1, 0, 0, '2016-08-23 11:18:47', '2016-08-23 11:18:47', 1),
(63, '', 'g', 'g', 1, 5, 1, '2016-08-23 11:20:25', '2016-09-06 09:34:43', 1),
(64, '1', 'sss', 'ss', 1, 123, 0, '2016-09-06 09:35:47', '2016-09-06 09:35:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'admin@admin.com', '$2y$10$SnGf4uD70id/KBff8zktpuwkLT6YNLQMYVPS4cntg0kBnGSxhOPyO', 1, '2016-01-08 03:01:56', '2016-07-26 10:33:25'),
(2, 'admin1@admin.com', '$2y$10$7gCSxYoCDjSOMjrmC0wWJOh4e8cw0wuBYhKlVOOusMie.xnVfSyr.', 1, '2016-08-23 09:31:07', '2016-08-23 09:31:07'),
(3, 'admin2@admin.com', '$2y$10$Uwp.grfyb5vH5/rR1h7nQ.arVyLMSZOp5FvMmVbbHB8poaxwYqhYi', 1, '2016-08-23 09:37:57', '2016-08-23 09:37:57'),
(4, 'admin4@admin.com', '$2y$10$dPnfvvR.vwy5X0hmDsnPr.mU4u.tZPOPeeD81B6oxu3ogIFADxr0m', 1, '2016-08-23 10:40:19', '2016-08-23 10:40:19'),
(5, 'admin5@admin.com', '$2y$10$H6djrVz98e..FEPVdGZniOIwbXymFja3hoSyzMLLjkRyRJ39HsKMS', 1, '2016-08-23 10:42:13', '2016-08-23 10:42:13'),
(6, 'admin6@admin.com', '$2y$10$Pn7G7kPQuFHDoKUgsWfshOSAXmcX25jPy24N/4LVF8qD8gsyejSGO', 1, '2016-08-23 10:44:07', '2016-08-23 10:44:07'),
(7, 'admin7@admin.com', '$2y$10$h1Wz67cdQGE.lBIgZ6ytxOGpcH3phJNhGoc7Xe7EFo2.xtwedSEvK', 1, '2016-08-23 10:45:09', '2016-08-23 10:45:09'),
(8, 'admin8@admin.com', '$2y$10$dXCwCEn4qtXyM2r0pX32yuKEo2JGCImjT6HkhRCDx8O3AoHxoEEGq', 1, '2016-08-23 10:48:12', '2016-08-23 16:36:31'),
(9, 'admin8@gleent.com', '$2y$10$ANgUiHnJ.5avaGeDBIs8F.LOljHd0CHREANch13931sDPZ4v/apve', 1, '2016-08-23 11:18:47', '2016-08-23 16:17:06'),
(10, 'rossel.barasharig160101@gmail.com', '$2y$10$.3JAP9J1bHZnsgPArv8XtOa9tXqHF2aTGtnYMYkFNTJQ4Gm2wclNm', 1, '2016-08-23 16:41:30', '2016-08-23 16:52:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl_phinxlog`
--
ALTER TABLE `acl_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  ADD KEY `aco_id` (`aco_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tooth_status`
--
ALTER TABLE `tooth_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;
--
-- AUTO_INCREMENT for table `tooth_status`
--
ALTER TABLE `tooth_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

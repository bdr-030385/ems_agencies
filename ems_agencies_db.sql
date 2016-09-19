-- phpMyAdmin SQL Dump
-- version 4.0.10.8
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2016 at 08:09 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ems_agencies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

DROP TABLE IF EXISTS `account_types`;
CREATE TABLE IF NOT EXISTS `account_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Sample Account A', '2016-09-19 12:28:08', '2016-09-19 12:28:08'),
(2, 'Sample Account B', '2016-09-19 12:28:18', '2016-09-19 12:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `acl_phinxlog`
--

DROP TABLE IF EXISTS `acl_phinxlog`;
CREATE TABLE IF NOT EXISTS `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`version`)
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

DROP TABLE IF EXISTS `acos`;
CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=431 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 240),
(2, 1, NULL, NULL, 'Groups', 2, 17),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'isAuthorized', 13, 14),
(14, 1, NULL, NULL, 'Users', 18, 45),
(15, 14, NULL, NULL, 'index', 19, 20),
(17, 14, NULL, NULL, 'view', 21, 22),
(18, 14, NULL, NULL, 'add', 23, 24),
(19, 14, NULL, NULL, 'edit', 25, 26),
(20, 14, NULL, NULL, 'delete', 27, 28),
(21, 14, NULL, NULL, 'login', 29, 30),
(22, 14, NULL, NULL, 'logout', 31, 32),
(23, 14, NULL, NULL, 'isAuthorized', 33, 34),
(24, 1, NULL, NULL, 'Acl', 46, 47),
(25, 1, NULL, NULL, 'Bake', 48, 49),
(26, 1, NULL, NULL, 'DebugKit', 50, 65),
(27, 26, NULL, NULL, 'Panels', 51, 56),
(28, 27, NULL, NULL, 'index', 52, 53),
(29, 27, NULL, NULL, 'view', 54, 55),
(30, 26, NULL, NULL, 'Requests', 57, 60),
(31, 30, NULL, NULL, 'view', 58, 59),
(32, 26, NULL, NULL, 'Toolbar', 61, 64),
(33, 32, NULL, NULL, 'clearCache', 62, 63),
(34, 1, NULL, NULL, 'Migrations', 66, 67),
(100, 1, NULL, NULL, 'ToothStatus', 68, 83),
(101, 100, NULL, NULL, 'index', 69, 70),
(102, 100, NULL, NULL, 'view', 71, 72),
(103, 100, NULL, NULL, 'add', 73, 74),
(105, 100, NULL, NULL, 'delete', 75, 76),
(106, 100, NULL, NULL, 'isAuthorized', 77, 78),
(114, 1, NULL, NULL, 'Appointment', 84, 107),
(115, 114, NULL, NULL, 'index', 85, 86),
(116, 114, NULL, NULL, 'view', 87, 88),
(117, 114, NULL, NULL, 'add', 89, 90),
(118, 114, NULL, NULL, 'edit', 91, 92),
(119, 114, NULL, NULL, 'delete', 93, 94),
(120, 114, NULL, NULL, 'isAuthorized', 95, 96),
(147, 100, NULL, NULL, 'update', 79, 80),
(149, 114, NULL, NULL, 'ajax_load_appointments_by_date', 97, 98),
(150, 114, NULL, NULL, 'json_load_events', 99, 100),
(151, 114, NULL, NULL, 'search', 101, 102),
(197, 114, NULL, NULL, 'updateSyncStatus', 103, 104),
(198, 114, NULL, NULL, 'archiveData', 105, 106),
(218, 100, NULL, NULL, 'archiveData', 81, 82),
(228, 1, NULL, NULL, 'Debug', 108, 113),
(229, 228, NULL, NULL, 'debugFtpGet', 109, 110),
(230, 228, NULL, NULL, 'isAuthorized', 111, 112),
(362, 14, NULL, NULL, 'request_forgot_password', 35, 36),
(363, 14, NULL, NULL, 'forgot_password', 37, 38),
(364, 1, NULL, NULL, 'Agencies', 114, 127),
(365, 364, NULL, NULL, 'index', 115, 116),
(366, 364, NULL, NULL, 'view', 117, 118),
(367, 364, NULL, NULL, 'add', 119, 120),
(368, 364, NULL, NULL, 'edit', 121, 122),
(369, 364, NULL, NULL, 'delete', 123, 124),
(370, 364, NULL, NULL, 'isAuthorized', 125, 126),
(371, 2, NULL, NULL, 'update', 15, 16),
(372, 14, NULL, NULL, 'update', 39, 40),
(373, 14, NULL, NULL, 'test_form', 41, 42),
(374, 1, NULL, NULL, 'AccountTypes', 128, 141),
(375, 374, NULL, NULL, 'index', 129, 130),
(376, 374, NULL, NULL, 'view', 131, 132),
(377, 374, NULL, NULL, 'add', 133, 134),
(378, 374, NULL, NULL, 'edit', 135, 136),
(379, 374, NULL, NULL, 'delete', 137, 138),
(380, 374, NULL, NULL, 'isAuthorized', 139, 140),
(381, 1, NULL, NULL, 'MemberTypes', 142, 155),
(382, 381, NULL, NULL, 'index', 143, 144),
(383, 381, NULL, NULL, 'view', 145, 146),
(384, 381, NULL, NULL, 'add', 147, 148),
(385, 381, NULL, NULL, 'edit', 149, 150),
(386, 381, NULL, NULL, 'delete', 151, 152),
(387, 381, NULL, NULL, 'isAuthorized', 153, 154),
(388, 1, NULL, NULL, 'UserEntities', 156, 169),
(389, 388, NULL, NULL, 'index', 157, 158),
(390, 388, NULL, NULL, 'view', 159, 160),
(391, 388, NULL, NULL, 'add', 161, 162),
(392, 388, NULL, NULL, 'edit', 163, 164),
(393, 388, NULL, NULL, 'delete', 165, 166),
(394, 388, NULL, NULL, 'isAuthorized', 167, 168),
(395, 1, NULL, NULL, 'Vehicles', 170, 183),
(396, 395, NULL, NULL, 'index', 171, 172),
(397, 395, NULL, NULL, 'view', 173, 174),
(398, 395, NULL, NULL, 'add', 175, 176),
(399, 395, NULL, NULL, 'edit', 177, 178),
(400, 395, NULL, NULL, 'delete', 179, 180),
(401, 395, NULL, NULL, 'isAuthorized', 181, 182),
(402, 1, NULL, NULL, 'Colors', 184, 197),
(403, 402, NULL, NULL, 'index', 185, 186),
(404, 402, NULL, NULL, 'view', 187, 188),
(405, 402, NULL, NULL, 'add', 189, 190),
(406, 402, NULL, NULL, 'edit', 191, 192),
(407, 402, NULL, NULL, 'delete', 193, 194),
(408, 402, NULL, NULL, 'isAuthorized', 195, 196),
(409, 1, NULL, NULL, 'UserCustomFields', 198, 211),
(410, 409, NULL, NULL, 'index', 199, 200),
(411, 409, NULL, NULL, 'view', 201, 202),
(412, 409, NULL, NULL, 'add', 203, 204),
(413, 409, NULL, NULL, 'edit', 205, 206),
(414, 409, NULL, NULL, 'delete', 207, 208),
(415, 409, NULL, NULL, 'isAuthorized', 209, 210),
(416, 14, NULL, NULL, 'dashboard', 43, 44),
(417, 1, NULL, NULL, 'VehicleFiles', 212, 225),
(418, 417, NULL, NULL, 'index', 213, 214),
(419, 417, NULL, NULL, 'view', 215, 216),
(420, 417, NULL, NULL, 'add', 217, 218),
(421, 417, NULL, NULL, 'edit', 219, 220),
(422, 417, NULL, NULL, 'delete', 221, 222),
(423, 417, NULL, NULL, 'isAuthorized', 223, 224),
(424, 1, NULL, NULL, 'VehicleTypes', 226, 239),
(425, 424, NULL, NULL, 'index', 227, 228),
(426, 424, NULL, NULL, 'view', 229, 230),
(427, 424, NULL, NULL, 'add', 231, 232),
(428, 424, NULL, NULL, 'edit', 233, 234),
(429, 424, NULL, NULL, 'delete', 235, 236),
(430, 424, NULL, NULL, 'isAuthorized', 237, 238);

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

DROP TABLE IF EXISTS `agencies`;
CREATE TABLE IF NOT EXISTS `agencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_type_id` int(11) NOT NULL,
  `member_type_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emt_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `logo` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `account_type_id`, `member_type_id`, `name`, `emt_number`, `status`, `start_date`, `logo`, `created`, `modified`) VALUES
(1, 1, 1, 'Sample Agency A', '12345', 'Active', '2016-09-19', NULL, '2016-09-19 13:06:06', '2016-09-19 13:22:24'),
(2, 1, 1, 'Sample Agency B', '12345', 'Active', '2016-08-25', NULL, '2016-09-19 13:06:22', '2016-09-19 13:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

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

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Red', '2016-09-18 22:56:25', '2016-09-18 22:56:25'),
(2, 'Blue', '2016-09-18 22:56:25', '2016-09-18 22:56:25'),
(3, 'White', '2016-09-18 22:56:25', '2016-09-18 22:56:25'),
(4, 'Black', '2016-09-18 22:56:25', '2016-09-18 22:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(180) CHARACTER SET latin1 NOT NULL,
  `is_archive` smallint(2) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `is_archive`, `created`, `modified`) VALUES
(1, 'Administrator', 0, '2016-01-08 03:01:24', '2016-01-08 03:01:24'),
(2, 'User', 0, '2016-01-08 03:01:33', '2016-01-08 03:01:33'),
(3, 'Agency', 0, '2016-01-08 03:01:33', '2016-01-08 03:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `member_types`
--

DROP TABLE IF EXISTS `member_types`;
CREATE TABLE IF NOT EXISTS `member_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member_types`
--

INSERT INTO `member_types` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Membership Type A', '2016-09-19 12:28:36', '2016-09-19 12:28:36'),
(2, 'Membership Type B', '2016-09-19 12:28:43', '2016-09-19 12:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `group_id` int(11) NOT NULL,
  `is_archive` int(2) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `is_archive`, `created`, `modified`) VALUES
(1, 'admin@admin.com', '$2y$10$y2XwX1i41eja5Im/.x9Z9OImbZCQNGSEqlr/DR/CQNFq6/dXPAicC', 1, 0, '2016-09-12 03:01:56', '2016-09-12 10:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_custom_fields`
--

DROP TABLE IF EXISTS `user_custom_fields`;
CREATE TABLE IF NOT EXISTS `user_custom_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_entity_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_entities`
--

DROP TABLE IF EXISTS `user_entities`;
CREATE TABLE IF NOT EXISTS `user_entities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agency_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `mi` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mid` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `ssn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `home` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cell_phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cell_phone_carrier` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emergency_contact_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emergency_email` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_entities`
--

INSERT INTO `user_entities` (`id`, `agency_id`, `user_id`, `firstname`, `lastname`, `mi`, `mid`, `gender`, `birthdate`, `ssn`, `address`, `city`, `state`, `zip`, `email`, `phone`, `home`, `work_phone`, `cell_phone`, `cell_phone_carrier`, `emergency_contact_name`, `emergency_email`, `created`, `modified`) VALUES
(1, 1, 1, 'Admin', 'Admin', 'Ad', '123456', 'Male', '2016-09-16', '', '', '', '', '', 'admin@admin.com', '', NULL, NULL, NULL, NULL, NULL, NULL, '2016-09-30 18:37:47', '2016-09-30 18:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agency_id` int(11) NOT NULL,
  `vehicle_type_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `number_vehicle` int(11) NOT NULL,
  `vehicle_year` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `make` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `vin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `part_vehicle_inspection` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `registration_card` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_card` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `expiration_date` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `agency_id`, `vehicle_type_id`, `color_id`, `number_vehicle`, `vehicle_year`, `make`, `model`, `vin`, `part_vehicle_inspection`, `registration_card`, `insurance_card`, `expiration_date`, `created`, `modified`) VALUES
(1, 1, 1, 1, 12345, '2016', 'Sample A', 'Sample Model', '12345', 'Sample A', 'Sample Registration Card', 'Sample Insurance Card', '2016-09-21', '2016-09-19 13:57:30', '2016-09-19 13:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_files`
--

DROP TABLE IF EXISTS `vehicle_files`;
CREATE TABLE IF NOT EXISTS `vehicle_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `filename` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `is_approved` smallint(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modfied` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

DROP TABLE IF EXISTS `vehicle_types`;
CREATE TABLE IF NOT EXISTS `vehicle_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Ambulance', '2016-09-20 22:51:57', '2016-09-20 22:51:57'),
(2, 'EASV', '2016-09-20 22:51:57', '2016-09-20 22:51:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

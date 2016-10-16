-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 09:48 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems_agencies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

DROP TABLE IF EXISTS `account_types`;
CREATE TABLE `account_types` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

DROP TABLE IF EXISTS `acos`;
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
(1, NULL, NULL, NULL, 'controllers', 1, 420),
(2, 1, NULL, NULL, 'Groups', 2, 17),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'isAuthorized', 13, 14),
(14, 1, NULL, NULL, 'Users', 18, 47),
(15, 14, NULL, NULL, 'index', 19, 20),
(17, 14, NULL, NULL, 'view', 21, 22),
(18, 14, NULL, NULL, 'add', 23, 24),
(19, 14, NULL, NULL, 'edit', 25, 26),
(20, 14, NULL, NULL, 'delete', 27, 28),
(21, 14, NULL, NULL, 'login', 29, 30),
(22, 14, NULL, NULL, 'logout', 31, 32),
(23, 14, NULL, NULL, 'isAuthorized', 33, 34),
(24, 1, NULL, NULL, 'Acl', 48, 49),
(25, 1, NULL, NULL, 'Bake', 50, 51),
(26, 1, NULL, NULL, 'DebugKit', 52, 67),
(27, 26, NULL, NULL, 'Panels', 53, 58),
(28, 27, NULL, NULL, 'index', 54, 55),
(29, 27, NULL, NULL, 'view', 56, 57),
(30, 26, NULL, NULL, 'Requests', 59, 62),
(31, 30, NULL, NULL, 'view', 60, 61),
(32, 26, NULL, NULL, 'Toolbar', 63, 66),
(33, 32, NULL, NULL, 'clearCache', 64, 65),
(34, 1, NULL, NULL, 'Migrations', 68, 69),
(100, 1, NULL, NULL, 'ToothStatus', 70, 85),
(101, 100, NULL, NULL, 'index', 71, 72),
(102, 100, NULL, NULL, 'view', 73, 74),
(103, 100, NULL, NULL, 'add', 75, 76),
(105, 100, NULL, NULL, 'delete', 77, 78),
(106, 100, NULL, NULL, 'isAuthorized', 79, 80),
(114, 1, NULL, NULL, 'Appointment', 86, 109),
(115, 114, NULL, NULL, 'index', 87, 88),
(116, 114, NULL, NULL, 'view', 89, 90),
(117, 114, NULL, NULL, 'add', 91, 92),
(118, 114, NULL, NULL, 'edit', 93, 94),
(119, 114, NULL, NULL, 'delete', 95, 96),
(120, 114, NULL, NULL, 'isAuthorized', 97, 98),
(147, 100, NULL, NULL, 'update', 81, 82),
(149, 114, NULL, NULL, 'ajax_load_appointments_by_date', 99, 100),
(150, 114, NULL, NULL, 'json_load_events', 101, 102),
(151, 114, NULL, NULL, 'search', 103, 104),
(197, 114, NULL, NULL, 'updateSyncStatus', 105, 106),
(198, 114, NULL, NULL, 'archiveData', 107, 108),
(218, 100, NULL, NULL, 'archiveData', 83, 84),
(228, 1, NULL, NULL, 'Debug', 110, 117),
(229, 228, NULL, NULL, 'debugFtpGet', 111, 112),
(230, 228, NULL, NULL, 'isAuthorized', 113, 114),
(362, 14, NULL, NULL, 'request_forgot_password', 35, 36),
(363, 14, NULL, NULL, 'forgot_password', 37, 38),
(364, 1, NULL, NULL, 'Agencies', 118, 133),
(365, 364, NULL, NULL, 'index', 119, 120),
(366, 364, NULL, NULL, 'view', 121, 122),
(367, 364, NULL, NULL, 'add', 123, 124),
(368, 364, NULL, NULL, 'edit', 125, 126),
(369, 364, NULL, NULL, 'delete', 127, 128),
(370, 364, NULL, NULL, 'isAuthorized', 129, 130),
(371, 2, NULL, NULL, 'update', 15, 16),
(372, 14, NULL, NULL, 'update', 39, 40),
(373, 14, NULL, NULL, 'test_form', 41, 42),
(374, 1, NULL, NULL, 'AccountTypes', 134, 147),
(375, 374, NULL, NULL, 'index', 135, 136),
(376, 374, NULL, NULL, 'view', 137, 138),
(377, 374, NULL, NULL, 'add', 139, 140),
(378, 374, NULL, NULL, 'edit', 141, 142),
(379, 374, NULL, NULL, 'delete', 143, 144),
(380, 374, NULL, NULL, 'isAuthorized', 145, 146),
(381, 1, NULL, NULL, 'MemberTypes', 148, 161),
(382, 381, NULL, NULL, 'index', 149, 150),
(383, 381, NULL, NULL, 'view', 151, 152),
(384, 381, NULL, NULL, 'add', 153, 154),
(385, 381, NULL, NULL, 'edit', 155, 156),
(386, 381, NULL, NULL, 'delete', 157, 158),
(387, 381, NULL, NULL, 'isAuthorized', 159, 160),
(388, 1, NULL, NULL, 'UserEntities', 162, 183),
(389, 388, NULL, NULL, 'index', 163, 164),
(390, 388, NULL, NULL, 'view', 165, 166),
(391, 388, NULL, NULL, 'add', 167, 168),
(392, 388, NULL, NULL, 'edit', 169, 170),
(393, 388, NULL, NULL, 'delete', 171, 172),
(394, 388, NULL, NULL, 'isAuthorized', 173, 174),
(395, 1, NULL, NULL, 'Vehicles', 184, 205),
(396, 395, NULL, NULL, 'index', 185, 186),
(397, 395, NULL, NULL, 'view', 187, 188),
(398, 395, NULL, NULL, 'add', 189, 190),
(399, 395, NULL, NULL, 'edit', 191, 192),
(400, 395, NULL, NULL, 'delete', 193, 194),
(401, 395, NULL, NULL, 'isAuthorized', 195, 196),
(402, 1, NULL, NULL, 'Colors', 206, 219),
(403, 402, NULL, NULL, 'index', 207, 208),
(404, 402, NULL, NULL, 'view', 209, 210),
(405, 402, NULL, NULL, 'add', 211, 212),
(406, 402, NULL, NULL, 'edit', 213, 214),
(407, 402, NULL, NULL, 'delete', 215, 216),
(408, 402, NULL, NULL, 'isAuthorized', 217, 218),
(409, 1, NULL, NULL, 'UserCustomFields', 220, 233),
(410, 409, NULL, NULL, 'index', 221, 222),
(411, 409, NULL, NULL, 'view', 223, 224),
(412, 409, NULL, NULL, 'add', 225, 226),
(413, 409, NULL, NULL, 'edit', 227, 228),
(414, 409, NULL, NULL, 'delete', 229, 230),
(415, 409, NULL, NULL, 'isAuthorized', 231, 232),
(416, 14, NULL, NULL, 'dashboard', 43, 44),
(417, 1, NULL, NULL, 'VehicleFiles', 234, 247),
(418, 417, NULL, NULL, 'index', 235, 236),
(419, 417, NULL, NULL, 'view', 237, 238),
(420, 417, NULL, NULL, 'add', 239, 240),
(421, 417, NULL, NULL, 'edit', 241, 242),
(422, 417, NULL, NULL, 'delete', 243, 244),
(423, 417, NULL, NULL, 'isAuthorized', 245, 246),
(424, 1, NULL, NULL, 'VehicleTypes', 248, 261),
(425, 424, NULL, NULL, 'index', 249, 250),
(426, 424, NULL, NULL, 'view', 251, 252),
(427, 424, NULL, NULL, 'add', 253, 254),
(428, 424, NULL, NULL, 'edit', 255, 256),
(429, 424, NULL, NULL, 'delete', 257, 258),
(430, 424, NULL, NULL, 'isAuthorized', 259, 260),
(431, 364, NULL, NULL, 'add_users', 131, 132),
(432, 14, NULL, NULL, 'user_dashboard', 45, 46),
(433, 1, NULL, NULL, 'Announcements', 262, 275),
(434, 433, NULL, NULL, 'index', 263, 264),
(435, 433, NULL, NULL, 'view', 265, 266),
(436, 433, NULL, NULL, 'add', 267, 268),
(437, 433, NULL, NULL, 'edit', 269, 270),
(438, 433, NULL, NULL, 'delete', 271, 272),
(439, 433, NULL, NULL, 'isAuthorized', 273, 274),
(440, 1, NULL, NULL, 'UserSettings', 276, 281),
(441, 440, NULL, NULL, 'ajax_update_member_push_notification', 277, 278),
(442, 440, NULL, NULL, 'isAuthorized', 279, 280),
(443, 1, NULL, NULL, 'Vendors', 282, 305),
(444, 443, NULL, NULL, 'index', 283, 284),
(445, 443, NULL, NULL, 'view', 285, 286),
(446, 443, NULL, NULL, 'add', 287, 288),
(447, 443, NULL, NULL, 'edit', 289, 290),
(448, 443, NULL, NULL, 'delete', 291, 292),
(449, 443, NULL, NULL, 'isAuthorized', 293, 294),
(450, 1, NULL, NULL, 'ItemExpirations', 306, 319),
(451, 450, NULL, NULL, 'index', 307, 308),
(452, 450, NULL, NULL, 'view', 309, 310),
(453, 450, NULL, NULL, 'add', 311, 312),
(454, 450, NULL, NULL, 'edit', 313, 314),
(455, 450, NULL, NULL, 'delete', 315, 316),
(456, 450, NULL, NULL, 'isAuthorized', 317, 318),
(457, 1, NULL, NULL, 'VehicleCompartments', 320, 359),
(458, 457, NULL, NULL, 'index', 321, 322),
(459, 457, NULL, NULL, 'view', 323, 324),
(460, 457, NULL, NULL, 'add', 325, 326),
(461, 457, NULL, NULL, 'edit', 327, 328),
(462, 457, NULL, NULL, 'delete', 329, 330),
(463, 457, NULL, NULL, 'isAuthorized', 331, 332),
(464, 1, NULL, NULL, 'VendorItems', 360, 373),
(465, 464, NULL, NULL, 'index', 361, 362),
(466, 464, NULL, NULL, 'view', 363, 364),
(467, 464, NULL, NULL, 'add', 365, 366),
(468, 464, NULL, NULL, 'edit', 367, 368),
(469, 464, NULL, NULL, 'delete', 369, 370),
(470, 464, NULL, NULL, 'isAuthorized', 371, 372),
(471, 1, NULL, NULL, 'ItemCategories', 374, 389),
(472, 471, NULL, NULL, 'index', 375, 376),
(473, 471, NULL, NULL, 'view', 377, 378),
(474, 471, NULL, NULL, 'add', 379, 380),
(475, 471, NULL, NULL, 'edit', 381, 382),
(476, 471, NULL, NULL, 'delete', 383, 384),
(477, 471, NULL, NULL, 'isAuthorized', 385, 386),
(478, 1, NULL, NULL, 'Items', 390, 405),
(479, 478, NULL, NULL, 'index', 391, 392),
(480, 478, NULL, NULL, 'view', 393, 394),
(481, 478, NULL, NULL, 'add', 395, 396),
(482, 478, NULL, NULL, 'edit', 397, 398),
(483, 478, NULL, NULL, 'delete', 399, 400),
(484, 478, NULL, NULL, 'isAuthorized', 401, 402),
(485, 471, NULL, NULL, 'load_item_category_by_agency_id', 387, 388),
(486, 478, NULL, NULL, 'add_vendor_item', 403, 404),
(488, 443, NULL, NULL, 'load_vendor_by_agency_id', 295, 296),
(489, 457, NULL, NULL, 'vehicle', 333, 334),
(490, 457, NULL, NULL, 'vehicle_add', 335, 336),
(491, 457, NULL, NULL, 'subcompartments', 337, 338),
(492, 457, NULL, NULL, 'ajax_load_main_compartment', 339, 340),
(493, 457, NULL, NULL, 'ajax_load_items_by_category', 341, 342),
(494, 457, NULL, NULL, 'ajax_add_sub_compartment', 343, 344),
(495, 457, NULL, NULL, 'ajax_load_vehicle_sub_compartment', 345, 346),
(496, 1, NULL, NULL, 'CompartmentItems', 406, 419),
(497, 496, NULL, NULL, 'index', 407, 408),
(498, 496, NULL, NULL, 'view', 409, 410),
(499, 496, NULL, NULL, 'add', 411, 412),
(500, 496, NULL, NULL, 'edit', 413, 414),
(501, 496, NULL, NULL, 'delete', 415, 416),
(502, 496, NULL, NULL, 'isAuthorized', 417, 418),
(503, 228, NULL, NULL, 'debugThreaded', 115, 116),
(504, 457, NULL, NULL, 'ajax_add_item_compartment', 347, 348),
(505, 457, NULL, NULL, 'delete_compartment', 349, 350),
(506, 457, NULL, NULL, 'lookForChildCompartment', 351, 352),
(507, 457, NULL, NULL, 'ajax_delete_compartment_id', 353, 354),
(508, 388, NULL, NULL, 'agency_users', 175, 176),
(509, 388, NULL, NULL, 'agency_add', 177, 178),
(510, 457, NULL, NULL, 'ajax_load_copyable_vehicle_compartment', 355, 356),
(511, 395, NULL, NULL, 'agency_vehicles', 197, 198),
(512, 395, NULL, NULL, 'agency_add', 199, 200),
(513, 395, NULL, NULL, 'agency_edit', 201, 202),
(514, 457, NULL, NULL, 'ajax_save_copied_compartment', 357, 358),
(515, 388, NULL, NULL, 'agency_edit', 179, 180),
(516, 388, NULL, NULL, 'agency_delete', 181, 182),
(517, 395, NULL, NULL, 'agency_delete', 203, 204),
(518, 443, NULL, NULL, 'agency_vendors', 297, 298),
(519, 443, NULL, NULL, 'agency_add', 299, 300),
(520, 443, NULL, NULL, 'agency_edit', 301, 302),
(521, 443, NULL, NULL, 'agency_delete', 303, 304);

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

DROP TABLE IF EXISTS `agencies`;
CREATE TABLE `agencies` (
  `id` int(11) NOT NULL,
  `account_type_id` int(11) NOT NULL,
  `member_type_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emt_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `logo` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `account_type_id`, `member_type_id`, `name`, `emt_number`, `status`, `start_date`, `logo`, `created`, `modified`) VALUES
(1, 1, 1, 'Sample Agency A', '12345', 'Active', '2016-09-19', NULL, '2016-09-19 13:06:06', '2016-09-19 13:22:24'),
(2, 1, 1, 'Sample Agency B', '12345', 'Active', '2016-08-25', NULL, '2016-09-19 13:06:22', '2016-09-19 13:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `user_entity_id` int(11) NOT NULL,
  `title` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
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
(1, NULL, 'Groups', 1, NULL, 1, 58),
(2, NULL, 'Groups', 2, NULL, 59, 60),
(3, 1, 'Users', 1, NULL, 2, 3),
(4, 1, 'Users', 1, NULL, 54, 55),
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
(28, 1, 'Users', 10, NULL, 50, 51),
(29, 1, 'Users', 3, NULL, 52, 53),
(30, 1, 'Users', 4, NULL, 56, 57);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
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
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `compartment_items`
--

DROP TABLE IF EXISTS `compartment_items`;
CREATE TABLE `compartment_items` (
  `id` int(11) NOT NULL,
  `vehicle_compartment_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `compartment_items`
--

INSERT INTO `compartment_items` (`id`, `vehicle_compartment_id`, `item_id`, `created`, `modified`) VALUES
(12, 6, 2, '2016-10-11 00:10:55', '2016-10-11 00:10:55'),
(13, 6, 1, '2016-10-11 00:10:56', '2016-10-11 00:10:56'),
(14, 3, 2, '2016-10-11 00:14:58', '2016-10-11 00:14:58'),
(15, 12, 2, '2016-10-14 01:19:26', '2016-10-14 01:19:26'),
(16, 12, 1, '2016-10-14 01:19:26', '2016-10-14 01:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(180) CHARACTER SET latin1 NOT NULL,
  `is_archive` smallint(2) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `is_archive`, `created`, `modified`) VALUES
(1, 'Super Admin', 0, '2016-01-08 03:01:24', '2016-01-08 03:01:24'),
(2, 'Administrator', 0, '2016-01-08 03:01:33', '2016-01-08 03:01:33'),
(3, 'Member', 0, '2016-01-08 03:01:33', '2016-01-08 03:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `item_category_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `reordering_point` int(11) NOT NULL,
  `reordering_point_category` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `reordering_amount` float NOT NULL,
  `reordering_amount_category` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `expiration_date` date NOT NULL,
  `part_800` int(11) NOT NULL,
  `is_part_800` int(2) NOT NULL,
  `has_expiration` int(2) NOT NULL,
  `front_stockroom` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `back_stockroom` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `rig` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `easv` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `agency_id`, `name`, `item_category_id`, `quantity`, `reordering_point`, `reordering_point_category`, `reordering_amount`, `reordering_amount_category`, `vendor_id`, `expiration_date`, `part_800`, `is_part_800`, `has_expiration`, `front_stockroom`, `back_stockroom`, `rig`, `easv`, `note`, `created`, `modified`) VALUES
(1, 1, 'test', 1, 1, 1, 'Case', 1, 'Case', 1, '2016-09-28', 1, 0, 0, '1', '1', '1', '1', '1', '2016-09-28 01:18:22', '2016-09-28 01:18:22'),
(2, 1, 'ssssss', 1, 123, 123, 'Case', 123, 'Case', 1, '1970-01-01', 55, 1, 1, '123', '123', '123', '123', '123', '2016-09-29 23:40:48', '2016-09-29 23:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

DROP TABLE IF EXISTS `item_categories`;
CREATE TABLE `item_categories` (
  `id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `agency_id`, `name`, `created`, `modified`) VALUES
(1, 1, 'Test', '2016-09-27 22:39:05', '2016-09-27 22:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `item_expirations`
--

DROP TABLE IF EXISTS `item_expirations`;
CREATE TABLE `item_expirations` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `expiration_date` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_types`
--

DROP TABLE IF EXISTS `member_types`;
CREATE TABLE `member_types` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `group_id` int(11) NOT NULL,
  `is_archive` int(2) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `is_archive`, `created`, `modified`) VALUES
(1, 'admin@admin.com', '$2y$10$y2XwX1i41eja5Im/.x9Z9OImbZCQNGSEqlr/DR/CQNFq6/dXPAicC', 1, 0, '2016-09-12 03:01:56', '2016-09-22 06:53:30'),
(3, 'sample_member_a@gmail.com', '$2y$10$rcaVA7hRWw30StGwPxnxeuzGg04VVS4GBQsU.2nCLqfY5hegYPmU2', 1, 0, '2016-09-22 02:08:44', '2016-09-22 02:08:44'),
(4, 'test@test.com', '$2y$10$y2XwX1i41eja5Im/.x9Z9OImbZCQNGSEqlr/DR/CQNFq6/dXPAicC', 2, 0, '2016-09-23 04:37:31', '2016-09-23 04:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_custom_fields`
--

DROP TABLE IF EXISTS `user_custom_fields`;
CREATE TABLE `user_custom_fields` (
  `id` int(11) NOT NULL,
  `user_entity_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_custom_fields`
--

INSERT INTO `user_custom_fields` (`id`, `user_entity_id`, `name`, `value`, `created`, `modified`) VALUES
(16, 3, 'Custom Field CDA', 'Custom Value CDA', '2016-09-23 04:53:31', '2016-09-23 04:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_entities`
--

DROP TABLE IF EXISTS `user_entities`;
CREATE TABLE `user_entities` (
  `id` int(11) NOT NULL,
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
  `photo` text COLLATE utf8_unicode_ci,
  `enable_push_notification` smallint(2) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_entities`
--

INSERT INTO `user_entities` (`id`, `agency_id`, `user_id`, `firstname`, `lastname`, `mi`, `mid`, `gender`, `birthdate`, `ssn`, `address`, `city`, `state`, `zip`, `email`, `phone`, `home`, `work_phone`, `cell_phone`, `cell_phone_carrier`, `emergency_contact_name`, `emergency_email`, `photo`, `enable_push_notification`, `created`, `modified`) VALUES
(1, 1, 1, 'Admin', 'Admin', 'Ad', '123456', '0', '2016-09-16', '34234', 'test', 'test', 'test', '23423', 'admin@admin.com', '3243', '234', '234', '234', '234', '234', '234', NULL, 0, '2016-09-30 18:37:47', '2016-09-22 07:33:08'),
(2, 2, 3, 'Sample User B', 'Sample User B', 'Sa', 'Sample User B', '0', '2016-09-21', 'Sample User B', 'Sample User B', 'Sample User B', 'Sample User B', 'Sample User B', 'sample_member_a@gmail.com', '31223', '3123', '31231', '3131', '3123', '312', 'Sample User B', NULL, 0, '2016-09-22 02:08:44', '2016-09-22 02:08:44'),
(3, 1, 4, 'test', 'test', 'te', '2423423', '0', '2016-08-31', '34234', 'Test', 'test', 'test', '32423', 'test@test.com', '424234', 'test', '34234', '34234', '4234', '342', '423', NULL, 0, '2016-09-23 04:37:31', '2016-09-23 04:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `vehicle_type_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `number_vehicle` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `vehicle_year` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `make` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `vin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `part_vehicle_inspection` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `registration_card` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `registration_card_expiration_date` date NOT NULL,
  `insurance_card` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_card_expiration_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `agency_id`, `vehicle_type_id`, `color_id`, `number_vehicle`, `vehicle_year`, `make`, `model`, `vin`, `part_vehicle_inspection`, `registration_card`, `registration_card_expiration_date`, `insurance_card`, `insurance_card_expiration_date`, `expiration_date`, `created`, `modified`) VALUES
(1, 1, 1, 1, '12345', '2016', 'Sample A', 'Sample Model', '12345', 'Yes', 'Sample Registration Card', '0000-00-00', 'Sample Insurance Card', '0000-00-00', '2016-09-21', '2016-09-19 13:57:30', '2016-10-10 23:19:47'),
(2, 1, 1, 1, 'A51DS', '2016', 'Test', 'Test', '123', 'Yes', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '2016-10-12 00:01:51', '2016-10-12 00:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_compartments`
--

DROP TABLE IF EXISTS `vehicle_compartments`;
CREATE TABLE `vehicle_compartments` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `name` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `allow_seal` smallint(2) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicle_compartments`
--

INSERT INTO `vehicle_compartments` (`id`, `parent_id`, `vehicle_id`, `name`, `description`, `allow_seal`, `sort`, `lft`, `rght`, `created`, `modified`) VALUES
(1, 0, 1, 'Main', 'test only', 1, 1, 8, 8, '2016-10-05 22:09:18', '2016-10-05 22:09:18'),
(2, 0, 1, 'aaaaa', 'abc', 1, 2, 8, 8, '2016-10-05 22:09:36', '2016-10-05 22:09:36'),
(3, 1, 1, 'Level 2.1', 'SubCompartment', 1, 0, 8, 8, '2016-10-06 00:33:51', '2016-10-06 00:33:51'),
(4, 1, 1, 'Level 2.2', 'SubCompartment', 1, 0, 8, 8, '2016-10-06 01:22:10', '2016-10-06 01:22:10'),
(5, 4, 1, 'Level 3', 'SubCompartment', 1, 0, 0, 5, '2016-10-08 00:36:31', '2016-10-08 00:36:31'),
(6, 5, 1, 'Level 4', 'SubCompartment', 1, 0, 1, 2, '2016-10-08 01:00:15', '2016-10-08 01:00:15'),
(7, 5, 1, 'Level 4.2', 'SubCompartment', 1, 0, 3, 4, '2016-10-08 01:06:26', '2016-10-08 01:06:26'),
(8, 1, 1, 'Level 5', 'SubCompartment', 1, 0, 6, 7, '2016-10-08 02:01:19', '2016-10-08 02:01:19'),
(9, 0, 2, 'Test 1', 'Test', 1, 1, 9, 16, '2016-10-13 23:30:38', '2016-10-13 23:30:38'),
(11, 9, 2, 'Main', 'test only', 1, 1, 12, 13, '2016-10-05 22:09:18', '2016-10-05 22:09:18'),
(12, 9, 2, 'Level 4', 'SubCompartment', 1, 0, 14, 15, '2016-10-08 01:00:15', '2016-10-08 01:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_files`
--

DROP TABLE IF EXISTS `vehicle_files`;
CREATE TABLE `vehicle_files` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `filename` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `is_approved` smallint(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modfied` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

DROP TABLE IF EXISTS `vehicle_types`;
CREATE TABLE `vehicle_types` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Ambulance', '2016-09-20 22:51:57', '2016-09-20 22:51:57'),
(2, 'EASV', '2016-09-20 22:51:57', '2016-09-20 22:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `vendor_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_person` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_person_phone` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_person_email` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tearms` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `agency_id`, `vendor_name`, `phone_number`, `address`, `city`, `state`, `zip`, `email`, `website`, `contact_person`, `contact_person_phone`, `contact_person_email`, `tearms`, `note`, `created`, `modified`) VALUES
(1, 2, 'Sample Vendor A', 'samplevendor@gmail.com', '12345', 'Sample Address', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2016-09-23 05:08:26', '2016-09-23 05:08:26'),
(2, 1, 'Sample Vendor B', 'samplevendorb@gmail.com', '345345', 'Test a', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2016-09-23 05:08:50', '2016-09-23 05:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_items`
--

DROP TABLE IF EXISTS `vendor_items`;
CREATE TABLE `vendor_items` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` text COLLATE utf8_unicode_ci NOT NULL,
  `barcode_number` text COLLATE utf8_unicode_ci NOT NULL,
  `website_link` text COLLATE utf8_unicode_ci NOT NULL,
  `pack_price` float(11,2) NOT NULL,
  `pack_price_uom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pack_quantity` int(11) NOT NULL,
  `pack_quantity_uom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sub_pack_quantity` int(11) NOT NULL,
  `sub_pack_quantity_uom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_preferd_vendor` smallint(2) NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendor_items`
--

INSERT INTO `vendor_items` (`id`, `vendor_id`, `item_id`, `item_name`, `item_number`, `barcode_number`, `website_link`, `pack_price`, `pack_price_uom`, `pack_quantity`, `pack_quantity_uom`, `sub_pack_quantity`, `sub_pack_quantity_uom`, `is_preferd_vendor`, `note`, `created`, `modified`) VALUES
(1, 2, 1, 'asdf', '123', '123', '123', 123.00, '123', 123, '123', 123, '123', 1, '123', '2016-09-29 01:23:38', '2016-09-29 01:23:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
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
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compartment_items`
--
ALTER TABLE `compartment_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_expirations`
--
ALTER TABLE `item_expirations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_types`
--
ALTER TABLE `member_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_custom_fields`
--
ALTER TABLE `user_custom_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_entities`
--
ALTER TABLE `user_entities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_compartments`
--
ALTER TABLE `vehicle_compartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_files`
--
ALTER TABLE `vehicle_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_items`
--
ALTER TABLE `vendor_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;
--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `compartment_items`
--
ALTER TABLE `compartment_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `item_expirations`
--
ALTER TABLE `item_expirations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member_types`
--
ALTER TABLE `member_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_custom_fields`
--
ALTER TABLE `user_custom_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_entities`
--
ALTER TABLE `user_entities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vehicle_compartments`
--
ALTER TABLE `vehicle_compartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vehicle_files`
--
ALTER TABLE `vehicle_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendor_items`
--
ALTER TABLE `vendor_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

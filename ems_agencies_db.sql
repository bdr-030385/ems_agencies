-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 06:52 PM
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
(1, 'Super Administrator', '2016-09-19 12:28:08', '2016-10-05 21:33:35'),
(2, 'Administrator', '2016-09-19 12:28:18', '2016-10-05 21:34:03');

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
(1, NULL, NULL, NULL, 'controllers', 1, 500),
(2, 1, NULL, NULL, 'Groups', 2, 17),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'isAuthorized', 13, 14),
(14, 1, NULL, NULL, 'Users', 18, 49),
(15, 14, NULL, NULL, 'index', 19, 20),
(17, 14, NULL, NULL, 'view', 21, 22),
(18, 14, NULL, NULL, 'add', 23, 24),
(19, 14, NULL, NULL, 'edit', 25, 26),
(20, 14, NULL, NULL, 'delete', 27, 28),
(21, 14, NULL, NULL, 'login', 29, 30),
(22, 14, NULL, NULL, 'logout', 31, 32),
(23, 14, NULL, NULL, 'isAuthorized', 33, 34),
(24, 1, NULL, NULL, 'Acl', 50, 51),
(25, 1, NULL, NULL, 'Bake', 52, 53),
(26, 1, NULL, NULL, 'DebugKit', 54, 69),
(27, 26, NULL, NULL, 'Panels', 55, 60),
(28, 27, NULL, NULL, 'index', 56, 57),
(29, 27, NULL, NULL, 'view', 58, 59),
(30, 26, NULL, NULL, 'Requests', 61, 64),
(31, 30, NULL, NULL, 'view', 62, 63),
(32, 26, NULL, NULL, 'Toolbar', 65, 68),
(33, 32, NULL, NULL, 'clearCache', 66, 67),
(34, 1, NULL, NULL, 'Migrations', 70, 71),
(100, 1, NULL, NULL, 'ToothStatus', 72, 87),
(101, 100, NULL, NULL, 'index', 73, 74),
(102, 100, NULL, NULL, 'view', 75, 76),
(103, 100, NULL, NULL, 'add', 77, 78),
(105, 100, NULL, NULL, 'delete', 79, 80),
(106, 100, NULL, NULL, 'isAuthorized', 81, 82),
(114, 1, NULL, NULL, 'Appointment', 88, 111),
(115, 114, NULL, NULL, 'index', 89, 90),
(116, 114, NULL, NULL, 'view', 91, 92),
(117, 114, NULL, NULL, 'add', 93, 94),
(118, 114, NULL, NULL, 'edit', 95, 96),
(119, 114, NULL, NULL, 'delete', 97, 98),
(120, 114, NULL, NULL, 'isAuthorized', 99, 100),
(147, 100, NULL, NULL, 'update', 83, 84),
(149, 114, NULL, NULL, 'ajax_load_appointments_by_date', 101, 102),
(150, 114, NULL, NULL, 'json_load_events', 103, 104),
(151, 114, NULL, NULL, 'search', 105, 106),
(197, 114, NULL, NULL, 'updateSyncStatus', 107, 108),
(198, 114, NULL, NULL, 'archiveData', 109, 110),
(218, 100, NULL, NULL, 'archiveData', 85, 86),
(228, 1, NULL, NULL, 'Debug', 112, 119),
(229, 228, NULL, NULL, 'debugFtpGet', 113, 114),
(230, 228, NULL, NULL, 'isAuthorized', 115, 116),
(362, 14, NULL, NULL, 'request_forgot_password', 35, 36),
(363, 14, NULL, NULL, 'forgot_password', 37, 38),
(364, 1, NULL, NULL, 'Agencies', 120, 137),
(365, 364, NULL, NULL, 'index', 121, 122),
(366, 364, NULL, NULL, 'view', 123, 124),
(367, 364, NULL, NULL, 'add', 125, 126),
(368, 364, NULL, NULL, 'edit', 127, 128),
(369, 364, NULL, NULL, 'delete', 129, 130),
(370, 364, NULL, NULL, 'isAuthorized', 131, 132),
(371, 2, NULL, NULL, 'update', 15, 16),
(372, 14, NULL, NULL, 'update', 39, 40),
(373, 14, NULL, NULL, 'test_form', 41, 42),
(374, 1, NULL, NULL, 'AccountTypes', 138, 151),
(375, 374, NULL, NULL, 'index', 139, 140),
(376, 374, NULL, NULL, 'view', 141, 142),
(377, 374, NULL, NULL, 'add', 143, 144),
(378, 374, NULL, NULL, 'edit', 145, 146),
(379, 374, NULL, NULL, 'delete', 147, 148),
(380, 374, NULL, NULL, 'isAuthorized', 149, 150),
(381, 1, NULL, NULL, 'MemberTypes', 152, 165),
(382, 381, NULL, NULL, 'index', 153, 154),
(383, 381, NULL, NULL, 'view', 155, 156),
(384, 381, NULL, NULL, 'add', 157, 158),
(385, 381, NULL, NULL, 'edit', 159, 160),
(386, 381, NULL, NULL, 'delete', 161, 162),
(387, 381, NULL, NULL, 'isAuthorized', 163, 164),
(388, 1, NULL, NULL, 'UserEntities', 166, 187),
(389, 388, NULL, NULL, 'index', 167, 168),
(390, 388, NULL, NULL, 'view', 169, 170),
(391, 388, NULL, NULL, 'add', 171, 172),
(392, 388, NULL, NULL, 'edit', 173, 174),
(393, 388, NULL, NULL, 'delete', 175, 176),
(394, 388, NULL, NULL, 'isAuthorized', 177, 178),
(395, 1, NULL, NULL, 'Vehicles', 188, 221),
(396, 395, NULL, NULL, 'index', 189, 190),
(397, 395, NULL, NULL, 'view', 191, 192),
(398, 395, NULL, NULL, 'add', 193, 194),
(399, 395, NULL, NULL, 'edit', 195, 196),
(400, 395, NULL, NULL, 'delete', 197, 198),
(401, 395, NULL, NULL, 'isAuthorized', 199, 200),
(402, 1, NULL, NULL, 'Colors', 222, 235),
(403, 402, NULL, NULL, 'index', 223, 224),
(404, 402, NULL, NULL, 'view', 225, 226),
(405, 402, NULL, NULL, 'add', 227, 228),
(406, 402, NULL, NULL, 'edit', 229, 230),
(407, 402, NULL, NULL, 'delete', 231, 232),
(408, 402, NULL, NULL, 'isAuthorized', 233, 234),
(409, 1, NULL, NULL, 'UserCustomFields', 236, 249),
(410, 409, NULL, NULL, 'index', 237, 238),
(411, 409, NULL, NULL, 'view', 239, 240),
(412, 409, NULL, NULL, 'add', 241, 242),
(413, 409, NULL, NULL, 'edit', 243, 244),
(414, 409, NULL, NULL, 'delete', 245, 246),
(415, 409, NULL, NULL, 'isAuthorized', 247, 248),
(416, 14, NULL, NULL, 'dashboard', 43, 44),
(417, 1, NULL, NULL, 'VehicleFiles', 250, 263),
(418, 417, NULL, NULL, 'index', 251, 252),
(419, 417, NULL, NULL, 'view', 253, 254),
(420, 417, NULL, NULL, 'add', 255, 256),
(421, 417, NULL, NULL, 'edit', 257, 258),
(422, 417, NULL, NULL, 'delete', 259, 260),
(423, 417, NULL, NULL, 'isAuthorized', 261, 262),
(424, 1, NULL, NULL, 'VehicleTypes', 264, 277),
(425, 424, NULL, NULL, 'index', 265, 266),
(426, 424, NULL, NULL, 'view', 267, 268),
(427, 424, NULL, NULL, 'add', 269, 270),
(428, 424, NULL, NULL, 'edit', 271, 272),
(429, 424, NULL, NULL, 'delete', 273, 274),
(430, 424, NULL, NULL, 'isAuthorized', 275, 276),
(431, 364, NULL, NULL, 'add_users', 133, 134),
(432, 14, NULL, NULL, 'user_dashboard', 45, 46),
(433, 1, NULL, NULL, 'Announcements', 278, 291),
(434, 433, NULL, NULL, 'index', 279, 280),
(435, 433, NULL, NULL, 'view', 281, 282),
(436, 433, NULL, NULL, 'add', 283, 284),
(437, 433, NULL, NULL, 'edit', 285, 286),
(438, 433, NULL, NULL, 'delete', 287, 288),
(439, 433, NULL, NULL, 'isAuthorized', 289, 290),
(440, 1, NULL, NULL, 'UserSettings', 292, 297),
(441, 440, NULL, NULL, 'ajax_update_member_push_notification', 293, 294),
(442, 440, NULL, NULL, 'isAuthorized', 295, 296),
(443, 1, NULL, NULL, 'Vendors', 298, 321),
(444, 443, NULL, NULL, 'index', 299, 300),
(445, 443, NULL, NULL, 'view', 301, 302),
(446, 443, NULL, NULL, 'add', 303, 304),
(447, 443, NULL, NULL, 'edit', 305, 306),
(448, 443, NULL, NULL, 'delete', 307, 308),
(449, 443, NULL, NULL, 'isAuthorized', 309, 310),
(450, 1, NULL, NULL, 'ItemExpirations', 322, 335),
(451, 450, NULL, NULL, 'index', 323, 324),
(452, 450, NULL, NULL, 'view', 325, 326),
(453, 450, NULL, NULL, 'add', 327, 328),
(454, 450, NULL, NULL, 'edit', 329, 330),
(455, 450, NULL, NULL, 'delete', 331, 332),
(456, 450, NULL, NULL, 'isAuthorized', 333, 334),
(457, 1, NULL, NULL, 'VehicleCompartments', 336, 377),
(458, 457, NULL, NULL, 'index', 337, 338),
(459, 457, NULL, NULL, 'view', 339, 340),
(460, 457, NULL, NULL, 'add', 341, 342),
(461, 457, NULL, NULL, 'edit', 343, 344),
(462, 457, NULL, NULL, 'delete', 345, 346),
(463, 457, NULL, NULL, 'isAuthorized', 347, 348),
(464, 1, NULL, NULL, 'VendorItems', 378, 409),
(465, 464, NULL, NULL, 'index', 379, 380),
(466, 464, NULL, NULL, 'view', 381, 382),
(467, 464, NULL, NULL, 'add', 383, 384),
(468, 464, NULL, NULL, 'edit', 385, 386),
(469, 464, NULL, NULL, 'delete', 387, 388),
(470, 464, NULL, NULL, 'isAuthorized', 389, 390),
(471, 1, NULL, NULL, 'ItemCategories', 410, 425),
(472, 471, NULL, NULL, 'index', 411, 412),
(473, 471, NULL, NULL, 'view', 413, 414),
(474, 471, NULL, NULL, 'add', 415, 416),
(475, 471, NULL, NULL, 'edit', 417, 418),
(476, 471, NULL, NULL, 'delete', 419, 420),
(477, 471, NULL, NULL, 'isAuthorized', 421, 422),
(478, 1, NULL, NULL, 'Items', 426, 441),
(479, 478, NULL, NULL, 'index', 427, 428),
(480, 478, NULL, NULL, 'view', 429, 430),
(481, 478, NULL, NULL, 'add', 431, 432),
(482, 478, NULL, NULL, 'edit', 433, 434),
(483, 478, NULL, NULL, 'delete', 435, 436),
(484, 478, NULL, NULL, 'isAuthorized', 437, 438),
(485, 471, NULL, NULL, 'load_item_category_by_agency_id', 423, 424),
(486, 478, NULL, NULL, 'add_vendor_item', 439, 440),
(488, 443, NULL, NULL, 'load_vendor_by_agency_id', 311, 312),
(489, 457, NULL, NULL, 'vehicle', 349, 350),
(490, 457, NULL, NULL, 'vehicle_add', 351, 352),
(491, 457, NULL, NULL, 'subcompartments', 353, 354),
(492, 457, NULL, NULL, 'ajax_load_main_compartment', 355, 356),
(493, 457, NULL, NULL, 'ajax_load_items_by_category', 357, 358),
(494, 457, NULL, NULL, 'ajax_add_sub_compartment', 359, 360),
(495, 457, NULL, NULL, 'ajax_load_vehicle_sub_compartment', 361, 362),
(496, 1, NULL, NULL, 'CompartmentItems', 442, 455),
(497, 496, NULL, NULL, 'index', 443, 444),
(498, 496, NULL, NULL, 'view', 445, 446),
(499, 496, NULL, NULL, 'add', 447, 448),
(500, 496, NULL, NULL, 'edit', 449, 450),
(501, 496, NULL, NULL, 'delete', 451, 452),
(502, 496, NULL, NULL, 'isAuthorized', 453, 454),
(503, 228, NULL, NULL, 'debugThreaded', 117, 118),
(504, 457, NULL, NULL, 'ajax_add_item_compartment', 363, 364),
(505, 457, NULL, NULL, 'delete_compartment', 365, 366),
(506, 457, NULL, NULL, 'lookForChildCompartment', 367, 368),
(507, 457, NULL, NULL, 'ajax_delete_compartment_id', 369, 370),
(508, 388, NULL, NULL, 'agency_users', 179, 180),
(509, 388, NULL, NULL, 'agency_add', 181, 182),
(510, 457, NULL, NULL, 'ajax_load_copyable_vehicle_compartment', 371, 372),
(511, 395, NULL, NULL, 'agency_vehicles', 201, 202),
(512, 395, NULL, NULL, 'agency_add', 203, 204),
(513, 395, NULL, NULL, 'agency_edit', 205, 206),
(514, 457, NULL, NULL, 'ajax_save_copied_compartment', 373, 374),
(515, 388, NULL, NULL, 'agency_edit', 183, 184),
(516, 388, NULL, NULL, 'agency_delete', 185, 186),
(517, 395, NULL, NULL, 'agency_delete', 207, 208),
(518, 443, NULL, NULL, 'agency_vendors', 313, 314),
(519, 443, NULL, NULL, 'agency_add', 315, 316),
(520, 443, NULL, NULL, 'agency_edit', 317, 318),
(521, 443, NULL, NULL, 'agency_delete', 319, 320),
(522, 457, NULL, NULL, 'ajax_load_top_vehicle_compartment_list', 375, 376),
(523, 464, NULL, NULL, 'agency_index', 391, 392),
(524, 464, NULL, NULL, 'vendor', 393, 394),
(525, 464, NULL, NULL, 'agency_vendor_items', 395, 396),
(526, 464, NULL, NULL, 'agency_add', 397, 398),
(527, 464, NULL, NULL, 'vendor_add', 399, 400),
(528, 464, NULL, NULL, 'agency_edit', 401, 402),
(529, 464, NULL, NULL, 'vendor_edit', 403, 404),
(530, 464, NULL, NULL, 'agency_delete', 405, 406),
(531, 464, NULL, NULL, 'vendor_delete', 407, 408),
(532, 1, NULL, NULL, 'Profile', 456, 465),
(533, 532, NULL, NULL, 'index', 457, 458),
(534, 532, NULL, NULL, 'isAuthorized', 459, 460),
(535, 395, NULL, NULL, 'check', 209, 210),
(536, 532, NULL, NULL, 'edit', 461, 462),
(537, 532, NULL, NULL, 'change_profile_photo', 463, 464),
(538, 1, NULL, NULL, 'ResetPassword', 466, 471),
(539, 538, NULL, NULL, 'index', 467, 468),
(540, 538, NULL, NULL, 'isAuthorized', 469, 470),
(541, 14, NULL, NULL, 'change_password', 47, 48),
(542, 395, NULL, NULL, 'ajax_save_sealed_compartment', 211, 212),
(543, 395, NULL, NULL, 'ajax_load_compartment_item_note_form', 213, 214),
(544, 395, NULL, NULL, 'ajax_update_compartment_status_note', 215, 216),
(545, 395, NULL, NULL, 'save_item_expiration_date', 217, 218),
(546, 395, NULL, NULL, 'delete_item_expiration_date', 219, 220),
(547, 364, NULL, NULL, 'setup', 135, 136),
(548, 1, NULL, NULL, 'Contacts', 472, 485),
(549, 548, NULL, NULL, 'index', 473, 474),
(550, 548, NULL, NULL, 'view', 475, 476),
(551, 548, NULL, NULL, 'add', 477, 478),
(552, 548, NULL, NULL, 'edit', 479, 480),
(553, 548, NULL, NULL, 'delete', 481, 482),
(554, 548, NULL, NULL, 'isAuthorized', 483, 484),
(555, 1, NULL, NULL, 'VehicleMaintenanceRequests', 486, 499),
(556, 555, NULL, NULL, 'index', 487, 488),
(557, 555, NULL, NULL, 'view', 489, 490),
(558, 555, NULL, NULL, 'add', 491, 492),
(559, 555, NULL, NULL, 'edit', 493, 494),
(560, 555, NULL, NULL, 'delete', 495, 496),
(561, 555, NULL, NULL, 'isAuthorized', 497, 498);

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` int(11) NOT NULL,
  `account_type_id` int(11) NOT NULL,
  `member_type_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emt_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `logo` text COLLATE utf8_unicode_ci,
  `address_street1` text COLLATE utf8_unicode_ci NOT NULL,
  `address_street2` text COLLATE utf8_unicode_ci NOT NULL,
  `city1` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `state1` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `zip1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mailing_address_street1` text COLLATE utf8_unicode_ci NOT NULL,
  `mailing_address_street2` text COLLATE utf8_unicode_ci NOT NULL,
  `city2` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `state2` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `zip2` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `state_certification` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `state_certificate_number` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `state_certificate_file` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `regional_authority` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `regional_certificate_number` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `regional_certificate_file` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `tax_id_number` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `tax_exemption` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tax_certificate_file` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `allow_creating_stations` int(2) NOT NULL,
  `allow_creating_stockrooms` int(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `account_type_id`, `member_type_id`, `name`, `emt_number`, `status`, `start_date`, `logo`, `address_street1`, `address_street2`, `city1`, `state1`, `zip1`, `mailing_address_street1`, `mailing_address_street2`, `city2`, `state2`, `zip2`, `email_address`, `state_certification`, `state_certificate_number`, `state_certificate_file`, `regional_authority`, `regional_certificate_number`, `regional_certificate_file`, `tax_id_number`, `tax_exemption`, `tax_certificate_file`, `allow_creating_stations`, `allow_creating_stockrooms`, `created`, `modified`) VALUES
(1, 1, 1, 'Sample Agency A', '12345', 'Active', '2016-09-19', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2016-09-19 13:06:06', '2016-09-19 13:22:24'),
(2, 1, 1, 'AMBUCORE AMBULANCE SERVICES', '12345', 'Active', '2016-08-25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2016-09-19 13:06:22', '2016-09-29 21:15:11'),
(3, 1, 1, 'LIFELINE EMS', '12345', 'Active', '2016-09-04', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2016-09-29 21:16:38', '2016-09-29 21:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

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
-- Table structure for table `checked_compartments`
--

CREATE TABLE `checked_compartments` (
  `id` int(11) NOT NULL,
  `vehicle_compartment_id` int(11) NOT NULL,
  `status` varchar(80) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checked_compartments`
--

INSERT INTO `checked_compartments` (`id`, `vehicle_compartment_id`, `status`, `created`, `modified`) VALUES
(1, 1, 'Missing', '2016-10-20 00:00:00', '2016-10-20 00:00:00'),
(2, 15, 'Good', '2016-10-26 01:53:11', '2016-10-26 01:53:11'),
(3, 14, 'Good', '2016-10-31 21:16:32', '2016-10-31 21:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `checked_items`
--

CREATE TABLE `checked_items` (
  `id` int(11) NOT NULL,
  `compartment_item_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checked_items`
--

INSERT INTO `checked_items` (`id`, `compartment_item_id`, `status`, `created`, `modified`) VALUES
(1, 10, 'Missing', '2016-11-01 01:28:18', '2016-11-01 01:54:52'),
(2, 13, 'Good', '2016-11-03 00:40:57', '2016-11-03 21:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

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
(1, 2, 1, '2016-10-08 03:06:42', '2016-10-08 03:06:42'),
(2, 3, 1, '2016-10-08 03:06:56', '2016-10-08 03:06:56'),
(5, 4, 1, '2016-10-12 00:28:48', '2016-10-12 00:28:48'),
(6, 8, 1, '2016-10-14 01:44:25', '2016-10-14 01:44:25'),
(7, 9, 1, '2016-10-14 01:45:30', '2016-10-14 01:45:30'),
(10, 15, 1, '2016-10-22 02:06:05', '2016-10-22 02:06:05'),
(11, 16, 1, '2016-10-22 02:06:05', '2016-10-22 02:06:05'),
(12, 16, 11, '2016-10-22 02:06:08', '2016-10-22 02:06:08'),
(13, 15, 11, '2016-10-22 02:06:08', '2016-10-22 02:06:08'),
(15, 16, 8, '2016-10-25 00:52:42', '2016-10-25 00:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `firstname` varchar(90) NOT NULL,
  `lastname` varchar(90) NOT NULL,
  `email_address` varchar(90) NOT NULL,
  `street` varchar(90) NOT NULL,
  `city` varchar(90) NOT NULL,
  `state` varchar(90) NOT NULL,
  `country` varchar(90) NOT NULL,
  `zip` varchar(40) NOT NULL,
  `phone_h` varchar(90) NOT NULL,
  `phone_c` varchar(90) NOT NULL,
  `carrier` varchar(90) NOT NULL,
  `emergency_notification_text` int(11) NOT NULL,
  `emergency_notification_email` int(11) NOT NULL,
  `information_text` int(11) NOT NULL,
  `information_email` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `agency_id`, `firstname`, `lastname`, `email_address`, `street`, `city`, `state`, `country`, `zip`, `phone_h`, `phone_c`, `carrier`, `emergency_notification_text`, `emergency_notification_email`, `information_text`, `information_email`, `created`, `modified`) VALUES
(1, 2, 'Abc', 'Test', 'a@a.com', 'a', '', '', '', '', '', '', '', 0, 0, 0, 0, '2016-11-25 01:04:42', '2016-11-25 01:04:42'),
(2, 2, 'Abc', 'Test', 'a@a.com', 'a', '', '', '', '', '', '', '', 0, 0, 0, 0, '2016-11-25 01:05:44', '2016-11-25 01:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

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
(1, 1, '4x4 gauze pad ', 1, 5, 1, 'Case', 3, 'Case', 3, '2100-01-01', 0, 1, 0, 'Full bin', '1', 'Full bin ', '24', 'Test', '2016-10-05 11:39:09', '2016-11-01 01:54:52'),
(2, 1, 'Non-Rebreather', 3, 50, 25, 'Case', 2, 'Case', 2, '2100-01-01', 4, 1, 0, '25', '50', '8', '2', '}', '2016-10-17 04:00:11', '2016-10-17 04:00:11'),
(3, 1, 'Portable Electoric Suction', 2, 5, 0, 'Case', 0, 'Case', 1, '2100-01-01', 1, 1, 0, '0', '0', '1', '0', '-', '2016-10-21 09:58:27', '2016-10-21 09:58:27'),
(4, 1, 'AED', 2, 0, 0, 'Case', 0, 'Case', 1, '2100-01-01', 1, 1, 0, '0', '0', '1', '1', '-', '2016-10-21 09:59:27', '2016-10-21 09:59:27'),
(5, 1, 'AED Pediatric Pads ', 2, 10, 2, 'Piece', 5, 'Piece', 1, '2100-01-01', 0, 0, 1, '0', '2', '1', '1', '-', '2016-10-21 10:08:05', '2016-10-21 10:08:05'),
(6, 1, 'AED Adult Pads', 2, 10, 2, 'Piece', 5, 'Piece', 1, '2100-01-01', 0, 0, 1, '0', '2', '1', '1', '-', '2016-10-21 10:09:33', '2016-10-21 10:09:33'),
(7, 1, 'AED Smart Pads', 2, 10, 2, 'Piece', 5, 'Piece', 1, '2100-01-01', 1, 1, 1, '0', '2', '0', '0', '-', '2016-10-21 10:10:39', '2016-10-21 10:10:39'),
(8, 1, 'Shavers', 2, 1, 1, 'Case', 2, 'Case', 1, '2100-01-01', 0, 0, 0, '1', '0', '3', '3', '-', '2016-10-21 10:11:41', '2016-10-21 10:11:41'),
(9, 1, 'Yankers', 2, 20, 5, 'Piece', 1, 'Case', 1, '2100-01-01', 0, 0, 0, '0', '5', '3', '0', '-', '2016-10-21 10:14:52', '2016-10-21 10:14:52'),
(10, 1, 'Yankers', 2, 20, 5, 'Piece', 1, 'Case', 1, '2100-01-01', 0, 0, 0, '0', '5', '3', '0', '-', '2016-10-21 10:14:52', '2016-10-21 10:14:52'),
(11, 1, 'Suction Tube', 1, 20, 5, 'Piece', 1, 'Case', 1, '2100-01-01', 0, 0, 0, '0', '5', '3', '0', '-', '2016-10-21 10:16:00', '2016-11-03 21:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

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
(1, 1, 'Trauma', '2016-09-28 19:35:04', '2016-09-28 19:35:04'),
(2, 1, 'Medical', '2016-09-28 19:35:23', '2016-09-28 19:35:23'),
(3, 1, 'Airway', '2016-09-28 19:35:41', '2016-09-28 19:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `item_expirations`
--

CREATE TABLE `item_expirations` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `expiration_date` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_expirations`
--

INSERT INTO `item_expirations` (`id`, `item_id`, `expiration_date`, `created`, `modified`) VALUES
(1, 1, '2016-10-25', '2016-10-31 23:11:09', '2016-10-31 23:11:09'),
(3, 1, '2016-10-23', '2016-10-31 23:15:13', '2016-10-31 23:15:13'),
(4, 1, '2016-12-02', '2016-11-01 01:54:49', '2016-11-01 01:54:49'),
(5, 1, '2016-12-10', '2016-11-03 21:41:38', '2016-11-03 21:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `member_types`
--

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
(1, 'EMT', '2016-09-19 12:28:36', '2016-10-10 10:58:00'),
(2, 'Service Unit', '2016-09-19 12:28:43', '2016-10-10 10:58:58'),
(3, 'Paramedic', '2016-10-10 10:59:24', '2016-10-10 10:59:24'),
(4, 'Board', '2016-10-10 10:59:35', '2016-10-10 10:59:35'),
(5, 'Driver', '2016-10-10 10:59:42', '2016-10-10 10:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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
(1, 'admin@admin.com', '$2y$10$y2XwX1i41eja5Im/.x9Z9OImbZCQNGSEqlr/DR/CQNFq6/dXPAicC', 1, 0, '2016-09-12 03:01:56', '2016-10-05 12:54:32'),
(3, 'agency_admin@test.com', '$2y$10$y2XwX1i41eja5Im/.x9Z9OImbZCQNGSEqlr/DR/CQNFq6/dXPAicC', 2, 0, '2016-09-22 02:08:44', '2016-09-22 02:08:44'),
(4, 'member@test.com', '$2y$10$y2XwX1i41eja5Im/.x9Z9OImbZCQNGSEqlr/DR/CQNFq6/dXPAicC', 3, 0, '2016-09-23 04:37:31', '2016-09-23 04:53:31'),
(5, 'davidbreuer1750@gmail.com', '$2y$10$q4BEZvDgoaPC3HtmVqeBE.3fWDARdapND0CrwI92zMUsUiJmS951q', 1, 0, '2016-09-29 21:18:43', '2016-09-29 21:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_custom_fields`
--

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
(16, 3, 'Custom Field CDA', 'Custom Value CDA', '2016-09-23 04:53:31', '2016-09-23 04:53:31'),
(17, 1, 'Wife name', 'Test', '2016-10-05 12:54:32', '2016-10-05 12:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_entities`
--

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
(1, 1, 1, 'Super', 'Administrator', 'Ad', '123456', '0', '2016-09-16', '1234', 'test', 'test', 'test', '23423', 'admin@admin.com', '3243', '234', '234', '234', '234', '234', '234', NULL, 0, '2016-09-30 18:37:47', '2016-10-21 10:18:25'),
(2, 2, 3, 'Agency', 'Administrator', 'Sa', '', '0', '2016-09-21', 'Sample User B', 'Sample User B', 'Sample User B', 'Sample User B', 'Sample User B', 'sample_member_a@gmail.com', '31223', '3123', '31231', '3131', '3123', '312', 'Sample User B', NULL, 0, '2016-09-22 02:08:44', '2016-09-22 02:08:44'),
(3, 2, 4, 'Member', 'Test', 'te', '2423423', '0', '2016-08-31', '34234', 'Test', 'test', 'test', '32423', 'test@test.com', '424234', 'test', '34234', '34234', '4234', '342', '423', NULL, 0, '2016-09-23 04:37:31', '2016-09-23 04:53:31'),
(4, 1, 5, 'David', 'Breuer', '', '051', '0', '2016-09-29', '1234', '123 Test Drive', 'Testing', 'TS', '12345', 'davidbreuer1750@gmail.com', '123-456-7890', '123-456-7891', '123-456-7892', '123-456-7893', 'Verizon', 'Rubin Breuer', 'rb2283@gmail.com', NULL, 0, '2016-09-29 21:18:43', '2016-09-29 21:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

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
(1, 1, 1, 3, 'NS-1', '2016', 'Sample A', 'Sample Model', '12345', 'Yes', 'Sample Registration Card', '0000-00-00', 'Sample Insurance Card', '0000-00-00', '2016-09-21', '2016-09-19 13:57:30', '2016-10-16 10:58:07'),
(2, 1, 1, 4, 'Car-1', '2015', 'Test', 'Test', '123', 'Yes', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '2016-10-14 01:42:21', '2016-10-16 10:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_compartments`
--

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
(13, 0, 1, 'Suction Compartment ', 'AED, Suction, etc', 0, 1, 1, 6, '2016-10-21 09:52:28', '2016-10-21 09:52:28'),
(14, 0, 2, 'AED', '-', 1, 1, 7, 8, '2016-10-21 10:12:18', '2016-10-21 10:12:18'),
(15, 13, 1, 'Sample Compartment A', 'SubCompartment', 1, 0, 2, 5, '2016-10-21 13:34:36', '2016-10-21 13:34:36'),
(16, 15, 1, 'AED', 'SubCompartment', 1, 0, 3, 4, '2016-10-22 02:05:43', '2016-10-22 02:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_files`
--

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
-- Table structure for table `vehicle_maintenance_requests`
--

CREATE TABLE `vehicle_maintenance_requests` (
  `id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `user_entity_id` int(11) NOT NULL,
  `complaint` varchar(90) NOT NULL,
  `complaint_description` text NOT NULL,
  `description` text NOT NULL,
  `note` text NOT NULL,
  `date_occurred` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_maintenance_requests`
--

INSERT INTO `vehicle_maintenance_requests` (`id`, `agency_id`, `user_entity_id`, `complaint`, `complaint_description`, `description`, `note`, `date_occurred`, `created`, `modified`) VALUES
(1, 2, 2, 'Driving / Parked Engine On', 'ww', 'ww', 'ww', '0000-00-00 00:00:00', '2016-11-25 01:45:05', '2016-11-25 01:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

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
(2, 1, 'Dixie EMS Supply', '111-111-1111', '101 Test Ave', 'Test Valley ', 'NY', '111111', '', 'http://www.dixieems.com/', '', '', '', '', '', '2016-09-23 05:08:50', '2016-10-10 10:38:27'),
(3, 1, 'Moore Medical, LLC', '800.234.1464', 'PO Box 4066', 'Farmington', 'CT', '06032-4066', 'e-support@mooremedical.com', 'https://www.mooremedical.com', 'Tia Zarnetske', '800.234.1464;  Ext. 5452', 'tia.zarnetske@mooremedical.com', 'Net 30', '', '2016-09-29 21:09:39', '2016-09-29 21:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_items`
--

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
-- Indexes for table `checked_compartments`
--
ALTER TABLE `checked_compartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checked_items`
--
ALTER TABLE `checked_items`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `vehicle_maintenance_requests`
--
ALTER TABLE `vehicle_maintenance_requests`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=562;
--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT for table `checked_compartments`
--
ALTER TABLE `checked_compartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `checked_items`
--
ALTER TABLE `checked_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `compartment_items`
--
ALTER TABLE `compartment_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `item_expirations`
--
ALTER TABLE `item_expirations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member_types`
--
ALTER TABLE `member_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_custom_fields`
--
ALTER TABLE `user_custom_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_entities`
--
ALTER TABLE `user_entities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vehicle_compartments`
--
ALTER TABLE `vehicle_compartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `vehicle_files`
--
ALTER TABLE `vehicle_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_maintenance_requests`
--
ALTER TABLE `vehicle_maintenance_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vendor_items`
--
ALTER TABLE `vendor_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.20-MariaDB)
# Database: bilimli_nesil
# Generation Time: 2017-09-13 09:31:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table books
# ------------------------------------------------------------

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'6-njy synp','2017-08-31 03:08:42','2017-08-31 03:08:42'),
	(2,'7-njy synp','2017-08-31 03:08:42','2017-08-31 03:08:42'),
	(3,'8-njy synp','2017-08-31 03:08:42','2017-08-31 03:08:42'),
	(4,'9-njy synp','2017-08-31 03:08:42','2017-08-31 03:08:42');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consitutional_form` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `president` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `population` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;

INSERT INTO `countries` (`id`, `name`, `code`, `capital`, `area`, `consitutional_form`, `president`, `population`, `flag`, `about`, `created_at`, `updated_at`)
VALUES
	(1,'Afghanistan','AF','','','','','','','',NULL,NULL),
	(2,'Albania','AL','','','','','','','',NULL,NULL),
	(3,'Algeria','DZ','','','','','','','',NULL,NULL),
	(5,'Andorra','AD','','','','','','','',NULL,NULL),
	(6,'Angola','AO','','','','','','','',NULL,NULL),
	(9,'Antigua and Barbuda','AG','','','','','','','',NULL,NULL),
	(10,'Argentina','AR','','','','','','','',NULL,NULL),
	(11,'Armenia','AM','','','','','','','',NULL,NULL),
	(13,'Australia','AU','','','','','','','',NULL,NULL),
	(14,'Austria','AT','','','','','','','',NULL,NULL),
	(15,'Azerbaijan','AZ','','','','','','','',NULL,NULL),
	(16,'Bahamas','BS','','','','','','','',NULL,NULL),
	(17,'Bahrain','BH','','','','','','','',NULL,NULL),
	(18,'Bangladesh','BD','','','','','','','',NULL,NULL),
	(19,'Barbados','BB','','','','','','','',NULL,NULL),
	(20,'Belarus','BY','','','','','','','',NULL,NULL),
	(21,'Belgium','BE','','','','','','','',NULL,NULL),
	(22,'Belize','BZ','','','','','','','',NULL,NULL),
	(23,'Benin','BJ','','','','','','','',NULL,NULL),
	(25,'Bhutan','BT','','','','','','','',NULL,NULL),
	(26,'Bolivia','BO','','','','','','','',NULL,NULL),
	(27,'Bosnia and Herzegovina','BA','','','','','','','',NULL,NULL),
	(28,'Botswana','BW','','','','','','','',NULL,NULL),
	(30,'Brazil','BR','','','','','','','',NULL,NULL),
	(32,'Brunei Darussalam','BN','','','','','','','',NULL,NULL),
	(33,'Bulgaria','BG','','','','','','','',NULL,NULL),
	(34,'Burkina Faso','BF','','','','','','','',NULL,NULL),
	(35,'Burundi','BI','','','','','','','',NULL,NULL),
	(36,'Cambodia','KH','','','','','','','',NULL,NULL),
	(37,'Cameroon','CM','','','','','','','',NULL,NULL),
	(38,'Canada','CA','','','','','','','',NULL,NULL),
	(39,'Cape Verde','CV','','','','','','','',NULL,NULL),
	(41,'Central African Republic','CF','','','','','','','',NULL,NULL),
	(42,'Chad','TD','','','','','','','',NULL,NULL),
	(43,'Chile','CL','','','','','','','',NULL,NULL),
	(44,'China','CN','','','','','','','',NULL,NULL),
	(47,'Colombia','CO','','','','','','','',NULL,NULL),
	(48,'Comoros','KM','','','','','','','',NULL,NULL),
	(49,'Congo','CG','','','','','','','',NULL,NULL),
	(51,'Costa Rica','CR','','','','','','','',NULL,NULL),
	(52,'Croatia (Hrvatska)','HR','','','','','','','',NULL,NULL),
	(53,'Cuba','CU','','','','','','','',NULL,NULL),
	(54,'Cyprus','CY','','','','','','','',NULL,NULL),
	(55,'Czech Republic','CZ','','','','','','','',NULL,NULL),
	(56,'Denmark','DK','','','','','','','',NULL,NULL),
	(57,'Djibouti','DJ','','','','','','','',NULL,NULL),
	(58,'Dominica','DM','','','','','','','',NULL,NULL),
	(59,'Dominican Republic','DO','','','','','','','',NULL,NULL),
	(61,'Ecuador','EC','','','','','','','',NULL,NULL),
	(62,'Egypt','EG','','','','','','','',NULL,NULL),
	(63,'El Salvador','SV','','','','','','','',NULL,NULL),
	(64,'Equatorial Guinea','GQ','','','','','','','',NULL,NULL),
	(65,'Eritrea','ER','','','','','','','',NULL,NULL),
	(66,'Estonia','EE','','','','','','','',NULL,NULL),
	(67,'Ethiopia','ET','','','','','','','',NULL,NULL),
	(70,'Fiji','FJ','','','','','','','',NULL,NULL),
	(71,'Finland','FI','','','','','','','',NULL,NULL),
	(72,'France','FR','','','','','','','',NULL,NULL),
	(77,'Gabon','GA','','','','','','','',NULL,NULL),
	(78,'Gambia','GM','','','','','','','',NULL,NULL),
	(79,'Georgia','GE','','','','','','','',NULL,NULL),
	(80,'Germany','DE','','','','','','','',NULL,NULL),
	(81,'Ghana','GH','','','','','','','',NULL,NULL),
	(84,'Greece','GR','','','','','','','',NULL,NULL),
	(86,'Grenada','GD','','','','','','','',NULL,NULL),
	(89,'Guatemala','GT','','','','','','','',NULL,NULL),
	(90,'Guinea','GN','','','','','','','',NULL,NULL),
	(91,'Guinea-Bissau','GW','','','','','','','',NULL,NULL),
	(92,'Guyana','GY','','','','','','','',NULL,NULL),
	(93,'Haiti','HT','','','','','','','',NULL,NULL),
	(95,'Honduras','HN','','','','','','','',NULL,NULL),
	(97,'Hungary','HU','','','','','','','',NULL,NULL),
	(98,'Iceland','IS','','','','','','','',NULL,NULL),
	(99,'India','IN','','','','','','','',NULL,NULL),
	(101,'Indonesia','ID','','','','','','','',NULL,NULL),
	(102,'Iran (Islamic Republic of)','IR','','','','','','','',NULL,NULL),
	(103,'Iraq','IQ','','','','','','','',NULL,NULL),
	(104,'Ireland','IE','','','','','','','',NULL,NULL),
	(105,'Israel','IL','','','','','','','',NULL,NULL),
	(106,'Italy','IT','','','','','','','',NULL,NULL),
	(107,'Ivory Coast','CI','','','','','','','',NULL,NULL),
	(109,'Jamaica','JM','','','','','','','',NULL,NULL),
	(110,'Japan','JP','','','','','','','',NULL,NULL),
	(111,'Jordan','JO','','','','','','','',NULL,NULL),
	(112,'Kazakhstan','KZ','','','','','','','',NULL,NULL),
	(113,'Kenya','KE','','','','','','','',NULL,NULL),
	(114,'Kiribati','KI','','','','','','','',NULL,NULL),
	(115,'Korea, Democratic People\'s Republic of','KP','','','','','','','',NULL,NULL),
	(116,'Korea, Republic of','KR','','','','','','','',NULL,NULL),
	(118,'Kuwait','KW','','','','','','','',NULL,NULL),
	(119,'Kyrgyzstan','KG','','','','','','','',NULL,NULL),
	(120,'Lao People\'s Democratic Republic','LA','','','','','','','',NULL,NULL),
	(121,'Latvia','LV','','','','','','','',NULL,NULL),
	(122,'Lebanon','LB','','','','','','','',NULL,NULL),
	(123,'Lesotho','LS','','','','','','','',NULL,NULL),
	(124,'Liberia','LR','','','','','','','',NULL,NULL),
	(125,'Libyan Arab Jamahiriya','LY','','','','','','','',NULL,NULL),
	(126,'Liechtenstein','LI','','','','','','','',NULL,NULL),
	(127,'Lithuania','LT','','','','','','','',NULL,NULL),
	(128,'Luxembourg','LU','','','','','','','',NULL,NULL),
	(130,'Macedonia','MK','','','','','','','',NULL,NULL),
	(131,'Madagascar','MG','','','','','','','',NULL,NULL),
	(132,'Malawi','MW','','','','','','','',NULL,NULL),
	(133,'Malaysia','MY','','','','','','','',NULL,NULL),
	(134,'Maldives','MV','','','','','','','',NULL,NULL),
	(135,'Mali','ML','','','','','','','',NULL,NULL),
	(136,'Malta','MT','','','','','','','',NULL,NULL),
	(137,'Marshall Islands','MH','','','','','','','',NULL,NULL),
	(139,'Mauritania','MR','','','','','','','',NULL,NULL),
	(140,'Mauritius','MU','','','','','','','',NULL,NULL),
	(142,'Mexico','MX','','','','','','','',NULL,NULL),
	(143,'Micronesia, Federated States of','FM','','','','','','','',NULL,NULL),
	(144,'Moldova, Republic of','MD','','','','','','','',NULL,NULL),
	(145,'Monaco','MC','','','','','','','',NULL,NULL),
	(146,'Mongolia','MN','','','','','','','',NULL,NULL),
	(147,'Montenegro','ME','','','','','','','',NULL,NULL),
	(149,'Morocco','MA','','','','','','','',NULL,NULL),
	(150,'Mozambique','MZ','','','','','','','',NULL,NULL),
	(151,'Myanmar','MM','','','','','','','',NULL,NULL),
	(152,'Namibia','NA','','','','','','','',NULL,NULL),
	(153,'Nauru','NR','','','','','','','',NULL,NULL),
	(154,'Nepal','NP','','','','','','','',NULL,NULL),
	(155,'Netherlands','NL','','','','','','','',NULL,NULL),
	(158,'New Zealand','NZ','','','','','','','',NULL,NULL),
	(159,'Nicaragua','NI','','','','','','','',NULL,NULL),
	(160,'Niger','NE','','','','','','','',NULL,NULL),
	(161,'Nigeria','NG','','','','','','','',NULL,NULL),
	(165,'Norway','NO','','','','','','','',NULL,NULL),
	(166,'Oman','OM','','','','','','','',NULL,NULL),
	(167,'Pakistan','PK','','','','','','','',NULL,NULL),
	(168,'Palau','PW','','','','','','','',NULL,NULL),
	(170,'Panama','PA','','','','','','','',NULL,NULL),
	(171,'Papua New Guinea','PG','','','','','','','',NULL,NULL),
	(172,'Paraguay','PY','','','','','','','',NULL,NULL),
	(173,'Peru','PE','','','','','','','',NULL,NULL),
	(174,'Philippines','PH','','','','','','','',NULL,NULL),
	(176,'Poland','PL','','','','','','','',NULL,NULL),
	(177,'Portugal','PT','','','','','','','',NULL,NULL),
	(179,'Qatar','QA','','','','','','','',NULL,NULL),
	(181,'Romania','RO','','','','','','','',NULL,NULL),
	(182,'Russian Federation','RU','','','','','','','',NULL,NULL),
	(183,'Rwanda','RW','','','','','','','',NULL,NULL),
	(184,'Saint Kitts and Nevis','KN','','','','','','','',NULL,NULL),
	(185,'Saint Lucia','LC','','','','','','','',NULL,NULL),
	(186,'Saint Vincent and the Grenadines','VC','','','','','','','',NULL,NULL),
	(187,'Samoa','WS','','','','','','','',NULL,NULL),
	(188,'San Marino','SM','','','','','','','',NULL,NULL),
	(189,'Sao Tome and Principe','ST','','','','','','','',NULL,NULL),
	(190,'Saudi Arabia','SA','','','','','','','',NULL,NULL),
	(191,'Senegal','SN','','','','','','','',NULL,NULL),
	(192,'Serbia','RS','','','','','','','',NULL,NULL),
	(193,'Seychelles','SC','','','','','','','',NULL,NULL),
	(194,'Sierra Leone','SL','','','','','','','',NULL,NULL),
	(195,'Singapore','SG','','','','','','','',NULL,NULL),
	(196,'Slovakia','SK','','','','','','','',NULL,NULL),
	(197,'Slovenia','SI','','','','','','','',NULL,NULL),
	(198,'Solomon Islands','SB','','','','','','','',NULL,NULL),
	(199,'Somalia','SO','','','','','','','',NULL,NULL),
	(200,'South Africa','ZA','','','','','','','',NULL,NULL),
	(202,'Spain','ES','','','','','','','',NULL,NULL),
	(203,'Sri Lanka','LK','','','','','','','',NULL,NULL),
	(206,'Sudan','SD','','','','','','','',NULL,NULL),
	(207,'Suriname','SR','','','','','','','',NULL,NULL),
	(209,'Swaziland','SZ','','','','','','','',NULL,NULL),
	(210,'Sweden','SE','','','','','','','',NULL,NULL),
	(211,'Switzerland','CH','','','','','','','',NULL,NULL),
	(212,'Syrian Arab Republic','SY','','','','','','','',NULL,NULL),
	(213,'Taiwan','TW','','','','','','','',NULL,NULL),
	(214,'Tajikistan','TJ','','','','','','','',NULL,NULL),
	(215,'Tanzania, United Republic of','TZ','','','','','','','',NULL,NULL),
	(216,'Thailand','TH','','','','','','','',NULL,NULL),
	(217,'Togo','TG','','','','','','','',NULL,NULL),
	(219,'Tonga','TO','','','','','','','',NULL,NULL),
	(220,'Trinidad and Tobago','TT','','','','','','','',NULL,NULL),
	(221,'Tunisia','TN','','','','','','','',NULL,NULL),
	(222,'Turkey','TR','','','','','','','',NULL,NULL),
	(223,'Turkmenistan','TM','','','','','','','',NULL,NULL),
	(225,'Tuvalu','TV','','','','','','','',NULL,NULL),
	(226,'Uganda','UG','','','','','','','',NULL,NULL),
	(227,'Ukraine','UA','','','','','','','',NULL,NULL),
	(228,'United Arab Emirates','AE','','','','','','','',NULL,NULL),
	(229,'United Kingdom','GB','','','','','','','',NULL,NULL),
	(230,'United States','US','','','','','','','',NULL,NULL),
	(232,'Uruguay','UY','','','','','','','',NULL,NULL),
	(233,'Uzbekistan','UZ','','','','','','','',NULL,NULL),
	(234,'Vanuatu','VU','','','','','','','',NULL,NULL),
	(235,'Vatican City State','VA','','','','','','','',NULL,NULL),
	(236,'Venezuela','VE','','','','','','','',NULL,NULL),
	(237,'Vietnam','VN','','','','','','','',NULL,NULL),
	(241,'Western Sahara','EH','','','','','','','',NULL,NULL),
	(242,'Yemen','YE','','','','','','','',NULL,NULL),
	(244,'Zambia','ZM','','','','','','','',NULL,NULL),
	(245,'Zimbabwe','ZW','','','','','','','',NULL,NULL);

/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table facts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `facts`;

CREATE TABLE `facts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table lessons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lessons`;

CREATE TABLE `lessons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2017_07_24_201827_create_countries_table',1),
	(4,'2017_08_18_233626_create_categories_table',1),
	(5,'2017_08_18_234315_create_lessons_table',1),
	(6,'2017_08_19_063930_create_facts_table',1),
	(7,'2017_08_19_084956_create_books_table',1),
	(8,'2017_08_23_151952_create_quizes_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table quizes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `quizes`;

CREATE TABLE `quizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `falsy_answer1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `falsy_answer2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `falsy_answer3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Admin','admin@gmail.com','$2y$10$AWConayFOQExR29A93gQDeGVvOvWzGdm3JCJMyMbMB/DX/A3T7gu6',NULL,'2017-08-31 03:08:42','2017-08-31 03:08:42');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

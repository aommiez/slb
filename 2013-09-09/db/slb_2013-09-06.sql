# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.13)
# Database: slb
# Generation Time: 2556-09-06 04:21:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table registers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `registers`;

CREATE TABLE `registers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `mobile_phone_number` varchar(255) NOT NULL,
  `contry_of_assignment` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gin_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `segment` varchar(255) NOT NULL,
  `passport_first_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `contry_of_issue` varchar(255) NOT NULL,
  `date_of_expiration` varchar(255) NOT NULL,
  `arrival_airline` varchar(255) NOT NULL,
  `departure_date_and_time` varchar(255) NOT NULL,
  `departure_flight_number` varchar(255) NOT NULL,
  `check_in_date` varchar(255) NOT NULL,
  `upload_passport_scan` varchar(255) NOT NULL,
  `travel_with_family` varchar(255) NOT NULL,
  `passport_last_name` varchar(255) NOT NULL,
  `passport_number` varchar(255) NOT NULL,
  `date_of_issue` varchar(255) NOT NULL,
  `arrival_date_and_time` varchar(255) NOT NULL,
  `arrival_flight_number` varchar(255) NOT NULL,
  `departure_airline` varchar(255) NOT NULL,
  `check_out_date` varchar(255) NOT NULL,
  `family_details` varchar(255) NOT NULL,
  `preferred_photo` varchar(255) NOT NULL,
  `preferred_photo2` varchar(255) NOT NULL,
  `special_requirement` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `body_size` varchar(255) NOT NULL,
  `favorite_color` varchar(255) NOT NULL,
  `health_condition` varchar(255) NOT NULL,
  `food_restriction` varchar(255) NOT NULL,
  `smoke` varchar(255) NOT NULL DEFAULT '',
  `fill_ requirement` varchar(255) NOT NULL DEFAULT '',
  `waistline_size` varchar(255) NOT NULL DEFAULT '',
  `size_details` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*!40000 ALTER TABLE `registers` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

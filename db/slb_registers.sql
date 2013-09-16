CREATE DATABASE  IF NOT EXISTS `slb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `slb`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: slb
-- ------------------------------------------------------
-- Server version	5.6.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `registers`
--

DROP TABLE IF EXISTS `registers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `username` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registers`
--

LOCK TABLES `registers` WRITE;
/*!40000 ALTER TABLE `registers` DISABLE KEYS */;
/*!40000 ALTER TABLE `registers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-09-16 14:58:39

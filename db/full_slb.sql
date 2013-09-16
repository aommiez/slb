-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2013 at 08:23 AM
-- Server version: 5.5.31
-- PHP Version: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_slb`
--

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL DEFAULT ' ',
  `day` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE IF NOT EXISTS `registers` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `whos`
--

CREATE TABLE IF NOT EXISTS `whos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT ' ',
  `description` varchar(255) NOT NULL DEFAULT ' ',
  `path` varchar(255) NOT NULL DEFAULT ' ',
  `type` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

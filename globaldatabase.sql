-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.20 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4832
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for globalrealestate
CREATE DATABASE IF NOT EXISTS `globalrealestate` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `globalrealestate`;


-- Dumping structure for table globalrealestate.alert
CREATE TABLE IF NOT EXISTS `alert` (
  `alert_id` int(50) NOT NULL AUTO_INCREMENT,
  `property_type` varchar(200) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `locality` varchar(500) NOT NULL,
  `insertion_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  PRIMARY KEY (`alert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.amenities
CREATE TABLE IF NOT EXISTS `amenities` (
  `amenities_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL DEFAULT '0',
  `project_id` int(11) NOT NULL DEFAULT '0',
  `bunglow_id` int(11) NOT NULL DEFAULT '0',
  `swimming_pool` tinytext NOT NULL,
  `lift` tinytext NOT NULL,
  `gym` tinytext NOT NULL,
  `wifi` tinytext NOT NULL,
  `Mandir` tinytext NOT NULL,
  `Kids_play_area` tinytext NOT NULL,
  `Jogging_track` tinytext NOT NULL,
  `Indoor_games` tinytext NOT NULL,
  `terrace_garden` tinytext NOT NULL,
  `internal_raod` tinytext NOT NULL,
  `CCTV` tinytext NOT NULL,
  `community_hall` tinytext NOT NULL,
  PRIMARY KEY (`amenities_id`),
  KEY `Pro_ami_FK` (`property_id`),
  KEY `Project_ami_FK` (`project_id`),
  KEY `BNG_AMI_FK` (`bunglow_id`),
  CONSTRAINT `BNG_AMI_FK` FOREIGN KEY (`bunglow_id`) REFERENCES `baunglow_master` (`Baunglow_id`),
  CONSTRAINT `Pro_ami_FK` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`),
  CONSTRAINT `Project_ami_FK` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.baunglow_master
CREATE TABLE IF NOT EXISTS `baunglow_master` (
  `Baunglow_id` int(10) NOT NULL,
  `Location_id` int(10) NOT NULL,
  `City_id` int(10) NOT NULL,
  `Baunglow_name` varchar(200) NOT NULL,
  `Developer_name` varchar(200) NOT NULL,
  `Possession_status` varchar(200) NOT NULL,
  `Baunglow_area` int(50) NOT NULL,
  PRIMARY KEY (`Baunglow_id`),
  KEY `Fk_location_id` (`Location_id`),
  KEY `Fk_city_id` (`City_id`),
  CONSTRAINT `Fk_city_id` FOREIGN KEY (`City_id`) REFERENCES `city` (`city_id`),
  CONSTRAINT `Fk_location_id` FOREIGN KEY (`Location_id`) REFERENCES `locality` (`locality_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.city
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(50) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(200) NOT NULL,
  `insertion_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.city_area
CREATE TABLE IF NOT EXISTS `city_area` (
  `city_area_id` int(10) NOT NULL AUTO_INCREMENT,
  `city_id` int(10) NOT NULL,
  `locality_name` varchar(100) NOT NULL,
  PRIMARY KEY (`city_area_id`),
  KEY `CITY_FK` (`city_id`),
  CONSTRAINT `CITY_FK` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.contactowner
CREATE TABLE IF NOT EXISTS `contactowner` (
  `contact_id` int(50) NOT NULL AUTO_INCREMENT,
  `property_id` int(50) NOT NULL,
  `name` int(200) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `insertion_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.contactus
CREATE TABLE IF NOT EXISTS `contactus` (
  `contact_id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `insertion_date` datetime NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `fax` int(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `insertion_date` datetime NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.locality
CREATE TABLE IF NOT EXISTS `locality` (
  `locality_id` int(50) NOT NULL AUTO_INCREMENT,
  `city_area_id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `insertion_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  PRIMARY KEY (`locality_id`),
  KEY `CITY_AREA_FK` (`city_area_id`),
  CONSTRAINT `CITY_AREA_FK` FOREIGN KEY (`city_area_id`) REFERENCES `city_area` (`city_area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.number
CREATE TABLE IF NOT EXISTS `number` (
  `number_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`number_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.project
CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL DEFAULT '0',
  `city_area_id` int(11) NOT NULL DEFAULT '0',
  `locality_id` int(11) NOT NULL DEFAULT '0',
  `project_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`project_id`),
  KEY `PROJECT_CITY_ID` (`city_id`),
  KEY `PROJECT_CITY_AREA_ID` (`city_area_id`),
  KEY `PROJECT_CITY_LOCALITY_ID` (`locality_id`),
  CONSTRAINT `PROJECT_CITY_AREA_ID` FOREIGN KEY (`city_area_id`) REFERENCES `city_area` (`city_area_id`),
  CONSTRAINT `PROJECT_CITY_ID` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`),
  CONSTRAINT `PROJECT_CITY_LOCALITY_ID` FOREIGN KEY (`locality_id`) REFERENCES `locality` (`locality_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.project_details
CREATE TABLE IF NOT EXISTS `project_details` (
  `project_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL DEFAULT '0',
  `amenities_id` int(11) NOT NULL DEFAULT '0',
  `insertion_date` datetime DEFAULT NULL,
  `modify_date` datetime DEFAULT NULL,
  PRIMARY KEY (`project_detail_id`),
  KEY `FK_project_details_project` (`project_id`),
  CONSTRAINT `FK_project_details_project` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.property
CREATE TABLE IF NOT EXISTS `property` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `property_mode` varchar(10) NOT NULL,
  `city_id` int(11) NOT NULL,
  `city_area` int(11) NOT NULL,
  `image` blob NOT NULL,
  `propertype_id` int(11) NOT NULL,
  `sub_propertytype` int(11) NOT NULL,
  `covered_area` int(11) NOT NULL,
  `plot_area` int(11) NOT NULL,
  `Column 11` int(11) NOT NULL,
  `price` int(30) NOT NULL,
  `locality` varchar(500) NOT NULL,
  `bed_rooms` int(50) NOT NULL,
  `bath_rooms` int(50) NOT NULL,
  `area` varchar(200) NOT NULL,
  `brokerage` varchar(500) NOT NULL,
  `insertion_date` date NOT NULL,
  `modify_date` date NOT NULL,
  PRIMARY KEY (`property_id`),
  KEY `USER` (`user_id`),
  KEY `PROPERTYTYPE_FK` (`propertype_id`),
  KEY `cityProperty` (`city_id`),
  KEY `city_areaProperty` (`city_area`),
  KEY `sub_propertytype` (`sub_propertytype`),
  CONSTRAINT `PROPERTYTYPE_FK` FOREIGN KEY (`propertype_id`) REFERENCES `property_type` (`propertype_id`),
  CONSTRAINT `USER` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `cityProperty` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`),
  CONSTRAINT `city_areaProperty` FOREIGN KEY (`city_area`) REFERENCES `city_area` (`city_area_id`),
  CONSTRAINT `sub_propertytype` FOREIGN KEY (`sub_propertytype`) REFERENCES `property_sub_type` (`property_subtype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.property_sub_type
CREATE TABLE IF NOT EXISTS `property_sub_type` (
  `property_subtype_id` int(10) NOT NULL AUTO_INCREMENT,
  `propertype_id` int(10) NOT NULL,
  `property_name` varchar(50) NOT NULL,
  `insertion_date` date NOT NULL,
  `modify_date` date NOT NULL,
  PRIMARY KEY (`property_subtype_id`),
  KEY `PROPERTY_TYPE_FK` (`propertype_id`),
  CONSTRAINT `PROPERTY_TYPE_FK` FOREIGN KEY (`propertype_id`) REFERENCES `property_type` (`propertype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.property_type
CREATE TABLE IF NOT EXISTS `property_type` (
  `propertype_id` int(11) NOT NULL AUTO_INCREMENT,
  `propertype_name` varchar(50) NOT NULL,
  `insertion_date` date NOT NULL,
  `modify_date` date NOT NULL,
  PRIMARY KEY (`propertype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.state
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(50) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(200) NOT NULL,
  `insertion_date` date NOT NULL,
  `modify_date` date NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.sub_locality
CREATE TABLE IF NOT EXISTS `sub_locality` (
  `sub_locality_id` int(10) NOT NULL AUTO_INCREMENT,
  `locality_id` int(10) NOT NULL,
  `sector_no` varchar(50) NOT NULL,
  `plot_no` varchar(50) NOT NULL,
  PRIMARY KEY (`sub_locality_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.unit
CREATE TABLE IF NOT EXISTS `unit` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` char(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1;

-- Data exporting was unselected.


-- Dumping structure for table globalrealestate.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `insertion_date` date NOT NULL,
  `modify_date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

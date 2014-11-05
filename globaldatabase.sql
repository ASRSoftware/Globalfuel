-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.39 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
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

-- Dumping data for table globalrealestate.alert: ~0 rows (approximately)
DELETE FROM `alert`;
/*!40000 ALTER TABLE `alert` DISABLE KEYS */;
/*!40000 ALTER TABLE `alert` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.amenities
CREATE TABLE IF NOT EXISTS `amenities` (
  `amenities_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL DEFAULT '0',
  `project_id` int(11) NOT NULL DEFAULT '0',
  `bunglow_id` int(11) NOT NULL DEFAULT '0',
  `swimming_pool` tinytext NOT NULL,
  `gym` tinytext NOT NULL,
  `wifi` tinytext NOT NULL,
  `Mandir` tinytext NOT NULL,
  `Kids_play_area` tinytext NOT NULL,
  `Jogging_track` tinytext NOT NULL,
  `Indoor_games` tinytext NOT NULL,
  `terrace_garden` tinytext NOT NULL,
  `internal_raod` tinytext NOT NULL,
  `CCTV` tinytext NOT NULL,
  `community_holl` tinytext NOT NULL,
  PRIMARY KEY (`amenities_id`),
  KEY `Pro_ami_FK` (`property_id`),
  KEY `Project_ami_FK` (`project_id`),
  KEY `BNG_AMI_FK` (`bunglow_id`),
  CONSTRAINT `BNG_AMI_FK` FOREIGN KEY (`bunglow_id`) REFERENCES `baunglow_master` (`Baunglow_id`),
  CONSTRAINT `Project_ami_FK` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  CONSTRAINT `Pro_ami_FK` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.amenities: ~0 rows (approximately)
DELETE FROM `amenities`;
/*!40000 ALTER TABLE `amenities` DISABLE KEYS */;
/*!40000 ALTER TABLE `amenities` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.baunglow_master
CREATE TABLE IF NOT EXISTS `baunglow_master` (
  `Baunglow_id` int(10) NOT NULL,
  `Location_id` int(10) NOT NULL,
  `City_id` int(10) NOT NULL,
  `Baunglow_name` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `Developer_name` varchar(200) NOT NULL,
  `Possession_status` varchar(200) NOT NULL,
  `Baunglow_area` int(50) NOT NULL,
  PRIMARY KEY (`Baunglow_id`),
  KEY `Fk_location_id` (`Location_id`),
  KEY `Fk_city_id` (`City_id`),
  CONSTRAINT `Fk_city_id` FOREIGN KEY (`City_id`) REFERENCES `city` (`city_id`),
  CONSTRAINT `Fk_location_id` FOREIGN KEY (`Location_id`) REFERENCES `locality` (`locality_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.baunglow_master: ~0 rows (approximately)
DELETE FROM `baunglow_master`;
/*!40000 ALTER TABLE `baunglow_master` DISABLE KEYS */;
/*!40000 ALTER TABLE `baunglow_master` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.city
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(50) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(200) NOT NULL,
  `insertion_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.city: ~7 rows (approximately)
DELETE FROM `city`;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`city_id`, `city_name`, `insertion_date`, `modify_date`) VALUES
	(2, 'Mumbai', '2014-10-17 00:00:00', '2014-10-17 00:00:00'),
	(3, 'Mumbai - Central Mumbai', '2014-10-17 00:00:00', '0000-00-00 00:00:00'),
	(5, 'Mumbai - South Mumbai', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(6, 'Mumbai - Western Suburbs', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(7, 'Mumbai - Harbour Line', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(8, 'Mumbai - Around Mumbai', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(9, 'Navi Mumbai', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.city_area
CREATE TABLE IF NOT EXISTS `city_area` (
  `city_area_id` int(10) NOT NULL AUTO_INCREMENT,
  `city_id` int(10) NOT NULL,
  `locality_name` varchar(100) NOT NULL,
  PRIMARY KEY (`city_area_id`),
  KEY `CITY_FK` (`city_id`),
  CONSTRAINT `CITY_FK` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.city_area: ~44 rows (approximately)
DELETE FROM `city_area`;
/*!40000 ALTER TABLE `city_area` DISABLE KEYS */;
INSERT INTO `city_area` (`city_area_id`, `city_id`, `locality_name`) VALUES
	(1, 9, 'Airoli'),
	(2, 9, 'Apta '),
	(3, 9, 'Belapur'),
	(4, 9, 'Bonkode '),
	(5, 9, 'CBD Belapur'),
	(6, 9, 'Chawadi Naka '),
	(7, 9, 'Dronagiri'),
	(8, 9, 'Dana Bunder'),
	(9, 9, 'Deoali '),
	(10, 9, 'Ghansoli'),
	(11, 9, 'Juinagar'),
	(12, 9, 'Kalamboli'),
	(13, 9, 'Kamothe'),
	(14, 9, 'Khalapur'),
	(15, 9, 'Kharghar'),
	(16, 9, 'kopar khairane'),
	(17, 9, 'karanjade'),
	(18, 9, 'Khanda Colony'),
	(19, 9, 'Khandeshwar'),
	(20, 9, 'Mumbai Pune Express Highway'),
	(21, 9, 'Mahape - NaviMumbai'),
	(22, 9, 'Mirchi Galli '),
	(23, 9, 'Nerul'),
	(24, 9, 'Nhave'),
	(25, 9, 'Navade'),
	(26, 9, 'New Panvel '),
	(27, 9, 'Palm Beach Road'),
	(28, 9, 'Panvel'),
	(29, 9, 'Pen'),
	(30, 9, 'Parsik Hill '),
	(31, 9, 'Rasayani'),
	(32, 9, 'Rabale'),
	(33, 9, 'Roadpali '),
	(34, 9, 'Sanpada'),
	(35, 9, 'Seawoods'),
	(36, 9, 'Shedung'),
	(37, 9, 'Shirvane '),
	(38, 9, 'Taloje'),
	(39, 9, 'Turbhe'),
	(40, 9, 'Takka'),
	(41, 9, 'Ulwe'),
	(42, 9, 'Uran '),
	(43, 9, 'Vashi '),
	(44, 9, 'Ziral Ali');
/*!40000 ALTER TABLE `city_area` ENABLE KEYS */;


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

-- Dumping data for table globalrealestate.contactowner: ~0 rows (approximately)
DELETE FROM `contactowner`;
/*!40000 ALTER TABLE `contactowner` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactowner` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.contactus
CREATE TABLE IF NOT EXISTS `contactus` (
  `contact_id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `insertion_date` datetime NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.contactus: ~4 rows (approximately)
DELETE FROM `contactus`;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
INSERT INTO `contactus` (`contact_id`, `name`, `contact_number`, `emailaddress`, `message`, `insertion_date`) VALUES
	(1, 'Anjan', 123456, 'a@email.com', 'I like your property.', '0000-00-00 00:00:00'),
	(2, 'Anjan', 123456, 'a@email.com', 'I am', '0000-00-00 00:00:00'),
	(3, 'Akshay', 123, 'a@email.com', 'I like', '2031-10-14 00:00:00'),
	(4, 'Anjan', 123456, 'a@email.com', 'I like', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.feedback: ~16 rows (approximately)
DELETE FROM `feedback`;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`feedback_id`, `Name`, `Email`, `phone`, `fax`, `message`, `insertion_date`) VALUES
	(1, 'Myname', 'k.pradeep', 2147483647, 321434, 'qrwhrfcngfjvx', '0000-00-00 00:00:00'),
	(2, 'Pradeep', 'k.pradeep55@gmail.com', 123456, 98777665, 'Hello', '0000-00-00 00:00:00'),
	(3, 'Pradeep', 'k.pradeep55@gmail.com', 123456, 98777665, 'Hello', '0000-00-00 00:00:00'),
	(4, 'Pradeep', 'k.pradeep66@gmail.com', 123456, 98777665, 'Hello', '0000-00-00 00:00:00'),
	(5, 'Pradeep', 'k.pradeep66@gmail.com', 123456, 98777665, 'Hello', '0000-00-00 00:00:00'),
	(6, 'Pradeep', 'k.pradeep661@gmail.com', 2147483647, 2147483647, 'Hello im pradeep', '0000-00-00 00:00:00'),
	(7, 'Pradeep', 'k.pradeep661@gmail.com', 2147483647, 2147483647, 'Hello im pradeep', '0000-00-00 00:00:00'),
	(8, 'Pradeep', 'k.pradeep661@gmail.com', 2147483647, 2147483647, 'Hello im pradeep', '0000-00-00 00:00:00'),
	(9, 'Pradeep', 'k.pradeep661@gmail.com', 2147483647, 2147483647, 'Hello im pradeep', '0000-00-00 00:00:00'),
	(10, 'Pradeep', 'k.pradeep661@gmail.com', 2147483647, 2147483647, 'Hello im pradeep', '0000-00-00 00:00:00'),
	(11, 'Pradeep', 'k.pradeep661@gmail.com', 2147483647, 2147483647, 'Hello im pradeep', '0000-00-00 00:00:00'),
	(12, 'Pradeep', 'k.pradeep661@gmail.com', 2147483647, 2147483647, 'Hello im pradeep', '0000-00-00 00:00:00'),
	(13, 'Pradeep', 'k.pradeep661@gmail.com', 2147483647, 2147483647, 'Hello im pradeep', '0000-00-00 00:00:00'),
	(14, 'Pradeep', 'k.pradeep661@gmail.com', 2147483647, 2147483647, 'Hello im pradeep', '0000-00-00 00:00:00'),
	(15, '', '', 0, 0, '', '0000-00-00 00:00:00'),
	(16, 'Pradeep', 'Kum@gmail.com', 8765433, 576777798, 'Hello', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.locality: ~2 rows (approximately)
DELETE FROM `locality`;
/*!40000 ALTER TABLE `locality` DISABLE KEYS */;
INSERT INTO `locality` (`locality_id`, `city_area_id`, `name`, `insertion_date`, `modify_date`) VALUES
	(1, 15, 'sector 11', '2014-11-05 16:18:03', '0000-00-00 00:00:00'),
	(2, 15, 'sector 7', '2014-11-05 16:18:31', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `locality` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.project
CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL DEFAULT '0',
  `city_area_id` int(11) NOT NULL DEFAULT '0',
  `price` int(20) NOT NULL DEFAULT '0',
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

-- Dumping data for table globalrealestate.project: ~0 rows (approximately)
DELETE FROM `project`;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
/*!40000 ALTER TABLE `project` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.project_details
CREATE TABLE IF NOT EXISTS `project_details` (
  `project_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL DEFAULT '0',
  `insertion_date` datetime DEFAULT NULL,
  `modify_date` datetime DEFAULT NULL,
  PRIMARY KEY (`project_detail_id`),
  KEY `FK_project_details_project` (`project_id`),
  CONSTRAINT `FK_project_details_project` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.project_details: ~0 rows (approximately)
DELETE FROM `project_details`;
/*!40000 ALTER TABLE `project_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_details` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.property
CREATE TABLE IF NOT EXISTS `property` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `property_mode` varchar(10) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Possession_status` varchar(70) NOT NULL,
  `propertype_id` int(11) NOT NULL,
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
  CONSTRAINT `PROPERTYTYPE_FK` FOREIGN KEY (`propertype_id`) REFERENCES `property_type` (`propertype_id`),
  CONSTRAINT `USER` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.property: ~0 rows (approximately)
DELETE FROM `property`;
/*!40000 ALTER TABLE `property` DISABLE KEYS */;
/*!40000 ALTER TABLE `property` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.property_sub_type
CREATE TABLE IF NOT EXISTS `property_sub_type` (
  `property_subtype_id` int(10) NOT NULL,
  `propertype_id` int(10) NOT NULL,
  `property_name` varchar(50) NOT NULL,
  `insertion_date` date NOT NULL,
  `modify_date` date NOT NULL,
  KEY `PROPERTY_TYPE_FK` (`propertype_id`),
  CONSTRAINT `PROPERTY_TYPE_FK` FOREIGN KEY (`propertype_id`) REFERENCES `property_type` (`propertype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.property_sub_type: ~25 rows (approximately)
DELETE FROM `property_sub_type`;
/*!40000 ALTER TABLE `property_sub_type` DISABLE KEYS */;
INSERT INTO `property_sub_type` (`property_subtype_id`, `propertype_id`, `property_name`, `insertion_date`, `modify_date`) VALUES
	(1001, 10001, 'Multistorey Apartment', '2014-10-16', '2014-10-16'),
	(1002, 10001, 'Builder Floor Apartment', '2014-10-16', '2014-10-16'),
	(1003, 10001, 'Residential House', '2014-10-16', '2014-10-16'),
	(1004, 10001, 'Villa', '2014-10-16', '2014-10-16'),
	(1005, 10001, 'Residential Plot', '2014-10-16', '2014-10-16'),
	(1006, 10001, 'Penthouse', '2014-10-16', '2014-10-16'),
	(1007, 10001, 'Studio Apartment', '2014-10-16', '2014-10-16'),
	(1008, 10001, 'Service Apartment', '2014-10-16', '2014-10-16'),
	(2001, 10002, 'Commercial Office Space', '2014-10-16', '2014-10-16'),
	(2002, 10002, 'Office in IT Park/ SEZ', '2014-10-16', '2014-10-16'),
	(2003, 10002, 'Commercial Shop', '2014-10-16', '2014-10-16'),
	(2004, 10002, 'Space in Shopping Mall', '2014-10-16', '2014-10-16'),
	(2005, 10002, 'Commercial Showroom', '2014-10-16', '2014-10-16'),
	(2006, 10002, 'Kiosk', '2014-10-16', '2014-10-16'),
	(2007, 10002, 'Business Centre', '2014-10-16', '2014-10-16'),
	(2008, 10002, 'Commercial Land', '2014-10-16', '2014-10-16'),
	(2009, 10002, 'Warehouse/ Godown', '2014-10-16', '2014-10-16'),
	(2010, 10002, 'Guest House', '2014-10-16', '2014-10-16'),
	(2011, 10002, 'Hotel', '2014-10-16', '2014-10-16'),
	(2012, 10002, 'Hotel Sites', '2014-10-16', '2014-10-16'),
	(2013, 10002, 'Industrial Land', '2014-10-16', '2014-10-16'),
	(2014, 10002, 'Industrial Building', '2014-10-16', '2014-10-16'),
	(2015, 10002, 'Industrial Shed', '2014-10-16', '2014-10-16'),
	(3001, 10003, 'Agricultural Land', '2014-10-16', '2014-10-16'),
	(3002, 10003, 'Farm House', '2014-10-16', '2014-10-16');
/*!40000 ALTER TABLE `property_sub_type` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.property_type
CREATE TABLE IF NOT EXISTS `property_type` (
  `propertype_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL DEFAULT '0',
  `propertype_name` varchar(50) NOT NULL,
  `insertion_date` date NOT NULL,
  `modify_date` date NOT NULL,
  PRIMARY KEY (`propertype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10004 DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.property_type: ~3 rows (approximately)
DELETE FROM `property_type`;
/*!40000 ALTER TABLE `property_type` DISABLE KEYS */;
INSERT INTO `property_type` (`propertype_id`, `property_id`, `propertype_name`, `insertion_date`, `modify_date`) VALUES
	(10001, 1, 'ALL RESIDENTIAL', '2014-10-16', '2014-10-16'),
	(10002, 1, 'ALL COMMERCIAL', '2014-10-16', '2014-10-16'),
	(10003, 1, 'ALL AGRICULTURAL', '2014-10-16', '2014-10-16');
/*!40000 ALTER TABLE `property_type` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.state
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(50) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(200) NOT NULL,
  `insertion_date` date NOT NULL,
  `modify_date` date NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.state: ~0 rows (approximately)
DELETE FROM `state`;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
/*!40000 ALTER TABLE `state` ENABLE KEYS */;


-- Dumping structure for table globalrealestate.sub_locality
CREATE TABLE IF NOT EXISTS `sub_locality` (
  `sub_locality_id` int(10) NOT NULL AUTO_INCREMENT,
  `locality_id` int(10) NOT NULL,
  `sector_no` varchar(50) NOT NULL,
  `plot_no` varchar(50) NOT NULL,
  PRIMARY KEY (`sub_locality_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table globalrealestate.sub_locality: ~0 rows (approximately)
DELETE FROM `sub_locality`;
/*!40000 ALTER TABLE `sub_locality` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_locality` ENABLE KEYS */;


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

-- Dumping data for table globalrealestate.user: ~0 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

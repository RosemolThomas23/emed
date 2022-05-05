-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2022 at 06:12 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emed`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

DROP TABLE IF EXISTS `tbl_cat`;
CREATE TABLE IF NOT EXISTS `tbl_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`cat_id`, `cat_name`) VALUES
(1, 'Allopathy'),
(2, 'Homoepathy'),
(3, 'Ayurvedam'),
(4, 'Medical Equipments');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

DROP TABLE IF EXISTS `tbl_company`;
CREATE TABLE IF NOT EXISTS `tbl_company` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `comp_name` varchar(200) NOT NULL,
  PRIMARY KEY (`comp_id`),
  KEY `test` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`comp_id`, `cat_id`, `comp_name`) VALUES
(1, 1, 'Albia Biocare'),
(6, 1, 'Reckitt Benckiser (India) Ltd.'),
(7, 1, 'Sanofi India Ltd.'),
(8, 1, 'XYZ'),
(11, 3, 'Asthma Sudharan Pharma'),
(12, 3, 'Aakash Pharma'),
(13, 2, 'SBL'),
(14, 1, 'Willmar Schwabe India'),
(15, 4, 'Meet Imports');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dose`
--

DROP TABLE IF EXISTS `tbl_dose`;
CREATE TABLE IF NOT EXISTS `tbl_dose` (
  `dose_id` int(10) NOT NULL AUTO_INCREMENT,
  `dose_gm` varchar(5) NOT NULL,
  PRIMARY KEY (`dose_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `LOGIN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`LOGIN_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`LOGIN_ID`, `uname`, `email`, `ph_no`, `password`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '7558943452', 'admin', 0),
(2, 'rose', 'rose@gmail.com', '9744662259', 'rose12', 0),
(3, 'sona', 'sona@gmail.com', '8256397412', 'sona2', 0),
(4, 'varun', 'varun@gmail.com', '7896541232', 'varun6', 0),
(5, 'thomas', 'thomas@gmail.com', '7536984123', 'thomas4', 0),
(6, 'Sulu', 'sulu@gmail.com', '7412589632', 'sulu12', 0),
(7, 'rosemol', 'rose6@gmail.com', '1233656444', '123', 0),
(8, 'vaidehi', 'vai@gmail.com', '7894561233', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdt`
--

DROP TABLE IF EXISTS `tbl_pdt`;
CREATE TABLE IF NOT EXISTS `tbl_pdt` (
  `pdt_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) NOT NULL,
  `comp_id` int(10) NOT NULL,
  `pdt_name` varchar(100) NOT NULL,
  `pdt_details` varchar(1000) NOT NULL,
  `pdt_img` varchar(225) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`pdt_id`),
  KEY `zsxdc` (`comp_id`),
  KEY `tbl_pdt_ibfk_1` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_price`
--

DROP TABLE IF EXISTS `tbl_price`;
CREATE TABLE IF NOT EXISTS `tbl_price` (
  `price_id` int(10) NOT NULL AUTO_INCREMENT,
  `prod_id` int(10) NOT NULL,
  `dose_id` int(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  PRIMARY KEY (`price_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `details` varchar(600) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`prod_id`),
  KEY `comp_id` (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`prod_id`, `comp_id`, `prod_name`, `details`, `price`, `img`, `status`) VALUES
(1, 1, 'Paracetamol 500', 'Recommended for the treatment of most painful and febrile conditions, for example, headache including migraine, toothache, neuralgia, colds and influenza, sore throat, backache, rheumatic pain and dysmenorrhoea.', '10', 'p500.jpg', 0),
(2, 1, 'Paracetamol 250', 'For the treatment of fever and pain including headache, muscle ache, tooth ache, periods pain and pain related to muscle and joints, etc.', '7', 'p250.jpg', 0),
(5, 7, 'Avil 25mg', 'It is an antiallergic medication used in the treatment of various allergic conditions. It provides relief from runny nose, sneezing, congestion, itching, and watery eyes.', '10', 'avil25.jpg', 0),
(6, 12, 'Alanil Capsules	', 'Alanil capsules helps in the treating Anti-Allergic, Anti-pruritic, Urticaria, Erysipelas, Recurrent bacterial and Fungal Infection.', '65', 'ayur2.jpg', 0),
(7, 11, 'Kasa Mukthi 200ml', 'KasaMukti contains herbal extracts which have anti-inflammatory, anti-allergic and anti-mucolytic effect. It helps in expulsion of phlegm and restores normal breathing.', '70', 'ayur1.jpg', 0),
(8, 12, 'Amoes Capsules	', 'Amoes is a ayurvedic capusule used for general gastro intenstinal stress and disorders', '90', 'ayur3.jpg', 0),
(9, 15, 'Fingertip Pulse Oximeter (MI303)', 'Pulse oximetry is a noninvasive test that measures the oxygen saturation level of your blood It can rapidly detect even small changes in oxygen levels. ', '550', 'oximeter.jpg', 0),
(10, 6, 'Avil 25', 'dfcbgvnbmnjmk,', '14', 'avil25.jpg', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD CONSTRAINT `test` FOREIGN KEY (`cat_id`) REFERENCES `tbl_cat` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pdt`
--
ALTER TABLE `tbl_pdt`
  ADD CONSTRAINT `tbl_pdt_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tbl_cat` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zsxdc` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

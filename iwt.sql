-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2016 at 11:36 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `1yr`
--

CREATE TABLE IF NOT EXISTS `1yr` (
  `Rollno` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) DEFAULT NULL,
  `CGPA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `1yr`
--

INSERT INTO `1yr` (`Rollno`, `name`, `CGPA`) VALUES
('', '', ''),
('UE149001', 'Aadrash Bhandari', '3.99'),
('UE149002', 'Aashish Gandhi', '7.79'),
('UE149003', 'Abhishek Kapoor', '7.33'),
('UE149004', 'Abhishek Saini', '8.43'),
('UE149005', 'Ajay Belaramani', '1.39'),
('UE149006', 'Akshay Deep Singh', '6.13'),
('UE149007', 'Akshay Sharma', '6.86'),
('UE149008', 'Akshit Chandrakant', '6.04'),
('UE149009', 'Aman Amit', '6.49'),
('UE149010', 'Aman Rai', '1.06'),
('UE149011', 'Aman Deep Gandhi', '4.88'),
('UE149012', 'Aniket Aryan', '8.67'),
('UE149013', 'Anindya Deb', '7.19'),
('UE149014', 'Ankit Kumar Jha', '7.46'),
('UE149015', 'Ankush Yadav', '7.51'),
('UE149016', 'Arpit Malhotra', '7.5'),
('UE149017', 'Ashish', '7.74'),
('UE149018', 'Ashish Gautam', '6.53'),
('UE149019', 'Ashish Jakhar', '5.96'),
('UE149020', 'Ashutosh Tiwary', '7.63'),
('UE149021', 'Atul Vashisht', '6.28'),
('UE149022', 'Balpreet Singh', '5.86'),
('UE149023', 'Balwant Bhan', '6.6'),
('UE149024', 'Bhupendra Gautam', '6.1'),
('UE149025', 'Chanchal Yadav', '7.46'),
('UE149026', 'Gaurav Verma', '8.04'),
('UE149027', 'Guddu Kumar Ray', '6.14'),
('UE149028', 'Gursimran Kaur', '7.97'),
('UE149029', 'Hariom Jatav', '6.47'),
('UE149030', 'Harish Meena', '7.56'),
('UE149031', 'Harsh', '8.0'),
('ue149032', 'Harsha', '7');

-- --------------------------------------------------------

--
-- Table structure for table `2yr`
--

CREATE TABLE IF NOT EXISTS `2yr` (
  `Rollno` varchar(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CGPA` float NOT NULL,
  PRIMARY KEY (`Rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2yr`
--

INSERT INTO `2yr` (`Rollno`, `Name`, `CGPA`) VALUES
('UE149001', 'Aadrash Bhandari', 3.99),
('UE149002', 'Aashish Gandhi', 7.79),
('UE149003', 'Abhishek Kapoor', 7.33),
('UE149004', 'Abhishek Saini', 8.43),
('UE149005', 'Ajay Belaramani', 1.39),
('UE149006', 'Akshay Deep Singh', 6.13),
('UE149007', 'Akshay Sharma', 6.86),
('UE149008', 'Akshit Chandrakant', 6.04),
('UE149009', 'Aman Amit', 6.49),
('UE149010', 'Aman Rai', 1.06),
('UE149011', 'Aman Deep Gandhi', 4.88),
('UE149012', 'Aniket Aryan', 8.67),
('UE149013', 'Anindya Deb', 7.19),
('UE149014', 'Ankit Kumar Jha', 7.46),
('UE149015', 'Ankush Yadav', 7.51),
('UE149016', 'Arpit Malhotra', 7.5),
('UE149017', 'Ashish', 7.74),
('UE149018', 'Ashish Gautam', 6.53),
('UE149019', 'Ashish Jakhar', 5.96),
('UE149020', 'Ashutosh Tiwary', 7.63),
('UE149021', 'Atul Vashisht', 6.28),
('UE149022', 'Balpreet Singh', 5.86),
('UE149023', 'Balwant Bhan', 6.6),
('UE149024', 'Bhupendra Gautam', 6.1),
('UE149025', 'Chanchal Yadav', 7.46),
('UE149026', 'Gaurav Verma', 8.04),
('UE149027', 'Guddu Kumar Ray', 6.14),
('UE149028', 'Gursimran Kaur', 7.97),
('UE149029', 'Hariom Jatav', 6.47),
('UE149030', 'Harish Meena', 7.56);

-- --------------------------------------------------------

--
-- Table structure for table `3yr`
--

CREATE TABLE IF NOT EXISTS `3yr` (
  `Rollno` varchar(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CGPA` float NOT NULL,
  PRIMARY KEY (`Rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3yr`
--

INSERT INTO `3yr` (`Rollno`, `Name`, `CGPA`) VALUES
('UE139001', 'ABHIMANYU', 7.45),
('UE139002', 'ABHISHEK VASHISTA', 6.4),
('UE139004', 'AKSHAY KUMAR', 4.21),
('UE139005', 'AMAN MEENA', 6.38),
('UE139006', 'AMIT KUMAR BATRA', 8.13),
('UE139007', 'ANISH THAKUR', 5.9),
('UE139008', 'ANKIT BANGAR', 6.04),
('UE139009', 'ANKIT BURAT', 6.55),
('UE139010', 'ANKUR RALHAN', 7.27),
('UE139011', 'ARSHDEEP KAUR', 9.24),
('UE139012', 'ASHISH GARG', 6.76),
('UE139013', 'BALWINDER SINGH', 7.81),
('UE139014', 'BIKRAMJEET SINGH', 8.3),
('UE139015', 'DARSHPREET SINGH', 5.58),
('UE139016', 'DEEPAK YADAV', 7.78),
('UE139017', 'DINESH JANGID', 6.05),
('UE139018', 'DIVYANSHU SINGH PANCHWAL', 7.35),
('UE139019', 'GAURAV PATTI', 7.7),
('ue139020', 'GURVINDER SINGH', 6.6),
('ue139021', 'HARISH KUMAR', 6.45),
('ue139022', 'HARMANPREET MAHEY', 6.93),
('ue139023', 'HARSHIT MALIK', 7.65),
('ue139024', 'JASPREET SINGH', 7.15),
('ue139025', 'KANWAR PAL SINGH CHEEMA', 5.87),
('ue139026', 'KASHISH BHATIA', 8.37),
('ue139027', 'LAKSHAY TYAGI', 6.65),
('ue139028', 'MAYANK RAWAT', 5.84),
('ue139029', 'MAYANK SAINI', 7.3),
('ue139031', 'MOHAK SHARMA', 6.58),
('ue139032', 'MOHIT KUMAR PANDEY', 8.27),
('ue139033', 'MUKUL BHAGAT', 7.71),
('ue139034', 'MUKUL CHAWLA', 8.5),
('ue139035', 'MUMTA HUSSAIN BRAKBOO', 8.17),
('ue139036', 'NAMAN SINGLA', 7.82),
('ue139037', 'NITIN RAWAT', 6.83),
('ue139038', 'OSHEEN KAUL', 7.68),
('ue139039', 'PANKAJ KUMAR', 4.64),
('ue139040', 'PARTEEK KUMAR MAHEY', 8.16),
('ue139041', 'PRABHJIT SINGH CHAWLA', 6.19),
('ue139042', 'PRAVEEN KUMAR SINGH', 7.9),
('ue139043', 'PUNEET KUMAR VISHNAWAT', 3.64),
('ue139044', 'RAJAT JINDAL', 7.9),
('ue139045', 'RAJAT TYAGI', 6.01),
('ue139046', 'ROHIT KUMAR', 7.1),
('ue139047', 'ROHIT MALIK', 6.14),
('ue139048', 'ROHIT PRAJAPATI', 7.99),
('ue139051', 'SAHIL YADAV', 6.9),
('ue139052', 'SAIYAM KUMAR', 8),
('ue139053', 'SAKSHAM GUPTA', 8.19),
('ue139054', 'SAMEER THAKUR', 8.86),
('ue139055', 'SANJAY KUMAR', 4.97),
('ue139056', 'SANKALP ARORA', 7.3),
('ue139057', 'SANKALP CHANDRA', 6.46),
('ue139058', 'SARTHAK KATARIA', 6.5);

-- --------------------------------------------------------

--
-- Table structure for table `4yr`
--

CREATE TABLE IF NOT EXISTS `4yr` (
  `Rollno` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CGPA` float NOT NULL,
  PRIMARY KEY (`Rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4yr`
--

INSERT INTO `4yr` (`Rollno`, `Name`, `CGPA`) VALUES
('UE129001', 'Aakash Mehta', 7.94),
('UE129002', 'Abhinav Aggarwal', 7.51),
('UE129003', 'Abhinav Sood', 7.52),
('UE129004', 'Abhishek Sharma', 7.21),
('UE129005', 'Abhishek Singh', 5.52),
('UE129006', 'Abhishek Singh', 7.41),
('UE129007', 'Abhishek Vighnaraj Ankolekar', 8.01),
('UE129008', 'Aditya Nandal', 5.1),
('UE129009', 'Aditya Singh', 8.21),
('UE129010', 'Ajeet Kumar', 8.31),
('UE129011', 'Amandeep Singh', 7.02),
('UE129012', 'Amit Kumar Pandey', 6.34),
('UE129013', 'Anil Kumar', 5.76),
('UE129014', 'Ankit Kondal', 8.26),
('UE129015', 'Ankur Verma', 6.92),
('UE129016', 'Arun Sharma', 8.34),
('UE129017', 'Left', 0),
('UE129018', 'Ashish Arora', 7.25),
('UE129019', 'Brahmjot Singh', 5.39),
('UE129020', 'Danish Bhasin', 5.65),
('UE129021', 'Deependra Deep', 6.58),
('UE129022', 'Dhananjay Kumar', 6.39),
('UE129023', 'Ekampreet Singh', 4.65),
('UE129024', 'Gargi Khurana', 7.92),
('UE129025', 'Gaurav', 5.48),
('UE129026', 'Gulshan Thakur', 6.34),
('UE129027', 'Harshit Kumar Joshi', 6.17),
('UE129028', 'Himanshu Sharma', 5.36),
('UE129029', 'Himanshu Tiku', 8.08),
('UE129030', 'Ishan Arora', 6.26),
('UE129031', 'Jitesh Gupta', 6.83),
('UE129032', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`) VALUES
(1, 'Delloite'),
(2, 'Zs Security'),
(3, 'Honda'),
(4, 'Mu Sigma'),
(5, 'Gemini Solutions'),
(6, 'Jugnoo'),
(7, 'Mahindra'),
(8, 'Maruti'),
(10, 'Sufi'),
(11, 'Click Labs'),
(12, 'Aricent'),
(13, 'Wipro'),
(14, 'Unisys'),
(15, 'Code Brew'),
(16, 'Lenme'),
(17, 'Books2Hand'),
(18, 'Win Shuttle'),
(19, 'Zomato'),
(20, 'HCL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `rollno` varchar(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL,
  `phoneno` varchar(10) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`rollno`, `name`, `email`, `year`, `phoneno`, `password`) VALUES
('ue138058', 'Pankaj', 'pg99696@gmail.com', '3', '7696134424', 'pan'),
('UE138059', 'Pak', 'pg@gmail.com', '2', '7878465452', 'pan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

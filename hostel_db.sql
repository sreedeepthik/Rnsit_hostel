-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 11:19 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `hostel`
--
CREATE DATABASE `hostel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hostel`;

-- --------------------------------------------------------

--
-- Table structure for table `delete_stu`
--

CREATE TABLE `delete_stu` (
  `usn` varchar(20) default NULL,
  `name` varchar(20) default NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delete_stu`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Deepthi', 'Deepthi');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `Days` varchar(10) NOT NULL,
  `Breakfast` varchar(90) NOT NULL,
  `Lunch` varchar(100) NOT NULL,
  `Dinner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`Days`, `Breakfast`, `Lunch`, `Dinner`) VALUES
('MONDAY', 'IDLI VADA/ TOMATO BATH', 'FRIED ALOO JEERA DRY+DALFFRY+RASAM+PAPAD', 'ONION KABULI CHANA MIXDRY+CHANA DAL FRY+ALSANDE SAMBAR+FRUIT BOWL/BANANA SHAKE'),
('TUESDAY', 'POORI SAAGU', 'CLUSTER BEANS/BEETROOT DALFRY+DRUMSTICK SAMBAR', 'VEG KOLHAPURI+DALFRY+RASAM+TOMATO SOUP'),
('WEDNESDAY', 'SET DOSA/PLAIN DOSA', 'FRIED ALOO GOBI MATAR+DAL+RASAM+CHUTNEY', 'ALSANDI KAL GRAVY(BLACK EYED GRAM)+DALFRY+MAJJIGE SAMBAR+SWEET/RAAJMA'),
('THURSDAY', 'BESI-BELE BATH/TATTE IDLY', 'GREEN GRAM+DALFRY+TOMATO SAMBAR+LASSI', 'DAL CABBAGE(DRY)+DALFRY+RASAM'),
('FRIDAY', 'NOODLES/POHA', 'SMASHED FRIED ALOO+DALFRY+RASAM+SALAD/KOSAMBRI', 'MATAR PANNER/PANEER TIKKA MASALA+DAL SAMBAR'),
('SATURDAY', 'ALOO PARATHA/PULIYOGARE', 'CURD RICE+CAPSICUM ONION MIX+DALFRY+RASAM+CHIPS/BOTI', 'JEERA RICE/LEMON RICE/KHICHADI+TONDEKAI/GREEN GRAM SAMBAR+SWEET'),
('SUNDAY', 'MASALA DOSA/MENTHE PARATHA', 'KERALA PARATHA/POORI+VEG SAGU/MENTHE CHAPATHI+DALFRY+ICE CREAM', 'GHEE RICE/MASALA RICE+RASAM+ONION PAKODA/MASALA VADA');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_no` int(11) NOT NULL,
  `no_of_stu` int(11) NOT NULL,
  PRIMARY KEY  (`Room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_no`, `no_of_stu`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(15, 4),
(16, 4),
(17, 3),
(18, 4),
(19, 4),
(20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` varchar(50) NOT NULL,
  `Usn` varchar(50) NOT NULL,
  `Sem` int(1) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Regno` int(20) NOT NULL,
  `Date_day` varchar(20) NOT NULL,
  `Feepaid` int(11) NOT NULL,
  `Duefee` int(11) default NULL,
  `Address` varchar(100) NOT NULL,
  `Phoneno` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `Room` int(11) NOT NULL,
  `Father` varchar(50) NOT NULL,
  `Mother` varchar(50) NOT NULL,
  `Gaurdian` varchar(50) default NULL,
  `Phoneno1` varchar(20) NOT NULL,
  PRIMARY KEY  (`Usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Usn`, `Sem`, `Gender`, `Regno`, `Date_day`, `Feepaid`, `Duefee`, `Address`, `Phoneno`, `email`, `blood`, `Room`, `Father`, `Mother`, `Gaurdian`, `Phoneno1`) VALUES
('kalyani', '1rn13cs421', 3, 'F', 7458, '', 45000, 0, 'kolar', '7894561339', 'kalyanith543@gmail.com', 'B+', 8, 'shiva', 'padma', '', '49496465'),
('Vineetha', '1rn15cs126', 2, 'F', 21456, '', 74125, 0, 'vijayavada', '8970011195', 'vineetha156@gmail.com', 'B-', 6, 'lakshminarayana', 'vijaya', '', '9475615872'),
('Deepthi', '1rn16cs416', 3, 'F', 45698, '', 60000, 0, 'Bellary', '9482468649', 'deepukoneru1997@gmail.com', 'A+', 17, 'Ramesh Kumar.K', 'Jaya Lakshmi.K', '', '9480755916'),
('Usha m', '1rn16cs421', 2, 'F', 4587, '', 60000, 0, 'Kadur', '8548922904', 'usha1995sri@gmail.com', 'B+', 2, 'Mallikarjun', 'Jayantthi', '', '9844683989'),
('Jaya', '1rn16cs429', 2, 'F', 8475, '', 89000, 0, 'Bijapur', '8971719863', 'jaya123@gmail.com', 'B+', 17, 'Krishna', 'Lakshmi', '', '8745632159'),
('Rachana', '1rn16cv405', 3, 'F', 8523, '', 60000, 0, 'kolar', '7259462989', 'rachanam236@gmail.com', 'B+', 1, 'Muniraj', 'Puspalatha', '', '9141894925'),
('Sree', '46576', 2, 'F', 1576, '', 2588, 1258, 'ufug', '26565', '', 'A+', 2, 'ugiog', 'gigio', '', '16565');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delete_stu`
--
ALTER TABLE `delete_stu`
  ADD CONSTRAINT `delete_stu_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`Usn`);

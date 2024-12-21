-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 01:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nss`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopted_area`
--

CREATE TABLE `adopted_area` (
  `sr_no` int(11) NOT NULL,
  `college_code` varchar(50) NOT NULL,
  `college_name` varchar(500) NOT NULL,
  `area_address` varchar(3000) NOT NULL,
  `area_local_person` varchar(100) NOT NULL,
  `area_local_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adopted_area`
--

INSERT INTO `adopted_area` (`sr_no`, `college_code`, `college_name`, `area_address`, `area_local_person`, `area_local_contact`) VALUES
(1, 'A02', 'Kishinchand Chellaram college', '', '', ''),
(2, 'A02', 'Kishinchand Chellaram college', '', '', ''),
(3, 'A02', 'Kishinchand Chellaram college', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `advisory_committee`
--

CREATE TABLE `advisory_committee` (
  `Sr. No.` int(10) NOT NULL,
  `college_code` varchar(50) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `name1` varchar(40) NOT NULL,
  `con1` varchar(20) NOT NULL,
  `name2` varchar(40) NOT NULL,
  `con2` varchar(20) NOT NULL,
  `name3` varchar(40) NOT NULL,
  `con3` varchar(20) NOT NULL,
  `name4` varchar(40) NOT NULL,
  `con4` varchar(20) NOT NULL,
  `name5` varchar(40) NOT NULL,
  `con5` varchar(20) NOT NULL,
  `name6` varchar(40) NOT NULL,
  `con6` varchar(20) NOT NULL,
  `name7` varchar(40) NOT NULL,
  `con7` varchar(20) NOT NULL,
  `name8` varchar(40) NOT NULL,
  `con8` varchar(20) NOT NULL,
  `name9` varchar(40) NOT NULL,
  `con9` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisory_committee`
--

INSERT INTO `advisory_committee` (`Sr. No.`, `college_code`, `college_name`, `name1`, `con1`, `name2`, `con2`, `name3`, `con3`, `name4`, `con4`, `name5`, `con5`, `name6`, `con6`, `name7`, `con7`, `name8`, `con8`, `name9`, `con9`) VALUES
(1, 'A02', 'Kishinchand Chellaram college', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `class_year`
--

CREATE TABLE `class_year` (
  `class_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_year`
--

INSERT INTO `class_year` (`class_year`) VALUES
('FY BA'),
('FY B Com'),
('FY B Sc'),
('FY B Sc CS'),
('FY B Sc BT'),
('F.Y.B.Sc. IT'),
('F.Y.'),
('SY B Sc'),
('SY B Sc CS'),
('SY B Sc BT'),
('S.Y.B.Sc. IT'),
('S.Y.'),
('SY BA'),
('SY B Com'),
('T.Y.B.Com'),
('T.Y.B.A.'),
('T.Y.B.A.'),
('T.Y.B.A.'),
('T.Y.B.Sc. '),
('M.A. Part I '),
('M.S.C. Part I'),
('M.S.C. Part II'),
('M.Com. Part II'),
('M.Com. Part I'),
('M.A. Part II '),
('FE'),
('SE'),
('TE'),
('BE');

-- --------------------------------------------------------

--
-- Table structure for table `college_info`
--

CREATE TABLE `college_info` (
  `srno` int(11) NOT NULL,
  `srno_area` int(11) NOT NULL,
  `college_code` varchar(50) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `area` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `max_allot` int(6) NOT NULL,
  `college_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_info`
--

INSERT INTO `college_info` (`srno`, `srno_area`, `college_code`, `college_name`, `area`, `status`, `max_allot`, `college_email`) VALUES
(1, 1, 'A01', 'Elphinstone College, Fort', 'Mumbai City', 'GOVT. AIDED', 1000, ''),
(2, 2, 'A02', 'K.C.College, Churchgate', 'Mumbai City', 'GOVT. AIDED', 300, ''),
(3, 3, 'A03', 'H R College, Churchgate', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(4, 4, 'A04', 'Siddharth College Comm & Eco, Fort', 'Mumbai City', 'GOVT. AIDED', 200, ''),
(5, 5, 'A05', 'Siddharth College of ASC, CST', 'Mumbai City', 'GOVT. AIDED', 250, ''),
(6, 6, 'A06', 'Jai Hind College, Churchgate', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(7, 7, 'A07', 'Sydenham Collge, Churchgate ', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(8, 8, 'A08', 'K.P.B Hinduja College, Charni Road', 'Mumbai City', 'GOVT. AIDED', 200, ''),
(9, 9, 'A09', 'Bhavan\'s H.S. College, Girgaon', 'Mumbai City', 'GOVT. AIDED', 200, ''),
(10, 10, 'A10', 'N.S.S College, Tardeo', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(11, 11, 'A11', 'Wilson College, Girgaon', 'Mumbai City', 'GOVT. AIDED', 50, ''),
(12, 12, 'A12', 'Sophia College, B. Desai Road', 'Mumbai City', 'GOVT. AIDED', 200, ''),
(13, 13, 'A13', 'Lala Lajpatrai Collge, Mahalaxmi', 'Mumbai City', 'GOVT. AIDED', 200, ''),
(14, 14, 'A14', 'S.G.M.College, Grant Road', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(15, 15, 'A15', 'Akbar Pearbhoy College, Buculla', 'Mumbai City', 'GOVT. AIDED', 50, ''),
(16, 16, 'A16', 'Dr. T K Tope night College, Parel', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(17, 17, 'A17', 'M.D. College, Parel', 'Mumbai City', 'GOVT. AIDED', 150, ''),
(18, 18, 'A18', 'Kirti College, Dadar', 'Mumbai City', 'GOVT. AIDED', 200, ''),
(19, 19, 'A19', 'D.G. Ruparel College, Mahim', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(20, 20, 'A20', 'Ramanrain Ruia College, Matunga', 'Mumbai City', 'GOVT. AIDED', 250, ''),
(21, 21, 'A21', 'R.A Podar College, Matunga', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(22, 22, 'A22', 'Dr. Ambedkar College, Wadala', 'Mumbai City', 'GOVT. AIDED', 200, ''),
(23, 23, 'A23', 'S.I.W.S.N.R.Swamy College, Wadala', 'Mumbai City', 'GOVT. AIDED', 150, ''),
(24, 24, 'A24', 'G.N Khalsa College, Matunga', 'Mumbai City', 'GOVT. AIDED', 200, ''),
(25, 25, 'A25', 'S.I.E.S College of Arts, SCi &Com, Sion', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(26, 26, 'A26', 'S.I.E.S. College of Comm & Eco, Sion', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(27, 27, 'A27', 'The Gurunanak College, GTB Nagar', 'Mumbai City', 'GOVT. AIDED', 200, ''),
(28, 28, 'A30', 'Institute of SCience, Md Kama Rd, Mumbai', 'Mumbai City', 'GOVT. AIDED', 50, ''),
(29, 29, 'A33', 'Vidyalankar SChool of I.T (VSIT), Wadala', 'Mumbai City', 'GOVT. AIDED', 120, ''),
(30, 30, 'A34', 'Institute of Forensic SCience, M.Kama Road', 'Mumbai City', 'GOVT. AIDED', 50, ''),
(31, 31, 'A38', 'Vasantdada Patil College of Engg, Chunabhatti', 'Mumbai City', 'GOVT. AIDED', 50, ''),
(32, 32, 'A39', 'Government Law College, Churchgate', 'Mumbai City', 'GOVT. AIDED', 50, ''),
(33, 1, 'B01', 'Chetana College, Bandra', 'Mumbai Western', 'GOVT. AIDED', 200, ''),
(34, 2, 'B02', 'Rizvi College, Bandra', 'Mumbai Western', 'GOVT. AIDED', 200, ''),
(35, 3, 'B03', 'St.Andrews College, Bandra', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(36, 4, 'B04', 'Smt. MMK College, Bandra', 'Mumbai Western', 'GOVT. AIDED', 50, ''),
(37, 5, 'B05', 'R.D.National College, Bandra', 'Mumbai Western', 'GOVT. AIDED', 250, ''),
(38, 6, 'B06', 'Thadomal Sahani College, Bandra', 'Mumbai Western', 'GOVT. AIDED', 200, ''),
(39, 7, 'B07', 'Fr. Conceicao Rodrigues Enggi. College, Bandra', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(40, 8, 'B08', 'MPSP Singh College, Bandra', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(41, 9, 'B09', 'L.S. Raheja, Santacruz', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(42, 10, 'B10', 'Patuck Gala College, VkKola, Santacruz', 'Mumbai Western', 'GOVT. AIDED', 200, ''),
(43, 11, 'B11', 'Public Night College, Santacruz', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(44, 12, 'B12', 'Sathaye College, Vileparle', 'Mumbai Western', 'GOVT. AIDED', 250, ''),
(45, 13, 'B13', 'M L Dahanukar, Vileparle', 'Mumbai Western', 'GOVT. AIDED', 250, ''),
(46, 14, 'B14', 'Mithibai College, Vileparle', 'Mumbai Western', 'GOVT. AIDED', 200, ''),
(47, 15, 'B15', 'Narsee Monji College, Vileparle', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(48, 16, 'B16', 'D.J. Sanghvi College of Enggi, Vileparle', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(49, 17, 'B17', 'Bhavan\'s College, Andheri', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(50, 18, 'B18', 'C.L.Valia College, Andheri', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(51, 19, 'B19', 'Smt. P.D. Tibrewala College, Andheri', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(52, 20, 'B20', 'Ismail Yusuf College, Jogeshwari', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(53, 21, 'B21', 'Clara\'s College, Varsova', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(54, 22, 'B23', 'Vivek College, Goregaon', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(55, 23, 'B24', 'J.M.Patel College, Goregaon', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(56, 24, 'B25', 'SS & LS Patkar College, Goregaon', 'Mumbai Western', 'GOVT. AIDED', 181, ''),
(57, 25, 'B26', 'P. D. Lions College, Malad', 'Mumbai Western', 'GOVT. AIDED', 250, ''),
(58, 26, 'B27', 'Ghanshyamdas Saraf College, Malad', 'Mumbai Western', 'GOVT. AIDED', 50, ''),
(59, 27, 'B28', 'Nagindas Khandwala College, Malad', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(60, 28, 'B29', 'D T S S College, Malad', 'Mumbai Western', 'GOVT. AIDED', 300, ''),
(61, 29, 'B30', 'K.G.Mittal College, Malad', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(62, 30, 'B31', 'Balbharati College, Kandivali', 'Mumbai Western', 'GOVT. AIDED', 50, ''),
(63, 31, 'B32', 'K.E.S. Shroff College, Kandivali', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(64, 32, 'B33', 'Thakur College Of SCi & Com, Kandivali', 'Mumbai Western', 'GOVT. AIDED', 250, ''),
(65, 33, 'B34', 'Thakur College of Eng. & Tech., Kandivali', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(66, 34, 'B35', 'Niranjan Majithia College, Kandivali', 'Mumbai Western', 'GOVT. AIDED', 200, ''),
(67, 35, 'B36', 'G.E.S. Bhausaheb Vartak College, Borivali', 'Mumbai Western', 'GOVT. AIDED', 200, ''),
(68, 36, 'B37', 'A. D. Kale College, Borivali', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(69, 37, 'B38', 'Shailendra College, Dahisar', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(70, 38, 'B39', 'Kamala Mehta VWA College, Varsova', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(71, 39, 'B41', 'M K Sanghvi College, Andheri', 'Mumbai Western', 'GOVT. AIDED', 50, ''),
(72, 40, 'B42', 'Prakash Degree College, Kandivali', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(73, 41, 'B46', 'S.M. Shetty College, Powai', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(74, 42, 'B47', 'Chandrabhan Sharma College, Powai', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(75, 43, 'B48', 'Usha Pravin  Gandhi Colleg, Vileparlee', 'Mumbai Western', 'GOVT. AIDED', 50, ''),
(76, 44, 'B49', 'Nirmala Memorial Foundation College, Kandivali', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(77, 45, 'B53', 'Vidya Vikas College, Malad', 'Mumbai Western', 'GOVT. AIDED', 100, ''),
(78, 46, 'B55', 'M P V Valia College, Borivali', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(79, 47, 'B56', 'Kaiser College, Bandra', 'Mumbai Western', 'GOVT. AIDED', 150, ''),
(80, 48, 'B57', 'Atharva College of Engg. , Malad', 'Mumbai Western', 'GOVT. AIDED', 50, ''),
(81, 49, 'B58', 'M.V.M\'s College of Com & SCi, Andheri (w)', 'Mumbai Western', 'GOVT. AIDED', 50, ''),
(82, 50, 'B59', 'L.N. College, Borivali', 'Mumbai Western', 'GOVT. AIDED', 50, ''),
(83, 51, 'B60', 'PG Unit, Vidyanagari Campus, Santacruz- Dr. Pandey', 'Mumbai Western', 'GOVT. AIDED', 59, ''),
(84, 51, 'B60', 'PG Unit, Vidyanagari Campus, Santacruz- Dr. Phadke', 'Mumbai Western', 'GOVT. AIDED', 41, ''),
(85, 52, 'B61', 'Alkesh Dinesh Mody Inst, UOM', 'Mumbai Western', 'GOVT. AIDED', 40, ''),
(86, 1, 'C01', 'N G Acahrya College, Chembur', 'Mumbai Central', 'GOVT. AIDED', 300, ''),
(87, 2, 'C02', 'Vivekanand College, Chembur', 'Mumbai Central', 'GOVT. AIDED', 200, ''),
(88, 3, 'C03', 'M E S Night Degree College, Chembur', 'Mumbai Central', 'GOVT. AIDED', 200, ''),
(89, 4, 'C04', 'Shree Narayan Guru College, Chembur', 'Mumbai Central', 'GOVT. AIDED', 150, ''),
(90, 5, 'C05', 'Don BoSCo Inst. Of Technology, Kurla', 'Mumbai Central', 'GOVT. AIDED', 200, ''),
(91, 6, 'C06', 'K. J Somaiya College of A& C, Vidyavihar', 'Mumbai Central', 'GOVT. AIDED', 100, ''),
(92, 7, 'C07', 'K. J Somaiya College of S & C, Vidyavihar', 'Mumbai Central', 'GOVT. AIDED', 100, ''),
(93, 8, 'C08', 'S K Somaiya College of A & C, Vidyavihar', 'Mumbai Central', 'GOVT. AIDED', 200, ''),
(94, 9, 'C09', 'R. Jhunjhunwala College, Ghatkopar', 'Mumbai Central', 'GOVT. AIDED', 200, ''),
(95, 10, 'C10', 'Gurukul College, Ghatkopar', 'Mumbai Central', 'GOVT. AIDED', 210, ''),
(96, 11, 'C11', 'Asmita College for Women, Vikhroli', 'Mumbai Central', 'GOVT. AIDED', 150, ''),
(97, 12, 'C12', 'Vikas College, Vikhroli', 'Mumbai Central', 'GOVT. AIDED', 250, ''),
(98, 13, 'C13', 'Sandesh College, Vikhroli', 'Mumbai Central', 'GOVT. AIDED', 100, ''),
(99, 14, 'C14', 'Rajiv Gandhi Night College, Vikhroli', 'Mumbai Central', 'GOVT. AIDED', 100, ''),
(100, 15, 'C15', 'V K K Menon College, Bhandup', 'Mumbai Central', 'GOVT. AIDED', 50, ''),
(101, 16, 'C16', 'R A DAV College, Bhandup', 'Mumbai Central', 'GOVT. AIDED', 200, ''),
(102, 17, 'C17', 'NES Ratnam College, Bhandup', 'Mumbai Central', 'GOVT. AIDED', 300, ''),
(103, 18, 'C18', 'Mulund College of Commerce, Mulund', 'Mumbai Central', 'GOVT. AIDED', 300, ''),
(104, 19, 'C19', 'V G Vaze College, Mulund', 'Mumbai Central', 'GOVT. AIDED', 250, ''),
(105, 20, 'C20', 'Jai Bharat College of Commerce, Mulund', 'Mumbai Central', 'GOVT. AIDED', 50, ''),
(106, 21, 'C21', 'V P M\'s, R.Z. Shah College Mulund', 'Mumbai Central', 'GOVT. AIDED', 100, ''),
(107, 22, 'C23', 'Dr. Babasaheb Ambedkar College,Chembur', 'Mumbai Central', 'GOVT. AIDED', 50, ''),
(108, 23, 'C26', 'Don BoSCo College (BMS-HS., BMM, BMS), Kurla', 'Mumbai Central', 'GOVT. AIDED', 50, ''),
(109, 24, 'C27', 'J S S S Shriram college of Commerce, Bhandup', 'Mumbai Central', 'GOVT. AIDED', 50, ''),
(110, 25, 'C28', 'Laxmichand Golwala College, Ghatkopar', 'Mumbai Central', 'GOVT. AIDED', 200, ''),
(111, 1, 'D58', 'Karmaveer Bhaurao Patil College, Vashi', 'Navi mumbai', 'GOVT. AIDED', 250, ''),
(112, 2, 'D59', 'ICLS Motilal Jhunjhunwala College, Vashi', 'Navi mumbai', 'GOVT. AIDED', 200, ''),
(113, 3, 'D60', 'Western College, Sanpada', 'Navi mumbai', 'GOVT. AIDED', 200, ''),
(114, 4, 'D61', 'Rajiv Gandhi College, Vashi', 'Navi mumbai', 'GOVT. AIDED', 200, ''),
(115, 5, 'D62', 'SIES (Nerul) College of A,S & C, Nerul', 'Navi mumbai', 'GOVT. AIDED', 200, ''),
(116, 6, 'D63', 'SIES Graduate SChool of Tech., Nerul', 'Navi mumbai', 'GOVT. AIDED', 100, ''),
(117, 7, 'D64', 'Sterling College of ASC, Nerul', 'Navi mumbai', 'GOVT. AIDED', 50, ''),
(118, 8, 'D65', 'Ramshet Thakur College, Kharghar', 'Navi mumbai', 'GOVT. AIDED', 100, ''),
(119, 9, 'D66', 'JVM\'S Mehta Degree College, Airoli', 'Navi mumbai', 'GOVT. AIDED', 150, ''),
(120, 10, 'D67', 'Smt. Sushiladevi Deshmukh College of AS & C, Airoli (w)', 'Navi mumbai', 'GOVT. AIDED', 100, ''),
(121, 11, 'D68', 'D V S College of Com, Koparkhairne', 'Navi mumbai', 'GOVT. AIDED', 100, ''),
(122, 12, 'D69', 'F.G. Naik College, Koparkhairne', 'Navi mumbai', 'GOVT. AIDED', 100, ''),
(123, 1, 'D01', 'The Royal College, Mira Road', 'Palghar District', 'GOVT. AIDED', 200, ''),
(124, 2, 'D02', 'Shankar Narayan College, Bhayandar', 'Palghar District', 'GOVT. AIDED', 300, ''),
(125, 3, 'D03', 'Abhinav College, Bhayandar', 'Palghar District', 'GOVT. AIDED', 150, ''),
(126, 4, 'D04', 'Reena Mehta College, Bhayandar', 'Palghar District', 'GOVT. AIDED', 50, ''),
(127, 5, 'D05', 'St. Joseph Senior College, Uttan,Bhayandar', 'Palghar District', 'GOVT. AIDED', 50, ''),
(128, 6, 'H01', 'A V College of ASC, Vasai', 'Palghar District', 'GOVT. AIDED', 200, ''),
(129, 7, 'H02', 'St. G G College, Vasai', 'Palghar District', 'GOVT. AIDED', 200, ''),
(130, 8, 'H03', 'St. Joseph College, Satpala, Agashi, Vasai', 'Palghar District', 'GOVT. AIDED', 150, ''),
(131, 9, 'H04', 'Viva College, Virar', 'Palghar District', 'GOVT. AIDED', 300, ''),
(132, 10, 'H05', 'Sonopant Dandekar College, Palghar', 'Palghar District', 'GOVT. AIDED', 300, ''),
(133, 11, 'H06', 'S R Karandikar College, Vadkun, Dahanu', 'Palghar District', 'GOVT. AIDED', 200, ''),
(134, 12, 'H07', 'P L Shroff College, Chinchani', 'Palghar District', 'GOVT. AIDED', 250, ''),
(135, 13, 'H08', 'N B Mehta SCi College, Bordi', 'Palghar District', 'GOVT. AIDED', 150, ''),
(136, 14, 'H09', 'Com. G. S Parulekar College, Talasari', 'Palghar District', 'GOVT. AIDED', 200, ''),
(137, 15, 'H10', 'Dr. Shantilal Dhanji Devsey College, Wada', 'Palghar District', 'GOVT. AIDED', 100, ''),
(138, 16, 'H11', 'GES Arts & Com college Jawahar', 'Palghar District', 'GOVT. AIDED', 300, ''),
(139, 17, 'H12', 'Arts Com & SCi College, Onde', 'Palghar District', 'GOVT. AIDED', 150, ''),
(140, 18, 'H13', 'RSS A&C College, Mokhada', 'Palghar District', 'GOVT. AIDED', 150, ''),
(141, 19, 'H14', 'A.E.Kalsekar College, Nalasopara', 'Palghar District', 'GOVT. AIDED', 100, ''),
(142, 20, 'H15', 'St. John College of Engg & Management, Palghar', 'Palghar District', 'GOVT. AIDED', 100, ''),
(143, 21, 'H16', 'Wada College of Mmgt & SCi., Wada', 'Palghar District', 'GOVT. AIDED', 100, ''),
(144, 22, 'H17', 'Murlidhar Nanaji Mohite Guruji College, Khodala Jogalwadi', 'Palghar District', 'GOVT. AIDED', 100, ''),
(145, 23, 'H18', 'Yeshwantrao Chaphekar College of Com., & Mgt., Palghar (w)', 'Palghar District', 'GOVT. AIDED', 80, ''),
(146, 1, 'D06', 'Gramin Shikshan Santha College, Majiwade', 'Thane District', 'GOVT. AIDED', 100, ''),
(147, 2, 'D07', 'Dnyanganga Edu. Trust College, Thane', 'Thane District', 'GOVT. AIDED', 100, ''),
(148, 3, 'D08', 'Sheth N K T T College, Thane', 'Thane District', 'GOVT. AIDED', 200, ''),
(149, 4, 'D09', 'Joshi Bedekar College, Thane', 'Thane District', 'GOVT. AIDED', 150, ''),
(150, 5, 'D10', 'K B & SC College of Women, Kopri, Thane', 'Thane District', 'GOVT. AIDED', 150, ''),
(151, 6, 'D11', 'B N Bandodkar College, Thane', 'Thane District', 'GOVT. AIDED', 300, ''),
(152, 7, 'D12', 'Satish Pradhan Dnyansadhana College, Thane', 'Thane District', 'GOVT. AIDED', 250, ''),
(153, 8, 'D13', 'R J Thakur College, Thane', 'Thane District', 'GOVT. AIDED', 100, ''),
(154, 9, 'D14', 'Smt. J Rama Salvi College, Kalwa,Thane', 'Thane District', 'GOVT. AIDED', 200, ''),
(155, 10, 'D15', 'A E kalsekar College, Mumbra', 'Thane District', 'GOVT. AIDED', 200, ''),
(156, 11, 'D16', 'M S College, Kausa Mumbra', 'Thane District', 'GOVT. AIDED', 50, ''),
(157, 12, 'D17', 'K V Pendharkar College, Dombivali', 'Thane District', 'GOVT. AIDED', 200, ''),
(158, 13, 'D18', 'Model College, Dombivli', 'Thane District', 'GOVT. AIDED', 200, ''),
(159, 14, 'D19', 'The SIA College of Higher Edu., Dombivali', 'Thane District', 'GOVT. AIDED', 200, ''),
(160, 15, 'D20', 'Pragati College, Dombivali', 'Thane District', 'GOVT. AIDED', 200, ''),
(161, 16, 'D21', 'Royal College of SC & Com. Dombvli ', 'Thane District', 'GOVT. AIDED', 50, ''),
(162, 17, 'D22', 'Swami Vivekanand Night College, Dombivali', 'Thane District', 'GOVT. AIDED', 50, ''),
(163, 18, 'D23', 'KS\'s Manjunath College, Thakurli', 'Thane District', 'GOVT. AIDED', 100, ''),
(164, 19, 'D24', 'Vande Mataram College, Dombivali', 'Thane District', 'GOVT. AIDED', 50, ''),
(165, 20, 'D25', 'B N N College, Bhiwandi', 'Thane District', 'GOVT. AIDED', 300, ''),
(166, 21, 'D26', 'G M M Momin Womens College, Bhiwandi', 'Thane District', 'GOVT. AIDED', 300, ''),
(167, 22, 'D27', 'Samadiya College, Bhiwandi', 'Thane District', 'GOVT. AIDED', 50, ''),
(168, 23, 'D28', 'Art & Com College, Padgha', 'Thane District', 'GOVT. AIDED', 50, ''),
(169, 24, 'D29', 'M.L.Mhatre Degree College, Bhiwandi', 'Thane District', 'GOVT. AIDED', 100, ''),
(170, 25, 'D30', 'Saket College, Kalyan', 'Thane District', 'GOVT. AIDED', 200, ''),
(171, 26, 'D31', 'Samyak Sankalp College, Kalyan', 'Thane District', 'GOVT. AIDED', 100, ''),
(172, 27, 'D32', 'Model College of Si & Com, Kalyan', 'Thane District', 'GOVT. AIDED', 200, ''),
(173, 28, 'D33', 'Idel College of Pharmacy & Research, Kalyan', 'Thane District', 'GOVT. AIDED', 50, ''),
(174, 29, 'D34', 'B.K. Birla College, Kalyan', 'Thane District', 'GOVT. AIDED', 250, ''),
(175, 30, 'D35', 'L D Sonawane College, Kalyan', 'Thane District', 'GOVT. AIDED', 250, ''),
(176, 31, 'D36', 'Seth Hirachand Mutha College, Kalyan', 'Thane District', 'GOVT. AIDED', 50, ''),
(177, 32, 'D37', 'M S Kabal Singh College, Kalyan', 'Thane District', 'GOVT. AIDED', 150, ''),
(178, 33, 'D38', 'K M Agrawal College, Kalyan', 'Thane District', 'GOVT. AIDED', 250, ''),
(179, 34, 'D39', 'Matoshree V D Haria College, Shahad, Kalyan', 'Thane District', 'GOVT. AIDED', 100, ''),
(180, 35, 'D40', 'Kamladevi College, Vitthalwadi', 'Thane District', 'GOVT. AIDED', 100, ''),
(181, 36, 'D41', 'R K T College, Ulhasnagar', 'Thane District', 'GOVT. AIDED', 300, ''),
(182, 37, 'D42', 'Smt C H M College, Ulhasnagar', 'Thane District', 'GOVT. AIDED', 300, ''),
(183, 38, 'D43 ', 'J Watumal Sadubella Girls College, Ulhasnagar', 'Thane District', 'GOVT. AIDED', 100, ''),
(184, 39, 'D44', 'S S T College, Ulhasnagar', 'Thane District', 'GOVT. AIDED', 300, ''),
(185, 40, 'D45', '(S.E.S.) S.H.Mahraj Degree College of Com, Ulhasnagar', 'Thane District', 'GOVT. AIDED', 100, ''),
(186, 41, 'D46', 'P D Karkhanis College, Ambarnath', 'Thane District', 'GOVT. AIDED', 50, ''),
(187, 42, 'D47', 'SICS Soc. Degree College, Ambarnath', 'Thane District', 'GOVT. AIDED', 100, ''),
(188, 43, 'D48', 'Adarsh College, Badlapur', 'Thane District', 'GOVT. AIDED', 100, ''),
(189, 44, 'D49', 'Bharat College, Badlapur', 'Thane District', 'GOVT. AIDED', 100, ''),
(190, 45, 'D50', 'JSSP Arts, Commerce & SCi College, Goveli', 'Thane District', 'GOVT. AIDED', 200, ''),
(191, 46, 'D51', 'JSM Shantaram Gholap College, Shivle', 'Thane District', 'GOVT. AIDED', 150, ''),
(192, 47, 'D52', 'Jaywantrao Pawar College, Tokawade', 'Thane District', 'GOVT. AIDED', 100, ''),
(193, 48, 'D53', 'Sonubhau Baswant College, Shahapur', 'Thane District', 'GOVT. AIDED', 200, ''),
(194, 49, 'D54', 'VPM\'s, Arts, Com & SCi College, Kinhavli', 'Thane District', 'GOVT. AIDED', 200, ''),
(195, 50, 'D55', 'Bhimrao Pradhan College, Shahapur', 'Thane District', 'GOVT. AIDED', 100, ''),
(196, 51, 'D56', 'J S S P Art Comm & SCi College, Khardi', 'Thane District', 'GOVT. AIDED', 200, ''),
(197, 52, 'D57', 'Utkarsh College, Vashind', 'Thane District', 'GOVT. AIDED', 100, ''),
(198, 1, 'E01', 'K G Uran College of Co & Arts, Uran', 'Raigad District', 'GOVT. AIDED', 120, ''),
(199, 2, 'E02', 'Veer Wajekar College, Uran', 'Raigad District', 'GOVT. AIDED', 300, ''),
(200, 3, 'E03', 'Mhatma Phule College, Panvel', 'Raigad District', 'GOVT. AIDED', 300, ''),
(201, 4, 'E04', 'C K Thakur College, New Panvel', 'Raigad District', 'GOVT. AIDED', 300, ''),
(202, 5, 'E05', 'Pillai\'s College, New Panvel', 'Raigad District', 'GOVT. AIDED', 200, ''),
(203, 6, 'E06', 'Dadasaheb Limaye College, kalamboli', 'Raigad District', 'GOVT. AIDED', 300, ''),
(204, 7, 'E07', 'Bhausaheb Nene College, Pen', 'Raigad District', 'GOVT. AIDED', 160, ''),
(205, 8, 'E08', 'Dr. Patangrao Kadam College, Pen', 'Raigad District', 'GOVT. AIDED', 200, ''),
(206, 9, 'E09', 'Anandibai Pradhan College, Nagothane', 'Raigad District', 'GOVT. AIDED', 250, ''),
(207, 10, 'E10', 'Vasantrao Naik College, MuruDJanjira ', 'Raigad District', 'GOVT. AIDED', 200, ''),
(208, 11, 'E11', 'MSPM D.G.Tatkare College, Mangaon', 'Raigad District', 'GOVT. AIDED', 200, ''),
(209, 12, 'E12', 'Tikambhai Mehta College, Mangaon', 'Raigad District', 'GOVT. AIDED', 80, ''),
(210, 13, 'E13', 'M T E S Doshi Vakil College, Goregaon', 'Raigad District', 'GOVT. AIDED', 200, ''),
(211, 14, 'E14', 'KG\'s, Arts Com & SCi College, Karjat', 'Raigad District', 'GOVT. AIDED', 200, ''),
(212, 15, 'E15', 'KMC College, Khopoli', 'Raigad District', 'GOVT. AIDED', 200, ''),
(213, 16, 'E16', 'Laxmi Shalini Womens College, Pezari', 'Raigad District', 'GOVT. AIDED', 90, ''),
(214, 17, 'E17', 'JSM College, Alibag', 'Raigad District', 'GOVT. AIDED', 300, ''),
(215, 18, 'E18', 'PPES Arts, Com & SCi College, Veshvi', 'Raigad District', 'GOVT. AIDED', 200, ''),
(216, 19, 'E19', 'Seth J N Paliwala College. Pali', 'Raigad District', 'GOVT. AIDED', 300, ''),
(217, 20, 'E20', 'Dr. C D Deshmukh College, Roha', 'Raigad District', 'GOVT. AIDED', 300, ''),
(218, 21, 'E21', 'TVSP, D.G.Tatkare College, Tala', 'Raigad District', 'GOVT. AIDED', 200, ''),
(219, 22, 'E22', 'Vasantrao Naik College, Mhasala', 'Raigad District', 'GOVT. AIDED', 200, ''),
(220, 23, 'E23', 'Dr. Babasaheb Ambedkar College, Mahad', 'Raigad District', 'GOVT. AIDED', 250, ''),
(221, 24, 'E24', 'Sundarrao More College, Poladpur', 'Raigad District', 'GOVT. AIDED', 200, ''),
(222, 25, 'E25', 'GES, AC&S College, Shriwardhan', 'Raigad District', 'GOVT. AIDED', 140, ''),
(223, 26, 'E26', 'Dr. A R Undre College, Borli-Panchatan', 'Raigad District', 'GOVT. AIDED', 130, ''),
(224, 27, 'E27', 'M S Chintamani Tipnis College, Karjat', 'Raigad District', 'GOVT. AIDED', 100, ''),
(225, 28, 'E28', 'KES, Barns College, Panvel', 'Raigad District', 'GOVT. AIDED', 100, ''),
(226, 29, 'E30', 'Dr. Nanasaheb Dharmadhikari AS& C College, Kolad', 'Raigad District', 'GOVT. AIDED', 150, ''),
(227, 30, 'E33', 'G.M. Vedak College of SCi, Tala', 'Raigad District', 'GOVT. AIDED', 150, ''),
(228, 31, 'E35', 'M.E.S\'s Pillai\'s HOC College of Arts, SCi & Com, Rasayani', 'Raigad District', 'GOVT. AIDED', 79, ''),
(229, 1, 'F01', 'N K Varadkar College, Dapoli', 'Ratnagiri District', 'GOVT. AIDED', 200, ''),
(230, 2, 'F02', 'Dapoli Urban Bank Senior SCi. College, Dapoli', 'Ratnagiri District', 'GOVT. AIDED', 200, ''),
(231, 3, 'F03', 'ICS Arts Comm & SCi College, Khed', 'Ratnagiri District', 'GOVT. AIDED', 250, ''),
(232, 4, 'F04', 'T B Kadam College, Bharne', 'Ratnagiri District', 'GOVT. AIDED', 200, ''),
(233, 5, 'F05', 'S S Santhas Arts & SCi College, Sawarde', 'Ratnagiri District', 'GOVT. AIDED', 100, ''),
(234, 6, 'F06', 'D B J College, Chiplun', 'Ratnagiri District', 'GOVT. AIDED', 250, ''),
(235, 7, 'F07', 'Dr.Tatyasaheb Natu Senior College,Margtanhne', 'Ratnagiri District', 'GOVT. AIDED', 100, ''),
(236, 8, 'F08', 'G B Tatyasaheb Khare College, Guhagar', 'Ratnagiri District', 'GOVT. AIDED', 150, ''),
(237, 9, 'F09', 'S P Mandal A& C College, Sakharpa', 'Ratnagiri District', 'GOVT. AIDED', 150, ''),
(238, 10, 'F10', 'Athalye & Sapre College, Devrukh', 'Ratnagiri District', 'GOVT. AIDED', 250, ''),
(239, 11, 'F11', 'R.P. Gogate& R.V. Joglekar College, Ratnagiri', 'Ratnagiri District', 'GOVT. AIDED', 300, ''),
(240, 12, 'F12', 'NSS, S.P.Hegshetty College, MIDC., Mirjole', 'Ratnagiri District', 'GOVT. AIDED', 250, ''),
(241, 13, 'F13', 'Arts Comm., & SCience College, Lanja', 'Ratnagiri District', 'GOVT. AIDED', 200, ''),
(242, 14, 'F14', 'L.G. Mumde AS & C College, Mandangad', 'Ratnagiri District', 'GOVT. AIDED', 150, ''),
(243, 15, 'F15', 'Abasaheb Marathe College, Rajapur', 'Ratnagiri District', 'GOVT. AIDED', 200, ''),
(244, 16, 'F16', 'M H Kapane College, Pachal', 'Ratnagiri District', 'GOVT. AIDED', 150, ''),
(245, 17, 'F17', 'Patpanhale Arts, Com & SCi, College, Patpanhale', 'Ratnagiri District', 'GOVT. AIDED', 200, ''),
(246, 18, 'F19', 'Gharda Inst of Technology, Lavel,Khed', 'Ratnagiri District', 'GOVT. AIDED', 100, ''),
(247, 19, 'F20', 'Indira Inst of Pharmacy, Sadvali, Drorukh ', 'Ratnagiri District', 'GOVT. AIDED', 50, ''),
(248, 20, 'F22', 'D J Samant Senior College, Pali, Ratnagiri', 'Ratnagiri District', 'GOVT. AIDED', 180, ''),
(249, 21, 'F23', 'Laknete Shamraoji Peje College, Shivar-Amber, Ratnagiri', 'Ratnagiri District', 'GOVT. AIDED', 100, ''),
(250, 22, 'F24', 'Mohini Murari Mayekar College, Chafe', 'Ratnagiri District', 'GOVT. AIDED', 150, ''),
(251, 23, 'F25', 'C R Shahu College, Tetavli', 'Ratnagiri District', 'GOVT. AIDED', 80, ''),
(252, 24, 'F26', 'Dyandeep College of SC & Com, Khed', 'Ratnagiri District', 'GOVT. AIDED', 100, ''),
(253, 25, 'F31', 'Shriram Raje College of Hotel & Tourism Mgmt, Dapoli', 'Ratnagiri District', 'GOVT. AIDED', 80, ''),
(254, 26, 'F32', 'Rajendra Mane Coll of Engg., Devrukh ', 'Ratnagiri District', 'GOVT. AIDED', 80, ''),
(255, 1, 'G01', 'S.H. Kelkar College, Devgad', 'Sindhudurg District', 'GOVT. AIDED', 130, ''),
(256, 2, 'G02', 'Kankavli Colleage, Kankavli', 'Sindhudurg District', 'GOVT. AIDED', 300, ''),
(257, 3, 'G03', 'Arts & Comm. College, Phondaghat', 'Sindhudurg District', 'GOVT. AIDED', 150, ''),
(258, 4, 'G04', 'S.K. Patil College, Malvan', 'Sindhudurg District', 'GOVT. AIDED', 150, ''),
(259, 5, 'G05', 'Sant R.M. Mahavidalaya, Kudal', 'Sindhudurg District', 'GOVT. AIDED', 250, ''),
(260, 6, 'G06', 'Arts Comm. & SCi. College, Oras', 'Sindhudurg District', 'GOVT. AIDED', 100, ''),
(261, 7, 'G07', 'Balasaheb khardekar College, Vengurla', 'Sindhudurg District', 'GOVT. AIDED', 290, ''),
(262, 8, 'G08', 'Anandibai Raorane College, Vaibhavwadi', 'Sindhudurg District', 'GOVT. AIDED', 300, ''),
(263, 9, 'G09', 'Raosaheb Gogate College, Banda', 'Sindhudurg District', 'GOVT. AIDED', 150, ''),
(264, 10, 'G10', 'S.P.K. Mahavidyalaya, Sawantwadi', 'Sindhudurg District', 'GOVT. AIDED', 300, ''),
(265, 11, 'G11', 'L.S.Halbe College, Dodamarg', 'Sindhudurg District', 'GOVT. AIDED', 150, ''),
(266, 12, 'G12', 'Dr. J.B. Naik College, Sawantwadi', 'Sindhudurg District', 'GOVT. AIDED', 100, ''),
(267, 13, 'G15', 'A & C College, Talere', 'Sindhudurg District', 'GOVT. AIDED', 100, ''),
(268, 14, 'G16', 'Lt. P.M.Dhuri College, of Comp. SCi, Mangaon', 'Sindhudurg District', 'GOVT. AIDED', 80, ''),
(269, 15, 'G17', 'P.Pu. V. Anna Rawool Maharaj College, Salgaon', 'Sindhudurg District', 'GOVT. AIDED', 100, ''),
(270, 1, 'SA01', 'Maharashra College, Mumbai', 'Mumbai City', 'SELFFINANCE', 50, ''),
(271, 2, 'SA04', 'College of Home SCience, Marine Lines', 'Mumbai City', 'SELFFINANCE', 50, ''),
(272, 3, 'SA06', 'K.J.Somaiya Inst. Of Engineering & Tech., Sion', 'Mumbai City', 'SELFFINANCE', 50, ''),
(273, 4, 'SA07', 'Vidyalankar Institute of Tech. (VIT), Wadala (E)', 'Mumbai City', 'SELFFINANCE', 50, ''),
(274, 5, 'SA09', 'Adv. Balasaheb Apte College of Law, Off Gokhale Road (S), Dadar ', 'Mumbai City', 'SELFFINANCE', 50, ''),
(275, 6, 'SA10', 'Xavier Institute of Engineering, Mahim Causeway, Mahim, Mumbai', 'Mumbai City', 'SELFFINANCE', 50, ''),
(276, 7, 'SA13', 'N.K.E.Society\'s Coll of A,C& S,Wadala(W)', 'Mumbai City', 'SELFFINANCE', 50, ''),
(277, 1, 'SB02', 'Nirmala College of Com., Malad (E)', 'Mumbai Western', 'SELFFINANCE', 100, ''),
(278, 2, 'SB04', 'St. Rocks College, Borivali', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(279, 3, 'SB05', 'St. Francis Inst., of Tech., Borivali (w)', 'Mumbai Western', 'SELFFINANCE', 100, ''),
(280, 4, 'SB06', 'Ladhidevi Ramdhar Maheshwari Night College, Malad (w)', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(281, 5, 'SB07', 'Lords Universal College, Goregaon (E)', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(282, 6, 'SB08', 'G.Jalan Women Degree College, Malad', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(283, 7, 'SB09', 'Sheila Raheja SChool of Business Mngt (SRBS), Bandra (E)', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(284, 8, 'SB11', 'Nirmal Degree College of Com, Kandivali (W)', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(285, 9, 'SB12', 'Rizvi College of Engineering, Bandra', 'Mumbai Western', 'SELFFINANCE', 100, ''),
(286, 10, 'SB13', 'Shri. G.P.M. Degree College of SCi & Com, Andheri', 'Mumbai Western', 'SELFFINANCE', 62, ''),
(287, 11, 'SB14', 'Atharva College of Hotel Management & Catreing Tech, Malad', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(288, 12, 'SB17', 'Thakur Ramnarayan College of Arts & Com, Dahisar', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(289, 13, 'SB18', 'Nalanda College, Gorai, Borivali', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(290, 14, 'SB19', 'JES College of Commerce, SCience & I T, Jogeshwari (E)', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(291, 15, 'SB20', 'Nava Samaj Mandal Marg, Dixit Cross Road, Vileparle (E)', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(292, 16, 'SB21', 'Lords Universal College of Law, Goregaon (w)', 'Mumbai Western', 'SELFFINANCE', 50, ''),
(293, 1, 'SC01', 'Adv. V.B.Deshpande College of Com (Night), Mulund (W)', 'Mumbai Central', 'SELFFINANCE', 50, ''),
(294, 2, 'SC02', 'Indira Gandhi College of Arts & Com., Vikhroli (w)', 'Mumbai Central', 'SELFFINANCE', 100, ''),
(295, 3, 'SC04', 'Anna Leela College, Kurla', 'Mumbai Central', 'SELFFINANCE', 100, ''),
(296, 4, 'SC06', 'Bhavna Trust?s Junior & Degree College, Deonar', 'Mumbai Central', 'SELFFINANCE', 50, ''),
(297, 5, 'SC07', 'Vidya Niketan Degree College,Ghatkopar-E, ', 'Mumbai Central', 'SELFFINANCE', 100, ''),
(298, 6, 'SC08', 'Pune Vidyarthi Griha College of SCi & Tech, Ghatkopar', 'Mumbai Central', 'SELFFINANCE', 50, ''),
(299, 1, 'SD02', 'Terna Engineering College, Nerul', 'Navi Mumbai', 'SELFFINANCE', 100, ''),
(300, 2, 'SD13', 'Bharati Vidyapeeth College of Eng., Belpada, Navi Mumbai ', 'Navi Mumbai', 'SELFFINANCE', 50, ''),
(301, 3, 'SD19', 'Saraswati College of Engi., Kharghar', 'Navi Mumbai', 'SELFFINANCE', 100, ''),
(302, 4, 'SD22', 'S.K. College of SCi & Com., Seawood, Nerul', 'Navi Mumbai', 'SELFFINANCE', 50, ''),
(303, 5, 'SD31', 'Lokmanya Tilak College of Engi., Koparkhairane', 'Navi Mumbai', 'SELFFINANCE', 50, ''),
(304, 6, 'SD35', 'Datta Meghe College of Engi., Airoli', 'Navi Mumbai', 'SELFFINANCE', 100, ''),
(305, 7, 'SD36', 'A.C.Patil College of Engi., Kharghar', 'Navi Mumbai', 'SELFFINANCE', 100, ''),
(306, 8, 'SD45', 'Bharati Vidyapeeth?s College of Pharmacy, C.B.D., Navi Mumbai', 'Navi Mumbai', 'SELFFINANCE', 50, ''),
(307, 9, 'SD51', 'Fr. C.R.Institute of Tech, Vashi navi Mumbai', 'Navi Mumbai', 'SELFFINANCE', 50, ''),
(308, 10, 'SD52', 'Y.Chavan, College of A,C& S, Koparkhairne', 'Navi Mumbai', 'SELFFINANCE', 50, ''),
(309, 11, 'SD53', 'Smt. Indira Gandhi Coill of Engi, Ghansoli', 'Navi Mumbai', 'SELFFINANCE', 50, ''),
(310, 12, 'SD54', 'Ramrao Adik Inst of Tech, Nerul,Navi Mumbai', 'Navi Mumbai', 'SELFFINANCE', 50, ''),
(311, 1, 'SH02', 'St. John Institute of Pharmacy Research, Plaghar (E)', 'Palghar District', 'SELFFINANCE', 50, ''),
(312, 2, 'SH05', 'Sahyadri Shikshan Seva Mandal\'s College, Juchandra', 'Palghar District', 'SELFFINANCE', 100, ''),
(313, 3, 'SH06', 'Dr. Babasaheb Ambedkar College, Vasai Road (w)', 'Palghar District', 'SELFFINANCE', 50, ''),
(314, 4, 'SH09', 'St. John College of Humanities, Vevoor', 'Palghar District', 'SELFFINANCE', 50, ''),
(315, 5, 'SH10', 'Smt. D. M. Cahuhan College, Silvassa ', 'Palghar District', 'SELFFINANCE', 50, ''),
(316, 6, 'SH11', 'ViVA Institute of Pharmacy, Virar', 'Palghar District', 'SELFFINANCE', 50, ''),
(317, 7, 'SH12', 'Universal College of Engineering, Vasai', 'Palghar District', 'SELFFINANCE', 50, ''),
(318, 8, 'SH13', 'Idel Inst. of Pharmacy, Posheri, Wada', 'Palghar District', 'SELFFINANCE', 50, ''),
(319, 9, 'SH14', 'Theem College of Engi., Betegaon, Boisar', 'Palghar District', 'SELFFINANCE', 50, ''),
(320, 10, 'SH15', 'Vidyavardhni\'s College of Engi& Tech, Vasai Rd', 'Palghar District', 'SELFFINANCE', 50, ''),
(321, 11, 'SH16', 'M.S.College of Pharmacy, Devghar, Wada', 'Palghar District', 'SELFFINANCE', 29, ''),
(322, 12, 'SH17', 'ViVA Institute of Tech,Shirgaon, Palghar', 'Palghar District', 'SELFFINANCE', 50, ''),
(323, 13, 'SD29', 'Shree L.R. Tiwari College of Eng., Mira Road', 'Palghar District', 'SELFFINANCE', 60, ''),
(324, 14, 'SD43', 'Shree L.R.Tiwari Degree College of A,C& S,Mira Road (E)', 'Palghar District', 'SELFFINANCE', 50, ''),
(325, 15, 'SD44', 'N.L.Dalmiya College of AC&S, Mira Road', 'Palghar District', 'SELFFINANCE', 50, ''),
(326, 1, 'SD05', 'GKS College, Khadavali (E)', 'Thane District', 'SELFFINANCE', 100, ''),
(327, 2, 'SD06', 'Achievers College of Com., & Mgt., Kalyan (w)', 'Thane District', 'SELFFINANCE', 100, ''),
(328, 3, 'SD07', 'Vedanta College, Vitthalwadi', 'Thane District', 'SELFFINANCE', 200, ''),
(329, 4, 'SD08', 'St. Paul College, Ashelepada', 'Thane District', 'SELFFINANCE', 50, ''),
(330, 5, 'SD10', 'Shri. Mahadev Baburao Chaughule College, Rahanal', 'Thane District', 'SELFFINANCE', 100, ''),
(331, 6, 'SD14', 'Shree. Jaya Anand Com., & SCi., Sr. College (Night), Charai', 'Thane District', 'SELFFINANCE', 50, ''),
(332, 7, 'SD15', 'Matrushri K.M.Patel College, Thakurli', 'Thane District', 'SELFFINANCE', 50, ''),
(333, 8, 'SD16', 'K.B. Patil College, Thane', 'Thane District', 'SELFFINANCE', 50, ''),
(334, 9, 'SD17', 'Anand Vishwa Gurukul Sr. Night College, Thane (w)', 'Thane District', 'SELFFINANCE', 50, ''),
(335, 10, 'SD23', 'Seva Sadan?s College of Edu., Ulhasnagar', 'Thane District', 'SELFFINANCE', 50, ''),
(336, 11, 'SD24', 'Seva Sadan College of Arts, SCi & Com, Ulhasnagar', 'Thane District', 'SELFFINANCE', 150, ''),
(337, 12, 'SD25', 'Mansi Bharat Gada Degree College, Anjurphta, bhiwandi ', 'Thane District', 'SELFFINANCE', 50, ''),
(338, 13, 'SD30', 'Siddharth College,Boradpada, Chargaon, Ambernath', 'Thane District', 'SELFFINANCE', 50, ''),
(339, 14, 'SD32', 'ARMIET, A.R.Institute of Engi.,& Technology, Sapgaon, Shahapur', 'Thane District', 'SELFFINANCE', 50, ''),
(340, 15, 'SD34', 'Swayam Siddhi Mitra Sangh?s Degree College, Temghar, Bhiwandi, ', 'Thane District', 'SELFFINANCE', 50, ''),
(341, 16, 'SD38', 'K.C. College of Engi., & Management studies & Research, Kopari', 'Thane District', 'SELFFINANCE', 50, ''),
(342, 17, 'SD39', 'Shivajirao Jondhale College of Engineering. Asangaon', 'Thane District', 'SELFFINANCE', 50, ''),
(343, 18, 'SD41', 'Sahyog College of Mmgt Studies, Jambli Naka, Thane', 'Thane District', 'SELFFINANCE', 100, ''),
(344, 19, 'SD46', 'A.P.Shah Inst of Tech, Ghodbandar, Thane', 'Thane District', 'SELFFINANCE', 50, ''),
(345, 20, 'SD49', 'S.S.Jondhale College of Pharmacy, Asangaon, Shahapur', 'Thane District', 'SELFFINANCE', 50, ''),
(346, 21, 'SD50', 'Javandep A,C&S College, Mhasa, Murbad', 'Thane District', 'SELFFINANCE', 50, ''),
(347, 1, 'SE01', 'G.V.Acharya Inst. Of Engi. & Techno. Shelu', 'Raigad District', 'SELFFINANCE', 50, ''),
(348, 2, 'SE04', 'Konkan Gyanpeeth College of Eng., Vengaon Rd, Dahivali', 'Raigad District', 'SELFFINANCE', 100, ''),
(349, 3, 'SE05', 'M.B. More Foundation Arts, Com., & SC., Dahtav', 'Raigad District', 'SELFFINANCE', 80, ''),
(350, 4, 'SE06', 'Arts, Com., & SCi., Sr College, Chondhi-Kihim', 'Raigad District', 'SELFFINANCE', 150, ''),
(351, 5, 'SE07', 'K.L.E.Society\'s SCi & Com College Kalamboli.', 'Raigad District', 'SELFFINANCE', 150, ''),
(352, 6, 'SE08', 'Anjuman Islam Janjira Degree College of SCience, Janjira Murud', 'Raigad District', 'SELFFINANCE', 50, ''),
(353, 7, 'SE09', 'Hirwal Edu. Trust College of CSIT, Mahad', 'Raigad District', 'SELFFINANCE', 50, ''),
(354, 8, 'SE10', 'G.M.Vedak Inst. of Technilogy, Tala', 'Raigad District', 'SELFFINANCE', 50, ''),
(355, 9, 'SE11', 'Uran Edu Soc, College of Mngt & Tech., Bori, Uran', 'Raigad District', 'SELFFINANCE', 50, ''),
(356, 10, 'SE12', 'Pillai HOC College of Engi. & Tech, Rasayani', 'Raigad District', 'SELFFINANCE', 50, ''),
(357, 11, 'SE14', 'M.M.Jagtap Senour College of A,S & C, Mahad', 'Raigad District', 'SELFFINANCE', 50, ''),
(358, 12, 'SE15', 'Vishwaniketan\'s Inst of Mngt Entrepreneurship& Engi,Khumbhivali', 'Raigad District', 'SELFFINANCE', 100, ''),
(359, 13, 'SE16', 'MES, Pillai Coll of Engi, New Panvel', 'Raigad District', 'SELFFINANCE', 50, ''),
(360, 14, 'SE17', 'Anjuman-I-Islam\'s SChol of Engi & Tech. New Panvel', 'Raigad District', 'SELFFINANCE', 50, ''),
(361, 15, 'SE18', 'Sadguru Vamanbaba Collegeof AC&S, Taloja', 'Raigad District', 'SELFFINANCE', 50, ''),
(362, 1, 'SF01', 'NSS\'s, College of Arts, Com., & SCi., Navadi Sangameshwar', 'Ratnagiri District', 'SELFFINANCE', 100, ''),
(363, 2, 'SF02', 'Dr. Tanajorap Chorage Sr. College, Mandaki-Palvan', 'Ratnagiri District', 'SELFFINANCE', 100, ''),
(364, 3, 'SF03', 'Maharshi Parshuram College, Velneshwar', 'Ratnagiri District', 'SELFFINANCE', 63, ''),
(365, 4, 'SF05', 'V. Bharatratna Dr. B.A.Ambedkar College, Ambdave', 'Ratnagiri District', 'SELFFINANCE', 100, ''),
(366, 5, 'SF07', 'Smt. Shailaja Shinde Arts, Commerce & SCience College Pedhambe', 'Ratnagiri District', 'SELFFINANCE', 100, ''),
(367, 6, 'SF08', 'Poojya Saneguruji sr. College, Palgad, Dapoli', 'Ratnagiri District', 'SELFFINANCE', 50, ''),
(368, 7, 'SF12', 'B.S.Mandal?s Senior College of Arts, Com & SCi, Ratnagari ', 'Ratnagiri District', 'SELFFINANCE', 50, ''),
(369, 8, 'SF14', 'Govindrao Nikam College of Pharmacy, Sawarde', 'Ratnagiri District', 'SELFFINANCE', 50, ''),
(370, 9, 'SF15', 'Finolex Academy of Mngt. & Tech,MIDC, Mirjole, Ratnagiri', 'Ratnagiri District', 'SELFFINANCE', 50, ''),
(371, 1, 'SG01', 'Arts, Com, & SCi. College, Fanasgaon', 'Sindhudurg District', 'SELFFINANCE', 100, ''),
(372, 2, 'SG02', 'Br. Nath Pai Shikshan Sanstha, Pinguli', 'Sindhudurg District', 'SELFFINANCE', 50, ''),
(373, 3, 'SG03', 'Arts, Com. & SCi, College, Kharepatan', 'Sindhudurg District', 'SELFFINANCE', 120, ''),
(374, 4, 'SG04', 'Dr. Dadasaheb Waradkar College, Katta', 'Sindhudurg District', 'SELFFINANCE', 80, ''),
(375, 5, 'SG05', 'Achara College of Mngt Studies, Achara, Malven', 'Sindhudurg District', 'SELFFINANCE', 100, ''),
(376, 6, 'SG06', 'V. Vishwanath Dalvi College, Talere, Tal. Kankavali ', 'Sindhudurg District', 'SELFFINANCE', 200, ''),
(377, 7, 'SG07', 'P.B.Vengurlekar Mahavidyalaya, Pandurtitha, Kudal', 'Sindhudurg District', 'SELFFINANCE', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department`) VALUES
('Accounting & Finance'),
('B.A.F.'),
('B.B.I.'),
('B.E.M. '),
('B.F.M.'),
('B.F.T.M.'),
('B.M.M.'),
('B.M.S.'),
('B.T.'),
('B.T.M.'),
('Banking & Insurance'),
('BIO MED'),
('Bio-Chemistry'),
('Bio-Technology'),
('BMM'),
('BMS'),
('Botany'),
('BVOC'),
('CHEM'),
('Chemistry'),
('Commerce'),
('Comp. Sci'),
('Comps'),
('Computer Science'),
('Data Analytics'),
('E-Commerce'),
('Economics'),
('English'),
('ET'),
('ETRX'),
('EXTC'),
('F.T.N.M.P.'),
('Financial Management  Market'),
('Geography'),
('Hindi'),
('History'),
('Information Technology'),
('IT'),
('Life Science'),
('Life Sciences'),
('Marathi'),
('Mass Communication'),
('Mass Media'),
('Mathematics'),
('Maths'),
('Micro-Biology'),
('NA'),
('Philosophy'),
('Physics'),
('Political Science'),
('Production'),
('Psychology'),
('Sanskrit'),
('Statistics '),
('Transport Management'),
('Zoology');

-- --------------------------------------------------------

--
-- Table structure for table `performa_1_reg`
--

CREATE TABLE `performa_1_reg` (
  `sr_no` int(11) NOT NULL,
  `submit` int(2) NOT NULL DEFAULT 0,
  `verification` int(1) NOT NULL DEFAULT 0,
  `college_code` varchar(50) NOT NULL,
  `college_name` varchar(300) NOT NULL,
  `college_address` varchar(3000) NOT NULL,
  `college_telephone` varchar(20) NOT NULL,
  `college_fax` varchar(30) NOT NULL,
  `college_email` varchar(50) NOT NULL,
  `college_status_grant` varchar(25) NOT NULL,
  `college_status_minority` varchar(50) NOT NULL,
  `college_pl_state` varchar(30) NOT NULL,
  `female_student_count` varchar(11) NOT NULL,
  `male_student_count` varchar(11) NOT NULL,
  `total_student_count` varchar(11) NOT NULL,
  `principal_name` varchar(100) NOT NULL,
  `principal_mobile` varchar(20) NOT NULL,
  `principal_email` varchar(50) NOT NULL,
  `principal_telephone` varchar(20) NOT NULL,
  `principal_fax` varchar(50) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `bank_account` varchar(50) NOT NULL,
  `ifSC` varchar(50) NOT NULL,
  `signatories_1` varchar(100) NOT NULL,
  `signatories_2` varchar(100) NOT NULL,
  `prev_student_count` varchar(11) NOT NULL,
  `prev_adopted_village` varchar(30) NOT NULL,
  `prev_village_taluka` varchar(30) NOT NULL,
  `prev_village_district` varchar(30) NOT NULL,
  `prev_student_120hrs` varchar(11) NOT NULL,
  `prev_student_240hrs` varchar(11) NOT NULL,
  `prev_audit_adopt` varchar(10) NOT NULL,
  `prev_volunteer_camp` varchar(11) NOT NULL,
  `prev_starting_date_camp` date NOT NULL,
  `prev_ending_date_camp` date NOT NULL,
  `prev_venue_camp` varchar(30) NOT NULL,
  `prev_post_camp` varchar(30) NOT NULL,
  `prev_taluka_camp` varchar(30) NOT NULL,
  `prev_district_camp` varchar(30) NOT NULL,
  `prev_audit_camp` varchar(10) NOT NULL,
  `sba_accom_camp` varchar(100) NOT NULL,
  `sba_village_camp` varchar(20) NOT NULL,
  `sba_atpost_camp` varchar(20) NOT NULL,
  `sba_taluka_camp` varchar(20) NOT NULL,
  `sba_district_camp` varchar(20) NOT NULL,
  `sba_per_name_camp` varchar(50) NOT NULL,
  `sba_per_contact_camp` varchar(20) NOT NULL,
  `suggestion_improve` varchar(3000) NOT NULL,
  `expectation` varchar(3000) NOT NULL,
  `date_application` date NOT NULL,
  `place_application` varchar(100) NOT NULL,
  `img1` longblob NOT NULL,
  `img2` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performa_1_reg`
--

INSERT INTO `performa_1_reg` (`sr_no`, `submit`, `verification`, `college_code`, `college_name`, `college_address`, `college_telephone`, `college_fax`, `college_email`, `college_status_grant`, `college_status_minority`, `college_pl_state`, `female_student_count`, `male_student_count`, `total_student_count`, `principal_name`, `principal_mobile`, `principal_email`, `principal_telephone`, `principal_fax`, `bank_name`, `bank_account`, `ifSC`, `signatories_1`, `signatories_2`, `prev_student_count`, `prev_adopted_village`, `prev_village_taluka`, `prev_village_district`, `prev_student_120hrs`, `prev_student_240hrs`, `prev_audit_adopt`, `prev_volunteer_camp`, `prev_starting_date_camp`, `prev_ending_date_camp`, `prev_venue_camp`, `prev_post_camp`, `prev_taluka_camp`, `prev_district_camp`, `prev_audit_camp`, `sba_accom_camp`, `sba_village_camp`, `sba_atpost_camp`, `sba_taluka_camp`, `sba_district_camp`, `sba_per_name_camp`, `sba_per_contact_camp`, `suggestion_improve`, `expectation`, `date_application`, `place_application`, `img1`, `img2`) VALUES
(1, 0, 0, 'A02', 'Kishinchand Chellaram college', '13,Durgesh Co. Op. Hsg. So. Opp. To Manisha Nagar Gate No. 2', '18104557876', '', 'magicalkiller786@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `po_details`
--

CREATE TABLE `po_details` (
  `sr_no` int(11) NOT NULL,
  `college_code` varchar(50) NOT NULL,
  `po_name` varchar(100) NOT NULL,
  `college_name` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `po_mobile_1` varchar(20) NOT NULL,
  `po_mobile_2` varchar(20) NOT NULL,
  `po_email` varchar(50) NOT NULL,
  `subject_taught` varchar(100) NOT NULL,
  `date_appointment_po` date NOT NULL,
  `nss_orientation` varchar(5) NOT NULL,
  `course_count` varchar(11) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `po_details`
--

INSERT INTO `po_details` (`sr_no`, `college_code`, `po_name`, `college_name`, `gender`, `po_mobile_1`, `po_mobile_2`, `po_email`, `subject_taught`, `date_appointment_po`, `nss_orientation`, `course_count`, `year`) VALUES
(1, 'A02', '', 'Kishinchand Chellaram college', '', '', '', '', '', '0000-00-00', '', '', ''),
(2, 'A02', '', 'Kishinchand Chellaram college', '', '', '', '', '', '0000-00-00', 'Choos', '', ''),
(3, 'A02', '', 'Kishinchand Chellaram college', '', '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `po_login_details`
--

CREATE TABLE `po_login_details` (
  `sr_no` int(11) NOT NULL,
  `college_name` varchar(500) NOT NULL,
  `college_code` varchar(50) NOT NULL,
  `po_user_id` varchar(100) NOT NULL,
  `po_password` varchar(100) NOT NULL,
  `po_name` varchar(100) NOT NULL,
  `po_email` varchar(100) NOT NULL,
  `po_contact` varchar(20) NOT NULL,
  `po_year` year(4) NOT NULL,
  `po_invalid` int(1) NOT NULL DEFAULT 0,
  `pass_invalid` int(1) NOT NULL DEFAULT 0,
  `vol_count` int(11) NOT NULL DEFAULT 0,
  `vec_gen` int(1) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `principal_login_details`
--

CREATE TABLE `principal_login_details` (
  `sr_no` int(11) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `college_code` varchar(100) NOT NULL,
  `principal_user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `principal_name` varchar(100) NOT NULL,
  `principal_email` varchar(100) NOT NULL,
  `principal_contact` varchar(100) NOT NULL,
  `invalid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_leader`
--

CREATE TABLE `student_leader` (
  `sr_no` int(11) NOT NULL,
  `college_code` varchar(100) NOT NULL,
  `college_name` varchar(500) NOT NULL,
  `leader_name` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `leader_mobile` varchar(20) NOT NULL,
  `leader_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_leader`
--

INSERT INTO `student_leader` (`sr_no`, `college_code`, `college_name`, `leader_name`, `class`, `leader_mobile`, `leader_email`) VALUES
(1, 'A02', 'Kishinchand Chellaram college', '', '', '', ''),
(2, 'A02', 'Kishinchand Chellaram college', '', '', '', ''),
(3, 'A02', 'Kishinchand Chellaram college', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_user_id_po`
--

CREATE TABLE `volunteer_user_id_po` (
  `college_code` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `vol_user_id` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `college_name` varchar(100) NOT NULL,
  `invalid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vol_personal_details`
--

CREATE TABLE `vol_personal_details` (
  `college_code` varchar(100) NOT NULL,
  `verification` int(2) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `vol_user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `division` varchar(10) NOT NULL,
  `roll_number` varchar(50) NOT NULL,
  `nss_year` varchar(10) NOT NULL,
  `form_date` date NOT NULL,
  `address` varchar(3000) NOT NULL,
  `ward` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `hobbies` varchar(500) NOT NULL,
  `special_interest` varchar(500) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `height` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `voter` varchar(10) NOT NULL,
  `voter_id` varchar(20) NOT NULL,
  `aadhar_card` varchar(50) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `other_caste` varchar(100) NOT NULL,
  `worked_in` varchar(100) NOT NULL,
  `other_worked_in` varchar(100) NOT NULL,
  `toilet` varchar(10) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `guardian_office_address` varchar(3000) NOT NULL,
  `guardian_mobile` bigint(20) NOT NULL,
  `relation_student` varchar(100) NOT NULL,
  `guardian_profession` varchar(100) NOT NULL,
  `complete_120_hrs` varchar(10) NOT NULL,
  `year_120_hrs` varchar(10) NOT NULL,
  `class_120_hrs` varchar(25) NOT NULL,
  `department_120_hrs` varchar(1000) NOT NULL,
  `complete_camp` varchar(10) NOT NULL,
  `year_camp` varchar(10) NOT NULL,
  `class_camp` varchar(25) NOT NULL,
  `department_camp` varchar(1000) NOT NULL,
  `photo` longblob NOT NULL,
  `sign` longblob NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopted_area`
--
ALTER TABLE `adopted_area`
  ADD UNIQUE KEY `sr_no` (`sr_no`);

--
-- Indexes for table `advisory_committee`
--
ALTER TABLE `advisory_committee`
  ADD PRIMARY KEY (`college_code`),
  ADD UNIQUE KEY `Sr. No.` (`Sr. No.`);

--
-- Indexes for table `college_info`
--
ALTER TABLE `college_info`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department`);

--
-- Indexes for table `performa_1_reg`
--
ALTER TABLE `performa_1_reg`
  ADD PRIMARY KEY (`college_code`),
  ADD UNIQUE KEY `sr_no` (`sr_no`);

--
-- Indexes for table `po_details`
--
ALTER TABLE `po_details`
  ADD UNIQUE KEY `sr_no` (`sr_no`);

--
-- Indexes for table `principal_login_details`
--
ALTER TABLE `principal_login_details`
  ADD PRIMARY KEY (`college_code`),
  ADD UNIQUE KEY `sr_no` (`sr_no`);

--
-- Indexes for table `student_leader`
--
ALTER TABLE `student_leader`
  ADD UNIQUE KEY `sr_no` (`sr_no`);

--
-- Indexes for table `volunteer_user_id_po`
--
ALTER TABLE `volunteer_user_id_po`
  ADD PRIMARY KEY (`vol_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopted_area`
--
ALTER TABLE `adopted_area`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `advisory_committee`
--
ALTER TABLE `advisory_committee`
  MODIFY `Sr. No.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `performa_1_reg`
--
ALTER TABLE `performa_1_reg`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `po_details`
--
ALTER TABLE `po_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `principal_login_details`
--
ALTER TABLE `principal_login_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_leader`
--
ALTER TABLE `student_leader`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

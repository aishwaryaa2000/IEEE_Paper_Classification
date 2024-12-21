-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 02:39 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u856232008_betanss`
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
(1, 'A01', 'Elphinstone College, Fort', 'ahdaf', 'hkljdfh', '2318309456'),
(2, 'A01', 'Elphinstone College, Fort', 'shdlkjfh', 'shddkjlsf', '1234567890'),
(3, 'A01', 'Elphinstone College, Fort', 'fkljsdfh', 'fhkj', '1123456789'),
(4, 'A02', 'K.C.College, Churchgate', '', '', ''),
(5, 'A02', 'K.C.College, Churchgate', '', '', ''),
(6, 'A02', 'K.C.College, Churchgate', '', '', '');

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
(1, 'A01', 'Elphinstone College, Fort', 'qwertrdf', '1234567890', 'flkjs', '1234567890', 'FKJLGH', '1234567890', 'HSDJK', '1234567890', 'FJDK', '1234567890', 'qwert', '1234567890', 'assdf', '1234567890', 'xcvbn', '1234567890', 'fghj', '1234567890'),
(2, 'A02', 'K.C.College, Churchgate', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(1, 0, 'A01', 'Elphinstone College, Fort', 'Mumbai City', 'GOVT. AIDED', 50, 'sushilanildubey@gmail.com'),
(2, 2, 'A02', 'K.C.College, Churchgate', 'Mumbai City', 'GOVT. AIDED', 300, 'sushilanildubey@gmail.com'),
(3, 3, 'A03', 'H R College, Churchgate', 'Mumbai City', 'GOVT. AIDED', 100, 'magicalkiller786@gmail.com'),
(4, 4, 'A04', 'Siddharth College Comm & Eco, Fort', 'Mumbai City', 'GOVT. AIDED', 200, 'magicalkiller786@gmail.com'),
(5, 5, 'A05', 'Siddharth College of ASC, CST', 'Mumbai City', 'GOVT. AIDED', 250, 'ojaswideshmukh13@gmail.com'),
(6, 6, 'A06', 'Jai Hind College, Churchgate', 'Mumbai City', 'GOVT. AIDED', 100, 'ojaswideshmukh13@gmail.com'),
(7, 7, 'A07', 'Sydenham Collge, Churchgate', 'Mumbai City', 'GOVT. AIDED', 100, 'bhurekaustubh70@gmail.com'),
(8, 8, 'A08', 'K.P.B Hinduja College, Charni Road', 'Mumbai City', 'GOVT. AIDED', 200, 'anonshashianon@gmail.com'),
(9, 9, 'A09', 'Bhavan\'s H.S. College, Girgaon', 'Mumbai City', 'GOVT. AIDED', 200, 'aishwaryaramani.anand@gmail.com'),
(10, 10, 'A10', 'N.S.S College, Tardeo', 'Mumbai City', 'GOVT. AIDED', 100, 'aishwaryaramani.anand@gmail.com'),
(11, 11, 'A11', 'Wilson College, Girgaon', 'Mumbai City', 'GOVT. AIDED', 50, 'aishwaryaramani.anand@gmail.com'),
(12, 12, 'A12', 'Sophia College, B. Desai Road', 'Mumbai City', 'GOVT. AIDED', 200, 'anonshashianon@gmail.com'),
(13, 13, 'A13', 'Lala Lajpatrai Collge, Mahalaxmi', 'Mumbai City', 'GOVT. AIDED', 200, 'satish.kolte@kccollege.edu.in'),
(14, 14, 'A14', 'S.G.M.College, Grant Road', 'Mumbai City', 'GOVT. AIDED', 100, 'smita.bhoir@rait.ac.in'),
(15, 15, 'A15', 'Akbar Pearbhoy College, Buculla', 'Mumbai City', 'GOVT. AIDED', 50, ''),
(16, 16, 'A16', 'Dr. T K Tope night College, Parel', 'Mumbai City', 'GOVT. AIDED', 100, ''),
(17, 17, 'A17', 'M.D. College, Parel', 'Mumbai City', 'GOVT. AIDED', 150, 'nss@mu.ac.in'),
(18, 18, 'A18', 'Kirti College, Dadar', 'Mumbai City', 'GOVT. AIDED', 200, 'satish.kolte@kccollege.edu.in'),
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
(29, 29, 'A33', 'Vidyalankar SChool of I.T (VSIT), Wadala', 'Mumbai City', 'GOVT. AIDED', 120, 'satish.kolte@kccollege.edu.in'),
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
(64, 32, 'B33', 'Thakur College Of SCi & Com, Kandivali', 'Mumbai Western', 'GOVT. AIDED', 250, 'sus5376@gmail.com'),
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
(76, 44, 'B49', 'Nirmala Memorial Foundation College, Kandivali', 'Mumbai Western', 'GOVT. AIDED', 100, 'sus5376@gmail.com'),
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
(95, 10, 'C10', 'Gurukul College, Ghatkopar', 'Mumbai Central', 'GOVT. AIDED', 210, 'nikhil@mccmulund.ac.in'),
(96, 11, 'C11', 'Asmita College for Women, Vikhroli', 'Mumbai Central', 'GOVT. AIDED', 150, ''),
(97, 12, 'C12', 'Vikas College, Vikhroli', 'Mumbai Central', 'GOVT. AIDED', 250, ''),
(98, 13, 'C13', 'Sandesh College, Vikhroli', 'Mumbai Central', 'GOVT. AIDED', 100, ''),
(99, 14, 'C14', 'Rajiv Gandhi Night College, Vikhroli', 'Mumbai Central', 'GOVT. AIDED', 100, ''),
(100, 15, 'C15', 'V K K Menon College, Bhandup', 'Mumbai Central', 'GOVT. AIDED', 50, ''),
(101, 16, 'C16', 'R A DAV College, Bhandup', 'Mumbai Central', 'GOVT. AIDED', 200, 'nikhil@mccmulund.ac.in'),
(102, 17, 'C17', 'NES Ratnam College, Bhandup', 'Mumbai Central', 'GOVT. AIDED', 300, ''),
(103, 18, 'C18', 'Mulund College of Commerce, Mulund', 'Mumbai Central', 'GOVT. AIDED', 300, 'nikhil@mccmulund.ac.in'),
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
(116, 6, 'D63', 'SIES Graduate SChool of Tech., Nerul', 'Navi mumbai', 'GOVT. AIDED', 100, 'nikhil@mccmulund.ac.in'),
(117, 7, 'D64', 'Sterling College of ASC, Nerul', 'Navi mumbai', 'GOVT. AIDED', 50, ''),
(118, 8, 'D65', 'Ramshet Thakur College, Kharghar', 'Navi mumbai', 'GOVT. AIDED', 100, ''),
(119, 9, 'D66', 'JVM\'S Mehta Degree College, Airoli', 'Navi mumbai', 'GOVT. AIDED', 150, ''),
(120, 10, 'D67', 'Smt. Sushiladevi Deshmukh College of AS & C, Airoli (w)', 'Navi mumbai', 'GOVT. AIDED', 100, ''),
(121, 11, 'D68', 'D V S College of Com, Koparkhairne', 'Navi mumbai', 'GOVT. AIDED', 100, ''),
(122, 12, 'D69', 'F.G. Naik College, Koparkhairne', 'Navi mumbai', 'GOVT. AIDED', 100, ''),
(123, 1, 'D01', 'The Royal College, Mira Road', 'Palghar District', 'GOVT. AIDED', 200, ''),
(124, 2, 'D02', 'Shankar Narayan College, Bhayandar', 'Palghar District', 'GOVT. AIDED', 300, ''),
(125, 3, 'D03', 'Abhinav College, Bhayandar', 'Palghar District', 'GOVT. AIDED', 150, 'sansarejagdish007@gmail.com'),
(126, 4, 'D04', 'Reena Mehta College, Bhayandar', 'Palghar District', 'GOVT. AIDED', 50, ''),
(127, 5, 'D05', 'St. Joseph Senior College, Uttan,Bhayandar', 'Palghar District', 'GOVT. AIDED', 50, ''),
(128, 6, 'H01', 'A V College of ASC, Vasai', 'Palghar District', 'GOVT. AIDED', 200, ''),
(129, 7, 'H02', 'St. G G College, Vasai', 'Palghar District', 'GOVT. AIDED', 200, ''),
(130, 8, 'H03', 'St. Joseph College, Satpala, Agashi, Vasai', 'Palghar District', 'GOVT. AIDED', 150, 'sansarejagdish007@gmail.com'),
(131, 9, 'H04', 'Viva College, Virar', 'Palghar District', 'GOVT. AIDED', 300, 'sansarejagdish007@gmail.com'),
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
(159, 14, 'D19', 'The SIA College of Higher Edu., Dombivali', 'Thane District', 'GOVT. AIDED', 200, 'jeevanvichare2@gmail.com'),
(160, 15, 'D20', 'Pragati College, Dombivali', 'Thane District', 'GOVT. AIDED', 200, ''),
(161, 16, 'D21', 'Royal College of SC & Com. Dombvli', 'Thane District', 'GOVT. AIDED', 50, ''),
(162, 17, 'D22', 'Swami Vivekanand Night College, Dombivali', 'Thane District', 'GOVT. AIDED', 50, ''),
(163, 18, 'D23', 'KS\'s Manjunath College, Thakurli', 'Thane District', 'GOVT. AIDED', 100, ''),
(164, 19, 'D24', 'Vande Mataram College, Dombivali', 'Thane District', 'GOVT. AIDED', 50, ''),
(165, 20, 'D25', 'B N N College, Bhiwandi', 'Thane District', 'GOVT. AIDED', 300, ''),
(166, 21, 'D26', 'G M M Momin Womens College, Bhiwandi', 'Thane District', 'GOVT. AIDED', 300, ''),
(167, 22, 'D27', 'Samadiya College, Bhiwandi', 'Thane District', 'GOVT. AIDED', 50, ''),
(168, 23, 'D28', 'Art & Com College, Padgha', 'Thane District', 'GOVT. AIDED', 50, 'jeevanvichare2@gmail.com'),
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
(183, 38, 'D43', 'J Watumal Sadubella Girls College, Ulhasnagar', 'Thane District', 'GOVT. AIDED', 100, ''),
(184, 39, 'D44', 'S S T College, Ulhasnagar', 'Thane District', 'GOVT. AIDED', 300, 'jeevanvichare2@gmail.com'),
(185, 40, 'D45', '(S.E.S.) S.H.Mahraj Degree College of Com, Ulhasnagar', 'Thane District', 'GOVT. AIDED', 100, 'jeevanvichare2@gmail.com'),
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
(207, 10, 'E10', 'Vasantrao Naik College, MuruDJanjira', 'Raigad District', 'GOVT. AIDED', 200, ''),
(208, 11, 'E11', 'MSPM D.G.Tatkare College, Mangaon', 'Raigad District', 'GOVT. AIDED', 200, ''),
(209, 12, 'E12', 'Tikambhai Mehta College, Mangaon', 'Raigad District', 'GOVT. AIDED', 80, ''),
(210, 13, 'E13', 'M T E S Doshi Vakil College, Goregaon', 'Raigad District', 'GOVT. AIDED', 200, ''),
(211, 14, 'E14', 'KG\'s, Arts Com & SCi College, Karjat', 'Raigad District', 'GOVT. AIDED', 200, ''),
(212, 15, 'E15', 'KMC College, Khopoli', 'Raigad District', 'GOVT. AIDED', 200, ''),
(213, 16, 'E16', 'Laxmi Shalini Womens College, Pezari', 'Raigad District', 'GOVT. AIDED', 90, ''),
(214, 17, 'E17', 'JSM College, Alibag', 'Raigad District', 'GOVT. AIDED', 300, ''),
(215, 18, 'E18', 'PPES Arts, Com & SCi College, Veshvi', 'Raigad District', 'GOVT. AIDED', 200, ''),
(216, 19, 'E19', 'Seth J N Paliwala College. Pali', 'Raigad District', 'GOVT. AIDED', 300, 'sspuranik66@gmail.com'),
(217, 20, 'E20', 'Dr. C D Deshmukh College, Roha', 'Raigad District', 'GOVT. AIDED', 300, 'mokaltp@gmail.com'),
(218, 21, 'E21', 'TVSP, D.G.Tatkare College, Tala', 'Raigad District', 'GOVT. AIDED', 200, 'mokaltp@gmail.com'),
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
(241, 13, 'F13', 'Arts Comm., & SCience College, Lanja', 'Ratnagiri District', 'GOVT. AIDED', 200, 'marathermm@yahoo.com'),
(242, 14, 'F14', 'L.G. Mumde AS & C College, Mandangad', 'Ratnagiri District', 'GOVT. AIDED', 150, ''),
(243, 15, 'F15', 'Abasaheb Marathe College, Rajapur', 'Ratnagiri District', 'GOVT. AIDED', 200, ''),
(244, 16, 'F16', 'M H Kapane College, Pachal', 'Ratnagiri District', 'GOVT. AIDED', 150, ''),
(245, 17, 'F17', 'Patpanhale Arts, Com & SCi, College, Patpanhale', 'Ratnagiri District', 'GOVT. AIDED', 200, ''),
(246, 18, 'F19', 'Gharda Inst of Technology, Lavel,Khed', 'Ratnagiri District', 'GOVT. AIDED', 100, ''),
(247, 19, 'F20', 'Indira Inst of Pharmacy, Sadvali, Drorukh', 'Ratnagiri District', 'GOVT. AIDED', 50, ''),
(248, 20, 'F22', 'D J Samant Senior College, Pali, Ratnagiri', 'Ratnagiri District', 'GOVT. AIDED', 180, ''),
(249, 21, 'F23', 'Laknete Shamraoji Peje College, Shivar-Amber, Ratnagiri', 'Ratnagiri District', 'GOVT. AIDED', 100, ''),
(250, 22, 'F24', 'Mohini Murari Mayekar College, Chafe', 'Ratnagiri District', 'GOVT. AIDED', 150, ''),
(251, 23, 'F25', 'C R Shahu College, Tetavli', 'Ratnagiri District', 'GOVT. AIDED', 80, ''),
(252, 24, 'F26', 'Dyandeep College of SC & Com, Khed', 'Ratnagiri District', 'GOVT. AIDED', 100, ''),
(253, 25, 'F31', 'Shriram Raje College of Hotel & Tourism Mgmt, Dapoli', 'Ratnagiri District', 'GOVT. AIDED', 80, ''),
(254, 26, 'F32', 'Rajendra Mane Coll of Engg., Devrukh', 'Ratnagiri District', 'GOVT. AIDED', 80, ''),
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
(274, 5, 'SA09', 'Adv. Balasaheb Apte College of Law, Off Gokhale Road (S), Dadar', 'Mumbai City', 'SELFFINANCE', 50, ''),
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
(297, 5, 'SC07', 'Vidya Niketan Degree College,Ghatkopar-E,', 'Mumbai Central', 'SELFFINANCE', 100, ''),
(298, 6, 'SC08', 'Pune Vidyarthi Griha College of SCi & Tech, Ghatkopar', 'Mumbai Central', 'SELFFINANCE', 50, ''),
(299, 1, 'SD02', 'Terna Engineering College, Nerul', 'Navi Mumbai', 'SELFFINANCE', 100, ''),
(300, 2, 'SD13', 'Bharati Vidyapeeth College of Eng., Belpada, Navi Mumbai', 'Navi Mumbai', 'SELFFINANCE', 50, ''),
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
(315, 5, 'SH10', 'Smt. D. M. Cahuhan College, Silvassa', 'Palghar District', 'SELFFINANCE', 50, ''),
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
(337, 12, 'SD25', 'Mansi Bharat Gada Degree College, Anjurphta, bhiwandi', 'Thane District', 'SELFFINANCE', 50, ''),
(338, 13, 'SD30', 'Siddharth College,Boradpada, Chargaon, Ambernath', 'Thane District', 'SELFFINANCE', 50, ''),
(339, 14, 'SD32', 'ARMIET, A.R.Institute of Engi.,& Technology, Sapgaon, Shahapur', 'Thane District', 'SELFFINANCE', 50, ''),
(340, 15, 'SD34', 'Swayam Siddhi Mitra Sangh?s Degree College, Temghar, Bhiwandi,', 'Thane District', 'SELFFINANCE', 50, ''),
(341, 16, 'SD38', 'K.C. College of Engi., & Management studies & Research, Kopari', 'Thane District', 'SELFFINANCE', 50, ''),
(342, 17, 'SD39', 'Shivajirao Jondhale College of Engineering. Asangaon', 'Thane District', 'SELFFINANCE', 50, ''),
(343, 18, 'SD41', 'Sahyog College of Mmgt Studies, Jambli Naka, Thane', 'Thane District', 'SELFFINANCE', 100, ''),
(344, 19, 'SD46', 'A.P.Shah Inst of Tech, Ghodbandar, Thane', 'Thane District', 'SELFFINANCE', 50, ''),
(345, 20, 'SD49', 'S.S.Jondhale College of Pharmacy, Asangaon, Shahapur', 'Thane District', 'SELFFINANCE', 50, 'aishwaryaramani.anand@gmail.com'),
(346, 21, 'SD50', 'Javandep A,C&S College, Mhasa, Murbad', 'Thane District', 'SELFFINANCE', 50, 'aishwaryaramani.anand@gmail.com'),
(347, 1, 'SE01', 'G.V.Acharya Inst. Of Engi. & Techno. Shelu', 'Raigad District', 'SELFFINANCE', 50, ''),
(348, 2, 'SE04', 'Konkan Gyanpeeth College of Eng., Vengaon Rd, Dahivali', 'Raigad District', 'SELFFINANCE', 100, ''),
(349, 3, 'SE05', 'M.B. More Foundation Arts, Com., & SC., Dahtav', 'Raigad District', 'SELFFINANCE', 80, ''),
(350, 4, 'SE06', 'Arts, Com., & SCi., Sr College, Chondhi-Kihim', 'Raigad District', 'SELFFINANCE', 150, ''),
(351, 5, 'SE07', 'K.L.E.Society\'s SCi & Com College Kalamboli.', 'Raigad District', 'SELFFINANCE', 150, ''),
(352, 6, 'SE08', 'Anjuman Islam Janjira Degree College of SCience, Janjira Murud', 'Raigad District', 'SELFFINANCE', 50, ''),
(353, 7, 'SE09', 'Hirwal Edu. Trust College of CSIT, Mahad', 'Raigad District', 'SELFFINANCE', 50, ''),
(354, 8, 'SE10', 'G.M.Vedak Inst. of Technilogy, Tala', 'Raigad District', 'SELFFINANCE', 50, ''),
(355, 9, 'SE11', 'Uran Edu Soc, College of Mngt & Tech., Bori, Uran', 'Raigad District', 'SELFFINANCE', 50, ''),
(356, 10, 'SE12', 'Pillai HOC College of Engi. & Tech, Rasayani', 'Raigad District', 'SELFFINANCE', 50, 'nss.vvbhavan@gmail.com'),
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
(368, 7, 'SF12', 'B.S.Mandal?s Senior College of Arts, Com & SCi, Ratnagari', 'Ratnagiri District', 'SELFFINANCE', 50, ''),
(369, 8, 'SF14', 'Govindrao Nikam College of Pharmacy, Sawarde', 'Ratnagiri District', 'SELFFINANCE', 50, ''),
(370, 9, 'SF15', 'Finolex Academy of Mngt. & Tech,MIDC, Mirjole, Ratnagiri', 'Ratnagiri District', 'SELFFINANCE', 50, 'ojaswideshmukh23@gmail.com'),
(371, 1, 'SG01', 'Arts, Com, & SCi. College, Fanasgaon', 'Sindhudurg District', 'SELFFINANCE', 100, 'ojaswideshmukh23@gmail.com'),
(372, 2, 'SG02', 'Br. Nath Pai Shikshan Sanstha, Pinguli', 'Sindhudurg District', 'SELFFINANCE', 50, 'mindflayer8286@gmail.com'),
(373, 3, 'SG03', 'Arts, Com. & SCi, College, Kharepatan', 'Sindhudurg District', 'SELFFINANCE', 120, 'mindflayer8286@gmail.com'),
(374, 4, 'SG04', 'Dr. Dadasaheb Waradkar College, Katta', 'Sindhudurg District', 'SELFFINANCE', 80, 'sharvay.chavan@gmail.com'),
(375, 5, 'SG05', 'Achara College of Mngt Studies, Achara, Malven', 'Sindhudurg District', 'SELFFINANCE', 100, 'sharvay.chavan@gmail.com'),
(376, 6, 'SG06', 'V. Vishwanath Dalvi College, Talere, Tal. Kankavali', 'Sindhudurg District', 'SELFFINANCE', 200, 'bhurekaustubh70@gmail.com'),
(377, 7, 'SG07', 'P.B.Vengurlekar Mahavidyalaya, Pandurtitha, Kudal', 'Sindhudurg District', 'SELFFINANCE', 100, 'bhurekaustubh70@gmail.com');

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
('No subject will appear here'),
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
-- Table structure for table `head_details`
--

CREATE TABLE `head_details` (
  `name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `head_user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head_details`
--

INSERT INTO `head_details` (`name`, `email_id`, `head_user_id`, `password`, `contact`) VALUES
('Sudhir Puranik', 'sushilanildubey@gmail.com', 'nsshead', '202cb962ac59075b964b07152d234b70', '1234567890');

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
(1, 1, 1, 'A01', 'Elphinstone College, Fort', 'jhfkjh', '12345678900', '23938', 'ff239048@gmail.com', 'GOVT. AIDED', 'Non-Minority', '', '33', '23', '56', 'hkhjkjj h b', '1234567890', 'fgbv@gmail.com', '12345678900', '1234567', 'qwertgfd', '12345678', '12345678', 'wergfdsc', 'dfghmnbvcx', '120', 'Village', 'Talika', 'Dis', '12', '12', 'YES', '50', '2020-07-10', '2020-07-16', 'CAMP VENUE', 'POST', 'TALIKA', 'DIS', 'NO', 'kjfls', 'flkjd', 'ncbnc', 'bxnz', 'uioy', 'hsdlkvj', '1234567890', 'qwertyjhgfdsxcvbnm', 'mnbgrewsdvhjk', '2020-12-31', 'sdfgh', 0xffd8ffe000104a46494600010100000100010000ffdb0084000906071210121013101312101510121711171318111810181611161818171515181518282820181a251b1515213121252c2b3a312e182b33443f2c37282f2e2b010a0a0a0e0d0e1b10101a2d261f252d2d2d2d2f2d372b2d2d2d2d2d2d2d2d2d2b2d2d2d2b2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2dffc00011080085017c03011100021101031101ffc4001c0001000105010100000000000000000000000702030405060108ffc40047100002020101060404040204090d0000000102000311040512213141610613149107225171233281a162b1425282c11724334353729293d108165463737494b2b3d2e1f0f1ffc4001a010100030101010000000000000000000000020304010506ffc4002d1101000202000503040105000300000000000102031104122131611415410513225132718191a1b1234252ffda000c03010002110311003f00edb6ff008a2ad0b6eea6bd4579380fe56f237d9c1c7e9ce7cffb467b7698689e2e958ebb6aff00c24687eb77fbaffe63d9b88f087afc4ecf4351babaed4c6eda8b62e781dd60186474383213f49cde174713495ff40fdbde73dab3784bd454f40fdbde3dab3783d454f40fdbde3dab37873d454f40fdbde3dab3783d454f40fdbde3dab37877d454f40fdbde3dab3783d454f40fdbde3dab3783d454f40fdbde3dab37873d454f40fdbde3dab37877d454f40fdbde3dab3783d454f40fdbde3dab3783d454f40fdbde3dab3783d454f40fdbde3dab37873d454f40fdbde3dab37877d454f40fdbde3dab3783d454f40fdbde3dab3783d454f40fdbde3dab37873d454f40fdbde3dab3783d454f40fdbde3dab37877d454f40fdbde3dab3783d454f40fdbde3dab3783d454f40fdbde3dab37873d454f40fdbde3dab3783d454f40fdbde3dab37877d454f40fdbde3dab3783d454f40fdbde3dab3783d454f40fdbde3dab37873d454f40fdbde3dab37877d454f40fdbde3dab3783d454f40fdbde3dab3783d454f40fdbde3dab3783d454f40fdbde3dab37873d454f40fdbde3dab37877d454f40fdbde3dab3783d454f40fdbde3dab3783d454f40fdbde3dab37873d454f40fdbde3dab3783d454f40fdbde3dab37877d454f40fdbde3dab3783d454f40fdbde3dab3783d454f40fdbde3dab37873d454f40fdbde3dab3783d454f40ff00c3ef1ed79bc1ea2a7a07fe1f78f6bcde0f5153d03ff0fbc7b5e6f07a8ab3f55a64b5192d45b11860ab286523e841e067d2314c44f746de28f84d5bef3e81fc96e7e4b92d59ecadc593f5c8fb4bab967e59efc3c4ff00177fb034cd56974b5d830f5515d6c339c32a00c3239f112a9eebeb1a8d33e71220202020202020202020202020202047fe32f89d4e8dda8d2aaea6f5e0e7788aaa6feab11c5dff00817f5220471b53e21ed5624fa87a7f86ba29451f60e19fdda05ed85f18b59a66ff001ac6babc1e6ab45a0f42190052bf50467bc0ed3c1ff1828d65cb46a6af48d61ddaecf33cdad98f252c429524f2e04771c32126c0404040404040404040404040404040404040404040404040404040404040404040404040404040404040e13e2e78b5b67e94252dbb7ea89446eb5d6a079b68ee03003bb03d207cf345ab5659f87d00fcc73cf26058bb6aab9c2d6467e9b84fec33fbc0c6bd8fe57de5e39191ba7771df1ef0332d24a846de23191921b03eaac00e103e96f857e216d7ecfa5ec3bd6d24e9ed3d4ba630c7bb2146fb981d7c04040a55b39ec6574bc5a663f42a96040404040404040404040404040404040404040404040404040404040404040404040404040817e3f6a33afd3a1e4ba5423e987b6cdfff00d35818bf0d7c0da7d7d6fa9d607b156d35a57bfbaac4056676dde2789c63239194e5c935e90bf1638b7594b7b3f65d1a750b4535520744ad53f973944da67e5ae2911d96b6d6c5d3eb50d7aaa92e5e991f32f7571c54f706762d30e5a9168d20af1c783db65dcaaacd651765aa63f9815c6fd6d8e19190723983f79a697e6862c98f965de7fc9e75bf36d1a73c3f06e03e8c77d1cfb2d7ed26ad33c0a51b3214bc5e370695498b1a76c97fbcf3b83c9cd9724795978e90bf3d1564040404040404040404040404040404040404040404040404040404040404040404040404083bfe50ba22351a1bb1c1ea7a89ef5b0603dac6f6817bc07e27a749b3e8a92bd46aeedeb5daad3d0d73286bacdd2e782ae401c09ce267c95dcb563bc56aef8ea2db74c5e94f26d7a8b225ea5772cc701685c9001e7894ea2257f34cd7a38cd3ea8ad9579db5757a8bacb151134f4575d0cefbdb88a5d4a3e771c7e6e3ba7acbb96663a428e7d4f5b32fe27e80ebb6597d3ab58c8c97a00a43119dd6f94e08f95d8907e9238ff1b754b2c735770d4786f642ecea55eb4f2efa2a5b9ed04ef5962eebdf4bfd5082d585e23806e0dc64e327e7a2d82231737ca6c97b1b19db71b3d1a62b4ce2cbb8ed2b6239abe5901bacd9b8d6d5e985a56c37de797c2fe19667f6bf247e2cbb6c0a33fb4df9b2c63acca8ad6656f4b616073f594f0796d92b336fda792bcb2bf362b51658179ca337114c51bb3b15992b24f13c3b4629bda39add3c12ae5ee1010101010101010101010101010101010101010101010101010101010101010385f8cbb0ceaf66d8c832fa461a951d4aa822d1fec331fba881c4780df516eca0346c55ab3600177545979b9d9d6cb002ebf84d56e95c713c4f4955b979baaeaf3cd75576fe16d3dd4534d7a9666b5abf31b361bb0ea1059f3b649cbb16c67033c387014de637d1a71d6623abcd4f84f4b65ba7b6c5677d220aea3bdba55173babbcb86603271bc4f38fb96d69cfb15dedb0dad62d7a7b49c2aad654740386001fb48c774e7a434bb1f4a75ce9e5ab9a85a8d7dad845cd1ba7c9ac6779c9b12bde38c6e82324997e3a6a772cf9736ebc909165ccca2d4ccaf2522c95674a456718918a4c469de685068909c2973a87a6556c32945f4f2a3b87b19cc3ff8a677d8b7e50aedd4ff00547eb19b8b988fc611ae2fda9d326f1de6e3ff00199b85e1e72e4fbb912c93ae90cb9ec2820202020202020202020202020202020202020202020202020202020202020202078c33c0f1811eecff000f26c6bf72a27d36bed6dd1d29d4f16ad3fd564ca03ff54a39b64d396bb8dafc16d4e96f6df89eba6fdd43bef521474237402dbac0f98780e5ff00dc4a629d1a79e37a6bb68f89752951740950b0e45961c6f1c00a950e4d9c00027987278e24ab4fda16c9ff00cb5db536fdef5791a8c7995d8c6c61ba0614e00e1d01278e074fbcef2f5dc23379d7577df0c748f5e811ac041becb35001e045763135e47425374feb34446a1966772b5e26f1b79179d268e83add4aa8675df15d54ab6374db61e448390a0648fa7094e7e231e0af3649d4258f1db24eaad29db5b73f3676673cf95b97631f4f333cfbe2797efdc3f36b53afdb4fa1be997a7f898aa9bba9d16b6bd429dd34d741bd5dba1aed18565ee713d3af1586d5e68bc699a715e275a7bfe11ac4f9afd99adaebeaea6bbd947d5ab53900733214e3b87bcf2d6f1b4a70648eba761b1b6b53aca52fd358b6d760cab0fdc1078820f020f29ad533190190b5225de69858b6999b2615b5bbcaaddd182272997edc72cc16a734ed76bb8372065d8f37dc9e8aed5e55d97a2404040404040404040404040404040404040404040404040404040404040404040c3db1b32bd55365370ca5830707041072aca7fa2ca4020f42018110dba1b349aa7ab685b752d682b5ed0a98d46cddc60ef2f3247e6ace704679618d36898ecbf1cc4ff258d057a1d3ea1ae71a9d7d9560a6a2eb7cccb74fcd8dde3d483cbdeb98b4b4fdcac4747bb276236d7b2db2cde4d33b3b33afca6d66ce12a6ea8339661c386e8ce4e2533c8a3979e5eec9f89fadd05b769f6928d60a19abdf4f2eb70c8010d95c2142a470201079e4e44be2771b6798d4e9baf02a35d4d9aab010fafbacd536798466c54bf608ab8fbcf92fab64fbdc5727c561ea70b5e4c7bf9974975600e13cbcb8e2b1b869ada66569013c04cf5accce939e9d553d447196df0cd236e45f7d1cf57b1f53a6b6eb366eafd1aea1bccb293a74beb36e305d41c1427ae39cf6b85fae4e3c714c95e6d7cb1e4e0a2d3bace993ff003bb68e83f135cb4eb34c08165b4a1a6da949c1b0d7921d470c813d7e13ead8788b7246e27cb265e16f8e37de124536abaab210cac03060720a919041fa627a7dd996eeae67c94595b2ed406384b71c4446a109defaab963840404040404040404040404040404040404040404040404040404040404040404040f9d7e26f89afd6ea3534d8ccb469f50f4ad08dba19a9764de7c7e76665e19e03231c789e4cb9f2d2ed5d359a0bb480016b0d325acb68f3eb6b4bd81b28f91d1796318e92bbdb4ddc2e18c9b8f9f867edbf895aed40dcac8d220408c2be0c582fcf8b0f155ce71bb820638caff1f85f4c56dfe7d9a0db7b19d6e3a7a887f9a9a8bef67f1ae0b9427ab97df247d165b392b4aee7e237fe1e7f2cdadd3f69ff0065e956aad2b4185ad16b51fc2a303f94f88ada725ed93f72f5e63962214ed6d47975bb7f54123efd3f791bc734c553c71d55e8012a0b633ba33f7c7191c35d5a74645fbb9192cd3aa4a34eec402628dccf45ca7514075647195752aca7aab0c11ec4cb2b36c578b769873a5a34d3ec0f11ea76452ba7d569add5e9a8f96bd552458eb467e55b69383f20e191d076e3f6bc27d4f067888deadfa978d9786bd267a7448bb2f6953aba52ed3badb5d832ae391e847d41072083c889bed0a22578527eb8fb4a7eccef7b4b997946399ccbab131de507b241010101010101010101010101010101010101010101010101010101010101010103e75f8aba16d36d4b8d6777cd6ab568777382c0a9c83cff0012b73fac8cb8d3f8876d35e6936aaf9d487a5f1c8e0a9575ec4319564a747abf4dcd14bcf4f8686d3758d420e06d3b951e986b58731f472fce463558e69f84b3e59d4d63e67fea46d99b212bd6ecfd3a9de1425dadb58f16b2d38ad5d8fd779b33c0cbc55b270f973dbe7558f10efda8a5e98e3e3aa4ca3f289e561fe0b6fdda9dbcdbde5a7fa4b547f65789fe5235b6ef6b7e96e38d36d40e1f792c1fc555a7ab0b6f6a37296c7323747dcf01fce4a63768aca78faced7f67d3b88a09ceea85cfd860c8638eb367325be17353d247889ece63580a79ccf113de166e3b35be0563a5da9abd227f91d4e9c6bd53a55707f2addd1d03e41fd27dafd2788b66e1e26dde3a3c7e2a914c93af94933d3662020202020202020202020202020202020202020202020202020202020202020202020455f177618d46a34cc2e4a6c343aaa3216362a38638391c47987871fcd32e5cd6a77aee12ad768efc4db37f1fcc6dd03cba9081939644dc2dcbaeea9c484f11192bd9bb81d533473767337d8296a6d5dd3b968b3008defc37cf11cd7239679c94526d59afee34d5c5debdebf13bff006931aef2769d16e46eea7486943d0babf98173dd4f0fb4f9b8a4df81b638ef5b6e7fa256988cf169ed30ed6ad5ab75c1fa1e1ffecf1352d16a4b15983ea5003915565bfb4c777f94bbf8e29f24f486e6ab06071e52ec792bad28b5676d4ed46f32ea2be809b4fd93f2fee6722dd2d6fecb691a86e6ae424f1ea290a6ddda8d7dc5eea9149007e2360e3e51c147d8990998989b7f685b48d436cdc17f4c495bf1a69575db59f0c68f3edda1af3c45f77a5a7feefa7ca965ecd6163fd99f63c060fb1c3d69f3aff6f233df9f24ca409b151010101010101010101010101010101010101010101010101010101010101010101010384f8d7a14b364ea5d87cfa735db5b7546f3154907a64310710229b4596d2a6dce48c062305943261bf9f19e75e6b1698ab5f0fbe7aeff006e536968d067e6e3bc57778e7180436718c6491cfa4bb1dbb4bd5cf86bd6aef3c3be4ed2d0d55db92f40546c36ebd762704b14f4240ce7ef3e7f8c9cbc17153929dadfe27c2bc314cf8a296ef0ccf45b46af96ad469f50bd0df5b2b81ddabe0df73299cdc0e5eb7a4d67c764fedf114e916898f2b356d2d6686d36eb025b5598cd94a311411c30ca7e664238e78e25bf6386e2b1f2609d5a3e27e55ce4cb8e7793ac4febe1d155e30d232ef79fa7c63fd3aafec7889e75be9dc4c4eb9256c64c531b8b41b076c53aab6eb2b7570b8a41072063e6233df3ce389e1f260a56b78d6d2adeb78fc276e80be0649c0fbcc71bed06b6c0d9437bccb4ff009d6f97fecd782ff7996e69d6abfaff00aecfe98fe30daaf4e99fcbe375e469a8518cb5f6fca98cf51927f49b3e9b86dc47115adbb475965e22f18e933f2ef3c35b21745a5d3e99395152a67eac07ccdf72c49fd67dc3c6679b312a9cba4a2aad4e7a624e277f08bd92080808080808080808080808080808080808080808080808080808080808080814b311c86642f698ed1b761cff008d754b4e8b536de9bf55481d9000e4e1948e0dc0e0e0fe93064c7c5649ef1109c4d6108edbf15d576f6e54f8dd63f3301fd5fa66769c2cd7bca74c9f9469a1da7b3b797cce2a485655c6720e7393d3181d0e7b4ee3c911d1ece4c3660e8d59486477a9d5146fa3943804820e398e026bb56b7aead1b878569b52f3a9d377478975f5f2babbbb5950ff00cc9833064fa570b7ff00d75fd17d38ecd5f9753b2fc539aeab359536956f2cb5dff9a976466465dffe83655b837d2795c57d17263fcb0ceffeb7e1fa856dd2fd1909b3b4b7ed2d94ab551697b6c7702b4b0352b531cbf42338c13d66cfa37dff00ca326f5f1b51c7fdbe935d3b9f13fc3e5bedf53a1b7d0de5423e2b0f4da8bc143d7c3040e018749eb67e1f1e7af2e48db0e3cb7c73bacb9dda3e06db2f4da06ab46ac10941554fbd6301c137ac384cf2cf798f1fd2386a5b9b533fd5a2dc76698d6d81a5f12d9528a9f49ad16a8ddf23d2bb9de1c3e561f2904f2399e464fa1e6b6499898d35c71d8a6bd77b74be11f0dea751a94d7ed14f27c9de1a6d26f06f2cb0c1bad2381b08e0074fb89eef05c0d385c7cb5eb33de5e767cd396dbf8480cd89a6f7885715515104ca315a26c95a26217a6a564e8404040404040404040404040404040404040404040404040404040404040404040d2f8d3670d4e8359497158b2871bec3217033bc7970e103e6ed06c6777356a41d394afccb77ff000fcba300ef9cf420a81dce25392fcb5dc75fd3b11ab755edbbb596e252925114601c00580fa03c870fbcaf0f09cbd6ed97e3b24f66974b62aef0259882579678360f4e1ce69e4f8863bda6d3b96c766d66eb6a53bc88f7575bd9c095477556655e448524f1fa4e4c6bba3a7d2fb2fc3ba6d3e95748b58b2950c0a5805a1cb31672c1b81cb3138c638f41c222d0ee8d8fe18d168d99f4ba6a6867182c8801239e33d07692d8dbc0667370292e24272443b112b4f6ca2f9d38a2c97cf2992d966f3a859ad4051871c195da99f1cf3441bacf46555606ff0084f4f0678cb1bf95131a572f70808080808080808080808080808080808080808080808080808080808080808081a8f161ff0014bb38ddf937f3cbc9df5f349edb9bd9ed393d9d8ee803e236d136ebf52158ee1141fa6f6294619ebc0bb703c893de305751b4b34fe5d1cde93462eb694c026db6bab38c9f9dd57fbe5d3d95c3baf8a5e18156d3aaad1d295aeaa94295d68b5af98a596c3babc0600424f7954e48a566d2eeb6c3da834ba2acd3bfe63a29caa7cc77f1c493c94f6ccc14fb99bf2ed0b7f1af44ff00a0b3cdaaab01ff00295ad9fed283fdf2efb5688ee8f342b16199a334ccf2c27cb03584739dbe5bd3b91112be89c38cd95a74eaae656ada8f499f362b6e397b255bf4eaacd0312cb70b498d39cf2b0a855c67ebce79d5c56c3c4c44f6f859368b55993d950f311cb1bd8f6742020202020202020202020202020206bb6c6ddd2e8c06d55f5500f20ce016ff005579b7e8237a762267a439b6f8a7b301c0b2e23ea34b763f75cc87dcafed7c7099e637149ff0dcec5f17e875842e9f515bb9ff003649aacff76f86fda4a2627b2abe3b527568d3793a810101010101010101010101010103c233cf8e60455e25f83fea3536dba6ba9d25766e9148d39214850ac46eb003246780eb3b13a72636f3c39f085f4daad35f66a92d5a2d16ee0a0a1665c95f98b1c61b74f2e93b36d910ebbc73e16b3682d5e45e34b657be86df2f7c9a6c037d010415c944e20f2047532b9ac4f7751f9f82177fd36aff00c337fef967323cbd52f6c9d21a28a2a2778d35254580c6f1450a4e3a6712293252b0397594e3c35a6e61d99997aca0f3965ab16eee6decec04e840f089c9ac4f71ece840404040404040404040404040404040e37e28789edd9da6a8e9c2f99a8b4501dbe615fcacc5c2ff0048e17033f5cf1e4637b72c4caee1f1465c9149f94217333bb596335b631f9ac762ecdf763d3b729e5df2dafde5f77c3f0587878d523afedeeb75b4d16ad2f5596337923cc178af06e457e09b84606f638e73db94d54e1ab6a6e65e0f13f5acf4cd35ac46a25776be805575b513bfe4d85036374e54e030eaa7f599ad338e7f197bd5a63e2b045b2563ac6d257c24f166a2fb6cd16a18dc2aa7ce4b98fce14305dc63fd3e7c18f1fbcdf86f37aee5f21f54e0ebc366e5acf494a32e79a4040404040404040404040404040404040404040404040404040404040404040404040404040404040fffd9, 0xffd8ffe000104a46494600010100000100010000ffe1002a45786966000049492a0008000000010031010200070000001a00000000000000476f6f676c650000ffdb0084000302020a080a0a08080a08080808080808080808080808080808080808080808080808080808080808080808080a080808080a0a0a08080d0d0a080d08080908010304040605060a06060a0d0d0a0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0d0dffc00011080291017203011100021101031101ffc4001d000000070101010000000000000000000002030405060708010009ffc40050100001020404030505050504070800070101000203041121050612310741511322617181083291a1b11442c1d1f0235262e1f1243372b2091516638292a2253443536473a3b335548393c2d2e217ffc4001b01000203010101000000000000000000000203000104050607ffc4002a11010100020202020203000202030100000001021103211231044113510522321461428106237133ffda000c03010002110311003f00f979cca04683e180fecf0bfc3fff0022977daaac096086a42d86c423b4a1ad50231a14418d0a20d63541418d6a8318028832185107358a20ca288180a20d6288182a238e0a6d043c2ada685952a024a58a097a8b131140e88e32158a0152dc0d517a70b116d2d70c2561aeb5aa04374a6b14452ae2198fe0a458fa2968909c5706426c44a7b0fa72510d31a123daac228cc4701a26ad110345b233ce69ab49691cc1a2394362598467aaf7637fce07d47e4b771f36bd91962e63b85878d6da107622e16a994a5f8e8cd2b02868512928c2a16b6961bf4fe4991550ec7b07d0ef0436242563e814da88269d54aca993d91b1954b195c36a642e96313b458877eb7505b32d2e5711a5a1f856dfecd0bfc27fcc526aaac2976aa142d861525850c0a28631aa2061aa2e0da283d0c0c5161e95103685107342881b4288151440e8a26c30e41923ce42821e55ac5391c5005caa8a0a7b92eac44454bd1145721da800e5681aab746fb742b0581008c2e685005b2b0d45c133f8735e28efe8a2f6836378016f97550d88762782d428b43b13c2c8aa88629882ae5568df1a1a6c05c45437d111638dd3254d41b278bbe17ba6dcda6ed3e611ccac05c4f72b9921bfdf1d9bbafdd3f92d78737d52ae293612e1bb4823950fe4b5e394a4d806659305ba93af702af63bd66c85a252c42b09ac0145ee8bd68b1552f866c9fb0e889d192fca0fc4d2772b8d0f68be147fdd617f84ff009dc95435614008445b0c2883981441a02883005170362860d605103a28813428839814418c5551d2d41b478047102250d405ce5520a0b88e57ad2a93bde8d42b5a1ab82dcf4aa38222c44bb4c2031506cbaeab8a18a206d4c860498586c0a04be032ca23b102a4d104e400e142374369d109c6708d35a6df443338b44f12c26bc93a76ada1b8b60d4d823d2f68dcd4b515a1b62c1a22d93a718f56a09e2a8e55133da893414b4f3a19ab4969f0fcb9a299580b8a6384671111a591281dd7607cfa15ab8f9afa67b89b3109015b734ccb256891f83b8ed42a63762b0dd350cb77469212b1d755b5e874c4e5a88ae69a20fb4a4ec409dcac104d1bc23ffbac2f277f9ddf8255569624bb50acb18d51073428290606a89a18d0a26e061aa0c6b0288300511d0a206d51068511d6841d2394468e1282c4165cae2c4bdea55887b90da9a145e86d4d0b73d2ed14845331965cf3d0e10362a54e589a1ec7a7cca5051cc723da8731c992af6184d8a1d082b568bd8856044720b74b9082339232ccd90df3102bbacdbb4461c4703e616be2e4b3d97622d8860f5e4b74bb2b7aa84e3581d392b376894d4a515a5ecdd119456569e63914aa186122da8962b512086baeae1790c334e1ccfc533601d298cbd86b5247306e3e68a65a524ce946c76ea6d2bcc730b5e36641f48de212059652cd08d2e75526a03d9aa409db958f132b46f07c7f6585ff0018ff00adc9554b225da850ae1851707b4a860d68503420140cf6180a1831a14418d511d0a204d5103aa88ed50588e38abc5053de8904b9e82ac53e220d99213be2a1b57a268919272cf401062ac7c9cc2829cdaac76ec60f6285609848a6562826bd68c79ac0687b622d9872e345a1e0ad132da687c047b5490b4bd2b2c95312688eaa45c8705f60824daf6f7d9d3260ad82e95af24d98157333e27972b768bf45a70855c90dc5305ad4109ba1ccb68263797a8a1b8a1d3b214542373a5d16cbb064267256ad0b8d015ec06f8d0e898ab0514655801502512189ba19ab4d3af43e611639692cd9ea6330b228a4469693cc5c2d1397e9219a2c060b875479512ee5161880dea10f9af46e76e5679e96d23c1b1fd921ff00c7fe7720bec3564c06a0115b58a9720e6b5430606a88e85103510369510305440c288e856811548e5555401cf432e909df114b92f44f12324dc9709a24c24e59e8cc49e24559f2e61001ab25cad558ee941ada49a77429a584188748f1868fc5013014f1473b1572540dac2b4639d8b2980b44e4da42c1090f7561b25d1cc416e8312c9d3026e435b289b2137308cba7789173a03a027e3c61f234631810882a2ceebf9a77e23267a5778ee0d4a822e91963a6bc7256f8ee134aa55876d158f2c836b2670a23955a1c1e0ab57893cd4b028a505869890689b29760a28c973b351036851007b54482eaab69b71db94188eb497064ff006485ff001ff9dc82fb0d5972ed43570ada109ba180288100a2061aa2c2a28a782881b428831a5447b521da02622bda386221b92c43a224e590f4491a3a4e59af444f8955972e5491e6b6ab3f9da3d0d6c155a58c1015c8a74404c98a062022f14084ba1f1419f645731daf4e89257e28e89453c50636595f888732591e38a6c73612d13105a1b6127484e590e87013662cb9643bb34fc7122da03a1ad7860a16e62d531910444622d220f9c477a96a9161500d39d161e5eab4e1501c5f0fa836fc966bdb4ca80e2f85d0a5e50d976638f015416894c344a03b457039133db5470b00618e3b34fc0a742ac75b85bbf74fc133c281d3861e87e0517e3aa16e913e3f02afc1434612a780766776e56486b497058ff6487e6fff00ec72ab03566c041470b1a108f631a145cae80a204a23a156d1daa9b4775a9b478b90dab71cf415053a2a9724d097cc24e59c82909dd1562cf97f46ce80ec966b95a81b259493683e1cb2398a14c3924d9821542c391cc1068c353260ade86370e45e09b0fec0a7826e3bf6253c45b78ca29e09b03ecaa78036e09745315f90c6c04c98a790c64ba3989396439b2a9b23365907d927e38900162d3862a70b56bc66904bd88d09e2b516914b71667bf6da47dd681ea6eb99cd7b6ac11991c508b38923cd66687b11950e15eaa198a2b8861f7b2a321b224928abd0d96cb6f89b0b753b26e385a5659168c0e1c22351d6ff00dd09d38e97e493ca65b739ba8696ff000ee16cc38e02e445332da0d1d4f8d96890b761c897fee81f12ad4f47cbec02a4db9d7f255a437ba521756fc14d2b4aadfb95c8c69b5a138473da24d84d2958846f5b3dc4847e3b2b3e963e5ec6c4625b4a11abca80d05fad370833c7a5ca913424e861808458baa0dd0a5474255a80972ada026228b06246528843a6c21aa37ce62cd6ee401e29196e44843fed3c2ffcc67fcc161cee5fa34e1293ec7fbae6bbc882b2ddace9020d53263b43841c3eab4e38217c1c3569981772d17c2c3532625de5d14b30e4d9802f20dff57a39886f2b9f6153c43f91e320a78abf238649578993905ba4d578c1f98a74a29e20f373ec88a62af37992a8fc41f9068808e60af378c34c989568061ad38e0104b569c714165a988262315a124c0b296899fb34ccf6915eeeae34f45c9e5eeb6633a313d892319026f915052bd1e5356ca19e472c3f2c3400f89b72056ce3e1fba4e599c6660b48d22c3a0145d1c7192156d30cfe4007bccb1e81178c0ca2e5275d0468bf4ba9ad2cb1b1c3855c053a91427caaa6d5a2376165dde69d23a7f356a33cf83b3ea40e5700a8a2633ccfdd3f02a22b278b95c6c4cad1bc1c940f9386d75c6a7ff9dca4cb54bab170fc3da3500286b514b5350fe49b6f49216b2239a435c6ceae97743bd0feb9256f6bd17071e774ba2813620426edd73d2aa0a747082a114ce2ed68a93e68a6350d3359b5801a1db7f2ebe49d38aab7110c7b89da05856b6a8e4533f107c90b9ce20c4aea0e7027957f555578e06e46aff696244a873cd77009b1eaa7e389e46f8b304dcfaaafc505e42d98e3987531ee6b873048fc52f2e0c68e6690619c609a8743daeb0393da0ff348bf1b11ccd39c13da35e0fed6135cde658ea1f1b1047a592bf0d896ed6c651e30c9ccd1a22086f3f7627749f227ba7e28e6e7b23397e960cb4669bb483e20829f8f8d65a56c62d131d843ec932715407422fc48f694bb82025a86e0bd825887c17ba0ba1a9e0ab459848fc140e84c9c68ef649b38d007c14cc78d05448744f9104b9aad053daa209735443366698ece13ddd1a7e944bceea1984dd67a995cab775b64d423721412e6ab525996f0234d4ef407eab5f1f16fbaab9078fc46b2eeb5ede6b7cb21645271c38776e8e648ecfe6310077b9f2e8aae5a435cdcec398bc322a3a6e86672a19fb4bd1d5a8e55b2b43ccacd547d11c476261da8d4dbe0ac34d9132fdcd8ee79a2d294dbb75c4c4cbd34870362d655a3a39fea0bc9afe1f057602aca94777cff00847d4297d2e174783a852db8a57a84bc7dac7448b4dff5d5558b948267140df45522f6431b1126e36fd6ff00c95f86d36451266e412694b1fcd371e389e468988cd3675fc79ad58e3017245dd174b9c2b50760790e83f24e9840791b67241aedc0a15762d1fc472eb6b636f1dd22e286f7c806ed74bb10827a6bc529669eceaa842623e8a200231e4ab4bd8c119c3aaab8ca9b4872f710e6a58d614688da72d44b7fe5351f24178e275576648f6ad228d9d87a86ddac1001f374326fff0009f4458ef005c22ffca99d604eb35cb446c41cc03de61fe269b83e6ba38672cecab8587682c2d075b81a73a50d3c5165649ba1d77a8627678801e61975083bfddf8ae567f2b0f2d469ff00899ebcb47f86e0e008b82375b70c7736cbeba774a2f050261a0f0404424dc70404c24e98a39a5178a02588bc504b98a6909dcc57620a2d41a410e6aa5a0bc529bd30b4fefba9e82eb3f2d69c229688173ac692588d5340a74c0b0b0e702edb75a38f0dd0da9630ee790d8782e84c6402b1cdf88188e22b604a0caa1864336be059a751fe2e495b436e25893e39d4e35e83a2bb96fda09958a619a826bca850af4b232ee022343d6ed5acf324fa2d3828118739868ef8ad1a43ecac5b78a80a30f92b076cdc775c3c4fbdb447054d25e09fde7446ff00d65335b2b259d86baa5eef10d1faf452c4947bde49f01f33f8fe6ab1c532a6bc7b18d1b5dc7a9b03cffa79abca454dd3441c4f482f24381dc1e5e5e480d30e239cf4023975e8ad5b46e3e6c7935ad6be86cae0441cd24d89f24e94baf40c42a6a6fd0a64cb4a02666e9523eaafcc7898713c5f50a7ebe282d11ae5e688dcec9592cd33f37aca52f41320b8d941684459521416848790a6c3a1cc98aeea285450a23d0e2a8b9749164ecf1164a2b6340716b9bb8fbaf6f36bc73047c37507efdb4a43e36b276083a8c13401f0c024d697a1e9cd60e7e6cffcb67071632eddc9f89ca4489489180e603c6904f4d46cb171cc7cb793773f265e1ac62f1927b748d142da0a69a114f45ea78f2c6cfeb5e672977bc86c335e4453a84d0865a8a45025a8e4405cd5682cb55a02e6aa414f62884ee6a9b412f6a5da821ed54b579c48c12245a16005ad17ab80bfaacf9cf269c2e9554de0711b525aea7323bc07ab6a167bc74dd9b03093615ba1985da5f49ccce1821420f1d05401f8adf8cd429d84dee13fc28d6a8b18654923a9b24e77b4449d0fad025a0d316d6b0f995487dcbb85c31fb48ce680361ccf9a3824da4f3643a8643a9e94069f4a2d385053bcd3758b8bee0f34f56cc8f8e58687d0f2571601c49c8b5134a2b9ae04f4b687e0e5e5608ff7917e1acfe253b027359907bbdde5527c4935fc29f34da0867c7335358086915b837db95078f53e4957232441b15c4f573b9e69439d2373f8e168d35af8289b34ce6265dfab28a1026ec0228bd391a38242bda687b711e415ed5e24f3f8b77687e48b692184cc20b92f42239d5b25f90b1c4e585e5f2f212b2cda662b1706e1ef74547c52fce8e62ecff0f7a01faf44173abf1314df0e88e4aff269778b6659dc93a7ef007a6e9b390abc4470f2ab8ef60399b04cf207e3173181b5bbbc1f2e4afc92e121be261d41a839a40b6f43f0dd5cec3a3c65cc48b7bbc8acdc986da78f3d25586b8d6df25873c74e9f1673ed62657cc91a07f7711cdf0adbe06df2489c99637aa6f270619fd2dbcb3c56d546c66daddf68dbcdb7b788f82e8f0fcdca75938bcdf13c7d2c595980f01cd21cd22a08350577b8b971ca6e39971b3aa3742d1b080e6a8a074a882dcd5105b98a2097315697a12f621b144f1020ab88b6373741704d4da84035ff008a83d2a93aa7cf46911dae7021bd9b9a3bda9ba5c7a6d56b87882550a2adc65f5987902c0f214bf3feaae4dd3225983c6ed185aee5e49e5d76725406d396cae294963c7b388e1caa6de0939ced7117c4b0e3efb6e0dd2f4b36b1e54d2174bc3d5655116ce4ccb221b03836af34ab9c2c3c96dc228f13d100b0ef3bc392684db3128037bc013e3c945ed1f322fe9f5517b531cd70f15af3e0fcabfb063c3a8dd510788ab81a78569f35a71e99f92eaa6b9cf32f643b367f78ede9f71b4fa943954c22b88d364fbdd524e17351411569db928a3162316aa212478f50074517043661410b13352a207db2bdae4374cc5254dafc4083284a55c87303f61596cb966cb974d5c7c4b4387f9249353cbe1f34ac72f232e3a5b30b03a0d9699815b113784d05689396345b535c4bcd65afec61541177385e88b0c2d2b2e4d2090b38bc1a440d79db5d28efc8a7dc350333d870991631246ad3d4dbf9255cb4749b7236583ccdd0fe48bfc5b764324177353f348afc34a1f91628f7687c8d149cd2a7e1b05c311601b870f3f0f157fd6a4f2c539c898c3a6a2b60b852a0f7c02694048d406c09b57a90827c6969dff232c62718a4b996d1a8ead65c0e9068dd3e3b1aefe85572fc5b8cdc163cf33e926cb79a22421aa13aa39b1d769f4e5e63e697c79e5815c9c53259797f3c3233497074378176904d771561fbc0d2dcfc177b8797ca76e57271f8d399c5f9e87d3ad2dbeff43e47c0adb3d14364f116bfdd3e9b1f87aa9b01406a2da02e08504398aad1413118ae7684919a82851dcc90a8dd261eb69f7adab4f8960ef1f3682a8ec6aaaccf9a9b2cc3d9131621ab43439e433fe724b47820b0e9da3d232af640746702f8d10ea03a13b5b922c711c7b2dcc4580d2e8c6ae88e040e836a22b8e95644da65d500f51f5520151f1130fa440e1b387cd4ce2221022107c3a2cc84f8961809ab7e0a23d83e1af0f6ea05adad6b4de88f1c768b6a5f1dd4032a1a36af25abd04add11ac156debcfaa351922c7738df6e88f48581810e97b676e6b8788ecd2f3e166242149f68ef758f89a47ef389e7e5f102a53b7a8cdc9dd23898817b8bdc6ae71a9fcbc92ed1e3350db3eead7aa111aa04d9b85109629aa884d1d4142688e5556ec2701ba0da097c4af9294c836524c949cb3d1f8e1b48b0cc0aa7659b2e4e9aa609e60d81528b06596e9f26972646c0c06d82e87c6c7647254d5f8405d7f165da0dc41c6992d09ce24568683992939481f266f8597634c38c60741713ef0b107f055b91570d9af12c851e19d434be86bdd3f81fa555794a1986bd9ff0008cccda086f6f64f162d2280d3985cfe4c2ef71bb0ca7a3cc392d570b3d689a384a49e94b3242f6c2ba1b4d297c88758807cd54cec0dc6124b60dd912f824c27905a4b3983b8229423d169e3e5ca5db3e7c38d1b8e6609971691a4b435a1d0feeb9edda20a779ae36a80696e752b6cf91bf6cbf8242995cf6d2d6c2308b229d0c21ada33557de6906a03ba1d89e813667283594bff00496e62c744bc38203887c487de6f3616904edcc12056a79dca7e56e38f44cc7cedda658171043dbd93b5c5d50c90e0dab9b402ced86fcfc8f3b3f8792b3f261a2cfb792d24776207d7536c74b9ad234826f523dd245c5b7becded9becf9259a1a5a091de028fa0a51e37001f881d15c5954ce3ac68b93e543c8569b28ad0b90c69b1490dad9a1d7f1247c8854b2b88116f488e66ecc1f6667694d57a51233cb42c71dfa42a267f8318d5c0348d83cb9841fe188ca8ff0098049c797beccfc762b4c5e71ac8ee8d1882c7bc01520f7760ed40007c4d169f7d9d1386411a350a10455b4da9c937055411cc7ba61a2269ecb9069a9af2adbd132afda753b06d6e410e81507ce3866b6db76dd4aa55389ca961af2e4b3658f686c7ce10ead764b44c72be2a22d219b84dc32d07491e218250810ea6d55aa28db1e65f08d1e08f03f822910e327301e0b87247b585a8f43faf556a67d27bcbcf6265ab1b2ace6a9610cd83223dc2fb975371faf9a2d9761da41b7befd1521362331b8510c71144125c8b4826243e685709e8869926dd6c2aa5ecc98974a48d6c95966763824b87610b1679b6638e930c0f06d8d166cb23ba4d70bc3364a9ed556365e9910c2ea705d464ccd79bf883d9821bbadd3326c5213f89be7e377aa58c3b72dd55c97314b7fd57a1a2d41b0b2c996674c51dc4e740a8252a5dd3351169a9863cd1ed6bc743f811709f283c4f1251624260d2c11e137c291d8dade8e1411401b070d5fc564bcf1d998f496c906466362433a81151f91e846d45cfce5c6b4e3477fab90fb3252995965727ed639f248b40bd91459756bf18411e48541d9c0d4116208363e611e39d9e8acb8e53f62d87099830e306f68f811754685c9ed3ef5398d4d03e0edcb57638793f263afb72ee1f8f23e65ecc50a2d5b0a03a00143daea68a1028e6f8b88a8a023556e01bad9c77f708e497677cb33b09ddd6c66eb21cf690fa9a30e9201353a8509b83ef3b7b81a264cf713b4b460eac421e036a1ae0cb3dcef7758a9ef0d8114ad6c6f76ca59ff0a9e258ea51c1bbb1f5d6d14b56a2e39fc7c916d1dc3233183516f666e0968716501ad79e91d2a86a0f38ec327487026df3dafb730a915d717e7bdc86395cac9cb4fe38a7b108a5b7a12938e3b3b2a4125310a67bb12ee67dd712d3e9c8ecb671dfaa1f258181636c23b1156e91400834a0e409dd6a9016ecd1312a43cf526a3f0454c912891c5ead20d355287d10869af1265540aafc730fa888de84b9be55419445771cd0959f243b64f8ff00b56faa0954b830f9e1dd277d96c811998e087b40a023e29b2a23789614f87a4b4d7f84047a16c40c75c2d4f921dd0a8f76eb850c4c72aba90cf4d47f0560a7d968d53e4a289a7544228815e90995d479c805213b2e95953f08719596aacd9e5a6ac713ee1d87acb964d38e296e0f85548b2cb6f66eb49ee1b85db641a0ed2391c3e89b8e21b4aa6a3e86ded62b6e1d33e4a6337620e8cf708753a77a2d58fa28fd9032ee887addef39067746e302cd58a1634b01df92cbecdf4ab3169da9dea7a2d18605e5911c834970045115e978ddae5ca72e347a2cf32ecc25c3e54c3987b1b5d3128fa11401dcc8e57a79aae5c77d9912e838759226264aeb25286ea5c57b1af80874a374690a20b4c86f9a954316230fc51f05da9868762376b87470e63e63c1370e4b85dc2f3c267ecfefcdf05cc74388d7c20fbbc42a1638defb02093bd01f3268babc7f3373b8e767f1b29770cf339ce5600688109c1edee9885b42584926a6e755c7223e3677fc984e5c592cfc1b32428a7b385158f0e0cee35c3bccd268007568e6dadcc72eedf5e1f231fb63cb0b0e78dc50c6b80860c70d07dfa6a0296d55268ea69a1d8fc56cdcd6ca915165cf68826388313440824bda1ceef06102a038d4691a811cc5c0a0e59ee5d8e629660f9fa0ccc47086c0ed112f120bd85a740049d248735b702d51e7753cd3466cfce8914c498634ba1c315235341a0ad4804de94e5f92af1d998dd298ff006fe13dd7a74a3f6f88fcc2a9d2523c464c1fdac134a5e9505c08e6d3f7dbf3ea1104e786711cb806bc35910506abd1e3a8e8e4ec73d244961e28e71001ef11ef0e6168decd94e92928e6f7aa6bcfc55e97a2d7c704214d22b8f48db53797d1106c5518f49e87b811626a166e48129cbf286a1eddb63e04a0c71da96a494b55a09e575aa2686429cd40817a15715407c6aefb814a274aa3339aad6a25dbaf3d3d0931ca67f667a6a3f40ac34ed09f45142661ca211c477c158b42269ea2e4043526dd1b8c1f2702bd567cb26ac7149b0dc36ab1e79b5638a5387e11b2cd72d9d226982e1940107b52618661a9d302ad3cfd96813a4d17509cf98a766c37f4450a54b97f31e8311b4a98a77f05b71f405c30a69820b68087068d5d0db7f02939ddb46315b665c400639f5bde8ab8e6ee933ea29f998ee2ed77ad775d198c64fb5999165fb768791de69a1fcd7379f2f1ba68c16ae1386691e076a2c98ddd37650f97efb68365bace8d87984c59f438f3e5d52c95f0688725c131a0a4646104c4b24ed0d5312aa211c78154532447f14c353b1cf41b8ecc41ef84e0f612d7035042d18e6cd9f1ed3cc7f37409995331122be14d4284e86d6b6239af0fa576a1112144a7a56962db763879e5c755cacf8ae354865ccd10845699c87db41350fad4bdb5d9e0821cea1a55a49a8ad2f44df2fd1762619fe6a5e45d2f3385c50d7c4612e0c89dab0b4f56baa40376b98e3622da4b4d0ad96074778ded12c7cb96f62e87322beebab05e5c0b490285c08f7b43853f89d4a2a996934a29d155ed670c331a7c3f749a56b4e5fc8f8a9b42c9f9eed3bfccef4ebd6839a9b43ce57cf4e84f6f684b980d396c6df24532b0c957cb2698e6088082d2da8a73aad3867b5a3b3fa877da2c6e9c86799c6791d8a8ab366ac6f26be61a1f0f4dfa9a595d9b2c665aca1120b5c1e2a49046920a098e96944705b0ee8d40e07256af557f680c295262d370115e954bdd85354dab6cbcfdfe0b858892cca8fee3bfc5f8045434ec1d542a259b7d2ea21192ac629cda94168a1442692b3e54f90ef86c2aac79d6bc225f83cbac59d6dc625f86c9924258aac1c130e5a309b2324b64a42cb66309d8bc421d02962948f14e70d28871f60b157e4f85ae35f912b65f40c676b5313c474b0859f28d92201989c5ecd239ec1171f54ae49b43060cfb82c7d4ec6869fd3c56ff002d463d2e2e17e0dd943bd9c4dff05c7f917cab5e38e968cb4bd36e6878b1ec52052b275793d2cb7e53a3b138980b364379ec4b416d94aaaab82a624d67ca190d9330167b50d1330d06d70862b14d888a6252a8a6488ee2587f827e392acda2f3f2755af0cd933c107c670435ab7e1f885d0c397a73f3e3b0d3070c738e9a53ad6cb44c88f1d899c972c34343e2116c3ad5272e56bb0386f501a28978d4f2e8ae55179952f1a9a2b4e83f574c449722e7974bb8438b5742aec7ee13d074f0a2b9743956bcce3ec70ee0d41c2d4a1dfe7f25ab1cb6247e7640815239fc16993687f108b21559bd2b4fc91d8ab3652cc428c69ddc696f1296b384d486a87476e42b94a374ac330c537143747a88f60a41abb9d4a1a138fc10aba64e7eeb8834b3288ee3bfc5f82ab741a78830efe6af6a249f87c956d089edf155b16c497d4d025da6610e3250965cab6e3125c2a56eb1e75ab1899e1b23b1592b544b70893bd548ab53dc0a5969e367c92d86ca05bbe8932631314052ae4bd28ee275285df1f0530aacba41f87702ae7396ab4384ed2dc7eed212eb4fd21d1a2d295e452f65e931959f0e6014bf541967478f1c4930092a50a45ecff1898366282bd02d1c7d02e074c2205abd6e9996429895bd89568b4e320d4f821568a8cbd10df439344730c4aa86b9984b36510d5312897566e8d2f454b2388d426c344fc04cc725e9199f954fc722b2c515c62516cc3264cf031c1a3bba770b46ec67d435e29831dc2661c9fb273e3fd181d0c8b2db2b359a75a140d0c156594c9cf161e743b8aa29748759c8022375b2a48df6ba3da1cb24e66309fa5c496937dabe9d11cbaecc9571e1cf871685b520de94faadd867b5ece7311437ba056d7f05a016a3784bbf6ee0ef75a6a398086c49da591311d55e839aad0b460c5f36426021ce6d76dff2aa0b9e8142ca3321e0906a09e487ce50d3bba2f82356994226eb870497e4c87dd7ff00887d10e4aa7f10e87c10ec20c683552d5e91cc420106cab6b91c92857ba0cab5611249192ad163ceb66296e11254a2c79569c533c3610b7a249f12ec1a4d48aa9ae132d45a709a66c8f5306cb4dc8ad21f989f63eab3dc8e98a95cf73274b811faa22e3aace748f70ed940ee57fccad7697c7127c488a512ae4d28d4ce105f603741b5692cc2f07d2d6b697414d9137c2b0d34a2bc5614cb498ac823cdde411fa44ce0b43453a21b504c58cabc97a2a96140a792827c4416a1047720b570df19eb3e557a218a52ed5c248f06a8546c998284dc4d536ca2b5a3d3f06a9b8d44531586b5e159f92215371b4baab763dc60cbaa779770784acba371ee18f1dc17ef0f927f0f2fd565e6e3fb88e95bd8dcaab558eabd9651273a586a0f9f88f15685d88e9347b2a09df602be1447b44d323e70d00346e6c7cbc11f1e7da2d9c0e0078d42f5e75f92e8e3923b8a40643ab801a8efe29f168ae37883d909ce1d0ed6a2997a4daa29a9a26b5ad49a95cbcaeea92be1ee6374171ad4c320d45f7ea154ba44d9d9a1a6f5dfc568fc8167c78bae54f424b72644a07576a8fa1439ab4944468dd2d44f351ed50ac4668b02a6be286f4b8552f0424dad78a4521076b2cb9b5e31299085fd161cab563130c0e54bb95ac972f662c9c0f0bd93b12b2a95c9c82d58915e9d8345595488963d02c69e2b25a74509c459371d449b78725a7826e8393d22991f1f630f66f3a4d6c4ec7d792dd9e174cf8672749ffd9c44d88bf3143f3592f4d52ca75c37060de8506c512793c2f627d108e529c5730c3956973dcda8d9b51527a79a6629befa1594e6bb62665ccd05c28d69dc0f1419e46c87e989f1d52fc87e24d2b31a9c8265daf47e0f4dd9760930eb7528054c5824ad1cc4678352a8e4226e2c0f3097b347f6d550bb092628a87219a7821f2168c13b0d1635348be28c5af1a4e68263b03c17478aedcde480e0535c95f262be3a923a5b50583cb576d764ca20b9830becdde057638793ca69c9e5c3c69a4ad4cb41695610a88943a5a3d3c415106cb4de876a1d5445b193f341a068ae970bd3af92d7c792264cc3dcf20bacddc5d74e5960a43167ac7e1c26f67625c29417a20cf29a55538e89536e6573aced47d0fecd94a0abbc94d210fda8f821446222c58a255930d9e3fc3f8a1c91218512de212d09e70d95a12c04368f1875c325165cf26cc225587ca0b5161cf36cc625984e1bd565cab4c89ee018780871abb137c306cb46349b12297164f9740b044f3d06792e444f1c89659ed3a452fc419f850d8fed0bdae703a0b6845686ce1e2b77c4ef2db27c8ba67e8308bcd1b52495d8c9cf92d4a300cb738486c12fa9fba1c76f2db758f2cf06cc78f24fa4783d8a9beb2cff0013cff34bb9719b30c8adfc2dc55a29dbfa0794bf2c3f46f851729c2e9bed0449822316d3de757e36ba5e7c98fd1b861a59f84e1130fa306968a720b2b5438cee4e7b055ef27c90d14bb353260433bfc5265d19e2906198ab626c6fd13f1ccacb13a447d027108a662c7c34592ac4d2bdc4b1ed7615406c17874435b94aca0e449e4e6ad44ab56ec7793b20b524228d049422beccb884bd1331ab46b1584b5624e53684e3b0aab7f0dd39fcb8a35251b4bbd56dce6f165c6eae93dc263d45172739aae8e3e85e378488808e7f8a2e2e5f0a57261e515a4d4b1612d3b85ddc32f29b71f2c7c6e89dc1302e872280af05611ac65556d70e584e3461f8fad11e390ac48c713a316f66d3a7c79d169c792811b9a8ee79ab89713cc9aa2ded06c483a478a881c3982eb1436a07d914088f45dd62c6a247934fbf4f0afc4a1cd1240697174b5e85cd1f9a1b504b209001ea52ad3303ee14b1e4e961127c3db703973596b5629de0b0e802cd4c4c30e1d1545e92ec16014fc4bcd28641b266ca35624e414c8aff0035e2c180dd0d9b32b347157172f7800d42ec7c5c351cae7cb748386b2ad7bdc0ee1b56fa6e9bcf753a5704eda8781380b0b4be80babd3c97225edd45cf170fb6c9b603640fc101dd5c8394d93d9740dc21b8992bb2101ad1c825de85ed14ce98f860249b79a46597d43f08a2713cf4c88e2d69a904f97c50f853f67ae1f4f3a23c8aeca49ae8392cc9e9c21b7236eab5465b102c5a54bc9f1416e83223b3b25d90aa0dece901c9f58ee7003ddfd7920ca192275030bd3ba469634c920d2ad8e3f0e57a01af10c32caa220d8cc8d2a9f850d4131985bae8f1566e4885c63472e9cee399975529c027365cde6c5b38ea5c19516582b4e90ece382546b02e37f25d2f8bcbafeae7f3f16fb88290bb2e682d2a075d864a28ba1437d1552de88faa25ca0437d114153d48d29a8dca74574e47895f347b550e0c2415345da7f56fcd4522b1b75862ea459322d1cff168faa99a9258ada5d276382a65d6aa960b4260c7b24582c7aa7fc2e25564cdd1c136c06543885833ad78a7d84cb81409224db0890ad2974fc62ed4ff0005c2682eb4638b365916cd41a299454a88e3d33a4149d1b8a84e2363b4aef4e813f8f0dd567969528ca11a68973281bcb52ebe1662e75c2da413594a6a4dc2286d9a6ba986a3c6a05e9e6116771ca6aa4c6e0ba3d9db8c4c8717b298a31b10d9d5a343ba1e955cccf87c6edbb1e4f28d870b4b80208208a83e6993556e9c3ea8fc57b22c4b0a34419622c6a078cf76ab9dc974d984da83e2e4fbdcd2d6937b55238eff006ecfb8f483e5cca146ea71a93bf54dcb3daa4d2c3ca705b06e871ec3954b5c046b84e2c9f1384d86d25f6a25654cc31daa6cc18b3a2bb43057cbe0a62d3e0b0b86996ccbb4975cbcd4a9902e3a4c63cbd52422e1c8d549019428fb0abf12c82764d2ec5c40b3449ee8b14aa9f1f86ba1c548e4882cf8baeb61e9c8cfd9d3048cb2f3469e14ef0c8ba9a172f39a6f9074d4a822852f1cee3e959e3b8ab732e13d9bcd3dd26a17a3f8fc9e51c5e6e3f1a65216a6670232f618514eb21d4ab8835b2d7ebe49b22cb18ea6c8941c1352a21ce0bf4dcfebe145343827ed67f44aa16d1d8c2e16280b123c8d2c5cf7802b46569ea10f22e44a9f00dc1d966d88883797e8a2da13b615e9e2868a2438141e5eab172b7f12c7c220d3f05cdcbdb6ca9b6052c5d4aa012d2cb387d00b27634bcea712d2f65af1acf454db6caeae55759e265ad04934b7343e23db36e29887da231636edad0ad18c0ef698cb4b084d0022dd1c30e298a0a9549674884d65064c38987fb38be1eeb8f881b54f309f33ebb2ae3f712ec85c749bc2dc25a75af89045857df68eac71b3da2d6374ae4e3dcde22c72faad5790b8a1066d822427870e9cc7810762b1ce7b8dd6475c7f496cf4f070b2765cd2c549daadce53405573b92edbf8e29eccb084406bfd1679eda11990143a426254930987a8e929b8b3d4fe5f00ec99afc1369bc78eee957e7fc65ceb56c91eeba38e1e30a7875932ad31ddbbb6b27c81b1328a74049c8bca0c858803649f267b0fb87c0aa7e3d939974592b22b19cc189b567a7c413348b1438aecd296cc86e5747899f9107c445d75b0f4e4f27b2ac28a5729fc3fa4cf0398b2e5f2c6fc4fcd15594c30e65c1c3da473e5e0b57072dc2b1f371f9455f3100b4969e4bd16394ca6dc5cb1b288a2693605556a7a1a8b87fc0a0035d572765a22ec7b13c374dc6c8f411787c10774310b44bd7c91541df66f12811158edb85860ed5cbecd790ccf479886df7db2dada3a9111a29f3479f1f940f96922cdb929d09c43816bc120823621736ee5ecc97684cd49115b5c6de28a76b353b7ba244c72dc9834ebf9ac9c9d35f1e4b2700c1b626f75cdcdbb15a381e1c289472658343a2bde8acd2a97b85ab0bb67a4d3c682a56a903b666e3966e37633cb747226d10e1f60069da117775454cc617e689823badad69c909aafa767807697bafd7a26e38fd9372d26191f03a3f5ea0e0457c14c878f6b2f14c8f067e1985100afdc78f79aef03f82ac33d5332e342385d21124e66248c5a8737bd09e2c48af2f03bd165f97c73ace0f87f55a3302c49eeee3fdea58f51e3e2b9dbd9f6225c4e058d2ea12aa9fc77a66e7e7f7be29865a1adad2b7f9a6fe2d4dafc92bc0cb49af3ea97ad25c931cb78597c41cc22c6836b273034320e926f44ccb2d469e19bbb5039d284d3a9fc45967993abee2dfcb127480c6f2d039782df87a065348c6789e10e8164cfdb3e48d6138dd5c2893a296ce5b8468095a38e698f95269897b2759d32fdabacdb33a2ab3651ab055d8ce3a2e10cc4797a55b9823d492ba5c5e99391119e6ae8635cce483b0f2839299c49360d1e842c1c93a6ec52d968965cfb4e76342aaa94366d03ce397fefb4798f05d8f8bcdf55cbf91c5f71092d5d98e5e5e8128a16eb11c8287ec05d704f5013b194553cc6b0c68855a72afeaa9f0081b1ba4f8724ab145f0c9453d20fed7c3e8abc51118dc973a45d69df60d77fda3147ef49bfe4f62dd26e032f4d7dc4ae0bb275a5ec01b140dff7bcff0035979387cbd030cb4c6b9ff87d1259ee63da5a5a6f6f81f55cef0b8dedb25dab29c9320f958a35243953130d203ac2b459f930d9dc77e97465fa3802d350b95c9355d2e3ab1b036d05d22dd34a5525052f65651289062dbc359a9933ccd6886e237a2e816c6b9a03a3cc06917d5fcd10a45a784e0c590c5a964ab5ae63d2239af0f74363a2f5e69bc70bcee94ccecbea3a89a3eb706bf10ba3319a60b769c70d3142d2e6d6c79743b5ba2c3cf355bb82af7c820babd415925edd0b3a2ccc308449c81dc66b6b5c0c40da3cb7f749e62b7babe5bbc4ac67da74650b68e6ee3e6b9da1ecdf9b98d8f0c8e7b11cc1a213308cd79a787603f536ceaf2e6998e764d536c3ee54e1fc61773481d4f3f552f60cba4fb03c38c27835a5d56b458ce20cf9001ad47825e576e97c7934a8b069033732c66ed06a7c823c316e684fb1766d0d16006cb67a84e5546f14310d51682b65937b2b27b87d86f68f151b5d4d33dba68bc0305ee85b30c5879294e2b2d405165350bc7b54b9d1c08239ac397b6bc541e688e5a481e29fc78ab2a87cebeab6e334c99533ccb168958b28f4b0a2aca0b1e8ed26f20859b39d35c4c70f8b65cbce1f0eb0da94b25c424838107984fc2eaec1963b9daa4cc185764f3d0ecbd2707279e2e07371d94d2e0b5c621b2d00b8d0239078ac8cb38101a491b50ad7863bed77d12e71c78c47884cd8588f14dcba2cd389c8e8a0ad6db74f8552ea030cd45b7faaa41c25d444563725cdc455a57d841f4c548eb2917e45857430f45e5e9f48652126699912e26f09216210cd406c503baea6fe07c165e5e19943b0cd8df895ecfd1a581701a9a0f21b2e5e58dc5a665b53f13027c33b73e882d14ba4b328e657c13a5deefd28b17271efb8dfc39aff00ca58c3628045365cae4c6c74372c58786c20925647d9662d1c57455886712e2d219f25bf1c8bb34ce395f0beda6e846dce8b55f4bc7daedc6f0d0c874a6c167df6df15b71370ed705ac6db58df97aad1c77b66e55350b87336d75a1ea1c9d5047d574be98bc7b4eb2770f1f06af88002ee54f8ac1cd76ddc18ae2c8584509e9459646fbe8e12f85ea9cafee33e64abce6c3f49fb24adc922e25a318e60c6b50b3658e8ec29b6365569bb9a2bd50c865c921c3b05a3294b27e319b2c919c570c009b22b058d4573a4b07c2200b8597274787240b83f1dac9b3ab9b0d2be7c91635b6ddaeac62635548b04dcb32b6a3332e185f10902b7593c8bcaa69c27c0487dc26f1ddd65e4bd2fd9192d2175b18e5db6d46b32c5293cb5a308a7b3abe8095cefb6b8a07353eae5b38bd13c88d445aa7a67a6c8ed4d959e870e1554b92e4384bacf9b44895e12e583387c3e400b3558e8ccb23c6a2119bf0cab49e975d4f8dc9fdb4e6fc8c77159bd77e38761ff0025c9f69103799213b8e6ee85170e777324e0068fef5e283f565d593c71564a97051de2f276b9af3fc7e0b1df601f127753aa79f550235b2d51a85be3454a286c077e88517b436385cec4cad17ec2efff00b6218eb2b303fe9056fe3f45e5e9f4d24e1ad1233439c384aec9a592633979919a58f6821c2971f8ac9c9c73283c6d8c77c5ae0e1978ce2c1dc26adf5e4b919e171ad58aaf98c8b5ad2a1c2b6e486623995949306c4224a3ec48a1b8e4424f2f14ca3661cd7d2eac9bc4f87168d710d7789de8b8bcbc3716c996fb59b2188070b1af92cd2e9348cf12b0f2f844b790aad9c796e97929de1cc8698ee7117aae8df41c568e6666a8679dbf0496cc55563137da422cfbf0cede5f984dc2a658eddca98fd7baea576a73fe69fe7553089b761ac001272bb3f0c644ab2e61fa0569c95482cabd962575c48917a9a0f444abe92b69a25d8017372f548cb15ca4d1e40a56b4bd96e1eca0a23856687e77814ab822b766e2aa67b193707658b369c2e95e4ac57366e1ba1837880103a1375256c99b42ceca55be614b41e48ac5c0413b735993697654c2835c08e4b4713272de963b9f6f45d5f393173e7b42331bf72b0e79eeb66114a7106780af44afb69511986254d7c56de38472189eb5467d903e1dd193add2881052f23a42a850ee12699a49f0c1b2c79d3718914bb564d8ac1ce84af61b0c99830fab1db0ee9df65afe3dfef19f967f5aa8712c1cb06a75012694e6bd561e9e772ea95646c64408f0e23fdd06febcfd13b0baaa4a33ae69fb544fe0166d3c57473e4dc90bf66dc4e47b26b46c48ad0820ff003f31649511494b135774df6fa6ea90e0e8f501a36dc9a28ad1d5b1fc7e9f9a8a57f1d73b136b40fb10c4a6352ffc50661bff00c6ba3c45df4fa8f24c5a198eb0e128b8384355a4a60cdd9359350cb481aa9dd34e6b2f2716c78e6ca5c43c891251c49690d3b1171fc97373c6e2d32caa573344d44ea1477223c165b7b1e2814ee24f846a391b1086e32fb69c72b13fc81c7f7c2a323779839f31e6b9fcbf13adc6ac7965f6d1f91b3840c434b58ed41f673411aa9e4567e0e2cbce4abcec93663ccd94db2735d9b1fac399ac02d2d7b6aef75c0fc8af41cd8498b3f0e5b1f3b17bb43d172ec7470aabb3160e43b5b2c79f43e0554ba3298b04c28f6a1db5f6a78a65aa8bd701c246904f4097b1ece1894de861037361ea9b10b72ce19a182bb9b9f5562ca9e7ec650d802388f35a255950e10e1d52ae28e448544bbd051bcc727ada6a83c858c51799f052c7122a5a7e5fc90e5767e8df83e121af0fe60acf6b462b4f0f9b2e1743b4a33b3155147fc18017478b3e67a99c42c9973d9122bbcdd8bd014bf26bc66940677c7351213b8c6ace71cb7e24654d734ea04f8cd95248306b70aed0c9b3acac910b3e5934630b25a449293964648904a4ad163ca8e747d9485509168b70f32d84972adc55a60e20c512f0aa6e49b7eaaba1f170b964e7fc8cf5146e3d8d98c456800b00361f9792f558cd4702f669aa385d898657900f698951dde5f1f023e345a31abd924ccc173a84f82628731bc85ca881c59aa1a0df9fe5c9440bb43d0a888ecc6cb998c1d5efec5f1298d4a78b630f8c272e97182fa7d58926582d2c87582c5050a1b0d4586212886acc19561ccb4b2235ae0452e2a919f1ec72e99d3887ecb41f5302ad3bb456a0785797ad57373f8ff67e394662cf9c1f8f2ae2c88d36e743423a83b1592e16346392a9c57012dad88fc51c5da5190f3244969886f639cdd2ea9d2483e69b8f1cfd032cee970cbf1ec459eacd38b99a190daf77dd22e6fe679a3e5c6e58e97c196af6bba19871981d0dc1cd22a083c97232c74ea6192338ae0a93a69d9ae564856c2fe0ab4258182cb10d1552200d80e988a18d1563082e29d1163c9e180008a02e5b2d8704224239ac3c1e49792f61325a89484936c59b3430cf43a8593666283e62cb3aea47cd5793463516ff00655cdda8974f94e52f0b42a16b6590a62ea02c3b48cd0565585516645142e457d9cc8a2a3a28acd514027c16be39b5540a6cd49aadf2699b2a4ccc24bff5757967312fc7c8f786e5722d43f05973e668c30d1f2572938ec2de2166bca678c3bca6522371449bc9b5c9a3940cbb44ab9ed297c0c2e9c9096799181e6a2a91e71c9ad9c8261385f763b62d772eb6f42b7fc7e7fc796eb172e3e519531acbd1203dd0e234b4b4d2fb1e841e60af59c79cca6e3899cb0d0774d2774e583cde8752b63ba6e2a3c7665aea8ab4f25a27a428039dabe14fc14413272da9d7aab910e7a87ee1f923f1443e36cb938996aebf63d894c6a43c62441f185117478fd17f55f5aa458b4b21d613144296b1418c6435102ec94478c1eaaac957b32662c9502698591e1b5e0f322e3c8ee12ef14a29958cff009ffd8ce1c6d4e967869370d78a8f88a159efc787639fed9b736fb29e2128fd66097b457bd0e8f69f85c7a855f8b43f2955ccf65a84c87184c362c29a693a039956b85051a76734f8dd4d68b31653cd9392e4080f7e9e4d352df407659f3e1991f86592cd81c519b70a458249ead34aacbff1e3a133ba4e32619b9820c192997789680df8b88457e26d7f9b5f69b3e04e92604482e94711674423bc3f8456e7c89a2cbc9c1f8e1b872f92c3ca384b603037777de7732561d99e492b5e8a648ea2f2304c52977356c488c95735924d3d272c9667996ac591989b26a08284d86a999750e94c93d2d450dc698261c428376062f450bca3b3798a8142ea039a33056b7478e3b05c952e649d172574b8b8d9f3e4d768047c7f4bb6a8e879faae963c1b8e6e5f23b4d32f7132558076905ed75aa5a5af1e77d2564e4f859dee53f8fe5e33da6f84f14f0f77df10cffbc86e1f3a16fcd60cfe1f246ac7e571d4b30dc560c6bc17c38a06e61b9aea57ad36f5587938b2c3dc3f1e4c72f4551618f049d1bb277430af41c8632129405b2f014885ec84ac9c95b71a787ff688262b1b58b08545377346e08e7e1d176be0f3f865e37d39fcfc5b9b65c8b0e962bd3396f4bc620db74589752f976b9ed04d2a3c47e240f4aad5885ec2fbce713603f5d6bf544873c3242a6b7a9f7697bf4a5423889d42c84e20120d4804d9c982feaa4636cb8f20aadef64f8b4c6b0e3ffa823e30e205d0e2f40be9f5f2458b44f4c876810d4515318a0a0c0d5136168516e884a23dd92bd23bd928b94074bd7753c57514ccbc26939bfefe5e13cf52d15f8a0b827923523eccf85c3356cac3087f199f9349361fc299385764bc2047f00fc55fe28bfcb52397c31adb35ad68e80008a60af2d98f39e518734c0d88d0ea38115171e4771e8b2f3e132338f3b8fa4131ce0dc403549c5d0e1ff87141730f85771e775cdbf0a58d98fc9efb4166e666a58e99b967b47fe6413da30f8f277c961cfe2e5836e3cb8dfb38cae2ed77ba790343622bd41a159ae194f70c99c7624d2c7919ee1be3cc149b91920c9786e7fba1cef204a661c79e7ea06e527ba4d8861711a2a58f03ad0aacbe2f24ff00c558f2e3bf68fc57ac971b3a6cc754d9371d09b219a722a9b1c314d3eaaccd9a6359405a69c4013617f2154ec78ed232c8da327447fbd61f82dfc7c5b63cb335665e196b86e0d0350151e34e5eaba9c5c7a62e5cad8cdb8e48186e2d362d24114e616f98b9969a9a89054786a695b28c131e892cf11a03cc388dd9cde9cdae06ce69a5da410523938b1ce6b286e1c99637a69fe18f1c604e86c1990c8333603550438a7fddb8ece3ff0096e35e85cbcef37c2b8773b8ebf17c899fb5a1132dc375c0a15cdcb06bf32639400bb4941e355e71cff50b9bb5d578a79c73eca4722afc682d1a25ea2845bc5331dcec9cfb65be3d70f3ecb17b68768518d69c98fdc8f23b85eabe1f379e137ee395cdc7abb5530195d974b163b349ac39577662971415fc6952b6e33a00128f0c6d2a3513b1dd5684b138678088af0f70eeb057ab757214213719da2d9ecc782d7abfa463e8c2df05e77132ad3f662894c630d3ff00ab68f8870fc574388bfaafb1d22d5a594ed018af4a2a64354b835b0d45e8310d458421a88f086af68ee8511cec9123dd9a88f766a23dd9a88e184a0b7f403e5ebba1b255e2e180a4c57b249d910e041687781d8fc54b8cab992be8f954b9ee61863bcd2296048bd287951067c58e535a371e4b111c43249823512e6806e1c2b515e5e5e0b8fc9fc6ccbb8d987cad0a94ca6e755c46a606d416f33cbe29387f178cbfdbd199fcabae8e11e1466b07650f40a6e40041b75e608ad7c56ae4e2b84d714270ce657fb0383b9e03cc72e6d1956776c48af41e2a7c69c97739179f8fbc51accb84888d31590dcc88d20446d282fce96f03a80bf31cd67f95f0e72e3e5276d3c1f23c6f8e57a42e630c34ae97509201d26e472f35e6efc4e4fd3af39f1fd9ae67047bacd63cff00c27f2578fc3e4cafa5fe7c60d90e144d46716b6116d29ab5d052a2a3e46ab5e3fc7e7bee1397cce39f699e0beccf5a19889e6d6587c4dfe4ba1c5fc6fed873fe43ea1df39f0e25a4e5ff00670da1db071bbbe3badd97c5c319d3361cf73aa6234059bc646c8451e0a380ca6e339f1df21e977da21b7baff7e9c9dd7a8af5fa2d98771833c34a3a241a1b29e249543940e143babd17b344cc1d26886c14a2aa9560e5d2d7e1c7b404c49d2146fed1005006bcf7d83f8226f4fe176a1e4b99cff1265de2ddc7f23eb2699c91c4f969d03b2780fe709f46c41e43ef79b490b899f15c2eab6f566e26cc00a1901db9164426fe389b37cc4b514f08ada01c4792811e0ba0c7735a1c0d0937691b3878f3a2d3c36e19745e7258c738e615f67885a1cd88d6bbbae6ddae1c8fc39755e9b8ef9472f3c523cbd8b4324309769b730da1f006a0fcd6fc29070c770415d4cadaf7a0f85ee3c91d88bcb26e1cc812cd208d4e6024ec6a6f7b03f14de1c7744667e62754f9ada8ce11458af2d8dd8aac9f6747d315c38ffeb617f9a8ba1c217d9d9262d5190ed018890b18c42283431458621a881886a91dd0ae23bd9a2473b3511decd4470c25173dbdd9a83af186a160986a2f60986a20261a8a16607c545ec9a730c6bc51e038788aa89b44f324432c5bd9b3b8e2355077478f4f30a788e53a63112196863da5da9b5b72ad8d0f23752412bbc723881a6106c57805fa751d556c406b575b636d353cbd2bc57b2a6420e68ed1aef7051c07b961de7509343c89db9d29533515b1d2f226947375303a8081463cd010eaeed241a73b8b1bd00dc31bf4bf2bfb2c8f83c0736bde63c379173881e036750f317a2930c67a8bf2bfb38e5fc1c301707078786dc57eedab43b79723545a0ece6f86aac454dc6f9cee321f5353f058b9ee9afe3c5191a12e73a5290c786a25a87e70c3c460201a7ed48877341571a03e853f8fdb2e7db37f13b85f1b0f8a61476161f79a776bd9c9cd3b1f1e9f05bef15936c99441da685274489c465ea2bcc29626cd4e829160a500c355a5ef65f874f3e110e69229b50f3ad6a91c9c3339dc3f0e4b8ae8c83ed17310a90e2fedda370eaeba0fe3dcff00c40ae4f37c4cb1bfd5bf0e5992edc3b8df2f119ac6b6b80ae82057e35210f1706597b0e79c886e65e28448ed7187dc6b7702ee2deb5ad976b8fe14f758af3fe90992c375bfb48958cd3bea25ed20f36d68411e208faad38fc4c76cf79aa259c3096b492d66c6940091bd37206de456b9c73185f95a6987808730ba97a5bb9fd69e8532690dc27e3b181aeaba1576a1ab479f4e9baab149060dc4b7303619717c20406b1c05878385ede35f008b0cbc51396e6883fbbffcb0bf1783f103c82d7f922b7545c5d979cc4db13ce0444a625207a4ec0ffec0ba1c2a7daf916ad7197477810d5a8ad8d55a18e6b15a07a5554084355a40c43568e884ad1eec9447bb2511eec94473b3516f186a2ec70c2515a00b1324404b54d281ecd4d20261a9a4259d910f6969e7f2f1563c4c0f8c180b633455a0e9711670dff043a123c30c11b545ee50779a05c39c05850dc53c3c556908a3442f64386d0e84f377d69a994f79ad75684781376d7c95c8b1c30f6e9631862003df61738004ece69248a57eed7491ced7bd28b22c28ad606c46870af72256ede747d3c2d5bd54911d0c85a2a4be13836e5a5c08f1029a5dd763653486f7e11143b58797825b435b68ad756fe55b75415156f182775c62ddc3401ea57339f6e8707a56d1612c2d66b9b1cd45557998e73f6f01a0ff00e342b75ef8f8ad3c73b2325c7c78e178c4e5c343476f086a84ed89b5d95a6ceb7c977f8f1de1a26be7f63f979d01ee63da58e6b8b5cd3620858b938bc6939430c5897596c2a9247815b843a48445b455a5c2891b9d279eca44d976874370736ad70d8834f2350aee33ec532d2cbc12017c3ed5ef6188e6d4b46e6fd282fd6ff14586137d032cb675c2655b12ad0e0496d5b706bd477492d23f75c078d39eb9868ad94e590e05cc7ea3a2b56ec69c8de848e445423d2bda159bb1468739ada8ab8f31cbc1a4fd7e2979198c3ae5fcaf162b444311c072a135f8aac4eb8ac7c132802008835b79b22358f6d7a82e6eb61ff0b87d13a63b0dc40cd5c0a978cc2e82d6c28d4eebaaed35f1a1affcdafc004f9c72c058a9a2705e74123f606848af6ade5e66bf153f04457d1765e764d1d7d267c1a8949f913d2765ff00fb5aba1c3ec11f6f70f6d96a8cb7d9e20315a8ae1b145ec7318a2c6f66a20621a883042511d10d4478b144774288e16288e766ae4da3dd92668cd8261aad02d00b15a802c5101ecd4580e86a0ace802d5024f33241f6700428386d7e5b87d39d77fd745162e6b01691416a5faf2a1afa28ab4cf338536150c405cc00375b49a8bd83da37009b385c28bd886d5cefd8bf5b46fa9c6a3f8483b8a73bfd1440f139e65008ad7c337a5add0d1c2c45397c94433e2584823b480f777619ac3d46841350ea75041f0286d8b41e6e49a213a23c322b629d3ae8dad0dc11aaed7b0d4501a8bd40a24e5e3a331dc5453ad02b4dab6277a72af8ae46526dd4c3d18a7f641a32e2aab31e1af31e14522b0c4469a822da5c3956a2ff00a2ba5fc7e339b9a61f6e6fcacff1cf26bf96efc3611cda3e8bbd9e1e17c41867e53c9447b46fb3c89b84e9b96b4cb012f60da2b40bd2d5d606d7a1dbc52ac99cd5564c358960e5a4820822c41041a8e54eab979f1f8dd1748213167b002e724ebb50955e22d8b91817534891c5c1edadc6808b266b6175b8646a0ecdb1e80efd9bf4f9d6941e69f8e089c64aca514b9ae2c895ad4ba8680f33aa83e15af814c0f8ac3c4b28e9ef07386a1df60f749ea0ee0f982a0b1c51e19160170ab753c9e66a6a9566ce913e91ca821b7bb6e7402df0fca89d8e22278789d1da48db722ffcc27eb489841782daf826625e481cde6d861ce15d9c46c3af92611b6508bb15e4f168b529e16c4a4e4a1e9392ff00fdac5d1e0eea63edf72f0b6587905aa31d3d4062b515c3628bd14321a821a18a23a212881b61a88334288f68511eecd4473b257223861a3911cecd5af6e186a2802c510130d4400c35170073143002c50360b731449e8539aa0853a1a81b6088f0038104541142a061864f2c086fd40f740b0eaebdcf8a8294af12c39b11a58ed88f51e23c54123388e1825a1457835eedbc80faf92cfc9742c7baced884626a2a74976a2dad89eb4dabe2b95792edd3c318689a4074e91bc662d01419f5176f4afb159babc343c39a2f4d25ae6bb983500ff4dcaf55ff00c53e2fe5f93792fd4791fe6be47861a698e1de31db4bc37730d0d3e6db15ddfe578bf1f2d69fe3b9a72f0cd1d715c546dcc2e1edd4d32ff1ef818e98d73b2ada3e85d1a1b777ff001b40fbdd46e50672650bca322cec896920ee0ede2b9d9e3e255822158dd2c23a3340b8f829a5c589c32c761c4021ba108915a7f66e23553c1cd36007ef005141c8be3fd4d18c2ef44742752dd95181b6db4d2e3c2816fc31e85e2a9b11893cc8c21be3457c2afbd5a5478e903e2ab2c741a97bf162f68636eed8fc3af54320a44872e657d0353ee4a93111e26a36e07209d35110f9897d357917ad916b687b7cd91049fe13f4453a2f351d3302ae71a8bb8fd7cd16d99503d7958d090f0f9f499963d26a01ff00e562e87c7ff4b9d3eebe10deeb4f56b4fc405aa7a64a7c80c56a2d870d4141ec628b1821a881862881e95717020d47a4b1eecd578a9decd5691c30d1488e062b5bc5aa29c2c51002c5105986a200f6a82b012d5127b01cd50629cc501a14f6283a25cd50bb04b9aa284b8288262b5432205c569dd1008e6eb2c7cd7a3f8a6eb3fc762e45f6e919b13894049d82b9537a40314cc90a28fd9c463a8ea3b4b855a46e1cddc1f30ab3f5a2f2ce542a2cc6a88e25c1e360694feabebbff00c3be278705cecf6f9e7f39c932e4922f1e0462a5cd890ad621cd1e63f30b67ff0022f8fa93390dfe0793572c123cc30cb5e5d5a537e9eabe7f93dcc3de0389322b3ba5b5d880414b9741ca327fb4cf08a10886665800f378d05a373fbeda6c7a8e7baae4c659b67ca3324ccad0d2feab9f668a209e99a0a2adad75fb2ce0b0c9893112950748aed4a74eb5f1a26714dd3a340cdc7ed7ddad392eae3e846d8995eb5b541dd5f4a2694cb0d866b44bf15c2e8f3400a295346d946ea27a1b256d4333261d460a7aa6628639a7d60b80bd1a7e9d130acd47c5996d4f75bb9dc3abeb754ceaba205e5e56ba7ac94ea46827a4c41f93dab7f07fa54f6fbc397db5630f5634ff00d216b8c74ff015a485b0d8a08a1ac5106062bd206d62bd20621a2910210d58ad77b3502f766a23c61a88e69504e186a05c7314401d0d4416e86a2e501d0d4301743515ad0b2c503b14f6a8928a743507453d8a02d10f6a8ae84bd8a2b64f11aaafa362a2e31cf03a58395495cee7c9b3831fb54330d5cdf6d8ad78c19904b4bbddcc82079f24cc2765725e995f2f620e617c70487b89b9e753cfaad7c7c1f93393fedcbe4bac6d5e5c3fca82625df1a2c4308b06a0ed1a98e3424824105be7f8afb7ff001f97fc4e3c38b19edf38f959dcb3b6a51c1bcc020ccb43ac220d1b8a57eefe5eab77f33f1ef37c7dcfa69fe339bf172cabbf3b619da35c053bcda03e257c8329adcafa571e5e537199713c4a7706884b748644d9c407b1f7b0ad8870e868564ca6a9b4a27b363a75ae99d24440ca46632a40ff0078de7a4f4370a79116289cf196c5e2c3a1adcb40a1bf3befe8b2e708aaa2721ea7066d5207c79acc98c6b5e1af0f049cbb59da08a220d7a8374969752d4a9faaddc38f5b689161e112c219009b52cb5ec7e27e0452a37572fec1a4771589ba395663761ef7d34d6e774aa87bc3f04ecc5ee79aa9002f1865426c8ab504c4e67b36bbf957e655959554533199a8ddfef1e6eea87c88550fe6bcc62d94e7958d22433d22c33ff505d0e0f61c7dbef3e55358508ffba87fe50b63265ed2582d5150b2131410f6315c41ad62620c10d440c31440835447b4a88f69511ed2a23ba54404b14479cd517200e86a2482cb145f42cb1415ba16e6280dec02c51720b7b1416a0a7b5441111aa06c12f6a8a10e6a8a258eddd065e978fb5199df0974588e734879a9ee7baf03c8ee3caab99cae9715922bec4258b6ce05a4722287e0565d346e3297b4c664d6e101a6cdbbb9f92d7862c9cd9fd28c96c78b5ba3c6a0fe7d569e1cff001e732fd39d9ff6962d7c99c6a2d84e9525a1af17eedabb1a1f78579dc8b72e7f52fe3ff96f8dcde3f93aca3c97cafe3b39fdb148a4316a51ec75c105ae17b83bd57bcc73e3e6c3faf72b87e171ad5793333b66e5d8fdce9d2fea1c37fd745f20fe5fe25f8fcd67d6df44fe37e44e5e29fbf46ecdf97591e1ba0c400b5e08e563c883c88e4579faec450597b2c3a4a7d901cf2d6baa1afad35b4d0d2d5bf51f241963aec34dfc59caec8131d9b7481101735a6c1dcdc072af825e70ac94762b949822188d6d0d6b404d01f01cbc966b80274d29c2b99fb4cbb49ad5a34dfc2dbfa2d5c53ad34e35279dc3882dfaa7582b7a3be1b8656d743b2ed1f37828e63e28e55919970de83e8a69443371c1f7485204c38c4d802898aaa8b88389b9a1d4240dad63f5fc90e559b3f6ae83586e4dcefe7f048dc255c3f9ae037d2fc01f4734f47b0fcc2dfc1ee067b7deac90eac0807ac085fe46adb3bac997b4b20351e825ac08743286b55c8ad8c6b112c30d5103d2a23a1aa23ba556d1ed2af68f695368f6954b95cd2ac5a78b54102e6a81dea805aa045b98a19a16e628ad0b2c51629ed5154539aa2b625ed505afd887b542ec277b5450888c510cd8a6050e2fbed07c6974acb8e5326762b7e20e50ece0c4880b62358d71d1177b027bafa8737e2b3fe29b68c73dbe5d710f1111e3457d280bdd415ad0576a9bd916b45e7dd5713306896442174622e114baf4bf197d9d307ce7120905a48a72e47cc6debbaee7c2fe5b9be359ab75faac5cdf0b8f97dc683e0171fe1c28dd8c7221c38f46d4d7435ff75c7f741ae926e36ad28bd17cbfe538be7717f69aca33fc5f8b9f067fd7fcb56469a07c46f5dc7a15e4f5df4f4d8aa0e38e123436601d26138383856a29d08b8576741ced675cd99f634e3da62bcbfb2f71c40d5cb72002edb7353e2b2e559864ae24d8cd2c751b12950760ef0e742968d2fc1dcbbd9ca30914adfe37f82671f476d259994a90b4dbb8bd964b43d374b51b717c646c37aa6631711f9a92310ee40e95b22b56ebe4b48f4410150ec565ab53e6994aaa1f8858f1d4e87c81b1a13423ada83d49f248ca919205f6e7f46ffd2b3ecb475dcd71dbe95e0eeb8ff10faadbc3fea023ef5f0e8d6565cf59783ffd6d5ba32e7ed3480d4c096c36a8850c0a2c30144d86028b81862adac2a2a475523ca6d1ea29b32c74055b2de2d536683a5126c12d57b5517a5587104b5430073145097b54413118a162dc141c10f628b12e6a81b09e2354013bdaa213466a8b8cdfed8dc46fb249980c348931dcb1a10da778fc2c9169b8f4f9a989452e77d12b6ab4c78c61f4b9a8050e8109704c521417931e1f6f0cb482cd45a6a7dd783fbcd3715a83cec4aa1a3b35181248dab6f253682e1c623655e5af43c6b627b35719cce41fb0c777f69976d61389bc6822839fdf87b3ba8a1e669a78793bd56bc6f49f67a7b62c2890a21a0734edb83d56fdf41cf4cb78c61061122ba854969a58f9d7f9ac59331865a70d49da9c82056da0382fc7b6b5ad949a346ed06356c3f8625ade0ef8f5452e8c957ac070f7b96ff9274a3229ec4eb66debcd322e10b25ebba2b74855064e895b50b9a9717f2fd6cae50ed5de6c78634936af3e49c5dacbbc40676916aca5cde9cefd0ede8b36645350c222feebbe7fff005485230ee6b911b68fc2ddf82d9c1fea16fbd9c297564a50f595807ff8daba51933f69e406ab516c26a8839ad510600a206152e06020d89d01523ba544774a88e69507b768a05c21431ea28aa090a2404845162c8448016ab401cd51288731404829cd50621ed515bec43daa213c46281b09e20502413b174824ec01aa1b451f31fdacb889f6d9e881aeac297fd9b47227ef1fc3d167cc76b3a4d0b56fd52e14493135dd2013ebf345a444a62e501b095d010da84cf0425a15e0998224b4464782e2c8b09c1cc70dc11f504588362091cd499586639341e3dc6d6e252a0c31d94db5a047862b4e85f0cf369de9b8d96fc79b735579555f1736b9a3b379240e46ff005dbe2832a50b8075fbbb1f8a0da15cc0d14a7f447a14abd380bc4e7bbfb2477ea6d3f625c6a47f054de9cc5ca29968d95756a5a25142e9587557574a1e683e8a824915d5055c81549c4f7d18e15a53f5e37f879a6dba8cfc8cce098b11d506db6c2e39f35872cbb2a53f43937507bdb7ee7f3422555a9725b4761cedfc96ce0bfda065edf7a783112b87c91eb2903ffadaba5f6c79fb58d2eac2590d55c909311cc10a08ac47b5b4ea420b92e442312f68292856313553a2465cd219302296f698912685c40aef443f9e19f8d3dcbd9fa5a64560c563bc2a01f8239cb282e162430e203b5fc93365e865156d6e86aa47835447b4ab1c7742a1385aaf68096abda0042b400845b40084682885105bc28821e14410e6a8ad13bc28b131028b2688d50162a0f691e208c3e46344ad1ee6e8863625ceb0a25d547ca6c6b112f792e35738971277a93535f5ba5ded2d304dc5aec8b1c4bd9bf128a036839fc55d8b88d470b2d3a092fa25e4821edaa154bb267c2e6aa883c371374178890c96b9a6a0fd41ea0ec42a824ae61e27018ac01b105dec047a902d569f016aa7e34bc8961cdba0dae0f3aee11a4a14be37acf7b9f3e5ea8fc9694cb4df64f87421bde69ad76b8d8dd0dbb32569bc073ab59a214688d25ed061bea28ff0aec4fd56ac2f46c58183e241dfc916d74ae727054050ab4497d012795d3310ed9a389f9f03dd158d70a071047914ae4cb4cf9f6afe4a503d85cda13c8ef4db6adc2cb3ba02b6c37751ff002b91a2a073971e3a146483b7f25af83fd4ff00f413dbef2f0222570d913ffa381fe40ba72f6c99ff00a4d313cdd0a5c562380f54173d249b5619c38f2402208a0fde2b272736bd1d38d9df387179cf2753cbdd5daab167c969b24886409d7ccf7b615e760b35dd111e2f887636ad4f51b7aab9c76fa59a60f14e2433dc7b9a46fa0d0a6632e23962c2c95ed393928e0e111d11a0f79b10d4387e0b463cb60ae12b5bf097da924f110d86f708130680b1e6809fe126c7d16ac396567cb8bf4bb213c1dae3aa76f6cd6686ab53d455b4774ab1cae162adaf6e10ad60398a6d00211a0b2c57b416e868f6829cd56825cd455043da843b2778505693bc280949260d01436a6df3dbdb8f893dbcc365186b0e0779f436d676069fba07cd2f639190274d4d79f54255208d0ea7cae9b0067c46302a65dc598238596cd0e644ae282aeddb954a5c70b91e844f1e173eaa6840c8ceba1383d868e69a83f811cc14152a63171464e34ba81b180ef3058103efb7f102a99e7b9d8348cc6825a68ad63243132c22b71d3f2571139c2f303ded6824960234d6f4bec09bfcd3872e9aff008792ceec5af71ad5bebb26e069de947d6b63b7e49ba43566dcdad83022b9c684348b8f87a78a649aec9cba64593931184473ae4b8b81f335f40162cfba45a512531a006d80037ebfaea3e097e807c18bb3affd2cfcd56d14692b971b2bd29137f25a78eeac53ec570978ace184c88658893823e0ca596abc8acb8fb31e62cca5f58919c4ef625233ce9b248a6f3af14050b5a68294597baacaa0180625dabeb737f3add15c4bdad582d30e197442190c0af4295e238ae31ace0d8a744216bf793f1ea0d04c4236835d8fd50e557095f8bb87de3f824da2b4e787e6fd1cc82294702410473aa937158e6d51eceded931255ed979e8862caba8044249743e55aee5bd56cc390ccb09946fccb999e0cdb0459788d88c700439a41142b64ca560cb0b0f0d084b70b516d1dd2a6d01705728fc8121124a2cb158802d5682cb51ed5453da8e2c4b82b410f6aa0e89de144d13446a8043389d9adb272d163bc86e961a576ad2df34aca8a3e4a67bc65d3331162bcd5f12239c798b9b01e0364bdecdda1f3307d3926c84e443161d1a4a3f45a391ef5faa1d6d7a34cd328959c484ce8754810988c43a1482e8ac60c66ab42488c4aca23905e5a6a09046c45ae97512fc222b26010ea3628e5c9c0731e3d426e150df130271751a2f51caa9ded12c8f844496972482d2474e7b542d531e96b4b839ed44c84d6cae22dd2c0035b350c123a011a18048a5bf68ca8deac6ee5732d0e5680939b871808905ec8b05e0399121b83d87c5ae150b47943118e236026242753bd469a8b548ea8f7d15c9db3fcbe1ed65586a2bb5e8b2d9a62b4cd3b0cea2d35d2e340e207d6c3d494ac97894330677f17a1b7a51a453c89096b53ae5ccc5bec020393f1a093b7d0ae146776c1c3651d10d74cbb001e550afc879544f3d7161f30e30e1024036a6c3cca204a894a65d8f32ebb4f43d3c106d2f6b8b03c9b0e42076f1482f0da86f4555115c673509a14792d65ec2c10ea8e18277138308686500a6e46e8b4b43317c759723bdd50696628d3b5ef52dbf9a0d265e8dffeba17a8a7eb929211b3c60b8e34d00b5130f99d688e047b4a4c614ea42776905d674171b79b7a7a2b9c9a3b5e53b7d07e0e7b41cb62ac1a5c1918535437100d7c3aad98e72b2727159dc5b21f54c6678288f15105947b1480108862cab880144829e11c4d0a7044821ea213455154923943696c77edb5c436f66249afa13df78bdc0ad0546d53d566ca9b2302c58f724fc50e3b55ba35ce46a1b5d6c856591be71f5f02a509bd98739e74804b8ec1a0924f4b555486487ec3b823884c53b2948e756c5ccd0df8ba965771dab4b1302f61cc4a251d10cbc104568626a779775b4f5a9093f8d70ff39ec9b0651baa6e1cf46eaf97742d03c7dd240ff1229c468bc27d9ab0c9ceecb478d0e2f2833311809f2d2c1aa9fc2e3e48bf1fed43b14f66a93956ff006b939b7346f1e526cc403954c275c0e7c95fe39f48639bf65fc3e3b7b4919c8aeff7110c36c4f20e731b435fde69f355f836b314a7b3449be2760672625a30b181352ec6979b7f771a1b9d0ddd4776fd050a55f8ea28cc3ecbd2b2d4acfc6977d7baf8f2c1f089f08905e29d3bda4a2c7834b4df869c1b810af311a0cc443fdd4682e3a1e396a63a8e63bd083d514c3b42fcf1c1f3199a5beeeae56a007c8d8f92d122332718b28b2522b590c52adef53a8b577e691c9c727690c99278813387bb54ac52c04873e11ef418847efc3240aff134b5dfc4b34cac1795685cb1ed432f34deca6da65635281c354480f3e606b87e4f0e68fdf29f8e61aab734e3a5b15ee610e86492d21c0b483d3f24759f4370f8ac8e59a4b6e6f7b03e22951eb5f348c836254ec0bf899f041a0f933c397223a744c129d0bd367707b28459e93960eeec264317eb72973da64b7f0fe1e4084c76aa034a171debe165a242cd51338c1956b8431add5a0dad6e68e71ed2e5a573993894629ecddcc914ad8df92b9c7a579c43731637a5b416a0b29e23f241a6b3039f4a9a854b9491b325c7bc7c90d864af4c62000a0297a0e46f87315dd2e9477c365c56d515f820f23f0c529c29ce1403e27f04acb26cd696f706a72209983a62399fb41a8b5c41a0df64afcfe2771e1e5edb973971da249c2632138b9f402aebd52397f92b846fe0fe3f0e4bfd91fc1fda727011da06b9bcecb163fcd653dc6ecbf88e1b3aabab22f1de0ccd1b17f66f75054d8126cbb5f1bf93c39babd383f27f8ccb8f771ed688880dc735dac6efd38fad755c28e26c596a2416e08a200e451043ca6213bd456c9e20515e48c676cc70e5613e346735ad6b49b9a724bca8b4f947c68e237dbe6e2c626ce752183fb8db0f5e7ea95ad8add2aa998b7a8bf5aa3c6467b764b775a84f4a27075b5b9c2ee0f4b46698d3ee8ac60bb61b6c5c3c5d7dfd143260d29c35c9f85bdbfd8e0c20f68a124011c5363abde3e774469d33570ddce6b8b26e30701dd63eedf2259a4fad0faa39514f3317c42449735d19ad693ab56a8904fa3aada1ea349f228b503a3ee0fed2222110a3b4088eb0309af78779b2ee15f0d4abd2ccd9c722449bfdaca4bf64f2756a738c1613c9d4352d773b30204238f98713c2e1f693a65a3cbd0348edff006acaf52f8643c72bff00476303e4a7f3f716e03cf6b292af81301d5d50cc330dde61b637e7a6eaae515e5d9d729711a062adec27a562b233000d8d2ec8c77d8d21b626870f16869f043321a473f9c1b20dfb3cd4533726eb0edd81f12137907b5ddf206d5b1145550c1071912c7b6c35fdb4a3ef160423dae80777360beaf02bb80d36250506d66e5ce2488d05da088da41a869022b3c1d0c906dd086ede1455343652e2abdd1a3bdeea8aba80114a0e9fd50f2dda5aaf634953cd6356c969a4aaf4b58e328174bf6ee6b9b56d5a5b420f9827e8b5e3dc250fc071074189a9b6a1a16bb63cae3fa2cb97b5a70738bbf8bfe60afc81e2aa1eb8f1d01304a7e2af26fcf67acc5ff674b35d66b61d0d37342774f9c656590fcf99dc10e6b0d3c3c91cc744dacf58f66a70738071153747b06c4e113e3df71a915a02a6d3469c7f182e753974e8a5bfb3f1866747ad001ea976cfa188d44568977214760b4bb7e8959642b367690c27614352b1e5c9da7e349a4f0e730d29e63f243e7b68c702b63cb4d2f5e402994db5c9a5afc1d95736658e7d1b7146d6ff000583971d46ce1934d319ca641d0e22a05392e1f35dbafc2906138841d035b1bb0e4b268ebb286086ff00ee8d3c1330babd2bbfb5d7c1fe2097525a31b8feedc798e9e617adfe3fe65bfd7279af9df17ff3c56f557a695e7a80e44905c46ab82f213447042623130368988d5004d15aaaa328fb6be63fd8c39507df76a7537a37f9ae7f3f278c3f0601c7b2c38d749af4aeff00158b0f93abd872d9db855c316cdc6d338ffb3c014a9362e3c86ad803b557578f3f3f40f16b6ca9c17c26011d84286f8805f5442f27f8b4b89a57a8016a98d5cc4e19bb8530a2b0b6131b0c9da8f2dbf80b823c15e84a6b3070826a45a63e9ab5b7d705c7537c481477a84c9360b4a7873c71306ad9d0e8b06da629357b3fc40d3537c6b51e3c8bc1264b571fce10a334321698bdb37b82196905a46eed276a14abd188b64fe1e4b61daa2696f6af357389ad39d0175480392a9d86dd2b2e30fb4b3654ba0c01da46e46d41e26c6be564ed4c6760b76cff001a6710c55c1d175986e3b9ab61015fbbf74d3cfe683f25be8b5e1c2ae1ccbcb03dab5b16259c1ce3669fe1f04331b5703ce9c7897933dd30e23da74e887a75f9120585b99457193d9f2abaccbed6ef7d3b08003bfdf90f14e766dfe610dcf18b5758a7102627dfaa14ac06c4dc99782ed47fc5a5d7f32091d420b9c0691f978d3f2f184cb214763da6e40887cda6bdfd27c49f3b24ed516a4e4fb311861d161064c16dc16e88951d6cdd63cc1f3453bf6baa5b18940c7b98e14734dc5eb41e1f924e53418639884d26d51e60ff00329662c176696325990daf782050b28ed3f035001eadb15a26731c49a824f4706a5a450de848aff2f92c99642905b3131d4fc7ff00f297e42f1207ae7b513c372d1817634c70cb35ba1c942637f75ff5256ec59b2ea9a67f3817975eff00aaa0c80836273b579e954b59df0f07484172d19882dc3753aa77d9232e56ac31d96bf0500d5a351f01d527f3347e38512d929efb816e683f341ce23a4970fc8b949e4e6e858f0da9ae09c3cd543427c82e6e7ccd58f168af1bc9110005a1c0d2d63c94e3e6ec570d2ffc89c25c3e4f093894f96c69a8b50c6d83d8f360c037175e878e6371db2e595dea2b2e1b629f669811a206b83dd435be915b7951723e4e72fa6ee0b75db4c62911b1e1873002282945c0e59dbab865a5219eb1d9b86f10da290cdab43e9759b5b6fc35537e1d4ec6a0d7741372999c9a5b927305ae638543ad423aae9f06565db95cb259634ae47c7cc7840bbdf6d9df9af6df1397cb192bc8fcae3f1c9202ba2c505b94416e299104c447142222b42498720a8ca7c6ee10cc627326207c3870d8dd2dd46a77a9340573f9386e6d185e908c23d94e130d63477443bf71b4039deb5413e1a543f895c1c8ad88d649b5cf82077c06e9bf8f270f45d5e1e298422ed53e2cd8f063e97b23427431dd73839a0d3f75db11e456d81dd585c31e353e59e1937aa342710038baaf87caa2b723c155c073268b9f9c6476073487c27b6b5b50b48f82093b158c4fed2182fd99faa4dafec1c68ed9c1af71a0029c8934a14dbd40696b700f220c3a4c468a3fb4461a9d5d80370d0397a5164f63dab8e3d7190c10e8309d588fa8ea1a3f3e89f2490bb7b57dc1ae05be79df6a9baf635adea0bcefcf92cf95b91924687cd2e852b26f6430190e13491402c05edb74ea8b09a05918b338714a34c38b1af7361d68034915f1f0f44397269521d325707e3cd5224405908d0ea27bcef8d4dfaa4eee5472e97fe0b95a565d819d8c17505dd121b1e4f892e15af8a7cc3a4f232e299fe4655d42f64135f758dafa5182a116a4f69bda9ccedc5c1db6b9321cdad6af0eb9e628ea1012b3ca45486b3c6a7bed160c236d9a09693d4b5e5d43e2d2b3f92ec40735632e8b135987d8922a00ed2e3a8d64dbfc2832b6a40f0a7f682f0dc5c2c1edbb4f83ba1f1afa043174831588f0ea1047ebc1065566e7b0a55407b32ab4b2d78584f26869d0babaf23e241b2acbd08d5f55b31acf9fb36468e0b9c4799a73474b35c196d4ea78d965e4cb4289449e164b69cb63d573f3ccfe3e3b9548f03cb85e46fbf45cee4e7d3b1c7c5d2c8c0f8785dcb9d49a6d458ffe436ce24cb07e1f97580a75b6e15fe717e3913ecafc120e20b85ab7082e7721ce970607c358305a3b82c2f643e1b55a8f710a7649ac309b6986907480294f35a3c71936cb9eed35653e1b429c6ea8a0968f75b53a478e9dab4e6ae73e526a51ce3fba578c7b3f423787ddebe29572d9b8cd0383e09164869f79839159f2d5699530c1717811451cd6579b5c01faa5cc05e54cb8fc78701e1cc6e904dc0164acb0d34e195a9c48624c7b5a452b40b4e1d11927994332f626bc8d88fc5757e2fc8f0cb4e673f0f945c32f321c0385c1151e4bd771e5e58ee3cf5c7c6ea84e4c50a299016098a51848e34eb46e5a3cc8568a8b8dfc5e648c22038088eeeb7c49d802998e1b5e98cf386739888e2f7be202eb8bb9bbfc16dc2480b6c1397fda2e6e4e19612c8cc1b76b52f03a6b06b6e55aa3b8cf619c9529c8fed172ef04c688614479b08a5da457a3aed02bd68919cd344cb6b725f04851e01edb4cc3220d40d750a1162d2363d082b3ca2f1660cffc2f74bc47458357cb56b43bc31e27981d4dd3a522ced1ec2bda20c81fb3451da4036af685861d7c743ede965178d32e379d21625392f064cc5ecdaf6c48da8c378a021d46c48668e15b10f634a5e5975a3245d1c74cf8c959706b4eef74014a9a5874558ceb60c99ab843c347e313266638220076a713b3a87ddad7609572ddd0e63d356e62c421c9c0d2da3190db416b500b6c9b86299314f16f8d7166cba0c2716c204824120bb7b72b1f1aa572e731e8b24e0ee40ed63b2247683081f75e1d47822d42001e3b859e6e8a568bcc98f32558457431a0529cadfaeab6e384d25acef9e78ed1636a8503bacb8d7f79c3a8b0210e5c9af49221b95b214c4ebaa03a84f7a23aa47c49bac7965721ad18beceb0e1c2ed4c6739edbb985a032dd08b81e06aae71ec34e7971f2d0d9d9c432fdcf74c40cad3c1ceb9f894cfc5207d914ee6ec3de1d0a2be13983785121b9ecfff004c9616b4f42d214b8c8bd5417118f28e6bc4a3fb3a5c31d5657cb51bfa149ba5e95f3734bd87bba4f23a8070775041b159f2b0448ec403dd520309370d1ddf4049a79552b6b2f0e87d3e415a8d91573da09d899883258196e63f62074a8a7995aa565cbd8c73f7e476f4577309d72f61c5c6a3c28b17367d6db38b8ae4b0307caae276ad47cfc5717939e3adc3c3e2b6b2064b26951e0572b933dba38e3a5e5977250b596692d337a4f706c98d6ee16ac702ae497c9e1e1bb05ab1c4af233674c70c165182ae75879a2b3492b3762d2af7c7b9ad5c351f3e5558f9392eba69c3097b68ac810036134740106196d393a4b9d74cb915a3262d870702084372362a9cd98098675309af8293311aa4b3b8b428fde1fbc6e7d533c77052ac3c0a6038030cb69e6875a1ed288b8b084c3a9c2b4e4514ba078ed24e1f7199d0d819106b67dd3cc05e87e1fccf19aae5fc9f8bbee23bc5cf6948b08e9820c207ff0010827e7b2f45c7cb8e7eab959705c55743f6b59e67fe2b5e3a9682ba58717931dca436e37ed59391869ed3478b3ba9ff00864579455f8af19e61ce25d1a292771add7f11745e109cf97c52bcb1c697380853204cc1b13da5dcd15dc13d37ea8bc3ae92734ab8b1674bcfc110da1911af16a52adf5170424ddc33da9fe22fb2f5619fb347d0fa121914589e9adb715dab43457332fc3b666ceb9526b0c87fda611172d117de867a51edb7c6850e5773629d35af0331ced30a83122107b9720e9141b7c96797b6a4433371b2598e74ac2d3122bc96f2732f6a1374dde8acaed47f11b860c88ed4e891b5969769830c102b7bd7972a82aade8b9077b3464cec0c6997836258d2ea0b0aee2f43eab3cee9c86718b3bc69c99fb256b0db1406348a90e24b771bb6fc933933f1c741c66eb5464ecbedc2e4a1c3681a8b4171028493724f8f8a5714df666d447b497147f6425e19a39dbf80e77f92db75842adda95e1770b236205cf86076708b4bc934279f77afeacb9795f2a15d18b660649c2da821d280f77511caa07cd68c66a0228be24f141f3efb561c3029a356ad54e7514f9a99f2ea6a1b21eb863c1e89325b1a2b4b608a3857ef731c8d8f925633c87b8d0946c16e9680d005e9414a2d58e101e4ac33d71b990daf810c088e70a6a69234f2b957758afbaa08427c6750073dc4d4345493e5bac79f25abd2c2c0f817122343a2c46c1afdd2d2e3f1a8a7c0a0ddaab4e933c0984d20f6cf701ef34b5a2bd74bc7e210dc52533670e11c0633b4811224370dd918b5c0f939ad691eb548b8d16f4af1b94dc3dfb7ee91707d506b4af280891882d436b72e4af5537092305cf6925626405a9865c7d19e1747e4cd9fb3cc095d66f6aa5e59e8fc30dad0c8d950902ab8ff002b9fa75f870d45e194f25577d979ecb92d74b09a5a3973030cdbc106cc5bb96709b54addc789396493896a2d93067f235e378fb20b49711e1e68fd245619cf3c768c6c30d01e5d5afee8ea91cbcd24d1d863ba88c94069781bf52b8f73dd6f934bc32acbf70792d18119a4621a6584ec44d4149c878d41b37e1da9a69bd14c46a2b1bc1487924ff35bb1cbe90197c5dccb55c3c8abb8af647398e44a8fdabcb7f7494b3267161e49cd5a8693c87e48b0cbc577b39672c2fed10dcc35b8b11d57438fe4dc7b64e4e299466dc660ba03dd0de48a6d5e63915ed7f8ff0095f93a795f95c170bb46316c70b456a0f8ed4f3a2ee573f74c1318e5fa1b11fd55e25e7367ac3b31d072a0f1a53c13213a2ec93c567c84e3261ba9f09ddc7c36bbf7bf741b541ea97c9ad3670e5f4d63339c4cd303fb3986870bb6237453e77f30b1b5d674f6a7c49ed966c16d743de07bc49ad4502bb3589285cce749d93c2992c47670dc28d703476935e54f45965e876ecaf80fc1c8f365b3646987ab5079ad5d4bd820dee8b5d1f78ddc4b832d10cb88911d1c34334865077ad73b7c3e09d95d4548b223e536c9e10d8ec1488610891695352454970a93ceb641c5dd165d3367017081398a30be85a1ce894ddb63e37a5ebe095cb7fb2b16b7e3162020c271b00c61a7c3e6b5717a15ac171e4e36231ce905e5ce3b02435b5dfa8097cd96cb6b6e0664f12500c17692e734927626be36ad1270c519838f58d7f687cb824063cd5a6b6bd47781b8f45a796ea2f1c4d1c27c8266e287b81ec984171ea7a792c126e8edd355427360c30d6800345ac296f05b30c64e8bdb3ef16f8b65c5d0209dea1eea5fa103983e2084ccf92611726d5160997e2cd3f4426b9eedcd37f137dd73f2cee57b316c64ecbed9420bda1d1050b8bbee9f516f44e9c7b0da99e6be24409701ce24d459ac21c54d480f6a7b1fe32c77b8fd9c986ce4086b89f1ef034f4bf8a5e5c907268c3399d26a65a61bc98a3a086091eac683f1aacd72198a527224334ef11b6920d3e076f441b5587f6cbc73710a2106e0ea1cfd51f907ff0068ec72b971a8961f34d9e95538cb12e1d0c75a94bcb2d15adac1cab964bc83bd29ea162e4e46ce2c17765cc33b315d35e8b93cf96e3afc58acbcb319e459b4fc972f28d722ccca98217104f3558cd86dd2dbc3a006340d97638b1e98f2a8c67ae203259b4ade9d765ae426b24679f6a484d8e58eac4d26d4f76bf1459705ca740fcba2385c5d6c63afef3da28de83c179ff93c771ba757832dc5a3c35957c67079ad2dfa2b0cc775aad693cbb068da782ea613518f2a7770a23a0374e4459f2866311bc460552a1aad335e003dea276392aab99f94d37af3dba2d3e5b5199f406aeafe0810e385631d8bc11eef3517167e1b8eb62b2ad23c4744528f4ac78bf967b46188df79a2be3e4ba7f0be57e3e48c5f278a678f6cd389cf6a04106a2a0f985f43e3e799cdc78de4c3c2e916873943736afc13f0cb61f6551718a6d71e1f55a2dd17e05982cd56e684541f1041a84bb770d934d5b8971d60c1916460e63ded606f660dc380d8837dd67d1db52d85c49ac71ec99885ad810e28218ddbba46e979e5bea2d6ef17b2a9c420325e181dcd249d23ba052b4229449d6ba5c9dacee0e61cc9792641074b610a1276b6f455a37e98c7da77b27e2ccec5c1c1ce841c41a8d5ac57c8ed657cdfe6031f6d3bc44c71b0e47b37fbae83a4ff00cb4538bd073521ec7984874ec578248870c816dc17731d7e097c9375254e3daaf1b708661b1cd1aed7207a5ede8b563d40da8cfb1fe4d63991a61c017b5da05eb4a0e5e07ccacbbecd93a4db8879c1b221f109034d7483635e83915a319aec158a73162ae9e997c4a0d719fb341a5ec2d7a752b3f2e5babc5ae787593992b2aca0d2e734178ad7bdcc834163e3543c50566d5a719b88a65c1850cf79f506e2a07d569cf2f1ecaf167fc33078b33103580bdee353f1b95cdcb3dd37d469ae1a645124d69a0ed3773a8355c7ad91633743b577c65cd46045731b62e1bd81fa1afc42d772d452942e7447737127eab0e59eccf4b2723708a217362c76521ee01a1af3b85530dabc96f47c3e13003a61c32c167b58d6b87fc40027d4a6ce30ca80f10733426b4383a1b9e3f74b4937fbcdafc50e58e9766d061c4483ff0096ff004a53d2fb2ceaf1886c70b9b1ac96104e88b5b86197cc5681427beb1f365a1e386da6b26f0f443682450dbfaae2f2f2ba9c3c7aeeaccc2729dacb0679edbf14fb2d65449f6972595866182185ab09a66cb2da33c40cfc25595ade857470bd14c79c51e214699716b2a5cf3403cff25a3067ceabe85c09d50df1e34501ed05ce6d76b5483ceab6ed9723ae47c10c368769111836773a2e6fc8c264ea705e9aaf83f9ba0b98187b8f1414759726f14c5bad5ed8344aec998934e534688d50cf331aab3647e26b8ee291468ce6185514525148a9331cb5c83b7826ccd562233532d6d85edcd371bb05306238b815bdc26156bb93f3d984ed24d8a966a1d864b4e262cd8cc3b1a8b8f359bcaca6653719578bd803e5a297b2a21bef6e47c57aefe37e67fe36bcf7cdf8d276ac624c78eebd5e19fdc70f4260cdf2bd96afc9b59ee4b12141c88143b21f32f2861c58976c5c686edaa56576bc5ac7d9df2e98122e7c471eff00ed0003ddb56e820ad493877c45833337120437976984750a02da834f785c1f352d16351acd5c621266349ea3579769028680f8a96e8569be6386b2f1e4a0ceb1a1d19b118f73ab5b878a9b9afe095fe931f695f1e89324db5b472bd36f14cc274992acf651c5bb18ef8846c349dfdd3bede37437d83651ed713ae31618a0d1101703b8245363e49d965a8097b4fbd8f30e2c8114d6a221a86d294a0a7aacd8f75a27a537ed5d9a5c664cb0a8634d5c2d7e9e34f35af92eb10233c0bc90262218aea80cbb06975cf504588e44725865d876bef3166c12d2af0e203a182403f2a54dfe2b44e977263dcc18d3a6623a23ae5c6d4f92cbcb9ec717ff0002723f670fb47b7f68e1515dc0e80f2f24be3c37556a5d9af3009563a238d34f4debcacb6cc640b27e78cd8e9c8a623e86950db52d5b57f9acdcb97d19227bc10c82d8faa3b8906191405b6208a820d7e229f148c31dd5d5b38be31d8b492406b45c9d96fc7090a51b9fb8aae8f5850c06b458b81f7bf925f267319a829106c1b068932f10d83539c69736f53c960b95cbd8ad4a1dc189afdcff00a9bf9a10f9a2730dbae7c6b2682374e88d6fecaf960448022115ef9f910b89f2f2d67a753831e9a9a5f2fd8506cb95976dd12bc132f569d122e096a79866161a0591cc4acab98d4f86349f04c855ac7fc73e20fed0b49b03434e7e4b7f197e4836152bd9b0ccbeef703a3c052c569d82aa9ccf8dc57b8e87be84d1c01201f02168c3d76cf94dd5c1c29957ba080e069b0aac3cb976eafc7c7a695cbb91191618eee9753de162160bdb4dba4ef204cc482f3022de9eebba85242eac09cba6e8311b9e706d4acb9468c61b9b340a464668cf8e0b245ba1c52d9ca3e924f9a663761c95a625375a9e616ac61150c99c44ea3b1ad415af1c49a85e3d8c963c39a6945ae716c9fc9aab33879c40ed1ba5c6e282de4b97cfc570adfc59cca17f12647ed301d4f780241f243f1797f1e7da73e1e5856569861692d3b8257d0be372cca4ede47978ae374018bcfe2ba2cc384cd399ba5dca828e3303f5cc2af245b195b8dcd852cf8115ce6bb416b1cd17a6d4f1f508e64a34fb3467232f88124da387375134ef1356fc5272bba3f46be34be29c51fa81ac47b7400370ee94df9a3e4a92eda97019e852b86398fad995a1077a54f2ea3e2a7188c39fb3436730c6c484483d9f23d05c52e3d13e74ab5597b3ec5eec5debaae09001f23b823e097f60fa4578d138f7ccb619744d35eeb5ce05a2a69623af88e8a677ad2b16b3e13e08d94830b4fde60adfa8bd7d50e10ffa654f6a883ff6839c76706d1379ff00cc0c5c997f2241939383312ef3df630c56b89a12e1de36a0ad7c167e39b4ca699e78d9997b68a18d234b46c0bbe60dbd422e4ba049b2ae0570f04e46d6f15870f715a027973adb7f86d6596766b44980201d207740e4765ae4d019cb8e99d8468bd943274b6cf1c89559e5a8b9ed586158518af006d515dfea01a2c3dda634870da1097ee341735edd88a914f1b1a6fc96ac268bb558717f3b92f74bb2ad6827578fa26727278c5c882e51cb2e9a8821b6c399e83f5d573bd8aafbcbb90e1ca01d9d4bfef17509f434151e09b8e056d31119bceb5e7dd4df04db23ce0bae1b712cb32e53e7a5b7c7b1860daa45aeff007aff00a85e77e67ffd2badc5758b56ca61000d9621f91f709c2c7256ab91da63ba3d14d2b7b53bc5dce020c271269634f3a26e386d2b14428e67e61cf88eeeb1c4f81fd516bff1344fda7f258589b88d80dae936b72eaab1cb745674b0e1fb2fcb36911ee7774d77b123aadd6ea1325d9633066888d87040ecdbd3f5c971b973edd8e29ac5a0325e1d4601cd0e3d979d3cbf0c02234f34cf104a779c8d40a5b20f1887e3957582cb9de9af123832fa77592e461af198f648cb2da29fcf536d656bceb4f145806aa09f99b9b815eaba38566ca2138d46a1ad87f17227c56fe29b65ceab7cc53f50795175b0c3a73f3cc3e1f6365afb1a5166f93c5bc5b3e2f27d2f4818d6a651d7b6ebcc65355d997a523c4cc0831e6230501370bd2ff1df23e9c5f99c5bee208d8df05ebb8f9269e7f2c7b76244b2615a020ce753e5d10a582675ba90548b7b87793dd2a1b18987135805ba4d69cc58b6c55e30bc928cf3971f3b121cec204f60407d6962083cae79d115163134ccf9dda25aae1a9af6e8a579d36febd5163d2d4ce17982241851655e1e20381743796bb4b6b534adbd287d11f92f4b97d9070a64cc09a63802444eeb8b6bbb7e3f04a996b21d9d292e33d193ae6d1a1cc71156924120f369bb4f926e6563edb372ce27da484198a534c16134ea1a2bfa2878eec79323713b562536e30c6a2db11616077a936e9cb923e5cbe818b4370dc76d87be59d4ed21328013d073e5f0ea938754cb76c63992139f1dcd70ef889a74d49a1ad28095392f6b8d47c1acac30f84c2f6e9745a17ef7e95adade01aa6187d86dec938eb9a44bc373e139b570a5ec6fd13ece95b6497874471372e71f3a92b065d9d1a2b2470ba0b64bb570d3300125c37ea010e1c86f4344de2c159540f39e6d7406e8613abeebc3a8e1e2d2da107d53b2d63d9531daa5c4665d11c5ef717389bb9c6a49f1277f558b2cb677a5d9c19cac6137b53673b6b5c0f03d15e18ecacaa659df33b65e197937e40f3b7a15b663a819145c5e2f4724d294a9fd6c83f2e22f1a8fe20da15e7db49a4b729d11f47bd8625f5618d3fefa20f9ae1fcac7ff00b2ba38e5fd5aa64a4964fc69e4789797a2bf1d2f668c7e3e907c12b2a662c41ed2b9c5ce7f62dd8eff0034fe2c84ab72ccaf6709d106e6de34fe4af3cb7578e1b4db8678e883183ddbd3f5ea95e7e2d58f14b17ae239d9d199a596a8a0439fc9b578f0c94bf2565e2da39d5d44dd62f2dd3af517ee54c32807a2dbc536c39d1b884602253a04fce6a262453731558ae4d321ba243e6919186c9f8a163ca9b8f68ae2b1eab35bd99151e7b8cd15a8e7cff05ab8ec5554b981b7ad050adf8d2b28aef1f9ba82d170ba3c558738ad319886fce9f45d9e3bb8e3673b356153858f047547c98cb05c59f8d5c197f32070a5796cbcafc8e3d64f43c59f940732d2230834fd7455f1f2f0cb62e5c7cb153588c3d0e2de857adf8dcde4f2fcd878e44ec75577265d32582ded5365ba2253aaaa9a4872d67f7cbb4b7de6de835105be228aa65a5f82eaf65fe2276b163ca4c3b50986ea66bbd0804100f5d8fa2bf2ec5ad445b8c789ba523ba5050c371d43c2a6ff0044ccba80c6347e0795d989e14cfd9687f65426801a814aed7aee978d3329a23f637c04ca3a6e0c46d1ed8b63c9cda0a2ab3fb2b7d2a7f6d1c11b067d9199a6919957340a10e69a1a91bd453aec765a793fc951a438653d0e261d04b4830df006dc8e9dbcc24f1fb5e4cf5c306319894dc178eae860d0f9f2a8dc6c4023aa3ce7f68afa48d9987ec91a338589045091a5d5e57afcd4d299ae731111a6cc42dd01f1c12d67ddef5e97f5a5ae93c97b3718db39830502561bda6a031a43a9e0371c9378ef41c99038b79add1e2f6669a619a58d8f9f8855cb9ea2b18927033874c982e8f12b467ba36a9ebe3e469eab14bba75dae8fb4886c8b0cd08d24b6be017430e89ac759a270ba2bf6b388b1b6e792cfcd977a3718b0b82bc3cfb4131de3b8c34029504db71f957d39a319bba555cae94108d2cd03a580fcbc96dc71d12a278df9a9b1620850c92d67bdd0953972d4d198aa8ecd73bc61a916330e8ef45cf8788c1a055cef0693f0473a81c9f49bd8260ffd963ff7e27d5737e563ff00d8d98dfeb1abe4e024cc7a42c88db257241caae38998cf6509cef02b97c9976d58c60accb162cfcd16c36979a9a003c6ff0005a787b82bd1f2672abe0c3d2f6b9a458d41dd3f289865dbd93f2b3def0e22805a9e6b9fcb969d1c6b41659cb81ad16a9a5965daad59796f04a104a7618ec9b567c8c50c6d79346ebb5c186a31655079ec66ae73abef1b792cbf27935d36f1e1d052d37aaeb9be476b4f4dc4b21cb2e92239894e00b1e54ec510c5e745d64cb3315667183aaef3506a9b8722f4adb1282083a6b45b31e50dc556668ee123669a82bbbf1bfb47379ac9b56d8c4c8bd397cd7738fa71f3a658516e136d0629b657c56d43b6cb8ff238f6eafc6cf5d24b313551d451733c7b752f7108ccf27a8546e175be367e35c7f95c7b9b889c288bd3619ee38367d0e253a03429c116d720b73d051273c1c96fed2d88d7697c3ef336a1ea2877b74522b2f471e3df68e98116201de68d25a280d3d48aa7e5dc2b8eb4efb347139d1647b2700e890585a4540d400b1f3a795d2f1ea9d9fa457845c4f30f178f06387431304b61f40e6d480eeb51b1f04fca1789abdb5dc5d160d68480ea102f4239a2cbfc067b493d92b3517caba4de0d0171844ed5a5db53d770b361754797715863b3ef91c675105a7b46b5c0deac7d8f2a91cf9a7f27ec38c49bda621f670db19b502201522db8fd6eaf7d6d5276cf9939a1f1e156806b6d4905c05f7205e9d560b96cdf4ddf23890749b9950744334d045853a58fa15a784acab02661992e8cf3fc6ea57fc450737b1615aebd9fb080d956b6d570d46b4a93e14ad52f8e0e54578e19b0c9b5cd028f7d434b6808f1ea0fa85b75aec0cbbdb3a23aa6e5c6e77249e745873bba648d79c1bc3990e51a1806a22af21cea39dd6f704f4d826f1e3aec1503e37e6a32ed2c6901eea8b3af4f2b11e7b2d16c93609143e0185be6a2b618a973cef42ea0aee40a9a2c19e7ba77a5d10b810da0ad6b415db7e7c90681baaaf38cae88a5bd2a3e6572f0bbedab1f498f01787ce9e74f10d2e6cb61d3330e23eee886e70753981a4934e8568ca7f5dffd82b71ffa3faf8591d26227d562f953fbff00e9ae7a6b3966acdf429429888b272e46e1157712b0e1198e61d8d571b96b771c5179372e42939aed081de05b5236279ad7f0f3ef42cf1dc5958a0a821cc87118f3b90096f9ae873e7a8cf8c33e119498df75b4a9f8745c1cb795db7639693bc1b05a53e89bc786d2e493c8c811b7a2e8f171139522cff8e3e142ec580988ef7e9f75aba19dfc786fecae3c7cf255f2f8f3b5063b7da9cd796e4cee595b5daf0d459383c23a41ea998fa66cabb8acc691e4873f418a9f38e796c2dc8597c6d3f1b10c6e741176201e8b272e1634484b8ac1d63af3f54a97429115c4b00e96ea13b1cc39a8ee28374d683ccd7f0e4bd5ff001f771e7b9f2ed4ee2112ebd1c72ed37b1d744ad9ef0699a2c5cd1bb82f696c39fe44d885cbb3b75b1cc199a38107c95e3754594f288262927a1de057a2f8dcb2cd3cef3f1f8d23111753ca3186e7255c9424952542ac3f13742707b4d1cd3509b12ad9cacf18ec585224c382f209ed1f77388e4df1f0adc754df2dc27c740e29231b03987c111087b07bedab6a0fadc7c507fda6ed2be1f65d7e3318c4644ece343707970751f506a0b7c472b22cb35c9539f68bc25fd8c131cbdd161f7759028f14e74d8dba2763de2a46f838d8b2ccd6e6b990629d4c8a2b4afc2de60a449aabb456225d1b148262b83839cdd25c438117b541ebd6b4f927e7dc4c2a71ed4d4fb231bb39a594029b73d80f95149e927b67fe1061cf8b32dd2d73b4779da5da4b45695d8834e608bae6d1d696cdf9b1f2501ce6509734035a5fce8370b771f508bdb254d38c48ba88f79fa88f32b37265bc87e9b4384119a21c3a0fba2bd05968e3c452a8ff006adc543e65ac6ec0548b6fe7cd6ae49ac4522b8e1be58fb4c517680d20dc907c29406bfd160d76995d347e4e260eb6d801702b6a537e74f8a76247933c7193328999825beeb2c2f5f3ebf5a78041cb97d1b8f677f674900e9bd6766b4807a13e16b78ac73fd195ac9d21e2ba3e30bd31b71525744d456f488f03c83caf2fc57a6b934b73d8bf3936522e261f41dbe13330db5a509d0fb1f070750ae96e7e3ffd9597b6a6ff0047cd0e1afa72987ae7fc9ff6d73d358c3340b164bc4927a657379326ac22bbcdf3763eab99c993a18455f8e6104b1f12cd0d1ab51b0b5d6af8985b7a2f93926288e4be39c0880c37101cd245f9816aaec72fc7b6765e1c92ac6cbb99a1c43563d841fe20b0cf8b7665cd61e1998e0329da45862bfc42aba3c7f0fa232cafd13e2dc6782098120c31e3d29aa9dc6f9ba945a72fc7c1379581c38f3caf7e8430bc30c48f42f70abbf2f45e7fe47c8b9badc784c7a8a3b3ae6610e61a59beaa11d6eb92e849d344e54980e84d775683e2b7714e9cbcfda17c50cd620b1d4de868aee3b0cac659f33a448b10d3bce26800e75f0aee8f1c26276356270d787913488918ef703c29b2e7f3d997a6cc6f4b022e0ba4582e75c4c9514ccb01cd0696b22c31233ace7c4a9675c9048f9febc57aaf83351c2e6c6daa6f137725e8f17332f66c86d575789ce522d166cdb7048a5df6a5173b39db7e05b0456db579fe0916e9a7184d8d61156dc53a2770f378e4cdf2387ca6d078f0749217a3e3e499479ecf0b05972712e38a880f67f0472a1c72ee2cf978d0a3433a5f0e235cd3caa08dfc0ec7c13a2e2fff006916fdaa0c19eee6b7b035f426b5a5452e4102fb14ef708fb56decfd9fc484ec37c405d0e27ecdf4ad5a091470a6f4e8b2dbd9ad6fed3ed851f0e74587475035e08736a39d684fc697a2d585e99f2bda29c24c384ce1821100b5edb756bba8ebf141c77fb0ecacfd9ca6df2d36d6be81d05ec350da5684106a6e6be35e8b4f22b1691e2565d64f493226e4c30ea8eba7c0fc8a54bd0b266ce0c62065274170ab35766fab491426953420dbd565cb1ec5be96f71fe0361c2261e9d31054687870bf563c1f3ee90b64f45695ef0632736675c4710e30e80b6809bdc1e74aed5a7a8582fb155c19723981aaf4001b3881e5bd3e8b770dec319b788589199987bc8bead34f2344cf91968e9565e52e1b19684c990f7ea781ad976807d08a8f3f82cf84d9191b78859ca2416e9639cc711be96ff981a8f3174db35158cdaa1c3b0e7ccc40c6f79f11df1277fd0aac19e5bad13a8bfb27656123a1bb3cd09245c9f0fe83d1370c3ecbb574c2c60505ddb0fbbe0b4afc99038ad1354d4477ef44887e2e25798e29d3643a702241d12623359ffe56313e41b53f15a792eb0d977db73ffa3dbffc3e28e932f59be45fedff00a8d33d355c78d40b0e7743c221d98731b618b9a2e2f2e5b6fe38aaf306776127bc29e6b065edae753a513c69e2eb8c332b05d4d47bc41dc745e87f8fe3badb9bcd7791d3d9d3d9cc4e43fb4c7ae93760f0af9ecb6fc8e5b3a8bc30d76d0d867b3b4bb393ac6d72b9b32cda7712396e0cc065db0c1a75bfd536e5959ada791648e5564124b5ad6f900b9f9e377d9f8de95a71bb88ad9484eb8d54b059acdf4dbc7197b20ccc59d990f793a756abf9ecab2c24f4d573d46c4839959020dcecdfc16ae39a8e665dd66fe2b67f7472e6f2bf3a23dc5cc503e0fe4733331da3aed675eb559f9f2eba68934d45070cd00002c2cb9769b054cc2091b327a42735e1ae7fbbebcd3f8a159d519c4cc0ce937db70bd0fc4cb4e6f263d33863d0684af498fa7133f667841155634ae1ba8b365db56391f246357f258f38ddc791f65dbea160cdd1c0be2bb924432f684668c3e8490bbbf139be9c0f97c7af48d685dac6edc8af2208e643aa38af2131a19163e88ad5cab3b2467e84f967c8ce91a00260bc8a969f0f5f24ec33e817143705c374c4d406a635d63434a56c6bc8f9a45f61b5a0a0e75851e4df0265e58d0d21b5a13b5adcef6a84cc6f4cfaec4fb3967030def943a9d01e4986f170c77422b501db8a73452eab54bd237ed378486466c401cd73ac7f71c3911d0faad36ef106135575f01f156ce61a18082f860c37b49a9040fcae938d332880ff00b01d93624501babb426a09a815d8f2b752d07c4a9add28ddc5acc0d8924d86ea362b4802a01ad3a117154df505117f67299709bd0d2291186a09bd88b8ea4579ac17d99ae93fe3ec632b0dd7a39d617a1209bf2fc7e2b663d4d95aed49f0af07fb54d4284ed89a9dc6de5fc966cb2f236c6a7cc528190dd04dc06d852876eb7f8d56bc26a13632467dc53b48840d9b51b169df6236f555c997d0b18b27d987096be33dee00d1a00a8fd7aac326e9b7d2c7e20402c8baa946826a4500a0e5ca9f25d2d1082c6e2fb4123bd6246e391a23d44d217c6cc2fb29b88ce41ef03e3f35e3be365b8db8ae7ff47c65a6cc4fcd35cdd5ff0067c50072abfbb7f950f2f05d1e4e3f2e1dcfdc2b26dae13f071d80c79e902088623438d04f27438d09afa8f06bcbe19f1615c2cb96efc72f73a6cc3b897e69c6fb361774091c99f5a3f19f6c75c4fe3239cf2c6bac2a0dff0056582705a2bcba55f399e5c6add5571dc5791e6b4f1fc4ddec379aa291f0c746ad492fe9baefe18cc3166ddb5b13d92b8a621426c84d772234774bada85f627e8b99c9c92e4e94ee35a42840805b707a6c97a06f4144982d0557a12079bb16d209f35cfe6cdb38a6d8a38f58a18d1434dc57c562c3275b19a84f93261b2acd4d1723d7d11ccb759f33b4ee74891469a9a1dae9d73d13a4131babdc21b7bcf88e029cc7c12f7b3a46a2e10f0ddb292ed2e14738549ebcd0d9b0dbf475c5670568173f93a361ae0422f2938f63b74233149358dbf4badbc5832e79330f15b120dd44388dedf92edf063dc63cf266accb31a9c57a3c3d38dc9eccf091df40856c3559eb5e274c39be2b37256ce389461c07a2e6e6e9e072d00dc6fd566a612e25846bf1a8a267172f8d67e6e2f38ae317c34c371057a9f8dcbe71e6f9b86e14961415ba3252d9781e5ea9908269b85bf5e450e5ec50db10213d7b700a49b330a2c22dab9b7048b114ebfa0a42f3886716a51d022087b37c0d423bd1584d9d7d9fa75c66740fbcd3e56e5e655196696cfb4e6095958716b5735c01bd48b52e37a72aecb64ff20fb569ece1c403253258fbc18c34c469a501e4e07911f3f824637b32afc6ce426c77c22e63e14cb75c27070b3a94731c090eaf316a6eb596cfdc728661bc43bd2a7cb7e4833ba8bc43f67c8b4990fab816f4734545ab506fb7307e2b00eac6f6ac9773e14388dab99cdd6a036f0aedfad96ebfe4b9ed537000813d0c9e40fe1d7f5e4b07d9ed41c4686d634c634034f3fbd65d2c274558c538ecd6b8af70a905e697e493c97b1cf4d23ecef8019687dabc91db508bd5a472f5f1ba4e13741721fed178a085081e6feb5afca856ff00503eeb2993e3f258ff0025374bdbdaba1b462318b6c0c471d3d0d1b5f9dfd5799f89d43b1493d853892dc37156be27f77198213cf405ed37af2a56abbdc594f1f1a564fb2fc6bc39912132661e92e658b852ae86eb8bee403703f88f55e77e7e3265329efeda38efd31571eb38ba141735a684b4d3cd73709e574d36ea30ebe65f1a2389b9362ba3e3233dbb49277244484c111cd2416821c36f009b821770c70e3162f78585aa7cd2fe472f8e3a1f1cdd68dc1728438bb00d88ca1639b6351e2bcff9f6eae38afae1be6d7c3020c7a9a6c4f35b38f93f61cf189de353c29dd4ce4e48548a5b8818c501aed42b8bc996eba5c78b2ce6b961311350fbaebd567f2b1bb6f1c2350005683a23c72ec9cceb1b2c76508bebbf34eb92a438f01f209989a315e016b0d6a6e2bba6e336bcf2f18d0b9d7186c26863481414a27653519f1bdab818a6a3bd6a7e0b97c936d929ff000d8d4152978621caa1dc4cc74069bda97a1d96ee365cd9133ee63311ce14040241af8735e87e3e1f6e6f2e7f4a831898a95d9c674e7e576472ed52d5e30a9a522b56270943f059738d5853e4bbfe4b1651bb0a7c9198d563ebf9ac79e9aa24d8665fd74a6c173f3e6f142acd1c2411a192c1488d1516dc730bb5fc4fc9b9f2785727e7e1fd7c94a4d61259b83625bea3a82bdb7878fb79cf2dc126d63b2ba5d82e381fcd2fda4e8d73b2dcc7aa9668e957c7b2a620d111f05e28220ab4ec6bd2bd36e8952eaa5f48a7b46658892f38e2f1dc88018641d408a0adfa85a739d6cbc3a20e0e620e8113b40683623a8f1df64ac7d99955e7c5fc4e5a3c96a8803a2015690ed2f63bd371e06ab7fd13f6a1b873924cdc60dab98dbd2201501dcab71f0aac395d54caad0c6f2fc6926f6715ed11209d72f12fa2201c813dd1d08d437d969c6da055fc51ce6274c37e92c7b46978b52bd411e3d50725eb466112cf67f6105e4b6a391e55e95a7d0ac98cdd1e513de2f6762d9532ee6b5cd7d9a5d5d4d3e07490e03cc15d09fe498abf86b84ba01edc87007dd706d411e15143e85639374fdae9e2a63daf0f2751ae91f77ebd2ab7617501b64ec2e54bde1a372e1cabcfa2c59ddd17d35fe5a606cb436529a283bbeedaf6dc8f24ee2846d517b45e2fda3a1301a802a456b4e5faaad19ff91e2a53ecfe0b01ab478f18b18f371629b973ea7fe568fc170f826a198d44b234d964769069cbe2b7e3e959f6faa1ece99fa666a55ed988ae880358054f2d21727e6e3d8b8fa557ed212baea013a456b4597831ecef6a432ae5901c1cfab5ae70ef11b56d52ba366d7e2d2b80f0c83e0f6511c22308ee91d39292455804df0fe0c931dd9b45f9ae5fc93b8a765991e549f8ae0e57b75fd45c0706ac3a8b39a2c56bc59ad7303c51f121f7fde6d41f44172a914971b31e2c061b1a5cf7585161bedbb8aab3c97c30988b57bea2b7bf452c3f3cf45eec0cc2769269a4dea82745ccb66ecd198abfb16f9507326c16ac21d8b4570a72c893920fa77a237513cee16ec31d30f365bba5559f7147ba21a574d4efc8a5f253b8e74f6539626e6fd7c560b375a2d3fe35896916b59331c49caa92e2463a686f4279136aad38427932931663cdb364b8f2dd7a1f8fe9c4e4cbb42e336a6eba5bd426774e30652a2cb36593661895b30ce4567bc8db8e01c392f920b9ecec71878c3e01b5abe5f8ac99e4d18c49a4a050d69ebcbd573b3c8f89860739a683615da95aae4f2cd8e2c8cbd300915f2f44df83cbf8f9a5ff00b27e4714cf0b14b71cf2608118c469ee44a120723b9f4bafb872f079f0e3c98fad47cf70b71cf2c2fd554d161faae26a9fb258a3978a648bd883bd05d567e87171f07255b0bf6e4b5ae85ded24e92eb7207759719bc8cbe8c99c31e7631341a2da8e86376f5f5f8ad79deb451fb11e1d1910d6d2a48049a52feb4f925c0daac33be6273dfa2aea36d4aa2cb3e878c5c5ece30a23e144a863a0026d4a4569a7bcc752e3c370b3e3dd4c8ffc4aceb12519a63c3873b26ffbaf7688d0f955911a2a08f1351f4e87a2e335e393d09d11c60088213ae045a17b6bc8b859d4ebcd66e4bdb44685f6698a21c17b5ed0f8711d43bd5b5d88e8420c3da532f1f648c221b7d0e356f4237b10403ea2ab65f45c87ccbb0593322d7411a1cda0702ea8d4db1ad8115fd754ac35bd2668567dce45b0becc695d9c9f7a80910fe1a60e224cb3501a6b5b97000f9b7f15875ba6df4d1f398a325dae0f769669b3b9569ced5f5a15bb8f1219871a9b74c4675f592fd20f515a04ae5cbe8ec62d794e0d775b502ba5b5b73a05976256b9fa7bb48ae3fc5e9b05cac20f19d183068da6202b4e2bca37afb2566b987c38c190dd118d0c04b6fcbf5f059fe470dcbb06f49ae68cb11a722399a1c3a870a5165fc7a3b1ce1a33d6537cbcb06e86b87ba48a55bfa297e561d32d9b3853c487c2220c40e701669e9e1e4979f3c8d18e3bf6b5b13accd80b1a15cce6e5f33649124ca195bb35cff0ec779162c3680d23c16d919ee46392950d0ea7324a4670ec6a2d8ce578711dadcd048350b1d9db5619e8e384612d6d6d64c91595da99e2b4968885c2d74bcb1ed31aac32be0e6667a133de6ea0e71f235bad5c73a6a99ea35ee600590431b6a369f25a72ca631967754ee29807686e37e7d17372e4dd6c9d154ae11d936dbaa95572403396637b2b4f8274f65e59280e22e6c277b57d68792e870717957339b93f4a53149cd44aee71e1e2c1b0b06c10c43b1a7923cf3d1bc78cb52896ca2e1cbd4dbf1f92e7e5cb6b749310b118d0a10efb803d0509b20c70cf3bd41de7c61a216679506b48ae34dac0556bc7e1f26445f99a397fff004c82c0292ee3d7be3e56579ff11c9addc853e74593c34c465b113d9b488114fbac886a1de445abe6bcf7ccf8dc9c3ff71d2e2e6f38b326b84b160d1c5b56d37690e14ebd7e4bcf65c95a665fb28c1b0d2db74e9c92e6565db4ee5881fb4365a8af86c8ccab9ac3de005c0a52bd08f45f4efe23f9acf2e2fc19de9e5fe77c3c65fc98c6787c3a5c5d7a0b76e25219a894f00a6d521ae4e73bf5d85566cf2d99713e4d660d43436c06e7fa21c6e97133e13e4b8b3315b121b0b9b09ed2e70a122974c976acab4871230daca98aea55aca134e6078fe6b5e38eca61bc4a36a793fc47eab26735747c9d348700f141061861dcde9cc8f043c78dd9599abda24b468d0f043cf7a15763bd69b7c87e0b6e7fe578ab1e1fe47334e34d9bb8fc375837d9995d45f791a30966fd9a235aca9fd9c434153fbaedbd0a7e30a996ccbc7cc44f60d86e0d777bba48a96d3f75db8f8ad3f4297b17ecd328d8c23c273c87001c1a7dd23ad3eab3e3d642c957f172076534f6035009a6c401e84fe09dca934bbf81b94591249cf2cac4a9735e09076f81a7549e39bc839a2dc5b9fd3034124936bd08fad41f1a2ddbd42b1f689702f298999915f7618d5b5456b6ad6a3f5cb75cfcaf9568bd353f6005b4ed6dba7a277e32989b1f0751f31f40b8ad18d36c99a3c276296be987fa322202c9c610080584540d881f8ae8dc65c66d9f93d364662cbf0def686b435eeb12050d163cf8e1386487e73e07c130dc5ce3a4024d4d973b93837e9a70e5aa1701e0a1739d160b4ba1b5c68eea013f15c6e7e1ce3a7872ea2c4c1f0b6c314a5c755835abaa3f3d9e9b3341609ba8a15126cd0f8d8044b8320cbb8345563cf2d9d89a6623dd65b5a2390e3d2aabc92a84e3ace3a874febf24cc2eef6bc6227eccba9b32f74435b002bc969b96ba86df4d5189c6d428b3f2e7b2b1e91b8d87f358a7b3fc8cd8f1d2d35b78ad114cf5c4bc537ef53f14fc279119de99d3354e17122bfaeabd07c6c3c5cee45b7ec99ecc5feba88e8b321e2561f4b079f3e602dd6dfa65b7477e3a70f2061f1dd024fb8d854a8dfe1f5bf54dc7e3efd95f9b576cfb9971688496971a6f4ad96bc7e3e33e8ebcf72881ce3493537f54df093d15e548436e99c7ed5b4a5d9789861de1514b8a2f577e2e5c9c72e3fa72afc8d67e24f973177cbc40e69234906a370bc57cef8b66e64f43f13e469bd7817c5985884010dce1db3000e69fbc29b85f3df97f12f1e57ae9e8265bed2dc5b2b36ba9963cfa2e5e5c66ccfe91fc5f070e610f6d45c169da9cd69f879e5c7c909f933cf0d32cf167850e943dbc11ae562137dfb32791f0e857d43e2f2f9e3dbc75ead8a43197df485af2c8c989b1cb30cb72f4a1891190db72f7068a9a6e69bf25035f423843c376c9406b4001e5a0b891437f1150569e2c3ec9aadfda273a449663a55b7645041a80e6d0f8ee0addfe66c3196701cb2e8b1000dd43723f545832bbbb3b6b4f0e8cd826ae058183e6137180bdaacce598ccc4573b95683f4557265d6858cd2eee0765ad10c447000c41bd0070aed7f3ebc966c7b273cbe82e2f6706cbea811a1973dcd3a22b28d23a6a1b38579b4d56c9d070ed4c62fc448b3309b02351fd99ee45b87d39075e8e43793ea35693ef67d9d7428c5c038d00ad29400f23ce8e0952f61ca9d3da3724437527a01157da34225a1cd3c9c1a2e41e668568caf940e35627b37e29a657b27546ff003fd6e95c7d54cea9fe3fc32c9930fee9ef36c6b7dc5cfeacb472e5d2b158decc3816884f8e41ef1a72a507d0ac9c7de5b32d5a715809274f32b7f45b11e2d12a7e1f45e7a3410cb1ef04dc11f473fd18188d5d38d36d219f45d197fac67e5f4db187634224e39b51fb368e7d52322319d209c7ee231d3f6397358b108163c89a159f2ba370c7b597c2acb4204ac36117d02b5ea77418e1e7ed59e7df40665e1eb1e75c3147731c8ac1f23e1cbdc338b9eceaa173583865411421722f1d9edb71e4da3139df7d1bb377a73ba5e78ea1f29c41a85cfa64a6f999204ec919627e3913469303659f29a1ed59e7cca3db5458f82ac6e8ec515c97937ecb175ed54ef2b4cab6e162208436834473d8806dd5638ed7b42b33e321c0f2e4b6e3c60b54167f9861d42db79dfe0b670e136cf9e6a6301c8f127a6592f0dae73a23c34506c2b73e817731ba8c8fadbc1ae19330ac3d901a06a6c2ef3b48049a5c9fcd3f8b1dddb9fcb96eb0a717721cc459f998f6fb3c471680e35a91d3a1f0b7aaea564c99773ae106044731c0d8ee7717b7a29b4c724266616fe28b67ecdd161d15c1cab2b253c4580e6115734588343f0e6be93fc472639f169e7fe4e1e1cb3242b1b972c2473f25e6ff0098e0973b5d8e0cb70764acc51e0456be5dee8711a6a082456e0d0f50bc2fc9e1c6cd576b879ae3edab3287b5c06b442c4213838501890c83ab96ad3417e762bcd727f1fbff002eae3cb16140e25ca4db6b2f1984907b8e3a5d71b50d2fe4572afc5cf8f39b86659cb2aa5cb59e88998d21345ae968ce21822722ee4d24529d2e3cd7bdf89fe23cbf361fdaaafe3b705bec1fb584d8c6138d493a5cd6f41517a74242ea7b0caa462149c86b0f83f8039d19b148ee30dc9156f979a197b0655b972fe67ece58c4895018db576200f1a2e9714236c7bc4fcf6ec4260baa74b4910dbb29cd9c9342917ef06385ad129ae2c36f6ae1a9af17a8dc0d8508f558b09ded6a938ef24658102da8916a72f2bfc96df5018ded4ce4fcb4f9b8a21b2e77bf85f991f32162ceeeb4dbd34660f00cb334b9ba340dc001b5f1a3be6026618b059da8de25e748b3914f6b43d9d5addab4f13b9f5479de9a38e68fb91b239ecfb520548f75cd0411d6f6212f09b5dc926cb5c4597c3e356341a57bae7c104102dbb2a011e543e69b709153b4cf33494b628d0f968ec88c06af601df03c8d1cd3e0e69f4e649668661f847d89ec108d6191714fc47457217b543c70992f98075170d3b1ad8faaae5f46e376d13c20c344190845a6a5ed04ef5b8a91cc7349e25d3fba77c5bf3fc96c0ed88677af92e0341137de09d8a3e817fa35b100d8d387fdcb09f45aadd6319b9bfcacac678a3121cf467437101c4b2bcac52ae4571d5b3c19ca50a62219b8d1044884d9a483a7d0a4d9bad372d7a6928240140b4e33518afb0dce57622219a1ac887b36805e798e43c562e4e094cc72b07cae438219a4b457991bd7cd22fc3994ec57969b66f866d376388fd792c99ff1d3e8cc7e4650c93bc36883dd21df258b3fe3ecf4d18fc945316c02243f798ef302a3e4b97c9f1329f4d78f3ca826609dd1b83f02b1fe1ca7d35e3cb3f6864ee377d94f0a74e49fb060e650ddfe4a7855fe49fb24c5f1fd428d0e3e4d27e89f8f1dfd06f24fda0b89c7886bfb38bffedbeff25a662465c93f682cf70d6726ddfb0978cfd5515d05adf5d540b77162c997246b5f65df658187ff006b9abccb80b52cdf000ec7a9aae971e172f6cb9f37d4697c66821bb95bf05d0c31d32ef6c75c5fc461c38718bb40d04bc50815a5edcd74f0c770358d38819965f1301f2e2915956bc3a9de6f507cd5e5842f56297c430ba6dd6e3c520e94d31a5d490c89970972fba347d0d752c4dcefd473f9adbc3f273e1ff3439c9677126e25e5886039ae88c644603a4169ef5f6d4363d2b641cdcd9f27769785d22dc23c2418e1cf69743167102ba49d8feab55cbe6c7c9b667f694f1b702ec1a0b41ece25d8ea58f85b6212f0e1d7664e4dab8c9789446c5616824070ad2e97c9c58df6763c957ef103870669ac9897fef3482e86d611a8d05eac6d3575a8053f83ac7a232bdecfdc45c31d1708ab9b14986c00f785585a2e0d4d5c07802b7f1ffdb2dbdb1bb2092683aacf99d2b48f03729bfb17d4102cea1e629b84bc26f22b3b28ae2c7175fa7ec70dd4863df1cfcbc17577e189649c09e163e7a2f6b4ac2866ae041ef78023f9ae66595ca8b7a6afc2f13852ac74225ac0012d04f4dc516ee3c0bb931a71ff003d09e8e747f770c968d854f3f1f8a67275130f7b1dc00c15cc8a2352d5d3570045fcc7cea162f74fcaee25bc72c43ece4d08062b7dd2dab48f5fc0ad526a13add50980c818f158c02ba9c2c3cd65ce9b66a34f4c60c214010da284347bbd46fba7f0ceb6cd6b3567d99ac52056c4835eaaf9326ae33c70ea61f2e7b706806e295a8f22287e2958d0e792f0767d8530c2c261c389a6ad35a56dd073aa7ca47759ff00108ce8b14d7bc43ec6be3e297cb91f8e3a6b4e1dccb84b320b812432ada5e96dbadba84be2bdab2aad712e233daf7b68eeebdc373c9c42dc05031df51e8170b4d64cddc26608dd3fe8d56ea9c9a867dd7cb8afc485ab5bc59f93d36ee1bece92c2298aeabc125da5db549af34178f6cd2a68ee134b8feec184e1b161d27e4abf1e97e451fec7c768a3261f4daf7553715b2776509a759d3069e0116ea6d20cbf961b06f52f79ddcedd548ad9f439314e02a91eaa966d62a24307700f9848cb8a26cdf3197e0bfde86c3e60245f8f85fa14cec2189916589a9830ebfe10957e2e1fa1fe5cbf609c8b2dbf630ffe50abfe271fe97f932fd850f26c06ddb0a183fe10affe361fa579e5fb1c30085b766cff00942bff008f87e93ca8e97c358cf758d1e4023c7830c7e83ba5213a4d212e2307534b7a82a5495f323dae72d458136e1a9fd9c4a86869b548e95e7d2817438b2e8c9db39e48c9318471a83a1432ea1739a749076b7cd56596d5749271538631255c1c4074378a87b2ed287c6822a79a90bd2de144e98746c5d5ecb183d66220dce9076d884ab8ab29d137b4465f743886210082696e57fbc079ee99ae88e3f64decfef693119dd0e239b6951cc38ec7c362b1e586db33f469f68190735ed6824c337d2d7ea860f80376f979f44c93501c74e9c09c95586e8a5b5ad4569514b5c7eb92cf70dd332cb49ccc71166646286b623a2c168ef402017b5bd58e1deb745b30c248af3778e59b60cd4a87cb4c86be300d74106bac9b10f15a877f8856c9be808070ef82108c2ed23b5c6313a9841200f022ed3f5582cb697c995d2559d33c3b0b861acd06239ba74baf414e9dd36ea2ab67161e33749c7759c8cc3e663126ef8afd87527920e5cb7e9a77a7d09e0b65c64b4ac36b5ba1da1a5f4e669734e497c787656d9fbda8f30b9b17b269700eb93b1a74a82b7dea24555c2fc8867a306915860d5f7a1bf4b827d163cf2b7a374d3b3dc3d6cb436f64da31adbd82bc3156d9978e5994458ad602496020ded7f04fceea0e43b7007243a2b9d33dd2d8762d373d6b4a823cc02b1eb74ccaac1e22e6164084e3ccb6c3c765bb19a8cfa65e850cc68bcc97bc7ccac5c996ee9a275170ce65e3060806966df97e253b8e74559b5478b622e7bf7240b0b9533a7e33a591c32c9af3160c58acd508b86aa8ff003022cb3e5da55efc50cbe61432e8150032ad2c750b7e06a2dcd3319a2326568d8a452492f884926a4924d6b7adf74cf2aad1b623ac3c82e63592f308f0536d7fa36266989451c9d2ff0042b7cff25724feafa8d02222fa73e16c3725d10d0e408f6a568f6a5136e6b54adbdda28b735a88f17a88087a5238e7288092a239a945c06a856f12a2c12a90088a54667e37e09063c610e621b49043e1ba9725bcabcfc8ad7c7dc1c527c5ac9d0bb2ed60b43740ef06db6e74a724fc710567dcc3c6d86e87f62883580681e69ddadb73c968f18931aad314c2c0248b83b1e9e5441e42974b4bd96a2887385a43888ada0752c08f1dc25e43b7713af6b2ca019084604824dda7623c11e3370a93551cf664e1f36660458b0de445693582f00b1f4d8b1dbb4d2dfd165d76d195dc563ed01034470d2da380a11707c8f23e7e7d53345e1ed777b2f61422c99755a40738100f79be0e6d2d63e49521b9aaff00697826566a1be0b9d0dfa5d706c458529f827eb536562ab70dc971a603a66a755750769b1778d3ea025796ccdacac238eff6586614cb3f68d6d0103734b1a8b5fcbd55c909b8f9553f9a338449e885ee24827badb9a0e439abcb2fa8398e96a70338625c4cc456d0b7dc07eb42940cab4143cfad9361746738340b53cad6b7c96bc66812b27e7ac75f884d39f52ed4ed2cdecdad36b9010f2f2f5a8748d2fc2ce1e7d8a037535badc038b8126b515b568424618f92ed2ae21f1520cac3eca26a2e22803695af2dcdbe0b4eb457b62ac78ba34671bd5ef34adc804dab417b782472597d3463751a5f833833a030432e777dbeed2a01ead3a43bd0fc029842ae5dab0f680cc635fd981bb4f7b957a5bc169caea198f68370e70bac4ed0d0b59c8d6ff2a2c17ba9c9749b711334810e8d71d44500aede7d53f1ba81c32dd4032265e74cc51dc739a1c3590d25a39f7a9b7c92af75a77d354613350e5c0d4431a1a01afbb61bf5f5a229893b46a7bda064e21890229736c581da75c275b70e1769f36fe60b720bc6a899b95865ce21d62e34ef72a9a72e8a6e2bc6a385d61e4b987d826b7099886b627fa3aa6a98a91fbd2e6de447d16c97a2b93fcbeaacbc457b6185b0e221ab1a1e856eeb560aeeb54004c450cc6385ea09ced1453a5eaadd239a92d1e0e511c2e511e0e5551c2e428f17288f28b01e5448a3f8ed94fed0dee1d3159de86efe21b7e4b47165a130f717b8b337058e95890fb27d0b5faae1c36d6d27915be59a48cb30f037c68946026a6e93967d9d2ea2fcc0786ad86c86261e5ec201d4051cc047812081f4438eeb36592d8c9f9161c945851e177a197005c083bdabcd1d82c723afb5dca98d241edb86e926c6c3cc6dea9d819aed4ffb33f10e5a4c3d9311440738d439c4961f80241f04bb8762be933e35e4196c67b38d2919bafef1d25d0de08dc3ace0763cc296172e8c5907303b2e559310624cc18868d8901cd2dafeebdaea38781a9f3578e1f74cf3d859eb8750b1aa4db7b7963ff97148882fd2f51e55fc115d7a8bf4230d92979084204cc68308ecc88e696b1dfe3a6aa1a73dbea91f8e832aa178f3964c38822b3b1890a20ab62408ad8ac36fe1269d54ca743c2a0b943177c07eb634385f5022b6f81db74a333ee343e4ef68080d6344c91b50b80ab9bd2a05091e29b8e997c6abee317125b36f0c9775616fa8546af020d11659c90cc704cfd9eb85ee98fed4f3dd866c0835b73af8ac3fea8eb48668c63ecb2a661fee4369bf8d29b6eba3c78e8358573b6717cf4774535b9a346f6e564be4c924d2e4e167b3abe618266339ad206a6432d35229fbd5b1f0a53c56592df4ab4e79e315ff0056c3a0311af150c21cd25a7c3503f05ab09a0e336ccd8ce29126a297c42e8911eea55d4af86c8393368f516c61b9644b401407539b5277bfc966958b3cf6a9335cdea7e9e964cb969ab8bd3527b3865c6c196269df8a3513d7c0d55e13696ab7e3a66bec8980c1a0926b420823d4547978ad394d45e31464bc12f27eab156800c6f13f34087167bbe8b3a0a3b84d88d59ec0535a71785e309c3e89f3fc95c9e9f59a03d1b096b1ea9070888768ef688768f188ae5069ed4af717b71cf52aa573b443b1ba5e9751ed6a23ce2a91c0e568eb4aa4788511eaa88ed54479ea55c557c5f7184ded8568df780e9e08f0c84cf19c72aca6270f54501e083a5edf79bebc8f815a1555fe0fc189597af64d3ac7de26a7e1cd4f1a0bb56dc75c74c8b5ba2c5d502a058d3a1b1076a2d5c734193754be55e35cf420f8509c1ec8a4fecdcdd5a49b7eccd6ad3e45165c98e2d53121c7f3f625107d9e2c699730ff00e1bb5581fbb4b9a74aa1ff0091299a8b3b837c0774567da261da437bcd652f5dfbc1cdafeb9a55cf6567948d4196e342103b388e850cb077492d612073a120a29b265db27f17b8b31214d6980f0f850dc0969a3d8ea1b836f8a7db0ec27dae5c97c589599917c677f668ac6de1b9ae0c240fb8694a13b0a8b25637b32b26f12f393a6e297027b3068d17a1bef7bdd4e4cb5078e33dac2e0dfb3ec59f688d11fd9c2a8205350779b6b515daab1f95b4acaae5c67d9965590bb483583159efdf5437f5ab5f5a7a109b207c99578cbc337c8c40feeba144ae9731cd201dcb4869343e605555961d85da3992b086c688d6457f650c9bbcd2c12eee995beb8452b0a0416c384e6c48659675be36b26f1e1a65b933afb4be6c8a63ba5c38b618ddad79d2faf515a5968cb2f1892fed15e0770ffed317b489686c23704d483636586f75595d36961330d830fbda5ac68b1d85169c3006d8e7da133a439a8e5b2f530da68e351777851373b3186e264e10f0f9d1dddb3dbdc69b541dfc0d28b15cb61e4cb6b133d6242042712dd850036bd396ca4c48c71db38c88316303bd5f5a1f34195edd09351aab28e681021dfba18d15de8282ff00a344de265670e2a66313532f88dd8db7a834b551f2e5f4d38c464c5d2dd3d798dd2770d84c217ebf4506d671826cb32eb84ec9934a695f6199bd38c4bf8b5c3e8b4e3fe4bcfd3ebb407a8e76cae1bd0da21c22a04743d0ed285ad116e768ab62d38e7abdae4703d4585ad447b57f44350325523c1ca23a0a88f554474151020ad1d43511bce920d7c321c011435050cbaa28c43c58c973585bdf3987173e038eb8b2ee1ada2b5a903700f86cba38652c4dabc97f6a5970dac582f8717625a439b5f00402079a7694a938cd99e0e25fb585315783fdc3d9a45fa72aa1b478c17c25e1ebe19fb4c4611a4d5a1c2dea0a4d9b377a5d1fed861ed735f36d86c8950d11348ab49daa45096aafc69bdc49b3a626d929674c59d09cdab5cd70a1045a876bf2aa6e38699f39db1e672e25c49b710491081ab5b7047c3f5e48ae7af4398a61c27e07c5c508b164269a971fbde00fe2b3dced3274d2cfe19364e0f6000743a51c1d435faa6e3282e4a5309f67c979b9a78851d946779f2f5a446d7a7ef310f2634c9974bbb2e47661cdec8d031b6d8d4539fe8aac3122d44f89fed112f061be1437b660bda5bdc376136ef545a8b4cc342936c8111cf8ef2d157b9c6cd02b5aacd9e676f4b5b267b3e322c2d51c9644370c00823a0b9f9edf8af1ecacf929d310cd53584c132c0b1ec150c739bd9c687d28e156bdbe77f35ae7f504bb55f846151b138ba7bd1623cd4926a40adcefeb648cf2f2a2ad3591b248916b5803a9bbabb579d4d36438e3b2ad571ed03c5fa564e5dd41f7cb5d51e408fe54f8add8e53189876a9b226498d3cea43639ed69ac42da77475b9a9f1a2c3c97675ad47c36cac25a1997a5401a85c9bdebd28938cbb2fda86f68acccd313ecf0ab6bbaf6f2fea13af4771ced57e4ac19ce76b1dd0d22f7fc02c972ececb2912cced981cd8419abbdb1a74fd725a38eea1384daaf153537f8550655a40d7535e880507f6cdf157dac7407592174171458a9a03d8da6b4e2f287f888f8d16a97fad065dc7d86978aa62e5fd95b1e8298383d06d1dd6a91d6c457b2feddd6a191ed6a23ad2a6d02d4a6d1dd4a9020e51020a23a021b502552a3a14f240c23df48f5505a8458b4b6b638750968c61c54cfef948cf969a0e6c0713a22016a1e4ef0e7e4b771e41aa6332f032571425d28443886e1f0c030c9fe368d8f3e456abba1974ab7347b2a4e40341125a20ea1cf07e059623c0949b69b393f69ff000b3019f958660c6fb24dc120d18f8ae1119fe089a4dbc08f82397fe9772da9ce37e51996bfb57c22c826b4a3b5d074753eaa5cd78672754d59530a9a8900c27be3760eb358621d171b06baa00f0164afcb7d2b2ca5a9470dfd9d634c1ed6234884d7723bd3954540556da2f2e9ad724cb36498218a35a05c8005078d13b0e30f92b8e3bfb40c184d741973dac6208d4d228de55276fe8b57584dd2fdd654caf8c4d19b6c68315cc8fa81d65d4e7ee926d43d0d962e4e5d9f2f5a690e2363f331650f630cc498d348ba00757a96b6e7ad9a7aa661926b7597300c9f333714c184c73a238d1c1c0b4035fbe5c3bbea873ceecdf4bb72af0c1f875e300c9917a120b69e047d420c70b9764e552de20f1ee5a1cbe984e067d940e639a5cd3c896c46daa37a3a8b4e3263ec3e3b67298c526b128c077a34471a0681b790e5e6939f24a6ea48d4fc15e177d85a1d19ba63ef5e95ebbf92198ec9b4b78e5c42832908b9af6ba2440435ad76c69d05c7a84ec6695e3b63ac0705893d301ada9311f571a56809b9f41b256797d43a498cd36ff0c786d0e4a1886d157117752e7ad4eff1aa98c2f4adf8f5990e1c2901c5915f5d2e6d6dd7c022b078c6538a224dc6ef17448911c2a5c4927cd272ad1af18bb30fc9425e080fa1a0a9a5411eab3e51932cb6a673fe2822c5d2cbb5b6e9fd514ba9a6ac26a23d2ec24860ad49a1f55461e673291822b12c0805a77f92b9361f3474c445aa22882eb2cc757494588575fb2a4c69c524cffbd013e5e8abe9f64a5625879292b016b2228838392d1e0f51020f51563da9454a107a82181ea205a9447439440eaa206d72881d52efb47952040a8830288e951002d428cf1ed059020ce560c63d9970ab1c05c38743f82771fb0e5180f3ae49c43068ce741747ecea4b23c0a90e6ff1b4568473a8a2e879745c3be50f68dd5fb2c45a6272130cee441fe366cef3001f04bb90f45f9978a5292f48d022f68fdf46920faf4fa239ab0dc674679bf6ab957b74c5967bed437696fc1c2ca5913f10bc078f386451d8c58312547dc88d687b2bd1c19423cc0a048b24aafc664c37da16261b34e32e4c79279a3e17278eac2402d77815a25c7439e922e2f71c8cc416ba5214c406bc51ce78205f6a116f0fcd3b0e4c740547c32c8f17128fd98d5de3df7d0902be3b5564e4cfcaafd36765fe09cbe1f28e60643891295310b40713e15a91f143871eef6a66ce2af11df2dfb38546935af7aa474b8d2e07a596a9346e078f666e2dcbf6a614e42223bcd5b38c0e738f2a45153b7ef049cb194795d43dfb4c67364b38863839f11bdd22bb75076afc168c35a65996eb2ee0585459d8cd86cab9f11dd0b88a9dc8009a0eb448ceedb3d3797073849070d86d3a18e8ce035c422aeafaede9449c71232a55c7fccc25255d1a1398d894b071d24d7f76bb9f05ab19d13eeb04cf4dbe65e5ef2e7c479e77dcec939e5aa7c9a6adf67fe10fd9e1b66220ac478047803c92a77436ae4ccd9aa149427458a400d06c6d534d9689136c21c58cf47108ee8a2cdad1adbd37dffa2bcb23b18b1f84bc280c8426e216b9ce1568153a47436dc750567ba07265b32f17b38f62d305befbb635361f0fa849a571e3e559f634c5ea773cd474347bcab266bacf220dd1f8939e5f49cf13f1c83120c2634031001de1514f0736f528e4d138fb42e06517900e9dc03f115e88cdd98a0158b4dc1b8ab90bbed6cfb38cd69c4a4cf48ecfaa6cf40be9f67242258790fa219e9cfa5ac88a28708aa91ced54408455154211140c831ae5072061ea2061ca20c695103aa88107288303d0556c242b09a14418d51020a23b4428a87da0b27be6206a84e7322b0ea63db424381e8771d4734de3baab6308fc7e7cb45fb36230451a7498ac076e4ed24debce9fc96df60d260ec464669a22427c9bab70e77660df91d5435f355f8f6b9348067ac912b158e119b05a2869119a016f916fe5457e1641c5172fc0f958d13443c420035feee23743c8e809706b8ff84fa2565299e74e599f82b024b49616c5752a4b9f56fe342835fb272cea2a31f9563dbdab01d26ed680f6b88e441b10b46386e76b9bab96478e385c78065a620be5069a03a03e038edcaae864f435df7e49771d7a5d89970173ae1d103a04916428cc3763c8698bbf7a1b8d3557a7bc83bda930e23f192049417b2390f7b839ad86d1575687adaa3cd6ac35eea4ed81b1d2e9a8ce73753bb488695a92013dda8bf2559f24f50ef51a47853c25324c6c67805eea1adad5e5b254ac99e5b2be386252bd852698d88fbe8a59e0ff0009dfcff14ec0be3977d1a3d9424a5497b83d86312690dce01ed68fe1b6adfde15f4557db7e5577e7be2242c3e1988f73453606a6bd07f5a26cc48c98fb8b5c67898ab8070d109a68d6b6a6bfc46a832cbe878e1aeea71ecc7c39871623a3c701c1a3b80d2c7a8e8522cda6593564a4664bb0b9d46b1a0ef61409d8e20634f685e3319f8a60c227b061a58d9e7f979aacb2d0f19f660e1a6447c42d8d1214410feebcb7b84f893cbd3a7aaaeea659e969e60e2543916184fd5470eee8a6a0795aa2a3afe282c0632d66cc7a79d32f7c688eeb42e201a72b592e36618e9108f14551c3cf90f37b5ac0c6b4d40dec11f91378f74c9358bb9ced5f5ba1b90e6321dd9c43980000e6000507ecdbb0db92af25784218052da4613650392c5e06cc699f943ffa887fe6a2663ea977d3ed361717b8d3fc2dfa25c736fb2e6c55683045548f76aa205da2881b6228839b15441a1e85020f57106b5ead0635ca20c6941b408390868c0540ec630a8906b4a8606a23a10a19b35c997c2701bd0d3cd497545589788b96f0fc4621969aa419b61205cc271f275435e0f2175bf1bd2954e37ecad0055b0e3c6867907697b7d477491e350afcec56f48837d96e62aed7327b200d1d0c123a5c176de1babf2ca8a66804f70b25d84b5f1dc1c1d4abe81a7d69641765dcefe92bc1f274a32139ee99846829a0c6d47e049a7a1f443376abbaa7317c7db2f14f610e144a13de70aff23e62fe4b54d34613a229d7c5981da3d8c634eda069af984bcaaef5d1a23e36e845bd99d2e690411b823d126d1cc76b0f13e2ab2720b04f40688ac141332c7b38847fbc866ac7f5e4a6c778e2e8f65ac9f2919ddb362429871f7a11a08b0fa12c37f85bc4aad5272974b8f89b1e1ca31cf7b831a05696f9229b62ca77a613e20e697cf462e06ad692d66fb72344d6bc31926d74700f210977363c60353e85a48db6b5c547a6e8a761cb3892fb50c8c12c6ba2388716d5803a9520579d411e069c93838f7929ae07e40969f8c59311d901adb8697b5af71af475011cac7f9a7c2b6e78fe9a4308cd387e16e731d3501a1a29efb2a7d073fe4ae612325c2a8ae38fb5199bacbca9708009abda69affc3e07f5d54cb290cc78adf6a0db9968ed5a750ad684915f517596dd9d38e27717da5e7842fb3c2eca142a52cd2f77fccf26e8bc9271456d8b6608b1cea8af73ddd4ff002a21b96cd9243712817a714dadc2a23d5548f6a510eb0504a6c1aed914bb554cf85133a66e58f48f0bfce132155f6af038f5870cf5637e812f173acece3f6856a0db30a23bdba88188aa20c6455107b2228831b155a0d6c454835911441a222ab5030f4b418d7a81b06b5ea07431af55b1c8358e536b1c0a8815552c18ada8542653f68ce05c39d25f0c883323bcc7d2c48160ea72f15af8b2fa0d668c52063787b4b5f09b3709b66b9aeed0b69b1be970f8516985eff6ab334f13317895606c682dda8d63811ebcfce88ae7245cb8a113994f1099204564601dbbded3a7ceab2de532587bc27d9d1cf70d7310c0e94d06bd0ea34f5f92d18ee9b3b2ac73038585805f0a563b41beb10e29779d0d457d3c9559a05a8de60e26099865b024a1c3636da99af4b7cab5a79255a9e2af9f850aeb8845ef4bd128fc366ec46775d18cd874e6a3417e0599a2c83db1e5a2ba0c761a87b0d1c3c0f220f3041055f95059b4bb33f1ba631361fb74c3353059ba4c32ff004637413e64791e53cab2e5c577b889e55ce7065e2088f86e8ba4d436a0027c7fa27e367d9930dc4d314f69d8eefeea0c38606da897114db6d2133f2481ff008f101ce7c529a9f20cc3ea1bee868d207e6977977e8ec78e628a76e7aa1f3a6b85e82e76a02e720da035511eaaa4709511eaa88e288f1511c511d45a438b1c97a34792ae45548f214ce998827a46847fea08b65d7da8caf3958104f584cfa21c5ceca6a9d3ed29810c4c2140c4754831b30a20d6cc28831b30a20e6475107b63a8831b1d441ad8e82c40c4742839b1d56d06b232b41ec8aa20d644548384455b418d88a851eed545ab6e2e65fed6139ed7ba13da2ad7b6f420731b11d451378ef6ab3a626e29717e6a519d9c7840b7611e11a35fe25bf74f5165d7c64acd7be94e40e3f43738363322e806fa5cd3f51f8a5673e8538ad3a639ed45018dd12ec7bedeec5d20123cbf0feb8fc64370e2b54ce75e3c4499eeb5ac803622193faa277969b71e3d2b8858db756a885cebedd7e291965b06585fa4ba171a0c28460c1830dad3ccefeb452198e1af680e238ebe21a9b780d951926887b63d552c59888b48f550a3c4ab472aa6d1e255238a23d5511e511e511c511c2a23c4288e288f288f288f234392030694552fa3b65cfef19fe367f9c20a53ecfe42ff00bacbff00ecb3e81560c39ffa3fa696310d41a15206c5107315a06c5483daa21435440daa20d86aaa06961c7d0e086887c35710a18ad0743510731023c54140428b32e67fee9ffe177d15cf68f9f1ed19ff00768dff00b87eabb9c5fe583ff361fc4b7095caeae1e91d98dd61a7624a509828aa880a2fa547952de2a2028a23c10a3ae511c511e511e511e511c511c6a88e1511e2a23ae511e2a23ca238a23c8d1fffd9);
INSERT INTO `performa_1_reg` (`sr_no`, `submit`, `verification`, `college_code`, `college_name`, `college_address`, `college_telephone`, `college_fax`, `college_email`, `college_status_grant`, `college_status_minority`, `college_pl_state`, `female_student_count`, `male_student_count`, `total_student_count`, `principal_name`, `principal_mobile`, `principal_email`, `principal_telephone`, `principal_fax`, `bank_name`, `bank_account`, `ifSC`, `signatories_1`, `signatories_2`, `prev_student_count`, `prev_adopted_village`, `prev_village_taluka`, `prev_village_district`, `prev_student_120hrs`, `prev_student_240hrs`, `prev_audit_adopt`, `prev_volunteer_camp`, `prev_starting_date_camp`, `prev_ending_date_camp`, `prev_venue_camp`, `prev_post_camp`, `prev_taluka_camp`, `prev_district_camp`, `prev_audit_camp`, `sba_accom_camp`, `sba_village_camp`, `sba_atpost_camp`, `sba_taluka_camp`, `sba_district_camp`, `sba_per_name_camp`, `sba_per_contact_camp`, `suggestion_improve`, `expectation`, `date_application`, `place_application`, `img1`, `img2`) VALUES
(2, 1, 1, 'A02', 'K.C.College, Churchgate', 'jhfkjh', '', '', '', 'GOVT. AIDED', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-12', '', '', '');

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
(1, 'A01', 'Nitin', 'Elphinstone College, Fort', '', '1234567890', '', 'sushilanildubey@gmail.com', 'Mech', '2020-07-29', 'No', '', ''),
(2, 'A01', '', 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', ''),
(3, 'A01', '', 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', ''),
(4, 'A02', '', 'K.C.College, Churchgate', '', '', '', '', '', '0000-00-00', '', '', ''),
(5, 'A02', '', 'K.C.College, Churchgate', '', '', '', '', '', '0000-00-00', '', '', ''),
(6, 'A02', '', 'K.C.College, Churchgate', '', '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `po_login_details`
--

CREATE TABLE `po_login_details` (
  `sr_no` int(11) NOT NULL,
  `college_name` varchar(500) NOT NULL,
  `college_code` varchar(50) NOT NULL,
  `po_user_id` varchar(100) NOT NULL,
  `po_password` varchar(100) DEFAULT NULL,
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

--
-- Dumping data for table `po_login_details`
--

INSERT INTO `po_login_details` (`sr_no`, `college_name`, `college_code`, `po_user_id`, `po_password`, `po_name`, `po_email`, `po_contact`, `po_year`, `po_invalid`, `pass_invalid`, `vol_count`, `vec_gen`, `time`) VALUES
(1, 'Elphinstone College, Fort', 'A01', 'POA012020', NULL, 'Sushil', 'sushilanildubey@gmail.com', '1234567890', 2020, 0, 1, 12, 1, '2020-07-10 10:55:34.559729'),
(0, 'K.C.College, Churchgate', 'A02', 'POA022020', '202cb962ac59075b964b07152d234b70', 'Sushil', 'sushilanildubey@gmail.com', '1234567890', 2020, 0, 1, 0, 0, '2020-07-11 19:57:37.723818');

-- --------------------------------------------------------

--
-- Table structure for table `principal_login_details`
--

CREATE TABLE `principal_login_details` (
  `sr_no` int(11) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `college_code` varchar(100) NOT NULL,
  `principal_user_id` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `principal_name` varchar(100) NOT NULL,
  `principal_email` varchar(100) NOT NULL,
  `principal_contact` varchar(100) NOT NULL,
  `invalid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `principal_login_details`
--

INSERT INTO `principal_login_details` (`sr_no`, `college_name`, `college_code`, `principal_user_id`, `password`, `principal_name`, `principal_email`, `principal_contact`, `invalid`) VALUES
(3, 'Elphinstone College, Fort', 'A01', 'PRINA01', NULL, 'MD', 'sushilanildubey@gmail.com', '1234567890', 1),
(4, 'K.C.College, Churchgate', 'A02', 'PRINA02', '202cb962ac59075b964b07152d234b70', 'Sushil', 'sushilanildubey@gmail.com', '1234567890', 1);

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
(1, 'A01', 'Elphinstone College, Fort', 'L', '12', '1234567890', 'l1@gmail.com'),
(2, 'A01', 'Elphinstone College, Fort', '', '', '', ''),
(3, 'A01', 'Elphinstone College, Fort', '', '', '', ''),
(4, 'A02', 'K.C.College, Churchgate', '', '', '', ''),
(5, 'A02', 'K.C.College, Churchgate', '', '', '', ''),
(6, 'A02', 'K.C.College, Churchgate', '', '', '', '');

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

--
-- Dumping data for table `volunteer_user_id_po`
--

INSERT INTO `volunteer_user_id_po` (`college_code`, `first_name`, `middle_name`, `last_name`, `mother_name`, `contact`, `email_id`, `vol_user_id`, `password`, `college_name`, `invalid`) VALUES
('A01', 'Person', 'ABC', 'ABC', 'ABC', '1234567890', 'sushilanildubey123@gmail.com', 'MH09A0120001', NULL, 'Elphinstone College, Fort', 0),
('A01', 'Person', 'ABC', 'ABC', 'ABC', '1234567890', 'sushilanildubey@gmail.com', 'MH09A0120002', '202cb962ac59075b964b07152d234b70', 'Elphinstone College, Fort', 0),
('A01', 'Hello', 'Iron', 'Man', 'Howard', '1234567890', 'anilfgpdubey@gmail.com', 'MH09A0120003', NULL, 'Elphinstone College, Fort', 0),
('A01', 'Sharvay', 'ABC', 'Chavan', 'ABC', '9876545678', 'mindflayer828633@gmail.com', 'MH09A0120004', NULL, 'Elphinstone College, Fort', 0),
('A01', 'Sharvay', 'ABC', 'Chavan', 'ABC', '9876545678', 'mindflayer82800633@gmail.com', 'MH09A0120005', NULL, 'Elphinstone College, Fort', 0),
('A01', 'Sushil', 'Anilkumar', 'Dubey', 'ABC', '9876545678', 'dypmedical@gmail.com', 'MH09A0120006', NULL, 'Elphinstone College, Fort', 0),
('A01', 'Ojaswi', 'Sandeep', 'Deshmukh', 'ABC', '1234567890', 'sushilanildubey298@yahoo.in', 'MH09A0120007', NULL, 'Elphinstone College, Fort', 0),
('A01', 'Ojaswi', 'Sandeep', 'Deshmukh', 'ABC', '1234567890', 'sushilanildubey28@yahoo.in', 'MH09A0120008', NULL, 'Elphinstone College, Fort', 0),
('A01', 'Sushil', 'Anilkumar', 'Dubey', 'ABC', '9876545678', 'dypmedical12@gmail.com', 'MH09A0120009', NULL, 'Elphinstone College, Fort', 0),
('A01', 'Hello', 'Iron', 'Man', 'Howard', '1234567890', 'anilfgpdubey123@gmail.com', 'MH09A0120010', NULL, 'Elphinstone College, Fort', 0),
('A01', 'Harry', 'James ', 'Potter', 'ABC', '9876545678', 'mindflayer867286@gmail.com', 'MH09A0120011', NULL, 'Elphinstone College, Fort', 0),
('A01', 'Harry', 'James ', 'Potter', 'ABC', '9876545678', 'mindflayer8286@gmail.com', 'MH09A0120012', NULL, 'Elphinstone College, Fort', 0);

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
  `password` varchar(100) DEFAULT NULL,
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
-- Dumping data for table `vol_personal_details`
--

INSERT INTO `vol_personal_details` (`college_code`, `verification`, `first_name`, `middle_name`, `last_name`, `mother_name`, `contact`, `email_id`, `vol_user_id`, `password`, `college_name`, `class`, `department`, `division`, `roll_number`, `nss_year`, `form_date`, `address`, `ward`, `gender`, `hobbies`, `special_interest`, `blood_group`, `height`, `birth_date`, `voter`, `voter_id`, `aadhar_card`, `caste`, `other_caste`, `worked_in`, `other_worked_in`, `toilet`, `guardian_name`, `guardian_office_address`, `guardian_mobile`, `relation_student`, `guardian_profession`, `complete_120_hrs`, `year_120_hrs`, `class_120_hrs`, `department_120_hrs`, `complete_camp`, `year_camp`, `class_camp`, `department_camp`, `photo`, `sign`, `time`) VALUES
('A01', 1, 'Person', 'ABC', 'ABCD', 'ABC', '1234567890', 'sushilanildubey123@gmail.com', 'MH09A0120001', '202cb962ac59075b964b07152d234b70', 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:27:27.874462'),
('A01', 1, 'Person', 'ABC', 'ABCQ', 'ABC', '1234567890', 'sushilanildubey@gmail.com', 'MH09A0120002', '202cb962ac59075b964b07152d234b70', 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:25:05.642982'),
('A01', 1, 'Hello', 'Iron', 'AMan', 'Howard', '1234567890', 'anilfgpdubey@gmail.com', 'MH09A0120003', NULL, 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:25:10.630004'),
('A01', 1, 'Sharvay', 'ABC', 'Chavan', 'ABC', '9876545678', 'mindflayer828633@gmail.com', 'MH09A0120004', NULL, 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:25:01.772341'),
('A01', 1, 'Sharvay', 'ABC', 'CVhavan', 'ABC', '9876545678', 'mindflayer82800633@gmail.com', 'MH09A0120005', NULL, 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:27:24.010679'),
('A01', 1, 'Sushil', 'Anilkumar', 'DAubey', 'ABC', '9876545678', 'dypmedical@gmail.com', 'MH09A0120006', NULL, 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:24:52.338835'),
('A01', 1, 'Ojaswi', 'Sandeep', 'Deshmukh', 'ABC', '1234567890', 'sushilanildubey298@yahoo.in', 'MH09A0120007', NULL, 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:27:12.147310'),
('A01', 1, 'Ojaswi', 'Sandeep', 'Dieshmukh', 'ABC', '1234567890', 'sushilanildubey28@yahoo.in', 'MH09A0120008', NULL, 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:24:47.029971'),
('A01', 1, 'Sushil', 'Anilkumar', 'Dubey', 'ABC', '9876545678', 'dypmedical12@gmail.com', 'MH09A0120009', NULL, 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:27:16.164897'),
('A01', 1, 'Hello', 'Iron', 'Man', 'Howard', '1234567890', 'anilfgpdubey123@gmail.com', 'MH09A0120010', NULL, 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:27:31.817135'),
('A01', 1, 'Harry', 'James ', 'Pdtter', 'ABC', '9876545678', 'mindflayer867286@gmail.com', 'MH09A0120011', NULL, 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:27:20.047563'),
('A01', 1, 'Harry', 'James ', 'Potter', 'ABC', '9876545678', 'mindflayer8286@gmail.com', 'MH09A0120012', NULL, 'Elphinstone College, Fort', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2020-07-11 07:24:57.614150');

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
-- Indexes for table `po_login_details`
--
ALTER TABLE `po_login_details`
  ADD PRIMARY KEY (`po_user_id`);

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
-- Indexes for table `vol_personal_details`
--
ALTER TABLE `vol_personal_details`
  ADD PRIMARY KEY (`vol_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopted_area`
--
ALTER TABLE `adopted_area`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `advisory_committee`
--
ALTER TABLE `advisory_committee`
  MODIFY `Sr. No.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `college_info`
--
ALTER TABLE `college_info`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- AUTO_INCREMENT for table `performa_1_reg`
--
ALTER TABLE `performa_1_reg`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `po_details`
--
ALTER TABLE `po_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `principal_login_details`
--
ALTER TABLE `principal_login_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_leader`
--
ALTER TABLE `student_leader`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

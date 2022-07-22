-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 10:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newwomens`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigncase`
--

CREATE TABLE `assigncase` (
  `aid` int(5) NOT NULL,
  `detailid` int(5) NOT NULL,
  `lawyerid` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `cmtdate` varchar(12) NOT NULL,
  `closedate` varchar(12) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigncase`
--

INSERT INTO `assigncase` (`aid`, `detailid`, `lawyerid`, `status`, `comments`, `cmtdate`, `closedate`, `feedback`) VALUES
(41, 34, 9, 'Completed', 'final hearing on 30-01-2023', '08-07-2022', '2023-02-08', 'Thank you for your service.'),
(42, 35, 24, 'Assigned', '', '', '', ''),
(43, 37, 9, 'Case Proceed', '1st hearing on 10-08-2022', '08-07-2022', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `assigncounsel`
--

CREATE TABLE `assigncounsel` (
  `acid` int(5) NOT NULL,
  `bookid` int(5) NOT NULL,
  `counsellorid` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `cmdate` varchar(12) NOT NULL,
  `closedate` varchar(12) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigncounsel`
--

INSERT INTO `assigncounsel` (`acid`, `bookid`, `counsellorid`, `status`, `comments`, `cmdate`, `closedate`, `feedback`) VALUES
(26, 25, 5, 'Assigned', '', '', '', ''),
(27, 26, 6, 'Completed', 'the final meeting on 20-07-2022 at 10 am.', '08-07-2022', '2022-07-21', 'Thank you for your Amazing counseling booking service.');

-- --------------------------------------------------------

--
-- Table structure for table `awarenessprograms`
--

CREATE TABLE `awarenessprograms` (
  `programid` int(5) NOT NULL,
  `programname` varchar(70) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `ptime` time DEFAULT NULL,
  `mode` varchar(10) NOT NULL,
  `link` varchar(50) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awarenessprograms`
--

INSERT INTO `awarenessprograms` (`programid`, `programname`, `name`, `date`, `ptime`, `mode`, `link`, `discription`, `file`, `status`) VALUES
(2, 'Mahila shakti kendra scheme', 'Goverment of India', '2022-04-22', '19:25:00', 'online', 'meet.google.com/fwo-ejua-qsk', 'The Goverment of India is implementing Mahila shakti kendra scheme which was approved in November,2017 as a centrally sponsered sheme, for implementation  during the financial year 2017-18,2019-2020,2021-2022 to empower nural women through community participation.', 'b.jpg', 'active'),
(3, 'TED-style talks to inspire women for their safety', 'Manusha Martin', '2022-05-25', '18:50:00', 'online', 'meet.google.com/fwo-ejua-qsu', 'Women have moved to great leadership positions around the world. There are a number of instances where women have bravely faced the challenges of our society and raised their voices on domestic violence, gender diversity, girl power, self-esteem, and a lot of other issues that touch a nerve. Just listening to them creates a circle of positive energy all around us. Such inspiring talks and real-life stories provide lots of energy and motivation that remain with us long after the talks are over.', 'aware1.jpg', 'inactive'),
(6, 'Classes based on women safety', 'Varsha Das', '2022-07-29', '18:20:00', 'online', 'meet.google.com/fwo-ejua-qso', 'Avoid martial arts studios** unless you specifically wish to train in the traditional martial arts techniques and are prepared for a long-term commitment. Many women’s self-defense programs teach watered-down martial arts techniques that are complex and unrealistic under the stress of an actual attack. 2. The self-defense program should include simulated assaults**, with a fully padded instructor in realistic rape and attack scenarios, to allow you to practice what you’ve learned.', 'womensafety.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `b_id` int(5) NOT NULL,
  `a_id` int(5) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `commentdate` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`b_id`, `a_id`, `comment`, `commentdate`) VALUES
(16, 41, '1st hearing on 15-07-2022', '06-07-2022'),
(17, 41, '2nd meeting on 18-09-2022', '06-07-2022'),
(18, 41, '2nd hearing on  25-10-2022', '06-07-2022'),
(19, 41, '3rd meeting on 20-11-2022', '06-07-2022');

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE `bookdetails` (
  `bookid` int(5) NOT NULL,
  `fromdate` varchar(12) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `message` varchar(400) NOT NULL,
  `specialization` varchar(40) NOT NULL,
  `logid` int(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `charge` int(5) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`bookid`, `fromdate`, `idproof`, `message`, `specialization`, `logid`, `status`, `charge`, `reason`) VALUES
(25, '2022-07-06', '2.jpg', 'mentally disturbed', '1 ', 80, 'Assigned', 2000, ''),
(26, '06-07-2022', 'al.jpg', 'kdjldak', '2', 21, 'Assigned', 2000, ''),
(27, '08-07-2022', '2.jpg', 'I don\'t have any job. so am depressed. I want to counsel for what I do for my job.', '2 ', 80, 'Approved', 2000, ''),
(28, '08-07-2022', 'al.jpg', 'I want to counsel about my career.', '2 ', 21, 'Unpaid', 3000, ''),
(29, '08-07-2022', 'al.jpg', 'I am very confused about choosing a course after my +2.', '3 ', 21, 'Rejected', 0, 'Its not valid.');

-- --------------------------------------------------------

--
-- Table structure for table `counselbackup`
--

CREATE TABLE `counselbackup` (
  `cb_id` int(5) NOT NULL,
  `a_id` int(5) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `cmdate` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counselbackup`
--

INSERT INTO `counselbackup` (`cb_id`, `a_id`, `comments`, `cmdate`) VALUES
(16, 27, '1st meeting on tomorrow at 1 pm', '08-07-2022'),
(17, 27, '2nd meeting on 10-07-2022 at a counseling service center. at 10 am', '08-07-2022'),
(18, 27, '3rd meeting in same place on 18-07-2022', '08-07-2022');

-- --------------------------------------------------------

--
-- Table structure for table `counsellors`
--

CREATE TABLE `counsellors` (
  `counsellorid` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `experiencedyears` int(2) NOT NULL,
  `specialization` varchar(40) NOT NULL,
  `loginid` int(5) NOT NULL,
  `status` int(1) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counsellors`
--

INSERT INTO `counsellors` (`counsellorid`, `name`, `age`, `gender`, `phonenumber`, `email`, `address`, `state`, `district`, `idproof`, `experiencedyears`, `specialization`, `loginid`, `status`, `file`) VALUES
(2, 'Mariyam', 46, 'female', '9676783945', 'mariyam@gmail.com', 'mariyam\'house', '1', '2', 'mariyamidproof.jpg', 5, '2', 40, 0, 'mariyam1.jpg'),
(3, 'Arun', 25, 'male', '9876564532', 'anandhu@gmail.com', 'arun\'s house', '1', '1', 'arunidproof.jpg', 9, '2', 46, 1, 'aruncoun.jpg'),
(5, 'Vandana', 29, 'female', '9878765456', 'vandana@gmail.com', 'Vandana House', '1', '1', 'all.jpg', 6, '1 ', 53, 1, 'vandana.jpg'),
(6, 'Arya', 32, 'female', '', 'arya@gmail.com', '', '1', '1', 'aryaidproof.jpg', 4, '2', 55, 1, 'arya.jpg'),
(10, 'Noushad', 49, 'male', '9867546767', 'shifana4020@gmail.com', 'Noushad Villa', '1', '1', 'noushadidproof.jpg', 5, '1 ', 81, 1, 'noushad1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `crimecategory`
--

CREATE TABLE `crimecategory` (
  `crimeid` int(5) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crimecategory`
--

INSERT INTO `crimecategory` (`crimeid`, `category`) VALUES
(1, 'Sexual_harrasment'),
(2, 'Domestic_violence'),
(3, 'Acid_attacks'),
(4, 'Divorce_case');

-- --------------------------------------------------------

--
-- Table structure for table `crimedetails`
--

CREATE TABLE `crimedetails` (
  `detailid` int(5) NOT NULL,
  `applydate` varchar(12) NOT NULL,
  `crimedate` date NOT NULL,
  `discription` varchar(400) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `file1` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `charge` int(5) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `logid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crimedetails`
--

INSERT INTO `crimedetails` (`detailid`, `applydate`, `crimedate`, `discription`, `idproof`, `file1`, `status`, `category`, `charge`, `reason`, `logid`) VALUES
(34, '06-07-2022', '2022-06-26', 'I am writing this letter in a very unfortunate and hard situation. I have been through a lot in my life but this is something I wish no one would ever go through. I have been married to an animal of a man for the past three years. After my first miscarriage, I was blamed for the happening by his family, and instead of supporting me, he isolated me. Since the miscarriage, he has been beating me fre', 'al.jpg', 'complaint rape.jpeg', 'Assigned', '2 ', 3000, '', 21),
(35, '06-07-2022', '2022-06-26', 'I want a divorce because he is very cruel. I don\'t like him.', 'al.jpg', 'complaint2 rape.jpeg', 'Assigned', '4 ', 3000, '', 21),
(36, '06-07-2022', '2022-06-27', 'He started adopting cruelties mentally as well as physically upon me. Then he and his family members including his mother and unmarried sisters mercilessly beat me.', 'al.jpg', 'complaint2 rape.jpeg', 'Aproved', '4 ', 3000, '', 21),
(39, '07-07-2022', '2022-06-26', 'A guy from my neighborhood is continuously stalking me for around a month. Now he started mentally harassing me through phone calls by compelling me to accept his proposal.', 'al.jpg', 'complaint2 rape.jpeg', 'Rejected', '2 ', 0, 'not valid\r\n', 21),
(40, '08-07-2022', '2022-06-27', 'I want a divorce. he beating me.', 'al.jpg', 'complaint2 rape.jpeg', 'Rejected', '4 ', 0, 'your data is not valid', 21),
(41, '08-07-2022', '2022-06-27', 'mental harrasment ', 'al.jpg', 'complaint rape.jpeg', 'Aproved', '2 ', 3000, '', 21);

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `lawyerid` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `court` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `experiencedyears` int(2) NOT NULL,
  `specialization` varchar(40) NOT NULL,
  `loginid` int(5) NOT NULL,
  `status` int(1) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`lawyerid`, `name`, `age`, `gender`, `phonenumber`, `email`, `address`, `court`, `state`, `district`, `idproof`, `experiencedyears`, `specialization`, `loginid`, `status`, `file`) VALUES
(3, 'varun', 46, 'male', '+9163212456', 'varun@gmail.com', 'Varun\'s House', 'family court', '1', '2', 'id card.jpg', 12, '2', 13, 1, 't2.jpg'),
(9, 'Keerthi', 34, 'female', '9867564576', 'keerthi@gmail.com', 'keerthi house', 'district court', '1', '1', 'keerthiidproof.jpg', 4, '2', 30, 1, 't1.jpg'),
(13, 'Mdhun', 34, 'male', '9676453423', 'midhun@gmail.com', 'Thiruvani House', 'district court', '1', '1', '109433pic3.jpg', 3, '1', 61, 0, '640.jpg'),
(20, 'Tania', 23, 'female', '7856543423', 'taniamargret98@gmail.com', 'Melannud House', 'district Court', '1', '2', 'taniaidproof.jpg', 4, '1', 71, 1, 'tanialawyer.jpg'),
(21, 'Shifana', 22, 'female', '8657643353', 'shifanapn99@gmail.com', 'Karivupally House', 'district court', '1', '2', 'shifanaidproof.jpg', 4, '3', 72, 1, 'shifanalawyer.jpg'),
(22, 'Vijayalkshmi', 24, 'female', '9865342456', 'lakshmimrvkm@gmail.com', 'Thiruvammali House', 'district court', '1', '1\r\n\r\n', 'al.jpg', 4, '2', 73, 1, 'al2.jpg'),
(24, 'Athila', 43, 'female', '9887643785', 'shifanapn1020@gmail.com', 'sdfv', 'family court', '1', '1', 'c2.jpg', 5, '3 ', 83, 1, 'all.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lawyerspecialization`
--

CREATE TABLE `lawyerspecialization` (
  `lawyerspeid` int(5) NOT NULL,
  `categorylawyer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyerspecialization`
--

INSERT INTO `lawyerspecialization` (`lawyerspeid`, `categorylawyer`) VALUES
(1, 'Criminal_lawyer'),
(2, 'Family_lawyer'),
(3, 'Divorce_lawyer');

-- --------------------------------------------------------

--
-- Table structure for table `leave_cc`
--

CREATE TABLE `leave_cc` (
  `leaveid` int(5) NOT NULL,
  `type` varchar(10) NOT NULL,
  `leavedate` date NOT NULL,
  `reason` varchar(70) NOT NULL,
  `loginid` int(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_cc`
--

INSERT INTO `leave_cc` (`leaveid`, `type`, `leavedate`, `reason`, `loginid`, `status`) VALUES
(2, 'sick', '2022-05-26', 'I am not well', 53, 'Accepted'),
(5, 'sick', '2022-05-29', 'I am not feeling well', 46, 'Accepted'),
(6, 'casual', '2022-06-27', 'Have to attend some important business', 46, 'Accepted'),
(7, 'sick', '2022-06-30', 'I have fever', 55, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE `rights` (
  `rightid` int(5) NOT NULL,
  `name` varchar(70) NOT NULL,
  `file` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rights`
--

INSERT INTO `rights` (`rightid`, `name`, `file`, `status`) VALUES
(2, 'The Immoral Traffic (Prevention) Act, 1956 ', 'immoral traffic.pdf', 'inactive'),
(9, 'The Dowry Prohibition Act, 1961 (Amended in 1986)', 'dowry_prohibition.pdf', 'active'),
(10, 'The Commission of Sati (Prevention) Act, 1987 ', 'commision of sati.pdf', 'active'),
(13, 'Protection of Women from Domestic Violence Act, 2005', 'domviolence.pdf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `specification_tbl`
--

CREATE TABLE `specification_tbl` (
  `spec_id` int(5) NOT NULL,
  `category` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specification_tbl`
--

INSERT INTO `specification_tbl` (`spec_id`, `category`, `status`) VALUES
(1, 'mental_health_counseling', 'active'),
(2, 'guidance_and_career_counseling', 'active'),
(3, 'Educational_counseling', 'active'),
(4, 'Addiction_counseling', 'active'),
(5, 'Marriage_and_family_counseling', 'active'),
(7, 'Ahuh_hjghj', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `d_id` int(5) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `s_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`d_id`, `dname`, `s_id`) VALUES
(1, 'kottayam', 1),
(2, 'malappuram', 1),
(3, 'Alappuzha', 1),
(4, 'Ernakulam', 1),
(5, 'Idukki', 1),
(6, 'Kannur', 1),
(7, 'Kollam', 1),
(8, 'Kasaragod', 1),
(9, 'Kozhikode', 1),
(10, 'Palakkad', 1),
(11, 'Pathanamthitta', 1),
(12, 'Thiruvananthapuram', 1),
(13, 'Thrissure', 1),
(14, 'Wayanad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `loginid` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type1` varchar(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`loginid`, `username`, `password`, `type1`, `status`) VALUES
(1, 'admin', 'adminn', 'admin', 1),
(13, 'varun@gmail.com', 'varun', 'lawyer', 1),
(21, 'anupama@gmail.com', 'anupama', 'user', 1),
(30, 'keerthi@gmail.com', 'Keerthi@123', 'lawyer', 1),
(31, 'sheeja@gmail.com', 'sheeja', 'user', 1),
(40, 'mariyam@gmail.com', 'Mariyam@123', 'counsellor', 0),
(46, 'anandhu@gmail.com', 'Aru@123', 'counsellor', 1),
(53, 'vandana@gmail.com', 'Vandana@123', 'counsellor', 1),
(55, 'arya@gmail.com', 'Arya@123', 'counsellor', 1),
(61, 'midhun@gmail.com', 'Midhun@23', 'lawyer', 0),
(64, 'manika@gmail.com', 'Manika', 'user', 1),
(71, 'taniamargret98@gmail.com', 'Tania@123', 'lawyer', 1),
(72, 'shifanapn99@gmail.com', 'Shifana@123', 'lawyer', 1),
(73, 'lakshmimrvkm@gmail.com', 'Vijayalkshmi@123', 'lawyer', 1),
(80, 'alfiya@gmail.com', 'Alfiya', 'user', 1),
(81, 'shifana4020@gmail.com', 'Noushad@134', 'counsellor', 1),
(83, 'shifanapn1020@gmail.com', 'Athila@123', 'lawyer', 1),
(86, 'nehaalex92@gmail.com', 'Nehaaa', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `paymentid` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `did` int(5) NOT NULL,
  `charge` int(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`paymentid`, `uid`, `did`, `charge`, `status`) VALUES
(12, 21, 34, 3000, 'Paid'),
(13, 21, 35, 3000, 'Paid'),
(14, 21, 36, 3000, 'Paid'),
(15, 80, 37, 3000, 'Paid'),
(16, 31, 38, 3000, 'unpaid'),
(17, 31, 38, 3000, 'unpaid'),
(18, 21, 39, 3000, 'Paid'),
(19, 21, 39, 3000, 'Paid'),
(20, 21, 41, 3000, 'Paid'),
(21, 21, 42, 3000, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment2`
--

CREATE TABLE `tbl_payment2` (
  `payid` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `bookid` int(5) NOT NULL,
  `charge` int(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment2`
--

INSERT INTO `tbl_payment2` (`payid`, `userid`, `bookid`, `charge`, `status`) VALUES
(5, 80, 22, 3000, 'Paid'),
(6, 80, 24, 2000, 'Paid'),
(7, 80, 23, 2000, 'Paid'),
(8, 80, 25, 2000, 'Paid'),
(9, 21, 26, 2000, 'Paid'),
(10, 21, 28, 2000, 'unpaid'),
(11, 21, 28, 3000, 'unpaid'),
(12, 80, 27, 2000, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `estatus` int(1) NOT NULL,
  `loginid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`id`, `name`, `address`, `email`, `phone`, `state`, `district`, `dob`, `gender`, `estatus`, `loginid`) VALUES
(10, 'Anupama', 'Anupamalss', 'anupama@gmail.com', '9787654323', '1', '1', '1999-05-11', 'female', 1, 21),
(14, 'Sheeja', 'puthuveeden parambil', 'sheeja@gmail.com', '9786564334', '1', '1', '1994-05-07', 'female', 1, 31),
(16, 'Manika', 'Manika house', 'manika@gmail.com', '9876545678', '1', '1', '1996-07-09', 'female', 1, 64),
(17, 'Alfiya', 'alfiy house', 'alfiya@gmail.com', '9646722356', '1', '1', '1999-06-08', 'female', 1, 80),
(18, 'Neha', 'neha\'s house', 'nehaalex92@gmail.com', '9867456788', '1', '1', '2001-12-29', 'female', 1, 86);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `s_id` int(5) NOT NULL,
  `sname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`s_id`, `sname`) VALUES
(1, 'kerala'),
(2, 'tamilnadu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigncase`
--
ALTER TABLE `assigncase`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `assigncounsel`
--
ALTER TABLE `assigncounsel`
  ADD PRIMARY KEY (`acid`),
  ADD KEY `bookid` (`bookid`),
  ADD KEY `counsellorid` (`counsellorid`);

--
-- Indexes for table `awarenessprograms`
--
ALTER TABLE `awarenessprograms`
  ADD PRIMARY KEY (`programid`);

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `bookdetails`
--
ALTER TABLE `bookdetails`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `logid` (`logid`);

--
-- Indexes for table `counselbackup`
--
ALTER TABLE `counselbackup`
  ADD PRIMARY KEY (`cb_id`);

--
-- Indexes for table `counsellors`
--
ALTER TABLE `counsellors`
  ADD PRIMARY KEY (`counsellorid`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `crimecategory`
--
ALTER TABLE `crimecategory`
  ADD PRIMARY KEY (`crimeid`);

--
-- Indexes for table `crimedetails`
--
ALTER TABLE `crimedetails`
  ADD PRIMARY KEY (`detailid`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`lawyerid`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `lawyerspecialization`
--
ALTER TABLE `lawyerspecialization`
  ADD PRIMARY KEY (`lawyerspeid`);

--
-- Indexes for table `leave_cc`
--
ALTER TABLE `leave_cc`
  ADD PRIMARY KEY (`leaveid`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`rightid`);

--
-- Indexes for table `specification_tbl`
--
ALTER TABLE `specification_tbl`
  ADD PRIMARY KEY (`spec_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `tbl_payment2`
--
ALTER TABLE `tbl_payment2`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigncase`
--
ALTER TABLE `assigncase`
  MODIFY `aid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `assigncounsel`
--
ALTER TABLE `assigncounsel`
  MODIFY `acid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `awarenessprograms`
--
ALTER TABLE `awarenessprograms`
  MODIFY `programid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `b_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bookdetails`
--
ALTER TABLE `bookdetails`
  MODIFY `bookid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `counselbackup`
--
ALTER TABLE `counselbackup`
  MODIFY `cb_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `counsellors`
--
ALTER TABLE `counsellors`
  MODIFY `counsellorid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `crimecategory`
--
ALTER TABLE `crimecategory`
  MODIFY `crimeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `crimedetails`
--
ALTER TABLE `crimedetails`
  MODIFY `detailid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `lawyerid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lawyerspecialization`
--
ALTER TABLE `lawyerspecialization`
  MODIFY `lawyerspeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave_cc`
--
ALTER TABLE `leave_cc`
  MODIFY `leaveid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rights`
--
ALTER TABLE `rights`
  MODIFY `rightid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `specification_tbl`
--
ALTER TABLE `specification_tbl`
  MODIFY `spec_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `d_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `loginid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `paymentid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_payment2`
--
ALTER TABLE `tbl_payment2`
  MODIFY `payid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `s_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigncounsel`
--
ALTER TABLE `assigncounsel`
  ADD CONSTRAINT `assigncounsel_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `bookdetails` (`bookid`),
  ADD CONSTRAINT `assigncounsel_ibfk_2` FOREIGN KEY (`counsellorid`) REFERENCES `counsellors` (`counsellorid`);

--
-- Constraints for table `bookdetails`
--
ALTER TABLE `bookdetails`
  ADD CONSTRAINT `bookdetails_ibfk_1` FOREIGN KEY (`logid`) REFERENCES `tbl_login` (`loginid`);

--
-- Constraints for table `counsellors`
--
ALTER TABLE `counsellors`
  ADD CONSTRAINT `counsellors_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `tbl_login` (`loginid`);

--
-- Constraints for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD CONSTRAINT `lawyers_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `tbl_login` (`loginid`);

--
-- Constraints for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD CONSTRAINT `tbl_district_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `tbl_state` (`s_id`);

--
-- Constraints for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD CONSTRAINT `tbl_reg_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `tbl_login` (`loginid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

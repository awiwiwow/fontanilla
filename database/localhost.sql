-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 08:00 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fontanilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `doc` varchar(100) NOT NULL,
  `info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sched_date` varchar(50) NOT NULL,
  `sched_time` varchar(50) NOT NULL,
  `procedure_id` int(11) DEFAULT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dr_name` varchar(50) DEFAULT NULL,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinicadmin`
--

CREATE TABLE `clinicadmin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinicadmin`
--

INSERT INTO `clinicadmin` (`admin_id`, `name`, `contact`, `branch`, `username`, `password`, `type`) VALUES
(1, 'Anne Halili', '', '', 'superadmin', '186cf774c97b60a1c106ef718d10970a6a06e06bef89553d9ae65d938a886eae', 'superadmin'),
(2, 'Admin Dasma Bayan', '', 'Dasma-Bayan', 'adminbayan', '8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414', 'admin'),
(3, 'Admin Binakayan', '', 'Binakayan', 'adminbinakayan', '8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414', 'admin'),
(4, 'Admin Langkaan', '', 'Langkaan', 'adminlangkaan', '8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dentists`
--

CREATE TABLE `dentists` (
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dentists`
--

INSERT INTO `dentists` (`dr_id`, `dr_name`) VALUES
(1, 'Rishelle Anne Fontanilla-Halili'),
(2, 'Patrisha Kamille B. Aguilar'),
(3, 'Janette Mendez'),
(4, ' Rochelle Delos Reyes');

-- --------------------------------------------------------

--
-- Table structure for table `img_home`
--

CREATE TABLE `img_home` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_home`
--

INSERT INTO `img_home` (`id`, `image`) VALUES
(1, 'D.png'),
(3, 'D2.png'),
(4, 'D3.png'),
(5, 'D4.png'),
(6, 'D5.png'),
(7, 'D6.png'),
(8, 'slide1.png'),
(9, 'slide2.png'),
(10, 'slide3.png');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cp` varchar(25) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `token` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL,
  `ftoken` varchar(255) DEFAULT NULL,
  `ftoken_expire` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

CREATE TABLE `procedures` (
  `procedure_id` int(11) NOT NULL,
  `procedure_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procedures`
--

INSERT INTO `procedures` (`procedure_id`, `procedure_name`, `description`) VALUES
(1, 'Consultation', ''),
(2, 'Extraction', ''),
(3, 'Oral Prophylaxis', ''),
(4, 'Restoration', ''),
(5, 'Braces', ''),
(6, 'Teeth Whitening', ''),
(7, 'Veneers', '');

-- --------------------------------------------------------

--
-- Table structure for table `update_char`
--

CREATE TABLE `update_char` (
  `id` int(11) NOT NULL,
  `cont_num` varchar(11) NOT NULL,
  `header` varchar(35) NOT NULL,
  `slider_title` varchar(35) NOT NULL,
  `slider_firstcont` varchar(45) NOT NULL,
  `slider_secondcont` varchar(45) NOT NULL,
  `slider2_title` varchar(35) NOT NULL,
  `slider2_firstcont` varchar(45) NOT NULL,
  `slider2_secondcont` varchar(45) NOT NULL,
  `slider3_title` varchar(35) NOT NULL,
  `slider3_cont` varchar(45) NOT NULL,
  `infobox` varchar(20) NOT NULL,
  `infobox_cont` varchar(215) NOT NULL,
  `infobox2` varchar(20) NOT NULL,
  `infobox2_cont` varchar(215) NOT NULL,
  `infobox3` varchar(20) NOT NULL,
  `infobox3_cont` varchar(215) NOT NULL,
  `serve_title` varchar(30) NOT NULL,
  `serve_cont` varchar(250) NOT NULL,
  `serve2_title` varchar(30) NOT NULL,
  `serve2_cont` varchar(250) NOT NULL,
  `serve3_title` varchar(30) NOT NULL,
  `serve3_cont` varchar(250) NOT NULL,
  `serve4_title` varchar(30) NOT NULL,
  `serve4_cont` varchar(250) NOT NULL,
  `serve5_title` varchar(30) NOT NULL,
  `serve5_cont` varchar(250) NOT NULL,
  `serve6_title` varchar(30) NOT NULL,
  `serve6_cont` varchar(250) NOT NULL,
  `doc_name` varchar(40) NOT NULL,
  `doc_title` varchar(40) NOT NULL,
  `doc2_name` varchar(40) NOT NULL,
  `doc2_title` varchar(40) NOT NULL,
  `doc3_name` varchar(40) NOT NULL,
  `doc3_title` varchar(40) NOT NULL,
  `doc4_name` varchar(40) NOT NULL,
  `doc4_title` varchar(40) NOT NULL,
  `doc5_name` varchar(40) NOT NULL,
  `doc5_title` varchar(40) NOT NULL,
  `doc6_name` varchar(40) NOT NULL,
  `doc6_title` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_char`
--

INSERT INTO `update_char` (`id`, `cont_num`, `header`, `slider_title`, `slider_firstcont`, `slider_secondcont`, `slider2_title`, `slider2_firstcont`, `slider2_secondcont`, `slider3_title`, `slider3_cont`, `infobox`, `infobox_cont`, `infobox2`, `infobox2_cont`, `infobox3`, `infobox3_cont`, `serve_title`, `serve_cont`, `serve2_title`, `serve2_cont`, `serve3_title`, `serve3_cont`, `serve4_title`, `serve4_cont`, `serve5_title`, `serve5_cont`, `serve6_title`, `serve6_cont`, `doc_name`, `doc_title`, `doc2_name`, `doc2_title`, `doc3_name`, `doc3_title`, `doc4_name`, `doc4_title`, `doc5_name`, `doc5_title`, `doc6_name`, `doc6_title`) VALUES
(1, '09228022712', ' \r\nMake an Appointment\r\n', ' \r\n \r\nBecome a New Member\r\n\r\n\r\n\r\n\r\n', 'Create an account', 'and start an appointment online now\r\n', 'Services', ' \r\n \r\nView our services\r\n\r\n\r\n\r\n\r\n\r\n', 'and pick what suits your need', 'Smile Gallery', 'Look at our patients reviews\r\n', 'Get Answers', 'Our patient-first approach means you will get your questions answered, fully understand your options, and be in complete control of your treatment plan. We donâ€™t do anything unless you give us the thumbs up.', 'Overcome Anxiety', 'Everyone gets apprehensive about visiting the dentist, but our convenient options and in-office comforts will make you feel relaxed from the moment you contact our office.', 'Build Trust', 'Our approachable team endeavors to spend time getting to know your wants and needs. We do this in order to build a sincere rapport that leads to a lasting, trusting relationship.', 'Orthodontics', 'More than just a pretty smile: Orthodontics can help you keep your mouth healthy. Orthodontic treatments like braces help move teeth that are crooked or that do not fit together right.', 'Cosmetic Dentistry', 'If you think that your smile lacks the kind of brightness and quality that you really want, you have probably come across the field of cosmetic dentistry in your search for perfection.', 'Basic Dental Care', 'Basic dental care involves brushing and flossing your teeth regularly, seeing your dentist and/or dental hygienist for regular checkups and cleanings, and eating a mouth-healthy diet.', 'Oral Surgery', ' \r\n            It is the specialty of dentistry which includes the diagnosis, surgical and adjunctive treatment of diseases, injuries and defects.\r\n\r\n', 'Teeth Whitening', 'A white bright smile can be a confidence booster and a great way to get noticed. Depending on our everyday choices, we may not have the smile we always wanted.', 'Prosthodontics', ' \r\n           the branch of dentistry concerned with the design, manufacture, and fitting of artificial replacements for teeth and other parts of the mouth.\r\n\r\n', 'Dr. Rishelle Anne Fontanilla-Halili', 'COSMETIC & GENERAL DENTIST', 'Dr. Rishelle Anne Fontanilla-Hali\r\n\r\n', 'COSMETIC & GENERAL DENTIST', 'Dr. Patrisha Kamille B. Aguilar', 'COSMETIC & GENERAL DENTIST', 'Dr. Patrisha Kamille B. Aguilar', 'COSMETIC & GENERAL DENTIST', 'Dr. Rochelle De Los Reyes', 'COSMETIC & GENERAL DENTIST', 'Dr. Janette Mendez', 'COSMETIC & GENERAL DENTIST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `clinicadmin`
--
ALTER TABLE `clinicadmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `dentists`
--
ALTER TABLE `dentists`
  ADD PRIMARY KEY (`dr_id`);

--
-- Indexes for table `img_home`
--
ALTER TABLE `img_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`procedure_id`);

--
-- Indexes for table `update_char`
--
ALTER TABLE `update_char`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `clinicadmin`
--
ALTER TABLE `clinicadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dentists`
--
ALTER TABLE `dentists`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `img_home`
--
ALTER TABLE `img_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `procedures`
--
ALTER TABLE `procedures`
  MODIFY `procedure_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `update_char`
--
ALTER TABLE `update_char`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

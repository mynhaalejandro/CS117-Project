-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 08:05 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_assessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `like_dislike` varchar(10) NOT NULL,
  `msg` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `like_dislike`, `msg`) VALUES
(1, 'like', 'Nice Design. Very User-Friendly.'),
(2, 'like', 'Amazing Awesome Fab Super Fag Nag-gorg LEGIT'),
(3, 'like', 'Amazing Design'),
(4, 'like', 'Wow. It is very less-time consuming.');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parent_id` int(11) NOT NULL,
  `parents_guardian` varchar(100) NOT NULL,
  `cp_number` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parent_id`, `parents_guardian`, `cp_number`, `occupation`) VALUES
(1, 'MR & MRS. ELIZER ALEJANDRO', '09999999999', 'DRIVER/TEACHER'),
(2, 'MR & MRS. JUNG GEREZ', '09999999977', 'FARMER/ACCOUNTANT'),
(3, 'MR & MRS. JUNG GEREZ', '09999999998', 'FARMER/ACCOUNTANT'),
(4, 'MR & MRS. SPO4 DE LEON', '09999999999', 'POLICE OFFICER/HOUSEWIFE'),
(5, 'MR & MRS. NED STARK', '09999999999', 'DRIVER/TEACHER'),
(6, 'MR & MRS. ELIZER ALEJANDRO', '09999999999', 'DRIVER/TEACHER'),
(7, 'MR & MRS. NED STARK', '09999999977', 'FARMER/ACCOUNTANT'),
(8, 'MR & MRS. TYWIN MEDINA', '09999999990', 'ACTOR/HOUSEWIFE'),
(9, 'MR & MRS. TYRION TAGALA', '09999999998', 'ACTOR/TEACHER'),
(10, 'MR & MRS. DANTE DELA CRUZ', '09999999999', 'BUSINESSMAN/HOUSEWIFE'),
(11, 'MR & MRS. WALTER OBREIN', '09999999977', 'ACTOR/ACTRESS');

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `process_id` int(11) NOT NULL,
  `e_credentials` varchar(100) NOT NULL,
  `grade_level` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `sch_last_attended` varchar(50) NOT NULL,
  `sch_year` varchar(20) NOT NULL,
  `sch_address` varchar(50) NOT NULL,
  `stud_type` varchar(20) NOT NULL,
  `transferred_from` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`process_id`, `e_credentials`, `grade_level`, `sem`, `sch_last_attended`, `sch_year`, `sch_address`, `stud_type`, `transferred_from`) VALUES
(1, 'FORM 138', '11', 'FIRST', 'SINAIT NATIONAL HIGH SCHOOL', '2016-2017', 'RICUDO, SINAIT, ILOCOS SUR', 'OLD', 'NONE'),
(2, 'FORM 138', '11', 'FIRST', 'VINTAR NATIONAL HIGH SCHOOL', '2016-2017', 'VINTAR ILOCOS NORTE', 'RETURNING', 'VINTAR NATIONAL HIGH SCHOOL'),
(3, 'FORM 138', '11', 'FIRST', 'SINAIT NATIONAL HIGH SCHOOL', '2016-2018', 'RICUDO, SINAIT, ILOCOS SUR', 'OLD', 'NONE'),
(4, 'FORM 138', '11', 'FIRST', 'BATAC NATIONAL HIGH SCHOOL', '2016-2017', 'BATAC, ILOCOS NORTE', 'NEW', 'BATAC NATIONAL HIGH SCHOOL'),
(5, 'FORM 138', '11', 'FIRST', 'SINAIT NATIONAL HIGH SCHOOL', '2016-2017', 'RICUDO, SINAIT, ILOCOS SUR', 'OLD', 'NONE'),
(6, 'FORM 138', '11', 'FIRST', 'SOLSONA NATIONAL HIGH SCHOOL', '2016-2017', 'SOLSONA, ILOCOS NORTE', 'NEW', 'SOLSONA NATIONAL HIGH SCHOOL'),
(7, 'FORM 138', '11', 'FIRST', 'SINAIT NATIONAL HIGH SCHOOL', '2016-2017', 'RICUDO, SINAIT, ILOCOS SUR', 'OLD', 'NONE'),
(8, 'FORM 138', '11', 'FIRST', 'SINAIT NATIONAL HIGH SCHOOL', '2016-2017', 'RICUDO, SINAIT, ILOCOS SUR', 'OLD', 'NONE'),
(9, 'FORM 138', '11', 'FIRST', 'SINAIT NATIONAL HIGH SCHOOL', '2016-2017', 'RICUDO, SINAIT, ILOCOS SUR', 'OLD', 'NONE'),
(10, 'FORM 138', '11', 'FIRST', 'SINAIT NATIONAL HIGH SCHOOL', '2016-2017', 'RICUDO, SINAIT, ILOCOS SUR', 'OLD', 'NONE'),
(11, 'FORM 138', '11', 'FIRST', 'BATAC NATIONAL HIGH SCHOOL', '2016-2017', 'NALUPTA, BATAC, ILOCOS NORTE', 'NEW', 'BATAC NATIONAL HIGH SCHOOL');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `signup_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `uname`, `pword`) VALUES
(1, 'mina', 'mina1'),
(2, 'cris', 'cris1'),
(3, 'chestergerez', 'ches'),
(4, 'ayah', 'ayah2'),
(5, 'admin', 'admin'),
(6, 'arya', 'arya'),
(7, 'myles', 'myles'),
(8, 'sansa', 'sansa1'),
(9, 'iyan', 'iyan1'),
(10, 'harley', 'harley1'),
(11, 'shaine', 'shaine1'),
(12, 'kevinaganus', 'misterpatience');

-- --------------------------------------------------------

--
-- Table structure for table `strands`
--

CREATE TABLE `strands` (
  `strand_id` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strands`
--

INSERT INTO `strands` (`strand_id`, `sname`) VALUES
(1, 'SCIENCE, TECHNOLOGY, ENGINEERING AND MATHEMATICS'),
(2, 'AGRICULTURAL CROPS PRODUCTION'),
(3, 'HUMANITIES AND SOCIAL SCIENCES'),
(4, 'INFORMATION AND COMMUNICATIONS TECHNOLOGY'),
(5, 'GENERAL ACADEMIC STRAND'),
(6, 'HUMANITIES AND SOCIAL SCIENCES'),
(7, 'HOME ECONOMICS'),
(8, 'GENERAL ACADEMIC STRAND'),
(9, 'AGRICULTURAL CROPS PRODUCTION'),
(10, 'HOME ECONOMICS'),
(11, 'INFORMATION AND COMMUNICATIONS TECHNOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `no` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `lrn` varchar(12) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bday` varchar(20) NOT NULL,
  `bplace` varchar(50) NOT NULL,
  `process_fk` int(11) NOT NULL,
  `parent_fk` int(11) NOT NULL,
  `track_fk` int(11) NOT NULL,
  `strand_fk` int(11) NOT NULL,
  `signup_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`no`, `fname`, `age`, `date`, `address`, `lrn`, `sex`, `email`, `bday`, `bplace`, `process_fk`, `parent_fk`, `track_fk`, `strand_fk`, `signup_fk`) VALUES
(10, 'CZARINA SHAINE GUERRERO DELA CRUZ', 18, '2017-12-19', '18 SAN NICOLAS ILOCOS NORTE', '400003121221', 'FEMALE', 'czarina.delacruz@gmail.com', '2017-12-06', 'BATAC, ILOCOS NORTE', 10, 10, 10, 10, 11),
(5, 'ARYA TULLY STARK', 18, '2017-12-19', 'STA. CRUZ, SINAIT, ILOCOS SUR', '400003390000', 'FEMALE', 'arya.s@gmail.com', '2017-12-01', 'BATAC, ILOCOS NORTE', 5, 5, 5, 5, 6),
(3, 'CHESTER BTS GEREZ', 18, '2017-12-19', '21 VINTAR ILOCS NORTE', '400003391221', 'MALE', 'ches.gerez@gmail.com', '2017-12-13', 'BATAC, ILOCOS NORTE', 3, 3, 3, 3, 3),
(9, 'HARLEY TOLENTINO TAGALA', 18, '2017-12-19', 'BARESBES DINGRAS ILOCOS NORTE', '400003391243', 'MALE', 'harley.tagala@gmail.com', '2017-12-09', 'BATAC, ILOCOS NORTE', 9, 9, 9, 9, 10),
(1, 'LIEZHEEL MYNHA YAGO ALEJANDRO', 18, '2017-12-19', 'STA. CRUZ, SINAIT, ILOCOS SUR', '400003391345', 'FEMALE', 'liezheel.alejandro@gmail.com', '2017-12-01', 'BATAC, ILOCOS NORTE', 1, 1, 1, 1, 1),
(2, 'CRIS TUNAC AGTANG', 19, '2017-12-19', '18 VINTAR ILOCOS NORTE', '400003391346', 'MALE', 'cris.a@gmail.com', '2017-12-01', 'BATAC, ILOCOS NORTE', 2, 2, 2, 2, 2),
(4, 'AYAH ECHANIS DE LEON', 18, '2017-12-19', 'NALUPTA, CITY OF BATAC', '400003391349', 'FEMALE', 'ayah.d@gmail.com', '2017-12-06', 'BATAC, ILOCOS NORTE', 4, 4, 4, 4, 4),
(11, 'MARC KEVIN  AGANUS', 18, '2017-12-19', 'CAUNAYAN CITY OF BATAC', '400003392324', 'MALE', 'kevin.aganus@gmail.com', '2017-12-01', 'BATAC, ILOCOS NORTE', 11, 11, 11, 11, 12),
(7, 'SANSA TULLY STARK', 18, '2017-12-19', 'STA. CRUZ, SINAIT, ILOCOS SUR', '400003396666', 'FEMALE', 'sstark@gmail.com', '2017-12-13', 'BATAC, ILOCOS NORTE', 7, 7, 7, 7, 8),
(8, 'MARK IAN AGUSTIN MEDINA', 18, '2017-12-19', '19 SOLSONA ILOCOS NORTE', '400003397887', 'MALE', 'iyan.medina@gmail.com', '2017-12-14', 'BATAC, ILOCOS NORTE', 8, 8, 8, 8, 9),
(6, 'MYLES YAGO ALEJANDRO', 18, '2017-12-19', 'STA. CRUZ, SINAIT, ILOCOS SUR', '400003399999', 'FEMALE', 'm.alejandro@gmail.com', '2017-12-07', 'BATAC, ILOCOS NORTE', 6, 6, 6, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `track_id` int(11) NOT NULL,
  `tname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`track_id`, `tname`) VALUES
(1, 'ACADEMIC'),
(2, 'TECHNICAL-VOCATIONAL-LIVELIHOOD'),
(3, 'ACADEMIC'),
(4, 'TECHNICAL-VOCATIONAL-LIVELIHOOD'),
(5, 'ACADEMIC'),
(6, 'ACADEMIC'),
(7, 'TECHNICAL-VOCATIONAL-LIVELIHOOD'),
(8, 'ACADEMIC'),
(9, 'TECHNICAL-VOCATIONAL-LIVELIHOOD'),
(10, 'TECHNICAL-VOCATIONAL-LIVELIHOOD'),
(11, 'TECHNICAL-VOCATIONAL-LIVELIHOOD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`process_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`signup_id`);

--
-- Indexes for table `strands`
--
ALTER TABLE `strands`
  ADD PRIMARY KEY (`strand_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`lrn`),
  ADD KEY `no` (`no`),
  ADD KEY `process_fk` (`process_fk`),
  ADD KEY `parent_fk` (`parent_fk`),
  ADD KEY `track_fk` (`track_fk`),
  ADD KEY `strand_fk` (`strand_fk`),
  ADD KEY `signup_fk` (`signup_fk`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`track_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `process_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `signup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `strands`
--
ALTER TABLE `strands`
  MODIFY `strand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`process_fk`) REFERENCES `process` (`process_id`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`parent_fk`) REFERENCES `parents` (`parent_id`),
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`strand_fk`) REFERENCES `strands` (`strand_id`),
  ADD CONSTRAINT `students_ibfk_4` FOREIGN KEY (`signup_fk`) REFERENCES `signup` (`signup_id`),
  ADD CONSTRAINT `students_ibfk_5` FOREIGN KEY (`track_fk`) REFERENCES `tracks` (`track_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

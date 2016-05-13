-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2015 at 11:16 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bms`
--
CREATE DATABASE IF NOT EXISTS `bms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bms`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `elast` varchar(25) NOT NULL,
  `cpassword` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `ename`, `password`, `elast`, `cpassword`, `email`, `mobile`) VALUES
(28, 'ram', 'k', '', 'k', '', ''),
(29, 'nam', 'k', '', 'k', '', ''),
(30, 'Bhavya', 'sample', 'Deep', 'sample', 'bhavyadeep@gmail.com', '9899075383'),
(31, 'naman', 'jam', '', 'jam', '', ''),
(32, 'bhavya', 'gam', '', 'gam', '', ''),
(33, 'bhavya', 'iop', '', 'iop', '', ''),
(34, 'bhavya', 'as', '', 'as', '', ''),
(35, 'NaM', 'fg', '', 'fg', '', ''),
(36, 'admin', 'admin', '', 'admin', '', ''),
(37, 'naman33', 'ham', '', 'ham', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mutaion`
--

CREATE TABLE IF NOT EXISTS `mutaion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `m1` varchar(100) NOT NULL,
  `s1` varchar(100) NOT NULL,
  `s2` varchar(100) NOT NULL,
  `s3` varchar(100) NOT NULL,
  `s4` varchar(100) NOT NULL,
  `s5` varchar(100) NOT NULL,
  `s6` varchar(100) NOT NULL,
  `s7` varchar(100) NOT NULL,
  `s8` varchar(100) NOT NULL,
  `s9` varchar(100) NOT NULL,
  `s10` varchar(100) NOT NULL,
  `s11` varchar(100) NOT NULL,
  `s12` varchar(100) NOT NULL,
  `s13` varchar(100) NOT NULL,
  `s14` varchar(100) NOT NULL,
  `s15` varchar(100) NOT NULL,
  `s16` varchar(100) NOT NULL,
  `s17` varchar(100) NOT NULL,
  `s18` varchar(100) NOT NULL,
  `s19` varchar(100) NOT NULL,
  `s20` varchar(100) NOT NULL,
  `s21` varchar(100) NOT NULL,
  `s22` varchar(100) NOT NULL,
  `s23` varchar(100) NOT NULL,
  `s24` varchar(100) NOT NULL,
  `s25` varchar(100) NOT NULL,
  `s26` varchar(100) NOT NULL,
  `s27` varchar(100) NOT NULL,
  `s28` varchar(100) NOT NULL,
  `s29` varchar(100) NOT NULL,
  `s30` varchar(100) NOT NULL,
  `s31` varchar(200) NOT NULL,
  `s32` varchar(200) NOT NULL,
  `s33` varchar(200) NOT NULL,
  `s34` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `mutaion`
--

INSERT INTO `mutaion` (`ID`, `m1`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`, `s21`, `s22`, `s23`, `s24`, `s25`, `s26`, `s27`, `s28`, `s29`, `s30`, `s31`, `s32`, `s33`, `s34`) VALUES
(1, 'c.1415C>T', '66-70 yrs', 'Progressive ', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Vermian atrophy', 'NA', 'NA', 'NA'),
(2, 'c.1438C>T', '11-15 yrs', 'Wide based gait', 'Worsening', 'mild', 'NA', 'Horizontal jerk on lateral gaze, rotatory on upward gaze', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Downgoing plantars with ankle clonus bilaterally', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Diffuse cerebellar hypoplasia, brainstem normal', 'NA', 'NA', 'NA'),
(3, 'c.2864_2868del in exon 16', '6-10 yrs', 'NA', 'NA', 'NA', 'NA', 'Absent', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Increased ', 'NA', 'NA', 'Extensor plantar response', 'Increased', 'NA', 'NA', 'NA', 'NA', 'Absent', 'Absent', 'Absent', 'Absent', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(4, 'c.2864_2868del in exon 16', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Increased', 'NA', 'NA', 'NA', 'Clasp knife spasticity', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(5, 'c.1881C>A', '21-25 yrs', 'Unsteady, walks independantly', 'NA', 'NA', 'NA', 'NA', 'delayed saccadic initiation, hypometric', 'NA', 'Convergent squint', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Flexion', 'NA', 'NA', 'NA', 'NA', 'Normal', 'NA', 'NA', 'NA', 'NA', 'global cognitive imapirment', 'NA', 'motor delay', 'NA', 'NA', 'cerebellar atrophy', 'NA', 'NA', 'NA'),
(6, 'c.1881C>A', '16-20 yrs', 'Unsteady, walks independantly', 'NA', 'NA', 'NA', 'First degree in horizontal  plane', 'delayed saccadic initiation', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Normal', 'NA', 'NA', 'NA', 'NA', 'global cognitive imapirment', 'NA', 'NA', 'NA', 'NA', 'progressive cerebellar atrophy', 'NA', 'NA', 'NA'),
(7, 'c.1881C>A', '6-10 yrs', 'Unsteady, walks with assistance', 'NA', 'NA', 'NA', 'NA', 'delayed saccadic initiation', 'NA', 'Convergent squint', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Downgoing plantars', 'NA', 'NA', 'NA', 'NA', 'Normal', 'NA', 'NA', 'NA', 'NA', 'global cognitive imapirment', 'NA', 'NA', 'NA', 'NA', 'mild hypoplasia of the posterior corpus callosum', 'NA', 'NA', 'NA'),
(8, 'Val408Ala', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'EMG: myokymia', 'NA', 'NA', 'Exercise- induced bout of unsteadiness', 'NA', 'NA', 'NA', 'NA'),
(9, 'Arg239Ser', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'EMG: myokymia ', 'NA', 'NA', 'Exercise- induced bout of unsteadiness', 'NA', 'NA', 'NA', 'NA'),
(10, 'Val174Phe', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'EMG: myokymia ', 'NA', 'NA', 'Exercise- induced bout of unsteadiness', 'NA', 'NA', 'NA', 'NA'),
(11, 'Phe249Ile', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'EMG: myokymia ', 'NA', 'NA', 'Exercise- induced bout of unsteadiness', 'NA', 'NA', 'NA', 'NA'),
(12, 'F414S', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Distal weakness', 'NA', 'NA', 'They have discintive abnormalities in nerve excitability , consistent with expression of this channe', 'NA', 'NA', 'NA', 'NA', 'NA', 'Axonal Hyperexcitability; consistent abnormality in nerve excitability  that reflected channel dysfu', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(13, 'F414S', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Distal weakness', 'NA', 'NA', 'They have discintive abnormalities in nerve excitability , consistent with expression of this channe', 'NA', 'NA', 'NA', 'NA', 'NA', 'Axonal Hyperexcitability; consistent abnormality in nerve excitability  that reflected channel dysfu', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(14, 'I407M', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Distal weakness', 'NA', 'NA', 'They have discintive abnormalities in nerve excitability , consistent with expression of this channe', 'NA', 'NA', 'NA', 'NA', 'NA', 'Axonal Hyperexcitability; consistent abnormality in nerve excitability  that reflected channel dysfu', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(15, 'R167M', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Distal weakness', 'NA', 'NA', 'They have discintive abnormalities in nerve excitability , consistent with expression of this channe', 'NA', 'NA', 'NA', 'NA', 'NA', 'Axonal Hyperexcitability; consistent abnormality in nerve excitability  that reflected channel dysfu', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(16, 'C185W', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Distal weakness', 'NA', 'NA', 'They have discintive abnormalities in nerve excitability , consistent with expression of this channe', 'NA', 'NA', 'NA', 'NA', 'NA', 'Axonal Hyperexcitability; consistent abnormality in nerve excitability  that reflected channel dysfu', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(17, 'T226R', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Distal weakness', 'NA', 'NA', 'They have discintive abnormalities in nerve excitability , consistent with expression of this channe', 'NA', 'NA', 'NA', 'NA', 'NA', 'Axonal Hyperexcitability; consistent abnormality in nerve excitability  that reflected channel dysfu', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(18, 'A242P', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Distal weakness', 'NA', 'NA', 'They have discintive abnormalities in nerve excitability , consistent with expression of this channe', 'NA', 'NA', 'NA', 'NA', 'NA', 'Axonal Hyperexcitability; consistent abnormality in nerve excitability  that reflected channel dysfu', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(19, 'F184C', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Distal weakness', 'NA', 'NA', 'They have discintive abnormalities in nerve excitability , consistent with expression of this channe', 'NA', 'NA', 'NA', 'NA', 'NA', 'Axonal Hyperexcitability; consistent abnormality in nerve excitability  that reflected channel dysfu', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(20, 'G311S', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Distal weakness', 'NA', 'NA', 'They have discintive abnormalities in nerve excitability , consistent with expression of this channe', 'NA', 'NA', 'NA', 'NA', 'NA', 'Axonal Hyperexcitability; consistent abnormality in nerve excitability  that reflected channel dysfu', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(21, 'c.724G>C; p.Ala242Pro ', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'no difficulty with tandem walking', 'muscle samppling showed continous myokymia discharges', 'NA', 'no sensory deficits ', 'NA', 'NA', 'NA', 'NA', 'NA', 'the presence of small afterpotentials on median and ulnar nerve stimulation', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(22, 'del exon ITPR1 total; exon 1 SUMF1', '66-70 yrs', 'Moderate', 'NO', 'Present ', 'NO', 'NA', 'NO', 'NO', 'NO', 'NA', 'NA', 'NA', 'Normal', 'NA', 'Normal', 'NO', 'NO', 'Normal', 'NA', 'NA', 'Normal Vibration sensation', 'NA', 'NA', 'Neck tremors', 'NA', 'NA', 'Normal', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(23, 'del exon ITPR1 total; exon 1 SUMF1', '66-70 yrs', 'Moderate', 'NO', 'Present ', 'NO', 'NA', 'NO', 'NO', 'NO', 'NA', 'NA', 'NA', 'Normal', 'NA', 'Normal', 'NO', 'NO', 'Normal', 'NA', 'NA', 'Normal Vibration sensation', 'NA', 'NA', 'NA', 'NA', 'NA', 'Normal', 'NA', 'NA', 'NA', 'Cerebellar vermis and cerebellar hemisphere atrophy', 'NA', 'NA', 'NA'),
(24, 'del exon ITPR1 total; exon 1 SUMF1', '61-65 yrs', 'Moderate', 'NO', 'Present ', 'NO', 'NA', 'NO', 'NO', 'NO', 'NA', 'NA', 'NA', 'Normal', 'NA', 'Normal', 'NO', 'NO', 'Normal', 'NA', 'NA', 'Normal Vibration sensation', 'NA', 'NA', 'Neck tremors', 'NA', 'NA', 'Normal', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(25, 'del exon ITPR1 total; exon 1 SUMF1', '56-60 yrs', 'Moderate', 'NA', 'NA', 'NO', 'NA', 'NO', 'NO', 'NO', 'NA', 'NA', 'NA', 'Normal', 'NA', 'Normal', 'NO', 'NO', 'Normal', 'NA', 'NA', 'Normal Vibration sensation', 'NA', 'NA', 'Neck tremors', 'NA', 'NA', 'Normal', 'NA', 'NA', 'NA', 'Cerebellar vermis and cerebellar hemisphere atrophy', 'NA', 'NA', 'NA'),
(26, 'del exon ITPR1 total; exon 1 SUMF1', '46-50 yrs', 'Moderate', 'NA', 'Present ', 'NO', 'NA', 'NA', 'NA', 'NO', 'NO', 'NA', 'NA', 'Normal', 'NA', 'Normal', 'NO', 'NO', 'Normal', 'NA', 'NA', 'Normal Vibration sensation', 'NA', 'NA', 'Hand tremors', 'NA', 'NA', 'Normal', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(27, 'del exon ITPR1 total; exon 1 SUMF1', '36-40 yrs', 'Moderate', 'NA', 'Present ', 'NO', 'Absent', 'NA', 'NA', 'NO', 'NA', 'NA', 'NA', 'Normal', 'NA', 'Normal', 'NO', 'NO', 'Normal', 'NO', 'NA', 'Normal Vibration sensation', 'NO', 'NO', 'Neck and Hand tremors', 'NO', 'NA', 'Normal', 'NA', 'NA', 'NA', 'Cerebellar vermis atrophy', 'NA', 'NA', 'NA'),
(28, 'del exon ITPR1 total; exon 1 SUMF1', '41-45 yrs', 'Moderate', 'NO', 'NA', 'NO', 'Absent', 'NA', 'NA', 'NO', 'NA', 'NA', 'NA', 'Patellar TR Increased; Achilles TR decreased', 'NA', 'Normal', 'NO', 'NO', 'Normal', 'NO', 'NA', 'Reduced Vibration sense', 'NO', 'NO', 'Trunk and Upper extremties', 'NO', 'NA', 'Normal', 'NA', 'NA', 'NA', 'Cerebellar vermis and cerebellar hemisphere atrophy', 'NA', 'NA', 'NA'),
(29, 'del exon 1-10 ', 'NA', 'Mild', 'NA', 'Mild', 'NO', 'Horizontal gaze evoked', 'NO', 'NO', 'NO', 'NA', 'NA', 'Absent', 'NA', 'NA', 'NA', 'NO', 'NO', 'Normal', 'NO', 'NA', 'NA', 'NO', 'NO', 'NO', 'NO', 'NO', 'Normal', 'NA', 'NA', 'NA', 'Global Cerebellar Atrophy', 'NA', 'NA', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `patientdata`
--

CREATE TABLE IF NOT EXISTS `patientdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(25) NOT NULL,
  `elast` varchar(25) NOT NULL,
  `emd` varchar(25) DEFAULT NULL,
  `egender` enum('male','female') NOT NULL,
  `emob` bigint(12) unsigned NOT NULL,
  `efx` bigint(12) unsigned DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `edob` date DEFAULT NULL,
  `eh_fname` varchar(30) NOT NULL,
  `e_m` varchar(30) DEFAULT NULL,
  `e_hn` varchar(15) NOT NULL,
  `e_st` varchar(20) NOT NULL,
  `e_loc` varchar(20) NOT NULL,
  `esta` enum('Andaman and Nicobar Islands','Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chandigarh','Chhattisgarh','Dadra and Nagar Haveli','Daman and Diu','Delhi','Goa','Gujarat','Haryana','Himachal Pradesh','Jammu and Kashmir','Jharkhand','Karnataka','Kerala','Lakshadweep','Madhya Pradesh','Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Odisha','Puducherry','Punjab','Rajasthan','Sikkim','Tamil Nadu','Tripura','Uttar Pradesh','Uttarakhand','West Bengal') NOT NULL,
  `ecity` varchar(30) NOT NULL,
  `epin` int(6) NOT NULL,
  `elnd` bigint(20) NOT NULL,
  `eadd1` varchar(100) NOT NULL,
  `opin` int(6) DEFAULT NULL,
  `olnd` bigint(20) NOT NULL,
  `eocc` varchar(30) DEFAULT NULL,
  `ebg` enum('O+','O-','A+','A-','B+','B-','AB') NOT NULL,
  `erem` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `patientdata`
--

INSERT INTO `patientdata` (`id`, `ename`, `elast`, `emd`, `egender`, `emob`, `efx`, `email`, `edob`, `eh_fname`, `e_m`, `e_hn`, `e_st`, `e_loc`, `esta`, `ecity`, `epin`, `elnd`, `eadd1`, `opin`, `olnd`, `eocc`, `ebg`, `erem`) VALUES
(1, 'Naman', 'Malhotra', 'kum', 'male', 8287188123, 82873838, 'naman03malhotra@gmail.com', '0000-00-00', 'pawan malhotra', 'suneeta malhotra', '68', 'jail road', 'janakpuri', 'Delhi', 'delhi', 110058, 0, '', 110078, 0, 'student', 'B+', ' gazab!1...'),
(2, 'prab', 'kaur', 'kvk', 'female', 6578767899, 0, '', '2013-09-18', '', '', '567', '', 'dhd', 'Kerala', 'dh', 123456, 0, '', 0, 0, 'xfj', 'A+', ' ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

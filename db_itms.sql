-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 12:48 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_itms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attend_record`
--

CREATE TABLE `tbl_attend_record` (
  `Attend_ID` int(11) NOT NULL,
  `Attend_Student_ID` varchar(25) DEFAULT NULL,
  `Attend_Office_ID` varchar(25) NOT NULL,
  `Attend_Date` varchar(45) DEFAULT NULL,
  `Attend_Work_Done` varchar(45) DEFAULT NULL,
  `Attend_Certification` varchar(45) DEFAULT 'Pending',
  `Attend_Remarks` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attend_record`
--

INSERT INTO `tbl_attend_record` (`Attend_ID`, `Attend_Student_ID`, `Attend_Office_ID`, `Attend_Date`, `Attend_Work_Done`, `Attend_Certification`, `Attend_Remarks`) VALUES
(40, '93', '11', '2022-11-01', 'Printing Water Bill Adjustment JV', 'Accept', 'Well done'),
(41, '93', '11', '2022-11-02', 'Collection Noninations from RSCC - IWC', 'Accept', ''),
(43, '93', '11', '2022-11-03', 'Entered data into the billing system', 'Accept', 'Well done'),
(44, '97', '12', '2022-11-21', 'Entered data into the billing system', 'Pending', 'Accepted (No Comments)'),
(45, '110', '13', '2022-12-12', 'Entered data into the billing system', 'Accept', 'Well done'),
(46, '110', '13', '2022-12-13', 'Printing Water Bill Adjustment JV', 'Accept', ''),
(47, '110', '13', '2022-12-14', 'Collection Noninations from RSCC - IWC', 'Accept', ''),
(48, '114', '19', '2022-12-15', 'Entered data into the billing system', 'Accept', ''),
(49, '114', '19', '2022-12-16', 'Entered data into the billing system', 'Accept', ''),
(50, '115', '20', '2022-11-28', 'Entered data into the billing system', 'Accept', ''),
(51, '115', '20', '2022-11-29', 'Collection Noninations from RSCC - IWC', 'Accept', ''),
(52, '114', '19', '2022-11-28', 'Edit Edit Computer Msg', 'Accept', 'Well done'),
(53, '120', '19', '2022-11-24', 'Edit Edit Computer Msg', 'Accept', ''),
(54, '120', '19', '2022-11-20', 'Entered data into the billing system', 'Accept', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificate_register`
--

CREATE TABLE `tbl_certificate_register` (
  `Certifi_ID` int(11) NOT NULL,
  `Certifi_Stu_ID` int(11) DEFAULT NULL,
  `Certifi_Office_ID` int(11) DEFAULT NULL,
  `Certifi_Request_Date` date NOT NULL DEFAULT current_timestamp(),
  `Certifi_Request` varchar(25) NOT NULL,
  `Certifi_Medical` varchar(25) NOT NULL,
  `Certifi_Remarks` varchar(50) NOT NULL,
  `Certifi_Prepare_TO` varchar(45) DEFAULT NULL,
  `Certifi_Recommend_Manager` varchar(45) DEFAULT NULL,
  `Certifi_Certify_AGM` varchar(45) DEFAULT NULL,
  `Certifi_Status` varchar(12) DEFAULT 'Pending',
  `Certifi_Approve_Date` date DEFAULT NULL,
  `Certifi_TO_Comment` varchar(45) DEFAULT NULL,
  `Certifi_Certificate` varchar(25) NOT NULL,
  `Certifi_Stu_Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_certificate_register`
--

INSERT INTO `tbl_certificate_register` (`Certifi_ID`, `Certifi_Stu_ID`, `Certifi_Office_ID`, `Certifi_Request_Date`, `Certifi_Request`, `Certifi_Medical`, `Certifi_Remarks`, `Certifi_Prepare_TO`, `Certifi_Recommend_Manager`, `Certifi_Certify_AGM`, `Certifi_Status`, `Certifi_Approve_Date`, `Certifi_TO_Comment`, `Certifi_Certificate`, `Certifi_Stu_Email`) VALUES
(21, 93, 11, '2022-11-15', 'I request my training Cer', '793693030V.pdf', '', NULL, 'Accept', 'Accept', 'Accept', '2022-11-30', '', '', 'kgdulip@gmail.com'),
(22, 110, 13, '2022-12-31', 'I request my training Cer', '802141121V.pdf', '', NULL, 'Accept', 'Accept', 'Accept', '2023-01-01', '', '', 'maithrie@live.com'),
(23, 114, 19, '2022-12-30', 'I request my training Cer', '802141123V.pdf', '', NULL, 'Accept', 'Accept', 'Accept', '2022-12-13', '', '', 'maithrie@live.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discipline`
--

CREATE TABLE `tbl_discipline` (
  `Disci_ID` int(10) NOT NULL,
  `Disci_Office_ID` varchar(25) NOT NULL,
  `Disci_Stu_ID` varchar(45) NOT NULL,
  `Disci_Record_Date` date NOT NULL,
  `Disci_Catagory` varchar(100) NOT NULL,
  `Disci_Descrip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discipline`
--

INSERT INTO `tbl_discipline` (`Disci_ID`, `Disci_Office_ID`, `Disci_Stu_ID`, `Disci_Record_Date`, `Disci_Catagory`, `Disci_Descrip`) VALUES
(32, '11', '93', '2022-11-02', 'Avoiding Superior Instruction', 'The instructions given were not followed.'),
(33, '11', '93', '2022-11-03', 'Early Departure', 'Leaving @ 3 pm from office without permission.'),
(34, '11', '93', '2022-11-20', 'Avoiding Superior Instruction', 'The instructions given were not followed.'),
(35, '13', '110', '2022-12-12', 'Avoiding Superior Instruction', 'The instructions given were not followed.'),
(36, '13', '110', '2022-12-13', 'Early Departure', 'Leave @ 3 pm'),
(37, '19', '114', '2022-12-16', 'Avoiding Superior Instruction', 'The instructions given were not followed.'),
(38, '20', '115', '2022-11-28', 'Avoiding Superior Instruction', 'The instructions given were not followed.'),
(39, '19', '120', '2022-11-25', 'Early Departure', 'Leave @ 3 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discipline_catgo`
--

CREATE TABLE `tbl_discipline_catgo` (
  `Discip_Catgo_ID` int(11) NOT NULL,
  `Discip_Catgo` varchar(45) DEFAULT NULL,
  `Discip_Catgo_Descrip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discipline_catgo`
--

INSERT INTO `tbl_discipline_catgo` (`Discip_Catgo_ID`, `Discip_Catgo`, `Discip_Catgo_Descrip`) VALUES
(1, 'Late Arrival', 'Late Arrival'),
(3, 'Early Departure', 'Early Departure'),
(5, 'Avoiding Superior Instruction', 'Avoiding Superior Instruction');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `District_ID` int(11) NOT NULL,
  `District_Name` varchar(45) DEFAULT NULL,
  `District_Province_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`District_ID`, `District_Name`, `District_Province_ID`) VALUES
(2, 'Ampara', 0),
(3, 'Anuradhapura', 0),
(5, 'Badulla', 0),
(7, 'Bandarawela', 0),
(11, 'Chilaw', 0),
(12, 'Colombo', 0),
(17, 'Galle', 0),
(18, 'Gampaha', 0),
(20, 'Hambantota', 0),
(26, 'Jaffna', 0),
(28, 'Kalmunai', 0),
(29, 'Kalutara', 0),
(30, 'Kandy', 0),
(33, 'Kegalle', 0),
(37, 'Kurunegala', 0),
(38, 'Mannar', 0),
(39, 'Matale', 0),
(40, 'Matara', 0),
(42, 'Moneragala', 0),
(43, 'Moratuwa', 0),
(44, 'Nawalapitiya', 0),
(45, 'Negombo', 0),
(46, 'Nuwara Eliya', 0),
(47, 'Panadura', 0),
(48, 'Peliyagoda', 0),
(49, 'Point Pedro', 0),
(50, 'Puttalam', 0),
(51, 'Ratnapura', 0),
(52, 'Sri Jayawardenapura Kotte', 0),
(53, 'Talawakele', 0),
(54, 'Tangalle', 0),
(55, 'Trincomalee', 0),
(56, 'Valvettithurai', 0),
(57, 'Vavuniya', 0),
(58, 'Wattala', 0),
(59, 'Wattegama', 0),
(60, 'Weligama', 0),
(72, 'Dehiowita', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_homemsg`
--

CREATE TABLE `tbl_homemsg` (
  `homemsg_ID` int(6) NOT NULL,
  `homemsg_name` varchar(25) NOT NULL,
  `homemsg_email` varchar(50) NOT NULL,
  `homemsg_mobile` varchar(10) NOT NULL,
  `homemsg_subject` varchar(50) NOT NULL,
  `homemsg_message` varchar(255) NOT NULL,
  `homemsg_action` varchar(5) NOT NULL DEFAULT 'No',
  `homemsg_remarks` varchar(255) NOT NULL,
  `homemsg_Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_institute_reg`
--

CREATE TABLE `tbl_institute_reg` (
  `Insti_ID` int(5) NOT NULL,
  `Insti_Name` varchar(45) NOT NULL,
  `Insti_Head` varchar(45) DEFAULT NULL,
  `Insti_District` varchar(45) DEFAULT NULL,
  `Insti_Branch` varchar(45) DEFAULT NULL,
  `Insti_Telephone` varchar(45) DEFAULT NULL,
  `Insti_Mobile` varchar(45) DEFAULT NULL,
  `Insti_Fax` varchar(45) DEFAULT NULL,
  `Insti_Email` varchar(50) NOT NULL,
  `Insti_Web` varchar(50) NOT NULL,
  `Insti_Status` varchar(12) NOT NULL DEFAULT 'Pending',
  `Insti_Type` varchar(20) NOT NULL DEFAULT 'Institute',
  `Insti_Request_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_institute_reg`
--

INSERT INTO `tbl_institute_reg` (`Insti_ID`, `Insti_Name`, `Insti_Head`, `Insti_District`, `Insti_Branch`, `Insti_Telephone`, `Insti_Mobile`, `Insti_Fax`, `Insti_Email`, `Insti_Web`, `Insti_Status`, `Insti_Type`, `Insti_Request_Date`) VALUES
(19, 'National Youth Services Council', 'Director', '12', 'Maharagama', '0772968625', '0719099959', '0719099959', 'nysc@gmail.com', 'www.nysc.lk', 'Accept', 'Institute', '2022-11-12'),
(20, 'Vocational Training Authority', 'Director', '12', 'Naragenpita', '0112847726', '0719099969', '0112874456', 'vta@gmail.com', 'vtasl.gov.lk', 'Accept', 'Institute', '2022-11-16'),
(23, 'National Apprentice and Industrial Training A', 'Director', '12', 'Katubedda', '0112847726', '0719099959', '0719099959', 'naita@gmail.com', 'www.nita.lk', 'Accept', 'Institute', '2022-11-16'),
(24, 'University of Kelaniya', 'Chancellor', '18', 'Kelaniya', '0112847726', '0719099969', '0719099969', 'unik@gmail.com', 'www.uk.lk', 'Accept', 'Institute', '2022-11-16'),
(25, 'Association of Accounting Technicians of Sri ', 'Chairman', '12', 'Borella', '0112559669', '0112559669', '0112559669', 'aat@gmail.com', 'www.aatsl.lk', 'Accept', 'Institute', '2022-11-21'),
(27, 'Sri Lanka Institute of Information Technology', 'Director', '12', 'Malambe', '0112847726', '0112559669', '0719099969', 'kgdulip@gmail.com', 'www.sliit.com', 'Accept', 'Institute', '2022-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mdtd_staff`
--

CREATE TABLE `tbl_mdtd_staff` (
  `mdtd_ID` int(11) NOT NULL,
  `mdtd_Reg_ID` int(12) NOT NULL,
  `mdtd_Reg_Name_Surname` varchar(50) NOT NULL,
  `mdtd_Reg_Photo` varchar(25) NOT NULL,
  `mdtd_Reg_Role` varchar(20) NOT NULL,
  `mdtd_Reg_Signature` varchar(25) NOT NULL,
  `mdtd_Reg_Email` varchar(50) NOT NULL,
  `mdtd_Reg_Password` varchar(125) NOT NULL,
  `mdtd_Reg_Is_Active` varchar(12) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mdtd_staff`
--

INSERT INTO `tbl_mdtd_staff` (`mdtd_ID`, `mdtd_Reg_ID`, `mdtd_Reg_Name_Surname`, `mdtd_Reg_Photo`, `mdtd_Reg_Role`, `mdtd_Reg_Signature`, `mdtd_Reg_Email`, `mdtd_Reg_Password`, `mdtd_Reg_Is_Active`) VALUES
(17, 802141122, 'Thilakarathna', '802141122V.JPG', 'Admin', '802141122V.png', 'dulip@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Accept'),
(19, 796893008, 'Maithrie', '796893028V (2).jpg', 'TO', '796893028V.png', 'to@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Accept'),
(20, 502141122, 'Geeganage', '502141122V.JPG', 'Manager', '502141122V.png', 'manager@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Accept'),
(21, 602141122, 'Pannila', '602141122V.JPG', 'AGM', '602141122V.png', 'agm@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Accept'),
(22, 502141100, 'Ambulugala', 'TO_2.jpg', 'TO', 'TO_2.JPG', 'to2@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nwsdb_office`
--

CREATE TABLE `tbl_nwsdb_office` (
  `Sec_ID` int(11) NOT NULL,
  `Sec_Cost_Code_ID` varchar(11) NOT NULL,
  `Sec_Name` varchar(45) NOT NULL,
  `Sec_Head` varchar(45) DEFAULT NULL,
  `Sec_District` varchar(45) DEFAULT NULL,
  `Sec_RSC` varchar(45) DEFAULT NULL,
  `Sec_Telephone` varchar(45) DEFAULT NULL,
  `Sec_Mobile` varchar(45) DEFAULT NULL,
  `Sec_Fax` varchar(45) DEFAULT NULL,
  `Sec_Email` varchar(50) NOT NULL,
  `Sec_Status` varchar(12) NOT NULL DEFAULT 'Pending',
  `Sec_Type` varchar(20) NOT NULL DEFAULT 'Office',
  `Sec_Request_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nwsdb_office`
--

INSERT INTO `tbl_nwsdb_office` (`Sec_ID`, `Sec_Cost_Code_ID`, `Sec_Name`, `Sec_Head`, `Sec_District`, `Sec_RSC`, `Sec_Telephone`, `Sec_Mobile`, `Sec_Fax`, `Sec_Email`, `Sec_Status`, `Sec_Type`, `Sec_Request_Date`) VALUES
(11, '10-12-250', 'Manager Office (Kotte)', 'Manager (Kotte)', '12', 'Western Central', '0112323654', '0719099969', '0714465689', 'office@gmail.com', 'Accept', 'Office', '2022-11-12'),
(12, '10-10-261', 'Deduruoya WSP', 'Project Director (Deduruoya WSP)', '37', 'North Western', '0112847726', '0719099969', '0714465689', 'project@gmail.com', 'Accept', 'Project', '2022-11-13'),
(13, '21-10-654', 'Manager Office (Bandarawela)', 'Manager (Bandarawela)', '5', 'Uva', '0519099969', '0719099969', '0519099969', 'mbandarawela@gmail.com', 'Accept', 'Office', '2022-11-21'),
(14, '25-65-255', 'Area Engineer Office (Matara)', 'Area Engineer (Matara)', '40', 'Southern', '0519099969', '0719099969', '0772968658', 'aematara@gmail.com', 'Accept', 'Office', '2022-11-23'),
(19, '25-65-247', 'Manager Office (Maharagama)', 'Manager (Maharagama)', '12', 'Western Central', '0772968625', '0719099969', '0772968658', 'maithrie1@live.com', 'Accept', 'Office', '2022-11-24'),
(20, '25-56-546', 'Manager Office (Homagama)', 'Manager (Homagama)', '12', 'Central', '0519099969', '0719099969', '0714465689', 'mhomagama@gmail.com', 'Accept', 'Office', '2022-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nwsdb_project`
--

CREATE TABLE `tbl_nwsdb_project` (
  `Project_ID` int(11) NOT NULL,
  `Project_Cost_Code_ID` varchar(11) NOT NULL,
  `Project_Name` varchar(45) NOT NULL,
  `Project_Head` varchar(45) DEFAULT NULL,
  `Project_District` varchar(45) DEFAULT NULL,
  `Project_RSC` varchar(45) DEFAULT NULL,
  `Project_Telephone` varchar(45) DEFAULT NULL,
  `Project_Mobile` varchar(45) DEFAULT NULL,
  `Project_Fax` varchar(45) DEFAULT NULL,
  `Project_Email` varchar(50) NOT NULL,
  `Project_Status` varchar(12) NOT NULL DEFAULT 'Pending',
  `Project_Type` varchar(20) NOT NULL DEFAULT 'Project',
  `Project_Request_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programme_registration`
--

CREATE TABLE `tbl_programme_registration` (
  `Prog_ID` int(11) NOT NULL,
  `Prog_Insti_ID` int(11) NOT NULL,
  `Prog_Subject_Area` int(11) NOT NULL,
  `Prog_Name` varchar(45) DEFAULT NULL,
  `Prog_Discription` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_programme_registration`
--

INSERT INTO `tbl_programme_registration` (`Prog_ID`, `Prog_Insti_ID`, `Prog_Subject_Area`, `Prog_Name`, `Prog_Discription`) VALUES
(10, 0, 1, 'Industrial Training of Engineering Assistant', 'Industrial Training of Engineering Assistant'),
(12, 0, 3, 'Industrial Training of Computer Operator', 'Industrial Training of Computer Operator'),
(13, 0, 2, 'Industrial Training of Management Assistant (', 'Industrial Training of Management Assistant (Accou'),
(14, 0, 1, 'Industrial Training of Quantity Surveyor', 'Industrial Training of Quantity Surveyor'),
(15, 0, 1, 'Industrial Training of Draughtsman', 'Industrial Training of Draughtsman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_province`
--

CREATE TABLE `tbl_province` (
  `Provi_ID` int(11) NOT NULL,
  `Provi_Name` varchar(45) DEFAULT NULL,
  `Provi_Zone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_internship_request`
--

CREATE TABLE `tbl_stu_internship_request` (
  `Stu_Student_ID` int(11) NOT NULL,
  `Stu_Student_NIC` varchar(45) DEFAULT NULL,
  `Stu_Email` varchar(45) DEFAULT NULL,
  `Stu_Instu_ID` int(11) DEFAULT NULL,
  `Stu_Institute_Branch` int(11) NOT NULL,
  `Stu_Institute_ID_No` text NOT NULL,
  `Stu_Student_Full_Name` varchar(45) DEFAULT NULL,
  `Stu_Student_Initial` varchar(45) DEFAULT NULL,
  `Stu_Student_Surname` varchar(45) DEFAULT NULL,
  `Stu_DOB` date DEFAULT NULL,
  `Stu_Gender` varchar(45) DEFAULT NULL,
  `Stu_Permanent_Address` varchar(45) DEFAULT NULL,
  `Stu_District` int(11) DEFAULT NULL,
  `Stu_Mobile` varchar(45) DEFAULT NULL,
  `Stu_Fixed_Tele_No` varchar(10) NOT NULL,
  `Stu_Academic_Year` varchar(4) DEFAULT NULL,
  `Stu_Subject_Stream` int(11) NOT NULL,
  `Stu_Programme_Name` int(11) DEFAULT NULL,
  `Stu_Internship_Period` varchar(3) NOT NULL,
  `Stu_NIC_Copy` varchar(45) DEFAULT NULL,
  `Stu_Institute_Recommendation_Copy` varchar(45) DEFAULT NULL,
  `Stu_Request_Date` date NOT NULL DEFAULT current_timestamp(),
  `Stu_Reques_Acceptance` varchar(45) DEFAULT 'Pending',
  `Stu_Training_Start_Date` date DEFAULT NULL,
  `Stu_Training_End_Date` date NOT NULL,
  `Stu_Assign_Office_ID` int(11) NOT NULL,
  `Stu_Assign_Vacn_ID` int(11) NOT NULL,
  `Stu_Tr_Placement_Certification_Manager` varchar(45) DEFAULT NULL,
  `Stu_Tr_Placement_Approval_AGM` varchar(45) DEFAULT NULL,
  `Stu_Tr_Placement_Approval_Date` varchar(45) DEFAULT NULL,
  `Stu_Tr_Certificate_No` varchar(45) DEFAULT NULL,
  `Stu_Training_Complete_Date` varchar(45) DEFAULT NULL,
  `Stu_Roll` varchar(10) NOT NULL DEFAULT 'Trainee',
  `User_ID` int(11) NOT NULL,
  `Stu_Position` int(11) NOT NULL,
  `Stu_Min_Tr_Days` int(11) NOT NULL DEFAULT 108,
  `Stu_rejectremarks` varchar(255) NOT NULL,
  `Stu_Assign_Letter` varchar(45) DEFAULT NULL,
  `Stu_Accept_Office` varchar(15) NOT NULL DEFAULT 'Not_Accept',
  `Stu_Days_Due` int(11) NOT NULL,
  `Stu_F_Name` varchar(45) NOT NULL,
  `Stu_L_Name` varchar(45) NOT NULL,
  `Stu_Address_No` varchar(45) NOT NULL,
  `Stu_Address_Road` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stu_internship_request`
--

INSERT INTO `tbl_stu_internship_request` (`Stu_Student_ID`, `Stu_Student_NIC`, `Stu_Email`, `Stu_Instu_ID`, `Stu_Institute_Branch`, `Stu_Institute_ID_No`, `Stu_Student_Full_Name`, `Stu_Student_Initial`, `Stu_Student_Surname`, `Stu_DOB`, `Stu_Gender`, `Stu_Permanent_Address`, `Stu_District`, `Stu_Mobile`, `Stu_Fixed_Tele_No`, `Stu_Academic_Year`, `Stu_Subject_Stream`, `Stu_Programme_Name`, `Stu_Internship_Period`, `Stu_NIC_Copy`, `Stu_Institute_Recommendation_Copy`, `Stu_Request_Date`, `Stu_Reques_Acceptance`, `Stu_Training_Start_Date`, `Stu_Training_End_Date`, `Stu_Assign_Office_ID`, `Stu_Assign_Vacn_ID`, `Stu_Tr_Placement_Certification_Manager`, `Stu_Tr_Placement_Approval_AGM`, `Stu_Tr_Placement_Approval_Date`, `Stu_Tr_Certificate_No`, `Stu_Training_Complete_Date`, `Stu_Roll`, `User_ID`, `Stu_Position`, `Stu_Min_Tr_Days`, `Stu_rejectremarks`, `Stu_Assign_Letter`, `Stu_Accept_Office`, `Stu_Days_Due`, `Stu_F_Name`, `Stu_L_Name`, `Stu_Address_No`, `Stu_Address_Road`) VALUES
(93, '802141120V', 'kgdulip1@gmail.com', 19, 19, '', 'Dulip Thilakarathna', 'K.D.D.C.', 'Thilakarathna', '1980-08-01', 'Male', 'No. 1017, Liyanagoda Road, Kootawa.', 12, '0719099969', '0719099969', '2022', 3, 12, '6', '802141120V.JPG', '802141120V.pdf', '2022-03-16', 'Accept', '2022-04-01', '2022-10-31', 11, 36, 'Certified', 'Approved', '2022-03-28', '', '2022-10-31', 'Trainee', 1, 1, 108, '', NULL, 'Accept', 0, '', '', '', ''),
(97, '796893020V', 'maithrie1@live.com', 20, 20, '', 'Nirosha Maithrie', 'V.N.M.', 'Perara', '1979-07-07', 'Female', 'No. D82/1, Thimbiripola Road, Kandy.', 37, '0714400000', '0342200000', '2022', 2, 13, '6', '796893020V.JPG', '796993020V.pdf', '2022-11-20', 'Accept', '2022-11-25', '2022-11-30', 12, 37, 'Certified', 'Approved', '2022-11-20', '', '', 'Trainee', 1, 4, 108, '', NULL, 'Cancelled', 0, '', '', '', ''),
(110, '802141121V', 'maithrie2@live.com', 20, 25, '', 'Amal Shantha', 'H.D.', 'Badulla', '1995-11-26', 'Male', 'No. 1745, Dambetenna, Haputale.', 5, '0714400000', '0719099969', '2022', 1, 10, '6', '802141121V.JPG', '802141121V.pdf', '2022-02-22', 'Accept', '2022-03-12', '2023-09-14', 13, 41, 'Certified', 'Approved', '2022-09-22', '22', '2022-11-15', 'Trainee', 1, 2, 108, 'All Are Correct', NULL, 'Accept', 0, '', '', '', ''),
(113, '796893021V', 'kgdulip2@gmail.com', 20, 20, '', 'Udara Malaka', 'U.M.', 'Kodikara', '1980-11-24', 'Male', 'No. 65, Main Street, Badulla.', 5, '0714465689', '0342244708', '2022', 1, 10, '6', '796893021V.JPG', '796993021V.pdf', '2022-11-24', 'Accept', '2022-12-01', '2023-03-19', 13, 42, 'Certified', 'Approved', '2022-11-24', '', '', 'Trainee', 1, 2, 108, '', NULL, 'Not_Accept', 0, '', '', '', ''),
(114, '802141123V', 'maithrie3@live.com', 20, 19, '', 'Nirosha Maithrie', 'V.N.M.', 'Perara', '2022-11-24', 'Male', 'No. 1745, Dambetenna, Haputale.', 12, '0714400000', '0342244708', '2022', 3, 12, '6', '802141123V.JPG', '802141123V.pdf', '2022-11-24', 'Accept', '2022-12-15', '2023-04-02', 19, 43, 'Certified', 'Approved', '2022-11-25', '23', '2022-12-13', 'Trainee', 1, 1, 108, '', NULL, 'Accept', 0, '', '', '', ''),
(115, '796893023V', 'maithrie4@live.com', 19, 19, '', 'Saduni Kumari', 'S.K.', 'Fernando', '1991-10-01', 'Female', 'No. 1017, Liyanagoda Road, Kootawa, Pannipiti', 12, '0714465689', '0719099969', '2022', 3, 12, '6', '796893023V.JPG', '796993023V.pdf', '2022-11-24', 'Accept', '2022-11-28', '2023-03-16', 20, 44, 'Certified', 'Approved', '2022-11-25', '24', '2022-12-15', 'Trainee', 0, 1, 108, '', NULL, 'Accept', 0, '', '', '', ''),
(120, '812141125V', 'maithrie@live.com', 19, 19, '', 'Madushani Maithrie', 'V.M.M.', 'Thilakarathna', '1994-11-26', 'Female', 'No. 65, Main Street, Ampara', 12, '0714465689', '0112847726', '2022', 1, 15, '6', '802141125V.JPG', '802141125V.pdf', '2022-11-26', 'Accept', '2022-12-01', '2023-03-19', 19, 49, 'Certified', 'Approved', '2022-11-26', '', '', 'Trainee', 0, 5, 108, '', NULL, 'Accept', 0, '', '', '', ''),
(123, '802141128V', 'udara@gmail.com', 19, 20, '', 'Udara Malaka', 'V.M.M.', 'Perera', '1980-11-26', 'Male', 'No. 1017, Liyanagoda Road, Kootawa, Pannipiti', 40, '0714465689', '0719099969', '2022', 1, 12, '6', '802141128V.pdf', '802141128V.pdf', '2022-11-26', 'Pending', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 'Trainee', 0, 1, 108, '', NULL, 'Not_Accept', 0, 'Udara', 'Malaka', 'No.1017', 'Liyanagoda Road'),
(124, '8021144130V', 'rosahan@gmail.com', 19, 19, '', 'Roshan AB', 'AB', 'Abeweear', '1980-11-26', 'Male', 'ABC', 2, '0714465689', '0112847726', '2022', 1, 12, '6', '802141130V.pdf', '802141130V.pdf', '2022-11-26', 'Pending', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 'Trainee', 0, 1, 108, '', NULL, 'Not_Accept', 0, 'Roshan', 'Abeweera', '138', 'High Level');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject_area`
--

CREATE TABLE `tbl_subject_area` (
  `Sub_Area_ID` int(11) NOT NULL,
  `Sub_Area_Name` varchar(45) DEFAULT NULL,
  `Sub_Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject_area`
--

INSERT INTO `tbl_subject_area` (`Sub_Area_ID`, `Sub_Area_Name`, `Sub_Description`) VALUES
(1, 'Engineering', 'Engineering'),
(2, 'Management', 'Management'),
(3, 'Information Technology', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainee_desig`
--

CREATE TABLE `tbl_trainee_desig` (
  `Trainee_Desig_ID` int(11) NOT NULL,
  `Trainee_Desig` varchar(45) DEFAULT NULL,
  `Trainee_Desig_Descrip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trainee_desig`
--

INSERT INTO `tbl_trainee_desig` (`Trainee_Desig_ID`, `Trainee_Desig`, `Trainee_Desig_Descrip`) VALUES
(1, 'Computer Operator', 'Computer Operator'),
(2, 'Engineering Assistant', 'Engineering Assistant'),
(4, 'Accounts Assistant', 'Accounts Assistant'),
(5, 'Draughtsperson', 'Draughtsperson'),
(7, 'Quantity Surveyor', 'Quantity Surveyor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainee_workdone`
--

CREATE TABLE `tbl_trainee_workdone` (
  `workdone_ID` int(6) NOT NULL,
  `workdone_UserID` varchar(50) NOT NULL,
  `workdone_date` date NOT NULL,
  `workdone_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training_request`
--

CREATE TABLE `tbl_training_request` (
  `Vacan_ID` int(11) NOT NULL,
  `Vacan_CostCode` int(11) NOT NULL,
  `Vacan_Subject_Area` int(11) DEFAULT NULL,
  `Vacan_Position` int(11) DEFAULT NULL,
  `Vacan_Gender` varchar(45) DEFAULT NULL,
  `Vacan_Commence_Date` date DEFAULT NULL,
  `Vacan_Period` int(3) DEFAULT NULL,
  `Vacan_Remarks` varchar(255) NOT NULL,
  `Vacan_Fulfill_Date` date DEFAULT NULL,
  `Vacan_Is_Fill` varchar(12) NOT NULL DEFAULT 'Pending',
  `Vacan_Assign_StuID` int(11) NOT NULL,
  `Vacan_Office` int(11) NOT NULL,
  `Vacan_Office_District` int(11) NOT NULL,
  `Vacan_Request_Email` varchar(50) NOT NULL,
  `Vacan_Request_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_training_request`
--

INSERT INTO `tbl_training_request` (`Vacan_ID`, `Vacan_CostCode`, `Vacan_Subject_Area`, `Vacan_Position`, `Vacan_Gender`, `Vacan_Commence_Date`, `Vacan_Period`, `Vacan_Remarks`, `Vacan_Fulfill_Date`, `Vacan_Is_Fill`, `Vacan_Assign_StuID`, `Vacan_Office`, `Vacan_Office_District`, `Vacan_Request_Email`, `Vacan_Request_Date`) VALUES
(36, 11, 3, 1, 'Male', '2022-11-01', 6, '', NULL, 'Accept', 93, 11, 12, '', '2022-11-13'),
(37, 12, 2, 4, 'Female', '2022-11-01', 6, '', NULL, 'Accept', 0, 12, 37, '', '2022-11-13'),
(41, 13, 1, 2, 'Male', '2022-12-01', 6, 'Temp', NULL, 'Accept', 110, 0, 5, '', '2022-11-21'),
(42, 13, 1, 2, 'Male', '2022-12-01', 6, 'Temp', NULL, 'Accept', 113, 0, 5, '', '2022-11-24'),
(43, 19, 3, 1, 'Female', '2022-12-01', 6, '', NULL, 'Accept', 114, 0, 12, '', '2022-11-24'),
(44, 20, 3, 1, 'Female', '2022-12-01', 6, '', NULL, 'Accept', 115, 0, 12, '', '2022-11-24'),
(45, 20, 1, 5, 'Male', '2022-12-01', 6, '', NULL, 'Accept', 117, 0, 12, '', '2022-11-25'),
(46, 14, 1, 7, 'Female', '2022-12-12', 6, 'Temp', NULL, 'Accept', 0, 0, 40, '', '2022-11-25'),
(47, 13, 3, 1, 'Male', '2022-12-20', 6, '', NULL, 'Accept', 0, 0, 5, '', '2022-11-25'),
(48, 20, 1, 7, 'Male', '2022-12-01', 6, 'Temp', NULL, 'Accept', 121, 0, 12, '', '2022-11-26'),
(49, 19, 1, 5, 'Female', '2022-12-15', 6, 'Temp', NULL, 'Accept', 120, 0, 12, '', '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_registration`
--

CREATE TABLE `tbl_user_registration` (
  `User_ID` int(11) NOT NULL,
  `User_Reg_ID` int(11) NOT NULL,
  `User_Reg_Name_Surname` varchar(45) NOT NULL DEFAULT 'Cost Center',
  `User_Reg_Role` varchar(45) NOT NULL,
  `User_Reg_Email` varchar(100) NOT NULL,
  `User_Reg_Password` varchar(50) NOT NULL,
  `User_Reg_Is_Active` varchar(45) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_registration`
--

INSERT INTO `tbl_user_registration` (`User_ID`, `User_Reg_ID`, `User_Reg_Name_Surname`, `User_Reg_Role`, `User_Reg_Email`, `User_Reg_Password`, `User_Reg_Is_Active`) VALUES
(3, 802141122, 'Administrator', 'Admin', 'admin@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Active'),
(54, 11, 'Manager Office (Kotte)', 'Office', 'office@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(55, 19, 'National Youth Services Council', 'Institute', 'nysc@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(57, 19, 'Maithrie', 'TO', 'to@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(73, 12, 'Deduruoya WSP', 'Project', 'project@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(74, 20, 'Geeganage', 'Manager', 'manager@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(75, 21, 'Pannila', 'AGM', 'agm@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(76, 20, 'Vocational Training Authority', 'Institute', 'vta@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(77, 23, 'National Apprentice and Industrial Training A', 'Institute', 'naita@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(80, 93, 'Thilakarathna', 'Trainee', 'kgdulip1@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Inactive'),
(82, 97, 'Perara', 'Trainee', 'perera@live.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Inactive'),
(83, 22, 'Ambulugala', 'TO', 'to2@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(84, 25, 'Association of Accounting Technicians of Sri ', 'Institute', 'aat@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(85, 13, 'Manager Office (Bandarawela)', 'Office', 'mbandarawela@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(86, 98, 'Nawarathna', 'Trainee', 'nawarathna@live.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(98, 104, 'Perara', 'Trainee', 'madu@live.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(100, 108, 'Fernando', 'Trainee', 'maithrie1@live.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(101, 109, 'Kurunegala', 'Trainee', 'dulip_thilakarathna1@live.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(102, 110, 'Badulla', 'Trainee', 'maithrie2@live.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Inactive'),
(103, 27, 'Sri Lanka Institute of Information Technology', 'Institute', 'kgdulip2@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(104, 14, 'Area Engineer Office (Matara)', 'Office', 'aematara@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(105, 113, 'Kodikara', 'Trainee', 'kgdulip4@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(106, 19, 'Manager Office (Maharagama)', 'Office', 'mmaharagama@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Active'),
(107, 114, 'Perara', 'Trainee', 'maithrie4@live.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Inactive'),
(108, 20, 'Manager Office (Homagama)', 'Office', 'mhomagama@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(109, 115, 'Fernando', 'Trainee', 'maithrie5@live.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Inactive'),
(110, 116, 'Samaranayake', 'Trainee', 'sureka@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(118, 120, 'Thilakarathna', 'Trainee', 'maithrie@live.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active'),
(119, 121, 'Amaraweera', 'Trainee', 'dulip10@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `User_Role_ID` varchar(11) NOT NULL,
  `User_Role_Name` varchar(45) NOT NULL,
  `User_Role_Description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`User_Role_ID`, `User_Role_Name`, `User_Role_Description`) VALUES
('Admin', 'Administrator', 'Administrator'),
('AGM', 'AGM (MD&amp;T)', 'AGM (MD&amp;T)'),
('Institute', 'Institute', 'Academic Institute'),
('Manager', 'Manager', 'Manager (MDTD)'),
('Office', 'Office', 'NWSDB Office'),
('Project', 'Project', 'NWSDB Project'),
('TO', 'Training Officer', 'Training Officer'),
('Trainee', 'Trainee', 'Trainee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `Year_ID` int(11) NOT NULL,
  `Year_Year` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`Year_ID`, `Year_Year`) VALUES
(1, '2022'),
(2, '2023');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zone`
--

CREATE TABLE `tbl_zone` (
  `Zone_ID` int(11) NOT NULL,
  `Zone_Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attend_record`
--
ALTER TABLE `tbl_attend_record`
  ADD PRIMARY KEY (`Attend_ID`);

--
-- Indexes for table `tbl_certificate_register`
--
ALTER TABLE `tbl_certificate_register`
  ADD PRIMARY KEY (`Certifi_ID`);

--
-- Indexes for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  ADD PRIMARY KEY (`Disci_ID`);

--
-- Indexes for table `tbl_discipline_catgo`
--
ALTER TABLE `tbl_discipline_catgo`
  ADD PRIMARY KEY (`Discip_Catgo_ID`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`District_ID`);

--
-- Indexes for table `tbl_homemsg`
--
ALTER TABLE `tbl_homemsg`
  ADD PRIMARY KEY (`homemsg_ID`);

--
-- Indexes for table `tbl_institute_reg`
--
ALTER TABLE `tbl_institute_reg`
  ADD PRIMARY KEY (`Insti_ID`),
  ADD UNIQUE KEY `Insti_Email` (`Insti_Email`);

--
-- Indexes for table `tbl_mdtd_staff`
--
ALTER TABLE `tbl_mdtd_staff`
  ADD PRIMARY KEY (`mdtd_ID`),
  ADD UNIQUE KEY `mdtd_nic_no` (`mdtd_Reg_ID`);

--
-- Indexes for table `tbl_nwsdb_office`
--
ALTER TABLE `tbl_nwsdb_office`
  ADD PRIMARY KEY (`Sec_ID`),
  ADD UNIQUE KEY `Sec_Email` (`Sec_Email`),
  ADD UNIQUE KEY `Sec_Cost_Code_ID` (`Sec_Cost_Code_ID`);

--
-- Indexes for table `tbl_nwsdb_project`
--
ALTER TABLE `tbl_nwsdb_project`
  ADD PRIMARY KEY (`Project_ID`),
  ADD UNIQUE KEY `Sec_Email` (`Project_Email`),
  ADD UNIQUE KEY `Project_Cost_Code_ID` (`Project_Cost_Code_ID`);

--
-- Indexes for table `tbl_programme_registration`
--
ALTER TABLE `tbl_programme_registration`
  ADD PRIMARY KEY (`Prog_ID`),
  ADD UNIQUE KEY `Prog_Name` (`Prog_Name`);

--
-- Indexes for table `tbl_province`
--
ALTER TABLE `tbl_province`
  ADD PRIMARY KEY (`Provi_ID`);

--
-- Indexes for table `tbl_stu_internship_request`
--
ALTER TABLE `tbl_stu_internship_request`
  ADD PRIMARY KEY (`Stu_Student_ID`),
  ADD UNIQUE KEY `Stu_Student_NIC` (`Stu_Student_NIC`);

--
-- Indexes for table `tbl_subject_area`
--
ALTER TABLE `tbl_subject_area`
  ADD PRIMARY KEY (`Sub_Area_ID`);

--
-- Indexes for table `tbl_trainee_desig`
--
ALTER TABLE `tbl_trainee_desig`
  ADD PRIMARY KEY (`Trainee_Desig_ID`);

--
-- Indexes for table `tbl_trainee_workdone`
--
ALTER TABLE `tbl_trainee_workdone`
  ADD PRIMARY KEY (`workdone_ID`);

--
-- Indexes for table `tbl_training_request`
--
ALTER TABLE `tbl_training_request`
  ADD PRIMARY KEY (`Vacan_ID`);

--
-- Indexes for table `tbl_user_registration`
--
ALTER TABLE `tbl_user_registration`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`User_Role_ID`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`Year_ID`);

--
-- Indexes for table `tbl_zone`
--
ALTER TABLE `tbl_zone`
  ADD PRIMARY KEY (`Zone_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attend_record`
--
ALTER TABLE `tbl_attend_record`
  MODIFY `Attend_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_certificate_register`
--
ALTER TABLE `tbl_certificate_register`
  MODIFY `Certifi_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  MODIFY `Disci_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_discipline_catgo`
--
ALTER TABLE `tbl_discipline_catgo`
  MODIFY `Discip_Catgo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `District_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbl_homemsg`
--
ALTER TABLE `tbl_homemsg`
  MODIFY `homemsg_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_institute_reg`
--
ALTER TABLE `tbl_institute_reg`
  MODIFY `Insti_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_mdtd_staff`
--
ALTER TABLE `tbl_mdtd_staff`
  MODIFY `mdtd_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_nwsdb_office`
--
ALTER TABLE `tbl_nwsdb_office`
  MODIFY `Sec_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_nwsdb_project`
--
ALTER TABLE `tbl_nwsdb_project`
  MODIFY `Project_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_programme_registration`
--
ALTER TABLE `tbl_programme_registration`
  MODIFY `Prog_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_province`
--
ALTER TABLE `tbl_province`
  MODIFY `Provi_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stu_internship_request`
--
ALTER TABLE `tbl_stu_internship_request`
  MODIFY `Stu_Student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `tbl_subject_area`
--
ALTER TABLE `tbl_subject_area`
  MODIFY `Sub_Area_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_trainee_desig`
--
ALTER TABLE `tbl_trainee_desig`
  MODIFY `Trainee_Desig_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_trainee_workdone`
--
ALTER TABLE `tbl_trainee_workdone`
  MODIFY `workdone_ID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_training_request`
--
ALTER TABLE `tbl_training_request`
  MODIFY `Vacan_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_user_registration`
--
ALTER TABLE `tbl_user_registration`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tbl_year`
--
ALTER TABLE `tbl_year`
  MODIFY `Year_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_zone`
--
ALTER TABLE `tbl_zone`
  MODIFY `Zone_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

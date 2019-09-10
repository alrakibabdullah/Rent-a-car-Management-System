-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 10:08 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-07-05 11:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
(1, 'test@gmail.com', 2, '22/06/2017', '25/06/2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 1, '2017-06-19 20:15:43'),
(2, 'test@gmail.com', 3, '30/06/2017', '02/07/2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 2, '2017-06-26 20:15:43'),
(3, 'test@gmail.com', 4, '02/07/2017', '07/07/2017', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ', 0, '2017-06-26 21:10:06'),
(4, 'test1@gmail.com', 1, '11/07/2017', '12/07/2018', 'ddddddddddd', 0, '2017-06-29 18:20:45'),
(5, 'php@gmail.com', 6, '11/07/2017', '12/07/2017', 'i want to hire this taxi for few hours', 1, '2017-07-05 11:09:18'),
(6, 'rashid.bukhari78600@gmail.com', 1, '2/2/2017', '4/2/2017', 'For Family Tour', 0, '2017-10-03 11:34:51'),
(7, 'rashid.bukhari78600@gmail.com', 2, '2/2/2017', '4/2/2017', 'Journey', 0, '2017-10-03 11:36:53'),
(8, 'shahnawaz.522kfc@gmail.com', 1, '17/10/2017', '22/10/2017', 'For Exam', 0, '2017-10-17 04:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Maruti', '2017-06-18 16:24:34', '2017-06-19 06:42:23'),
(2, 'BMW', '2017-06-18 16:24:50', NULL),
(3, 'Audi', '2017-06-18 16:25:03', NULL),
(4, 'Nissan', '2017-06-18 16:25:13', NULL),
(5, 'Toyota', '2017-06-18 16:25:24', NULL),
(7, 'Marutiu', '2017-06-19 06:22:13', NULL),
(8, 'Taxi', '2017-07-05 11:02:29', NULL),
(9, 'Honda City', '2017-11-22 03:49:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Dist Rahim Yar Khan, Punjab, Pakistan.																								', 'Muhammad.jalal@gmail.com', '03024867604');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Abid', 'abid@gmail.com', '03001221222', 'Contct with me', '2017-06-18 10:03:07', 1),
(2, 'Rashid', 'rashid.bukhari78600@gmail.com', '03008968490', 'Cntct me', '2017-10-04 12:13:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '																																																																						<h2><span style="color: rgb(153, 0, 0); font-family: &quot;comic sans ms&quot;; font-weight: 700; font-size: xx-large;">You will accept all the terms and conditions of Online Rent A Car Management System, then you will use proper Online Rent a Car Management System website, your responsible of your each and every activity that you perform..</span></h2><div><span style="color: rgb(153, 0, 0); font-family: &quot;comic sans ms&quot;; font-weight: 700; font-size: xx-large;"><br></span></div><div><span style="color: rgb(153, 0, 0); font-family: &quot;comic sans ms&quot;; font-weight: 700; font-size: xx-large;">THANKS.....</span></div><div><span style="color: rgb(153, 0, 0); font-family: &quot;comic sans ms&quot;; font-weight: 700; font-size: xx-large;">Muhammd Jalal</span></div><div><br></div>\r\n\r\n\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										'),
(2, 'Privacy Policy', 'privacy', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'About Us ', 'aboutus', '										<h2><span style="font-weight: bold; text-decoration-line: underline; font-size: xx-large;">&nbsp;Scope</span></h2><p class="MsoListParagraph" style="margin-left:0in;text-indent:.5in">The Online\r\nRental a Car Management System (ORCMS) contain the data on the vehicle fleet\r\nand information about the specific vehicles.Online Rent a Car Management System\r\ncontain all the information about cars and customer, customer easily hire any\r\ncar to contact with owner of the car.</p><p class="MsoListParagraph" style="margin-left:0in">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All the information about the car rents, specific car avail\r\nor not, pick up location, pick up date and drop out date are store also in\r\nORCMS.</p><p class="MsoListParagraph" style="margin-left:0in;text-indent:.5in">\r\n\r\n\r\n\r\n\r\n\r\n</p><p class="MsoListParagraph" style="margin-left:0in;text-indent:.5in">The scope of\r\nthe ORCMS is to provide a clear and easy options to get information about the\r\ncar and hire any car. It will help the store managers and corporate office when\r\nthey need to file reports and check on rentals etc.</p><h2><span style="font-weight: bold; text-decoration-line: underline;">Product Perspective</span></h2><p class="MsoListParagraph" style="margin-left:0in;text-indent:.5in">\r\n\r\n</p><p class="MsoListParagraph" style="margin-left:0in;text-indent:.5in">Online rent\r\na car Management System is basically build for customers, customer are easily\r\nhire a car. ORCMS integrate with other site when user like any car rents, car\r\nrent service and &nbsp;want to share it with\r\nother social site like Facebook, twitter etc.</p><p class="MsoListParagraph" style="margin-left:0in;text-indent:.5in">&nbsp;In this situation ORCMS integrate\r\nwith other social site. if user have an account on this site then user easily\r\nsign in on social site and share it, otherwise first of all account an account\r\non specific social site and then share it.</p><h2 style="margin-left:0in;text-indent:0in"><span style="font-weight: bold; text-decoration-line: underline;">Product Functions</span></h2><p class="MsoListParagraph" style="margin-left:0in;text-indent:.5in">\r\n\r\n</p><p class="MsoNormal" style="text-indent:.5in"><span style="font-size:12.0pt;\r\nline-height:107%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">The basic function of\r\nORCMS is to give all the information about cars, like car rent, car condition,\r\ncar picture, car model and car color. ORCMS also provide a facility to the\r\ncustomer to know that a specific car is avail for rent or not? Information\r\nabout different cars are store in ORCNS.</span></p><p class="MsoNormal" style="text-indent:.5in"><span style="font-size:12.0pt;\r\nline-height:107%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">&nbsp;ORCMS provide a facility to fill the\r\nall sign up fields and register. ORCMS also provide a facility to user that\r\nuser easily log in by given username/phone number. The specification of all the\r\ncars are store in our site. Different drivers are also avail in ORCMS, if any\r\nuser hire a car with driver so extra charges will be apply. Car pick up and\r\ndrop out date also store in ORCMS, if any use does not drop out car on specific\r\nfix date then extra charges will be applied.<o:p></o:p></span></p>\r\n										'),
(11, 'FAQs', 'faqs', '																														<h5 style="text-align: justify;"><div style="text-align: left;"><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large; font-style: italic; font-weight: bold;">1) How to Register New User?</span></div><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-weight: bold; font-style: italic; font-size: x-large;"><div style="text-align: left;">Ans:</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">1) Click on Log in/Register</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">2) Select&nbsp; Sign Up Option</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">3)Give Full name, Mobile number, Email Address, Password, Confirm Password.</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">4)Check I Agree with Terms and Conditions.</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">5) Click On Sign Up Button.</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-weight: bold; font-style: italic; font-size: x-large;"><div style="text-align: left;">2) How to Log in User?</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-weight: bold; font-style: italic; font-size: x-large;"><div style="text-align: left;">ANS:</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">1) Open Log in Form.</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">2) Give User Name and Password.</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">3) Click on Log in Button.</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-weight: bold; font-style: italic; font-size: x-large;"><div style="text-align: left;">3) How to Open Admin Panel?</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-weight: bold; font-style: italic; font-size: x-large;"><div style="text-align: left;">ANS:</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">1) Go to About Us.</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">2) Select "Ädmin Log in"</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">3) Give User name "Admin" and Password "Admin"</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">4)Click Log in.</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-weight: bold; font-style: italic; font-size: x-large;"><div style="text-align: left;">4) Procedure to Rent a Car?</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-weight: bold; font-style: italic; font-size: x-large;"><div style="text-align: left;">ANS:</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">First of all</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">1) Login User if have an account otherwise Register first.&nbsp;</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">2)User select a car&nbsp;</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">3)Give Booking information&nbsp;</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">4)data from, data to and a message</div></span><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: x-large;"><div style="text-align: left;">5) Then Press ok...&nbsp;</div></span></h5><div style="text-align: left;"><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;"><br></span></div>\r\n										\r\n										\r\n										');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(1, 'rashid.bukhari143@gmail.com', '2017-06-22 16:35:32'),
(2, 'rashid.bukhari78600@gmail.com', '2017-10-04 12:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(1, 'test@gmail.com', 'Awesome', '2017-06-18 07:44:31', 1),
(2, 'test@gmail.com', '\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilis', '2017-06-18 07:46:05', 1),
(3, 'kfc@gmail.com', 'Wow its Great ', '2017-07-05 11:08:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, 'Muhammad Jalal', 'muhammdjalal@gmail.com', '12345', '2147483647', NULL, NULL, 'RYK', 'Pakistan', '2017-06-17 19:59:27', '2017-11-22 04:20:37'),
(2, 'Shahnawaz ', 'shahnawaz@gmail.com', '12345', '8285703354', NULL, NULL, NULL, NULL, '2017-06-17 20:00:49', '2017-11-22 04:19:14'),
(3, 'Javeed', 'javeed@gmail.com', '12345', '09999857868', '03/02/1990', '', 'RYK', 'Pakistan', '2017-06-17 20:01:43', '2017-11-22 04:20:06'),
(4, 'Abid Bukhari', 'ab@gmail.com', '123456789', '9999857868', '', 'zahid peer', 'RYK', 'Pakistan', '2017-06-17 20:03:36', '2017-11-22 04:21:34'),
(5, 'test', 'test1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '9015501898', NULL, NULL, NULL, NULL, '2017-06-29 18:19:08', NULL),
(6, 'Sayyed Rashid Bukhari', 'rashid.bukhari143@gmail.com', 'Pakistan', '9015501898', '1/1/1996', 'zahir peer', 'RYK', 'Pakistan', '2017-07-05 11:06:55', '2017-11-22 04:22:53'),
(7, 'Rashid', 'rashid.bukhari78600@gmail.com', 'b9698b8546220246fe600a949db326bf', '0300896840', NULL, NULL, NULL, NULL, '2017-10-03 11:32:18', NULL),
(8, 'Muhammad Shahnawaz', 'shahnawaz.522kfc@gmail.com', 'b9698b8546220246fe600a949db326bf', '3026279522', NULL, NULL, NULL, NULL, '2017-10-17 04:46:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(1, 'ytb rvtr', 2, 'vtretrvet', 345345, 'Petrol', 3453, 7, 'knowledge_base_bg.jpg', '20170523_145633.jpg', 'phpgurukul-1.png', 'social-icons.png', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-06-19 11:46:23', '2017-06-20 18:38:13'),
(2, 'Test Demoy', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa. Integer ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer. Etiam vitae nisl. In dignissim lacus ut ante. Cras elit lectus, bibendum a, adipiscing vitae, commodo et, dui. Ut tincidunt tortor. Donec nonummy, enim in lacinia pulvinar, velit tellus scelerisque augue, ac posuere libero urna eget neque. Cras ipsum. Vestibulum pretium, lectus nec venenatis volutpat, purus lectus ultrices risus, a condimentum risus mi et quam. Pellentesque auctor fringilla neque. Duis eu massa ut lorem iaculis vestibulum. Maecenas facilisis elit sed justo. Quisque volutpat malesuada velit. ', 859, 'CNG', 2015, 4, 'car_755x430.png', 'looking-used-car.png', 'banner-image.jpg', 'about_services_faq_bg.jpg', '', 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, '2017-06-19 16:16:17', '2017-06-21 16:57:11'),
(3, 'Lorem ipsum', 4, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 563, 'CNG', 2012, 5, 'featured-img-3.jpg', 'dealer-logo.jpg', 'img_390x390.jpg', 'listing_img3.jpg', '', 1, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, '2017-06-19 16:18:20', '2017-06-20 18:40:11'),
(4, 'Lorem ipsum', 1, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 5636, 'CNG', 2012, 5, 'featured-img-3.jpg', 'featured-img-1.jpg', 'featured-img-1.jpg', 'featured-img-1.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, '2017-06-19 16:18:43', '2017-06-20 18:44:12'),
(5, 'ytb rvtr', 5, 'vtretrvet', 345345, 'Petrol', 3453, 7, 'car_755x430.png', NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-06-20 17:57:09', '2017-06-21 16:56:43'),
(6, 'Waganor Taxi', 8, 'Its Well matintaied', 10, 'Petrol', 2017, 4, 'Koala.jpg', 'Desert.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', '', 1, 1, 1, NULL, 1, 1, NULL, 1, 1, 1, NULL, 1, '2017-07-05 11:04:18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

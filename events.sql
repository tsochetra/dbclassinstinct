-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2018 at 02:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE `Event` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `host_date` text NOT NULL,
  `end_date` varchar(32) NOT NULL,
  `location` varchar(64) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `picture_url` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Event`
--

INSERT INTO `Event` (`id`, `name`, `host_date`, `end_date`, `location`, `created_date`, `picture_url`, `description`) VALUES
(55, 'Toyota Impact Challenge 2018', '30 April 2018', 'null', 'ITC', '2018-04-11 11:23:16', 'VJs8TiMCu3mQ', 'ELIGIBILITY\r\nApplications will open on the 7th April, on the day of the launch. The program will include university visits around Phnom Penh to raise awareness and encourage youth to think about entrepreneurship and how they can use it to positively influence the sectors mentioned above.\r\n\r\nTen teams will then be selected to go through an intensive 2 day bootcamp, and will have one month to validate their ideas and prepare to pitch their venture in July.\r\n\r\nThree teams will then be selected to go through incubation for 6 months at IHPP, where they will receive tailored mentoring, masterclasses, an inspiring workspace (IHPPâ€™s coworking space), and access to Impact Hubâ€™s extensive local and international network.\r\n\r\nThe three teams will once again pitch their ideas at the end of the incubation period for the chance to win $10,000 to fund their venture.\r\nBENEFIT\r\nToyota Impact Challenge is a 6 month tailored incubation program with a chance to win $10,000 at the end to fund your start up.	\r\nDESCRIPTION\r\nImpact Hub Phnom Penh and Toyota Cambodia are pleased to announce the launch of the Toyota Impact Challenge 2018! \r\n\r\nThe first entrepreneurship program in Cambodia to focus on transport and road safety specifically, the Toyota Impact Challenge also hopes to raise awareness around these largely untapped sectors and inspire innovators to pioneer and contribute solutions to challenges in these sectors. Finally, after six months of incubation at Impact Hub Phnom Penh, one team will be awarded $10,000 to grow their venture. \r\n\r\nâ€œWe hope that by supporting the startup ecosystem in transport, smart cities, environment, and road safety, that we can create more collaboration and potentially new, innovative services between Cambodian entrepreneurs and Toyota Cambodiaâ€- Hiroyuki Itoh, President of Toyota (Cambodia) 	\r\n\r\nHOW TO APPLY\r\nPlease get in touch with abigail.perriman@impacthub.net if you have any questions about the Toyota Impact Challenge or the applications process.\r\n\r\nPlease apply through LINK\r\n\r\nFor more information please visit Official Link\r\n\r\n***Disclaimer: WEduShare does not own the content. Our purpose is purely to help spread the information. Although every effort is made to keep the information true, accurate, complete and appropriate, we make no representations nor warranties.'),
(56, 'Lisbon Consortium FCT Phd Programme (2018-2019)', '01 June 2018', 'null', 'RUPP', '2018-04-11 11:24:09', 'r9bajKmhXvnn', 'ELIGIBILITY\r\nEntrance Requirements: To be eligible for this scholarship you must meet the following requirements:\r\n\r\nApplicants are eligible provided they have been accepted into the Doctoral Program in Culture Studies of the Lisbon Consortium and comply with the following:\r\n- National grants: Portuguese citizens or foreign citizens\r\n- Mixed grants: Portuguese citizens or foreign citizens who are able to prove habitual or permanent residence in Portugal upon application;\r\nHolders of MA degree or recognized equivalent upon application [foreign MA degrees must be recognized/registered. The process needs to be concluded upon application â€“ for more information, please consult:\r\nhttp://www.dges.mec.pt/en/pages/naric_pages/academic_recognition/recognition_foreign_qualifications.html]\r\nVery good academic performance\r\nExcellent CV\r\nSufficient undergraduate training to do graduate work in the chosen field or relevant professional experience\r\nHave not previously received an identical type of FCT-funded fellowship for the same purpose\r\nCompetence in English (IELTS 7.0 minimum; TOEFL 100 + minimum 24 in all skills; Cambridge Advanced Certificate B; CEFR C1). Certificate attained in the last 2 years.\r\nEnglish Language Requirements: Competence in English (IELTS 7.0 minimum; TOEFL 100 + minimum 24 in all skills; Cambridge Advanced Certificate B; CEFR C1). Certificate attained in the last 2 years.\r\n\r\nBENEFIT\r\nThe grant is awarded for: \r\n\r\nA 12-month period, renewable up to a maximum of 4 years,\r\nIncludes a monthly maintenance stipend and a tuition fee stipend, in accordance with the current FCT stipend scheme.\r\nIt cannot be awarded for less than 3 consecutive months. Grants awarded within this call cannot start before September 2018.\r\nDESCRIPTION\r\nThe International Doctoral Program in Culture Studies at the Lisbon Consortium (INTDCS), funded by the Foundation for Science and Technology (FCT).\r\n\r\nThe Lisbon Summer School for the Study of Culture is the annual meeting of the Lisbon Consortiumâ€™s MA and PhD Program in Culture Studies, bringing together leading scholars in the field of culture and doctoral students and your researchers from all around the world.\r\n\r\nApplications are invited for 7 full fellowships (3 national grants and 4 mixed grants) for the academic year 2018-2019, in accordance with FCTâ€™s Research Fellowship Holder Statute and FCTâ€™s Regulation for Research Studentships and Fellowships.\r\n\r\n\r\nHOW TO APPLY\r\nThe mode of application is ONLINE.\r\n\r\nApplications must include the following documents:\r\n\r\nApplication Form\r\nTranscript of records\r\nMA degree certified by the awarding institution (foreign MA degrees must be recognized/registered)\r\nCopy of identification document (Passport or ID card)\r\nDetailed CV\r\nA personal statement indicating the studentâ€™s motivation and interest in the program (max. 3.000 characters)\r\nAbstract of a preliminary research project (max. 15.000 characters)\r\nAn indication of Supervisor (only if possible)\r\nCertificate of English proficiency (except for native speakers)\r\nFor further information, please visit Official Website.\r\n\r\n***Disclaimer: WEduShare does not own the content. Our purpose is purely to help spread the information. Although every effort is made to keep the information true, accurate, complete and appropriate, we make no representations nor warranties.'),
(57, 'tratqwe', '29 Jan 2019', 'null', 'Instinct', '2018-04-11 11:38:29', 'eBmeGjeIkl7G', '1231238878'),
(58, 'wqe', 'qwe', 'null', 'qwe', '2018-04-11 12:21:26', 'ga4LEb5IL89x', '<p>adsflaksdjlkasdf</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>wqe</td>\r\n			<td>qwe</td>\r\n		</tr>\r\n		<tr>\r\n			<td>aasd</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(59, 'qweqw', 'qwe', 'null', 'qwe', '2018-04-11 12:22:42', 'UWcWIXKbYAHY', '<p>123123</p>\r\n'),
(60, 'adsf', 'qwe', 'null', 'wqe', '2018-04-11 12:26:32', 'VyKCtsGght3H', '<h1 style=\"font-style: italic;\"><strong>asdfasdf<a href=\"https://www.google.com.kh/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png\" target=\"_blank\"><img alt=\"test\" src=\"https://www.google.com.kh/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png\" style=\"height:184px; width:544px\" /></a></strong></h1>\r\n'),
(61, 'er', 'wqe', 'null', 'qwe', '2018-04-11 12:28:32', 'CJYsKfFOKpdp', '<p><img alt=\"\" src=\"https://www.google.com.kh/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png\" style=\"height:184px; width:544px\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `Gender`
--

CREATE TABLE `Gender` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Gender`
--

INSERT INTO `Gender` (`id`, `name`) VALUES
(1, 'M'),
(2, 'F'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `Organizer`
--

CREATE TABLE `Organizer` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `profile_url` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender_id` int(2) NOT NULL,
  `email` varchar(64) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `picture_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `fullname`, `password`, `gender_id`, `email`, `created_date`, `picture_url`) VALUES
(13, 'tsochetra', 'Sochetra Than ', '403c4d22522ec6781f8f1b0739f41ec80bc87e52', 1, 'tsochetra@gmail.com', '2018-04-10 19:43:45', 'cxXYkoUydzEF'),
(14, 'qweqwe', 'qwebqwe', '141f87be1330a105a87923f4ee6383bd7de46541', 1, 'qwe@qwe.qwe', '2018-04-11 11:45:20', 'VPkFUNPyBJiU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Gender`
--
ALTER TABLE `Gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Organizer`
--
ALTER TABLE `Organizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Event`
--
ALTER TABLE `Event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `Organizer`
--
ALTER TABLE `Organizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 30, 2016 at 02:49 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `absolute`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfoliolist`
--

CREATE TABLE `portfoliolist` (
  `ID` int(11) NOT NULL,
  `coverImage` varchar(1000) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `portfolioTitle` varchar(1000) NOT NULL,
  `aboutIntro` varchar(1000) CHARACTER SET swe7 NOT NULL,
  `image2` varchar(500) CHARACTER SET swe7 NOT NULL,
  `aboutClient` varchar(1000) CHARACTER SET swe7 NOT NULL,
  `image3` varchar(500) CHARACTER SET swe7 NOT NULL,
  `image4` varchar(500) CHARACTER SET swe7 NOT NULL,
  `aboutDesign` varchar(1000) CHARACTER SET swe7 NOT NULL,
  `finalImage` varchar(500) CHARACTER SET swe7 NOT NULL,
  `workType` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfoliolist`
--

INSERT INTO `portfoliolist` (`ID`, `coverImage`, `logo`, `portfolioTitle`, `aboutIntro`, `image2`, `aboutClient`, `image3`, `image4`, `aboutDesign`, `finalImage`, `workType`) VALUES
(1, 'http://marksandbox.esy.es/images/Baker_Furniture_Brochure_Design.jpg', '0', 'Baker Furniture', '', '', '', '', '', '', '', 'design'),
(2, 'http://marksandbox.esy.es/images/Black_Mulberry_Loyalty_Card_Design-.jpg', 'http://marksandbox.esy.es/images/Black_Mulberry_logo.png', 'The Black Mulberry', 'Legend has it that the tree was planted during the reign of King James 1 and is over 400 years old. At the time the King was trying to encourage the development of a national silk industry. Sadly the much sought after silk trade never took off as silkworms only feed off the white mulberry tree, leaving this lovely Black Mulberry to enjoy its days standing proudly beside the Weeping Willow watching over the River Nidd.', 'http://marksandbox.esy.es/images/Black_Mulberry_Menu.jpg', 'The Rascals Cafe approached us to rename and rebrand their traditional cafe on Knaresbrough Waterside. Situated in a market town rich in history, they wanted a name that had historical and regional relevance. Working with the client we discovered the story of The Black Mulberry.', 'http://marksandbox.esy.es/images/Black_Mulberry_Invitation_Design.jpg', 'http://marksandbox.esy.es/images/Black_Mulberry_Logo_Design-Absolute.jpg', 'We created a contemporary yet rustic feel, that was applied to a suite of marketing materials including the design of menus, loyalty cards, signage and invitations, as well as setting up and managing their social media channels.', 'http://marksandbox.esy.es/images/Black_Mulberry_Loyalty_Card_Design-.jpg', 'branding'),
(3, 'http://marksandbox.esy.es/images/Blagdon_Kitchen_Advert-Absolute.jpg', '0', 'Blagdon Kitchen Design', '', '', '', '', '', '', '', 'design'),
(4, 'http://marksandbox.esy.es/images/DraytonPartners_Stationery_Design-Absolute.jpg', '0', 'Drayton Partners', '', '', '', '', '', '', '', 'stationary'),
(5, 'http://marksandbox.esy.es/images/E-Book_Covers_Design.jpg', '0', 'James T. Raydel', '', '', '', '', '', '', '', 'illustration'),
(6, 'http://marksandbox.esy.es/images/Genetix_Logo_Design.jpg', '0', 'Genetix', '', '', '', '', '', '', '', 'branding'),
(7, 'http://marksandbox.esy.es/images/Get_Brindled_PR_Business_Card_Design.jpg', '0', 'Get Brindled', '', '', '', '', '', '', '', 'branding'),
(8, 'http://marksandbox.esy.es/images/Interior_Supply_Responsive_Web_Design.jpg', '0', 'Interior Supply', '', '', '', '', '', '', '', 'web'),
(9, 'http://marksandbox.esy.es/images/Laelia_packaging_concepts.jpg', '0', 'Laelia London', '', '', '', '', '', '', '', 'branding'),
(10, 'http://marksandbox.esy.es/images/NCFE-Exhibition-Stand-Design.jpg', '0', 'NCFE', '', '', '', '', '', '', '', 'design'),
(11, 'http://marksandbox.esy.es/images/Northgate_Estate_Agents_Website.jpg', '0', 'Northgate Estate Agents', '', '', '', '', '', '', '', 'web'),
(12, 'http://marksandbox.esy.es/images/Northgate_To_Let_Board.jpg', '0', 'Northgate Signature', '', '', '', '', '', '', '', 'branding');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfoliolist`
--
ALTER TABLE `portfoliolist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfoliolist`
--
ALTER TABLE `portfoliolist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
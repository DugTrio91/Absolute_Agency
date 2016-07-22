-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2016 at 08:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absolute_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfoliolist`
--

CREATE TABLE `portfoliolist` (
  `ID` int(11) NOT NULL,
  `portfolioImage` varchar(1000) NOT NULL,
  `portfolioText` varchar(1000) NOT NULL,
  `workType` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfoliolist`
--

INSERT INTO `portfoliolist` (`ID`, `portfolioImage`, `portfolioText`, `workType`) VALUES
(1, 'http://marksandbox.esy.es/images/Baker_Furniture_Brochure_Design.jpg', 'Baker Furniture', 'design'),
(2, 'http://marksandbox.esy.es/images/Black_Mulberry_Loyalty_Card_Design-.jpg', 'The Black Mulberry', 'branding'),
(3, 'http://marksandbox.esy.es/images/Blagdon_Kitchen_Advert-Absolute.jpg', 'Blagdon Kitchen Design', 'design'),
(4, 'http://marksandbox.esy.es/images/DraytonPartners_Stationery_Design-Absolute.jpg', 'Drayton Partners', 'stationary'),
(5, 'http://marksandbox.esy.es/images/E-Book_Covers_Design.jpg', 'James T. Raydel', 'illustration'),
(6, 'http://marksandbox.esy.es/images/Genetix_Logo_Design.jpg', 'Genetix', 'branding'),
(7, 'http://marksandbox.esy.es/images/Get_Brindled_PR_Business_Card_Design.jpg', 'Get Brindled', 'branding'),
(8, 'http://marksandbox.esy.es/images/Interior_Supply_Responsive_Web_Design.jpg', 'Interior Supply', 'web'),
(9, 'http://marksandbox.esy.es/images/Laelia_packaging_concepts.jpg', 'Laelia London', 'branding'),
(10, 'http://marksandbox.esy.es/images/NCFE-Exhibition-Stand-Design.jpg', 'NCFE', 'design'),
(11, 'http://marksandbox.esy.es/images/Northgate_Estate_Agents_Website.jpg', 'Northgate Estate Agents', 'web'),
(12, 'http://marksandbox.esy.es/images/Northgate_To_Let_Board.jpg', 'Northgate Signature', 'branding');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

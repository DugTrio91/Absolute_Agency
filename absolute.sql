-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2017 at 02:44 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `absolute`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `colourLogo` varchar(300) CHARACTER SET swe7 NOT NULL,
  `clientName` varchar(300) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `colourLogo`, `clientName`) VALUES
(13, '../images/logos/colour/colour-cache-cmyk.png', 'Colour Cache'),
(14, '../images/logos/colour/Colour-Drayton_Logo_Think_Smarter_SPOT.png', 'Drayton Partners'),
(15, '../images/logos/colour/Colour-InteriorSupply.png', 'Interior Supply'),
(16, '../images/logos/colour/Colour-KANUKA_TEA_HOUSE.png', 'Kana Tea'),
(17, '../images/logos/colour/colour-ncfe_logo.png', 'NCFE'),
(18, '../images/logos/colour/Northumbria-Police.png', 'Northumbria Police'),
(19, '../images/logos/colour/Colour-SLOW-SHOPPING.png', 'Slow Shopping'),
(20, '../images/logos/colour/Colour-Northgate_Signature.png', 'Northgate Signature'),
(21, '../images/logos/colour/Colour-PG-logo.png', 'P&G'),
(22, '../images/logos/colour/Colour-supercasino.png', 'Super Casino'),
(23, '../images/logos/colour/Baker_furniture_logo-RGB-549EC.png', 'Baker Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `portfoliolist`
--

CREATE TABLE `portfoliolist` (
  `ID` int(11) NOT NULL,
  `coverImage` varchar(100) CHARACTER SET swe7 NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfoliolist`
--

INSERT INTO `portfoliolist` (`ID`, `coverImage`, `logo`, `portfolioTitle`, `aboutIntro`, `image2`, `aboutClient`, `image3`, `image4`, `aboutDesign`, `finalImage`, `workType`) VALUES
(1, 'images/portfolio/Baker_Furniture_Brochure_Design.jpg', '', 'Baker Furniture', '<p><em>Flank t-bone ribeye picanha turducken, frankfurter turkey alcatra venison shank. Fatback strip steak landjaeger short ribs jerky. Landjaeger swine short loin leberkas, boudin pork frankfurter chicken salami ball tip. Rump strip steak tri-tip corned beef pork chop andouille turducken tail shank flank doner picanha pancetta filet mignon pig. Pork loin ham hock short loin short ribs bacon pork. Drumstick sirloin strip steak venison t-bone alcatra. Capicola pig rump frankfurter meatball biltong prosciutto short loin tail cow ribeye beef ribs.</em></p>', '', '<p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>', '', '', '<p>Bacon ipsum dolor amet tenderloin salami strip steak jerky ball tip pork chop, doner spare ribs rump swine corned beef pancetta. Turducken sausage picanha, kevin prosciutto flank pancetta. Beef jerky sausage jowl ham hock short loin bacon kevin pork belly kielbasa turkey cow hamburger. Pork loin frankfurter salami drumstick, short ribs rump tri-tip hamburger pork sausage pastrami kevin cupim tongue.</p>', '', ''),
(2, 'images/portfolio/Black_Mulberry_Window.jpg', 'images/portfolio/Black_Mulberry_logo.png', 'The Black Mulberry', 'Legend has it that the tree was planted during the reign of King James 1 and is over 400 years old. At the time the King was trying to encourage the development of a national silk industry. Sadly the much sought after silk trade never took off as silkworms only feed off the white mulberry tree, leaving this lovely Black Mulberry to enjoy its days standing proudly beside the Weeping Willow watching over the River Nidd.', 'http://marksandbox.esy.es/images/Black_Mulberry_Menu.jpg', 'The <strong>Rascals Cafe</strong> approached us to rename and rebrand their traditional cafe on Knaresbrough Waterside. Situated in a market town rich in history, they wanted a name that had historical and regional relevance. Working with the client we discovered the story of The Black Mulberry.', 'http://marksandbox.esy.es/images/Black_Mulberry_Invitation_Design.jpg', 'http://marksandbox.esy.es/images/Black_Mulberry_Logo_Design-Absolute.jpg', 'We created a contemporary yet rustic feel, that was applied to a suite of marketing materials including the design of menus, loyalty cards, signage and invitations, as well as setting up and managing their social media channels.', 'http://marksandbox.esy.es/images/Black_Mulberry_Loyalty_Card_Design-.jpg', 'branding'),
(3, 'images/portfolio/Blagdon_Kitchen_Advert-Absolute.jpg', '0', 'Blagdon Kitchen Design', '', '', '', '', '', '', '', 'design'),
(4, 'images/portfolio/DraytonPartners_Stationery_Design-Absolute.jpg', '0', 'Drayton Partners', '', '', '', '', '', '', '', 'stationary'),
(5, 'images/portfolio/E-Book_Covers_Design.jpg', '0', 'James T. Raydel', '', '', '', '', '', '', '', 'illustration'),
(6, 'images/portfolio/Genetix_Logo_Design.jpg', '0', 'Genetix', '', '', '', '', '', '', '', 'branding'),
(7, 'images/portfolio/Get_Brindled_PR_Business_Card_Design.jpg', '0', 'Get Brindled', '', '', '', '', '', '', '', 'branding'),
(8, 'images/portfolio/Interior_Supply_Responsive_Web_Design.jpg', '0', 'Interior Supply', '', '', '', '', '', '', '', 'web'),
(9, 'images/portfolio/Laelia_packaging_concepts.jpg', '0', 'Laelia London', '', '', '', '', '', '', '', 'branding'),
(10, 'images/portfolio/NCFE-Exhibition-Stand-Design.jpg', '0', 'NCFE', '', '', '', '', '', '', '', 'design'),
(11, 'images/portfolio/Northgate_Estate_Agents_Website.jpg', '0', 'Northgate Estate Agents', '', '', '', '', '', '', '', 'web'),
(12, 'images/portfolio/Northgate_To_Let_Board.jpg', '0', 'Northgate Signature', '', '', '', '', '', '', '', 'branding');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`) VALUES
(1, 'absoluteadmin', '$2y$10$aeFBTIf0A8zKEkAK96KOS.XWJvvaPm7KbTwA4f5lF6v03X4Jynzeu', 'absolute@absolute.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfoliolist`
--
ALTER TABLE `portfoliolist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `portfoliolist`
--
ALTER TABLE `portfoliolist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=2;
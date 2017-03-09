-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 09, 2017 at 10:14 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `absolute`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(8) NOT NULL,
  `datetime` datetime NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `summary` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'images/blog/default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `datetime`, `title`, `description`, `summary`, `image`) VALUES
(1, '2016-03-02 00:00:00', 'Website Launch: Drayton Partners', '<p>Over the past 12 months we’ve worked closely with Drayton Partners to re-brand and define their brand positioning. We’ve developed their brand personality to reflect their values and created a seamless brand experience across various marketing materials, from their office interior to the new fully responsive website.\n\nCollaborating with a hand picked team of top creatives, we crafted the visual style, photography, tone of voice and user experience to create an engaging brand that stands out and communicates effectively to its industry sector.\n\nThe new website embodies their brand ethos of ‘THINK SMARTER’ in every element, from the lifestyle videography on the homepage, to the smarter contact forms and slick animation. It really has been an exciting project to develop the brand, and see it brought to life through the experience of the website.\n\nVisit www.draytonpartners.com to see the website in action', '<p>We are delighted to launch a new website for Drayton, one of the UK’s leading executive recruitment partners.', 'images/blog/Drayton_Partners_Absolute_Agency.jpg'),
(2, '2016-06-02 01:00:00', 'Website Launch: Kanuka Tea', '<p>Kanuka have over 40 of the finest teas from around the world, bringing their customers only the very best of blends. They have a fantastic selection, with something for everyone. If you’re a classic tea drinker there’s a whole section with over 18 teas to choose from. For the more adventurous why not head to the Naughty tea section where you can choose from the likes of Popcorn Tea, Tutti Frutti Tea or, with Wimbledon fast approaching, why don’t you cast aside the Pimms and sample some Strawberries and Cream Tea.\n\nThe brief was to create a fully responsive website, which looks stylish and creates a great user experience. We used WooCommerce to ensure first-rate functionality and set about designing a sleek, uncluttered, modern look and feel for the site. So, why not pop the kettle on and take a look? Maybe you’ll be tempted to try a new type of brew!\n\nwww.kanukatea.com', '<p>Web design is thirsty work, so we were delighted when approached by Kanuka Tea to design and develop a new e-commerce website for their luxury loose leaf tea brand.', 'images/blog/Kanuka-Tea-Website-Design-770x428.jpg'),
(3, '2016-09-02 02:00:00', 'Slow Shopping initiative picks up a pace', '<p>Shopping is an essential part of everyday life but for those with dementia, anxiety or other mental illness it can be an overwhelming experience. Slow Shopping offers dedicated times within the week where staff are aware of the needs of their shoppers and allows them time and space to shop. \n\nWhen Katherine approached Absolute to design her marketing collateral and website I was keen to get involved as my mother-in-law has dementia, and is the very type of person Slow Shopping has set out to help.\n\nI was so proud to be at the launch in Sainsbury’s Gosforth earlier this week. Since the launch, the initiative has picked up quite a pace, Katherine has been approached by several high street stores and some of the major supermarkets who are keen to roll out the initiative across the UK. It has also been featured on the BBC, ITV, in The Huffington Post and Mashable.\n\nIf you’d like to find out more about Slow Shopping go to www.slowshopping.org.uk', '<p>Every so often in this job you’re approached by a client who strikes an emotional chord. Katherine Vero’s Slow Shopping initiative was one of those instances.', 'images/blog/Slow_Shopping_Absolute_Agency-1.jpg'),
(4, '2017-02-20 19:21:00', 'PRESS RELEASE: North East design agency double team and turnover in 12 months', '<p>Based at the Northern Design Centre in Gateshead, where they have just moved into larger office space, the team which also includes account manager Clare Hampton, digital marketer Louise Elsdon and creative Michael Watts have ambitious plans to grow, whilst retaining the intimacy and creativity of the small team environment. Offering a range of services across brand, design, web and digital, the team pride themselves on being able to deliver great solutions to businesses large or small with work including brand audits, strategy, websites and design.\n\nHolding senior positions at some of the North East’s highest profile marketing agencies, the team have worked for global super brands including L’Oréal, Mercedes-Benz, Nando’s and Tommee Tippee, and national brands, One North East, Bellway, NHS, Bet365, Berghaus, Barker & Stonehouse and Tyne & Wear Metro.\n\nCombining their expertise with a friendly and transparent approach, the team at Absolute have a growing client list including contracts with NCFE and Baker Furniture and have completed projects for Northumbria Police, Procter and Gamble, Kanuka Tea, and Drayton Partners.  With a passion and growing niche for the interiors sector, the team also have experience working within retail, recruitment and the public sector.\n\nSarah McCrady, Founder and Design Director at Absolute Agency said;\n\n“It’s been an incredible couple of years at Absolute and it’s hard to believe how much we have achieved in a such a small space of time. I remember the day Absolute was born back in 2014… starting with a chat, a glass of wine and a huge leap of faith!\n\nWith the team’s collective experience working at a number of the region’s top design agencies we knew we had both the drive, approach and experience to make it happen. We were keen to work for a range of clients, expanding into different sectors including interiors which we share a real passion for. We also wanted to enjoy the flexibility and creative license that comes with owning your own business.  With four of us being parents, having that flexibility and work life balance was certainly a key driving force.”\n\nThe team pride themselves on having a simple approach to business which is to ‘work hard and be nice to people’and have used this ethos alongside their client’s reference to them being ‘absolute stars’ to create their own definitive brand and identify.\n\nSarah McCrady added;\n\n“For us, Absolute defines being the best at what we do and not compromising on delivering anything less. As a team we often talk about how lucky we are to have chosen design as a career and even after all these years we still love what we do. The most rewarding part is seeing our client’s grow, building brands that really encapsulate the essence of who they are and knowing that we have been part of that journey with them.”\n\nTo support their expansion, the team recently moved into larger office space within the Northern Design Centre as they continue to grow and build their client portfolio.', '<p>Founded by former colleagues Sarah McCrady and Abbie Hartshorn back in January 2015, Absolute Agency who provide branding and design solutions to a range of businesses across the North East and beyond, are shining bright as they expand their team to 5 and double their turnover to 6 figures in the last 12 months.', 'images/blog/Absolute_Agency-1.jpg');

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
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL DEFAULT 'https://twitter.com/absolute_hello',
  `instagram` varchar(50) NOT NULL DEFAULT 'https://www.instagram.com/absolute_agency/'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `image`, `twitter`, `instagram`) VALUES
(1, 'Abbie Hartshorn', 'Creative Director', 'images/team/58c01afcb8a7c0.68642245.jpg', '', ''),
(2, 'Sarah McCrady', 'Design Director', 'images/team/58c05bc6c05e99.74752579.jpg', '', ''),
(3, 'Louise Elsdon', 'Account Director', 'images/team/58c05d49e5fb15.35283604.jpg', '', ''),
(4, 'Clare Hampton', 'Account Director', 'images/team/58c05d6622cf09.06414374.jpg', '', ''),
(7, 'Micheal Watts', 'Senior Creative', 'images/team/58c1c4df73f9e8.84801244.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `client` varchar(50) NOT NULL,
  `testimonial` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `portfoliolist`
--
ALTER TABLE `portfoliolist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=2;
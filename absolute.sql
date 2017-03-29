-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 29, 2017 at 01:28 PM
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
(4, '2017-02-20 19:21:00', 'PRESS RELEASE: North East design agency double team and turnover in 12 months', '<p>Based at the Northern Design Centre in Gateshead, where they have just moved into larger office space, the team which also includes account manager Clare Hampton, digital marketer Louise Elsdon and creative Michael Watts have ambitious plans to grow, whilst retaining the intimacy and creativity of the small team environment. Offering a range of services across brand, design, web and digital, the team pride themselves on being able to deliver great solutions to businesses large or small with work including brand audits, strategy, websites and design.\n\nHolding senior positions at some of the North East’s highest profile marketing agencies, the team have worked for global super brands including L’Oréal, Mercedes-Benz, Nando’s and Tommee Tippee, and national brands, One North East, Bellway, NHS, Bet365, Berghaus, Barker & Stonehouse and Tyne & Wear Metro.\n\nCombining their expertise with a friendly and transparent approach, the team at Absolute have a growing client list including contracts with NCFE and Baker Furniture and have completed projects for Northumbria Police, Procter and Gamble, Kanuka Tea, and Drayton Partners.  With a passion and growing niche for the interiors sector, the team also have experience working within retail, recruitment and the public sector.\n\nSarah McCrady, Founder and Design Director at Absolute Agency said;\n\n“It’s been an incredible couple of years at Absolute and it’s hard to believe how much we have achieved in a such a small space of time. I remember the day Absolute was born back in 2014… starting with a chat, a glass of wine and a huge leap of faith!\n\nWith the team’s collective experience working at a number of the region’s top design agencies we knew we had both the drive, approach and experience to make it happen. We were keen to work for a range of clients, expanding into different sectors including interiors which we share a real passion for. We also wanted to enjoy the flexibility and creative license that comes with owning your own business.  With four of us being parents, having that flexibility and work life balance was certainly a key driving force.”\n\nThe team pride themselves on having a simple approach to business which is to ‘work hard and be nice to people’and have used this ethos alongside their client’s reference to them being ‘absolute stars’ to create their own definitive brand and identify.\n\nSarah McCrady added;\n\n“For us, Absolute defines being the best at what we do and not compromising on delivering anything less. As a team we often talk about how lucky we are to have chosen design as a career and even after all these years we still love what we do. The most rewarding part is seeing our client’s grow, building brands that really encapsulate the essence of who they are and knowing that we have been part of that journey with them.”\n\nTo support their expansion, the team recently moved into larger office space within the Northern Design Centre as they continue to grow and build their client portfolio.', '<p>Founded by former colleagues Sarah McCrady and Abbie Hartshorn back in January 2015, Absolute Agency who provide branding and design solutions to a range of businesses across the North East and beyond, are shining bright as they expand their team to 5 and double their turnover to 6 figures in the last 12 months.', 'images/blog/Absolute_Agency-1.jpg'),
(6, '2017-03-14 10:31:09', 'What our clients say about us: Hannah Raven of Raven Kitchen Design', '<p>We love interior and lifestyle brands here at Absolute, so when Raven Kitchen Design,&nbsp;the only North East provider of SieMatic kitchens&nbsp;asked us to work with them through a rename and rebrand to establish their position in the market, we&nbsp;couldn&rsquo;t wait to get started.</p>\n<p><br><br></p>\n<p>Now the project is complete we asked Hannah Raven about her absolute experience:</p>\n<p><br><br></p>\n<p><strong>Do you feel the brand now aligns with your objectives?&nbsp;</strong><br />It was a big decision to rebrand from Blagdon Kitchen Design, which was an established brand but wasn&rsquo;t right for the new direction of our business. Having worked with Absolute since their inception, we felt confident you&nbsp;could help us establish the new brand, Raven Kitchen Design. Now the&nbsp;name is starting to become well known within the industry and the quality of the branding really reflects the quality of our products and services.</p>\n<p><br><br></p>\n<p><strong>Do you feel that you have more confidence when approaching clients with your marketing collateral?&nbsp;</strong><br />Yes, I particularly love handing out our business cards. They look so professional and really reflect our business.</p>\n<p><br><br></p>\n<p><strong>Are there any marketing services you would find useful for us to offer?&nbsp;</strong><br />Not that I can think of, everything you have offered so far has been excellent. You haven&rsquo;t had to say no to any of our marketing requests.&nbsp;</p>\n<p><br><br></p>\n<p><strong>Do you feel we add value over other agencies? If yes, in what way?&nbsp;</strong></p>\n<p><br><br></p>\n<p><strong>&ldquo;The team has excellent marketing knowledge and your&nbsp;experience of the interiors industry has been invaluable to us.&nbsp;Because you&nbsp;know the sector so well, you&rsquo;ve made suggestions we hadn&rsquo;t even thought of and as a result we&rsquo;re starting to see results.&rdquo;</strong></p>\n<p><br><br></p>\n<p>And as some of the team have worked together for a long time their skills compliment each other and there&rsquo;s a real sense of a team.&nbsp;</p>\n<p><br><br></p>\n<p><strong>In what areas do you feel Absolute could improve our service/offering?&nbsp;</strong><br />Currently I have no suggestions for improvement as our needs are always met with the highest standards.</p>', '<p>As with any service-based company, we aim to provide the best possible service to our clients. To ensure we are, we regularly ask them how they&rsquo;re finding dealing with us and what we could do better. It&rsquo;s important to us to find out whether the work we produce provides tangible results for the people we work with.</p>', 'images/blog/58d8250d2c9194.23874148.jpg'),
(7, '2017-03-06 10:45:20', 'Interior trends 2017: A simpler life', '<p><strong>Hygge</strong></p><br>\n<p>Hygge has grown&nbsp;in popularity with many consumers wanting to experience&nbsp;the art of living well, and creating a calming zen like environment at home. It would seem that consumers are demonstrating a need to eliminate the unnecessary from their lives, decluttering and streamlining their homes in order to make it a place of relaxation. As a result of this desire to find calm, Scandinavian interiors that embody the Hygge ethos, are on the rise amongst consumers.</p>\n<p>&nbsp;</p><br><br>\n<p><strong>Greenery</strong><br />Greenery has been selected by Pantone as the Colour of the Year 2017, which is perhaps a direct result of what we&rsquo;re seeing taking place in global culture. With the undeniable political turmoil of Brexit and Trump (need we say more) society is craving authenticity and a return to simplicity. Greenery is symbolic of nature, a fresh start, growth and vitality, it is therefore breathing new life into interiors and bringing a sense of nature and balance into the home.</p>\n<p>&nbsp;</p><br><br>\n<p><strong>Tribal</strong><br />Like others within this article, this trend is likely to have been born out of a desire for consumers to return to a simpler way of life, and a need to go back to basics. Tribal patterns and natural materials inspired by primitive cultures are being celebrated. The imperfections of natural rustic materials and handmade accessories are bringing a laid-back feel into the home.</p>\n<p>&nbsp;</p><br><br>\n<p><strong>What this means for retailers &nbsp;</strong><br />As well as aesthetically communicating these trends through products and styling, retailers need to communicate a sense of reassurance through their brand. As we&rsquo;ve seen through these trends, householders are looking to bring balance into their lives. We can assume that the brands portraying qualities such as reassurance, trust and authenticity are likely to be most successful in today&rsquo;s uncertain society.</p>', '<p>It appears that with the current social and political environment in an uncertain state, householders are yearning for reassurance and are showing a desire to create an uncluttered, more relaxing environment in the home. With this in mind, we&rsquo;ve explored how this is shaping consumers approach to home interiors.</p>', 'images/blog/58d82860758366.95830424.jpg'),
(8, '2017-03-01 11:01:15', 'Why brand plays a vital role in furniture retailing', 'Mintel research suggests furniture shoppers are spending increasing amounts of time online, before making a purchase in brick and mortar stores, completing their buyer journey by seeing the physical products in store. It would seem they have a need to consolidate what they have already screened out online. This shows that multichannel retailing is still the best business model in this sector. However, it doesn’t mean an online only retailer can’t succeed. There is plenty scope for online shopping growth and as the technology improves to help shoppers visualise products in their home it’s likely to become less of an issue for consumers.<br><br><strong>“To succeed in tomorrow’s furniture market, retailers must create a compelling mix of great retail experiences which seamlessly work together to build a multichannel shopping experience.”  – Jane Westgarth, Senior Market Analyst, Mintel.</strong><br><br>  It’s no secret that mobile has dramatically impacted how consumers interact with brands – their intent-driven, decision-making micro moments have trained them to expect brands to immediately deliver exactly what they are looking for. If a brand wants to make it on to a shoppers ‘go-to’ furniture list, good brand awareness is essential in keeping furniture brands in the consciousness of buyers.<br><br><strong>A shift in advertising</strong><br> With consumers demanding more from the furniture they buy in terms of build quality and materials, advertising and marketing has shifted from focussing on price and discounts, to expressing personality and reassuring customers about quality.<br><br><strong>‘In 2016 personality, trust and emotion remained high on the agenda for furniture advertising.’  – Furniture Retailing, Mintel Report 2016</strong><br><br><strong>So why is brand important?</strong><br>Successful brands connect with their customers and present the correct balance of styling, values and price. With a potential slump on the horizon retailers must continually pay close attention to their branding and value proposition to stay relevant to consumers. They have to craft their image and respond to consumer expectations if they want to attract customers and convince them to buy into their brand.', '<p>The furniture retail market is a competitive arena, despite performing well in recent years the uncertainty of Brexit could be a bad omen for those selling big-ticket items like furniture. Retailers need to ensure their brand is engaging customers by offering more than just discounts.</p>', 'images/blog/58d82c1b94ed78.77917628.jpg'),
(9, '2017-02-28 11:06:54', 'What our clients say about us: Ian Pickett of Drayton Partners', 'Ian approached us initially to perform a brand audit, he felt like their existing brand “Smarter” was possibly a touch arrogant and didn’t really cut to the benefit of using Drayton. He and the team felt a brand evolution was necessary. So we worked closely with them through a brand workshop to uncover the very essence of the business and their vision for the future. Once we developed the brand we then got to work bringing it to life through every aspect of the business, from their website to candidate packs, through to their office interior.<br><br>  <strong>A Q&A with Ian Pickett</strong><br><br>  <strong>Do you feel your brand now accurately reflects your business?</strong><br> Yes. We’ve actually changed the way we recruit to ensure that we are really true to our brand and that it’s not just a hollow statement.<br><br>  <strong>Do you feel that you have more confidence when approaching clients with your marketing collateral?</strong><br> Definitely. Importantly, it’s not just been about the design but also been about the tactile nature of the material. We believe we’ve ended up with materials that show our business in the best possible light.<br><br>  <strong>Have your sales increased as a direct result of the rebrand and marketing materials produced?</strong><br> I’m sure we’ve won work, in fact I know we’ve won work because of the materials, but whether this is true incremental business is impossible to know.<br><br>  <strong>“What I will say, is that some of the most respected businesses, globally, have been impressed by the collateral and have referenced this as a reason they wanted to work with us.”</strong><br><br>  <strong>Have you have received a return on your investment?</strong><br> We believe that we receive a good ROI.<br><br>  <strong>Do you feel we add value over other agencies?</strong><br> Absolute have been more accommodating of our very fussy ways! They are open to ideas but willing to push more adventurous suggestions and are easy to deal with. ', '<p>We always try to live by our mantra of &nbsp;&lsquo;work hard and be nice to people&rsquo;. Forming relationships with our clients and ensuring they are happy is very important to us, read on to find out what Ian Pickett, Founding Partner of Drayton Partners thinks about the outcome of their rebrand and working with Absolute.</p>', 'images/blog/58d82d6e4f6012.67083695.jpg');

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
  `logo` varchar(200) NOT NULL DEFAULT 'images/absolute_logo.png',
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
(15, 'images/portfolio/58d6dc4dd9c491.91099698.jpg', 'images/portfolio/58d6dc4dda6272.17473846.png', 'Baker Furniture', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d6dc4dda6ef6.59747151.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d6dc4dda7869.95663114.jpg', 'images/portfolio/58d6dc4dda8180.23631443.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d6dc4dda8a53.68009145.jpg', 'design'),
(16, 'images/portfolio/58d6ddc09d46b9.40349229.jpg', 'images/portfolio/58d6ddc09d6722.22776698.png', 'Black Mulberry', '<p>Legend has it that the tree was planted during the reign of King James 1 and is over 400 years old. At the time the King was trying to encourage the development of a national silk industry. Sadly the much sought after silk trade never took off as silkworms only feed off the white mulberry tree, leaving this lovely Black Mulberry to enjoy its days standing proudly beside the Weeping Willow watching over the River Nidd.</p>', 'images/portfolio/58d6ddc09d78d7.50000080.jpg', '<p>The Rascals Cafe approached us to rename and rebrand their traditional cafe on Knaresbrough Waterside. Situated in a market town rich in history, they wanted a name that had historical and regional relevance. Working with the client we discovered the story of The Black Mulberry.</p>', 'images/portfolio/58d6ddc09d86e2.34334913.jpg', 'images/portfolio/58d6ddc09d9288.13213416.jpg', '<p>We created a contemporary yet rustic feel, that was applied to a suite of marketing materials including the design of menus, loyalty cards, signage and invitations, as well as setting up and managing their social media channels.</p>', 'images/portfolio/58d6ddc09d9df9.30406112.jpg', 'design'),
(17, 'images/portfolio/58d6def3b43735.34424288.jpg', 'images/portfolio/58d6def3b48e74.44053762.png', 'Northgate Signature', '<p>Northgate Signature specialise in the marketing of high quality, distinctive properties.&nbsp;</p>', 'images/portfolio/58d6def3b49c00.43697406.jpg', '<p>They approached us to develop a new brand identity, responsive website and a whole suite of marketing materials for the launch of their high-end branch.</p>', 'images/portfolio/58d6def3b4ac89.10146566.jpg', 'images/portfolio/58d6def3b4b8c8.78241786.jpg', '<p>Working with the client we helped them to communicate their values more effectively and reflect the quality of their service and Signature range throughout their brand.&nbsp;</p>', 'images/portfolio/58d6def3b4c942.57092957.jpg', 'design'),
(18, 'images/portfolio/58d6dff1a114a0.45822483.jpg', 'images/portfolio/58d6dff1a123e1.08230004.png', 'Northgate Estate Agents', '<p>With the launch of their new Signature branch, Northgate Estate Agents approached us to design and build a responsive website that not only reflected their brand values but also catered for their growing number of non-desktop users.</p>', 'images/portfolio/58d6dff1a12fc1.17284432.jpg', '<p>The new site is designed to allow users to search for properties easily and enable more interaction, via the introduction of valuation requests and the ability to book a viewing online.</p>', 'images/portfolio/58d6dff1a13af5.81083205.jpg', 'images/portfolio/58d6dff1a153c1.07821908.jpg', '<p>To find out more or to discuss your website design project please&nbsp;<a title="Contact" href="http://www.absolute-agency.co.uk/contact/">get in touch</a></p>', 'images/portfolio/58d6dff1a16186.70406109.jpg', 'design'),
(19, 'images/portfolio/58d6e0e98be764.85461202.jpg', 'images/portfolio/58d6e0e98bfe44.90200194.png', 'NCFE', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d6e0e98c0dd6.92935334.jpeg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d6e0e98c3290.44053147.jpg', 'images/portfolio/58d6e0e98c1996.29191756.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d6e0e98c3c64.41947483.jpeg', 'design'),
(20, 'images/portfolio/58d8035471c9b0.99195719.jpg', 'images/portfolio/58d8035471d837.74910535.png', 'Laelia London', '<p>These logo and packaging concepts are part of an ongoing project with an organic cosmetics company.</p>', 'images/portfolio/58d8035471e547.90288626.jpg', '<p>Initially we worked with the client to map out their &lsquo;space&rsquo; in the cosmetics industry and find their brand position</p>', 'images/portfolio/58d8035471f529.95182913.jpg', 'images/portfolio/58d80354720423.11329058.jpg', '<p>This enabled us to generate a name and create a visual style that would fit in the market, and reflect the organic yet clinical properties that come from the extensive scientific development behind the products.</p>', 'images/portfolio/58d803547212b4.83963346.jpg', 'design'),
(21, 'images/portfolio/58d804267ac3e0.07279370.jpg', 'images/portfolio/58d804267ad241.55968614.png', 'Interior Supply', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d804267ae275.64510733.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d804267af0f8.28193362.jpg', 'images/portfolio/58d804267b0687.94133239.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d804267b18e0.07758136.jpg', 'design'),
(22, 'images/portfolio/58d806ef214790.64032058.jpg', 'images/portfolio/58d806ef215628.70382074.png', 'Get Brindled', '<p>Get Brindled are a PR, social media and events company.</p>', 'images/portfolio/58d806ef216553.62120647.jpg', '<p>They approached us to develop a bright and feminine identity that reflects the companies mission statement of &lsquo;Putting some fun into telling people how great your company is&rsquo;.</p>', 'images/portfolio/58d806ef2174e8.18354865.jpg', 'images/portfolio/58d806ef2183c1.06222750.jpg', '<p>If you would like to us to design an effective identity for your company please get in touch.</p>', 'images/portfolio/58d806ef2191c7.69360506.jpg', 'design'),
(23, 'images/portfolio/58d8080c81e712.58515683.jpg', 'images/portfolio/58d8080c81f918.70756426.png', 'Genetix', '<p>Genetix are a startup fitness and nutrition company that required a series of logo designs and a colour palette to reflect the current style trends in the fitness clothing industry.</p>', 'images/portfolio/58d8080c8207b7.32740904.jpg', '<p>We thoroughly researched the fitness clothing and trainers market to develop a visual style, which will now be applied to range of clothing and products.</p>', 'images/portfolio/58d8080c821a96.64951201.jpg', 'images/portfolio/58d8080c822cf9.13090208.jpg', '<p>Do you require an identity for your startup business? Please get in touch.</p>', 'images/portfolio/58d8080c823da8.74439641.jpg', 'design'),
(24, 'images/portfolio/58d80bd7987388.17998456.jpg', 'images/portfolio/58d80bd7988199.39765064.png', 'James T. Raydel', '<p>The award winning author James T. Raydel approached us to design eBook covers for there release on Amazon.</p>', 'images/portfolio/58d80bd7988a89.70829890.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d80bd7989464.31827759.jpg', 'images/portfolio/58d80bd7989cc5.65333123.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d80bd798a576.76805374.jpg', 'design'),
(25, 'images/portfolio/58d80dc24d5987.94500385.jpg', 'images/portfolio/58d80dc24d7bb5.22409606.png', 'Drayton Partners', '<p>We worked closely with Drayton Partners to re-brand and define their brand positioning. Developed their brand personality to reflect their values and created a seamless brand experience across various marketing materials, from their office interior to the new fully responsive website.</p>', 'images/portfolio/58d80dc24da7e9.11024974.jpg', '<p>Collaborating with a hand picked team of top creatives, we crafted the visual style, photography, tone of voice and user experience to create an engaging brand that stands out and communicates effectively to its industry sector.</p>', 'images/portfolio/58d80dc24db727.83705813.jpg', 'images/portfolio/58d80dc24dcc91.18126984.jpg', '<p>The new website embodies their brand ethos of &lsquo;THINK SMARTER&rsquo; in every element, from the lifestyle videography on the homepage, to the smarter contact forms and slick animation. It really has been an exciting project to develop the brand, and see it brought to life through the experience of the website.</p>\r\n<p>Visit&nbsp;<a href="http://www.draytonpartners.com/">www.draytonpartners.com</a>&nbsp;to see the website in action</p>', 'images/portfolio/58d80dc24dda94.82116887.jpg', 'design'),
(27, 'images/portfolio/58d80f9a814d93.32014491.jpg', 'images/portfolio/58d80f9a815974.67675056.png', 'Blagdon Kitchens', '<p>Blagdon Kitchens approached us to develop a visual style for their printed advertising.We worked with them to develop a series of adverts that appeal to their target audience of AB consumers; showcasing the contemporary style, quality and craftsmanship.</p>', 'images/portfolio/58d80f9a816829.17560340.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d80f9a8177c4.63985436.jpg', 'images/portfolio/58d80f9a818594.94859064.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'images/portfolio/58d80f9a819576.68128531.jpg', 'design');

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

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `client`, `testimonial`) VALUES
(1, 'Tony Raven - Blagdon Kitchens', 'As well as producing excellent results they are a pleasure to work with, combining an extremely professional approach with a relaxed and cheerful manner, and all the time making sure they keep to our brief and within budget. I would have no hesitation recommending Absolute to any potential new clients.                                                                                '),
(3, 'Paul - Genetix Ltd', 'We worked with Abbie and the Absolute team to develop a logo and brand presence for a new fitness clothing line we’re launching. The Absolute approach was professional, efficient, enthusiastic and tailored exactly to our requirements. We’re delighted with the final outcome and would have no hesitation in recommending Abbie and her team.'),
(4, 'Ian Pickett - Drayton Partners', 'Absolute have been great to work with. They have led us through a broad project and from start to finish they have been responsive, engaging, and understanding.  The communication has been first-rate, as has the service.  I have no hesitation in recommending Absolute.');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `portfoliolist`
--
ALTER TABLE `portfoliolist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=2;
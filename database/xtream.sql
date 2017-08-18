-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 04:21 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xtream`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'dumindu', 'dumindu');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catID` int(255) NOT NULL,
  `catName` varchar(100) NOT NULL,
  `imagepath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `catName`, `imagepath`) VALUES
(1, 'Paragliding', 'images/para.jpg'),
(2, 'Parachuting', 'images/para2.jpg'),
(3, 'Mountain Biking\r\n', 'images/mount.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_Id` int(255) NOT NULL,
  `cust_Name` varchar(60) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_Id`, `cust_Name`, `comment`) VALUES
(2, 'Dashan', 'I came to the course looking to build a foundation in New Zealand software development market.  An excellent program â€“ I learned a lot. Very much liked the approach. The content was quite practical. This resulted in finding my first job in Auckland soon after completion of the technical sessions. '),
(3, 'Dumindu', 'sb');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `user_Id` int(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_Id`, `product_code`, `product_name`, `product_price`, `product_qty`) VALUES
(1, 0, '', '', '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `catID` int(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_img_name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catID`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(6, 3, 'PR04', 'Bell Coast 2017', 'his platform is available in a single or a double chainring configuration. The Bluto suspension fork on the Single Scoop and Scoop Double Deluxe provides extra comfort and added control for the more adventurous rider.', '2.jpg', '67'),
(7, 3, 'PR05', 'Bell Coast (MIPS Equipped), 2016', 'Great style meets cool comfort. The all-new Coast features an adaptable design that''s an easy match with what you wear and how you ride. This model features MIPS (Multi-Directional Impact ', '3.jpg', '267'),
(8, 3, 'PR06', 'Full Suspension Bike', '2016 LAPIERRE RAID FX YELLOW/BLUE', '4.jpg', '1599'),
(9, 3, 'PR07', 'Full Suspension Bike', '2016 Kona Precept 150', '5.jpg', '2400'),
(11, 2, 'PR01', 'PERFORMANCE DESIGNS PULSE', 'The Pulse can give you stress free on heading openings, a very flat glide and easy landings. It is highly responsive, very capable, and lots of fun to fly.', 'p1.jpg', '2225'),
(12, 2, 'PR02', 'ICARUS SAFIRE', 'Whether you are fresh off student status or a veteran skydiver, the Safire2 has something to offer any skill level. This wing will satisfy the skydiver looking for a lightly elliptical modern flavor.', 'p2.jpg', '2075'),
(13, 2, 'PR03', 'PERFORMANCE DESIGNS STORM', 'Thunder, Lightning, Wind and Rainâ€¦ oh, the canopy. With great openings and a powerful flare at landing, this truly is the seven cell that thinks itâ€™s a nine cell. ', 'p3.jpg', '2115'),
(14, 2, 'PR08', 'ALTI-2 ALTIMASTER GALAXY GLOW FACE', 'The galaxy has an altitude range of 18,000 feet MSL, marked in 250 foot increments. The face of the galaxy is highlighted with a yellow caution and red warning arc that starts at 3,000 feet. The galaxy contains a durable mechanism made from temperature co', 'p4.jpg', '250'),
(16, 2, 'PR09', 'SUNPATH JAVELIN ODYSSEY', 'The Javelin Odyssey has set the standard for safety, comfort and durability since 2001. ', 'p5.jpg', '2495'),
(17, 1, 'PR10', 'Cookie G3 Skydiving Helmet', 'The Cookie G3 helmet is the must-have full-face helmet for skydivers and wind tunnel flyers alike. Jumpers rave about the G3 comfort, quality, flip-up lens security, color options and the number of mounting options for the GoPro and Sony Action Cams.', 'pr1.jpg', '479'),
(18, 1, 'PR11', 'Vented Arch Skydiving Goggles', 'The Arch goggle features a patent pending soft elastomer frame that provides a comfortable, cool, and dry fit on any face size or shape. The ventilated lens allows just enough air in to prevent fogging and keep your vision clear when you need it most. ', 'pr2.jpg', '45'),
(19, 3, 'PR12', 'Trek 2017 X-Caliber 7 27.5 MTB', 'Caution: X-Caliber will get you hooked. It packs all of Trekâ€™s XC race hardtail experience into a light, fast, race-ready bike that pairs the right wheel size with each frame size', 'b2.jpg', '944'),
(20, 3, 'PR13', 'Giant 2017 XTC Advanced 27.5+ 2 MTB', 'Handcrafted with lightweight Advanced grade composite, this all-new hardtail gives you unlimited options for off-road adventure. In this 27.5+ form, itâ€™s prefect for adventure-style singletrack trekking.', 'b3.jpg', '3599'),
(23, 3, 'PR14', 'Giant 2017 Womens Bliss ', 'With an emphasis on comfort, stability and style, the Bliss features a womenâ€™s-specific frame that makes it easy to hop on and pedal your way around town. With an ALUXX aluminium frame, itâ€™s lightweight, efficient and relaxed', 'b4.jpg', '531'),
(24, 3, 'PR15', 'SILVERBACK SCOOP FATTY ORANGE', 'Expect to be riding terrain previously not explored on a bicycle! Fat tyres provide excellent traction in all terrains such as snow, sand and rocks. Float over your local terrain and remain comfortable while the large air volume soaks up the bumps. ', 'b5.jpg', '1499'),
(25, 1, 'PR15', 'Skywatch 1 aneometer', 'The Skywatch Xplorer 1 is built to do one thing, measure wind speed. \r\nIts small size allows it to fit in any pocket, yet its case design makes it easy to grasp. \r\nSingle button operation allows for easy measurements, and the display has a backlight; hand', 'prg1.jpg', '98'),
(26, 1, 'PR16', 'Access back', '2013 sees an overhauling of our school harness line with redefined contours to facilitate the transition from running to seating.\r\n\r\nSupair have worked the ACCESS models as well; improving their look, giving them all the bells and whistles anyone could wi', 'prg2.jpg', '548'),
(27, 1, 'PR16', 'Supair Acro Base System Harness', 'The supair acro base system takes less tha 5 seconds to jettison the paragliding wing and for the steerable rescue parachute to fully open. Stiff monoblock bucket-seat style.\r\n\r\nStiff monoblock bucket-seat style.\r\nHigh passive safety level in addition to ', 'prg3.jpg', '3745');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_Id` int(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(15) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `st_num` int(10) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` int(10) NOT NULL,
  `hear` varchar(50) NOT NULL,
  `interest` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_Id`, `fname`, `mname`, `lname`, `gender`, `phone`, `mobile`, `email`, `password`, `st_num`, `st_name`, `city`, `country`, `zip`, `hear`, `interest`) VALUES
(2, 'gG', 'j', 'j', 'Male', 988, 999, 'dumidu9praneetha@gmail.com', '', 2244, 'ffkc', 'ffcjc', 'sri', 464, '', ''),
(3, 'gG', 'j', 'j', 'Male', 988, 999, 'dumidu9praneetha@gmail.com', '', 2244, 'ffkc', 'ffcjc', 'sri', 464, '', ''),
(4, 'Dumindu', '', 'Abey', 'News paper', 222, 0, 'dumidu9praneetha@gmail.com', 'dazer12#', 3, 'eh', 'hd', 'dhy', 29, '', ''),
(6, 'Dashan', '', 'Sapthaka', 'Male', 9289191, 0, 'dumindu9praneetha@gmail.com', 'dashan123$', 12, 'eeeedd', 'Auckland', 'sr', 233, 'Social Network', '12');

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `id` int(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `cust_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `GST` decimal(10,2) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`id`, `product_code`, `product_name`, `product_price`, `cust_id`, `quantity`, `total_price`, `GST`, `grand_total`) VALUES
(25, 'PR01', 'Bick', '12.00', 4, 1, '12.00', '1.80', '13.80'),
(26, 'PR02', 'Camp Tent', '35.00', 5, 3, '175.00', '26.25', '201.25'),
(27, 'PR01', 'Bick', '12.00', 5, 5, '60.00', '9.00', '69.00'),
(28, 'PR04', 'Helmets', '67.00', 5, 3, '201.00', '30.15', '231.15'),
(29, 'PR05', 'Helmets', '267.00', 5, 3, '534.00', '80.10', '614.10'),
(30, 'PR06', 'Full Suspension Bike', '1599.00', 5, 2, '3198.00', '479.70', '3677.70'),
(31, 'PR10', 'Cookie G3 Skydiving Helmet', '479.00', 4, 3, '958.00', '143.70', '1101.70'),
(32, 'PR06', 'Full Suspension Bike', '1599.00', 4, 2, '3198.00', '479.70', '3677.70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_Id`);

--
-- Indexes for table `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `test2`
--
ALTER TABLE `test2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

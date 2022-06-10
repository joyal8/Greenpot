-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 07:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plant`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcat`
--

CREATE TABLE `addcat` (
  `cat_id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcat`
--

INSERT INTO `addcat` (`cat_id`, `cname`) VALUES
(23, 'Seeds'),
(22, 'Plants'),
(24, 'lilly flower');

-- --------------------------------------------------------

--
-- Table structure for table `addcatcon`
--

CREATE TABLE `addcatcon` (
  `catcon_id` int(11) NOT NULL,
  `condname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcatcon`
--

INSERT INTO `addcatcon` (`catcon_id`, `condname`) VALUES
(11, 'hanging'),
(10, 'outdoor'),
(9, 'Indore');

-- --------------------------------------------------------

--
-- Table structure for table `addorderdetail`
--

CREATE TABLE `addorderdetail` (
  `ao_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` int(100) NOT NULL,
  `shipcom` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `status` varchar(800) NOT NULL,
  `u_id` int(100) NOT NULL,
  `or_id` int(100) NOT NULL,
  `paymode` varchar(100) NOT NULL,
  `tamount` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addorderdetail`
--

INSERT INTO `addorderdetail` (`ao_id`, `name`, `address`, `state`, `pin`, `shipcom`, `bdate`, `ddate`, `status`, `u_id`, `or_id`, `paymode`, `tamount`) VALUES
(8, 'sheik', 'mangalore', 'swew', 789456, 'flipkart', '02-01-2021', '02-01-2021', 'dispatched', 5, 14, '', 1050),
(9, 'sheik', 'mangalore', 'swew', 789456, '', '', '', '', 5, 15, '', 150),
(10, 'sheik', 'mangalore', 'swew', 789456, 'bbb', 'ggg', 'vvv', 'hhh', 5, 14, '', 1050);

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `b_id` int(11) NOT NULL,
  `sa_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `condname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(800) NOT NULL,
  `discount` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`b_id`, `sa_id`, `name`, `cname`, `condname`, `image`, `aname`, `pname`, `price`, `description`, `discount`, `quantity`) VALUES
(3, 44, 'Lilly flower', '22', 'outdoor', 'upload/photo_2021-07-25_20-13-03.jpg', 'joyal', '', 50, 'nyc flower', 10, 1),
(2, 0, 'sunflower', '22', 'outdoor', 'upload/Petaled_Flowers_Lee_6K.jpg', 'joyal', 'joseph', 50, 'good flower', 10, 1),
(4, 44, 'sunflower', '23', 'hanging', '../../admin/admincontroller/upload/', '', '', 50, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `addsellerbook`
--

CREATE TABLE `addsellerbook` (
  `as_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `condname` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `quantity` int(80) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `sa_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `adminfeedback`
--

CREATE TABLE `adminfeedback` (
  `af_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `u_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `sa_id` int(11) NOT NULL,
  `bk_id` int(100) NOT NULL,
  `u_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `sa_id`, `bk_id`, `u_id`, `quantity`, `title`, `image`) VALUES
(45, 42, 19, 5, 1, 'Arugula Seeds (Rocket Leaves)', '../../admin/admincontroller/upload/arugularocketcultivated_pkt_1.png'),
(46, 0, 2, 6, 3, 'sunflower', 'upload/Petaled_Flowers_Lee_6K.jpg'),
(47, 44, 3, 6, 1, 'Lilly flower', 'upload/photo_2021-07-25_20-13-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ordercheckout`
--

CREATE TABLE `ordercheckout` (
  `or_id` int(11) NOT NULL,
  `u_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` int(100) NOT NULL,
  `paymode` varchar(100) NOT NULL,
  `cardname` varchar(100) NOT NULL,
  `cardno` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `tamount` int(100) NOT NULL,
  `expm` varchar(100) NOT NULL,
  `expy` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordercheckout`
--

INSERT INTO `ordercheckout` (`or_id`, `u_id`, `name`, `email`, `phone`, `address`, `city`, `state`, `pin`, `paymode`, `cardname`, `cardno`, `cvv`, `tamount`, `expm`, `expy`) VALUES
(15, 5, 'sheik', 'test@test.com', '7894561234', 'mangalore', 'sdsd', 'swew', 789456, '', 'sasadasasa', '15454545454545454', '100', 150, '45', '57'),
(14, 5, 'sheik', 'test@test.com', '7894561234', 'mangalore', 'sdsd', 'swew', 789456, '', 'sasadasasa', '1111222233334444', '100', 1050, '05', '2022'),
(16, 6, 'joyal joseph', 'joyaljoseph6317@gmail.com', '06282782564', 'Puthuvakara(H),kannur, ', 'kannur', 'kerala', 670571, '', 'jj', '11111111111111111111111', '123', 210, '10-10-21', '11/22');

-- --------------------------------------------------------

--
-- Table structure for table `orderedproduct`
--

CREATE TABLE `orderedproduct` (
  `ob_id` int(11) NOT NULL,
  `sa_id` int(11) NOT NULL,
  `u_id` int(100) NOT NULL,
  `or_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `b_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderedproduct`
--

INSERT INTO `orderedproduct` (`ob_id`, `sa_id`, `u_id`, `or_id`, `quantity`, `title`, `b_id`, `image`) VALUES
(34, 0, 5, 14, 1, 'Arugula Seeds (Rocket Leaves)', 19, '../../admin/admincontroller/upload/arugularocketcultivated_pkt_1.png'),
(33, 0, 5, 14, 2, 'Areca Palm Plant', 20, '../../admin/admincontroller/upload/arecapalm_eye_1.png'),
(35, 42, 5, 15, 1, 'Arugula Seeds (Rocket Leaves)', 19, '../../admin/admincontroller/upload/arugularocketcultivated_pkt_1.png'),
(36, 0, 6, 16, 3, 'sunflower', 2, 'upload/Petaled_Flowers_Lee_6K.jpg'),
(37, 44, 6, 16, 1, 'Lilly flower', 3, 'upload/photo_2021-07-25_20-13-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `feed` varchar(1000) NOT NULL,
  `b_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `s_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`s_id`, `name`, `phone`, `address`, `email`, `password`) VALUES
(59, 'test', '9696969696', 'india', 'test@gmail.com', '123456'),
(60, 'seller', '7894561237', 'selller', 'seller@seller.com', '123456'),
(61, 'sheik', '7894561234', 'mangalore', 'test@test.com', '12345'),
(62, 'joyal joseph', '06282782564', 'Puthuvakara(H),kannur\r\nPuthuvakara(H),kannur', 'joeljozph007@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `sellerapprove`
--

CREATE TABLE `sellerapprove` (
  `sa_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellerapprove`
--

INSERT INTO `sellerapprove` (`sa_id`, `name`, `phone`, `address`, `email`, `password`) VALUES
(42, 'test ', '9696969696 ', 'india ', 'test@gmail.com ', '123456'),
(43, 'seller ', '7894561237 ', 'selller ', 'seller@seller.com ', '123456'),
(44, 'joyal joseph ', '06282782564 ', 'Puthuvakara(H),kannurPuthuvakara(H),kannur ', 'joeljozph007@gmail.com ', '1234'),
(52, 'joyal joseph ', '06282782564 ', 'Puthuvakara(H),kannurPuthuvakara(H),kannur ', 'joeljozph007@gmail.com ', '1234'),
(46, 'sheik ', '7894561234 ', 'mangalore ', 'test@test.com ', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `sendpayment`
--

CREATE TABLE `sendpayment` (
  `pay_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sa_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cnumber` varchar(100) NOT NULL,
  `expm` int(100) NOT NULL,
  `expy` int(100) NOT NULL,
  `cvv` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `address` varchar(800) NOT NULL,
  `tid` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `email`, `password`) VALUES
(5, 'test', 'test@test.com', '123456\n'),
(6, 'joyal joseph', 'joyaljoseph6317@gmail.com', '1234'),
(7, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcat`
--
ALTER TABLE `addcat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `addcatcon`
--
ALTER TABLE `addcatcon`
  ADD PRIMARY KEY (`catcon_id`);

--
-- Indexes for table `addorderdetail`
--
ALTER TABLE `addorderdetail`
  ADD PRIMARY KEY (`ao_id`);

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `addsellerbook`
--
ALTER TABLE `addsellerbook`
  ADD PRIMARY KEY (`as_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `adminfeedback`
--
ALTER TABLE `adminfeedback`
  ADD PRIMARY KEY (`af_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `ordercheckout`
--
ALTER TABLE `ordercheckout`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `orderedproduct`
--
ALTER TABLE `orderedproduct`
  ADD PRIMARY KEY (`ob_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `sellerapprove`
--
ALTER TABLE `sellerapprove`
  ADD PRIMARY KEY (`sa_id`);

--
-- Indexes for table `sendpayment`
--
ALTER TABLE `sendpayment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcat`
--
ALTER TABLE `addcat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `addcatcon`
--
ALTER TABLE `addcatcon`
  MODIFY `catcon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `addorderdetail`
--
ALTER TABLE `addorderdetail`
  MODIFY `ao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addsellerbook`
--
ALTER TABLE `addsellerbook`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminfeedback`
--
ALTER TABLE `adminfeedback`
  MODIFY `af_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `ordercheckout`
--
ALTER TABLE `ordercheckout`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orderedproduct`
--
ALTER TABLE `orderedproduct`
  MODIFY `ob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `sellerapprove`
--
ALTER TABLE `sellerapprove`
  MODIFY `sa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sendpayment`
--
ALTER TABLE `sendpayment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

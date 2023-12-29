-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2022 at 07:24 PM
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
-- Database: `covneed`
--

-- --------------------------------------------------------

--
-- Table structure for table `needers`
--

CREATE TABLE `needers` (
  `id` int(11) NOT NULL,
  `post_code` varchar(60) NOT NULL,
  `user_code` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(120) NOT NULL,
  `phone` int(15) NOT NULL,
  `post_time` datetime NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `needers`
--

INSERT INTO `needers` (`id`, `post_code`, `user_code`, `first_name`, `title`, `description`, `phone`, `post_time`, `status`) VALUES
(1, 'mjjjbuletb', 'bykqzctszd', 'Nitin', 'Need Oxyegn (Urget)', '', 2147483647, '2021-05-03 09:47:00', 'New'),
(2, 'scghklvslu', 'ustuabaduj', 'Suvigya', 'Oxygen Cylinder', 'To my home', 2147483647, '2021-05-03 09:53:17', 'Busy'),
(3, 'ipxhfhaouu', 'golttyzcuz', 'Nitin ', 'Need Vaccine ', '', 2147483647, '2021-05-03 10:22:50', 'New'),
(4, 'uvzrcmsbru', 'kbdldfiutp', 'Arushi', 'Need Nothing', '', 2147483647, '2021-05-04 14:14:30', 'Remove'),
(5, 'ularqsohnx', 'nexedmsrse', 'Nitin', 'Null ', '!', 2147483647, '2021-05-08 21:33:44', 'On Progress'),
(6, 'rtyqxlgdor', 'nexedmsrse', 'Nitin', 'Null', 'Null\n', 2147483647, '2021-05-11 22:52:44', 'Solved'),
(7, 'tvyizjhben', 'nexedmsrse', 'Nitin', 'No Workkkkkkk!', 'Lol', 2147483647, '2022-04-20 12:17:54', 'Busy'),
(8, 'svqxlscbbp', 'nexedmsrse', 'Nitin', 'Listen Aaaknshaaaa', 'Lol', 2147483647, '2022-04-20 12:19:01', 'New'),
(9, 'flalukbkso', 'oktysarjyn', 'Santosh', 'Need Blood O ', 'Lodckmnakcnak', 2147483647, '2022-04-21 14:50:14', 'Solved'),
(10, 'hqmegkeoku', 'hckgnxnizr', 'Nitin', 'Payment Gateway Integration', '', 2147483647, '2022-04-26 12:09:13', 'New'),
(11, 'xuscqtpujb', 'uufdcibzlh', 'Nitin', 'O  Needed', '', 2147483647, '2022-04-26 13:45:40', 'Busy'),
(12, 'qussrmfkpf', 'uzhulsyink', 'Nitin', 'Need Oxygen', 'need urgently', 2147483647, '2022-04-27 08:15:46', 'Solved'),
(13, 'omymmxhapy', 'whxwsqcnvk', 'Nitin', 'Need Blood A ', 'Anything....', 2147483647, '2022-04-30 13:37:20', 'On Progress');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `user_code` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `type` varchar(60) NOT NULL,
  `verification_code` int(10) NOT NULL,
  `verification_status` tinyint(4) NOT NULL,
  `static_latitude` float NOT NULL,
  `static_longitude` float NOT NULL,
  `dynamic_latitude` float NOT NULL,
  `dynamic_longitude` float NOT NULL,
  `city` varchar(120) NOT NULL,
  `profile_status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user_code`, `username`, `first_name`, `phone`, `type`, `verification_code`, `verification_status`, `static_latitude`, `static_longitude`, `dynamic_latitude`, `dynamic_longitude`, `city`, `profile_status`) VALUES
(1, 'bykqzctszd', 'user_bykqzctszd', 'Nitin', '2147483647', 'helper', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(2, 'frrsqmmtbn', 'user_frrsqmmtbn', 'justin', '2147483647', 'helper', 0, 0, 0, 0, 0, 0, 'Delhi', 3),
(3, 'uswzyocfsc', 'user_uswzyocfsc', '', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, '', 0),
(4, 'ustuabaduj', 'user_ustuabaduj', 'Suvigya', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(5, 'detlogkfic', 'user_detlogkfic', 'Suvigya', '2147483647', 'helper', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(6, 'golttyzcuz', 'user_golttyzcuz', 'Nitin ', '2147483647', 'helper', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(7, 'bsyoniefoq', 'user_bsyoniefoq', 'John', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, 'Greater Noida ', 3),
(8, 'ebzjgjpzjd', 'user_ebzjgjpzjd', '', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, '', 0),
(9, 'uckqvcmsym', 'user_uckqvcmsym', 'Anz', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, 'Bihar', 3),
(10, 'emziobwmtm', 'user_emziobwmtm', '', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, '', 0),
(11, 'sljjwmyjfq', 'user_sljjwmyjfq', 'Lalan', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, 'Buxar', 3),
(12, 'jolvzndqmx', 'user_jolvzndqmx', 'Neha', '2147483647', 'helper', 0, 0, 0, 0, 0, 0, 'Greater Noida ', 3),
(13, 'hdsffpvhuj', 'user_hdsffpvhuj', 'Denver', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(14, 'uodzqqfsmi', 'user_uodzqqfsmi', '', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, '', 0),
(15, 'kbdldfiutp', 'user_kbdldfiutp', 'Arushi', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(16, 'ewwubvlqxg', 'user_ewwubvlqxg', 'Nitin', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(22, 'dlygqnkebe', 'user_dlygqnkebe', 'Check', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, 'Greater Noida ', 3),
(21, 'kuhjmjpyqf', 'user_kuhjmjpyqf', '', '2147483647', 'needer', 0, 0, 0, 0, 0, 0, '', 0),
(23, 'nexedmsrse', 'user_nexedmsrse', 'Nitin', '6202105424', 'helper', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(24, 'tqoqjvwydg', 'user_tqoqjvwydg', 'Suvigya', '8299067451', 'needer', 0, 0, 0, 0, 0, 0, 'NOIDA', 3),
(25, 'rbjyjxvcuu', 'user_rbjyjxvcuu', '', '69494949494', 'needer', 0, 0, 0, 0, 0, 0, '', 0),
(26, 'okossalccr', 'user_okossalccr', 'Nitin ', '9472184736', 'needer', 0, 0, 0, 0, 0, 0, 'Greater Noida ', 3),
(27, 'pqpalpulux', 'user_pqpalpulux', 'Nitin', '6202105421', 'needer', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(28, 'vuwxggcwhh', 'user_vuwxggcwhh', '', '8825395725', 'needer', 0, 0, 0, 0, 0, 0, '', 0),
(29, 'yyrofdbvzg', 'user_yyrofdbvzg', 'Anonymous', '7858994599', 'needer', 0, 0, 0, 0, 0, 0, 'Patna', 3),
(30, 'jytxovjrpu', 'user_jytxovjrpu', 'Nitin', '6202105425', 'needer', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(31, 'fekotdbwog', 'user_fekotdbwog', 'Aakansha', '9650130858', 'needer', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(32, 'oktysarjyn', 'user_oktysarjyn', 'Santosh', '6202105222', 'helper', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(33, 'jwyffoamud', 'user_jwyffoamud', '', '6202105234', 'needer', 0, 0, 0, 0, 0, 0, '', 0),
(34, 'thsaeosnml', 'user_thsaeosnml', 'Aakansha', '9876541234', 'helper', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(35, 'hckgnxnizr', 'user_hckgnxnizr', 'Nitin', '6202102345', 'helper', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(36, 'uufdcibzlh', 'user_uufdcibzlh', 'Nitin', '6202103333', 'helper', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(37, 'uzhulsyink', 'user_uzhulsyink', 'Nitin', '6202105433', 'helper', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(38, 'whxwsqcnvk', 'user_whxwsqcnvk', 'Nitin', '6201205432', 'helper', 0, 0, 0, 0, 0, 0, 'Noida', 3),
(39, 'rwnydcgxab', 'user_rwnydcgxab', 'Nitin', '6202105466', 'needer', 0, 0, 0, 0, 0, 0, 'Noida', 3);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supplier_id` varchar(60) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `address` varchar(160) NOT NULL,
  `supplier_of` varchar(120) NOT NULL,
  `entered_by` varchar(60) NOT NULL,
  `verified_by` varchar(60) NOT NULL,
  `last_checked` datetime NOT NULL,
  `status` varchar(60) NOT NULL,
  `posted_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_id`, `phone_no`, `address`, `supplier_of`, `entered_by`, `verified_by`, `last_checked`, `status`, `posted_on`) VALUES
(1, 'tnvotylaeg', 99999999, 'Noida, Sector 124', 'Oxygen', 'bykqzctszd', 'None', '2022-04-26 20:32:33', 'Verified', '2021-05-03 09:48:04'),
(3, 'hcjiwyrfdm', 2147483647, 'Sector 168, Noida', 'oxygen', 'whxwsqcnvk', 'None', '2022-04-30 13:41:23', 'Null', '2022-04-30 13:40:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `needers`
--
ALTER TABLE `needers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `needers`
--
ALTER TABLE `needers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

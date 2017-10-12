-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 01:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vikn`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `auth_id` int(11) NOT NULL,
  `auth_type` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vk_cards`
--

CREATE TABLE `vk_cards` (
  `cards_id` int(11) NOT NULL,
  `card_type_id` int(11) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `cartd_number` varchar(50) NOT NULL,
  `card_date` date NOT NULL,
  `card_price` double(10,2) NOT NULL,
  `card_serial_key` varchar(50) NOT NULL,
  `card_offer` varchar(50) NOT NULL,
  `card_username` varchar(100) NOT NULL,
  `card_password` varchar(100) NOT NULL,
  `added_date` date NOT NULL,
  `modify_date` date NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `card_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vk_cards`
--

INSERT INTO `vk_cards` (`cards_id`, `card_type_id`, `card_name`, `cartd_number`, `card_date`, `card_price`, `card_serial_key`, `card_offer`, `card_username`, `card_password`, `added_date`, `modify_date`, `created_user_id`, `card_image`) VALUES
(1, 1, 'Idea - 100', 'ASDF9865745', '2018-01-01', 110.00, '98657452365', 'Nill', 'anas', 'anas', '2017-10-06', '2017-10-06', 1, '1.jpg'),
(2, 1, 'Bsnl-250', 'RTYU25698', '2018-01-01', 285.00, '965236598', 'Nill', 'anas', 'anas', '2017-10-06', '2017-10-06', 1, '2.jpg'),
(3, 2, 'Vodafone-100', '9865457889', '2018-01-01', 120.00, '979875364', 'Nill', 'anas', 'anas', '2017-10-06', '2017-10-06', 1, '3.jpg'),
(4, 3, 'Airtell 256', '9874FGTH', '2017-01-01', 300.00, '56985654', 'Nill', 'anas', 'anas', '2017-10-06', '2017-10-06', 1, '4.jpg'),
(5, 1, 'cd', 'edc', '2017-10-13', 300.00, 'dfds', 'fsdf', 'fsdf', 'fsdf', '2017-10-10', '2017-10-10', 1, 'pp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vk_cardtype`
--

CREATE TABLE `vk_cardtype` (
  `card_id` int(11) NOT NULL,
  `cardtype` varchar(255) NOT NULL,
  `date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vk_cardtype`
--

INSERT INTO `vk_cardtype` (`card_id`, `cardtype`, `date`) VALUES
(1, 'fds', '2017/10/10'),
(2, 'fdsdf', '2017/10/10'),
(3, 'fds', '2017/10/10');

-- --------------------------------------------------------

--
-- Table structure for table `vk_pruchase`
--

CREATE TABLE `vk_pruchase` (
  `purchase_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL,
  `pur_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vk_pruchase`
--

INSERT INTO `vk_pruchase` (`purchase_id`, `user_id`, `card_id`, `quantity`, `price`, `total`, `pur_date`) VALUES
(1, 1, 1, 25, 110.00, 2750.00, '2017-10-10'),
(2, 1, 2, 5, 285.00, 1425.00, '2017-10-10'),
(3, 1, 1, 36, 110.00, 3960.00, '2017-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `vk_users`
--

CREATE TABLE `vk_users` (
  `userid` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `added_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `last_logindate` varchar(11) NOT NULL,
  `create_date` varchar(255) NOT NULL,
  `modify_date` varchar(255) NOT NULL,
  `created_userid` int(11) NOT NULL,
  `mainagent_subagent_sub` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vk_users`
--

INSERT INTO `vk_users` (`userid`, `type_id`, `fname`, `lname`, `phone`, `email`, `address`, `added_date`, `status`, `parent_id`, `last_logindate`, `create_date`, `modify_date`, `created_userid`, `mainagent_subagent_sub`, `password`) VALUES
(1, 4, 'Admin', 'ck', 9496586746, 'admin@gmail.com', 'ck', '2017/10/09', '', 0, '2017/10/09', '2017/10/09', '2017/10/09', 0, '', '12345'),
(2, 0, 'vajid', 'vj', 9496751993, 'vajidmambra@gmail.com', 'vj', '2017/10/09', '1', 1, '2017/10/09', '2017/10/09', '2017/10/09', 1, '', '12345'),
(3, 1, 'aneesh', 'an', 9447751995, 'aneesh@gmail.com', 'an', '2017/10/09', '1', 1, '2017/10/09', '2017/10/09', '2017/10/09', 1, '', '12345'),
(4, 6, 'dssdsd', 'sdsds', 123123122, 'asd@aa33aa.hh', 'dsdsddsddsds', '2017/10/10', '1', 1, '2017/10/10', '2017/10/10', '2017/10/10', 1, '', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vk_usertype`
--

CREATE TABLE `vk_usertype` (
  `user_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vk_usertype`
--

INSERT INTO `vk_usertype` (`user_id`, `date`, `usertype`) VALUES
(4, '2017/10/03', 'Main agent'),
(6, '2017/10/03', 'supplier'),
(7, '2017/10/03', 'Sub agent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`auth_id`);

--
-- Indexes for table `vk_cards`
--
ALTER TABLE `vk_cards`
  ADD PRIMARY KEY (`cards_id`);

--
-- Indexes for table `vk_cardtype`
--
ALTER TABLE `vk_cardtype`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `vk_pruchase`
--
ALTER TABLE `vk_pruchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `vk_users`
--
ALTER TABLE `vk_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vk_usertype`
--
ALTER TABLE `vk_usertype`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `auth_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vk_cards`
--
ALTER TABLE `vk_cards`
  MODIFY `cards_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vk_cardtype`
--
ALTER TABLE `vk_cardtype`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vk_pruchase`
--
ALTER TABLE `vk_pruchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vk_users`
--
ALTER TABLE `vk_users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vk_usertype`
--
ALTER TABLE `vk_usertype`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

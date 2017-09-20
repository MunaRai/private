-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2017 at 04:51 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `private`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `password` char(41) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` char(40) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `email`, `first_name`, `last_name`, `city`, `state`, `hobbies`) VALUES
(24, 'mishal', 'mishal', 'mishal@gmail.com', 'mishal', 'rai', 'kathmandu', 'Bagmati', ''),
(26, 'mishal', 'laskdf', 'miasdf@lksg.com', 'miasdlfkj', '', 'kathmandu', 'Bagmati', ''),
(27, 'mishal', 'laskdf', 'miassdf@lksg.com', 'miasdlfkj', '', 'kathmandu', 'Bagmati', ''),
(29, 'mishal', 'laskdf', 'miaswsdf@lksg.com', 'miasdlfkj', '', 'kathmandu', 'Bagmati', ''),
(30, 'muna', 'rai', 'munara@gmail.com', 'Muna', '', '', '', ''),
(31, 'lkzLKJ', 'lakj', 'laksdjf@laksdjf', 'laksdjf', 'laksdjf', 'dharan', 'Mechi', 'asdf'),
(32, 'asdf', 'asdf', 'asdf@asasdf.com', 'lkjsd', '', '', '', ''),
(33, 'asdf', 'asdf', 'lasdkfj@lakdfj.com', 'lkdjflkas', '', 'kathmandu', 'Bagmati', ''),
(34, 'asdf', 'asdf', 'asdflkjasldk@laksdjf.com', 'lkajdflaksjd', '', 'kathmandu', 'Bagmati', ''),
(35, 'asdf', 'asdf', 'asdflaskdjf@lkajdf.com', 'lkjdfasdf', '', 'kathmandu', 'Bagmati', ''),
(36, 'asdf', 'asdf', 'sfdaslkdf@lakdfj.com', 'lkajdsfl', '', 'kathmandu', 'Bagmati', ''),
(37, 'muna', 'muna', 'raimuna@gmail.com', 'muna', 'rai', 'kathmandu', 'Bagmati', ''),
(38, 'Mishal', 'mishalrai', 'mishalrai@gmail.com', 'mishal', 'rai', 'kathmandu', 'Bagmati', 'i like to coding');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

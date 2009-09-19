-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2009 at 12:08 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `eid` int(11) NOT NULL auto_increment,
  `name` varchar(64) NOT NULL,
  `title` varchar(255) NOT NULL,
  `headline` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `time_created` int(12) NOT NULL,
  `time_updated` int(12) NOT NULL,
  PRIMARY KEY  (`eid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `event`
--


-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `uid` int(11) NOT NULL auto_increment,
  `firstname` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `birthday` int(11) NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `courseyear` tinyint(4) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `yahooid` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `expectation` text NOT NULL,
  `hobby` text NOT NULL,
  `status` enum('approve','deny','waitting') NOT NULL default 'waitting',
  `time_created` int(12) NOT NULL,
  `time_updated` int(12) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `profile`
--


-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `name` varchar(64) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY  (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--


-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `sid` int(11) NOT NULL auto_increment,
  `skillname` varchar(255) NOT NULL,
  `skillcategory` enum('design','programming') NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`sid`, `skillname`, `skillcategory`) VALUES
(1, 'Photoshop, CorelDraw,...', 'design'),
(2, 'HTML / CSS', 'design'),
(3, 'Javascript', 'design'),
(4, 'Flash, Silverlight, Adobe Air,...', 'design'),
(5, 'PHP', 'programming'),
(6, 'ASP / ASP.NET', 'programming'),
(7, 'JSP', 'programming'),
(8, 'Google AppEngine', 'programming'),
(9, 'MySQL', 'programming'),
(10, 'Microsoft SQL Server', 'programming');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `temp_password` varchar(32) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_skill`
--

CREATE TABLE IF NOT EXISTS `user_skill` (
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_skill`
--


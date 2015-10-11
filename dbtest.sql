-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2015 at 02:45 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

ALTER TABLE `users`  ADD `Name` VARCHAR(30) NOT NULL  AFTER `password`, 
 ADD `Gender` VARCHAR(6) NOT NULL  AFTER `Name`,  ADD `Height` INT(3) NOT NULL  AFTER `Gender`,  
 ADD `Weight` INT(3) NOT NULL  AFTER `Height`,  ADD `BMI` FLOAT(5) NOT NULL  AFTER `Weight`;
 
 
 ALTER TABLE `users` CHANGE `BMI` `BMI` VARCHAR(6) NOT NULL;
 ALTER TABLE `users` CHANGE `Height` `Height` VARCHAR(3) NOT NULL;
 ALTER TABLE `users` CHANGE `Weight` `Weight` VARCHAR(3) NOT NULL;
 
 ALTER TABLE `users` CHANGE `Height` `Height` VARCHAR(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;
 
 --Creating a table for mapping between user and calendar
 CREATE TABLE `dbtest`.`userCalendarMappling` ( `user_id` INT(5) NOT NULL , `calendar_id` INT(5) NOT NULL ) ENGINE = InnoDB;
 ALTER TABLE `userCalendarMappling` ADD PRIMARY KEY(`user_id`);
 --Dummy data
 INSERT INTO `dbtest`.`usercalendarmappling` (`user_id`, `calendar_id`) VALUES ('1', '1'), ('2', '2');
 INSERT INTO `dbtest`.`usercalendarmappling` (`user_id`, `calendar_id`) VALUES ('5', '5'), ('6', '6');
 INSERT INTO `dbtest`.`usercalendarmappling` (`user_id`, `calendar_id`) VALUES ('7', '7'), ('8', '8');
 INSERT INTO `dbtest`.`usercalendarmappling` (`user_id`, `calendar_id`) VALUES ('9', '9');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'pradeep', 'pradeep@gmail.com', '202cb962ac59075b964b07152d234b70');

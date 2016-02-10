-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2016 at 02:28 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifs`
--

CREATE TABLE `notifs` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` varchar(20) NOT NULL,
  `notif_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifs`
--

INSERT INTO `notifs` (`id`, `task_id`, `title`, `content`, `notif_date`) VALUES
(1, 14, 'awefewfaef', 'awefaweffe', '2016-01-01'),
(2, 14, 'fvdvfddgddfg', 'sdgfdfdvfv', '2016-01-02'),
(3, 15, 'Notif 2', 'Content 2', '2016-01-19'),
(4, 15, 'Notif 3', 'Content 3', '2016-01-20'),
(5, 15, 'Notif 1', 'Content 1', '2016-01-18'),
(6, 16, 'Notif 2', 'Second notif', '2016-01-20'),
(7, 16, 'Notif 1', 'First notif', '2016-01-18'),
(8, 16, 'Notif 3', 'Third notif', '2016-01-21'),
(9, 17, 'New ID Notif 1', 'Content notif 1', '2016-01-09'),
(10, 17, 'New ID Notif 2', 'Content notif 2', '2016-01-09'),
(11, 17, 'New ID Notif 3', 'Content notif 3', '2016-01-09'),
(12, 18, 'Test Subj', 'sdfsdfdsfsdf', '2016-01-07'),
(13, 18, 'Test Subj2', 'AZSDfdsfassa', '2016-01-08'),
(14, 19, 'Subj 2', 'HiHereThanks,Me', '2016-01-11'),
(15, 19, 'Subj 1', 'lsdkfjsdkfdkdslmsdld', '2016-01-05'),
(16, 20, 'Subj 1', 'Hi,HereThanks,Me', '2016-01-12'),
(17, 21, 'Subj 1', 'Send Now', '2016-01-16'),
(18, 21, 'Subj 2', 'Send on Monday', '2016-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task_date` date NOT NULL,
  `dead_line` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `email_reciever` varchar(500) NOT NULL,
  `email_sender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `task_date`, `dead_line`, `description`, `status`, `user`, `subject`, `email_reciever`, `email_sender`) VALUES
(1, '2016-01-27', '2016-01-31', 'Test Task', 'Pending', '1', '', '', ''),
(2, '2016-01-27', '2016-02-18', 'Test Task Again', 'Pending', '1', '', '', ''),
(3, '0000-00-00', '0000-00-00', 'dwdad', '', '', 'dadawd', '', ''),
(4, '0000-00-00', '0000-00-00', 'dwdad', '', '', 'dadawd', '', ''),
(5, '0000-00-00', '0000-00-00', 'afawef fawe fawefweafaw awf awfew', '', '', 'wdafdagfadef fawafwef', '', ''),
(6, '0000-00-00', '0000-00-00', 'This is the Description of the new task', '', '', 'This is new Task', '', ''),
(7, '2016-01-15', '1970-01-01', 'This is testing of format of dates', '', '', 'Testing of Dates', '', ''),
(8, '2016-01-15', '1970-01-01', 'testing of new dates', '', '', 'testing again of dates', '', ''),
(9, '2016-01-15', '2016-01-22', 'acasdcaecawc', '', '', 'awedadczsczs', '', ''),
(10, '2016-01-15', '2016-01-16', 'This is to test emails', '', '', 'Testing Emails', 'dandy.collera@gmail.com', 'dandy_collera@yahoo.com'),
(11, '2016-01-14', '2016-01-15', 'Validatoin Testing for this', '', '', 'Testing for valid', 'dandy.collera@gmail.com', 'noreply@gmail.com'),
(12, '2016-01-13', '2016-01-15', 'Testing of sending email', '', '', 'Testing of Sending email', 'dandy.collera@gmail.com', 'harukaharukaze@gmail.com'),
(13, '2016-01-01', '2016-01-02', 'qwwqwq', '', '', 'wqwwq', 'wedfwadw', 'dqwdwqdd'),
(14, '2016-01-01', '2016-01-02', 'aeawefewaf', '', '', 'eqeqwdw', 'awefefe', 'awefefef'),
(15, '2016-01-15', '2016-02-15', 'Testing of adding new notifs', '', '', 'Testing For Multiple Notif', 'dandy.collera@gmail.com', 'harukaharukaze@gmail.com'),
(16, '2016-01-15', '2016-01-29', 'Second testing of adding notifs', '', '', 'Testing Notif Part2', 'dandy.collera@gmail.com', 'harukaharukaze@gmail.com'),
(17, '2016-01-08', '2016-01-13', 'Testing of getting the last task ID', '', '', 'Testing of Last ID', 'dandy.collera@gmail.com', 'harukaharukaze@gmail.com'),
(18, '2016-01-06', '1970-01-01', 'dwqdqwdw', '', '', 'dadad', 'test1@test.com,test2@test.com', 'testSend@test.com'),
(19, '2016-01-05', '1970-01-01', 'Sample Decription', '', '', 'Sample Title', 'test1@test.com,test2@test.com,test3@test.com', 'sender@send.com'),
(20, '2016-01-04', '1970-01-01', 'Description again', '', '', 'Sample Title2', 'test1@test.com,test2@test.com,test3@test.com', 'sender@send.com'),
(21, '2016-01-16', '1970-01-01', 'Send Date', '', '', 'Testing Send Date', 'dandy.collera@taskus.com,harukaharukaze@gmail.com', 'dandy.collera@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifs`
--
ALTER TABLE `notifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifs`
--
ALTER TABLE `notifs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

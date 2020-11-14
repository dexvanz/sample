-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 05:52 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mygoogle`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `created_at`, `url`, `title`, `description`) VALUES
(1, '2016-07-21', 'http://example.com', 'Sed mollis eros et', 'Nam at tortor in tellus interdum sagittis. Proin faucibus arcu quis ante. Quisque rutrum. Cras ultricies mi eu turpis hendrerit fringilla. Nam eget dui.'),
(2, '2016-07-21', 'http://example2.com', 'Etiam feugiat lorem non', 'Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Donec venenatis vulputate lorem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce fermentum. Praesent venenatis metus at tortor'),
(3, '2016-07-21', 'http://example3.com', 'Cum sociis natoque penatibus', 'Sed lectus. Cras sagittis. Praesent egestas neque eu enim. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Sed lectus.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
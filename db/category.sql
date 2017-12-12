-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 08:01 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `party_plot_portal_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `display_on_home` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `description`, `image`, `display_on_home`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Wedding & Marriage Reception, ', '<p>We provide a professional dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper sem quam suscipit lacus maecenas tortor. Suspendisse gravida ornare non mattis velit rutrum modest.</p>\r\n', 'uploads/ee64790286196f133c087e2d6ad14680.jpg', 0, 1, '2017-12-07 13:11:51', '2017-12-07 13:29:48', NULL),
(6, 'Best Party Plots', '<p>It is a long established fact that a reader will be distracted</p>\r\n', '', 1, 1, '2017-12-07 13:23:04', '2017-12-07 13:23:04', NULL),
(7, 'Resorts near Ahmedabad', '<p>It is a long established fact that a reader will be distracted</p>\r\n', '', 1, 1, '2017-12-07 13:23:27', '2017-12-07 13:23:27', NULL),
(8, 'The Garden Party Plots', '<p>It is a long established fact that a reader will be distracted</p>\r\n', '', 1, 1, '2017-12-07 13:23:51', '2017-12-07 13:23:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

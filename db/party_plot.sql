-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 04:54 PM
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
-- Table structure for table `party_plot`
--

CREATE TABLE `party_plot` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ideal_for` varchar(255) NOT NULL,
  `min-capacity` int(11) NOT NULL,
  `mx-capacity` int(11) NOT NULL,
  `landmark` varchar(50) DEFAULT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `map` longtext,
  `approach` longtext,
  `entrance_and_outside` longtext,
  `ambiance` longtext,
  `food_and_services_provided` longtext,
  `anything_special_about_the_place` longtext,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party_plot`
--

INSERT INTO `party_plot` (`id`, `name`, `address`, `ideal_for`, `min-capacity`, `mx-capacity`, `landmark`, `contact_name`, `contact_email`, `contact_number`, `price`, `map`, `approach`, `entrance_and_outside`, `ambiance`, `food_and_services_provided`, `anything_special_about_the_place`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'poojan12', '16/radhanagar', 'Birthday Party', 10, 300, 'Nr mangleshwar', 'poojan', 'mca.poojan@gmail.com', 2147483647, 500, NULL, 'this is test', 'this is test', 'this is test', 'this is test', 'this is test', 1, '2017-12-13 13:02:05', '2017-12-17 01:59:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `party_plot`
--
ALTER TABLE `party_plot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `party_plot`
--
ALTER TABLE `party_plot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

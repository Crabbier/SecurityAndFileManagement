-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 12:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watches`
--
CREATE DATABASE IF NOT EXISTS `watches` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `watches`;

-- --------------------------------------------------------

--
-- Table structure for table `phpadmins`
--

CREATE TABLE `phpadmins` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phpadmins`
--

INSERT INTO `phpadmins` (`user_id`, `first_name`, `last_name`, `username`, `password`) VALUES
(2, 'carlos', 'serrano', 'carlos', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
(3, 'carlos', 'franco', 'francisco', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
(4, 'gael', 'martine', 'gael', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
(5, 'gael', 'martine', 'gael', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
(6, 'gael', 'francisco', 'pam', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
(7, 'gael', 'francisco', 'pam', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
(8, 'my admin', 'jea', 'myadmin', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `color` enum('Silver','Gold','Black','Copper','Blue','White','Red') NOT NULL,
  `category` enum('Quartz Watch','Mechanic Watch','Automatic Watch','Necklace','Bracelete','Ring') NOT NULL,
  `brand` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_route` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `color`, `category`, `brand`, `description`, `date`, `image_name`, `image_route`) VALUES
(1, 'PD Daytona001', 'Silver', '', 'Quartz Watch', '- 10 ATM- 316L Stainless Steel- Zapphire crystal -yeah', '2023-12-02', '', ''),
(2, 'LG2407', 'Copper', '', 'Automatic Watch', '- Premium watch', '2023-10-10', '', ''),
(3, 'CRRJ3422', 'White', 'Mechanic Watch', 'Curren', '- Great performance \n\r\n- Big model', '2023-10-10', '', ''),
(4, 'MRNE', 'Silver', 'Mechanic Watch', 'JJJ', '-Nuevo00asdf asdf', '2023-12-02', '', ''),
(22, 'my new watch', 'Gold', 'Quartz Watch', 'Winner', '- Stainless Steel\r\n- Zaphire crsital', '2023-12-02', 'Reloj1258.jpg', './uploads/Reloj1258.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phpadmins`
--
ALTER TABLE `phpadmins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phpadmins`
--
ALTER TABLE `phpadmins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

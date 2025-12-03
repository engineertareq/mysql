-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2025 at 09:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manufacturercomp`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Manufacturer_Entry` (IN `pname` VARCHAR(50) CHARSET utf8, IN `paddress` VARCHAR(100) CHARSET utf8, IN `pcontact_no` VARCHAR(50) CHARSET utf8)   INSERT INTO `manufacturer`(`name`, `address`, `contact_no`) VALUES (pname, paddress, pcontact_no)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(37, 'Ifad', 'SHAH ALAM TOWER, SHAHIDULLAH KAISER ROAD; Feni Sadar Main PS; Feni-3900; Bangladesh', 1568993772),
(38, 'Ifad', 'SHAH ALAM TOWER, SHAHIDULLAH KAISER ROAD; Feni Sadar Main PS; Feni-3900; Bangladesh', 1568993772),
(39, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', 1568993772),
(40, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', 1568993772),
(41, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', 1568993772),
(42, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', 1568993772),
(43, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', 1568993772),
(44, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', 1568993772),
(45, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', 1568993772),
(46, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', 1568993772),
(47, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', 1568993772),
(48, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', 1568993772),
(58, 'Walton', 'motijheel', 1785463512);

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `Products_Destroyer` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product WHERE manufacturer_id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(5, 'Ifad-TV', 100, 37),
(6, 'Ifad-Motors', 100, 37),
(7, 'Antena', 500, 37),
(8, 'DF', 470, 37),
(9, 'Pc', 500, 37),
(10, 'Antena', 500, 58),
(11, 'DF', 470, 58),
(12, 'Pc', 500, 58);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list`
-- (See below for the actual view)
--
CREATE TABLE `product_list` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`Company` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `product_list`
--
DROP TABLE IF EXISTS `product_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `manufacturer`.`name` AS `Company` FROM (`product` join `manufacturer`) WHERE `product`.`manufacturer_id` = `manufacturer`.`id` AND `product`.`price` > 50 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2025 at 10:35 AM
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
-- Database: `idb_bisew_evidence`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `student_input` (IN `s_name` VARCHAR(50), IN `s_address` VARCHAR(100), IN `s_phone` INT(20))   INSERT INTO `student`(`name`, `address`, `mobile`) 
 VALUES (s_name, s_address, s_phone)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `module_name` varchar(20) NOT NULL,
  `totalmarks` int(5) NOT NULL,
  `student_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `module_name`, `totalmarks`, `student_id`) VALUES
(1, 'Azadi', 100, 1),
(10, 'Trip', 90, 3),
(12, 'Trip', 78, 5),
(14, 'Trip', 23, 7);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `mobile`) VALUES
(1, 'Tareq', 'Chandpur', '01795611971'),
(8, 'tamim', 'hazig', '1756486741'),
(9, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', '1568993772'),
(10, 'Tanjimul Islam Tareq', '93, Bernaiya, Shahrasti, Chandpur', '1568993772');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `student_delation` AFTER DELETE ON `student` FOR EACH ROW DELETE FROM result WHERE student_id = old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_data`
-- (See below for the actual view)
--
CREATE TABLE `student_data` (
`ID` int(11)
,`Name` varchar(50)
,`Address` varchar(100)
,`Contact` varchar(20)
,`Module` varchar(20)
,`Marks` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` char(20) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'root', '63a9f0ea7bb98050796b649e85481845'),
(2, 'tareq', '63a9f0ea7bb98050796b649e85481845'),
(3, 'hasan', '63a9f0ea7bb98050796b649e85481845'),
(4, 'rony', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Structure for view `student_data`
--
DROP TABLE IF EXISTS `student_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_data`  AS SELECT `student`.`id` AS `ID`, `student`.`name` AS `Name`, `student`.`address` AS `Address`, `student`.`mobile` AS `Contact`, `result`.`module_name` AS `Module`, `result`.`totalmarks` AS `Marks` FROM (`student` join `result` on(`student`.`id` = `result`.`student_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

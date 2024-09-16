-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 16, 2024 at 06:57 PM
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
-- Database: `service_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--


--
-- Dumping data for table `employees`
--


-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `mileage` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `oil` varchar(50) NOT NULL,
  `coolant` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `plug` varchar(100) NOT NULL,
  `service1` varchar(200) NOT NULL,
  `service2` varchar(200) NOT NULL,
  `service3` varchar(200) NOT NULL,
  `service4` varchar(200) NOT NULL,
  `service5` varchar(200) NOT NULL,
  `service6` varchar(200) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `next` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `vehicle_id`, `mileage`, `date`, `oil`, `coolant`, `transmission`, `plug`, `service1`, `service2`, `service3`, `service4`, `service5`, `service6`, `cost`, `next`) VALUES
(500, 1001, '25,000', '2024/08/12', 'Changed', 'Not Changed', 'Not Changed', 'Changed', 'gjdeasjdchga dahedhka bhdhkhajkhdkah', 'gjdeasjdchga dahedhka bhdhkhajkhdkah', 'gjdeasjdchga dahedhka bhdhkhajkhdkah', 'dddd', 'dfff', 'getgergtrfg', '10,500', '30,000'),
(501, 1001, '40,000', '2425/01/01', 'Other', 'Changed', 'Not Changed', 'Changed', 'ddddddddd', 'ddddddddddd', 'ddddddddddd', 'dddd', 'hhhhhhhhhhh', 'getgergtrfg', '30,500', '45,000'),
(502, 1004, '23,250', '666', '777', '7777', '77777', '777', '7777', '777', '77777777777', '777777777', '777777777', '7777777', '5000', '25410'),
(503, 1001, '46,000', '2024-08-28', '', 'Not Changed', 'Not Changed', 'Changed', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccccc', 'ddddddddddddddddddddd', 'eeeeeeeeeeeeeeeeeeeeeeee', 'ffffffffffffffffffffff', '25,250.00', '56,000'),
(504, 1001, '56,000', '2024-09-01', '', 'Changed', 'Changed', 'Changed', '', '', '', '', '', '', '', ''),
(505, 1001, '56,000', '2024-08-31', '', 'Not Changed', 'Not Changed', 'Not Changed', '', '', '', '', '', '', '25,250.00', '66,000'),
(506, 1001, '56,000', '2024-09-01', 'Changed', 'Changed', 'Changed', 'Changed', '', '', '', '', '', '', '25,250.00', '76,000'),
(507, 1001, '66000', '2024-08-29', 'Not Changed', 'Not Changed', 'Not Changed', 'Not Changed', '', '', '', '', '', '', '25,250.00', '79,000'),
(508, 1001, '46,000', '2024-08-18', 'Other', 'Other', 'Other', 'Other', '', '', '', '', '', '', '25,250.00', '79,000'),
(509, 1001, '80250', '2024-09-05', 'Changed', 'Changed', 'Changed', 'Changed', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccccc', 'ddddddddddddddddddddd', 'eeeeeeeeeeeeeeeeeeeeeeee', 'ffffffffffffffffffffff', '25,250.00', '90,000'),
(510, 1000, '66000', '2024-09-07', 'Changed', 'Not Changed', 'Not Changed', 'Not Changed', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccccc', 'ddddddddddddddddddddd', 'eeeeeeeeeeeeeeeeeeeeeeee', 'ffffffffffffffffffffff', '25,250.00', '79,000'),
(511, 1000, '80250', '2024-09-18', 'Changed', 'Not Changed', 'Changed', 'Changed', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccccc', 'ddddddddddddddddddddd', 'eeeeeeeeeeeeeeeeeeeeeeee', 'ffffffffffffffffffffff', '25,250.00', '99,000'),
(512, 1002, '46,000', '2024-08-31', 'Not Changed', 'Not Changed', 'Changed', 'Changed', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccccc', 'ddddddddddddddddddddd', 'eeeeeeeeeeeeeeeeeeeeeeee', 'ffffffffffffffffffffff', '25,250.00', '56,000'),
(513, 1003, '56,000', '2024-09-18', 'Changed', 'Changed', 'Changed', 'Changed', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 'ccccccccccccccccccccccccccc', 'ddddddddddddddddddddd', 'eeeeeeeeeeeeeeeeeeeeeeee', 'ffffffffffffffffffffff', '25,250.00', '66,000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `theme` varchar(20) NOT NULL DEFAULT 'light'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `role`, `password`, `theme`) VALUES
(1000, 'admin', 'admin', '123456789', 'dark');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_num` varchar(100) NOT NULL,
  `engine_num` varchar(100) NOT NULL,
  `chassi_num` varchar(100) NOT NULL,
  `vehicle_type` varchar(20) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `owner_id` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'sampleimg.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `vehicle_num`, `engine_num`, `chassi_num`, `vehicle_type`, `owner`, `owner_id`, `address`, `mobile_no`, `email`, `image`) VALUES
(1000, 'PY-2454', 'EEE-12345689', 'MHD-54646-4644', 'Lorry', 'Kodikara', '702945255v', 'No 21 , main street , middeniya', '0765510668', 'dushan@pgim.cmb.ac.lk', 'sampleimg.jpg'),
(1001, 'BGS-2454', 'EEE-1234555', 'MHD-2344', 'Motor Cycle', 'Dushan', '2001256566', 'No 76 , Suurya Rd , kaluthara', '0765510668', 'ddddddd@pgim.cmb.ac.lk', 'sampleimg.jpg'),
(1002, 'MV-4565', 'EEE-1234455', 'MHD-54646-4645', 'Lorry', 'Kodikara', '1245869574v', 'No 76 , Suurya Rd , kaluthara', '0765510668', '22', 'sampleimg.jpg'),
(1003, 'CBA-4568', 'EEE-123454545', 'MHD-54646-4644', 'Car', 'Ruwantha', '1255568235v', 'No 76 , Suurya Rd , kaluthara', '0719675669', 'techlabsoftwaresolution@gmail.com', 'PXL_20240523_124953699.PORTRAIT.jpg'),
(1004, 'PY-1111', 'EEE-12345444', 'MHD-54646-4644', 'Van', 'Supun Saranga', '457856321v', 'No 76 , Suurya Rd , kaluthara', '0719675669', 'navodyadushan123@gmail.com', 'sampleimg.jpg'),
(1005, 'BAA-7845', 'EEE-12345645', 'MHD-54646-4666', 'Motor Cycle', 'Kasun prasad', '702931025v', 'Warnasooriya stores, samajasewapura 2,ela road, sooriyawewa', '0719675669', 'techlabsoftwaresolution@gmail.com', 'sampleimg.jpg'),
(1006, 'CBD-8888', 'EEE-123456333', 'MHD-54646-4777', 'Car', 'Kavindu Nilshan', '751245862v', 'No 76 , Suurya Rd , kaluthara', '0719675669', 'techlabsoftwaresolution@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`email_personal`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `foreign` (`vehicle_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

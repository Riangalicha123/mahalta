-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2023 at 10:52 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmahalta`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ReservationId` int NOT NULL,
  `UserId` int NOT NULL,
  `RoomId` int NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `ContactNumber` varchar(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `CheckinDate` datetime NOT NULL,
  `CheckoutDate` datetime NOT NULL,
  `NumberofGuest` varchar(255) NOT NULL,
  `TotalAmount` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationId`, `UserId`, `RoomId`, `FirstName`, `LastName`, `ContactNumber`, `Address`, `CheckinDate`, `CheckoutDate`, `NumberofGuest`, `TotalAmount`) VALUES
(1, 7, 1, 'Mark', 'Lua', '09123456789', 'Naujan, Oriental Mindoro', '2023-11-30 07:26:38', '2023-11-30 07:26:38', '4', 10000.00);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomId` int NOT NULL,
  `RoomNumber` int NOT NULL,
  `RoomType` varchar(255) NOT NULL,
  `RoomDescription` text NOT NULL,
  `PricePerNight` double(10,2) NOT NULL,
  `AvailabilityStatus` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomId`, `RoomNumber`, `RoomType`, `RoomDescription`, `PricePerNight`, `AvailabilityStatus`) VALUES
(1, 2, 'Deluxe Room', 'asdasdasdasd', 3599.00, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('User','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'Admin@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 'User'),
(2, 'markcabatay', 'mark@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 'Admin'),
(3, 'navycleofe', 'navyjane@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 'User'),
(4, 'leynard', 'leynard@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 'User'),
(5, 'melvin', 'melvin@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 'User'),
(6, 'qwerty', 'qwerty@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 'User'),
(7, 'Marklua', 'Marklua@gmail.com', '$2y$10$aubb5cd1jHjZEniLNPVd9uKxVrvdQr8LQ.7O1dQkwxowVSW5I9/p6', 'User'),
(8, 'Jocelyn', 'jocelyngalicha@gmail.com', '$2y$10$aHuxTyZoiZamCo3w.jzYQOnOlnpc2ZND49uj3tOKqyF4daJu3MrEy', 'User'),
(9, 'Admin11', 'Admin11@gmail.com', '$2y$10$8EC35864Mb/WIB6.z9wbSedBOSNCwhlS7KvpOK/oq2rwjMv7gqT/m', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationId`),
  ADD UNIQUE KEY `UserId` (`UserId`,`RoomId`),
  ADD KEY `RoomId` (`RoomId`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `RoomId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`RoomId`) REFERENCES `room` (`RoomId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2023 at 07:39 AM
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
-- Database: `projectmahaltaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int NOT NULL,
  `UserId` int NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ReservationId` int NOT NULL,
  `UserId` int DEFAULT NULL,
  `FullName` varchar(255) NOT NULL,
  `ContactNumber` varchar(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `RoomType` varchar(255) NOT NULL,
  `CheckinDate` datetime NOT NULL,
  `CheckoutDate` datetime NOT NULL,
  `NumberofGuest` varchar(50) NOT NULL,
  `TotalAmount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationId`, `UserId`, `FullName`, `ContactNumber`, `Address`, `RoomType`, `CheckinDate`, `CheckoutDate`, `NumberofGuest`, `TotalAmount`) VALUES
(2, NULL, 'Rian Galicha', '09995368236', 'Puerto Galera, Oriental Mindoro', 'Deluxe Room', '2023-12-01 12:00:00', '2023-12-02 12:00:00', '5', 10000.00),
(5, NULL, 'John Leynard Chequito', '09995368236', 'Puerto Galera, Oriental Mindoro', 'Deluxe Room', '2023-12-08 12:06:00', '2023-12-09 12:06:00', '2', 5000.00),
(6, NULL, 'Navy Cleofe', '09161893146', 'Socorro, Oriental Mindoro', 'Deluxe Room', '2023-12-03 12:00:00', '2023-12-04 12:00:00', '2', 10000.00),
(7, NULL, 'Mark Lua', '09123456788', 'Naujan, Oriental Mindoro', 'Deluxe Room', '2023-12-03 12:00:00', '2023-12-04 12:00:00', '2', 2000.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Guest','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `username`, `email`, `password`, `role`) VALUES
(2, 'admin', 'Admin@gmail.com', '$2y$10$cmLuJTdfZFC97DR8AYERnua9pS22IzAvtvfBrfnw5dVsbBE.Z2Try', 'Admin'),
(3, 'Riangalicha123', 'riangalicha123@gmail.com', '$2y$10$JaI5q9FaDFgtPNFb1G9fTuyYHIwh8CRsKZZwdgy0wxGhlIf3MQkwy', 'Guest'),
(4, 'markcabatay', 'mark@gmail.com', '$2y$10$DiGymfIALLXdxZJLMK9gm.2TMy6BWK547csSEFxtKgE/MgfIuM.lm', 'Guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`),
  ADD UNIQUE KEY `UserId` (`UserId`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationId`),
  ADD UNIQUE KEY `UserId` (`UserId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

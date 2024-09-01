-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 07:26 AM
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
-- Database: `vetventures`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `PetName` varchar(800) NOT NULL,
  `PetBreed` varchar(800) NOT NULL,
  `PetGender` varchar(8000) NOT NULL,
  `PetWeight` int(25) NOT NULL,
  `PetComplaint` varchar(800) NOT NULL,
  `uploadphoto` varchar(800) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `PetName`, `PetBreed`, `PetGender`, `PetWeight`, `PetComplaint`, `uploadphoto`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Charlie', 'Shihtzu', 'female', 25, 'Suffering from fever.', 'uploads/shithzu.jpeg', 0, '2024-06-23 06:31:46', '2024-06-23 06:31:46'),
(11, 'Ferro', 'Dobermann ', 'male', 50, 'Suffering from skin disease ', 'uploads/Dobermann.jpeg', 0, '2024-06-23 06:32:56', '2024-06-23 06:32:56'),
(12, 'Lucy', 'persian cat', 'female', 15, 'Roundworms', 'uploads/Persian cat.jpeg', 0, '2024-06-23 06:33:32', '2024-06-23 06:34:03'),
(22, 'sophie', 'canary', 'female', 25, 'Feather disease', 'uploads/minions.jpeg', 0, '2024-06-28 13:21:23', '2024-06-28 13:21:23'),
(23, 'Simba', 'labrador', 'male', 25, 'Blood womiting', 'uploads/Dobermann.jpeg', 0, '2024-07-05 10:10:20', '2024-07-05 10:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `FullName` varchar(800) NOT NULL,
  `Email` varchar(800) NOT NULL,
  `PhoneNumber` varchar(800) NOT NULL,
  `Message` varchar(800) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `FullName`, `Email`, `PhoneNumber`, `Message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mohan', 'mohan@gmail.com', '9780654732', 'I want immediate appointment', 0, '2024-06-20 13:36:15', '2024-06-20 13:36:15'),
(2, 'Mayank', 'mayank@gmail.com', '9087890654', 'i want the solution for my pet immediatly.I have registered complaint', 0, '2024-06-28 13:20:20', '2024-06-28 13:20:20'),
(3, 'Manasa', 'manasa@gmail.com', '9456789321', 'I am not able to make payment', 0, '2024-07-05 10:08:45', '2024-07-05 10:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `drregistrations`
--

CREATE TABLE `drregistrations` (
  `id` int(11) NOT NULL,
  `Name` varchar(800) NOT NULL,
  `Specialization` varchar(800) NOT NULL,
  `LicenseNumber` varchar(800) NOT NULL,
  `Age` varchar(800) NOT NULL,
  `Gender` varchar(800) NOT NULL,
  `Phone` varchar(800) NOT NULL,
  `Email` varchar(800) NOT NULL,
  `Password` varchar(800) NOT NULL,
  `City` varchar(800) NOT NULL,
  `cat` varchar(800) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drregistrations`
--

INSERT INTO `drregistrations` (`id`, `Name`, `Specialization`, `LicenseNumber`, `Age`, `Gender`, `Phone`, `Email`, `Password`, `City`, `cat`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sukshitha', 'Veternary Radiologist', 'KAR8907', '35', 'Female', '9089765832', 'sukshitha@gmail.com', '7623a34e23f9990608d04c1d538cffb0', 'Bangalore', 'doctor', 0, '2024-06-20 13:43:42', '2024-06-20 13:43:42'),
(3, 'Sanjay', 'Radiologist', 'KAR8765', '56', 'male', '890765894', 'sanjay@gmail.com', '8672a91f2c1bd519cf5d4ed3d10e4a86', 'bangalore', 'doctor', 0, '2024-06-26 06:18:40', '2024-06-26 06:18:40'),
(4, 'Gagan', 'veterinary cardiologist', 'KAR348901', '40', 'Male', '9087689432', 'gagan@gmail.com', 'c53ebfd67d18b521f118d32eb145b7af', 'shimogga', 'doctor', 0, '2024-06-28 13:39:18', '2024-06-28 13:39:18'),
(5, 'Ashwini', 'veternary dermatologist', 'KAR09675', '34', 'Female', '9880765345', 'ashwini@gmail.com', '45536ee77b86758534bb0daf04baef72', 'mangalore', 'doctor', 0, '2024-07-05 10:14:54', '2024-07-05 10:14:54'),
(6, 'Anil Kumar', 'Veternary Radiologist', 'kAR6757', '40', 'male', '9958547432', 'anilkumar@gmail.com', 'a2af486ce7125f6a0ee4524f435cb5e8', 'mysore', 'doctor', 0, '2024-07-06 03:40:28', '2024-07-06 03:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `PetName` varchar(800) NOT NULL,
  `Email` varchar(800) NOT NULL,
  `PetAge` varchar(800) NOT NULL,
  `PetType` varchar(800) NOT NULL,
  `petscurrentmood` varchar(800) NOT NULL,
  `Additionalcomments` varchar(800) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `PetName`, `Email`, `PetAge`, `PetType`, `petscurrentmood`, `Additionalcomments`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lucy', 'sukshitha@gmail.com', '9', 'cat', 'happy', 'friendly staff and cooperative', 0, '2024-06-20 13:37:40', '2024-06-20 13:37:40'),
(2, 'Devdas', 'vihaan@gmail.com', '9', 'dog', 'happy', 'friendly staff', 0, '2024-06-26 06:16:44', '2024-06-26 06:16:44'),
(3, 'sophie', 'mayank@gmail.com', '12', 'bird', 'happy', 'I would highly recommend your hospital to anyone seeking medical care for their pets', 0, '2024-06-28 13:26:09', '2024-06-28 13:26:09'),
(4, 'Simba', 'manasa@gmail.com', '6', 'dog', 'happy', 'nice treatment', 0, '2024-07-05 10:12:21', '2024-07-05 10:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `OwnerName` varchar(800) NOT NULL,
  `Sex` varchar(800) NOT NULL,
  `Phone` varchar(800) NOT NULL,
  `CurrentAddress` varchar(800) NOT NULL,
  `Email` varchar(800) NOT NULL,
  `Password` varchar(800) NOT NULL,
  `RetypePassword` varchar(800) NOT NULL,
  `PetName` varchar(800) NOT NULL,
  `Species` varchar(800) NOT NULL,
  `Breed` varchar(800) NOT NULL,
  `Gender` varchar(800) NOT NULL,
  `Colour` varchar(800) NOT NULL,
  `sterilised` varchar(800) NOT NULL,
  `VisitingReasons` varchar(800) NOT NULL,
  `medicalconditions` varchar(800) NOT NULL,
  `Hintquestions` varchar(800) NOT NULL,
  `Answer` varchar(800) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `OwnerName`, `Sex`, `Phone`, `CurrentAddress`, `Email`, `Password`, `RetypePassword`, `PetName`, `Species`, `Breed`, `Gender`, `Colour`, `sterilised`, `VisitingReasons`, `medicalconditions`, `Hintquestions`, `Answer`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Mohan', 'Male', '9739915971', '  Girinagar\r\n', 'mohan@gmail.com', '1e2a796539042ca860c3091662aa4346', '1e2a796539042ca860c3091662aa4346', 'Charlie', 'DOG', 'shih tzu', 'Male', 'white', 'yes', '  fever\r\n', 'not eating food', 'What is your favourite colour?', 'Fast and Furious 7', 0, '2024-06-20 13:02:10', '2024-06-20 13:02:10'),
(3, 'Sukshitha', 'Female', '9023675810', '  Jayanagar Bangalore\r\n', 'sukshitha@gmail.com', 'a685e6376caabdf0c9696fda8a2641f1', '9f80323ce3b95a3671d35551690a58b5', 'Ferro', 'DOG', 'Rottweiler', 'Male', 'Brown', 'yes', '  Roundworms\r\n', 'Suffering from body itching.', 'In which city or town was your first job?', 'china', 0, '2024-06-23 14:03:29', '2024-06-23 16:17:56'),
(4, 'Vihaan', 'Male', '8796589043', '  \r\nNagarabhavi Bangalore', 'vihaan@gmail.com', 'aed76c8c2bfa8baf442ce0f160e9b16d', 'aed76c8c2bfa8baf442ce0f160e9b16d', 'david', 'RABBIT', 'Finch', 'Male', 'white', 'yes', '  \r\nJaws pain', 'cannot consume any food', 'what was your first car?', 'alto', 0, '2024-06-23 14:10:08', '2024-06-23 14:10:08'),
(5, 'SHREE', 'Female', '8660476005', 'No 2/1,1st main,1st floor,nanjarasappa layout behind canara bank colony nagarabhavi', 'chethanasn2003@gmail.com', '01bcfde1885597e75f763750db4abeca', '01bcfde1885597e75f763750db4abeca', 'Devdas', 'RABBIT', 'sphynx', 'Male', 'brown', 'yes', '  \r\njaw pain', 'not able to eat', 'In which city or town was your first job?', 'india', 0, '2024-06-26 06:11:05', '2024-06-26 06:11:05'),
(6, 'sahana', 'Female', '9087689054', '  Vijayanagar Bangalore\r\n', 'sahana@gmail.com', 'e1560c254a4cc488955f61b5c232f6f7', 'e1560c254a4cc488955f61b5c232f6f7', 'Sony', 'RABBIT', 'sphynx', 'Male', 'white', 'yes', '  \r\njaws pain', 'not able to eat food', 'What is your favourite colour?', 'mad', 0, '2024-06-26 06:14:00', '2024-06-26 06:14:00'),
(7, 'Mayank', 'Male', '9086789032', 'Malleshwaram Bangalore  \r\n', 'mayank@gmail.com', 'ec0c028a42b8633bd12d0f420fefaa77', '3c2c6e1d3e63f255f543b1f01708bf73', 'sophie', 'BIRD', 'canary', 'Male', 'yellow', 'yes', '  \r\nFeather disease', 'it is losing its feathers in its body', 'what was your favourite school teachers name?', 'sandhya', 0, '2024-06-28 13:18:50', '2024-06-28 13:53:26'),
(8, 'Manasa', 'Female', '9456784321', '  Sunkudakatte Bangalore\r\n', 'manasa@gmail.com', 'd1e6b917e2b99d7e4a94d0390b84e304', '6f8faad67ea8835c430f0e91785d6c19', 'Simba', 'DOG', 'labrador', 'Male', 'light brown', 'yes', '  \r\nfeeling dizziness', 'blood womiting', 'what was your first car?', 'mini cooper', 0, '2024-07-05 10:07:45', '2024-07-05 10:11:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drregistrations`
--
ALTER TABLE `drregistrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drregistrations`
--
ALTER TABLE `drregistrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 05:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `Patientid_FK` int(11) NOT NULL,
  `Doctorid_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `appointment_date`, `appointment_time`, `Patientid_FK`, `Doctorid_FK`) VALUES
(1, 'Ali Hamza', 'alihamza@gmail.com', '2024-05-22', '08:10:49', 7, 5),
(2, 'Rayyan', 'rayyan@gmail.com', '2024-07-11', '09:15:50', 14, 8),
(3, 'Ibrahim', 'ibrahim@gmail.com', '2024-07-13', '12:00:20', 5, 7),
(4, 'Rayyan', 'rayyan@gmail.com', '2024-07-11', '09:15:50', 14, 8),
(5, 'Ibrahim', 'ibrahim@gmail.com', '2024-07-13', '12:00:20', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `City_Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `City_Name`) VALUES
(6, 'Lahore'),
(7, 'Attock'),
(8, 'Karachi'),
(9, 'Islamabad'),
(10, 'Peshawar'),
(11, 'Faisalabad'),
(12, 'Rawalpindi'),
(13, 'Gujranwala'),
(14, 'Multan'),
(15, 'Hyderabad'),
(16, 'Quetta'),
(17, 'Bahawalpur'),
(18, 'Sargodha'),
(19, 'Sialkot'),
(20, 'Sukkur'),
(21, 'Larkana'),
(22, 'Rahim Yar Khan'),
(23, 'Sheikhupura'),
(24, 'Jhang'),
(25, 'Dera Ghazi Khan'),
(26, 'Gujrat'),
(27, 'Sahiwal'),
(28, 'Mardan'),
(29, 'Kasur'),
(30, 'Okara'),
(31, 'Kohat'),
(32, 'Abbottabad'),
(33, 'Taxila'),
(34, 'Swabi'),
(35, 'Wazirabad'),
(36, 'Muzaffarabad');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `Cityid_FK` int(11) NOT NULL,
  `specialization` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `address`, `phone_number`, `email`, `Cityid_FK`, `specialization`) VALUES
(5, 'Dr. Sameer', 'North Nazmabad', 2147483647, 'sameer@gmail.com', 8, 'Cardiology'),
(7, 'Dr.Jameel', 'Nazimabad Near Makki Masjid', 316402598, 'dr.jameel@gmail.com', 28, 'psychiatry'),
(8, 'Dr. Kashif', ' Jodia Bazar Near Achhi Kabar,', 2147483647, 'Kashif@gmail.com', 11, 'Allergy and immunology');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_login`
--

CREATE TABLE `doctor_login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_login`
--

INSERT INTO `doctor_login` (`email`, `password`) VALUES
('abc@gmail.com', 'abc123'),
('abc@gmail.com', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(225) NOT NULL,
  `patient_adress` varchar(225) NOT NULL,
  `patient_number` int(11) NOT NULL,
  `patient_email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `patient_name`, `patient_adress`, `patient_number`, `patient_email`) VALUES
(1, 'Alex', 'North Nazimabad', 2147483647, 'alex@gmail.com'),
(5, 'peter', ' Malir Industrial Area Near Liaquat Sq.Malir Colony,', 2147483647, 'peter@gmail.com'),
(7, 'max', '3-Shalimar Plaza Chandni Chowk,', 2147483647, 'max@gmail.com'),
(14, 'henry', ' 31-Sadaf Centre', 156486487, 'henry@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `Role_Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `Role_Name`) VALUES
(2, 'Patient'),
(3, 'Doctor'),
(4, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `Roleid_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Roleid_FK`) VALUES
(1, 'alex', '0548648', 3),
(3, 'marry', 'gsdgdg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`username`, `email`, `password`) VALUES
('haziq', 'mhaziqhabib805@gmail.com', 'haziq123'),
('alex', 'alex@gmail.com', 'alex123'),
('haziq', 'mhaziqhabib805@gmail.com', 'haziq123'),
('hussain', 'hussain@gmail.com', 'hussain123'),
('xyz', 'xyz@gmail.com', 'xyz123'),
('Dr. Sameer', 'sameer@gmail.com', 'sameer123'),
('Dr. jameel', 'jameel@gmail.com', 'jamneel123'),
('Dr. Nasir', 'nasir@gmail.com', 'nasir123'),
('Dr. Jami', 'jami@gmail.com', 'jami123'),
('Dr. Ayyan', 'ayyan@gmail.com', 'ayyan123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Patientid_FK` (`Patientid_FK`),
  ADD KEY `doctorid_FK` (`Doctorid_FK`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cityid_FK` (`Cityid_FK`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_ibfk_1` (`Roleid_FK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `Patientid_FK` FOREIGN KEY (`Patientid_FK`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `doctorid_FK` FOREIGN KEY (`Doctorid_FK`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `Cityid_FK` FOREIGN KEY (`Cityid_FK`) REFERENCES `cities` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Roleid_FK`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

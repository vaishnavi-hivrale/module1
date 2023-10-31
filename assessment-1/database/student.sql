-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 04:50 PM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignments`
--

CREATE TABLE `tbl_assignments` (
  `assignment_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `assignment_path` varchar(255) NOT NULL,
  `assignment_name` varchar(255) NOT NULL,
  `assignment_description` text NOT NULL,
  `assigned_date` varchar(255) NOT NULL,
  `due_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_assignments`
--

INSERT INTO `tbl_assignments` (`assignment_id`, `subject_id`, `assignment_path`, `assignment_name`, `assignment_description`, `assigned_date`, `due_date`) VALUES
(1, 2, 'uploads/assignments/php.docx', 'php-assignment-1', 'Assignment Questions', '2023-08-01', '2023-10-10'),
(2, 1, 'uploads/assignments/python.docx', 'Python-assignment-1', 'Python IMP Question', '2023-10-15', '2023-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counseller`
--

CREATE TABLE `tbl_counseller` (
  `counseller_id` int(11) NOT NULL,
  `counseller_first_name` varchar(255) NOT NULL,
  `counseller_last_name` varchar(255) NOT NULL,
  `counseller_email` varchar(255) NOT NULL,
  `counseller_contact` bigint(20) NOT NULL,
  `counseller_dob` varchar(255) NOT NULL,
  `counseller_gender` varchar(255) NOT NULL,
  `counseller_address` text NOT NULL,
  `counseller_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_counseller`
--

INSERT INTO `tbl_counseller` (`counseller_id`, `counseller_first_name`, `counseller_last_name`, `counseller_email`, `counseller_contact`, `counseller_dob`, `counseller_gender`, `counseller_address`, `counseller_password`) VALUES
(1, 'Katha ', 'Singh', 'katha@gmail.com', 9834767823, '4/6/94', 'female', 'Rajkot', 'katha123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `faculty_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `faculty_first_name` varchar(255) NOT NULL,
  `faculty_last_name` varchar(255) NOT NULL,
  `faculty_contact` bigint(255) NOT NULL,
  `faculty_dob` varchar(255) NOT NULL,
  `faculty_gender` varchar(255) NOT NULL,
  `faculty_email` varchar(255) NOT NULL,
  `faculty_address` text NOT NULL,
  `faculty_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`faculty_id`, `subject_id`, `faculty_first_name`, `faculty_last_name`, `faculty_contact`, `faculty_dob`, `faculty_gender`, `faculty_email`, `faculty_address`, `faculty_password`) VALUES
(1, 1, 'Divya', 'Trivedi', 9876567898, '1996-10-01', 'female', 'divya@gmail.com', 'Madhapar Circle, Rajkot                        ', 'divya123'),
(2, 2, 'Kartik', 'Kansagra', 9845347654, '1992-10-05', 'male', 'kartik@gmail.com', 'KKV Circle, Rajkot                        ', 'kartik123'),
(3, 3, 'Samir ', 'Thakkar', 9924657896, '27/8/1992', 'male', 'samir@gmail.com', 'Kotecha Chowk, Rajlot', 'samir123'),
(4, 4, 'Khyati', 'Kalariya', 6587643565, '9/5/1994', 'female', 'khyati@gmail.com', 'Amin Marg, Rajkot', 'khyati213');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_first_name` varchar(255) NOT NULL,
  `student_last_name` varchar(255) NOT NULL,
  `student_contact` bigint(255) NOT NULL,
  `student_dob` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_address` text NOT NULL,
  `student_marks` int(11) NOT NULL,
  `student_fees` bigint(20) NOT NULL,
  `student_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `faculty_id`, `subject_id`, `student_first_name`, `student_last_name`, `student_contact`, `student_dob`, `student_gender`, `student_email`, `student_address`, `student_marks`, `student_fees`, `student_password`) VALUES
(1, 1, 1, 'Priya', 'Patel', 7784578568, '2001-10-21', 'female', 'priya@gmail.com', 'Kotecha chowk  Rajkot \r\n                     \r\n                    ', 85, 35000, 'priya123'),
(2, 2, 2, 'Vaishnavi', 'Hivrale', 9845762365, '2000-10-20', 'female', 'hivralevaishnavi@gmail.com', '150 feet ring road, Rajkot', 80, 35000, 'vaishnavi123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `subject_name`) VALUES
(1, 'Python'),
(2, 'PHP'),
(3, 'Java'),
(4, 'Android');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_assignments`
--
ALTER TABLE `tbl_assignments`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `student_subject_id` (`subject_id`);

--
-- Indexes for table `tbl_counseller`
--
ALTER TABLE `tbl_counseller`
  ADD PRIMARY KEY (`counseller_id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `faculty_subject` (`subject_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `index_subject_id` (`subject_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_assignments`
--
ALTER TABLE `tbl_assignments`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_counseller`
--
ALTER TABLE `tbl_counseller`
  MODIFY `counseller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_assignments`
--
ALTER TABLE `tbl_assignments`
  ADD CONSTRAINT `student_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject` (`subject_id`);

--
-- Constraints for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD CONSTRAINT `faculty_subject` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject` (`subject_id`);

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `faculty_id` FOREIGN KEY (`faculty_id`) REFERENCES `tbl_faculty` (`faculty_id`),
  ADD CONSTRAINT `index_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

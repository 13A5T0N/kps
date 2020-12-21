-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2020 at 05:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kps`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject_alias`
--

CREATE TABLE `subject_alias` (
  `alias_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject_info`
--

CREATE TABLE `subject_info` (
  `subject_id` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `voornamen` varchar(200) NOT NULL,
  `Geb_Datum` date NOT NULL,
  `Geb_plaats` varchar(100) NOT NULL,
  `Nationaliteit` varchar(50) NOT NULL,
  `ID_nummer` varchar(50) NOT NULL,
  `pasp_no` varchar(50) NOT NULL,
  `bron` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject_modus`
--

CREATE TABLE `subject_modus` (
  `modus_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `modus` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject_nummer`
--

CREATE TABLE `subject_nummer` (
  `nummer_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `nummer` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subj_bijzonderheden`
--

CREATE TABLE `subj_bijzonderheden` (
  `bjiz_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `bijzonderhijd` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject_alias`
--
ALTER TABLE `subject_alias`
  ADD PRIMARY KEY (`alias_id`);

--
-- Indexes for table `subject_info`
--
ALTER TABLE `subject_info`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `subject_modus`
--
ALTER TABLE `subject_modus`
  ADD PRIMARY KEY (`modus_id`);

--
-- Indexes for table `subject_nummer`
--
ALTER TABLE `subject_nummer`
  ADD PRIMARY KEY (`nummer_id`);

--
-- Indexes for table `subj_bijzonderheden`
--
ALTER TABLE `subj_bijzonderheden`
  ADD PRIMARY KEY (`bjiz_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject_alias`
--
ALTER TABLE `subject_alias`
  MODIFY `alias_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_info`
--
ALTER TABLE `subject_info`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_modus`
--
ALTER TABLE `subject_modus`
  MODIFY `modus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_nummer`
--
ALTER TABLE `subject_nummer`
  MODIFY `nummer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subj_bijzonderheden`
--
ALTER TABLE `subj_bijzonderheden`
  MODIFY `bjiz_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

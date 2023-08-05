-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 07:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persona2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

CREATE TABLE `costs` (
  `Event_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `host_clg` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `costs`
--

INSERT INTO `costs` (`Event_name`, `event`, `cost`, `host_clg`) VALUES
('Cognisance Valorant', 'A1', 500, 'SOC'),
('Cognisance Valorant', 'A2', 500, 'SOC'),
('Cognisance BGMI', 'A3', 400, 'SOC'),
('Cognisance BGMI', 'A4', 400, 'SOC'),
('Cognisance Find the way out', 'A5', 300, 'SOC'),
('Cognisance Find the way out', 'A6', 300, 'SOC'),
('Cognisance PS4', 'A7', 50, 'SOC'),
('Cognisance PS4', 'A8', 50, 'SOC'),
('Codebreak 4.0', 'A9', 0, 'SOC'),
('Design Competition ', 'A10', 50, 'SOC'),
('Cyber Shenanigans: A Safe Hacking Fiesta', 'A11', 0, 'SOC'),
('Project Expo', 'A12', 200, 'SOC'),
('Brains On Fire', 'A13', 100, 'SOC'),
('Idea Expo-Poster', 'A14', 0, 'SOC'),
('Idea Expo-Presentation', 'A15', 0, 'SOC'),
('Techno Escape Room', 'A16', 200, 'SOC'),
('Tech Improv', 'A17', 50, 'SOC'),
('\nTechTalks \n', 'A18', 0, 'SOC'),
('Capture the motion', 'A19', 50, 'SOC'),
('Game Filler', 'A20', 50, 'SOC'),
('Astro - Art Competition (Astronomy Art)', 'B1', 150, 'SOE-AERO'),
('Aerospace Projects Exhibition', 'B2', 100, 'SOE-AERO'),
('RC Aircraft Competition', 'B3', 1000, 'SOE-AERO'),
('SkyHigh - Glider Competition', 'B4', 300, 'SOE-AERO'),
('CAD-War', 'C1', 100, 'SOE-CIVIL'),
('STADD-War', 'C2', 100, 'SOE-CIVIL'),
('Concrete Cube Testing Competition', 'C3', 100, 'SOE-CIVIL'),
('Innovate', 'C4', 0, 'SOE-CIVIL'),
('Cross Over- Bridge Making Competition', 'C5', 100, 'SOE-CIVIL'),
('Innovative Technical Idea', 'D1', 100, 'SOE-ECE'),
('Jigyasa -Project Competition & Exhibition', 'D2', 100, 'SOE-ECE'),
('4x4 Road Rally Race', 'D3', 50, 'SOE-ECE'),
('Digicode', 'D4', 50, 'SOE-ECE'),
('Just Shop It', 'D5', 50, 'SOE-ECE'),
('Battle of the Brains â€“  Quiz Competition', 'E1', 100, 'SOE-MECH'),
('Rocket Launcher', 'E2', 100, 'SOE-MECH'),
('Box Cricket', 'E3', 500, 'SOE-MECH'),
('Robo Race', 'E4', 500, 'SOE-MECH'),
('CAD Modelling', 'E5', 100, 'SOE-MECH'),
('SciFun(Safari of Science)', 'F1', 50, 'SOE-BIO'),
('Food Shark Tank', 'G1', 100, 'FOOD-TECH'),
('Waste to Best', 'G2', 100, 'FOOD-TECH'),
('Food Dumb Charade', 'G3', 100, 'FOOD-TECH'),
('Food Hunt', 'G4', 100, 'FOOD-TECH'),
('Food war', 'G5', 100, 'FOOD-TECH'),
('Ad Mad Food', 'G6', 200, 'FOOD-TECH'),
('Mozaico- Interdisciplinary workshop ', 'H1', 250, 'ARCH'),
('Hackathon--Redesigning Educational Spaces ', 'H2', 100, 'ARCH'),
('NAVAL ', 'I1', 0, 'MANET'),
('CASE MANIA', 'J1', 250, 'MANAGEMENT'),
('TREASURE HUNT', 'J2', 250, 'MANAGEMENT'),
('CAMPUS FUN-RUN', 'J3', 50, 'MANAGEMENT'),
('AD MAD SHOW', 'J4', 250, 'MANAGEMENT'),
('QUIZ BEE', 'J5', 100, 'MANAGEMENT'),
('MOOT COURT', 'J6', 200, 'MANAGEMENT'),
('ELEVATOR JAZZ', 'J7', 100, 'MANAGEMENT'),
('FUTSAL', 'J8', 250, 'MANAGEMENT'),
('BUSINESS PLAN COMPETITION', 'J9', 200, 'MANAGEMENT'),
('BOX- CRICKET', 'J10', 300, 'MANAGEMENT'),
('STORY TELLING', 'J11', 100, 'MANAGEMENT'),
('Poster Design', 'K1', 200, 'DESIGN'),
('Lock & Load', 'K2', 1000, 'DESIGN'),
('Life-sized Jenga', 'K3', 50, 'DESIGN'),
('Slip Tease', 'K4', 100, 'DESIGN'),
('Color Wheel', 'K5', 120, 'DESIGN'),
('Yokozun', 'K6', 100, 'DESIGN'),
('Hunt hints', 'K7', 300, 'DESIGN'),
('Ju-gadi', 'K8', 250, 'DESIGN'),
('Bamboo Weave', 'K9', 100, 'DESIGN'),
('Clay Modelling', 'K10', 200, 'DESIGN'),
('Flea Market', 'K11', 300, 'DESIGN'),
('THE ART TRIBE ', 'L1', 500, 'FINE-ART'),
('ZURI', 'L2', 0, 'FINE-ART'),
('ART  à¤®à¥‡à¤²à¤¾', 'L3', 0, 'FINE-ART'),
('Vishwalalit - On the spot painting ', 'L4', 500, 'FINE-ART'),
('Vishwalalit Online Competition - PAINTING SCULPTURE PHOTOGRAPHY', 'L5', 500, 'FINE-ART'),
('24 Hour Filmmaking Competition', 'M1', 0, 'FILM'),
(' Public Screenings', 'M2', 0, 'FILM'),
('Face the cam', 'N1', 0, 'ISBJ'),
('Shutterbug Hunt', 'N2', 99, 'ISBJ'),
('Ad-attack with other college', 'N3', 0, 'ISBJ'),
('Fiction- Con', 'N4', 100, 'ISBJ'),
('Le Foto exposition \n', 'N5', 0, 'ISBJ'),
('Clash of Cognition - Escape Room', 'O1', 0, 'VEDIC'),
('Clash of Cognition - Quiz', 'O2', 0, 'VEDIC'),
('Mind Dissection', 'O3', 0, 'VEDIC'),
('PsyCogn', 'O4', 0, 'VEDIC'),
('Trash to Cash', 'P1', 100, 'RESEARCH'),
('Hackathon--Redesigning learning Spaces [In collaboration with SoA]', 'P2', 100, 'RESEARCH');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `UniqueId` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `Event` varchar(100) NOT NULL,
  `Txnid` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_form_users`
--

CREATE TABLE `reg_form_users` (
  `id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fullname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `College` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Txn_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timestamp` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reg_form_users`
--

INSERT INTO `reg_form_users` (`id`, `Fullname`, `email`, `College`, `PhoneNo`, `event`, `Txn_id`, `timestamp`) VALUES
('63d9412dbd143', '', '', '', '', '', NULL, ''),
('63d941560772b', '', '', '', '', '', NULL, ''),
('63d94183d2c04', '', '', '', '', '', NULL, ''),
('63d941a452c9a', '', '', '', '', '', NULL, ''),
('63d941af93f8c', '', '', '', '', '', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_form_users`
--
ALTER TABLE `reg_form_users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

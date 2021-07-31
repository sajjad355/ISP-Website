-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 11:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complain`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `Id` int(4) NOT NULL,
  `Name` varchar(300) DEFAULT '--------------------------',
  `MobileNo` varchar(30) DEFAULT '--------------------------',
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `AnyServiceProblem` varchar(50) DEFAULT '--------------------------',
  `AnyServiceProblemDesc` varchar(200) DEFAULT '--------------------------',
  `InternetBrowserProblem` varchar(100) DEFAULT '--------------------------',
  `DownloadProblem` varchar(100) DEFAULT '--------------------------',
  `FacebookBufferProblem` varchar(100) DEFAULT '--------------------------',
  `LineDropTime` varchar(100) DEFAULT '--------------------------',
  `PackageWiseDownloadOk` varchar(100) DEFAULT '--------------------------',
  `HappyWithService` varchar(100) DEFAULT '--------------------------',
  `PubgFreefirePing` varchar(40) DEFAULT '--------------------------',
  `FtpServerProblem` varchar(100) DEFAULT '--------------------------',
  `AndroidIosAppProblem` varchar(200) DEFAULT '--------------------------',
  `CommentAboutCompany` varchar(200) DEFAULT '--------------------------'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`Id`, `Name`, `MobileNo`, `Date`, `AnyServiceProblem`, `AnyServiceProblemDesc`, `InternetBrowserProblem`, `DownloadProblem`, `FacebookBufferProblem`, `LineDropTime`, `PackageWiseDownloadOk`, `HappyWithService`, `PubgFreefirePing`, `FtpServerProblem`, `AndroidIosAppProblem`, `CommentAboutCompany`) VALUES
(4, 'সাজ্জাদুর রহমান', '০১৩১৮৯৭৯০১৯', '2021-07-30 10:21:35', 'হ্যাঁ', 'পাবজি খেলতে পারছি না', 'হ্যাঁ', 'হ্যাঁ', 'হ্যাঁ', 'রাতে', 'হ্যাঁ', 'না', '400', 'না', 'না', 'Need to provide more speed'),
(5, 'রায়হান', '০১৩১৮৯৭৯০১৯', '2021-07-30 10:21:35', 'না', 'ফ্রি ফায়ার খেলতে পারছি না', 'না', 'না', 'হ্যাঁ', 'সন্ধ্যায়', 'হ্যাঁ', 'হ্যাঁ', '400', 'হ্যাঁ', 'হ্যাঁ', 'Net slow'),
(6, 'Raihan', '01788034452', '2021-07-31 03:31:45', 'Yes', 'sds', 'Yes', '--------------------------', 'No', 'সবসময়', 'Yes', 'ssfs', 'No', 'No', '--------------------------', 'sfsfs'),
(7, 'sajjadurrahman3434@gmail.com', '01788034452', '2021-07-31 03:33:31', 'Yes', '', 'Yes', '--------------------------', 'Yes', 'রাতে', 'No', 'aaad', 'Yes', 'Yes', '--------------------------', 'adad'),
(8, 'swammia908@gmail.com', '01788034452', '2021-07-31 03:35:54', 'না', 'sasda', 'হ্যাঁ', '--------------------------', 'না', 'রাতে', 'না', 'adada', 'হ্যাঁ', 'Yes', '--------------------------', 'adadad'),
(9, 'Abu Hanif Rahil', '01788034452', '2021-07-31 07:57:58', 'হ্যাঁ', 'adada', 'না<', '--------------------------', 'হ্যাঁ', 'রাতে', 'না', 'adada', 'না<', 'হ্যাঁ', '--------------------------', 'adada'),
(10, 'sodjadjaljalfafasfaf', '01788034452', '2021-07-31 08:06:55', 'হ্যাঁ', 'adada', 'হ্যাঁ', '--------------------------', 'না', 'দিনে', 'না', 'adada', 'না<', 'না', 'হ্যাঁ', 'dadadada');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL DEFAULT '---------------------------',
  `MobileNumber` varchar(30) NOT NULL DEFAULT '---------------------------',
  `Email` varchar(200) NOT NULL DEFAULT '---------------------------',
  `Message` varchar(500) NOT NULL DEFAULT '---------------------------',
  `TimeStamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `MobileNumber`, `Email`, `Message`, `TimeStamp`) VALUES
(1, 'Sajjad', '01780034452', 'raihanul@gmail.com', 'Khub ii Problem', '2021-07-30 17:17:07'),
(3, 'Md. Raihanul Islam', '01780034452', 'swammia908@gmail.com', 'adasdadad', '2021-07-31 07:55:04'),
(4, 'Md. Raihanul Islam', '01780034452', 'swammia908@gmail.com', 'dfwfwregferfwefe', '2021-07-31 07:58:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

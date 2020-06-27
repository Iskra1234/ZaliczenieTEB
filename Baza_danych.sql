-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 10:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminlteteb`
--

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `permission` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `permission`) VALUES
(1, 'admin'),
(2, 'moderator'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) UNSIGNED NOT NULL,
  `permissionid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `avatar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `permissionid`, `name`, `surname`, `email`, `password`, `creationdate`, `last_login`, `active`, `avatar`) VALUES
(1, 2, 'Tymon', 'Tymański', 'ttymanski@fcku.com', '$argon2id$v=19$m=65536,t=4,p=1$MndKL2RMNVpPVkZFeXczdQ$gHe8hFPd1ZnByrA0GFJQIv/eaX66QqgO5VVG6+as4AE', '2020-06-09 04:34:38', '2020-06-24 10:46:43', 0, 'iUJ3YKjN_400x400.jpg'),
(2, 2, 'Leon', 'Borucki', 'LBorucki@wp.pl', '$argon2id$v=19$m=65536,t=4,p=1$eng1N2JybTZPSjJDY0ZDdw$jEbC7esn/Br55WX23I5obzTZPW8sG90gLZm65ob6esM', '2020-05-29 12:33:37', '2020-06-26 23:42:30', 1, 'avatar.jpg'),
(3, 3, 'Cyrus', 'Wykrzykowski', 'CWykrzykowski@o2.pl', '$argon2id$v=19$m=65536,t=4,p=1$bmF6S05RNFNaTFMuZWtwSw$Na9m+ge2VLXRFKU9QBz2xXm5nN8MnaEAdRphC6AXnG4', '2020-06-21 12:00:47', '2020-06-03 01:00:43', 1, 'tumblr_pefs2qIg6h1uobsw4o1_250.png'),
(4, 3, 'Faust', 'Wiśniowiecki', 'fwisniowiecki@ep.pl', '$argon2id$v=19$m=65536,t=4,p=1$R25pUEpIT2lJYi5pL2N4Sg$xp9DgModt3xa6w/FdK+utFt8w46qERPl3hebJSWTSbc', '2020-06-13 11:09:24', '2020-06-26 15:05:44', 0, 'p-Avatar-The-Last-Airbender-Jessie-Flower.jpg'),
(10, 3, 'Anna', 'Wiśniowska', 'a.wisnia@123.pl', '$argon2id$v=19$m=65536,t=4,p=1$UHdhc2txUDZ0MUhLRndFcw$5kgEtWX0P9eCzAplk+xDB2zhIKNIOhXpNTNE23s8iDo', '2020-06-26 18:22:50', NULL, 1, 'p-Avatar-The-Last-Airbender-Jessie-Flower.jpg'),
(11, 3, 'Krystyna', 'Szarotka', 'k.szarotka@123.pl', '$argon2id$v=19$m=65536,t=4,p=1$WFlERzBSS1dicFpILmJIRw$oeyI6ieZVldDVWIeEOc582wf6J1JQAF6YtwTBBkiHZs', '2020-06-26 18:24:11', NULL, 1, 'tumblr_4eaf5ae48097b082c55b7065.jpg'),
(12, 3, 'Ida', 'Markowska', 'ida.markowska@123.pl', '$argon2id$v=19$m=65536,t=4,p=1$UGdVenJTbE5ES3FCYjEzNw$tRWpZ/7LL062cycZnBXO4ncSvMmGFlm7wRBbcu/KFS8', '2020-06-26 18:25:11', NULL, 1, 'iUJ3YKjN_400x400.jpg'),
(13, 3, 'Kasia', 'Bielska', 'kbielska@123.pl', '$argon2id$v=19$m=65536,t=4,p=1$Umh5eXZTakQ0Qm9rT1FFQg$d1n10L//wyKIOBuZegZopilautxhnsBtQOFbTj7mPg0', '2020-06-26 18:28:46', NULL, 1, 'p-Avatar-The-Last-Airbender-Jessie-Flower.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `permissionid` (`permissionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`permissionid`) REFERENCES `permission` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

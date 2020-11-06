-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2020 at 11:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `sid` int(100) NOT NULL,
  `rating` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Artist` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Rating` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `Title`, `Artist`, `Genre`, `Rating`) VALUES
(1, 'No Sleep', 'Martin Garix', 'Dance/Electronic', 0),
(2, 'Havana', 'Camila Cabello', 'Pop', 0),
(3, 'Girls Like You', 'Maroon 5', 'Pop', 0),
(4, 'Taki Taki', 'DJ Snake', 'Dance/Electronic', 0),
(5, 'Hope', 'The Chainsmokers', 'EDM', 0),
(6, 'Something Just Like This', 'The Chainsmokers', 'Dance/Electronic', 0),
(7, 'This Feeling', 'The Chainsmokers', 'Dance/Electronic', 0),
(8, 'Happier', 'Marshmello', 'Dance/Electronic', 0),
(9, 'Thunder', 'Imagine Dragons', 'Pop', 0),
(10, 'High on Life', 'Martin Garrix', 'Pop', 0),
(11, 'Closer', 'The Chainsmokers', 'Dance/Electronic', 0),
(12, 'Shut Up and Dance', 'Walk The Moon', 'Pop', 0),
(13, 'Summer On You', 'PRETTYMUCH', 'Pop', 0),
(14, 'Who do you love', 'The Chainsmokers', 'Dance/Electronic', 0),
(15, 'Sucker', 'Jonas Brothers', 'Pop', 0),
(16, 'Here With Me', 'Marshmello', 'Dance/Electronic', 0),
(17, '7 Rings', 'Ariana Grande', 'Pop', 0),
(18, 'Trampoline', 'SHAED', 'Electro', 0),
(19, 'On My Way', 'Alan Walker', 'Pop', 0),
(20, 'Kills You Slowly', 'The Chainsmokers', 'Dance/Electronic', 0),
(21, 'Happy Now', 'Kygo', 'Dance/Electronic', 0),
(22, 'Hard For Me', 'Michele Morrone', 'Pop', 0),
(23, 'Cold/Mess', 'Pratik Kuhad', 'Pop', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `username`, `password`) VALUES
(1, 'rashi@gmail.com', 'Rashi', '1234'),
(2, 'rahul@gmail.com', 'Rahul', '1234'),
(3, 'hiren@gmail.com', 'Hiren', '1234'),
(4, 'jainam@gmail.com', 'Jainam', '1234'),
(5, 'darsh@gmail.com', 'Darsh', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `sid` FOREIGN KEY (`sid`) REFERENCES `songs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uid` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

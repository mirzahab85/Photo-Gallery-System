-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 09:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `title`, `description`, `filename`, `type`, `size`) VALUES
(1, 'Photo from the Mountaints ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, perspiciatis quasi. Ducimus quis quaerat iure quae iusto\r\nad mollitia hic repudiandae error. Numquam, aperiam natus deserunt, nostrum soluta aspernatur dolor pariatur autem at\r\nblanditiis quia corrupti odit ea, illo voluptatibus! Officiis cupiditate provident, nam aspernatur id reprehenderit\r\nomnis voluptatem qui.', 'image.jpg', 'image', 11),
(2, 'Just some test title', '', '', '', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'mhabul', 'asd123', 'Mirza', 'Habul'),
(24, 'WILLIAMS', 'justpassword', '', ''),
(25, 'WILLIAMS', '', '', ''),
(41, 'tolital197453', '', '', ''),
(42, 'username', '', '', ''),
(43, 'David45', 'david1989', 'David', 'WILLIAMS'),
(44, '1', '', '', ''),
(45, 'tolital197453', '', '', ''),
(162, 'NEW USER', '', '', ''),
(163, 'Sudent', 'sometingnweirfd', 'SOL', 'DOnt know'),
(164, 'NEW USER', '', '', ''),
(165, 'Sudent', 'sometingnweirfd', 'SOL', 'DOnt know'),
(166, 'NEW USER', '', '', ''),
(167, 'Sudent', 'sometingnweirfd', 'SOL', 'DOnt know'),
(168, 'NEW USER', '', '', ''),
(169, 'Sudent', 'sometingnweirfd', 'SOL', 'DOnt know'),
(170, 'NEW USER', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

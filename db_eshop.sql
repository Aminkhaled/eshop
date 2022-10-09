-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 أكتوبر 2022 الساعة 13:55
-- إصدار الخادم: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eshop`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `url_address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `rank` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `phone1` varchar(30) NOT NULL,
  `phone2` varchar(30) NOT NULL,
  `address1` varchar(250) NOT NULL,
  `address2` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `url_address`, `email`, `password`, `rank`, `date`, `phone1`, `phone2`, `address1`, `address2`, `title`, `occupation`, `image`) VALUES
(1, 'Khaled Ahmed Amen', 'vaKZvZoPjDJata8hGw21', 'admin@admin.com', '75fde066c320853a80bdd7fe7fa797ae0d3ecb37', 'customer', '2022-10-06 16:49:42', '+201153496372', '+201153496372', 'New nohza', 'Ain Helwan', 'manager', 'Art Director', 'images/avatar.png'),
(2, 'mina david', 'hMKL5JR3uZIVtyW93O66', 'mina@2creativeagency.com', '75fde066c320853a80bdd7fe7fa797ae0d3ecb37', 'customer', '2022-10-09 09:01:12', '+201553496372', '+015534963787', 'Shoubra next metro station', 'New Nohza', 'Graphic Designer', 'Art Director', 'images/avatar.png'),
(3, 'mero', 'gZ5nt6AuIGY6VEXB84Bl', 'amira@gmail.com', '75fde066c320853a80bdd7fe7fa797ae0d3ecb37', 'customer', '2022-10-09 12:56:22', '+201153496372', '+015534963787', 'New nohza', 'Ain Helwan', 'manager', 'Art Director', 'images/avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

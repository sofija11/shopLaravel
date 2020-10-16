-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 07:30 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `IdCartItem` int(30) NOT NULL,
  `idProduct` int(30) NOT NULL,
  `idUser` int(30) NOT NULL,
  `quantity` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`IdCartItem`, `idProduct`, `idUser`, `quantity`) VALUES
(1, 5, 8, 1),
(2, 5, 8, 2),
(3, 5, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int(15) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `name`) VALUES
(1, 'Rings'),
(2, 'Earrings'),
(4, 'Necklases'),
(5, 'Bracelets');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `idColor` int(15) NOT NULL,
  `color` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`idColor`, `color`) VALUES
(1, 'Blue'),
(3, 'Yellow'),
(4, 'Black'),
(5, 'White'),
(6, 'Pink');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `idMessage` int(11) NOT NULL,
  `caption` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `send_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUser` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`idMessage`, `caption`, `message`, `send_at`, `idUser`) VALUES
(1, 'Congratulations', 'Bravissimo', '2020-03-24 00:37:45', 8),
(2, 'Commendation', 'Site is very intuitive! Congrats!\r\n20', '2020-03-24 00:38:51', 8),
(3, 'Well done!', 'Great design!', '2020-03-24 00:40:35', 5);

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `idNav` int(15) NOT NULL,
  `href` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nameNav` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`idNav`, `href`, `nameNav`) VALUES
(1, 'home', 'HOME'),
(2, 'shop', 'SHOP'),
(3, 'about', 'ABOUT'),
(4, 'contact', 'CONTACT'),
(5, 'author', 'AUTHOR');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` int(15) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `idCat` int(15) NOT NULL,
  `idColor` int(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `name`, `price`, `image`, `idCat`, `idColor`, `created_at`, `deleted_at`, `updated_at`, `status`) VALUES
(1, 'Solid Heart', 50, 'n1.jpg', 4, 3, '2020-03-26 23:08:45', NULL, NULL, 1),
(2, 'Melody neck', 90, 'n11.jpg', 4, 1, '2020-03-26 23:08:45', NULL, '2020-03-26 23:04:11', 1),
(3, 'Coral kiss', 90, 'n2.jpg', 4, 6, '2020-03-26 23:58:08', NULL, NULL, 1),
(4, 'Heart neck kiss', 25, 'n3.jpg', 4, 3, '2020-03-27 00:00:18', NULL, NULL, 1),
(5, 'Black brace', 85, 'b2.jpg', 5, 4, '2020-03-27 00:12:44', NULL, NULL, 1),
(6, 'Infinity brace', 66, 'b1.jpg', 5, 5, '2020-03-27 00:14:20', NULL, NULL, 1),
(7, 'Blue brace', 60, 'b3.jpg', 5, 1, '2020-03-27 00:18:15', NULL, NULL, 1),
(8, 'Bright sky', 55, 'r1.jpg', 1, 1, '2020-03-27 00:22:49', NULL, NULL, 1),
(9, 'Swarovski pearl', 100, 'r2.jpg', 1, 5, '2020-03-27 00:24:21', NULL, NULL, 1),
(10, 'Watermelon ring', 85, 'r3.jpg', 1, 6, '2020-03-27 00:25:29', NULL, NULL, 1),
(11, 'Sun Hello', 68, 'r4.jpg', 1, 3, '2020-03-27 00:27:11', NULL, NULL, 1),
(12, 'White beauty pearl', 70, 'e1.jpg', 2, 5, '2020-03-27 00:37:10', NULL, NULL, 1),
(13, 'Shine bright', 55, 'e2.jpg', 2, 5, '2020-03-27 00:38:54', NULL, NULL, 1),
(14, 'Gold shine', 180, 'e3.jpg', 2, 3, '2020-03-27 00:39:32', NULL, NULL, 1),
(15, 'Sea perfection ', 90, 'e4.jpg', 2, 1, '2020-03-27 00:40:04', NULL, NULL, 1),
(16, 'Pink long beauty', 70, 'e5.jpg', 2, 6, '2020-03-27 00:43:19', NULL, NULL, 1),
(18, 'iijd', 877, 'jaoixj', 5, 1, '2020-03-27 08:58:36', '2020-03-27 08:07:52', NULL, 0),
(19, 'jbjhbk', 77, '1585309405_p13.jpg', 1, 1, '2020-03-27 11:43:25', '2020-03-27 11:28:17', NULL, 0),
(20, 'kcsmkc', 888, '1585312138_p25.jpg', 1, 1, '2020-03-27 12:28:58', '2020-03-27 11:30:24', NULL, 0),
(21, 'Magic earrings', 90, '1585324841_p12.jpg', 2, 4, '2020-03-27 12:30:53', NULL, '2020-03-27 15:00:41', 1),
(22, 'nknmk', 88, '1585312414_p15.jpg', 1, 1, '2020-03-27 12:33:34', '2020-03-27 11:35:47', NULL, 0),
(23, 'ajde', 777, '1585312594_autor.jpg', 1, 1, '2020-03-27 12:36:34', '2020-03-27 19:25:13', NULL, 0),
(24, 'ajde', 444, '1585312786_autor.jpg', 1, 1, '2020-03-27 12:39:46', '2020-03-27 19:24:55', NULL, 0),
(25, 'Ring', 889, '1585340807_p12.jpg', 1, 1, '2020-03-27 14:00:25', '2020-03-27 14:59:09', '2020-03-27 19:26:47', 1),
(26, 'Necklasse heart', 60, '1594173527_fdsd.jpg', 4, 5, '2020-07-08 01:58:48', '2020-07-07 23:59:24', NULL, 0),
(27, 'neck yeel', 754, '1594174108_5e154878-cc7b-417338.jpg', 4, 3, '2020-07-08 02:08:28', NULL, NULL, 1),
(28, 'heart neck', 432, '1594174146_aebe.jpeg', 4, 3, '2020-07-08 02:09:06', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_quantity`
--

CREATE TABLE `product_quantity` (
  `idPQ` int(15) NOT NULL,
  `idProduct` int(15) NOT NULL,
  `idQuantity` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_quantity`
--

INSERT INTO `product_quantity` (`idPQ`, `idProduct`, `idQuantity`) VALUES
(1, 2, 5),
(2, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `idQuantity` int(15) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quantity`
--

INSERT INTO `quantity` (`idQuantity`, `quantity`) VALUES
(1, 20),
(2, 10),
(3, 25),
(4, 60),
(5, 30),
(6, 8),
(7, 9),
(8, 60);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` int(15) NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(15) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(2) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `idRole` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `firstname`, `lastname`, `username`, `email`, `password`, `status`, `created_at`, `deleted_at`, `idRole`) VALUES
(4, 'Snezana', 'Joksic', 'sneki_098', 'sneza_joksic@gmail.com', '7614b6fe0ff5bfef1cf641d9710f3527', 1, '2020-03-22 22:29:10', NULL, 2),
(5, 'Luka', 'Rakicevic', 'luk_ra65', 'luka45rakicevic@gmail.com', '67aac13bd11791b79a53ee2276e06f64', 1, '2020-03-22 22:33:14', NULL, 2),
(6, 'Kristina', 'Markovic', 'kile55_', 'kik_markovic@gmail.com', '1bf33a7af1e0b97b698a35492ede029b', 1, '2020-03-22 23:22:51', NULL, 2),
(7, 'Marko', 'Pantelic', 'mar_7ko', 'marko_pan00@hotmail.com', 'dc051bf606ad4c4918609b5e28e8b1ca', 1, '2020-03-22 23:25:16', NULL, 2),
(8, 'Sofija', 'Vitorovic', 'sofija__98_admin', 'vitorovicsofija610@gmail.com', 'f0eeae31cd0a20720a2ae4e2015f17be', 1, '2020-03-23 00:01:11', NULL, 1),
(14, 'Petar', 'Jovanovic', 'pero_997_76', 'petar_jov65@gmail.com', '7a86598ead55ba62355eed13bfb25713', 1, '2020-03-26 18:51:12', NULL, 2),
(15, 'Marinko', 'Rokvic', 'spale_999456', 'mare@gmail.com', 'a137b2562e356fc9698bde5247e74fd8', 1, '2020-03-27 15:01:02', NULL, 2),
(16, 'Lenka', 'Savic', 'bata_el87', 'lenka@gmail.com', '1a6f1af372e200422ee288503f2e198e', 1, '2020-03-27 20:09:28', NULL, 2),
(17, 'Milan', 'Spasic', 'user_98', 'mail@gmail.com', '0b6d52c0fb95a88c7b1544e63d2ac2de', 1, '2020-03-27 21:16:46', NULL, 2),
(18, 'Anica', 'Spasic', 'user_8765', 'anica_766@gmail.com', 'aea1197bd4a758f9dd04102a442995b5', 1, '2020-07-09 15:07:01', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`IdCartItem`),
  ADD KEY `idProduct` (`idProduct`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`idColor`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idMessage`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`idNav`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `idCat` (`idCat`),
  ADD KEY `idColor` (`idColor`);

--
-- Indexes for table `product_quantity`
--
ALTER TABLE `product_quantity`
  ADD PRIMARY KEY (`idPQ`),
  ADD KEY `idProduct` (`idProduct`),
  ADD KEY `idQuantity` (`idQuantity`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`idQuantity`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idRole` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `IdCartItem` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `idColor` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idMessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `idNav` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_quantity`
--
ALTER TABLE `product_quantity`
  MODIFY `idPQ` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `idQuantity` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `category` (`idCategory`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`idColor`) REFERENCES `color` (`idColor`);

--
-- Constraints for table `product_quantity`
--
ALTER TABLE `product_quantity`
  ADD CONSTRAINT `product_quantity_ibfk_1` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`),
  ADD CONSTRAINT `product_quantity_ibfk_2` FOREIGN KEY (`idQuantity`) REFERENCES `quantity` (`idQuantity`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

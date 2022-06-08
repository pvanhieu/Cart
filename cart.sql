-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2022 at 01:26 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `date`) VALUES
(20, 'Kirsch - Schloss', '2021-06-17 00:00:00'),
(19, 'Chips Potato Reg 43g', '2021-08-30 00:00:00'),
(18, 'Broom - Push', '2022-02-23 00:00:00'),
(17, 'Beans - Turtle, Black, Dry', '2021-08-15 00:00:00'),
(16, 'Flour - Strong', '2021-06-16 00:00:00'),
(15, 'Pepper - Chilli Seeds Mild', '2022-03-09 00:00:00'),
(14, 'Yogurt - Cherry, 175 Gr', '2022-03-07 00:00:00'),
(13, 'Milk Powder', '2021-10-01 00:00:00'),
(12, 'Dip - Tapenade', '2021-09-17 00:00:00'),
(11, 'Wine - Champagne Brut Veuve', '2022-04-24 00:00:00'),
(10, 'Wine - Delicato Merlot', '2022-03-09 00:00:00'),
(9, 'Soup - Campbells, Minestrone', '2022-05-24 00:00:00'),
(8, 'Wine - Red, Cabernet Merlot', '2021-07-16 00:00:00'),
(7, 'Pur Value', '2022-02-05 00:00:00'),
(6, 'Banana - Leaves', '2022-01-22 00:00:00'),
(5, 'Nestea - Iced Tea', '2021-08-15 00:00:00'),
(4, 'Beer - Creemore', '2021-09-03 00:00:00'),
(3, 'Soup Campbells Turkey Veg.', '2021-07-10 00:00:00'),
(2, 'Table Cloth 81x81 White', '2021-12-31 00:00:00'),
(1, 'Sword Pick Asst', '2021-07-04 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

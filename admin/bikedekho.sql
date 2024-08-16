-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 03:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikedekho`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `customer_name`, `order_date`, `amount`) VALUES
(1, 'Mo Arfat Ansari', '2024-08-16', 10000),
(2, 'soul', '2024-08-16', 155000),
(3, 'israr shaikh', '2024-08-16', 155000),
(4, 'Rahull Gupta', '2024-08-16', 138495);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(5) NOT NULL,
  `breaks` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `engine_cc` int(10) NOT NULL,
  `max_power` text NOT NULL,
  `tank_capacity` float NOT NULL,
  `wheelbase` text NOT NULL,
  `cooling` varchar(50) NOT NULL,
  `max_torque` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `in_stock` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `breaks`, `title`, `engine_cc`, `max_power`, `tank_capacity`, `wheelbase`, `cooling`, `max_torque`, `price`, `image`, `category`, `created_at`, `in_stock`) VALUES
(1, 'Double Disc', 'Kawasaki Ninja ZX-10R', 998, '303 PS @ 13200 rpm', 17, 'Alloy', 'Air cooled & Liquid Cooled', '114.9 Nm @11400 rpm', '16 79 000 ', '66b9ee572e1d10.76796353.png', 'Super Bike & Sport Bike', '2024-08-12', 1),
(2, 'Double Disc, Dual Channel ABS', 'Ktm Rc 390', 373, '42.9 bhp @ 9000 rpm', 13.7, 'Alloy', 'Air cooled ', '37 Nm @ 7000 rpm', '2 87 439', '66b9f228449e00.73652135.png', 'Sport Bike', '2024-08-12', 1),
(3, 'Double Disc, Dual Channel ABS', 'Ktm 1290 Duke R', 1301, '180 hp @ 8870 rpm', 18, 'Alloy', 'Liquid Cooled', '106.20 Nm 8000 rpm', '12 05 000', '66b9f45de04c34.32091096.png', 'Super Bike & Sport Bike', '2024-08-12', 1),
(4, 'Dual Channel ABS', 'Harley Davidson Iron 883', 883, '50 bhp @ 5500 rpm', 12.5, 'Alloy', 'Air cooled ', '70 Nm @ 3500 rpm', '9 34 177', '66b9f6cfcc1505.95307949.png', 'Clasic', '2024-08-12', 1),
(5, 'Unified Braking System', 'Yamaha YZF-R1', 998, '200 bps @ 13500 rpm ', 17, 'Alloy', ' Liquid Cooled', '112.4 Nm @11500 rpm', '20 39 000', '66b9f84acca8b7.32970775.png', 'Stunning Super Bike ', '2024-08-12', 1),
(6, 'Single, Dual Channel ABS', 'Royal Enfield Clasic 350', 350, '20.2 bhp @ 6100 rpm', 13, 'Alloy & Ring', 'Air cooled ', '27 Nm @4000 rpm', '2 24 755', '66b9f9e10c0ae0.75336828.png', 'Clasic', '2024-08-12', 1),
(7, 'Dual Channel ABS', 'Jawa 42 Bobber ', 334, '29.51 bhp', 14, 'Alloy', 'Liquid Cooled', '32.74 Nm', '2 11 881', '66b9fc2d304055.09481711.png', 'Clasic', '2024-08-12', 1),
(8, 'Double Disc, Dual Channel ABS', 'Ducati 1299 FIM Superbike', 1103, '158.5 Kw @ 13000 rpm', 17, 'Alloy', 'Liquid Cooled', '123.6 Nm @ 9500 rpm', '37 36 000', '66b9ff0ccad168.36233234.png', 'Sport Bike', '2024-08-12', 1),
(9, 'Switchable ABS Disk', 'BMW R1200GS Adventure', 1170, '125 bhp @ 7750 rpm', 33, 'Ring', 'Liquid Cooled', '125 Nm @ 6500 rpm', '17 28 395', '66ba00c39753c3.87289724.png', 'Off-Roading', '2024-08-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(4) NOT NULL,
  `first_Name` text NOT NULL,
  `last_Name` text NOT NULL,
  `phone_Number` text NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `user_Type` text NOT NULL DEFAULT 'user',
  `create_At` text NOT NULL DEFAULT current_timestamp(),
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='User data Table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `first_Name`, `last_Name`, `phone_Number`, `gmail`, `username`, `password`, `user_Type`, `create_At`, `active`, `image`) VALUES
(1, 'Mo Arfat', 'Ansari', '9104045985', 'arfata701@gmail.com', 'arfatuser', 'user123', 'user', 'urrent_timestamp(', 1, '66bcec95003c94.76044169.jpg'),
(2, 'Mo Arfat', 'Ansari', '9104045985', 'arfata701@gmail.com', 'arfatAdmin', 'admin123', 'admin', 'urrent_timestamp()', 1, NULL),
(6, 'Pooja a', 'Rajbhar', '9104045985', 'poojarajbhar@gmail.com', 'pooja', 'pooja', 'user', '2024-08-10 19:03:27', 0, ''),
(7, 'Nisha', 'yada2w', '9387463526', 'nisha@gmail.com', 'nisha', 'nisha', 'user', '2024-08-10 19:32:16', 1, ''),
(8, 'Affan', 'Ansar', '8733855527', 'affan701@gmail.com', 'affan9900', 'affan9900', 'user', '2024-08-11 21:11:38', 1, NULL),
(9, 'Pooja', 'Rajbhar', '9173174285', 'poojarajbhar@gmail.com', 'pooja', 'pooja1234', 'user', '2024-08-12 08:57:25', 1, '66bb9b570af969.52769623.jpg'),
(10, 'Tarique', 'Ansari', '9873546734', 'tarique23@gmail.com', 'tarik', 'tarik123', 'user', '2024-08-13 23:18:34', 1, 'default.jpg'),
(11, 'Raju', 'Ansari', '7043323915', 'raju123@gmail.com', 'rajuansari', 'raju123', 'user', '2024-08-15 16:29:36', 1, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

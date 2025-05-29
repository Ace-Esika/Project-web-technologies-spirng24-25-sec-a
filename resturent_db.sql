-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2025 at 03:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturent_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_quantity` int(11) DEFAULT 0,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `category`, `price`, `stock_quantity`, `description`, `image_url`, `created_at`) VALUES
(6, 'Chicken Wings', 'Appetizers', 250.00, 30, 'Spicy grilled chicken wings served with dip.', 'https://example.com/images/chicken_wings.jpg', '2025-05-16 13:46:23'),
(7, 'Spring Rolls', 'Appetizers', 180.00, 50, 'Crispy vegetable spring rolls.', 'https://example.com/images/spring_rolls.jpg', '2025-05-16 13:46:23'),
(8, 'Garlic Bread', 'Appetizers', 150.00, 40, 'Toasted garlic bread with herbs.', 'https://example.com/images/garlic_bread.jpg', '2025-05-16 13:46:23'),
(9, 'Grilled Chicken with Rice', 'Main Course', 450.00, 25, 'Juicy grilled chicken breast served with butter rice.', 'https://example.com/images/grilled_chicken_rice.jpg', '2025-05-16 13:46:23'),
(10, 'Beef Steak', 'Main Course', 600.00, 20, 'Premium beef steak with mashed potatoes.', 'https://example.com/images/beef_steak.jpg', '2025-05-16 13:46:23'),
(11, 'Vegetable Fried Rice', 'Main Course', 300.00, 35, 'Stir-fried rice with mixed vegetables.', 'https://example.com/images/veg_fried_rice.jpg', '2025-05-16 13:46:23'),
(12, 'Chocolate Cake', 'Desserts', 200.00, 15, 'Rich chocolate cake with fudge topping.', 'https://example.com/images/chocolate_cake.jpg', '2025-05-16 13:46:23'),
(13, 'Ice Cream Sundae', 'Desserts', 180.00, 20, 'Vanilla and chocolate ice cream with toppings.', 'https://example.com/images/ice_cream_sundae.jpg', '2025-05-16 13:46:23'),
(14, 'Fruit Salad', 'Desserts', 150.00, 25, 'Fresh mixed fruits with honey dressing.', 'https://example.com/images/fruit_salad.jpg', '2025-05-16 13:46:23'),
(15, 'Lemonade', 'Beverages', 100.00, 50, 'Chilled homemade lemonade.', 'https://example.com/images/lemonade.jpg', '2025-05-16 13:46:23'),
(16, 'Cold Coffee', 'Beverages', 150.00, 35, 'Iced coffee with milk and sugar.', 'https://example.com/images/cold_coffee.jpg', '2025-05-16 13:46:23'),
(17, 'Mango Smoothie', 'Beverages', 180.00, 30, 'Creamy mango smoothie.', 'https://example.com/images/mango_smoothie.jpg', '2025-05-16 13:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `quantity`) VALUES
(1, 'Rice', 57),
(2, 'Chicken', 32),
(3, 'Salt', 6),
(4, 'Oil', 40),
(5, 'Sugar', 60),
(6, 'Eggs', 200),
(7, 'Bread', 25),
(8, 'Butter', 15),
(9, 'Milk', 45),
(10, 'Flour', 70),
(11, 'Tomatoes', 80),
(12, 'Potatoes', 120),
(13, 'Onions', 90),
(14, 'Garlic', 35),
(15, 'Ginger', 20),
(16, 'Fish', 55),
(17, 'Beef', 60),
(18, 'Lentils', 75),
(19, 'Cabbage', 33),
(20, 'Carrots', 44);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_name`, `sender_email`, `message`, `created_at`) VALUES
(1, 'Alice Johnson', 'alice@example.com', 'Hi, I would like to know more about your services.', '2025-05-28 07:32:09'),
(2, 'Bob Smith', 'bob@example.com', 'Can I book a table for 4 this Friday?', '2025-05-28 07:32:09'),
(3, 'Charlie Brown', 'charlie@example.com', 'Your website is great. Keep up the good work!', '2025-05-28 07:32:09'),
(4, 'Diana Evans', 'diana@example.com', 'Do you offer vegan options?', '2025-05-28 07:32:09'),
(5, 'Ethan Wright', 'ethan@example.com', 'I need assistance with my reservation.', '2025-05-28 07:32:09'),
(6, 'swajan barua', 'swajanbarua09@gmail.com', 'nice bro', '2025-05-28 07:36:33'),
(7, 'swajan barua', 'swajanbarua09@gmail.com', 'nice bro', '2025-05-28 07:39:11'),
(8, 'dkasmdak', 'adsfsaf@gmail.com', 'adfsaf', '2025-05-28 07:41:36'),
(9, 'dlkfmaskldf', 'sdfasf@gmail.com', 'sdfasf@gmail.com', '2025-05-28 07:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `ordered_by` varchar(100) DEFAULT NULL,
  `order_time` datetime DEFAULT current_timestamp(),
  `status` enum('pending','complete') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `food_id`, `quantity`, `total_price`, `ordered_by`, `order_time`, `status`) VALUES
(1, 6, 2, 220.00, 'Esika', '2023-01-12 10:20:00', 'complete'),
(2, 7, 1, 130.00, 'Rafi', '2023-01-15 11:05:00', 'pending'),
(3, 8, 3, 450.00, 'Shanto', '2023-01-20 09:45:00', 'complete'),
(4, 9, 2, 220.00, 'Sadia', '2023-02-02 14:12:00', 'pending'),
(5, 10, 1, 110.00, 'Nusrat', '2023-02-10 12:30:00', 'complete'),
(6, 11, 2, 260.00, 'Esika', '2023-02-18 13:47:00', 'complete'),
(7, 12, 1, 150.00, 'Rafi', '2023-03-01 08:15:00', 'pending'),
(8, 13, 3, 390.00, 'Shanto', '2023-03-10 10:50:00', 'complete'),
(9, 14, 1, 110.00, 'Sadia', '2023-03-18 11:22:00', 'pending'),
(10, 15, 2, 200.00, 'Nusrat', '2023-03-25 12:00:00', 'complete'),
(11, 16, 1, 120.00, 'Esika', '2023-04-02 09:00:00', 'pending'),
(12, 17, 4, 480.00, 'Rafi', '2023-04-09 10:30:00', 'complete'),
(13, 6, 2, 220.00, 'Shanto', '2023-04-17 15:00:00', 'pending'),
(14, 7, 3, 390.00, 'Sadia', '2023-04-22 14:25:00', 'complete'),
(15, 8, 1, 130.00, 'Nusrat', '2023-05-01 11:15:00', 'complete'),
(16, 9, 2, 220.00, 'Esika', '2023-05-10 16:40:00', 'pending'),
(17, 10, 1, 110.00, 'Rafi', '2023-06-01 13:10:00', 'complete'),
(18, 11, 2, 260.00, 'Shanto', '2023-06-12 12:22:00', 'complete'),
(19, 12, 1, 150.00, 'Sadia', '2023-06-20 09:40:00', 'pending'),
(20, 13, 3, 390.00, 'Nusrat', '2023-07-01 14:05:00', 'complete'),
(21, 14, 2, 220.00, 'Esika', '2023-07-09 15:30:00', 'complete'),
(22, 15, 1, 110.00, 'Rafi', '2023-07-18 10:55:00', 'pending'),
(23, 16, 4, 480.00, 'Shanto', '2023-08-03 11:45:00', 'complete'),
(24, 17, 1, 120.00, 'Sadia', '2023-08-11 13:30:00', 'complete'),
(25, 6, 2, 220.00, 'Nusrat', '2023-08-20 09:25:00', 'pending'),
(26, 7, 1, 130.00, 'Esika', '2023-09-01 10:10:00', 'complete'),
(27, 8, 2, 260.00, 'Rafi', '2023-09-10 12:00:00', 'pending'),
(28, 9, 3, 330.00, 'Shanto', '2023-09-20 11:20:00', 'complete'),
(29, 10, 1, 110.00, 'Sadia', '2023-10-02 08:45:00', 'complete'),
(30, 11, 2, 260.00, 'Nusrat', '2023-10-15 15:30:00', 'pending'),
(31, 12, 3, 450.00, 'Esika', '2023-10-25 09:50:00', 'complete'),
(32, 13, 1, 130.00, 'Rafi', '2023-11-01 10:35:00', 'complete'),
(33, 14, 2, 220.00, 'Shanto', '2023-11-12 14:45:00', 'pending'),
(34, 15, 3, 330.00, 'Sadia', '2023-11-22 11:55:00', 'complete'),
(35, 16, 2, 260.00, 'Nusrat', '2023-12-05 10:15:00', 'complete'),
(36, 17, 1, 120.00, 'Esika', '2023-12-18 13:00:00', 'pending'),
(37, 6, 2, 220.00, 'Rafi', '2024-01-02 08:20:00', 'complete'),
(38, 7, 1, 130.00, 'Shanto', '2024-01-12 09:40:00', 'pending'),
(39, 8, 3, 390.00, 'Sadia', '2024-01-20 11:10:00', 'complete'),
(40, 9, 2, 220.00, 'Nusrat', '2024-01-30 14:55:00', 'complete'),
(41, 10, 1, 110.00, 'Esika', '2024-02-08 15:15:00', 'pending'),
(42, 11, 2, 260.00, 'Rafi', '2024-02-20 10:05:00', 'complete'),
(43, 12, 1, 150.00, 'Shanto', '2024-03-01 09:45:00', 'complete'),
(44, 13, 2, 260.00, 'Sadia', '2024-03-12 13:25:00', 'pending'),
(45, 14, 3, 330.00, 'Nusrat', '2024-03-21 12:30:00', 'complete'),
(46, 15, 2, 220.00, 'Esika', '2024-04-01 08:10:00', 'complete'),
(47, 16, 1, 120.00, 'Rafi', '2024-04-10 09:55:00', 'pending'),
(48, 17, 2, 240.00, 'Shanto', '2024-04-20 11:35:00', 'complete'),
(49, 6, 1, 110.00, 'Sadia', '2024-05-05 10:50:00', 'complete'),
(50, 7, 3, 390.00, 'Nusrat', '2024-05-29 12:15:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role` varchar(50) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `first_name`, `last_name`, `email`, `password`, `dob`, `img_url`, `address`, `role`) VALUES
(6, 'Ainea', 'Esrat Esika', 'aiean@example.com', 'pass_1', '1998-03-12', 'https://example.com/img/swajan.jpg', 'Dhanmondi, Dhaka, Bangladesh', 'user'),
(3213, 'Swajan', 'Barua', 'swajan@gmail.com', '123456', '1996-02-28', '', 'nice', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3345;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 09:01 AM
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
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `noofpeople` int(11) NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Booked',
  `payment_status` varchar(150) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `check_in`, `check_out`, `noofpeople`, `room_id`, `user_id`, `status`, `payment_status`, `created_at`, `updated_at`) VALUES
(4, 'carlos', 'carlos62@gmail.com', '2023-08-21', '2023-08-26', 2, 2, 13, 'Booked', 'Received', '2023-08-25 22:23:29', '2024-07-17 07:40:09'),
(5, 'carlos shah', 'carlos62@gmail.com', '2023-08-22', '2023-08-22', 1, 3, 13, 'Booked', 'Received', '2023-08-25 22:27:00', '2023-09-07 06:29:58'),
(9, 'Rijalss', 'rijal@gmail.com', '2023-08-23', '2023-08-26', 1, 3, 6, 'Booked', 'Pending', '2023-08-26 00:13:02', '2023-08-26 00:13:02'),
(12, 'carlos wrat', 'carlos62@gmail.com', '2023-08-22', '2023-08-29', 1, 3, 13, 'Booked', 'Received', '2023-08-29 07:00:13', '2024-07-17 07:38:28'),
(14, 'Nabs', 'nabs@gmail.com', '2023-08-30', '2023-08-31', 1, 3, 14, 'Booked', 'Received', '2023-08-30 23:18:07', '2024-07-17 07:43:19'),
(15, 'carlos', 'carlos62@gmail.com', '2023-08-30', '2023-08-31', 1, 1, 13, 'Booked', 'Received', '2023-08-31 07:17:34', '2024-07-17 07:37:55'),
(16, 'Amrit don', 'amritdon@gmail.com', '2023-08-31', '2023-08-31', 1, 1, 13, 'Booked', 'Received', '2023-08-31 07:47:12', '2023-09-09 08:03:37'),
(17, 'Amrit don', 'amritdon@gmail.com', '2023-08-31', '2023-08-31', 1, 1, 13, 'Booked', 'Received', '2023-08-31 07:52:26', '2023-09-14 23:34:24'),
(34, 'Amrit don', 'amritdon@gmail.com', '2023-09-12', '2023-09-13', 1, 2, 5, 'Booked', 'Received', '2023-09-05 22:36:45', '2023-09-09 08:03:52'),
(35, 'Kads', 'kads@gmail.com', '2023-09-08', '2023-09-09', 1, 2, 15, 'Cancelled', 'Received', '2023-09-08 08:17:22', '2023-09-08 08:34:21'),
(43, 'Prabin Ghimire', 'ghimireprabin62@gmail.com', '2023-09-20', '2023-08-15', 1, 3, 5, 'Booked', 'Received', '2023-09-14 23:39:11', '2024-06-08 11:04:29'),
(44, 'Pravin Ghimire', 'prekshya@gmail.com', '2024-06-12', '2024-06-19', 1, 2, 4, 'Booked', 'Pending', '2024-06-08 10:49:51', '2024-06-08 10:49:51'),
(45, 'userAdmin', 'prekshya@gmail.com', '2024-06-28', '2024-06-29', 2, 6, 16, 'Booked', 'Received', '2024-06-28 09:43:00', '2024-07-16 10:21:17'),
(46, 'Prabin Ghimire', 'prekshya@gmail.com', '2024-07-02', '2024-07-03', 4, 6, 16, 'Booked', 'Received', '2024-07-02 00:14:41', '2024-07-17 07:32:00'),
(47, 'prekshya guuu', 'prekshya@gmail.com', '2024-07-18', '2024-07-19', 3, 6, 16, 'Cancelled', 'Pending', '2024-07-17 08:10:00', '2024-07-17 08:10:46'),
(48, 'prekshya guuu', 'prekshya@gmail.com', '2024-07-19', '2024-07-20', 2, 4, 16, 'Cancelled', 'Pending', '2024-07-18 09:49:45', '2024-07-18 09:50:24'),
(68, 'prekshya guuu', 'prekshya@gmail.com', '2024-07-19', '2024-07-20', 1, 1, 16, 'Booked', 'Pending', '2024-07-19 03:41:58', '2024-07-19 03:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `photo`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'hari yadav', '1721454624.jpg', 'The rooms were spacious and spotless, with great décor and crisp bed sheets. The breakfast buffet was delicious, with a huge variety of options! The staff were attentive and went out of their way to ensure that we were comfortable.', '2024-07-20 00:05:24', '2024-07-20 00:05:24'),
(2, 'Darius', '1721454971.jpg', 'Location is very convenient, easy to move around. Staff was cooperative, since we were in a big group and we were demanding, they fulfilled all. The owner of the hotel catered us well, guided us in setting up the itinerary and arranging the services without charging extra cost. In short it was a memorable stay there.', '2024-07-20 00:11:11', '2024-07-20 00:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `priority` int(11) NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `priority`, `photopath`, `created_at`, `updated_at`) VALUES
(1, 1, '1721457496_r2.jpg', '2023-05-14 06:16:37', '2024-07-20 00:53:16'),
(4, 4, '1684421691_gallery6.jpg', '2023-05-14 06:18:00', '2023-05-18 09:09:51'),
(5, 2, '1684421732_gallery1.jpg', '2023-05-18 09:10:32', '2023-05-18 09:10:32'),
(6, 3, '1721456732_room7.jpg', '2023-05-18 09:10:57', '2024-07-20 00:40:32'),
(9, 7, '1721457515_r5.jpg', '2023-05-29 10:23:25', '2024-07-20 00:53:35'),
(10, 5, '1721456752_single.jpg', '2023-05-29 10:23:54', '2024-07-20 00:40:52'),
(12, 6, '1694749844_1682942821_gallery4.jpg', '2023-09-14 22:05:44', '2023-09-14 22:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_24_132256_create_rooms_table', 1),
(6, '2023_04_25_103505_add_photopath_to_rooms', 1),
(7, '2023_04_25_155129_add_role_to_users', 1),
(8, '2023_05_01_112507_create_galleries_table', 1),
(9, '2023_05_01_125217_create_sliders_table', 1),
(10, '2023_05_08_111704_create_roomdetails_table', 1),
(22, '2023_05_15_110658_create_bookings_table', 2),
(28, '2023_05_29_123856_create_feedback_table', 3),
(29, '2024_06_04_024317_create__resturants_table', 4),
(30, '2024_06_08_070928_create_orders_table', 5),
(31, '2024_06_12_062519_create_orders_table', 6),
(32, '2024_06_18_142841_add_resturant_id_to_orders_table', 7),
(33, '2024_07_20_053643_create_feedback_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resturant_id` bigint(20) UNSIGNED NOT NULL,
  `food` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(250) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `resturant_id`, `food`, `customer_name`, `customer_email`, `customer_phone`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'burger', 'prekshya guu', 'prekshya@gmail.com', '456789', 2, 'Completed', '2024-06-18 08:53:50', '2024-06-18 08:54:57'),
(2, 5, 'burger', 'prekshya guu', 'prekshya@gmail.com', '456789', 2, 'Completed', '2024-07-02 00:15:42', '2024-07-02 01:11:17'),
(3, 6, 'pizza', 'prekshya guu', 'prekshya@gmail.com', '9811342424', 2, 'Pending', '2024-07-18 09:46:58', '2024-07-18 09:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('carlos62@gmail.com', '$2y$10$91A/g5JKMZn7bQcCCi1WAuNwjfrArk32IqsVUBf.rRdggwXZ/hIc2', '2023-08-31 09:01:38'),
('ghimireprabin62@gmail.com', '$2y$10$vfG8x5goxcLWCW5UJx3a7upJFUBpEZIanrTEHY1qwC4/PV1LJILKW', '2023-08-31 09:01:27'),
('ram@gmail.com', '$2y$10$WFgW4zfr/TSZk5QzPO0SzuRHiTOh0bWOPsefH/Vd1pCrC7sgva9j6', '2023-08-31 09:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resturants`
--

CREATE TABLE `resturants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `priority` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `quantity` varchar(111) NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resturants`
--

INSERT INTO `resturants` (`id`, `priority`, `food`, `quantity`, `rate`, `photopath`, `created_at`, `updated_at`) VALUES
(4, '4', 'taas', '1plate', 400.00, '1719902393_taad.jpg', '2024-06-08 00:07:59', '2024-07-02 00:54:53'),
(5, '5', 'burger', '1plate', 300.00, '1718294093_Green Modern Staycation Hotel Instagram Post (1).png', '2024-06-08 00:38:36', '2024-07-16 10:23:44'),
(6, '1', 'pizza', '1plate', 550.00, '1718294111_Green Modern Staycation Hotel Instagram Post (2).png', '2024-06-12 01:09:37', '2024-06-13 10:10:11'),
(7, '2', 'Fried Chicken', '1plate', 350.00, '1719902599_friedchicken.png', '2024-07-02 00:58:19', '2024-07-02 00:58:19'),
(8, '3', 'Indian Platter', '1plate', 550.00, '1720588541_naan.jpg', '2024-07-09 23:30:41', '2024-07-09 23:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `roomdetails`
--

CREATE TABLE `roomdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `priority` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `room_size` varchar(11) NOT NULL,
  `bed_size` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomdetails`
--

INSERT INTO `roomdetails` (`id`, `priority`, `description`, `room_size`, `bed_size`, `view`, `photopath`, `room_id`, `created_at`, `updated_at`) VALUES
(2, 1, 'Our hotel is located in a quiet and peaceful neighborhood, providing  a perfect place to rest and relax after a busy day of activities. We offer a range of comfortable rooms to suit your needs, including single, double, and twin rooms, all of which  are equipped with essential amenities such as air conditioning, TV, and free Wi-Fi.', '45-50', 'king size', 'River view', '1721457600_room7.jpg', 1, '2023-05-11 22:56:03', '2024-07-20 00:55:00'),
(3, 2, 'These are larger than standard rooms and come with additional amenities such as a seating area, a work desk, and a minibar.', '45*50', 'king size', 'River view', '1684422112_1683732522_room-1.png', 2, '2023-05-11 23:00:09', '2023-05-18 09:16:52'),
(5, 3, 'These are designed for families with children and often come with a larger bed and a sofa bed or bunk beds', '45-50sqm', 'Prince Size', 'mountain view', '1684422165_room3.jpg', 4, '2023-05-17 10:51:42', '2023-05-18 09:17:45'),
(6, 4, 'A single room is a type of accommodation typically designed for one person. It is a private space that offers a comfortable and convenient stay for solo travelers or individuals seeking privacy. Single rooms are commonly found in hotels, hostels, guesthouses, and other lodging establishments.', '50*50', 'Master Size', 'Beach', '1721457623_r4.jpg', 3, '2023-05-18 21:55:38', '2024-07-20 00:55:23'),
(7, 5, 'High-quality furnishings with opulent, expensive touches, attention to aesthetic detail, a quiet room with fresh air, original art on the walls, windows that open, robes and slippers, adequate storage, hangers, desk, reading chair, safe, good-size flat-screen TV, iPhone/iPod dock, coffee maker, full-length mirror, effective heating/AC system…And of course a King bed with a good mattress, high-quality sheets and a variety of pillow types', '44', '5', 'beach', '1721457646_standard room.jpg', 6, '2024-06-13 10:07:04', '2024-07-20 00:55:46'),
(8, 6, 'a luxurious and spacious retreat, featuring elegant decor, a separate living area, and top-notch amenities. The bathroom is pristine, with a large bathtub and premium toiletries. Guests can enjoy stunning city views and convenient access to hotel facilities. Exceptional service and attention to detail make the stay memorable, though the suite\'s premium price reflects its high quality. Overall, it\'s an excellent choice for a lavish and comfortable experience', '44', 'master', 'lake', '1721457958_suiteroom1.jpg', 7, '2024-07-20 01:00:58', '2024-07-20 01:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photopath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_type`, `rate`, `priority`, `created_at`, `updated_at`, `photopath`) VALUES
(1, 'Single Room', 1000, 1, '2023-05-10 22:12:45', '2023-05-10 22:12:45', '1721458152_r2.jpg'),
(2, 'Deluxe Room', 1500, 2, '2023-05-11 22:57:17', '2023-05-11 22:57:17', 'r5.jpg'),
(3, 'Double Bed Room', 1050, 3, '2023-05-13 23:39:02', '2023-05-13 23:39:02', '1721457457_r4.jpg'),
(4, 'Apartment', 1000, 4, '2023-05-17 09:17:30', '2023-05-17 09:17:30', '1721457087_single.jpg'),
(6, 'Luxurious Room', 2500, 5, '2024-06-13 10:04:14', '2024-06-13 10:04:14', '1721456552_standard room.jpg'),
(7, 'Suit Room', 4500, 6, '2024-06-18 20:56:56', '2024-06-18 20:56:56', 'suiteroom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photopath`, `priority`, `created_at`, `updated_at`) VALUES
(8, '1685376261_1685027970_ciudad-maderas-MXbM1NrRqtI-unsplash.jpg', 1, '2023-05-29 10:19:21', '2023-05-29 10:19:21'),
(12, '1685376358_1685028691_nick-karvounis-Ciqxn7FE4vE-unoiuygfdsplash.jpg', 2, '2023-05-29 10:20:58', '2023-05-29 10:20:58'),
(13, '1685376377_1685028175_banner4.jpg', 3, '2023-05-29 10:21:17', '2023-05-29 10:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(4, 'Pravin Ghimire', 'ghimireprabin62@gmail.com', NULL, '$2y$10$9e75kTXU6ZntLCr99iib.eDKpfTnbUEXCWinqgE2sZbVCy3MRklAG', NULL, '2023-05-11 00:33:59', '2023-05-11 00:33:59', 'admin'),
(5, 'Amrit don', 'amritdon@gmail.com', NULL, '$2y$10$OQwcMyIsuZSMgyoS0VNS8OYQAV2nhBQymuLadrOm7gV6P1YuuK6B2', NULL, '2023-05-11 00:35:02', '2023-05-11 00:35:02', 'Customer'),
(6, 'rijal', 'rijal@gmail.com', NULL, '$2y$10$c6jzttk2/tdHGGOArZE/ReZgqR7nLHZ/STEyXfiKa0X8f.W0/YcrG', NULL, '2023-05-13 23:40:50', '2023-05-13 23:40:50', 'Customer'),
(7, 'Sandip Sharma', 'sandip@gmail.com', NULL, '$2y$10$p4gy0L5sgJSYdwSDORdZZ.jukOuOReCKg0ya5Heq/xZl0TJRG2kl.', NULL, '2023-05-19 05:36:54', '2023-05-19 05:36:54', 'Customer'),
(9, 'suman', 'suman@gmail.com', NULL, '$2y$10$lae7DEiYSqRq/kBd/bFSn.inpxx3n/6iN8d9P9Zd64KD1q8CjCuny', NULL, '2023-05-21 00:13:45', '2023-05-21 00:13:45', 'Customer'),
(13, 'carlos', 'carlos62@gmail.com', NULL, '$2y$10$tGz1gWeXtozqQX05F.ebCujwcc1xKOXSZppEpI7P0urWtqkMKUMD.', 'cej9UVW3ifoJ3UHJbw5e6rKVMzV7CWu9GJKZqvS9Vcd3HwLHScBuPiGZk94L', '2023-08-25 22:11:00', '2023-08-31 08:44:28', 'Customer'),
(14, 'Nabs', 'nabs@gmail.com', NULL, '$2y$10$jBIyxtICJZ2.56NCZzpDoONLTlqWdVV3XlEgO1X4OpU4VGBpfdYOS', NULL, '2023-08-30 23:17:31', '2023-08-30 23:17:31', 'Customer'),
(15, 'Kads', 'kads@gmail.com', NULL, '$2y$10$N68/7jaND7gpq4Fm5SVpv.DmamRzfdSYmV5JOw6fOdSvAjoNPtDHi', NULL, '2023-09-08 08:11:04', '2023-09-08 08:11:04', 'Customer'),
(16, 'prekshya guuu', 'prekshya@gmail.com', NULL, '$2y$10$Vufadcv7iZNLisiANpRdcupVqfi3wSYwSiomifIF4LUos2nSlLxv6', NULL, '2024-06-08 11:02:50', '2024-06-08 11:02:50', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_room_id_foreign` (`room_id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_resturant_id_foreign` (`resturant_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `resturants`
--
ALTER TABLE `resturants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomdetails`
--
ALTER TABLE `roomdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomdetails_room_id_foreign` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resturants`
--
ALTER TABLE `resturants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roomdetails`
--
ALTER TABLE `roomdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_resturant_id_foreign` FOREIGN KEY (`resturant_id`) REFERENCES `resturants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `roomdetails`
--
ALTER TABLE `roomdetails`
  ADD CONSTRAINT `roomdetails_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 15, 2022 at 09:03 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telcikfz_hiqm-furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `id` bigint UNSIGNED NOT NULL,
  `bed_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `bed_name`, `bed_image`, `description`, `alt_description`, `created_at`, `updated_at`) VALUES
(1, 'Bed 1', 'bed1658194520_Bed 1', '--', 'Wrought Iron Bed 1', '2022-07-18 17:35:20', '2022-07-18 17:35:20'),
(2, 'Bed 2', 'bed1658194532_Bed 2', '--', 'Wrought Iron Bed 2', '2022-07-18 17:35:32', '2022-07-18 17:35:32'),
(3, 'Bed 3', 'bed1658194545_Bed 3', '--', 'Wrought Iron Bed 3', '2022-07-18 17:35:45', '2022-07-18 17:35:45'),
(4, 'Bed 4', 'bed1658194557_Bed 4', '--', 'Wrought Iron Bed 4', '2022-07-18 17:35:57', '2022-07-18 17:35:57'),
(5, 'Bed 5', 'bed1658194575_Bed 5', '--', 'Wrought Iron Bed 5', '2022-07-18 17:36:15', '2022-07-18 17:36:15'),
(7, 'Bed 6', 'bed1658194593_Bed 6', '--', 'Wrought Iron Bed 6', '2022-07-18 17:36:33', '2022-07-18 17:36:33'),
(8, 'Bed 7', 'bed1658194608_Bed 7', '--', 'Wrought Iron Bed 7', '2022-07-18 17:36:48', '2022-07-18 17:36:48'),
(9, 'Bed 8', 'bed1658194622_Bed 8', '--', 'Wrought Iron Bed 8', '2022-07-18 17:37:02', '2022-07-18 17:37:02'),
(10, 'Bed 9', 'bed1658194639_Bed 9', '--', 'Wrought Iron Bed 9', '2022-07-18 17:37:19', '2022-07-18 17:37:19'),
(11, 'Bed 10', 'bed1658194654_Bed 10', '--', 'Wrought Iron Bed 10', '2022-07-18 17:37:34', '2022-07-18 17:37:34'),
(12, 'Bed 11', 'bed1658194687_Bed 11', '--', 'Wrought Iron Bed 11', '2022-07-18 17:38:07', '2022-07-18 17:38:07'),
(13, 'Bed 12', 'bed1658194700_Bed 12', '--', 'Wrought Iron Bed 12', '2022-07-18 17:38:20', '2022-07-18 17:38:20'),
(14, 'Bed 13', 'bed1658194712_Bed 13', '--', 'Wrought Iron Bed 13', '2022-07-18 17:38:32', '2022-07-18 17:38:32'),
(15, 'Bed 14', 'bed1658194747_Bed 14', '--', 'Wrought Iron Bed 14', '2022-07-18 17:39:07', '2022-07-18 17:39:07'),
(16, 'Bed 15', 'bed1658194772_Bed 15', '--', 'Wrought Iron Bed 15', '2022-07-18 17:39:32', '2022-07-18 17:39:32'),
(17, 'Bed 16', 'bed1658194787_Bed 16', '--', 'Wrought Iron Bed 16', '2022-07-18 17:39:47', '2022-07-18 17:39:47'),
(18, 'Bed 17', 'bed1658194799_Bed 17', '--', 'Wrought Iron Bed 17', '2022-07-18 17:39:59', '2022-07-18 17:39:59'),
(19, 'Bed 18', 'bed1658194811_Bed 18', '--', 'Wrought Iron Bed 18', '2022-07-18 17:40:11', '2022-07-18 17:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `chairs`
--

CREATE TABLE `chairs` (
  `id` bigint UNSIGNED NOT NULL,
  `chair_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chair_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chairs`
--

INSERT INTO `chairs` (`id`, `chair_name`, `chair_image`, `description`, `alt_description`, `created_at`, `updated_at`) VALUES
(1, 'Chair-1', 'Chair1658132092_Chair-1', '--', 'Wrought Iron Chair 1', '2022-07-18 00:14:52', '2022-07-18 00:14:52'),
(2, 'Bench-Chair-2', 'Chair1658132143_Bench-Chair-2', '--', 'Wrought Iron bench chair 2', '2022-07-18 00:15:43', '2022-07-18 00:15:43'),
(3, 'Chair-3', 'Chair1658132163_Chair-3', '--', 'Wrought Iron Chair 3', '2022-07-18 00:16:03', '2022-07-18 00:16:03'),
(4, 'Chair-4', 'Chair1658132189_Chair-4', '--', 'Wrought Iron Chair 4', '2022-07-18 00:16:29', '2022-07-18 00:16:29'),
(5, 'Chair-5', 'Chair1658132228_Chair-5', '--', 'Wrought Iron Chair 5', '2022-07-18 00:17:08', '2022-07-18 00:17:08'),
(6, 'Chair-6', 'Chair1658132254_Chair-6', '--', 'Wrought Iron Chair 6', '2022-07-18 00:17:34', '2022-07-18 00:17:34'),
(7, 'Chair-7', 'Chair1658132289_Chair-7', '--', 'Wrought Iron Chair 7', '2022-07-18 00:18:09', '2022-07-18 00:18:09'),
(8, 'Chair-8', 'Chair1658132317_Chair-8', '--', 'Wrought Iron Chair 8', '2022-07-18 00:18:37', '2022-07-18 00:18:37'),
(9, 'Chair-9', 'Chair1658132353_Chair-9', '--', 'Wrought Iron Chair 9', '2022-07-18 00:19:13', '2022-07-18 00:19:13'),
(10, 'Chair-10', 'Chair1658132371_Chair-10', '--', 'Wrought Iron Chair 10', '2022-07-18 00:19:31', '2022-07-18 00:19:31'),
(11, 'Chair-11', 'Chair1658132384_Chair-11', '--', 'Wrought Iron Chair 11', '2022-07-18 00:19:44', '2022-07-18 00:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `chandelier_products`
--

CREATE TABLE `chandelier_products` (
  `id` bigint UNSIGNED NOT NULL,
  `chandelier_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chandelier_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chandelier_products`
--

INSERT INTO `chandelier_products` (`id`, `chandelier_name`, `chandelier_image`, `description`, `alt_description`, `created_at`, `updated_at`) VALUES
(1, 'Chandelier 1', 'chandelier1658194954_Chandelier 1', '--', 'Wrought Iron Chandelier 1', '2022-07-18 17:42:34', '2022-07-18 17:42:34'),
(2, 'Chandelier 2', 'chandelier1658194968_Chandelier 2', '--', 'Wrought Iron Chandelier 2', '2022-07-18 17:42:48', '2022-07-18 17:42:48'),
(3, 'Chandelier 3', 'chandelier1658194982_Chandelier 3', '--', 'Wrought Iron Chandelier 3', '2022-07-18 17:43:02', '2022-07-18 17:43:02'),
(4, 'Chandelier 4', 'chandelier1658194997_Chandelier 4', '--', 'Wrought Iron Chandelier 4', '2022-07-18 17:43:17', '2022-07-18 17:43:17'),
(5, 'Chandelier 5', 'chandelier1658195010_Chandelier 5', '--', 'Wrought Iron Chandelier 5', '2022-07-18 17:43:30', '2022-07-18 17:43:30'),
(6, 'Chandelier 6', 'chandelier1658195023_Chandelier 6', '--', 'Wrought Iron Chandelier 6', '2022-07-18 17:43:43', '2022-07-18 17:43:43'),
(7, 'Chandelier 7', 'chandelier1658195036_Chandelier 7', '--', 'Wrought Iron Chandelier 7', '2022-07-18 17:43:56', '2022-07-18 17:43:56'),
(8, 'Chandelier 8', 'chandelier1658195048_Chandelier 8', '--', 'Wrought Iron Chandelier 8', '2022-07-18 17:44:08', '2022-07-18 17:44:08'),
(9, 'Chandelier 9', 'chandelier1658195060_Chandelier 9', '--', 'Wrought Iron Chandelier 9', '2022-07-18 17:44:20', '2022-07-18 17:44:20'),
(10, 'Chandelier 10', 'chandelier1658195075_Chandelier 10', '--', 'Wrought Iron Chandelier 10', '2022-07-18 17:44:35', '2022-07-18 17:44:35'),
(11, 'Chandelier 11', 'chandelier1658195093_Chandelier 11', '--', 'Wrought Iron Chandelier 11', '2022-07-18 17:44:53', '2022-07-18 17:44:53'),
(12, 'Chandelier 12', 'chandelier1658195108_Chandelier 12', '--', 'Chandelier 12', '2022-07-18 17:45:08', '2022-07-18 17:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `client_image`, `description`, `alt_description`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Joy', 'Client1659665345_Ms. Joy', 'Delivered in Nasugbu Batangas', 'Wrought Iron Gate Delivered', '2022-08-04 18:09:05', '2022-08-04 18:09:05'),
(5, 'Ms. Joy 2', 'Client1659665652_Ms. Joy 2', 'Delivered in Nasugbu Batangas - Chair', 'Wrought Iron Chair Delivered', '2022-08-04 18:14:12', '2022-08-04 18:14:12'),
(6, 'Ms. Joy 3', 'Client1659665732_Ms. Joy 3', 'Delivered in Nasugbu Batangas - Chair 2', 'Wrought Iron Chair Delivered 2', '2022-08-04 18:15:32', '2022-08-04 18:15:32'),
(7, 'Ms. Joy 4', 'Client1659665775_Ms. Joy 4', 'Delivered in Nasugbu Batangas - Table Set', 'Wrought Iron Table Set Delivered', '2022-08-04 18:16:15', '2022-08-04 18:16:15'),
(8, 'Mosaic Table Stock', 'Client1659667514_Mosaic Table Stock', 'On Hand Stocks', 'Mosaic Table Onhand', '2022-08-04 18:45:14', '2022-08-04 18:45:14'),
(9, 'Ms. Estoria', 'Client1659667555_Ms. Estoria', 'Stair Support Order', 'Stair Support Wrought Iron', '2022-08-04 18:45:55', '2022-08-04 18:45:55'),
(10, 'Customize Order Mirror', 'Client1659667856_Customize Order Mirror', 'Customize Order Mirror', 'Customize Order Mirror', '2022-08-04 18:50:56', '2022-08-04 18:50:56'),
(11, 'Customize Order Mirror 2', 'Client1659667884_Customize Order Mirror 2', 'Customize Order Mirror 2', 'Customize Order Mirror 2', '2022-08-04 18:51:24', '2022-08-04 18:51:24'),
(12, 'Customize Order Mirror 3', 'Client1659667909_Customize Order Mirror 3', 'Customize Order Mirror 3', 'Customize Order Mirror 3', '2022-08-04 18:51:49', '2022-08-04 18:51:49'),
(13, 'Customise Curtain Rods Finials  & Curtain Holder', 'Client1659667936_Customise Curtain Rods Finials  & Curtain Holder', '--', 'Customise Curtain Rods Finials  & Curtain Holder', '2022-08-04 18:52:16', '2022-08-04 18:52:16'),
(14, 'Customise Curtain Rods Finials  & Curtain Holder 2', 'Client1659667953_Customise Curtain Rods Finials  & Curtain Holder 2', '--', 'Customise Curtain Rods Finials  & Curtain Holder 2', '2022-08-04 18:52:33', '2022-08-04 18:52:33'),
(15, 'Customise Curtain Rods Finials  & Curtain Holder 3', 'Client1659667963_Customise Curtain Rods Finials  & Curtain Holder 3', '--', 'Customise Curtain Rods Finials  & Curtain Holder 3', '2022-08-04 18:52:43', '2022-08-04 18:52:43'),
(16, 'Delivered in Moonwalk Paranaque', 'Client1659668001_Mosaic Top', 'Mosaic Top Customize Order', 'Mosaic Top Customize Order', '2022-08-04 18:53:21', '2022-08-04 18:53:21'),
(17, 'Delivered in Moonwalk Paranaque 2', 'Client1659668107_Delivered in Moonwalk Paranaque 2', 'Mosaic Top Customize Order', 'Mosaic Top Customize Order', '2022-08-04 18:55:07', '2022-08-04 18:55:07'),
(18, 'Delivered in Moonwalk Paranaque 3', 'Client1659668190_Delivered in Moonwalk Paranaque 3', 'Table Base', 'Table Base Delivered in Moonwalk Paranaque', '2022-08-04 18:56:30', '2022-08-04 18:56:30'),
(19, 'Ms. Devera', 'Client1659668247_Ms. Devera', 'Delivered in Paranaque', 'Wrought iron Table Set with Mosaic Top', '2022-08-04 18:57:27', '2022-08-04 18:57:27'),
(20, 'Ms. Devera 2', 'Client1659668349_Ms. Devera 2', 'Delivered in Paranaque', 'Wrought iron Table Set with Mosaic Top 2', '2022-08-04 18:59:09', '2022-08-04 18:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `doors_products`
--

CREATE TABLE `doors_products` (
  `id` bigint UNSIGNED NOT NULL,
  `door_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `door_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doors_products`
--

INSERT INTO `doors_products` (`id`, `door_name`, `door_image`, `description`, `alt_description`, `created_at`, `updated_at`) VALUES
(1, 'Door 1', 'door1658199909_Door 1', '--', 'Wrought Iron Door 1', '2022-07-18 19:05:09', '2022-07-18 19:05:09'),
(2, 'Door 2', 'door1658199988_Door 2', '--', 'Wrought Iron Door 2', '2022-07-18 19:06:28', '2022-07-18 19:06:28'),
(3, 'Door 3', 'door1658200016_Door 3', '--', 'Wrought Iron Door 3', '2022-07-18 19:06:56', '2022-07-18 19:06:56'),
(4, 'Door 4', 'door1658200027_Door 4', '--', 'Wrought Iron Door 4', '2022-07-18 19:07:07', '2022-07-18 19:07:07'),
(5, 'Door 5', 'door1658200040_Door 5', '--', 'Wrought Iron Door 5', '2022-07-18 19:07:20', '2022-07-18 19:07:20'),
(6, 'Wrought Iron Door 6', 'door1658200056_Wrought Iron Door 6', '--', 'Wrought Iron Door 6', '2022-07-18 19:07:36', '2022-07-18 19:07:36'),
(7, 'Door 7', 'door1658200077_Door 7', '--', 'Wrought Iron Door 7', '2022-07-18 19:07:57', '2022-07-18 19:07:57'),
(8, 'Door 8', 'door1658200115_Door 8', '--', 'Wrought Iron Door 8', '2022-07-18 19:08:35', '2022-07-18 19:08:35'),
(9, 'Door 9', 'door1658200133_Door 9', '--', 'Wrought Iron Door 9', '2022-07-18 19:08:53', '2022-07-18 19:08:53'),
(10, 'Door 10', 'door1658200148_Door 10', '--', 'Wrought Iron Door 10', '2022-07-18 19:09:08', '2022-07-18 19:09:08'),
(11, 'Door 11', 'door1658200160_Door 11', '--', 'Wrought Iron Door 11', '2022-07-18 19:09:20', '2022-07-18 19:09:20'),
(12, 'Door 12', 'door1658200171_Door 12', '--', 'Wrought Iron Door 12', '2022-07-18 19:09:31', '2022-07-18 19:09:31'),
(13, 'Door 13', 'door1658200184_Door 13', '--', 'Wrought Iron Door 13', '2022-07-18 19:09:44', '2022-07-18 19:09:44'),
(14, 'Door 14', 'door1658200198_Door 14', '--', 'Wrought Iron Door 14', '2022-07-18 19:09:58', '2022-07-18 19:09:58'),
(15, 'Door 15', 'door1658200212_Door 15', '--', 'Wrought Iron Door 15', '2022-07-18 19:10:12', '2022-07-18 19:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gates`
--

CREATE TABLE `gates` (
  `id` bigint UNSIGNED NOT NULL,
  `gate_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gate_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gates`
--

INSERT INTO `gates` (`id`, `gate_name`, `gate_image`, `description`, `alt_description`, `created_at`, `updated_at`) VALUES
(1, 'Gate 1', 'gate1658199643_Gate 1', '--', 'Wrought Iron Gate 1', '2022-07-18 19:00:43', '2022-07-18 19:00:43'),
(2, 'Gate 2', 'gate1658199656_Gate 2', '--', 'Wrought Iron Gate 2', '2022-07-18 19:00:56', '2022-07-18 19:00:56'),
(3, 'Wrought Iron Gate 3', 'gate1658199751_Wrought Iron Gate 3', '--', 'Wrought Iron Gate 3', '2022-07-18 19:02:31', '2022-07-18 19:02:31'),
(4, 'Gate 4', 'gate1658199765_Gate 4', '--', 'Wrought Iron Gate 4', '2022-07-18 19:02:45', '2022-07-18 19:02:45'),
(5, 'Gate 5', 'gate1658199782_Gate 5', '--', 'Wrought Iron Gate 5', '2022-07-18 19:03:02', '2022-07-18 19:03:02'),
(6, 'Gate 6', 'gate1658199807_Gate 6', '--', 'Wrought Iron Gate 6', '2022-07-18 19:03:27', '2022-07-18 19:03:27'),
(7, 'Gate 7', 'gate1658199821_Gate 7', '--', 'Wrought Iron Gate 7', '2022-07-18 19:03:41', '2022-07-18 19:03:41'),
(8, 'Gate 8', 'gate1658199830_Gate 8', '--', 'Wrought Iron Gate 8', '2022-07-18 19:03:50', '2022-07-18 19:03:50'),
(9, 'Gate 9', 'gate1658199841_Gate 9', '--', 'Wrought Iron Gate 9', '2022-07-18 19:04:01', '2022-07-18 19:04:01'),
(10, 'Gate 10', 'gate1658199857_Gate 10', '--', 'Wrought Iron Gate 10', '2022-07-18 19:04:17', '2022-07-18 19:04:17'),
(11, 'Gate 11', 'gate1658199871_Gate 11', '--', 'Wrought Iron Gate 11', '2022-07-18 19:04:31', '2022-07-18 19:04:31'),
(12, 'Gate 12', 'gate1658199884_Gate 12', '--', 'Wrought Iron Gate 12', '2022-07-18 19:04:44', '2022-07-18 19:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inquiry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `email`, `name`, `contact`, `inquiry`, `created_at`, `updated_at`) VALUES
(1, '023sanchez.marcopolo@gmail.com', 'Marco Sanchez', '09123456789', 'sample', '2022-08-10 18:47:01', '2022-08-10 18:47:01'),
(2, 'hollibae@yahoo.com', 'Crytovog', 'jm10110@aol.com', 'Check out the automatic Bot, which works for you 24/7. https://nume.rbertilsson.se/', '2022-08-14 06:20:41', '2022-08-14 06:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_07_13_123406_create_chairs_table', 1),
(5, '2022_07_13_143504_create_tables_table', 1),
(6, '2022_07_14_124342_create_beds_table', 1),
(7, '2022_07_14_132338_create_gates_table', 1),
(8, '2022_07_15_002447_create_doors_products_table', 1),
(9, '2022_07_15_004753_create_raillings_products_table', 1),
(10, '2022_07_15_012246_create_chandelier_products_table', 1),
(11, '2022_07_21_010113_create_clients_table', 2),
(12, '2022_08_06_061434_create_inquiries_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raillings_products`
--

CREATE TABLE `raillings_products` (
  `id` bigint UNSIGNED NOT NULL,
  `rail_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rail_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `raillings_products`
--

INSERT INTO `raillings_products` (`id`, `rail_name`, `rail_image`, `description`, `alt_description`, `created_at`, `updated_at`) VALUES
(1, 'Rail 1', 'rail1658203883_Rail 1', '--', 'Wrought Iron Rail 1', '2022-07-18 20:11:23', '2022-07-18 20:11:23'),
(2, 'Rail 2', 'rail1658203897_Rail 2', '--', 'Wrought Iron Rail 2', '2022-07-18 20:11:37', '2022-07-18 20:11:37'),
(3, 'Rail 3', 'rail1658203911_Rail 3', '--', 'Wrought Iron Rail 3', '2022-07-18 20:11:51', '2022-07-18 20:11:51'),
(4, 'Rail 4', 'rail1658203951_Rail 4', '--', 'Wrought Iron Rail 4', '2022-07-18 20:12:31', '2022-07-18 20:12:31'),
(5, 'Rail 5', 'rail1658203971_Rail 5', '--', 'Wrought Iron Rail 5', '2022-07-18 20:12:51', '2022-07-18 20:12:51'),
(6, 'Rail 6', 'rail1658203985_Rail 6', '--', 'Wrought Iron Rail 6', '2022-07-18 20:13:05', '2022-07-18 20:13:05'),
(7, 'Rail 7', 'rail1658203997_Rail 7', '--', 'Wrought Iron Rail 7', '2022-07-18 20:13:17', '2022-07-18 20:13:17'),
(8, 'Rail 8', 'rail1658204010_Rail 8', '--', 'Wrought Iron Rail 8', '2022-07-18 20:13:30', '2022-07-18 20:13:30'),
(9, 'Rail 9', 'rail1658204025_Rail 9', '--', 'Wrought Iron Rail 9', '2022-07-18 20:13:45', '2022-07-18 20:13:45'),
(10, 'Rail 10', 'rail1658204037_Rail 10', '--', 'Wrought Iron Rail 10', '2022-07-18 20:13:57', '2022-07-18 20:13:57'),
(11, 'Rail 11', 'rail1658204050_Rail 11', '--', 'Wrought Iron Rail 11', '2022-07-18 20:14:10', '2022-07-18 20:14:10'),
(12, 'Rail 12', 'rail1658204062_Rail 12', '--', 'Wrought Iron Rail 12', '2022-07-18 20:14:22', '2022-07-18 20:14:22'),
(13, 'Rail 13', 'rail1658204075_Rail 13', '--', 'Wrought Iron Rail 13', '2022-07-18 20:14:35', '2022-07-18 20:14:35'),
(14, 'Rail 14', 'rail1658204090_Rail 14', '--', 'Wrought Iron Rail 14', '2022-07-18 20:14:50', '2022-07-18 20:14:50'),
(15, 'Rail 15', 'rail1658204102_Rail 15', '--', 'Wrought Iron Rail 15', '2022-07-18 20:15:02', '2022-07-18 20:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint UNSIGNED NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `table_name`, `table_image`, `description`, `alt_description`, `created_at`, `updated_at`) VALUES
(1, 'Table 1', 'table1658132495_Table 1', '--', 'Wrought Iron Table 1', '2022-07-18 00:21:35', '2022-07-18 00:21:35'),
(2, 'Table 2', 'table1658132509_Table 2', '--', 'Wrought Iron Table 2', '2022-07-18 00:21:49', '2022-07-18 00:21:49'),
(3, 'Table Base 3', 'table1658132539_Table Base 3', '--', 'Wrought Iron Table base 3', '2022-07-18 00:22:19', '2022-07-18 00:22:19'),
(4, 'Table 4', 'table1658132563_Table 4', '--', 'Wrought Iron Table 4', '2022-07-18 00:22:43', '2022-07-18 00:22:43'),
(5, 'Table 5', 'table1658132579_Table 5', '--', 'Wrought Iron Table 5', '2022-07-18 00:22:59', '2022-07-18 00:22:59'),
(6, 'Table 6', 'table1658132614_Table 6', '--', 'Wrought Iron Table 6', '2022-07-18 00:23:34', '2022-07-18 00:23:34'),
(7, 'Table 7', 'table1658132628_Table 7', '--', 'Wrought Iron Table 7', '2022-07-18 00:23:48', '2022-07-18 00:23:48'),
(8, 'Table 8', 'table1658132652_Table 8', '--', 'Wrought Iron Table 8', '2022-07-18 00:24:12', '2022-07-18 00:24:12'),
(9, 'Table set - 9', 'table1658132689_Table set - 9', '--', 'Wrought Iron Table set 8', '2022-07-18 00:24:49', '2022-07-18 00:24:49'),
(10, 'Table 10', 'table1658132714_Table 10', '--', 'Wrought Iron Table 10', '2022-07-18 00:25:14', '2022-07-18 00:25:14'),
(11, 'Table 11', 'table1658132737_Table 11', '--', 'Wrought Iron Table 11', '2022-07-18 00:25:37', '2022-07-18 00:25:37'),
(12, 'Table 12', 'table1658132759_Table 12', '--', 'Wrought Iron Table 12', '2022-07-18 00:25:59', '2022-07-18 00:25:59'),
(13, 'Table 13', 'table1658132776_Table 13', '--', 'Wrought Iron Table 13', '2022-07-18 00:26:16', '2022-07-18 00:26:16'),
(14, 'Table 14', 'table1658132795_Table 14', '--', 'Wrought Iron Table 14', '2022-07-18 00:26:35', '2022-07-18 00:26:35'),
(15, 'Table 15', 'table1658194375_Table 15', '--', 'Wrought Iron Table 15', '2022-07-18 17:32:55', '2022-07-18 17:32:55'),
(16, 'Table 16', 'table1658194389_Table 16', '--', 'Wrought Iron Table 16', '2022-07-18 17:33:09', '2022-07-18 17:33:09'),
(17, 'Table 17', 'table1658194402_Table 17', '--', 'Wrought Iron Table 17', '2022-07-18 17:33:22', '2022-07-18 17:33:22'),
(18, 'Table 18', 'table1658194420_Table 18', '--', 'Wrought Iron Table 18', '2022-07-18 17:33:40', '2022-07-18 17:33:40'),
(19, 'Table 19', 'table1658194432_Table 19', '--', 'Wrought Iron Table 19', '2022-07-18 17:33:52', '2022-07-18 17:33:52'),
(20, 'Table 20', 'table1658194482_Table 20', '--', 'Wrought Iron Table 20', '2022-07-18 17:34:42', '2022-07-18 17:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `account_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marco Sanchez', '023sanchez.marcopolo@gmail.com', 'ADMIN000', NULL, '$2y$10$oKBhpCcMtGC6i3UpDpgPze5zmIkGpjt2inCRQIMIE7JzSXg8tCYzm', NULL, '2022-07-17 22:34:29', '2022-07-17 22:34:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beds_bed_name_unique` (`bed_name`);

--
-- Indexes for table `chairs`
--
ALTER TABLE `chairs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chairs_chair_name_unique` (`chair_name`);

--
-- Indexes for table `chandelier_products`
--
ALTER TABLE `chandelier_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chandelier_products_chandelier_name_unique` (`chandelier_name`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_client_name_unique` (`client_name`);

--
-- Indexes for table `doors_products`
--
ALTER TABLE `doors_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doors_products_door_name_unique` (`door_name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gates`
--
ALTER TABLE `gates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gates_gate_name_unique` (`gate_name`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `raillings_products`
--
ALTER TABLE `raillings_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `raillings_products_rail_name_unique` (`rail_name`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tables_table_name_unique` (`table_name`);

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
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `chairs`
--
ALTER TABLE `chairs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chandelier_products`
--
ALTER TABLE `chandelier_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `doors_products`
--
ALTER TABLE `doors_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gates`
--
ALTER TABLE `gates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `raillings_products`
--
ALTER TABLE `raillings_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

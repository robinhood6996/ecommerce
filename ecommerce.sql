-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 04:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `category`, `coupon`, `product`, `blog`, `order`, `other`, `report`, `role`, `return`, `contact`, `comment`, `setting`, `stock`, `type`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '01961363543', 'sohidulislam@gmail.com', NULL, '$2y$10$BdmZPWWiRmDaiIoqpB.FQuR2uh6b6ZtMIcywmF43upYdO6OdBm7Ga', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, NULL, '2019-10-10 07:29:53'),
(4, 'Imran Khan', '01961363546', 'imrankhan@gmail.com', NULL, '$2y$10$2Hgy7PMf3xCkd9yS8H5JZeXjY8duHqLAvYMmcGximDAOKSE5OLS..', NULL, '1', NULL, '1', '1', NULL, '1', NULL, NULL, '1', '1', '1', '1', '1', 2, NULL, NULL),
(5, 'mamun', '01864090759', 'sakib@gmail.com', NULL, '$2y$10$qOVYNcqagP.jd775awfZDuin/ZLyDeU.9kGt8Kx8/Wx4YmoODMbQW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(22, 'Oriss', 'public/media/brand/240621_15_49_02.jpg', NULL, NULL),
(23, 'Mermaid', 'public/media/brand/240621_15_00_07.png', NULL, NULL),
(24, 'wordpress', 'public/media/brand/010721_14_17_06.png', NULL, NULL),
(25, 'Hero', 'public/media/brand/010721_15_29_58.png', NULL, NULL),
(26, 'Bajaj', 'public/media/brand/010721_16_29_15.png', NULL, NULL),
(27, 'Honda', 'public/media/brand/010721_16_18_18.png', NULL, NULL),
(28, 'Xiaomi-MI', 'public/media/brand/010721_19_25_08.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s Fashion', NULL, NULL),
(2, 'Women\'s Fashion', '2019-10-11 06:12:45', '2019-10-11 06:12:45'),
(4, 'Child\'s', '2019-10-11 06:24:19', '2019-10-11 06:24:19'),
(5, 'Watch', '2019-10-17 08:16:00', '2019-10-17 08:16:00'),
(6, 'Furniture', '2019-10-20 10:18:30', '2019-10-20 10:18:30'),
(7, 'Electronics', '2019-10-20 10:18:40', '2019-10-20 10:18:40'),
(8, 'Health', '2019-10-20 10:19:43', '2019-10-20 10:19:43'),
(9, 'Beauty', '2019-10-20 10:19:51', '2019-10-20 10:19:51'),
(10, 'Sports & Outdoor', '2019-10-20 10:20:33', '2019-10-20 10:20:33'),
(11, 'Bike', NULL, NULL),
(12, 'Gadget', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'learnhunter5', '5', NULL, NULL),
(2, 'learnhunter10', '10', NULL, NULL),
(3, 'learnhunter15', '15', NULL, NULL),
(4, 'learnhunter20', '20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(5, '2019_10_10_135206_create_categories_table', 2),
(6, '2019_10_10_135221_create_subcategories_table', 2),
(7, '2019_10_10_135236_create_brands_table', 2),
(8, '2019_10_15_152304_create_coupons_table', 3),
(9, '2019_10_15_154357_create_newslaters_table', 4),
(10, '2019_10_16_054617_create_products_table', 5),
(11, '2019_10_21_153355_create_post_category_table', 6),
(12, '2019_10_21_153417_create_posts_table', 6),
(13, '2019_10_25_140504_create_wishlists_table', 7),
(14, '2019_11_19_144943_create_settings_table', 8),
(15, '2016_06_01_000001_create_oauth_auth_codes_table', 9),
(16, '2016_06_01_000002_create_oauth_access_tokens_table', 9),
(17, '2016_06_01_000003_create_oauth_refresh_tokens_table', 9),
(18, '2016_06_01_000004_create_oauth_clients_table', 9),
(19, '2016_06_01_000005_create_oauth_personal_access_clients_table', 9),
(20, '2019_11_28_124814_create_orders_table', 10),
(21, '2019_11_28_124827_create_order_details_table', 10),
(22, '2019_11_28_124843_create_shipping_table', 10),
(23, '2019_12_10_145038_create_subscribers_table', 11),
(24, '2019_12_10_145333_create_seo_table', 12),
(25, '2019_12_12_144824_create_sitesetting_table', 13),
(26, '2018_12_23_120000_create_shoppingcart_table', 14),
(27, '2021_07_18_163933_create_orders_table', 15),
(28, '2021_07_18_164002_create_order_details_table', 15),
(29, '2021_07_18_164035_create_shipping_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `newslaters`
--

CREATE TABLE `newslaters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newslaters`
--

INSERT INTO `newslaters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sohidulislam353@gmail.com', '2019-10-15 06:50:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Laravel Personal Access Client', 'fqH3bxe0aXvOS3LgfFSCioqMdfSt5EoraQWSUudF', 'http://localhost', 1, 0, 0, '2021-07-17 02:13:37', '2021-07-17 02:13:37'),
(4, NULL, 'Laravel Password Grant Client', 'u6qYp90QVqEuCHXHnh3BazSCBPd2kkFpFBNuMC8C', 'http://localhost', 0, 1, 0, '2021-07-17 02:13:37', '2021-07-17 02:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-11-20 01:17:41', '2019-11-20 01:17:41'),
(2, 3, '2021-07-17 02:13:37', '2021-07-17 02:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paying_ammount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bln_transaction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_type`, `payment_id`, `paying_ammount`, `bln_transaction`, `stripe_order_id`, `subtotal`, `shipping`, `vat`, `total`, `status`, `date`, `month`, `year`, `created_at`, `updated_at`) VALUES
(6, 6, 'stripe', 'card_1JH4WmL1oLmFID3VhT8piskE', NULL, 'txn_1JH4WnL1oLmFID3VvLfdhuGq', '60fd3c204e146', '575', '10', '0', '590', 3, '25-07-21', 'Jul', '2021', '2021-07-25 10:25:37', NULL),
(7, 6, 'stripe', 'card_1JH4bEL1oLmFID3Vu2o5tpRE', NULL, 'txn_1JH4bFL1oLmFID3V09tFiK0M', '60fd3d340a012', '745', '10', '0', '760', 3, '25-07-21', 'Jul', '2021', '2021-07-25 10:30:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `color`, `size`, `quantity`, `unit_price`, `total_price`, `created_at`, `updated_at`) VALUES
(3, 6, '30', 'Daniel Klein Premium Watch', 'brown', '25', NULL, '580', '580', NULL, NULL),
(4, 7, '29', 'Washing Machine', 'brown', '13cft', NULL, '375', '750', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_bn` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details_en` text NOT NULL,
  `details_bn` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title_en`, `title_bn`, `image`, `details_en`, `details_bn`, `created_at`) VALUES
(1, 2, 'What is Lorem Ipsum?', 'sddkfd', 'public/media/post/010721_14_27_13.png', 'sdfsdfsdfsddfd sdfesdrfer&nbsp; &nbsp; esfdsfd', 'sdfsdfsdfsd', '2021-06-26 15:57:30'),
(2, 2, 'This is our first post', 'এটি আমাদের প্রথম পোস্ট', 'public/media/post/170721_06_10_10.jpg', '<div>Is this the year you’re finally going to launch that business you’ve been dreaming of?</div><div><br></div><div>Or maybe this is the year you’re going to double down and 10x your revenue?</div><div><br></div><div>Whatever your situation, we’re here to help.&nbsp;</div><div><br></div><div>Being able to see how others have taken their ideas and turned them into successful eCommerce businesses or how they’ve grown their existing businesses is extremely valuable.&nbsp;</div><div><br></div><div>In this post, we’ll share some incredibly inspiring eCommerce success stories to help you take your eCommerce business to the next level.</div>', '<div>আপনি যে ব্যবসায়টির স্বপ্ন দেখেছিলেন তা অবশেষে আপনি কি সেই বছর চালু করতে চলেছেন?</div><div><br></div><div>বা সম্ভবত আপনি যে বছরে দ্বিগুণ হয়ে যাচ্ছেন এবং আপনার আয় 10x হচ্ছেন?</div><div><br></div><div>আপনার পরিস্থিতি যাই হোক না কেন, আমরা এখানে সহায়তা করতে এসেছি।</div><div><br></div><div>অন্যরা কীভাবে তাদের ধারণাগুলি নিয়েছে এবং সফল ইকমার্স ব্যবসায় তাদের রূপান্তরিত করেছে বা কীভাবে তারা তাদের বিদ্যমান ব্যবসাগুলি বাড়িয়েছে তা দেখতে সক্ষম হওয়া অত্যন্ত মূল্যবান is</div><div><br></div><div>এই পোস্টে, আমরা আপনাকে আপনার ইকমার্স ব্যবসায়কে পরবর্তী স্তরে নিয়ে যেতে সহায়তা করতে কিছু অবিশ্বাস্যভাবে অনুপ্রেরণামূলক ইকমার্স সাফল্যের গল্পগুলি ভাগ করব।</div>', '2021-07-17 06:10:10'),
(3, 1, '50% flat discount on mens fashion', 'পুরুষদের ফ্যাশনে 50% ফ্ল্যাট ছাড় discount', 'public/media/post/170721_06_10_13.png', '<span style=\"color: rgb(17, 17, 17); font-family: SourceSansPro, sans-serif; font-size: 17.6px;\">An offer is a clear proposal to sell or buy a specific product or service under specific conditions. Offers are made in a manner that a reasonable person would understand its acceptance and will result in a binding contract. There are many different types of offers, each of which has a distinct combination of features ranging from pricing requirements, rules and regulations, type of asset, and the buyer\'s and seller\'s motives.</span>', 'অফার হ\'ল নির্দিষ্ট শর্তাধীন একটি নির্দিষ্ট পণ্য বা পরিষেবা বিক্রয় বা ক্রয় করার একটি স্পষ্ট প্রস্তাব। অফারগুলি এমনভাবে করা হয় যাতে যুক্তিসঙ্গত ব্যক্তি তার গ্রহণযোগ্যতা বুঝতে পারে এবং একটি বাধ্যতামূলক চুক্তির ফলস্বরূপ। বিভিন্ন ধরণের অফার রয়েছে, যার প্রত্যেকের মূল্য নির্ধারণের প্রয়োজনীয়তা, নিয়মকানুন, বিধি-বিধান, সম্পদের ধরণ এবং ক্রেতার এবং বিক্রেতার উদ্দেশ্যগুলি সহ বৈশিষ্ট্যগুলির একটি পৃথক সমন্বয় রয়েছে।', '2021-07-17 06:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `category_name_en` varchar(255) NOT NULL,
  `category_name_bn` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `category_name_en`, `category_name_bn`, `created_at`) VALUES
(1, 'Offer', 'অফার', '2021-06-25 08:54:52'),
(2, 'services', 'সার্ভিস', '2021-06-25 08:54:52'),
(4, 'Discount', 'ডিসকাউন্ট', '2021-06-26 10:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider` int(11) DEFAULT NULL,
  `hot_deal` int(11) DEFAULT NULL,
  `best_rated` int(11) DEFAULT NULL,
  `mid_slider` int(11) DEFAULT NULL,
  `hot_new` int(11) DEFAULT NULL,
  `bogo` int(11) DEFAULT NULL,
  `trend` int(11) DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `bogo`, `trend`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(26, 5, 7, 22, 'Stylish Watchs', 'w5488', '100', '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 'Red,Steel,tt', 'Free,g', '950', '750', 'https://www.youtube.com/embed/HchAeAVP8j', NULL, 1, 1, NULL, 1, 1, 1, 'public/media/product/1703461059116531.jpg', 'public/media/product/1703461059137417.jpg', 'public/media/product/1703461059154120.jpg', 1, '2021-06-23 15:28:43', NULL),
(27, 5, 8, 23, 'Women\'s Watch', 'w5489', '100', '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 'Pink,White', 'Free', '1150', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 'public/media/product/1703461300259067.jpg', 'public/media/product/1703461300337453.jpg', 'public/media/product/1703461300376653.jpg', 1, '2021-06-09 15:28:48', NULL),
(29, 7, 17, 22, 'Washing Machine', 'w5490', '22', '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scr</span>', 'brown', '13cft', '580', '375', 'https://www.youtube.com/embed/HchAeAVP8jQ', NULL, 1, 1, NULL, NULL, 1, 1, 'https://localhost/ecommerce/public/media/product/1703519259348549.png', 'https://localhost/ecommerce/public/media/product/1703519259596680.jpg', 'https://localhost/ecommerce/public/media/product/1703519259733832.jpg', 1, '2021-06-25 06:29:25', NULL),
(30, 5, 7, 22, 'Daniel Klein Premium Watch', 'w5499', '101', '<div style=\"color: rgb(0, 0, 0); font-family: Whitney, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: medium;\"><p class=\"pdp-product-description-content\" style=\"color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-top: 12px; width: 539.266px;\">Display: Analogue<br>Movement: Quartz<br>Power source: Battery<br>Dial style: Solid round stainless steel dial<br>Features: Reset Time, Reset Time, Glow in the Dark Inlays<br>Strap style: Brown regular, leather strap with a tang closure<br>Water resistance: 50 m<br>Warranty: 2 years<br>Warranty provided by brand/manufacturer<br>Manufactured by: Daniel&nbsp;Klein&nbsp;group<br>Country of Origin: Hong Kong</p></div><div class=\"pdp-sizeFitDesc\" style=\"border: none; margin-top: 12px; color: rgb(0, 0, 0); font-family: Whitney, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: medium;\"><h4 class=\"pdp-sizeFitDescTitle pdp-product-description-title\" style=\"color: rgb(40, 44, 63); font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-transform: capitalize; border: none; padding-bottom: 5px;\">Size &amp; Fit</h4><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 577.797px;\">Dial width: 40 mm<br>Strap width: 20 mm</p></div><div class=\"index-sizeFitDesc\" style=\"border: none; margin-top: 12px; color: rgb(0, 0, 0); font-family: Whitney, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: medium;\"><h4 class=\"index-sizeFitDescTitle index-product-description-title\" style=\"color: rgb(40, 44, 63); font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-bottom: 12px; border: none; text-transform: capitalize;\">Specifications</h4><div class=\"index-tableContainer\" style=\"display: flex; -webkit-box-pack: start; justify-content: flex-start; flex-flow: row wrap; -webkit-box-orient: horizontal; -webkit-box-direction: normal;\"><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 64.1875px 12px 0px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Display</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Analogue</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 0px 12px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Features</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Reset Time</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 64.1875px 12px 0px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Movement</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Quartz</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 0px 12px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Power Source</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Battery</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 64.1875px 12px 0px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Type</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Regular</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 0px 12px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Dial Shape</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Round</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 64.1875px 12px 0px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Make</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Non-Swiss Made</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 0px 12px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Dial Pattern</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Solid</div></div></div><div><div class=\"index-tableContainer\" style=\"display: flex; -webkit-box-pack: start; justify-content: flex-start; flex-flow: row wrap; -webkit-box-orient: horizontal; -webkit-box-direction: normal;\"><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 64.1875px 12px 0px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Dial Colour</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Brown</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 0px 12px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Strap Closure</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Tang</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 64.1875px 12px 0px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Strap Colour</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Brown</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 0px 12px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Strap Style</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Regular</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 64.1875px 12px 0px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Scratch Resistance</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">No</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 0px 12px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Features 2</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Reset Time</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 64.1875px 12px 0px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Features 3</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Glow in the Dark Inlays</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 0px 12px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Multipack Set</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Single</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 64.1875px 12px 0px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Occasion</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Casual</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 0px 12px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Water Resistance</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">50 m</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 64.1875px 12px 0px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Warranty</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">2 years</div></div><div class=\"index-row\" style=\"position: relative; border-bottom: 1px solid rgb(234, 234, 236); margin: 0px 0px 12px; padding-bottom: 10px; flex-basis: 40%;\"><div class=\"index-rowKey\" style=\"position: relative; color: rgb(126, 129, 140); font-size: 12px; line-height: 1; margin-bottom: 5px;\">Strap Material</div><div class=\"index-rowValue\" style=\"position: relative; color: rgb(40, 44, 63); font-size: 16px; line-height: 1.2;\">Leather</div></div></div><div class=\"index-sizeFitDesc\" style=\"border: none; margin-top: 0px;\"><h4 class=\"index-sizeFitDescTitle index-product-description-title\" style=\"color: rgb(40, 44, 63); font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-bottom: 5px; border: none; text-transform: capitalize;\">Complete The Look</h4><p class=\"index-sizeFitDescContent index-product-description-content\" style=\"color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 577.797px;\">This impressive, trendy watch from Daniel Klein Premium is sure to draw attention when you tell the time. Match this coffee brown piece with slim jeans and a basic tee for a super-cool date outfit.</p></div></div></div>', 'brown,black', '25,26,30', '580', NULL, 'https://drive.google.com/drive/my-drive', 1, NULL, NULL, NULL, NULL, NULL, 1, 'https://localhost/ecommerce/public/media/product/1704093560709854.png', 'https://localhost/ecommerce/public/media/product/1704093561002596.png', 'https://localhost/ecommerce/public/media/product/1704093561133855.png', 1, '2021-07-01 14:37:42', NULL),
(31, 11, 23, 25, 'Hero Hunk 150cc Motor Bike', '0X3635B', '555', '<div class=\"px-8 py-4\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; padding: 1rem 2rem; color: rgb(0, 0, 0); font-size: 16px; outline: 0px !important;\"><span style=\"color: rgb(45, 55, 72); font-size: 14px; white-space: pre-line;\">ENGINE\r\nType: Air Cooled, 4 - stroke single cylinder OHC\r\nDisplacement: 149.2 cc\r\nMax. Power: 14.4 PS @ 8500 rpm\r\nMax. Torque: 12.8 Nm @ 6500 rpm\r\nMax. Speed: 107 Kmph\r\nBore x Stroke: 57.3 x 57.8 mm\r\nCarburettor: CV Type with Carburettor Controlled Variable Ignition\r\nCompression Ratio0: 9.1:1\r\nStarting: Self Start/ Kick start\r\nIgnition: AMI - Advanced Microprocessor Ignition System\r\nOil Grade: SAE 10 W 30 SJ Grade\r\nAir Filtration: Wire mesh &amp; centrifugal filter\r\nFuel System: Carburetor\r\nFuel Metering: Carburetion\r\n\r\nTRANSMISSION &amp; CHASSIS\r\nClutch: Multiplate wet\r\nGear box: 5 Speed constant mesh\r\nChassis Type: Tubular, Diamond type\r\n\r\nSUSPENSION\r\nFront: Telescopic Hydraulic Shock Absorbers\r\nRear: Swing Arm with Nitrox GRS (Gas Reservoir Suspension)\r\n\r\nBRAKES\r\nFront Brake: Disc Dia 240 mm\r\nRear Brake: Disc Dia 220 mm (Optional)\r\nRear Brake: Drum 130 mm Internal expanding shoe type\r\n\r\nWHEELS &amp; TYRES\r\nTyre Size Front: 80/100 x 18-47 P Tubeless tyres\r\nTyre Size Rear: 100 / 90 X 18 -56 P, Tubeless tyres\r\n\r\nELECTRICALS\r\nBattery: 12 V - 4 Ah, MF battery\r\nHead Lamp: 12 V - 35 W / 35W - Halogen bulb Trapeziodal MFR\r\nTail/Stop Lamp: 12 V - 0.5 W / 4.1W (LED lamps)\r\nTurn Signal Lamp: 12 V - 10 W (Amber bulb) x 4 nos. (Multi - reflector clear lens)\r\nPilot Lamp: 12 V - 3W</span><div class=\"Description___StyledDiv-sc-1t2t9nz-0 eeiXXL collapse whitespace-pre-line z-0 text-gray-800 text-sm relative\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-size: 0.875rem; position: relative; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); white-space: pre-line; z-index: 0; height: auto; overflow: hidden; outline: 0px !important;\">ENGINE\r\nType: Air Cooled, 4 - stroke single cylinder OHC\r\nDisplacement: 149.2 cc\r\nMax. Power: 14.4 PS @ 8500 rpm\r\nMax. Torque: 12.8 Nm @ 6500 rpm\r\nMax. Speed: 107 Kmph\r\nBore x Stroke: 57.3 x 57.8 mm\r\nCarburettor: CV Type with Carburettor Controlled Variable Ignition\r\nCompression Ratio0: 9.1:1\r\nStarting: Self Start/ Kick start\r\nIgnition: AMI - Advanced Microprocessor Ignition System\r\nOil Grade: SAE 10 W 30 SJ Grade\r\nAir Filtration: Wire mesh &amp; centrifugal filter\r\nFuel System: Carburetor\r\nFuel Metering: Carburetion\r\n\r\nTRANSMISSION &amp; CHASSIS\r\nClutch: Multiplate wet\r\nGear box: 5 Speed constant mesh\r\nChassis Type: Tubular, Diamond type\r\n\r\nSUSPENSION\r\nFront: Telescopic Hydraulic Shock Absorbers\r\nRear: Swing Arm with Nitrox GRS (Gas Reservoir Suspension)\r\n\r\nBRAKES\r\nFront Brake: Disc Dia 240 mm\r\nRear Brake: Disc Dia 220 mm (Optional)\r\nRear Brake: Drum 130 mm Internal expanding shoe type\r\n\r\nWHEELS &amp; TYRES\r\nTyre Size Front: 80/100 x 18-47 P Tubeless tyres\r\nTyre Size Rear: 100 / 90 X 18 -56 P, Tubeless tyres\r\n\r\nELECTRICALS\r\nBattery: 12 V - 4 Ah, MF battery\r\nHead Lamp: 12 V - 35 W / 35W - Halogen bulb Trapeziodal MFR\r\nTail/Stop Lamp: 12 V - 0.5 W / 4.1W (LED lamps)\r\nTurn Signal Lamp: 12 V - 10 W (Amber bulb) x 4 nos. (Multi - reflector clear lens)\r\nPilot Lamp: 12 V - 3W</div></div><div class=\"p-6\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; padding: 1.5rem; color: rgb(0, 0, 0); font-size: 16px; outline: 0px !important;\"><ul style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; outline: 0px !important;\"><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Length</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">2080 mm</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Width</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">765 mm</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Height</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">1095 mm</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Saddle Height</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">795 mm</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Wheelbase</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">1325 mm</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Fuel Tank Capacity</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">12.4 litre (min)</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Reserve</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">2.2 Ltrs (Usable reserve)</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Kerb Weight</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">145 kg</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Max Payload</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">130 Kg</div></li></ul></div>', 'Black & Blue,red', '240mm,55,66', '156990', '1500', 'https://www.youtube.com/embed/jOTV29FIIvw', 1, NULL, NULL, NULL, NULL, 1, 1, 'https://localhost/ecommerce/public/media/product/1704098861310040.jpg', 'https://localhost/ecommerce/public/media/product/1704098861416936.jpg', 'https://localhost/ecommerce/public/media/product/1704098861504045.jpg', 1, '2021-07-01 16:01:56', NULL),
(32, 11, 24, 26, 'Bajaj Pulsar 150CC Double Disc', '0X4D2A3', '55', '<span style=\"color: rgb(45, 55, 72); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space: pre-line;\">ENGINE\r\nType: 4-stroke, DTS-i, air cooled, single cylinder\r\nMax Power: 14 @ 8000 (Ps @ RPM)\r\nMax Torque: 13.4 @ 6000 (Nm @ RPM)\r\nDisplacement: 149.5cc\r\n\r\nVEHICLE\r\nWheel Base: 1345 mm\r\nLength x Width x Height: 2035 mm x 765 mm x 1115 mm\r\nGround Clearance: 165 mm\r\nSuspension Front: Telescopic, with anti-friction bush\r\nKerb Weight: 144 Kg\r\nFuel Tank (Reserve / Usable): 15 L (3.2 L reserve, 2 L usable)\r\nSuspension Rear: Twin suspension with Nitrox shock absorber\r\n\r\nBRAKES &amp; TYRES\r\nBrake Size Front: 230 mm Disc\r\nBrake Size Rear: 260 mm DIsc\r\nTyre Front: 90/90 -17 - Tubeless\r\nTyre Rear: 120/80 – 17 - tubeless\r\n\r\nELECTRICALS\r\nSystem: 12 V Full DC\r\nHead Lamp (High Beam): 35 W with 2 Pilot Lamps</span>', 'red black', '250mm', '179091', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, 'public/media/product/1704099816856503.png', 'public/media/product/1704099817012179.png', 'public/media/product/1704099817115751.png', 1, '2021-07-01 16:17:08', NULL),
(33, 11, 25, 27, 'Honda CB 150R Exmotion with ABS', '0X4AA76', '101', '<span style=\"color: rgb(45, 55, 72); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space: pre-line;\">CB150R ExMotion is a new innovation surprise from the Japanese motorcycle manufacturer Honda. It\'s a wonderful motorcycle that combines powerful water-cooled engines and cool designs. Although the bike does not sell Honda officially in the Bangladesh market, it is coming from Thailand directly through importers of the country. This bike is integrated into Thailand for the South Asian market.\r\n\r\n- Powerful 4-valve, water-cooled engine with PGM-FI.\r\n\r\n- The maintaining EURO-6 Standard\r\n\r\n- ABS featured a bike with G-Sensor for better stability and road safety.\r\n\r\n- Newly designed frame and sports swing arm.\r\n\r\n- Excellent looked full digital multifunctional instrument pane.\r\n\r\n- A lightweight motorcycle which is only 123 Kilograms.</span>', 'red,balck', '250mm,220,200', '520000', '41000', NULL, 1, NULL, 1, NULL, NULL, NULL, 1, 'https://localhost/ecommerce/public/media/product/1704099974831020.png', 'https://localhost/ecommerce/public/media/product/1704099974927317.png', 'https://localhost/ecommerce/public/media/product/1704099975018921.png', 1, '2021-07-01 16:19:38', NULL),
(34, 11, 24, 26, 'Bajaj Pulsar 150CC Double Disc', '0X4D2A3', '555', '<span style=\"color: rgb(45, 55, 72); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space: pre-line;\">ENGINE\r\nType: 4-stroke, DTS-i, air cooled, single cylinder\r\nMax Power: 14 @ 8000 (Ps @ RPM)\r\nMax Torque: 13.4 @ 6000 (Nm @ RPM)\r\nDisplacement: 149.5cc\r\n\r\nVEHICLE\r\nWheel Base: 1345 mm\r\nLength x Width x Height: 2035 mm x 765 mm x 1115 mm\r\nGround Clearance: 165 mm\r\nSuspension Front: Telescopic, with anti-friction bush\r\nKerb Weight: 144 Kg\r\nFuel Tank (Reserve / Usable): 15 L (3.2 L reserve, 2 L usable)\r\nSuspension Rear: Twin suspension with Nitrox shock absorber\r\n\r\nBRAKES &amp; TYRES\r\nBrake Size Front: 230 mm Disc\r\nBrake Size Rear: 260 mm DIsc\r\nTyre Front: 90/90 -17 - Tubeless\r\nTyre Rear: 120/80 – 17 - tubeless\r\n\r\nELECTRICALS\r\nSystem: 12 V Full DC\r\nHead Lamp (High Beam): 35 W with 2 Pilot Lamps</span>', 'black', '230mm', '150000', '140000', 'https://drive.google.com/drive/my-driv', NULL, NULL, 1, 1, NULL, NULL, 1, 'https://localhost/ecommerce/public/media/product/1704100449640993.png', 'https://localhost/ecommerce/public/media/product/1704100449742270.png', 'https://localhost/ecommerce/public/media/product/1704100449839416.png', 1, '2021-07-01 16:27:11', NULL),
(35, 12, 27, 28, 'Xiaomi Mi Power Bank - 10000 mAh - Silver', '0X72194', '55', '<div class=\"px-8 py-4\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; padding: 1rem 2rem; color: rgb(0, 0, 0); font-size: 16px; outline: 0px !important;\"><div class=\"Description___StyledDiv-sc-1t2t9nz-0 eeiXXL collapse whitespace-pre-line z-0 text-gray-800 text-sm relative\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-size: 0.875rem; position: relative; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); white-space: pre-line; z-index: 0; height: auto; overflow: hidden; outline: 0px !important;\">A power bank is a portable device that can supply power from its built-in battery through a USB port. Power banks are popular for charging smaller battery-powered devices with USB ports such as mobile phones and tablet computers and can be used as a power supply for various USB-powered accessories such as lights, small fans and external digital camera battery chargers. They usually recharge with a USB power supply.</div></div><div class=\"p-6\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; padding: 1.5rem; color: rgb(0, 0, 0); font-size: 16px; outline: 0px !important;\"><ul style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; outline: 0px !important;\"><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Product Type</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Power Bank</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Battery type</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Lithium-ion Polymer Battery</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Battery energy</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">37Wh 3.7V 10000mAh</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Rated capacity</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">5500mAh (5.1V/2.6A)</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Input interface</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Micro-USB/USB-C</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Output interface</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">USB-A</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Charging time</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">about four hours (9V/2A 12V/1.5A charger), about sixhours (5V/2A charger)</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Fast Charge</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">18w</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Packing list</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">one charging treasure, one manual, one USB data cable</div></li></ul></div>', 'steel', '200g', '1450', '1250', 'https://drive.google.com/drive/my-drive', NULL, 1, 1, 1, NULL, NULL, 1, 'https://localhost/ecommerce/public/media/product/1704110689842137.png', 'https://localhost/ecommerce/public/media/product/1704110689935535.png', 'https://localhost/ecommerce/public/media/product/1704110690027918.png', 1, '2021-07-01 19:09:57', NULL);
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `bogo`, `trend`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(36, 12, 28, 28, 'Xiaomi Mibro Air Smartwatch - Black', '0X7135A', '101', '<div class=\"px-8 py-4\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; padding: 1rem 2rem; color: rgb(0, 0, 0); font-size: 16px; outline: 0px !important;\"><span style=\"color: rgb(45, 55, 72); font-size: 14px; white-space: pre-line;\">Mibro Air Smart Watch will help you to monitor your heart rate throughout the day. This model is ideal not only for daily use but also for systematic sports activities. The smartwatch is capable of storing training data for the day. This watch has 12 sports modes. Besides, a smart ticker displays the weather and set reminders. Mibro Air can also act as an alarm clock. Needless to state, these electronic smart chronometers will also become an indispensable attribute of style that will make you feel more confident.\r\n\r\nThe seller offers a wide selection of products from renowned brands in Bangladesh with a promise of a fast, safe, and easy online shopping experience through Evaly. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serving to a greater extent for achieving higher customer satisfaction. The brands working with Evaly are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\nKey Features:\r\n-Lightweight and fashionable full-metal design\r\n-Full circle HD touch screen\r\n-Rotating dial operation, Smooth operation without lags\r\n-Rich and exquisite dial backgrounds selection, Customize Watch Face\r\n-24h Bio Heart Rate Tracker, always pay attention to heart health\r\n-12 professional sports modes, making sports safer and more efficient\r\n-Scientifically monitor sleep and record the complete sleeping status\r\n-Exclusive \"Mibro Fit\" APP for real-time synchronization of health data\r\n-Daily activity tracking, convenient life assistant\r\n-IP68 dustproof and waterproof, more assured for daily use</span><div class=\"Description___StyledDiv-sc-1t2t9nz-0 eeiXXL collapse whitespace-pre-line z-0 text-gray-800 text-sm relative\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-size: 0.875rem; position: relative; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); white-space: pre-line; z-index: 0; height: auto; overflow: hidden; outline: 0px !important;\">Mibro Air Smart Watch will help you to monitor your heart rate throughout the day. This model is ideal not only for daily use but also for systematic sports activities. The smartwatch is capable of storing training data for the day. This watch has 12 sports modes. Besides, a smart ticker displays the weather and set reminders. Mibro Air can also act as an alarm clock. Needless to state, these electronic smart chronometers will also become an indispensable attribute of style that will make you feel more confident.\r\n\r\nThe seller offers a wide selection of products from renowned brands in Bangladesh with a promise of a fast, safe, and easy online shopping experience through Evaly. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serving to a greater extent for achieving higher customer satisfaction. The brands working with Evaly are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\nKey Features:\r\n-Lightweight and fashionable full-metal design\r\n-Full circle HD touch screen\r\n-Rotating dial operation, Smooth operation without lags\r\n-Rich and exquisite dial backgrounds selection, Customize Watch Face\r\n-24h Bio Heart Rate Tracker, always pay attention to heart health\r\n-12 professional sports modes, making sports safer and more efficient\r\n-Scientifically monitor sleep and record the complete sleeping status\r\n-Exclusive \"Mibro Fit\" APP for real-time synchronization of health data\r\n-Daily activity tracking, convenient life assistant\r\n-IP68 dustproof and waterproof, more assured for daily use</div></div><div class=\"p-6\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; padding: 1.5rem; color: rgb(0, 0, 0); font-size: 16px; outline: 0px !important;\"><ul style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; outline: 0px !important;\"><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Product Type</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Smartwatch</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Material</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Metal+ABS+Rubber</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Display</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">1.28inch TFT Screen</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Definition</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">240 x 240 Pixels</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Battery Capacity</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">200mAh</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Charge</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Magnetic Charging Cable</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Bluetooth Version</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">5.0</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Sensor</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">PPG Bio Heart Rate, G-sensor</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Waterproof and Dustproof</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">IP68</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Operation Temperature</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">-20℃~45℃</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Body Dimension</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Diameter - 42mm, Thickness - 9.2mm</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Band Dimension</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Width - 20mm, Unfolded Length - 248mm</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">APP</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Mibro Fit</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">APP Support</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Support Android 5.0 and above, IOS10.0 and above (Functions will vary with different watches, mobile phones and countries)</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Workout Mode</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">Outdoors, walking, cycling, Alpinism, spinning, Yoga, Indoors, Elliptical mac, Badminton, Basketball, Football, Free training</div></li><li class=\"flex overflow-hidden\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); display: flex; outline: 0px !important;\"><div class=\"Description___StyledDiv2-sc-1t2t9nz-2 elACHt float-left py-1 mr-4 text-sm font-semibold text-gray-500\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); min-width: 10rem; max-width: 10rem; width: 160px; font-weight: 600; font-size: 0.875rem; margin-right: 1rem; --text-opacity:1; color: rgba(160,174,192,var(--text-opacity)); outline: 0px !important;\">Warrantry</div><div class=\"py-1 text-sm font-bold text-gray-800\" style=\"box-sizing: border-box; border: 0px solid rgb(226, 232, 240); font-weight: 700; font-size: 0.875rem; --text-opacity:1; color: rgba(45,55,72,var(--text-opacity)); outline: 0px !important;\">6 Months</div></li></ul></div>', 'black,red', 'xl,l', '4990', '3229', 'https://drive.google.com/drive/my-driv', NULL, NULL, 1, NULL, NULL, NULL, 1, 'https://localhost/ecommerce/public/media/product/1704110836470820.png', 'https://localhost/ecommerce/public/media/product/1704110836574278.png', 'https://localhost/ecommerce/public/media/product/1704110836670538.png', 1, '2021-07-01 19:12:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `shipping_charge` varchar(255) DEFAULT NULL,
  `vat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `logo`, `shipping_charge`, `vat`, `email`, `phone`, `address`, `created_at`) VALUES
(1, 'Ecommerce', NULL, '10', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `ship_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `order_id`, `ship_name`, `ship_email`, `ship_phone`, `ship_address`, `ship_city`, `created_at`, `updated_at`) VALUES
(5, 6, 'Fakhrul Islam Robin', 'robinypb@yahoo.com', '01627634755', 'Mirpur-1, H# 52, road 10', 'Dhaka', NULL, NULL),
(6, 7, 'Fakhrul Islam Robin', 'robinypb@yahoo.com', '01627634755', 'Mirpur-1, H# 52, road 10', 'Dhaka', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pants', NULL, NULL),
(2, 1, 'Shirt & T-shirt', NULL, NULL),
(3, 1, 'Shoes', NULL, NULL),
(4, 2, 'Hijab and Scarf', NULL, NULL),
(5, 2, 'Three piece', NULL, NULL),
(6, 2, 'Shoes', NULL, NULL),
(7, 5, 'Men\'s Watch', NULL, NULL),
(8, 5, 'Women\'s watch', NULL, NULL),
(9, 5, 'Child Watch', NULL, NULL),
(10, 1, 'Punjabi & Pajama', NULL, NULL),
(11, 2, 'Kurtis', NULL, NULL),
(12, 7, 'Mobile & Tablet', NULL, NULL),
(13, 7, 'Laptop', NULL, NULL),
(14, 7, 'Desktop', NULL, NULL),
(15, 7, 'Camera', NULL, NULL),
(16, 7, 'Television', NULL, NULL),
(17, 7, 'Refrigerator', NULL, NULL),
(18, 6, 'Bed Room', NULL, NULL),
(19, 6, 'Official', NULL, NULL),
(20, 6, 'Dining', NULL, NULL),
(21, 2, 'Jacket', NULL, NULL),
(22, 1, 'Jacket', NULL, NULL),
(23, 11, 'Hero', NULL, NULL),
(24, 11, 'Bajaj', NULL, NULL),
(25, 11, 'Honda', NULL, NULL),
(26, 12, 'Mobile', NULL, NULL),
(27, 12, 'Power Bank', NULL, NULL),
(28, 12, 'Smart Watch', NULL, NULL),
(29, 12, 'Headphone', NULL, NULL),
(31, 7, 'Router', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `avatar`, `provider`, `provider_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohidul Islam', NULL, 'sohidulislam@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$AXmPJQ.tg/8z5VJr6Z9Ar.XJzte2Ytw058vRAes3CxI7CXwAr/CT6', NULL, '2019-10-04 23:27:57', '2019-10-04 23:27:57'),
(2, 'Jahidul Islam', NULL, 'jahidulislam@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$t58WdGEyeKN5e/80mbWoRev4WSW8ANTJugJW.NfosJx31W0qxbjEq', NULL, '2019-10-05 04:47:42', '2019-10-05 04:47:42'),
(4, 'SI Sohel', '01938242329', 'sohidulislam353@gmail.com', NULL, 'google', '109254826656088542444', NULL, NULL, NULL, '2019-11-06 09:50:11', '2019-11-06 09:50:11'),
(5, 'Learn Hunter', '01938242329', 'sanjidakhan459@gmail.com', NULL, 'google', '100321672557195433473', NULL, NULL, NULL, '2019-11-30 08:16:19', '2019-11-30 08:16:19'),
(6, 'Fakhrul Islam Robin', '01864090759', 'robinypb@yahoo.com', NULL, NULL, NULL, '2021-07-02 09:43:41', '$2y$10$yLWsupk.sUHnQm5qwB2NwuaY2jvsKZ/rtpOwnwtjrfM1q7Eyb9JfC', NULL, '2021-07-02 09:39:25', '2021-07-10 07:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(61, 6, 36, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslaters`
--
ALTER TABLE `newslaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `newslaters`
--
ALTER TABLE `newslaters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

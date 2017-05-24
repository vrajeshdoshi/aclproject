-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 08:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aclproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `deleted_at`, `created_at`, `updated_at`, `parent_id`) VALUES
(1, 'Sales', 'sales', 'Jobs related to Sales', NULL, '2017-05-18 09:56:40', '2017-05-18 09:56:40', 0),
(2, 'I.T', 'i.t', 'Includes job related to IT field', NULL, '2017-05-18 09:57:01', '2017-05-18 09:57:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_jobposts`
--

CREATE TABLE `category_jobposts` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `jobpost_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `verified` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company`, `comp_desc`, `user_id`, `verified`, `deleted_at`, `created_at`, `updated_at`, `address`, `website`) VALUES
(5, 'Atmiya', 'Dasatva', 63, 'No', '2017-05-23 04:52:47', '2017-05-23 00:36:05', '2017-05-23 04:52:47', 'Kandivali - West', 'www.atmiyata.com'),
(6, 'Harsh Infotech', 'Deals in providing IT services', 3, 'No', '2017-05-23 04:58:45', '2017-05-23 04:58:05', '2017-05-23 04:58:45', 'Borivali -West', NULL),
(7, 'Bhavik Infotech', 'Provides Web development service', 4, 'No', NULL, '2017-05-23 07:22:19', '2017-05-23 07:22:19', 'Vasai -West', 'www.bhavikinfotech.com');

-- --------------------------------------------------------

--
-- Table structure for table `jobposts`
--

CREATE TABLE `jobposts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Freshers',
  `category_id` int(11) NOT NULL,
  `package` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `verified` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobposts`
--

INSERT INTO `jobposts` (`id`, `name`, `company`, `slug`, `description`, `experience`, `category_id`, `package`, `user_id`, `verified`, `deleted_at`, `created_at`, `updated_at`) VALUES
(12, 'PHP Developer', 'Margosa Tree', 'php developer', 'Php development to be done using Laravel Framework.', '1-3 years', 2, '25 K', 1, 'No', '2017-05-18 10:25:27', '2017-05-18 10:21:59', '2017-05-18 10:25:27'),
(13, 'PHP Developer', 'Margosa Tree', 'php developer', 'Php development to be done using Laravel Framework.', '1-3 years', 2, '25 K', 1, 'No', '2017-05-18 11:02:23', '2017-05-18 10:31:45', '2017-05-18 11:02:23'),
(14, 'PHP Developer', 'Margosa Tree', 'php developer', 'Php development to be done using Laravel.', '3-6 years', 2, '25 K', 1, 'No', '2017-05-19 23:45:26', '2017-05-18 11:04:12', '2017-05-19 23:45:26'),
(15, 'Javascript Development', 'Margosa Tree', 'javascript development', 'Javascript Developer is expected to have hands on experience with libraries like jQuery, vue, etc.', '6-9 years', 2, '60 K', 2, 'Yes', NULL, '2017-05-18 11:15:34', '2017-05-20 01:56:04'),
(17, 'UI/UX Developer', 'Cric8 Pro', 'ui/ux developer', 'Competence in HTML5, CSS3, jQuery, Javascript, AngularJS', '1-3 years', 2, '27K', 1, 'No', NULL, '2017-05-20 02:31:15', '2017-05-20 02:31:15'),
(18, 'Software Tester', 'Cric8 Pro', 'software tester', 'Automated Testing, Manual Testing', '3-6 years', 2, '50 K', 2, 'No', NULL, '2017-05-20 02:33:48', '2017-05-20 02:33:48'),
(19, 'Technical Writer', 'Shreeji Infotech', 'technical writer', 'Job is to write detailed technical documentation', '1-3 years', 2, '20 K', 1, 'Yes', NULL, '2017-05-20 04:31:06', '2017-05-20 04:31:06'),
(20, 'SQL Developer', 'Bhoolku Infotech', 'sql developer', 'Job role is responsible to optimize and write queries on demand by the developers', '3-6 years', 2, '30K', 2, 'Yes', NULL, '2017-05-20 04:34:10', '2017-05-20 04:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost_jobtype`
--

CREATE TABLE `jobpost_jobtype` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobpost_id` int(10) UNSIGNED NOT NULL,
  `jobtype_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `jobpost_jobtype`
--

INSERT INTO `jobpost_jobtype` (`id`, `jobpost_id`, `jobtype_id`, `created_at`, `updated_at`) VALUES
(1, 13, 1, NULL, NULL),
(2, 13, 2, NULL, NULL),
(11, 14, 1, NULL, NULL),
(12, 14, 2, NULL, NULL),
(14, 15, 2, NULL, NULL),
(15, 17, 1, NULL, NULL),
(16, 18, 2, NULL, NULL),
(17, 19, 1, NULL, NULL),
(18, 20, 1, NULL, NULL),
(19, 20, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobpost_jobtypes`
--

CREATE TABLE `jobpost_jobtypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobpost_id` int(10) UNSIGNED NOT NULL,
  `jobtype_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobpost_location_city`
--

CREATE TABLE `jobpost_location_city` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobpost_id` int(10) UNSIGNED NOT NULL,
  `location_city_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `jobpost_location_city`
--

INSERT INTO `jobpost_location_city` (`id`, `jobpost_id`, `location_city_id`, `created_at`, `updated_at`) VALUES
(1, 13, 1, NULL, NULL),
(2, 13, 2, NULL, NULL),
(11, 14, 1, NULL, NULL),
(14, 15, 2, NULL, NULL),
(15, 17, 1, NULL, NULL),
(16, 18, 1, NULL, NULL),
(17, 19, 1, NULL, NULL),
(18, 20, 1, NULL, NULL),
(19, 20, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobtypes`
--

CREATE TABLE `jobtypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobtypes`
--

INSERT INTO `jobtypes` (`id`, `name`, `slug`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Full Time', 'full time', 'Employee is expected to work for 9 to 10 hrs', NULL, '2017-05-18 09:55:33', '2017-05-18 09:55:33'),
(2, 'Part Time', 'part time', 'Employee will work for the half of the office hours', NULL, '2017-05-18 09:55:56', '2017-05-18 09:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `location_cities`
--

CREATE TABLE `location_cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_cities`
--

INSERT INTO `location_cities` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Mumbai', 'India', NULL, '2017-05-18 09:57:15', '2017-05-18 09:57:15'),
(2, 'Banglore', 'India', NULL, '2017-05-18 09:57:29', '2017-05-18 09:57:29'),
(3, 'New York', 'USA', NULL, '2017-05-23 07:14:42', '2017-05-23 07:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `location_countries`
--

CREATE TABLE `location_countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(90, '2014_10_12_000000_create_users_table', 1),
(91, '2014_10_12_100000_create_password_resets_table', 1),
(92, '2016_01_01_145345_create_roles_table', 1),
(93, '2016_01_01_145745_create_role_user_table', 1),
(94, '2016_01_01_150253_create_permissions_table', 1),
(95, '2016_01_01_154441_create_permission_role_table', 1),
(96, '2017_05_16_085030_create_companies_table', 1),
(97, '2017_05_16_153610_create_jobposts_table', 1),
(98, '2017_05_18_094738_create_jobtypes_table', 1),
(99, '2017_05_18_095646_create_categories_table', 1),
(100, '2017_05_18_095903_create_location_cities_table', 1),
(106, '2017_05_18_095946_create_location_countries_table', 2),
(107, '2017_05_18_102843_create_category_jobpost_table', 2),
(108, '2017_05_18_102942_create_jobpost_location_city_table', 3),
(111, '2017_05_18_145044_create_jobpost_jobtype_table', 4),
(112, '2017_05_21_063255_create_user_activations_table', 4),
(113, '2017_05_23_051655_alter_companies_table', 5);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Create User', 'user.create', 'Allows the create new user', '2017-05-19 09:03:15', '2017-05-19 09:03:15'),
(2, 'Update User', 'user.update', 'Allows to update user info', '2017-05-19 09:06:24', '2017-05-19 09:06:24'),
(3, 'Delete User', 'user.delete', 'Allows to delete user info', '2017-05-19 09:07:08', '2017-05-19 09:07:08'),
(4, 'Create Jobpost', 'jobpost.create', 'Allows the user to create new Job Post', '2017-05-19 22:58:26', '2017-05-19 22:58:26'),
(5, 'Verify Jobpost', 'jobpost.verify', 'Allows the user to edit and verify job post', '2017-05-19 23:00:11', '2017-05-19 23:00:11'),
(6, 'View Alljobpost', 'alljobpost.view', 'Allows the user to view all the job posts', '2017-05-19 23:02:48', '2017-05-19 23:02:48'),
(7, 'Delete Jobpost', 'jobpost.delete', 'Allows the user to Delete the jobpost', '2017-05-19 23:05:33', '2017-05-19 23:05:33'),
(8, 'View Jobpost', 'jobpost.view', 'Allows the user to view all job posts', '2017-05-19 23:06:13', '2017-05-19 23:06:13'),
(9, 'Edit Jobpost', 'jobpost.edit', 'Allows the user to edit Job Post', '2017-05-20 00:06:23', '2017-05-20 00:06:23'),
(10, 'Delete Alljobpost', 'alljobpost.delete', 'Allows the users to delete others as well as own Job Post', '2017-05-20 00:19:02', '2017-05-20 00:19:02'),
(11, 'Edit Alljobpost', 'alljobpost.edit', 'Allows the user to edit all job posts', '2017-05-20 00:21:05', '2017-05-20 00:21:05'),
(12, 'View Verifiedjobpost', 'verifiedjobpost.view', 'Allows user to view only verified posts', '2017-05-20 00:33:06', '2017-05-20 00:33:06'),
(13, 'Edit Company', 'company.edit', 'Allows the user to edit company information', '2017-05-22 09:38:52', '2017-05-22 09:38:52'),
(14, 'Delete Comapny', 'company.delete', 'Allows the user to delete company', '2017-05-22 09:40:19', '2017-05-22 09:40:19'),
(15, 'View Company', 'company.view', 'Allows the user to view company info', '2017-05-22 09:41:04', '2017-05-22 09:41:04'),
(16, 'View User', 'user.view', 'Allows the role to view user information', '2017-05-22 09:42:12', '2017-05-22 09:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(3, 2, 1, NULL, NULL),
(4, 4, 2, NULL, NULL),
(5, 5, 2, NULL, NULL),
(6, 6, 2, NULL, NULL),
(7, 7, 2, NULL, NULL),
(8, 8, 2, NULL, NULL),
(9, 1, 1, NULL, NULL),
(10, 3, 1, NULL, NULL),
(11, 4, 1, NULL, NULL),
(12, 5, 1, NULL, NULL),
(13, 6, 1, NULL, NULL),
(14, 7, 1, NULL, NULL),
(15, 8, 1, NULL, NULL),
(16, 9, 1, NULL, NULL),
(17, 9, 2, NULL, NULL),
(18, 10, 1, NULL, NULL),
(19, 11, 1, NULL, NULL),
(20, 10, 2, NULL, NULL),
(21, 11, 2, NULL, NULL),
(22, 4, 5, NULL, NULL),
(24, 7, 5, NULL, NULL),
(25, 8, 5, NULL, NULL),
(26, 9, 5, NULL, NULL),
(27, 1, 3, NULL, NULL),
(28, 2, 3, NULL, NULL),
(29, 3, 3, NULL, NULL),
(30, 13, 3, NULL, NULL),
(31, 14, 3, NULL, NULL),
(32, 15, 3, NULL, NULL),
(33, 16, 3, NULL, NULL),
(34, 13, 1, NULL, NULL),
(35, 14, 1, NULL, NULL),
(36, 15, 1, NULL, NULL),
(37, 16, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'abcd', NULL, NULL),
(2, 'Job Manager', 'job manager', 'adasd', NULL, NULL),
(3, 'User Manager', 'user manager', 'ssdfsd', NULL, NULL),
(4, 'Job Seeker', 'job seeker', 'dfgdf', NULL, NULL),
(5, 'Job Provider', 'job provider', 'dfgdfgfd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, NULL, NULL),
(8, 2, 2, NULL, NULL),
(11, 3, 5, NULL, NULL),
(16, 4, 10, '2017-05-21 01:40:58', '2017-05-21 01:40:58'),
(18, 4, 12, '2017-05-21 01:58:53', '2017-05-21 01:58:53'),
(19, 4, 13, '2017-05-21 02:13:12', '2017-05-21 02:13:12'),
(20, 4, 14, '2017-05-21 02:14:42', '2017-05-21 02:14:42'),
(21, 4, 15, '2017-05-21 02:22:23', '2017-05-21 02:22:23'),
(22, 4, 16, '2017-05-21 02:25:01', '2017-05-21 02:25:01'),
(23, 4, 17, '2017-05-21 02:27:03', '2017-05-21 02:27:03'),
(24, 4, 18, '2017-05-21 02:28:31', '2017-05-21 02:28:31'),
(25, 4, 19, '2017-05-21 02:32:21', '2017-05-21 02:32:21'),
(26, 4, 20, '2017-05-21 02:36:01', '2017-05-21 02:36:01'),
(53, 2, 47, NULL, NULL),
(55, 5, 63, '2017-05-23 00:26:14', '2017-05-23 00:26:14'),
(56, 5, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `verified`, `deleted_at`, `created_at`, `updated_at`, `is_activated`) VALUES
(1, 'Vrajesh', 'vrajeshdoshi@gmail.com', '$2y$10$GCxPl67iKSXdmOsIBLKxEOeWjhV3z01Hopytnu1qUQoXUfAALL3Bi', 'eeEwarmWzX9wOZ1tZkq28DADhm9iclU4uTAHado8CApi6lAQxZDg52vaBAuw', 'No', NULL, '2017-05-18 09:52:35', '2017-05-18 09:52:35', 1),
(2, 'Brijesh', 'brijesh@gmail.com', '$2y$10$H6ZlXp5e5RYgvG87K8CpGuhJaxC1mezcjnlmYCXpgB.FFaNSN87ni', 'rNwN267q3l6OmlPXALmAvVbdlJlj7JTPA8L2os5dZUkw5Nr7VvGoXAk1Ul9e', 'Yes', NULL, '2017-05-18 11:13:19', '2017-05-18 11:13:19', 1),
(4, 'Bhavik', 'bhavik@gmail.com', '$2y$10$Ierjj73V77CLwZ2LYDWfi.tKmyQvbyhkj.Q5.MxI36PcyPwW354Qi', '487QRNu6Pz4gcSJXbzKp8Th0kIiznelgvFRgnVg5BUjFGywtDvX6NRMt4ySF', 'Yes', NULL, '2017-05-19 22:50:41', '2017-05-19 22:50:41', 1),
(5, 'Kevin Goyal', 'kevin@gmail.com', '$2y$10$PYwl6oHxC34X3l.UA9if0utgPes7j0AzDwCrKPMUB7kDAvMB59Aoe', 'XJKt3iJB1LkoIeS2qCZowN7cMXa2jxl3Dmjxh7Y4FlOUZSzbneLPz3LdBmGD', 'Yes', NULL, '2017-05-19 22:50:59', '2017-05-19 22:50:59', 1),
(10, 'Divyank', 'divyank@gmail.com', '$2y$10$bNa..I4q6Jralyla53i0HeeGuWnQpWR5QfSbVMVnjvbR5bK3Oky86', 'iRML321mgRWQoM0ioNHZaO1XqhJ9i8L0MOkSLmY6BBbsUdEe5xhjjzh4ONRx', 'No', NULL, '2017-05-21 01:40:58', '2017-05-21 01:40:58', 1),
(11, 'raj', 'raj@gmail.com', '$2y$10$6jdQaZBZHws9JVzsKBhl3.f.Lnce/DNRiMIOPf5K0mFm5K0m8iqDy', NULL, 'No', '2017-05-23 07:16:05', '2017-05-21 01:55:34', '2017-05-23 07:16:05', 0),
(12, 'ram', 'ram@gmail.com', '$2y$10$0jeUwFnbJVK5CXulTGRif.1L0HUknrbjwA671qU2ex0s5R2jTntpe', 'FDIIzWOmKo3oc6ewqx4vRe7etlSTiN0qigzhWxydjJ35jrgtdzbxVvmqKatW', 'No', '2017-05-23 07:16:07', '2017-05-21 01:58:53', '2017-05-23 07:16:07', 0),
(13, 'kg', 'kg@gmail.com', '$2y$10$QbMT074PkenpDkaKYopiSujxwR2WMZQWde6K55fpcNkZqi3c2qV9u', NULL, 'No', '2017-05-23 07:16:09', '2017-05-21 02:13:12', '2017-05-23 07:16:09', 0),
(14, 'bd', 'bd@gmail.com', '$2y$10$aitvJq7dU81zLaARg0JC5.aSXVRUiy45mmrLeXe6f4iShZhM4puQK', NULL, 'No', '2017-05-23 05:07:43', '2017-05-21 02:14:42', '2017-05-23 05:07:43', 0),
(15, 'vd', 'vd@gms.com', '$2y$10$AM9JzAdnE.PNJvNgerLto.r5ROdeI7OcTRgWSpj/3dRY1vZnsLoXS', NULL, 'No', '2017-05-23 05:07:41', '2017-05-21 02:22:23', '2017-05-23 05:07:41', 0),
(16, 'brij', 'sds@sds.sdfsd', '$2y$10$SNL5KqPWqXlH9dTIfkI6Oelxom3Toith3pAZzlC6i8miAgXIk/WA6', NULL, 'No', '2017-05-23 05:07:38', '2017-05-21 02:25:01', '2017-05-23 05:07:38', 0),
(17, 'kd', 'kd@gmail.cp', '$2y$10$lZNMApoIIdOmDsFWfA.lje.4MqfckRpCrpFxNlj60dy/aH52SA6Vq', 'wyx6arkg1RXZi41p46umEskU0ECOMvhk8kbVUpbFU9xLn1O718aMo9wFsShb', 'No', '2017-05-23 05:07:36', '2017-05-21 02:27:03', '2017-05-23 05:07:36', 0),
(18, 'Brijes', 'br@gmail.com', '$2y$10$Uk0O/ZQCAVlIDH3mk4ES9OdmtnDxtxwbJva.vswRf/flzJ5NRizlq', 'fIknuLv9cTv6alvH8L4LsIIGhaoiNP6BM0eQSmeDZXwRpzyV9wlPnWbGCuDo', 'No', '2017-05-23 05:07:33', '2017-05-21 02:28:31', '2017-05-23 05:07:33', 0),
(19, 'fghdfg', 'fghf@gdfg.sdf', '$2y$10$e/YAgxch8vwhyDRH6tWlDuxligSHSlb0wpaPX8/kSpKwGtV/Z.0qu', 'xUOXbWM8AYqARmSYgvJx0vAUph3g3qWo95bqfAjtmAiV0lSY2b0lNKapUadg', 'No', '2017-05-23 05:07:30', '2017-05-21 02:32:20', '2017-05-23 05:07:30', 0),
(20, 'abcd', 'abc@gmail.com', '$2y$10$xUKFgoOGDQxF5jXxVRz7yugASpzxIQ.oumkjEKM77VIU8NyQdSNbS', 'OrVh9WxAouU6TlVVymEW5p4olD5oLRiWQdTfjq5oGV0L5Jmwn1My0wNZNHVP', 'No', '2017-05-23 05:07:27', '2017-05-21 02:36:01', '2017-05-23 05:07:27', 0),
(47, 'Saral', 'saral@gmail.com', '$2y$10$UmUxgn4BjsMoImQfJs4f7uE4pUQFit71u9Bk/eL5HRZNpQv33b3Q.', NULL, 'Yes', '2017-05-23 05:07:23', '2017-05-21 09:07:55', '2017-05-23 05:07:23', 0),
(63, 'shray', 'vrajesh.doshi@margosatree.com', '$2y$10$4Ub.ZOj7T0w.LtnIgkaiOuzd6TMgcpDrGpzHq2jCZjECD2GqXnLYm', 'dIkc590XObJShqlwfhaPQhkaRh3NugfexMbg5q4Kc4QmpJFz3HdGdw1d3Scl', 'No', '2017-05-23 04:55:44', '2017-05-23 00:26:14', '2017-05-23 04:55:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE `user_activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_activations`
--

INSERT INTO `user_activations` (`id`, `user_id`, `token`, `created_at`, `updated_at`) VALUES
(3, 57, 'wwSY8CDLMf7a1Ef0LrUVGUSHTGY03H', '2017-05-22 06:53:47', '2017-05-22 06:53:47'),
(4, 58, 'DKPT0eFXGtMEHxnWAXy5XmZzj3ekSC', '2017-05-22 07:02:56', '2017-05-22 07:02:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_jobposts`
--
ALTER TABLE `category_jobposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_jobposts_category_id_index` (`category_id`),
  ADD KEY `category_jobposts_jobpost_id_index` (`jobpost_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobposts`
--
ALTER TABLE `jobposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobpost_jobtype`
--
ALTER TABLE `jobpost_jobtype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobpost_jobtypes_jobpost_id_index` (`jobpost_id`),
  ADD KEY `jobpost_jobtypes_jobtype_id_index` (`jobtype_id`);

--
-- Indexes for table `jobpost_jobtypes`
--
ALTER TABLE `jobpost_jobtypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobpost_jobtypes_jobpost_id_index` (`jobpost_id`),
  ADD KEY `jobpost_jobtypes_jobtype_id_index` (`jobtype_id`);

--
-- Indexes for table `jobpost_location_city`
--
ALTER TABLE `jobpost_location_city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_locationcities_jobpost_id_index` (`jobpost_id`),
  ADD KEY `job_locationcities_location_city_id_index` (`location_city_id`);

--
-- Indexes for table `jobtypes`
--
ALTER TABLE `jobtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_cities`
--
ALTER TABLE `location_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_countries`
--
ALTER TABLE `location_countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `location_countries_slug_unique` (`slug`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category_jobposts`
--
ALTER TABLE `category_jobposts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jobposts`
--
ALTER TABLE `jobposts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `jobpost_jobtype`
--
ALTER TABLE `jobpost_jobtype`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `jobpost_jobtypes`
--
ALTER TABLE `jobpost_jobtypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobpost_location_city`
--
ALTER TABLE `jobpost_location_city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `jobtypes`
--
ALTER TABLE `jobtypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `location_cities`
--
ALTER TABLE `location_cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `location_countries`
--
ALTER TABLE `location_countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `user_activations`
--
ALTER TABLE `user_activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_jobposts`
--
ALTER TABLE `category_jobposts`
  ADD CONSTRAINT `category_jobposts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_jobposts_jobpost_id_foreign` FOREIGN KEY (`jobpost_id`) REFERENCES `jobposts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobpost_jobtype`
--
ALTER TABLE `jobpost_jobtype`
  ADD CONSTRAINT `jobpost_jobtypes_jobpost_id_foreign` FOREIGN KEY (`jobpost_id`) REFERENCES `jobposts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobpost_jobtypes_jobtype_id_foreign` FOREIGN KEY (`jobtype_id`) REFERENCES `jobtypes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobpost_location_city`
--
ALTER TABLE `jobpost_location_city`
  ADD CONSTRAINT `job_locationcities_jobpost_id_foreign` FOREIGN KEY (`jobpost_id`) REFERENCES `jobposts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_locationcities_location_city_id_foreign` FOREIGN KEY (`location_city_id`) REFERENCES `location_cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

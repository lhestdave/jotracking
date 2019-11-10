-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 04:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ornumber` bigint(20) NOT NULL,
  `joid` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `remarks` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encodedby` bigint(20) UNSIGNED NOT NULL,
  `paymentdate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `ornumber`, `joid`, `amount`, `remarks`, `encodedby`, `paymentdate`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '100.00', 'settle payment', 1, '2019-06-25', '2019-06-25 06:22:47', '2019-06-25 06:22:47'),
(2, 2, 1, '100.00', 'settle payment', 1, '2019-06-25', '2019-06-25 06:22:55', '2019-06-25 06:22:55'),
(3, 6, 1, '100.00', 'settle payment', 1, '2019-06-25', '2019-06-25 06:23:00', '2019-06-25 06:23:00'),
(4, 589, 2, '500.00', 'settle payment', 1, '2019-06-25', '2019-06-25 06:26:43', '2019-06-25 06:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clientname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `busadd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cperson` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encodedby` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `clientname`, `branch`, `busadd`, `tin`, `email`, `contactno`, `cperson`, `encodedby`, `created_at`, `updated_at`) VALUES
(1, 'Rigen Marketing', 'Davao', 'Davao City , PH', '31867324715', 'jnksdksndk@knsknskdn.com', '0643164', 'Dave', 1, '2019-06-11 17:26:49', '2019-06-21 17:05:05'),
(2, 'KaPa Community Ministry', 'test branch', 'DC', '123456789', '61631316@dsfdsfs', '66131631', 'Lester', 1, '2019-06-11 17:33:12', '2019-06-17 05:43:31'),
(3, 'Ever Arm Marketing', 'erer', 'erer', '22424', '61631316@dsfdsfs', '24242', 'zdsdsds', 1, '2019-06-12 00:33:51', '2019-06-17 05:45:05'),
(4, 'Jogle Marketing', 'adad', 'adsad', '31867324715', '61631316@dsfdsfs', '0643164', 'dfdwew', 1, '2019-06-12 00:34:20', '2019-06-17 05:43:55'),
(5, 'Titan marketing', 'adad', 'adsad', '31867324715', '61631316@dsfdsfs', '0643164', 'dfdwew', 1, '2019-06-12 00:34:31', '2019-06-17 05:44:27'),
(6, 'Ponzi Scheme', 'adad', 'adsad', '31867324715', '61631316@dsfdsfs', '0643164', 'dfdwew', 1, '2019-06-12 00:34:50', '2019-06-17 05:44:40'),
(7, 'JY Marketing', 'adad', 'adsad', '31867324715', '61631316@dsfdsfs', '0643164', 'dfdwew', 1, '2019-06-12 00:35:13', '2019-06-17 05:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `joborders`
--

CREATE TABLE `joborders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cid` bigint(20) UNSIGNED NOT NULL,
  `datedue` date NOT NULL,
  `assignedto` bigint(20) UNSIGNED NOT NULL,
  `encodedby` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joborders`
--

INSERT INTO `joborders` (`id`, `cid`, `datedue`, `assignedto`, `encodedby`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-06-15', 2, 1, '2019-06-13 15:38:19', '2019-06-13 15:38:19'),
(2, 2, '2019-06-29', 3, 1, '2019-06-14 06:12:26', '2019-06-14 06:12:26'),
(3, 3, '2019-06-27', 6, 1, '2019-06-14 07:49:05', '2019-06-14 07:49:05'),
(4, 4, '2019-06-29', 4, 1, '2019-06-17 04:06:46', '2019-06-17 04:06:46'),
(5, 3, '2019-06-29', 4, 1, '2019-06-17 05:45:55', '2019-06-17 05:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_05_06_111936_create_roles_table', 2),
(6, '2019_05_06_112406_create_role_user_table', 2),
(8, '2019_05_20_092657_create_clients_table', 3),
(9, '2019_06_12_071000_create_joborders_table', 4),
(11, '2019_06_12_071953_create_tasks_table', 5),
(13, '2019_06_13_141623_create_taskstatus_table', 6),
(16, '2019_06_13_142845_create_tasktrackings_table', 7),
(17, '2019_06_17_130043_create_billings_table', 8);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2019-06-13 06:38:09', '2019-06-13 06:38:09'),
(2, 'admin', '2019-06-13 06:38:09', '2019-06-13 06:38:09'),
(3, 'user', '2019-06-13 06:38:09', '2019-06-13 06:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 3, 3, NULL, NULL),
(6, 2, 2, NULL, NULL),
(7, 3, 2, NULL, NULL),
(8, 2, 4, NULL, NULL),
(9, 1, 5, NULL, NULL),
(10, 3, 6, NULL, NULL),
(11, 2, 5, NULL, NULL),
(12, 3, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `joid` bigint(20) UNSIGNED NOT NULL,
  `taskname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leadtime` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `joid`, `taskname`, `leadtime`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 'cvf', 2, '100.00', '2019-06-13 15:38:19', '2019-06-13 15:38:19'),
(2, 1, 'task1', 2, '100.00', '2019-06-13 15:38:19', '2019-06-13 15:38:19'),
(3, 1, 'permit to city hall', 2, '100.00', '2019-06-13 15:38:19', '2019-06-13 15:38:19'),
(4, 2, 'BIR Renewal', 5, '2500.00', '2019-06-14 06:12:26', '2019-06-14 06:12:26'),
(5, 2, 'SEC Renewal', 5, '3000.00', '2019-06-14 06:12:26', '2019-06-14 06:12:26'),
(6, 3, 'wew', 2, '22444.00', '2019-06-14 07:49:05', '2019-06-14 07:49:05'),
(7, 4, 'task1', 2, '180.00', '2019-06-17 04:06:46', '2019-06-17 04:06:46'),
(8, 4, 'wew3', 2, '560.00', '2019-06-17 04:06:46', '2019-06-17 04:06:46'),
(9, 5, 'Consult SEC', 5, '10000.00', '2019-06-17 05:45:55', '2019-06-17 05:45:55'),
(10, 5, 'Go to PRD', 10, '999999.99', '2019-06-17 05:45:55', '2019-06-17 05:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `taskstatus`
--

CREATE TABLE `taskstatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taskstatus`
--

INSERT INTO `taskstatus` (`id`, `state`, `created_at`, `updated_at`) VALUES
(1, 'received', NULL, NULL),
(2, 'processing', NULL, NULL),
(3, 'followup', NULL, NULL),
(4, 'stuck or pending', NULL, NULL),
(5, 'negotiating', NULL, NULL),
(6, 'done', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasktrackings`
--

CREATE TABLE `tasktrackings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tid` bigint(20) UNSIGNED NOT NULL,
  `tsid` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasktrackings`
--

INSERT INTO `tasktrackings` (`id`, `tid`, `tsid`, `uid`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2019-06-13 15:38:19', '2019-06-13 15:38:19'),
(2, 2, 1, 1, '2019-06-13 15:38:19', '2019-06-13 15:38:19'),
(3, 3, 1, 1, '2019-06-13 15:38:19', '2019-06-13 15:38:19'),
(4, 1, 2, 1, '2019-06-14 06:00:00', '2019-06-14 06:00:00'),
(5, 1, 3, 1, '2019-06-14 06:01:18', '2019-06-14 06:01:18'),
(6, 2, 2, 1, '2019-06-14 06:05:29', '2019-06-14 06:05:29'),
(7, 4, 1, 1, '2019-06-14 06:12:26', '2019-06-14 06:12:26'),
(8, 5, 1, 1, '2019-06-14 06:12:26', '2019-06-14 06:12:26'),
(9, 1, 4, 1, '2019-06-14 06:13:08', '2019-06-14 06:13:08'),
(10, 1, 6, 1, '2019-06-14 06:13:14', '2019-06-14 06:13:14'),
(11, 4, 2, 1, '2019-06-14 06:19:41', '2019-06-14 06:19:41'),
(12, 5, 2, 1, '2019-06-14 06:43:28', '2019-06-14 06:43:28'),
(13, 4, 4, 1, '2019-06-14 06:43:39', '2019-06-14 06:43:39'),
(14, 4, 5, 1, '2019-06-14 06:43:44', '2019-06-14 06:43:44'),
(15, 4, 6, 1, '2019-06-14 06:43:49', '2019-06-14 06:43:49'),
(16, 3, 3, 1, '2019-06-14 06:55:46', '2019-06-14 06:55:46'),
(17, 5, 6, 1, '2019-06-14 06:56:09', '2019-06-14 06:56:09'),
(18, 2, 6, 1, '2019-06-14 07:01:47', '2019-06-14 07:01:47'),
(19, 3, 6, 1, '2019-06-14 07:01:54', '2019-06-14 07:01:54'),
(20, 6, 1, 1, '2019-06-14 07:49:05', '2019-06-14 07:49:05'),
(21, 6, 3, 1, '2019-06-14 07:49:14', '2019-06-14 07:49:14'),
(22, 6, 5, 1, '2019-06-17 04:06:09', '2019-06-17 04:06:09'),
(23, 7, 1, 1, '2019-06-17 04:06:46', '2019-06-17 04:06:46'),
(24, 8, 1, 1, '2019-06-17 04:06:46', '2019-06-17 04:06:46'),
(25, 9, 1, 1, '2019-06-17 05:45:55', '2019-06-17 05:45:55'),
(26, 10, 1, 1, '2019-06-17 05:45:55', '2019-06-17 05:45:55'),
(27, 9, 2, 1, '2019-06-21 17:06:34', '2019-06-21 17:06:34'),
(28, 7, 2, 1, '2019-06-21 17:08:34', '2019-06-21 17:08:34'),
(29, 9, 3, 1, '2019-06-21 17:09:45', '2019-06-21 17:09:45'),
(30, 7, 3, 1, '2019-06-21 17:11:08', '2019-06-21 17:11:08'),
(31, 8, 2, 1, '2019-06-21 17:11:48', '2019-06-21 17:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@test.com', NULL, '$2y$10$f4B4kTnC6e7Bc3.gsyFqfe2gYdUApnH.C6Yqd/6fNQh2je8yQIeOy', NULL, '2019-05-06 03:45:09', '2019-05-06 03:45:09'),
(2, 'AAA Admin', 'admin@test.com', NULL, '$2y$10$QDy9U4YRAL9pcui1HCcYJ.u6GlDai824sxGW/oWB6nnwvdNWhlEdG', NULL, '2019-05-06 03:45:09', '2019-05-06 03:45:09'),
(3, 'UUU User', 'user@test.com', NULL, '$2y$10$a/GE7F8bggjPot3wHnCl8OROeourjoKaMgnB/yMExPgdFiXbWrRWq', NULL, '2019-05-06 03:45:09', '2019-05-06 03:45:09'),
(4, 'Dave', 'lesterdavepelias@gmail.com', NULL, '$2y$10$FT0bHwwAPPuA881ew8Jk4u6j5joUkx4jr5.hg0gPDY1/zpm4uDVs6', NULL, '2019-05-07 01:22:38', '2019-05-07 01:22:38'),
(5, 'dadadad', 'lhestdave@outlook.com', NULL, '$2y$10$1uDBWaV7RGEQtHvNRF2sF.ex1jLbi40rlokMimT7YhdPdE62MRn2.', NULL, '2019-05-07 01:24:32', '2019-05-07 01:24:32'),
(6, 'test', 'testreg@test.com', NULL, '$2y$10$q1KpCRtu6Rvu8feHVhkVJeJXDRTOyolQc4g7F1n4x9Dc5PgpxefKe', NULL, '2019-06-11 15:58:10', '2019-06-11 15:58:10'),
(7, 'Dave', 'lhestdave@test.com', NULL, '$2y$10$.uLjlI/9CSoi3wbNXfzIauu4MYS.qtBh08Tq/EpkS8t38GSLJunBK', NULL, '2019-06-12 02:03:24', '2019-06-12 02:03:24'),
(8, 'Sample', 'sample@register.com', NULL, '$2y$10$99sFn8F0Sl83Z.avncTBYOeyDWTGIPlk.t/xsGrs51j566EhwW5am', NULL, '2019-06-21 05:21:46', '2019-06-21 05:21:46');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwbillings`
-- (See below for the actual view)
--
CREATE TABLE `vwbillings` (
`id` bigint(20) unsigned
,`cid` bigint(20) unsigned
,`clientname` varchar(191)
,`amount` decimal(30,2)
,`paidamount` decimal(30,2)
,`ornumber` bigint(20)
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwjosdetails`
-- (See below for the actual view)
--
CREATE TABLE `vwjosdetails` (
`id` bigint(20) unsigned
,`cid` bigint(20) unsigned
,`clientname` varchar(191)
,`datedue` date
,`assignedto` bigint(20) unsigned
,`username` varchar(191)
,`encodedby` varchar(191)
,`created_at` timestamp
,`sumofstatus` decimal(42,0)
,`jcount` bigint(21)
,`maxstate` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwtasks`
-- (See below for the actual view)
--
CREATE TABLE `vwtasks` (
`id` bigint(20) unsigned
,`tid` bigint(20) unsigned
,`created_at` timestamp
,`joid` bigint(20) unsigned
,`taskname` varchar(191)
,`leadtime` bigint(20) unsigned
,`amount` decimal(8,2)
,`name` varchar(191)
,`tsid` bigint(20) unsigned
,`state` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `vwbillings`
--
DROP TABLE IF EXISTS `vwbillings`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwbillings`  AS  select `jo`.`id` AS `id`,`jo`.`cid` AS `cid`,(select `clients`.`clientname` from `clients` where (`clients`.`id` = `jo`.`cid`)) AS `clientname`,(select sum(`tasks`.`amount`) from `tasks` where (`tasks`.`joid` = `jo`.`id`)) AS `amount`,(select ifnull(sum(`billings`.`amount`),0.00) from `billings` where (`billings`.`joid` = `jo`.`id`)) AS `paidamount`,(select max(`billings`.`ornumber`) from `billings` where (`billings`.`joid` = `jo`.`id`)) AS `ornumber`,`jo`.`created_at` AS `created_at` from `joborders` `jo` ;

-- --------------------------------------------------------

--
-- Structure for view `vwjosdetails`
--
DROP TABLE IF EXISTS `vwjosdetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwjosdetails`  AS  select `jo`.`id` AS `id`,`jo`.`cid` AS `cid`,(select `clients`.`clientname` from `clients` where (`clients`.`id` = `jo`.`cid`)) AS `clientname`,`jo`.`datedue` AS `datedue`,`jo`.`assignedto` AS `assignedto`,(select `users`.`name` from `users` where (`users`.`id` = `jo`.`assignedto`)) AS `username`,(select `users`.`name` from `users` where (`users`.`id` = `jo`.`encodedby`)) AS `encodedby`,`jo`.`created_at` AS `created_at`,(select sum(`vwtasks`.`tsid`) from `vwtasks` where (`vwtasks`.`joid` = `jo`.`id`)) AS `sumofstatus`,(select count(`vwtasks`.`joid`) from `vwtasks` where (`vwtasks`.`joid` = `jo`.`id`)) AS `jcount`,(select max(`taskstatus`.`id`) from `taskstatus`) AS `maxstate` from `joborders` `jo` ;

-- --------------------------------------------------------

--
-- Structure for view `vwtasks`
--
DROP TABLE IF EXISTS `vwtasks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwtasks`  AS  select `tt`.`id` AS `id`,`tt`.`tid` AS `tid`,`tt`.`created_at` AS `created_at`,(select `tasks`.`joid` from `tasks` where (`tasks`.`id` = `tt`.`tid`)) AS `joid`,(select `tasks`.`taskname` from `tasks` where (`tasks`.`id` = `tt`.`tid`)) AS `taskname`,(select `tasks`.`leadtime` from `tasks` where (`tasks`.`id` = `tt`.`tid`)) AS `leadtime`,(select `tasks`.`amount` from `tasks` where (`tasks`.`id` = `tt`.`tid`)) AS `amount`,(select `users`.`name` from `users` where (`users`.`id` = `tt`.`uid`)) AS `name`,max(`tt`.`tsid`) AS `tsid`,(select `taskstatus`.`state` from `taskstatus` where (`taskstatus`.`id` = max(`tt`.`tsid`))) AS `state` from `tasktrackings` `tt` group by `tt`.`tid` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billings_joid_foreign` (`joid`),
  ADD KEY `billings_encodedby_foreign` (`encodedby`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_encodedby_foreign` (`encodedby`);

--
-- Indexes for table `joborders`
--
ALTER TABLE `joborders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `joborders_encodedby_foreign` (`encodedby`),
  ADD KEY `joborders_assignedto_foreign` (`assignedto`),
  ADD KEY `joborders_cid_foreign` (`cid`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_joid_foreign` (`joid`);

--
-- Indexes for table `taskstatus`
--
ALTER TABLE `taskstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasktrackings`
--
ALTER TABLE `tasktrackings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasktrackings_tid_foreign` (`tid`),
  ADD KEY `tasktrackings_tsid_foreign` (`tsid`),
  ADD KEY `tasktrackings_uid_foreign` (`uid`);

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
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `joborders`
--
ALTER TABLE `joborders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `taskstatus`
--
ALTER TABLE `taskstatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tasktrackings`
--
ALTER TABLE `tasktrackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billings`
--
ALTER TABLE `billings`
  ADD CONSTRAINT `billings_encodedby_foreign` FOREIGN KEY (`encodedby`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `billings_joid_foreign` FOREIGN KEY (`joid`) REFERENCES `joborders` (`id`);

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_encodedby_foreign` FOREIGN KEY (`encodedby`) REFERENCES `users` (`id`);

--
-- Constraints for table `joborders`
--
ALTER TABLE `joborders`
  ADD CONSTRAINT `joborders_assignedto_foreign` FOREIGN KEY (`assignedto`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `joborders_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `joborders_encodedby_foreign` FOREIGN KEY (`encodedby`) REFERENCES `users` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_joid_foreign` FOREIGN KEY (`joid`) REFERENCES `joborders` (`id`);

--
-- Constraints for table `tasktrackings`
--
ALTER TABLE `tasktrackings`
  ADD CONSTRAINT `tasktrackings_tid_foreign` FOREIGN KEY (`tid`) REFERENCES `tasks` (`id`),
  ADD CONSTRAINT `tasktrackings_tsid_foreign` FOREIGN KEY (`tsid`) REFERENCES `taskstatus` (`id`),
  ADD CONSTRAINT `tasktrackings_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

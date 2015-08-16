-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2015 at 05:34 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `additionalinformation`
--

CREATE TABLE IF NOT EXISTS `additionalinformation` (
  `id` int(10) unsigned NOT NULL,
  `pid` int(11) NOT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preferred_location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `add_information` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdocument` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `additionalinformation`
--

INSERT INTO `additionalinformation` (`id`, `pid`, `currency`, `salary`, `preferred_location`, `add_information`, `sdocument`, `created_at`, `updated_at`) VALUES
(1, 1, 'USD', '25', 'Australia', 'this is test objective', '', '2015-08-11 05:54:53', '2015-08-16 08:00:50'),
(2, 2, 'USD', '65', 'Angola', 'this second test', '', '2015-08-11 06:12:12', '2015-08-11 06:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `demand`
--

CREATE TABLE IF NOT EXISTS `demand` (
  `id` int(10) unsigned NOT NULL,
  `eid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_vacancy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `demand`
--

INSERT INTO `demand` (`id`, `eid`, `title`, `no_vacancy`, `qualification`, `location`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 3, 'programmer', '5', 'BE', 'ktm', '0', 'dasdasda', '2015-08-12 08:49:56', '2015-08-12 08:49:56'),
(2, 2, 'sfsdf', '2', 'asda', 'asdda', '0', 'sdsadasdasd', '2015-08-13 06:37:09', '2015-08-13 06:37:09'),
(3, 2, 'demandtest', '6', 'me', 'jnk', '0', 'sdadasdadsa', '2015-08-13 06:38:26', '2015-08-13 06:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `demanddelete`
--

CREATE TABLE IF NOT EXISTS `demanddelete` (
  `id` int(10) unsigned NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `demandId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `demanddelete`
--

INSERT INTO `demanddelete` (`id`, `userId`, `demandId`, `created_at`, `updated_at`) VALUES
(1, 2, '2', '2015-08-13 06:58:37', '2015-08-13 06:58:37'),
(2, 4, '3', '2015-08-13 07:56:53', '2015-08-13 07:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `educationinformation`
--

CREATE TABLE IF NOT EXISTS `educationinformation` (
  `id` int(10) unsigned NOT NULL,
  `pid` int(11) NOT NULL,
  `university` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gmonth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gyear` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ulocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `study_field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resume_certificate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `educationinformation`
--

INSERT INTO `educationinformation` (`id`, `pid`, `university`, `gmonth`, `gyear`, `qualification`, `ulocation`, `study_field`, `major`, `grade`, `resume_certificate`, `created_at`, `updated_at`) VALUES
(1, 1, 'TU', 'December', '2011', 'Bachelor''s Degree', 'Finland', 'Engineering (Electrical/Electronic)', 'ece', '75', '', '2015-08-11 05:52:59', '2015-08-16 07:39:09'),
(2, 2, 'pu', 'January', '2012', 'Master''s Degree', 'Bhutan', 'Engineering (Computer/Telecommunication)', 'com', '65', '', '2015-08-11 06:09:39', '2015-08-11 06:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `emaildelete`
--

CREATE TABLE IF NOT EXISTS `emaildelete` (
  `id` int(10) unsigned NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `emailId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emaildelete`
--

INSERT INTO `emaildelete` (`id`, `userId`, `emailId`, `created_at`, `updated_at`) VALUES
(2, 2, '4', '2015-08-13 08:15:44', '2015-08-13 08:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `emailview`
--

CREATE TABLE IF NOT EXISTS `emailview` (
  `id` int(10) unsigned NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `emailId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emailview`
--

INSERT INTO `emailview` (`id`, `userId`, `emailId`, `created_at`, `updated_at`) VALUES
(3, 2, '3', '2015-08-14 08:01:18', '2015-08-14 08:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `employerapproval`
--

CREATE TABLE IF NOT EXISTS `employerapproval` (
  `apid` int(10) unsigned NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `empid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employerapproval`
--

INSERT INTO `employerapproval` (`apid`, `pid`, `empid`, `created_at`, `updated_at`) VALUES
(3, 2, '2', '2015-08-11 12:37:51', '2015-08-11 12:37:51'),
(4, 2, '3', '2015-08-12 00:20:13', '2015-08-12 00:20:13'),
(5, 1, '2', '2015-08-13 06:29:16', '2015-08-13 06:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `experienceinformation`
--

CREATE TABLE IF NOT EXISTS `experienceinformation` (
  `id` int(10) unsigned NOT NULL,
  `pid` int(11) NOT NULL,
  `position_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `experience` int(11) NOT NULL,
  `from_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `to_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `specialization` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `experience_certificate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experienceinformation`
--

INSERT INTO `experienceinformation` (`id`, `pid`, `position_title`, `company_name`, `experience`, `from_date`, `to_date`, `specialization`, `role`, `country`, `industry`, `position_level`, `currency`, `salary`, `experience_certificate`, `created_at`, `updated_at`) VALUES
(1, 1, 'php programer', 'acem', 0, '13/08/2015', '1', 'php', 'manager', 'Nepal', 'Education', 'Manager', 'USD', '25', '', '2015-08-11 05:53:49', '2015-08-16 09:35:48'),
(2, 2, 'programmer', 'dove', 2, '15/08/2015', '16/08/2015', 'web', 'programing', 'Nepal', 'Education', 'Senior Manager', 'USD', '50', '', '2015-08-11 06:11:07', '2015-08-16 09:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `languageinformation`
--

CREATE TABLE IF NOT EXISTS `languageinformation` (
  `id` int(10) unsigned NOT NULL,
  `pid` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lspoken` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lwritten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languageinformation`
--

INSERT INTO `languageinformation` (`id`, `pid`, `language`, `lspoken`, `lwritten`, `created_at`, `updated_at`) VALUES
(1, 1, 'English', 'Excellent', 'Excellent', '2015-08-11 05:54:35', '2015-08-11 05:54:35'),
(2, 1, 'Nepali', 'Excellent', 'Excellent', '2015-08-11 05:54:35', '2015-08-11 05:54:35'),
(3, 1, 'Hindi', 'good', 'good', '2015-08-11 05:54:35', '2015-08-11 05:54:35'),
(4, 2, 'English', 'Excellent', 'Excellent', '2015-08-11 06:11:52', '2015-08-11 06:11:52'),
(5, 2, 'Nepali', 'Excellent', 'Excellent', '2015-08-11 06:11:52', '2015-08-11 06:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `memberprofile`
--

CREATE TABLE IF NOT EXISTS `memberprofile` (
  `id` int(10) unsigned NOT NULL,
  `uid` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_information` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_document` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contactNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `loginas` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `address`, `contactNumber`, `type`, `loginas`, `status`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', '', '', 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'admin', 'ktm', '123456', 1, 1, 1, 'admin@test.com', '$2y$10$6mGZt/yBFAR62wPDOmyg9uanZ1QlHyWkEkdtvefDiTx4xEmqHZJNq', 'ANQFfFAiZxULmfuKKF6uPEZZk7CDhgTOvJuHhPTqfX0RAAURxRMEZfvs5z4K', '2015-07-25 12:18:42', '2015-08-13 09:22:32'),
(3, 'employer', 'kathmandu', '1234567', 2, 2, 1, 'employer@test.com', '$2y$10$7AQwXM5oQIdCzTKUVSRZw.Q5fDXHahp4qdSQRc.qBZWEUQ4FGBujy', NULL, '2015-07-25 12:19:12', '2015-07-25 12:19:12'),
(6, 'agent', 'jnk', '123456789', 3, 3, 1, 'agent@test.com', '$2y$10$5RpYY9rT4/uJWzJ5juh0V.dVhiMfHySpDzjZCa4pU3X/Zs81hQO4C', NULL, '2015-08-13 08:44:48', '2015-08-13 08:44:48'),
(7, 'employer2', 'ktm', '123456789', 2, 2, 0, 'employer1@test.com', '$2y$10$rZleojm0V6htxbPqxs97GeE1kv8tedu.0xOPDOUq8H7FAM9rrRSPm', NULL, '2015-08-13 08:45:29', '2015-08-13 08:45:29'),
(8, 'admin2', 'ktm', '123456789', 1, 1, 1, 'admin2@test.com', '$2y$10$EfaqVODggCERVsXaJkspOeF5azTdmO4O1.O7GjAF4owJisAdeYh7i', 'lnCmvmcR5XgO71oKodcgKomUJvNJy9AFAd34YfR37LoSeNqYwKATBgrnrAXn', '2015-08-13 09:07:36', '2015-08-13 09:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_07_21_054405_create_member_table', 1),
('2015_07_21_094218_create_personalInformation_table', 1),
('2015_07_21_094247_create_educationInformation_table', 1),
('2015_07_21_094323_create_experienceInformation_table', 1),
('2015_07_27_163932_create_demand_table', 1),
('2015_07_28_075934_create_notification_table', 1),
('2015_07_29_071241_create_memberprofile_table', 1),
('2015_07_29_105754_create_skillsinformation_table', 1),
('2015_07_29_105845_create_additionalinformation_table', 1),
('2015_07_29_105925_create_languageinformation_table', 1),
('2015_07_29_110000_create_uploadinformation_tabe', 1),
('2015_07_29_110032_create_privacyinformation_table', 1),
('2015_08_02_170454_create_emaildelete_table', 1),
('2015_08_02_182247_create_demanddelete_table', 1),
('2015_08_11_163526_create_employerapproval_table', 2),
('2015_08_14_125542_create_emailview_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(10) unsigned NOT NULL,
  `from` int(11) NOT NULL,
  `to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `employer_status` int(11) NOT NULL,
  `agent_status` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `from`, `to`, `status`, `employer_status`, `agent_status`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 'a', 0, 0, 0, 'test1', 'fdsfsffs', '2015-08-13 06:35:43', '2015-08-13 06:35:43'),
(2, 2, 'e', 0, 0, 0, 'check', 'dasdsadsadasd', '2015-08-13 06:35:58', '2015-08-13 06:35:58'),
(3, 2, 'g', 0, 0, 0, 'agenttest', 'dfsfsfsfsffssdfsfs', '2015-08-13 06:36:18', '2015-08-13 06:36:18'),
(4, 2, 'a', 0, 0, 0, 'delete', 'czxczxczc', '2015-08-13 08:15:05', '2015-08-13 08:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personalinformation`
--

CREATE TABLE IF NOT EXISTS `personalinformation` (
  `id` int(10) unsigned NOT NULL,
  `agent_id` int(11) NOT NULL,
  `approval_status` int(11) NOT NULL,
  `approved_by` int(11) NOT NULL,
  `agent_approval_delete` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resume_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `height` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `onumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `raddress1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `raddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personalinformation`
--

INSERT INTO `personalinformation` (`id`, `agent_id`, `approval_status`, `approved_by`, `agent_approval_delete`, `fname`, `lname`, `resume_photo`, `passport`, `dob`, `age`, `gender`, `height`, `email`, `nationality`, `mobile`, `onumber`, `raddress1`, `raddress2`, `city`, `postal_code`, `country`, `state`, `identification`, `inumber`, `created_at`, `updated_at`) VALUES
(1, 2, 0, 1, 0, 'naresh', 'Das', '', '', '06/08/2015', 25, 'Male', 6, 'bimnaresh@gmail.com', 'Nepal', '08106707676', '', 'RVS Nagar', 'jnk', 'Chittoor', '517127', 'Nepal', 'Select Your State or Province', 'Passport No.', '12345', '2015-08-11 05:52:11', '2015-08-16 08:48:08'),
(2, 1, 1, 2, 0, 'Ram', 'Singh', '', '', '07/08/2015', 25, 'Male', 5, 'ram@example.com', 'USA', '123456789', '', 'pok', 'ktm', 'ktm', '00977', 'Nepal', 'bagmati', 'Passport No.', '45678', '2015-08-11 06:09:03', '2015-08-13 00:35:27'),
(3, 2, 0, 0, 0, 'nareshnew', 'Das', '', '', '06/08/2015', 45, 'Male', 44, 'bimnaresh@gmail.com', 'Nepal', '08106707676', '', 'RVS Nagar', 'cvvc', 'Chittoor', '517127', 'Malaysia', 'Select Your State or Province', 'Passport No.', '12355', '2015-08-16 08:43:21', '2015-08-16 08:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `privacyinformation`
--

CREATE TABLE IF NOT EXISTS `privacyinformation` (
  `id` int(10) unsigned NOT NULL,
  `pid` int(11) NOT NULL,
  `privacy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `privacyinformation`
--

INSERT INTO `privacyinformation` (`id`, `pid`, `privacy`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '2015-08-11 05:54:59', '2015-08-13 09:45:59'),
(2, 2, '1', '2015-08-11 06:12:16', '2015-08-11 06:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `skillsinformation`
--

CREATE TABLE IF NOT EXISTS `skillsinformation` (
  `id` int(10) unsigned NOT NULL,
  `pid` int(11) NOT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proficiency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skills_certificate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skillsinformation`
--

INSERT INTO `skillsinformation` (`id`, `pid`, `skills`, `proficiency`, `skills_certificate`, `created_at`, `updated_at`) VALUES
(1, 1, 'cooking', 'novice', '', '2015-08-11 05:54:09', '2015-08-16 07:55:06'),
(3, 2, 'cooking', 'novice', '', '2015-08-11 06:11:30', '2015-08-11 06:11:30'),
(4, 2, 'chating', 'expert', '', '2015-08-11 06:11:30', '2015-08-11 06:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `uploadinformation`
--

CREATE TABLE IF NOT EXISTS `uploadinformation` (
  `id` int(10) unsigned NOT NULL,
  `pid` int(11) NOT NULL,
  `uresume` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uploadinformation`
--

INSERT INTO `uploadinformation` (`id`, `pid`, `uresume`, `created_at`, `updated_at`) VALUES
(7, 1, '', '2015-08-16 05:21:52', '2015-08-16 06:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additionalinformation`
--
ALTER TABLE `additionalinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demand`
--
ALTER TABLE `demand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demanddelete`
--
ALTER TABLE `demanddelete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educationinformation`
--
ALTER TABLE `educationinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emaildelete`
--
ALTER TABLE `emaildelete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailview`
--
ALTER TABLE `emailview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employerapproval`
--
ALTER TABLE `employerapproval`
  ADD PRIMARY KEY (`apid`);

--
-- Indexes for table `experienceinformation`
--
ALTER TABLE `experienceinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languageinformation`
--
ALTER TABLE `languageinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberprofile`
--
ALTER TABLE `memberprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `personalinformation`
--
ALTER TABLE `personalinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacyinformation`
--
ALTER TABLE `privacyinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillsinformation`
--
ALTER TABLE `skillsinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadinformation`
--
ALTER TABLE `uploadinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additionalinformation`
--
ALTER TABLE `additionalinformation`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `demand`
--
ALTER TABLE `demand`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `demanddelete`
--
ALTER TABLE `demanddelete`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `educationinformation`
--
ALTER TABLE `educationinformation`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emaildelete`
--
ALTER TABLE `emaildelete`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emailview`
--
ALTER TABLE `emailview`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employerapproval`
--
ALTER TABLE `employerapproval`
  MODIFY `apid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `experienceinformation`
--
ALTER TABLE `experienceinformation`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `languageinformation`
--
ALTER TABLE `languageinformation`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `memberprofile`
--
ALTER TABLE `memberprofile`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `personalinformation`
--
ALTER TABLE `personalinformation`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `privacyinformation`
--
ALTER TABLE `privacyinformation`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `skillsinformation`
--
ALTER TABLE `skillsinformation`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `uploadinformation`
--
ALTER TABLE `uploadinformation`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

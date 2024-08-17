-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 07:33 AM
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
-- Database: `millionaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `aapplication`
--

CREATE TABLE `aapplication` (
  `aaid` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phnum` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phnum` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `scode` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `profile`, `fullname`, `username`, `address`, `phnum`, `email`, `password`, `scode`, `created_at`) VALUES
(7, '../uploads/1c40868058da07244c72bada565fe137.jpg', 'mouse', 'mouse', 'sudalaodis', 98766554, 'mouse@gmail.com', '$2y$10$fII3U2pWffGZMQhx.fub5uiKgYt77AO/nSc.zDCxKEDKZ..jIiUhG', '2222', '2024-07-01 12:22:21'),
(8, '../uploads/GSMVF-wXoAAooiv.jpeg', 'daishun', 'daishun', 'japan', 998766554, 'daishun@gmail.com', '$2y$10$JpP4M18QyQZdwDPkSlNLnOwtifFjBdmdzGBUBzGX2Q9SeCH9s131i', '6666', '2024-07-31 09:55:27'),
(9, '', '', '', '', 0, '', '', '6666', '0000-00-00 00:00:00'),
(10, '../uploads/1ba82b9613b14405cf24c59f0fa56bfc.jpg', 'bottle', 'bottle', 'bottle', 54756987, 'bottle@gmail.com', '$2y$10$NEkb01hfVubhG348Wp2Gzu1ptYPh9qOso3axd7r7N1R5QlSkjzSqG', '9090', '2024-08-01 06:44:12'),
(11, '../uploads/', 'copy', 'copy', 'cpopo', 897896, 'cop@gmail.com', '$2y$10$A5VioYWFEryKTs/BIQq9UeqLGBvehgOANkyE92wIgsFtrc.UruL1e', '8766', '2024-08-01 06:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `offuser`
--

CREATE TABLE `offuser` (
  `user_id` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phnum` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ocode` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagination`
--

CREATE TABLE `pagination` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` int(30) NOT NULL,
  `address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pagination`
--

INSERT INTO `pagination` (`id`, `name`, `class`, `address`) VALUES
(36, 'john', 10, 'Sudal'),
(37, 'Bijay', 10, 'Sudal'),
(38, 'Rajiv', 10, 'Sudal'),
(39, 'Archana', 10, 'Sudal'),
(40, 'Niroj', 10, 'Sudal'),
(41, 'Bibek', 10, 'Sudal'),
(42, 'siri', 10, 'Sudal'),
(43, 'Binita', 10, 'Sudal'),
(44, 'Anisha', 10, 'Sudal'),
(45, 'Shreedevi', 10, 'Sudal'),
(46, 'Ashmita', 10, 'Sudal'),
(47, 'Dipika', 10, 'Sudal'),
(48, 'Rohan', 10, 'Sudal'),
(49, 'aakriti', 16, 'miruwa'),
(50, 'aarati', 16, 'miruwa'),
(51, 'arpana', 16, 'miruwa'),
(52, 'alina', 16, 'miruwa'),
(53, 'sushma', 16, 'miruwa'),
(54, 'namrata', 16, 'miruwa'),
(55, 'motu', 16, 'miruwa'),
(56, 'sandesh', 16, 'miruwa'),
(57, 'ashmita', 16, 'miruwa'),
(58, 'aakriti', 16, 'miruwa'),
(59, 'aakriti', 16, 'miruwa'),
(60, 'fuchhi', 16, 'miruwa'),
(61, 'kushi', 16, 'miruwa'),
(62, 'anshu', 16, 'miruwa'),
(63, 'archana', 16, 'miruwa'),
(64, 'debika', 16, 'miruwa'),
(65, 'pudki', 16, 'miruwa'),
(66, 'binita', 16, 'miruwa'),
(67, 'xidevi', 16, 'miruwa'),
(68, 'usha', 16, 'miruwa'),
(69, 'purnima', 16, 'miruwa'),
(70, 'gore', 16, 'miruwa'),
(71, 'siri', 16, 'miruwa'),
(72, 'sulu', 16, 'miruwa'),
(73, 'bipin', 16, 'miruwa'),
(74, 'aliza', 16, 'miruwa'),
(75, 'nareen', 16, 'miruwa'),
(76, 'roji', 16, 'miruwa'),
(77, 'anju', 16, 'miruwa'),
(78, 'kabita', 16, 'miruwa');

-- --------------------------------------------------------

--
-- Table structure for table `papplication`
--

CREATE TABLE `papplication` (
  `paid` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phnum` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pid` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `pfullname` varchar(50) NOT NULL,
  `pusername` varchar(20) NOT NULL,
  `account_type` varchar(40) NOT NULL,
  `postimg` varchar(400) NOT NULL,
  `post` varchar(2000) NOT NULL,
  `star` bigint(150) NOT NULL,
  `comment` bigint(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `profile`, `pfullname`, `pusername`, `account_type`, `postimg`, `post`, `star`, `comment`, `created_at`) VALUES
(1, '', 'Archana Timilsina', 'archu', 'user', '', 'dsgsjzjktr', 0, 0, '2024-07-09 14:45:39'),
(2, '', 'Archana Timilsina', 'archu', 'user', '', 'hello i am archana timilsina', 0, 0, '2024-07-09 14:51:35'),
(3, '', 'Archana Timilsina', 'archu', 'user', '', 'hello i am archan atimilsina', 0, 0, '2024-07-09 14:54:51'),
(4, '', 'Archana Timilsina', 'archu', 'user', '', 'hello i am archana timilsina', 0, 0, '2024-07-09 15:00:24'),
(5, '', 'Archana Timilsina', 'archu', 'user', '', 'asfwgwrgwrgwrgwe', 0, 0, '2024-07-09 15:40:20'),
(6, '', 'baymax', 'baymax', 'user', '', 'sdehrhaeearhe', 0, 0, '2024-07-09 15:40:52'),
(7, '', 'baymax', 'baymax', 'user', '', 'Quisquam laboriosam dsfhwefklewf  fopweopgwe hjeifpowef jjfoewioew ieopwfjf klk;lfkdf klkff  l;klljjllk fkfl;ekf;lef ,vmkjfoei wpoklef fpoepf [pfefpekewlgjekgjfjeofweopfieopfkeopjweigejflkfl;s;kpwoew', 0, 0, '2024-07-09 15:54:19'),
(8, '', 'baymax', 'baymax', 'user', '', 'hello a sfisfjdfhhqef', 0, 0, '2024-07-09 15:58:43'),
(9, '', 'baymax', 'baymax', 'user', '', 'dgdf;lrherhp[rephrwg[rwgwgwrgwr', 0, 0, '2024-07-09 15:59:37'),
(10, 'uploads/', 'hello', 'hello', 'user', 'uploads/', 'i feel little anxioafieirghierghrjg', 0, 0, '2024-07-30 09:56:55');

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `prof_id` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phnum` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pcode` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`prof_id`, `profile`, `fullname`, `username`, `address`, `phnum`, `email`, `password`, `pcode`, `created_at`) VALUES
(1, 'uploads/', 'Archana Timilsina', 'archu', 'sudal-9 bhaktapur', 9861433446, 'archu@gmail.com', '$2y$10$w/B9Tn9fkRNoXqNbL5fGT.uoLxQqRKrIZhXDpdkRk9.7K01.Usdxq', '1234', 2024),
(2, 'uploads/00fb573ec4b9112e2ea99bbd9bdc6ecd.jpg', 'Kiona Johnson', 'moana', 'Dolor tempora amet ', 0, 'moana@gmail.com', '$2y$10$upMhXk57TEo2oFPRMZJp1eK49oMx6TyUjmoysK3PKAb..FIlYrAf.', '6788', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `qid` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `value1` varchar(20) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `value2` varchar(20) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `value3` varchar(20) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `value4` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`qid`, `question`, `option1`, `value1`, `option2`, `value2`, `option3`, `value3`, `option4`, `value4`, `created_at`) VALUES
(3, 'hsdgfyoe', 'ergr', '6', 'rtgr', '465', 'rgtr', '345', 'ere', '35', '2024-07-30 04:52:54'),
(4, 'What are you feeling now?', 'Very Good', '100', 'Good', '80', 'Bad', '30', 'very Bad', '10', '2024-07-30 08:34:23'),
(5, 'Do you fear alot?', 'Most of the time', '10', 'yes', '40', 'no', '80', ' i am strong', '100', '2024-07-30 08:37:22'),
(6, 'Suscipit Nam in reru', 'Amet exercitation e', 'Pariatur Omnis ea s', 'Ullam nemo maiores v', 'Non accusamus sunt ', 'Deserunt anim perspi', 'Nam duis est rerum d', 'Itaque quo velit rem', 'Qui non elit volupt', '2024-07-30 08:37:58'),
(7, 'Esse nesciunt volu', 'Qui reprehenderit a', 'Elit magnam ea null', 'Quia proident id vi', 'Quasi in ipsum labo', 'Ea harum sit optio ', 'Autem excepturi veni', 'Aut velit eaque quib', 'Incidunt tempore e', '2024-07-30 08:38:13'),
(8, 'Deserunt ducimus co', 'Fuga Dolor fugiat v', 'Voluptate incidunt ', 'Tempora quia natus p', 'Aut repellendus Exc', 'Vel error repudianda', 'Ullamco distinctio ', 'Saepe quod voluptas ', 'Odit ad laboriosam ', '2024-07-30 08:40:34'),
(9, 'Dolor rerum placeat', 'Molestias amet dolo', 'Id amet consequatur', 'Magna nesciunt cons', 'Ut veniam sint aute', 'Animi quibusdam eum', 'Iusto voluptatem No', 'Quibusdam tempore d', 'Maxime est nesciunt', '2024-07-30 08:41:22'),
(10, 'Molestiae voluptate ', 'Est itaque sit numq', 'Quia eiusmod blandit', 'Sunt est qui nemo mo', 'Occaecat aliquam non', 'Est ut esse laboris', 'Illum natus accusam', 'Perferendis laborum', 'Illum vel quidem do', '2024-07-30 08:41:44'),
(11, 'Voluptas nihil qui q', 'Laboriosam consequa', 'Ex doloremque elit ', 'Veniam quae quibusd', 'Aperiam qui soluta n', 'Dolore sapiente in a', 'Vitae aliquid quod d', 'Qui voluptatem Veli', 'Ut non totam quia no', '2024-07-30 08:41:48'),
(12, 'Ut minim ipsam vero ', 'Distinctio Perferen', 'Ipsum ab veniam co', 'Ullam dignissimos ad', 'Cupiditate dolor cul', 'Veniam quidem repre', 'Nihil doloribus libe', 'Qui qui impedit sit', 'Similique culpa sed', '2024-07-30 08:41:52'),
(13, 'Voluptatem et solut', 'In non eu non ullam ', 'Iste velit fugiat i', 'Mollitia et exercita', 'Quis odio maiores di', 'Voluptate consequatu', 'Rerum fugit velit ', 'Occaecat dolores in ', 'Mollitia deleniti do', '2024-07-30 08:41:56'),
(14, 'waawegrwger', 'WR', '32', 'EREW', '12', 'Sa', '23', 'fgn', '23', '2024-08-16 14:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_report`
--

CREATE TABLE `quiz_report` (
  `qrid` int(255) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `question1` varchar(200) NOT NULL,
  `answer1` varchar(100) NOT NULL,
  `question2` varchar(200) NOT NULL,
  `answer2` varchar(100) NOT NULL,
  `question3` varchar(200) NOT NULL,
  `answer3` varchar(100) NOT NULL,
  `question4` varchar(200) NOT NULL,
  `answer4` varchar(100) NOT NULL,
  `question5` varchar(200) NOT NULL,
  `answer5` varchar(100) NOT NULL,
  `question6` varchar(200) NOT NULL,
  `answer6` varchar(100) NOT NULL,
  `question7` varchar(200) NOT NULL,
  `answer7` varchar(100) NOT NULL,
  `question8` varchar(200) NOT NULL,
  `answer8` varchar(100) NOT NULL,
  `question9` varchar(200) NOT NULL,
  `answer9` varchar(100) NOT NULL,
  `question10` varchar(200) NOT NULL,
  `answer10` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_report`
--

INSERT INTO `quiz_report` (`qrid`, `fullname`, `email`, `question1`, `answer1`, `question2`, `answer2`, `question3`, `answer3`, `question4`, `answer4`, `question5`, `answer5`, `question6`, `answer6`, `question7`, `answer7`, `question8`, `answer8`, `question9`, `answer9`, `question10`, `answer10`, `created_at`) VALUES
(1, '', '', 'hsdgfyoe', '', 'What are you feeling now?', '', 'Do you fear alot?', '', 'Suscipit Nam in reru', '', 'Esse nesciunt volu', '', 'Deserunt ducimus co', '', 'Dolor rerum placeat', '', 'Molestiae voluptate ', '', 'Voluptas nihil qui q', '', 'Ut minim ipsam vero ', '', '2024-07-30 09:14:56'),
(2, '', '', 'hsdgfyoe', '465', 'What are you feeling now?', '80', 'Do you fear alot?', '10', 'Suscipit Nam in reru', 'Non accusamus sunt ', 'Esse nesciunt volu', 'Autem excepturi veni', 'Deserunt ducimus co', 'Aut repellendus Exc', 'Dolor rerum placeat', 'Iusto voluptatem No', 'Molestiae voluptate ', 'Illum natus accusam', 'Voluptas nihil qui q', 'Aperiam qui soluta n', 'Ut minim ipsam vero ', 'Nihil doloribus libe', '2024-07-30 09:15:21'),
(3, '', '', 'hsdgfyoe', '465', 'What are you feeling now?', '80', 'Do you fear alot?', '10', 'Suscipit Nam in reru', 'Non accusamus sunt ', 'Esse nesciunt volu', 'Autem excepturi veni', 'Deserunt ducimus co', 'Aut repellendus Exc', 'Dolor rerum placeat', 'Iusto voluptatem No', 'Molestiae voluptate ', 'Illum natus accusam', 'Voluptas nihil qui q', 'Aperiam qui soluta n', 'Ut minim ipsam vero ', 'Nihil doloribus libe', '2024-07-30 09:16:38'),
(4, '', '', 'hsdgfyoe', '465', 'What are you feeling now?', '80', 'Do you fear alot?', '10', 'Suscipit Nam in reru', 'Non accusamus sunt ', 'Esse nesciunt volu', 'Autem excepturi veni', 'Deserunt ducimus co', 'Aut repellendus Exc', 'Dolor rerum placeat', 'Iusto voluptatem No', 'Molestiae voluptate ', 'Illum natus accusam', 'Voluptas nihil qui q', 'Aperiam qui soluta n', 'Ut minim ipsam vero ', 'Nihil doloribus libe', '2024-07-30 09:17:34'),
(5, '', '', 'hsdgfyoe', '465', 'What are you feeling now?', '80', 'Do you fear alot?', '10', 'Suscipit Nam in reru', 'Non accusamus sunt ', 'Esse nesciunt volu', 'Autem excepturi veni', 'Deserunt ducimus co', 'Aut repellendus Exc', 'Dolor rerum placeat', 'Iusto voluptatem No', 'Molestiae voluptate ', 'Illum natus accusam', 'Voluptas nihil qui q', 'Aperiam qui soluta n', 'Ut minim ipsam vero ', 'Nihil doloribus libe', '2024-07-30 09:17:50'),
(6, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '465', 'What are you feeling now?', '80', 'Do you fear alot?', '10', 'Suscipit Nam in reru', 'Non accusamus sunt ', 'Esse nesciunt volu', 'Autem excepturi veni', 'Deserunt ducimus co', 'Aut repellendus Exc', 'Dolor rerum placeat', 'Iusto voluptatem No', 'Molestiae voluptate ', 'Illum natus accusam', 'Voluptas nihil qui q', 'Aperiam qui soluta n', 'Ut minim ipsam vero ', 'Nihil doloribus libe', '2024-07-30 09:22:13'),
(7, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '35', 'What are you feeling now?', '10', 'Do you fear alot?', '100', 'Suscipit Nam in reru', 'Qui non elit volupt', 'Esse nesciunt volu', 'Incidunt tempore e', 'Deserunt ducimus co', 'Odit ad laboriosam ', 'Dolor rerum placeat', 'Maxime est nesciunt', 'Molestiae voluptate ', 'Illum vel quidem do', 'Voluptas nihil qui q', 'Ut non totam quia no', 'Ut minim ipsam vero ', 'Similique culpa sed', '2024-07-30 09:34:50'),
(8, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '', 'What are you feeling now?', '', 'Do you fear alot?', '', 'Suscipit Nam in reru', '', 'Esse nesciunt volu', '', 'Deserunt ducimus co', '', 'Dolor rerum placeat', '', 'Molestiae voluptate ', '', 'Voluptas nihil qui q', '', 'Ut minim ipsam vero ', '', '2024-07-30 09:36:21'),
(9, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '345', 'What are you feeling now?', '30', 'Do you fear alot?', '40', 'Suscipit Nam in reru', 'Nam duis est rerum d', 'Esse nesciunt volu', 'Autem excepturi veni', 'Deserunt ducimus co', 'Odit ad laboriosam ', 'Dolor rerum placeat', 'Iusto voluptatem No', 'Molestiae voluptate ', 'Quia eiusmod blandit', 'Voluptas nihil qui q', 'Vitae aliquid quod d', 'Ut minim ipsam vero ', 'Nihil doloribus libe', '2024-07-30 09:36:30'),
(10, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '', 'What are you feeling now?', '', 'Do you fear alot?', '', 'Suscipit Nam in reru', '', 'Esse nesciunt volu', '', 'Deserunt ducimus co', '', 'Dolor rerum placeat', '', 'Molestiae voluptate ', '', 'Voluptas nihil qui q', '', 'Ut minim ipsam vero ', '', '2024-07-31 09:19:22'),
(11, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '465', 'What are you feeling now?', '30', 'Do you fear alot?', '40', 'Suscipit Nam in reru', 'Nam duis est rerum d', 'Esse nesciunt volu', 'Incidunt tempore e', 'Deserunt ducimus co', 'Ullamco distinctio ', 'Dolor rerum placeat', 'Iusto voluptatem No', 'Molestiae voluptate ', 'Illum natus accusam', 'Voluptas nihil qui q', 'Aperiam qui soluta n', 'Ut minim ipsam vero ', 'Nihil doloribus libe', '2024-07-31 11:21:44'),
(12, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '', 'What are you feeling now?', '', 'Do you fear alot?', '', 'Suscipit Nam in reru', '', 'Esse nesciunt volu', '', 'Deserunt ducimus co', '', 'Dolor rerum placeat', '', 'Molestiae voluptate ', '', 'Voluptas nihil qui q', '', 'Ut minim ipsam vero ', '', '2024-08-15 11:50:47'),
(13, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '6', 'What are you feeling now?', '10', 'Do you fear alot?', '80', 'Suscipit Nam in reru', 'Non accusamus sunt ', 'Esse nesciunt volu', 'Incidunt tempore e', 'Deserunt ducimus co', 'Odit ad laboriosam ', 'Dolor rerum placeat', 'Maxime est nesciunt', 'Molestiae voluptate ', 'Illum vel quidem do', 'Voluptas nihil qui q', 'Aperiam qui soluta n', 'Ut minim ipsam vero ', 'Ipsum ab veniam co', '2024-08-15 11:50:54'),
(14, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '35', 'What are you feeling now?', '30', 'Do you fear alot?', '80', 'Suscipit Nam in reru', 'Pariatur Omnis ea s', 'Esse nesciunt volu', 'Elit magnam ea null', 'Deserunt ducimus co', 'Ullamco distinctio ', 'Dolor rerum placeat', 'Ut veniam sint aute', 'Molestiae voluptate ', 'Occaecat aliquam non', 'Voluptas nihil qui q', 'Aperiam qui soluta n', 'Ut minim ipsam vero ', 'Cupiditate dolor cul', '2024-08-16 14:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `profile`, `fullname`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'uploads/1c2f86c3e3b6a4e5025eac7686989f16.jpg', 'Archana Timilsina', 'archu', 'archu@gmail.com', '$2y$10$vZIFUn6N6lqSqQaL4LqraesakXpUuz7AuMb7KLyBw3IzhpsL7otzO', '2024-06-24 15:24:31'),
(2, 'uploads/0a2ad6daf3c74a53cc98e2c4992a4501.jpg', 'baymax', 'baymax', 'baymax@gmail.com', '$2y$10$qRdCrBhJTbVHvysMLA.5bu1oRMWDWVCvVOuxgYMc0OaEAgW9j1lzS', '2024-06-25 20:02:38'),
(3, 'uploads/', 'hello', 'hello', 'hello@gmail.com', '$2y$10$QWfjMUQ7SjERK9RvPOmGnuycQZWHkui4HYa1hQPgnzB2Kvz4gNgnW', '2024-07-30 09:19:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aapplication`
--
ALTER TABLE `aapplication`
  ADD PRIMARY KEY (`aaid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `offuser`
--
ALTER TABLE `offuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `pagination`
--
ALTER TABLE `pagination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papplication`
--
ALTER TABLE `papplication`
  ADD PRIMARY KEY (`paid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quiz_report`
--
ALTER TABLE `quiz_report`
  ADD PRIMARY KEY (`qrid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aapplication`
--
ALTER TABLE `aapplication`
  MODIFY `aaid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `offuser`
--
ALTER TABLE `offuser`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagination`
--
ALTER TABLE `pagination`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `papplication`
--
ALTER TABLE `papplication`
  MODIFY `paid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `prof_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `qid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quiz_report`
--
ALTER TABLE `quiz_report`
  MODIFY `qrid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

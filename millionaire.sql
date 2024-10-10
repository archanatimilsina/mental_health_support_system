-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 05:22 PM
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
(11, '../uploads/', 'copy', 'copy', 'cpopo', 897896, 'cop@gmail.com', '$2y$10$A5VioYWFEryKTs/BIQq9UeqLGBvehgOANkyE92wIgsFtrc.UruL1e', '8766', '2024-08-01 06:45:23'),
(12, '../uploads/', 'Candace Weber', 'archu', 'Hic nostrud nisi inc', 0, 'archu@gmail.com', '$2y$10$GuzzFDnHWG9CfthbjyPD9eTVwbNH7Ek/tZef3bWxtZPRvh.wim68S', '8888', '2024-09-21 19:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `aid` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `writer` varchar(50) NOT NULL,
  `content` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`aid`, `profile`, `writer`, `content`, `created_at`) VALUES
(8, 'uploads/d1b8898a0407abfd287637c04759e7b8.jpg', 'Cheryl French', 'In cum qui magni ', '2024-09-11 07:22:23'),
(9, 'uploads/e7a029bdf91b5078e1f9e1f43740d176.jpg', 'Pascale Dickerson', 'Ea praesentium ut ', '2024-09-11 07:22:35'),
(10, 'uploads/e363b99a55f14dfb9eb831e0a38b2716.jpg', 'Garrison Lambert', 'Id molestias volupta', '2024-09-11 07:22:45'),
(11, 'uploads/7de82353402d7fa8b243a50d8f8684ed.jpg', 'Clementine Gregory', 'Eveniet non tempor ', '2024-09-11 07:22:54'),
(13, 'uploads/5f9d8f307f1bb1978c068a1624d4bac1.jpg', 'Moana Bright', 'Sunt neque iste fugi', '2024-09-11 07:23:20'),
(14, 'uploads/9e9559d40eba3efbe63222e3a0542645.jpg', 'Odessa Chandler', 'Dolore perferendis a', '2024-09-11 07:23:28'),
(15, 'uploads/4d26115e4afa87b668b7e56ad6ea92e1.jpg', 'Nichole Boyer', 'Aut quia non ab exce', '2024-09-11 07:23:36'),
(16, 'uploads/6ad215670d5c2e4488f736c568e2b9bc.jpg', 'Rhonda Blevins', 'Veniam maiores iste', '2024-09-11 07:23:44'),
(17, 'uploads/3e19995b00917110f070b64aa97d83ae.jpg', 'Bo Mosley', 'Facilis modi volupta', '2024-09-11 07:23:59'),
(18, 'uploads/0a2ad6daf3c74a53cc98e2c4992a4501.jpg', 'Kasper Hall', 'Temporibus doloribus', '2024-09-11 07:24:06'),
(19, 'uploads/img-blsSv4eorD142JVZr6nYz.jpeg', 'Leroy Carney', 'Voluptate deleniti r', '2024-09-11 07:24:23'),
(20, 'uploads/WhatsApp Image 2024-05-03 at 07.07.36_f869eed7.jpg', 'Stella Cote', 'Vel itaque adipisici', '2024-09-11 07:24:31'),
(21, 'uploads/IMG_20240528_180514_1.jpg', 'Garrett Michael', 'Aliquid veniam et p', '2024-09-11 07:24:40'),
(23, 'uploads/kill.jpg', 'Chantale Dale', 'In explicabo Alias ', '2024-09-11 07:24:55'),
(24, 'uploads/IMG_20240726_080340.jpg', 'Beatrice Wilkins', 'Illo omnis non volup', '2024-09-11 07:25:38'),
(25, 'uploads/6ad215670d5c2e4488f736c568e2b9bc.jpg', 'Craig Kidd', 'Doloremque ab qui au', '2024-09-11 07:25:55'),
(26, 'uploads/5a12683e499704663e1469640a3271aa.jpg', 'Blaine Calhoun', 'Ullamco officiis cor', '2024-09-11 07:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(200) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `topic` varchar(80) NOT NULL,
  `writer` varchar(80) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `profile`, `topic`, `writer`, `caption`, `created_at`) VALUES
(1, 'uploads/5097.jpg', 'saya', 'hello', 'hello i am archana timilsina', '2024-09-11 07:03:10'),
(2, 'uploads/4c874aa23747945d184e35265f015d5c.jpg', 'Aute nesciunt ut do', 'Quaerat quod fuga U', 'Omnis excepteur sunt', '2024-09-11 07:18:13'),
(3, 'uploads/WhatsApp Image 2024-04-25 at 17.56.34_d729f64b.jpg', 'Laudantium sit vel ', 'Pariatur Deserunt n', 'Eu qui ad unde et ve', '2024-09-11 07:18:26'),
(4, 'uploads/03f460a720679ca85d3fd0d984881c11.jpg', 'Laborum sit cumque i', 'Ipsam ex assumenda n', 'In et harum quasi no', '2024-09-11 07:18:37'),
(5, 'uploads/6c68e3c0b6c634002abfcf399feee211.jpg', 'Exercitation et amet', 'Deserunt distinctio', 'Nostrum minim enim e', '2024-09-11 07:18:47'),
(6, 'uploads/6f3b0a58297b2a8dcecd1279a6f08d17.jpg', 'Corporis ducimus la', 'Et quibusdam nobis m', 'Ipsum fugiat est cu', '2024-09-11 07:19:11'),
(7, 'uploads/6d905f22ae1d2c19c4441f40fc0e73db.jpg', 'Enim harum deleniti ', 'Magni voluptate volu', 'Tempora laboris odit', '2024-09-11 07:19:19'),
(8, 'uploads/IMG_20240719_190910.jpg', 'Veritatis sunt culpa', 'Libero in laborum I', 'Vitae ipsum tenetur ', '2024-09-11 07:19:30'),
(9, 'uploads/224ef5173fa8e739e0bf0c4b3c1278f6.jpg', 'Sint cumque ea obcae', 'Voluptatem Omnis re', 'In dolores voluptate', '2024-09-11 07:19:45'),
(10, 'uploads/1d1c5e55192b862279f62effb46cdabf.jpg', 'Autem perferendis fu', 'Incidunt corrupti ', 'Sapiente odio dolori', '2024-09-11 07:20:09'),
(11, 'uploads/ralph.jpg', 'Eos facilis adipisi', 'Aut vitae eu quia eu', 'Qui ut libero simili', '2024-09-11 07:20:22'),
(12, 'uploads/IMG_20240528_181437.jpg', 'Adipisci illum quib', 'Ut explicabo Adipis', 'Culpa mollit ut par', '2024-09-11 07:20:35'),
(13, 'uploads/IMG_20230707_225655.jpg', 'Optio tenetur ut re', 'Aut cumque minim del', 'Enim rerum in dolor ', '2024-09-11 07:20:50'),
(14, 'uploads/IMG_20240823_170730.jpg', 'Aliquid sit distinc', 'Libero voluptatem m', 'Culpa sint voluptas', '2024-09-11 07:21:00'),
(15, 'uploads/fh.jpg', 'Dolorum autem autem ', 'Recusandae Veritati', 'Animi rem reprehend', '2024-09-11 07:21:30');

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
(10, 'uploads/', 'hello', 'hello', 'user', 'uploads/', 'i feel little anxioafieirghierghrjg', 0, 0, '2024-07-30 09:56:55'),
(11, '', '', '', '', '../uploads/', 'hello i am archana timilsina. Uoeioweironff', 0, 0, '2024-09-16 19:48:00'),
(12, '', '', '', '', '../uploads/', 'uiewfyuiyfew', 0, 0, '2024-09-16 19:50:31');

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
(2, 'uploads/00fb573ec4b9112e2ea99bbd9bdc6ecd.jpg', 'Kiona Johnson', 'moana', 'Dolor tempora amet ', 0, 'moana@gmail.com', '$2y$10$upMhXk57TEo2oFPRMZJp1eK49oMx6TyUjmoysK3PKAb..FIlYrAf.', '6788', 2024),
(3, 'uploads/', 'Ifeoma Conner', 'hello', 'Non iste qui assumen', 0, 'waxoqumefe@mailinator.com', '$2y$10$GIHfvn3yfL1iVoTYq57fDeEBfavgx4seHa9M1WGDFywwRJa04F52m', '8888', 2024),
(4, 'uploads/', 'arpana', 'arpana', 'pokhara', 988766, 'arpana@gmail.com', '$2y$10$kczvSew.841FG6zab679l.IOzpMfvPF/GPQu.X2Kz8qjEYMxHTHIe', '7777', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `qid` int(255) NOT NULL,
  `questions` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`qid`, `questions`, `created_at`) VALUES
(1, 'What is your name?', '2024-09-15 13:24:21'),
(2, 'What is the most beautiful thing you have ever seen?\r\n', '2024-09-15 13:24:22'),
(3, 'What are the things that can make you beautiful?\r\n', '2024-09-15 13:24:22'),
(4, 'What is your name?', '2024-09-15 13:25:14'),
(5, 'What is the most beautiful thing you have ever seen?\r\n', '2024-09-15 13:25:14'),
(6, 'What are the things that can make you beautiful?\r\n', '2024-09-15 13:25:15'),
(7, 'What has been on your mind lately?', '2024-09-15 13:25:15'),
(8, 'If you were being completely honest with me, how would you describe your feelings lately?', '2024-09-15 13:25:15'),
(9, 'Do you love Yourself?', '2024-09-15 13:25:15'),
(10, 'Who is your favourite person in this whole world?', '2024-09-15 13:25:15'),
(11, 'Do you have any friends?', '2024-09-15 13:25:15'),
(12, 'Do you have any regrets?', '2024-09-15 13:25:15'),
(13, 'How Would You Like Things To Be Different?', '2024-09-15 13:25:15'),
(14, 'Is There Anything You Want To Talk About?', '2024-09-15 13:25:16'),
(15, 'Do you love your family?', '2024-09-15 13:25:16'),
(16, 'what are the things that you hate?', '2024-09-15 13:25:16'),
(17, 'When do you feel good?', '2024-09-15 13:25:16'),
(18, 'What is your favorite quality about yourself?', '2024-09-15 13:25:16'),
(19, 'Would you call yourself brave?', '2024-09-15 13:25:16'),
(20, 'What is your favorite childhood memory?', '2024-09-15 13:25:16'),
(21, 'When do you feel the safest?', '2024-09-15 13:25:16'),
(22, 'What three words would you use to describe yourself?', '2024-09-15 13:25:16'),
(23, 'What is something that makes you feel unstoppable?', '2024-09-15 13:25:16'),
(24, 'Are you an extrovert or introvert?', '2024-09-15 13:25:16'),
(25, 'What’s the quickest way someone can lose your trust?', '2024-09-15 13:25:16'),
(26, 'Do you think dreams have deeper meanings?', '2024-09-15 13:25:16'),
(27, 'What do you think makes someone a good person?', '2024-09-15 13:25:16'),
(28, 'What do you think makes someone a good person?', '2024-09-15 13:25:16'),
(29, 'Have you ever experienced deja vu?', '2024-09-15 13:25:17'),
(30, 'How would you spend your last day on earth?', '2024-09-15 13:25:17'),
(31, '', '2024-09-20 11:07:41'),
(32, '', '2024-09-20 11:07:42'),
(33, '', '2024-09-20 11:07:42'),
(34, '', '2024-09-20 11:07:42'),
(35, '', '2024-09-20 11:07:42'),
(36, '', '2024-09-20 11:07:42'),
(37, '', '2024-09-20 11:07:42'),
(38, '', '2024-09-20 11:07:42'),
(39, '', '2024-09-20 11:07:43'),
(40, '', '2024-09-20 11:07:43'),
(41, '', '2024-09-20 11:07:43'),
(42, '', '2024-09-20 11:07:43'),
(43, '', '2024-09-20 11:07:43'),
(44, '', '2024-09-20 11:07:43'),
(45, '', '2024-09-20 11:07:43'),
(46, '', '2024-09-20 11:07:43'),
(47, '', '2024-09-20 11:07:43'),
(48, '', '2024-09-20 11:07:44'),
(49, '', '2024-09-20 11:07:44'),
(50, '', '2024-09-20 11:07:44'),
(51, '', '2024-09-20 11:07:44'),
(52, '', '2024-09-20 11:07:44'),
(53, '', '2024-09-20 11:07:44'),
(54, '', '2024-09-20 11:07:44'),
(55, '', '2024-09-20 11:07:44'),
(56, '', '2024-09-20 11:07:44'),
(57, '', '2024-09-20 11:07:44'),
(58, '', '2024-09-20 11:07:44'),
(59, '', '2024-09-20 11:07:45'),
(60, '', '2024-09-20 11:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `option1` varchar(500) NOT NULL,
  `option2` varchar(500) NOT NULL,
  `option3` varchar(500) NOT NULL,
  `option4` varchar(500) NOT NULL,
  `option5` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(14, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '35', 'What are you feeling now?', '30', 'Do you fear alot?', '80', 'Suscipit Nam in reru', 'Pariatur Omnis ea s', 'Esse nesciunt volu', 'Elit magnam ea null', 'Deserunt ducimus co', 'Ullamco distinctio ', 'Dolor rerum placeat', 'Ut veniam sint aute', 'Molestiae voluptate ', 'Occaecat aliquam non', 'Voluptas nihil qui q', 'Aperiam qui soluta n', 'Ut minim ipsam vero ', 'Cupiditate dolor cul', '2024-08-16 14:22:59'),
(15, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '', 'What are you feeling now?', '', 'Do you fear alot?', '', 'Suscipit Nam in reru', '', 'Esse nesciunt volu', '', 'Deserunt ducimus co', '', 'Dolor rerum placeat', '', 'Molestiae voluptate ', '', 'Voluptas nihil qui q', '', 'Ut minim ipsam vero ', '', '2024-09-11 19:05:45'),
(16, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '', 'What are you feeling now?', '30', 'Do you fear alot?', '10', 'Suscipit Nam in reru', 'Non accusamus sunt ', 'Esse nesciunt volu', 'Quasi in ipsum labo', 'Deserunt ducimus co', 'Aut repellendus Exc', 'Dolor rerum placeat', 'Ut veniam sint aute', 'Molestiae voluptate ', 'Quia eiusmod blandit', 'Voluptas nihil qui q', 'Aperiam qui soluta n', 'Ut minim ipsam vero ', 'Ipsum ab veniam co', '2024-09-13 13:28:38'),
(17, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '35', 'What are you feeling now?', '100', 'Do you fear alot?', '80', 'Suscipit Nam in reru', 'Nam duis est rerum d', 'Esse nesciunt volu', 'Autem excepturi veni', 'Deserunt ducimus co', 'Odit ad laboriosam ', 'Dolor rerum placeat', 'Iusto voluptatem No', 'Molestiae voluptate ', 'Quia eiusmod blandit', 'Voluptas nihil qui q', 'Ex doloremque elit ', 'Ut minim ipsam vero ', 'Nihil doloribus libe', '2024-09-13 14:18:06'),
(18, 'Arcahana TImilsina', 'archu@gmail.com', 'hsdgfyoe', '35', 'What are you feeling now?', '100', 'Do you fear alot?', '40', 'Suscipit Nam in reru', 'Pariatur Omnis ea s', 'Esse nesciunt volu', 'Autem excepturi veni', 'Deserunt ducimus co', 'Voluptate incidunt ', 'Dolor rerum placeat', 'Maxime est nesciunt', 'Molestiae voluptate ', 'Occaecat aliquam non', 'Voluptas nihil qui q', 'Ex doloremque elit ', 'Ut minim ipsam vero ', 'Nihil doloribus libe', '2024-09-15 12:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `supporters`
--

CREATE TABLE `supporters` (
  `sid` int(200) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `name` varchar(80) NOT NULL,
  `special_field` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supporters`
--

INSERT INTO `supporters` (`sid`, `profile`, `name`, `special_field`, `created_at`) VALUES
(3, 'uploads/IMG_20240730_051213.jpg', 'Samuel Horn', 'Culpa ipsum dolorum ', '2024-09-11 07:26:45'),
(4, 'uploads/IMG-20240606-WA0122.jpg', 'Wallace Watts', 'Accusantium culpa mo', '2024-09-11 07:26:55'),
(5, 'uploads/IMG_20240727_164222.jpg', 'Vivien Miller', 'Elit est incidunt ', '2024-09-11 07:27:05'),
(6, 'uploads/IMG_20240823_055602.jpg', 'Xavier Parks', 'Ad ipsa consequat ', '2024-09-11 07:27:14'),
(7, 'uploads/rays.jpg', 'Dieter Bean', 'Veniam enim sint b', '2024-09-11 07:27:24'),
(8, 'uploads/IMG_20240823_170730.jpg', 'Alexandra Roth', 'Repudiandae sunt har', '2024-09-11 07:27:33'),
(9, 'uploads/f36ecd2a8094ec2e83b6923b311ebe93.jpg', 'Ralph Drake', 'Harum esse necessita', '2024-09-11 07:27:42'),
(10, 'uploads/f713e7672d486e98e5cb981a2f4f431b.jpg', 'Raven Noel', 'Mollit porro quis ut', '2024-09-11 07:27:51'),
(11, 'uploads/IMG_20240730_051432.jpg', 'Igor Church', 'Quo iste atque dolor', '2024-09-11 07:28:06'),
(12, 'uploads/03f460a720679ca85d3fd0d984881c11.jpg', 'Ezra Eaton', 'Consequatur facilis ', '2024-09-11 07:28:56'),
(13, 'uploads/3b054bc62a9938a54da5d33c989ae69b.jpg', 'Zena Foreman', 'In a autem dignissim', '2024-09-11 07:29:03'),
(14, 'uploads/3b4dad658f0ec78b663a34bdb10363d9.jpg', 'Drake Robles', 'Enim voluptas aute e', '2024-09-11 07:29:22'),
(15, 'uploads/5c32fa36189e6e178a5e2468378d9742.jpg', 'Jolie French', 'Ut aut vel deserunt ', '2024-09-11 07:29:30'),
(16, 'uploads/GSMVF-wXoAAooiv.jpeg', 'Autumn Adkins', 'Rem consequuntur con', '2024-09-11 07:29:59');

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
(3, 'uploads/', 'hello', 'hello', 'hello@gmail.com', '$2y$10$QWfjMUQ7SjERK9RvPOmGnuycQZWHkui4HYa1hQPgnzB2Kvz4gNgnW', '2024-07-30 09:19:48'),
(4, 'uploads/1.jpg', 'anuz Timilsina', 'anuj', 'anuj@gmail.com', '$2y$10$wrng1w83Cua3nSyz0XQ.U.2M89NRjxueDcEPWPi4jzqf6kSC84GnC', '2024-09-16 09:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `vid` int(250) NOT NULL,
  `video` varchar(400) NOT NULL,
  `topic` varchar(80) NOT NULL,
  `creator` varchar(80) NOT NULL,
  `time_interval` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vid`, `video`, `topic`, `creator`, `time_interval`, `created_at`) VALUES
(1, 'uploads/VID_20220104_162219.mp4', 'Et sunt unde eiusmod', 'Accusamus et quibusd', '10:30min', '2024-09-11 07:32:08'),
(2, 'uploads/VID_20220104_162219.mp4', 'Lorem non molestiae ', 'Laborum mollitia vol', '10:30min', '2024-09-11 07:33:40'),
(3, 'uploads/VID_20220104_162219.mp4', 'Sit enim aspernatur ', 'Adipisci et cupidita', '10:30min', '2024-09-11 07:33:50'),
(4, 'uploads/VID_20220104_162219.mp4', 'Laboriosam consecte', 'Odit ut facilis qui ', '10:30min', '2024-09-11 07:33:59'),
(5, 'uploads/VID_20220104_162219.mp4', 'Numquam omnis iure i', 'Cum rerum ipsum vel ', '10:30min', '2024-09-11 07:34:07'),
(6, 'uploads/VID_20220104_162219.mp4', 'Praesentium consecte', 'Voluptatum adipisci ', '10:30min', '2024-09-11 07:34:13'),
(7, 'uploads/VID_20220104_162219.mp4', 'Saepe in qui repelle', 'Eu optio tempor in ', '10:30min', '2024-09-11 07:34:24'),
(8, 'uploads/VID_20220104_162219.mp4', 'Laudantium laudanti', 'Ullamco consequatur', '10:30min', '2024-09-11 07:34:36'),
(9, 'uploads/VID_20220104_162219.mp4', 'Excepturi in molesti', 'Qui sequi aut et in ', '10:30min', '2024-09-11 07:35:00'),
(10, 'uploads/VID_20220104_162219.mp4', 'Voluptatem quae anim', 'Officia ex dolor ani', '10:30min', '2024-09-11 07:35:20'),
(11, 'uploads/VID_20220104_162219.mp4', 'Quibusdam est nemo p', 'Nemo nisi veritatis ', '1:30min', '2024-09-11 07:35:28');

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
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

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
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quiz_report`
--
ALTER TABLE `quiz_report`
  ADD PRIMARY KEY (`qrid`);

--
-- Indexes for table `supporters`
--
ALTER TABLE `supporters`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aapplication`
--
ALTER TABLE `aapplication`
  MODIFY `aaid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `paid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `prof_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `qid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_report`
--
ALTER TABLE `quiz_report`
  MODIFY `qrid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `supporters`
--
ALTER TABLE `supporters`
  MODIFY `sid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `vid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

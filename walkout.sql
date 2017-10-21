-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 04:17 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `walkout`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `LABEL` varchar(500) COLLATE utf8_bin NOT NULL,
  `HEADER` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `TEXT` varchar(5000) COLLATE utf8_bin DEFAULT NULL,
  `LOCATION` varchar(1000) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Events table';

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `LABEL`, `HEADER`, `TEXT`, `LOCATION`) VALUES
(1, '«Artbat Fest 8»\r\nФестиваль современного искусства', 'Artbat Fest 8\r\n\r\nЕжегодный фестиваль современного искусства\r\n01 – 30 сентября 2017\r\nАлматы, Казахстан', 'Ростки будущего тянутся из прошлого, пронизывая нас в настоящем.\r\nВ то время как рациональное все больше диктует свою риторику восприятия мира и действий, современное искусство остается попыткой вовлечь мир в игру и заставить отстраниться от серьезности, взглянув на происходящее иррационально, а значит, извне.\r\nВ восьмой год своего проведения ежегодный международный фестиваль Artbat Fest обращается к эстетике 8bit-ного мира – тому, что сформировало нашу сегодняшнюю эпоху компьютеров и роботов. Картинки и музыка конца прошлого века, укладывающиеся в 8bit информации, захватили нас играючи, через пакменов, тетрис и Марио, но можно ли взять эти технологические изменения за основу новой Большой Игры?\r\nВ 2017 году Artbat Fest предлагает художникам и зрителям осмыслить тело города, как «игровую площадку», где оторвавшись от рационального восприятия мира, можно было бы поразмыслить о современной функции игры.\r\nИнтерактивный public-проект фестиваля «Алмаполия» станет возможностью через формат известной стратегии, «присвоить» город Алматы себе, а, следовательно, и самому почувствовать себя его частью, беря на себя Проектами Artbat Fest в этом году также станут: Выставка молодых художников как итог образовательной платформы фестиваля «Школа художественного жеста»; казахстанско-российская выставка в рамках проекта «Примирение»; выставка казахстанско-швейцарского проекта QWAS; работы по итогам резиденций двух иностранных художников в Алматы по проекту Арт Проспект и специальная программа перформансов.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1222.0874068845724!2d76.94574853839022!3d43.23821494678433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38317bedeaf785bc!2z0JDQu9C80LDQu9GL!5e0!3m2!1sru!2s!4v1506158838672');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID` int(5) NOT NULL,
  `LINK` varchar(500) COLLATE utf8_bin NOT NULL,
  `EVENT_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Image links ';

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID`, `LINK`, `EVENT_ID`) VALUES
(1, 'http://localhost/WalkOut1/resources/assets/images/carousel1.jpg', 1),
(2, 'http://localhost/WalkOut1/resources/assets/images/carousel2.jpg', 1),
(3, 'http://localhost/WalkOut1/resources/assets/images/carousel3.jpg', 1),
(4, 'http://localhost/WalkOut1/resources/assets/images/d1.jpg', 1),
(5, 'http://localhost/WalkOut1/resources/assets/images/d2.jpg', 1),
(6, 'http://localhost/WalkOut1/resources/assets/images/main-image.jpg', 1),
(7, 'http://localhost/WalkOut1/resources/assets/images/Man_Avatar.png', 1),
(8, 'http://localhost/WalkOut1/resources/assets/images/Woman_Avatar.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `ID` int(5) NOT NULL,
  `LINK` varchar(1000) COLLATE utf8_bin NOT NULL,
  `EVENT_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='LOCATION LINK';

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Daniyar', 'danik@gmail.com', '$2y$10$PXzuWPNNkx6ogG.dW6ZGp.j1iWVix914rAIt/aC8ZJCvJFyiQWL9K', NULL, '2017-10-21 06:30:21', '2017-10-21 06:30:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

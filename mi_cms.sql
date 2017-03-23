-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 08:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mi_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_app_params`
--

CREATE TABLE `tb_app_params` (
  `Par_ID` int(10) NOT NULL,
  `Par_Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Par_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Par_Code` int(10) NOT NULL,
  `Par_Desc` text COLLATE utf8_unicode_ci NOT NULL,
  `Par_Status` int(1) NOT NULL DEFAULT '1',
  `Par_Order` int(10) NOT NULL,
  `Par_Color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tb_categories`
--

CREATE TABLE `tb_categories` (
  `Cate_ID` int(10) NOT NULL,
  `Cate_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cate_Desc` text COLLATE utf8_unicode_ci,
  `Parent_Cate` int(10) DEFAULT NULL,
  `Slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_categories`
--

INSERT INTO `tb_categories` (`Cate_ID`, `Cate_Name`, `Cate_Desc`, `Parent_Cate`, `Slug`, `Path`, `status`) VALUES
(1, 'Tin tức', NULL, 0, 'tin-tuc', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_comments`
--

CREATE TABLE `tb_comments` (
  `Comment_ID` int(10) NOT NULL,
  `Comment` text COLLATE utf8_unicode_ci NOT NULL,
  `User_ID` int(10) NOT NULL,
  `Comment_Date` datetime NOT NULL,
  `Status` int(10) NOT NULL,
  `Post_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tb_images`
--

CREATE TABLE `tb_images` (
  `Image_ID` int(10) NOT NULL,
  `Image_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Image_Guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Image_Desc` text COLLATE utf8_unicode_ci,
  `Upload_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tb_options`
--

CREATE TABLE `tb_options` (
  `id` int(12) NOT NULL,
  `phone` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `socials` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `blog_options` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pages`
--

CREATE TABLE `tb_pages` (
  `Page_ID` int(10) NOT NULL,
  `Page_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Page_Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Page_Slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_ID` int(10) NOT NULL,
  `Publish_Date` datetime NOT NULL,
  `Last_Edit` datetime NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tb_posts`
--

CREATE TABLE `tb_posts` (
  `Post_ID` int(10) NOT NULL,
  `Post_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cate_ID` int(10) NOT NULL,
  `User_ID` int(10) NOT NULL,
  `Post_Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Post_Slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Publish_Date` datetime NOT NULL,
  `Last_Edit` datetime NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Num_Views` int(10) NOT NULL DEFAULT '0',
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tb_posts_tags`
--

CREATE TABLE `tb_posts_tags` (
  `id` int(12) NOT NULL,
  `post_id` int(12) NOT NULL,
  `tag_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tags`
--

CREATE TABLE `tb_tags` (
  `id` int(12) NOT NULL,
  `title` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `User_ID` int(10) NOT NULL,
  `First_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Last_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` smallint(1) NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_Role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Bio` text COLLATE utf8_unicode_ci,
  `Ativation_Date` datetime NOT NULL,
  `Avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`User_ID`, `First_Name`, `Last_Name`, `Gender`, `Email`, `Password`, `User_Role`, `Bio`, `Ativation_Date`, `Avatar`, `username`) VALUES
(1, 'Inka', 'Vũ', 1, 'thesuperinka@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', 'Try hard', '2017-03-09 00:00:00', NULL, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users_log`
--

CREATE TABLE `tb_users_log` (
  `id` int(64) NOT NULL,
  `User_ID` int(64) NOT NULL,
  `Ipuser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Last_Login` datetime NOT NULL,
  `Session` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `tb_app_params`
--
ALTER TABLE `tb_app_params`
  ADD PRIMARY KEY (`Par_ID`);

--
-- Indexes for table `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`Cate_ID`);

--
-- Indexes for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD PRIMARY KEY (`Comment_ID`),
  ADD KEY `Post_ID` (`Post_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `tb_images`
--
ALTER TABLE `tb_images`
  ADD PRIMARY KEY (`Image_ID`);

--
-- Indexes for table `tb_options`
--
ALTER TABLE `tb_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pages`
--
ALTER TABLE `tb_pages`
  ADD PRIMARY KEY (`Page_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD PRIMARY KEY (`Post_ID`),
  ADD KEY `Cate_ID` (`Cate_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `tb_posts_tags`
--
ALTER TABLE `tb_posts_tags`
  ADD KEY `post_id` (`post_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `tb_tags`
--
ALTER TABLE `tb_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `tb_users_log`
--
ALTER TABLE `tb_users_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_app_params`
--
ALTER TABLE `tb_app_params`
  MODIFY `Par_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `Cate_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_comments`
--
ALTER TABLE `tb_comments`
  MODIFY `Comment_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_images`
--
ALTER TABLE `tb_images`
  MODIFY `Image_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_options`
--
ALTER TABLE `tb_options`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pages`
--
ALTER TABLE `tb_pages`
  MODIFY `Page_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_posts`
--
ALTER TABLE `tb_posts`
  MODIFY `Post_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tags`
--
ALTER TABLE `tb_tags`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `User_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_users_log`
--
ALTER TABLE `tb_users_log`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD CONSTRAINT `tb_comments_ibfk_1` FOREIGN KEY (`Post_ID`) REFERENCES `tb_posts` (`Post_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_comments_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `tb_users` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pages`
--
ALTER TABLE `tb_pages`
  ADD CONSTRAINT `tb_pages_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `tb_users` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD CONSTRAINT `tb_posts_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `tb_users` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_posts_ibfk_2` FOREIGN KEY (`Cate_ID`) REFERENCES `tb_categories` (`Cate_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_posts_tags`
--
ALTER TABLE `tb_posts_tags`
  ADD CONSTRAINT `tb_posts_tags_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `tb_posts` (`Post_ID`),
  ADD CONSTRAINT `tb_posts_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tb_tags` (`id`);

--
-- Constraints for table `tb_users_log`
--
ALTER TABLE `tb_users_log`
  ADD CONSTRAINT `tb_users_log_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `tb_users` (`User_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

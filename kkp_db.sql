-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 03:48 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(11) NOT NULL,
  `about_image` varchar(100) DEFAULT NULL,
  `about_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_image`, `about_description`) VALUES
(1, 'KKP1.png', '<p xss=removed>Assalamu alaikum Wr. Wb.<br><br>Selamat datang di Website resmi Kantor Kesehatan Pelabuhan Kelas III Sorong. Puji Syukur kepada Allah SWT, atas karunia dan hidayah Nya website Kantor Kesehatan Pelabuhan Kelas III Sorong bisa terealisasi dan dapat diakses oleh masyarakat luas.</p><p xss=removed> </p><p xss=removed>ttd</p><p xss=removed><span xss=removed>Kepala Kantor Kesehatan Pelabuhan Kelas III Sorong</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `category_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_slug`) VALUES
(4, 'Kesehatan', 'kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `comment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_name` varchar(60) DEFAULT NULL,
  `comment_email` varchar(90) DEFAULT NULL,
  `comment_message` text,
  `comment_status` int(11) DEFAULT '0',
  `comment_parent` int(11) DEFAULT '0',
  `comment_post_id` int(11) DEFAULT NULL,
  `comment_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `home_id` int(11) NOT NULL,
  `home_caption_1` varchar(200) DEFAULT NULL,
  `home_caption_2` varchar(200) DEFAULT NULL,
  `home_bg_heading` varchar(50) DEFAULT NULL,
  `home_bg_testimonial` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_caption_1`, `home_caption_2`, `home_bg_heading`, `home_bg_testimonial`) VALUES
(1, 'CEGAH TANGKAL PENYAKIT', 'KKP-Sorong', 'WhatsApp_Image_2020-07-11_at_12_06_131.jpeg', 'LOGO_WEB.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_name` varchar(50) DEFAULT NULL,
  `inbox_email` varchar(80) DEFAULT NULL,
  `inbox_subject` varchar(200) DEFAULT NULL,
  `inbox_message` text,
  `inbox_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` varchar(2) DEFAULT '0' COMMENT '0=Unread, 1=Read'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuesioner`
--

CREATE TABLE `tbl_kuesioner` (
  `kuesioner_id` int(11) NOT NULL,
  `kuesioner_name` varchar(50) DEFAULT NULL,
  `kuesioner_email` varchar(80) DEFAULT NULL,
  `kuesioner_jenis-kelamin` varchar(80) NOT NULL,
  `kuesioner_usia` varchar(80) NOT NULL,
  `kuesioner_alamat` varchar(200) NOT NULL,
  `kuesioner_nohp` varchar(80) NOT NULL,
  `kuesioner_identitas` varchar(200) NOT NULL,
  `kuesioner_1_p1` int(11) NOT NULL DEFAULT '0',
  `kuesioner_1_p2` int(11) NOT NULL DEFAULT '0',
  `kuesioner_1_p3` int(11) NOT NULL DEFAULT '0',
  `kuesioner_2_p1` int(11) NOT NULL DEFAULT '0',
  `kuesioner_2_p2` int(11) NOT NULL DEFAULT '0',
  `kuesioner_2_p3` int(11) NOT NULL DEFAULT '0',
  `kuesioner_3_p1` int(11) NOT NULL DEFAULT '0',
  `kuesioner_3_p2` int(11) NOT NULL DEFAULT '0',
  `kuesioner_4_p1` int(11) NOT NULL DEFAULT '0',
  `kuesioner_4_p2` int(11) NOT NULL DEFAULT '0',
  `kuesioner_5_p1` int(11) NOT NULL DEFAULT '0',
  `kuesioner_6_p1` int(11) NOT NULL DEFAULT '0',
  `kuesioner_7_p1` int(11) NOT NULL DEFAULT '0',
  `kuesioner_8_p1` int(11) NOT NULL DEFAULT '0',
  `kuesioner_9_p1` int(11) NOT NULL DEFAULT '0',
  `kuesioner_10_p1` int(11) NOT NULL DEFAULT '0',
  `kuesioner_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `kuesioner_status` varchar(2) DEFAULT '0' COMMENT '0=Unread, 1=Read'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kuesioner`
--

INSERT INTO `tbl_kuesioner` (`kuesioner_id`, `kuesioner_name`, `kuesioner_email`, `kuesioner_jenis-kelamin`, `kuesioner_usia`, `kuesioner_alamat`, `kuesioner_nohp`, `kuesioner_identitas`, `kuesioner_1_p1`, `kuesioner_1_p2`, `kuesioner_1_p3`, `kuesioner_2_p1`, `kuesioner_2_p2`, `kuesioner_2_p3`, `kuesioner_3_p1`, `kuesioner_3_p2`, `kuesioner_4_p1`, `kuesioner_4_p2`, `kuesioner_5_p1`, `kuesioner_6_p1`, `kuesioner_7_p1`, `kuesioner_8_p1`, `kuesioner_9_p1`, `kuesioner_10_p1`, `kuesioner_created_at`, `kuesioner_status`) VALUES
(1, 'vanlexiku', 'van.lexiku@gmail.com', 'Laki', '25', 'Yogyakarta keren banyak cewek cantiknya', '08123456789', '32011129337176', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-07-11 23:18:17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_navbar`
--

CREATE TABLE `tbl_navbar` (
  `navbar_id` int(11) NOT NULL,
  `navbar_name` varchar(50) DEFAULT NULL,
  `navbar_slug` varchar(200) DEFAULT NULL,
  `navbar_parent_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_navbar`
--

INSERT INTO `tbl_navbar` (`navbar_id`, `navbar_name`, `navbar_slug`, `navbar_parent_id`) VALUES
(1, 'Beranda', '', 0),
(2, 'Profil', 'about', 0),
(3, 'Berita', 'blog', 0),
(4, 'Layanan', 'layanan', 0),
(5, 'Kesehatan', 'tag/kesehatan', 3),
(11, 'Galeri', 'galeri', 0),
(12, 'Visi &amp; Misi', 'visimisi', 2),
(13, 'Laporan', 'laporan', 0),
(14, 'Kontak', 'contact', 0),
(15, 'Download', 'download', 0),
(16, 'Sijablay', 'sijablay', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(250) DEFAULT NULL,
  `post_description` text,
  `post_contents` longtext,
  `post_image` varchar(40) DEFAULT NULL,
  `post_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `post_last_update` datetime DEFAULT NULL,
  `post_category_id` int(11) DEFAULT NULL,
  `post_tags` varchar(225) DEFAULT NULL,
  `post_slug` varchar(250) DEFAULT NULL,
  `post_status` int(11) DEFAULT NULL COMMENT '1=Publish, 0=Unpublish',
  `post_views` int(11) DEFAULT '0',
  `post_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_views`
--

CREATE TABLE `tbl_post_views` (
  `view_id` int(11) NOT NULL,
  `view_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `view_ip` varchar(50) DEFAULT NULL,
  `view_post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site`
--

CREATE TABLE `tbl_site` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(100) DEFAULT NULL,
  `site_title` varchar(200) DEFAULT NULL,
  `site_description` text,
  `site_favicon` varchar(50) DEFAULT NULL,
  `site_logo_header` varchar(50) DEFAULT NULL,
  `site_logo_footer` varchar(50) DEFAULT NULL,
  `site_logo_big` varchar(50) DEFAULT NULL,
  `site_facebook` varchar(150) DEFAULT NULL,
  `site_twitter` varchar(150) DEFAULT NULL,
  `site_instagram` varchar(150) DEFAULT NULL,
  `site_pinterest` varchar(150) DEFAULT NULL,
  `site_linkedin` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site`
--

INSERT INTO `tbl_site` (`site_id`, `site_name`, `site_title`, `site_description`, `site_favicon`, `site_logo_header`, `site_logo_footer`, `site_logo_big`, `site_facebook`, `site_twitter`, `site_instagram`, `site_pinterest`, `site_linkedin`) VALUES
(1, 'Portal Website KKP-SORONG', 'Portal Website KKP-SORONG', 'Portal Website dan Informasi Karantina Kesehatan Pelabuhan Sorong', 'KKP.jpg', 'kkpsorong2.png', 'favicon.png', 'kkpsorong1.png', 'https://www.facebook.com/Kantor-Kesehatan-Pelabuhan-Sorong-104422167963709/', 'https://twitter.com/kkpsorong', 'https://www.instagram.com/kkp_sorong/?hl=id', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `subscribe_email` varchar(100) DEFAULT NULL,
  `subscribe_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `subscribe_status` int(11) DEFAULT '0',
  `subscribe_rating` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tags`
--

CREATE TABLE `tbl_tags` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tags`
--

INSERT INTO `tbl_tags` (`tag_id`, `tag_name`) VALUES
(4, 'Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `testimonial_name` varchar(50) DEFAULT NULL,
  `testimonial_content` text,
  `testimonial_image` varchar(50) DEFAULT NULL,
  `testimonial_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(10) DEFAULT NULL,
  `user_status` varchar(10) DEFAULT '1',
  `user_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_status`, `user_photo`) VALUES
(2, 'Novie', 'novie@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2', '1', '3d0be9678f99be0b5180634d37ff8ef4.png'),
(3, 'Admin-KKP', 'admin@mail.com', 'f636eb496f198907efb9ea0d28f0c67f', '1', '1', '8e648e5e34fbc7a4a145e3441b9b6fc1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitors`
--

CREATE TABLE `tbl_visitors` (
  `visit_id` int(11) NOT NULL,
  `visit_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `visit_ip` varchar(50) DEFAULT NULL,
  `visit_platform` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visitors`
--

INSERT INTO `tbl_visitors` (`visit_id`, `visit_date`, `visit_ip`, `visit_platform`) VALUES
(1, '2020-07-11 05:31:31', '::1', 'Chrome'),
(2, '2020-07-11 18:36:07', '::1', 'Chrome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_kuesioner`
--
ALTER TABLE `tbl_kuesioner`
  ADD PRIMARY KEY (`kuesioner_id`);

--
-- Indexes for table `tbl_navbar`
--
ALTER TABLE `tbl_navbar`
  ADD PRIMARY KEY (`navbar_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  ADD PRIMARY KEY (`view_id`);

--
-- Indexes for table `tbl_site`
--
ALTER TABLE `tbl_site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `tbl_tags`
--
ALTER TABLE `tbl_tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_visitors`
--
ALTER TABLE `tbl_visitors`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kuesioner`
--
ALTER TABLE `tbl_kuesioner`
  MODIFY `kuesioner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_navbar`
--
ALTER TABLE `tbl_navbar`
  MODIFY `navbar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_site`
--
ALTER TABLE `tbl_site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tags`
--
ALTER TABLE `tbl_tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_visitors`
--
ALTER TABLE `tbl_visitors`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2021 at 09:05 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tweet`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

DROP TABLE IF EXISTS `calendar_events`;
CREATE TABLE IF NOT EXISTS `calendar_events` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `pageid` int(11) NOT NULL,
  `location` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_users`
--

DROP TABLE IF EXISTS `calendar_event_users`;
CREATE TABLE IF NOT EXISTS `calendar_event_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `eventid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0qsg9e246o45nq9mfaj8uqutc3nmbbm9', '::1', 1621662042, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636323034323b),
('21i3omq0qoedrrv6hugr22ejv10jbeq7', '127.0.0.1', 1621664567, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636343536373b),
('24d8mstue7isvs34l6mjl44sjk47m8v8', '::1', 1621662829, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636323733333b),
('2s0bp1f303mgsj285ukdtp9qsqrhdi8s', '127.0.0.1', 1621674347, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636343538313b),
('3cnh5gqo36psfn45nsn9d4kn69hioco3', '::1', 1621660771, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636303737313b),
('7ru0l15qv6hl87p550ofvmjdbka4ed8l', '::1', 1621658813, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313635383831333b),
('ei500l0knou68egvmb28vb6o54s9d0bb', '::1', 1621662889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636323838393b),
('f7ao3vsv0jnrpv6pvjfp6coh069um7nr', '::1', 1621664170, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636333835383b),
('fq9luaag2oncoshbbmelldbajhfoeckj', '::1', 1621657713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313635373731333b),
('gl2nr2ge71kmio3id5ahkqeei02ipui0', '::1', 1621663199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636333139393b),
('ihiq1qkq1fnhld4kqk6gohb4qq25h8ho', '::1', 1621663551, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636333535313b),
('jb6ngim0fouf7rkfkude3p8hd440i70h', '::1', 1621662733, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636323733333b),
('jlvv1ttki8v9h8m2lfeise7cag1l73o0', '::1', 1621660120, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636303132303b),
('kqte4qrh59utctqbvd5ptepprovok3h7', '::1', 1621658031, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313635383033313b),
('qpgfgdm7fv5v7so5bje94dk5m65oqp0g', '::1', 1621663858, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636333835383b),
('v59ib219sa79lvgqtji84l9tsbeps31n', '::1', 1621660439, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313636303433393b),
('vf6dnc58eps8tr9lp0kq3l6lff7ks9af', '::1', 1621659789, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632313635393738393b);

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

DROP TABLE IF EXISTS `custom_fields`;
CREATE TABLE IF NOT EXISTS `custom_fields` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `options` varchar(2000) NOT NULL,
  `required` int(11) NOT NULL,
  `profile` int(11) NOT NULL,
  `edit` int(11) NOT NULL,
  `help_text` varchar(500) NOT NULL,
  `register` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom_fields`
--

INSERT INTO `custom_fields` (`ID`, `name`, `type`, `options`, `required`, `profile`, `edit`, `help_text`, `register`) VALUES
(1, 'Hobbies', 0, '', 0, 1, 1, 'Tell us what you like doing', 0),
(2, 'Work', 0, '', 0, 1, 1, 'Where do you work?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

DROP TABLE IF EXISTS `email_templates`;
CREATE TABLE IF NOT EXISTS `email_templates` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `hook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`ID`, `title`, `message`, `hook`, `language`) VALUES
(1, 'Forgot Your Password', '<p>Dear [NAME],<br />\r\n<br />\r\nSomeone (hopefully you) requested a password reset at [SITE_URL].<br />\r\n<br />\r\nTo reset your password, please follow the following link: [EMAIL_LINK]<br />\r\n<br />\r\nIf you did not reset your password, please kindly ignore this email.<br />\r\n<br />\r\nYours,<br />\r\n[SITE_NAME]</p>\r\n', 'forgot_password', 'english'),
(2, 'Email Activation', '<p>Dear [NAME],<br />\r\n<br />\r\nSomeone (hopefully you) has registered an account on [SITE_NAME] using this email address.<br />\r\n<br />\r\nPlease activate the account by following this link: [EMAIL_LINK]<br />\r\n<br />\r\nIf you did not register an account, please kindly ignore this email.<br />\r\n<br />\r\nYours,<br />\r\n[SITE_NAME]</p>\r\n', 'email_activation', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `feed_hashtags`
--

DROP TABLE IF EXISTS `feed_hashtags`;
CREATE TABLE IF NOT EXISTS `feed_hashtags` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `hashtag` varchar(70) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_hashtags`
--

INSERT INTO `feed_hashtags` (`ID`, `hashtag`, `count`) VALUES
(1, 'tre', 5),
(2, 'trea', 1),
(3, 'dd', 4),
(4, 'deeeee', 1),
(5, 'dawda', 2),
(6, 'new', 1),
(7, 'hhhjh', 1),
(8, 'ttttttt', 1),
(9, 'tttttrrr', 1),
(10, 'tttttrrrdaw', 2),
(11, 'tttttttttt', 1),
(12, 'dddddddd', 1),
(13, 'deepbhut', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feed_image_multi_post`
--

DROP TABLE IF EXISTS `feed_image_multi_post`;
CREATE TABLE IF NOT EXISTS `feed_image_multi_post` (
  `filed_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`filed_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feed_image_multi_post`
--

INSERT INTO `feed_image_multi_post` (`filed_id`, `post_id`, `image_id`) VALUES
(1, 382, 296),
(2, 382, 297),
(3, 382, 307),
(4, 382, 308),
(5, 382, 309),
(6, 383, 310),
(7, 383, 311),
(8, 383, 312),
(9, 383, 313),
(10, 383, 314),
(11, 382, 315),
(12, 382, 316),
(13, 381, 317),
(14, 381, 318),
(15, 384, 319);

-- --------------------------------------------------------

--
-- Table structure for table `feed_item`
--

DROP TABLE IF EXISTS `feed_item`;
CREATE TABLE IF NOT EXISTS `feed_item` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `content` text NOT NULL,
  `timestamp` int(11) NOT NULL,
  `imageid` int(11) NOT NULL,
  `videoid` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `location` varchar(500) NOT NULL,
  `user_flag` int(11) NOT NULL,
  `profile_userid` int(11) NOT NULL,
  `template` varchar(255) NOT NULL,
  `pageid` int(11) NOT NULL,
  `hide_profile` int(11) NOT NULL,
  `post_as` varchar(255) NOT NULL,
  `eventid` int(11) NOT NULL,
  `site_flag` int(11) NOT NULL,
  `share_id` int(144) NOT NULL,
  `share_count` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=396 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_item`
--

INSERT INTO `feed_item` (`ID`, `userid`, `content`, `timestamp`, `imageid`, `videoid`, `likes`, `comments`, `location`, `user_flag`, `profile_userid`, `template`, `pageid`, `hide_profile`, `post_as`, `eventid`, `site_flag`, `share_id`, `share_count`) VALUES
(362, 1, 'dwada', 1620809180, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(363, 1, 'dawdawda', 1620809193, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(364, 1, '#[tre](1)', 1620809359, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(365, 1, '@[deep bhut](deep)', 1620813471, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(366, 1, '@[deep bhut](deep)', 1620813476, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(367, 1, 'awdawd@[deep bhut](deep)', 1620813492, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(368, 1, 'awdwdeep bhut', 1620813605, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(369, 1, 'adwaw @[deep bhut](deep)', 1620813803, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(370, 1, 'adwaw @[deep bhut](deep)', 1620813915, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(371, 1, 'adwawd@[deep bhut](deep)', 1620814011, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(372, 1, 'adwwad @[deep bhut](deep)', 1620814202, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(373, 1, 'dawda  @[d1 d2](999)', 1620814898, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(374, 1, '#dd', 1620820283, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(375, 1, 'dawdad#[deeeee](4)', 1620820739, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(376, 1, 'dawdaw#dwadawdwad', 1620828725, 0, 0, 1, 1, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(377, 1, 'adwwad#[tre](1)', 1620882347, 0, 0, 1, 1, '', 0, 0, '', 0, 0, '', 0, 0, 0, 4),
(383, 2, 'dwada', 1621515101, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(384, 2, 'dawda', 1621515112, 319, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(385, 2, 'awdawd', 1621515124, 0, 0, 1, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(388, 1, '', 1621515359, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 377, 0),
(389, 1, '', 1621515372, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 377, 1),
(390, 1, '', 1621515449, 0, 0, 0, 7, '', 0, 0, '', 0, 0, '', 0, 0, 377, 1),
(392, 1, 'dawdawd', 1621610113, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(393, 1, 'dwadawd', 1621610137, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(394, 1, 'dwada fesfsf', 1621610230, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0),
(395, 1, 'dawdfsefsfesfesf dawdawdawadaddadadad dawdawdawd awdad awdawdawdawdad', 1621610258, 0, 0, 0, 4, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feed_item_comments`
--

DROP TABLE IF EXISTS `feed_item_comments`;
CREATE TABLE IF NOT EXISTS `feed_item_comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `comment` varchar(3000) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `commentid` int(11) NOT NULL,
  `replies` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_item_comments`
--

INSERT INTO `feed_item_comments` (`ID`, `postid`, `userid`, `comment`, `timestamp`, `likes`, `commentid`, `replies`) VALUES
(1, 385, 1, 'dawdad', 1620984889, 0, 0, 0),
(2, 378, 1, 'deep', 1621059561, 0, 0, 0),
(6, 377, 1, 'dawda', 1621082982, 1, 0, 0),
(7, 376, 1, 'dawda', 1621084769, 1, 0, 0),
(13, 390, 1, 'dawdadad', 1621592103, 0, 0, 0),
(14, 390, 1, 'dawdawad', 1621592106, 0, 0, 0),
(15, 390, 1, 'dawdwa', 1621603385, 0, 0, 0),
(16, 390, 1, 'dawd', 1621603441, 0, 0, 0),
(17, 390, 1, 'dawda', 1621603475, 0, 0, 0),
(18, 390, 1, 'fsefs', 1621603628, 0, 0, 0),
(19, 390, 1, 'dawdwa', 1621603652, 0, 0, 0),
(20, 390, 1, 'dawdad', 1621603961, 0, 0, 0),
(21, 395, 1, 'sdfsfsef', 1621619166, 0, 0, 0),
(22, 395, 1, 'dawdawdawd', 1621619255, 0, 0, 0),
(24, 395, 1, 'dadwad', 1621657760, 0, 0, 0),
(25, 395, 1, 'dawd', 1621658299, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feed_item_comment_likes`
--

DROP TABLE IF EXISTS `feed_item_comment_likes`;
CREATE TABLE IF NOT EXISTS `feed_item_comment_likes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `commentid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_item_comment_likes`
--

INSERT INTO `feed_item_comment_likes` (`ID`, `commentid`, `userid`, `timestamp`) VALUES
(37, 3, 1, 1621082750),
(38, 5, 1, 1621082959),
(44, 6, 1, 1621084289),
(45, 7, 1, 1621084778);

-- --------------------------------------------------------

--
-- Table structure for table `feed_item_images`
--

DROP TABLE IF EXISTS `feed_item_images`;
CREATE TABLE IF NOT EXISTS `feed_item_images` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `imageid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feed_item_shared`
--

DROP TABLE IF EXISTS `feed_item_shared`;
CREATE TABLE IF NOT EXISTS `feed_item_shared` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(144) NOT NULL,
  `shared_id` int(144) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `count_share` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feed_item_subscribers`
--

DROP TABLE IF EXISTS `feed_item_subscribers`;
CREATE TABLE IF NOT EXISTS `feed_item_subscribers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=341 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_item_subscribers`
--

INSERT INTO `feed_item_subscribers` (`ID`, `postid`, `userid`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 42, 1),
(27, 43, 1),
(28, 44, 1),
(29, 46, 2),
(30, 48, 1),
(31, 49, 2),
(32, 50, 1),
(33, 51, 2),
(34, 52, 2),
(35, 53, 1),
(36, 54, 1),
(37, 55, 2),
(38, 56, 1),
(39, 57, 2),
(40, 58, 1),
(41, 59, 1),
(42, 60, 1),
(43, 61, 1),
(44, 62, 1),
(45, 63, 1),
(46, 64, 1),
(47, 65, 1),
(48, 66, 1),
(49, 67, 1),
(50, 68, 1),
(51, 70, 1),
(52, 71, 1),
(53, 72, 1),
(54, 73, 1),
(55, 75, 1),
(56, 78, 1),
(57, 77, 1),
(58, 79, 1),
(59, 80, 1),
(60, 81, 1),
(61, 82, 1),
(62, 83, 1),
(63, 84, 1),
(64, 85, 1),
(65, 86, 1),
(66, 87, 1),
(67, 88, 1),
(68, 89, 1),
(69, 90, 1),
(70, 91, 1),
(71, 92, 1),
(72, 93, 1),
(73, 94, 1),
(74, 95, 1),
(75, 96, 1),
(76, 97, 1),
(77, 98, 1),
(78, 99, 1),
(79, 100, 1),
(80, 101, 1),
(81, 102, 1),
(82, 103, 1),
(83, 104, 1),
(84, 105, 1),
(85, 106, 1),
(86, 107, 1),
(87, 108, 1),
(88, 109, 1),
(89, 110, 1),
(90, 111, 1),
(91, 112, 1),
(92, 113, 1),
(93, 114, 1),
(94, 115, 1),
(95, 116, 1),
(96, 117, 1),
(97, 118, 1),
(98, 119, 1),
(99, 120, 1),
(100, 121, 1),
(101, 122, 1),
(102, 123, 1),
(103, 124, 1),
(104, 125, 1),
(105, 126, 1),
(106, 127, 1),
(107, 128, 1),
(108, 129, 1),
(109, 130, 1),
(110, 131, 1),
(111, 132, 1),
(112, 133, 1),
(113, 134, 1),
(114, 135, 1),
(115, 136, 1),
(116, 137, 1),
(117, 138, 1),
(118, 139, 1),
(119, 140, 1),
(120, 141, 1),
(121, 142, 1),
(122, 143, 1),
(123, 144, 1),
(124, 145, 1),
(125, 146, 1),
(126, 147, 1),
(127, 148, 1),
(128, 149, 1),
(129, 150, 1),
(130, 151, 1),
(131, 152, 1),
(132, 153, 1),
(133, 154, 1),
(134, 155, 1),
(135, 156, 1),
(136, 157, 1),
(137, 158, 1),
(138, 159, 1),
(139, 160, 1),
(140, 161, 1),
(141, 162, 1),
(142, 163, 1),
(143, 164, 1),
(144, 165, 1),
(145, 166, 1),
(146, 167, 1),
(147, 168, 1),
(148, 169, 1),
(149, 170, 1),
(150, 171, 1),
(151, 172, 1),
(152, 173, 1),
(153, 174, 1),
(154, 175, 1),
(155, 176, 1),
(156, 177, 1),
(157, 178, 1),
(158, 179, 1),
(159, 180, 1),
(160, 181, 1),
(161, 182, 1),
(162, 183, 1),
(163, 184, 1),
(164, 185, 1),
(165, 186, 1),
(166, 187, 1),
(167, 188, 1),
(168, 189, 1),
(169, 190, 1),
(170, 191, 1),
(171, 192, 1),
(172, 193, 1),
(173, 194, 1),
(174, 195, 1),
(175, 196, 1),
(176, 197, 1),
(177, 198, 1),
(178, 199, 1),
(179, 200, 1),
(180, 201, 1),
(181, 202, 1),
(182, 203, 1),
(183, 204, 1),
(184, 205, 1),
(185, 206, 1),
(186, 207, 1),
(187, 208, 1),
(188, 209, 1),
(189, 210, 1),
(190, 211, 1),
(191, 212, 1),
(192, 213, 1),
(193, 214, 1),
(194, 215, 1),
(195, 216, 1),
(196, 217, 1),
(197, 218, 1),
(198, 219, 1),
(199, 220, 1),
(200, 221, 1),
(201, 222, 1),
(202, 223, 1),
(203, 224, 1),
(204, 225, 1),
(205, 226, 1),
(206, 227, 1),
(207, 228, 1),
(208, 229, 1),
(209, 230, 1),
(210, 231, 1),
(211, 232, 1),
(212, 233, 1),
(213, 234, 1),
(214, 235, 1),
(215, 236, 1),
(216, 237, 1),
(217, 238, 1),
(218, 239, 1),
(219, 240, 1),
(220, 241, 1),
(221, 242, 1),
(222, 243, 1),
(223, 244, 1),
(224, 245, 1),
(225, 246, 1),
(226, 247, 1),
(227, 248, 1),
(228, 249, 1),
(229, 250, 1),
(230, 251, 1),
(231, 252, 1),
(232, 253, 1),
(233, 254, 1),
(234, 255, 1),
(235, 256, 1),
(236, 257, 1),
(237, 258, 1),
(238, 259, 1),
(239, 260, 1),
(240, 261, 1),
(241, 262, 1),
(242, 263, 1),
(243, 264, 1),
(244, 265, 1),
(245, 266, 1),
(246, 267, 1),
(247, 268, 1),
(248, 269, 1),
(249, 270, 1),
(250, 271, 1),
(251, 272, 1),
(252, 273, 1),
(253, 274, 1),
(254, 275, 1),
(255, 276, 1),
(256, 277, 1),
(257, 278, 1),
(258, 279, 1),
(259, 280, 1),
(260, 281, 1),
(261, 282, 1),
(262, 283, 3),
(263, 284, 1),
(264, 283, 1),
(265, 285, 1),
(266, 286, 1),
(267, 287, 1),
(268, 288, 1),
(269, 289, 1),
(270, 290, 1),
(271, 291, 1),
(272, 292, 1),
(273, 293, 1),
(274, 294, 1),
(275, 295, 1),
(276, 295, 1),
(277, 296, 1),
(278, 297, 1),
(279, 298, 1),
(280, 299, 1),
(281, 300, 1),
(282, 301, 1),
(283, 302, 1),
(284, 303, 1),
(286, 305, 1),
(287, 306, 1),
(288, 307, 1),
(289, 308, 1),
(293, 304, 1),
(294, 309, 3),
(295, 309, 1),
(296, 315, 1),
(297, 316, 1),
(298, 331, 1),
(299, 335, 1),
(300, 337, 1),
(301, 339, 1),
(302, 344, 1),
(303, 345, 1),
(304, 360, 1),
(305, 361, 1),
(306, 362, 1),
(307, 363, 1),
(308, 364, 1),
(309, 365, 1),
(310, 366, 1),
(311, 367, 1),
(312, 368, 1),
(313, 369, 1),
(314, 370, 1),
(315, 371, 1),
(316, 372, 1),
(317, 373, 1),
(318, 374, 1),
(319, 375, 1),
(320, 376, 1),
(321, 377, 1),
(322, 378, 1),
(323, 379, 1),
(324, 380, 1),
(325, 381, 1),
(326, 382, 1),
(327, 383, 1),
(328, 385, 1),
(329, 386, 1),
(330, 387, 1),
(331, 388, 1),
(332, 382, 1),
(333, 383, 2),
(334, 384, 2),
(335, 385, 2),
(336, 390, 1),
(337, 392, 1),
(338, 393, 1),
(339, 394, 1),
(340, 395, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feed_item_urls`
--

DROP TABLE IF EXISTS `feed_item_urls`;
CREATE TABLE IF NOT EXISTS `feed_item_urls` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `url` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feed_item_users`
--

DROP TABLE IF EXISTS `feed_item_users`;
CREATE TABLE IF NOT EXISTS `feed_item_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feed_likes`
--

DROP TABLE IF EXISTS `feed_likes`;
CREATE TABLE IF NOT EXISTS `feed_likes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_likes`
--

INSERT INTO `feed_likes` (`ID`, `postid`, `userid`, `timestamp`) VALUES
(16, 19, 1, 1618479294),
(17, 17, 1, 1618479299),
(18, 16, 1, 1618479301),
(19, 15, 1, 1618479304),
(21, 21, 1, 1618479563),
(25, 22, 1, 1618481023),
(26, 57, 2, 1618653707),
(111, 77, 1, 1618832263),
(120, 78, 1, 1618832956),
(125, 79, 1, 1618894118),
(126, 76, 1, 1618894131),
(182, 103, 1, 1619168511),
(219, 104, 1, 1619173136),
(223, 167, 1, 1619520807),
(224, 174, 1, 1619586084),
(225, 169, 1, 1619586105),
(227, 156, 1, 1619586147),
(228, 157, 1, 1619586164),
(236, 304, 1, 1620647971),
(238, 301, 1, 1620708929),
(239, 337, 1, 1620734119),
(241, 332, 1, 1620734603),
(245, 331, 1, 1620735202),
(246, 335, 1, 1620735642),
(247, 384, 1, 1620969268),
(248, 383, 1, 1620969272),
(249, 381, 1, 1620969274),
(252, 385, 1, 1620984816),
(253, 378, 1, 1620984825),
(260, 377, 1, 1621080009),
(261, 376, 1, 1621417956),
(262, 385, 2, 1621515127);

-- --------------------------------------------------------

--
-- Table structure for table `feed_tagged_users`
--

DROP TABLE IF EXISTS `feed_tagged_users`;
CREATE TABLE IF NOT EXISTS `feed_tagged_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_stats`
--

DROP TABLE IF EXISTS `home_stats`;
CREATE TABLE IF NOT EXISTS `home_stats` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `google_members` int(11) NOT NULL DEFAULT '0',
  `facebook_members` int(11) NOT NULL DEFAULT '0',
  `twitter_members` int(11) NOT NULL DEFAULT '0',
  `total_members` int(11) NOT NULL DEFAULT '0',
  `new_members` int(11) NOT NULL DEFAULT '0',
  `active_today` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_stats`
--

INSERT INTO `home_stats` (`ID`, `google_members`, `facebook_members`, `twitter_members`, `total_members`, `new_members`, `active_today`, `timestamp`) VALUES
(1, 0, 0, 0, 1, 1, 1, 1499160358);

-- --------------------------------------------------------

--
-- Table structure for table `ipn_log`
--

DROP TABLE IF EXISTS `ipn_log`;
CREATE TABLE IF NOT EXISTS `ipn_log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `data` text,
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `IP` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_block`
--

DROP TABLE IF EXISTS `ip_block`;
CREATE TABLE IF NOT EXISTS `ip_block` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(500) NOT NULL DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `reason` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `live_chat`
--

DROP TABLE IF EXISTS `live_chat`;
CREATE TABLE IF NOT EXISTS `live_chat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `last_reply_userid` int(11) NOT NULL,
  `last_replyid` int(11) NOT NULL,
  `last_reply_timestamp` int(11) NOT NULL,
  `posts` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `live_chat`
--

INSERT INTO `live_chat` (`ID`, `userid`, `timestamp`, `title`, `last_reply_userid`, `last_replyid`, `last_reply_timestamp`, `posts`) VALUES
(1, 1, 1618383064, '', 1, 4, 1619976532, 4),
(2, 1, 1620121891, '', 1, 5, 1620121891, 1);

-- --------------------------------------------------------

--
-- Table structure for table `live_chat_messages`
--

DROP TABLE IF EXISTS `live_chat_messages`;
CREATE TABLE IF NOT EXISTS `live_chat_messages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `chatid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `live_chat_messages`
--

INSERT INTO `live_chat_messages` (`ID`, `chatid`, `userid`, `message`, `timestamp`) VALUES
(1, 1, 1, 'hey', 1618383064),
(2, 1, 2, 'how r you', 1618383076),
(3, 1, 1, 'sdgvdsfg', 1619169216),
(4, 1, 1, '<i><strong>has left the conversation</strong></i>', 1619976532),
(5, 2, 1, 'dawa', 1620121891);

-- --------------------------------------------------------

--
-- Table structure for table `live_chat_users`
--

DROP TABLE IF EXISTS `live_chat_users`;
CREATE TABLE IF NOT EXISTS `live_chat_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `chatid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `unread` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `live_chat_users`
--

INSERT INTO `live_chat_users` (`ID`, `chatid`, `userid`, `active`, `unread`, `title`) VALUES
(2, 1, 2, 2, 1, 'Chat with <strong>deep</strong>'),
(3, 2, 1, 2, 0, 'Chat with <strong>999</strong>'),
(4, 2, 3, 2, 0, 'Chat with <strong>deep</strong>');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(500) NOT NULL DEFAULT '',
  `username` varchar(500) NOT NULL DEFAULT '',
  `count` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`ID`, `IP`, `username`, `count`, `timestamp`) VALUES
(1, '127.0.0.1', 'bhut@GMAIL.COM', 1, 1618392272),
(2, '127.0.0.1', 'deepdd', 1, 1618392282),
(3, '127.0.0.1', 'ddddd.com@gmail.com', 1, 1618392293),
(4, '127.0.0.1', 'bhut@GMAIL.COM', 1, 1618566292),
(5, '127.0.0.1', 'deepbhut@gmail.com', 2, 1620040574),
(6, '::1', 'admin@admin.com', 1, 1620124591),
(7, '::1', 'deepbhut8747@gmail.com', 1, 1620127710),
(8, '::1', 'deepbhut8747@gmail.com', 1, 1620381365),
(9, '::1', 'deepbhut8747@gmail.com', 2, 1620561225),
(10, '::1', 'd1 d2', 1, 1620621107),
(11, '::1', 'deepbhut@gmail.com', 1, 1620621125),
(12, '::1', 'deepbhut@gmail.com', 1, 1621061537),
(13, '::1', 'deepbhut@gmail.com', 1, 1621332848),
(14, '::1', 'deepbhut8747@gmail.com', 5, 1621339023),
(15, '::1', 'deepbhut@gmail.com', 3, 1621339210),
(16, '::1', 'deepbhut8747@gmail.com', 1, 1621339988),
(17, '::1', 'deepbhut8747@gmail.', 1, 1621340033),
(18, '::1', 'deepbhut8747@gmai', 1, 1621340182),
(19, '::1', 'deepbhut@gmail.', 1, 1621340782),
(20, '::1', 'deepbhut8747@gmail.com', 2, 1621340987),
(21, '::1', 'deepbhut8747@gmail.', 5, 1621341200),
(22, '::1', 'deepbhut8747@gmail', 2, 1621341352),
(23, '::1', 'deepbhut8747@gmail.', 5, 1621342163),
(24, '::1', 'deepbhut@gmail.com', 1, 1621515076);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `pageviews` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `profile_header` varchar(500) NOT NULL,
  `profile_avatar` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `posting_status` int(11) NOT NULL,
  `location` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `website` varchar(500) NOT NULL,
  `nonmembers_view` int(11) NOT NULL,
  `members` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `name`, `slug`, `type`, `categoryid`, `timestamp`, `pageviews`, `likes`, `profile_header`, `profile_avatar`, `description`, `posting_status`, `location`, `email`, `phone`, `website`, `nonmembers_view`, `members`) VALUES
(1, 'new', '', 0, 2, 1620043083, 3, 0, 'default_header.png', 'default.png', 'new', 0, '', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

DROP TABLE IF EXISTS `page_categories`;
CREATE TABLE IF NOT EXISTS `page_categories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_categories`
--

INSERT INTO `page_categories` (`ID`, `name`, `description`) VALUES
(2, 'Digital Business', 'Got a website, blog or other digital business?'),
(3, 'Television', 'Pages about T.V'),
(4, 'Blogs', 'Pages to do with blogging');

-- --------------------------------------------------------

--
-- Table structure for table `page_invites`
--

DROP TABLE IF EXISTS `page_invites`;
CREATE TABLE IF NOT EXISTS `page_invites` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `fromid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page_users`
--

DROP TABLE IF EXISTS `page_users`;
CREATE TABLE IF NOT EXISTS `page_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_users`
--

INSERT INTO `page_users` (`ID`, `pageid`, `userid`, `roleid`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

DROP TABLE IF EXISTS `password_reset`;
CREATE TABLE IF NOT EXISTS `password_reset` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `token` varchar(255) NOT NULL DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `IP` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`ID`, `userid`, `token`, `timestamp`, `IP`) VALUES
(1, 1, 'c940efdf7683a29b8ecab70b6c13a9d8428d149e', 1621356723, '::1'),
(2, 1, 'b3c6dadb1d94891c05a686471a9366efba398ddd', 1621358471, '::1'),
(3, 1, 'efdb2ae6b08e583e435a3a3a0d0e8fc192fc9fe6', 1621358724, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `payment_logs`
--

DROP TABLE IF EXISTS `payment_logs`;
CREATE TABLE IF NOT EXISTS `payment_logs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `email` varchar(500) NOT NULL DEFAULT '',
  `processor` varchar(255) NOT NULL,
  `hash` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_plans`
--

DROP TABLE IF EXISTS `payment_plans`;
CREATE TABLE IF NOT EXISTS `payment_plans` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `hexcolor` varchar(6) NOT NULL DEFAULT '',
  `fontcolor` varchar(6) NOT NULL DEFAULT '',
  `cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `days` int(11) NOT NULL DEFAULT '0',
  `sales` int(11) NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_plans`
--

INSERT INTO `payment_plans` (`ID`, `name`, `hexcolor`, `fontcolor`, `cost`, `days`, `sales`, `description`, `icon`) VALUES
(2, 'BASIC', '65E0EB', 'FFFFFF', '3.00', 30, 8, 'This is the basic plan which gives you a introduction to our Premium Plans', 'glyphicon glyphicon-heart-empty'),
(3, 'Professional', '55CD7B', 'FFFFFF', '7.99', 90, 3, 'Get all the benefits of basic at a cheaper price and gain content for longer.', 'glyphicon glyphicon-piggy-bank'),
(4, 'LIFETIME', 'EE5782', 'FFFFFF', '300.00', 0, 1, 'Become a premium member for life and have access to all our premium content.', 'glyphicon glyphicon-gift');

-- --------------------------------------------------------

--
-- Table structure for table `profile_comments`
--

DROP TABLE IF EXISTS `profile_comments`;
CREATE TABLE IF NOT EXISTS `profile_comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `profileid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relationship_requests`
--

DROP TABLE IF EXISTS `relationship_requests`;
CREATE TABLE IF NOT EXISTS `relationship_requests` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `friendid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `relationship_status` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `pageid` int(11) NOT NULL,
  `reason` text NOT NULL,
  `timestamp` int(11) NOT NULL,
  `fromid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reset_log`
--

DROP TABLE IF EXISTS `reset_log`;
CREATE TABLE IF NOT EXISTS `reset_log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(500) NOT NULL DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reset_log`
--

INSERT INTO `reset_log` (`ID`, `IP`, `timestamp`) VALUES
(1, '::1', 1621356723),
(2, '::1', 1621358471),
(3, '::1', 1621358724);

-- --------------------------------------------------------

--
-- Table structure for table `site_layouts`
--

DROP TABLE IF EXISTS `site_layouts`;
CREATE TABLE IF NOT EXISTS `site_layouts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `layout_path` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_layouts`
--

INSERT INTO `site_layouts` (`ID`, `name`, `layout_path`) VALUES
(1, 'Basic', 'layout/themes/layout.php'),
(2, 'Titan', 'layout/themes/titan_layout.php'),
(3, 'Dark Fire', 'layout/themes/dark_fire_layout.php'),
(4, 'Light Blue', 'layout/themes/light_blue_layout.php');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
CREATE TABLE IF NOT EXISTS `site_settings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(500) NOT NULL,
  `site_desc` varchar(500) NOT NULL,
  `upload_path` varchar(500) NOT NULL,
  `upload_path_relative` varchar(500) NOT NULL,
  `site_email` varchar(500) NOT NULL,
  `site_logo` varchar(1000) NOT NULL DEFAULT 'logo.png',
  `register` int(11) NOT NULL,
  `disable_captcha` int(11) NOT NULL,
  `date_format` varchar(25) NOT NULL,
  `avatar_upload` int(11) NOT NULL DEFAULT '1',
  `file_types` varchar(500) NOT NULL,
  `twitter_consumer_key` varchar(255) NOT NULL,
  `twitter_consumer_secret` varchar(255) NOT NULL,
  `disable_social_login` int(11) NOT NULL,
  `facebook_app_id` varchar(255) NOT NULL,
  `facebook_app_secret` varchar(255) NOT NULL,
  `google_client_id` varchar(255) NOT NULL,
  `google_client_secret` varchar(255) NOT NULL,
  `file_size` int(11) NOT NULL,
  `paypal_email` varchar(1000) NOT NULL,
  `paypal_currency` varchar(100) NOT NULL DEFAULT 'USD',
  `payment_enabled` int(11) NOT NULL,
  `payment_symbol` varchar(5) NOT NULL DEFAULT '$',
  `global_premium` int(11) NOT NULL,
  `install` int(11) NOT NULL DEFAULT '1',
  `login_protect` int(11) NOT NULL,
  `activate_account` int(11) NOT NULL,
  `default_user_role` int(11) NOT NULL,
  `secure_login` int(11) NOT NULL,
  `stripe_secret_key` varchar(1000) NOT NULL,
  `stripe_publish_key` varchar(1000) NOT NULL,
  `google_recaptcha` int(11) NOT NULL,
  `google_recaptcha_secret` varchar(255) NOT NULL,
  `google_recaptcha_key` varchar(255) NOT NULL,
  `logo_option` int(11) NOT NULL,
  `layout` varchar(500) NOT NULL,
  `profile_comments` int(11) NOT NULL,
  `avatar_width` int(11) NOT NULL,
  `avatar_height` int(11) NOT NULL,
  `cache_time` int(11) NOT NULL,
  `checkout2_secret` varchar(255) NOT NULL,
  `checkout2_accountno` varchar(255) NOT NULL,
  `user_display_type` int(11) NOT NULL,
  `page_slugs` int(11) NOT NULL,
  `calendar_picker_format` varchar(255) NOT NULL,
  `disable_chat` int(11) NOT NULL,
  `single_point_value` int(11) NOT NULL,
  `currency_v` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`ID`, `site_name`, `site_desc`, `upload_path`, `upload_path_relative`, `site_email`, `site_logo`, `register`, `disable_captcha`, `date_format`, `avatar_upload`, `file_types`, `twitter_consumer_key`, `twitter_consumer_secret`, `disable_social_login`, `facebook_app_id`, `facebook_app_secret`, `google_client_id`, `google_client_secret`, `file_size`, `paypal_email`, `paypal_currency`, `payment_enabled`, `payment_symbol`, `global_premium`, `install`, `login_protect`, `activate_account`, `default_user_role`, `secure_login`, `stripe_secret_key`, `stripe_publish_key`, `google_recaptcha`, `google_recaptcha_secret`, `google_recaptcha_key`, `logo_option`, `layout`, `profile_comments`, `avatar_width`, `avatar_height`, `cache_time`, `checkout2_secret`, `checkout2_accountno`, `user_display_type`, `page_slugs`, `calendar_picker_format`, `disable_chat`, `single_point_value`, `currency_v`) VALUES
(1, 'earnfinex', 'Welcome to ProLogin', 'uploads/', 'uploads/', 'test@test.com', 'logo.png', 0, 1, 'd/m/Y', 1, 'gif|png|jpg|jpeg', '', '', 0, '', '', '', '', 2048, '', 'USD', 1, '$', 0, 1, 1, 0, 0, 0, '', '', 0, '', '', 0, 'layout/themes/titan_layout.php', 1, 200, 200, 3600, '', '', 0, 0, 'Y/m/d H:i', 0, 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `token` varchar(255) NOT NULL DEFAULT '',
  `IP` varchar(500) NOT NULL DEFAULT '',
  `username` varchar(25) NOT NULL DEFAULT '',
  `first_name` varchar(25) NOT NULL DEFAULT '',
  `last_name` varchar(25) NOT NULL DEFAULT '',
  `avatar` varchar(1000) NOT NULL DEFAULT 'default.png',
  `joined` int(11) NOT NULL DEFAULT '0',
  `joined_date` varchar(10) NOT NULL DEFAULT '',
  `online_timestamp` int(11) NOT NULL DEFAULT '0',
  `oauth_provider` varchar(40) NOT NULL DEFAULT '',
  `oauth_id` varchar(1000) NOT NULL DEFAULT '',
  `oauth_token` varchar(1500) NOT NULL DEFAULT '',
  `oauth_secret` varchar(500) NOT NULL DEFAULT '',
  `email_notification` int(11) NOT NULL DEFAULT '1',
  `aboutme` varchar(1000) NOT NULL DEFAULT '',
  `points` decimal(10,2) NOT NULL DEFAULT '0.00',
  `premium_time` int(11) NOT NULL DEFAULT '0',
  `user_role` int(11) NOT NULL DEFAULT '0',
  `premium_planid` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `activate_code` varchar(255) NOT NULL DEFAULT '',
  `profile_comments` int(11) NOT NULL DEFAULT '1',
  `profile_views` int(11) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `noti_count` int(11) NOT NULL,
  `profile_header` varchar(500) NOT NULL DEFAULT 'default_header.png',
  `location_from` varchar(500) NOT NULL,
  `location_live` varchar(500) NOT NULL,
  `friends` text NOT NULL,
  `pages` text NOT NULL,
  `profile_view` int(11) NOT NULL,
  `posts_view` int(11) NOT NULL,
  `post_profile` int(11) NOT NULL,
  `allow_friends` int(11) NOT NULL,
  `allow_pages` int(11) NOT NULL,
  `chat_option` int(11) NOT NULL,
  `relationship_status` int(11) NOT NULL,
  `relationship_userid` int(11) NOT NULL,
  `tag_user` int(11) NOT NULL,
  `post_count` int(11) NOT NULL,
  `point_count` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `email`, `password`, `token`, `IP`, `username`, `first_name`, `last_name`, `avatar`, `joined`, `joined_date`, `online_timestamp`, `oauth_provider`, `oauth_id`, `oauth_token`, `oauth_secret`, `email_notification`, `aboutme`, `points`, `premium_time`, `user_role`, `premium_planid`, `active`, `activate_code`, `profile_comments`, `profile_views`, `address_1`, `address_2`, `city`, `state`, `zipcode`, `country`, `noti_count`, `profile_header`, `location_from`, `location_live`, `friends`, `pages`, `profile_view`, `posts_view`, `post_profile`, `allow_friends`, `allow_pages`, `chat_option`, `relationship_status`, `relationship_userid`, `tag_user`, `post_count`, `point_count`) VALUES
(1, 'deepbhut8747@gmail.com', '$2a$12$4kFqrIBm4mnQs5f.qirAdO5jmr8V1Dc6pEX7qrmKmzF.CFm5o9MoS', 'a6c422531f494a476384c04f35a0cb6d', '::1', 'deep', 'deep', 'bhut', 'default.png', 1618303955, '4-2021', 1621674047, '', '', '', '', 1, '', '0.00', 0, 1, 0, 1, '', 1, 31, '25,datvijay katargam surat', '', 'surat', 'gujarat', '395004', 'India', 56, 'default_header.png', '', '', 'a:1:{i:0;s:1:\"3\";}', 'a:1:{i:0;i:1;}', 0, 0, 0, 0, 0, 0, 0, 0, 0, 212, 3210),
(2, 'deep@gmail.com', '$2a$12$QYDAvN9ZZyfrC3poxrR0a.6dwNT264H/XzKdBPYTYmtNZuqxIPqL.', '783e3dea231c0a06bf242498c95380e4', '127.0.0.1', 'deep2', 'dddd', 'dddd', 'default.png', 1618382982, '4-2021', 1621515090, '', '', '', '', 1, '', '0.00', 0, 5, 0, 1, '', 1, 6, '', '', '', '', '', '', 2, 'default_header.png', '', '', 'a:0:{}', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 290),
(3, 'deep1@gmail.com', '$2a$12$zJ6BWemtKShh9oljAEMLy.a3yUabsOdzEn7HT9c7vmWY1wcQqw4bS', '9e82a42597efd9345316905484deefa1', '127.0.0.1', '999', 'd1', 'd2', 'default.png', 1620040649, '5-2021', 1620638855, '', '', '', '', 1, '', '0.00', 0, 5, 0, 1, '', 1, 6, '', '', '', '', '', '', 5, 'default_header.png', '', '', 'a:1:{i:0;s:1:\"1\";}', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(4, 'd1@gmail.com', '$2a$12$h/zyxiISRUAjF3UWL5cCDu4tcCuOVUc2QRx4MhAazwjfQN2i9fB7G', '', '::1', 'db1', 'd1', 'b1', 'default.png', 1621404487, '5-2021', 0, '', '', '', '', 1, '', '0.00', 0, 5, 0, 1, '', 1, 0, '', '', '', '', '', '', 0, 'default_header.png', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'deepbhut87dawda47@gmail.com', '$2a$12$JSQ9MPGmWE.Q3biluc1lOuAciRf/TTjE1V91I3qu9FebhD7QcZLlO', '', '::1', 'deepbhut8', 'deepdwawd', 'bhutdawda', 'default.png', 1621405027, '5-2021', 0, '', '', '', '', 1, '', '0.00', 0, 5, 0, 1, '', 1, 0, '', '', '', '', '', '', 0, 'default_header.png', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_albums`
--

DROP TABLE IF EXISTS `user_albums`;
CREATE TABLE IF NOT EXISTS `user_albums` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `timestamp` int(11) NOT NULL,
  `feed_album` int(11) NOT NULL,
  `images` int(11) NOT NULL,
  `pageid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_albums`
--

INSERT INTO `user_albums` (`ID`, `userid`, `name`, `description`, `timestamp`, `feed_album`, `images`, `pageid`) VALUES
(1, 1, 'Feed Album', 'Images you posted on your feed.', 1618304240, 1, 264, 0),
(2, 2, 'deep', 'ddd', 1618566320, 0, 1, 0),
(3, 2, 'Feed Album', 'Images you posted on your feed.', 1618637398, 1, 26, 0),
(4, 1, 'dawd', '', 1618663876, 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_custom_fields`
--

DROP TABLE IF EXISTS `user_custom_fields`;
CREATE TABLE IF NOT EXISTS `user_custom_fields` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `fieldid` int(11) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_custom_fields`
--

INSERT INTO `user_custom_fields` (`ID`, `userid`, `fieldid`, `value`) VALUES
(1, 1, 1, ''),
(2, 1, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
CREATE TABLE IF NOT EXISTS `user_data` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `twitter` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_events`
--

DROP TABLE IF EXISTS `user_events`;
CREATE TABLE IF NOT EXISTS `user_events` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(255) NOT NULL DEFAULT '',
  `event` varchar(255) NOT NULL DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_friends`
--

DROP TABLE IF EXISTS `user_friends`;
CREATE TABLE IF NOT EXISTS `user_friends` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `friendid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_friends`
--

INSERT INTO `user_friends` (`ID`, `userid`, `friendid`, `timestamp`) VALUES
(3, 1, 3, 1620041594),
(4, 3, 1, 1620041594);

-- --------------------------------------------------------

--
-- Table structure for table `user_friend_requests`
--

DROP TABLE IF EXISTS `user_friend_requests`;
CREATE TABLE IF NOT EXISTS `user_friend_requests` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `friendid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_friend_requests`
--

INSERT INTO `user_friend_requests` (`ID`, `userid`, `friendid`, `timestamp`) VALUES
(1, 3, 2, 1620041338);

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE IF NOT EXISTS `user_groups` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `default` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`ID`, `name`, `default`) VALUES
(1, 'Default Group', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_group_users`
--

DROP TABLE IF EXISTS `user_group_users`;
CREATE TABLE IF NOT EXISTS `user_group_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `groupid` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group_users`
--

INSERT INTO `user_group_users` (`ID`, `groupid`, `userid`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(6, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

DROP TABLE IF EXISTS `user_images`;
CREATE TABLE IF NOT EXISTS `user_images` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `file_name` varchar(1000) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `extension` varchar(20) NOT NULL,
  `file_size` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `file_url` varchar(2000) NOT NULL,
  `albumid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `filed_id` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=320 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`ID`, `userid`, `file_name`, `file_type`, `extension`, `file_size`, `timestamp`, `file_url`, `albumid`, `name`, `description`, `filed_id`) VALUES
(10, 1, '534230830c0f2186d4b73974e58e725c.jpg', 'image/jpeg', '.jpg', 230, 1618307421, '', 1, '', '', 0),
(11, 1, 'ea6b67f4569591a4acc817592895a0ad.jpg', 'image/jpeg', '.jpg', 230, 1618379876, '', 1, '', '', 0),
(12, 1, 'e4a5a5c0af5599b88222038cff3fe156.png', 'image/png', '.png', 776, 1618379897, '', 1, '', '', 0),
(13, 1, 'd2977ba8e362d0efb6d9886c08a2e043.png', 'image/png', '.png', 776, 1618381294, '', 1, '', '', 0),
(14, 1, '125168679c947a6cbd564f8766665f5a.png', 'image/png', '.png', 776, 1618381385, '', 1, '', '', 0),
(15, 1, '1353424c2bbdbcf8b57c6af9824e0e2d.png', 'image/png', '.png', 776, 1618388974, '', 1, '', '', 0),
(16, 1, '673732d65906ea2616c46e3d378662e5.png', 'image/png', '.png', 176, 1618469389, '', 1, '', '', 0),
(17, 1, 'b393566f3ebe9183c78e66849c8a65a2.png', 'image/png', '.png', 224, 1618551577, '', 1, '', '', 0),
(18, 1, 'ba74cd510cae250ed91b4b5ff5b19add.png', 'image/png', '.png', 220, 1618551590, '', 1, '', '', 0),
(19, 1, 'b963314cd86075dba36092a8b694feb7.png', 'image/png', '.png', 1520, 1618551594, '', 1, '', '', 0),
(20, 1, '79ab79fccff8a592e02f0b7eb919ccf5.jpg', 'image/jpeg', '.jpg', 6, 1618553225, '', 1, '', '', 0),
(21, 1, '1f577ede4dc8f48be1a6a7a50b6c2324.jpg', 'image/jpeg', '.jpg', 6, 1618554515, '', 1, '', '', 0),
(22, 1, '1b29c7f6ac018d6b9d08bbfa835ce394.jpg', 'image/jpeg', '.jpg', 7, 1618554569, '', 1, '', '', 0),
(23, 1, '57b360fc50f5caca5d2eae7be938a360.png', 'image/png', '.png', 236, 1618554635, '', 1, '', '', 0),
(24, 1, '92e5c2009c543c60d40d75651fdf07cd.png', 'image/png', '.png', 776, 1618554635, '', 1, '', '', 0),
(25, 1, 'd2cea635faa717085fd50b61d274bea4.png', 'image/png', '.png', 176, 1618554635, '', 1, '', '', 0),
(26, 1, '279414481d3b15011de302a9e56731d6.jpg', 'image/jpeg', '.jpg', 81, 1618554693, '', 1, '', '', 0),
(27, 1, '97993929274d4592492fde5952fd462e.jpg', 'image/jpeg', '.jpg', 70, 1618554693, '', 1, '', '', 0),
(28, 1, 'b0e817b0b74f769bb62427b632e9ca03.png', 'image/png', '.png', 5, 1618563557, '', 1, '', '', 0),
(29, 1, '4743fac6aad3957b4f77fd05884981fb.jpg', 'image/jpeg', '.jpg', 56, 1618563557, '', 1, '', '', 0),
(30, 1, '4ab20aa601b072fb1a89de70f00ec509.jpg', 'image/jpeg', '.jpg', 115, 1618563612, '', 1, '', '', 0),
(32, 1, 'b7653b74cc0f812feed66a0924f8a0eb.jpg', 'image/jpeg', '.jpg', 58, 1618563658, '', 1, '', '', 0),
(33, 1, '2159bce085c1478de0b79efe09e4b3a9.png', 'image/png', '.png', 18, 1618563658, '', 1, '', '', 0),
(34, 1, 'a6a4d5fd45bfcec5cb7b328412bcd440.jpg', 'image/jpeg', '.jpg', 70, 1618563837, '', 1, '', '', 0),
(35, 1, 'da3433769a91ce65db431ce7df21a132.jpg', 'image/jpeg', '.jpg', 70, 1618563878, '', 1, '', '', 0),
(36, 1, '0b7ea099b663f67bc40ad0e824888f01.jpg', 'image/jpeg', '.jpg', 114, 1618564404, '', 1, '', '', 0),
(37, 1, '44625b4b0ead9884a745be93c8977bcf.jpg', 'image/jpeg', '.jpg', 70, 1618564946, '', 1, '', '', 0),
(38, 1, 'f558552fe121cc0cee659abc7abbee60.png', 'image/png', '.png', 5, 1618564946, '', 1, '', '', 0),
(39, 1, '0a311032a44f47a61e3cfb8b91cdafa7.jpg', 'image/jpeg', '.jpg', 115, 1618565017, '', 1, '', '', 0),
(40, 1, 'b54186f0f1f03b00855298dec7b9103e.jpg', 'image/jpeg', '.jpg', 81, 1618565017, '', 1, '', '', 0),
(41, 1, '8fd056034c081783d1790ae3d1f8e0f7.jpg', 'image/jpeg', '.jpg', 70, 1618565357, '', 1, '', '', 0),
(42, 1, '8d62108cea2667247ff31043b7b4cf27.png', 'image/png', '.png', 5, 1618565357, '', 1, '', '', 0),
(43, 1, 'b089b813589be21d0e828f20be858602.jpg', 'image/jpeg', '.jpg', 70, 1618565409, '', 1, '', '', 0),
(44, 1, '1c0662c69dc26d3d92a558c99d0004f8.png', 'image/png', '.png', 5, 1618565409, '', 1, '', '', 0),
(45, 1, 'c50ea5d070906e4e883238cb1973d384.jpg', 'image/jpeg', '.jpg', 70, 1618565631, '', 1, '', '', 0),
(46, 1, '30462020905d3bb3b24491f2b26d8003.jpg', 'image/jpeg', '.jpg', 70, 1618565710, '', 1, '', '', 0),
(47, 2, '08221749f8bd065bcc821b404e3306e4.jpg', 'image/jpeg', '.jpg', 7, 1618566355, '', 2, '', '', 0),
(48, 1, 'a3d57e95180977d82456d0eeb655af20.jpg', 'image/jpeg', '.jpg', 70, 1618566764, '', 1, '', '', 0),
(49, 1, '25beb2e9da5b0444c02573c9f41a33de.png', 'image/png', '.png', 5, 1618566815, '', 1, '', '', 0),
(50, 1, '35f2f070176fff896f9a4d547e42b87c.jpg', 'image/jpeg', '.jpg', 70, 1618570697, '', 1, '', '', 0),
(51, 1, 'f577fc9888f2678310a9e2a012999980.png', 'image/png', '.png', 5, 1618570715, '', 1, '', '', 0),
(52, 1, 'ff79701f562ddf3dbd0960c2530da22e.jpg', 'image/jpeg', '.jpg', 45, 1618570780, '', 1, '', '', 0),
(53, 1, '338df07aff6c151472c5564424f5eded.jpg', 'image/jpeg', '.jpg', 81, 1618570780, '', 1, '', '', 0),
(54, 1, '40b650c611b0c9b9ddf285b7932076a8.jpg', 'image/jpeg', '.jpg', 70, 1618570896, '', 1, '', '', 0),
(55, 1, 'b6b88be4721f773f0199b1d78f580128.png', 'image/png', '.png', 5, 1618570912, '', 1, '', '', 0),
(56, 1, '58fa70c693b8a5e8c82e3ee970d13945.png', 'image/png', '.png', 5, 1618571564, '', 1, '', '', 0),
(57, 1, '42dcbd68fee46697fe70ceb9ca708b70.png', 'image/png', '.png', 5, 1618571623, '', 1, '', '', 0),
(58, 2, 'b820ff831be664f562d682dda3c78546.jpg', 'image/jpeg', '.jpg', 6, 1618637403, '', 3, '', '', 0),
(59, 2, 'a352f9dd6b8d09b8ea64c1fa04c00265.jpg', 'image/jpeg', '.jpg', 6, 1618637822, '', 3, '', '', 0),
(60, 2, 'da34991365338abd36681edebd4b0f3a.jpg', 'image/jpeg', '.jpg', 7, 1618637822, '', 3, '', '', 0),
(61, 2, '8913640fe43ad6b4aab1fd4eff148f0f.jpg', 'image/jpeg', '.jpg', 6, 1618639151, '', 3, '', '', 0),
(62, 2, '5904f8ec7b9f909957f40c4c0a84ba0c.jpg', 'image/jpeg', '.jpg', 7, 1618639167, '', 3, '', '', 0),
(63, 1, '33b4ce7b21c80cb9c5c298716ec38ea7.jpg', 'image/jpeg', '.jpg', 70, 1618641486, '', 1, '', '', 0),
(64, 1, 'b65a999461b10c9eb6ab0d6765f944c5.png', 'image/png', '.png', 5, 1618641532, '', 1, '', '', 0),
(65, 1, 'a1a534ee37a75a02a69f2ff47b9ccfeb.png', 'image/png', '.png', 35, 1618641581, '', 1, '', '', 0),
(66, 1, '94373b2cdc58991821498d8b34d279e4.png', 'image/png', '.png', 776, 1618641875, '', 1, '', '', 0),
(67, 1, 'dfb6733f5dc8184ec7fd661255565e02.png', 'image/png', '.png', 176, 1618641914, '', 1, '', '', 0),
(68, 2, 'c38c268ac6b69bc8807af72a23625206.jpg', 'image/jpeg', '.jpg', 6, 1618642076, '', 3, '', '', 0),
(69, 2, 'e7ebd2b4249b936735d5b692fc4ced33.jpg', 'image/jpeg', '.jpg', 6, 1618643260, '', 3, '', '', 0),
(70, 2, '933ca0d409ee14dd77baab51a01adbc1.jpg', 'image/jpeg', '.jpg', 7, 1618643295, '', 3, '', '', 0),
(71, 1, '1b826bac9b985ae70a459b7a2c315e1c.png', 'image/png', '.png', 184, 1618643351, '', 1, '', '', 0),
(72, 1, '16920b0f20773fe17289413b821279ae.png', 'image/png', '.png', 197, 1618643362, '', 1, '', '', 0),
(73, 2, 'eca04b1fc870c5890349663530c47e9e.jpg', 'image/jpeg', '.jpg', 6, 1618644346, '', 3, '', '', 0),
(74, 2, '5e2f75890a181dc4c9266582b63fc3b4.jpg', 'image/jpeg', '.jpg', 7, 1618644380, '', 3, '', '', 0),
(75, 2, '937d8fe0bbfce518bc6f2ef63dd201c8.jpg', 'image/jpeg', '.jpg', 6, 1618644599, '', 3, '', '', 0),
(76, 2, '45f4897b746096301f055d8f46425051.jpg', 'image/jpeg', '.jpg', 7, 1618644603, '', 3, '', '', 0),
(77, 2, '2bd6f2d39e65628bffe04017a0ad9ee1.jpg', 'image/jpeg', '.jpg', 10, 1618644742, '', 3, '', '', 0),
(78, 2, '11146a1bc21e1c16bf1f6c1192956666.jpg', 'image/jpeg', '.jpg', 4, 1618644742, '', 3, '', '', 0),
(79, 1, 'eec8fbe5806186f064d1acd6dcbd3941.png', 'image/png', '.png', 176, 1618648546, '', 1, '', '', 0),
(80, 1, 'c7488db4df19910bd7a0e94663607f98.png', 'image/png', '.png', 176, 1618648781, '', 1, '', '', 0),
(81, 1, 'c0fab476e83e24b58ad82a1ba64efcae.png', 'image/png', '.png', 177, 1618648781, '', 1, '', '', 0),
(82, 1, '6be1824e04e26c0973c9fa7fd136549c.png', 'image/png', '.png', 184, 1618648859, '', 1, '', '', 0),
(83, 1, '8c51270888b401e53a41be017fdc678d.png', 'image/png', '.png', 197, 1618648859, '', 1, '', '', 0),
(84, 2, '81c9ed00061b38d84cff44a4cd690c02.jpg', 'image/jpeg', '.jpg', 10, 1618650739, '', 3, '', '', 0),
(85, 2, 'e778d6d037d7e997928b3081f2ff1c90.jpg', 'image/jpeg', '.jpg', 4, 1618650739, '', 3, '', '', 0),
(86, 1, '2a369802dac6e741ea09afe77dae8dea.png', 'image/png', '.png', 776, 1618651207, '', 1, '', '', 0),
(87, 1, 'bb056db9c2ed7fe86b4fbff2f2a92504.png', 'image/png', '.png', 176, 1618651207, '', 1, '', '', 0),
(88, 1, '969dbdffd69a59496cc3a6abcd90459c.png', 'image/png', '.png', 177, 1618651207, '', 1, '', '', 0),
(89, 1, 'a1103e1334601762be748870049c5b15.png', 'image/png', '.png', 176, 1618651570, '', 1, '', '', 0),
(90, 1, '8570ddcbcef04d15e3bd625288d4a6ba.png', 'image/png', '.png', 177, 1618651661, '', 1, '', '', 0),
(91, 1, 'd470366e5dc5c5587cde22bb3a9d2af0.png', 'image/png', '.png', 176, 1618653543, '', 1, '', '', 0),
(92, 2, 'e715811ba012a3eeee78a1baf0e38faf.jpg', 'image/jpeg', '.jpg', 10, 1618653600, '', 3, '', '', 0),
(93, 2, '76192e8f21c5d62627d2c9da14356212.jpg', 'image/jpeg', '.jpg', 4, 1618653609, '', 3, '', '', 0),
(94, 1, '4c80e1aff7f34693cbb9238fd9e3b577.png', 'image/png', '.png', 236, 1618655531, '', 1, '', '', 0),
(95, 1, 'aa717b4361eb495d29b18de2f4e8e715.png', 'image/png', '.png', 776, 1618655531, '', 1, '', '', 0),
(96, 2, '3db09675957fb9cf887a9cc4ada26ab1.jpg', 'image/jpeg', '.jpg', 10, 1618655595, '', 3, '', '', 0),
(97, 2, '8adcb0007ed4b27d94344fc8e009ca56.jpg', 'image/jpeg', '.jpg', 4, 1618655595, '', 3, '', '', 0),
(98, 2, '3063d18839a0b5a6a477077089cb41d7.jpg', 'image/jpeg', '.jpg', 10, 1618655602, '', 3, '', '', 0),
(99, 2, '526a1de9ef47f4be61937fa863c61a9e.jpg', 'image/jpeg', '.jpg', 4, 1618655602, '', 3, '', '', 0),
(100, 2, '7b4d1670281bbb504bfa718fb2d5525a.jpg', 'image/jpeg', '.jpg', 10, 1618655608, '', 3, '', '', 0),
(101, 2, 'd317893aa4b2af8e7e130333833549e8.jpg', 'image/jpeg', '.jpg', 4, 1618655608, '', 3, '', '', 0),
(102, 2, 'fb36f115f2ac17f3cdfb2d2fcdcaf6ac.jpg', 'image/jpeg', '.jpg', 10, 1618655624, '', 3, '', '', 0),
(103, 2, '6bfd13b36524bb88df95e98848e02929.jpg', 'image/jpeg', '.jpg', 4, 1618655624, '', 3, '', '', 0),
(104, 1, 'c62318ba93a127b800eb0acd41b60719.png', 'image/png', '.png', 776, 1618655690, '', 1, '', '', 0),
(105, 1, '1181fb4203a31d39738a210a373025a5.png', 'image/png', '.png', 176, 1618655697, '', 1, '', '', 0),
(106, 1, 'f1f9ad7ec845662be1f21ca65d522d40.png', 'image/png', '.png', 236, 1618656582, '', 1, '', '', 0),
(107, 1, '982e7865886719b26aed4189d427d9c9.png', 'image/png', '.png', 776, 1618656589, '', 1, '', '', 0),
(108, 1, 'ed6917485e0083b825f0b46e158d8b27.png', 'image/png', '.png', 236, 1618656682, '', 1, '', '', 0),
(109, 1, 'f610acbe9fbfa590a77ddb7d12abe293.png', 'image/png', '.png', 776, 1618656690, '', 1, '', '', 0),
(110, 2, '6154019095e735545a2e6cf2c4bf51d0.jpg', 'image/jpeg', '.jpg', 10, 1618656807, '', 3, '', '', 0),
(111, 2, '197d12e019a0b3cb0d3631637bac2f3c.jpg', 'image/jpeg', '.jpg', 4, 1618656812, '', 3, '', '', 0),
(112, 1, 'ef3c15be91a10977de9a58966e2472d1.png', 'image/png', '.png', 236, 1618657054, '', 1, '', '', 0),
(113, 1, 'b4a668b749adbd15bfea012834057e22.png', 'image/png', '.png', 776, 1618657060, '', 1, '', '', 0),
(114, 0, '', '', '', 0, 0, '', 0, '', '', 113),
(115, 1, 'bcb9f19c310312757f5274b615b39e49.png', 'image/png', '.png', 236, 1618657401, '', 1, '', '', 0),
(116, 0, '', '', '', 0, 0, '', 0, '', '', 115),
(117, 1, '5d0e5c4750a1a9270e3df321e5ea9bfd.png', 'image/png', '.png', 776, 1618657435, '', 1, '', '', 0),
(118, 0, '', '', '', 0, 0, '', 0, '', '', 117),
(119, 1, '7f8ed682841821a097ffa14318340f4e.png', 'image/png', '.png', 236, 1618657588, '', 1, '', '', 0),
(120, 1, '24977b595ebe783bd0dda7b41bc886a3.png', 'image/png', '.png', 776, 1618657613, '', 1, '', '', 119),
(121, 1, 'bbc309214683f4479618a7ae24aaec13.png', 'image/png', '.png', 776, 1618657868, '', 1, '', '', 0),
(122, 0, '', '', '', 0, 0, '', 0, '', '', 121),
(123, 1, '2092b5f4865cab1559413833b2070da8.png', 'image/png', '.png', 176, 1618657884, '', 1, '', '', 0),
(124, 0, '', '', '', 0, 0, '', 0, '', '', 123),
(125, 1, '992410e31baf14dd9ed0f9abface74e2.png', 'image/png', '.png', 236, 1618658095, '', 1, '', '', 0),
(126, 1, '1d61cf418ecbfcef42a8b50311a68258.png', 'image/png', '.png', 236, 1618658098, '', 1, '', '', 0),
(127, 1, 'f346d78582b8f5ee5e96064c76e93af0.png', 'image/png', '.png', 236, 1618658101, '', 1, '', '', 0),
(128, 1, '9e745e86b6094ea1e92ffb04a9f0c201.png', 'image/png', '.png', 236, 1618658146, '', 1, '', '', 0),
(129, 1, '63a378a42785c64b32b0c813ae1dc1f4.png', 'image/png', '.png', 776, 1618658146, '', 1, '', '', 128),
(130, 1, 'e68655b307e34191d599d3410e95a9b9.png', 'image/png', '.png', 176, 1618658146, '', 1, '', '', 129),
(131, 1, '19cbc7021ad5036e3947d9e8626486a2.png', 'image/png', '.png', 177, 1618658146, '', 1, '', '', 130),
(132, 1, 'a1a55d6cc6d8961fc5adf1710b4f8564.png', 'image/png', '.png', 236, 1618658968, '', 1, '', '', 0),
(133, 1, 'd72571b70028fcbc44cbca92b0fb54a5.png', 'image/png', '.png', 776, 1618658968, '', 1, '', '', 132),
(134, 1, 'b8925c8bfd8007a3a66e45fedae42c17.png', 'image/png', '.png', 176, 1618658968, '', 1, '', '', 133),
(135, 1, '0a4f9c517c1be8f13bf1406c8d426b66.png', 'image/png', '.png', 236, 1618659049, '', 1, '', '', 0),
(136, 1, '2aa6592fd0fea921bb831e10bed14939.png', 'image/png', '.png', 776, 1618659053, '', 1, '', '', 135),
(137, 1, 'c3ccc821e6611e64929d36c6e2f898c0.png', 'image/png', '.png', 236, 1618659141, '', 1, '', '', 0),
(138, 1, '333feaf579bd81e054174f78b40e9be7.png', 'image/png', '.png', 776, 1618659151, '', 1, '', '', 137),
(139, 1, 'db63c36afcfa1350a7ad90ef946fb536.png', 'image/png', '.png', 236, 1618659364, '', 1, '', '', 0),
(140, 1, 'f57f164f27866c654ebb33560b600f83.png', 'image/png', '.png', 776, 1618659367, '', 1, '', '', 139),
(141, 1, 'b8ee59fd15907440dac750c714d0a9b1.png', 'image/png', '.png', 176, 1618659373, '', 1, '', '', 140),
(142, 1, 'be173b37ea7d47baba1d569039fa954d.png', 'image/png', '.png', 236, 1618659422, '', 1, '', '', 0),
(143, 1, 'ddcecbd06d0a7a733290fb03d2c2d63f.png', 'image/png', '.png', 776, 1618659427, '', 1, '', '', 142),
(144, 1, '41a6205aa3fe851c370ac80b5049b27d.png', 'image/png', '.png', 236, 1618659502, '', 1, '', '', 0),
(145, 1, 'acf9b08636fa7bf38efd67c5aec9460d.png', 'image/png', '.png', 776, 1618659506, '', 1, '', '', 144),
(146, 1, '677268e7f214d5fd19b8604c6516fb72.png', 'image/png', '.png', 176, 1618659509, '', 1, '', '', 145),
(147, 1, '8a2781e2a18649baa976e54bc025f192.png', 'image/png', '.png', 236, 1618659748, '', 1, '', '', 0),
(148, 1, '123f1e856b0842476be1154839568f90.png', 'image/png', '.png', 776, 1618659750, '', 1, '', '', 147),
(149, 1, '2999eaaf2e677eee9470dd4b09887aa5.png', 'image/png', '.png', 236, 1618660075, '', 1, '', '', 0),
(150, 1, 'c98f033ed2ce25039babd779aac793d7.png', 'image/png', '.png', 776, 1618660079, '', 1, '', '', 149),
(151, 1, '07555d654506607eb8fdffc27def1b5b.png', 'image/png', '.png', 776, 1618660332, '', 1, '', '', 0),
(152, 1, 'ee80023f46668acbd4778caf39b36db8.png', 'image/png', '.png', 176, 1618660340, '', 1, '', '', 0),
(153, 1, '043e928da31afee53bda45615ac6da1e.png', 'image/png', '.png', 236, 1618660457, '', 1, '', '', 0),
(154, 1, '4943e841cf4f6ef168442c6742009562.png', 'image/png', '.png', 776, 1618660467, '', 1, '', '', 153),
(155, 1, '8e581dd6506f2a6e9f539184c84f466b.png', 'image/png', '.png', 236, 1618660534, '', 1, '', '', 0),
(156, 1, '559a46061138e1fdb76d93a83b62df7e.png', 'image/png', '.png', 776, 1618660534, '', 1, '', '', 155),
(157, 1, 'e64258a2c10deb9d7afab74cf500eede.png', 'image/png', '.png', 236, 1618660556, '', 1, '', '', 0),
(158, 1, '6f577c8ae8ba38f715c23ae1f8fdea09.png', 'image/png', '.png', 776, 1618660558, '', 1, '', '', 157),
(159, 1, '6bb7290237b9489520a854e20c2d2447.png', 'image/png', '.png', 236, 1618660856, '', 1, '', '', 0),
(160, 1, 'd6c47f52847c10cec1fda868ef25cc89.png', 'image/png', '.png', 776, 1618660859, '', 1, '', '', 159),
(161, 1, '2defed6f6ba6cf2b0c444288e225409d.png', 'image/png', '.png', 776, 1618663433, '', 1, '', '', 0),
(162, 1, '1c751ed3a97dc956b7c468fdaba0cf36.png', 'image/png', '.png', 176, 1618663433, '', 1, '', '', 0),
(163, 1, '890c0ba15e4690ec492ad3d4bd954f4c.png', 'image/png', '.png', 224, 1618663470, '', 1, '', '', 0),
(164, 1, '49c27d875a5a6753a1b0eb0ee89354b1.png', 'image/png', '.png', 220, 1618663470, '', 1, '', '', 163),
(165, 1, '977ba64e6f7c301f72dc45d73b6aa97e.png', 'image/png', '.png', 1520, 1618663470, '', 1, '', '', 164),
(166, 1, '1611aa55e46c0c483a7f62971da5f49f.png', 'image/png', '.png', 776, 1618663864, '', 1, '', '', 0),
(167, 1, '26d873f7a19715bf83e659999499b663.png', 'image/png', '.png', 176, 1618663864, '', 1, '', '', 0),
(168, 1, '55ef178a32f13d02b25afd2ce71f6369.png', 'image/png', '.png', 776, 1618663894, '', 4, '', '', 0),
(169, 1, '2ea7e1d84d703d9ac75ea5063be48cd2.png', 'image/png', '.png', 176, 1618663894, '', 4, '', '', 0),
(170, 1, '41bcaf01260ec0603a1ab536fae5e1db.png', 'image/png', '.png', 776, 1618809793, '', 1, '', '', 0),
(171, 1, '17dcfe5121819e08cbf5c9762e89ea45.png', 'image/png', '.png', 176, 1618809793, '', 1, '', '', 170),
(172, 1, 'cf70d0d337acbbcf1a3563938482d028.png', 'image/png', '.png', 177, 1618809793, '', 1, '', '', 171),
(173, 1, 'b766a98b91b0a10cf529c04882376011.png', 'image/png', '.png', 236, 1618833242, '', 1, '', '', 0),
(174, 1, '27faebd85a4b8fa123f956a9e9f75b11.png', 'image/png', '.png', 776, 1618833242, '', 1, '', '', 173),
(175, 1, 'ce0b3c69a1a3110ce08baf8f93850d2c.png', 'image/png', '.png', 176, 1618833242, '', 1, '', '', 174),
(176, 1, '15bb831b618372a49ad724a6dc9ae166.png', 'image/png', '.png', 177, 1618833242, '', 1, '', '', 175),
(177, 1, '1f6c1391dcb8770e0c49f7ef56384e4a.png', 'image/png', '.png', 236, 1618894566, '', 1, '', '', 0),
(178, 1, 'cc516b6053c73c68ef4a4abe466bf80d.png', 'image/png', '.png', 776, 1618894566, '', 1, '', '', 177),
(179, 1, '2a0c609a2ca916b58a6658ce60d4c09e.png', 'image/png', '.png', 776, 1618894751, '', 1, '', '', 0),
(180, 1, '5bf29d92f7d0b8fd2b745535e02b6cea.png', 'image/png', '.png', 176, 1618894751, '', 1, '', '', 179),
(181, 1, '728f2c83d43d2c0d8d406d0c169d7b51.png', 'image/png', '.png', 236, 1618896369, '', 1, '', '', 0),
(182, 1, '6c7856980a6c2c18ae0a6231fe0328f4.png', 'image/png', '.png', 776, 1618896369, '', 1, '', '', 181),
(183, 1, '8a27b12103568409a59fd7daa8aecca5.png', 'image/png', '.png', 176, 1618896369, '', 1, '', '', 182),
(184, 1, 'fd4cd02d0f37b5a9647859d5b626f933.png', 'image/png', '.png', 177, 1618896369, '', 1, '', '', 183),
(185, 1, '2ec47a259a46240efbc96e373fbd3321.png', 'image/png', '.png', 236, 1618923637, '', 1, '', '', 0),
(186, 1, '817cbb26df1aae9af67185be2e4d9612.png', 'image/png', '.png', 776, 1618923637, '', 1, '', '', 185),
(187, 1, 'eccde5a308de0889f6781ea790750749.png', 'image/png', '.png', 176, 1618923637, '', 1, '', '', 186),
(188, 1, 'fbd826b6d60082934a199ec1b01f4c4d.png', 'image/png', '.png', 236, 1618986781, '', 1, '', '', 0),
(189, 1, '325ab84ad4fcd9994510f5bdbe0053a8.png', 'image/png', '.png', 776, 1618986781, '', 1, '', '', 188),
(190, 1, '12d63ef4c174091587c2482373895000.png', 'image/png', '.png', 176, 1618986781, '', 1, '', '', 189),
(191, 1, '4103ccef99dbcbb214ee9abe40fe9620.png', 'image/png', '.png', 177, 1618986781, '', 1, '', '', 190),
(192, 1, '423ba3cef27013e5a210ee1d5e2f018e.png', 'image/png', '.png', 184, 1618986781, '', 1, '', '', 191),
(193, 1, '3e962656a5fc344386c74334943be2f3.png', 'image/png', '.png', 197, 1618986781, '', 1, '', '', 192),
(194, 1, '7d63ce9725556b24533b403150681100.png', 'image/png', '.png', 106, 1618986781, '', 1, '', '', 193),
(195, 1, '10bf34fdf4205179fdedbcd12cd1ff1b.png', 'image/png', '.png', 193, 1618986781, '', 1, '', '', 194),
(196, 1, 'b89113e344054715b0f5b6824e4e0a9d.png', 'image/png', '.png', 212, 1618986781, '', 1, '', '', 195),
(197, 1, '7419a11284ef445d435f2b6c0b1be171.png', 'image/png', '.png', 268, 1618986781, '', 1, '', '', 196),
(198, 1, 'dc398af5313c1cca0a1d8ef42e6d93d0.png', 'image/png', '.png', 236, 1619240661, '', 1, '', '', 0),
(199, 1, 'bd64def80d07403e98ee83025d930ac0.png', 'image/png', '.png', 776, 1619240661, '', 1, '', '', 198),
(200, 1, 'a599a1699c2a3ab066329d7db5dca521.png', 'image/png', '.png', 776, 1619241855, '', 1, '', '', 0),
(201, 1, '029b7922abb9d564ef5f6c69c0f619f2.png', 'image/png', '.png', 776, 1619241874, '', 1, '', '', 0),
(202, 1, '331faa2cf8b097ce5d3512607c6a18dc.png', 'image/png', '.png', 224, 1619241874, '', 1, '', '', 201),
(203, 1, '776f89a7a57d5626fab827ca10c396f2.jpg', 'image/jpeg', '.jpg', 230, 1619433014, '', 1, '', '', 0),
(204, 1, '10ed0f36e84b8bd0fe461654bab14fb4.png', 'image/png', '.png', 236, 1619500590, '', 1, '', '', 0),
(205, 1, '2b263eb9b4bbdb22f06b984188e983e9.png', 'image/png', '.png', 776, 1619500590, '', 1, '', '', 204),
(206, 1, 'cdfe2cd656bb1138520835219121393d.png', 'image/png', '.png', 176, 1619500590, '', 1, '', '', 205),
(207, 1, '453b23d8291ed9f43dd1f7a50677a0a0.png', 'image/png', '.png', 236, 1619500623, '', 1, '', '', 0),
(208, 1, 'b5ea5f7833ac5643b84b2be34c639901.png', 'image/png', '.png', 776, 1619500623, '', 1, '', '', 207),
(209, 1, 'fe931e6b76506b72c1c31bf75f78fd87.png', 'image/png', '.png', 176, 1619500623, '', 1, '', '', 208),
(210, 1, '336f98b11f426c7d6e43284fc18b157e.png', 'image/png', '.png', 236, 1619500672, '', 1, '', '', 0),
(211, 1, '4aab80398af370b876699cdd77275da1.png', 'image/png', '.png', 776, 1619500672, '', 1, '', '', 210),
(212, 1, 'e8a41f533fc3dec85b17c98a64178ea2.png', 'image/png', '.png', 176, 1619500672, '', 1, '', '', 211),
(213, 1, 'aa3ebb40ff4555adb0e230fcf76bfc35.png', 'image/png', '.png', 236, 1619500771, '', 1, '', '', 0),
(214, 1, '896469d70173e3fa117e75647a2b397b.png', 'image/png', '.png', 776, 1619500776, '', 1, '', '', 213),
(215, 1, '39790d046abc8e74573a7c9f110929b8.png', 'image/png', '.png', 176, 1619500783, '', 1, '', '', 214),
(216, 1, '41f66e0626053494ae7bf91cd45c308d.png', 'image/png', '.png', 236, 1619500908, '', 1, '', '', 0),
(217, 1, '741a17b4555a2b325cbd1d194442e483.png', 'image/png', '.png', 776, 1619500910, '', 1, '', '', 216),
(218, 1, 'f94e72a8d9014c052dee0e7c01befe24.png', 'image/png', '.png', 176, 1619500912, '', 1, '', '', 217),
(219, 1, 'f12db7a927ad474a911713803e8656d3.png', 'image/png', '.png', 776, 1619500941, '', 1, '', '', 0),
(220, 1, '5fdd562155f569f64d3ae982482485c4.png', 'image/png', '.png', 236, 1619500971, '', 1, '', '', 0),
(221, 1, 'fb97f9661dd01ea92bbf7ae4df4d6e5e.png', 'image/png', '.png', 776, 1619500971, '', 1, '', '', 220),
(222, 1, '9b5a055c066186f8da3b670387cfdf76.png', 'image/png', '.png', 776, 1619501013, '', 1, '', '', 0),
(223, 1, 'e351b09c5e030aed2c32597ca7d7c933.png', 'image/png', '.png', 176, 1619501013, '', 1, '', '', 222),
(224, 1, '052022701feb87ebce7643e856b85d7f.png', 'image/png', '.png', 236, 1619501735, '', 1, '', '', 0),
(225, 1, 'cf16cfa2a185634728a6c15d1383763e.png', 'image/png', '.png', 776, 1619501735, '', 1, '', '', 224),
(226, 1, '7836d8293f61c5ff7247083a1c0d1b07.png', 'image/png', '.png', 176, 1619501735, '', 1, '', '', 225),
(227, 1, 'b94b5af1034994233b283e0d84f4c339.png', 'image/png', '.png', 177, 1619501735, '', 1, '', '', 226),
(228, 1, '624e5429d3f07d0b131e57ce8c7c54ba.png', 'image/png', '.png', 236, 1619502138, '', 1, '', '', 0),
(229, 1, '86ab28043ed6fa9ab8b4ce11fac3777b.png', 'image/png', '.png', 776, 1619502138, '', 1, '', '', 228),
(230, 1, '817b890c908579f71c95cec0b11686e5.png', 'image/png', '.png', 176, 1619502138, '', 1, '', '', 229),
(231, 1, '1367ad83510c16354ac443ecf5adf4a8.png', 'image/png', '.png', 177, 1619502138, '', 1, '', '', 230),
(232, 1, '26e0942533badeb6ff4c632c22ee4895.png', 'image/png', '.png', 236, 1619525177, '', 1, '', '', 0),
(233, 1, '4034db8f3d2f76a1ea7a5b3cd8b3d472.png', 'image/png', '.png', 776, 1619525177, '', 1, '', '', 232),
(234, 1, 'f2c8e1ff5a377b353d6195da24abbef6.png', 'image/png', '.png', 176, 1619525177, '', 1, '', '', 233),
(235, 1, '7db19b37912330f69ac8fabfbcc6c63b.png', 'image/png', '.png', 177, 1619525177, '', 1, '', '', 234),
(236, 1, '113df584b1977b8a3f47bcc0bfd4e8dd.png', 'image/png', '.png', 184, 1619525177, '', 1, '', '', 235),
(237, 1, '09057e888c86194fd9ae9a6533ce8c7a.png', 'image/png', '.png', 197, 1619525177, '', 1, '', '', 236),
(238, 1, 'a006600bbaef2ad7e36df71b3e98e97e.png', 'image/png', '.png', 106, 1619525177, '', 1, '', '', 237),
(239, 1, 'd9d91b6da48cc7b8c6efc3fc1c5b9321.png', 'image/png', '.png', 236, 1619525305, '', 1, '', '', 0),
(240, 1, 'c1b3c2b1ab0a6c2c08490a5c950567d4.png', 'image/png', '.png', 776, 1619525305, '', 1, '', '', 239),
(241, 1, 'cdbb17ee75afff4f8a3104c88ce7762d.png', 'image/png', '.png', 176, 1619525305, '', 1, '', '', 240),
(242, 1, '3bf4b9da1bc92359b755422da2835b5e.png', 'image/png', '.png', 177, 1619525305, '', 1, '', '', 241),
(243, 1, 'c6c145c5c6405cb76f6cd12eb434edd6.png', 'image/png', '.png', 184, 1619525305, '', 1, '', '', 242),
(244, 1, 'f293ff6c1d6c6b1470f7531780fd59fb.png', 'image/png', '.png', 197, 1619525305, '', 1, '', '', 243),
(245, 1, '21306550082f5fea81486fdba9b92329.png', 'image/png', '.png', 106, 1619525305, '', 1, '', '', 244),
(246, 1, '9e4295a2333cd6cd51cf4633ff61b238.png', 'image/png', '.png', 193, 1619525305, '', 1, '', '', 245),
(247, 1, '1823062d685ab9480658cf1e15be3534.png', 'image/png', '.png', 212, 1619525305, '', 1, '', '', 246),
(248, 1, '5c2c2c06f8f2decd0cc26a8de72384ec.png', 'image/png', '.png', 236, 1619525328, '', 1, '', '', 0),
(249, 1, '3c979eb6f1ce44b6fe9ac839bfed7ebc.png', 'image/png', '.png', 776, 1619525328, '', 1, '', '', 248),
(250, 1, '45ac837c3d7a8fd675e923ad421da757.png', 'image/png', '.png', 176, 1619525328, '', 1, '', '', 249),
(251, 1, '8114da52145361f3acdf410ebaae36e3.png', 'image/png', '.png', 177, 1619525329, '', 1, '', '', 250),
(252, 1, 'ecc6b042a093942d49e9d078161485ff.png', 'image/png', '.png', 184, 1619525329, '', 1, '', '', 251),
(253, 1, '126a482fc848adb262173920cb136691.png', 'image/png', '.png', 197, 1619525329, '', 1, '', '', 252),
(254, 1, '532d8e042e8d5bf805652f5387ed83a5.png', 'image/png', '.png', 106, 1619525329, '', 1, '', '', 253),
(255, 1, '1da12c7cdf3da2ce46c98cbe38d17e6c.png', 'image/png', '.png', 193, 1619525329, '', 1, '', '', 254),
(256, 1, '21ea62a259f69e0cfb8ff3d592a81ac3.png', 'image/png', '.png', 236, 1619525444, '', 1, '', '', 0),
(257, 1, 'd2d649a2116450fbaef5713ddbb16031.png', 'image/png', '.png', 776, 1619525444, '', 1, '', '', 256),
(258, 1, '48d47d533e42143086a6e0e08f3e5e60.png', 'image/png', '.png', 176, 1619525444, '', 1, '', '', 257),
(259, 1, '42d65b977b978e723d9981bfda85e999.png', 'image/png', '.png', 177, 1619525444, '', 1, '', '', 258),
(260, 1, 'a5f7ff71fa1efc14888e0575b450ee40.png', 'image/png', '.png', 184, 1619525444, '', 1, '', '', 259),
(261, 1, '63efecb2ed18a32c5ac5e391fa9272be.png', 'image/png', '.png', 776, 1619528606, '', 1, '', '', 0),
(262, 1, 'f5aea5f7d5fab9d4d212dca9bce1d823.jpg', 'image/jpeg', '.jpg', 6, 1619545209, '', 1, '', '', 0),
(263, 1, '775d3f79f7967989f8b5348e6277ed24.jpg', 'image/jpeg', '.jpg', 486, 1619869101, '', 1, '', '', 0),
(264, 1, 'e6cd79d3ab1a83ef52bbb5fc1f952f7e.jpg', 'image/jpeg', '.jpg', 486, 1619871362, '', 1, '', '', 0),
(265, 1, '1a94850ae188bf45540a9a2bf7026849.jpg', 'image/jpeg', '.jpg', 420, 1619871718, '', 1, '', '', 0),
(266, 1, '286442b934a9010bea5938f81c3eba8b.jpg', 'image/jpeg', '.jpg', 295, 1619877922, '', 1, '', '', 0),
(267, 1, '946126250116e7d54c7242a85f12bd4a.jpg', 'image/jpeg', '.jpg', 814, 1619957877, '', 1, '', '', 0),
(268, 1, '0b22c7a6aeebcba24a7d261a7d4b2838.jpg', 'image/jpeg', '.jpg', 489, 1619957886, '', 1, '', '', 0),
(269, 1, 'b3f42ed05cd592b5b2e3cbe5af21f1d2.jpg', 'image/jpeg', '.jpg', 489, 1619958213, '', 1, '', '', 0),
(270, 1, '6a9388551eae72b7e55880258c1b8df8.jpg', 'image/jpeg', '.jpg', 814, 1619958920, '', 1, '', '', 0),
(271, 1, '4a468fb90cf18ba92b4aad098f46c921.jpg', 'image/jpeg', '.jpg', 489, 1619958928, '', 1, '', '', 0),
(272, 1, '3262afbd9fdf38889c66b4b109f05535.jpg', 'image/jpeg', '.jpg', 486, 1619959034, '', 1, '', '', 0),
(273, 1, 'c91b1014de228d7458a02f554dd87ddd.jpg', 'image/jpeg', '.jpg', 3064, 1619959034, '', 1, '', '', 0),
(274, 1, 'e8666addcf79e5c7d67f2bb149de9c85.jpg', 'image/jpeg', '.jpg', 295, 1619959129, '', 1, '', '', 0),
(275, 1, 'b27d2c807101f2656a60aaad1b63dfeb.jpg', 'image/jpeg', '.jpg', 486, 1619959129, '', 1, '', '', 0),
(276, 1, 'd0abcdf5b8324f42118a74f895e7576e.jpg', 'image/jpeg', '.jpg', 420, 1619959153, '', 1, '', '', 0),
(277, 1, '59b9ea1022765e07a564ec3880088eac.jpg', 'image/jpeg', '.jpg', 814, 1619959153, '', 1, '', '', 0),
(278, 1, '52cfc6a8d438433156a5e37b4757287f.jpg', 'image/jpeg', '.jpg', 420, 1620019285, '', 1, '', '', 0),
(279, 1, 'c27827c99d20857305f0c9781fd73606.jpg', 'image/jpeg', '.jpg', 814, 1620019285, '', 1, '', '', 0),
(280, 1, '1dda933c6f46f3440980bd89f397752b.jpg', 'image/jpeg', '.jpg', 489, 1620019285, '', 1, '', '', 0),
(281, 1, '0f7481b6c5ad2a7aef4125e2f947e260.jpg', 'image/jpeg', '.jpg', 489, 1620019546, '', 1, '', '', 0),
(282, 1, '5ae552cc67977cd030bab07a8feee541.jpg', 'image/jpeg', '.jpg', 315, 1620023213, '', 1, '', '', 0),
(283, 1, '06b666c3908a06c6630d4fae1b586ed9.jpg', 'image/jpeg', '.jpg', 420, 1620023213, '', 1, '', '', 0),
(284, 1, '519eb164b8fb7a17958c5777770e1750.jpg', 'image/jpeg', '.jpg', 315, 1620032216, '', 1, '', '', 0),
(285, 1, '09b4c0ba0249cbc37a558252dc64ee3b.jpg', 'image/jpeg', '.jpg', 420, 1620032216, '', 1, '', '', 0),
(286, 1, 'f7ee257cc3c6b10a716c61e430f24e7f.jpg', 'image/jpeg', '.jpg', 814, 1620032216, '', 1, '', '', 0),
(287, 1, '4190ba7aeae672323b07c8f370207758.jpg', 'image/jpeg', '.jpg', 489, 1620032216, '', 1, '', '', 0),
(288, 1, 'dded25b949713545755ddf9541f312a5.jpg', 'image/jpeg', '.jpg', 315, 1620389867, '', 1, '', '', 0),
(289, 1, 'fb4a1c1be186fa04320feb75e8e8adec.jpg', 'image/jpeg', '.jpg', 420, 1620389867, '', 1, '', '', 0),
(290, 1, 'ab0010c3d6e25a6683eedcdf7bdb7564.jpg', 'image/jpeg', '.jpg', 814, 1620389867, '', 1, '', '', 0),
(291, 1, '4c9b66fd2611ef9f59f858bc29a67962.jpg', 'image/jpeg', '.jpg', 814, 1620802765, '', 1, '', '', 0),
(292, 1, 'a04bfd0c5d70d776797ebcbafa2e272e.jpg', 'image/jpeg', '.jpg', 489, 1620802765, '', 1, '', '', 0),
(293, 1, '969541c0803d8ceb3d57e8f595117d9c.jpg', 'image/jpeg', '.jpg', 295, 1620802765, '', 1, '', '', 0),
(294, 1, 'c3d115eea320ef18beb2356e770dfb84.jpg', 'image/jpeg', '.jpg', 420, 1620888112, '', 0, '', '', 0),
(295, 1, '81f25dfeee7ebbba22d32ffd30d7e0e8.jpg', 'image/jpeg', '.jpg', 814, 1620889291, '', 0, '', '', 0),
(296, 1, '21b5f3aa7017e4ccd958bcaf98f729fe.jpg', 'image/jpeg', '.jpg', 814, 1620889361, '', 1, '', '', 0),
(297, 1, '29455e19ea45d40a97f4ab50ce622ddd.jpg', 'image/jpeg', '.jpg', 489, 1620889361, '', 1, '', '', 0),
(298, 1, '0424eb315c3296732afc4a0bac0f581e.jpg', 'image/jpeg', '.jpg', 295, 1620894942, '', 0, '', '', 0),
(299, 1, '6ebf8285670ee50a521c07a054cca1ea.jpg', 'image/jpeg', '.jpg', 295, 1620895376, '', 1, '', '', 0),
(300, 1, 'b5b5b9ff638864e589a8473f2e77b8f4.jpg', 'image/jpeg', '.jpg', 489, 1620895466, '', 1, '', '', 0),
(301, 1, '126a3e415b55595c4c0519be25b5ea91.jpg', 'image/jpeg', '.jpg', 814, 1620895539, '', 1, '', '', 0),
(302, 1, 'de5cb3f630e499e9aca4126a32c22e9a.jpg', 'image/jpeg', '.jpg', 489, 1620895540, '', 1, '', '', 0),
(303, 1, 'c7eeee96cfe192884206f98c601a7682.jpg', 'image/jpeg', '.jpg', 295, 1620895540, '', 1, '', '', 0),
(304, 1, 'f6d0f1bec067aaccd1b7a7edbbb301e8.jpg', 'image/jpeg', '.jpg', 814, 1620896071, '', 0, '', '', 0),
(305, 1, '3207ee9cabf158ed3a9426016ca2dcac.jpg', 'image/jpeg', '.jpg', 486, 1620896287, '', 0, '', '', 0),
(306, 1, 'b407e46f7306699516b0e9e4a245003f.jpg', 'image/jpeg', '.jpg', 295, 1620897441, '', 0, '', '', 0),
(307, 1, '0fb44b6e1bd518bd3b27cf4fb92468ff.jpg', 'image/jpeg', '.jpg', 295, 1620897565, '', 1, '', '', 0),
(308, 1, 'd565adb89ed8697f135e605039d33591.jpg', 'image/jpeg', '.jpg', 295, 1620897655, '', 1, '', '', 0),
(309, 1, '43b43a142c2a2ccd1e2ea289a4061153.jpg', 'image/jpeg', '.jpg', 489, 1620898206, '', 1, '', '', 0),
(310, 1, '328e6af10c88e72c69bc0e2d9a347f49.jpg', 'image/jpeg', '.jpg', 315, 1620898497, '', 1, '', '', 0),
(311, 1, '90dcd90b0a7ff0a43cbcd3e862204b67.jpg', 'image/jpeg', '.jpg', 420, 1620898497, '', 1, '', '', 0),
(312, 1, '88188f6b044c529cbd891f1b55d60f85.jpg', 'image/jpeg', '.jpg', 814, 1620898497, '', 1, '', '', 0),
(313, 1, 'f674cf850e12da58ceb936e0e67b89a4.jpg', 'image/jpeg', '.jpg', 489, 1620898497, '', 1, '', '', 0),
(314, 1, 'af52f4a3628df23168b817b74c3d42df.jpg', 'image/jpeg', '.jpg', 295, 1620898497, '', 1, '', '', 0),
(315, 1, '942ecde99b73a0c9cca89f742a1f2906.jpg', 'image/jpeg', '.jpg', 489, 1620898619, '', 0, '', '', 0),
(316, 1, '2194bdc870b3d3af36b7ef1b4358c933.jpg', 'image/jpeg', '.jpg', 295, 1620899453, '', 0, '', '', 0),
(317, 1, '53ecdbec48ca0dceff116ba283f74929.jpg', 'image/jpeg', '.jpg', 295, 1620900664, '', 1, '', '', 0),
(318, 1, 'c78461fb0ce17a4aa9bca46ba1199778.jpg', 'image/jpeg', '.jpg', 486, 1620900679, '', 1, '', '', 0),
(319, 2, 'df9bd4a44055088ebdf145beed2341a9.jpg', 'image/jpeg', '.jpg', 489, 1621515112, '', 3, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

DROP TABLE IF EXISTS `user_notifications`;
CREATE TABLE IF NOT EXISTS `user_notifications` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `fromid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=326 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_notifications`
--

INSERT INTO `user_notifications` (`ID`, `userid`, `url`, `timestamp`, `status`, `message`, `fromid`) VALUES
(1, 2, 'user_settings/friend_requests', 1618383015, 1, 'deep patel has sent you a friend request!', 1),
(2, 1, 'home/index', 1618383038, 1, 'dddd dddd has accepted your friend request!', 2),
(3, 1, 'home/index/3?postid=22', 1618478770, 1, 'deep patel has liked your post!', 1),
(4, 1, 'home/index/3?postid=21', 1618478776, 1, 'deep patel has liked your post!', 1),
(5, 1, 'home/index/3?postid=20', 1618478778, 1, 'deep patel has liked your post!', 1),
(6, 1, 'home/index/3?postid=22', 1618478785, 1, 'deep patel has liked your post!', 1),
(7, 1, 'home/index/3?postid=22', 1618478797, 1, 'deep patel has liked your post!', 1),
(8, 1, 'home/index/3?postid=20', 1618478808, 1, 'deep patel has liked your post!', 1),
(9, 1, 'home/index/3?postid=20', 1618478814, 1, 'deep patel has liked your post!', 1),
(10, 1, 'home/index/3?postid=20', 1618478823, 1, 'deep patel has liked your post!', 1),
(11, 1, 'home/index/3?postid=19', 1618478825, 1, 'deep patel has liked your post!', 1),
(12, 1, 'home/index/3?postid=19', 1618478839, 1, 'deep patel has liked your post!', 1),
(13, 1, 'home/index/3?postid=22', 1618479240, 1, 'deep patel has liked your post!', 1),
(14, 1, 'home/index/3?postid=22', 1618479254, 1, 'deep patel has liked your post!', 1),
(15, 1, 'home/index/3?postid=20', 1618479259, 1, 'deep patel has liked your post!', 1),
(16, 1, 'home/index/3?postid=18', 1618479262, 1, 'deep patel has liked your post!', 1),
(17, 1, 'home/index/3?postid=21', 1618479274, 1, 'deep patel has liked your post!', 1),
(18, 1, 'home/index/3?postid=19', 1618479294, 1, 'deep patel has liked your post!', 1),
(19, 1, 'home/index/3?postid=17', 1618479299, 1, 'deep patel has liked your post!', 1),
(20, 1, 'home/index/3?postid=16', 1618479301, 1, 'deep patel has liked your post!', 1),
(21, 1, 'home/index/3?postid=15', 1618479304, 1, 'deep patel has liked your post!', 1),
(22, 1, 'home/index/3?postid=22', 1618479393, 1, 'deep patel has liked your post!', 1),
(23, 1, 'home/index/3?postid=21', 1618479563, 1, 'deep patel has liked your post!', 1),
(24, 1, 'home/index/3?postid=22', 1618479570, 1, 'deep patel has liked your post!', 1),
(25, 1, 'home/index/3?postid=22', 1618479703, 1, 'deep patel has liked your post!', 1),
(26, 1, 'home/index/3?postid=22', 1618479706, 1, 'deep patel has liked your post!', 1),
(27, 1, 'home/index/3?postid=22', 1618481023, 1, 'deep patel has liked your post!', 1),
(28, 1, 'home/index/3?postid=57', 1618653707, 1, 'dddd dddd has liked your post!', 2),
(29, 1, 'home/index/3?postid=78', 1618811006, 1, 'deep patel has liked your post!', 1),
(30, 1, 'home/index/3?postid=78', 1618811464, 1, 'deep patel has liked your post!', 1),
(31, 1, 'home/index/3?postid=78', 1618811954, 1, 'deep patel has liked your post!', 1),
(32, 1, 'home/index/3?postid=78', 1618824218, 1, 'deep patel has liked your post!', 1),
(33, 1, 'home/index/3?postid=78', 1618824230, 1, 'deep patel has liked your post!', 1),
(34, 1, 'home/index/3?postid=77', 1618824232, 1, 'deep patel has liked your post!', 1),
(35, 1, 'home/index/3?postid=78', 1618824569, 1, 'deep patel has liked your post!', 1),
(36, 1, 'home/index/3?postid=78', 1618824695, 1, 'deep patel has liked your post!', 1),
(37, 1, 'home/index/3?postid=77', 1618825710, 1, 'deep patel has liked your post!', 1),
(38, 1, 'home/index/3?postid=77', 1618825792, 1, 'deep patel has liked your post!', 1),
(39, 1, 'home/index/3?postid=77', 1618825797, 1, 'deep patel has liked your post!', 1),
(40, 1, 'home/index/3?postid=78', 1618825811, 1, 'deep patel has liked your post!', 1),
(41, 1, 'home/index/3?postid=78', 1618825866, 1, 'deep patel has liked your post!', 1),
(42, 1, 'home/index/3?postid=78', 1618825868, 1, 'deep patel has liked your post!', 1),
(43, 1, 'home/index/3?postid=78', 1618825870, 1, 'deep patel has liked your post!', 1),
(44, 1, 'home/index/3?postid=78', 1618826105, 1, 'deep patel has liked your post!', 1),
(45, 1, 'home/index/3?postid=78', 1618826147, 1, 'deep patel has liked your post!', 1),
(46, 1, 'home/index/3?postid=78', 1618826469, 1, 'deep patel has liked your post!', 1),
(47, 1, 'home/index/3?postid=78', 1618826686, 1, 'deep patel has liked your post!', 1),
(48, 1, 'home/index/3?postid=78', 1618826875, 1, 'deep patel has liked your post!', 1),
(49, 1, 'home/index/3?postid=78', 1618826878, 1, 'deep patel has liked your post!', 1),
(50, 1, 'home/index/3?postid=78', 1618827421, 1, 'deep patel has liked your post!', 1),
(51, 1, 'home/index/3?postid=78', 1618827424, 1, 'deep patel has liked your post!', 1),
(52, 1, 'home/index/3?postid=78', 1618827427, 1, 'deep patel has liked your post!', 1),
(53, 1, 'home/index/3?postid=78', 1618827434, 1, 'deep patel has liked your post!', 1),
(54, 1, 'home/index/3?postid=78', 1618827455, 1, 'deep patel has liked your post!', 1),
(55, 1, 'home/index/3?postid=78', 1618827467, 1, 'deep patel has liked your post!', 1),
(56, 1, 'home/index/3?postid=78', 1618827470, 1, 'deep patel has liked your post!', 1),
(57, 1, 'home/index/3?postid=78', 1618827473, 1, 'deep patel has liked your post!', 1),
(58, 1, 'home/index/3?postid=78', 1618827492, 1, 'deep patel has liked your post!', 1),
(59, 1, 'home/index/3?postid=78', 1618827543, 1, 'deep patel has liked your post!', 1),
(60, 1, 'home/index/3?postid=78', 1618827988, 1, 'deep patel has liked your post!', 1),
(61, 1, 'home/index/3?postid=78', 1618828212, 1, 'deep patel has liked your post!', 1),
(62, 1, 'home/index/3?postid=78', 1618828224, 1, 'deep patel has liked your post!', 1),
(63, 1, 'home/index/3?postid=78', 1618828227, 1, 'deep patel has liked your post!', 1),
(64, 1, 'home/index/3?postid=78', 1618828230, 1, 'deep patel has liked your post!', 1),
(65, 1, 'home/index/3?postid=78', 1618828238, 1, 'deep patel has liked your post!', 1),
(66, 1, 'home/index/3?postid=78', 1618828241, 1, 'deep patel has liked your post!', 1),
(67, 1, 'home/index/3?postid=78', 1618828244, 1, 'deep patel has liked your post!', 1),
(68, 1, 'home/index/3?postid=78', 1618828247, 1, 'deep patel has liked your post!', 1),
(69, 1, 'home/index/3?postid=78', 1618828269, 1, 'deep patel has liked your post!', 1),
(70, 1, 'home/index/3?postid=78', 1618828272, 1, 'deep patel has liked your post!', 1),
(71, 1, 'home/index/3?postid=78', 1618828275, 1, 'deep patel has liked your post!', 1),
(72, 1, 'home/index/3?postid=78', 1618828292, 1, 'deep patel has liked your post!', 1),
(73, 1, 'home/index/3?postid=78', 1618828336, 1, 'deep patel has liked your post!', 1),
(74, 1, 'home/index/3?postid=78', 1618828345, 1, 'deep patel has liked your post!', 1),
(75, 1, 'home/index/3?postid=78', 1618828729, 1, 'deep patel has liked your post!', 1),
(76, 1, 'home/index/3?postid=78', 1618828736, 1, 'deep patel has liked your post!', 1),
(77, 1, 'home/index/3?postid=78', 1618828848, 1, 'deep patel has liked your post!', 1),
(78, 1, 'home/index/3?postid=78', 1618828855, 1, 'deep patel has liked your post!', 1),
(79, 1, 'home/index/3?postid=78', 1618829156, 1, 'deep patel has liked your post!', 1),
(80, 1, 'home/index/3?postid=78', 1618829163, 1, 'deep patel has liked your post!', 1),
(81, 1, 'home/index/3?postid=78', 1618829202, 1, 'deep patel has liked your post!', 1),
(82, 1, 'home/index/3?postid=78', 1618829207, 1, 'deep patel has liked your post!', 1),
(83, 1, 'home/index/3?postid=78', 1618829223, 1, 'deep patel has liked your post!', 1),
(84, 1, 'home/index/3?postid=78', 1618829227, 1, 'deep patel has liked your post!', 1),
(85, 1, 'home/index/3?postid=78', 1618829231, 1, 'deep patel has liked your post!', 1),
(86, 1, 'home/index/3?postid=78', 1618829235, 1, 'deep patel has liked your post!', 1),
(87, 1, 'home/index/3?postid=78', 1618829401, 1, 'deep patel has liked your post!', 1),
(88, 1, 'home/index/3?postid=78', 1618829413, 1, 'deep patel has liked your post!', 1),
(89, 1, 'home/index/3?postid=78', 1618829426, 1, 'deep patel has liked your post!', 1),
(90, 1, 'home/index/3?postid=78', 1618829435, 1, 'deep patel has liked your post!', 1),
(91, 1, 'home/index/3?postid=77', 1618829439, 1, 'deep patel has liked your post!', 1),
(92, 1, 'home/index/3?postid=77', 1618829448, 1, 'deep patel has liked your post!', 1),
(93, 1, 'home/index/3?postid=77', 1618829468, 1, 'deep patel has liked your post!', 1),
(94, 1, 'home/index/3?postid=77', 1618829525, 1, 'deep patel has liked your post!', 1),
(95, 1, 'home/index/3?postid=77', 1618830043, 1, 'deep patel has liked your post!', 1),
(96, 1, 'home/index/3?postid=77', 1618830091, 1, 'deep patel has liked your post!', 1),
(97, 1, 'home/index/3?postid=77', 1618830191, 1, 'deep patel has liked your post!', 1),
(98, 1, 'home/index/3?postid=77', 1618830216, 1, 'deep patel has liked your post!', 1),
(99, 1, 'home/index/3?postid=77', 1618830239, 1, 'deep patel has liked your post!', 1),
(100, 1, 'home/index/3?postid=77', 1618830266, 1, 'deep patel has liked your post!', 1),
(101, 1, 'home/index/3?postid=78', 1618830418, 1, 'deep patel has liked your post!', 1),
(102, 1, 'home/index/3?postid=78', 1618831109, 1, 'deep patel has liked your post!', 1),
(103, 1, 'home/index/3?postid=78', 1618831163, 1, 'deep patel has liked your post!', 1),
(104, 1, 'home/index/3?postid=78', 1618831189, 1, 'deep patel has liked your post!', 1),
(105, 1, 'home/index/3?postid=78', 1618831553, 1, 'deep patel has liked your post!', 1),
(106, 1, 'home/index/3?postid=78', 1618831679, 1, 'deep patel has liked your post!', 1),
(107, 1, 'home/index/3?postid=78', 1618831688, 1, 'deep patel has liked your post!', 1),
(108, 1, 'home/index/3?postid=78', 1618831937, 1, 'deep patel has liked your post!', 1),
(109, 1, 'home/index/3?postid=78', 1618831946, 1, 'deep patel has liked your post!', 1),
(110, 1, 'home/index/3?postid=78', 1618832143, 1, 'deep patel has liked your post!', 1),
(111, 1, 'home/index/3?postid=78', 1618832229, 1, 'deep patel has liked your post!', 1),
(112, 1, 'home/index/3?postid=78', 1618832251, 1, 'deep patel has liked your post!', 1),
(113, 1, 'home/index/3?postid=77', 1618832263, 1, 'deep patel has liked your post!', 1),
(114, 1, 'home/index/3?postid=78', 1618832296, 1, 'deep patel has liked your post!', 1),
(115, 1, 'home/index/3?postid=78', 1618832305, 1, 'deep patel has liked your post!', 1),
(116, 1, 'home/index/3?postid=78', 1618832553, 1, 'deep patel has liked your post!', 1),
(117, 1, 'home/index/3?postid=78', 1618832614, 1, 'deep patel has liked your post!', 1),
(118, 1, 'home/index/3?postid=78', 1618832618, 1, 'deep patel has liked your post!', 1),
(119, 1, 'home/index/3?postid=78', 1618832622, 1, 'deep patel has liked your post!', 1),
(120, 1, 'home/index/3?postid=78', 1618832779, 1, 'deep patel has liked your post!', 1),
(121, 1, 'home/index/3?postid=79', 1618836090, 1, 'deep patel has liked your post!', 1),
(122, 1, 'home/index/3?postid=79', 1618839078, 1, 'deep patel has liked your post!', 1),
(123, 1, 'home/index/3?postid=79', 1618894118, 1, 'deep patel has liked your post!', 1),
(124, 1, 'home/index/3?postid=76', 1618894131, 1, 'deep patel has liked your post!', 1),
(125, 1, 'home/index/3?postid=97', 1618896393, 1, 'deep patel has liked your post!', 1),
(126, 1, 'home/index/3?postid=104', 1618919120, 1, 'deep patel has liked your post!', 1),
(127, 1, 'home/index/3?postid=105', 1619009752, 1, 'deep patel has liked your post!', 1),
(128, 1, 'home/index/3?postid=105', 1619010183, 1, 'deep patel has liked your post!', 1),
(129, 1, 'home/index/3?postid=105', 1619072751, 1, 'deep patel has liked your post!', 1),
(130, 1, 'home/index/3?postid=105', 1619075405, 1, 'deep patel has liked your post!', 1),
(131, 1, 'home/index/3?postid=105', 1619075768, 1, 'deep patel has liked your post!', 1),
(132, 1, 'home/index/3?postid=105', 1619075782, 1, 'deep patel has liked your post!', 1),
(133, 1, 'home/index/3?postid=107', 1619082899, 1, 'deep patel has liked your post!', 1),
(134, 1, 'home/index/3?postid=107', 1619085174, 1, 'deep patel has liked your post!', 1),
(135, 1, 'home/index/3?postid=107', 1619085400, 1, 'deep patel has liked your post!', 1),
(136, 1, 'home/index/3?postid=107', 1619086552, 1, 'deep patel has liked your post!', 1),
(137, 1, 'home/index/3?postid=107', 1619087540, 1, 'deep patel has liked your post!', 1),
(138, 1, 'home/index/3?postid=107', 1619092013, 1, 'deep patel has liked your post!', 1),
(139, 1, 'home/index/3?postid=100', 1619157403, 1, 'deep patel has liked your post!', 1),
(140, 1, 'home/index/3?postid=107', 1619160940, 1, 'deep patel has liked your post!', 1),
(141, 1, 'home/index/3?postid=107', 1619166908, 1, 'deep patel has liked your post!', 1),
(142, 1, 'home/index/3?postid=107', 1619166916, 1, 'deep patel has liked your post!', 1),
(143, 1, 'home/index/3?postid=107', 1619166951, 1, 'deep patel has liked your post!', 1),
(144, 1, 'home/index/3?postid=107', 1619167456, 1, 'deep patel has liked your post!', 1),
(145, 1, 'home/index/3?postid=107', 1619167459, 1, 'deep patel has liked your post!', 1),
(146, 1, 'home/index/3?postid=107', 1619167460, 1, 'deep patel has liked your post!', 1),
(147, 1, 'home/index/3?postid=107', 1619167462, 1, 'deep patel has liked your post!', 1),
(148, 1, 'home/index/3?postid=107', 1619167464, 1, 'deep patel has liked your post!', 1),
(149, 1, 'home/index/3?postid=107', 1619167466, 1, 'deep patel has liked your post!', 1),
(150, 1, 'home/index/3?postid=107', 1619167469, 1, 'deep patel has liked your post!', 1),
(151, 1, 'home/index/3?postid=107', 1619167471, 1, 'deep patel has liked your post!', 1),
(152, 1, 'home/index/3?postid=107', 1619167493, 1, 'deep patel has liked your post!', 1),
(153, 1, 'home/index/3?postid=107', 1619167495, 1, 'deep patel has liked your post!', 1),
(154, 1, 'home/index/3?postid=107', 1619167497, 1, 'deep patel has liked your post!', 1),
(155, 1, 'home/index/3?postid=107', 1619167498, 1, 'deep patel has liked your post!', 1),
(156, 1, 'home/index/3?postid=107', 1619167500, 1, 'deep patel has liked your post!', 1),
(157, 1, 'home/index/3?postid=107', 1619167502, 1, 'deep patel has liked your post!', 1),
(158, 1, 'home/index/3?postid=107', 1619167714, 1, 'deep patel has liked your post!', 1),
(159, 1, 'home/index/3?postid=107', 1619167717, 1, 'deep patel has liked your post!', 1),
(160, 1, 'home/index/3?postid=107', 1619167725, 1, 'deep patel has liked your post!', 1),
(161, 1, 'home/index/3?postid=107', 1619167727, 1, 'deep patel has liked your post!', 1),
(162, 1, 'home/index/3?postid=107', 1619167728, 1, 'deep patel has liked your post!', 1),
(163, 1, 'home/index/3?postid=107', 1619167730, 1, 'deep patel has liked your post!', 1),
(164, 1, 'home/index/3?postid=107', 1619167732, 1, 'deep patel has liked your post!', 1),
(165, 1, 'home/index/3?postid=107', 1619167833, 1, 'deep patel has liked your post!', 1),
(166, 1, 'home/index/3?postid=107', 1619167838, 1, 'deep patel has liked your post!', 1),
(167, 1, 'home/index/3?postid=107', 1619167891, 1, 'deep patel has liked your post!', 1),
(168, 1, 'home/index/3?postid=107', 1619167896, 1, 'deep patel has liked your post!', 1),
(169, 1, 'home/index/3?postid=105', 1619167915, 1, 'deep patel has liked your post!', 1),
(170, 1, 'home/index/3?postid=107', 1619167981, 1, 'deep patel has liked your post!', 1),
(171, 1, 'home/index/3?postid=107', 1619167983, 1, 'deep patel has liked your post!', 1),
(172, 1, 'home/index/3?postid=107', 1619168060, 1, 'deep patel has liked your post!', 1),
(173, 1, 'home/index/3?postid=107', 1619168062, 1, 'deep patel has liked your post!', 1),
(174, 1, 'home/index/3?postid=107', 1619168175, 1, 'deep patel has liked your post!', 1),
(175, 1, 'home/index/3?postid=107', 1619168179, 1, 'deep patel has liked your post!', 1),
(176, 1, 'home/index/3?postid=107', 1619168344, 1, 'deep patel has liked your post!', 1),
(177, 1, 'home/index/3?postid=107', 1619168346, 1, 'deep patel has liked your post!', 1),
(178, 1, 'home/index/3?postid=107', 1619168446, 1, 'deep patel has liked your post!', 1),
(179, 1, 'home/index/3?postid=107', 1619168496, 1, 'deep patel has liked your post!', 1),
(180, 1, 'home/index/3?postid=103', 1619168511, 1, 'deep patel has liked your post!', 1),
(181, 1, 'home/index/3?postid=107', 1619168885, 1, 'deep patel has liked your post!', 1),
(182, 1, 'home/index/3?postid=107', 1619168942, 1, 'deep patel has liked your post!', 1),
(183, 1, 'home/index/3?postid=107', 1619168959, 1, 'deep patel has liked your post!', 1),
(184, 1, 'home/index/3?postid=107', 1619168963, 1, 'deep patel has liked your post!', 1),
(185, 1, 'home/index/3?postid=107', 1619168999, 1, 'deep patel has liked your post!', 1),
(186, 1, 'home/index/3?postid=107', 1619169004, 1, 'deep patel has liked your post!', 1),
(187, 1, 'home/index/3?postid=107', 1619169064, 1, 'deep patel has liked your post!', 1),
(188, 1, 'home/index/3?postid=107', 1619169186, 1, 'deep patel has liked your post!', 1),
(189, 1, 'home/index/3?postid=107', 1619169201, 1, 'deep patel has liked your post!', 1),
(190, 1, 'home/index/3?postid=107', 1619169814, 1, 'deep patel has liked your post!', 1),
(191, 1, 'home/index/3?postid=107', 1619169831, 1, 'deep patel has liked your post!', 1),
(192, 1, 'home/index/3?postid=107', 1619169856, 1, 'deep patel has liked your post!', 1),
(193, 1, 'home/index/3?postid=107', 1619169857, 1, 'deep patel has liked your post!', 1),
(194, 1, 'home/index/3?postid=107', 1619169865, 1, 'deep patel has liked your post!', 1),
(195, 1, 'home/index/3?postid=107', 1619169952, 1, 'deep patel has liked your post!', 1),
(196, 1, 'home/index/3?postid=107', 1619169960, 1, 'deep patel has liked your post!', 1),
(197, 1, 'home/index/3?postid=107', 1619170617, 1, 'deep patel has liked your post!', 1),
(198, 1, 'home/index/3?postid=107', 1619170641, 1, 'deep patel has liked your post!', 1),
(199, 1, 'home/index/3?postid=107', 1619170663, 1, 'deep patel has liked your post!', 1),
(200, 1, 'home/index/3?postid=107', 1619170687, 1, 'deep patel has liked your post!', 1),
(201, 1, 'home/index/3?postid=107', 1619170731, 1, 'deep patel has liked your post!', 1),
(202, 1, 'home/index/3?postid=107', 1619170917, 1, 'deep patel has liked your post!', 1),
(203, 1, 'home/index/3?postid=107', 1619170935, 1, 'deep patel has liked your post!', 1),
(204, 1, 'home/index/3?postid=107', 1619171041, 1, 'deep patel has liked your post!', 1),
(205, 1, 'home/index/3?postid=107', 1619171108, 1, 'deep patel has liked your post!', 1),
(206, 1, 'home/index/3?postid=107', 1619171126, 1, 'deep patel has liked your post!', 1),
(207, 1, 'home/index/3?postid=107', 1619171175, 1, 'deep patel has liked your post!', 1),
(208, 1, 'home/index/3?postid=107', 1619171256, 1, 'deep patel has liked your post!', 1),
(209, 1, 'home/index/3?postid=107', 1619171339, 1, 'deep patel has liked your post!', 1),
(210, 1, 'home/index/3?postid=107', 1619171394, 1, 'deep patel has liked your post!', 1),
(211, 1, 'home/index/3?postid=107', 1619171415, 1, 'deep patel has liked your post!', 1),
(212, 1, 'home/index/3?postid=107', 1619171779, 1, 'deep patel has liked your post!', 1),
(213, 1, 'home/index/3?postid=107', 1619171915, 1, 'deep patel has liked your post!', 1),
(214, 1, 'home/index/3?postid=107', 1619172107, 1, 'deep patel has liked your post!', 1),
(215, 1, 'home/index/3?postid=107', 1619172797, 1, 'deep patel has liked your post!', 1),
(216, 1, 'home/index/3?postid=107', 1619172897, 1, 'deep patel has liked your post!', 1),
(217, 1, 'home/index/3?postid=104', 1619173136, 1, 'deep patel has liked your post!', 1),
(218, 1, 'home/index/3?postid=107', 1619173397, 1, 'deep patel has liked your post!', 1),
(219, 1, 'home/index/3?postid=107', 1619173526, 1, 'deep patel has liked your post!', 1),
(220, 1, 'home/index/3?postid=107', 1619173893, 1, 'deep patel has liked your post!', 1),
(221, 1, 'home/index/3?postid=107', 1619173976, 1, 'deep patel has liked your post!', 1),
(222, 1, 'home/index/3?postid=107', 1619174108, 1, 'deep patel has liked your post!', 1),
(223, 1, 'home/index/3?postid=107', 1619174116, 1, 'deep patel has liked your post!', 1),
(224, 1, 'home/index/3?postid=107', 1619174163, 1, 'deep patel has liked your post!', 1),
(225, 1, 'home/index/3?postid=107', 1619174197, 1, 'deep patel has liked your post!', 1),
(226, 1, 'home/index/3?postid=107', 1619174328, 1, 'deep patel has liked your post!', 1),
(227, 1, 'home/index/3?postid=107', 1619174340, 1, 'deep patel has liked your post!', 1),
(228, 1, 'home/index/3?postid=107', 1619174504, 1, 'deep patel has liked your post!', 1),
(229, 1, 'home/index/3?postid=107', 1619174586, 1, 'deep patel has liked your post!', 1),
(230, 1, 'home/index/3?postid=107', 1619174648, 1, 'deep patel has liked your post!', 1),
(231, 1, 'home/index/3?postid=107', 1619174705, 1, 'deep patel has liked your post!', 1),
(232, 1, 'home/index/3?postid=107', 1619179205, 1, 'deep patel has liked your post!', 1),
(233, 1, 'home/index/3?postid=107', 1619179434, 1, 'deep patel has liked your post!', 1),
(234, 1, 'home/index/3?postid=107', 1619179444, 1, 'deep patel has liked your post!', 1),
(235, 1, 'home/index/3?postid=107', 1619179489, 1, 'deep patel has liked your post!', 1),
(236, 1, 'home/index/3?postid=107', 1619179527, 1, 'deep patel has liked your post!', 1),
(237, 1, 'home/index/3?postid=107', 1619179540, 1, 'deep patel has liked your post!', 1),
(238, 1, 'home/index/3?postid=107', 1619179973, 1, 'deep patel has liked your post!', 1),
(239, 1, 'home/index/3?postid=107', 1619180014, 1, 'deep patel has liked your post!', 1),
(240, 1, 'home/index/3?postid=107', 1619180039, 1, 'deep patel has liked your post!', 1),
(241, 1, 'home/index/3?postid=107', 1619180074, 1, 'deep patel has liked your post!', 1),
(242, 1, 'home/index/3?postid=107', 1619180113, 1, 'deep patel has liked your post!', 1),
(243, 1, 'home/index/3?postid=101', 1619180398, 1, 'deep patel has liked your post!', 1),
(244, 1, 'home/index/3?postid=99', 1619180408, 1, 'deep patel has liked your post!', 1),
(245, 1, 'home/index/3?postid=109', 1619259064, 1, 'deep patel has liked your post!', 1),
(246, 1, 'home/index/3?postid=111', 1619266727, 1, 'deep patel has liked your post!', 1),
(247, 1, 'home/index/3?postid=113', 1619415815, 1, 'deep patel has liked your post!', 1),
(248, 1, 'home/index/3?postid=113&commentid=10&replyid=11', 1619416763, 1, 'deep patel has replied to a comment you posted!', 1),
(249, 1, 'home/index/3?postid=113&commentid=10&replyid=12', 1619416768, 1, 'deep patel has replied to a comment you posted!', 1),
(250, 1, 'home/index/3?postid=113&commentid=10&replyid=13', 1619416770, 1, 'deep patel has replied to a comment you posted!', 1),
(251, 1, 'home/index/3?postid=113&commentid=10&replyid=14', 1619416772, 1, 'deep patel has replied to a comment you posted!', 1),
(252, 1, 'home/index/3?postid=113&commentid=10&replyid=15', 1619416774, 1, 'deep patel has replied to a comment you posted!', 1),
(253, 1, 'home/index/3?postid=113&commentid=10&replyid=16', 1619416776, 1, 'deep patel has replied to a comment you posted!', 1),
(254, 1, 'home/index/3?postid=113&commentid=10&replyid=17', 1619416778, 1, 'deep patel has replied to a comment you posted!', 1),
(255, 1, 'home/index/3?postid=113&commentid=10&replyid=18', 1619416780, 1, 'deep patel has replied to a comment you posted!', 1),
(256, 1, 'home/index/3?postid=113&commentid=10&replyid=19', 1619416782, 1, 'deep patel has replied to a comment you posted!', 1),
(257, 1, 'home/index/3?postid=113&commentid=10&replyid=20', 1619416784, 1, 'deep patel has replied to a comment you posted!', 1),
(258, 1, 'home/index/3?postid=113&commentid=10&replyid=21', 1619416801, 1, 'deep patel has replied to a comment you posted!', 1),
(259, 1, 'home/index/3?postid=113&commentid=10&replyid=22', 1619416840, 1, 'deep patel has replied to a comment you posted!', 1),
(260, 1, 'home/index/3?postid=113&commentid=10&replyid=23', 1619416987, 1, 'deep patel has replied to a comment you posted!', 1),
(261, 1, 'home/index/3?postid=113&commentid=10&replyid=24', 1619416989, 1, 'deep patel has replied to a comment you posted!', 1),
(262, 1, 'home/index/3?postid=144&commentid=28&replyid=29', 1619443953, 0, 'deep patel has replied to a comment you posted!', 1),
(263, 1, 'home/index/3?postid=155', 1619502477, 0, 'deep patel has liked your post!', 1),
(264, 1, 'home/index/3?postid=159', 1619512654, 0, 'deep patel has liked your post!', 1),
(265, 1, 'home/index/3?postid=167', 1619520807, 0, 'deep patel has liked your post!', 1),
(266, 1, 'home/index/3?postid=174', 1619586084, 0, 'deep patel has liked your post!', 1),
(267, 1, 'home/index/3?postid=169', 1619586105, 0, 'deep patel has liked your post!', 1),
(268, 1, 'home/index/3?postid=175', 1619586131, 0, 'deep patel has liked your post!', 1),
(269, 1, 'home/index/3?postid=156', 1619586147, 0, 'deep patel has liked your post!', 1),
(270, 1, 'home/index/3?postid=157', 1619586164, 0, 'deep patel has liked your post!', 1),
(271, 1, 'home/index/3?postid=175', 1619586370, 0, 'deep patel has liked your post!', 1),
(272, 1, 'home/index/3?postid=175', 1619586391, 0, 'deep patel has liked your post!', 1),
(273, 1, 'home/index/3?postid=175', 1619586465, 0, 'deep patel has liked your post!', 1),
(274, 1, 'home/index/3?postid=175', 1619586507, 0, 'deep patel has liked your post!', 1),
(275, 1, 'home/index/3?postid=177', 1619591143, 0, 'deep patel has liked your post!', 1),
(276, 1, 'home/index/3?postid=183', 1619694041, 0, 'dddd dddd has liked your post!', 2),
(277, 1, 'home/index/3?postid=198', 1619852753, 0, 'deep patel has liked your post!', 1),
(278, 2, 'user_settings/friend_requests', 1620041338, 0, 'd1 d2 has sent you a friend request!', 3),
(279, 3, 'user_settings/friend_requests', 1620041558, 1, 'deep bhut has sent you a friend request!', 1),
(280, 1, 'home/index', 1620041592, 0, 'd1 d2 has accepted your friend request!', 3),
(281, 1, 'home/index/3?postid=284', 1620106331, 0, 'deep bhut has liked your post!', 1),
(282, 1, 'home/index/3?postid=284', 1620106619, 0, 'deep bhut has liked your post!', 1),
(283, 3, 'home/index/3?postid=283&commentid=35', 1620106635, 0, 'deep bhut has commented on a post you are subscribed to!', 1),
(284, 1, 'home/index/3?postid=297', 1620299569, 0, 'deep bhut has liked your post!', 1),
(285, 1, 'home/index/3?postid=296', 1620372241, 0, 'deep bhut has liked your post!', 1),
(286, 3, 'home/index/3?postid=310', 1620643392, 0, 'deep bhut has liked your post!', 1),
(287, 3, 'home/index/3?postid=310', 1620643406, 0, 'deep bhut has liked your post!', 1),
(288, 3, 'home/index/3?postid=310', 1620643412, 0, 'deep bhut has liked your post!', 1),
(289, 3, 'home/index/3?postid=309&commentid=36', 1620643807, 0, 'deep bhut has commented on a post you are subscribed to!', 1),
(290, 1, 'home/index/3?postid=304', 1620647912, 0, 'deep bhut has liked your post!', 1),
(291, 1, 'home/index/3?postid=303', 1620647927, 0, 'deep bhut has liked your post!', 1),
(292, 1, 'home/index/3?postid=303', 1620647932, 0, 'deep bhut has liked your post!', 1),
(293, 1, 'home/index/3?postid=304', 1620647966, 0, 'deep bhut has liked your post!', 1),
(294, 1, 'home/index/3?postid=304', 1620647971, 0, 'deep bhut has liked your post!', 1),
(295, 1, 'home/index/3?postid=315&commentid=37&replyid=38', 1620652814, 0, 'deep bhut has replied to a comment you posted!', 1),
(296, 1, 'home/index/3?postid=309&commentid=36&replyid=40', 1620708098, 0, 'deep bhut has replied to a comment you posted!', 1),
(297, 1, 'home/index/3?postid=316&commentid=41&replyid=42', 1620708268, 0, 'deep bhut has replied to a comment you posted!', 1),
(298, 1, 'home/index/3?postid=316', 1620708289, 0, 'deep bhut has liked your post!', 1),
(299, 1, 'home/index/3?postid=301', 1620708929, 0, 'deep bhut has liked your post!', 1),
(300, 1, 'home/index/3?postid=337', 1620734119, 0, 'deep bhut has liked your post!', 1),
(301, 1, 'home/index/3?postid=331', 1620734192, 0, 'deep bhut has liked your post!', 1),
(302, 1, 'home/index/3?postid=332', 1620734603, 0, 'deep bhut has liked your post!', 1),
(303, 1, 'home/index/3?postid=331', 1620734813, 0, 'deep bhut has liked your post!', 1),
(304, 1, 'home/index/3?postid=331', 1620734987, 0, 'deep bhut has liked your post!', 1),
(305, 1, 'home/index/3?postid=331', 1620735163, 0, 'deep bhut has liked your post!', 1),
(306, 1, 'home/index/3?postid=331', 1620735202, 0, 'deep bhut has liked your post!', 1),
(307, 1, 'home/index/3?postid=335', 1620735642, 0, 'deep bhut has liked your post!', 1),
(308, 1, 'home/index/3?postid=384', 1620969268, 0, 'deep bhut has liked your post!', 1),
(309, 1, 'home/index/3?postid=383', 1620969272, 0, 'deep bhut has liked your post!', 1),
(310, 1, 'home/index/3?postid=381', 1620969274, 0, 'deep bhut has liked your post!', 1),
(311, 1, 'home/index/3?postid=387', 1620984572, 0, 'deep bhut has liked your post!', 1),
(312, 1, 'home/index/3?postid=388', 1620984627, 0, 'deep bhut has liked your post!', 1),
(313, 1, 'home/index/3?postid=385', 1620984816, 0, 'deep bhut has liked your post!', 1),
(314, 1, 'home/index/3?postid=378', 1620984825, 0, 'deep bhut has liked your post!', 1),
(315, 1, 'home/index/3?postid=377', 1620985653, 0, 'deep bhut has liked your post!', 1),
(316, 1, 'home/index/3?postid=376', 1620985657, 0, 'deep bhut has liked your post!', 1),
(317, 1, 'home/index/3?postid=377', 1621059506, 0, 'deep bhut has liked your post!', 1),
(318, 1, 'home/index/3?postid=377&commentid=3&replyid=4', 1621073820, 0, 'deep bhut has replied to a comment you posted!', 1),
(319, 1, 'home/index/3?postid=377', 1621076486, 0, 'deep bhut has liked your post!', 1),
(320, 1, 'home/index/3?postid=377', 1621076525, 0, 'deep bhut has liked your post!', 1),
(321, 1, 'home/index/3?postid=377', 1621079056, 0, 'deep bhut has liked your post!', 1),
(322, 1, 'home/index/3?postid=377', 1621079536, 0, 'deep bhut has liked your post!', 1),
(323, 1, 'home/index/3?postid=377', 1621080009, 0, 'deep bhut has liked your post!', 1),
(324, 1, 'home/index/3?postid=376', 1621417956, 0, 'deep bhut has liked your post!', 1),
(325, 2, 'home/index/3?postid=385', 1621515127, 0, 'dddd dddd has liked your post!', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `admin` int(11) NOT NULL DEFAULT '0',
  `admin_settings` int(11) NOT NULL DEFAULT '0',
  `admin_members` int(11) NOT NULL DEFAULT '0',
  `admin_payment` int(11) NOT NULL DEFAULT '0',
  `banned` int(11) NOT NULL,
  `live_chat` int(11) NOT NULL,
  `page_creator` int(11) NOT NULL,
  `page_admin` int(11) NOT NULL,
  `post_admin` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`ID`, `name`, `admin`, `admin_settings`, `admin_members`, `admin_payment`, `banned`, `live_chat`, `page_creator`, `page_admin`, `post_admin`) VALUES
(1, 'Admin', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Member Manager', 0, 0, 1, 0, 0, 0, 0, 0, 0),
(3, 'Admin Settings', 0, 1, 0, 0, 0, 0, 0, 0, 0),
(4, 'Admin Payments', 0, 0, 0, 1, 0, 0, 0, 0, 0),
(5, 'Member', 0, 0, 0, 0, 0, 1, 1, 0, 0),
(6, 'Banned', 0, 0, 0, 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role_permissions`
--

DROP TABLE IF EXISTS `user_role_permissions`;
CREATE TABLE IF NOT EXISTS `user_role_permissions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `classname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_role_permissions`
--

INSERT INTO `user_role_permissions` (`ID`, `name`, `description`, `classname`, `hook`) VALUES
(1, 'ctn_308', 'ctn_308', 'admin', 'admin'),
(2, 'ctn_309', 'ctn_309', 'admin', 'admin_settings'),
(3, 'ctn_310', 'ctn_310', 'admin', 'admin_members'),
(4, 'ctn_311', 'ctn_311', 'admin', 'admin_payment'),
(5, 'ctn_33', 'ctn_33', 'banned', 'banned'),
(6, 'ctn_430', 'ctn_431', 'site', 'live_chat'),
(7, 'ctn_432', 'ctn_435', 'page', 'page_creator'),
(8, 'ctn_433', 'ctn_436', 'page', 'page_admin'),
(9, 'ctn_434', 'ctn_437', 'page', 'post_admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_saved_posts`
--

DROP TABLE IF EXISTS `user_saved_posts`;
CREATE TABLE IF NOT EXISTS `user_saved_posts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_saved_posts`
--

INSERT INTO `user_saved_posts` (`ID`, `userid`, `postid`) VALUES
(2, 1, 109),
(3, 1, 169),
(4, 1, 295),
(5, 1, 294);

-- --------------------------------------------------------

--
-- Table structure for table `user_videos`
--

DROP TABLE IF EXISTS `user_videos`;
CREATE TABLE IF NOT EXISTS `user_videos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(500) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `file_size` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `youtube_id` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_videos`
--

INSERT INTO `user_videos` (`ID`, `file_name`, `file_type`, `userid`, `extension`, `file_size`, `timestamp`, `youtube_id`) VALUES
(1, '', '', 1, '', 0, 1619259839, 'YRNyamyBOIQ'),
(2, '', '', 1, '', 0, 1619413660, 'EfDmtjzbkh8'),
(3, '', '', 1, '', 0, 1619500154, '1AeihtlrAkU'),
(4, '', '', 1, '', 0, 1619611706, '1AeihtlrAkU'),
(5, '', '', 1, '', 0, 1619611768, '1AeihtlrAkU'),
(6, '', '', 1, '', 0, 1619611835, '1AeihtlrAkU'),
(7, '', '', 1, '', 0, 1619611932, '1AeihtlrAkU'),
(8, '', '', 1, '', 0, 1619612046, '1AeihtlrAkU'),
(9, '', '', 1, '', 0, 1619612067, '1AeihtlrAkU'),
(10, '', '', 1, '', 0, 1619612089, '1AeihtlrAkU'),
(11, '87d302814c1d9df23b750b5fb51bd251.mp4', 'video/mp4', 1, '.mp4', 2797, 1619612192, ''),
(12, '468d287ea680c094755b059a94559d77.mp4', 'video/mp4', 1, '.mp4', 2797, 1619614162, ''),
(13, '61d4329a337c92169d902adb60da748a.mp4', 'video/mp4', 1, '.mp4', 652, 1619871320, ''),
(14, '6ecde3e9c915c46a3b8d7fa58e45669c.mp4', 'video/mp4', 1, '.mp4', 652, 1619871362, ''),
(15, '2e2deccba6803bfabdfcade8a2d0d1b0.mp4', 'video/mp4', 1, '.mp4', 652, 1619877855, ''),
(16, 'd8444be19569f96e6e7bba3d03231800.mp4', 'video/mp4', 1, '.mp4', 652, 1619877857, ''),
(17, 'bb88d285d2b396ee7b1366bac13b43b4.mp4', 'video/mp4', 1, '.mp4', 652, 1619877857, ''),
(18, '609d3e8b07f318803bc133adcbf138fb.mp4', 'video/mp4', 1, '.mp4', 652, 1619877857, ''),
(19, '68f01c8dbc44549793131394e5fd5836.mp4', 'video/mp4', 1, '.mp4', 652, 1619877955, ''),
(20, '581397710920281c152f1e08a2e46785.mp4', 'video/mp4', 1, '.mp4', 652, 1619893165, ''),
(21, '0c07015bccca13386e831771662c6118.mp4', 'video/mp4', 1, '.mp4', 2797, 1619958025, ''),
(22, 'bf795da6797c5d342d9d8bdc0ddb58c0.mp4', 'video/mp4', 1, '.mp4', 2797, 1619958056, ''),
(23, 'c929fd6d2fe3cabe7ca9bedcef423b75.mp4', 'video/mp4', 1, '.mp4', 2797, 1619958089, ''),
(24, '19206a269dc237eac3b7657715072d71.mp4', 'video/mp4', 1, '.mp4', 2797, 1619958154, ''),
(25, '04650760859e592257ad96b5deeacd3e.mp4', 'video/mp4', 1, '.mp4', 652, 1620391459, ''),
(26, '684ba82cbed313b77a934ec2a1ea0665.mp4', 'video/mp4', 1, '.mp4', 31501, 1620802765, ''),
(27, '14788638a7dfb064cc01d29df71f40c7.mp4', 'video/mp4', 1, '.mp4', 31501, 1620802795, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2025 at 02:11 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u553338071_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `chat_message` longtext NOT NULL,
  `chat_date` datetime NOT NULL,
  `chat_status` int(11) NOT NULL,
  `view_stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_id`, `sender_id`, `receiver_id`, `chat_message`, `chat_date`, `chat_status`, `view_stat`) VALUES
(1, 1, 21, '', '2024-10-30 04:59:42', 1, 1),
(2, 1, 21, 'Hi', '2024-10-30 04:59:49', 1, 1),
(3, 21, 1, '', '2024-10-30 05:00:59', 1, 1),
(4, 21, 1, '<p>bai send nudes bai hahaha<img src=\"uploads/pxfuel.jpg\" style=\"width: 337px;\"></p>', '2024-10-30 05:01:57', 1, 1),
(5, 1, 22, '', '2024-10-30 09:08:54', 0, 1),
(6, 1, 22, 'hi', '2024-10-30 09:13:17', 0, 1),
(7, 24, 1, '', '2024-10-30 09:21:36', 1, 1),
(8, 1, 24, '', '2024-10-30 10:07:14', 1, 1),
(9, 1, 24, '<p>hi</p><p><br></p>', '2024-10-30 10:07:22', 1, 1),
(10, 24, 1, '<p>hi admin</p><p><br></p>', '2024-10-30 10:09:01', 1, 1),
(11, 24, 1, 'Hahahaha', '2024-11-06 07:15:11', 1, 1),
(12, 24, 29, 'Ampanget mo bai', '2024-11-15 09:36:38', 0, 1),
(13, 24, 29, 'Wat is up', '2024-11-15 09:37:36', 0, 1),
(14, 1, 25, 'hi\r\n\r\n', '2024-11-20 01:18:13', 0, 1),
(15, 1, 24, 'hello\r\n', '2024-11-22 10:26:23', 1, 1),
(16, 24, 1, 'okay', '2024-11-22 10:27:18', 1, 1),
(17, 24, 1, 'okayokay', '2024-11-22 10:27:28', 1, 1),
(18, 24, 32, 'hi', '2024-11-22 03:24:52', 0, 1),
(19, 24, 32, 'hi', '2024-11-22 03:24:52', 0, 1),
(20, 24, 32, 'hi', '2024-11-22 03:24:54', 0, 1),
(21, 1, 30, 'HI', '2024-11-22 04:08:35', 0, 1),
(22, 24, 32, 'hi', '2024-11-22 08:17:07', 0, 1),
(23, 24, 32, 'hi', '2024-11-22 08:17:09', 0, 1),
(24, 24, 32, 'hi', '2024-11-22 08:17:12', 0, 1),
(25, 24, 32, 'hi', '2024-11-22 08:17:17', 0, 1),
(26, 24, 32, 'hi', '2024-11-22 08:17:20', 0, 1),
(27, 24, 32, 'hi', '2024-11-22 08:17:22', 0, 1),
(28, 34, 24, 'hiiii\r\n\r\n', '2024-11-22 08:30:34', 1, 1),
(29, 24, 34, 'hello', '2024-11-22 08:32:08', 1, 1),
(30, 24, 34, 'kamusta?', '2024-11-22 08:32:27', 1, 1),
(31, 34, 24, 'hiiii', '2024-11-22 08:35:01', 1, 1),
(32, 34, 24, 'iloveyou', '2024-11-22 08:35:30', 1, 1),
(33, 24, 1, 'Hi admin', '2024-11-22 08:36:39', 1, 1),
(34, 34, 1, 'hiiiii', '2024-11-22 08:37:42', 1, 1),
(35, 34, 1, 'fnjvfg', '2024-11-22 08:37:51', 1, 1),
(36, 24, 1, 'Sirrrr', '2024-11-22 08:47:51', 1, 1),
(37, 33, 24, 'hi', '2024-11-22 09:04:13', 1, 1),
(38, 33, 1, 'hi maam', '2024-11-22 09:04:29', 1, 1),
(39, 33, 1, '', '2024-11-22 09:32:27', 1, 1),
(40, 1, 29, 'sed', '2024-11-22 10:16:58', 0, 0),
(41, 24, 34, '', '2024-11-22 10:17:15', 0, 0),
(42, 24, 29, '', '2024-11-22 10:25:18', 0, 0),
(43, 24, 1, '', '2024-11-22 10:25:43', 1, 1),
(44, 24, 1, '', '2024-11-22 10:26:02', 1, 1),
(45, 24, 30, 'hi', '2024-11-22 10:26:51', 0, 0),
(46, 24, 30, 'hello', '2024-11-22 10:27:17', 0, 0),
(47, 24, 30, 'love\r\n', '2024-11-22 10:27:45', 0, 0),
(48, 24, 30, 'love\r\n', '2024-11-22 10:28:16', 0, 0),
(49, 1, 29, 'cvbcvb', '2024-11-22 10:28:22', 0, 0),
(50, 24, 33, '', '2024-11-22 10:28:53', 1, 1),
(51, 24, 33, 'Hello\r\n', '2024-11-22 10:29:03', 1, 1),
(52, 1, 24, 'asdasdasd', '2024-11-22 10:30:07', 1, 1),
(53, 24, 1, 'yup', '2024-11-22 10:30:31', 1, 1),
(54, 1, 33, 'aasdsad', '2024-11-22 10:30:36', 0, 0),
(55, 24, 1, 'yup', '2024-11-22 10:31:05', 1, 1),
(56, 24, 32, 'hi', '2024-11-22 10:32:11', 0, 0),
(57, 1, 29, 'gwapoo\r\n', '2024-11-22 10:32:44', 0, 0),
(58, 1, 24, 'ngano ka', '2024-11-22 10:33:25', 1, 1),
(59, 1, 30, 'ss', '2024-11-22 10:34:11', 0, 0),
(60, 24, 29, 'Huh?', '2024-11-22 10:34:22', 0, 0),
(61, 24, 29, 'ok', '2024-11-22 10:34:40', 0, 0),
(62, 1, 30, 'cc', '2024-11-22 10:34:44', 0, 0),
(63, 1, 29, 'sds', '2024-11-22 10:35:19', 0, 0),
(64, 24, 30, 'yep', '2024-11-22 10:35:51', 0, 0),
(65, 1, 24, 'hi\r\n', '2024-11-23 05:39:36', 1, 1),
(66, 24, 1, 'hello\r\n', '2024-11-23 05:40:52', 1, 1),
(67, 1, 24, 'how are you?\r\n', '2024-11-23 05:41:43', 1, 1),
(68, 24, 1, 'fine, how about you?', '2024-11-23 05:42:04', 1, 1),
(69, 1, 24, 'Just alright..\r\n', '2024-11-23 05:42:19', 1, 1),
(70, 1, 24, 'What you doin?', '2024-11-23 05:42:26', 1, 1),
(71, 24, 1, 'Nothing', '2024-11-23 05:42:37', 1, 1),
(72, 24, 1, 'WTYD?', '2024-11-23 05:44:17', 1, 1),
(73, 1, 24, 'Huh?\r\n', '2024-11-23 05:45:14', 1, 1),
(74, 24, 1, 'i said what are you doing?', '2024-11-23 05:46:29', 1, 1),
(75, 1, 24, 'oh, nothing..\r\n', '2024-11-23 05:51:43', 1, 1),
(76, 24, 1, 'Oh ok', '2024-11-23 05:52:10', 1, 1),
(77, 1, 24, 'great', '2024-11-23 05:52:54', 1, 1),
(78, 24, 1, 'yepp', '2024-11-23 06:11:06', 1, 1),
(79, 1, 24, 'hahaha', '2024-11-23 06:11:56', 1, 1),
(80, 1, 24, 'good evening', '2024-11-23 06:55:46', 1, 1),
(81, 24, 1, 'good evening too', '2024-11-23 06:56:48', 1, 1),
(82, 24, 1, 'seee', '2024-11-25 12:33:43', 1, 1),
(83, 24, 29, '', '2024-11-26 03:26:06', 0, 0),
(84, 33, 24, 'yesyseyseysyse', '2024-11-26 07:22:12', 1, 1),
(85, 24, 33, 'hi', '2024-11-26 11:10:32', 1, 1),
(86, 24, 1, 'bai\r\n', '2024-11-27 04:38:49', 1, 1),
(87, 24, 1, 'hello, im here to report our capstone project titled, \"Allumni tracking System for Dressmnhs\", please let this project be useful in the future\r\n', '2024-11-27 04:41:07', 1, 1),
(88, 1, 24, 'what is bai', '2024-11-27 05:05:57', 1, 1),
(89, 24, 1, 'unsa mn bai', '2024-11-27 08:23:29', 1, 1),
(90, 24, 29, '', '2024-11-27 11:57:52', 0, 0),
(91, 24, 29, 'luh', '2024-11-27 11:58:00', 0, 0),
(92, 1, 24, 'hi', '2024-11-28 10:32:00', 1, 1),
(93, 24, 1, 'hello', '2024-11-28 10:32:56', 1, 1),
(94, 1, 24, 'hi', '2024-11-28 10:33:44', 1, 1),
(95, 1, 24, 'hell0', '2024-11-28 10:34:53', 1, 1),
(96, 24, 1, 'mzta na', '2024-11-28 10:35:41', 1, 1),
(97, 24, 1, 'ok lang\r\n', '2024-11-28 10:35:56', 1, 1),
(98, 1, 24, 'ahw ok\r\n', '2024-11-28 10:36:10', 1, 1),
(99, 24, 1, 'goods', '2024-11-28 10:36:20', 1, 1),
(100, 1, 24, 'goods', '2024-11-28 10:37:49', 1, 1),
(101, 1, 24, 'hi', '2024-11-28 10:48:20', 1, 1),
(102, 1, 24, 'hi', '2024-11-28 10:49:13', 1, 1),
(103, 1, 24, 'hi', '2024-11-28 10:49:24', 1, 1),
(104, 44, 1, 'Hi', '2024-11-28 02:57:01', 1, 1),
(105, 44, 1, 'Hi again', '2024-11-28 03:00:28', 1, 1),
(106, 44, 1, 'Hi again', '2024-11-28 03:00:28', 1, 1),
(107, 44, 1, '', '2024-11-28 03:00:28', 1, 1),
(108, 44, 1, 'Hi again', '2024-11-28 03:00:28', 1, 1),
(109, 44, 1, '', '2024-11-28 03:00:35', 1, 1),
(110, 1, 44, 'hello', '2024-11-28 03:03:56', 1, 1),
(111, 1, 44, 'hello', '2024-11-28 03:03:56', 1, 1),
(112, 1, 44, 'hello', '2024-11-28 03:03:56', 1, 1),
(113, 1, 44, 'hello', '2024-11-28 03:03:56', 1, 1),
(114, 1, 44, 'hello', '2024-11-28 03:04:02', 1, 1),
(115, 1, 44, 'hello', '2024-11-28 03:04:02', 1, 1),
(116, 44, 24, 'Hello', '2024-11-28 03:08:47', 1, 1),
(117, 24, 44, 'hi', '2024-11-28 03:09:00', 1, 0),
(118, 44, 24, 'Hello again ', '2024-11-28 03:09:32', 1, 1),
(119, 24, 33, 'bett', '2024-11-29 04:46:01', 1, 1),
(120, 33, 24, 'saman\r\n', '2024-11-29 04:46:50', 1, 1),
(121, 24, 33, 'wala man', '2024-11-29 04:46:57', 1, 1),
(122, 24, 33, 'zxczxczx', '2024-11-29 04:47:03', 1, 1),
(123, 33, 24, 'zxczxczxc', '2024-11-29 04:47:08', 1, 1),
(124, 33, 24, 'sup', '2024-12-09 10:53:47', 1, 1),
(125, 33, 24, 'test', '2024-12-09 10:55:35', 1, 1),
(126, 33, 24, 'hey', '2024-12-09 10:57:16', 1, 1),
(127, 33, 24, 'hanep talga', '2024-12-09 11:30:29', 1, 1),
(128, 33, 24, 'hayop sa galing', '2024-12-09 11:33:02', 1, 1),
(129, 33, 24, 'AMAZING CODING', '2024-12-09 11:35:49', 1, 1),
(130, 33, 24, 'Biglaan lang', '2024-12-09 11:38:21', 1, 1),
(131, 33, 24, 'xcxftdhf', '2024-12-09 11:41:42', 1, 1),
(132, 33, 24, 'testing now', '2024-12-09 11:47:47', 1, 1),
(133, 33, 24, 'testing later', '2024-12-09 11:48:00', 1, 1),
(134, 33, 24, 'Kamustas', '2024-12-09 11:48:11', 1, 1),
(135, 33, 24, 'hoi nag unsa ka', '2024-12-10 08:17:09', 1, 1),
(136, 1, 24, 'hi', '2024-12-17 08:13:25', 1, 1),
(137, 24, 1, 'hello\r\n', '2024-12-17 08:17:09', 1, 1),
(138, 24, 1, 'hi', '2024-12-17 09:14:29', 1, 1),
(139, 24, 1, 'Hi\r\n', '2024-12-17 09:16:43', 1, 1),
(140, 1, 24, 'hello', '2024-12-17 09:42:16', 1, 1),
(141, 24, 1, 'how are you?', '2024-12-17 09:43:04', 1, 1),
(142, 1, 24, 'good', '2024-12-17 09:43:41', 1, 1),
(143, 24, 1, 'oh okay', '2024-12-17 09:44:23', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mark_attend`
--

CREATE TABLE `mark_attend` (
  `ma_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ma_date` datetime NOT NULL,
  `ma_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mark_attend`
--

INSERT INTO `mark_attend` (`ma_id`, `post_id`, `user_id`, `ma_date`, `ma_status`) VALUES
(7, 4, 37, '2024-11-25 00:00:00', 1),
(12, 6, 24, '2024-12-18 00:00:00', 1),
(13, 4, 24, '2024-12-18 00:00:00', 1),
(14, 4, 33, '2025-01-08 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_date` datetime NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_img` longtext NOT NULL,
  `post_category` varchar(30) NOT NULL,
  `post_status` int(11) NOT NULL,
  `last_updated` date NOT NULL,
  `active_status` int(11) NOT NULL,
  `date_event` datetime DEFAULT NULL,
  `post_view` int(11) DEFAULT NULL,
  `donator_name` varchar(250) NOT NULL,
  `donation_amount` decimal(11,2) NOT NULL,
  `donation_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_date`, `post_title`, `post_content`, `post_img`, `post_category`, `post_status`, `last_updated`, `active_status`, `date_event`, `post_view`, `donator_name`, `donation_amount`, `donation_type`) VALUES
(4, '2024-11-26 11:31:18', 'ALUMNI HOMECOMING', '<p style=\"text-align: justify; \"><span style=\"font-size: 1rem;\">What an unforgettable weekend! Our annual Alumni Homecoming brought together graduates from all decades for a celebration filled with nostalgia, connection, and fun.&nbsp;</span></p><p style=\"text-align: justify; \">From the moment attendees arrived, the excitement was palpable. The welcome reception kicked things off, with alumni mingling over drinks and sharing stories of their time on campus. It was heartwarming to see familiar faces and to witness new friendships forming among different generations.</p><p style=\"text-align: justify; \">The highlight of the weekend was undoubtedly the spirited alumni game, where former athletes showcased their skills and competitive spirit. The stands were packed with enthusiastic supporters, cheering on their favorite teams and reliving those unforgettable moments from their college days.</p><p style=\"text-align: justify; \">Throughout the weekend, we offered a variety of engaging panels featuring distinguished alumni who shared their journeys and insights, inspiring the next generation of leaders. The laughter and camaraderie continued at the evening gala, where we honored outstanding alumni and celebrated their achievements.</p><p style=\"text-align: justify; \">As the sun set on our festivities, the dance floor came alive with music, laughter, and plenty of dance moves that proved our alumni still know how to celebrate!</p><p style=\"text-align: justify; \">Thank you to everyone who made this homecoming a success. Your presence and participation made it a truly special occasion. We can’t wait to do it all again next year! Until then, stay connected and keep the spirit alive!&nbsp;</p><p style=\"text-align: justify; \">Here’s to lifelong friendships and memories&nbsp;&nbsp;<font color=\"#0000ff\">#AlumniHomecoming2024 #ForeverConnected</font></p>', '672844468a074.jpg', 'Events', 1, '2024-11-26', 0, '2024-08-25 08:00:00', 158, '', 0.00, ''),
(5, '2024-11-20 12:59:16', 'Job Opening: Secondary School Teacher at Don Ruben Edera Ecleo Sr. Memorial National High School', '<p><b>Job Description:&nbsp;</b></p><p style=\"text-align: justify; \">Don Ruben Edera Ecleo Sr. Memorial National High School is looking for a dedicated Secondary School Teacher to join our team. In this role, you will be responsible for teaching students at the secondary level, creating engaging lessons, and fostering a positive learning environment. You will support students academic growth and development, ensuring that lessons align with curriculum standards and preparing them for higher education or the workforce.</p><hr><p style=\"text-align: justify; \"><b>Qualifications:&nbsp;</b></p><ul><li style=\"text-align: justify;\">25-35 years old</li><li style=\"text-align: justify;\">Teaching experience preferred but not required. New graduates are welcome to apply.</li><li style=\"text-align: justify;\">Strong communication, classroom management, and subject-specific knowledge.</li><li style=\"text-align: justify;\">Of good moral conduct.</li><li style=\"text-align: justify;\">Proficient in the use of instructional technology.</li></ul><hr><p style=\"text-align: justify;\"><b>How to apply:&nbsp;</b></p><p style=\"text-align: justify;\"><b>To apply, please submit your resume, application letter, and CV to <font color=\"#0000ff\">dreesmnhs1234@gmail.com</font> by November 25, 2024.</b></p><p style=\"text-align: justify; \"><br></p>', '673d3464ec2c3.jpeg', 'JobPost', 1, '2024-11-20', 0, NULL, 29, '', 0.00, ''),
(6, '2024-11-27 06:49:04', 'Training Opportunity for Alumni', '<p><span style=\"font-size: 1rem;\">Subject:  <b style=\"\">Excel Mastery for Professionals </b> </span></p><p><br></p><hr><p><span style=\"font-size: 1rem;\">Dear Alumni,  </span></p><p><br></p><p>We are excited to announce a valuable training session, \"<b>Excel Mastery for Professionals</b>\" aimed at enhancing your data management and analysis skills to give you an edge in your career.  </p><hr><p><br></p><p>Training Details:</p><ul><li> Topic: Advanced Microsoft Excel Techniques  </li><li> Date: December 5, 2024  </li><li> Time: 9:00 AM - 4:00 PM  </li><li> Location: Don Ruben Edera Ecleo Senior Memorial National High School, Main Auditorium  </li><li> Trainer: Mr. John Perez, Certified Microsoft Excel Expert  </li><li> Fee: Free of Charge  </li></ul><hr><p><span style=\"font-size: 1rem;\">What You’ll Gain:  </span></p><ul><li> Learn advanced Excel formulas and functions.  </li><li> Create dynamic dashboards for presentations.  </li><li> Understand data visualization tools for better decision-making.  </li><li> Receive a *Certificate of Completion* to boost your resume.  </li></ul><hr><p><span style=\"font-size: 1rem;\">How to Join:  </span></p><p>Register now at [<font color=\"#0000ff\">www.dreeschoolalumni.org/exceltraining</font>] or contact us at (123) 456-7890. The deadline for registration is December 1, 2024. Limited slots available!  </p><p><br></p><p>Don’t miss this opportunity to upskill and excel in your career.  </p><p><br></p><p>Best regards,  </p><p>SDDAA, Inc</p><p>SJBHS DMHS DREESMNHS ALUMNI ASSOCIATION, INC.</p><p>Don Ruben Edera Ecleo Senior Memorial National High School</p>', '673d408f700fd.jpg', 'Trainings', 1, '2024-11-27', 0, '2024-12-05 09:00:00', 39, '', 0.00, ''),
(7, '2024-12-19 08:36:01', 'Acknowledging the Generosity of Our Donors', '<p>We would like to thank the following individuals who generously donated in cash and items to the school:</p><p><b></b></p><p>Your contributions are truly appreciated and will have a meaningful impact on our students and programs. Thank you for your continued support and commitment to enhancing the educational experience at Don Ruben Edera Ecleo Sr. Memorial National High School.</p><p>Warm regards,<br></p><p style=\"line-height: 1;\"><b><i>SDDAA, Inc</i></b></p><p style=\"line-height: 1;\"><b><i>SJBHS DMHS DREESMNHS ALUMNI ASSOCIATION, INC.</i></b></p><p style=\"line-height: 1;\"><b><i>DON RUBEN EDERA ECLEO SR. MEMORIAL NATIONAL HIGH SCHOOL</i></b></p>', '673d46dc4c07f.jpg', 'Donations', 1, '2024-12-19', 0, NULL, 33, 'Rico L. Dalogdog', 500.00, 'Cash'),
(23, '2024-11-28 10:46:11', 'Alumni of Don Ruben Edera Ecleo Memorial High School Unite for Heartwarming Tree Planting Event', '<p>In a beautiful display of community spirit and environmental responsibility, the alumni of Don Ruben Edera Ecleo Memorial National High School recently gathered for a heartwarming tree planting event. The initiative aimed to give back to the school that shaped their futures while contributing to a greener, healthier planet.&nbsp;</p><p>Together, they planted a variety of native trees, each one symbolizing growth, unity, and the lasting impact of their education. This meaningful activity serves not only to enhance the school\'s surroundings but also to inspire future generations to take action in preserving the environment.</p><p>As these trees grow, so too will the values of care, responsibility, and collaboration that were instilled in every student at DREEMHS. A special thank you to all the alumni, faculty, and students who participated in this initiative!</p><p>Let’s continue to plant seeds of change—both for the environment and for our community.&nbsp;</p><p><br></p><p><font color=\"#0000ff\">#TreePlanting #AlumniImpact #GreenFuture #DREEMHS #GivingBack #Sustainability #EnvironmentalResponsibility</font></p>', '6745eb0ec7651.jpg', 'Events', 1, '2024-11-28', 0, '2024-11-09 06:30:00', 58, '', 0.00, ''),
(29, '2024-12-12 19:59:17', 'Lorem Ipsum Generator', '<p><span style=\"color: rgb(100, 107, 107); font-family: __fontSerif_c35935, __fontSerif_Fallback_c35935, serif; font-size: 28px;\"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</b></span></p><p><span style=\"color: rgb(100, 107, 107); font-family: __fontSerif_c35935, __fontSerif_Fallback_c35935, serif; font-size: 28px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p><ol><li><span style=\"color: rgb(100, 107, 107); font-family: __fontSerif_c35935, __fontSerif_Fallback_c35935, serif; font-size: 24px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</span></li><li><span style=\"color: rgb(100, 107, 107); font-family: __fontSerif_c35935, __fontSerif_Fallback_c35935, serif; font-size: 24px;\"> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span></li><li><span style=\"color: rgb(100, 107, 107); font-family: __fontSerif_c35935, __fontSerif_Fallback_c35935, serif; font-size: 24px;\"> consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></li><li><span style=\"color: rgb(100, 107, 107); font-family: __fontSerif_c35935, __fontSerif_Fallback_c35935, serif; font-size: 24px;\"> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span style=\"color: rgb(100, 107, 107); font-family: __fontSerif_c35935, __fontSerif_Fallback_c35935, serif; font-size: 28px;\"></span></li></ol>', '675ad015ead20.jpg', 'Trainings', 1, '2024-12-12', 0, '2024-12-31 15:58:00', 6, '', 0.00, ''),
(30, '2024-12-19 20:39:49', 'Testing', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', '67641415f0bd9.jpg', 'Donations', 1, '2024-12-19', 0, NULL, 2, '', 100000.00, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `comment_date` datetime NOT NULL,
  `comment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`comment_id`, `post_id`, `alumni_id`, `comment`, `comment_date`, `comment_status`) VALUES
(1, 4, 24, 'Nice', '2024-11-04 04:13:00', 0),
(2, 4, 24, 'This is bullshit', '2024-11-15 09:38:00', 0),
(3, 6, 24, 'hi', '2024-11-22 09:55:00', 0),
(4, 4, 24, 'mo attend', '2024-11-22 15:24:00', 0),
(5, 5, 24, 'ASA DPIT', '2024-11-22 15:59:00', 0),
(6, 5, 24, 'ASA DPIT', '2024-11-22 15:59:00', 0),
(7, 5, 24, 'ASA DPIT', '2024-11-22 15:59:00', 0),
(8, 5, 24, 'ASA DPIT', '2024-11-22 16:00:00', 0),
(9, 5, 24, 'ASA DPIT', '2024-11-22 16:00:00', 0),
(10, 5, 24, 'ASA DPIT', '2024-11-22 16:00:00', 0),
(11, 4, 1, 'SGE', '2024-11-22 16:04:00', 0),
(12, 5, 24, 'Heyy', '2024-11-24 22:11:00', 0),
(13, 7, 1, 'Thank you so much!', '2024-11-24 23:00:00', 0),
(14, 5, 24, 'wow this is amazing', '2024-11-27 16:43:00', 0),
(17, 5, 24, 'im interested', '2024-11-28 15:16:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `pl_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `pl_date` datetime NOT NULL,
  `pl_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`pl_id`, `user_id`, `post_id`, `pl_date`, `pl_status`) VALUES
(5, 24, 6, '2024-11-22 00:00:00', 0),
(6, 24, 4, '2024-11-22 00:00:00', 0),
(7, 24, 7, '2024-11-24 00:00:00', 0),
(8, 24, 5, '2024-11-27 00:00:00', 0),
(12, 24, 23, '2024-11-29 00:00:00', 0),
(13, 33, 23, '2024-11-29 00:00:00', 0),
(14, 33, 7, '2024-11-29 00:00:00', 0),
(15, 24, 29, '2024-12-17 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` longtext NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `current_emp` varchar(250) NOT NULL,
  `position_emp` varchar(50) NOT NULL,
  `year_len_emp` varchar(50) NOT NULL,
  `high_education` varchar(250) NOT NULL,
  `year_len_edu` varchar(100) NOT NULL,
  `award_education` varchar(250) NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_access` int(11) NOT NULL,
  `user_img` varchar(200) NOT NULL,
  `batch_year` varchar(30) NOT NULL,
  `mar_status` varchar(100) NOT NULL,
  `emp_status` varchar(200) NOT NULL,
  `track` varchar(250) NOT NULL,
  `specialization` varchar(250) NOT NULL,
  `nc_passer` varchar(55) NOT NULL,
  `hfis` varchar(55) NOT NULL,
  `own_bus` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `password`, `fname`, `mname`, `lname`, `contact`, `address`, `birthday`, `gender`, `current_emp`, `position_emp`, `year_len_emp`, `high_education`, `year_len_edu`, `award_education`, `user_status`, `user_access`, `user_img`, `batch_year`, `mar_status`, `emp_status`, `track`, `specialization`, `nc_passer`, `hfis`, `own_bus`) VALUES
(1, 'admin@gmail.com', 'admin', 'Admin', '', '', '09708753469', 'Purok - 6 Don Ruben San Jose, Dinagat Islands', '2003-07-01', 'Female', '', '', '', '', '', '', 1, 0, 'alumniLogo.jpg', '', '', '', '', '', '0', '0', '0'),
(24, 'pagasian@gmail.com', '1234', 'Rachillle', 'Pelominos ', 'Pagasi-an ', '09876543210', 'P-9 Don Ruben, San Jose, PDI', '2003-07-01', 'Female', 'agent', 'Registrar Staff', '1 year', 'BSIT', '', '', 1, 1, 'plumeria-flower-png-isolated-transparent-background_191095-12081.avif', '2020-2021', 'Married', 'Unemployed', 'Space Track', '', '', '', ''),
(25, 'mariandantes@gmail.com', 'marian', 'Marian', 'Rivera', 'Dantes', '09876543217', 'Tagaytay, Manila, Philippines', '1976-09-17', 'Female', 'GMA', 'Artist', '20 years', 'BSED', '2021', 'Cumlaude', 3, 1, '220px-Marian_Rivera_and_Dingdong_Dantes_LA_Press_Conference,_December_2008.jpg', '2020-2021', '', '', '', '', '0', '0', '0'),
(26, 'rico@gmail.com', 'rico123', 'Rico', 'L.', 'Dalogdog', '09433750784', 'Don Ruben, San Jose Dinagat Islands', '2018-09-06', 'Male', 'Alumancia Company', 'Head ', '2 YEARS', 'BSIT', '2014', 'BEST MAN', 3, 1, 'images (21).jpeg', '2021-2022', '', '', '', '', '0', '0', '0'),
(27, 'dasha@gmail.com', 'dasha', 'Dasha', 'Mara', 'Taran', '09123456789', 'gahau, gayai, jiyom', '2000-01-07', 'Female', 'SM Company', 'Artist/Model', '3 Years', 'BSBA', '2021', 'N/A', 3, 1, '4954132.png', '2020-2021', '', '', '', '', '0', '0', '0'),
(28, 'dashataran@gmail.com', '1234', 'Dasha', 'Mara', 'Taran', '09123456789', 'gahau, gayai, jiyom', '2000-01-07', 'Female', 'SM Company', 'Artist/Model', '3 Years', 'BSBA', '2021', 'N/A', 3, 1, '4954132.png', '2020-2021', '', '', '', '', '0', '0', '0'),
(29, 'castanares@gnail.com', '1234', 'Gerald Paul', 'B', 'Castanares', '09433750784', 'Cagdianao, PDI', '2003-10-11', 'Male', 'Alumancia Company', 'Head ', '3 Years', 'BSIT', '2021-2025', 'N/A', 4, 1, '1721971109596.jpg', '2020-2021', 'Single', '', '', '', '0', '0', '0'),
(30, 'jennierubyjane@gail.com', '1234', 'Jennie', 'Ruby', 'Jane', '09876543218', 'P-6 Don Ruben, San Jose, PDI', '1996-10-10', 'Female', 'YG ENTERTAINMENT ', 'Artist/Idol', '8 Years', 'BSHTM', '2015-2019', 'Best in Thesis; Cumlaude;', 4, 1, '1727394708814.jpg', '2014-2015', 'Single', '', '', '', '0', '0', '0'),
(31, 'francinediaz@gmail.com', 'francine', 'Francine', 'Garcia', 'Diaz', '12345678901', 'P-9 Qwerty, Klone, PDI', '2004-12-25', 'Female', 'STAR MAGIC', 'Artist', '5 years', 'BSBA', '2021-2024', 'N/A', 4, 1, '1730539734441.jpg', '2020-2021', 'Single', '', '', '', '0', '0', '0'),
(32, 'francinediaz@gmail.com', 'francine', 'Francine', 'Garcia', 'Diaz', '09876543218', 'P-9 Qwerty, Klone, PDI', '2004-12-25', 'Female', 'STAR MAGIC', 'Artist', '5 years', 'BSBA', '2021-2024', 'N/A', 4, 1, '1731237164037.jpg', '2020-2021', 'Married', '', '', '', '0', '0', '0'),
(33, 'betty@gmail.com', 'betty', 'Betty', 'C.', 'Divinagracia', '09060861456', 'P-3 San Juan', '2022-02-17', 'Female', 'DJEMC', 'Academic Librarian', '31', 'CAS ', '1996', 'LOYATY', 1, 1, 'database.png', '1991-1992', 'Married', '', '', '', '0', '0', '0'),
(34, 'Edrian@gmail.com', 'edrian', 'Ed', 'O.', 'Bantula', '0909090909', 'p-1 sta cruz san jose dinagat ilands', '1969-11-22', 'Female', 'ABS CBN', 'singer', '10', 'BSED', '1981', 'N/A', 1, 1, 'images (21).jpeg', '1991-1992', 'Single', '', '', '', '0', '0', '0'),
(35, 'sanny@gmail.com', 'sanny', 'Sanny', 'Y', 'Ligo', '091234567890', 'p2 don ruben dinagat islands', '1979-01-16', 'Male', 'SM Company', 'Manager', '50', 'BSED', '2021-2025', 'N/A', 4, 1, 'one-piece-anime-wallpaper-preview.jpg', '1990-1991', 'Married', '', '', '', '0', '0', '0'),
(36, 'Ed@gmail.com', 'ed', 'Edrian', 'O.', 'Bantula', '09123456789', 'p-1 sta cruz san jose dinagat ilands', '2002-11-05', 'Male', 'N/A', 'N/A', 'N/A', 'BSIT', '4', 'N/A', 4, 1, 'EVFI8393.JPG', '2018-2019', 'Single', '', '', '', '0', '0', '0'),
(37, 'ricky@gmail.com', 'ricky', 'Ricky', 'L.', 'Llano', '09635903705', 'p-6 Don Ruben', '1979-07-18', 'Male', 'Computer Eng.', 'Head', '4 years', 'N/A', '2012', 'N/A', 1, 1, 'photo-collage.png (2).png', '2020-2021', 'Married', '', '', '', '0', '0', '0'),
(38, 'ricky@gmail.com', 'ricky', 'Ricky', 'L.', 'Llano', '09635903705', 'p-6 Don Ruben', '1979-07-18', 'Male', 'Computer Eng.', 'Head', '4 years', 'N/A', '2012', 'N/A', 4, 1, 'photo-collage.png (2).png', '2020-2021', 'Married', '', '', '', '0', '0', '0'),
(39, 'ricky@gmail.com', 'ricky', 'Ricky', 'L.', 'Llano', '09635903705', 'p-6 Don Ruben', '1979-07-18', 'Male', 'Computer Eng.', 'Head', '4 years', 'N/A', '2012', 'N/A', 4, 1, 'photo-collage.png (2).png', '2020-2021', 'Married', '', '', '', '0', '0', '0'),
(40, 'test@test.com', 'test', 'test', 'testse', 'test', '09090909099', 'tyreysersdfsd sdf sdf sdf sdf sdf', '2014-11-26', 'Male', '', '', '', 'Batchelor of Swordsmanship Major in 3 sword Style', '2016 to 2020', 'Best Swords Man', 1, 1, '0ffbb58b-0c38-4084-ada5-96f242dde487.webp', '', 'Married', 'Self-Employed', '', '', '0', '0', '0'),
(41, 'earl@gmail.com', '1234', 'Earl Adrianne', '', 'Maribao', '09874321234', 'P-6, Dashboard, Gmail, PDI', '2003-07-07', 'Male', '', '', '', '', '', '', 4, 1, 'QRCODE_rico (1).png', '2014-2015', 'Single', 'Unemployed', '', '', '0', '0', '0'),
(42, 'jennie@gmail.com', '1234', 'Jennie', '', 'Kim', '09876543211', 'Cagdianao, PDI', '2003-07-28', 'Female', '', '', '', '', '', '', 1, 1, 'QRCODE_rico (1).png', '2020-2021', 'Single', 'Unemployed', '', '', '0', '0', '0'),
(43, 'rico@gmail.com', '1234', 'ksnjmx', '', 'gnjm', '09876543211', 'Don Ruben, San Jose Dinagat Islands', '2024-11-08', 'Female', '', '', '', '', '', '', 4, 1, 'QRCODE_Sheina (1).png', '2020-2021', 'Single', 'Unemployed', '', '', '0', '0', '0'),
(44, 'aldrinict@gmail.com', 'Qwerty1234', 'ALDRIN', 'Clutario ', 'TASONG', '8284848', 'Purok Ticgahon, Bankal, Lapu Lapu City, Cebu', '2024-12-21', 'Male', '', '', '', '', '', '', 1, 1, 'final mee.jpg', '2011-2012', 'Single', 'Employed', '', '', '0', '0', '0'),
(45, 'aldrinict@gmail.com', 'Qwerty1234', 'ALDRIN', 'Clutario ', 'TASONG', '8284848', 'Purok Ticgahon, Bankal, Lapu Lapu City, Cebu', '2024-12-21', 'Male', '', '', '', '', '', '', 4, 1, 'final mee.jpg', '2011-2012', 'Single', 'Employed', '', '', '0', '0', '0'),
(46, 'aldrinict@gmail.com', 'aldrin', 'ALDRIN', 'Clutario', 'TASONG', '09060861456', 'Purok Ticgahon, Bankal, Lapu Lapu City, Cebu', '2025-01-17', 'Female', '', '', '', '', '', '', 4, 1, 'final mee.jpg', '2018-2019', '', 'Employed', '', '', '0', '0', '0'),
(47, 'aldrinict@gmail.com', 'aldrin', 'ALDRIN', 'Clutario', 'TASONG', '09060861456', 'Purok Ticgahon, Bankal, Lapu Lapu City, Cebu', '2025-01-17', 'Female', '', '', '', '', '', '', 1, 1, 'final mee.jpg', '2018-2019', '', 'Employed', '', '', '0', '0', '0'),
(48, 'asdasdasd@asdas.com', 'qweqweqwe', 'aasdasd', 'asdasd', 'asdasdasd', '3453', 'asdasdasdasd', '2027-11-29', 'Male', '', '', '', '', '', '', 4, 1, 'istockphoto-1368965646-612x612.jpg', '2023-2024', 'Single', 'Employed', '', '', '0', '0', '0'),
(49, 'asdasd@asd.com', 'asdasdasd', 'asdasd', 'asdasd', 'asdasd', '34543', 'asdasdasd', '2024-11-29', 'Male', '', '', '', '', '', '', 4, 1, 'istockphoto-1368965646-612x612.jpg', '2023-2024', 'Married', 'Unemployed', '', '', '0', '0', '0'),
(50, 'sdfsdfsdf@asdasd.com', 'asdasdasdasd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdhghfgh', '3434234234', 'sdfsdfsdfdsf', '2024-11-29', 'Male', '', '', '', '', '', '', 4, 1, '462544507_647933711078647_6338141074811404711_n.jpg', '2022-2023', 'Married', 'Unemployed', '', '', '0', '0', '0'),
(51, 'asdasdas@asdas.com', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'asdasdasd', '3434234234', 'adasdasdasd', '2024-11-29', 'Male', '', '', '', '', '', '', 4, 1, '0ffbb58b-0c38-4084-ada5-96f242dde487.webp', '2022-2023', 'Single', 'Unemployed', '', '', '0', '0', '0'),
(52, 'asdasdgsd@asdas.com', 'dfgdfgdfg', 'asdasdasdas', 'dasdasd', 'asdasdaasd', '3453463473', 'dfsdfsdfsdf', '2007-11-29', 'Male', '', '', '', '', '', '', 4, 1, 'download (3).jpg', '2022-2023', 'Married', 'Employed', '', '', '0', '0', '0'),
(53, '234567@gmail.com', '4567', 'sdfghjk', 'sdfghj', 'sdfghjk', '1234567678', 'sdfghjk', '2007-12-17', 'Male', '', '', '', '', '', '', 4, 1, 'LORETO.Jpg', '2023-2024', 'Single', 'Unemployed', '', '', '0', '0', '0'),
(54, 'testtest@test.com', 'paspaspas', 'tests', 'teststd', 'testsdsdfs', '9062248536', 'asdasdga SASD AG ASADASDASD', '2007-12-12', 'Male', '', '', '', '', '', '', 4, 1, '462544507_647933711078647_6338141074811404711_n.jpg', '2023-2024', 'Married', '', '', '', '', '', ''),
(55, 'rico@gmail.com', 'rico1', 'Rico', 'L.', 'Dalogdog', '9708753469', 'P-6 Don Ruben, San Jose, PDI', '1999-12-19', 'Male', '', '', '', '', '', '', 1, 1, '1721974116460.jpg', '2017-2018', 'Single', '', '', '', '', '', ''),
(56, 'gerald@gmail.com', 'gerald', 'Gerald Paul', '', 'Castanares', '9708753469', 'P-6 Don Ruben, San Jose, PDI', '2006-03-23', 'Male', '', '', '', '', '', '', 1, 1, '7.png', '2019-2020', 'Single', '', '', '', '', '', ''),
(57, 'edrian@gmail.com', 'edrian', 'Edrian', 'O.', 'Bantula', '9708753469', 'P-1 Santa Cruz, San Jose, PDI', '2007-12-19', 'Male', '', '', '', '', '', '', 1, 1, '4.png', '2018-2019', 'Single', '', '', '', '', '', ''),
(58, 'aldrinict@gmail.com', '123456', 'aaaa', 'bbb', 'ccc', '9064621234', 'Purok Ticgahon, Bankal, Lapu Lapu City, Cebu', '2008-01-14', 'Male', '', '', '', '', '', '', 1, 1, 'DOH_SEAL_-_FULL_COLOR.png', '2023-2024', 'Single', '', '', '', '', '', ''),
(59, 'rico@gmail.com', 'rico', 'Rico', 'L.', 'Dalogdog', '9708753469', 'P-6 Odok, Don Ruben, San Jose, PDI ', '2002-09-16', 'Male', '', '', '', '', '', '', 1, 1, 'IMG_20241006_172934_582.jpg', '2018-2019', 'Single', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `mark_attend`
--
ALTER TABLE `mark_attend`
  ADD PRIMARY KEY (`ma_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`pl_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `mark_attend`
--
ALTER TABLE `mark_attend`
  MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `pl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

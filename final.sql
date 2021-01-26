-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 09:02 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `title_course` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `price` varchar(100) NOT NULL,
  `information` varchar(2000) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `title_course`, `image`, `date_upload`, `price`, `information`, `level`) VALUES
(4, 'Elementary Course\r\n\r\n', 'https://rakuraku.edu.vn/wp-content/uploads/2019/05/N3-bg-1.png', '2020-12-07 04:15:29', '1.750.000 VNĐ', '- Learn Grammar on a friendly, easy-to-understand slide system.<br>\r\n- 100% of teachers with N1 and N2 qualifications used to study and work in Japan\r\nClasses up to 12 students, ensuring the best learning quality <br>\r\n- Receive 20% discount for all study abroad programs, jobs<br>\r\n- To participate in the test at the center. Free re-study if the exam does not pass. <br>\r\n- Free account for study + JLPT online preparation <br>', '(Level N5, N4)'),
(5, 'Intermediate Course\r\n', 'https://rakuraku.edu.vn/wp-content/uploads/2019/01/N4-bg-1.png', '2020-12-07 04:14:59', '4.500.000 VNĐ', '- Teacher level N1<br>\r\n- Master all N3, N2 knowledge and effective exam skills. Participate in the test at the center with JLPT exam difficulty.<br>\r\n- Maximum of 12 classrooms, ensuring the best learning quality<br>\r\n- Textbooks N3, N2 exclusively compiled based on analysis of JLPT problems each year.<br>\r\n\r\n- Achievement rate of previous courses JLPT N3 is 90%, JLPT N2 is 70%.', '(Level N3, N2)'),
(6, 'Expedited Course\r\n', 'https://rakuraku.edu.vn/wp-content/uploads/2019/01/N5-bg-1.png', '2020-12-07 04:14:28', '4.900.000 VNĐ', '- Study 5 sessions / week (3 hours each session). Class for subjects: study abroad in Japan, Japanese labor export<br>\r\n- Teachers at level N1, N2 have had experience studying and working in Japan.<br>\r\nClasses up to 12 students, ensuring the best learning quality.<br>\r\n- Discount 20% if registering for study abroad program, job.<br>\r\n- Refund if not pass JLPT.<br>\r\n- Give free study account + practice JLPT online 06 months.<br>', '(Level N5, N4)');

-- --------------------------------------------------------

--
-- Table structure for table `course_new`
--

CREATE TABLE `course_new` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` text NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_new`
--

INSERT INTO `course_new` (`id`, `title`, `image`, `info`) VALUES
(1, 'TỔNG HỢP DANH TỪ HÀNG KA', 'https://rakuraku.edu.vn/wp-content/uploads/2020/10/0-2.png', 'Cùng Dekiru nihogo tổng hợp lại các danh từ ở hàng Ka nhé! <img src=\"https://img.icons8.com/emoji/48/000000/star-struck.png\"/><img src=\"https://img.icons8.com/emoji/48/000000/star-struck.png\"/><img src=\"https://img.icons8.com/emoji/48/000000/star-struck.png\"/>'),
(2, 'TỪ VỰNG THÚ VỊ TRONG TIẾNG NHẬT', 'https://rakuraku.edu.vn/wp-content/uploads/2020/10/0-1.png', 'Cùng Dekiru Nihongo khám phá 10 cặp từ vựng cực kỳ thú vị sau nhé!  \r\n<img src=\"https://img.icons8.com/emoji/48/000000/open-hands-emoji.png\"/>'),
(3, 'Phương tiện giao thông', 'https://storage.dekiru.vn//Data/2017/02/15/goixe-636227775532714989.jpg?w=255&h=170&mode=crop', ''),
(4, 'Chào hỏi khi gặp nhau', 'https://storage.dekiru.vn//Data/2016/12/03/chaobuoitrua-636163695774922490.jpg?w=255&h=170&mode=crop', ''),
(5, 'Các hiện tượng tự nhiên trong tiếng Nhật<img src=\"https://img.icons8.com/emoji/48/000000/cloud-with-lightning-and-rain.png\"/>', 'https://storage.dekiru.vn/Data/2017/10/20/thoitiet-636440862672588223.jpg?w=255&h=170&mode=crop', ''),
(6, 'Các địa danh nổi tiếng trên thế giới', 'https://storage.dekiru.vn/Data/2017/06/12/dulich-thai-636328727077918133.png?w=255&h=170&mode=crop', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name_categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_slide`
--

CREATE TABLE `news_slide` (
  `id` int(11) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_slide`
--

INSERT INTO `news_slide` (`id`, `property_name`, `property_value`) VALUES
(1, 'slides_topbanner', '[{\"title\":\"The leading website for learning Japanese online in VietNam\",\"description\":\"Dekiru online Japanese learning website is fully integrated with all information, knowledge and skills to help you conquer Japanese perfectly.\",\"button_link\":\"\",\"button_text\":\"\",\"slide_image\":\"http:\\/\\/localhost:8888\\/Project2\\/uploads\\/banner5.jpg\"},{\"title\":\"Learning Japanese is funny\",\"description\":\"Japanese is one of the most difficult languages \\u200b\\u200bin the world. Dekiru is born with the desire to make learning Japanese easier and more enjoyable through the application of technology in teaching.\",\"button_link\":\"\",\"button_text\":\"\",\"slide_image\":\"http:\\/\\/localhost:8888\\/Project2\\/uploads\\/Hoa-anh-\\u0111\\u00e0o-Nh\\u1eadt-B\\u1ea3n-.jpg\"},{\"title\":\"JAPANESE EASY TO LEARN\",\"description\":\"Dekiru provides a complete and comprehensive knowledge system: easy to learn, easy to understand, and easy to remember. Suitable for all ages who want to learn and learn Japanese.\",\"button_link\":\"\",\"button_text\":\"\",\"slide_image\":\"http:\\/\\/localhost:8888\\/Project2\\/uploads\\/banner2.jpg\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username_new` varchar(255) NOT NULL,
  `email_new` varchar(255) NOT NULL,
  `password_new` varchar(255) NOT NULL,
  `repassword_new` varchar(255) NOT NULL,
  `reset_password_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username_new`, `email_new`, `password_new`, `repassword_new`, `reset_password_key`) VALUES
(8, 'bin', 'luxurydemon123@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b', ''),
(9, 'bin123', 'luxurydemon123@gmail.com', '123456789', '123456789', ''),
(10, 'taideptrai', 'bintk123@gmail.com', '123456', '123456', ''),
(11, 'hiep1998', 'hiep1998@gmail.com', '123456789', '123456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup_offline`
--

CREATE TABLE `signup_offline` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lichhoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `signup_offline`
--

INSERT INTO `signup_offline` (`id`, `tenkh`, `email`, `sdt`, `lichhoc`) VALUES
(1, 'nguyen van a', 'A@gmail.com', '0949983492', 'Evening class'),
(2, 'nguyen van a', 'A@gmail.com', '0949983492', 'Afternoon class'),
(3, 'nguyen van a', 'A@gmail.com', '0949983492', 'Evening class'),
(4, 'nguyen van a', 'A@gmail.com', '0949983492', 'Afternoon class'),
(5, 'Lê Thành Tài', 'luxurydemon123@gmail.com', '0949983492', 'Evening class'),
(6, 'Lê Thành Tài', 'luxurydemon123@gmail.com', '0949983492', 'Afternoon class'),
(7, 'Nguyễn Văn Tiền', 'tiendeptrai123@gmail.com', '098497979378', 'Afternoon class'),
(8, 'Nguyễn Văn Tiền', 'tiendeptrai123@gmail.com', '0993849489238', 'Afternoon class'),
(9, 'Nguyễn Văn Hậu', 'Haunguyen@gmail.com', '0123456789', 'Evening class'),
(10, 'Lưu Văn Trung Hiếu', 'HieuLuu@gmail.com', '0949983492', 'Afternoon class');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentname`, `gender`, `course`, `email`, `date`, `image`) VALUES
(3, 'Lê Thành Tài123', 'Male', 'N5', 'luxurydemon123@gmail.com', '2020-12-23', 'http://localhost:8888/Project2/uploads/studentavatar.jpg'),
(4, 'nguyen van B', 'Male', 'N4', 'luxurydemon123@gmail.com', '2020-12-09', 'http://localhost:8888/Project2/uploads/student/tien-duc.png'),
(5, 'Lưu Văn Trung Hiếu', 'Male', 'N5', 'HieuLuu@gmail.com', '2020-12-23', 'http://localhost:8888/Project2/uploads/student/dino-studio-anh-vien-cho-be-va-gia-dinh-317623.jpg'),
(6, 'Nguyễn Mai Trúc', 'Female', 'N3', 'MaiTruc@gmail.com', '2020-12-23', 'http://localhost:8888/Project2/uploads/student/0d68523b0481d68304da70f4dad00980.jpg'),
(7, 'Nguyễn Văn Hậu', 'Male', 'N2', 'Haunguyen@gmail.com', '2020-12-16', 'http://localhost:8888/Project2/uploads/student/tiem-chup-anh-the-lay-ngay-dep-nhat-pleiku-gia-lai-chu-de-da-duoc-nhan-tran-minh-phuong-318152.jpg'),
(8, 'Nguyễn Như Quỳnh', 'Female', 'N5', 'nhuquynh23@gmail.com', '2020-12-22', 'http://localhost:8888/Project2/uploads/student/anh-the.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_json`
--

CREATE TABLE `tb_json` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `data` text NOT NULL,
  `desct` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_json`
--

INSERT INTO `tb_json` (`id`, `type`, `data`, `desct`) VALUES
(1, 'hotline', '[]', 'Save hotline'),
(2, 'address', '[]', 'address');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name_teacher` varchar(255) NOT NULL,
  `age_teacher` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `linkfb` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name_teacher`, `age_teacher`, `phonenumber`, `avatar`, `linkfb`, `description`) VALUES
(8, 'Sasuke', '26', '84108479237', 'http://localhost:8888/Project2/uploads/sasuke.jpg', 'fb.com/abc', 'よろしくお願いいたします。'),
(9, 'Hirumuta Makoto', '29', '097493783', 'http://localhost:8888/Project2/uploads/tomo.jpg', 'https://www.facebook.com/abcxyz', '私は日本でSpeech - Language Pathologistとしてリハビリテーションを行っています。趣味は海外旅行、筋力トレーニングです。よろしくお願いします。????????????'),
(10, 'Thy Japan', '28', '097347987134', 'http://localhost:8888/Project2/uploads/13100963_10205529714994091_3328530946096358265_n.jpg', 'https://www.facebook.com/thyJapan', 'Thy Japan has 6 years working and studying experience in Japan, JLPT ...\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `course_new`
--
ALTER TABLE `course_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_slide`
--
ALTER TABLE `news_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_offline`
--
ALTER TABLE `signup_offline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_json`
--
ALTER TABLE `tb_json`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_new`
--
ALTER TABLE `course_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_slide`
--
ALTER TABLE `news_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `signup_offline`
--
ALTER TABLE `signup_offline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_json`
--
ALTER TABLE `tb_json`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

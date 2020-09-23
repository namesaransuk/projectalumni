-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 05:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL COMMENT 'ไอดี',
  `a_h_number` varchar(10) NOT NULL COMMENT 'บ้านเลขที่',
  `a_home` varchar(255) NOT NULL COMMENT 'หมู่บ้าน',
  `a_road` varchar(255) NOT NULL COMMENT 'ถนน',
  `a_zone` varchar(255) NOT NULL COMMENT 'ตำบล',
  `a_district` varchar(255) NOT NULL COMMENT 'อำเภอ',
  `a_province` varchar(255) NOT NULL COMMENT 'จังหวัด',
  `a_code` varchar(5) NOT NULL COMMENT 'รหัสไปรษณีย์',
  `a_h_phone` varchar(15) NOT NULL COMMENT 'โทรศัพท์บ้าน',
  `a_phone` varchar(10) NOT NULL COMMENT 'โทรศัพท์มือถือ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `a_h_number`, `a_home`, `a_road`, `a_zone`, `a_district`, `a_province`, `a_code`, `a_h_phone`, `a_phone`) VALUES
(1, '21', '2', 'dfsdfsdf', 'sdfsdfsdf', 'sdfsdf', 'ราชบุรี', '70000', '-', '0966957754'),
(2, '32', '7', 'nseuf', 'weffwe', 'wefwef', 'ระยอง', '17954', '-', '0899999999');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL COMMENT 'ไอดี',
  `h_type` varchar(255) NOT NULL,
  `h_workplace` varchar(255) NOT NULL COMMENT 'สถานที่ทำงาน',
  `h_h_home` varchar(255) NOT NULL COMMENT 'บ้านเลขที่',
  `h_home` varchar(255) NOT NULL COMMENT 'หมู่บ้าน',
  `h_road` varchar(255) NOT NULL COMMENT 'ถนน',
  `h_zone` varchar(255) NOT NULL COMMENT 'ตำบล',
  `h_district` varchar(255) NOT NULL COMMENT 'อำเภอ',
  `h_province` varchar(255) NOT NULL COMMENT 'จังหวัด',
  `h_postal` varchar(255) NOT NULL COMMENT 'รหัสไปร์ษณีย์',
  `h_h_phone` varchar(255) NOT NULL COMMENT 'โทรศัพท์บ้าน',
  `h_phone` varchar(255) NOT NULL COMMENT 'โทรศัพท์มือถือ',
  `h_position` varchar(255) NOT NULL COMMENT 'ตำแหน่ง',
  `h_salary` varchar(255) NOT NULL COMMENT 'เงินเดือน',
  `h_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `h_type`, `h_workplace`, `h_h_home`, `h_home`, `h_road`, `h_zone`, `h_district`, `h_province`, `h_postal`, `h_h_phone`, `h_phone`, `h_position`, `h_salary`, `h_email`) VALUES
(1, 'ไม่ต้องการระบุ', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'ปัจจุบันทำงาน', 'ทุ่งขวาง', '32', '8', 'ีทกดทหฟก', 'หกดิี่หกาด', 'หำไหย่', 'ตราด', '796521', '-', '0899999999', 'ติดคุก', 'น้อยกว่า 9,000', 'rgerger@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `ID_provinces` int(11) NOT NULL,
  `provin_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`ID_provinces`, `provin_name`) VALUES
(1, 'กรุงเทพมหานคร'),
(2, 'สมุทรปราการ'),
(3, 'นนทบุรี'),
(4, 'ปทุมธานี'),
(5, 'พระนครศรีอยุธยา'),
(6, 'อ่างทอง'),
(7, 'ลพบุรี'),
(8, 'สิงห์บุรี'),
(9, 'ชัยนาท'),
(10, 'สระบุรี'),
(11, 'ชลบุรี'),
(12, 'ระยอง'),
(13, 'จันทบุรี'),
(14, 'ตราด'),
(15, 'ฉะเชิงเทรา'),
(16, 'ปราจีนบุรี'),
(17, 'นครนายก'),
(18, 'สระแก้ว'),
(19, 'นครราชสีมา'),
(20, 'บุรีรัมย์'),
(21, 'สุรินทร์'),
(22, 'ศรีสะเกษ'),
(23, 'อุบลราชธานี'),
(24, 'ยโสธร'),
(25, 'ชัยภูมิ'),
(26, 'อำนาจเจริญ'),
(27, 'หนองบัวลำภู'),
(28, 'ขอนแก่น'),
(29, 'อุดรธานี'),
(30, 'เลย'),
(31, 'หนองคาย'),
(32, 'มหาสารคาม'),
(33, 'ร้อยเอ็ด'),
(34, 'กาฬสินธุ์'),
(35, 'สกลนคร'),
(36, 'นครพนม'),
(37, 'มุกดาหาร'),
(38, 'เชียงใหม่'),
(39, 'ลำพูน'),
(40, 'ลำปาง'),
(41, 'อุตรดิตถ์'),
(42, 'แพร่'),
(43, 'น่าน'),
(44, 'พะเยา'),
(45, 'เชียงราย'),
(46, 'แม่ฮ่องสอน'),
(47, 'นครสวรรค์'),
(48, 'อุทัยธานี'),
(49, 'กำแพงเพชร'),
(50, 'ตาก'),
(51, 'สุโขทัย'),
(52, 'พิษณุโลก'),
(53, 'พิจิตร'),
(54, 'เพชรบูรณ์'),
(55, 'ราชบุรี'),
(56, 'กาญจนบุรี'),
(57, 'สุพรรณบุรี'),
(58, 'นครปฐม'),
(59, 'สมุทรสาคร'),
(60, 'สมุทรสงคราม'),
(61, 'เพชรบุรี'),
(62, 'ประจวบคีรีขันธ์'),
(63, 'นครศรีธรรมราช'),
(64, 'กระบี่'),
(65, 'พังงา'),
(66, 'ภูเก็ต'),
(67, 'สุราษฎร์ธานี'),
(68, 'ระนอง'),
(69, 'ชุมพร'),
(70, 'สงขลา'),
(71, 'สตูล'),
(72, 'ตรัง'),
(73, 'พัทลุง'),
(74, 'ปัตตานี'),
(75, 'ยะลา'),
(76, 'นราธิวาส'),
(77, 'บึงกาฬ');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `s_id` int(11) NOT NULL,
  `s_work` varchar(255) NOT NULL,
  `s_empty` varchar(255) NOT NULL,
  `s_none` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_tname` varchar(100) NOT NULL,
  `u_fname` varchar(100) NOT NULL,
  `u_lname` varchar(100) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_std` int(11) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_gen` int(11) NOT NULL,
  `u_faculty` varchar(100) NOT NULL,
  `u_major` varchar(255) NOT NULL,
  `u_year` int(11) NOT NULL,
  `u_fb` varchar(255) NOT NULL COMMENT 'เฟสบุค',
  `u_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_tname`, `u_fname`, `u_lname`, `u_email`, `u_std`, `u_pass`, `u_gen`, `u_faculty`, `u_major`, `u_year`, `u_fb`, `u_picture`) VALUES
(1, 'นางสาว', 'ปราณี', 'ปราณีต', 'namesaransuk@gmail.com', 614259047, '12345678', 12, 'คณะวิทยาศาสตร์และเทคโนโลยี', 'วิศวกรรมซอฟต์แวร์', 2561, 'Pranee Praneed', 'picpost-1_03-Jul-2019_17-05.jpeg'),
(2, 'นาย', 'เจษฎากร', 'โสดา', 'beer@hotmail.com', 6145896, '12345678', 5, 'คณะวิทยาศาสตร์และเทคโนโลยี', 'เรื่องของกู', 2538, 'beer beer', 'images.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`ID_provinces`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดี', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดี', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `ID_provinces` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

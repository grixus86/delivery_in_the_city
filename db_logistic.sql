-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2021 lúc 08:03 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_logistic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'adminadminadmin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(155) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `district`
--

INSERT INTO `district` (`id`, `district_name`, `time_stamp`) VALUES
(1, 'Quận Thanh Khê', '2020-12-28 10:18:41'),
(2, 'Quận Sơn Trà', '2020-12-28 10:18:41'),
(3, 'Quận Ngũ Hành Sơn', '2020-12-28 10:18:41'),
(4, 'Quận Liên Chiểu', '2020-12-28 10:18:41'),
(5, 'Quận Hải Châu', '2020-12-28 10:18:41'),
(6, 'Quận Cẩm Lệ', '2020-12-28 10:18:41'),
(7, 'Huyện Hòa Vang', '2020-12-28 10:18:41'),
(8, 'Huyện Hoàng Sa', '2020-12-28 10:18:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `address`, `phone`, `password`) VALUES
(1, 'Nguyễn Xuân Thịnh', 'c7sboysga@gmail.com', 'KTX khoa công nghệ thông tin và truyển thông', '0931381229', 'abcd1234'),
(2, 'Nguyễn Xuân Thịnh', 'user@gmail.com', 'KTX khoa công nghệ thông tin và truyển thông', '0931381229', '1234!@#$'),
(3, 'Nguyễn Xuân Thịnh', 'user1@gmail.com', 'KTX khoa công nghệ thông tin và truyển thông', '0931381229', 'abcd1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price_logistic`
--

CREATE TABLE `price_logistic` (
  `id` int(11) NOT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_from` int(11) NOT NULL,
  `to_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_to` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `price_logistic`
--

INSERT INTO `price_logistic` (`id`, `from_name`, `id_from`, `to_name`, `id_to`, `price`) VALUES
(1, 'Quận Cẩm Lệ', 0, 'Quận Cẩm Lệ', 0, 25000),
(2, 'Quận Cẩm Lệ', 0, 'Quận Cẩm Lệ', 1, 30000),
(3, 'Quận Cẩm lệ', 0, 'Quận Cẩm lệ', 2, 210000),
(4, 'Quận Cẩm lệ', 0, 'Quận Cẩm lệ', 3, 22000),
(5, 'Quận Cẩm lệ', 0, 'Quận Cẩm lệ', 4, 23000),
(6, 'Quận Cẩm lệ', 0, 'Quận Cẩm lệ', 5, 24000),
(7, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 0, 29000),
(8, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 1, 30000),
(9, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 2, 20000),
(10, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 3, 21000),
(11, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 4, 22000),
(12, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 5, 23000),
(13, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 6, 24000),
(14, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 7, 25000),
(15, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 8, 26000),
(16, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 9, 27000),
(17, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 10, 28000),
(18, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 11, 29000),
(19, 'Quận Cẩm lệ', 0, 'Quận Hải Châu', 12, 30000),
(20, 'Quận Cẩm lệ', 0, 'Quận Liên Chiểu', 0, 21000),
(21, 'Quận Cẩm lệ', 0, 'Quận Liên Chiểu', 1, 22000),
(22, 'Quận Cẩm lệ', 0, 'Quận Liên Chiểu', 2, 23000),
(23, 'Quận Cẩm lệ', 0, 'Quận Liên Chiểu', 3, 24000),
(24, 'Quận Cẩm lệ', 0, 'Quận Liên Chiểu', 4, 25000),
(25, 'Quận Cẩm lệ', 0, 'Quận Ngũ Hành Sơn', 0, 26000),
(26, 'Quận Cẩm lệ', 0, 'Quận Ngũ Hành Sơn', 1, 27000),
(27, 'Quận Cẩm lệ', 0, 'Quận Ngũ Hành Sơn', 2, 28000),
(28, 'Quận Cẩm lệ', 0, 'Quận Ngũ Hành Sơn', 3, 29000),
(29, 'Quận Cẩm lệ', 0, 'Quận Sơn Trà', 0, 30000),
(30, 'Quận Cẩm lệ', 0, 'Quận Sơn Trà', 1, 21000),
(31, 'Quận Cẩm lệ', 0, 'Quận Sơn Trà', 2, 22000),
(32, 'Quận Cẩm lệ', 0, 'Quận Sơn Trà', 3, 23000),
(33, 'Quận Cẩm lệ', 0, 'Quận Sơn Trà', 4, 24000),
(34, 'Quận Cẩm lệ', 0, 'Quận Sơn Trà', 5, 25000),
(35, 'Quận Cẩm lệ', 0, 'Quận Thanh Khê', 0, 26000),
(36, 'Quận Cẩm lệ', 0, 'Quận Thanh Khê', 1, 27000),
(37, 'Quận Cẩm lệ', 0, 'Quận Thanh Khê', 2, 28000),
(38, 'Quận Cẩm lệ', 0, 'Quận Thanh Khê', 3, 29000),
(39, 'Quận Cẩm lệ', 0, 'Quận Thanh Khê', 4, 30000),
(40, 'Quận Cẩm lệ', 0, 'Quận Thanh Khê', 5, 21000),
(41, 'Quận Cẩm lệ', 0, 'Quận Thanh Khê', 6, 22000),
(42, 'Quận Cẩm lệ', 0, 'Quận Thanh Khê', 7, 23000),
(43, 'Quận Cẩm lệ', 0, 'Quận Thanh Khê', 8, 24000),
(44, 'Quận Cẩm lệ', 0, 'Quận Thanh Khê', 9, 25000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price_ship`
--

CREATE TABLE `price_ship` (
  `id` int(11) NOT NULL,
  `ward` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `wardto` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `money` float NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `price_ship`
--

INSERT INTO `price_ship` (`id`, `ward`, `wardto`, `money`, `from`, `to`) VALUES
(22, '29', '11', 21000, 'Phường Hải Châu I', 'Phường An Hải Bắc'),
(23, '29', '12', 22000, 'Phường Hải Châu I', 'Phường An Hải Đông'),
(24, '29', '13', 23000, 'Phường Hải Châu I', 'Phường An Hải Tây'),
(25, '29', '7', 24000, 'Phường Hải Châu I', 'Phường An Khê'),
(26, '29', '27', 25000, 'Phường Hải Châu I', 'Phường Bình Hiên'),
(27, '29', '28', 26000, 'Phường Hải Châu I', 'Phường Bình Thuận'),
(28, '29', '4', 27000, 'Phường Hải Châu I', 'Phường Chính Gián'),
(29, '29', '30', 28000, 'Phường Hải Châu I', 'Phường Hải Châu II'),
(30, '29', '43', 29000, 'Phường Hải Châu I', 'Phường Hòa An'),
(31, '29', '56', 30000, 'Phường Hải Châu I', 'Phường Hòa Bắc'),
(32, '29', '31', 21000, 'Phường Hải Châu I', 'Phường Hòa Cường Bắc'),
(33, '29', '32', 22000, 'Phường Hải Châu I', 'Phường Hòa Cường Nam\r\n'),
(34, '29', '20', 23000, 'Phường Hải Châu I', 'Phường Hòa Hải'),
(35, '29', '26', 24000, 'Phường Hải Châu I', 'Phường Hoà Hiệp Bắc'),
(36, '29', '25', 25000, 'Phường Hải Châu I', 'Phường Hòa Hiệp Nam'),
(37, '29', '24', 26000, 'Phường Hải Châu I', 'Phường Hoà Khánh Bắc'),
(38, '29', '23', 27000, 'Phường Hải Châu I', 'Phường Hòa Khánh Nam'),
(39, '29', '8', 28000, 'Phường Hải Châu I', 'Phường Hoà Khê'),
(40, '29', '22', 29000, 'Phường Hải Châu I', 'Phường Hòa Minh'),
(41, '29', '44', 30000, 'Phường Hải Châu I', 'Phường Hòa Phát'),
(42, '29', '21', 21000, 'Phường Hải Châu I', 'Phường Hòa Quý'),
(43, '29', '41', 22000, 'Phường Hải Châu I', 'Phường Hòa Thọ Đông'),
(44, '29', '42', 23000, 'Phường Hải Châu I', 'Phường Hòa Thọ Tây'),
(45, '29', '33', 24000, 'Phường Hải Châu I', 'Phường Hòa Thuận Đông'),
(46, '29', '34', 25000, 'Phường Hải Châu I', 'Phường Hòa Thuận Tây'),
(47, '29', '45', 26000, 'Phường Hải Châu I', 'Phường Hòa Xuân'),
(48, '29', '19', 27000, 'Phường Hải Châu I', 'Phường Khuê Mỹ'),
(49, '29', '40', 28000, 'Phường Hải Châu I', 'Phường Khuê Trung'),
(50, '29', '14', 29000, 'Phường Hải Châu I', 'Phường Mân Thái'),
(51, '29', '18', 30000, 'Phường Hải Châu I', 'Phường Mỹ An'),
(52, '29', '36', 21000, 'Phường Hải Châu I', 'Phường Phước Ninh'),
(53, '29', '5', 22000, 'Phường Hải Châu I', 'Phường Tam Thuận'),
(54, '29', '2', 23000, 'Phường Hải Châu I', 'Phường Tân Chính'),
(55, '29', '3', 24000, 'Phường Hải Châu I', 'Phường Thạc Gián'),
(56, '29', '37', 25000, 'Phường Hải Châu I', 'Phường Thạch Thang'),
(57, '29', '38', 26000, 'Phường Hải Châu I', 'Phường Thanh Bình'),
(58, '29', '9', 27000, 'Phường Hải Châu I', 'Phường Thanh Khê Đông'),
(59, '29', '10', 28000, 'Phường Hải Châu I', 'Phường Thanh Khê Tây'),
(60, '29', '17', 29000, 'Phường Hải Châu I', 'Phường Thọ Quang'),
(61, '29', '39', 30000, 'Phường Hải Châu I', 'Phường Thuận Phước'),
(62, '29', '1', 21000, 'Phường Hải Châu I', 'Phường Vĩnh Trung'),
(63, '29', '6', 22000, 'Phường Hải Châu I', 'Phường Xuân Hà'),
(64, '29', '4', 23000, 'Phường Hải Châu I', 'Xã Hòa Châu'),
(65, '29', '6', 24000, 'Phường Hải Châu I', 'Xã Hòa Khương'),
(66, '29', '51', 25000, 'Phường Hải Châu I', 'Xã Hòa Liên'),
(67, '29', '55', 26000, 'Phường Hải Châu I', 'Xã Hòa Nhơn'),
(68, '29', '50', 27000, 'Phường Hải Châu I', 'Xã Hòa Ninh'),
(69, '29', '54', 28000, 'Phường Hải Châu I', 'Xã Hòa Phong'),
(70, '29', '49', 29000, 'Phường Hải Châu I', 'Xã Hòa Phú'),
(71, '29', '52', 30000, 'Phường Hải Châu I', 'Xã Hòa Phước'),
(72, '29', '53', 21000, 'Phường Hải Châu I', 'Xã Hòa Sơn'),
(73, '29', '47', 22000, 'Phường Hải Châu I', 'Xã Hòa Tiến'),
(74, '30', '11', 21000, 'Phường Hải Châu II', 'Phường An Hải Bắc'),
(75, '30', '12', 22000, 'Phường Hải Châu II', 'Phường An Hải Đông'),
(76, '30', '13', 23000, 'Phường Hải Châu II', 'Phường An Hải Tây'),
(77, '30', '7', 24000, 'Phường Hải Châu II', 'Phường An Khê'),
(78, '30', '27', 25000, 'Phường Hải Châu II', 'Phường Bình Hiên'),
(79, '30', '28', 26000, 'Phường Hải Châu II', 'Phường Bình Thuận'),
(80, '30', '4', 27000, 'Phường Hải Châu II', 'Phường Chính Gián'),
(81, '30', '31', 28000, 'Phường Hải Châu II', 'Phường Hòa Cường Bắc'),
(82, '30', '43', 29000, 'Phường Hải Châu II', 'Phường Hòa An'),
(83, '30', '56', 30000, 'Phường Hải Châu II', 'Phường Hòa Bắc'),
(84, '30', '30', 20000, 'Phường Hải Châu II', 'Phường Hải Châu II'),
(85, '29', '29', 20000, 'Phường Hải Châu I', 'Phường Hải Châu I'),
(86, '30', '31', 21000, 'Phường Hải Châu II', 'Phường Hòa Cường Bắc'),
(87, '30', '32', 22000, 'Phường Hải Châu II', 'Phường Hòa Cường Nam'),
(88, '30', '20', 23000, 'Phường Hải Châu II', 'Phường Hòa Hải'),
(89, '30', '26', 24000, 'Phường Hải Châu II', 'Phường Hoà Hiệp Bắc'),
(90, '30', '25', 25000, 'Phường Hải Châu II', 'Phường Hòa Hiệp Nam'),
(91, '30', '24', 26000, 'Phường Hải Châu II', 'Phường Hoà Khánh Bắc'),
(92, '30', '23', 27000, 'Phường Hải Châu II', 'Phường Hòa Khánh Nam'),
(93, '30', '8', 28000, 'Phường Hải Châu II', 'Phường Hoà Khê'),
(94, '30', '22', 29000, 'Phường Hải Châu II', 'Phường Hòa Minh'),
(95, '30', '44', 30000, 'Phường Hải Châu II', 'Phường Hòa Phát'),
(96, '30', '21', 21000, 'Phường Hải Châu II', 'Phường Hòa Quý'),
(97, '30', '41', 22000, 'Phường Hải Châu II', 'Phường Hòa Thọ Đông'),
(98, '30', '42', 23000, 'Phường Hải Châu II', 'Phường Hòa Thọ Tây'),
(99, '30', '33', 24000, 'Phường Hải Châu II', 'Phường Hòa Thuận Đông'),
(100, '30', '34', 25000, 'Phường Hải Châu II', 'Phường Hòa Thuận Tây'),
(101, '30', '45', 26000, 'Phường Hải Châu II', 'Phường Hòa Xuân'),
(102, '30', '19', 27000, 'Phường Hải Châu II', 'Phường Khuê Mỹ'),
(103, '30', '40', 28000, 'Phường Hải Châu II', 'Phường Khuê Trung'),
(104, '30', '14', 29000, 'Phường Hải Châu II', 'Phường Mân Thái'),
(105, '30', '18', 30000, 'Phường Hải Châu II', 'Phường Mỹ An'),
(106, '30', '15', 21000, 'Phường Hải Châu II', 'Phường Nại Hiên Đông'),
(107, '30', '35', 22000, 'Phường Hải Châu II', 'Phường Nam Dương'),
(108, '30', '16', 23000, 'Phường Hải Châu II', 'Phường Phước Mỹ'),
(109, '30', '36', 24000, 'Phường Hải Châu II', 'Phường Phước Ninh'),
(110, '30', '5', 25000, 'Phường Hải Châu II', 'Phường Tam Thuận'),
(111, '30', '2', 26000, 'Phường Hải Châu II', 'Phường Tân Chính'),
(112, '30', '3', 27000, 'Phường Hải Châu II', 'Phường Thạc Gián'),
(113, '30', '37', 28000, 'Phường Hải Châu II', 'Phường Thạch Thang'),
(114, '30', '38', 29000, 'Phường Hải Châu II', 'Phường Thanh Bình'),
(115, '30', '9', 30000, 'Phường Hải Châu II', 'Phường Thanh Khê Đông'),
(116, '30', '10', 21000, 'Phường Hải Châu II', 'Phường Thanh Khê Tây'),
(117, '30', '17', 22000, 'Phường Hải Châu II', 'Phường Thọ Quang'),
(118, '30', '39', 23000, 'Phường Hải Châu II', 'Phường Thuận Phước'),
(119, '30', '1', 24000, 'Phường Hải Châu II', 'Phường Vĩnh Trung'),
(120, '30', '6', 25000, 'Phường Hải Châu II', 'Phường Xuân Hà'),
(121, '30', '46', 26000, 'Phường Hải Châu II', 'Xã Hòa Châu'),
(122, '30', '51', 27000, 'Phường Hải Châu II', 'Xã Hòa Khương'),
(123, '30', '55', 28000, 'Phường Hải Châu II', 'Xã Hòa Liên'),
(124, '30', '50', 29000, 'Phường Hải Châu II', 'Xã Hòa Nhơn'),
(125, '30', '54', 30000, 'Phường Hải Châu II', 'Xã Hòa Ninh'),
(126, '30', '49', 21000, 'Phường Hải Châu II', 'Xã Hòa Phong'),
(127, '30', '52', 25000, 'Phường Hải Châu II', 'Xã Hòa Phú'),
(128, '30', '48', 23000, 'Phường Hải Châu II', 'Xã Hòa Phước'),
(129, '30', '63', 26000, 'Phường Hải Châu II', 'Xã Hòa Sơn'),
(130, '30', '47', 19000, 'Phường Hải Châu II', 'Xã Hòa Tiến'),
(132, '37', '11', 21000, 'Phường Thạch Thang', 'Phường An Hải Bắc'),
(133, '37', '12', 25000, 'Phường Thạch Thang', 'Phường An Hải Đông'),
(134, '37', '13', 23000, 'Phường Thạch Thang', 'Phường An Hải Tây'),
(135, '37', '7', 26000, 'Phường Thạch Thang', 'Phường An Khê'),
(136, '37', '27', 25000, 'Phường Thạch Thang', 'Phường Bình Hiên'),
(137, '37', '28', 26000, 'Phường Thạch Thang', 'Phường Bình Thuận'),
(138, '37', '4', 27000, 'Phường Thạch Thang', 'Phường Chính Gián'),
(139, '37', '43', 28000, 'Phường Thạch Thang', 'Phường Hòa An'),
(140, '37', '56', 29000, 'Phường Thạch Thang', 'Phường Hòa Bắc'),
(141, '37', '31', 30000, 'Phường Thạch Thang', 'Phường Hòa Cường Bắc'),
(142, '37', '32', 20000, 'Phường Thạch Thang', 'Phường Hòa Cường Nam'),
(143, '37', '20', 21000, 'Phường Thạch Thang', 'Phường Hòa Hải'),
(144, '37', '26', 22000, 'Phường Thạch Thang', 'Phường Hoà Hiệp Bắc'),
(145, '37', '25', 23000, 'Phường Thạch Thang', 'Phường Hòa Hiệp Nam'),
(146, '37', '24', 24000, 'Phường Thạch Thang', 'Phường Hoà Khánh Bắc'),
(147, '37', '23', 25000, 'Phường Thạch Thang', 'Phường Hòa Khánh Nam'),
(148, '37', '8', 26000, 'Phường Thạch Thang', 'Phường Hoà Khê'),
(149, '37', '22', 27000, 'Phường Thạch Thang', 'Phường Hòa Minh'),
(150, '37', '44', 28000, 'Phường Thạch Thang', 'Phường Hòa Phát'),
(151, '37', '21', 29000, 'Phường Thạch Thang', 'Phường Hòa Quý'),
(152, '37', '41', 30000, 'Phường Thạch Thang', 'Phường Hòa Thọ Đông'),
(153, '37', '42', 21, 'Phường Thạch Thang', 'Phường Hòa Thọ Tây'),
(154, '37', '33', 22000, 'Phường Thạch Thang', 'Phường Hòa Thuận Đông'),
(155, '37', '34', 23000, 'Phường Thạch Thang', 'Phường Hòa Thuận Tây'),
(156, '37', '45', 24000, 'Phường Thạch Thang', 'Phường Hòa Xuân'),
(157, '37', '19', 25000, 'Phường Thạch Thang', 'Phường Khuê Mỹ'),
(158, '37', '40', 26000, 'Phường Thạch Thang', 'Phường Khuê Trung'),
(159, '37', '14', 27000, 'Phường Thạch Thang', 'Phường Mân Thái'),
(160, '37', '18', 28000, 'Phường Thạch Thang', 'Phường Mỹ An'),
(161, '37', '16', 29000, 'Phường Thạch Thang', 'Phường Nại Hiên Đông'),
(162, '37', '35', 30000, 'Phường Thạch Thang', 'Phường Nam Dương'),
(163, '37', '16', 21000, 'Phường Thạch Thang', 'Phường Phước Mỹ'),
(164, '37', '36', 22000, 'Phường Thạch Thang', 'Phường Phước Ninh'),
(165, '37', '5', 23000, 'Phường Thạch Thang', 'Phường Tam Thuận'),
(166, '37', '2', 24000, 'Phường Thạch Thang', 'Phường Tân Chính'),
(167, '37', '3', 25000, 'Phường Thạch Thang', 'Phường Thạc Gián'),
(168, '37', '37', 20000, 'Phường Thạch Thang', 'Phường Thạch Thang'),
(169, '37', '38', 27000, 'Phường Thạch Thang', 'Phường Thanh Bình'),
(170, '37', '9', 28000, 'Phường Thạch Thang', 'Phường Thanh Khê Đông'),
(171, '37', '10', 29000, 'Phường Thạch Thang', 'Phường Thanh Khê Tây'),
(172, '37', '17', 30000, 'Phường Thạch Thang', 'Phường Thọ Quang'),
(173, '37', '39', 21000, 'Phường Thạch Thang', 'Phường Thuận Phước'),
(174, '37', '1', 22000, 'Phường Thạch Thang', 'Phường Vĩnh Trung'),
(175, '37', '6', 23000, 'Phường Thạch Thang', 'Phường Xuân Hà'),
(176, '37', '46', 24000, 'Phường Thạch Thang', 'Xã Hòa Châu'),
(177, '37', '51', 25000, 'Phường Thạch Thang', 'Xã Hòa Khương'),
(178, '37', '55', 26000, 'Phường Thạch Thang', 'Xã Hòa Liên'),
(179, '37', '50', 27000, 'Phường Thạch Thang', 'Xã Hòa Nhơn'),
(180, '37', '54', 28000, 'Phường Thạch Thang', 'Xã Hòa Ninh'),
(181, '37', '49', 29000, 'Phường Thạch Thang', 'Xã Hòa Phong'),
(182, '37', '52', 21000, 'Phường Thạch Thang', 'Xã Hòa Phú'),
(183, '37', '48', 22000, 'Phường Thạch Thang', 'Xã Hòa Phước'),
(184, '37', '53', 23000, 'Phường Thạch Thang', 'Xã Hòa Sơn'),
(185, '37', '47', 24000, 'Phường Thạch Thang', 'Xã Hòa Tiến'),
(186, '38', '11', 21000, 'Phường Thanh Bình', 'Phường An Hải Bắc'),
(187, '38', '12', 22000, 'Phường Thanh Bình', 'Phường An Hải Đông'),
(188, '38', '13', 23000, 'Phường Thanh Bình', 'Phường An Hải Tây'),
(189, '38', '7', 24000, 'Phường Thanh Bình', 'Phường An Khê'),
(190, '38', '27', 25000, 'Phường Thanh Bình', 'Phường Bình Hiên'),
(191, '38', '28', 26000, 'Phường Thanh Bình', 'Phường Bình Thuận'),
(192, '38', '4', 27000, 'Phường Thanh Bình', 'Phường Chính Gián'),
(193, '38', '43', 28000, 'Phường Thanh Bình', 'Phường Hòa An'),
(194, '38', '56', 29000, 'Phường Thanh Bình', 'Phường Hòa Bắc'),
(195, '38', '31', 30000, 'Phường Thanh Bình', 'Phường Hòa Cường Bắc'),
(196, '38', '32', 20000, 'Phường Thanh Bình', 'Phường Hòa Cường Nam'),
(197, '38', '20', 21000, 'Phường Thanh Bình', 'Phường Hòa Hải'),
(198, '38', '26', 22000, 'Phường Thanh Bình', 'Phường Hoà Hiệp Bắc'),
(199, '38', '25', 23000, 'Phường Thanh Bình', 'Phường Hòa Hiệp Nam'),
(200, '38', '24', 24000, 'Phường Thanh Bình', 'Phường Hoà Khánh Bắc'),
(201, '38', '23', 25000, 'Phường Thanh Bình', 'Phường Hòa Khánh Nam'),
(202, '38', '8', 26000, 'Phường Thanh Bình', 'Phường Hoà Khê'),
(203, '38', '22', 27000, 'Phường Thanh Bình', 'Phường Hòa Minh'),
(204, '38', '44', 28000, 'Phường Thanh Bình', 'Phường Hòa Phát'),
(205, '38', '21', 29000, 'Phường Thanh Bình', 'Phường Hòa Quý'),
(206, '38', '41', 30000, 'Phường Thanh Bình', 'Phường Hòa Thọ Đông'),
(207, '38', '42', 20000, 'Phường Thanh Bình', 'Phường Hòa Thọ Tây'),
(208, '38', '33', 21000, 'Phường Thanh Bình', 'Phường Hòa Thuận Đông'),
(209, '38', '34', 22000, 'Phường Thanh Bình', 'Phường Hòa Thuận Tây'),
(210, '38', '45', 23000, 'Phường Thanh Bình', 'Phường Hòa Xuân'),
(211, '38', '19', 24000, 'Phường Thanh Bình', 'Phường Khuê Mỹ'),
(212, '38', '40', 25000, 'Phường Thanh Bình', 'Phường Khuê Trung'),
(213, '38', '14', 26000, 'Phường Thanh Bình', 'Phường Mân Thái'),
(214, '38', '18', 27000, 'Phường Thanh Bình', 'Phường Mỹ An'),
(215, '38', '15', 28000, 'Phường Thanh Bình', 'Phường Nại Hiên Đông'),
(216, '38', '35', 29000, 'Phường Thanh Bình', 'Phường Nam Dương'),
(217, '38', '16', 30000, 'Phường Thanh Bình', 'Phường Phước Mỹ'),
(218, '38', '36', 21000, 'Phường Thanh Bình', 'Phường Phước Ninh'),
(219, '38', '5', 22000, 'Phường Thanh Bình', 'Phường Tam Thuận'),
(220, '38', '2', 23000, 'Phường Thanh Bình', 'Phường Tân Chính'),
(221, '38', '3', 24000, 'Phường Thanh Bình', 'Phường Thạc Gián'),
(222, '38', '38', 20000, 'Phường Thanh Bình', 'Phường Thanh Bình'),
(223, '38', '9', 26000, 'Phường Thanh Bình', 'Phường Thanh Khê Đông'),
(224, '38', '10', 27000, 'Phường Thanh Bình', 'Phường Thanh Khê Tây'),
(225, '38', '17', 28000, 'Phường Thanh Bình', 'Phường Thọ Quang'),
(226, '38', '39', 29000, 'Phường Thanh Bình', 'Phường Thuận Phước'),
(227, '38', '1', 30000, 'Phường Thanh Bình', 'Phường Vĩnh Trung'),
(228, '38', '6', 21000, 'Phường Thanh Bình', 'Phường Xuân Hà'),
(229, '38', '46', 22000, 'Phường Thanh Bình', 'Xã Hòa Châu'),
(230, '38', '51', 23000, 'Phường Thanh Bình', 'Xã Hòa Khương'),
(231, '38', '55', 24000, 'Phường Thanh Bình', 'Xã Hòa Liên'),
(232, '38', '50', 25000, 'Phường Thanh Bình', 'Xã Hòa Nhơn'),
(233, '38', '54', 26000, 'Phường Thanh Bình', 'Xã Hòa Ninh'),
(234, '38', '49', 27000, 'Phường Thanh Bình', 'Xã Hòa Phong'),
(235, '38', '52', 28000, 'Phường Thanh Bình', 'Xã Hòa Phú'),
(236, '38', '48', 21000, 'Phường Thanh Bình', 'Xã Hòa Phước'),
(237, '38', '53', 22000, 'Phường Thanh Bình', 'Xã Hòa Sơn'),
(238, '38', '47', 23000, 'Phường Thanh Bình', 'Xã Hòa Tiến'),
(239, '33', '11', 21000, 'Phường Hòa Thuận Đông', 'Phường An Hải Bắc'),
(240, '33', '12', 22000, 'Phường Hòa Thuận Đông', 'Phường An Hải Đông'),
(241, '33', '13', 23000, 'Phường Hòa Thuận Đông', 'Phường An Hải Tây'),
(242, '33', '7', 24000, 'Phường Hòa Thuận Đông', 'Phường An Khê'),
(243, '33', '27', 25000, 'Phường Hòa Thuận Đông', 'Phường Bình Hiên'),
(244, '33', '28', 26000, 'Phường Hòa Thuận Đông', 'Phường Bình Thuận'),
(245, '33', '4', 27000, 'Phường Hòa Thuận Đông', 'Phường Chính Gián'),
(246, '33', '43', 28000, 'Phường Hòa Thuận Đông', 'Phường Hòa An'),
(247, '33', '56', 29000, 'Phường Hòa Thuận Đông', 'Phường Hòa Bắc'),
(248, '33', '31', 30000, 'Phường Hòa Thuận Đông', 'Phường Hòa Cường Bắc'),
(249, '33', '32', 20000, 'Phường Hòa Thuận Đông', 'Phường Hòa Cường Nam'),
(250, '33', '20', 21000, 'Phường Hòa Thuận Đông', 'Phường Hòa Hải'),
(251, '33', '26', 22000, 'Phường Hòa Thuận Đông', 'Phường Hoà Hiệp Bắc'),
(252, '33', '25', 23000, 'Phường Hòa Thuận Đông', 'Phường Hòa Hiệp Nam'),
(253, '33', '24', 24000, 'Phường Hòa Thuận Đông', 'Phường Hoà Khánh Bắc'),
(254, '33', '23', 25000, 'Phường Hòa Thuận Đông', 'Phường Hòa Khánh Nam'),
(255, '33', '8', 26000, 'Phường Hòa Thuận Đông', 'Phường Hoà Khê'),
(256, '33', '22', 27000, 'Phường Hòa Thuận Đông', 'Phường Hòa Minh'),
(257, '33', '44', 28000, 'Phường Hòa Thuận Đông', 'Phường Hòa Phát'),
(258, '33', '21', 29000, 'Phường Hòa Thuận Đông', 'Phường Hòa Quý'),
(259, '33', '41', 30000, 'Phường Hòa Thuận Đông', 'Phường Hòa Thọ Đông'),
(260, '33', '42', 21000, 'Phường Hòa Thuận Đông', 'Phường Hòa Thọ Tây'),
(261, '33', '33', 20000, 'Phường Hòa Thuận Đông', 'Phường Hòa Thuận Đông'),
(262, '33', '34', 23000, 'Phường Hòa Thuận Đông', 'Phường Hòa Thuận Tây'),
(263, '33', '45', 24000, 'Phường Hòa Thuận Đông', 'Phường Hòa Xuân'),
(264, '33', '19', 25000, 'Phường Hòa Thuận Đông', 'Phường Khuê Mỹ'),
(265, '33', '40', 26000, 'Phường Hòa Thuận Đông', 'Phường Khuê Trung'),
(266, '33', '14', 27000, 'Phường Hòa Thuận Đông', 'Phường Mân Thái'),
(267, '33', '18', 28000, 'Phường Hòa Thuận Đông', 'Phường Mỹ An'),
(268, '33', '15', 29000, 'Phường Hòa Thuận Đông', 'Phường Nại Hiên Đông'),
(269, '33', '35', 30000, 'Phường Hòa Thuận Đông', 'Phường Nam Dương'),
(270, '33', '16', 21000, 'Phường Hòa Thuận Đông', 'Phường Phước Mỹ'),
(271, '33', '36', 22000, 'Phường Hòa Thuận Đông', 'Phường Phước Ninh'),
(272, '33', '5', 23000, 'Phường Hòa Thuận Đông', 'Phường Tam Thuận'),
(273, '33', '2', 24000, 'Phường Hòa Thuận Đông', 'Phường Tân Chính'),
(274, '33', '3', 25000, 'Phường Hòa Thuận Đông', 'Phường Thạc Gián'),
(275, '33', '9', 26000, 'Phường Hòa Thuận Đông', 'Phường Thanh Khê Đông'),
(276, '33', '10', 27000, 'Phường Hòa Thuận Đông', 'Phường Thanh Khê Tây'),
(277, '33', '17', 28000, 'Phường Hòa Thuận Đông', 'Phường Thọ Quang'),
(278, '33', '39', 29000, 'Phường Hòa Thuận Đông', 'Phường Thuận Phước'),
(279, '33', '1', 30000, 'Phường Hòa Thuận Đông', 'Phường Vĩnh Trung'),
(280, '33', '6', 21000, 'Phường Hòa Thuận Đông', 'Phường Xuân Hà'),
(281, '33', '46', 22000, 'Phường Hòa Thuận Đông', 'Xã Hòa Châu'),
(282, '33', '51', 23000, 'Phường Hòa Thuận Đông', 'Xã Hòa Khương'),
(283, '33', '55', 24000, 'Phường Hòa Thuận Đông', 'Xã Hòa Liên'),
(284, '33', '50', 25000, 'Phường Hòa Thuận Đông', 'Xã Hòa Nhơn'),
(285, '33', '54', 26000, 'Phường Hòa Thuận Đông', 'Xã Hòa Ninh'),
(286, '33', '49', 27000, 'Phường Hòa Thuận Đông', 'Xã Hòa Phong'),
(287, '33', '52', 28000, 'Phường Hòa Thuận Đông', 'Xã Hòa Phú'),
(288, '33', '48', 29000, 'Phường Hòa Thuận Đông', 'Xã Hòa Phước'),
(289, '33', '53', 21000, 'Phường Hòa Thuận Đông', 'Xã Hòa Sơn'),
(290, '33', '47', 25000, 'Phường Hòa Thuận Đông', 'Xã Hòa Tiến'),
(291, '36', '11', 21000, 'Phường Phước Ninh', 'Phường An Hải Bắc'),
(292, '36', '12', 22000, 'Phường Phước Ninh', 'Phường An Hải Đông'),
(293, '36', '13', 23000, 'Phường Phước Ninh', 'Phường An Hải Tây'),
(294, '36', '7', 24000, 'Phường Phước Ninh', 'Phường An Khê'),
(295, '36', '27', 25000, 'Phường Phước Ninh', 'Phường Bình Hiên'),
(296, '36', '28', 26000, 'Phường Phước Ninh', 'Phường Bình Thuận'),
(297, '36', '4', 27000, 'Phường Phước Ninh', 'Phường Chính Gián'),
(298, '36', '43', 28000, 'Phường Phước Ninh', 'Phường Hòa An'),
(299, '36', '56', 29000, 'Phường Phước Ninh', 'Phường Hòa Bắc'),
(300, '36', '31', 30000, 'Phường Phước Ninh', 'Phường Hòa Cường Bắc'),
(301, '36', '32', 21000, 'Phường Phước Ninh', 'Phường Hòa Cường Nam'),
(302, '36', '20', 22000, 'Phường Phước Ninh', 'Phường Hòa Hải'),
(303, '36', '26', 23000, 'Phường Phước Ninh', 'Phường Hoà Hiệp Bắc'),
(304, '36', '25', 24000, 'Phường Phước Ninh', 'Phường Hòa Hiệp Nam'),
(305, '36', '24', 25000, 'Phường Phước Ninh', 'Phường Hoà Khánh Bắc'),
(306, '36', '23', 26000, 'Phường Phước Ninh', 'Phường Hòa Khánh Nam'),
(307, '36', '8', 27000, 'Phường Phước Ninh', 'Phường Hoà Khê'),
(308, '36', '22', 28000, 'Phường Phước Ninh', 'Phường Hòa Minh'),
(309, '36', '44', 29000, 'Phường Phước Ninh', 'Phường Hòa Phát'),
(310, '36', '21', 30000, 'Phường Phước Ninh', 'Phường Hòa Quý'),
(311, '36', '41', 21000, 'Phường Phước Ninh', 'Phường Hòa Thọ Đông'),
(312, '36', '42', 22000, 'Phường Phước Ninh', 'Phường Hòa Thọ Tây'),
(313, '36', '34', 23000, 'Phường Phước Ninh', 'Phường Hòa Thuận Tây'),
(314, '36', '45', 24000, 'Phường Phước Ninh', 'Phường Hòa Xuân'),
(315, '36', '19', 25000, 'Phường Phước Ninh', 'Phường Khuê Mỹ'),
(316, '36', '40', 26000, 'Phường Phước Ninh', 'Phường Khuê Trung'),
(317, '36', '14', 27000, 'Phường Phước Ninh', 'Phường Mân Thái'),
(318, '36', '18', 28000, 'Phường Phước Ninh', 'Phường Mỹ An'),
(319, '36', '15', 29000, 'Phường Phước Ninh', 'Phường Nại Hiên Đông'),
(320, '36', '35', 30000, 'Phường Phước Ninh', 'Phường Nam Dương'),
(321, '36', '16', 21000, 'Phường Phước Ninh', 'Phường Phước Mỹ'),
(322, '36', '36', 20000, 'Phường Phước Ninh', 'Phường Phước Ninh'),
(323, '36', '5', 23000, 'Phường Phước Ninh', 'Phường Tam Thuận'),
(324, '36', '2', 24000, 'Phường Phước Ninh', 'Phường Tân Chính'),
(325, '36', '3', 25000, 'Phường Phước Ninh', 'Phường Thạc Gián'),
(326, '36', '9', 26000, 'Phường Phước Ninh', 'Phường Thanh Khê Đông'),
(327, '36', '10', 27000, 'Phường Phước Ninh', 'Phường Thanh Khê Tây'),
(328, '36', '17', 28000, 'Phường Phước Ninh', 'Phường Thọ Quang'),
(329, '36', '39', 29000, 'Phường Phước Ninh', 'Phường Thuận Phước'),
(330, '36', '1', 30000, 'Phường Phước Ninh', 'Phường Vĩnh Trung'),
(331, '36', '6', 21000, 'Phường Phước Ninh', 'Phường Xuân Hà'),
(332, '36', '46', 22000, 'Phường Phước Ninh', 'Xã Hòa Châu'),
(333, '36', '51', 23000, 'Phường Phước Ninh', 'Xã Hòa Khương'),
(334, '36', '55', 24000, 'Phường Phước Ninh', 'Xã Hòa Liên'),
(335, '36', '50', 25000, 'Phường Phước Ninh', 'Xã Hòa Nhơn'),
(336, '36', '54', 26000, 'Phường Phước Ninh', 'Xã Hòa Ninh'),
(337, '36', '49', 27000, 'Phường Phước Ninh', 'Xã Hòa Phong'),
(338, '36', '52', 28000, 'Phường Phước Ninh', 'Xã Hòa Phú'),
(339, '36', '48', 29000, 'Phường Phước Ninh', 'Xã Hòa Phước'),
(340, '36', '53', 30000, 'Phường Phước Ninh', 'Xã Hòa Sơn'),
(341, '36', '47', 21000, 'Phường Phước Ninh', 'Xã Hòa Tiến');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ship_order`
--

CREATE TABLE `ship_order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `addressto` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `money` float NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `ship_order`
--

INSERT INTO `ship_order` (`id`, `name`, `address`, `phone`, `item`, `addressto`, `money`, `created_time`, `status`) VALUES
(110, 'Nguyễn Xuân Thịnh', 'KTX khoa công nghệ thông tin và truyển thông', 931381229, 'Bưu kiện', 'nhà riêng', 100000, '2021-01-15 06:22:50', ''),
(111, 'Nguyễn Xuân Thịnh', 'KTX khoa công nghệ thông tin và truyển thông', 931381229, 'Bưu kiện', 'nhà riêng', 100000, '2021-01-15 06:23:27', ''),
(112, 'Nguyễn Xuân Thịnh', 'KTX khoa công nghệ thông tin và truyển thông', 931381229, 'Bưu kiện', 'nhà riêng', 100000, '2021-01-15 06:23:41', ''),
(113, 'Nguyễn Xuân Thịnh', 'KTX khoa công nghệ thông tin và truyển thông', 931381229, 'Bưu kiện', 'nhà riêng', 5000000, '2021-01-15 06:48:52', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ward`
--

CREATE TABLE `ward` (
  `id` int(11) NOT NULL,
  `ward_name` varchar(155) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `d_id` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `ward`
--

INSERT INTO `ward` (`id`, `ward_name`, `d_id`, `time_stamp`) VALUES
(1, 'Phường Vĩnh Trung', 1, '2020-12-28 10:23:18'),
(2, 'Phường Tân Chính', 1, '2020-12-28 10:23:18'),
(3, 'Phường Thạc Gián', 1, '2020-12-28 10:23:18'),
(4, 'Phường Chính Gián', 1, '2020-12-28 10:23:18'),
(5, 'Phường Tam Thuận', 1, '2020-12-28 10:23:18'),
(6, 'Phường Xuân Hà', 1, '2020-12-28 10:23:18'),
(7, 'Phường An Khê', 1, '2020-12-28 10:23:18'),
(8, 'Phường Hoà Khê', 1, '2020-12-28 10:23:18'),
(9, 'Phường Thanh Khê Đông', 1, '2020-12-28 10:23:18'),
(10, 'Phường Thanh Khê Tây', 1, '2020-12-28 10:23:18'),
(11, 'Phường An Hải Bắc', 2, '2020-12-28 10:29:52'),
(12, 'Phường An Hải Đông', 2, '2020-12-28 10:29:52'),
(13, 'Phường An Hải Tây', 2, '2020-12-28 10:29:52'),
(14, 'Phường Mân Thái', 2, '2020-12-28 10:29:52'),
(15, 'Phường Nại Hiên Đông', 2, '2020-12-28 10:29:52'),
(16, 'Phường Phước Mỹ', 2, '2020-12-28 10:29:52'),
(17, 'Phường Thọ Quang', 2, '2020-12-28 10:29:52'),
(18, 'Phường Mỹ An', 3, '2020-12-28 10:39:23'),
(19, 'Phường Khuê Mỹ', 3, '2020-12-28 10:39:23'),
(20, 'Phường Hòa Hải', 3, '2020-12-28 10:39:23'),
(21, 'Phường Hòa Quý', 3, '2020-12-28 10:39:23'),
(22, 'Phường Hòa Minh', 4, '2020-12-28 10:42:52'),
(23, 'Phường Hòa Khánh Nam', 4, '2020-12-28 10:42:52'),
(24, 'Phường Hoà Khánh Bắc', 4, '2020-12-28 10:42:52'),
(25, 'Phường Hòa Hiệp Nam', 4, '2020-12-28 10:42:52'),
(26, 'Phường Hoà Hiệp Bắc', 4, '2020-12-28 10:42:52'),
(27, 'Phường Bình Hiên', 5, '2020-12-28 10:47:55'),
(28, 'Phường Bình Thuận', 5, '2020-12-28 10:47:55'),
(29, 'Phường Hải Châu I', 5, '2020-12-28 10:47:55'),
(30, 'Phường Hải Châu II', 5, '2020-12-28 10:47:55'),
(31, 'Phường Hòa Cường Bắc', 5, '2020-12-28 10:47:55'),
(32, 'Phường Hòa Cường Nam', 5, '2020-12-28 10:47:55'),
(33, 'Phường Hòa Thuận Đông', 5, '2020-12-28 10:47:55'),
(34, 'Phường Hòa Thuận Tây', 5, '2020-12-28 10:47:55'),
(35, 'Phường Nam Dương', 5, '2020-12-28 10:47:55'),
(36, 'Phường Phước Ninh', 5, '2020-12-28 10:47:55'),
(37, 'Phường Thạch Thang', 5, '2020-12-28 10:47:55'),
(38, 'Phường Thanh Bình', 5, '2020-12-28 10:47:55'),
(39, 'Phường Thuận Phước', 5, '2020-12-28 10:47:55'),
(40, 'Phường Khuê Trung', 6, '2020-12-28 10:51:18'),
(41, 'Phường Hòa Thọ Đông', 6, '2020-12-28 10:51:18'),
(42, 'Phường Hòa Thọ Tây', 6, '2020-12-28 10:51:18'),
(43, 'Phường Hòa An', 6, '2020-12-28 10:51:18'),
(44, 'Phường Hòa Phát', 6, '2020-12-28 10:51:18'),
(45, 'Phường Hòa Xuân', 6, '2020-12-28 10:51:18'),
(46, 'Xã Hòa Châu', 7, '2020-12-28 10:54:29'),
(47, 'Xã Hòa Tiến', 7, '2020-12-28 10:54:29'),
(48, 'Xã Hòa Phước', 7, '2020-12-28 10:54:29'),
(49, 'Xã Hòa Phong', 7, '2020-12-28 10:54:29'),
(50, 'Xã Hòa Nhơn', 7, '2020-12-28 10:54:29'),
(51, 'Xã Hòa Khương', 7, '2020-12-28 10:54:29'),
(52, 'Xã Hòa Phú', 7, '2020-12-28 10:54:29'),
(53, 'Xã Hòa Sơn', 7, '2020-12-28 10:54:29'),
(54, 'Xã Hòa Ninh', 7, '2020-12-28 10:54:29'),
(55, 'Xã Hòa Liên', 7, '2020-12-28 10:54:29'),
(56, 'Phường Hòa Bắc', 7, '2020-12-28 10:54:29');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `price_logistic`
--
ALTER TABLE `price_logistic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `price_ship`
--
ALTER TABLE `price_ship`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ship_order`
--
ALTER TABLE `ship_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `price_logistic`
--
ALTER TABLE `price_logistic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `price_ship`
--
ALTER TABLE `price_ship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT cho bảng `ship_order`
--
ALTER TABLE `ship_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `ward`
--
ALTER TABLE `ward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

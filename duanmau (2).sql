-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2022 lúc 06:16 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acount_user`
--

CREATE TABLE `acount_user` (
  `id__acount` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `buy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `active` bit(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='3';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(10) NOT NULL,
  `content` varchar(50) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_hh` int(10) NOT NULL,
  `date_comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `content`, `id_user`, `id_hh`, `date_comment`) VALUES
(10, 'Giá rẻ bất ngời\r\n', 7, 54, '07:52:38pm 14/10/2022'),
(11, 'Rất đáng mua', 7, 54, '07:52:52pm 14/10/2022'),
(12, 'Dùng rất đáng tiền', 7, 57, '05:31:18pm 16/10/2022'),
(13, 'Sam sung rất mượt\r\n', 7, 56, '05:42:35pm 16/10/2022'),
(14, 'Áo khoác ấm\r\n', 7, 58, '06:10:29pm 16/10/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commentmanage`
--

CREATE TABLE `commentmanage` (
  `id_comment` int(10) NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commodities`
--

CREATE TABLE `commodities` (
  `id_commodities` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `commodities`
--

INSERT INTO `commodities` (`id_commodities`, `name`) VALUES
(41, 'Apple'),
(42, 'Sam Sung'),
(44, 'Yody'),
(46, 'Xiaomi'),
(47, 'Oppo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goodsmanage`
--

CREATE TABLE `goodsmanage` (
  `id_hh` int(10) NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_hh` int(11) NOT NULL,
  `name_pro` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `sale` varchar(50) NOT NULL,
  `view_pro` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_hh`, `name_pro`, `image`, `price`, `detail`, `sale`, `view_pro`, `id_dm`) VALUES
(47, 'Iphone 12 Pro Max', 'iphone 12 pro max.jpg', '14000000', 'Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng\r\nCứ mỗi năm, đến dạo cuối tháng 8 và gần đầu', '13900000', 0, 41),
(52, 'Iphone 12', 'iphone 12 pro max.jpg', '32323', 'Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng\r\nCứ mỗi năm, đến dạo cuối tháng 8 và gần đầu', '432432', 0, 41),
(54, 'Redmi note 8', 'redmi note 8.jpg', '32323', '	Giống như Xiaomi Redmi Note 8 cũ, máy đã kích hoạt được trang bị Snapdragon 660, đi kèm RAM 4GB, 32', '321321', 0, 46),
(55, 'Xiaomi redmi note 7', 'redmi note 7.jpg', '3000000', 'Giống như Xiaomi Redmi Note 7 cũ, máy đã kích hoạt được trang bị Snapdragon 660, đi kèm RAM 4GB, 32G', '230000', 0, 46),
(56, 'Sam Sung ultra 21', 'sam sung s22 ultra.jpeg', '1700000', 'Đúng như các thông tin được đồn đoán trước đó, mẫu flagship mới của gả khổng lồ Hàn Quốc được ra mắt', '16000000', 0, 42),
(57, 'Iphone 13 Pro Max 128 GB', 'iphone 13 promax.jpg', '27890000', 'iPhone 13 Pro Max chắc chắn sẽ là chiếc smartphone cao cấp được quan tâm nhiều nhất trong năm 2021. ', '26789000', 0, 41),
(58, 'Áo khoác mùa thu dáng đẹp', 'Co-ao-khoac-nam.jpg', '450000', 'Giữ ấm hiệu quả, mang lại sự an tâm cho bạn trong điều kiện thời tiết khắc nghiệt: mưa lạnh, gió mùa', '430000', 0, 44),
(59, 'Iphone 12', 'iphone-13.jpg', '21000000', 'Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng\r\nCứ mỗi năm, đến dạo cuối tháng 8 và gần đầu', '15000000', 0, 41);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `name`, `password`, `email`, `address`, `phone`, `role`) VALUES
(6, 'ducle', '310302', 'duclqph25312@fpt.edu.vn', 'ha noi', 21321, 0),
(7, 'lequangduc', '310302', 'ducnhat31032002@gmail.com', 'Hà Nôi', 2147483647, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usermanage`
--

CREATE TABLE `usermanage` (
  `id_admin` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acount_user`
--
ALTER TABLE `acount_user`
  ADD PRIMARY KEY (`id__acount`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_hh` (`id_hh`);

--
-- Chỉ mục cho bảng `commentmanage`
--
ALTER TABLE `commentmanage`
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_comment` (`id_comment`);

--
-- Chỉ mục cho bảng `commodities`
--
ALTER TABLE `commodities`
  ADD PRIMARY KEY (`id_commodities`);

--
-- Chỉ mục cho bảng `goodsmanage`
--
ALTER TABLE `goodsmanage`
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_hh` (`id_hh`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_hh`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `usermanage`
--
ALTER TABLE `usermanage`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acount_user`
--
ALTER TABLE `acount_user`
  MODIFY `id__acount` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `commodities`
--
ALTER TABLE `commodities`
  MODIFY `id_commodities` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `acount_user`
--
ALTER TABLE `acount_user`
  ADD CONSTRAINT `acount_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_hh`) REFERENCES `products` (`id_hh`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `commentmanage`
--
ALTER TABLE `commentmanage`
  ADD CONSTRAINT `commentmanage_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `commentmanage_ibfk_2` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id_comment`);

--
-- Các ràng buộc cho bảng `goodsmanage`
--
ALTER TABLE `goodsmanage`
  ADD CONSTRAINT `goodsmanage_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `goodsmanage_ibfk_2` FOREIGN KEY (`id_hh`) REFERENCES `products` (`id_hh`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `commodities` (`id_commodities`);

--
-- Các ràng buộc cho bảng `usermanage`
--
ALTER TABLE `usermanage`
  ADD CONSTRAINT `usermanage_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `usermanage_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

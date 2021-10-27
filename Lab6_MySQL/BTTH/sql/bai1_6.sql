-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 06:54 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bai1_6`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loainv`
--

CREATE TABLE `loainv` (
  `MALOAINV` varchar(30) NOT NULL,
  `TENLOAINV` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loainv`
--

INSERT INTO `loainv` (`MALOAINV`, `TENLOAINV`) VALUES
('1', 'Giám đốc'),
('2', 'Kế Toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` varchar(30) NOT NULL,
  `HO` varchar(10) NOT NULL,
  `TEN` varchar(20) NOT NULL,
  `NGAYSINH` date NOT NULL,
  `GIOITINH` int(2) NOT NULL,
  `DIACHI` varchar(30) NOT NULL,
  `ANH` varchar(30) NOT NULL,
  `MALOAINV` varchar(30) NOT NULL,
  `MAPHONG` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `HO`, `TEN`, `NGAYSINH`, `GIOITINH`, `DIACHI`, `ANH`, `MALOAINV`, `MAPHONG`) VALUES
('1', 'Nguyễn', 'Long', '2000-06-10', 1, 'Hải Dương', 'avatar.png', '1', '1'),
('10', 'Vũ Thị', 'Thảo', '2000-03-04', 0, 'Nha Trang', '', '2', '1'),
('11', 'Vũ Thị', 'Tuyết', '2000-03-04', 0, 'Nha Trang', 'Array', '2', '1'),
('2', 'Nguyễn', 'Thanh', '2000-06-10', 1, 'Nha Trang', '', '2', '1'),
('3', 'Nguyễn', 'Phúc', '1998-07-16', 1, 'Nha Trang', 'Viettelpay.png', '2', '1'),
('4', 'Nguyễn', 'Bình', '2021-10-06', 1, 'Nha Trang', 'Untitled.png', '2', '1'),
('5', 'Nguyễn', 'Thái', '2021-10-07', 1, 'Nha Trang', 'minhhoa.png', '2', '1'),
('6', 'Nguyễn', 'Phúc Châu', '2021-10-12', 1, 'Nha Trang', 'log.PNG', '2', '1'),
('7', 'Vũ Thị', 'Hồng', '2000-03-04', 0, 'Nha Trang', '', '2', '1'),
('8', 'Vũ Thị', 'Hồng', '2000-03-04', 0, 'Nha Trang', '', '2', '1'),
('9', 'Vũ Thị', 'Hương', '2000-03-04', 0, 'Nha Trang', 'tiktok.PNG', '2', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `MAPHONG` varchar(30) NOT NULL,
  `TENPHONG` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`MAPHONG`, `TENPHONG`) VALUES
('1', 'Điều Hành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ten`) VALUES
(1, 'admin', 'admin', 'Nguyễn Văn Hải Long');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loainv`
--
ALTER TABLE `loainv`
  ADD PRIMARY KEY (`MALOAINV`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`),
  ADD KEY `MALOAINV` (`MALOAINV`),
  ADD KEY `MAPHONG` (`MAPHONG`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MAPHONG`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `loainv`
--
ALTER TABLE `loainv`
  ADD CONSTRAINT `loainv_ibfk_1` FOREIGN KEY (`MALOAINV`) REFERENCES `nhanvien` (`MALOAINV`);

--
-- Các ràng buộc cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD CONSTRAINT `phongban_ibfk_1` FOREIGN KEY (`MAPHONG`) REFERENCES `nhanvien` (`MAPHONG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

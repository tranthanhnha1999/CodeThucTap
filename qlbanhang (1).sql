-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 24, 2022 lúc 12:47 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbanhang`
--
CREATE DATABASE IF NOT EXISTS `qlbanhang` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `qlbanhang`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

CREATE TABLE `chitiethd` (
  `MaHD` int(11) NOT NULL,
  `MaSP` varchar(4) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethd`
--

INSERT INTO `chitiethd` (`MaHD`, `MaSP`, `SoLuong`) VALUES
(1, 'B01', 2),
(1, 'B02', 50),
(2, 'B02', 90),
(2, 'B03', 20),
(2, 'R01', 5),
(2, 'R02', 53),
(7, 'B03', 21),
(8, 'B02', 9),
(8, 'R01', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaKH` varchar(4) NOT NULL,
  `MaNV` varchar(4) CHARACTER SET utf8 NOT NULL,
  `NgayLapHD` datetime DEFAULT NULL,
  `NgayNhanHang` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `MaNV`, `NgayLapHD`, `NgayNhanHang`) VALUES
(1, 'KH01', 'NV01', '1999-06-26 00:00:00', '1999-07-10 00:00:00'),
(2, 'KH02', 'NV03', '2012-06-26 00:00:00', '2012-07-11 00:00:00'),
(7, 'KH05', 'NV05', '2012-07-25 00:00:00', '2012-07-29 00:00:00'),
(8, 'KH02', 'NV01', '2012-07-28 00:00:00', '2012-07-30 00:00:00'),
(9, 'KH03', 'NV02', '2012-07-29 00:00:00', '2012-08-02 00:00:00'),
(10, 'KH03', 'NV02', '2012-07-29 00:00:00', '2012-08-02 00:00:00'),
(11, 'KH03', 'NV02', '2012-07-29 00:00:00', '2012-08-02 00:00:00'),
(12, 'KH03', 'NV02', '2012-07-29 00:00:00', '2012-08-02 00:00:00'),
(13, 'KH03', 'NV02', '2012-07-29 00:00:00', '2012-08-02 00:00:00'),
(14, 'KH03', 'NV02', '2012-07-29 00:00:00', '2012-08-02 00:00:00'),
(15, 'KH04', 'NV02', '2012-07-29 00:00:00', '2012-08-02 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(4) NOT NULL,
  `HoTenKH` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `DiaChi` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `DienThoai` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTenKH`, `DiaChi`, `DienThoai`) VALUES
('KH01', 'Cửa Hàng Số 2 Q4', '20 Trần Phú Q2', '0923861311'),
('KH02', 'Công Ty Cổ Phần Đầu từ phân Bón', '22 Ngô Quyên 15', '0925641234'),
('KH03', 'Công Ty XNK Hoa Hồng', '123 Trần Phú', '0965233596'),
('KH04', 'Công Ty VHP Tân Bình', '10 Lý Thường Kiệt', '0953255612'),
('KH05', 'Cửa hàng bách hóa Q1', '155 Trần Hưng Đạo', '0953561231');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(4) CHARACTER SET utf8 NOT NULL,
  `HoNV` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `TenNV` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `GioiTinh` bit(1) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `DienThoai` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HoNV`, `TenNV`, `GioiTinh`, `NgaySinh`, `DiaChi`, `DienThoai`) VALUES
('NV01', 'Lê Văn', 'Tám', b'1', '1970-12-09', '45 Trần Phú', '0923861311'),
('NV02', 'Trần Thị', 'Lan', b'0', '1965-10-13', '45 Trường chinh', '0923861311'),
('NV03', 'Tạ Thành', 'Tâm', b'1', '1965-10-13', '60 Võ Thị Sáu', NULL),
('NV04', 'Ngô Thanh', 'Sơn', b'1', '1950-10-20', '50 Phạm Ngũ Lão', '0395233864'),
('NV05', 'Trần Thanh', 'Nhã', b'1', '1999-12-03', '56 Ngô Tất Tố', '0956256312');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(4) NOT NULL,
  `TenSP` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `DoViTinh` varchar(50) DEFAULT NULL,
  `DonGia` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `DoViTinh`, `DonGia`) VALUES
('A02', 'Ăn tràn miệng', 'Phần', 9000),
('B01', 'Bia 33', 'Lon', 4000),
('B02', 'Bia Tiger', 'Lon', 5000),
('B03', 'Bia Heneken', 'Lon', 6000),
('R01', 'Rượu', 'Chai', 20000),
('R02', 'Rượu Napoleon', 'Chai', 20000),
('R03', 'Rượu nè he', 'Chai', 21000),
('V01', 'Vú heo nướng', 'Phần', 12000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`MaHD`,`MaSP`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `chitiethd_ibfk_1` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `chitiethd_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

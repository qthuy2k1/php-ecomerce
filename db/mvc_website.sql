-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 25, 2022 lúc 06:30 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc_website`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_dien_thoai`
--

CREATE TABLE `chi_tiet_dien_thoai` (
  `ma_chi_tiet_san_pham` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `man_hinh` varchar(100) NOT NULL,
  `he_dieu_hanh` varchar(50) NOT NULL,
  `camera_sau` varchar(50) NOT NULL,
  `camera_truoc` varchar(50) NOT NULL,
  `chip` varchar(50) NOT NULL,
  `ram` char(5) NOT NULL,
  `bo_nho_trong` char(6) NOT NULL,
  `sim` varchar(100) NOT NULL,
  `pin_sac` varchar(100) NOT NULL,
  `mau_sac` varchar(200) NOT NULL,
  `gia_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_dien_thoai`
--

INSERT INTO `chi_tiet_dien_thoai` (`ma_chi_tiet_san_pham`, `ma_san_pham`, `man_hinh`, `he_dieu_hanh`, `camera_sau`, `camera_truoc`, `chip`, `ram`, `bo_nho_trong`, `sim`, `pin_sac`, `mau_sac`, `gia_tien`) VALUES
(1, 1, 'OLED, 6.1\", Super Retina XDR', 'iOS 15', '2 camera 12 MP', '12 MP', 'Apple A15 Bionic', '4 GB', '128GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '3240 mAh, 20 W', 'Xanh Lá, Đỏ, Hồng, Trắng, Xanh Dương, Đen', 23690000),
(2, 1, 'OLED, 6.1\", Super Retina XDR', 'iOS 15', '2 camera 12 MP', '12 MP', 'Apple A15 Bionic', '4 GB', '256GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '3240 mAh, 20 W', 'Xanh Lá, Đỏ, Hồng, Trắng, Xanh Dương, Đen', 27290000),
(3, 1, 'OLED, 6.1\", Super Retina XDR', 'iOS 15', '2 camera 12 MP', '12 MP', 'Apple A15 Bionic', '4 GB', '512GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '3240 mAh, 20 W', 'Xanh Lá, Đỏ, Hồng, Trắng, Xanh Dương, Đen', 31890000),
(4, 2, 'Dynamic AMOLED 2X, 6.8\". Quad HD+ (2K+)', 'Android 12', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', '40 MP', 'Snapdragon 8 Gen 1 8 nhân', '8 GB', '128GB', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G', '5000 mAh, 45 W', 'Trắng, Đen, Xanh Lá, Đỏ', 30990000),
(5, 2, 'Dynamic AMOLED 2X, 6.8\". Quad HD+ (2K+)', 'Android 12', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', '40 MP', 'Snapdragon 8 Gen 1 8 nhân', '12 GB', '256GB', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G', '5000 mAh, 45 W', 'Trắng, Đen, Xanh Lá, Đỏ', 33990000),
(6, 2, 'Dynamic AMOLED 2X, 6.8\". Quad HD+ (2K+)', 'Android 12', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', '40 MP', 'Snapdragon 8 Gen 1 8 nhân', '12 GB', '512GB', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G', '5000 mAh, 45 W', 'Trắng, Đen, Xanh Lá, Đỏ', 36990000),
(7, 3, 'AMOLED, 6.43\", Full HD+', 'Android 11', 'Chính 64 MP & Phụ 8 MP, 2 MP', '32 MP', 'MediaTek Dimensity 900 5G', '8 GB', '128GB', '2 Nano SIM, Hỗ trợ 5G', '4300 mAh, 65 W', 'Đen, Bạc', 12990000),
(8, 4, 'AMOLED, 6.73\", Quad HD+ (2K+)', 'Android 12', '3 camera 50 MP', '32 MP', 'Snapdragon 8 Gen 1 8 nhân', '12 GB', '256GB', '2 Nano SIM, Hỗ trợ 5G', '4600 mAh, 120 W', 'Tím, Xám, Xanh Dương', 27990000),
(9, 5, 'IPS LCD, 6.18\", Full HD+', 'Android 9 (Android One)', 'Chính 12 MP & Phụ 13 MP', '20 MP', 'Snapdragon 710', '4 GB', '64 GB', '2 Nano SIM (SIM 2 chung khe thẻ nhớ)', '3500 mAh', 'Nâu, Bạc, Xanh Dương', 5890000),
(10, 6, 'OLED, 6.7\", Super Retina XDR', 'iOS 15', '3 camera 12 MP', '12 MP', 'Apple A14 Bionic', '6 GB', '256GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '3687 mAh, 20 W', 'Vàng Đồng, Bạc, Xanh Dương, Xám', 29990000),
(11, 6, 'OLED, 6.7\", Super Retina XDR', 'iOS 15', '3 camera 12 MP', '12 MP', 'Apple A14 Bionic', '6 GB', '512 GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '3687 mAh, 20 W', 'Vàng Đồng, Bạc, Xanh Dương, Xám', 34090000),
(12, 7, 'AMOLED, 6.44\", Full HD+', 'Android 12', 'Chính 64 MP & Phụ 8 MP, 2 MP', 'Chính 50 MP & Phụ 8 MP', 'MediaTek Dimensity 920 5G 8 nhân', '8 GB', '128 GB', '2 Nano SIM, Hỗ trợ 5G', '4200 mAh, 44 W', 'Xanh Đen', 12990000),
(13, 8, 'Super AMOLED, 6.4\", Full HD+', 'Android 12', 'Chính 50 MP & Phụ 8 MP, 2 MP', '16 MP', 'MediaTek Dimensity 920 5G 8 nhân', '8 GB', '128 GB', '2 Nano SIM, Hỗ trợ 5G', '4500 mAh, 60 W', 'Xanh Dương', 9990000),
(14, 9, 'Dynamic AMOLED 2X, 6.8\", Quad HD+ (2K+)', 'Android 11', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', '40 MP', 'Exynos 2100', '12 GB', '128 GB', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G', '5000 mAh, 25 W', 'Bạc', 25990000),
(15, 9, 'Dynamic AMOLED 2X, 6.8\", Quad HD+ (2K+)', 'Android 11', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', '40 MP', 'Exynos 2100', '12 GB', '256 GB', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G', '5000 mAh, 25 W', 'Bạc', 26990000),
(16, 10, 'IPS LCD6.56\", HD+', 'Android 11', 'Chính 13 MP & Phụ 2 MP', '8 MP', 'Snapdragon 680 8 nhân', '6 GB', '128 GB', '2 Nano SIM, Hỗ trợ 4G', '5000 mAh, 33 W', 'Đen, Xanh lá', 5990000),
(17, 11, 'AMOLED, 6.67\", Full HD+', 'Android 11', 'Chính 108 MP & Phụ 8 MP, 2 MP', '16 MP', 'Snapdragon 695 5G 8 nhân', '8 GB', '128GB', '2 Nano SIM (SIM 2 chung khe thẻ nhớ), Hỗ trợ 5G', '5000 mAh, 67 W', 'Xám, Trắng', 8690000),
(18, 12, 'IPS LCD, 6.1\", Liquid Retina', 'iOS 15', '2 camera 12 MP', '12 MP', 'Apple A13 Bionic', '4 GB', '64 GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 4G', '3110 mAh, 18 W', 'Đỏ, Xanh Lá, Tím, Đen, Trắng, Vàng', 14990000),
(19, 12, 'IPS LCD, 6.1\", Liquid Retina', 'iOS 15', '2 camera 12 MP', '12 MP', 'Apple A13 Bionic', '4 GB', '128 GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 4G', '3110 mAh, 18 W', 'Đỏ, Xanh Lá, Tím, Đen, Trắng, Vàng', 16990000),
(20, 12, 'IPS LCD, 6.1\", Liquid Retina', 'iOS 15', '2 camera 12 MP', '12 MP', 'Apple A13 Bionic', '4 GB', '256 GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 4G', '3110 mAh, 18 W', 'Xanh Lá, Tím, Đen, Trắng', 18990000),
(21, 13, 'Dynamic AMOLED 2X, Chính 6.7\" & Phụ 1.9\", Full HD+', 'Android 11', '2 camera 12 MP', '10 MP', 'Snapdragon 888', '8 GB', '128 GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '3300 mAh, 15 W', 'Kem, Đen, Tím, Xanh Rêu', 24990000),
(22, 13, 'Dynamic AMOLED 2X, Chính 6.7\" & Phụ 1.9\", Full HD+', 'Android 11', '2 camera 12 MP', '10 MP', 'Snapdragon 888', '8 GB', '256 GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '3300 mAh, 15 W', 'Kem, Đen, Tím, Xanh Rêu', 26990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_chi_tiet_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `ma_hang` int(11) NOT NULL,
  `ten_hang` varchar(128) NOT NULL,
  `anh_logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`ma_hang`, `ten_hang`, `anh_logo`) VALUES
(1, 'Apple', './img/brands_logo/apple.png'),
(2, 'Samsung', './img/brands_logo/samsung.jpg'),
(3, 'Oppo', './img/brands_logo/oppo.png'),
(4, 'Xiaomi', './img/brands_logo/xiaomi.jpg'),
(5, 'Nokia', './img/brands_logo/nokia.jpg'),
(6, 'Vivo', './img/brands_logo/vivo.jpg'),
(7, 'Realme', './img/brands_logo/realme.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_chi_tiet_san_pham` int(11) NOT NULL,
  `tai_khoan` char(20) NOT NULL,
  `thoi_gian_dat` date NOT NULL DEFAULT current_timestamp(),
  `ten_nguoi_nhan` varchar(100) NOT NULL,
  `sdt_nguoi_nhan` char(10) NOT NULL,
  `dia_chi_nguoi_nhan` varchar(200) NOT NULL,
  `ghi_chu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `tai_khoan` char(20) NOT NULL,
  `mat_khau` varchar(30) NOT NULL,
  `ho_ten` varchar(200) NOT NULL,
  `so_dien_thoai` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `gioi_tinh` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`tai_khoan`, `mat_khau`, `ho_ten`, `so_dien_thoai`, `email`, `dia_chi`, `gioi_tinh`) VALUES
('demo', 'demo', 'name_demo', '1231231231', '123@gmail.com', '123,123123,123123123', 'nam'),
('demo123123', 'demo', 'Nguyen Quang Thuy', '0355457556', 'qthuy2609@gmail.com', '701/55, 30/4 street, Hung Loi ward', 'nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai`, `ten_loai`) VALUES
(1, 'Laptop'),
(2, 'Điện Thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(200) NOT NULL,
  `anh_san_pham` varchar(200) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `ma_hang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `anh_san_pham`, `ma_loai`, `ma_hang`) VALUES
(1, 'iPhone 13', './img/products/iphone-13-128gb.jpg', 2, 1),
(2, 'Điện thoại Samsung Galaxy S22 Ultra 5G', './img/products/samsung-galaxy-s22-ultra-128gb.jpg', 2, 2),
(3, 'Điện thoại OPPO Reno6 5G', './img/products/oppo-reno-6.jpg', 2, 3),
(4, 'Xiaomi 12 Pro', './img/products/xiaomi-12-pro.jpg', 2, 4),
(5, 'Điện thoại Nokia 8.1', './img/products/nokia-8-1.jpg', 2, 5),
(6, 'Điện thoại iPhone 12 Pro Max', './img/products/iphone-12-pro-max.jpeg', 2, 1),
(7, 'Điện thoại Vivo V23 5G', './img/products/vivo_v23.webp', 2, 6),
(8, 'Điện thoại Realme 9 Pro Plus 5G', './img/products/realme_9_pro_plus.webp', 2, 7),
(9, 'Điện thoại Samsung Galaxy S21 Ultra 5G', './img/products/samsung-galaxy-s21-ultra-5g.jpg', 2, 2),
(10, 'Điện thoại OPPO A76', './img/products/oppo-a76.jpg', 2, 3),
(11, 'Điện thoại Xiaomi Redmi Note 11 Pro 5G', './img/products/xiaomi-note-11-pro.jpg', 2, 4),
(12, 'iPhone 11', './img/products/iphone-11.jpg', 2, 1),
(13, 'Điện thoại Samsung Galaxy Z Flip3 5G', './img/products/samsung-galaxy-z-flip-3.jpg', 2, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_dien_thoai`
--
ALTER TABLE `chi_tiet_dien_thoai`
  ADD PRIMARY KEY (`ma_chi_tiet_san_pham`),
  ADD KEY `sanpham_chitietsanpham` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD KEY `hoadon_hoadonchitiet` (`ma_hoa_don`),
  ADD KEY `hoadonchitiet_sanphamchitiet` (`ma_chi_tiet_san_pham`);

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`ma_hang`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`),
  ADD KEY `hoadon_chitietsanpham` (`ma_chi_tiet_san_pham`),
  ADD KEY `hoadon_khachhang` (`tai_khoan`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`tai_khoan`);

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`),
  ADD KEY `sanpham_loaisanpham` (`ma_loai`),
  ADD KEY `sanpham_hang` (`ma_hang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_dien_thoai`
--
ALTER TABLE `chi_tiet_dien_thoai`
  MODIFY `ma_chi_tiet_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `ma_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_dien_thoai`
--
ALTER TABLE `chi_tiet_dien_thoai`
  ADD CONSTRAINT `sanpham_chitietsanpham` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`);

--
-- Các ràng buộc cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `hoadon_hoadonchitiet` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don` (`ma_hoa_don`),
  ADD CONSTRAINT `hoadonchitiet_sanphamchitiet` FOREIGN KEY (`ma_chi_tiet_san_pham`) REFERENCES `chi_tiet_dien_thoai` (`ma_chi_tiet_san_pham`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoadon_chitietsanpham` FOREIGN KEY (`ma_chi_tiet_san_pham`) REFERENCES `chi_tiet_dien_thoai` (`ma_chi_tiet_san_pham`),
  ADD CONSTRAINT `hoadon_khachhang` FOREIGN KEY (`tai_khoan`) REFERENCES `khach_hang` (`tai_khoan`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `sanpham_hang` FOREIGN KEY (`ma_hang`) REFERENCES `hang` (`ma_hang`),
  ADD CONSTRAINT `sanpham_loaisanpham` FOREIGN KEY (`ma_loai`) REFERENCES `loai_san_pham` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

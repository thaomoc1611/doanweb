-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 03:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appleshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `tenNguoiDung` varchar(50) DEFAULT NULL,
  `tenTaiKhoan` varchar(50) DEFAULT NULL,
  `maSP` int(11) DEFAULT NULL,
  `noiDung` varchar(200) NOT NULL,
  `thoiGian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdbh`
--

CREATE TABLE `chitietdbh` (
  `maChiTietDonBanHang` int(11) NOT NULL,
  `maDonHang` int(11) DEFAULT NULL,
  `maSP` int(11) DEFAULT NULL,
  `soLuong` int(11) NOT NULL,
  `donGiaBan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietgh`
--

CREATE TABLE `chitietgh` (
  `maChiTietGioHang` int(11) NOT NULL,
  `maGioHang` int(11) DEFAULT NULL,
  `maSP` int(11) DEFAULT NULL,
  `soLuong` int(11) NOT NULL,
  `donGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `maDanhGia` int(11) NOT NULL,
  `tenTK` varchar(50) DEFAULT NULL,
  `maSP` int(11) DEFAULT NULL,
  `soSAo` int(11) NOT NULL,
  `thoigian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donbanhang`
--

CREATE TABLE `donbanhang` (
  `maDonHang` int(11) NOT NULL,
  `tenTK` varchar(50) DEFAULT NULL,
  `tenKhachHang` varchar(50) NOT NULL,
  `ngayLap` date NOT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `tinhtrang` varchar(100) DEFAULT NULL,
  `phuongThucThanhToan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `maGioHang` int(11) NOT NULL,
  `tenTK` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `maND` int(11) NOT NULL,
  `tenND` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanloai`
--

CREATE TABLE `phanloai` (
  `maNhom` varchar(20) NOT NULL,
  `tenNhom` varchar(100) NOT NULL,
  `hinhAnh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phanloai`
--

INSERT INTO `phanloai` (`maNhom`, `tenNhom`, `hinhAnh`) VALUES
('1', 'Phone', '14black.jpg'),
('2', 'Tablet', 'ipad10bac.jpg'),
('3', 'Macbook', 'airm2xam.jpg'),
('4', 'Watch', 'watch8den.jpg'),
('5', 'Accessories', 'earpods.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `maQuyen` varchar(20) NOT NULL,
  `tenQuyen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanphams`
--

CREATE TABLE `sanphams` (
  `maSP` int(11) NOT NULL,
  `maNhom` varchar(20) DEFAULT NULL,
  `tenSP` varchar(100) NOT NULL,
  `thongtinSP` varchar(100) NOT NULL,
  `hinhAnh` varchar(200) DEFAULT NULL,
  `mausac` varchar(20) NOT NULL,
  `kichthuoc` varchar(20) NOT NULL,
  `dung luong` varchar(10) NOT NULL,
  `gia` int(11) NOT NULL,
  `soLuongBan` int(11) NOT NULL,
  `soHienCo` int(11) NOT NULL,
  `nhaSX` varchar(50) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanphams`
--

INSERT INTO `sanphams` (`maSP`, `maNhom`, `tenSP`, `thongtinSP`, `hinhAnh`, `mausac`, `kichthuoc`, `dung luong`, `gia`, `soLuongBan`, `soHienCo`, `nhaSX`, `tinhtrang`, `updated_at`, `created_at`) VALUES
(1, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14black.jpg', 'Đen', '6,1\\\"', '', 2000000, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(2, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14black.jpg', 'Đen', '6,1\\\"', '', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(3, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10bac.jpg', 'Bạc', '10,9\\\"', '', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(4, '1', 'iPhone14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14black.jpg', 'Đen', '6,1\\\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(5, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14blue.jpg', 'Xanh', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(6, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14blue.jpg', 'Xanh', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(7, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14purple.jpg', 'Tím', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(8, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14purple.jpg', 'Tím', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(9, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14purple.jpg', 'Tím', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(10, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14red.jpg', 'Đỏ', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(11, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14red.jpg', 'Đỏ', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(12, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14red.jpg', 'Đỏ', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(13, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14twhite.jpg', 'Trắng', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(14, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14twhite.jpg', 'Trắng', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(15, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14twhite.jpg', 'Trắng', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(16, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14yellow.jpg', 'Vàng', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(17, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14yellow.jpg', 'Vàng', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(18, '1', 'iPhone 14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14yellow.jpg', 'Vàng', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(19, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14black.jpg', 'Đen', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(20, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14black.jpg', 'Đen', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(21, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14black.jpg', 'Đen', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(22, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14blue.jpg', 'Xanh', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(23, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14blue.jpg', 'Xanh', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(24, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14blue.jpg', 'Xanh', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(25, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14purple.jpg', 'Tím', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(26, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14purple.jpg', 'Tím', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(27, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14purple.jpg', 'Tím', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(28, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14red.jpg', 'Đỏ', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(29, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14red.jpg', 'Đỏ', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(30, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14red.jpg', 'Đỏ', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(31, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14twhite.jpg', 'Trắng', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(32, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14twhite.jpg', 'Trắng', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(33, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14twhite.jpg', 'Trắng', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(34, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14yellow.jpg', 'Vàng', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(35, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14yellow.jpg', 'Vàng', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(36, '1', 'iPhone 14 Plus', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14yellow.jpg', 'Vàng', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(37, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pblack.png', 'Đen', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(38, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pblack.png', 'Đen', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(39, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pblack.png', 'Đen', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(40, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pblack.png', 'Đen', '6,1\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(41, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pgray.png', 'Bạc', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(42, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pgray.png', 'Bạc', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(43, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pgray.png', 'Bạc', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(44, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pgray.png', 'Bạc', '6,1\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(45, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Ppurple.png', 'Tím', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(46, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Ppurple.png', 'Tím', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(47, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Ppurple.png', 'Tím', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(48, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Ppurple.png', 'Tím', '6,1\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(49, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pyellow.jpg', 'Vàng', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(50, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pyellow.jpg', 'Vàng', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(51, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pyellow.jpg', 'Vàng', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(52, '1', 'iPhone 14 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pyellow.jpg', 'Vàng', '6,1\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(53, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pblack.png', 'Đen', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(54, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pblack.png', 'Đen', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(55, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pblack.png', 'Đen', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(56, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pblack.png', 'Đen', '6,7\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(57, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pgray.png', 'Bạc', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(58, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pgray.png', 'Bạc', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(59, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pgray.png', 'Bạc', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(60, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pgray.png', 'Bạc', '6,7\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(61, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Ppurple.png', 'Tím', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(62, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Ppurple.png', 'Tím', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(63, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Ppurple.png', 'Tím', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(64, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Ppurple.png', 'Tím', '6,7\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(65, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pyellow.jpg', 'Vàng', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(66, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pyellow.jpg', 'Vàng', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(67, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pyellow.jpg', 'Vàng', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(68, '1', 'iPhone 14 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14Pyellow.jpg', 'Vàng', '6,7\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(69, '1', 'iPhone SE', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'iphoneseden.jpg', 'Đen', '4,7\"', '64GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(70, '1', 'iPhone SE', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'iphoneseden.jpg', 'Đen', '4,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(71, '1', 'iPhone SE', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'iphoneseden.jpg', 'Đen', '4,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(72, '1', 'iPhone SE', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'iphonesedo.jpg', 'Đỏ', '4,7\"', '64GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(73, '1', 'iPhone SE', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'iphonesedo.jpg', 'Đỏ', '4,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(74, '1', 'iPhone SE', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'iphonesedo.jpg', 'Đỏ', '4,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(75, '1', 'iPhone SE', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'iphonesetrang.jpg', 'Trắng', '4,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(76, '1', 'iPhone SE', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'iphonesetrang.jpg', 'Trắng', '4,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(77, '1', 'iPhone SE', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'iphonesetrang.jpg', 'Trắng', '4,7\"', '64GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(78, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13den.jpg', 'Đen', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(79, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13den.jpg', 'Đen', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(80, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13den.jpg', 'Đen', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(81, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13do.jpg', 'Đỏ', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(82, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13do.jpg', 'Đỏ', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(83, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13do.jpg', 'Đỏ', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(84, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13hong.jpg', 'Hồng', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(85, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13hong.jpg', 'Hồng', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(86, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13hong.jpg', 'Hồng', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(87, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13trang.jpg', 'Trắng', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(88, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13trang.jpg', 'Trắng', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(89, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13trang.jpg', 'Trắng', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(90, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanh.jpg', 'Xanh lam', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(91, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanh.jpg', 'Xanh lam', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(92, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanh.jpg', 'Xanh lam', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(93, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanhl.jpg', 'Xanh lục', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(94, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanhl.jpg', 'Xanh lục', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(95, '1', 'iPhone 13', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanhl.jpg', 'Xanh lục', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(96, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13den.jpg', 'Đen', '5,4\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(97, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13den.jpg', 'Đen', '5,4\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(98, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13den.jpg', 'Đen', '5,4\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(99, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13do.jpg', 'Đỏ', '5,4\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(100, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13do.jpg', 'Đỏ', '5,4\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(101, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13do.jpg', 'Đỏ', '5,4\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(102, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13hong.jpg', 'Hồng', '5,4\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(103, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13hong.jpg', 'Hồng', '5,4\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(104, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13hong.jpg', 'Hồng', '5,4\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(105, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13trang.jpg', 'Trắng', '5,4\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(106, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13trang.jpg', 'Trắng', '5,4\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(107, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13trang.jpg', 'Trắng', '5,4\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(108, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanh.jpg', 'Xanh lam', '5,4\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(109, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanh.jpg', 'Xanh lam', '5,4\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(110, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanh.jpg', 'Xanh lam', '5,4\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(111, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanhl.jpg', 'Xanh lục', '5,4\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(112, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanhl.jpg', 'Xanh lục', '5,4\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(113, '1', 'iPhone 13 Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13xanhl.jpg', 'Xanh lục', '5,4\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(114, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pden.jpg', 'Đen', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(115, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pden.jpg', 'Đen', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(116, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pden.jpg', 'Đen', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(117, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pden.jpg', 'Đen', '6,7\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(118, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13ptrang.jpg', 'Trắng', '6,7\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(119, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13ptrang.jpg', 'Trắng', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(120, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13ptrang.jpg', 'Trắng', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(121, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13ptrang.jpg', 'Trắng', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(122, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pvang.jpg', 'Vàng', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(123, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pvang.jpg', 'Vàng', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(124, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pvang.jpg', 'Vàng', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(125, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pvang.jpg', 'Vàng', '6,7\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(126, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanh.jpg', 'Xanh lam', '6,7\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(127, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanh.jpg', 'Xanh lam', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(128, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanh.jpg', 'Xanh lam', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(129, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanh.jpg', 'Xanh lam', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(130, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanhl.jpg', 'Xanh lục', '6,7\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(131, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanhl.jpg', 'Xanh lục', '6,7\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(132, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanhl.jpg', 'Xanh lục', '6,7\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(133, '1', 'iPhone 13 Pro Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanhl.jpg', 'Xanh lục', '6,7\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(134, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pden.jpg', 'Đen', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(135, '1', 'iPhone14', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '14black.jpg', 'Đen', '6,1\\\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(136, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pden.jpg', 'Đen', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(137, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pden.jpg', 'Đen', '6,1\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(138, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13ptrang.jpg', 'Trắng', '6,1\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(139, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13ptrang.jpg', 'Trắng', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(140, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13ptrang.jpg', 'Trắng', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(141, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13ptrang.jpg', 'Trắng', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(142, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pvang.jpg', 'Vàng', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(143, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pvang.jpg', 'Vàng', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(144, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pvang.jpg', 'Vàng', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(145, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pvang.jpg', 'Vàng', '6,1\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(146, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanh.jpg', 'Xanh lam', '6,1\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(147, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanh.jpg', 'Xanh lam', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(148, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanh.jpg', 'Xanh lam', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(149, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanh.jpg', 'Xanh lam', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(150, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanhl.jpg', 'Xanh lục', '6,1\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(151, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanhl.jpg', 'Xanh lục', '6,1\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(152, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanhl.jpg', 'Xanh lục', '6,1\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(153, '1', 'iPhone 13 Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', '13pxanhl.jpg', 'Xanh lục', '6,1\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(154, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10bac.jpg', 'Bạc', '10,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(155, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10bac.jpg', 'Bạc', '10,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(156, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10bac.jpg', 'Bạc', '10,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(157, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10hong.jpg', 'Hồng', '10,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(158, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10hong.jpg', 'Hồng', '10,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(159, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10hong.jpg', 'Hồng', '10,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(160, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10vang.jpg', 'Vàng', '10,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(161, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10vang.jpg', 'Vàng', '10,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(162, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10vang.jpg', 'Vàng', '10,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(163, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10xanh.jpg', 'Xanh lam', '10,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(164, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10xanh.jpg', 'Xanh lam', '10,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(165, '2', 'iPad 10', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipad10xanh.jpg', 'Xanh lam', '10,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(166, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairhong.jpg', 'Hồng', '10,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(167, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairhong.jpg', 'Hồng', '10,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(168, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairhong.jpg', 'Hồng', '10,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(169, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairtim.jpg', 'Tím', '10,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(170, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairtim.jpg', 'Tím', '10,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(171, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairtim.jpg', 'Tím', '10,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(172, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairtrang.jpg', 'Trắng', '10,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(173, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairtrang.jpg', 'Trắng', '10,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(174, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairtrang.jpg', 'Trắng', '10,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(175, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairxam.jpg', 'Xám', '10,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(176, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairxam.jpg', 'Xám', '10,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(177, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairxam.jpg', 'Xám', '10,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(178, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairxanh.jpg', 'Xanh lam', '10,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(179, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairxanh.jpg', 'Xanh lam', '10,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(180, '2', 'iPad Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadairxanh.jpg', 'Xanh lam', '10,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(181, '2', 'iPad Pro M2', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadprom2_12.9trang.jpg', 'Bạc', '12,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(182, '2', 'iPad Pro M2', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadprom2_12.9trang.jpg', 'Bạc', '12,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(183, '2', 'iPad Pro M2', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadprom2_12.9.jpg', 'Xám', '12,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(184, '2', 'iPad Pro M2', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadprom2_12.9.jpg', 'Xám', '12,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(185, '2', 'iPad Pro M1', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadm1_xam.jpg', 'Xám', '12,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(186, '2', 'iPad Pro M1', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadm1_xam.jpg', 'Xám', '12,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(187, '2', 'iPad Pro M1', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadm1_trang.jpg', 'Bạc', '12,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(188, '2', 'iPad Pro M1', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadm1_trang.jpg', 'Bạc', '12,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(189, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadmini xam.jpg', 'Xám', '7,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(190, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadmini xam.jpg', 'Xám', '7,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(191, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadmini xam.jpg', 'Xám', '7,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(192, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadmini xam.jpg', 'Xám', '7,9\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(193, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminihong.jpg', 'Hồng', '7,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(194, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminihong.jpg', 'Hồng', '7,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(195, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminihong.jpg', 'Hồng', '7,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(196, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminihong.jpg', 'Hồng', '7,9\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(197, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminitim.jpg', 'Tím', '7,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(198, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminitim.jpg', 'Tím', '7,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(199, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminitim.jpg', 'Tím', '7,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(200, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminitim.jpg', 'Tím', '7,9\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(201, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminivang.jpg', 'Vàng', '7,9\"', '256GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(202, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminivang.jpg', 'Vàng', '7,9\"', '512GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(203, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminivang.jpg', 'Vàng', '7,9\"', '1TB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(204, '2', 'iPad Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'ipadminivang.jpg', 'Vàng', '7,9\"', '128GB', 0, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(205, '3', 'Macbook Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'airm2xam.jpg', 'Xám', '13\"', '512GB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(206, '3', 'Macbook Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'airm2xam.jpg', 'Xám', '13\"', '1TB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(207, '3', 'Macbook Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'airm2xam.jpg', 'Xám', '13\"', '256GB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(208, '3', 'Macbook Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'airm2xac.jpg', 'Bạc', '13\"', '256GB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(209, '3', 'Macbook Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'airm2xac.jpg', 'Bạc', '13\"', '512GB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(210, '3', 'Macbook Air', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'airm2xac.jpg', 'Bạc', '13\"', '1TB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(211, '3', 'Macbook Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'macbookproxam.jpg', 'Xám', '16\"', '1TB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(212, '3', 'Macbook Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'macbookproxam.jpg', 'Xám', '16\"', '512GB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(213, '3', 'Macbook Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'prom2bac.jpg', 'Bạc', '16\"', '512GB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(214, '3', 'Macbook Pro', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'prom2bac.jpg', 'Bạc', '16\"', '1TB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(215, '4', 'Apple Watch', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'watch8den.jpg', 'Đen', '1,9\"', '64GB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(216, '4', 'Apple Watch', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'watch8do.jpg', 'Đỏ', '1,9\"', '64GB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(217, '4', 'Apple Watch', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'watch8xam.jpg', 'Xám', '1,9\"', '64GB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(218, '4', 'Apple Watch', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'watchs8bac4g.jpg', 'Bạc', '1,9\"', '64GB', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(219, '5', 'Tai nghe Earpods', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'earpods.jpg', 'Trắng', '1,5m', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(220, '5', 'Tai nghe Airpod Max', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'airpodmax.jpg', 'Đồng', '1,5m', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(221, '5', 'Tai nghe Airpod 2', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'airpod2.jpg', 'Trắng', '', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(222, '5', 'Tai nghe Airpod Pro 2', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'airpodpro2.jpg', 'Trắng', '', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(223, '5', 'Tai nghe Airpod 3', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'airpod3.jpg', 'Trắng', '', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(224, '5', 'Chuột Magic Mouse', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'mouse.jpg', 'Trắng', '', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(225, '5', 'Apple Pencil', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'pencil1.jpg', 'Trắng', '', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(226, '5', 'Bàn phím Magic Keyboard', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'keyboardfull.jpg', 'Trắng', 'Fullsize', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(227, '5', 'Bàn phím Magic Keyboard TKL', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'keyboardtkl.jpg', 'Trắng', 'TKL', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(228, '5', 'Dây sạc Lightning', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'lightning1m.jpg', 'Trắng', '3m', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(229, '5', 'Củ sạc Apple', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'sac.jpg\r\n', 'Trắng', '20W', '', 0, 0, 50, 'Apple', 'Còn hàng', NULL, NULL),
(230, '3', 'iMac', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'imachongdo.jpg', 'Hồng', '27\"', '2TB', 0, 0, 20, 'Apple', 'Còn hàng', NULL, NULL),
(231, '3', 'iMac', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'imacxanh.jpg', 'Xanh lam', '27\"', '2TB', 0, 0, 20, 'Apple', 'Còn hàng', NULL, NULL);
INSERT INTO `sanphams` (`maSP`, `maNhom`, `tenSP`, `thongtinSP`, `hinhAnh`, `mausac`, `kichthuoc`, `dung luong`, `gia`, `soLuongBan`, `soHienCo`, `nhaSX`, `tinhtrang`, `updated_at`, `created_at`) VALUES
(232, '3', 'Mac Mini', 'Sản phẩm của Apple là những sản phẩm công nghệ hướng tới tương lai, giúp ích chúng ta trong các tác ', 'macmini.jpg', 'Bạc', '11\"', '1TB', 0, 0, 25, 'Apple', 'Còn hàng', NULL, NULL),
(233, '1', 'iphone', 'demo', 'asdas.png', 'Đen', '6,1\\\"', '345df', 32432, 0, 100, 'Apple', 'Còn hàng', NULL, NULL),
(234, '1', 'dss', 'ds', '43.df', 'è', 'sdf', 'sfd', 433, 324, 23432, 'fef', 'dsf', NULL, NULL),
(235, NULL, 'sdv', 'sad', 'chelsea-fc-wallpaper-preview.jpg', 'sdfds', '324', '324', 12, 23, 234324, 'ds', 'ềwff', '2023-07-04 02:34:00', '2023-07-04 02:34:00'),
(236, NULL, 'ipad123', 'dfedf', 'logo-blues-champions-chelsea-fc-wallpaper-preview.jpg', 'dnfjd', 'andk', 'sadm', 32, 34, 23, '324', '234', '2023-07-04 02:38:35', '2023-07-04 02:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tenTK` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `maQuyen` varchar(20) DEFAULT NULL,
  `maND` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`tenTK`, `matkhau`, `maQuyen`, `maND`) VALUES
('hung123456', '$2y$10$veAzSwNhbbiFzlnNffvgd.I7vz7lrRwtp/BMbJVafmB', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thongke`
--

CREATE TABLE `thongke` (
  `tongSoLuong` int(11) NOT NULL,
  `doanhThu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `birthday` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `phonenumber` int(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `birthday`, `gender`, `phonenumber`, `address`) VALUES
(9, 'hung', 'hung4@gmail.com', NULL, '$2y$10$jW6VjnBqxGOqPdqR.wxvqOKKcw0o/q.I9dkwD46syOV2930jUlgMy', NULL, '2023-06-22 03:36:32', '2023-07-04 00:57:33', '13/09/2002', NULL, 936475834, 'hanoivietnamâsd'),
(10, 'hung', 'hung5@gmail.com', NULL, '$2y$10$jL/kI/ggPmQiblNCaHYOIuooeYv3fjxObQ4PF960ipDZF7Cq49yWa', NULL, '2023-06-22 03:40:57', '2023-06-22 03:40:57', '19/3/2020', 'Nữ', 324762385, 'vietnamhanoi'),
(11, 'hung', 'hung6@gmail.com', NULL, '$2y$10$pgO1.mMX6/81upSAQg2.qufumllzZr9YP2j7kFIip/A/OzIlsmbxy', NULL, '2023-06-22 03:46:08', '2023-06-22 03:46:08', '14/5/2034', 'Nam', 343243322, 'Nghệ An'),
(12, 'hung', 'hung7@gmail.com', NULL, '$2y$10$nNiUAI8aYZhyfbg1Hh.6CuxEW0lttM4WbjOJb1OFivXi5EZFecXtG', NULL, '2023-06-22 03:47:17', '2023-06-22 03:47:17', '14/5/2034', 'Nữ', 343243322, 'Nghệ An'),
(13, 'hungclient', 'hungclient@gmail.com', NULL, '$2y$10$jtAItTfltE52K8ftnanAYuOn0eZwPlfniIsIg91yMGBeltTNiWn/G', NULL, '2023-07-02 23:28:21', '2023-07-02 23:28:21', '13/09/2001', 'Nam', 932478322, 'Hoàng Mai Hà Nội');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdbh`
--
ALTER TABLE `chitietdbh`
  ADD PRIMARY KEY (`maChiTietDonBanHang`),
  ADD KEY `maDonHang` (`maDonHang`);

--
-- Indexes for table `chitietgh`
--
ALTER TABLE `chitietgh`
  ADD PRIMARY KEY (`maChiTietGioHang`),
  ADD KEY `maGioHang` (`maGioHang`),
  ADD KEY `maSP` (`maSP`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`maDanhGia`),
  ADD KEY `tenTK` (`tenTK`),
  ADD KEY `maSP` (`maSP`);

--
-- Indexes for table `donbanhang`
--
ALTER TABLE `donbanhang`
  ADD PRIMARY KEY (`maDonHang`),
  ADD KEY `tenTK` (`tenTK`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`maGioHang`),
  ADD KEY `tenTK` (`tenTK`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`maND`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`maNhom`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`maQuyen`);

--
-- Indexes for table `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`maSP`),
  ADD KEY `maNhom` (`maNhom`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tenTK`),
  ADD KEY `maQuyen` (`maQuyen`),
  ADD KEY `maND` (`maND`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`tenTaiKhoan`) REFERENCES `taikhoan` (`tenTK`);

--
-- Constraints for table `chitietdbh`
--
ALTER TABLE `chitietdbh`
  ADD CONSTRAINT `chitietdbh_ibfk_2` FOREIGN KEY (`maDonHang`) REFERENCES `donbanhang` (`maDonHang`);

--
-- Constraints for table `chitietgh`
--
ALTER TABLE `chitietgh`
  ADD CONSTRAINT `chitietgh_ibfk_1` FOREIGN KEY (`maGioHang`) REFERENCES `giohang` (`maGioHang`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`tenTK`) REFERENCES `taikhoan` (`tenTK`);

--
-- Constraints for table `donbanhang`
--
ALTER TABLE `donbanhang`
  ADD CONSTRAINT `donbanhang_ibfk_1` FOREIGN KEY (`tenTK`) REFERENCES `taikhoan` (`tenTK`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`tenTK`) REFERENCES `taikhoan` (`tenTK`);

--
-- Constraints for table `sanphams`
--
ALTER TABLE `sanphams`
  ADD CONSTRAINT `sanphams_ibfk_1` FOREIGN KEY (`maNhom`) REFERENCES `phanloai` (`maNhom`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`maQuyen`) REFERENCES `quyen` (`maQuyen`),
  ADD CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`maND`) REFERENCES `nguoidung` (`maND`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

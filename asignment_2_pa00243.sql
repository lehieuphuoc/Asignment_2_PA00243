-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2025 lúc 02:17 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asignment_2_pa00243`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Thể thao'),
(2, 'Công nghệ'),
(3, 'Giải trí'),
(4, 'Kinh tế'),
(5, 'Giáo dục'),
(7, 'Thế Giới'),
(8, 'Trong Nước');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_28_023006_create_users_table', 2),
(5, '2025_03_29_065550_add_image_to_news_table', 3),
(6, '2025_04_16_061108_add_image_to_news_table', 4),
(7, '2025_04_16_081443_add_updated_at_to_news_table', 5),
(8, '2025_04_16_093016_add_role_to_users_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `views`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Arsenal biến Real Madrid thành cựu vương Champions League', 'Arsenal xuất sắc đánh bại Real Madrid 2-1 ở trận lượt về, qua đó tiến vào vòng bán kết Champions League 2024/25 với chiến thắng chung cuộc 5-1.', 'https://static-images.vnncdn.net/vps_images_publish/000001/000003/2025/4/17/truc-tiep-bong-da-real-madrid-1-1-arsenal-vinicius-go-hoa-tuc-khac-16683.jpg?width=550&s=zBmMuXWSBKXcZPQo9QhM8Q', 1, 1, '2025-04-14 17:02:11', '2025-04-14 17:02:11'),
(2, 'Đội hình Ngôi sao Đông Nam Á đấu MU: Buồn của Tiến Linh', 'Tiến Linh nằm trong top những chân sút hàng đầu Đông Nam Á mấy năm qua nhưng đã vắng tên trong đội hình các Ngôi sao Đông Nam Á đấu MU, được AFF công bố.', 'https://static-images.vnncdn.net/vps_images_publish/000001/000003/2025/4/16/doi-tuyen-viet-nam-110746.jpg?width=0&s=3y7xF-N5fY2-PYJ2Lil9jw', 0, 1, '2025-04-14 17:02:11', '2025-04-14 17:02:11'),
(3, 'Top 10 chân sút hay nhất lịch sử AFF Cup: Tuyển Việt Nam góp 2', 'Trong top 10 cầu thủ ghi bàn tốt nhất lịch sử AFF Cup, bóng đá Việt Nam có hai cái tên góp mặt là Lê Công Vinh và Lê Huỳnh Đức.', 'https://static-images.vnncdn.net/vps_images_publish/000001/000003/2024/12/6/kiatisuk-senamuang-80228.jpg?width=0&s=BegCFIAYYAyENpmrs2Szyw', 0, 1, '2025-04-14 17:02:11', '2025-04-16 17:05:22'),
(8, 'Trường đại học đầu tiên phía Nam công bố phương án tuyển sinh chính thức', 'Trường Đại học Nha Trang công bố phương án tuyển sinh chính thức 2025. Nhà trường không xét tuyển học bạ mà sử dụng làm điều kiện sơ tuyển trong phương thức xét điểm thi tốt nghiệp.', 'https://static-images.vnncdn.net/vps_images_publish/000001/000003/2025/4/16/truong-dai-hoc-dau-tien-phia-nam-cong-bo-phuong-an-tuyen-sinh-chinh-thuc-86210.jpg?width=360&s=spWV-xWCIcpCtL9KPIwyVA', 0, 5, '2025-04-15 17:07:56', '2025-04-15 17:07:56'),
(10, 'Giáo viên mầm non đưa bé 22 tháng tuổi vào góc lớp đánh liên tiếp', 'Theo đoạn clip được chia sẻ, khi các bé đang ở trong lớp, cô giáo đã bế một em nhỏ vào góc lớp rồi đánh liên tiếp trước sự chứng kiến của nhiều học sinh.', 'https://static-images.vnncdn.net/vps_images_publish/000001/000003/2025/4/16/w-bac-giang-c-11jpg-96146.jpg?width=0&s=lVBKH4azqUrUksozcodVFQ', 0, 5, '2025-04-15 17:08:05', '2025-04-15 17:08:05'),
(15, 'Tạm đình chỉ cơ sở mầm non vụ cô giáo xách ngược trẻ 20 tháng tuổi đánh tới tấp', 'Sáng 12/4, cơ quan chức năng tại Quảng Nam đã tạm đình chỉ hoạt động của cơ sở mầm non xảy ra vụ việc trẻ 20 tháng tuổi bị cô giáo xách ngược, đánh đập.', 'https://static-images.vnncdn.net/vps_images_publish/000001/000003/2025/4/12/vu-tre-20-thang-tuoi-bi-xach-nguoc-danh-toi-tap-bao-mau-thua-nhan-bao-hanh-2-be-50664.jpg?width=260&s=Xg7bIAn6F6v3oyazGgnMzg', 0, 5, '2025-04-15 17:08:10', '2025-04-15 17:08:10'),
(25, 'Diễn viên Khánh Ly tiết lộ cảnh quay xúc động kẹt trong địa đạo lúc 2h sáng', 'Diễn viên Khánh Ly tiết lộ cảnh quay xúc động kẹt trong địa đạo lúc 2h sáng', 'https://static-images.vnncdn.net/vps_images_publish/000001/000003/2025/4/11/khanhly02-116366.jpg?width=0&s=wBuNB7NnHpoasVZ3bH8Obw', 0, 3, '2025-04-15 17:08:12', '2025-04-15 17:08:12'),
(26, '\'Những chặng đường bụi bặm\' tập 17: Công an ập tới khi Nguyên ra mắt họ hàng ông Nhân', 'Trong tập 17 \"Những chặng đường bụi bặm\", đúng lúc Nguyên đang ra mắt họ hàng nhà ông Nhân thì công an ập tới.', 'https://static-images.vnncdn.net/vps_images_publish/000001/000003/2025/4/12/dien-vien-van-bau-chuyen-vai-lanh-dao-cong-an-bat-ngo-tro-lai-man-anh-o-tuoi-73-37790.jpg?width=260&s=3-xqGXafJNauIeZPg9VSSQ', 0, 3, '2025-04-15 17:17:22', '2025-04-15 17:17:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('tuETxdXusvnSlWCzDBgZNnkJaUQr8n4QXd37aGIq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieExiNnU4ck5rNXF5enAzUVdtVTFrellkREhYQzNRSkwzTVNRTnVBbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6OTAwMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1743601395);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lê Hiểu Phước', 'lehieuphuoc35205@gmail.com', 1, '$2y$12$MxG3htJtjgeWnDs.kFoTde0R/6yeGzz7llKclHmZ3UDoIZMKiyaRm', NULL, NULL, '2025-04-16 15:32:01', '2025-04-16 15:32:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_news_category` (`category_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

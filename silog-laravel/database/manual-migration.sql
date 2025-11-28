-- Create news table
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL UNIQUE,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` date NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `tags` json DEFAULT NULL,
  `download_file` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_category_index` (`category`),
  KEY `news_is_published_index` (`is_published`),
  KEY `news_published_at_index` (`published_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create galleries table
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'general',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_category_index` (`category`),
  KEY `galleries_is_active_index` (`is_active`),
  KEY `galleries_sort_order_index` (`sort_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create board_members table
CREATE TABLE IF NOT EXISTS `board_members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `type` enum('direksi','komisaris') NOT NULL,
  `profile` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `experiences` json DEFAULT NULL,
  `educations` json DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `board_members_type_index` (`type`),
  KEY `board_members_is_active_index` (`is_active`),
  KEY `board_members_sort_order_index` (`sort_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample news data
INSERT INTO `news` (`title`, `excerpt`, `content`, `category`, `slug`, `published_at`, `author`, `tags`, `is_published`, `is_featured`, `created_at`, `updated_at`) VALUES
('SILOG Raih Penghargaan Perusahaan Logistik Terbaik 2024', 'SILOG berhasil meraih penghargaan sebagai Perusahaan Logistik Terbaik tahun 2024 dalam ajang Indonesia Logistics Awards.', '<p>PT Semen Indonesia Logistik (SILOG) berhasil meraih penghargaan bergengsi sebagai Perusahaan Logistik Terbaik tahun 2024 dalam ajang Indonesia Logistics Awards yang diselenggarakan di Jakarta Convention Center.</p><p>Penghargaan ini diberikan atas komitmen SILOG dalam memberikan layanan logistik berkualitas tinggi dan inovasi berkelanjutan dalam industri logistik Indonesia.</p>', 'penghargaan', 'silog-raih-penghargaan-perusahaan-logistik-terbaik-2024', '2024-11-21', 'Tim Redaksi SILOG', '["penghargaan", "logistik", "prestasi"]', 1, 1, NOW(), NOW()),
('Kerjasama Strategis dengan Pelabuhan Tanjung Priok', 'SILOG menandatangani MoU kerjasama strategis dengan Pelabuhan Tanjung Priok untuk meningkatkan efisiensi distribusi.', '<p>SILOG menandatangani Memorandum of Understanding (MoU) kerjasama strategis dengan PT Pelabuhan Indonesia II (Persero) untuk optimalisasi layanan logistik di Pelabuhan Tanjung Priok.</p><p>Kerjasama ini diharapkan dapat meningkatkan efisiensi distribusi dan memperkuat posisi SILOG sebagai penyedia layanan logistik terpercaya.</p>', 'kerjasama', 'kerjasama-strategis-dengan-pelabuhan-tanjung-priok', '2024-11-16', 'Tim Redaksi SILOG', '["kerjasama", "pelabuhan", "distribusi"]', 1, 0, NOW(), NOW()),
('Peluncuran Sistem Tracking Digital Terbaru', 'SILOG memperkenalkan sistem tracking digital terbaru yang memungkinkan pelanggan memantau pengiriman secara real-time.', '<p>SILOG meluncurkan sistem tracking digital terbaru yang mengintegrasikan teknologi IoT dan AI untuk memberikan visibilitas penuh kepada pelanggan dalam memantau status pengiriman mereka.</p><p>Sistem ini dilengkapi dengan notifikasi real-time dan dashboard interaktif yang user-friendly.</p>', 'inovasi', 'peluncuran-sistem-tracking-digital-terbaru', '2024-11-11', 'Tim Redaksi SILOG', '["teknologi", "inovasi", "tracking"]', 1, 0, NOW(), NOW());

-- Insert sample gallery data
INSERT INTO `galleries` (`title`, `description`, `image`, `category`, `sort_order`, `created_at`, `updated_at`) VALUES
('Peluncuran Armada Baru SILOG', 'Acara peluncuran armada truk baru SILOG untuk meningkatkan kapasitas distribusi', 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop', 'event', 1, NOW(), NOW()),
('Fasilitas Gudang Modern', 'Gudang modern SILOG dengan teknologi otomasi terdepan', 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&h=600&fit=crop', 'facility', 2, NOW(), NOW()),
('Tim Profesional SILOG', 'Tim profesional SILOG yang berpengalaman dalam layanan logistik', 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=600&fit=crop', 'team', 3, NOW(), NOW()),
('Penandatanganan MoU Kerjasama', 'Momen penandatanganan MoU kerjasama strategis dengan mitra bisnis', 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&h=600&fit=crop', 'partnership', 4, NOW(), NOW()),
('Penerimaan Penghargaan', 'Momen penerimaan penghargaan Perusahaan Logistik Terbaik 2024', 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=600&fit=crop', 'achievement', 5, NOW(), NOW()),
('Workshop Teknologi Logistik', 'Workshop internal tentang implementasi teknologi terbaru dalam logistik', 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop', 'event', 6, NOW(), NOW());
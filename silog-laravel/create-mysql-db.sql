-- SQL untuk membuat database dan tabel SILOG
CREATE DATABASE IF NOT EXISTS silog_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE silog_db;

-- Tabel migrations
CREATE TABLE migrations (
    id int unsigned NOT NULL AUTO_INCREMENT,
    migration varchar(255) NOT NULL,
    batch int NOT NULL,
    PRIMARY KEY (id)
);

-- Tabel contents
CREATE TABLE contents (
    id bigint unsigned NOT NULL AUTO_INCREMENT,
    type varchar(50) NOT NULL,
    title varchar(255) DEFAULT NULL,
    subtitle text,
    description text,
    image varchar(500) DEFAULT NULL,
    icon varchar(100) DEFAULT NULL,
    date date DEFAULT NULL,
    link varchar(500) DEFAULT NULL,
    data json DEFAULT NULL,
    `order` int DEFAULT 0,
    is_active tinyint(1) DEFAULT 1,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL,
    PRIMARY KEY (id),
    KEY idx_type_active (type, is_active),
    KEY idx_order (`order`)
);

-- Insert data content
INSERT INTO contents (type, title, subtitle, description, image, icon, date, link, `order`, is_active, created_at, updated_at) VALUES
-- Hero
('hero', 'Solusi Logistik Terdepan Indonesia', 'Melayani kebutuhan logistik, konstruksi, dan distribusi dengan teknologi modern dan jaringan nasional yang luas.', NULL, 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop', NULL, NULL, NULL, 1, 1, NOW(), NOW()),

-- About
('about', 'Pengalaman 65+ Tahun', NULL, 'Berdiri sejak 1957, SILOG telah menjadi bagian integral dari pertumbuhan industri Indonesia dengan pengalaman lebih dari 6 dekade.', NULL, 'fas fa-history', NULL, NULL, 1, 1, NOW(), NOW()),
('about', 'Standar Internasional', NULL, 'Berkomitmen memberikan layanan terbaik dengan standar ISO dan teknologi terdepan untuk kepuasan pelanggan.', NULL, 'fas fa-award', NULL, NULL, 2, 1, NOW(), NOW()),
('about', 'Jangkauan Nasional', NULL, 'Melayani seluruh Indonesia dengan 50+ cabang dan jaringan distribusi yang terintegrasi dari Sabang sampai Merauke.', NULL, 'fas fa-globe-asia', NULL, NULL, 3, 1, NOW(), NOW()),

-- Services
('service', 'Logistik & Transportasi', NULL, 'Layanan logistik terintegrasi dengan armada modern dan sistem tracking real-time untuk pengiriman yang efisien ke seluruh nusantara.', NULL, NULL, NULL, '#logistics', 1, 1, NOW(), NOW()),
('service', 'Konstruksi & Manufaktur', NULL, 'Solusi konstruksi dengan standar kualitas tinggi untuk proyek infrastruktur, perumahan, dan pembangunan komersial.', NULL, NULL, NULL, '#construction', 2, 1, NOW(), NOW()),
('service', 'Distribusi & Warehousing', NULL, 'Jaringan gudang modern dengan sistem manajemen otomatis dan cold storage untuk berbagai jenis produk.', NULL, NULL, NULL, '#distribution', 3, 1, NOW(), NOW()),

-- Subsidiaries
('subsidiary', 'SILOG Transport', NULL, 'Spesialis transportasi darat, laut, dan udara', NULL, 'fas fa-shipping-fast', NULL, NULL, 1, 1, NOW(), NOW()),
('subsidiary', 'SILOG Warehouse', NULL, 'Manajemen gudang dan cold storage modern', NULL, 'fas fa-warehouse', NULL, NULL, 2, 1, NOW(), NOW()),
('subsidiary', 'SILOG Construction', NULL, 'Layanan konstruksi dan manufaktur terpadu', NULL, 'fas fa-tools', NULL, NULL, 3, 1, NOW(), NOW()),
('subsidiary', 'SILOG Digital', NULL, 'Solusi teknologi dan transformasi digital', NULL, 'fas fa-network-wired', NULL, NULL, 4, 1, NOW(), NOW()),

-- News
('news', 'SILOG Raih Penghargaan Best Logistics Company 2024', NULL, 'SILOG berhasil meraih penghargaan sebagai perusahaan logistik terbaik Indonesia 2024 dari Kementerian Perhubungan atas inovasi dan pelayanan prima.', NULL, NULL, '2025-01-15', '#news-1', 1, 1, NOW(), NOW()),
('news', 'Ekspansi Gudang Baru di Kalimantan Timur', NULL, 'Pembukaan fasilitas gudang modern seluas 10 hektar di Balikpapan untuk mendukung distribusi wilayah Indonesia Timur dengan kapasitas 75.000 ton.', NULL, NULL, '2025-01-10', '#news-2', 2, 1, NOW(), NOW()),
('news', 'Kemitraan Strategis untuk Proyek IKN Nusantara', NULL, 'SILOG menjalin kemitraan dengan kontraktor utama untuk mendukung pembangunan Ibu Kota Nusantara dengan layanan logistik senilai Rp 3.2 triliun.', NULL, NULL, '2025-01-05', '#news-3', 3, 1, NOW(), NOW()),

-- Gallery
('gallery', 'Fasilitas Gudang Otomatis SILOG', NULL, 'Gudang berteknologi AI dengan sistem sortir otomatis dan kapasitas 100.000 ton', 'https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?w=1200&h=400&fit=crop', NULL, NULL, NULL, 1, 1, NOW(), NOW()),
('gallery', 'Armada Transportasi Terintegrasi', NULL, 'Fleet modern dengan GPS tracking dan sistem keamanan berlapis untuk pengiriman akurat', 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&h=400&fit=crop', NULL, NULL, NULL, 2, 1, NOW(), NOW()),
('gallery', 'Proyek Konstruksi Infrastruktur', NULL, 'Pengalaman menangani mega proyek jembatan, pelabuhan, dan infrastruktur nasional', 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1200&h=400&fit=crop', NULL, NULL, NULL, 3, 1, NOW(), NOW()),
('gallery', 'Tim Profesional Bersertifikat', NULL, 'SDM terlatih dengan sertifikasi internasional untuk memberikan layanan berkualitas tinggi', 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=400&fit=crop', NULL, NULL, NULL, 4, 1, NOW(), NOW());
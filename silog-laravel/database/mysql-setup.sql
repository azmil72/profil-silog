-- Setup MySQL Database untuk SILOG
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
    date varchar(50) DEFAULT NULL,
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

-- Insert Hero Content (4 banners)
INSERT INTO contents (type, title, subtitle, image, link, `order`, is_active, created_at, updated_at) VALUES
('hero', 'Solusi Logistik Terdepan', 'Solusi terpercaya untuk kebutuhan logistik, konstruksi, dan distribusi di seluruh Indonesia.', 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop', 'Jelajahi Layanan Kami', 1, 1, NOW(), NOW()),
('hero', 'Konstruksi & Manufaktur Berkualitas', 'Membangun masa depan Indonesia dengan teknologi konstruksi modern dan proses manufaktur yang berkelanjutan.', 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&h=600&fit=crop', 'Lihat Proyek Kami', 2, 1, NOW(), NOW()),
('hero', 'Jaringan Distribusi Nasional', 'Menjangkau seluruh nusantara dengan jaringan distribusi yang luas dan sistem manajemen yang terintegrasi.', 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=800&h=600&fit=crop', 'Pelajari Jaringan Kami', 3, 1, NOW(), NOW()),
('hero', 'Inovasi & Teknologi Digital', 'Menggunakan teknologi terkini dalam setiap aspek operasional untuk memberikan pelayanan yang efisien dan berkelanjutan.', 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=800&h=600&fit=crop', 'Temukan Inovasi Kami', 4, 1, NOW(), NOW());

-- Insert About Content (3 cards)
INSERT INTO contents (type, title, description, icon, `order`, is_active, created_at, updated_at) VALUES
('about', 'Sejarah Panjang', 'Berdiri sejak tahun 1957, SILOG telah menjadi bagian integral dari pertumbuhan industri Indonesia dengan pengalaman lebih dari 6 dekade dalam layanan logistik.', 'fas fa-history', 1, 1, NOW(), NOW()),
('about', 'Standar Kualitas', 'Berkomitmen memberikan layanan terbaik dengan standar internasional dan teknologi terdepan untuk memenuhi kebutuhan pelanggan.', 'fas fa-award', 2, 1, NOW(), NOW()),
('about', 'Jangkauan Nasional', 'Melayani seluruh Indonesia dengan jaringan distribusi yang luas dan infrastruktur logistik yang modern dan terintegrasi.', 'fas fa-globe-asia', 3, 1, NOW(), NOW());

-- Insert Service Content (3 services)
INSERT INTO contents (type, title, description, link, `order`, is_active, created_at, updated_at) VALUES
('service', 'Logistik', 'Layanan logistik terintegrasi dengan teknologi terdepan untuk memastikan pengiriman yang efisien dan tepat waktu ke seluruh Indonesia.', '#logistics', 1, 1, NOW(), NOW()),
('service', 'Konstruksi & Manufaktur', 'Solusi konstruksi dan manufaktur dengan standar kualitas tinggi untuk mendukung proyek-proyek pembangunan nasional.', '#construction', 2, 1, NOW(), NOW()),
('service', 'Distribusi', 'Jaringan distribusi yang luas dan efisien untuk memastikan produk sampai ke tangan konsumen dengan kondisi terbaik.', '#distribution', 3, 1, NOW(), NOW());

-- Insert Subsidiary Content (4 companies)
INSERT INTO contents (type, title, description, icon, `order`, is_active, created_at, updated_at) VALUES
('subsidiary', 'SILOG Transport', 'Spesialis transportasi dan pengiriman', 'fas fa-shipping-fast', 1, 1, NOW(), NOW()),
('subsidiary', 'SILOG Warehouse', 'Manajemen gudang dan penyimpanan', 'fas fa-warehouse', 2, 1, NOW(), NOW()),
('subsidiary', 'SILOG Construction', 'Layanan konstruksi dan manufaktur', 'fas fa-tools', 3, 1, NOW(), NOW()),
('subsidiary', 'SILOG Solutions', 'Solusi teknologi dan inovasi', 'fas fa-network-wired', 4, 1, NOW(), NOW());

-- Insert News Content (3 articles)
INSERT INTO contents (type, title, description, date, link, `order`, is_active, created_at, updated_at) VALUES
('news', 'SILOG Luncurkan Teknologi AI untuk Optimasi Rute Distribusi', 'Inovasi terbaru SILOG dalam menggunakan artificial intelligence untuk meningkatkan efisiensi distribusi dan mengurangi waktu pengiriman hingga 30% lebih cepat.', '28 Agustus 2025', '#news-1', 1, 1, NOW(), NOW()),
('news', 'Ekspansi Gudang Baru di Wilayah Indonesia Timur', 'SILOG membuka fasilitas gudang modern baru di Papua untuk meningkatkan pelayanan logistik di wilayah Indonesia Timur dengan kapasitas 50.000 ton.', '25 Agustus 2025', '#news-2', 2, 1, NOW(), NOW()),
('news', 'Kemitraan Strategis dengan BUMN untuk Proyek IKN', 'SILOG menjalin kemitraan strategis untuk mendukung pembangunan Ibu Kota Nusantara dengan layanan logistik terintegrasi senilai Rp 2.5 triliun.', '22 Agustus 2025', '#news-3', 3, 1, NOW(), NOW());

-- Insert Gallery Content (4 images)
INSERT INTO contents (type, title, description, image, `order`, is_active, created_at, updated_at) VALUES
('gallery', 'Fasilitas Gudang Modern SILOG', 'Gudang berteknologi tinggi dengan sistem otomatis untuk efisiensi maksimal', 'https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?w=1200&h=400&fit=crop', 1, 1, NOW(), NOW()),
('gallery', 'Armada Transportasi Terintegrasi', 'Fleet modern dengan tracking real-time untuk pengiriman yang akurat', 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&h=400&fit=crop', 2, 1, NOW(), NOW()),
('gallery', 'Proyek Konstruksi Skala Besar', 'Pengalaman dalam menangani proyek infrastruktur dan konstruksi nasional', 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1200&h=400&fit=crop', 3, 1, NOW(), NOW()),
('gallery', 'Tim Profesional SILOG', 'SDM berpengalaman dan terlatih untuk memberikan layanan terbaik', 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=400&fit=crop', 4, 1, NOW(), NOW());
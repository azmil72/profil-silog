CREATE DATABASE IF NOT EXISTS silog_website;
USE silog_website;

CREATE TABLE IF NOT EXISTS contents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL,
    title VARCHAR(255) NOT NULL,
    subtitle TEXT,
    description TEXT,
    image VARCHAR(255),
    icon VARCHAR(255),
    date DATE,
    link VARCHAR(255),
    data TEXT,
    `order` INT DEFAULT 0,
    is_active BOOLEAN DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO contents (type, title, subtitle, description, image, `order`, is_active) VALUES
('hero', 'Sistem Informasi Logistik', 'Solusi Terpadu untuk Manajemen Logistik', 'Platform digital yang mengintegrasikan seluruh aspek logistik untuk efisiensi maksimal', 'assets/images/hero-bg.jpg', 1, 1),
('hero', 'Teknologi Terdepan', 'Inovasi dalam Setiap Solusi', 'Menggunakan teknologi terkini untuk memberikan layanan logistik yang optimal', 'assets/images/hero-bg2.jpg', 2, 1),
('hero', 'Layanan Profesional', 'Tim Ahli Berpengalaman', 'Didukung oleh tim profesional dengan pengalaman puluhan tahun di bidang logistik', 'assets/images/hero-bg3.jpg', 3, 1),
('hero', 'Jangkauan Nasional', 'Melayani Seluruh Indonesia', 'Jaringan distribusi yang luas untuk memenuhi kebutuhan logistik di seluruh nusantara', 'assets/images/hero-bg4.jpg', 4, 1);

INSERT INTO contents (type, title, description, icon, `order`, is_active) VALUES
('about', 'Visi Kami', 'Menjadi perusahaan logistik terdepan yang memberikan solusi inovatif dan berkelanjutan untuk mendukung pertumbuhan ekonomi Indonesia.', 'fas fa-eye', 1, 1),
('about', 'Misi Kami', 'Menyediakan layanan logistik terintegrasi dengan teknologi terdepan, membangun kemitraan strategis, dan menciptakan nilai tambah bagi seluruh stakeholder.', 'fas fa-bullseye', 2, 1),
('about', 'Nilai Kami', 'Integritas, Inovasi, Kualitas, dan Keberlanjutan adalah fondasi dalam setiap layanan yang kami berikan kepada mitra dan pelanggan.', 'fas fa-heart', 3, 1);

INSERT INTO contents (type, title, description, icon, `order`, is_active) VALUES
('services', 'Manajemen Gudang', 'Sistem manajemen gudang terintegrasi dengan teknologi WMS untuk efisiensi maksimal dalam penyimpanan dan distribusi barang.', 'fas fa-warehouse', 1, 1),
('services', 'Transportasi & Distribusi', 'Layanan transportasi dan distribusi dengan armada lengkap dan jaringan yang luas untuk menjangkau seluruh Indonesia.', 'fas fa-truck', 2, 1),
('services', 'Supply Chain Management', 'Solusi manajemen rantai pasok end-to-end yang mengoptimalkan alur barang dari supplier hingga konsumen akhir.', 'fas fa-link', 3, 1);

INSERT INTO contents (type, title, description, image, link, `order`, is_active) VALUES
('subsidiaries', 'PT Logistik Nusantara', 'Spesialis dalam layanan logistik domestik dengan jangkauan seluruh Indonesia dan armada yang lengkap.', 'assets/images/subsidiary1.jpg', 'https://logistiknusantara.com', 1, 1),
('subsidiaries', 'PT Cargo Express', 'Layanan kargo ekspres untuk pengiriman cepat dan aman dengan tracking real-time dan jaminan ketepatan waktu.', 'assets/images/subsidiary2.jpg', 'https://cargoexpress.com', 2, 1),
('subsidiaries', 'PT Warehouse Solutions', 'Penyedia solusi pergudangan modern dengan teknologi otomasi dan sistem manajemen terintegrasi.', 'assets/images/subsidiary3.jpg', 'https://warehousesolutions.com', 3, 1),
('subsidiaries', 'PT Digital Logistics', 'Platform digital untuk manajemen logistik dengan fitur AI dan analytics untuk optimasi operasional.', 'assets/images/subsidiary4.jpg', 'https://digitallogistics.com', 4, 1);

INSERT INTO contents (type, title, description, image, date, link, `order`, is_active) VALUES
('news', 'Ekspansi Jaringan Distribusi ke Wilayah Timur Indonesia', 'SILOG memperluas jangkauan layanan dengan membuka 15 cabang baru di wilayah Indonesia Timur untuk mendukung pertumbuhan ekonomi daerah.', 'assets/images/news1.jpg', '2024-01-15', '#', 1, 1),
('news', 'Implementasi Teknologi AI dalam Sistem Logistik', 'Penerapan kecerdasan buatan untuk optimasi rute pengiriman dan prediksi demand yang lebih akurat, meningkatkan efisiensi hingga 35%.', 'assets/images/news2.jpg', '2024-01-10', '#', 2, 1),
('news', 'Kemitraan Strategis dengan E-commerce Terkemuka', 'SILOG menjalin kemitraan dengan platform e-commerce besar untuk menyediakan layanan fulfillment dan last-mile delivery yang lebih baik.', 'assets/images/news3.jpg', '2024-01-05', '#', 3, 1);

INSERT INTO contents (type, title, image, `order`, is_active) VALUES
('gallery', 'Fasilitas Gudang Modern', 'assets/images/gallery1.jpg', 1, 1),
('gallery', 'Armada Transportasi', 'assets/images/gallery2.jpg', 2, 1),
('gallery', 'Teknologi Warehouse Management', 'assets/images/gallery3.jpg', 3, 1),
('gallery', 'Tim Profesional', 'assets/images/gallery4.jpg', 4, 1);
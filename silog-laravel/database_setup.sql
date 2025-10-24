-- Script untuk setup database SILOG
-- Jalankan script ini di phpMyAdmin

-- 1. Buat database
CREATE DATABASE IF NOT EXISTS silog_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 2. Gunakan database
USE silog_db;

-- 3. Buat tabel migrations (Laravel memerlukan ini)
CREATE TABLE IF NOT EXISTS migrations (
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    migration varchar(255) NOT NULL,
    batch int(11) NOT NULL,
    PRIMARY KEY (id)
);

-- 4. Buat tabel banners
CREATE TABLE IF NOT EXISTS banners (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    title varchar(255) NOT NULL,
    subtitle varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL,
    PRIMARY KEY (id)
);

-- 5. Insert data contoh untuk banners
INSERT INTO banners (title, subtitle, image, created_at, updated_at) VALUES
('Solusi Logistik Terdepan', 'Solusi terpercaya untuk kebutuhan logistik, konstruksi, dan distribusi di seluruh Indonesia.', 'aset 1.png', NOW(), NOW()),
('Konstruksi & Manufaktur Berkualitas', 'Membangun masa depan Indonesia dengan teknologi konstruksi modern dan proses manufaktur yang berkelanjutan.', 'aset 2.jpg', NOW(), NOW()),
('Jaringan Distribusi Nasional', 'Menjangkau seluruh nusantara dengan jaringan distribusi yang luas dan sistem manajemen yang terintegrasi.', 'aset 3.jpg', NOW(), NOW()),
('Inovasi & Teknologi Digital', 'Menggunakan teknologi terkini dalam setiap aspek operasional untuk memberikan pelayanan yang efisien dan berkelanjutan.', 'aset 4.jpg', NOW(), NOW());

-- 6. Insert record migration untuk Laravel
INSERT INTO migrations (migration, batch) VALUES
('2025_10_23_005547_create_banners_table', 1);

-- 7. Buat tabel users (Laravel default)
CREATE TABLE IF NOT EXISTS users (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    email_verified_at timestamp NULL DEFAULT NULL,
    password varchar(255) NOT NULL,
    remember_token varchar(100) DEFAULT NULL,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY users_email_unique (email)
);

-- 8. Buat tabel cache (Laravel default)
CREATE TABLE IF NOT EXISTS cache (
    `key` varchar(255) NOT NULL,
    value mediumtext NOT NULL,
    expiration int(11) NOT NULL,
    PRIMARY KEY (`key`)
);

CREATE TABLE IF NOT EXISTS cache_locks (
    `key` varchar(255) NOT NULL,
    owner varchar(255) NOT NULL,
    expiration int(11) NOT NULL,
    PRIMARY KEY (`key`)
);

-- 9. Buat tabel jobs (Laravel default)
CREATE TABLE IF NOT EXISTS jobs (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    queue varchar(255) NOT NULL,
    payload longtext NOT NULL,
    attempts tinyint(3) unsigned NOT NULL,
    reserved_at int(10) unsigned DEFAULT NULL,
    available_at int(10) unsigned NOT NULL,
    created_at int(10) unsigned NOT NULL,
    PRIMARY KEY (id),
    KEY jobs_queue_index (queue)
);

CREATE TABLE IF NOT EXISTS job_batches (
    id varchar(255) NOT NULL,
    name varchar(255) NOT NULL,
    total_jobs int(11) NOT NULL,
    pending_jobs int(11) NOT NULL,
    failed_jobs int(11) NOT NULL,
    failed_job_ids longtext NOT NULL,
    options mediumtext DEFAULT NULL,
    cancelled_at int(10) unsigned DEFAULT NULL,
    created_at int(10) unsigned NOT NULL,
    finished_at int(10) unsigned DEFAULT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS failed_jobs (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    uuid varchar(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload longtext NOT NULL,
    exception longtext NOT NULL,
    failed_at timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (id),
    UNIQUE KEY failed_jobs_uuid_unique (uuid)
);

-- Selesai! Database silog_db sudah siap digunakan.
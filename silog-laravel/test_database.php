<?php
// File untuk testing koneksi database MySQL
// Jalankan dengan: php test_database.php

$host = '127.0.0.1';
$dbname = 'silog_db';
$username = 'root';
$password = '';

try {
    echo "Testing koneksi database MySQL...\n";
    echo "Host: $host\n";
    echo "Database: $dbname\n";
    echo "Username: $username\n\n";
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "✅ Koneksi database berhasil!\n\n";
    
    // Test query tabel banners
    echo "Testing tabel banners...\n";
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM banners");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo "✅ Tabel banners ditemukan!\n";
    echo "📊 Total data banner: " . $result['total'] . "\n\n";
    
    if ($result['total'] > 0) {
        echo "Data banner yang tersedia:\n";
        echo "------------------------\n";
        $stmt = $pdo->query("SELECT id, title, subtitle, image FROM banners ORDER BY id");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['id'] . "\n";
            echo "Title: " . $row['title'] . "\n";
            echo "Subtitle: " . substr($row['subtitle'], 0, 50) . "...\n";
            echo "Image: " . $row['image'] . "\n";
            echo "------------------------\n";
        }
    }
    
    echo "\n🎉 Database setup berhasil! Siap untuk menjalankan Laravel.\n";
    echo "💡 Jalankan: php artisan serve\n";
    echo "🌐 Akses: http://localhost:8000\n";
    
} catch (PDOException $e) {
    echo "❌ Error koneksi database: " . $e->getMessage() . "\n\n";
    echo "🔧 Solusi yang bisa dicoba:\n";
    echo "1. Pastikan MySQL/XAMPP sudah running\n";
    echo "2. Buat database 'silog_db' di phpMyAdmin\n";
    echo "3. Jalankan script database_setup.sql di phpMyAdmin\n";
    echo "4. Cek konfigurasi di file .env\n";
}
?>
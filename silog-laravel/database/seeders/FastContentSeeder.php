<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class FastContentSeeder extends Seeder
{
    public function run()
    {
        $contents = [
            // Hero
            ['type' => 'hero', 'title' => 'Solusi Logistik Terdepan Indonesia', 'subtitle' => 'Melayani kebutuhan logistik, konstruksi, dan distribusi dengan teknologi modern dan jaringan nasional yang luas.', 'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop', 'order' => 1, 'is_active' => 1],
            
            // About
            ['type' => 'about', 'title' => 'Pengalaman 65+ Tahun', 'description' => 'Berdiri sejak 1957, SILOG telah menjadi bagian integral dari pertumbuhan industri Indonesia dengan pengalaman lebih dari 6 dekade.', 'icon' => 'fas fa-history', 'order' => 1, 'is_active' => 1],
            ['type' => 'about', 'title' => 'Standar Internasional', 'description' => 'Berkomitmen memberikan layanan terbaik dengan standar ISO dan teknologi terdepan untuk kepuasan pelanggan.', 'icon' => 'fas fa-award', 'order' => 2, 'is_active' => 1],
            ['type' => 'about', 'title' => 'Jangkauan Nasional', 'description' => 'Melayani seluruh Indonesia dengan 50+ cabang dan jaringan distribusi yang terintegrasi dari Sabang sampai Merauke.', 'icon' => 'fas fa-globe-asia', 'order' => 3, 'is_active' => 1],
            
            // Services
            ['type' => 'service', 'title' => 'Logistik & Transportasi', 'description' => 'Layanan logistik terintegrasi dengan armada modern dan sistem tracking real-time untuk pengiriman yang efisien ke seluruh nusantara.', 'link' => '#logistics', 'order' => 1, 'is_active' => 1],
            ['type' => 'service', 'title' => 'Konstruksi & Manufaktur', 'description' => 'Solusi konstruksi dengan standar kualitas tinggi untuk proyek infrastruktur, perumahan, dan pembangunan komersial.', 'link' => '#construction', 'order' => 2, 'is_active' => 1],
            ['type' => 'service', 'title' => 'Distribusi & Warehousing', 'description' => 'Jaringan gudang modern dengan sistem manajemen otomatis dan cold storage untuk berbagai jenis produk.', 'link' => '#distribution', 'order' => 3, 'is_active' => 1],
            
            // Subsidiaries
            ['type' => 'subsidiary', 'title' => 'SILOG Transport', 'description' => 'Spesialis transportasi darat, laut, dan udara', 'icon' => 'fas fa-shipping-fast', 'order' => 1, 'is_active' => 1],
            ['type' => 'subsidiary', 'title' => 'SILOG Warehouse', 'description' => 'Manajemen gudang dan cold storage modern', 'icon' => 'fas fa-warehouse', 'order' => 2, 'is_active' => 1],
            ['type' => 'subsidiary', 'title' => 'SILOG Construction', 'description' => 'Layanan konstruksi dan manufaktur terpadu', 'icon' => 'fas fa-tools', 'order' => 3, 'is_active' => 1],
            ['type' => 'subsidiary', 'title' => 'SILOG Digital', 'description' => 'Solusi teknologi dan transformasi digital', 'icon' => 'fas fa-network-wired', 'order' => 4, 'is_active' => 1],
            
            // News
            ['type' => 'news', 'title' => 'SILOG Raih Penghargaan Best Logistics Company 2024', 'description' => 'SILOG berhasil meraih penghargaan sebagai perusahaan logistik terbaik Indonesia 2024 dari Kementerian Perhubungan atas inovasi dan pelayanan prima.', 'date' => '2025-01-15', 'link' => '#news-1', 'order' => 1, 'is_active' => 1],
            ['type' => 'news', 'title' => 'Ekspansi Gudang Baru di Kalimantan Timur', 'description' => 'Pembukaan fasilitas gudang modern seluas 10 hektar di Balikpapan untuk mendukung distribusi wilayah Indonesia Timur dengan kapasitas 75.000 ton.', 'date' => '2025-01-10', 'link' => '#news-2', 'order' => 2, 'is_active' => 1],
            ['type' => 'news', 'title' => 'Kemitraan Strategis untuk Proyek IKN Nusantara', 'description' => 'SILOG menjalin kemitraan dengan kontraktor utama untuk mendukung pembangunan Ibu Kota Nusantara dengan layanan logistik senilai Rp 3.2 triliun.', 'date' => '2025-01-05', 'link' => '#news-3', 'order' => 3, 'is_active' => 1],
            
            // Gallery
            ['type' => 'gallery', 'title' => 'Fasilitas Gudang Otomatis SILOG', 'description' => 'Gudang berteknologi AI dengan sistem sortir otomatis dan kapasitas 100.000 ton', 'image' => 'https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?w=1200&h=400&fit=crop', 'order' => 1, 'is_active' => 1],
            ['type' => 'gallery', 'title' => 'Armada Transportasi Terintegrasi', 'description' => 'Fleet modern dengan GPS tracking dan sistem keamanan berlapis untuk pengiriman akurat', 'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&h=400&fit=crop', 'order' => 2, 'is_active' => 1],
            ['type' => 'gallery', 'title' => 'Proyek Konstruksi Infrastruktur', 'description' => 'Pengalaman menangani mega proyek jembatan, pelabuhan, dan infrastruktur nasional', 'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1200&h=400&fit=crop', 'order' => 3, 'is_active' => 1],
            ['type' => 'gallery', 'title' => 'Tim Profesional Bersertifikat', 'description' => 'SDM terlatih dengan sertifikasi internasional untuk memberikan layanan berkualitas tinggi', 'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=400&fit=crop', 'order' => 4, 'is_active' => 1]
        ];

        foreach ($contents as $content) {
            Content::create($content);
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    public function run()
    {
        // Hero Content (4 items)
        Content::create([
            'type' => 'hero',
            'title' => 'Sistem Informasi Logistik',
            'subtitle' => 'Solusi Terpadu untuk Manajemen Logistik',
            'description' => 'Platform digital yang mengintegrasikan seluruh aspek logistik untuk efisiensi maksimal',
            'image' => 'assets/images/hero-bg.jpg',
            'order' => 1,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'hero',
            'title' => 'Teknologi Terdepan',
            'subtitle' => 'Inovasi dalam Setiap Solusi',
            'description' => 'Menggunakan teknologi terkini untuk memberikan layanan logistik yang optimal',
            'image' => 'assets/images/hero-bg2.jpg',
            'order' => 2,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'hero',
            'title' => 'Layanan Profesional',
            'subtitle' => 'Tim Ahli Berpengalaman',
            'description' => 'Didukung oleh tim profesional dengan pengalaman puluhan tahun di bidang logistik',
            'image' => 'assets/images/hero-bg3.jpg',
            'order' => 3,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'hero',
            'title' => 'Jangkauan Nasional',
            'subtitle' => 'Melayani Seluruh Indonesia',
            'description' => 'Jaringan distribusi yang luas untuk memenuhi kebutuhan logistik di seluruh nusantara',
            'image' => 'assets/images/hero-bg4.jpg',
            'order' => 4,
            'is_active' => true
        ]);

        // About Content (3 items)
        Content::create([
            'type' => 'about',
            'title' => 'Visi Kami',
            'description' => 'Menjadi perusahaan logistik terdepan yang memberikan solusi inovatif dan berkelanjutan untuk mendukung pertumbuhan ekonomi Indonesia.',
            'icon' => 'fas fa-eye',
            'order' => 1,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'about',
            'title' => 'Misi Kami',
            'description' => 'Menyediakan layanan logistik terintegrasi dengan teknologi terdepan, membangun kemitraan strategis, dan menciptakan nilai tambah bagi seluruh stakeholder.',
            'icon' => 'fas fa-bullseye',
            'order' => 2,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'about',
            'title' => 'Nilai Kami',
            'description' => 'Integritas, Inovasi, Kualitas, dan Keberlanjutan adalah fondasi dalam setiap layanan yang kami berikan kepada mitra dan pelanggan.',
            'icon' => 'fas fa-heart',
            'order' => 3,
            'is_active' => true
        ]);

        // Services Content (3 items)
        Content::create([
            'type' => 'services',
            'title' => 'Manajemen Gudang',
            'description' => 'Sistem manajemen gudang terintegrasi dengan teknologi WMS untuk efisiensi maksimal dalam penyimpanan dan distribusi barang.',
            'icon' => 'fas fa-warehouse',
            'order' => 1,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'services',
            'title' => 'Transportasi & Distribusi',
            'description' => 'Layanan transportasi dan distribusi dengan armada lengkap dan jaringan yang luas untuk menjangkau seluruh Indonesia.',
            'icon' => 'fas fa-truck',
            'order' => 2,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'services',
            'title' => 'Supply Chain Management',
            'description' => 'Solusi manajemen rantai pasok end-to-end yang mengoptimalkan alur barang dari supplier hingga konsumen akhir.',
            'icon' => 'fas fa-link',
            'order' => 3,
            'is_active' => true
        ]);

        // Subsidiaries Content (4 items)
        Content::create([
            'type' => 'subsidiaries',
            'title' => 'PT Logistik Nusantara',
            'description' => 'Spesialis dalam layanan logistik domestik dengan jangkauan seluruh Indonesia dan armada yang lengkap.',
            'image' => 'assets/images/subsidiary1.jpg',
            'link' => 'https://logistiknusantara.com',
            'order' => 1,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'subsidiaries',
            'title' => 'PT Cargo Express',
            'description' => 'Layanan kargo ekspres untuk pengiriman cepat dan aman dengan tracking real-time dan jaminan ketepatan waktu.',
            'image' => 'assets/images/subsidiary2.jpg',
            'link' => 'https://cargoexpress.com',
            'order' => 2,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'subsidiaries',
            'title' => 'PT Warehouse Solutions',
            'description' => 'Penyedia solusi pergudangan modern dengan teknologi otomasi dan sistem manajemen terintegrasi.',
            'image' => 'assets/images/subsidiary3.jpg',
            'link' => 'https://warehousesolutions.com',
            'order' => 3,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'subsidiaries',
            'title' => 'PT Digital Logistics',
            'description' => 'Platform digital untuk manajemen logistik dengan fitur AI dan analytics untuk optimasi operasional.',
            'image' => 'assets/images/subsidiary4.jpg',
            'link' => 'https://digitallogistics.com',
            'order' => 4,
            'is_active' => true
        ]);

        // News Content (3 items)
        Content::create([
            'type' => 'news',
            'title' => 'Ekspansi Jaringan Distribusi ke Wilayah Timur Indonesia',
            'description' => 'SILOG memperluas jangkauan layanan dengan membuka 15 cabang baru di wilayah Indonesia Timur untuk mendukung pertumbuhan ekonomi daerah.',
            'image' => 'assets/images/news1.jpg',
            'date' => '2024-01-15',
            'link' => '#',
            'order' => 1,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'news',
            'title' => 'Implementasi Teknologi AI dalam Sistem Logistik',
            'description' => 'Penerapan kecerdasan buatan untuk optimasi rute pengiriman dan prediksi demand yang lebih akurat, meningkatkan efisiensi hingga 35%.',
            'image' => 'assets/images/news2.jpg',
            'date' => '2024-01-10',
            'link' => '#',
            'order' => 2,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'news',
            'title' => 'Kemitraan Strategis dengan E-commerce Terkemuka',
            'description' => 'SILOG menjalin kemitraan dengan platform e-commerce besar untuk menyediakan layanan fulfillment dan last-mile delivery yang lebih baik.',
            'image' => 'assets/images/news3.jpg',
            'date' => '2024-01-05',
            'link' => '#',
            'order' => 3,
            'is_active' => true
        ]);

        // Gallery Content (4 items)
        Content::create([
            'type' => 'gallery',
            'title' => 'Fasilitas Gudang Modern',
            'image' => 'assets/images/gallery1.jpg',
            'order' => 1,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'gallery',
            'title' => 'Armada Transportasi',
            'image' => 'assets/images/gallery2.jpg',
            'order' => 2,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'gallery',
            'title' => 'Teknologi Warehouse Management',
            'image' => 'assets/images/gallery3.jpg',
            'order' => 3,
            'is_active' => true
        ]);

        Content::create([
            'type' => 'gallery',
            'title' => 'Tim Profesional',
            'image' => 'assets/images/gallery4.jpg',
            'order' => 4,
            'is_active' => true
        ]);
    }
}
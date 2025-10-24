<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class ExactContentSeeder extends Seeder
{
    public function run()
    {
        Content::truncate();
        
        $contents = [
            // Hero - 4 banners dari JS original
            ['type' => 'hero', 'title' => 'Solusi Logistik Terdepan', 'subtitle' => 'Solusi terpercaya untuk kebutuhan logistik, konstruksi, dan distribusi di seluruh Indonesia.', 'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop', 'link' => 'Jelajahi Layanan Kami', 'order' => 1, 'is_active' => 1],
            ['type' => 'hero', 'title' => 'Konstruksi & Manufaktur Berkualitas', 'subtitle' => 'Membangun masa depan Indonesia dengan teknologi konstruksi modern dan proses manufaktur yang berkelanjutan.', 'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&h=600&fit=crop', 'link' => 'Lihat Proyek Kami', 'order' => 2, 'is_active' => 1],
            ['type' => 'hero', 'title' => 'Jaringan Distribusi Nasional', 'subtitle' => 'Menjangkau seluruh nusantara dengan jaringan distribusi yang luas dan sistem manajemen yang terintegrasi.', 'image' => 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=800&h=600&fit=crop', 'link' => 'Pelajari Jaringan Kami', 'order' => 3, 'is_active' => 1],
            ['type' => 'hero', 'title' => 'Inovasi & Teknologi Digital', 'subtitle' => 'Menggunakan teknologi terkini dalam setiap aspek operasional untuk memberikan pelayanan yang efisien dan berkelanjutan.', 'image' => 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=800&h=600&fit=crop', 'link' => 'Temukan Inovasi Kami', 'order' => 4, 'is_active' => 1],
            
            // About - 3 cards persis dari HTML
            ['type' => 'about', 'title' => 'Sejarah Panjang', 'description' => 'Berdiri sejak tahun 1957, SILOG telah menjadi bagian integral dari pertumbuhan industri Indonesia dengan pengalaman lebih dari 6 dekade dalam layanan logistik.', 'icon' => 'fas fa-history', 'order' => 1, 'is_active' => 1],
            ['type' => 'about', 'title' => 'Standar Kualitas', 'description' => 'Berkomitmen memberikan layanan terbaik dengan standar internasional dan teknologi terdepan untuk memenuhi kebutuhan pelanggan.', 'icon' => 'fas fa-award', 'order' => 2, 'is_active' => 1],
            ['type' => 'about', 'title' => 'Jangkauan Nasional', 'description' => 'Melayani seluruh Indonesia dengan jaringan distribusi yang luas dan infrastruktur logistik yang modern dan terintegrasi.', 'icon' => 'fas fa-globe-asia', 'order' => 3, 'is_active' => 1],
            
            // Services - 3 services persis dari HTML
            ['type' => 'service', 'title' => 'Logistik', 'description' => 'Layanan logistik terintegrasi dengan teknologi terdepan untuk memastikan pengiriman yang efisien dan tepat waktu ke seluruh Indonesia.', 'link' => '#logistics', 'order' => 1, 'is_active' => 1],
            ['type' => 'service', 'title' => 'Konstruksi & Manufaktur', 'description' => 'Solusi konstruksi dan manufaktur dengan standar kualitas tinggi untuk mendukung proyek-proyek pembangunan nasional.', 'link' => '#construction', 'order' => 2, 'is_active' => 1],
            ['type' => 'service', 'title' => 'Distribusi', 'description' => 'Jaringan distribusi yang luas dan efisien untuk memastikan produk sampai ke tangan konsumen dengan kondisi terbaik.', 'link' => '#distribution', 'order' => 3, 'is_active' => 1],
            
            // Subsidiaries - 4 companies persis dari HTML
            ['type' => 'subsidiary', 'title' => 'SILOG Transport', 'description' => 'Spesialis transportasi dan pengiriman', 'icon' => 'fas fa-shipping-fast', 'order' => 1, 'is_active' => 1],
            ['type' => 'subsidiary', 'title' => 'SILOG Warehouse', 'description' => 'Manajemen gudang dan penyimpanan', 'icon' => 'fas fa-warehouse', 'order' => 2, 'is_active' => 1],
            ['type' => 'subsidiary', 'title' => 'SILOG Construction', 'description' => 'Layanan konstruksi dan manufaktur', 'icon' => 'fas fa-tools', 'order' => 3, 'is_active' => 1],
            ['type' => 'subsidiary', 'title' => 'SILOG Solutions', 'description' => 'Solusi teknologi dan inovasi', 'icon' => 'fas fa-network-wired', 'order' => 4, 'is_active' => 1],
            
            // News - 3 articles persis dari HTML
            ['type' => 'news', 'title' => 'SILOG Luncurkan Teknologi AI untuk Optimasi Rute Distribusi', 'description' => 'Inovasi terbaru SILOG dalam menggunakan artificial intelligence untuk meningkatkan efisiensi distribusi dan mengurangi waktu pengiriman hingga 30% lebih cepat.', 'date' => '2025-08-28', 'link' => '#news-1', 'order' => 1, 'is_active' => 1],
            ['type' => 'news', 'title' => 'Ekspansi Gudang Baru di Wilayah Indonesia Timur', 'description' => 'SILOG membuka fasilitas gudang modern baru di Papua untuk meningkatkan pelayanan logistik di wilayah Indonesia Timur dengan kapasitas 50.000 ton.', 'date' => '2025-08-25', 'link' => '#news-2', 'order' => 2, 'is_active' => 1],
            ['type' => 'news', 'title' => 'Kemitraan Strategis dengan BUMN untuk Proyek IKN', 'description' => 'SILOG menjalin kemitraan strategis untuk mendukung pembangunan Ibu Kota Nusantara dengan layanan logistik terintegrasi senilai Rp 2.5 triliun.', 'date' => '2025-08-22', 'link' => '#news-3', 'order' => 3, 'is_active' => 1],
            
            // Gallery - 4 images persis dari HTML
            ['type' => 'gallery', 'title' => 'Fasilitas Gudang Modern SILOG', 'description' => 'Gudang berteknologi tinggi dengan sistem otomatis untuk efisiensi maksimal', 'image' => 'https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?w=1200&h=400&fit=crop', 'order' => 1, 'is_active' => 1],
            ['type' => 'gallery', 'title' => 'Armada Transportasi Terintegrasi', 'description' => 'Fleet modern dengan tracking real-time untuk pengiriman yang akurat', 'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&h=400&fit=crop', 'order' => 2, 'is_active' => 1],
            ['type' => 'gallery', 'title' => 'Proyek Konstruksi Skala Besar', 'description' => 'Pengalaman dalam menangani proyek infrastruktur dan konstruksi nasional', 'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1200&h=400&fit=crop', 'order' => 3, 'is_active' => 1],
            ['type' => 'gallery', 'title' => 'Tim Profesional SILOG', 'description' => 'SDM berpengalaman dan terlatih untuk memberikan layanan terbaik', 'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=400&fit=crop', 'order' => 4, 'is_active' => 1]
        ];

        foreach ($contents as $content) {
            Content::create($content);
        }
    }
}
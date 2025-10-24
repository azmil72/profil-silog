<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomeContent;

class HomeContentSeeder extends Seeder
{
    public function run(): void
    {
        // About Section Content
        HomeContent::create([
            'section' => 'about',
            'title' => 'Sejarah Panjang',
            'subtitle' => 'Berdiri sejak tahun 1957, SILOG telah menjadi bagian integral dari pertumbuhan industri Indonesia dengan pengalaman lebih dari 6 dekade dalam layanan logistik.',
            'content' => null,
            'image' => null,
            'order' => 1,
            'is_active' => true
        ]);

        HomeContent::create([
            'section' => 'about',
            'title' => 'Standar Kualitas',
            'subtitle' => 'Berkomitmen memberikan layanan terbaik dengan standar internasional dan teknologi terdepan untuk memenuhi kebutuhan pelanggan.',
            'content' => null,
            'image' => null,
            'order' => 2,
            'is_active' => true
        ]);

        HomeContent::create([
            'section' => 'about',
            'title' => 'Jangkauan Nasional',
            'subtitle' => 'Melayani seluruh Indonesia dengan jaringan distribusi yang luas dan infrastruktur logistik yang modern dan terintegrasi.',
            'content' => null,
            'image' => null,
            'order' => 3,
            'is_active' => true
        ]);

        // Services Section Content
        HomeContent::create([
            'section' => 'services',
            'title' => 'Logistik',
            'subtitle' => 'Layanan logistik terintegrasi dengan teknologi terdepan untuk memastikan pengiriman yang efisien dan tepat waktu ke seluruh Indonesia.',
            'content' => null,
            'image' => null,
            'order' => 1,
            'is_active' => true
        ]);

        HomeContent::create([
            'section' => 'services',
            'title' => 'Konstruksi & Manufaktur',
            'subtitle' => 'Solusi konstruksi dan manufaktur dengan standar kualitas tinggi untuk mendukung proyek-proyek pembangunan nasional.',
            'content' => null,
            'image' => null,
            'order' => 2,
            'is_active' => true
        ]);

        HomeContent::create([
            'section' => 'services',
            'title' => 'Distribusi',
            'subtitle' => 'Jaringan distribusi yang luas dan efisien untuk memastikan produk sampai ke tangan konsumen dengan kondisi terbaik.',
            'content' => null,
            'image' => null,
            'order' => 3,
            'is_active' => true
        ]);

        // News Section Content
        HomeContent::create([
            'section' => 'news',
            'title' => 'SILOG Luncurkan Teknologi AI untuk Optimasi Rute Distribusi',
            'subtitle' => 'Inovasi terbaru SILOG dalam menggunakan artificial intelligence untuk meningkatkan efisiensi distribusi dan mengurangi waktu pengiriman hingga 30% lebih cepat.',
            'content' => '28 Agustus 2025',
            'image' => null,
            'order' => 1,
            'is_active' => true
        ]);

        HomeContent::create([
            'section' => 'news',
            'title' => 'Ekspansi Gudang Baru di Wilayah Indonesia Timur',
            'subtitle' => 'SILOG membuka fasilitas gudang modern baru di Papua untuk meningkatkan pelayanan logistik di wilayah Indonesia Timur dengan kapasitas 50.000 ton.',
            'content' => '25 Agustus 2025',
            'image' => null,
            'order' => 2,
            'is_active' => true
        ]);

        HomeContent::create([
            'section' => 'news',
            'title' => 'Kemitraan Strategis dengan BUMN untuk Proyek IKN',
            'subtitle' => 'SILOG menjalin kemitraan strategis untuk mendukung pembangunan Ibu Kota Nusantara dengan layanan logistik terintegrasi senilai Rp 2.5 triliun.',
            'content' => '22 Agustus 2025',
            'image' => null,
            'order' => 3,
            'is_active' => true
        ]);
    }
}
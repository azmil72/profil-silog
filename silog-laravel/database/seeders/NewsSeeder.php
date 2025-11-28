<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::create([
            'title' => 'SILOG Raih Penghargaan Perusahaan Logistik Terbaik 2024',
            'excerpt' => 'SILOG berhasil meraih penghargaan sebagai Perusahaan Logistik Terbaik tahun 2024 dalam ajang Indonesia Logistics Awards.',
            'content' => '<p>PT Semen Indonesia Logistik (SILOG) berhasil meraih penghargaan bergengsi sebagai Perusahaan Logistik Terbaik tahun 2024 dalam ajang Indonesia Logistics Awards yang diselenggarakan di Jakarta Convention Center.</p><p>Penghargaan ini diberikan atas komitmen SILOG dalam memberikan layanan logistik berkualitas tinggi dan inovasi berkelanjutan dalam industri logistik Indonesia.</p>',
            'category' => 'penghargaan',
            'slug' => 'silog-raih-penghargaan-perusahaan-logistik-terbaik-2024',
            'published_at' => now()->subDays(5),
            'author' => 'Tim Redaksi SILOG',
            'tags' => ['penghargaan', 'logistik', 'prestasi'],
            'is_published' => true,
            'is_featured' => true
        ]);

        News::create([
            'title' => 'Kerjasama Strategis dengan Pelabuhan Tanjung Priok',
            'excerpt' => 'SILOG menandatangani MoU kerjasama strategis dengan Pelabuhan Tanjung Priok untuk meningkatkan efisiensi distribusi.',
            'content' => '<p>SILOG menandatangani Memorandum of Understanding (MoU) kerjasama strategis dengan PT Pelabuhan Indonesia II (Persero) untuk optimalisasi layanan logistik di Pelabuhan Tanjung Priok.</p><p>Kerjasama ini diharapkan dapat meningkatkan efisiensi distribusi dan memperkuat posisi SILOG sebagai penyedia layanan logistik terpercaya.</p>',
            'category' => 'kerjasama',
            'slug' => 'kerjasama-strategis-dengan-pelabuhan-tanjung-priok',
            'published_at' => now()->subDays(10),
            'author' => 'Tim Redaksi SILOG',
            'tags' => ['kerjasama', 'pelabuhan', 'distribusi'],
            'is_published' => true
        ]);

        News::create([
            'title' => 'Peluncuran Sistem Tracking Digital Terbaru',
            'excerpt' => 'SILOG memperkenalkan sistem tracking digital terbaru yang memungkinkan pelanggan memantau pengiriman secara real-time.',
            'content' => '<p>SILOG meluncurkan sistem tracking digital terbaru yang mengintegrasikan teknologi IoT dan AI untuk memberikan visibilitas penuh kepada pelanggan dalam memantau status pengiriman mereka.</p><p>Sistem ini dilengkapi dengan notifikasi real-time dan dashboard interaktif yang user-friendly.</p>',
            'category' => 'inovasi',
            'slug' => 'peluncuran-sistem-tracking-digital-terbaru',
            'published_at' => now()->subDays(15),
            'author' => 'Tim Redaksi SILOG',
            'tags' => ['teknologi', 'inovasi', 'tracking'],
            'is_published' => true
        ]);
    }
}
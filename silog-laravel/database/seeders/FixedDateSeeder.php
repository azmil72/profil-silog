<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class FixedDateSeeder extends Seeder
{
    public function run()
    {
        Content::where('type', 'news')->delete();
        
        $news = [
            ['type' => 'news', 'title' => 'SILOG Luncurkan Teknologi AI untuk Optimasi Rute Distribusi', 'description' => 'Inovasi terbaru SILOG dalam menggunakan artificial intelligence untuk meningkatkan efisiensi distribusi dan mengurangi waktu pengiriman hingga 30% lebih cepat.', 'date' => '28 Agustus 2025', 'link' => '#news-1', 'order' => 1, 'is_active' => 1],
            ['type' => 'news', 'title' => 'Ekspansi Gudang Baru di Wilayah Indonesia Timur', 'description' => 'SILOG membuka fasilitas gudang modern baru di Papua untuk meningkatkan pelayanan logistik di wilayah Indonesia Timur dengan kapasitas 50.000 ton.', 'date' => '25 Agustus 2025', 'link' => '#news-2', 'order' => 2, 'is_active' => 1],
            ['type' => 'news', 'title' => 'Kemitraan Strategis dengan BUMN untuk Proyek IKN', 'description' => 'SILOG menjalin kemitraan strategis untuk mendukung pembangunan Ibu Kota Nusantara dengan layanan logistik terintegrasi senilai Rp 2.5 triliun.', 'date' => '22 Agustus 2025', 'link' => '#news-3', 'order' => 3, 'is_active' => 1]
        ];

        foreach ($news as $item) {
            Content::create($item);
        }
    }
}
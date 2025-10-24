<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'title' => 'Solusi Logistik Terdepan',
            'subtitle' => 'Solusi terpercaya untuk kebutuhan logistik, konstruksi, dan distribusi di seluruh Indonesia.',
            'image' => 'aset 1.png'
        ]);

        Banner::create([
            'title' => 'Konstruksi & Manufaktur Berkualitas',
            'subtitle' => 'Membangun masa depan Indonesia dengan teknologi konstruksi modern dan proses manufaktur yang berkelanjutan.',
            'image' => 'aset 2.jpg'
        ]);

        Banner::create([
            'title' => 'Jaringan Distribusi Nasional',
            'subtitle' => 'Menjangkau seluruh nusantara dengan jaringan distribusi yang luas dan sistem manajemen yang terintegrasi.',
            'image' => 'aset 3.jpg'
        ]);
    }
}

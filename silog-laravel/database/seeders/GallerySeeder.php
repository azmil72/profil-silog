<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        Gallery::create([
            'title' => 'Peluncuran Armada Baru SILOG',
            'description' => 'Acara peluncuran armada truk baru SILOG untuk meningkatkan kapasitas distribusi',
            'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop',
            'category' => 'event',
            'sort_order' => 1
        ]);

        Gallery::create([
            'title' => 'Fasilitas Gudang Modern',
            'description' => 'Gudang modern SILOG dengan teknologi otomasi terdepan',
            'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&h=600&fit=crop',
            'category' => 'facility',
            'sort_order' => 2
        ]);

        Gallery::create([
            'title' => 'Tim Profesional SILOG',
            'description' => 'Tim profesional SILOG yang berpengalaman dalam layanan logistik',
            'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=600&fit=crop',
            'category' => 'team',
            'sort_order' => 3
        ]);

        Gallery::create([
            'title' => 'Penandatanganan MoU Kerjasama',
            'description' => 'Momen penandatanganan MoU kerjasama strategis dengan mitra bisnis',
            'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&h=600&fit=crop',
            'category' => 'partnership',
            'sort_order' => 4
        ]);

        Gallery::create([
            'title' => 'Penerimaan Penghargaan',
            'description' => 'Momen penerimaan penghargaan Perusahaan Logistik Terbaik 2024',
            'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=600&fit=crop',
            'category' => 'achievement',
            'sort_order' => 5
        ]);

        Gallery::create([
            'title' => 'Workshop Teknologi Logistik',
            'description' => 'Workshop internal tentang implementasi teknologi terbaru dalam logistik',
            'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop',
            'category' => 'event',
            'sort_order' => 6
        ]);
    }
}
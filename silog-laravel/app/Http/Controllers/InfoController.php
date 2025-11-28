<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class InfoController extends Controller
{
    public function index(Request $request)
    {
        $categories = [
            'penghargaan' => 'Penghargaan',
            'kerjasama' => 'Kerjasama',
            'inovasi' => 'Inovasi',
            'ekspansi' => 'Ekspansi',
            'sosial' => 'Sosial',
            'teknologi' => 'Teknologi'
        ];

        try {
            $news = News::published()
                ->when($request->category && $request->category !== 'all', function($query) use ($request) {
                    return $query->byCategory($request->category);
                })
                ->when($request->search, function($query) use ($request) {
                    return $query->where('title', 'like', '%' . $request->search . '%')
                               ->orWhere('excerpt', 'like', '%' . $request->search . '%');
                })
                ->orderBy('published_at', 'desc')
                ->paginate(9);

            $galleries = Gallery::active()
                ->orderBy('sort_order')
                ->get();
        } catch (\Exception $e) {
            // Fallback data jika database tidak tersedia
            $news = collect([
                (object) [
                    'id' => 1,
                    'title' => 'SILOG Raih Penghargaan Perusahaan Logistik Terbaik 2024',
                    'excerpt' => 'SILOG berhasil meraih penghargaan sebagai Perusahaan Logistik Terbaik tahun 2024.',
                    'category' => 'penghargaan',
                    'slug' => 'silog-raih-penghargaan-2024',
                    'published_at' => (object) ['format' => function($format) { return date($format); }],
                    'image' => null,
                    'download_file' => null
                ],
                (object) [
                    'id' => 2,
                    'title' => 'Kerjasama Strategis dengan Pelabuhan Tanjung Priok',
                    'excerpt' => 'SILOG menandatangani MoU kerjasama strategis untuk meningkatkan efisiensi distribusi.',
                    'category' => 'kerjasama',
                    'slug' => 'kerjasama-tanjung-priok',
                    'published_at' => (object) ['format' => function($format) { return date($format); }],
                    'image' => null,
                    'download_file' => null
                ]
            ]);
            
            $galleries = collect([
                (object) [
                    'title' => 'Peluncuran Armada Baru SILOG',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop'
                ],
                (object) [
                    'title' => 'Fasilitas Gudang Modern',
                    'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&h=600&fit=crop'
                ]
            ]);
            
            // Buat pagination manual untuk fallback
            $news = new LengthAwarePaginator(
                $news,
                $news->count(),
                9,
                1,
                ['path' => request()->url()]
            );
        }

        return view('info', compact('news', 'galleries', 'categories'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->published()->firstOrFail();
        $news->increment('views');
        
        $relatedNews = News::published()
            ->where('category', $news->category)
            ->where('id', '!=', $news->id)
            ->limit(3)
            ->get();

        return view('news.show', compact('news', 'relatedNews'));
    }
}
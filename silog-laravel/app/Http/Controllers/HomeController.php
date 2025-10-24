<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // Fast MySQL queries with cache
        $contents = Cache::remember('home_content', 3600, function () {
            return [
                'hero' => Content::where('type', 'hero')->where('is_active', 1)->orderBy('order')->limit(1)->get(),
                'about' => Content::where('type', 'about')->where('is_active', 1)->orderBy('order')->limit(3)->get(),
                'service' => Content::where('type', 'service')->where('is_active', 1)->orderBy('order')->limit(3)->get(),
                'subsidiary' => Content::where('type', 'subsidiary')->where('is_active', 1)->orderBy('order')->limit(4)->get(),
                'news' => Content::where('type', 'news')->where('is_active', 1)->orderBy('order')->limit(3)->get(),
                'gallery' => Content::where('type', 'gallery')->where('is_active', 1)->orderBy('order')->limit(4)->get()
            ];
        });
        
        return view('home', compact('contents'));
    }
}

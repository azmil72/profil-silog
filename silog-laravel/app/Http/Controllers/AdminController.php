<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function index()
    {
        $contents = Content::orderBy('type')->orderBy('order')->get()->groupBy('type');
        
        return view('admin.dashboard', compact('contents'));
    }

    public function storeContent(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'icon' => 'nullable|string',
            'date' => 'nullable|string',
            'link' => 'nullable|string',
            'order' => 'nullable|integer',
        ]);

        Content::create($request->all());
        Cache::forget('home.all_contents');
        
        return redirect()->back()->with('success', 'Content berhasil ditambahkan!');
    }

    public function updateContent(Request $request, $id)
    {
        $content = Content::findOrFail($id);
        
        $request->validate([
            'type' => 'required|string',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'icon' => 'nullable|string',
            'date' => 'nullable|string',
            'link' => 'nullable|string',
            'order' => 'nullable|integer',
        ]);

        $content->update($request->all());
        Cache::forget('home.all_contents');
        
        return redirect()->back()->with('success', 'Content berhasil diupdate!');
    }

    public function deleteContent($id)
    {
        Content::findOrFail($id)->delete();
        Cache::forget('home.all_contents');
        
        return redirect()->back()->with('success', 'Content berhasil dihapus!');
    }

    public function getContent($id)
    {
        $content = Content::findOrFail($id);
        return response()->json($content);
    }

    public function toggleContent($id)
    {
        $content = Content::findOrFail($id);
        $content->update(['is_active' => !$content->is_active]);
        Cache::forget('home.all_contents');
        
        return redirect()->back()->with('success', 'Status content berhasil diubah!');
    }
}
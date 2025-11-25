<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;
use Illuminate\Http\Request;

class BoardMemberController extends Controller
{
    public function index()
    {
        $direksi = BoardMember::active()
            ->direksi()
            ->orderBy('sort_order')
            ->get();
            
        $komisaris = BoardMember::active()
            ->komisaris()
            ->orderBy('sort_order')
            ->get();

        return view('direksi-komisaris', compact('direksi', 'komisaris'));
    }
}
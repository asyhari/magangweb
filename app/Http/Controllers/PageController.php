<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class PageController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('index', compact('berita'));
    }
    
    public function portfolio()
    {
        return view('portfolio');
    }
}

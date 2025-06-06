<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelpageController extends Controller
{

    
     public function index()
    {
        $allArtikel = artikel::all();
        return view('pages.artikel', compact('allArtikel'));
    }

    public function show(Artikel $artikel)
    {
        return view('pages.detailArtikel', compact('artikel'));
    }
}

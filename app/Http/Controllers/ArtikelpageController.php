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
}

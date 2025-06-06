<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $allArtikel = artikel::all();
        return view('pages.home', compact('allArtikel'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $allArtikel = Article::latest('date')->get();
        return view('pages.frontend.article', compact('allArtikel'));
    }

    public function show($slug)
    {
        // Ambil artikel berdasarkan slug
        $artikel = Article::where('slug', $slug)->firstOrFail();


        return view('pages.frontend.detail-article', compact(
            'artikel',
        ));
    }
}

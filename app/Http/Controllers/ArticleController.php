<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $allArtikel = Article::all();
        return view('pages.frontend.article', compact('allArtikel'));
    }

    public function show($id)
{
    
    $artikel = Article::findOrFail($id);
    return view('pages.frontend.detailArticle', compact('artikel'));
}

}

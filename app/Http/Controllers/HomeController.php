<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Profile;

class HomeController extends Controller
{
    public function __invoke()
    {
        $allArtikel = Article::all();
        $profiles = Profile::all();
        return view('pages.frontend.index', compact('profiles', 'allArtikel'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('pages.frontend.detail-article', compact('article'));
    }
}

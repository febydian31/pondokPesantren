<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Profile;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(6);
        $profile = Profile::first();

        return view('pages.frontend.article', compact('articles', 'profile'));
    }

    public function show($slug)
    {
        // Ambil artikel berdasarkan slug
        $artikel = Article::where('slug', $slug)->firstOrFail();
        $profile = Profile::first();


        return view('pages.frontend.detail-article', compact(
            'artikel',
            'profile'
        ));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Profile;
use App\Models\Registration;

class HomeController extends Controller
{
    public function __invoke()
    {
        $articles = Article::orderBy('id', 'desc')->take(6)->get();
        $profile = Profile::first();
        $students = Registration::count();

        return view('pages.frontend.index', compact('profile', 'articles', 'students'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('pages.frontend.detail-article', compact('article'));
    }
}

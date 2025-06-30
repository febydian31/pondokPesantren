<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function __invoke()
    {
        $articles = Article::all();
        return view('pages.frontend.article', compact('articles'));
    }
}

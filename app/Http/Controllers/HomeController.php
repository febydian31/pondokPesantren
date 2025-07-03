<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function __invoke()
    {
        $allArtikel = Article::all();
        return view('pages.frontend.index', compact('allArtikel'));
    }

    public function show($id) 
    {
    $article = Article::findOrFail($id);
    return view('pages.frontend.show', compact('article'));
    }


}

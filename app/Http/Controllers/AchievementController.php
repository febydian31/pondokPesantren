<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function __invoke()
    {
        return view('pages.frontend.achievement');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;


class AchievementController extends Controller
{
    public function __invoke()
    {
    
        $achievements = Achievement::all();

        return view('pages.frontend.achievement', compact('achievements'));
    }
}

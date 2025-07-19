<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Profile;
use Illuminate\Http\Request;


class AchievementController extends Controller
{
    public function __invoke()
    {
        $profile = Profile::first();
        $achievements = Achievement::all();

        return view('pages.frontend.achievement', compact('profile', 'achievements'));
    }
}

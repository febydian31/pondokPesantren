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
        $achievements = Achievement::orderBy('id', 'desc')->paginate(10);

        return view('pages.frontend.achievement', compact('profile', 'achievements'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Profile;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function __invoke()
    {
        $profile = Profile::first();
        $activities = Activity::all();

        return view('pages.frontend.activity', compact('profile', 'activities'));
    }
}

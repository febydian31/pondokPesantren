<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function __invoke()
    {
        $activities = Activity::all();
        return view('pages.frontend.activity', compact('activities'));
    }
}

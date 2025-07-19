<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke()
    {
        $profile = Profile::first();

        return view('pages.frontend.profile', compact('profile'));
    }
}

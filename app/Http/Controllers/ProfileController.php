<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke()
    {
        $profiles = Profile::all();
        return view('pages.frontend.profile', compact('profiles')); 
    }
}

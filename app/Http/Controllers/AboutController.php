<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class AboutController extends Controller
{
    public function __invoke()
    {
        $profiles = Profile::all();
        return view('pages.frontend.about', compact('profiles')); 
    }
}

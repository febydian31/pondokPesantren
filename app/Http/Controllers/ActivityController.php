<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function __invoke()
    {
        return view('pages.frontend.activity');
    }
}

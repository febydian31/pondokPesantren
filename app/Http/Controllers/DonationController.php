<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function __invoke()
    {
        return view('pages.frontend.donation');
    }
}

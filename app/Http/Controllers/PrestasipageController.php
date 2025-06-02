<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasipageController extends Controller
{
    public function index()
    {
        $allPrestasi = Prestasi::all();
        return view('pages.prestasi', compact('allPrestasi'));
    }
}

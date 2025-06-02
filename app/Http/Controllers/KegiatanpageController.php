<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class kegiatanpageController extends Controller
{
    public function index()
    {
        $allKegiatan = Kegiatan::all();
        return view('pages.kegiatan', compact('allKegiatan'));
    }
}

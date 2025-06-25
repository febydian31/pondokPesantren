<?php

namespace App\Http\Controllers;

use App\Models\donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alldonasi = Donasi::all();
        return view('pages.backend.donasi.index', compact('alldonasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $metode = ['Bank Transfer', 'Credit Card', 'E Walet'];

        $alldonasi = Donasi::all();
        return view('pages.backend.donasi.create', compact('metode', 'alldonasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validasi 
        $validData = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'no_telp' => 'required',
            'nominal' => 'required',
            'metode_Pembayaran' => 'required|string|in:bankTransfer,creditCard,eWalet',
            'pesan' => 'required|string',
        ]);

        dd($validData);
        // simpan data 
        Donasi::create($validData);

        return redirect()->route('pages.backend.donasi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('pages.backend.kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('pages.backend.kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
         // validasi 
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect()->route('pages.backend.kegiatan.index');
    }
}

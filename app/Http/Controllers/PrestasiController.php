<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $allPrestasi = Prestasi::all();
        return view('prestasi.index', compact('allPrestasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validasi 
        $validData = $request->validate([
            'tahun' => 'required',
            'prestasi' => 'required',
            'tingkat' => 'required',
            'penyelenggara' => 'required',
            'peraih' => 'required',

        ]);

        // simpan data 
        Prestasi::create($validData);

        return redirect()->route('prestasi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestasi $prestasi)
    {
        return view('prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {
        return view('prestasi.edit', compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasi $prestasi)
    {
         // validasi 
        $validData = $request->validate([
            'tahun' => 'required',
            'prestasi' => 'required',
            'tingkat' => 'required',
            'penyelenggara' => 'required',
            'peraih' => 'required',

        ]);

        // simpan data 
        $prestasi->update($validData);

        return redirect()->route('prestasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allKegiatan = Kegiatan::all();
        return view('kegiatan.index', compact('allKegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validasi 
        $validData = $request->validate([
            'hari' => 'required|string|max:255',
            'waktu' => 'required',
            'kegiatan' => 'required|string',
            'pembimbing' => 'required|string',
            'lokasi' => 'required|string',
        ], [
            'hari.required' => 'judul harus di isi',
            'waktu.required' => 'waktu harus di isi',
            'kegiatan.required' => 'kegiatan harus di isi',
            'pembimbing.required' => 'pembimbing harus di isi',
            'lokasi.required' => 'lokasi harus di isi',
        ]);

        // simpan data 
        Kegiatan::create($validData);

        return redirect()->route('kegiatan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
         // validasi 
        $validData = $request->validate([
            'hari' => 'required',
            'waktu' => 'required',
            'kegiatan' => 'required',
            'pembimbing' => 'required',
            'lokasi' => 'required',
            ], [
            'hari.required' => 'judul harus di isi',
            'waktu.required' => 'waktu harus di isi',
            'kegiatan.required' => 'kegiatan harus di isi',
            'pembimbing.required' => 'pembimbing harus di isi',
            'lokasi.required' => 'lokasi harus di isi',
        ]);

        // simpan data 
        $kegiatan->update($validData);

        return redirect()->route('kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect()->route('kegiatan.index');
    }
}

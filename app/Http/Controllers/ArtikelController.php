<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $allArtikel = artikel::all();
        return view('pages.backend.artikel.index', compact('allArtikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
           'tanggal' => 'required|date', // Validate the tanggal field
           'judul' => 'required|string|max:255',
           'content' => 'required|string',
           'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);
       if ($request->hasFile('gambar')) {
           $path = $request->file('gambar')->store('images', 'public');
           $validated['gambar'] = $path;
       }
       // Include tanggal in the create method
       Artikel::create($validated);
       return redirect()->route('pages.backend.artikel.index')->with('success', 'Article created successfully!');
   }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        return view('pages.backend.artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('pages.backend.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    { 
        $request->validate([
            'judul' => 'required|string|max:255',
            'content' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Update field teks
        $artikel->judul = $request->judul;
        $artikel->content = $request->content;
        $artikel->tanggal = $request->tanggal;
        // Jika ada upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($artikel->gambar && Storage::disk('public')->exists($artikel->gambar)) {
                Storage::disk('public')->delete($artikel->gambar);
            }
            // Simpan gambar baru
            $path = $request->file('gambar')->store('images', 'public');
            $artikel->gambar = $path;
        }
        $artikel->save();
        return redirect()->route('pages.backend.artikel.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();

        return redirect()->route('pages.backend.artikel.index');
    }
}

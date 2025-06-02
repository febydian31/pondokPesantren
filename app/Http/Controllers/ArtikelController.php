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
        return view('artikel.index', compact('allArtikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       // Validasi input data
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255', 
            'content' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Handle file upload
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            // Store in "public/images", returns path like "images/filename.jpg"
            $path = $image->store('images', 'public');
            // Save to database
            $artikel = new Artikel();
            $artikel->judul = $request->judul;
            $artikel->tanggal = $request->tanggal;
            $artikel->content = $request->content;
            $artikel->gambar = $path;
            $artikel->save();
            return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dibuat');
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    { 
         $validated = $request->validate([
            'tanggal' => 'required|date',
            'judul' => 'required|string|max:255',
            'content' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        ]);
        // Handle image upload if present
        if ($request->hasFile('gambar')) {
            // Store the image in 'public/articles' folder
            $imagePath = $request->file('gambar')->store('articles', 'public');
            $validated['gambar'] = $imagePath;
        } else {
            $validated['gambar'] = null;
        }
        // Create the article

        dd($request->gambar);
        Article::create($validated);
        // Redirect to articles list or wherever
        return redirect()->route('artikel.index')->with('success', 'Article created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();

        return redirect()->route('artikel.index');
    }
}

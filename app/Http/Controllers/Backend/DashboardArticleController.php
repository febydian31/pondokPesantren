<?php

namespace App\Http\Controllers\Backend;


use App\Models\Article;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ArticleRequest;

class DashboardArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('pages.backend.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('article', 'public');
        }

        Article::create($data);
        return redirect()->route('article.index')->with('success', 'Berhasil Menambah Artikel.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('pages.backend.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        return view('pages.backend.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, string $id)
    {
        $article = Article::findOrFail($id);
        $data = $request->validated();

        // Handle slug jika perlu
        $data['slug'] = Str::slug($data['title']);

        // Cek dan simpan gambar baru jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($article->image && Storage::exists('public/article/' . $article->image)) {
                Storage::delete('public/article/' . $article->image);
            }

            // Upload dan simpan nama file baru
            $data['image'] = $request->file('image')->store('article', 'public');
        } else {
            // Jika tidak ada gambar baru, tetap gunakan gambar lama
            unset($data['image']);
        }

        // Update data artikel
        $article->update($data);

        return redirect()->route('article.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Article::findOrFail($id); // Ambil data berdasarkan ID
        $activity->delete();
        return redirect()->route('article.index')->with('success', 'Data Artikel Dihapus.');
    }
}

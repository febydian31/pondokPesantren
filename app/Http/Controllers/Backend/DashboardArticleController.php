<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
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
    // Ambil data validasi dari FormRequest
    $data = $request->validated();

    // Buat slug dari title
    $data['slug'] = Str::slug($data['title']);

    // Set field 'date' ke tanggal hari ini jika tidak dikirim dari form
    $data['date'] = Carbon::now()->toDateString(); // Format: Y-m-d

    // Proses upload gambar jika ada
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('article', 'public');
    }

    // Simpan ke database
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
    // Ambil data artikel
    $article = Article::findOrFail($id);

    // Ambil data validasi dari form
    $data = $request->validated();

    // Buat slug baru dari judul
    $data['slug'] = Str::slug($data['title']);

    // Format ulang tanggal jika ada, atau tetap gunakan yang lama
    // Jika kamu tidak menggunakan input 'date' dari form, bisa pakai ini:
    $data['date'] = $article->date ?? Carbon::now()->toDateString();

    // Jika form input menyertakan tanggal (misal format d/m/Y), gunakan ini:
    // $data['date'] = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');

    // Cek dan proses upload gambar baru
    if ($request->hasFile('image')) {
        // Hapus gambar lama dari storage jika ada
        if ($article->image && Storage::exists('public/' . $article->image)) {
            Storage::delete('public/' . $article->image);
        }

        // Upload dan simpan path baru
        $data['image'] = $request->file('image')->store('article', 'public');
    } else {
        // Jika tidak upload gambar baru, jangan ubah field image
        unset($data['image']);
    }

    // Update artikel
    $article->update($data);

    return redirect()->route('article.index')->with('info', 'Artikel berhasil diperbarui.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Article::findOrFail($id); // Ambil data berdasarkan ID
        $activity->delete();
        return redirect()->route('article.index')->with('warning', 'Data Artikel Dihapus.');
    }

    
}

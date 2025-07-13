<?php

namespace App\Http\Controllers\Backend;

use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Str;

class DashboardProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('pages.backend.profile.index', compact('profiles')); 
    }

    public function create()
    {
        return view('pages.backend.profile.create');
    }

    public function store(ProfileRequest $request)
    {
        $data = $request->validated();

        // Konversi array fields ke JSON
        $fields = ['history', 'vision', 'mission', 'programs', 'donations', 'social_media'];
        foreach ($fields as $field) {
            if (isset($data[$field]) && is_array($data[$field])) {
                $data[$field] = json_encode(array_values($data[$field]));
            }
        }

        // Simpan file tunggal
        if ($request->hasFile('organizational_structure')) {
            $data['organizational_structure'] = $request->file('organizational_structure')->store('organizational_structures', 'public');
        }

        Profile::create($data);

        return redirect()->route('profile.index')->with('success', 'Profile created successfully.');
    }

    public function edit(Profile $profile)
    {
        return view('pages.backend.profile.edit', compact('profile'));
    }

    public function update(ProfileRequest $request, Profile $profile)
    {
        $data = $request->validated();

        // Konversi field array jadi JSON
        $fields = ['history', 'vision', 'mission', 'programs', 'donations', 'social_media'];
        foreach ($fields as $field) {
            if (isset($data[$field]) && is_array($data[$field])) {
                $data[$field] = json_encode(array_values($data[$field]));
            }
        }

        // Simpan hanya URL asli, tidak diubah ke iframe
        // (hapus logic convertYoutubeToIframe dari sini)

        if ($request->hasFile('organizational_structure')) {
            $data['organizational_structure'] = $request->file('organizational_structure')
                ->store('organizational_structures', 'public');
        }

        $profile->update($data);

        return redirect()->route('profile.index')->with('success', 'Profile berhasil diperbarui');
    }


    private function convertYoutubeToIframe($url)
    {
        // Ambil ID YouTube dari link biasa
        preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^\s&]+)/', $url, $matches);
        if (!empty($matches[1])) {
            $youtubeId = $matches[1];
            return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $youtubeId . '" frameborder="0" allowfullscreen></iframe>';
        }

        // Jika bukan URL YouTube yang valid, return teks biasa
        return $url;
    }




}




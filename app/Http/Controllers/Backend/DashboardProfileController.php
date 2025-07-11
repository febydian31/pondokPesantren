<?php

namespace App\Http\Controllers\Backend;

use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

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

        // Handle file uploads for organizational_structure
        $images = [];
        if ($request->hasFile('organizational_structure')) {
            foreach ($request->file('organizational_structure') as $image) {
                $images[] = $image->store('structure', 'public');
            }
            $data['organizational_structure'] = $images;
        }
        Profile::create($request->validated());
        return redirect()->route('profile.index')->with('success', 'Profile berhasil dibuat');
    }

    public function edit(Profile $profile)
    {
        return view('pages.backend.profile.edit', compact('profile'));
    }

   public function update(ProfileRequest $request, Profile $profile)
{
    $data = $request->validated();

    // Konversi semua array ke JSON
    $fields = ['history', 'vision', 'mission', 'programs', 'donations', 'social_media'];
    foreach ($fields as $field) {
        if (isset($data[$field]) && is_array($data[$field])) {
            $data[$field] = json_encode(array_values($data[$field]));
        }
    }

    // Tangani upload ulang gambar organizational_structure
    if ($request->hasFile('organizational_structure')) {
        $paths = [];
        foreach ($request->file('organizational_structure') as $file) {
            $paths[] = $file->store('structure', 'public');
        }
        $data['organizational_structure'] = json_encode($paths);
    }

    $profile->update($data);

    return redirect()->route('profile.index')->with('success', 'Profile berhasil diperbarui');
}


}




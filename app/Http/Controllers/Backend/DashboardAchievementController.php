<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Http\Requests\AchievementRequest;
use Carbon\Carbon;


class DashboardAchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Achievements = Achievement::all();
        return view('pages.backend.achievement.index', compact('Achievements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AchievementRequest $request)
    {
        $data = $request->validated();

        // Format tanggal dari d/m/Y → Y-m-d (untuk MySQL)
        $data['date'] = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');

        Achievement::create($data);

        return redirect()->route('admin.achievement.index')->with('success', 'Data berhasil ditambah !');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('pages.backend.achievement.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AchievementRequest $request, Achievement $achievement)
    {
        $request->all();
        $data = $request->validated();

        // Format tanggal dari d/m/Y → Y-m-d (untuk MySQL)
        $data['date'] = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');

        $achievement->update($data);

        return redirect()->route('admin.achievement.index')->with('success', 'Data berhasil diedit !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $achievement = achievement::findOrFail($id); // Ambil data berdasarkan ID
        $achievement->delete();
        return redirect()->route('admin.achievement.index')->with('success', 'Data berhasil dihapus !');
    }
}

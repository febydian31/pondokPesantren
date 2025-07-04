<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Http\Requests\AchievementRequest;


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
        achievement::create($request->validated());
        return redirect()->route('achievement.index')->with('success', 'Prestasi berhasil ditambahkan');
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
    public function update(AchievementRequest $request, achievement $achievement)
    {
        $achievement->update($request->validated());
        return redirect()->route('achievement.index')->with('info', 'Data Prestasi Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $achievement = achievement::findOrFail($id); // Ambil data berdasarkan ID
        $achievement->delete();
        return redirect()->route('achievement.index')->with('warning', 'Data Prestasi Dihapus.');
    }
}

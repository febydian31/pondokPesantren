<?php

namespace App\Http\Controllers\Backend;

use App\Models\Activity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ActivityRequest;

class DashboardActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return view('pages.backend.activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActivityRequest $request)
    {
        activity::create($request->validated());
        return redirect()->route('activity.index')->with('success', 'Berhasil Menambah Kegiatan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('pages.backend.activity.edit', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);
        return view('pages.backend.activity.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActivityRequest $request, Activity $activity)
    {
        $activity->update($request->validated());
        return redirect()->route('activity.index')->with('success', 'Data Kegiatan Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id); // Ambil data berdasarkan ID
        $activity->delete();
        return redirect()->route('activity.index')->with('success', 'Data Kegiatan Dihapus.');
    }
}

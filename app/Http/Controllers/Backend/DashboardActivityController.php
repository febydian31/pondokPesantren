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
        $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

        return view('pages.backend.activity.create', compact('days'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ActivityRequest $request)
    {
        activity::create($request->validated());
        return redirect()->route('admin.activity.index')->with('success', 'Data berhasil ditambah !');
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
        $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        $activity = Activity::findOrFail($id);
        return view('pages.backend.activity.edit', compact('activity', 'days'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActivityRequest $request, Activity $activity)
    {
        $activity->update($request->validated());
        return redirect()->route('admin.activity.index')->with('success', 'Data berhasil diedit !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id); // Ambil data berdasarkan ID
        $activity->delete();
        return redirect()->route('admin.activity.index')->with('success', 'Data berhasil dihapus !');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Models\Donation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DonationRequest;

class DashboardDonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donation = Donation::all();
        return view('pages.backend.donation.index', compact('donation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.donation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DonationRequest $request)
    {
        Donation::create($request->validated());
        return redirect()->route('donation.index')->with('success', 'Data berhasil ditambah !');
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
        $donation = Donation::findOrFail($id);
        return view('pages.backend.donation.edit', compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DonationRequest $request, Donation $donation)
    {
        $donation->update($request->validated());
        return redirect()->route('donation.index')->with('success', 'Data berhasil diedit !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = donation::findOrFail($id); // Ambil data berdasarkan ID
        $activity->delete();
        return redirect()->route('donation.index')->with('success', 'Data berhasil dihapus !');
    }
}

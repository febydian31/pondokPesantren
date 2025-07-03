<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Http\Requests\RegistrationRequest;

class DashboardStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registration = Registration::all();
        return view('pages.backend.student.index', compact('registration'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistrationRequest $request)
    {
        Registration::create($request->validated());
        return redirect()->route('student.index')->with('success', 'Berhasil Menambah Data Santri');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $registration = Registration::findOrFail($id);
        return view('pages.backend.student.show', compact('registration'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registration = Registration::findOrFail($id);
        return view('pages.backend.student.edit', compact('registration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegistrationRequest $request, $id)
{
    $registration = Registration::findOrFail($id);
    $registration->update($request->validated());

        return redirect()->route('student.index')->with('info', 'Data Santri Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registration = Registration::findOrFail($id); // Ambil data berdasarkan ID
        $registration->delete();
        return redirect()->route('student.index')->with('warning', 'Data Santri Dihapus.');
    }
}

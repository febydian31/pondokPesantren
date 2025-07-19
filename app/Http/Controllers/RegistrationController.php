<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\Profile;

class RegistrationController extends Controller
{
    public function index()
    {
        $profile = Profile::first();

        return view('pages.frontend.registration', compact('profile'));
    }

    public function store(RegistrationRequest $request)
    {
        $data = $request->validated();
        Registration::create($request->validated());


        $pesan = "Halo, saya *{$data['name']}* ingin menginformasikan bahwa sudah mengisi form pendaftaran santri, di Panti Asuhan dan Pondok Pesantren Zuhriah";

        // konfirm wa 
        $no_wa = '6209633487327'; // ganti dengan nomor WA tujuan
        $link = "https://wa.me/{$no_wa}?text=" . urlencode($pesan);

        return redirect($link);

        // Registration::create($data);
        // return redirect()->route('frontend.registration.index')->with('success', 'Registration created successfully.');

    }
}

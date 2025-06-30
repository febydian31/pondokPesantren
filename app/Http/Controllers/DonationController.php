<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DonationRequest;

class DonationController extends Controller
{
    public function index()
    {
        $donation = Donation::all();
        return view('pages.frontend.donation', compact('donation'));
    }

    public function store(DonationRequest $request)
    {
        $data = $request->validated();
        Donation::create($request->validated());

        $pesan = "Halo, saya *{$data['name']}* telah melakukan donasi sebesar *Rp {$data['nominal']}*.\nPesan: {$data['message']}";

        // konfirm wa 
        $no_wa = '6209633487327'; // ganti dengan nomor WA tujuan
        $link = "https://wa.me/{$no_wa}?text=" . urlencode($pesan);
            
        return redirect($link);
        // return redirect()->route('frontend.donation.index')->with('success', 'Donasi berhasil ditambahkan.');


    }
}

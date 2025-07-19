<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DonationRequest;
use App\Models\Profile;

class DonationController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $donation = Donation::where('category', 'external')->latest()->paginate(10);

        return view('pages.frontend.donation', compact('profile', 'donation'));
    }

    public function store(DonationRequest $request)
    {
        $validated = $request->validated();

        Donation::create($validated);

        $pesan = "Halo, saya *{$validated['name']}* telah melakukan donasi sebesar *Rp {$validated['nominal']}*.\nPesan: {$validated['message']}";


        $no_wa = '6289633487327';
        $link = "https://wa.me/{$no_wa}?text=" . urlencode($pesan);

        return redirect($link);
    }
}

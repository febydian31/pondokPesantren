<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Activity;
use App\Models\Article;
use App\Models\Donation;
use App\Models\Registration;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $now = Carbon::now();

        return view('pages.backend.dashboard.index', [
            'articles' => Article::count(),
            'donations' => Donation::count(),
            'achievements' => Achievement::count(),
            'activities' => Activity::count(),
            'male_registrations' => Registration::where('gender', 'laki-laki')->count(),
            'female_registrations' => Registration::where('gender', 'perempuan')->count(),
            'total_donation_this_month' =>  Donation::whereMonth('created_at', $now->month)
                ->whereYear('created_at', $now->year)
                ->sum('nominal'),
        ]);
    }
}
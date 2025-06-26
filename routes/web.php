<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\Backend\DashboardArticleController;
use App\Http\Controllers\Backend\DashboardAchievementController;
use App\Http\Controllers\Backend\DashboardActivityController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DashboardDonationController;
use App\Http\Controllers\Backend\DashboardStudentController;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name(name: 'about');
Route::get('/article', ArticleController::class)->name(name: 'article');
Route::get('/activity', ActivityController::class)->name(name: 'activity');
Route::get('/achievement', AchievementController::class)->name(name: 'achievement');
Route::get('/donation', DonationController::class)->name(name: 'donation');
Route::get('/registration', RegistrationController::class)->name(name: 'registration');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')
  // ->middleware('auth')
  ->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resources([
      'article' => DashboardArticleController::class,
      'activity' => DashboardActivityController::class,
      'achievement' => DashboardAchievementController::class,
      'donation' => DashboardDonationController::class,
      'student' => DashboardStudentController::class
    ]);
  });

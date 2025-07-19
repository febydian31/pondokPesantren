<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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
use App\Http\Controllers\Backend\DashboardProfileController;
use App\Http\Controllers\ProfileController;

Route::get('/', HomeController::class)->name('home');
Route::get('/profile', ProfileController::class)->name(name: 'profile');
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('detail.article');
Route::get('/activity', ActivityController::class)->name(name: 'activity');
Route::get('/achievement', AchievementController::class)->name(name: 'achievement');
Route::resource('/donation', DonationController::class)->names([
  'index' => 'frontend.donation.index',
  'store' => 'frontend.donation.store',
]);
Route::resource('/registration', RegistrationController::class)->names([
  'index' => 'frontend.registration.index',
  'store' => 'frontend.registration.store',
]);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')
  ->middleware('auth')
  ->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('admin.dashboard');
    Route::resource('article', DashboardArticleController::class)->names([
      'index'   => 'admin.article.index',
      'create'  => 'admin.article.create',
      'store'   => 'admin.article.store',
      'show'    => 'admin.article.show',
      'edit'    => 'admin.article.edit',
      'update'  => 'admin.article.update',
      'destroy' => 'admin.article.destroy',
    ]);

    Route::resource('activity', DashboardActivityController::class)->names([
      'index'   => 'admin.activity.index',
      'create'  => 'admin.activity.create',
      'store'   => 'admin.activity.store',
      'show'    => 'admin.activity.show',
      'edit'    => 'admin.activity.edit',
      'update'  => 'admin.activity.update',
      'destroy' => 'admin.activity.destroy',
    ]);

    Route::resource('achievement', DashboardAchievementController::class)->names([
      'index'   => 'admin.achievement.index',
      'create'  => 'admin.achievement.create',
      'store'   => 'admin.achievement.store',
      'show'    => 'admin.achievement.show',
      'edit'    => 'admin.achievement.edit',
      'update'  => 'admin.achievement.update',
      'destroy' => 'admin.achievement.destroy',
    ]);

    Route::resource('donation', DashboardDonationController::class)->names([
      'index'   => 'admin.donation.index',
      'create'  => 'admin.donation.create',
      'store'   => 'admin.donation.store',
      'show'    => 'admin.donation.show',
      'edit'    => 'admin.donation.edit',
      'update'  => 'admin.donation.update',
      'destroy' => 'admin.donation.destroy',
    ]);

    Route::resource('student', DashboardStudentController::class)->names([
      'index'   => 'admin.student.index',
      'create'  => 'admin.student.create',
      'store'   => 'admin.student.store',
      'show'    => 'admin.student.show',
      'edit'    => 'admin.student.edit',
      'update'  => 'admin.student.update',
      'destroy' => 'admin.student.destroy',
    ]);

    Route::resource('profile', DashboardProfileController::class)->names([
      'index'   => 'admin.profile.index',
      'create'  => 'admin.profile.create',
      'store'   => 'admin.profile.store',
      'show'    => 'admin.profile.show',
      'edit'    => 'admin.profile.edit',
      'update'  => 'admin.profile.update',
      'destroy' => 'admin.profile.destroy',
    ]);
  });

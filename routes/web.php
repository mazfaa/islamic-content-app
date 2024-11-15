<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContentController::class, 'home'])->name('home');
Route::get('/quran', [ContentController::class, 'quran'])->name('quran');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/islamic-content/{id}', [ContentController::class, 'show'])->name('islamic-content.show');

Route::get('/auth/google', [AuthenticatedSessionController::class, 'redirectToGoogle'])->name('google.login')->withoutMiddleware('auth');
;
Route::get('/auth/google/callback', [AuthenticatedSessionController::class, 'handleGoogleCallback'])->name('google.callback');

require __DIR__ . '/auth.php';

Route::get('/test', function () {
  // $response = Http::get('https://api3.islamhouse.com/v3/paV29H2gm56kvLPy/main/sitecontent/ar/ar/json');
  $response = Http::get('https://equran.id/api/v2/surat/1');
  // dd($response->json());
  // dd(Auth::user());
  return $response->json();
});

// Route::get('/', function () {
//   return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

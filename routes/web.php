<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VoiceController;

Route::get('/', function () {
    return view('landing');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/voice', [VoiceController::class, 'index'])->name('voice.index');
    Route::get('/voice-sim', [VoiceController::class, 'simultane'])->name('voice.simultane');
    // return view('voice');
});

Route::get('/live/{session_id}', [VoiceController::class, 'mirror'])->name('voice.mirror');



Route::get('/lang/{locale}', function ($locale) {
    // İzin verilen diller
    $available = ['en', 'tr', 'de', 'fr', 'es', 'it', 'ar', 'ru', 'zh', 'ja'];

    if (in_array($locale, $available)) {
        session(['locale' => $locale]);   // dil session'a kaydedilir
    }

    return redirect()->back(); // aynı sayfaya dön
})->name('change.lang');


// Dashboard Rotaları
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
// /Dashboard Rotaları

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});








require __DIR__.'/auth.php';

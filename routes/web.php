<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/buku', function () {
//     $data['buku'] = [
//         ['judul' => 'buku a', 'halaman' => 12913],
//         ['judul' => 'buku b', 'halaman' => 11233],
//         ['judul' => 'buku c', 'halaman' => 156743],
//         ['judul' => 'buku d', 'halaman' => 122349],
//     ];
//     return view('buku.index', $data);
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

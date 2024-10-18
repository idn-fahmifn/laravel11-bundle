<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ini untuk menampilkan halaman

Route::get('siswa', function(){
    return view('siswa');
});
// ini untuk menampilkan respon dan parameter
Route::get('tentang-siswa/{nama}', function($nama){
    return "Ini adalah kisah kesuksesan ".$nama;
});
// menampilkan parameter di halaman
Route::get('detail/{nama}', function($nama){
    $alamat = 'Jalan Pinus';
    return view('detail', compact('nama', 'alamat'));
});

// halaman form
Route::get('form-siswa', function(){
   return view('form'); 
});

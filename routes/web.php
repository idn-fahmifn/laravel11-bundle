<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

Route::post('kirim-data', function(Request $request){
    $data = $request->all();
    dd($data);
})->name('kirim');


// yang dibutuhkan untuk CRUD.

// 1. buat table di migration, (php artisan make:migration create_nama_table)
// 2. migrate atau mengirimkan table ke database (php artisan migrate) ,
// 3. wajib membuat model,
// 4. Memerlukan controller
// 5. Tentukan dulu routing, mulai dari penamaan dan action
// 6. Membuat UI

Route::view('tampilan', 'template.template');

Route::get('barang', function() {
    return view('barang.index');
});



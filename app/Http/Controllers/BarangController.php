<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        return view('barang.index');
    }

    // fungsi untuk menyimpan data ke tabel
    public function store(Request $request){
        // variabel dibawah untuk memanggil data yang disimpan di Request
        $data = $request->all();
        Barang::create($data);
        return back();

    }

}

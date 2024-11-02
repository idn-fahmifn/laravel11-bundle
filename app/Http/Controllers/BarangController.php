<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {

        // deklarasi variabel untuk menampung data.

        $data = Barang::all();
        return view('barang.index', compact('data'));
    }

    // fungsi untuk menyimpan data ke tabel
    public function store(Request $request){
        // variabel dibawah untuk memanggil data yang disimpan di Request
        $data = $request->all();
        Barang::create($data);
        return back();
    }

    public function show($id)
    {
        $data = Barang::find($id);
        return view('barang.detail', compact('data'));
    }

}

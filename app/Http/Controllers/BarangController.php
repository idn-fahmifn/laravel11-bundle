<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {

        // deklarasi variabel untuk menampung data.

        $data = Barang::all();
        return view('barang.index', compact('data'));
    }

    // fungsi untuk menyimpan data ke tabel
    public function store(Request $request)
    {
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

    public function update(Request $request, $id)
    {
        $input = $request->all(); //untuk mengambil nilai yang diinputkan.

        //mencari data yang spesifik untuk diganti (berdasarkan id)
        $data = Barang::find($id);

        //meng-update data lama dengan data baru yang diambil dari $input
        $data->update($input); 

        return back()->with('success', 'data berhasil diubah');
    }

    public function delete($id)
    {
        $data = Barang::find($id);
        $data->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }

}

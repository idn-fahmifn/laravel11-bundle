@extends('template.template')

@section('header-area')
<div class="col-md-12">
    <div class="card p-2" style="background-color: #173158;">
        <div class="card-body text-white">
            <!-- Area Judul -->
            <h3>Halaman data seluruh barang</h3>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem aut ullam excepturi debitis autem facilis. Minima, ut ipsa a minus tempora aperiam? Maiores, exercitationem unde! Tempora quaerat quos, repellendus et aut maiores nesciunt eum, soluta natus, doloribus itaque temporibus ex?</p>
            <div class="button-area">
                <button class="btn btn-danger">Tambah data</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('body-area')
<div class="col-md-12">
    <div class="card mt-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Nama Barang</th>
                        <th>Merek</th>
                        <th>Harga</th>
                        <th>Pilihan</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jam</td>
                            <td>Rollex</td>
                            <td>IDR 30.000.000</td>
                            <td>
                                <a href="" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
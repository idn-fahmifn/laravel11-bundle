@extends('template.template')

@section('header-area')
<div class="col-md-12">
    <div class="card p-2" style="background-color: #173158;">
        <div class="card-body text-white">
            <!-- Area Judul -->
            <h3>Halaman data seluruh barang</h3>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem aut ullam excepturi debitis autem facilis. Minima, ut ipsa a minus tempora aperiam? Maiores, exercitationem unde! Tempora quaerat quos, repellendus et aut maiores nesciunt eum, soluta natus, doloribus itaque temporibus ex?</p>
            <div class="button-area">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalForm">
                    Tambah data
                </button>
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

<!-- Modals -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('kirim-barang')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_barang" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Merek</label>
                                <input type="text" name="merek" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" name="harga" required class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>


        </div>
    </div>
</div>
@endsection
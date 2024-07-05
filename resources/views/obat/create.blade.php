@extends('partials.master')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Form Obat</h4>
                            <a class="btn btn-dark mb-4" href="{{ route('obat.index') }}">Kembali</a>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('obat.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="merk">Merk</label>
                                    <input type="text" class="form-control" id="merk" placeholder="Merk"
                                        name="merk">
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori">
                                        <option value="obat_bebas">Obat Bebas</option>
                                        <option value="obat_bebas_terbatas">Obat Bebas Terbatas</option>
                                        <option value="obat_keras">Obat Keras</option>
                                        <option value="obat_narkotika">Obat Narkotika</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="harga">harga</label>
                                    <input type="text" class="form-control" id="harga" placeholder="Harga"
                                        name="harga">
                                </div>
                                <div class="form-group">
                                    <label for="stok">stok</label>
                                    <input type="text" class="form-control" id="stok" placeholder="Stok"
                                        name="stok">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

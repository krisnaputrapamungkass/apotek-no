@extends('partials.master')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Edit Form Obat</h4>
                            <a class="btn btn-dark mb-4" href="{{ route('obat.index')}}">Kembali</a>
                            <form action="{{route('obat.update', $data->id )}}"  method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="merk">Merk</label>
                                    <input type="text" class="form-control" id="merk" placeholder="Merk" name="merk" value="{{$data->merk}}">
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori">
                                        <option value="obat_bebas" {{$data->kategori == 'obat_bebas' ? 'selected' : '' }}>  </option>
                                        <option value="obat_bebas_terbatas" {{$data->kategori == 'obat_bebas_terbatas' ? 'selected' : ''}}>Obat Bebas Terbatas</option>
                                        <option value="obat_keras" {{$data->kategori == 'obat_keras' ? 'selected' : '' }}>Obat Keras</option>
                                        <option value="obat_narkotika" {{$data->kategori == 'obat_narkotika' ? 'selected' : ''}}>Obat Narkotika</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" placeholder="Harga"
                                        name="harga" value="{{$data->harga}}">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="text" class="form-control" id="stok" placeholder="Stok"
                                        name="stok" value="{{$data->stok}}">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

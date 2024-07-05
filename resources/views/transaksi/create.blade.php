@extends('partials.master')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Form Transaksi</h4>
                            <a class="btn btn-dark mb-4" href="{{ route('transaksi.index') }}">Kembali</a>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('transaksi.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="id_pelanggan">Nama Pelanggan</label>
                                    <select class="form-control" id="id_pelanggan" name="id_pelanggan">
                                        @foreach ($pelanggan as $c)
                                            <option value="{{ $c->id }}">
                                                {{ $c->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_pegawai">Nama Pegawai</label>
                                    <select class="form-control" id="id_pegawai" name="id_pegawai">
                                        @foreach ($pegawai as $p)
                                            <option value="{{ $p->id }}">
                                                {{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_obat">Merk Obat</label>
                                    <select class="form-control" id="id_obat" name="id_obat">
                                        @foreach ($obat as $o)
                                            <option value="{{ $o->id }}">
                                                {{ $o->merk }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="text" class="form-control" id="jumlah" placeholder="Jumlah"
                                        name="jumlah">
                                </div>
                                <div class="form-group">
                                    <label for="status"></label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="proses">Proses</option>
                                        <option value="batal">Batal</option>
                                        <option value="selesai">Selesai</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

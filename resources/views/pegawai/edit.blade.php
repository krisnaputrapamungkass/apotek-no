@extends('partials.master')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Edit Form Pegawai</h4>
                            <a class="btn btn-dark mb-4" href="{{ route('pegawai')}}">Kembali</a>
                            <form action="{{route('pegawai.update', $data->id )}}"  method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{$data->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="text" class="form-control" id="umur" placeholder="Umur" name="umur" value="{{$data->umur}}">
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select class="form-control" id="jk" name="jk">
                                        <option value="laki-laki" {{$data->jk == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="perempuan" {{$data->jk == 'perempuan' ? 'selected' : ''}}>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gaji">Gaji</label>
                                    <input type="text" class="form-control" id="gaji" placeholder="Gaji" name="gaji" value="{{$data->gaji}}">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

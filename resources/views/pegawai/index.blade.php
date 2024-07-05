@extends('partials.master')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-4">Data Pegawai🙎</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Umur</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->umur }}</td>
                                                <td>{{ $item->jk }}</td>
                                                <td>
                                                    <form action="{{ route('pegawai.destroy', $item->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('pegawai.edit', $item->id) }}"
                                                            class="btn btn-warning btn-sm" type="button">
                                                            <i class="mdi mdi-pencil">
                                                            </i>
                                                        </a>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                            data-target="#detailModal_{{$item->id}}">
                                                            <i class="mdi mdi-eye"></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="detailModal_{{$item->id}}" tabindex="-1"
                                                            role="dialog" aria-labelledby="detailModalLabel_{{$item->id}}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="detailModalLabel">Modal
                                                                            title</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="nama">Nama</label>
                                                                            <input type="text"
                                                                                class="form-control text-dark"
                                                                                id="nama" name="nama"
                                                                                value="{{ $item->nama }}" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="umur">Umur</label>
                                                                            <input type="text"
                                                                                class="form-control text-dark"
                                                                                id="umur" name="umur"
                                                                                value="{{ $item->umur }}" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="jk">Jenis Kelamin</label>
                                                                            <input type="text"
                                                                                class="form-control text-dark"
                                                                                id="jk" name="jk"
                                                                                value="{{ $item->jk }}" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="gaji">Gaji</label>
                                                                            <input type="text"
                                                                                class="form-control text-dark"
                                                                                id="gaji" name="gaji"
                                                                                value="{{ $item->gaji }}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Tutup</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-danger btn-sm"><i
                                                                class="mdi mdi-delete"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    @endsection

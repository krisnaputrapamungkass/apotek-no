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
                            <h4 class="card-title text-center mb-4">Data Transaksi💵</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Nama Pegawai</th>
                                            <th>Merk Obat</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
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
                                                <td>{{ $item->pelanggan->nama }}</td>
                                                <td>{{ $item->pegawai->nama }}</td>
                                                <td>{{ $item->obat->merk }}</td>
                                                <td>{{ $item->jumlah }}</td>
                                                <td>{{ $item->obat->total ?? 'belum disetting' }}</td>
                                                <td>
                                                    <form action="{{ route('transaksi.destroy', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('transaksi.edit', $item->id) }}"
                                                            class="btn btn-warning btn-sm" type="button">
                                                            <i class="mdi mdi-pencil">
                                                            </i>
                                                        </a>

                                                        <!-- Tombol untuk membuka modal -->
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#detailModal_{{ $item->id }}">
                                                            <i class="mdi mdi-eye"></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="detailModal_{{ $item->id }}"
                                                            tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <!-- Mengatur modal menjadi besar dengan kelas modal-lg -->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                            <h5 class="modal-title" id="detailModalLabel">
                                                                                Transaksi {{ $item->pelanggan->nama }}</h5>
                                                                        <button type="button" class="btn-close btn-danger"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">X</button>
                                                                    </div>
                                                                    <div class="modal-body text-start p-4">
                                                                        <h6><b>Pelanggan</b></h6>
                                                                        <div class="d-flex justify-content-between pb-1">
                                                                            <p class="small">Nama</p>
                                                                            <p class="small">{{ $item->pelanggan->nama }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between pb-1">
                                                                            <p class="small">Umur</p>
                                                                            <p class="small">{{ $item->pelanggan->umur }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between pb-1">
                                                                            <p class="small">Jenis Kelamin</p>
                                                                            <p class="small">{{ $item->pelanggan->jk }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between pb-1">
                                                                            <p class="small">Alamat</p>
                                                                            <p class="small">
                                                                                {{ $item->pelanggan->alamat }}</p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between pb-1">
                                                                            <p class="small">Sakit</p>
                                                                            <p class="small">{{ $item->pelanggan->sakit }}
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-between pb-1 mb-2">
                                                                            <p class="small">No Telp</p>
                                                                            <p class="small">
                                                                                {{ $item->pelanggan->no_telp }}</p>
                                                                        </div>
                                                                        <h6><b>Obat</b></h6>
                                                                        <div class="d-flex justify-content-between pb-1">
                                                                            <p class="small">Merk</p>
                                                                            <p class="small">{{ $item->obat->merk }}</p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between pb-1">
                                                                            <p class="small">Kategori</p>
                                                                            <p class="small">{{ $item->obat->kategori }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between pb-1">
                                                                            <p class="small">Stok</p>
                                                                            <p class="small">{{ $item->obat->stok }}</p>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-between pb-1 mb-2">
                                                                            <p class="small">Jumlah</p>
                                                                            <p class="small">{{ $item->jumlah }}</p>
                                                                        </div>
                                                                        <h5 class="mb-0">Pembayaran</h5>
                                                                        <hr class="mt-2 mb-3"
                                                                            style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">
                                                                        <div class="d-flex justify-content-between mb-2">
                                                                            <p class="fw-bold mb-1">Harga Satuan</p>
                                                                            <p class="text-muted mb-1">Rp.
                                                                                {{ $item->obat->harga }}</p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between mb-3">
                                                                            <p class="small mb-0">Biaya Admin</p>
                                                                            <p class="small mb-0">Rp. 2.500</p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between mb-2">
                                                                            <p class="fw-bold">Total</p>
                                                                            <p class="fw-bold">Rp. 17.500</p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between">
                                                                            <p class="fw-bold">Status</p>
                                                                            <p class="badge badge-warning badge-sm">{{$item->status}}</p>
                                                                        </div>
                                                                        

                                                                        </hr>
                                                                    </div>
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

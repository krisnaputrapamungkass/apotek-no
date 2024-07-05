<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pegawai;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaksi::with('pegawai', 'pelanggan', 'obat')->get();
        return view('transaksi.index', ['page' => 'transaksi'], compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Transaksi::with('pegawai', 'pelanggan', 'obat')->get();
        $pegawai = Pegawai::all();
        $pelanggan = Pelanggan::all();
        $obat = Obat::all();
        return view('transaksi.create', compact('data', 'pegawai', 'pelanggan', 'obat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'id_pelanggan' => 'required|exists:pelanggans,id',
            'id_pegawai' => 'required|exists:pegawais,id',
            'id_obat' => 'required|exists:obats,id',
            'jumlah' => 'required|integer',
            'status' => 'required|in:proses,batal,selesai',
        ]);

        $transaksi = new Transaksi();
        $transaksi->id_pelanggan = $request->id_pelanggan;
        $transaksi->id_pegawai = $request->id_pegawai;
        $transaksi->id_obat = $request->id_obat;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->status = $request->status;

        $transaksi->save();
        return redirect('/transaksi')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Transaksi::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $pegawai = Pegawai::all();
        $obat = Obat::all();

        return view('transaksi.edit', compact('data', 'pelanggan', 'pegawai', 'obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'id_pelanggan' => 'required|exists:pelanggans,id',
            'id_pegawai' => 'required|exists:pegawais,id',
            'id_obat' => 'required|exists:obats,id',
            'jumlah' => 'required|integer',
            'status' => 'required|in:proses,batal,selesai',
        ]);

        $data = Transaksi::findOrFail($id);
        $data->id_pelanggan = $request->id_pelanggan;
        $data->id_pegawai = $request->id_pegawai;
        $data->id_obat = $request->id_obat;
        $data->jumlah = $request->jumlah;
        $data->status = $request->status;

        $data->save();
        return redirect('/transaksi')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

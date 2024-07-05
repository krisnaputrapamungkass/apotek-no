<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pelanggan::all();
        return view('pelanggan.index', ['data' => $data, 'page' => 'pelanggan']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate(
            [
                'nama' => 'required',
                'umur' => 'required|integer',
                'jk' => 'required',
                'alamat' => 'required',
                'sakit' => 'required',
                'no_telp' => 'required|numeric',
            ]
            );
            $simpan = Pelanggan::create($validasiData);

            return redirect('/pelanggan')->with('success','record created successfully!');
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
        $data = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate(
            [
                'nama' => 'required',
                'umur' => 'required|integer',
                'jk' => 'required',
                'alamat' => 'required',
                'sakit' => 'required',
                'no_telp' => 'required|integer',
            ]
            );

            $data = Pelanggan::findOrFail($id);
            $data->update($validasiData);
            return redirect('/pelanggan')->with('success','record created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pelanggan::findOrFail($id);

        $data->delete();
        return redirect('/pelanggan')->with('success','record created successfully!');
    }
}

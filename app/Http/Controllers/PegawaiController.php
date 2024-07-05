<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai.index', ['data' => $data, 'page' => 'pegawai']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
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
                'gaji' => 'required|integer',
            ]
        );
        $simpan = Pegawai::create($validasiData);

        return redirect('/pegawai')->with('success', 'Record created successfully!');
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
        $data = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate(
            [
                'nama' => 'required',
                'umur' => 'required',
                'jk' => 'required',
                'gaji' => 'required',
            ]
        );

        $data = Pegawai::findOrFail($id);
        $data->update($validasiData);
        return redirect('/pegawai')->with('success', 'Record created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pegawai::findOrfail($id);

        $data->delete();
        return redirect('/pegawai')->with('success', 'Record Deleted successfully!');
    }
}

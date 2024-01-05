<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
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
        $request->validate([
            'kos_kode' => 'bail|required',
            'pel_no' => 'required',
            'pel_nama' => 'required'
        ],
        [
            'kos_kode.required' => 'Id golongan wajib diisi',
            'pel_no.required' => 'Kode wajib diisi',
            'pel_nama.required' => 'Nama wajib diisi'
        ]);

        Pelanggan::create([
            'kos_kode' => $request->kos_kode,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_kontrak' => $request->pel_kontrak,
            'pel_biaya' => $request->pel_biaya,
            'pel_lunas' => $request->pel_lunas
        ]);

        return redirect('pelanggan');
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
        $row = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
            'kos_kode' => 'bail|required',
            'pel_no' => 'required',
            'pel_nama' => 'required'
        ],
        [
            'kos_kode.required' => 'Id golongan wajib diisi',
            'pel_no.required' => 'Kode wajib diisi',
            'pel_nama.required' => 'Nama wajib diisi'
        ]);

        $row = Pelanggan::findOrFail($id);
        $row->update([
            'kos_kode' => $request->kos_kode,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_kontrak' => $request->pel_kontrak,
            'pel_biaya' => $request->pel_biaya,
            'pel_lunas' => $request->pel_lunas
        ]);
        
        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan');
    }
}

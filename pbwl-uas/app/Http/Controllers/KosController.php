<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kos;

class KosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Kos::all();
        return view('kos.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kos_kode' => 'bail|required|unique:tb_kos',
            'kos_nama' => 'required'
        ],
        [
            'kos_kode.required' => 'Kode wajib diisi',
            'kos_kode.unique' => 'Kode sudah ada',
            'kos_nama.required' => 'Nama wajib diisi'
        ]);

        Kos::create([
            'kos_kode' => $request->kos_kode,
            'kos_nama' => $request->kos_nama,
            'kos_warna' => $request->kos_warna
        ]);

        return redirect('kos');
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
        $row = Kos::findOrFail($id);
        return view('kos.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
            'kos_kode' => 'bail|required',
            'kos_nama' => 'required'
        ],
        [
            'kos_kode.required' => 'Kode wajib diisi',
            'kos_nama.required' => 'Nama wajib diisi'
        ]);

        $row = kos::findOrFail($id);
        $row->update([
            'kos_kode' => $request->kos_kode,
            'kos_nama' => $request->kos_nama,
            'kos_warna' => $request->kos_warna
        ]);
        
        return redirect('kos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Kos::findOrFail($id);
        $row->delete();

        return redirect('kos');
    }
}

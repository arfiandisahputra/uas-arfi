@extends('layouts.app')

@section('content')
    <h2>Edit Pelanggan</h2>
    <div class="container">

    <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
        @method('PATCH')
        @csrf
        <div>
        <div class="mb-3">
            <label for="">KODE KAMAR</label>
            <input type="text" name="kos_kode" id="" class="form-control" value="{{ $row->kos_kode }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">NO PELANGGAN</label>
            <input type="text" name="pel_no" id="" class="form-control" value="{{ $row->pel_no }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control" value="{{ $row->pel_nama }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="pel_alamat" id="" class="form-control" value="{{ $row->pel_alamat }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">HP</label>
            <input type="text" name="pel_hp" id="" class="form-control" value="{{ $row->pel_hp }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">KONTRAK</label>
            <input type="text" name="pel_kontrak" id="" class="form-control" value="{{ $row->pel_kontrak }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">BIAYA</label>
            <input type="text" name="pel_biaya" id="" class="form-control" value="{{ $row->pel_biaya }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">LUNAS</label>
            <input type="text" name="pel_lunas" id="" class="form-control" value="{{ $row->pel_lunas }}"></>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection

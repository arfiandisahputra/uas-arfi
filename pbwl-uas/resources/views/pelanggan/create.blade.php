@extends('layouts.app')

@section('content')
    <h2>Add Pelanggan</h2>

    <form action="{{ url('pelanggan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">KODE KAMAR</label>
            <input type="text" name="kos_kode" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NO PELANGGAN</label>
            <input type="text" name="pel_no" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="pel_alamat" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">HP</label>
            <input type="text" name="pel_hp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">KONTRAK</label>
            <input type="text" name="pel_kontrak" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">BIAYA</label>
            <input type="text" name="pel_biaya" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">LUNAS</label>
            <input type="text" name="pel_lunas" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection

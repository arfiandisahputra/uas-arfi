@extends('layouts.app')

@section('content')
    <h2>Add Kamar</h2>

    <form action="{{ url('kos') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">KODE</label>
            <input type="text" name="kos_kode" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NAMA KAMAR</label>
            <input type="text" name="kos_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">WARNA KAMAR</label>
            <input type="text" name="kos_warna" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection

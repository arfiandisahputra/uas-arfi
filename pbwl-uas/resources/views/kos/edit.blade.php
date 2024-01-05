@extends('layouts.app')

@section('content')
    <div class="container">
    <h2>Edit Kamar</h2>

    <form action="{{ url('kos/' . $row->kos_id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
        <div class="mb-3">
            <label for="">KODE</label>
            <input type="text" name="kos_kode" id="" class="form-control" value="{{ $row->kos_kode }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">NAMA KAMAR</label>
            <input type="text" name="kos_nama" id="" class="form-control" value="{{ $row->kos_nama }}"></>
        </div>
        <div class="mb-3">
            <label for="">WARNA KAMAR</label>
            <input type="text" name="kos_warna" id="" class="form-control" value="{{ $row->kos_warna }}"></>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection

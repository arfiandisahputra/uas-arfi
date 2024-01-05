@extends('layouts.app')
@section('content')

<div class="container">

<h3>Daftar Pelanggan</h3>

<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3 float-end">Add Pelanggan</a>

<table class="table table-bordered">
      <tr>
            <th>KODE KAMAR</th>
            <th>NO PELANGGAN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>KONTRAK</th>
            <th>BIAYA</th>
            <th>LUNAS</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->kos_kode }}</td>
                  <td>{{ $row->pel_no }}</td>
                  <td>{{ $row->pel_nama }}</td>
                  <td>{{ $row->pel_alamat }}</td>
                  <td>{{ $row->pel_hp }}</td>
                  <td>{{ $row->pel_kontrak }}</td>
                  <td>{{ $row->pel_biaya }}</td>
                  <td>{{ $row->pel_lunas }}</td>
                  <td><a href="{{ url('pelanggan/edit/' . $row->pel_id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection
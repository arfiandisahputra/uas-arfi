@extends('layouts.app')
@section('content')

<div class="container">

<h3>Kos</h3>

<a href="{{ url('kos/create') }}" class="btn btn-primary mb-3 float-end">Add Kamar</a>

<table class="table table-bordered">
      <tr>
            <th>KODE</th>
            <th>NAMA KAMAR</th>
            <th>WARNA KAMAR</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->kos_kode }}</td>
                  <td>{{ $row->kos_nama }}</td>
                  <td>{{ $row->kos_warna }}</td>
                  <td><a href="{{ url('kos/edit/' . $row->kos_id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('kos/' . $row->kos_id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection
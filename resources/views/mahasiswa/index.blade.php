@extends('layout.main')
@section('title', 'Abaout')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Data Mahasiswa</h1>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($mahasiswa as $m)
          <tr>
            <th scope="row">{{ $loop->iteration  }}</th>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->email }}</td>
            <td>{{ $m->jurusan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
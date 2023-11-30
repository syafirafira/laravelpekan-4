@extends('layout.master')

@section('judul')
Halaman List Cast Film
@endsection

@section('content')

<a href="/cast/create" class="btn btn-primary btn-sm mb-3">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($cast as $key => $value)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$value->nama}}</td>
            <td>
                <form action ="/cast/{{$value->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/cast/{{$value->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/cast/{{$value->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td>Tidak Ada Data</td>
        </tr>
    @endforelse
  </tbody>
</table>

@endsection
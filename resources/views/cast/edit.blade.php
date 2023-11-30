@extends('layout.master')

@section('judul')
Halaman Edit Cast Film
@endsection

@section('content')

<form action="/cast/{{$cast->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label>Cast Name</label>
    <input type="text" name="nama" value="{{$cast->nama}}" class="form-control">
  </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  <div class="form-group">
    <label>Umur</label>
    <input type="number" name="umur" value="{{$cast->umur}}" class="form-control">
  </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  <label>Bio</label> <br>
    <textarea name="bio" class="form-control" cols="20" rows="10">{{$cast->bio}}</textarea> <br> <br>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
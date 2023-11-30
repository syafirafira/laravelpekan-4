@extends('layout.master')

@section('judul')
Halaman Biodata
@endsection

@section('content')
    <form action="/welcome" method="post">
        @csrf
        <label>Nama:</label> <br>
        <input type="text" name="nama"> <br><br>
        <label>Alamat:</label> <br>
        <input type="text" name="alamat"> <br><br>
        <label>Usia:</label> <br>
        <input type="number"> <br><br>
        <label>Gender:</label> <br>
        <input type="radio" name="gender"> Male <br>
        <input type="radio" name="gender"> Female <br>
        <input type="radio" name="gender"> Other <br> <br>
        <label>Nationality:</label> <br>
        <select name="nacionality">
            <option value="">Indonesian</option>
            <option value="">Malaysia</option>
            <option value="">Singapore</option>
            <option value="">English</option>
        </select> <br> <br>
        <label>Language Spoken:</label> <br>
        <input type="checkbox" name="language spoken"> Bahasa Indonesia <br>
        <input type="checkbox" name="language spoken"> English <br>
        <input type="checkbox" name="language spoken"> Arabic <br> 
        <input type="checkbox" name="language spoken"> Japanese <br> <br>
        <label>Bio</label> <br>
        <textarea cols="20" rows="10"></textarea> <br> <br>

        <input type="submit" value="Kirim">
    </form>
@endsection
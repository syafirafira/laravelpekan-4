<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Blade</title>
</head>
<body>
    <header>
        <h1>Selamat datang di Blog MAKN Ende</h1>
        <nav>
            <a href="/blog">BERANDA</a>
            <a href="/blog/tentang">TENTANG</a>
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>

    <hr>
    <br>
    <br>
    {{-- bagian judul halaman blog --}}
    <h3>@yield('judul_halaman')</h3>

    {{-- bagian konten blog --}}
    @yield('konten');

    <br>
    <br>
    <hr>
    <footer>
        <p>&copy; <a href="">www.maknende.sch.id</a></p>
    </footer>
</body>
</html>
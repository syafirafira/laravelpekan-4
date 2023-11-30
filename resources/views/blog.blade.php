<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Selamat datang di Blog MAKN Ende</h1>
        <nav>
            <a href="/blog">BERANDA</a>
            <a href="/blog/tentang">TENTANG</a>
            <a href="https://makn-ende.sch.id/">KONTAK</a>
        </nav>
    </header>

    
   
    
    <br>
    
    <h3>@yield('title')</h3>

    <main>@yield('content')</main>
    

    <br>
    <br>
    <hr>
    <footer>
        <p>&copy; <a href="https://makn-ende.sch.id/">www.maknende.sch.id</a></p>
    </footer>
</body>
</html>
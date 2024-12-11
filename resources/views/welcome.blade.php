<!DOCTYPE html>
<html lang="id">

<head>
    <title>Nge-Travel BERANDA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/ngetravel.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo-container">
            <span class="logo-text">Nge-</span>
            <img src="{{ asset('logo.png') }}" alt="Travel Logo" class="logo-image">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('beranda') }}">BERANDA</a></li>
                <li><a href="{{ route('ngetravelDestinasi') }}">DESTINASI</a></li>
                <li><a href="{{ route('ngetravelPaket') }}">PAKET</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li><a href="#tentang">TENTANG</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <p class="welcome">Selamat datang di Nge Travel!</p>
        <h1>Mulai perjalananmu<br>Dengan kami</h1>
        <p class="subtitle">Daftar sekarang dan dapatkan promo eksklusif!</p>
        <div class="cta-buttons">
            <a href="daftar.html" class="btn btn-primary">Daftar</a>
            <a href="login.html" class="btn btn-secondary">Login</a>
        </div>
    </main>

    <script>
        const welcomeElement = document.querySelector('.welcome');
        const h1Element = document.querySelector('h1');
        const subtitleElement = document.querySelector('.subtitle');

        welcomeElement.textContent = 'Halo, selamat datang';
        h1Element.innerHTML = 'Mulai perjalananmu<br>Bersama kami';
        subtitleElement.textContent = 'Daftar sekarang!!';
    </script>
</body>

</html>

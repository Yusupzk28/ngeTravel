<!DOCTYPE html>
<html lang="id">
<head>
    <title>Paket Nge-Travel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/ngetravelCont.css') }}" />
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
    <div class="main-content">
        <div class="table-of-contents">
            @foreach ($pakets as $pak)
            <div class="package-box">
                <h2 class="package-title">{{ $pak->namaPaket }}</h2>
                <ul>
                    <li>{{ $pak->destinasi }}</li>
                    <li>{{ $pak->lokasi }}</li>
                    <li class="active">Rp {{ number_format($pak->harga, 0, ',', '.') }}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
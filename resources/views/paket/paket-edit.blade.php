<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Paket</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/destinasi-tambah.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Edit Data Paket</h2>
        </div>
        <div class="form-group">
            <form action="{{ url('/paket/update/' . $paket->id_paket) }}" method="post">
                @csrf
                @method('put')

                <label for="namaPaket">Nama Paket</label>
                <input class="input" type="text" name="namaPaket" id="namaPaket" value="{{ old('namaPaket', $paket->namaPaket) }}" required />

                <label for="destinasi">Destinasi</label>
                <input class="input" type="text" name="destinasi" id="destinasi" value="{{ old('destinasi', $paket->destinasi) }}" required />

                <label for="lokasi">Lokasi</label>
                <input class="input" type="text" name="lokasi" id="lokasi" value="{{ old('lokasi', $paket->lokasi) }}" required />

                <label for="harga">Harga</label>
                <input class="input" type="number" name="harga" id="harga" value="{{ old('harga', $paket->harga) }}" required />

                <button type="submit" class="submit-button">Edit</button>
            </form>
        </div>
    </div>
</body>
</html>

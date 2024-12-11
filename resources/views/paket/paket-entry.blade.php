<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Paket</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/destinasi-tambah.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Tambah Data Paket</h2>
        </div>
        <div class="form">
            <form id="dataForm" action="{{ url('/paket/store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="namaPaket">Nama Paket</label>
                    <input class="input" type="text" name="namaPaket" id="namaPaket" value="{{ old('namaPaket') }}">
                    @error('namaPaket')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="destinasi">Destinasi</label>
                    <input class="input" type="text" name="destinasi" id="destinasi" value="{{ old('destinasi') }}">
                    @error('destinasi')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input class="input" type="text" name="lokasi" id="lokasi" value="{{ old('lokasi') }}">
                    @error('lokasi')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input class="input" type="number" name="harga" id="harga" value="{{ old('harga') }}">
                    @error('harga')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="submit-button" name="simpan">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>
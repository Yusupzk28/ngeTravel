<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/destinasi-tambah.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Tambah Data</h2>
        </div>
        <div class="form">
            <form id="dataForm" action="{{ url('/destinasi/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="destinasi">Destinasi</label>
                    <input type="file" name="destinasi" id="destinasi">
                    @error('destinasi')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="namaDestinasi">Nama Destinasi</label>
                    <input class="input" type="text" name="namaDestinasi" id="namaDestinasi" value="{{ old('namaDestinasi') }}">
                    @error('namaDestinasi')
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
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="input" name="deskripsi" id="deskripsi">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="submit-button" name="simpan">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>

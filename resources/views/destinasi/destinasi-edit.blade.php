<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Destinasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/destinasi-tambah.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Edit Data Destinasi</h2>
        </div>
        <div class="form-group">
            <form action="{{ url('/destinasi/update/' . $destinasi->id_destinasi) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <label for="destinasi">Destinasi</label>
                <img src="{{ asset('img_destinasi/' . $destinasi->destinasi) }}" alt="Gambar Destinasi" width="200px" onerror="this.onerror=null;this.src='{{ asset('img_destinasi/default-image.jpg') }}';" />
                <input type="file" name="destinasi" id="destinasi" />

                <label for="namaDestinasi">Nama Destinasi</label>
                <input class="input" type="text" name="namaDestinasi" id="namaDestinasi"
                    value="{{ old('namaDestinasi', $destinasi->namaDestinasi) }}" required />

                <label for="lokasi">Lokasi</label>
                <input class="input" type="text" name="lokasi" id="lokasi"
                    value="{{ old('lokasi', $destinasi->lokasi) }}" required />

                <label for="deskripsi">Deskripsi</label>
                <textarea class="input" name="deskripsi" id="deskripsi" required>{{ old('deskripsi', $destinasi->deskripsi) }}</textarea>

                <button type="submit" class="submit-button">Edit</button>
            </form>
        </div>
    </div>
</body>
</html>

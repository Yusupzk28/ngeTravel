<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Paket</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/destinasi-tambah.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-group">
            <h2>Apakah Anda yakin ingin menghapus paket ini?</h2>
            <form action="{{ url('/paket/hapus/' . $paket->id_paket) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="submit-button" style="margin-bottom: 10px">Yes</button>
            </form>

            <form action="{{ url('/paket') }}" method="GET">
                <button type="submit" class="submit-button" name="tidak">No</button>
            </form>
        </div>
    </div>
</body>
</html>

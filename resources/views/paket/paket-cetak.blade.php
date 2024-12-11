<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Paket</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/destinasi-tambah.css') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1, h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
        }

        .back-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laporan Data Paket</h1>
        <h2>Daftar Paket Wisata</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Destinasi</th>
                    <th>Lokasi</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pakets as $index => $paket)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $paket->namaPaket }}</td>
                        <td>{{ $paket->destinasi }}</td>
                        <td>{{ $paket->lokasi }}</td>
                        <td>{{ number_format($paket->harga, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('paket') }}" class="back-button">Kembali</a>
    </div>
</body>
</html>

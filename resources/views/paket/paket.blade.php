<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nge-Travel Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/destinasi.css') }}" rel="stylesheet" />
</head>

<body>
    @include('partials.sidebar')
    <div class="main-content">
        <div class="content">
            <a href="/paket/tambah">
                <button class="add-button">Tambah</button>
            </a>
            <table>
                <thead>
                    <tr> 
                        <th scope="col" style="width: 30%">Nama Paket</th>
                        <th scope="col" style="width: 20%">Destinasi</th>
                        <th scope="col" style="width: 20%">Lokasi</th>
                        <th scope="col" style="width: 20%">Harga</th>
                        <th scope="col" style="width: 10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pakets as $paket)
                    <tr>
                        <td>{{ $paket->namaPaket }}</td>
                        <td>{{ $paket->destinasi }}</td>
                        <td>{{ $paket->lokasi }}</td>
                        <td>{{ $paket->harga }}</td>
                        <td>
                            <a class="fas fa-edit" style="display:inline;" href="/paket/edit/{{ $paket->id_paket }}"></a> |
                            <a class="fas fa-trash" style="display:inline;" href="/paket/hapus/{{ $paket->id_paket }}"></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align:center;">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <a href="/paket/cetak" target="_blank">
                <button class="add-button" style="margin-top: 20px;">Cetak</button>
            </a>
        </div>
    </div>
</body>

</html>

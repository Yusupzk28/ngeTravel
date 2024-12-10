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
            <a href="/destinasi/tambah">
                <button class="add-button">Tambah</button>
            </a>
            <table>
                <thead>
                    <tr>
                        <th scope="col" style="width: 10%">Destinasi</th>
                        <th scope="col" style="width: 15%">Nama Destinasi</th>
                        <th scope="col" style="width: 10%">Lokasi</th>
                        <th scope="col" style="width: 55%">Deskripsi</th>
                        <th scope="col" style="width: 10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($destinasi as $destinasi)
                    <tr>
                        <td><img src="{{ asset('img_destinasi/' . $destinasi->destinasi) }}" alt="Destinasi" width="300px"></td>
                        <td>{{ $destinasi->namaDestinasi }}</td>
                        <td>{{ $destinasi->lokasi }}</td>
                        <td>{{ $destinasi->deskripsi }}</td>
                        <td>
                            <a class="fas fa-edit" style="display:inline;" href="/destinasi/edit/{{ $destinasi->id_destinasi }}"></a> |
                            <a class="fas fa-trash" style="display:inline;" href="/destinasi/hapus/{{ $destinasi->id_destinasi }}"></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align:center;">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

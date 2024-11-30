<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/paket-tambah.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Tambah Data</h2>
        </div>
        <form id="dataForm" action="paket-proses.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="namaPaket">Nama Paket</label>
                <input type="text" id="namaPaket" name="namaPaket" required>
                <label for="destinasi">Destinasi</label>
                <input type="text" id="destinasi" name="destinasi" required>
                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" required>
                <label for="harga">Harga</label>
                <input type="number" id="harga" name="harga" required>
            </div>
            <button type="submit" class="submit-button" name="simpan">
                Tambah 
            </button>
        </form>
    </div>
</body>
</html>
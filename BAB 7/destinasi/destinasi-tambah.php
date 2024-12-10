<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:login.php');
	}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/destinasi-tambah.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Tambah Data</h2>
        </div>
        <div class="form-group">
            <form id="dataForm" action="destinasi-proses.php" method="post" enctype="multipart/form-data">
                <label for="destinasi">Destinasi</label>
                <input type="file" id="destinasi" name="destinasi" required>
                <label for="namaDestinasi">Nama Destinasi</label>
                <input type="text" id="namaDestinasi" name="namaDestinasi" required>
                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" required>
                <label for="deskripsi">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" required>
                <button type="submit" class="submit-button" name="simpan">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>
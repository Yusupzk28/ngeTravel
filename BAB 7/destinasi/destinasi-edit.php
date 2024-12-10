<?php 
session_start();
if ($_SESSION['username'] == null) {
    header('location: login.php');
    exit();
}

include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM tb_destinasi WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "
            <script>
                alert('Data tidak ditemukan');
                window.location = 'destinasi.php';
            </script>
        ";
        exit();
    }
} else {
    echo "
        <script>
            alert('ID tidak valid');
            window.location = 'destinasi.php';
        </script>
    ";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Destinasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/destinasi-tambah.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Edit Data Destinasi</h2>
        </div>
        <div class="form-group">
            <form id="dataForm" action="destinasi-proses.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= htmlspecialchars($data['id']) ?>">
                <input type="hidden" name="imageLama" value="<?= htmlspecialchars($data['destinasi']) ?>">

                <label for="destinasi">Destinasi</label>
                <img src="../img_destinasi/<?= htmlspecialchars($data['destinasi']) ?>" alt="Gambar Destinasi" width="200px">
                <input type="file" id="destinasi" name="destinasi" />

                <label for="namaDestinasi">Nama Destinasi</label>
                <input type="text" id="namaDestinasi" name="namaDestinasi" placeholder="Nama Destinasi" value="<?= htmlspecialchars($data['namaDestinasi']) ?>" required />

                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" placeholder="Lokasi" value="<?= htmlspecialchars($data['lokasi']) ?>" required />

                <label for="deskripsi">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="<?= htmlspecialchars($data['deskripsi']) ?>" required />
                
                <button type="submit" class="submit-button" name="edit">Edit</button>
            </form>
        </div>
    </div>
</body>
</html>
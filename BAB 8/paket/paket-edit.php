<?php 
session_start();
if ($_SESSION['username'] == null) {
    header('location: login.php');
    exit();
}

include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM tb_paketdestinasi WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "
            <script>
                alert('Data tidak ditemukan');
                window.location = 'paket.php';
            </script>
        ";
        exit();
    }
} else {
    echo "
        <script>
            alert('ID tidak valid');
            window.location = 'paket.php';
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
    <title>Edit Data Paket</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/destinasi-tambah.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Edit Data Paket</h2>
        </div>
        <div class="form-group">
            <form id="dataForm" action="paket-proses.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= htmlspecialchars($data['id']) ?>">

                <label for="namaPaket">Nama Paket</label>
                <input type="text" id="namaPaket" name="namaPaket" 
                placeholder="Nama Paket" value="<?= htmlspecialchars($data['namaPaket']) ?>" required />

                <label for="destinasi">Destinasi</label>
                <input type="text" id="destinasi" name="destinasi" 
                placeholder="Destinasi" value="<?= htmlspecialchars($data['destinasi']) ?>" required />

                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" 
                placeholder="Lokasi" value="<?= htmlspecialchars($data['lokasi']) ?>" required />

                <label for="harga">Harga</label>
                <input type="number" id="harga" name="harga" 
                placeholder="harga" value="<?= htmlspecialchars($data['harga']) ?>" required />
                
                <button type="submit" class="submit-button" name="edit">Edit</button>
            </form>
        </div>
    </div>
</body>
</html>
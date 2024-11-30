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
    <title>Hapus Data Paket</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/destinasi-tambah.css">
</head>
<body>
    <div class="container">
        <div class="form-group">
            <form id="dataForm" action="paket-proses.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <button type="submit" class="submit-button" name="hapus" style="margin-bottom: 10px">Yes</button>
		        <button type="submit" class="submit-button" name="tidak">No</button>
            </form>
        </div>
    </div>
</body>
</html>
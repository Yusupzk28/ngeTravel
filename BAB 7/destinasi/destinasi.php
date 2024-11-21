<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nge-Travel Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="../css/destinasi.css" rel="stylesheet" />
</head>

<body>
    <div class="sidebar">
        <h2>
            <span style="padding: 0 10px;">Admin</span>
            <div class="icons" style="padding: 0 10px;">
                <i class="fas fa-user-circle" style="margin-right: 5px;"></i>
                <a href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </h2>
        <ul>
            <li><a href="../admin.php" class="links_name">DASHBOARD</a></li>
            <li><a href="#" class="links_name">DESTINASI</a></li>
            <li><a href="../paket/paket.php" class="links_name">PAKET</a></li>
            <li><a href="../paket/paket.php" class="links_name">TRANSAKSI</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="content">
            <a href="destinasi-tambah.php">
                <button class="add-button">Tambah</button>
            </a>
            <table>
                <thead>
                    <tr>
                        <th scope="col" style="width: 10%">Gambar</th>
                        <th scope="col" style="width: 10%">Nama Destinasi</th>
                        <th scope="col" style="width: 10%">Lokasi</th>
                        <th scope="col" style="width: 63%">Deskripsi</th>
                        <th scope="col" style="width: 7%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT * FROM tb_destinasi";
                    $result = mysqli_query($koneksi, $sql);
                    
                    if (mysqli_num_rows($result) == 0) {
                        echo "
                        <tr>
                            <td colspan='5' align='center'>Data Kosong</td>
                        </tr>
                        ";
                    } else {
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "
                            <tr>
                                <td>
                                    <img src='../img_destinasi/".htmlspecialchars($data['destinasi'])."' width='200px' alt='Gambar Destinasi'>
                                </td>
                                <td>".htmlspecialchars($data['namaDestinasi'])."</td>
                                <td>".htmlspecialchars($data['lokasi'])."</td>
                                <td>".htmlspecialchars($data['deskripsi'])."</td>
                                <td>
                                    <a class='fas fa-edit' href='destinasi-edit.php?id=".htmlspecialchars($data['id'])."' title='Edit'></a> 
                                    <a class='fas fa-trash' href='destinasi-hapus.php?id=".htmlspecialchars($data['id'])."' title='Hapus'></a>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
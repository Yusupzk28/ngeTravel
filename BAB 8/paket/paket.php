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
            <li><a href="../destinasi/destinasi.php" class="links_name">DESTINASI</a></li>
            <li><a href="#" class="links_name">PAKET</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="content">
            <a href="paket-tambah.php">
                <button class="add-button">Tambah</button>
            </a>
            <table>
                <thead>
                    <tr>
                        <th scope="col" style="width: 25%">Nama Paket</th>
                        <th scope="col" style="width: 25%">Destinasi</th>
                        <th scope="col" style="width: 30%">Lokasi</th>
                        <th scope="col" style="width: 13%">Harga</th>
                        <th scope="col" style="width: 7%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT * FROM tb_paketdestinasi";
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
                                <td>".htmlspecialchars($data['namaPaket'])."</td>
                                <td>".htmlspecialchars($data['destinasi'])."</td>
                                <td>".htmlspecialchars($data['lokasi'])."</td>
                                <td>".htmlspecialchars($data['harga'])."</td>
                                <td>
                                    <a class='fas fa-edit' href='paket-edit.php?id=".htmlspecialchars($data['id'])."' title='Edit'></a> 
                                    <a class='fas fa-trash' href='paket-hapus.php?id=".htmlspecialchars($data['id'])."' title='Hapus'></a>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
            <div style="margin-top: 30px;">
                <a href="paket-cetak.php">
                    <button class="add-button">Cetak</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
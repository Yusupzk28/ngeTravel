<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nge-Travel Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="paket.css" rel="stylesheet" />
</head>

<body>
    <div class="sidebar">
        <h2>
            <span style="padding: 0 10px;">Admin</span>
            <div class="icons" style="padding: 0 10px;">
                <i class="fas fa-user-circle" style="margin-right: 5px;"></i>
                <i class="fas fa-sign-out-alt" style="cursor: pointer;"></i>
            </div>
        </h2>
        <ul>
            <li><a href="admin.php" class="links_name">DASHBOARD</a></li>
            <li><a href="destinasi.php" class="links_name">DESTINASI</a></li>
            <li><a href="#" class="links_name">PAKET</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="content">
            <a href="paket-tambah.php">
                <button class="add-button">Tambah</button>
            </a>
            <table>
                <tr>
                    <th>Nama Paket</th>
                    <th>Destinasi</th>
                    <th>Lokasi</th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td>Paket JatimPark</td>
                    <td>Jawa Timur Park 1,2, dan 3</td>
                    <td>Malang</td>
                    <td>Rp. 900.000,-</td>
                </tr>
                <tr>
                    <td>Paket JatimPark+Paralayang</td>
                    <td>Jawa Timur Park 2, 3, dan Paralayang</td>
                    <td>Malang</td>
                    <td>Rp. 550.000,-</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
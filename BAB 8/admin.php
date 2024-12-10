<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nge-Travel Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css"> </head>

<body>
    <?php
    $cookie_name = "username";
    $cookie_value = $_SESSION['username'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    ?>
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
            <li><a href="admin.php" class="links_name">DASHBOARD</a></li>
            <li><a href="destinasi/destinasi.php" class="links_name">DESTINASI</a></li>
            <li><a href="paket/paket.php" class="links_name">PAKET</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1>Selamat Datang, <?= htmlspecialchars($_SESSION['username']) ?></h1>
        <div class="widgets">
            <?php
            include 'koneksi.php';
            $sqlDestinasi = "SELECT COUNT(*) AS totalDestinasi FROM tb_destinasi";
            $resultDestinasi = mysqli_query($koneksi, $sqlDestinasi);
            $dataDestinasi = mysqli_fetch_assoc($resultDestinasi);

            $sqlPaket = "SELECT COUNT(*) AS totalPaket FROM tb_paketdestinasi";
            $resultPaket = mysqli_query($koneksi, $sqlPaket);
            $dataPaket = mysqli_fetch_assoc($resultPaket);
            ?>
            <div class="widget">
                <div class="widget-content">
                    <h3>Destinasi</h3>
                    <p><?= $dataDestinasi['totalDestinasi'] ?></p>
                </div>
            </div>
            <div class="widget">
                <div class="widget-content">
                    <h3>Paket</h3>
                    <p><?= $dataPaket['totalPaket'] ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
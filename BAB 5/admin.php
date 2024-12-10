<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nge-Travel Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="admin.css" rel="stylesheet">
</head>

<body>
    <?php
    $cookie_name = "2318038";
    $cookie_value = getenv("username");
    if (empty($cookie_value)) {
        $cookie_value = "Default User";
    }
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    ?>
    <div class="sidebar">
        <h2>
            <span style="padding: 0 10px;">Admin</span>
            <div class="icons" style="padding: 0 10px;">
                <i class="fas fa-user-circle" style="margin-right: 5px;"></i>
                <i class="fas fa-sign-out-alt" style="cursor: pointer;"></i>
            </div>
        </h2>
        <ul>
            <li><a href="" class="links_name">DASHBOARD</li>
            <li><a href="destinasi.php" class="links_name">DESTINASI</a></li>
            <li><a href="paket.php" class="links_name">PAKET</a></li>
        </ul>
    </div>
    <div class="main-content">
        <?php
            echo "<h1>Selamat Datang " . $cookie_name . "<h1>";     
        ?>
    </div>
</body>

</html>
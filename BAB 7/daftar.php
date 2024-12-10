<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nge-Travel Daftar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/daftar.css">
</head>

<body>
    <div class="container">
        <div class="card_login">
            <div class="form_container">
            <form action="daftar-proses.php" method="post">
                <h2>Daftar</h2>
                <input class="input" type="text" name="username" placeholder="User Name"/>
                <input class="input" type="email" name="email" placeholder="Email"/>
                <input class="input" type="password" name="password" placeholder="Password"/>
                <button type="submit" name="daftar" id="daftar">Daftar</button>
                </form>
                <a href="login.php">Sudah punya akun?</a>
            </div>
        </div>
        <div class="card_img">
            <h2>Nge</h2>
            <img src="logo.png" alt="">
        </div>
    </div>
</body>

</html>
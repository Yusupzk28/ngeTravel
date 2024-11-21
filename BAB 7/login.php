<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nge-Travel Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="card_login">
            <div class="form_container">
                <h2>Login</h2>
                <form action="login-proses.php" method="post">
                    <input type="text" name="username" placeholder="Username" />
                    <input type="password" name="password" placeholder="Password"/>
                    <button type="submit" name="login" id="login">Login</button>
                    <div class="links">
                        <a href="daftar.php">Buat akun?</a>
                        <a href="#">Lupa password?</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="card_img">
            <h2>Nge</h2>
            <img src="logo.png" alt="">
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="css\login.css">
 
    <title>Pesan Les Private Online</title>
</head>
<body>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 28px; font-weight: 800;">Masuk Pengguna</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password">
            </div>

            <div class="input-group">
        <select name="posisi" id="posisi">
            <option value="volvo">Murid</option>
            <option value="saab">Pengajar</option>
        </select>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\project1\resources\views/login.blade.php ENDPATH**/ ?>
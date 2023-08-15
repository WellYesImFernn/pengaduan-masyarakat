<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <h3>Selamat datang kembali!</h3>
        <form class="p-3 mt-3" action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                <div class="bar"></div>
                <label for="username">Password</label>
                <input type="password" class="form-control" name="password" id="pwd" placeholder="Password">
                <div class="bar"></div>
                <input type="checkbox" name="rememberme" id="rememberme">
                <label for="rememberme">Remember Me</label>
                <button type="submit" name="" class="btn mt-3 btn-block btn-grad" style="color:white;font-weight:bold;">Login</button>
                
        </div>
        </form>
        <div class="text-center">
            <a href="#">Lupa kata sandi?</a> atau <a href="#">Daftar</a>
        </div>
      </div>
    </div>

</body>
</html>

         

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login-Page.css">
    <title>Login Page</title>
</head>
<body>
<div class="Login-page">
      <h2>Login Disini</h2>
        <form action="../../backend/login_backend.php" method="post">
          <label for="username" name="username">Username:</label>
          <input type="text" name="username" placeholder="Masukkan Username" required>
          <label for="password" name="password">Password:</label>
          <input type="password" name="password" placeholder="Masukkan Password" required>
          <input type="submit" Name="submit" value="Login" id="btn1">
        </form>
        <p>Belum punya akun? Register disini!<a href="Register-Page.php">Register</a></p>
  
      </div>

     

    <?php
    $error = '';
    if (isset($_GET['error'])){
      $error = $_GET['error'];
    }

    $pesan = '';

    if ($error=='login'){
      $pesan = 'Username dan Password anda salah!';
      }
      else if ($error=='invalid'){
          $pesan = 'Username dan Password harus diisi!';
      }

    if ($pesan!=''){
      echo '<div class="error-message">' . $pesan . '</div>';
    }
    ?>
</body>
</html>
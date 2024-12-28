<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Register-Page.css">
</head>
<body>
    <div class="Register-Page">

    <form action="../../backend/Register-Logic.php" method="POST">
    <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="role">Role:</label>
        <input type="number" id="role" name="role" placeholder="0 untuk user biasa" min="0" max="1"><br>

        <input type="submit" name="submit" value="Register">
    </form>
    <span>Sudah punya akun? <a href="Login-Page.php">Login Disini</a></span>
    </div>
</body>
</html>


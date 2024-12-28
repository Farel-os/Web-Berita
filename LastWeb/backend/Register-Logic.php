<?php

$koneksi = mysqli_connect("localhost", "root", "", "proyekweb");


if (mysqli_connect_error()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = isset($_POST['role']) ? $_POST['role'] : 0;

    if (empty($username) || empty($password)) {
        header('Location: ../public/pages/login_page.php?error=emptyfields');
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO infouser (username, password, role) VALUES ('$username', '$hashedPassword', $role)";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('Location: ../public/asset/Login-Page.php?success=register');
    } else {
        header('Location: ../public/asset/Login-Page.php?error=sqlerror');
    }
    $stmt->close();
}

mysqli_close($koneksi);

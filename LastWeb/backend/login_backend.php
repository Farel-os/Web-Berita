<?php
include("koneksi.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from infouser where username='$username' AND password='$password'";
    $query = mysqli_query($koneksi, $sql);

    $jumlah = mysqli_num_rows(result: $query);
    if ($role > 0) {
        header(header: 'Location: ../view/News-Admin.php');
    } else {
        header(header: 'Location: ../public/asset/Home-Page.php');
    }
} else {
    echo 'Username dan Password harus diisi!!';
}

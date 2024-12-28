<?php
include 'koneksi.php';

$id_berita = $_POST['id_berita'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$gambar = $_POST['gambar'];
$konten = $_POST['konten'];
$kategori = $_POST['kategori'];

mysqli_query($koneksi, "UPDATE berita SET judul='$judul', harga='$harga', tanggal='$tanggal', gambar='$gambar', konten='$$konten', kategori='$kategori' WHERE id_berita='$id_berita'");

header("location:../view/News-Dash.php");

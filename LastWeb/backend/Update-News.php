<?php
include 'koneksi.php';

$id_berita = $_GET['id'];

// Validasi ID berita untuk menghindari SQL Injection
$id_berita = mysqli_real_escape_string($koneksi, $id_berita);

$query = "SELECT * FROM berita WHERE id_berita = '$id_berita'";
$result = mysqli_query($koneksi, $query);

if (!$result || mysqli_num_rows($result) === 0) {
    die("Berita tidak ditemukan");
}

$berita = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $konten = mysqli_real_escape_string($koneksi, $_POST['konten']);

    $gambar = $_FILES['gambar']['name'];
    $gambar_baru = "";

    if (!empty($gambar)) {
        $gambar_baru = "image_" . time() . "_" . basename($gambar);
        $target = "../public/database/image/" . $gambar_baru;

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
            // Query update dengan gambar baru
            $query = "UPDATE berita SET 
                      judul = '$judul', 
                      tanggal = '$tanggal', 
                      gambar = '$gambar_baru', 
                      konten = '$konten', 
                      kategori = '$kategori' 
                      WHERE id_berita = '$id_berita'";
        } else {
            die("Gagal mengunggah gambar");
        }
    } else {
        // Query update tanpa mengganti gambar
        $query = "UPDATE berita SET 
                  judul = '$judul', 
                  tanggal = '$tanggal', 
                  konten = '$konten', 
                  kategori = '$kategori' 
                  WHERE id_berita = '$id_berita'";
    }

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: ../view/News-Dash.php");
        exit();
    } else {
        echo "Gagal Update Berita: " . mysqli_error($koneksi);
    }
}
?>

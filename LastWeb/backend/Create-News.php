<?php 

include '../backend/koneksi.php';

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $tanggal = $_POST['tanggal'];
    $kategori = $_POST['kategori'];

    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $filename = basename($_FILES['gambar']['name']);
        $tempname = $_FILES['gambar']["tmp_name"];
        $folder = "../public/database/image/" . $filename;

        $query = "INSERT INTO berita (judul, tanggal, gambar, konten, kategori) VALUES ('$judul','$tanggal','$filename','$konten', '$kategori')";
        
        if (mysqli_query($koneksi, $query)) {
            
            if (move_uploaded_file($tempname, $folder)) {
                header("Location: ../view/News-Dash.php");
            } else {
                if (!is_dir("../database/image/")) {
                    mkdir("../database/image/", 0777, true);
                }
            }
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "Foto gagal diupload";
    }
}

?>
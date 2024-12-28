<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Berita</title>
    <link rel="stylesheet" href="../css/Update-Page.css">
</head>

<body>
    <div id="sidenav" class="sidenav">
        <a href="News-Admin.php">Create News</a>
        <a href="News-Dash.php">News Dash</a>
    </div>
    <?php
    session_start();
    if($_SESSION['error']){
        echo "<script>alert('".$_SESSION['error']."')</script>";
        unset($_SESSION['error']);
    }
    include '../backend/koneksi.php';
    $id_berita = $_GET['id'];
    $LastWeb = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id_berita'");
    while ($data = mysqli_fetch_array($LastWeb)) {
    ?>
        <div class="main-content">
            <h1>UPDATE BERITA</h1>
            <form method="post" action="../backend/Update-News.php">
                <table>
                    <tr>
                        <td>Nama Berita</td>
                        <td>
                            <input type="hidden" name="id_berita" value="<?php echo $data['id_berita']; ?>">
                            <input type="text" name="judul" value="<?php echo $data['judul']; ?>">
                        </td>
                    <tr>
                        <td>Tanggal</td>
                        <td><input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td><input type="file" name="gambar" value="<?php echo $data['gambar']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Konten</td>
                        <td><input type="text" name="konten" value="<?php echo $data['konten']; ?>">
                        </td>
                    <tr>
                        <td>Kategori</td>
                        <td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>">
                        </td>
                    <tr>
                        <td></td>
                        <td> <input type="submit" value="Update Berita" name="ubah"></td>
                        <input type="hidden" name="id_berita" value="<?php echo $data['id_berita']; ?>">
                    </tr>
                </table>
            </form>
        <?php
    }
        ?>
        </div>
</body>

</html>
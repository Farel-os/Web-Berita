<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Dash</title>
    <link rel="stylesheet" href="../css/News-Dash.css">
</head>

<body>
    <div id="sidenav" class="sidenav">
        <a href="News-Admin.php">Create News</a>
        <a href="News-Dash.php">News Dash</a>
    </div>

    <div <class="tabel">
        <h2>News Dash</h2>
        <table border="1" align="center">
            <tr>
                <th>NO</th>
                <th>JUDUL</th>
                <th>KATEGORI</th>
                <th>KONTEN</th>
                <th>TANGGAL</th>
                <th>GAMBAR</th>
                <th>AKSI</th>
            </tr>
            <?php
            include '../backend/koneksi.php';
            session_start();
            if ($_SESSION['error']) {
                echo "<script>alert('" . $_SESSION['error'] . "')</script>";
                unset($_SESSION['error']);
            }
            $no = 1;
            $LastWeb = mysqli_query($koneksi, "SELECT * FROM berita");
            while ($data = mysqli_fetch_array($LastWeb)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['konten']; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['gambar']; ?></td>

                    <div class="tindakan">
                        <td>
                            <a href="Update-Page.php?id=<?php echo $data['id_berita']; ?>">Update</a>
                            <a href="../backend/Delete-News.php?id=<?php echo $data['id_berita']; ?>">Hapus</a>
                        </td>
                    </div>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>
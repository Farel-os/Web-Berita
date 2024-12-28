<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/News-Admin.css">
    <title>Create News</title>
</head>

<body>
    <div id="sidenav" class="sidenav">
        <a href="News-Admin.php">Create News</a>
        <a href="News-Dash.php">News Dash</a>
    </div>

    <div id="main">
        <h2>Welcome Admin!</h2>

    </div>
    <div class="container">
        <h1>Tambah Berita</h1>
        <form id="form-tambah-berita" method="POST" action="../backend/Create-News.php" enctype="multipart/form-data">
            <input type="text" id="judul" name="judul" placeholder="Judul Berita" required>
            <input type="file" name="gambar">
            <input type="date" name="tanggal">
            <textarea id="konten" name="konten" placeholder="Konten Berita" required></textarea>
            <input type="text" id="judul" name="kategori" placeholder="kategori" required>
            <button type="submit" name="submit">Tambah Berita</button>
        </form>
    </div>


</body>

</html>
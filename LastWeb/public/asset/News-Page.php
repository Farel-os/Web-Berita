<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="../css/News-Page.css">
</head>
<body>
<nav class="Navbar">
            <ul>
                <div class="osis">
                    <img src="../img/osis.png" height="100px" width="70px">
                    <div class="osk">
                        <h3>OSKALASMA</h3>
                    </div>
                </div>
                <li style="margin-left: 15%;"><a href="../asset/Home-Page.php">Home</a></li>
                <li style="margin-left: 5%;"><a href="../asset/News-Page.php">News</a></li>
                <li style="margin-left: 5%;"><a href="../asset/Profile-Page.php">About Us</a></li>
        </nav>

        <?php 
        $koneksi = mysqli_connect("localhost", "root", "", "proyekweb");
        $query = "SELECT * FROM berita ORDER BY id_berita DESC";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            while ($data = mysqli_fetch_assoc($result)) {
                echo '<div class="news-card" style="margin: 12px;">';
                echo '<img src="../database/image/' . htmlspecialchars($data['gambar']) . '" alt="Thumbnail Berita" class="news-thumbnail">';
                echo '<div class="news-content">';
                echo '<h3 class="news-title">' . htmlspecialchars($data['judul']) .'</h3>';
                echo '<p class="news-description">' . htmlspecialchars($data['konten']) . '</p>';
                echo '<div class="news-meta">';
                echo '<span class="news-tag">'. htmlspecialchars($data['kategori']) .'</span>';
                echo '<span class="news-date">' . htmlspecialchars($data['tanggal']) . '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        
        ?>


</body>
</html>
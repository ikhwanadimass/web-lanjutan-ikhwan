<!DOCTYPE html>
<html>
<head>
    <title>Portal Berita - Edit Berita</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            margin: 0;
            background-color: #f4f6f9;
        }
        .navbar {
            background-color: #ffffff;
            padding: 14px 40px;
            display: border-box;
            display: flex;
            align-items: center;
            gap: 25px;
            border-bottom: 1px solid #e0e0e0;
        }
        .navbar .brand {
            font-size: 18px;
            font-weight: bold;
            color: #333333;
            text-decoration: none;
        }
        .navbar a {
            text-decoration: none;
            color: #666666;
            font-size: 14px;
        }
        .navbar a:hover {
            color: #007bff;
        }
        .container {
            max-width: 750px;
            margin: 30px auto;
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        h2 {
            margin-top: 0;
            margin-bottom: 25px;
            color: #333333;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            color: #444444;
        }
        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group textarea {
            width: 100%;
            padding: 9px 12px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
        }
        .form-group input[type="text"]:focus,
        .form-group input[type="date"]:focus,
        .form-group textarea:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 2px rgba(0,123,255,0.25);
        }
        .preview-img {
            display: block;
            margin-bottom: 8px;
            max-width: 140px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .btn-submit {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 9px 24px;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .btn-kembali {
            display: inline-block;
            margin-left: 10px;
            text-decoration: none;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Navigasi -->
    <div class="navbar">
        <a href="index.php" class="brand">Portal Berita</a>
        <a href="index.php">Home</a>
        <a href="tambah.php">Input Berita</a>
    </div>

    <!-- Form Edit Berita -->
    <div class="container">
        <h2>Edit Berita</h2>

        <?php 
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from berita where id='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <input type="hidden" name="gambar_lama" value="<?php echo $d['gambar']; ?>">

            <div class="form-group">
                <label>Judul Berita:</label>
                <input type="text" name="judul" value="<?php echo htmlspecialchars($d['judul']); ?>" required>
            </div>

            <div class="form-group">
                <label>Gambar / Thumbnail Saat Ini:</label>
                <?php if(!empty($d['gambar']) && file_exists('gambar/' . $d['gambar'])) { ?>
                    <img src="gambar/<?php echo $d['gambar']; ?>" class="preview-img" alt="Preview Gambar">
                <?php } else { ?>
                    <p style="font-size: 13px; color: #888;">Belum ada gambar</p>
                <?php } ?>
                <label style="font-size: 12px; color: #777;">Ganti Gambar (opsional):</label>
                <input type="file" name="gambar" accept="image/*">
            </div>

            <div class="form-group">
                <label>Isi Berita:</label>
                <textarea name="isi" rows="6" required><?php echo htmlspecialchars($d['isi']); ?></textarea>
            </div>

            <div class="form-group">
                <label>Penulis:</label>
                <input type="text" name="penulis" value="<?php echo htmlspecialchars($d['penulis']); ?>" required>
            </div>

            <div class="form-group">
                <label>Tanggal:</label>
                <input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>" required>
            </div>

            <div class="form-group">
                <input type="submit" value="SIMPAN" class="btn-submit">
                <a href="index.php" class="btn-kembali">KEMBALI</a>
            </div>
        </form>
        <?php 
        }
        ?>
    </div>

</body>
</html>

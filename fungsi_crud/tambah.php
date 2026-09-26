<!DOCTYPE html>
<html>
<head>
    <title>Portal Berita - Input Berita</title>
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
        .navbar a:hover, .navbar a.active {
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
        .form-group input[type="file"] {
            font-size: 14px;
        }
        .btn-submit {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 9px 24px;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- Navigasi -->
    <div class="navbar">
        <a href="index.php" class="brand">Portal Berita</a>
        <a href="index.php">Home</a>
        <a href="tambah.php" class="active">Input Berita</a>
    </div>

    <!-- Form Input Berita -->
    <div class="container">
        <h2>Input Berita</h2>
        <form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul Berita:</label>
                <input type="text" name="judul" required>
            </div>

            <div class="form-group">
                <label>Gambar:</label>
                <input type="file" name="gambar" accept="image/*">
            </div>

            <div class="form-group">
                <label>Isi Berita:</label>
                <textarea name="isi" rows="6" required></textarea>
            </div>

            <div class="form-group">
                <label>Penulis:</label>
                <input type="text" name="penulis" required>
            </div>

            <div class="form-group">
                <label>Tanggal:</label>
                <input type="date" name="tanggal" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" class="btn-submit">
            </div>
        </form>
    </div>

</body>
</html>

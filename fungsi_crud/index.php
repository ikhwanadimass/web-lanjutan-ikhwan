<!DOCTYPE html>
<html>
<head>
    <title>Portal Berita</title>
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
            max-width: 1050px;
            margin: 30px auto;
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        h2 {
            margin-top: 0;
            color: #333333;
        }
        .btn-tambah {
            display: inline-block;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .btn-tambah:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #dee2e6;
        }
        th {
            background-color: #f8f9fa;
            color: #333;
            padding: 10px;
            font-size: 14px;
            text-align: center;
        }
        td {
            padding: 10px;
            font-size: 14px;
            color: #444;
            vertical-align: middle;
        }
        .thumbnail {
            width: 90px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            border: 1px solid #ddd;
            display: block;
            margin: 0 auto;
        }
        .no-img {
            display: block;
            text-align: center;
            color: #999;
            font-size: 12px;
            font-style: italic;
        }
        .action-link {
            text-decoration: none;
            padding: 4px 8px;
            font-size: 13px;
            font-weight: bold;
        }
        .btn-edit {
            color: #007bff;
        }
        .btn-hapus {
            color: #dc3545;
        }
        .btn-edit:hover, .btn-hapus:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navigasi -->
    <div class="navbar">
        <a href="index.php" class="brand">Portal Berita</a>
        <a href="index.php" class="active">Home</a>
        <a href="tambah.php">Input Berita</a>
    </div>

    <!-- Konten Utama -->
    <div class="container">
        <h2>PORTAL BERITA</h2>
        
        <a href="tambah.php" class="btn-tambah">+ TAMBAH BERITA</a>

        <table>
            <tr>
                <th width="5%">NO</th>
                <th width="15%">THUMBNAIL</th>
                <th width="20%">JUDUL BERITA</th>
                <th width="30%">ISI BERITA</th>
                <th width="12%">PENULIS</th>
                <th width="10%">TANGGAL</th>
                <th width="13%">OPSI</th>
            </tr>
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from berita order by id desc");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td align="center"><?php echo $no++; ?></td>
                <td align="center">
                    <?php if(!empty($d['gambar']) && file_exists('gambar/' . $d['gambar'])) { ?>
                        <img src="gambar/<?php echo $d['gambar']; ?>" class="thumbnail" alt="thumbnail">
                    <?php } else { ?>
                        <span class="no-img">Tidak ada gambar</span>
                    <?php } ?>
                </td>
                <td><strong><?php echo htmlspecialchars($d['judul']); ?></strong></td>
                <td>
                    <?php 
                        $ringkasan = strip_tags($d['isi']);
                        echo htmlspecialchars(strlen($ringkasan) > 120 ? substr($ringkasan, 0, 120) . '...' : $ringkasan); 
                    ?>
                </td>
                <td><?php echo htmlspecialchars($d['penulis']); ?></td>
                <td align="center"><?php echo $d['tanggal']; ?></td>
                <td align="center">
                    <a href="edit.php?id=<?php echo $d['id']; ?>" class="action-link btn-edit">EDIT</a>
                    |
                    <a href="hapus.php?id=<?php echo $d['id']; ?>" class="action-link btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">HAPUS</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>

</body>
</html>

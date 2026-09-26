<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];
$tanggal = $_POST['tanggal'];

// upload file gambar jika ada
$gambar = $_FILES['gambar']['name'];
if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'gif', 'webp');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak = rand(1, 9999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar;

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
        $gambar = $nama_gambar_baru;
    } else {
        $gambar = "";
    }
}

// menginput data ke database
mysqli_query($koneksi, "insert into berita (judul, gambar, isi, penulis, tanggal) values('$judul', '$gambar', '$isi', '$penulis', '$tanggal')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>

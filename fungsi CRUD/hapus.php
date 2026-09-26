<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus file gambar dari folder jika ada
$data = mysqli_query($koneksi, "select gambar from berita where id='$id'");
$d = mysqli_fetch_array($data);
if (!empty($d['gambar']) && file_exists('gambar/' . $d['gambar'])) {
    unlink('gambar/' . $d['gambar']);
}

// menghapus data dari database
mysqli_query($koneksi, "delete from berita where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>

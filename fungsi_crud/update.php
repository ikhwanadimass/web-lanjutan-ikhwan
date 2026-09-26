<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];
$tanggal = $_POST['tanggal'];
$gambar_lama = $_POST['gambar_lama'];

// proses jika ada gambar baru yang diunggah
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
        $gambar_update = $nama_gambar_baru;

        // hapus gambar lama dari folder
        if (!empty($gambar_lama) && file_exists('gambar/' . $gambar_lama)) {
            unlink('gambar/' . $gambar_lama);
        }
    } else {
        $gambar_update = $gambar_lama;
    }
} else {
    $gambar_update = $gambar_lama;
}

// update data ke database
mysqli_query($koneksi, "update berita set judul='$judul', gambar='$gambar_update', isi='$isi', penulis='$penulis', tanggal='$tanggal' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>

<?php

require 'koneksi.php';

$table_name = 'mahasiswa';

// 1 & 2. Membuat tabel mahasiswa dengan field yang ditentukan
$sql = "CREATE TABLE IF NOT EXISTS `$table_name` (
    `NIM` int(5) NOT NULL,
    `Nama` varchar(20) NOT NULL,
    `Tugas` int(5) NOT NULL,
    `UTS` int(5) NOT NULL,
    `UAS` int(5) NOT NULL,
    PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die('ERROR: Tabel ' . $table_name . ' gagal dibuat: ' . mysqli_error($conn));
}
echo 'Tabel ' . $table_name . ' berhasil dibuat <br/>';

// 3. Mengisi data ke tabel mahasiswa sebanyak 5 record
$sql = "INSERT INTO `$table_name` (`NIM`, `Nama`, `Tugas`, `UTS`, `UAS`)
        VALUES 
        (10001, 'Budi Santoso', 80, 75, 85),
        (10002, 'Siti Aminah', 90, 85, 88),
        (10003, 'Ahmad Fauzi', 70, 65, 75),
        (10004, 'Dewi Lestari', 85, 90, 92),
        (10005, 'Rian Pratama', 60, 70, 65)";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die('ERROR: Data gagal dimasukkan pada tabel ' . $table_name . ': ' . mysqli_error($conn));
}
echo 'Data berhasil dimasukkan pada tabel ' . $table_name . '<br/>';

mysqli_close($conn);


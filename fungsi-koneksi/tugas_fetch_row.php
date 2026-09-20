<?php

require 'koneksi.php';

// 4. Query menampilkan data mahasiswa dengan temporary field Nilai_Akhir
$sql = 'SELECT NIM, Nama, Tugas, UTS, UAS, (Tugas + UTS + UAS) / 3 AS Nilai_Akhir
        FROM mahasiswa';

$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}

echo '<html>
        <head>
            <title>Menampilkan Data Mahasiswa Dengan mysqli_fetch_row</title>
            <style>
                body {font-family:tahoma, arial}
                table {border-collapse: collapse; min-width: 600px;}
                th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 6px 10px; color: #303030}
                th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
                .center {text-align: center}
                .right {text-align: right}
            </style>
        </head>
        <body>
        <h3>Daftar Nilai Mahasiswa (mysqli_fetch_row)</h3>
        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>TUGAS</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>NILAI AKHIR</th>
                </tr>
            </thead>
            <tbody>';

// Menggunakan mysqli_fetch_row() dengan memanggil nama field berdasarkan index numerik
while ($row = mysqli_fetch_row($query)) {
    echo '<tr>
            <td class="center">' . $row[0] . '</td>
            <td>' . $row[1] . '</td>
            <td class="center">' . $row[2] . '</td>
            <td class="center">' . $row[3] . '</td>
            <td class="center">' . $row[4] . '</td>
            <td class="right">' . number_format($row[5], 2, ',', '.') . '</td>
        </tr>';
}

echo '
    </tbody>
</table>
</body>
</html>';

mysqli_free_result($query);
mysqli_close($conn);


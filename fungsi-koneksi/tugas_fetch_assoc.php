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
            <title>Menampilkan Data Mahasiswa Dengan mysqli_fetch_assoc</title>
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
        <h3>Daftar Nilai Mahasiswa (mysqli_fetch_assoc)</h3>
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

// Menggunakan mysqli_fetch_assoc() untuk mengambil baris sebagai array asosiatif
while ($row = mysqli_fetch_assoc($query)) {
    echo '<tr>
            <td class="center">' . $row['NIM'] . '</td>
            <td>' . $row['Nama'] . '</td>
            <td class="center">' . $row['Tugas'] . '</td>
            <td class="center">' . $row['UTS'] . '</td>
            <td class="center">' . $row['UAS'] . '</td>
            <td class="right">' . number_format($row['Nilai_Akhir'], 2, ',', '.') . '</td>
        </tr>';
}

echo '
    </tbody>
</table>
</body>
</html>';

mysqli_free_result($query);
mysqli_close($conn);


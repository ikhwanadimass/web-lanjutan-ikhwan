<?php


require 'koneksi.php';

$sql = 'SELECT id_produk, tgl_transaksi, harga, kuantitas, harga*kuantitas AS total_byr
        FROM sales';

$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}

echo '<html>
        <head>
            <title>Temporary Field - total_byr</title>
            <style>
                body {font-family:tahoma, arial}
                table {border-collapse: collapse}
                th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
                th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
                .right{text-align: right}
            </style>
        </head>
        <body>
        <table>
            <thead>
                <tr>
                    <th>ID PRODUK</th>
                    <th>TGL TRANSAKSI</th>
                    <th>KUANTITAS</th>
                    <th>HARGA</th>
                    <th>TOTAL BAYAR</th>
                </tr>
            </thead>
            <tbody>';

while ($row = mysqli_fetch_array($query)) {
    echo '<tr>
            <td>' . $row['id_produk'] . '</td>
            <td>' . $row['tgl_transaksi'] . '</td>
            <td>' . $row['kuantitas'] . '</td>
            <td>' . $row['harga'] . '</td>
            <td class="right">' . number_format($row['total_byr'], 0, ',', '.') . '</td>
        </tr>';
}

echo '
    </tbody>
</table>
</body>
</html>';

mysqli_free_result($query);
mysqli_close($conn);
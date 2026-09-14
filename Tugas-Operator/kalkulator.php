<!DOCTYPE html>
<html>
<body>
<form method="post" action="">
    Angka Pertama : <input type="text" name="angka1" required><br>
    Operator      : <select name="operator">
                       <option value="+">Penjumlahan</option>
                       <option value="-">Pengurangan</option>
                       <option value="*">Perkalian</option>
                       <option value="/">Pembagian</option>
                       <option value="%">Sisa Bagi</option>
                       <option value="**">Pangkat</option>
                     </select><br>
    Angka Kedua   : <input type="text" name="angka2" required><br>
    <input type="submit" name="hitung" value="Hitung">
</form>
<?php
if (isset($_POST['hitung'])) {
    if (!is_numeric($_POST['angka1']) || !is_numeric($_POST['angka2'])) {
        echo "Input harus berupa angka!";
    } else {
        $angka1   = $_POST['angka1'] + 0; 
        $angka2   = $_POST['angka2'] + 0;
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+': $hasil = $angka1 + $angka2; break;
            case '-': $hasil = $angka1 - $angka2; break;
            case '*': $hasil = $angka1 * $angka2; break;
            case '/':
                if ($angka2 == 0) { die('Tidak bisa membagi dengan nol!'); }
                $hasil = $angka1 / $angka2; break;
            case '%':
                if ($angka2 == 0) { die('Tidak bisa membagi dengan nol!'); }
                $hasil = $angka1 % $angka2; break;
            case '**': $hasil = $angka1 ** $angka2; break;
        }
        echo "Hasil : $angka1 $operator $angka2 = $hasil";
    }
}
?>
</body>
</html>
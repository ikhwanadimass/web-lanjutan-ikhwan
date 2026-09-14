<html>
<body>
    <h1> Operator aritmetika</h1>
    <p>
<?php
$a = 5;
$b = 2;

// penjumlahan: menjumlahkan $a dan $b -> hasil 7
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

// pengurangan: $a dikurangi $b -> hasil 3
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

// perkalian: $a dikali $b -> hasil 10
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

// pembagian: $a dibagi $b -> hasil 2.5 (desimal)
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

// sisa bagi (modulus): sisa dari 5 dibagi 2 -> hasil 1
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

// pangkat: $a dipangkatkan $b (5^2) -> hasil 25
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";
?>
    </p>
</body>
</html>
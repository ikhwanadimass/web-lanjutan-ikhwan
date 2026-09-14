<html>
<body>
    <h1> Operator BITWISE</h1>
<p>
<?php
$a = 60; // biner: 0111100
$b = 13; // biner: 0001101
// bitwise AND: bit yang sama-sama 1 -> hasil 12
$c = $a & $b;
echo "$a & $b = $c";
echo "<br>";
// bitwise OR: gabungan semua bit yang bernilai 1 -> hasil 61
$c = $a | $b;
echo "$a | $b = $c";
echo "<br>";
// bitwise XOR: bit yang berbeda saja yang jadi 1 -> hasil 49
$c = $a ^ $b;
echo "$a ^ $b = $c";
echo "<br>";
// shift left: geser bit $a ke kiri sebanyak $b posisi
$c = $a << $b;
echo "$a << $b = $c";
echo "<br>";
// shift right: geser bit $a ke kanan sebanyak $b posisi
$c = $a >> $b;
echo "$a >> $b = $c";
echo "<br>";
?>
</p>
</body>
</html>
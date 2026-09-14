<html>
<body>
    <h1> Operator logika</h1>
<p>
<?php
$b = 4!=4;      // 4 tidak sama dengan 4 -> false
$c = 3+7 == 10; // 3+7 sama dengan 10 -> true

$a = ($b and $c);   // false AND true -> false (tampil kosong)
Echo "\$a=$a <br>";

$a = ($b or $c);    // false OR true -> true (tampil 1)
Echo "\$a=$a <br>";

$a = ($b xor $c);   // false XOR true (beda nilai) -> true
Echo "\$a=$a <br>";

$a = (!$b or $c);   // !false = true, true OR true -> true
Echo "\$a=$a <br>";

$a = $b && $c;      // sama seperti and, prioritas beda -> false
Echo "\$a=$a <br>";

$a = $b || $c;      // sama seperti or, prioritas beda -> true
Echo "\$a=$a <br>";
?>
</p>
</body>
</html>
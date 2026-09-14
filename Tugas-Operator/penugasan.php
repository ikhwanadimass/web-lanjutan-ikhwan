<html>
<body>
    <h1> Operator Penugasan</h1>
<p>
<?php
    $a = 3;
    $b = 7;

    // $a += 6 sama dengan $a = $a + 6, jadi $a jadi 3+6 = 9
    $a += 6;

    // ($c = 9) dulu yang dieksekusi: $c diisi 9,
    // lalu hasilnya (9) ditambah 3, jadi $b = 12, dan $c tetap 9
    $b = ($c = 9) + 3;

    echo "Var a = $a"."<br>";   // 9
    echo "Var b = $b"."<br>";   // 12
    echo "Var c = $c"."<br><br>"; // 9
?>
</p>
</body>
</html>
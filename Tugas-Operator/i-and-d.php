<html>
<body>
    <h1> Operator Increment & Decrement</h1>
<p>
<?php
 echo '<h4><u>Post-increment</u></h4>';
    $a = 5;
    echo '$a = '.$a.'<br />';
    // $a++ : nilai LAMA (5) dipakai dulu, baru $a jadi 6 setelahnya
    echo '$a akan bernilai 5 = '.$a++.' (operasi $a++)<br />';
    echo '$a akan bernilai 6 = '.$a.'<br />';
    echo '<h4><u>Pre-increment</u></h4>';
    $a = 5;
    echo '$a = '.$a.'<br />';
    // ++$a : $a langsung jadi 6 dulu, baru nilai itu dipakai
    echo '$a akan bernilai 6 = '.++$a.' (operasi ++$a)<br />';
    echo '$a akan bernilai 6 = '.$a.'<br />';
    echo "<h4><u>Post-decrement</u></h4>";
    $a = 5;
    echo '$a = '.$a.'<br />';
    // $a-- : nilai lama (5) dipakai dulu, baru $a jadi 4
    echo '$a akan bernilai 5 = '.$a--.' (operasi $a--)<br />';
    echo '$a akan bernilai 4 = '.$a.'<br />';
    echo "<h4><u>Pre-decrement</u></h4>";
    $a = 5;
    echo '$a = '.$a.'<br />';
    // --$a : $a langsung dikurangi jadi 4 dulu, baru dipakai
    echo '$a akan bernilai 4 = '.--$a.' (operasi --$a)<br />';
    echo '$a akan bernilai 4 = '.$a.'<br />';
?>
</p>
</body>
</html>
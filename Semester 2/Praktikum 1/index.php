<?php

    $title = 'PRAKTIKUM 1 PHP' ;
    $nama = 'Rano';
    $umur = 19 ;
    $hobi = 'game' ;

    #echo 'welcome';
    //echo 'WELCOME ' . $nama . ' dengan umur ' . $umur;

    define('phi', 3.14 );
    $jari = 8;

    $keliling = 2 * phi * $jari;
    $luas = phi * $jari * $jari;

    //echo $keliling;
    //echo '<br>' . $luas;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>  <?php echo $title  ?></h1>

    <p>Luas lingkaran : <?php echo $luas ?></p>
    <p>keliling lingkaran : <?php echo $keliling ?> </p>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("π",3.14);
    $r = 6;
    $h= 9;

    $V = π*$r*$r*$h/3;

    $r=number_format($r, 2, ',', '.');
    $h=number_format($h, 2, ',', '.');
    $V=number_format($V, 2, ',', '.');
    print "Objętość stożka z r = $r i h = $h to $V"
    

    ?>
</body>
</html>
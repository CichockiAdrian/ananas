<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("EUR",4.65);
    $pln = 100;
    $eu = 20;
    $e_p =$eu*EUR;
    $p_e = $pln/EUR;
    $pln=number_format($pln, 2, ',', '.');
    $eu=number_format($eu, 2, ',', '.');
    $e_p=number_format($e_p, 2, ',', '.');
    $p_e=number_format($p_e, 2, ',', '.');



    print"$eu EUR to $e_p PLN<br>$pln PLN to $p_e EUR"
    ?>
</body>
</html>
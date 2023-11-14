<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 9.10;
    $b = 90.3;
   


    if($a>$b){
        $a = number_format($a,2,",",".");
        $b = number_format($b,2,",",".");
        print "Liczba a = $a b = $b<br>";
        print "liczba a($a) jest wieksza";
    }
    else if($a<$b){
        $a = number_format($a,2,",",".");
        $b = number_format($b,2,",",".");
        print "Liczba a = $a b = $b<br>";
        print "liczba b($b) jest wieksza";
    }else{
        $a = number_format($a,2,",",".");
        $b = number_format($b,2,",",".");
        print "Liczba a = $a b = $b<br>";
        print "liczby sa równe";
    }
    
    ?>
</body>
</html>
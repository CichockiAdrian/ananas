<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 1;
    $b = 4;
    $c = 4;

    $delta = $b*$b-4*$a*$c;
   
    if($delta>0){
        $x1 = (-1*$b)-sqrt($delta)/(2*$a);
        $x2 = (-1*$b)+sqrt($delta)/(2*$a);
        $x1 = number_format($x1,2,",",".");
        $x2 = number_format($x2,2,",",".");
        $a = number_format($a,2,",",".");
        $b = number_format($b,2,",",".");
        $c = number_format($c,2,",",".");
        $delta = number_format($delta,2,",",".");
        print "Współczynnik a = $a    b = $b    c = $c<br> delta = $delta";
        echo "<br>Dwa rozwiązania: x1 = ".$x1."   x2 = ".$x2;
    }
    elseif($delta==0){
        $x1 = (-1*$b)/(2*$a);
        $x1 = number_format($x1,2,",",".");
        $a = number_format($a,2,",",".");
        $b = number_format($b,2,",",".");
        $c = number_format($c,2,",",".");
        $delta = number_format($delta,2,",",".");
        print "Współczynnik a = $a    b = $b    c = $c<br> delta = $delta";
        echo "<br>Jedno rozwiązanie: x = ".$x1;
    }else{
        $a = number_format($a,2,",",".");
        $b = number_format($b,2,",",".");
        $c = number_format($c,2,",",".");
        $delta = number_format($delta,2,",",".");
        print "Współczynnik a = $a    b = $b    c = $c<br> delta = $delta";
        print "<br>Brak rozwiązań";
    }

    ?>
</body>
</html>
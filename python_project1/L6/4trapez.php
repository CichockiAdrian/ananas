<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function pole($a,$b,$h){
            $poletrapezu = (($a+$b)*$h)/2;
            $poletrapezu = number_format($poletrapezu,2,',','.');
            echo("<br>a=".$a.", b=".$b.", h=".$h."<br> P=".$poletrapezu."<br>");
        };  
        
        pole(1,2,3);
        pole(15,12,3);

        function pole2($a,$b,$h,$jednostka="cm^2"){
            $poletrapezu = (($a+$b)*$h)/2;
            $poletrapezu = number_format($poletrapezu,2,',','.');
            echo("<br>a=".$a.", b=".$b.", h=".$h."<br> P=".$poletrapezu." ".$jednostka."<br>");
        };  
        
        pole2(1,2,3);
        pole2(15,12,3,"m^2");
    ?>
</body>
</html>
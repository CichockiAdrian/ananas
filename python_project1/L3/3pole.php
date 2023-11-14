<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$side1 = 5;
$side2 = 2.5;
$field =$side1*$side2;
$res =2*$side1+2*$side2;
$field = number_format($field, 2, ',', '.');
$res = number_format($res, 2, ',', '.');
$side1 =number_format($side1, 2, ',', '.');
$side2 =number_format($side2, 2, ',', '.');

print "Prostokąt <b>$side1</b> x <b>$side2</b> ma pole = <b>$field</b> i obwód = <b>$res</b>"
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,th, td{
            border:1px solid black;
            border-collapse: collapse;
           
        }
        th{
            width: 5%;
            
        }
        
        </style>
</head>
<body>
<?php
    print "<table><tr><th>*</th>";
    $i = 1;
    while($i<=10){
        echo "<th>$i</th>";
        $i++;
    }
    print"<tr>";
    $j=1;
    $b=1;
    while($j<=10){
        echo "<tr>";
        echo "<th>$j</th>";
        while($b<=10){
            echo "<td>";
            $p = $j*$b;
            echo "$p";
            echo "</td>";
            $b++;
        }
        $b=1;
        echo "</tr>";
        $j++;
    }

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $c=0;
    $r=12;
    for($i=1;$i<=13;$i++){
        while($c<13-$r){
            echo"*";
            $c++;
        }
        echo"<br>";
        $c=0;
        $r--;
    }
    ?>
</body>
</html>
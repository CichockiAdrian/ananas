<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<b>A:</b><br>";
        function add($a,$b){
            echo "<br>$a + $b =".$a+$b;
        }

        add(5, 7);
        add(10, 12);
        add(8, 22);

        echo "<b><br>B:</b><br>";
        function add_r($a,$b){
            return "<br>$a + $b =".$a+$b;
        }
        echo add_r(5, 7);
        echo add_r(10, 12);
        echo add_r(8, 22);
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $t=["Matematyka","Język hiszpański","Informatyka","Bazy danych", "Geografia"];
        
        echo "<b>Print_r: </b>";
        print_r($t);

        

        echo "<br><br><b>For: </b>";
        for($i=0;$i<sizeof($t);$i++){
            print $t[$i].", ";
        }

        echo "<br><br><b>For each: </b>";
        foreach ($t as $t) {
            print $t.", ";
        }

        

    ?>
    
</body>
</html>
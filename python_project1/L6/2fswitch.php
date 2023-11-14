<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $g = "5";
        function grade($a){
            switch($a){
                case "1":
                    echo "sporo pracy przed tobą";
                    break;
                case "-2":
                    echo "sporo pracy przed tobą";
                    break;
                case "-3":
                    echo "jeszcze troche a bedzie ok";
                    break;
                default:
                    echo "okej";
                    break;
                }
            
                
        }
        echo "twoja ocena: $g "; 
        grade($g);
    
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $col="zielony";

        switch($col){
            case "czerwony":
                echo "Twoim ulubionym kolorem jest czerwony!";
                break;
            
            case "zielony":
                echo "Twoim ulubionym kolorem jest zielony!";
                break;
            
            case "niebieski":
                echo "Twoim ulubionym kolorem jest niebieski!";
                break;
            default:
                echo "Twoim ulubionym kolorem nie jest ani czerwony, ani niebieski, ani zielony!";
                break;
        }


    ?>
</body>
</html>
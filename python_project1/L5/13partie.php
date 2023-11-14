<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $politics =array(
            "Pis"=>"15%",
            "PO"=>"15%",
            "Konfederacja"=>"40%",
            "PSL"=>"20%",
            "Bezpartyjni Samorządowcy"=>"7%",
            "Nowa Lewica"=>"3%"
        );

        print "<br><b>for each:</b>";
        foreach($politics as $agree=>$percent){
            echo $agree.": ".$percent."<br>";
        }
        print "<br><b>print_r z pre:</b>";
        echo "<pre>";
        print_r($politics);
        echo "</pre>";
        
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $avg =array(
        "Matematyka"=>"4,32",
        "Informatyka"=>"3,76",
        "Bazy danych"=>"4,12",
        "Geografia"=>"5,00",
        "Język hiszpański"=>"5,80"
    );

    print "<br><b>for each:</b>";
    foreach($avg as $lesson=>$grade){
        echo $lesson.": ".$grade."<br>";
    }
    print "<br><b>print_r z pre:</b>";
    echo "<pre>";
    print_r($avg);
    echo "</pre>";
    
    ?>
</body>
</html>
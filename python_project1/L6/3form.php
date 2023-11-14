<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>funkcja formatująca tekst</h3>
    <?php
    function formatowanie($text){
        echo('<p style="color:blue; font-size:small; font-family: Verdana;">'.$text);
    };
    $tekst = "To jest przykładowy tekst";
    formatowanie($tekst);

    function formatowanie2($tekst,$kolor,$size,$font){
        echo('<p style="color:'.$kolor.'; font-size:'.$size.'; font-family:'.$font.';">'.$tekst);
    };
    $color = "red";
    $textsize = "larger";
    $font = 'cursive';
    formatowanie2($tekst,$color,$textsize,$font);

    $color = "blue";
    $textsize = "smaller";
    $font = 'serif';
    formatowanie2($tekst,$color,$textsize,$font);
    
    $color = "green";
    $textsize = "medium";
    $font = 'system-ui';
    formatowanie2($tekst,$color,$textsize,$font);
    
    $color = "pink";
    $textsize = "large";
    $font = 'Georgia';
    formatowanie2($tekst,$color,$textsize,$font);
    
    ?>
</body>
</html>
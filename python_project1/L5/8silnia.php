<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = 5;
    $n_ = 1;
    for($i=1;$i<=$n;$i++)
    {
        $n_ *= $i;
    }
    print "Silnia od $n to $n_";
    ?>
</body>
</html>
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
        
        </style>
</head>
<body>
<?php
    $meal1 = "placek po węgiersku";
    $meal2 = "pierogi zbójnickie ";
    $price1 = 15.90;
    $price2 = 12.90;
    $number1 = 2;
    $number2 = 1;
    $sum=($number1*$price1)+($number2*$price2);
    $price1 = number_format($price1, 2, ',', '.');
    $price2 = number_format($price2, 2, ',', '.');
    $sum = number_format($sum, 2, ',', '.');
   
        print"
        <h1>Twoje zamówienie</h1>
        <table>
        <tr>
          <th>Nazwa</th>
          <th>Liczba</th>
          <th>Cena</th>
        </tr>
        <tr>
        <td>$meal1</td>
        <td>$number1</td>
        <td>$price1</td>
        </tr>
        <tr>
          <td>$meal2</td>
          <td>$number2</td>
          <td>$price2</td>
        </tr>
        <tr>
          <td><b>Do zapłaty</b></td>
          <td>-</td>
          <td>$sum</td>
        </tr>
      </table>
      <h1>Dziękujemy</h1>"
?>
</body>
</html>
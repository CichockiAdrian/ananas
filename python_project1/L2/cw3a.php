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
           width:33%;
           padding:3px;
           
        }
        table{
           width: 50%;
        }
    </style>
</head>
<body>
    <?php
        print "<table>
        <tr>
          <td></td>
          <th>Kolumna 1</th>
          <th>Kolumna 2</th>
        </tr>
        <tr>
          <td><b>Wiersz 1</b></td>
          <td>Kom 11</td>
          <td>Kom 12</td>
        </tr>
        <tr>
          <td><b>Wiersz 2</b></td>
          <td>Kom 21</td>
          <td>Kom 22</td>
        </tr>
      </table>"
?>
</body>
</html>
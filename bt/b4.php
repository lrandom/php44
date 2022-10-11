<?php
function _table($row, $col)
{
    echo '<table border="1"><tbody>';
    for ($i = 1; $i <= $row; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $col; $j++) {
            echo '<td>' . $j . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php
    _table(10,20);
    _table(20,30);

   ?>
</body>
</html>
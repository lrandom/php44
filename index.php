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
$weather = "Trời mưa";
if ($weather == "Trời nắng") {
    echo "Đi đá bóng";
} else {
    echo "Trong nhà ngủ";
}

if ($weather == "Trời nắng") {
    echo "Đi đá bóng";
} else if ($weather == "Trời mưa") {
    echo "Ra ngoài tắm mưa";
} else if ($weather == "Trời râm mát") {
    echo "Đi đá bóng";
} else {
    echo "Chả biết làm gì, chán đời";
}

switch ($weather) {
    case 'Trời nắng':
        echo "Đi đá bóng";
        break;

    case 'Trời mưa':
        echo "Ra ngoài tắm mưa";
        break;

    case 'Trời râm mát':
        echo "Đi đá bóng";
        break;

    default:
        echo "Chả biết làm gì";
}
?>
</body>
</html>
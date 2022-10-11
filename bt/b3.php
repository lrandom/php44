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
 function _image($link, $width, $height){
     echo "<img src='$link' width='$width' height='$height'/>";
 }
 ?>

 <?php
 _image("https://d1hjkbq40fs2x4.cloudfront.net/2016-01-31/files/1045.jpg",500,200);
 _image("https://d1hjkbq40fs2x4.cloudfront.net/2016-01-31/files/1045.jpg",300,100);
 ?>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    $_SESSION['return_url'] = 'checkout.php';
    header('Location: login.php');
    exit();
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $cart = $_SESSION['cart'];
    $receiveData = [
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'note' => $note,
        'cart' => $cart
    ];
    require_once './dals/OrderDal.php';
    $orderDal = new OrderDal();
    $orderDal->insert($receiveData, $cart);
    unset($_SESSION['cart']);
    header('Location: index.php');
    exit();
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
<form method="post">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <input type="text" name="address" placeholder="Address"><br>
    <textarea name="note" placeholder="Note">

       </textarea><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
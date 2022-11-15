<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password =  md5(md5($_POST['password']));
    require_once 'dals/UserDal.php';
    $userDal = new UserDal();
    $user = $userDal->getObjectByEmailAndPassword($email, $password);
    if ($user != null) {
        $_SESSION['user'] = $user;
        header("Location: profile.php");
    } else {
        header("Location: login.php?error=1");
    }
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
    <?php if (isset($_GET['error'])) {
        echo 'Vui long kiem tra lai thong tin dang nhap';
    } ?>
    <label for="">
        <input placeholder="Email" name="email">
    </label>
    <label for="">
        <input type="password" name="password">
    </label>
    <button>Login</button>
</form>
</body>
</html>
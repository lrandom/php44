<?php
session_start();
if (isset($_POST['username'])) {
    $username = $_POST['username'];
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
   <form method="post" action="do-post.php">
       <input type="text" placeholder="username" name="username" value="<?php echo (isset($_SESSION['form-username']))?$_SESSION['form-username']:'' ?>"><br>
       <input type="text" placeholder="username" name="address">
       <button>Submit</button>
   </form>
</body>
</html>

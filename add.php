<?php
if (isset($_POST['full_name'])) {
    require_once 'dals/Users.php';
    $user = new Users();
    $user->add($_POST);
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
      <input type="text" name="full_name"><br>
      <input type="text" name="address"><br>
      <input type="text" name="phone"><br>
      <input type="text" name="age"><br>
      <button>Submit</button>
  </form>
</body>
</html>
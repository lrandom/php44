<?php
$errors = [];
function validate(&$errors)
{
    $id = $_POST['id'];
    if (!is_numeric($id)) {
        $errors['id'] = "Id phải là số";
    }
    return $errors;
}

if (isset($_POST['id'])) {
    //xử lý
    if (count(validate($errors)) == 0) {
        //xử lý tiếp
        $conn = mysqli_connect("127.0.0.1",
            "root", "koodinh@", "php_web_44");
        $id = $_POST['id'];
        $fullName = $_POST['full_name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $sql = "INSERT INTO users(id,full_name,address,phone,age) 
VALUES($id,'$fullName','$address','$phone',$age)";
       // echo $sql;
        mysqli_query($conn, $sql);
       // echo mysqli_error($conn);

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
    <input type="text" name="id" placeholder="id">
    <?php
    if (isset($errors['id'])) {
        echo $errors['id'];
    }
    ?>
    <br>
    <input type="text" name="full_name" placeholder="full name"><br>
    <input type="text" name="address" placeholder="address"><br>
    <input type="text" name="phone" placeholder="phone"><br>
    <input type="text" name="age" placeholder="age"><br>
    <button>Submit</button>
</form>
</body>
</html>
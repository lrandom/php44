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
$name = "Nguyễn Huy Hoàng";
$age = 25;
$phone = "0986421127";
$email = "luann4099@gmail.com";
$address = "Quảng Ninh";
$gender = 0;
$avatar = "https://thumbs.dreamstime.com/b/male-avatar-icon-flat-style-male-user-icon-cartoon-man-avatar-hipster-vector-stock-91462914.jpg";
?>

<table border="1">
    <tr>
        <td>Name</td>
        <td>
            <input type="text" value="<?php echo $name; ?>"/>
        </td>
    </tr>
    <tr>
        <td>Age</td>
        <td>
            <input type="text" value="<?php echo $age; ?>"/>
        </td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>
            <input type="text" value="<?php echo $phone; ?>"/>
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td>
            <input type="text" value="<?php echo $email; ?>"/>
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td>
            <input type="text" value="<?php echo $address; ?>"/>
        </td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>
            <input type="radio" id="gender-male" value="1" <?php if ($gender == 1) {
                echo 'checked="checked"';
            } ?> name="gender"/>
            <label for="gender-male">Nam</label>

            <input type="radio" id="gender-female" <?php if ($gender == 0) {
                echo 'checked="checked"';
            } ?> value="0" name="gender"/>
            <label for="gender-female">Nữ</label>
        </td>
    </tr>
    <tr>
        <td>Avatar</td>
        <td>
            <img width="100" src="<?php echo $avatar ?>"/>
            <input type="file">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <button>Update</button>
        </td>
    </tr>
</table>
</body>
</html>
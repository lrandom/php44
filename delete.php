<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    //thực hiện xoá
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";
    $conn = mysqli_connect("127.0.0.1",
        "root", "koodinh@", "php_web_44");
    mysqli_query($conn, $sql);//xoá trong CSDL
    header("Location:list.php");//đặt header cho response
}
?>
<?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=php_web_44", "root", "koodinh@");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
try {
    $pdo->beginTransaction();
    $pdo->query("INSERT INTO users(id,full_name,address,age) VALUES (6,'Nguyen Van A','Ha Noi',20)");
    $pdo->query("INSERT INTO users(id,full_name,address,age) VALUES (7,'Nguyen Van A','Ha Noi',20)");
    $pdo->query("INSERT INTO users(id,full_name,address,age) VALUES (7,'Nguyen Van A','Ha Noi',20)");
    $pdo->query("INSERT INTO users(id,full_name,address,age) VALUES (7,'Nguyen Van A','Ha Noi',20)");
    $pdo->query("INSERT INTO users(id,full_name,address,age) VALUES (7,'Nguyen Van A','Ha Noi',20)");

    //chèn dữ liệu vào trong bảng
    $pdo->commit();
} catch (Exception $exception) {
    $pdo->rollBack();//revert lại như thủa ban đầu
    echo "Lỗi";
    echo $exception->getMessage();
} catch (Exception $exception) {
    echo $exception->getMessage();
}
?>
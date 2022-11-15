<?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=php_web_44", "root", "koodinh@");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$prp = $pdo->prepare("INSERT INTO users (id,full_name,address,phone,age)
 VALUES (:id,:full_name,:address,:phone,:age)");
try {
    /*    $prp->execute([
            ':id' => 1,
            ':full_name' => 'Nguyen Van A',
            ':address' => 'Ha Noi',
            ':phone' => '0123456789',
            ':age' => 20
        ]);*/
    $prp->bindParam(':id', $id);
    $prp->bindParam(':full_name', $full_name);
    $prp->bindParam(":address", $address);
    $prp->bindParam(":phone", $phone);
    $prp->bindParam(":age", $age);

    //gắn giá trị cho các biến
    $id = 4;
    $full_name = "Nguyen Van A";
    $address = "Ha Long";
    $phone = "0123456789";
    $age = 20;
    $prp->execute();

    $id = 5;
    $full_name = "Nguyên Văn B";
    $address = "Hà Nội";
    $phone = "027382378";
    $age = 40;
    $prp->execute();

/*    $prp->execute([
        ':id' => 6,
        ':full_name' => 'Nguyen Van C',
        ':address' => 'Ha Noi',
        ':phone' => '0123456789',
        ':age' => 20
    ]);*/
} catch (Exception $exception) {
    echo "Lỗi";
    echo $exception->getMessage();
} catch (Exception $exception) {
    echo $exception->getMessage();
}
?>
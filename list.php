<?php
$conn = new PDO("mysql:host=127.0.0.1;dbname=php_web_44", "root", "koodinh@");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//PDO biết là nếu SQL thực thi bị lỗi thì sẽ ném ra exception
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);//PDO biết là nếu SQL thực thi thành công thì sẽ trả về dữ liệu dạng mảng kết hợp
try {
    $rs = $conn->query("SELECT * FROM users");
} catch (Exception $exception) {
    echo "Lỗi";
    echo $exception->getMessage();
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
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach ($rs as $item) {
       ?>
          <tr>
              <td><?php echo $item->id; ?></td>
              <td><?php echo $item->full_name; ?>></td>
          </tr>

      <?php
      } ?>
    </tbody>
</table>
</body>
</html>

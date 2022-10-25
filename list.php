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
$conn = mysqli_connect("127.0.0.1",
    "root", "koodinh@", "php_web_44");
if (!$conn) {
    die("Toang " . mysqli_connect_error());
}
$sql = "SELECT * FROM users";
?>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $rs = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($rs)):
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
                <a onclick="return confirm('bạn có muốn xoá ko?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
            </td>
        </tr>
    <?php
    endwhile;
    ?>
    </tbody>
</table>

</body>
</html>
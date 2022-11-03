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
require_once './dals/Users.php';
$user = new Users();
$data = $user->getList();
?>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($data

                   as $r) {
        ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->full_name; ?></td>
            <td><?php echo $r->age; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>
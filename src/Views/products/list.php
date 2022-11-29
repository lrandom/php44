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
        <th>Price</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($list as $product): ?>
        <tr>
            <td><?php echo $product->id ?></td>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->price; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
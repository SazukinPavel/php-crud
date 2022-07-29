<?php
    require "services/ItemsService.php";
    $itemService=new ItemsService();
    $items=$itemService->getItems() ;
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Text</th>
        <th>Price</th>
        <th>&#9672;</th>
        <th>&#9998;</th>
        <th>&#10006;</th>
    </tr>
    <?php
    foreach ($items as $item){
        ?>
        <tr>
            <td><?=$item->getId()?></td>
            <td><?=$item->getName()?></td>
            <td><?=$item->getDescription()?></td>
            <td><?=$item->getPrice()?></td>
            <td><a href="product.php?id=<?= $item->getId() ?>">Просмотр</a></td>
            <td><a href="update.php?id=<?= $item->getId()?>">Обновить</a></td>
            <td><a href="vendor/delete.php?id=<?= $item->getId() ?>">Удалить</a></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <h2>Add new item</h2>
    <form action="vendor/add.php" method="post">
        <p>Name:</p>
        <input type="text" name="name">
        <p>Description:</p>
        <input type="text" name="description">
        <p>Price:</p>
        <input type="number" name="price">
        <button type="submit">Add</button>
    </form>
</body>
</html>

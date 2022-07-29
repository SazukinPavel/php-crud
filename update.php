<?php
    require_once "./services/ItemsService.php";
    $itemsService=new ItemsService();
    $item=$itemsService->getItemById($_GET['id']);
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
    <h2>Update new item</h2>
    <form action="vendor/update.php" method="post">
        <p>Name:</p>
        <input type="text" name="name" value="<?= $item->getName() ?>">
        <p>Description:</p>
        <input type="text" name="description" value="<?= $item->getDescription() ?>">
        <p>Price:</p>
        <input type="number" name="price" value="<?= $item->getPrice() ?>">
        <input  type="hidden" name="id" value="<?= $item->getId()?>" hidden>
        <button type="submit">Update</button>
    </form>
</body>
</html>
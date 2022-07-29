<?php
    require_once "database/connect.php";
    $goods=mysqli_query($connection,'SELECT * FROM goods');
    $goods=mysqli_fetch_all($goods);
    print_r($goods);
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
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </tr></table>
</body>
</html>

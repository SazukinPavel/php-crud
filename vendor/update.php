<?php

require_once '../models/Item.php';
require_once '../services/ItemsService.php';

$itemService = new ItemsService();
$item = new Item([$_POST['id'],$_POST['name'], $_POST['description'], $_POST['price']]);

$itemService->updateItem($item);

header('Location: /crud');
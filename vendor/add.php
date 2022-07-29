<?php
require_once '../models/Item.php';
require_once '../services/ItemsService.php';

$itemService=new ItemsService();
$item=new Item([-1,$_POST['name'],$_POST['description'],$_POST['price']]);

$itemService->addItem($item);

header('Location: /crud');
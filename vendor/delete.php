<?php
require_once "../services/ItemsService.php";

$itemService=new ItemsService();

$itemService->deleteItemById($_GET['id']);

header('Location: /crud');
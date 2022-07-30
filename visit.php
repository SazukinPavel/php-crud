<?php
require_once "./services/ItemsService.php";

$itemsService=new ItemsService();
$item=$itemsService->getItemById($_GET['id']);;
$PageTitle=$item->getName();

include_once('./components/head.php');
?>

<h2><?= $item->getName()?></h2>
<p><?= $item->getDescription()?></p>
<span>Price: <?= $item->getPrice()?></span>

<?php
include_once('./components/foot.php');
?>




<?php
require_once "./services/ItemsService.php";

$itemsService=new ItemsService();
$item=$itemsService->getItemById($_GET['id']);;
$PageTitle="Update";

include_once('./components/head.php');
?>

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

<?php
include_once('./components/foot.php');
?>




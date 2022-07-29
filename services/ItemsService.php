<?php

require_once $_SERVER['DOCUMENT_ROOT']."/crud/database/connect.php";
require_once $_SERVER['DOCUMENT_ROOT']."/crud/models/Item.php";

class ItemsService{

    private mysqli $connection;

    public function __construct()
    {
        $this->connection=getConnection();
    }

    function getItems():array{
        $itemsQuery=mysqli_query($this->connection,'SELECT * FROM items');
        $itemsSQL=mysqli_fetch_all($itemsQuery);
        $items=array();
        for ($i=1;$i<count($itemsSQL);$i++){
            $items[$i]=new Item($itemsSQL[$i]);
        }
        return $items;
    }

    function updateItem($item){
        mysqli_query($this->connection, "UPDATE `items` SET name='".$item->getName()."', description='".$item->getDescription()."', price='".$item->getPrice()."' WHERE id=".$item->getId().";");
    }

    function addItem($item):void{
        mysqli_query($this->connection, "INSERT INTO `items` (`name`, `description`, `price`) VALUES ('".$item->getName()."', '".$item->getDescription()."', '".$item->getPrice()."')");
    }

    function getItemById($itemId){
        $itemQuery=mysqli_query($this->connection,"SELECT * FROM items WHERE id=$itemId");
        $itemSQL=mysqli_fetch_all($itemQuery);
        $item=new Item($itemSQL[0]);
        return $item;
    }

}
<?php
class Item{
    private string $name;
    private int $id;
    private string $description;
    private int $price;

    public function __construct($itemArray)
    {
        $this->name=$itemArray[1];
        $this->id=$itemArray[0];
        $this->description=$itemArray[2];
        $this->price=$itemArray[3];
    }

    public function getName():string{
        return $this->name;
    }

    public function getPrice():string{
        return $this->price;
    }

    public function getDescription():string{
        return $this->description;
    }

    public function getId():string{
        return $this->id;
    }
}
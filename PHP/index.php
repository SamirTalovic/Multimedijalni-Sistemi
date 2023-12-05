<?php
class ShopProduct {
    public $title = "";
    public $firstName = "";
    public $surName = "";
    public $price = 0;
    
    public function __construct($title, $firstName, $surName, $price){
        $this->title = $title;
        $this->firstName = $firstName;
        $this->surName = $surName;
        $this->price = $price;
    }
    public function getAuthor() {
        return $this->firstName . ' ' . $this->surName;
    }
    public function getPrice() {
        return $this->$price . ' ' . $this->$title;
    }

}


$obj = new ShopProduct("Title","Name","Surname", 4);
echo $obj->getAuthor();
echo $obj->getPrice();

var_dump($obj);

?>
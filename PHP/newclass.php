<?php

class CdProduct extends ShopProduct{
    public $id = null;
    public function __construct($title, $firstName, $surName, $price,$id){
        $this->title = $title;
        $this->firstName = $firstName;
        $this->surName = $surName;
        $this->price = $price;
        $this->id = $id;
    }
    public function playLength():int{
        return $this->play_length;
    }
    private function write():str{
        echo $this->title;
        echo $this->firstName;
        echo $this->lastName;
        echo $this->price;
        echo $this->id;
    }
}
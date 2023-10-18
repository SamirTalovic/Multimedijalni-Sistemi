<?php

class CdProduct extends ShopProduct{
    public function playLength():int{
        return $this->play_length;
    }
    private function write():void{
        echo $this->title;
        echo $this->firstName;
        echo $this->lastName;
        echo $this->price;
    }
}
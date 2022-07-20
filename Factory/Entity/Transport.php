<?php

class Transport
{

    protected $price;
    protected $oil;

    public function __construct($price, $oil)
    {
        $this->price = $price;
        $this->oil = $oil;
    }


    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getOil(){
        return $this->oil;
    }

    public function setOil($oil){
        $this->oil = $oil;
    }

}
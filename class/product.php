<?php

class Product
{
    public $name;
    public $price;
    public $stoch;
    public $animalType;

    function __construct($name, $price, $stoch, $animalType = "all")
    {
        $this->name = $name;
        $this->price = $price;
        $this->stoch = $stoch;
        $this->animalType = $animalType;
    }

    function getName()
    {
        return $this->name;
    }

    function getStoch()
    {
        return $this->stoch;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getAnimalType()
    {
        return $this->animalType;
    }
}

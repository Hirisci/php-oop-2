<?php

class Product
{
    public $name;
    public $price;
    public $stoch;
    public $animalType;

    public function __construct(String $name, int $price, int $stoch, string $animalType = "all")
    {
        $this->name = $name;
        $this->price = $price;
        $this->stoch = $stoch;
        $this->animalType = $animalType;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStoch()
    {
        return $this->stoch;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }
}

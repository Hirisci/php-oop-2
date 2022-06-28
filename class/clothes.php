<?php

require_once __DIR__ . '/product.php';
class Clothes extends Product
{
    public $size;
    public $color;


    public function __construct($name, $price, $stoch, $animalType, $size, $color)
    {
        parent::__construct($name, $price, $stoch, $animalType = "all");
        $this->size = $size;
        $this->color = $color;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getColor()
    {
        return $this->color;
    }
}

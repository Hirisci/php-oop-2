<?php

require_once __DIR__ . '/product.php';

class Toy extends Product
{
    public $size;


    public function __construct($name, $price, $stoch, $animalType, $size)
    {
        parent::__construct($name, $price, $stoch, $animalType = "all");
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}

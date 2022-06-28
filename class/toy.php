<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public $size;


    public function __construct(String $name, int $price, int $stoch, string $animalType, string $size)
    {
        parent::__construct($name, $price, $stoch, $animalType = "all");
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}

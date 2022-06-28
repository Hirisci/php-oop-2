<?php

require_once __DIR__ . '/Product.php';
class Clothes extends Product
{
    public $size;
    public $color;


    public function __construct(String $name, int $price, int $stoch, string $animalType, string $size, string $color)
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

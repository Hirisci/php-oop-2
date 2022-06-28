<?php



class Toy extends Product
{
    public $size;


    function __construct($name, $price, $stoch, $animalType, $size)
    {
        parent::__construct($name, $price, $stoch, $animalType = "all");
        $this->size = $size;
    }

    function getSize()
    {
        return $this->size;
    }
}

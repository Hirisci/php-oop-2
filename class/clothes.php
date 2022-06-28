
<?php
class Clothes extends Product
{
    public $size;
    public $color;


    function __construct($name, $price, $stoch, $animalType, $size, $color)
    {
        parent::__construct($name, $price, $stoch, $animalType = "all");
        $this->size = $size;
        $this->color = $color;
    }

    function getSize()
    {
        return $this->size;
    }

    function getColor()
    {
        return $this->color;
    }
}

<?php



class Toy extends Product
{
    public $expireDate = null;


    function __construct($name, $price, $stoch, $animalType, $expireDate)
    {
        parent::__construct($name, $price, $stoch, $animalType = "all");
        $this->expireDate = $expireDate;
    }

    function getExpireDate()
    {
        return $this->expireDate;
    }
}

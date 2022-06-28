<?php

require_once __DIR__ . '/product.php';

class Food extends Product
{
    public $expireDate = null;


    public function __construct($name, $price, $stoch, $animalType, $expireDate)
    {
        parent::__construct($name, $price, $stoch, $animalType = "all");
        $this->expireDate = $expireDate;
    }

    public function getExpireDate()
    {
        return $this->expireDate;
    }
}

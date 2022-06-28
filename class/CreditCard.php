<?php

class CreditCard
{
    public $number;
    public $expireDate;
    public $cvc;

    public function __construct(int $number, DateTime $expireDate, int $cvc)
    {
    }

    private function validationDate()
    {
    }
}

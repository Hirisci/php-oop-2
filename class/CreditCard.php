<?php

class CreditCard
{
    public $number;
    public $expireDate;
    public $cvc;

    public function __construct(DateTime $expireDate)
    {
        $this->number = rand(1000000000000000, 9999999999999999);
        $this->expireDate = $expireDate;
        $this->cvc = rand(111, 999);
    }


    public function validationDate()
    {
        $today = new DateTime('now');
        if ($this->expireDate > $today) {
            return true;
        } else {
            throw new Exception("Carta di credito scaduta");
        }
    }
}

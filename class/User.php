<?php
require_once __DIR__ . '/Cart.php';
require_once __DIR__ . '/CreditCard.php';

class User
{
    public $name;
    public $surname;
    public $email;
    public $cart;
    public $creditCard;

    public function __construct(DateTime $expireCreditCard, string $name, string $surname, string $email)
    {
        $this->cart = new Cart();
        $this->creditCard = new CreditCard($expireCreditCard);
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }
}

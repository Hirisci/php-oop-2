<?php
require_once __DIR__ . './User.php';

class RegisteredUser extends User
{
    public $discount = 20;

    public function __construct(DateTime $expireCreditCard, string $name, string $surname, string $email)
    {

        parent::__construct($expireCreditCard,  $name,  $surname,  $email);
    }
}

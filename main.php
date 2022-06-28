<?php

require_once __DIR__ . '/class/product.php';
require_once __DIR__ . '/class/toy.php';
require_once __DIR__ . '/class/clothes.php';
require_once __DIR__ . '/class/food.php';
require_once __DIR__ . '/class/cart.php';
require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/class/RegisteredUser.php';





$bone = new Toy("bone", 20, 40, "dog", "all");
$poncio = new Clothes("poncio", 10, 20, "dog", "m", "black");
$date = DateTime::createFromFormat('d-m-Y', '15-12-2022');
$passedDate = DateTime::createFromFormat('d-m-Y', '15-12-2021');
$meal = new Food("carne", 5, 2, "cat", $date);

$user = new User($date, "fabio", "rossi", "fabiorossi@gmail.com");

$userPremium = new RegisteredUser($date, "antonio", "giallo", "giallo@mare.gmail");

$user->cart->addItem($bone);
$user->cart->addItem($poncio);
$user->cart->addItem($meal);
$userPremium->cart->addItem($bone);
$userPremium->cart->addItem($poncio);
$userPremium->cart->addItem($meal);


try {
    $user->creditCard->validationDate();
    echo "hai comprato il tuo carrello! ed hai speso {$user->priceCart()} <br>";
    $user->cart->sell();
} catch (Exception $e) {
    echo "errore ", $e->getMessage(), "\n";
}

try {
    $userPremium->creditCard->validationDate();
    echo "hai comprato il tuo carrello! ed hai speso {$userPremium->priceCart()} <br>";
    $userPremium->cart->sell();
} catch (Exception $e) {
    echo "errore ", $e->getMessage(), "\n";
}


var_dump($user->cart);

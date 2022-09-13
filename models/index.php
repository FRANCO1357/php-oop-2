<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once __DIR__ . '/products/FoodProduct.php';
include_once __DIR__ . '/shopping/Cart.php';
include_once __DIR__ . '/customers/Customer.php';
include_once __DIR__ . '/shipping/Address.php';
include_once __DIR__ . '/shopping/CreditCard.php';
include_once __DIR__ . '/shopping/Order.php';

$prodotto = new FoodProduct('Crocchette', 'cibo per gatti', 4.99, ['gatti'], ['manzo', 'pollo', 'tacchino'], "30-10-2022");

$cliente = new Customer();

$cliente->addToCart($prodotto);

$indirizzo = new Address('Francesco Melani', 'Via Luigi Einaudi 6c', '56022', 'Castelfranco di Sotto', 'Italy');

$carta = new CreditCard('47534374842647378', 'Mastercard', "13-09-2024");

$ordine = new Order($indirizzo, $carta, [$prodotto], 100);

var_dump($ordine);

?> 
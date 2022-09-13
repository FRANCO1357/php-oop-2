<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once __DIR__ . '/products/FoodProduct.php';

$prodotto = new FoodProduct('Crocchette', 'cibo per gatti', 4.99, ['gatti'], ['manzo', 'pollo', 'tacchino'], "30-10-2022");

var_dump($prodotto);

?>
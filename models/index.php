<?php

include_once __DIR__ . '/models/products/FoodProduct.php';

$prodotto = new FoodProduct('Crocchette', 'cibo per gatti', 4.99, ['gatti'], ['manzo', 'pollo', 'tacchino'], "30-10-2022");

var_dump($prodotto);

?>
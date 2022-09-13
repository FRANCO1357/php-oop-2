<?php

require_once __DIR__ . '/../products/Product.php';

class Cart
{
    private $products = [];
     
    public function getProductsList()
    {
        return $this->products;
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->products as $product){
            $total += $product->getPrice();
        }
        return $total;
    }

    public function addProduct($product){
        if(!($product instanceof Product)) throw new Exception("$product must be instance of Product");
        $this->products[] = $product;
    }

    public function removeProduct($product){
        if($product instanceof Product){
            $id = $product->getId(); 
            foreach($this->products as $key => $value){
                if($value->getId() === $id) unset($this->products[$key]);
            }
        }
    }
}

?> 
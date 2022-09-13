<?php

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/../shipping/Address.php';
require_once __DIR__ . '/../products/Product.php'; 

class Order{
    private $address;
    private $credit_card;
    private $products;
    private $amount;
    private $status;

    public function __construct($address, $credit_card, $products, $amount){
        $this->setAddress($address);
        $this->setCreditCard($credit_card);
        $this->setProducts($products);
        $this->setAmount($amount);
        $this->setStatus();
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress($address): self
    {
        if(!($address instanceof Address)) throw new Exception ('$address must be instanceof Address');
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of credit_card
     */
    public function getCreditCard()
    {
        return $this->credit_card;
    }

    /**
     * Set the value of credit_card
     */
    public function setCreditCard($credit_card): self
    {
        if(!($credit_card instanceof CreditCard)) throw new Exception ('$credit_card must be instanceof CreditCard ');
        $this->credit_card = $credit_card;

        return $this;
    }

    /**
     * Get the value of products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     */
    public function setProducts($products): self
    {
        array_filter($products, function($product ){
            if(!($product instanceof Product)) throw new Exception ('$product must be instanceof Product');
        });
        $this->products = $products;

        return $this;
    }

    /**
     * Get the value of amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     */
    public function setAmount($amount): self
    {
        if(!is_numeric($amount) || $amount <= 0) throw new Exception ('$amount must be positive float');
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus($status = 'pending '): self
    {
        $this->status = $status;

        return $this;
    }
}

?>
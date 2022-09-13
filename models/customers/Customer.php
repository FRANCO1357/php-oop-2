 <?php

 require_once __DIR__ . '/../shopping/Cart.php';

 class Customer{
    protected $cart;

    public function __construct(){
        $this->setCart();
    }

    /**
     * Get the value of cart
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the value of cart
     */
    protected function setCart()
    {
        $this->cart = new Cart();
    }

    public function addToCart($product){
        $this->cart->addProduct($product);
    }

    public function removeFromCart($product){
        $this->cart->removeProduct($product);
    }
 }

 ?>
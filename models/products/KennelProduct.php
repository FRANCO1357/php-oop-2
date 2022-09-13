<?php

require_once __DIR__ . '/Product.php';

class KennelProduct extends Product{
    private $size;
    private $color;

    public function __construct($name, $description, $price, $animal_types, $size, $color){

        parent::__construct($name, $description, $price, $animal_types);
        $this->setSize($size);
        $this->setColor($color);
         
    }



    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     */
    public function setSize($size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }
}

?>
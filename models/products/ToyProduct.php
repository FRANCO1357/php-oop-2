<?php

require_once __DIR__  '/Product.php'

class ToyProduct extends Product{
    private $material;
    private $color;

    public function __construct($name, $description, $price, $animal_types, $material, $color){

        parent::__construct($name, $description, $price, $animal_types);
        $this->setMaterial($material);
        $this->setColor($color);
         
    }



    /**
     * Get the value of material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     */
    public function setMaterial($material): self
    {
        $this->material = $material;

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
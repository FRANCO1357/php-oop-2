<?php

class Product{
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $animal_types;

    public function __construct($name, $description, $price, $animal_types){
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setAnimalTypes($animal_types);
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = uniqid();

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of animal_types
     */
    public function getAnimalTypes()
    {
        return $this->animal_types;
    }

    /**
     * Set the value of animal_types
     */
    public function setAnimalTypes($animal_types): self
    {
        $this->animal_types = $animal_types;

        return $this;
    }
}

?>
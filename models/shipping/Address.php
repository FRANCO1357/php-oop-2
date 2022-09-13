<?php

class Address{
    private $fullname;
    private $street;
    private $zipcode;
    private $city;
    private $country;

    public function __construct($fullname, $street, $zipcode, $city, $country){
        $this->setFullname($fullname);
        $this->setStreet($street);
        $this->setZipcode($zipcode);
        $this->setCity($city);
        $this->setCountry($country);
    }
    


    /**
     * Get the value of fullname
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set the value of fullname
     */
    public function setFullname($fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get the value of street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     */
    public function setStreet($street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of zipcode
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set the value of zipcode
     */
    public function setZipcode($zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     */
    public function setCountry($country): self
    {
        $this->country = $country;

        return $this;
    }
}

?>

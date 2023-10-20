<?php


class Food extends Product
{
    private $type;
    private $weight;
    private $expiration;

    public function __construct(string $name, Category $category, float $price, string $type, float $weight, string $expiration)
    {
        parent::__construct($name, $category, $price);
        $this->setType($type);
        $this->setWeight($weight);
        $this->setExpiration($expiration);
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Get the value of expiration
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of expiration
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }

    /**
     * Get all details values
     */
    public function getDetails()
    {
        return "Type: " . $this->getType() . " <br> Weight: " . $this->getWeight() . "g <br> Expire: " . $this->getExpiration();
    }

    /**
     * Display all class properties
     */
    public function toString()
    {
        return "Name: " . $this->getName() . " | Category: " . $this->getCategory()->getCategoryIcon() . " | Price: " . $this->getPrice() . " | Type: " . $this->getType() . " | Weight: " . $this->getWeight() . " | Expiration Date: " . $this->getExpiration();
    }
}

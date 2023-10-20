<?php

class Toy extends Product
{
    private $materialType;


    public function __construct(string $name, Category $category, float $price, string $materialType)
    {
        parent::__construct($name, $category, $price);
        $this->setMaterialType($materialType);
    }

    /**
     * Get the value of materialType
     */
    public function getMaterialType()
    {
        return $this->materialType;
    }

    /**
     * Set the value of materialType
     */
    public function setMaterialType($materialType)
    {
        $this->materialType = $materialType;
    }

    /**
     * Display all class properties
     */
    public function toString()
    {
        return "Name: " . $this->getName() . " | Category: " . $this->getCategory()->getCategoryIcon() . " | Price: " . $this->getPrice() . " | Material: " . $this->getMaterialType();
    }
}

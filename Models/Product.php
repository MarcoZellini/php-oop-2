<?php

class Product
{
    private $name;
    private $category;
    private $poster;
    private $price;

    public function __construct(string $name, Category $category, float $price)
    {
        $this->setName($name);
        $this->setCategory($category);
        $numRandom = rand(1, 100);
        $this->setPoster("https://picsum.photos/600/400?random=$numRandom");
        $this->setPrice($price);
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
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Get the value of poster
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set the value of poster
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;
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
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Display all class properties
     */
    public function toString()
    {
        return "Name: " . $this->getName() . " | Category: " . $this->getCategory()->getCategoryIcon() . " | Price: " . $this->getPrice();
    }
}

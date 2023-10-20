<?php

class Kennel extends Product
{
    private $height;
    private $width;
    private $depth;

    public function __construct(string $name, Category $category, float $price, float $height, float $width, float $depth)
    {
        parent::__construct($name, $category, $price);
        $this->setHeight($height);
        $this->setWidth($width);
        $this->setDepth($depth);
    }

    /**
     * Get the value of height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Get the value of width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * Get the value of depth
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set the value of depth
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    }

    /**
     * Get all details values
     */
    public function getDetails()
    {
        return "Misure: H. " . $this->getHeight() . " cm x W. " . $this->getWidth() . " cm x D. " . $this->getDepth() . " cm";
    }

    /**
     * Display all class properties
     */
    public function toString()
    {
        return "Name: " . $this->getName() . " | Category: " . $this->getCategory()->getCategoryIcon() . " | Price: " . $this->getPrice() . " | Height: " . $this->getHeight() . " | Width: " . $this->getWidth() . " | Depth: " . $this->getDepth();
    }
}

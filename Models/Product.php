<?php

require __DIR__ . '/../Traits/Namable.php';
class Product
{
    use Namable;
    private $category;
    private $poster;
    private $price;

    public function __construct(string $name, Category $category, $price)
    {
        $this->setName($name);
        $this->setCategory($category);
        $numRandom = rand(1, 100);
        $this->setPoster("https://picsum.photos/600/400?random=$numRandom");
        $this->setPrice($price);
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
        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            throw new Exception('Il valore del prezzo inserito non e\' numerico!');
        }
    }

    /**
     * Display all class properties
     */
    public function toString()
    {
        return "Name: " . $this->getName() . " | Category: " . $this->getCategory()->getCategoryIcon() . " | Price: " . $this->getPrice();
    }
}

<?php

class Category
{
    private $name;

    public function __construct(string $name)
    {
        $this->setName($name);
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
     * Get the icon of the animal
     */
    public function getCategoryIcon()
    {
        $icon = '';

        if (strtolower($this->name) == "cane") {
            $icon = '🐶';
        } else if (strtolower($this->name) == "gatto") {
            $icon = '😸';
        }

        return $icon;
    }

    /**
     * Display all class properties
     */
    public function toString()
    {
        return "Name: " . $this->getName();
    }
}

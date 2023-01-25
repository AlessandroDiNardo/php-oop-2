<?php

class Products {

    public $name;
    public $description;
    public $price;
    public $category;
    
    public function __construct($name, $description, $price, $category) {
        $this -> setName($name);
        $this -> setPrice($description);
        $this -> set($price);
        $this -> set($category);
    }

    // name
    public function getName() {
        return $this -> name;
    }

    public function setName($name) {
        return $this -> name = $name;
    }

    // description
    public function getDescription() {
        return $this -> description;
    }

    public function setDescription($description) {
        return $this -> description = $description;
    }

    // price
    public function getPrice() {
        return $this -> price;
    }

    public function setPrice($price) {
        return $this -> price = $price;
    }

    // category
    public function getCategory() {
        return $this -> category;
    }

    public function setCategory($category) {
        return $this -> category = $category;
    }
}


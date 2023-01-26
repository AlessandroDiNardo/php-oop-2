<?php

require_once ("models/category.php");
require_once ("models/products.php");
require_once ("models/food.php");
require_once ("models/kennel.php");
require_once ("models/game.php");

class Products {

    public $name;
    public $description;
    public $price;
    public $category;
    
    public function __construct($name, $description, $price, $category) {
        $this -> setName($name);
        $this -> setDescription($description);
        $this -> setPrice($price);
        $this -> setCategory($category);
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


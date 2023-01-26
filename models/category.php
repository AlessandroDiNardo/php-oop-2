<?php

// creo la classe Categoria
class Category {

    private $category;

    public function __construct($category){
        $this -> setCategory($category);
    }

    public function getCategory() {
        return  $this -> category ;
    }

    public function setCategory($category) {
        return $this -> category = $category;
    }
}
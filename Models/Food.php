<?php

class Food extends Product {

  public $weight;
  public $ingredients;

  public function __construct(string $_name, string $_description, float $_price, string $_image, Category $_category, int $_weight, array $_ingredients) {

    parent::__construct($_name, $_description, $_price, $_image, $_category);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
  }

}
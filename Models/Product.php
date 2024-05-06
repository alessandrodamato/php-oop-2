<?php

class Product{

  public $name;
  public $description;
  public $price;
  public $image;
  public $category;

  public function __construct(string $_name, string $_description, float $_price, string $_image, Category $_category) {

    $this->name = $_name;
    $this->description = $_description;
    $this->price = $_price;
    $this->image = $_image;
    $this->category = $_category;

  }

}
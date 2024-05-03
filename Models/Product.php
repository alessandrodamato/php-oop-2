<?php

class Product extends Subcategory {

  public $name;
  public $description;
  public $price;
  public $image;

  public function __construct(string $_animal, string $_type, string $_name, string $_description, float $_price, string $_image) {

    parent::__construct($_animal, $_type);

    $this->name = $_name;
    $this->description = $_description;
    $this->price = $_price;
    $this->image = $_image;

  }

}
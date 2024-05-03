<?php

class Product {

  public $name;
  public $price;
  public $type;

  public function __construct(string $_name, float $_price, Type $_type) {
    $this->name = $_name;
    $this->price = $_price;
    $this->type = $_type;
  }

}
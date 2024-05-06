<?php

class Toy extends Product {

  use Material;
  public $features;
  public $size;

  public function __construct(string $_name, string $_description, float $_price, string $_image, Category $_category, int $_features, array $_size) {

    parent::__construct($_name, $_description, $_price, $_image, $_category);

    $this->features = $_features;
    $this->size = $_size;
  }

}
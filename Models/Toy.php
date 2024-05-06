<?php
class Toy extends Product {

  public $features;
  public $size;

  public function __construct(string $_name, string $_description, float $_price, string $_image, Category $_category, string $_features, string $_size) {

    parent::__construct($_name, $_description, $_price, $_image, $_category);

    $this->features = $_features;
    $this->size = $_size;
  }

}
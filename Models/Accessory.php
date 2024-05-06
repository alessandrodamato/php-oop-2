<?php

require_once __DIR__ . '/Material.php';
class Accessory extends Product {

  use Material;

  public $size;

  public function __construct(string $_name, string $_description, float $_price, string $_image, Category $_category, string $_size) {

    parent::__construct($_name, $_description, $_price, $_image, $_category);

    $this->size = $_size;
  }

}
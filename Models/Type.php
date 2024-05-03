<?php

class Type extends Product {

  public $img;

  public function __construct(string $_name, float $_price, string $_img) {
    
    $this->img = $_img;
  }

}
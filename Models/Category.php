<?php

class Category {

  public $name;
  public $img;

  public function __construct(string $_name, string $_img) {
    $this->name = $_name;
    $this->img = $_img;
  }

}
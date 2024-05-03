<?php

class Subcategory extends Category {

  public $type;

  public function __construct(string $_animal, string $_type) {

    parent::__construct($_animal);

    $this->type = $_type;

  }

}
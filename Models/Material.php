<?php

trait Material {

  public $material;

  public function getFormatMaterial(){
    echo join(', ', $this->material);
  }

}
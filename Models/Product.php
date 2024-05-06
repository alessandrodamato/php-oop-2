<?php

class Product{

  public $name;
  public $description;
  private $price;
  public $image;
  public $category;

  public function __construct(string $_name, string $_description, float $_price, string $_image, Category $_category) {

    $this->setName($_name);
    $this->description = $_description;
    $this->setPrice($_price);
    $this->image = $_image;
    $this->category = $_category;

  }

  // setter //

  public function setName($_name){

    // causa un errore fatale se una delle condizioni non è vera
    if(empty($_name) || strlen($_name) < 4){
      throw new Exception('Il nome del prodotto deve essere di almeno 4 caratteri');
    }
    $this->name = $_name;
  }

  public function setPrice($_price){

    // causa un errore fatale se una delle condizioni non è vera
    if(empty($_price) || $_price === 0 || !is_numeric($_price)){
      throw new Exception('Il prezzo deve essere un numero e non può essere pari a zero');
    }
    $this->price = $_price;
  }

  // getter //

  public function getPrice(){
    return $this->price;
  }

}
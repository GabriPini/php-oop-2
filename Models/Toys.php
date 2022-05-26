<?php

class Toys extends Item
{
  protected $animalAge;

  function __construct($name, $barCode, $price, $stockQuantity, $animalAge)
  {
    parent::__construct($name, $barCode, $price, $stockQuantity,);
    $this->animalAge = $animalAge;
  }


/*   public function calcStockValue()
  {
   
    $stock_value = $this->price * $this->stockQuantity;
    $this->stock_value = $stock_value;
    return "$this->title $stock_value";
  } */
}
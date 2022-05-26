<?php

class Beds extends Item
{
  protected $size;

  function __construct($name, $barCode, $price, $stockQuantity, $size)
  {
    parent::__construct($name, $barCode, $price, $stockQuantity,);
    $this->size = $size;
  }


/*   public function calcStockValue()
  {
   
    $stock_value = $this->price * $this->stockQuantity;
    $this->stock_value = $stock_value;
    return "$this->title $stock_value";
  } */
}
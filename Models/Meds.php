<?php

class Meds extends Item
{
  protected $availability;

  function __construct($name, $barCode, $price, $stockQuantity, $availability)
  {
    parent::__construct($name, $barCode, $price, $stockQuantity,);
    $this->availability = $availability;
  }


/*   public function calcStockValue()
  {
   
    $stock_value = $this->price * $this->stockQuantity;
    $this->stock_value = $stock_value;
    return "$this->title $stock_value";
  } */
}
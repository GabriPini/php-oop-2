<?php

class Foods extends Item
{
  protected $type;

  function __construct($name, $barCode, $price, $stockQuantity, $type)
  {
    parent::__construct($name, $barCode, $price, $stockQuantity,);
    $this->type = $type;
  }


/*   public function calcStockValue()
  {
   
    $stock_value = $this->price * $this->stockQuantity;
    $this->stock_value = $stock_value;
    return "$this->title $stock_value";
  } */
}
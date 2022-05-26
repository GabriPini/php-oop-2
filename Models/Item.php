<?php
require_once __DIR__ . '/Toys.php';
require_once __DIR__ . '/Foods.php';
require_once __DIR__ . '/Meds.php';
require_once __DIR__ . '/Beds.php';

/**
 * Class che rappreseta un tipo di oggetto 
 */
class Item{

    protected $name;
    protected $barCode;
    protected $price;
    protected $stockQuantity;


    /**
     * create Creo un nuovo oggetto
     * 
     * @param string $name nome del prodotto
     * @param int $barCode codice identificativo dell'ggetto
     * @param float $price prezzo vase del prodotto
     * @param int $stockQuantity quantita di oggetti
     *  
     */
    public function __construct($name, $barCode, $price, $stockQuantity,){

        $this->barCode = $barCode;
        $this->name = $name;
        $this->price = $price;
        $this->stockQuantity = $stockQuantity;


    }


    
}
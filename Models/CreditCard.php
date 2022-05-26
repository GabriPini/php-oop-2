<?php
/**
 * Class che rappresenta la carta di credito 
 */
class CreditCard{

    use naming;

    protected $number;
    protected $cvv;
    protected $expireDate;
    protected $circuit;

    /**
     * create una nuova carta di credito
     * 
     * @param string $name nome del proprietario
     * @param string $surname cognome del proprietario 
     * @param int $number identificativo della carta 
     * @param int $cvv CVV codice dietro la carte di 3 cifre
     * @param string $expireDate data di scadenza 
     * @param string $circuit tipo di circuito utilizzato
     */
    public function __construct($name, $surname, $number, $cvv, $expireDate , $circuit){
        
        $this->name = $name;
        $this->surname = $surname;
        $this->number = $number;
        $this->cvv = $cvv;
        $this->expireDate = $expireDate;
        $this->circuit = $circuit;

    }

}
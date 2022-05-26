<?php
/**
 * Class Che rappresenta un nuovo utente
 */
class User{

    use naming;

    protected $dateOfBirth;
    protected $fiscalCode;
    protected $availableCreditCard = [];
    protected $typeOfUser;
    protected $discount;

    
    /**
     * Creare un nuovo utente
     * 
     * @param string $name nome dell'utente
     * @param string $surname cognome dell'utente
     * @param string $dateOfBirth data di nascita
     * @param string $fiscalCode codice fiscale
     * @param string $typeOfUser l'utente puo essere 'premium' o 'standard'
     * 
     */
    public function __construct($name, $surname, $dateOfBirth, $fiscalCode){
        
        $this->name = $name;
        $this->surname = $surname;
        $this->dateOfBirth = $dateOfBirth;
        $this->fiscalCode = $fiscalCode;
        
    }
    
    /**
     * Push  creditCard(Object) nell'array delle carte disponibili
     * 
     * @param object $creditCard carta da inserire nelle carte disponibili
     */
    public function insertCreditCard($creditCard){

        array_push($this->availableCreditCard, $creditCard);

    }

    /**
     * 
     * seleziona lo sconto selezionado il tipo di utente 
     * 
     * @param $typeOfUser specifica il tipo di utente per settare lo sconto
     */
    public function setUserDiscount($typeOfUser){
        if($typeOfUser == 'premium'){
            $this->typeOfUser = $typeOfUser;
            $this->discount = 0.2;
        } elseif ($typeOfUser == 'standard') {
            $this->typeOfUser = $typeOfUser;
            $this->discount = 0;
        } else {
            return 'type of user not valid';
        }
    }
    
}

trait naming {

    public $name;
    public $surname;

}

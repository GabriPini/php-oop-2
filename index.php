<?php
require_once __DIR__ . '/Models/Item.php';
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/CreditCard.php';


$gabriele = new User('gabriele', 'pini', '19/06/1997', 'PNIGRL97H19P322G' );

$newCreditCard = new CreditCard('Bilbo', 'Baggins', 6076809700532308, 123, '25/06/2023', 'Visa');

$antiFlea = new Meds('Antipulci',101232124213,20,1000,'Disponibile solo da Maggio ad Agosto');

var_dump($gabriele);

$gabriele->insertCreditCard($newCreditCard);
$gabriele->setUserDiscount('premium');

var_dump($antiFlea);

var_dump($gabriele);
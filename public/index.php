<?php

namespace App;

require __DIR__.'/../vendor/autoload.php';

$tuture = new Voiture("Porsche", "Cayenne", 205000, 0, 2018);
var_dump($tuture);

$camion = new Utilitaire("Fiat", "Ducato", 35000, 0, 10);
var_dump($camion);

$arbreMagique = new Sapin("Arbre Magique goût rubarbe");
var_dump($arbreMagique);

var_dump($tuture->popularity());
var_dump($camion->popularity());

$panier = new Panier([$tuture, $camion]);
var_dump($panier->giveBill());

// Pas eu le temps de me pencher sur les erreurs

//
//$car = new Car('Peugeot 205');

//dump($car);

// Format attendu de la facture du panier

//$facture = [
    //"Peugoet 205, Sapin Fraicheur océan", // voir => https://www.php.net/manual/en/function.implode
    //505,
//];

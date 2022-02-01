<?php

const PI = 3.1415165454; //le constanti non sono riassegnabili
// di solito si usa const per definire le constanti e se mi serve controllare se e definita
//uso il metodo defined if(!defined) 
if (!defined('PI'))
    define('PI', 3.14151231);    //define si usava prima di const che e stato introdoto dalla versione 5.6

echo PI;

const PROVINCES = [',MI', 'TO', 'NA']; // POSSIAMO ASSEGNARE DEGLI AARRAY ALLE COSTANTI

define('CITIES', ['Milano', 'Bologna']); //oppure cosi possiamo assegnare

var_dump('CITIES');

$a = 2 ** 4; // significa 2 ellevato alla 4

$b = pow(3, 2); // POW() ELEVA LA BASE 3 ALLA POTENZA 2 

$sqr = sqrt(16); // radice quadrata

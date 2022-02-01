<?php 
// include 'function.php';    // include --fa tipo un copia incola del contenuto del file function.php 
include_once 'function.php';   //  se non trova quello che include ci butta un Warning che non ferma l'esecuzione del programma
// require 'function.php';  // se non trova quello che richiede ci butta un errore e ci ferma l'ezecuzione del programma
// require 'function.php';


// ...  
// ...

// include 'function.php';  // se mettiamo unaltra volta include qui ci dara errore di aver dichiarato gia la funzione dd() visto che copia e incola leteralmente il contenuto del function.php
//include_once 'function.php';  // con include_once posiamo usare quello che includiamo solo quella volta come una funzione... la poi usare in diversi punti dello script_file
$dati = ['name'=> 'Vsevolod', 'lastname'=>'Cerneavschi'];

dd($dati);
print_r($dati);

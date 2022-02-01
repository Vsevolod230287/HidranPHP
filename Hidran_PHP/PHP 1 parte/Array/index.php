<?php
define('giallo', 4);  // definisco una costante e li do il valore 4

// $arr = array(null);
$arr = array();
// $arr[] = null;

$arr = array('red','green', 'blue');
$arr[] = 'pink';
// print_r($arr);
 $arr[9]= 'yellow';
 $arr[]= 'white';
 $arr['giallo'] = 'amarillo';
 $arr[]= 'magenta';
$arr[4]= array(4,4,5,6,67,7,54);
  $arr['5']= 'cinque'; //la chiave stringa di tipo numero sara sempre convertita a numero quindi come un normale indice numero in questo caso 5
$arr['5.0']= 'cinque'; //la chiave stringa di tipo float sara sempre una stringa non sara convertita a numero
 $arr[5.5]= 'sei'; // se la chiave e di tipo float lo casta a intero troncando la parte decimale non arrotondando, quindi sovrascrivera l'indice 5
//  echo $arr[giallo]; // ci dara un erore perche echo non stampa gli array, gialo e una costante
 var_dump(gettype($arr[giallo]));
// // print_r($arr['giallo']);  // negli array le chiavi stringhe devono essere sempre tra gli apici per evitare confusioni con le costanti con nomi uguali
// $arr['giorni']= ['lunedi','martedi'];

// array_push($arr['giorni'], 'mercoledi');

// $arr['giallo'] = 'opencart';
// unset($arr['giorni']); // unset per i valori numerici lascia un buco in questo caso abbiamo la chiave stringa quindi va bene
// unset($arr[2]);
// $arr['blue'] = 'albastru';

// // $arr = array_values($arr); //riindicizza un arrray perdendo le chiavi originali


 var_dump($arr);



// sono arrivato alla lezione 29 ho finito la 28;

?>
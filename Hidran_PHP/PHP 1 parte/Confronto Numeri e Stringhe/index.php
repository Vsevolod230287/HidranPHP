<?php

/*
Comparazione    | prima php8 | dopo php8 
0 == '0'        | true       | true 
0 = '0.0'       |  true      |   true
0 = "asdsd"     | true       |  false
0 = ''          |true        | false
42 == '  42  '  |true        | true
42 = '43fdfg'   | true       | false

*/

$a = [3, 6, 7];
// var_dump(in_array('3', $a)); 

// var_dump(in_array('3', $a, true));  //in_array come primo argomento prende il needle(ago-cosa cercare),
// come secondo argomento prende il haystack(pagliaio-in cosa cercare),
// come terso argomento ci dice la modalitadi confronto strict(true oppure false)
// di default la comparazione non e stretta



//SPACESHIP <=>  - FA TRE CONFRONTI: <=, == , >= 

$g = 0;
$f = 1;
$x = $g <=> $f;

// var_dump($x); // output sara: -1 (che ci dice che il primo valore e minore del secondo)
// se il primo valore era maggiore allora ci dava: 1
// se erano uguali ci dava: 0 

//NULL COALESCING - PRENDE IL PRIMO VALORE NON NULLO

$result = null ?? 2 ?? 3;

// var_dump($result);

$arr = [
  'name' => 'Vsevolod',
  'city' => 'Verona',
  'lastname' => null
];


// dal php >= 7.4 si puo fare cosi cioe:  
/*
  $arr['lastname'] ??= 'N/A'; questo vuoi dire che  se il valore di lastname e nullo li assegno il valore 'N/A;
*/


// $lastname = $arr['lastname'] ?? 'N/A'; // qua li dico se il vaslore del array all'indice lastname e
// nullo li assegno la stringa 'N/A' altrimenti li assegno il valore di lastname
$arr['lastname'] ??= 'N/A';



// echo $lastname; 

// $money = false;


//gli if si possono fare sia con la sintassi dei due punti(:) sia con la sintassi delle graffe {} 
// if ($money < 10) : 
?>
<!-- //     <h1>I soldi sono minori di 10;</h1> -->
//<?php
  // else :
  // 
  ?>
<!-- //     <h1>I soldi sono sufficienti</h1> -->
<?php
// endif;


// questo modo di scrivere con echo non si usa molto perche se qualche disigner frontendista
// vuole stilizare qualche cosa si puo confondere

// if ($money < 10) :
//     echo ' <h1>I soldi sono minori di 10</h1>';
// else :
//     echo ' <h1>I soldi sono sufficienti</h1>';
// endif;


// if ($money < 10) { 
// 
?>
<!-- //     <h1>I soldi sono minori di 10</h1> -->
<?php
// } else { 
// 
?>
<!-- //     <h1>I soldi sono sufficienti</h1> -->
<?php
// } 


// se mettiamo money = false  lo switch lo converte a intero quindi false sara 0, quindi eseguira il caso zero 
// switch ($money) {
//         // case 0:
//         //     echo 'Non hai soldi <br>';
//         //     break;
//     case false:
//         echo 'E\ false';
//         break;
//     case 1:
//         echo 'Hai 1 euro<br>';
//         break;
//     case 2:
//         echo 'Hai 2 euro<br>';
//         break;
//     case 3:
//     case 4:
//         echo 'Hai 3 o 4<br>';
//         break;
//     default:
//         echo 'Valore non valido';
// };


// nello switch si possono metere e anche ommettere le graffe per dire l'inizio e la fine di un blocco di codice ma comunque le graffe principali dello switch bisogna averle
// al posto di due punti si puo usare il ; e funziona lo stesso
// switch ($money){
//     case 0:
//         echo 'Non hai soldi <br>';
//         break;

//     case 1:
//             echo 'Hai 1 euro<br>';
//             break;

//     case 2: 
//             echo 'Hai 2 euro<br>';
//             break;

//     case 3:
//     case 4: 
//             echo 'Hai 3 o 4<br>';
//             break;

//     default: 
//             echo 'Valore non valido';}



$money = 3;

// from php8 in avvanti 
//nel match si confronta il valore in maniera stretta cioe de money e false entrera nella 1 > 2 visto che risulta false
// non serve metere nessun brake, esce da solo dopo aver trovato un valore uguale
// il match deve avere obbligatoriamente un valore di default se non macha nulla ci da errore, nello switch il default non e obbligatorio
// il match puo tornare un risultato booleano: true

$result = match ($money) {
  1 > 2 => print_r("E' false", true),       // qui dobbiamo passare una espressione che ritorna qualcosa, non possiamo usare echo // print_r invece stampa a video e ritorna 'true' se non passiamo il secondo parametro // se invece li passiamo alla funzione print_r il secondo parametro: true allora ritornerebbe il primo parametro cioe la stringa ma non la stampera a video;
  0 => print_r('Non hai soldi <br>', true), // se mettiamo il secondo parametro true, non stampera a video ma ritornera il primo parametro cioe la stringa
  3, 4 => print_r('<br> HAi 3 o 4', true),
  default => print_r('<br> nessuno dei valori', true)
};



// var_dump($result);  // result = 1 che significa 



//DO WHILE

// $i = 0;

// while ($i <= 10) {
//   echo "$i <br>";
//   $i++;
// }

// do{
// echo "$i <br>";
// $i++;
// } while ($i <= 10);
 ?>
 

 
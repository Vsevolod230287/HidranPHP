<?php 
declare(strict_types=1);
?>

<body style="background-color: purple;">
    <ul style="font-size: 26px;">
        <li>array_pop(): toglie ultimo elemento e lo ritorna</li>
        <li>array_shift(): toglie primo elemento e lo ritorna</li>
        <li>array_push(): aggiunge un elemento alla fine dell'array </li>
        <li>array_unshift(): aggiunge elementi all'inizio dell'array</li>
        <li>sort(): rigenera le chiavi di un array e lo ordina</li>
        <li>asort(): ordina un array mantenendo le chiavi</li>
        <li>array_map(): applica una funzione ad ogni elemento e ritorna un nuovo array con elementi modificati</li>
        <li>array_walk(): applica una funzione ad ogni elemento dell'array</li>
        <li>array_search(): cerca un valore dentro un array e ritorna la prima chiave corispondente </li>
        <li>in_array(): cerca un valore dentro un array e ritorna un booleano</li>
        <li>array_filter(): filtra gli elementi di un array tramite una callback, se la callback ritorna true allora elemento viente inserito nell array nuovo </li>
        <li>array_keys(): ritorna le chiavi di un array</li>
        <li>array_values(): ritorna i valori di un array inun nuovo array indicizzato numericamente </li>




    </ul>
</body>

<?php

$colors = ['BLUE', 'RED', 'GREEN'];
var_dump($colors);

$colorPop = array_pop($colors);       // ritorna l'ultimo elemento e modifica l'array iniziale
echo "array_pop: $colorPop<br>";
var_dump($colors);

$colorShift = array_shift($colors);   // ritorna il primo elemento e odifica l'array iniziale
echo "array_shift: $colorShift<br>";
var_dump($colors);

$colorPush = array_push($colors, 'Green', 'Yellow');
echo "array_push: $colorPush<br>";     // aggiunge alla fine  dell'array gli elementi
var_dump($colors);

array_unshift($colors, 'Seva', 'Ceva');
echo "array_unshift: aggiunti 2 elementi";
var_dump($colors);

$images = ['img1.jpg', 'img2.jpg', 'img01.jpg', 'img02.jpg', 'img20.jpg', 'img21.jpg', 'img11.jpg'];
// SENZA SORT_NATURAL SI COMPARA PER BYTE E QUINDI NON VIENE PROPRIO IL ORDINAMENTO NATURALE
sort($images);                 // come nel byte:  01 02 1 11 2 20 21;   "default: SORT_REGULAR"  
sort($images, SORT_NATURAL);   // umano_naturale:  01 02 1 2 11 20 21;
sort($images, SORT_REGULAR);   // come nel byte:  01 02 1 11 2 20 21;   

natsort($images);              // SORT_NATURAL
natcasesort($images);          // SORT_NATURAL and case insensitive

asort($images);                // SORT_REGULAR and maintain index association

var_dump(($images));

$words = ['red' => 'rosso', 'white' => 'bianco'];
// sort($words);      // togliera la chiave red e metera l'indice 0...ecc non mantiene le chiavi
asort($words);        // SORT_REGULAR and maintain index association
var_dump(($words));   // diventerà ['white'=> 'bianco', red'=>'rosso'];  prima b..poi r... alfabeticamente

// visto che vogliamo modificare il valoe mettiamo l'unperson "&" davvanti
// solo il primo argomento &$val (l'ordine e importante) deve essere passato per referenza
// array_walk modifica l'array originale
array_walk($words, function (&$val, $key) {
    $val = strtoupper($val);
});


$result = array_map(function ($v) {
    return substr($v, 0, 1);               // Return part of a string:   function(array, offset, length){}
}, $words);                                // come terzo parametro possimo passare anche un array di valiabili

var_dump(($result));
?>
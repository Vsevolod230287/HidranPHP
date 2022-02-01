<?php 

$dir='docs/';
$filename = $dir.'myfyle.txt';

// Apro un file per scriverci dentro e se non esiste lo creo
// La funzione fopen() apre il file $filename e fa il truncate()-- cioe lo azzera per scriverci dentro,e se non esiste lo crea, 
// fopen() --ritorna una risorsa che punta al file 
$hd = fopen($filename, 'w');   // mi creera una risorsa ("un handler") che mi permetera di scriverci
if($hd){
    fwrite($hd, 'Prima scrittura su file'."\n");
    fclose($hd);
    echo 'Il file e stato scrito<br>';
}else {
    echo 'il percorso dato non esiste, oppure non abbiamo permessi di scrittura per quella cartella';
};




// appendere alla fine di un file
$hd = fopen($filename, 'a');  // 'a' vuoi dire append cioe apendere alla fine del file
if($hd){
  fwrite($hd, 'Seconda scrittura su file'."\n"); // scrive sul file
  fclose($hd);
  echo 'Il file e stato scrito alla fine';   // stampa sul browser html 
}else{
  echo 'il percorso dato non esiste, oppure non abbiamo permessi di scrittura per quella cartella';
}




// apriamo un file per leggerlo
$hd = fopen($filename, 'r');
if($hd){
    //  $content = fread($hd, filesize($filename));            // si come abbiamo fatto fread() abbiamo letto tutil file e il cursore e andato alla fine del file per questo lo riportiamo all'iniziop con rewind // con filesize($filename - "percorso file") li diciamo che vogliamo leggere l'intero file
    //  rewind($hd);                                           // mette il cursore all'inizio del file
    $content = '';
    while(!feof($hd)){
      $content .= fread($hd, 1024); 
    }
    fclose($hd);                                                // ricordiamoci sempre di chiudere il file perche se ce un altro script che aspetando il lock del file
    echo '<br>Il file e stato letto<br>';
}else {
    echo 'il percorso dato non esiste, oppure non abbiamo permessi di scrittura per quella cartella';
};
echo "Il contenuto del file: <br> $content";



// un altro modo per veder se il file esiste prendere il contenuto e scrivere sopra e apendere
$content = '';
if(file_exists($filename)){
   $content = file_get_contents($filename);
}

 file_put_contents($filename, $content.'Nuova stringa'."\n");  // se non ce lo crea, se ce qualcosa di scrito toglie e sovrascrive

 unlink($filename);   // elimina il file
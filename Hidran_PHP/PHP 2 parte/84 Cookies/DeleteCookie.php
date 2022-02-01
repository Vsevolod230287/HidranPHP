<?php 
$tempo = time() - 3600; // time() --il numero di secondi dal 1 gennaio 1970 fino a questo momento, se li tolgo 1 ora = 3600(sec) la variabile tempo sara il tempo di un ora fa in secondi
// Un cookie puo essee eliminato anche con un falsy come valore pero 
// non dobbiamo fare affidamento a questo la cosa piu sicura e farlo scadere.
// Se al cookie fornisco un tempo passato cioe il coockie e gia scaduto allora il cookie vera eliminato perche non valido.
setcookie('numberOfVisits', '', $tempo);
setcookie('visitCookiePage', '', $tempo);
echo 'hop cancelato "numberOfVisits" e "visitCookiePage"';


?>
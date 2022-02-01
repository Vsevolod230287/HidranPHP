<?php 
   setcookie('visitCookiePage', 1); // se mettiamo il valore del cookie un falsy allora li diciamo di eliminarlo
// comentiamo il cookie perche e stato gia impostato

// tutti i cookie che il browser ha inviato possiamo leggere con $_COOKIE
foreach($_COOKIE as $name => $value){
    echo "$name = $value <br>";
}

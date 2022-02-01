<?php 
// la prima volta quando impostiamo il cookie nel browser e quindi non sara disponibile per il superglobal $_COOKIE 
// sara disponibile alla successiva ricarica della pagina quando il browser mandera il cookie impostato 
// $time = time()+3600;

if(!isset($_COOKIE['numberOfVisits'])){
    echo 'setto per la PRIMA volta numberOfVisits';
    setcookie('numberOfVisits', 1, time()-3600);
    // header("Set-Cookie: numberOfVisits=1"); // si puo fare anche cosi e la stessa cosa, il cookie non e altro che un header
}else{
    echo 'ho incrementratto di una visita';
    $total= $_COOKIE['numberOfVisits'] + 1;
    setcookie('numberOfVisits', $total);
}

var_dump($_COOKIE['numberOfVisits']);
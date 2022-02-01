<?php 

// Note: The session_start() function must be the very first thing in your document. Before any HTML tags.


// la ssessione e un posto nel browser che ci permette di immagazinare delle informazioni
// per tutta la duratta della sessione dell'utente(finche  l'utente ha il browser aperto)
// php ci mette a disposizione la variabile Superglobal $_SESSION che e un superArray con chiave=>valore
// dove sono inmagazzinati i dati della sessione 

// invece i COOKIE  anche se chiudiamo il browser l'array con le informazioni rimane

// in php esiste anche un Coockie che identifica la sessione

// php ha diversi modi per gestire la sessione: su file , su db, possiamo scrivere delle funzioni per legere e scrivere dati in sessione
// poi ce anche la parte di sicurezza che coinvolge anche i cookie

// prima cosa quando la pagina si carica si inviano i coockie al browser per questo non deve essere nessuna riga prima html o qualsiasi altradell'inizizalizzazione della sessione: session_start();    



// per aveer la sessione dobbiamo attivarla con: session_start();
// se si vuole accedere alla session ma non e ancora stata creata ci dara un errore
session_start();      

var_dump($_SESSION);

$_SESSION['userId'] = 4;
$_SESSION['isLogged'] = 1;
session_write_close();       // in questo modo indico che ho finito la sessione e la chiudo quindi
                             // qualsiasi altra chiamata(ajax) o funzione vorrebe accedere alla sessione 
                             // lo potra fare perche abbiamo rilasciato la sessione e non la teniamo piu bloccata

?>
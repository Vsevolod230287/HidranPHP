<?php 
session_reset();// di solito e consigliabile metere il session start all'inizio del file
ob_end_clean(); // pulisce il buffer //se nel php.ini l'output buffering e attivo non ce bisogno di metere all'inizio il session_start()
?>
<h1>Hello</h1>
<?php 
// se non metto session_start mi da errore
session_start();       // il server manda il cookie di sessione al browser e il browser lo registra
var_dump($_SESSION); 
session_write_close(); // se una chiamata ajax ha biogno di accedere alla sessione dobbiamo eliberare flusso di sessione  

?>
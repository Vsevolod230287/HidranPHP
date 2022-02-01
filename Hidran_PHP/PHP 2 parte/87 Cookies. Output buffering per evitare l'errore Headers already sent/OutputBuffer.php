
<!-- 
// L'output buffering deve essere mandato con gli headers prima della pagina html,
// anche se mettiamo uno spazio vuoto, una riga vuota davanti al tag php con la rewlativa inizializzazione 
// del output buffer "ob_start()" php invia questo spazio al server e quindi anche gli headers, per questo  
// oppure se includiamo un file nel nostro script, puo aggiungerre una linea vuota e ci dara l'errore: "headers already sent"
// echo perche e meglio mettere la configurazione del output buffering nel php.ini 
-->

 <?php 
ob_start();   // lo mettiamo per racogliere la quantita da mandare al browser quindi non dovrebbe dare errore invece si perche ce uno spazio vuoto o delle rirhe vuote prima del tag php, quindi gli headers vengono inviati lostesso, quindi siamo in ritarto a setare i cookie, i cookie devono essere setati con i headers, ma se impostiamo il output_buffer nel php.ini non ci sarano problemi di spazi dall'inizio iniziera a racogliere nel buiffer subito le info quindi non ci dara errore meglio fare cosi 
setcookie('mycookie', 1);
echo '<h1>Hello World</h1>';
?>
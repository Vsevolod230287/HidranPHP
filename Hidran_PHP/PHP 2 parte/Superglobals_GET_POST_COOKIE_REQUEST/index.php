<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body style="background-color: #b3b6ff; padding: 30px;">
<!-- <script>
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script> -->
    <?php
    /*
$_GET
$_POST
$_COOKIE
$_REQUEST
*/

    // ini_set imposta un parametro di esecuzione di php
    ini_set('display_errors', 1); // mettiamo questa funzione oppure si può impostare nell file php.ini 
    error_reporting(E_ALL);       // mostra tutti gli errori di php quando stiamo programando

    // $username = $_GET['username'];
    // $_GET['username']=null;
    // anche se assegno esplicitamente il valore di  $_GET['username'] a null comunque risulta non impostata
    // ma se li assegnamo nel uri DOCUMENT_ROOT/?username=null   isset lo legera come chiave dell'array impostata
    //comunque se non passo nessun parametro get non mi da nessun notice semplicemente non entra nel if
    if (isset($_GET['username'])) {
        // var_dump($_GET['username']);
    }


    // per php "0",'',"", false, e anche empty, tutti i falsy sono empty 
    if (empty($_GET['username'])) {
        // echo '$_GET[\'username\'] - e vuota';
    } else {
        // echo $_GET['username'];
    }


    if (array_key_exists('username', $_GET)) {
        // var_dump($_GET['username']);
    }

    // alla primo caricamento della pagina i cookie verano solo settati quindi il var_dump($_COOKIE);  sotto non vedra i cookie settati
    // all secondo caricamento della pagina legera anche i valori assegnat ai cookie
    setcookie('username', 'vsevolod1', time() + 3600, '/');
    setcookie('lastname', 'cerneavschi1', time() + 3600, '/');



    echo '$_GET: ';
    var_dump($_GET);

    echo '$_POST: ';
    var_dump($_POST);

    echo '$_COOKIE: ';
    var_dump($_COOKIE);

    // echo '$_SESSION: ';
    // var_dump($_SESSION);

       


    // nella $_REQUEST vengono inmagazinate le variabili nel ordini specificato nel php.ini ma di solito 
    // vengono prima le $_GET  poi le $_POST poi le $_COOKIE poi le $_SESSION  quindi in ordine: GPCS
    // se ci sono delle variabili in con lostesso nome verrano sovrascritte cioe chi e l'ultima sovrascrive le altre cioe la SESSION
    // quindi una buona prassi non leggere le variabili da $_REQUEST perche possono essere sovrascrite fare atenzione
    // prendere sempre da $_GET, da $_POST ecc...
    echo '$_REQUEST: ';
    var_dump($_REQUEST);   // GPCS  
    ?>


    <div class="container">
        <!-- // con il methodo "get" sto inviando i parametri via url -->
        <!-- // nell atributo action posso passargli un url contenente dei query params via get -->
        <!-- Quiindi il form esegue un url attravewrso action="url"  che puo contenere dei query params $_GET-->
        <form action="index.php?username=A&lastname=B" method="post">  

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-success">Save</button>
                <!--onclick="location.href='index.php?username=A&lastname=B'" --al click ricarica la pagina e passa abche i parametri get -->
                <input type="reset" class="btn btn-success" onclick="location.href='index.php?username=A&lastname=B'" value="Reset">
                <!-- i parametri $_GET si possono passare tramite un link, un url, un form -->
                <a href="index.php?username=21&lastname=22" class="btn btn-danger">Invia</a>
            </div>

        </form>
    </div>

</body>

</html>
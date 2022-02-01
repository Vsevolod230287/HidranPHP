<?php

// LE VARIABILI GLOBALI SONO PERICOLOSE PERCHE POSSONO ESSERE SOVRASCRITTE IN ALTRE PARTI DEL PROGETTO E NON CE NE ACCORGIAMO
// SOLUZIONE INCLUDERE UN FILE CHE ESPORTA UN ARRAY CHE INCLUDE TUTTLE LE COSTANTI, VARIABILI CHE VOGLIAMO UTILIZZARE AL LIVELLO GLOBALE
// OPPURE UNA FUNZIONE(CLASSE) STATICA CHE ALL'INTEERNO A VARIABILI STATICHE CHE VOGLIAMO UTILIZZARE AL LIVELLO GLOBALE
$testGlobal = 'testGlobal -e una var globale<br><br>';


function test()
{
   global $testGlobal;
   $testGlobal = 'e una var locale <br>';

    echo $testGlobal;
    echo $GLOBALS['testGlobal'];

 
 
    // echo '$GLOBALS';             // HA DENTRO DI SE TUTTE LE VARIABILI GLOBALI E TUTTI I SUPERGLOBALS _ENV _FILES _SERVER _REQUEST _COOKIE ECC... e vengono chiamati e.g. (esempio)  $globals['_COOKIE']
    // var_dump($GLOBALS);
     var_dump($_POST);
    var_dump($GLOBALS['_POST']);
}


test();
?>



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




    <div class="container">

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
                <!--"al button" onclick="location.href='index.php?username=A&lastname=B'" --al click ricarica la pagina e passa abche i parametri get -->
                <input type="reset" class="btn btn-success" onclick="location.href='index.php?username=A&lastname=B'" value="Reset">
                <!-- i parametri $_GET si possono passare tramite un link, un url, un form -->
                <a href="index.php?username=21&lastname=22" class="btn btn-danger">Invia</a>
            </div>

        </form>
    </div>

</body>

</html>
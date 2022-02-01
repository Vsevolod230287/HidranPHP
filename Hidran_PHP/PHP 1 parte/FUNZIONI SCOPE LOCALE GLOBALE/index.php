<body style="background-color: #2d2d99;">
    <?php
     setcookie('TEST','VSEVOLOD', time()+3600);
    $data = [
        'name' => 'John',
        'lastname' => 'Dow'
    ];

    $obj = new stdClass();
    $obj->name = 'John';
    $obj->lastname = 'Dow';

    //Scalar --viene passato alla funzione come una coppia
    $name = 'John Dow';

    // con la variabile global faccio riferimento alla variabile vera e propria quella globale 
    // se la modifico , modifico quella originale, rimane modificata
    /*
    function modifyVal($val = null)
    {
        global $obj;
        $obj->name = 'Vsevolod';

        var_dump($obj);
    }
    */


    // $GLOBALS E UN ARRAY CON TUTTE LE VARIABILI GLOBALI
    function modifyVal($val = null)
    {
        global $name; 
        echo $name;
        $GLOBALS['name'] = 'Vsevolod';
        $GLOBALS['obj']->name = 'Vsevolod';
        $GLOBALS['data']['name'] = 'Seva';
        var_dump($GLOBALS['data']);

    }

    modifyVal();

    
     var_dump($GLOBALS);







    ?>

</body>
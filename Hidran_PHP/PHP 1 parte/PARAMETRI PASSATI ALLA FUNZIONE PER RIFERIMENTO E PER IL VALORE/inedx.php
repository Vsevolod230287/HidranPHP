<body style="background-color: #2d2d99;">
    <?php
    // metendo & unperson davati a una variabile quando si passa asd na funzione
    // li diciamo che il valore originario puo essere modificato
    // cioè che glielo stiamo passando per riferimento non come coppia

    //Arr --viene passato alla funzione come una coppia
    $data = [
        'name' => 'John',
        'lastname' => 'Dow'
    ];

    // Obj ---gli oggetti vengono passati per riferimento(non proprio, più preciso e un Handler_puntatore) 
    // cioe le modifiche avrano effeto sull'oggetto originale
    // php -passa un 'Handler' una specie di puntatore dove si trova l'oggetto
    $obj = new stdClass();
    $obj->name = 'John';
    $obj->lastname = 'Dow';


    //Scalar --viene passato alla funzione come una coppia
    $name = 'John Dow';

    function modifyVal(&$val)
    {
        if (is_object($val)) {
            $val->name = 'Vsevolod';
        } elseif (is_array($val)) {
            $val['name'] = 'Vsevolod';
        } else {
            $val = 'Vsevolod';
        }
        echo"<h1>Interno funzione</h1>";
        var_dump($val);
    }


    var_dump($name);
    modifyVal($name);
    echo"<h1>Dopo la funzione</h1>";
    var_dump($name);

    ?>

</body>
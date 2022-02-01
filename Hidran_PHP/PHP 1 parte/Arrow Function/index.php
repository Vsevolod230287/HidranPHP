<body style="background-color: #2d2d99">
    <?php
   // A lambda function is an anonymous PHP function that can be stored in a variable
   // and passed as an argument to other functions or methods.
   // A closure is a lambda function that is aware of its surrounding context.
    $arr = [
        [
            'name' => 'Hidran Arias',
            'age' => 48,
            'city' => 'Turin'
        ]
    ];

    $test = 'my prefix';

    $arrnew = array_map(function ($val) use ($test) {  // nello use($a, $b, $v)possiamo metere separate da virgola diverse variabili dello scope principale
        $tmp = []; 

        foreach ($val as $k => $v) {
            // $tmp[$k] = strtoupper($v).$test; // $test non e visibile nello scope della funzione se vogliamo utilizzarlo bisogna metere use($test)
            $tmp[$k] = strtoupper(($v) . $test);
        }
        return $tmp;
    }, $arr);

    var_dump($arrnew);



    $arr2 = [
        'name' => 'Hidran Arias',
        'age' => 48,
        'city' => 'Turin'  
    ];

    // fn (arguments) => expression;
    //  an arrow function  Start with the fn keyword.
    // Can have only one expression and return this expression.

    // le fun arrow hanno accesso alle variabili del contesto padre nel nostro caso raggiunge $test
    
    
    $arr_result = array_map(fn ($v) => strtoupper(($v) . $test), $arr2);  // la funz callback arrow riceve subito il valore $v non la chiave, quindi possiamo fare quello che vogliamo con lui

    var_dump($arr_result);

    
    ?>

</body>
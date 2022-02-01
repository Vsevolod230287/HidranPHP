<body style="background-color: forestgreen;">
    <?php

    somma(6, 4);
    function somma($a, $b)
    {
        echo $a + $b . '<br>';
    };

    // Funzione Closure e una funzione anonima che puo essere assegnata ad una variabile 
    // le funzioni variabili a diferenza di quele normali devono essere prima dichiarate poi utilizate

    $somma = function ($a, $b) {
        echo $a + $b . '<br>';
    };
    $somma(3, 4);


    function test(Closure $func)
    {
        $func(10, 5);
    }

    test($somma);


    $arr = [2, 3, 4, 5, 6];

    array_walk($arr, function ($val) {            // si aspetta un array che deve essere passato per riferimento(facoltativo) e poi una funzione che processi l'array
        echo ($val * 2).'<br>'; 
    });

    // $double = function (&$val) {            // quando si passa per riferimento si cambia il valore all array originale
    //     $val *=  2;
    // };

    // array_walk($arr, $double);

    function double($val) {            // si aspetta un array che deve essere passato per riferimento(facoltativo) e poi una funzione che processi l'array
        echo ($val * 2).'<br>'; 
    }

    array_walk($arr, 'double' );       // il nome della  funzione dobbiamo metterlo tra gli apici cosi php non la interpreta come costante

    var_dump($arr);




    ?>
</body>
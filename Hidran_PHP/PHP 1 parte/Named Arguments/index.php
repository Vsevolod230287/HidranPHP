<?php

declare(strict_types=1); // i tipi devono essere stretti

?>

<body style="background-color: #2d2d99">

    <?php

    function sum(int $a, int|float $b, callable $c): int|float
    {
        $c();
        return $a + $b;
    };


    // dal php8 si possono passare gli argomenti anche in questo modo senza il $  
    sum(b: 5.6, a: 10, c: function () {
        echo 'I am Callable';
    });
    

    // se passo un parametro per pozizione
    // lo devo pasare nell'ordine giusto come nella definizione della funzione
    // regola: dopo un argomento passato per {nome: valore} tutti queli che lo succedono devono essere passati per nome
    sum(5.6, b: 10, c: function () {
        echo 'I am Callable';
    });

    

    //stristr ritorna la srtinga trovata oppure false de non la trova case insensitive
    $met = stristr(haystack: 'I am VseVolod', needle: 'vsevolod');

    var_dump($met)

    ?>
</body>
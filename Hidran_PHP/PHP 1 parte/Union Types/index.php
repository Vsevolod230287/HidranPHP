<?php

declare(strict_types=1); // i tipi devono essere stretti

?>

<body style="background-color: #2d2d99">

    <?php
    //CLASSI, INTERFACE , callable, iterable, array, string, int, bool, float, 
    //object, mixed(di qualunque tipo :php8), self, parent
    //unionType = type|type
    //int|float

    class B
    {
        public string|Stringable $name;  // Stringable significa che e un oggetto che implementa la funzionalita toString
    }

    // se una funzione ritorna void, dobbiamo togliere il return
    function sum(int|float $a = null, int $b = null): int|float|null
    {
        if ($a === null && $b === null)
            return null;

        return $a + $b;
    };

    $result = sum(null, null);

    var_dump($result);



    ?>
</body>
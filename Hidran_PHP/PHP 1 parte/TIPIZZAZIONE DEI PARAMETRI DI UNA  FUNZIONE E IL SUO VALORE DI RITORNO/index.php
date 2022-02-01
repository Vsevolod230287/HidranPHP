<?php
//CLASSI, INTERFACE, callable, array, scalare = [string| int| bool| float];
// strict_types si puo indicare all livello di script
// oppure si configura al livello globale per tutto il php nel file php.ini

declare(strict_types = 1); // i tipi devono essere stretti
?>

<body style="background-color: #2d2d99">
  <?php

  function test()
  {
    echo '<br>test111';
  }

  $test = function () {
    echo '<br>test Variabile';
  };

  function somma(int $a, int $b, callable $c): int
  {

    $c();

    return ($a + $b);
  }


  //posso idicare i tipi  agli argomenti della funzione come classe, callable, array, string, int, bool, float
  //una callable() puo essere passata come stringa(se e una funzione) oppure come una funzione anonima oppure come funzione variabile

  echo '<br>' . somma(5, 5, $test) . '<br>';

  echo '<br>' . somma(5, 5, 'test');

  ?>
</body>
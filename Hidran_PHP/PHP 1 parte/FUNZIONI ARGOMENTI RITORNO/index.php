<?php
// nelle funzioni abbiamo due metodi che possiamo usare 
// func_num_args() --che ritorna il numero degli argumenti della funzione
// func_get_args() --che ci ritorna un array contenente gli argomenti della funzione
// func_get_arg(index) --che ci ritorna l'argomento all'indice dell'array contenente gli argomenti della funzione

function test($a, $b, $c)
{
  $result = 0;

  if (!func_num_args()) {  // ci ritorna il numero degli argomenti passati alla funzione
    return null;
  }

  foreach (func_get_args() as $arg) {  // la funzione func_get_args() ci itorna gli argomenti di una funzione
    $result += $arg;

  }

  $total = func_num_args();

  for ($tot=0; $tot < $total ; $tot++) { 
    var_dump(func_get_arg($tot));
    $result += func_get_arg($tot); //ci ritorna l'argumento passato alla funzione all'indice $tot
  }

  return $result;

}

var_dump(test(1, 2, 3));

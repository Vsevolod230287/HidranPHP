<?php

declare(strict_types=1);
?>

<body style="background-color: forestgreen;">
    <?php

    $arr = [1, 2, 3];

    list($a, $b, $c) = $arr;      // list assegna i valori dell'array alle variabili

    // var_dump($a, $b, $c);

    $arr1 = ['name' => 'Vsevolod', 'lastname' => 'Cerneavschi'];   // il valore di name lo diamo a $name e il valore di lastname lo diamo a $lastname
    // list('name' => $name, 'lastname' => $lastname) = $arr1;     // si puo fare cosi
    // var_dump($name, $lastname);
    
    [$a, $b, $c] = $arr;

     var_dump($a, $b, $c);

    ['name' => $name, 'lastname' => $lastname]= $arr1;             // si puo fare anche cosi
    var_dump($name, $lastname);

    $users = [
        ['name' => 'Vsevolod', 'lastname' => 'Cerneavschi'],
        ['name' => 'Seva', 'lastname' => 'Cerneavschi2']
    ];

    foreach($users as ['name' => $name, 'lastname' => $lastname]){
        echo "$name $lastname<br>";
    }
  
 












    ?>
</body>
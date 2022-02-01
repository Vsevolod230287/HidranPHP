<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background: red">
    <ul>

        <?php

        /*
        // nel ciclo for possiamo inizializzare quante variabili vogliamo separate dalla virgola
        // break e continue si possono usare nei cicli for while dowhile 



        $arr = ['red', 'blue', 'green', 'pink', 'yelow'];

        $total = count($arr);


        for ($j = 0; $j < 3; $j++) {

            for ($i = 0; $i < $total; $i++) {
                // if ($i > 2) {
                //     break;
                // }

                // if ($arr[$i] === 'green') {
                //     continue;      // continue interompe l'esecuzione del ciclo della $i corente, incrementa $i e passa a quello sucessivo
                // }

                if ($i == 4) {
                    $hr = '<hr>';
                } else {
                    $hr = '';
                }

                if ($i == 1) {
                    // break; // break esce fuori da tutt'il ciclo for con la variabile i, ma se a il numero 2 uscira anche dal ciclo for con la variabile j, usira da 2 cicli
                    continue 2; // esce fuori dal esecuzione del ciclo della i corente, poi esce fuori da tutt'il ciclo for(i), ed incrementera la j
                }

                echo '<li>' . $j . ' => ' . $i . ': ' . $arr[$i] . $hr . '<li>';
            }
        }

        */

        ?>

    </ul>

    <?php

    /*
        for ($i=0; $i <= 10 ; $i++) { 
            for ($j=0; $j <=10; $j++) { 
                echo "$i x $j = ". ($j*$i). "<br>";
                if($j == 10 ){
                    echo "<hr>";
                }
            }
        }
    */



    // FOREACH PER CICLARE GLI ARRAY OPPURE GLI OGGETTI
    // se si ciclano i oggeti si ciclera le proprieta publiche, le proprieta protected sarano readonly li mostrera comunque
    // in js con un for in un array misto mostra solo le chiavi numeriche, le chiavi stringe no!

    $arr = ['red' => 'red', 'blue' => 'blue', 'green', 'yellow', 'pink'];
    $arr3[] = ['a', 'b', 'c'];  // alla chiave '0' aggiunngiamo un array di caratteri
    $arr3[] = [1, 2, 3];        // alla chiave '2' aggiungiamo un array di numeri

    var_dump($arr3);           // quindi stampera un'array quale all'indice 0 => ['a', 'b', 'c'], e all'indice 1=>[1, 2, 3]; 

    foreach ($arr3 as  $key => $value) {
        foreach ($value as $v) {
            $value = strtoupper($v);
            echo "$key => $v <br>";
        }
      
    }

    
    ?>




</body>

</html>
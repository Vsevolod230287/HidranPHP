<body style="background-color: purple;">
    <h1>
        <?php

        $firstName = 'Vsevolod';
        $lastName = 'Cerneavschi';
        $email = '@cerneavschivsevolod@gmail.com';
        $address = 'éàò';   // da sostituire con: eao

        // trasformare una stringa in maiuscolo
        echo strtoupper($lastName) . '<br>';

        // trasformare una stringa in minuscolo
        echo strtolower($lastName);

        // trasformiamo un email in minuscolo e togliamo gli spazi agli estremi
        $email = trim(strtolower($email));
        echo "<br> $email";

        //abbiamo sostituito il carattere 'é' con 'e' nella variabile stringa $address
        // $address = str_replace('é', 'e', $address);


        // // l'ordine dei caratteri da sostituire nei due array devono corrispondere
        // $address = str_replace(array('é','ò','à'), ['e','o','a'], $address);   // due tipi di costrutto per gli array:  array(),  [];
        $arr1 = array('é', 'ò', 'à');
        $arr2 = ['e', 'o', 'a'];
        $address = str_replace($arr1, $arr2, $address);
        echo "<br>Adress:  $address";


        // strpos ritorna la posizione di una stringa in una stringa: $email = '@cerneavschivsevolod@gmail.com';
        $atExist = strpos($email, '@');


        // non entrera nel if se la @ e alla posizione zero, perche zero e un falsy e quindi non entrera nel if
        // quindi dobbiamo fare un confronto stretto che sia diverso da false
        if ($atExist !== false) {
            echo "<br>La '@' c'è!<br>";
        };

        echo "<br>atExist: $atExist";

        $str = '1,2,3,4,5,6,7,8,9,0';
        // separa una striga da un separatore e le stringhe sudivise li mette in un array 
        $arr = explode(',', $str);

        var_dump($arr);


        $sayHi = ['H', 'e', 'l', 'l', 'o'];
        // ogni elemento dell'array e statto unito attraverso il caratere "" niente, cioe 'attacatti'
        echo implode('', $sayHi) . '<br>';


        // un alias di implode e join
        echo join('_', $sayHi) . '<br>';



        // ad'esempio per errore nel db e stato inserito in questo modo con "\'"
        $carName = "Doblo\'";
        $carName = stripslashes($carName);

        // ob_end_clean() - pulisce il buffer di output di php quindi tutti i "echo" e "var_dump" scritti in precedenza verrano eliminati e vedremo solo quelli dopo la pulizia
        ob_end_clean();
        echo "<h1>$carName</h1>";





        ?>

    </h1>

</body>
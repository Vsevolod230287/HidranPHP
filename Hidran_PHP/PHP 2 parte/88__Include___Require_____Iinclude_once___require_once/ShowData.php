<ul>
    <?php

    $arr = ['Roma', 'Milano', 'Torino', 'Verona'];
    // segue una chiara diferenza tra include_once e include 
    foreach ($arr as $data) {
        include 'li.php'; // stapera  'Roma', 'Milano', 'Torino', 'Verona'
        // include_once 'li.php'; // stampera solo: 'Roma'

    }

    ?>
</ul>
<?php

declare(strict_types=1); // i tipi devono essere stretti

?>

<body style="background-color: #2d2d99">

    <?php
    function sum(?int $a = null, ?int $b = null): ?int   // puo essere anche null
    {
        if ($a === null && $b === null)
            return null;

        return $a + $b;
    };

    $result = sum(null, null);

    var_dump($result);

    ?>
</body>
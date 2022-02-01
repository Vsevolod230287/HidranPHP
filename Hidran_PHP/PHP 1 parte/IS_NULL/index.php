<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //   '' e diversa da null
    $name = '';
    // is_null
    if (is_null($name)) {             // notice: $name is not defined
        echo 'name e null<br>';
    } else {
        echo 'name non e null<br>';   // stampera questa frase
    }

    // isset
    if (!isset($name)) {              // non da notice: $name is not defined
        echo 'name non e settata<br>';
    } else {
        echo 'name e settata<br>';     // stampera questa frase
    }

    ?>
</body>

</html>
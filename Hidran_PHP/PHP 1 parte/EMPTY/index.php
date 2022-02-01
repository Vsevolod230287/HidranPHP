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
    //php considera una variabile vuota come falsy
    //che facendo cast a Booleano diventano false.
    /* cioe:
            0 (as an integer)
            0.0 (as a float)
            "0" (as a string)
            NULL
            FALSE
            array() (an emty array)
    */

    // NOTICE - sono tipo dei warning in ambiente di produzione non si vedono solo in fase di development
    $name = [];

    if (empty($name)) {
        echo '$name e vuota';
    } else {
        echo "name non e vuota ed è: $name";
    }
    ?>
</body>

</html>
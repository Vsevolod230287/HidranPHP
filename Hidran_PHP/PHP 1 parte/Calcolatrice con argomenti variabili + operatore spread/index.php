<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: dimgray">

    <?php

    //descriviamo la funzione
    function mathOp($op, ...$args)
    {
        if (empty($args)) {
            return null;
        }

        $ret = 0;
        switch ($op) {
            case '+':
                $ret = array_sum($args);
                break;
            case '*':
                $ret = 1;
                foreach ($args as $arg) {
                    $ret *= $arg;
                }
                break;
            case '-':
                $ret = $args[0];
                $vals = array_slice($args, 1);  // dal indice 1 fino alla fine
                foreach ($vals as $arg) {
                    $ret -= $arg;
                }
                break;
            case '/':
                $ret = $args[0];
                $vals = array_slice($args, 1);
                foreach ($vals as $arg) {
                    $ret /= $arg;
                }
                break;

            default:
                $ret = null;
        }

        return $ret;
    }

    $vals = [2, 5, 6, 8];
    print_r(mathOp('+', 2, 4, 8, ...$vals));

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        ul {
            background-color: #c0c0c0;
            color: #000;
            font-size: 24px;
        }
    </style>
    <title>Document</title>
</head>

<body style="background: red">
    <?php
    $arr = ['red', 'blue', 'green', 'yelow'];
    $total = count($arr);
    $i = 0;
    
    while($i < $total){
        echo '<li>'.$arr[$i].'<li>';
        $i++;
    }


    ?>

</body>

</html>
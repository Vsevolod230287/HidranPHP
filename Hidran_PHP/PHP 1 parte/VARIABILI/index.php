<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="background-color: red">
<div >
  <h1>
<?php 
 $name= 'Vsevolod';
// file_put_contents('text.php', $name); // file_put_contents crea un file e mete la variabile

// $isLoaded = (bool) 'text';

// echo '$isLoaded = '.$isLoaded;

// var_dump($isLoaded);

// $dec= '255aaa';

// var_dump($dec*4);

//  Numero in Base ottale: basta mettere uno zero davanti e poi diventa un numero ottale

 $octal = 0124;
// // var_dump($octal);

// //NUmero in hesadecimale
 $hex= 0xDE;
// // var_dump($hex);   // var_dump li converte all decimale e poi lo stampa

// // numero in base binaria
// $bin = 0b1111111;
// var_dump($bin);

// $result= $hex + $octal;
// echo  ("Result = $result\n"); // \n va a capo, \t mete uno spazio tab

$cognome = 'cerneavschi';

  // there are four types of strings available in php.
  //  They are single quotes ('), 
  //  double quotes (") and 
  //  Nowdoc (<<<'EOD') and 
  //  heredoc (<<<EOD) strings. 
  //  you can use both single quotes and double quotes inside heredoc string.
$accounts = [2,3];
$accounts['accountnumber'] = 2323232;
// var_dump($accounts);

$obj = new stdClass();
$obj->name= 'Jim';

//  heredoc (<<<EOD) strings.  e come "" le virgolete
// se meto nella heredoc un metodo di un oggetto e obligatorio prenderlo tra le parentesi {}
// se metto un valore di un array con indice non numerico bisogna metere le graffe {}
// in tutti gli altri casi semplici non servono le {}
$dati = <<<EOD
Il mio nome e $name<br>
Il mio cognome e $cognome<br>
Il mio account e: {$accounts['accountnumber']}

<br> $obj->name <br><br>
EOD;
// echo $dati;

//  Nowdoc (<<<'EOD') interpreta tutto come stringa e non vede le vaiabili e come i singoli apici
$dati1 = <<<'EOD'
<br>Il mio nome e $name<br>
Il mio cognome e $cognome<br>
Il mio account e: {$accounts['accountnumber']}

<br> $obj->name
EOD;
// echo $dati1;



//le stringhe in php ocupano di solito 1 byte per caratere pero i carateri accentati occupano 2 byte
//La funzione strlen -conta i byte di una stringa, la vede come una seguenza di byte;
//per contare i caratteri di una stringa come caratteri non come byte si utilizza la libreria mb_
// quindi la nostra strlen diventerà mb_strlen
$string = 'Cerneavschi';
$accented = 'ì';  
echo strlen($accented).'<br>';
echo mb_strlen($accented);

?>

</h1>
</div>

</body>
</html>
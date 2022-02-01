<body style="background-color: purple;">

<?php 
/*
php8=>
str_contains      => caseSensitive
str_starts_with   => caseSensitive
str_ends_with     => caseSensitive
*/

$str = 'The quick brown Fox jumped over the lazy dog';
// con il php8 si possono passare per nome le variabili di una funzione senza il "$", ma seguite da ":" e il valore rispetivo
var_dump(str_contains(haystack: strtolower($str), needle: 'fox'));


//str_starts_with e caseSensitive per questo possimo usare strtolower() per farla in minuscolo
if(str_starts_with(haystack: strtolower($str), needle: 'the')){
   echo '$str starts with: the';
}



?>
    
</body>
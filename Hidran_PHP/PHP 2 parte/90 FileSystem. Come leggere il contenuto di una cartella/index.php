<?php
$dir = 'docs/';
$d = scandir($dir);
echo 'var_dump($d): ';
var_dump($d);

/*
    var_dump(scandir('docs'));              // abbiamo scanerizzato la cartella "docs" e stampato a schermo l'array delle sue info 
    Risultato Stampato:
    0 => string '.' (length=1)             // cartella corente
    1 => string '..' (length=2)            // cartella parent
    2 => string 'myfile.txt' (length=10)   // uno dei file che contiene
    3 => string 'test.html' (length=9)     // uno dei file che contiene
    4 => string 'testo.txt' (length=9)     // uno dei file che contiene
*/



// Primo metodo
echo ' primo metodo $d->read(); $d->path; $d->handle;';

$d = dir($dir);

echo "Handle: $d->handle <br>";
echo "Path: $d->path <br>";

while (false !== ($entry = $d->read())) {
    echo "$entry <br>";
}
$d->close();





// Secondo metodo
echo '<hr>';
echo ' secondo metodonew DirectoryIterator($dir); $entry->getFilename() <br>';  // il piu usato

$di = new DirectoryIterator($dir);  // implementa la dunzione curent() next() previous() e tante altre

foreach ($di as  $entry) {
    echo $entry->getFilename() . '(' . $entry->getSize() . ')byte --e una directory? :';
    var_dump($entry->isDir());


    echo $entry->getFilename() . ' --e un file? :';
    var_dump($entry->isFile());
}





// Terzo metodo
echo '<hr>';
echo ' terzo metodo:  is_dir($dir.$entry); is_file($dir.$entry)';

// verifichiamo se la directory $d che e la directory "docs/" contiene altre directory: 
foreach ($d as $entry) {

    if ($entry === '.' || $entry === '..') {
        continue;                             // si come '.' rapresenta la cartella corrente e '..' rapresenta la cartella parent li saltiamo con "continue";
    }
    echo "<br> $entry";
    echo "<br>E una directory? : ";
    var_dump(is_dir($dir . $entry));            // si come lo script corente sta nella directory "90 FileSystem. Come leggere..." dobbiamo indicare il percorso giusto  all unzione is_dir(), is_file() quindi concateniamo $dir" = docs/"


    echo "<br>E un file? : ";
    var_dump(is_file($dir . $entry));
}

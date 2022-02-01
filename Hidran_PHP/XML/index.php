<?php
/*
* $dom = new DOMDocument('1.0', 'utf-8')
 */
$films = [
    [
        'title' => 'Batman',
        'year' => '1989',
        'director' => 'Tim Burton',
        'plot' => 'The dark knight og Gotham City begins his war onb crime his first major enemy being the clownishly homicidal Joker'
    ], [
        'title' => 'The StarWars Adventures',
        'year' => '2016',
        'director' => 'Tim Burton',
        'plot' => 'After splitting the Battalion into four companies, Thunder Company, under the command of Captain Mandeville, was sent to investigate.'
    ]

];

// new DOMDocument('1.0', 'utf-8') --1 param = version of xml;     --2 param = charset-encoding;
$dom = new DOMDocument('1.0', 'utf-8');  // un albero dom che possiamo salvarlo come xml come html oppure su file

$root = $dom->createElement('root');
$dom->appendChild($root);

foreach ($films as $film) {
    $movie = $dom->createElement('film');
    
    foreach ($film as $tag => $value) {
        $element = $dom->createElement($tag);
        $element->setAttribute('movie', 1);

        $text = $dom->createTextNode($value);
        $element->appendChild($text);
        $movie->appendChild($element);
    }

    $root->appendChild($movie);
}

// var_dump($dom->saveXML());
header('Content-Type: text/xml'); // mandiamo l'header il tipo di file che ritoniamo (XML) e quindi ci mostrera i tag e le info
$dom->save('mymovies.xml'); // salviamo il file nel filesystem
echo $dom->saveXML(); // salviamo e stampiamo con echo nel browser si vedra solo il testo(i nodi di testo)
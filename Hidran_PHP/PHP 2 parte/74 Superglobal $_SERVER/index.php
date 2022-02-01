<?php 
/*
Le più usate: 
REMOTE_ADDR
PHP_SELF - lo script che stiamo lanciando index.php,
SCRIPT_FILENAME - il paht fino al nostro script incluso,
REQUEST_URI - l'url della richiesta,
HTTP_USER_AGENT - INFORMAZIONE SUL BROWSER DELL'UTENTE CHE VISITA LA NOSTRA PAGINA ECC...
QUERY_STRING - la query nella path:  $_GET,
REQUEST_METHOD - il methodo della richiesta get put patch delete post 
DOCUMENT_ROOT - la direttory radice dell nostro server

*/

?>


<body>

<?php 
var_dump($_SERVER);
$doc_root= $_SERVER['DOCUMENT_ROOT'];
$req_uri= $_SERVER['REQUEST_URI'];

echo $req_uri;



?>
    
</body>
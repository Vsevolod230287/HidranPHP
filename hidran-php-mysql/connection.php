<?php
$config = require_once 'config.php';

// mysql-improved
$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password'],
    $config['mysql_db']
);

// smontiamo la variabile globale con le info sensibili del server per non sovrascriverla per caso
unset($config);

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
};

<?php 

$user = new stdClass();
$user->name = "Vsevolod";
$user->lastname = "Cerneavschi";
$user->age = 35;
$user->hobbies = ['Programming','Travelling','Cooking'];
$user->isAvailable = false;
$user->money = null;

echo json_encode($user);



?>
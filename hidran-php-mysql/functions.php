<?php
require_once 'connection.php'; 


// random fullname
function getRandName()
{
    $names = ['Robi', 'Ale', 'Vale', 'Ana'];
    $lastnames = ['Rossi', 'Bianchi', 'Re', 'Tramp', 'Mendosa'];
    $rand1 = mt_rand(0, count($names) - 1);
    $rand2 = mt_rand(0, count($lastnames) - 1);
    return $names[$rand1] . ' ' . $lastnames[$rand2];
};

// echo getRandName();

$fullname = getRandName();

// random email
function getRandEmail($name)
{
    $domains = ['google.it', 'yahoo.com', 'hotmail.it', 'libero.it'];
    $rand = mt_rand(0, count($domains) - 1);
    $str = str_replace(' ', '.', $name) . mt_rand(10, 99) . '@' . $domains[$rand];
    return strtolower($str);
};

echo getRandEmail($fullname) . '<br>';


function getRandFiscalCode()
{
    $i = 16;
    $res = '';
    while ($i > 0) {
        // la funzione chr() trasforma un numero nel rispettivo carattere ascii
        $res .= chr(mt_rand(65, 90));
        $i--;
    }
    return $res;
}

echo getRandFiscalCode();

function getRandomAge()
{

    return mt_rand(18, 50);
}

echo getRandomAge() . '<br>';


function insertRandUsers($quantita, mysqli $conn)
{
    while($quantita > 1){
        $username = getRandName();
        $email = getRandEmail($username);
        $fiscalcode = getRandFiscalCode();
        $age = getRandomAge();
        $sql = "INSERT INTO users (username, email, fiscalcode, age) VALUES";
        $sql .= "('$username','$email','$fiscalcode',$age)";
        echo 'sql: '.$sql;
        $res = $conn->query($sql);
        if(!$res){
            echo $conn->error;
        }else{
            $quantita--;
        }
    }
   

}

insertRandUsers(20, $mysqli);
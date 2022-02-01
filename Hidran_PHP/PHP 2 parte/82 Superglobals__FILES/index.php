<?php

/**
 * cose nuove viste:
 *  // dirname(__FILE__) --dammi la cartella del file corente 
 * // .'/images/' --e li attachiamo il path alla cartella images
 * // si come windows usa il "\" invece che "/" allora mettiamo realpath(dirname(__FILE__).'/images/')
 * realpath();
 * UPLOAD_ERR_OK  --costante di PHP, "0" indica che non ha trovato errore
 * location.href='index.php'
 *  <form enctype="multipart/form-data" action="index.php?name=seva&lastname=cerneavschi" method="post">
 * document.getElementById('imgavatar').src = window.URL.createObjectUrl(this.files[0])
 * move_uploaded_file($file['name'], $destination);  --sposta il file nella directory di destinazione
 **/

// var_dump($_GET);

$dir = realpath(dirname(__FILE__) . '/images/').'\\';
// L'array Superglobal "$_FILES" contiene tutti i file che abbiamo caricato
if (!empty($_FILES)) {
    foreach ($_FILES as $k => $file) {
        echo $k . '<br>';
        $fileName = basename($file['name']);
        // verifichiamo se il file e stato caricato via UPLOAD  (e non via post) per la sicurezza
        // UPLOAD_ERR_OK costante di php inpostatta a zero cioe che non ci sono errori
        if (is_uploaded_file($file['tmp_name']) && $file['error'] === UPLOAD_ERR_OK) {
            $res = move_uploaded_file($file['tmp_name'], $dir . $fileName);
            if ($res) {
                echo "Il $fileName e stato caricato ";
            } else {
                echo "Il $fileName non e stato caricato ";
            }
        };
    }
}
echo '$_FILES:';
var_dump($_FILES)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body style="background-color: #b3b6ff; padding: 30px;">
    <div class="container">
        <!-- // per poter manegiare dei file nel form deve essere: enctype="multipart/form-data" -->
        <form enctype="multipart/form-data" action="index.php?name=seva&lastname=cerneavschi" method="post">

            <!-- username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>

            <!-- lastname -->
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control">
            </div>

            <!-- avatar -->
            <!--  -->
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" name="avatar" id="avatar" class="form-control" onchange="document.getElementById('imgavatar').src=window.URL.createObjectUrl(this.files[0])">
                <input type="file" name="avatar2" id="avatar2" class="form-control" onchange="document.getElementById('imgavatar').src=window.URL.createObjectUrl(this.files[0])">
                <img src="" id="imgavatar" width="120">
            </div>

            <!--btn: Save, Reset -->
            <div class="form-group mt-3 ">
                <button class="btn btn-success">Save</button>
                <input type="reset" class="btn btn-success" onclick="location.href='index.php'" value="Reset">
            </div>

        </form>
    </div>

</body>

</html>
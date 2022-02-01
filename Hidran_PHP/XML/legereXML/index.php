<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$url='https://www.sitepoint.com/feed';

// $contents = file_get_contents($url);
// echo $contents;

// $xml = simplexml_load_string($contents);
$xml = simplexml_load_file($url);
$xml->saveXML('sitepoint.xml');
// var_dump($xml);
echo '<h1>'.$xml->channel->title.'</h1>';
echo '<div class="description">'.$xml->channel->description.'</div>';


foreach($xml->channel->item as $item): ?>

    <div>
        <?php echo $item->title  ?>
        <h3><?=$item->title?></h3>
  
    <ul>
        <li><a target="_blank" href="<?=$item->link?>"><?=$item->link?></a></li>
        <li><?= $item->description ?></li>
    </ul>
    </div>
    <hr>

<?php 
endforeach;
?>
</body>
</html>


<?php
    include 'stuff.php';
    include 'character.php';
    include 'orc.php';
    $gaga = new Orc();
    $dulba = new Orc();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>POO</title>
    </head>
    <body >
        <p>POO</p>
        <p>Gaga a comme point de vie : <?= $gaga->__get('health') ?></p>
        <p>Gaga a comme point de magie : <?= $gaga->__get('mana') ?></p>
        <?php $gaga->__set('mana', 10) ?>        
        <p>Gaga a comme point de magie : <?= $gaga->__get('mana') ?></p>
        <p>Dulba a comme point de magie : <?= $dulba->__get('mana') ?></p>
    </body>
</html>
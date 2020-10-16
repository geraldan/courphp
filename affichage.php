
<?php

$connect = new PDO('mysql:host=localhost;dbname=bassedetest','root','');

$pdoStat = $connect->prepare('SELECT * FROM user');

$pdoStat->execute();

$information = $pdoStat->fetchAll();

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultat formulaire</title>
</head>
<body>
<ul class="liste">
<?php foreach ($information as $contact):?>
<div class="boite"> 
<li>
<?= $contact[ 'nom'] ?><br> <?= $contact['prenom'] ?><br>
<?= $contact[ 'genre']?>
<?= $contact[ 'remarque']?>
</li>
</div>
<?php endforeach; ?>
</ul>
    
</body>
</html>

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
    <title>resultat formulaire</title>
</head>
<body>
<ul class="liste">
<?php foreach ($information as $contact):?>
<li>
<?= $contact[ 'nom'] ?> <?= $contact['prenom'] ?>
<?= $contact[ 'genre']?>
<?= $contact[ 'remarque']?>
</li>

<?php endforeach; ?>
</ul>
    
</body>
</html>
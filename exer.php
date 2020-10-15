<?php
/*$var = "jeans";
var_dump($var);
*/
/*
$a = 1.234;
$b = 1.546;
$c = 2.555;
$d = 5;
$e = 8;


/*
$a = true;
var_dump($a);
*/
/*
$a = 19;

if ($a > 20) {
    echo"a est plus grand que b";
  }  else  {
        echo"a est plus petit que 20";
    }
    */
    /*
$c =10;
while  ($c<=50){
    echo$c++;
    if ($c === 20){
    break;
    }

}
*/

/*
fais par le prof

$i = 0;
$max = 100;

while($i <= $max){
    $i++;
    echo "$i\n";
}
*/
/*
$p = "10";
$n = 10;

if ($p === $n){
    echo "c la meme";
}
*/
$userPrenom=($_POST["prenom"]);
$userName=($_POST["nom"]);

$pdo = new PDO('mysql:dbname=sqlcourse;host=127.0.0.1', 'root', 'toortoor', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

$sql = "INSERT INTO user (nom, prenom) value ('$userName', '$userPrenom')";
$pdo-exec($sql);
<?php
$sql = 0;
$userPrenom = $_POST["user_first_name"];
$userName = $_POST["user_last_name"];
$genre = $_POST["gender"];
$story = $_POST["story"];

$pdo = new PDO('mysql:dbname=bassedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);


$sql = "INSERT INTO user (nom, prenom, genre, remarque ) 
VALUES( '$userName', '$userPrenom', '$genre', '$story')";
$pdo->exec($sql);
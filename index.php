<?php
require __DIR__ . "/Utilisateur.php";
require __DIR__ . "/Admin.php";
require __DIR__ . "/Moderateur.php";
require __DIR__ . "/Redacteur.php";
require __DIR__ . "/Visiteur.php";

$admin1 = new Admin("john", "doe", "test@test.com", "testmdp");
var_dump($admin1);
$admin1->afficherProfil();

$moderateur1 = new Moderateur("john1", "doe1", "test1@test.com", "testmdp1");
var_dump($moderateur1);
$moderateur1->afficherProfil();

$redacteur1 = new Redacteur("john2", "doe2", "test2@test.com", "testmdp2");
var_dump($redacteur1);
$redacteur1->afficherProfil();

$visiteur1 = new Visiteur("john3", "doe3", "test3@test.com", "testmdp3", "pesudoa");
var_dump($visiteur1);
$visiteur1->afficherProfil();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
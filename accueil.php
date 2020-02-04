<!DOCTYPE html>
<?php
session_start();
try{
    $bdd= new PDO('mysql:host=localhost;dbname=site_ecommerce','root','root');
    $bdd->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);//mettre les champs en minuscule
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//lancer les erreurs des exeptions

}catch (ExCeption $e ){
    echo"une derreur est survenue";
    die();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insim-market.to</title>
    <link rel="stylesheet" href="./style/accueil.css">
</head>
<body>
<div class="contenu">
    <h1>Bienvenue sur mon site Ecommerce </h1>
    <header>
<ul class="menu">

    <li><a href="inscription.php">Inscription</a></li>
    <li><a href="connexion.php">Connexion</a></li>
</ul>
    </header>
    </div>
</body>
</html>
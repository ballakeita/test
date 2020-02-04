<?php
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=site_ecommerce','root','root');
if(isset($_POST['formconnexion'])){
    $mailconnect=htmlspecialchars($_POST['mailconnect']);
    $mdpconnect=sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect)){
        $requser=$bdd->prepare("SELECT * FROM membre WHERE mail=? AND mot_de_passe=?");
        $requser->execute(array($mailconnect,$mdpconnect));
        $userexiste=$requser->rowCount();
        if($userexiste==1){
            header('location: accueilconnexion.php');

        }else{
            $erreur="Mauvais identifiants";
        }

      
    }else {
        $erreur="tous les chmaps doivent etre rempmlies";
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>insim-market.to</title>
    <link rel="stylesheet" href="./style/connexion.css">
</head>
<body>
    <div class="bodyconnexion">
    <div class="classform">
    <h1 >connexion</h1>
    <form action="" method="POST" class="form">

<p>Mail</p>
<input type="text" name="mailconnect" id="mailconnect" placeholder="email">
<p>Mot_de_passe</p>
<input type="password" name="mdpconnect" id="mdpconnect" placeholder="mot de passe"><br><br>
<button type="submit"name="formconnexion" >se connecter</button>
<!-- <input type="submit" name="formconnexion" value="se connecter"> -->


<?php
if(isset($erreur)){
    echo  '<font color="red">'.$erreur.'<font/>';
}
?></form> 
</div>
</div>
</body>
</html>
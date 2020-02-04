<?php
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=site_ecommerce','root','root');
if (isset($_POST['forminscription'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdpd'])){
 
    $pseudo=htmlspecialchars($_POST['pseudo']);
    $nom=htmlspecialchars($_POST['nom']);
    $mail=htmlspecialchars($_POST['mail']);
    $mdp=sha1($_POST['mdp']);
    $mdpd=sha1($_POST['mdpd']);
    if($mdp == $mdpd){
        $reqmail=$bdd->prepare("SELECT * FROM membre WHERE mail=?");
        $reqmail->execute(array($mail));
        $mailexist=$reqmail->rowCount();
        if($mailexist==0){

        $insertmembre=$bdd->prepare("INSERT INTO membre(pseudo,nom,mail,mot_de_passe) 
        VALUES(?,?,?,?)");
        $insertmembre->execute(array($pseudo,$nom,$mail,$mdp));
        header('location: connexion.php');
        $erreur="votre compte est ok";

        }else{
            $erreur="le compte exite deja !!";
        }

    }else{
        $erreur = "Vos mots de passe ne correspondent pas !!";
    }
    }else{
        $erreur="tous les champs doivent etre remplies !!";
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>insim-market.to</title>
<link rel="stylesheet" href="./style/inscription.css">
</head>
<body class="bodyins">
    <div class="form">
    <img src="image/image16.jpg" alt="profil" width="200px" height="100px">
        <h1 class="titre">Inscription </h1>

<form action="" method="POST">
    <p>Nom :</p>
    <input type="text" placeholder="Diallo" name="pseudo" id="pseudo">
    <p>Prenoms :</p>
    <input type="text" placeholder="Papou" name="nom" id="nom">
    <p>Email :</p>
    <input type="email" placeholder="ballakei070@gmail.com" name="mail" id="mail">
    <p>Votre-mot-de-passe :</p>
    <input type="password" name="mdp" placeholder="*****" id="mdp">
    <p>comfirmer-Mot-de-pasee</p>
    <input type="password" name="mdpd" placeholder="*****" id="mdpd">
    <p>Votre-age</p>
    <input type="number" name="age" placeholder="18ans" id="age">
    <p>Vous etes :</p>
    <label for="femme">sexe :</label>
   <select name="sexe" id="sexe">
       <option value="homme">Homme</option>
       <option value="Femme">Femme</option>
   </select> <br><br>
    <button type="submit" name="forminscription">Envoyez</button> &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" value="Effacer">
</form>
<?php
if(isset($erreur)){
    echo  '<font color="red">'.$erreur.'<font/>';
}
?>
    </div>
</body>


</body>
</html>
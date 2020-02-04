<?php
$bdd= new PDO('mysql:host=localhost;dbname=site_ecommerce','root','root');
if(isset($_POST["titre"],$_POST['descriptions'],$_POST['Prix'])){
 $ajout=$bdd->prepare("INSERT INTO articles_produits(titre,descriptions,Prix) VALUES(?,?,?)");
// $ajout->execute(array($titre,$descriptions,$Prix));
$ajout->execute(array($_POST['titre'] ,$_POST['descriptions'] ,$_POST['Prix'] ));
header('location:accueil2.php');
}
// else{
//     echo "Tous les champs doivent etre remplies";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insim-market.to</title>
    <link rel="stylesheet" href="./style/ajout.css">
</head>
<body>
    <div class="produit">
   
    <div class="classform">
    <form action="" method="POST" >
         <h1>Ajout de produit</h1>
        Titre: <input type="text" name="titre">
        Descriptions: <input type="text" name="descriptions">
        Prix: <input type="text" name="Prix">
        <button type="submit" name="formajout">Ajouter</button>    
    </form>
    </div>
</div>
</body>
</html>
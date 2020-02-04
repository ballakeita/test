<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/accueilconnexion.css">
    <title>insim-market.to</title>
      </head>
<body>
<header>
<ul class="menu">
    <!-- <li><a href="index.php">Accueil</a></li> -->
    <li><a href="boutique.php">Ajouter un produit</a></li>
    <li><a href="deconnexion.php">deconnexion</a></li>
</ul>
    </header>
    <?php

require_once('article.php');
?>
 
<!-- 
        <form action="boutique.php" method="POST" >
                Titre: <input type="text" name="titre">
                Descriptions: <input type="text" name="descriptions">
                Prix: <input type="text" name="Prix">
            <button type="submit" name="submit" value="publier"></button>
            </form> -->
            <!-- <ul>
                <?php
                 $bdd= new PDO('mysql:host=localhost;dbname=site_ecommerce','root','root');
                 $ajout=("SELECT * FROM articles_produits ORDER BY id");
                 $result=$bdd->query($ajout);
                 while($row = $result->fetch()){
                     ?>
                     <li><a href="article.php?id="></a> <?php echo stripcslashes($row['descriptions']) ?> <?php echo stripcslashes($row["titre"]) ?> </li>
                     <?php
                 }
            ?>
        
            </ul> -->
    

</body>
</html>







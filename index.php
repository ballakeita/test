<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>

<?php
require_once('accueil.php');
require_once('articleconnexion.php');
echo " <br/>";
require_once('footer.php');
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







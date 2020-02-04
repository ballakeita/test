<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insim-market.to</title>
</head>
<body>
    

<?php 
    try
{
    $bdd= new PDO('mysql:host=localhost;dbname=site_ecommerce','root','root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
   echo'erreur sourvenue';
   die();
}
    $select=("SELECT * FROM articles_produits");
    // $select->execute();
    $result=$bdd->query($select);
   // $data=$result->fetchAll();
    
    while($s=$result->fetch(PDO::FETCH_OBJ)){

        ?>

<br><div align="center">
<!-- <h1>id :<?php echo $s->id ; ?> -->
<img src="./image/imagei.jpg" alt="kk" width="110" height="100" >
<h2>nom :<?php  echo $s->titre; ?></h2>
<h4> prix :<?php   echo $s->Prix; ?>Dinars</h4>
<h5>description :<?php   echo $s->descriptions; ?></h5>
<!-- recuperation avec un formulaire -->
<!-- 
<form action="panier.php" method="Post">
<input type="text" name="id" value="<?php echo $s->id ; ?>"> 
<input type="text" name="titre" value="<?php  echo $s->titre; ?>">
<input type="text" name="Prix" value="<?php   echo $s->Prix; ?>">
<input type="text" name="descriptions" value="<?php   echo $s->descriptions; ?>"> </br>
<input type="submit" value="ajouter panier">


</form> -->

<br><br>
</div>

<?php
}
?>
</body>
</html>

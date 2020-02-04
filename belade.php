<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    $select=("SELECT * FROM articles_produits WHERE 1");
    // $select->execute();
    $result=$bdd->query($select);
    $data=$result->fetchAll();
    
    while($s=$result->fetch(PDO::FETCH_OBJ)){

        ?>
<br><div align="center">
<h1>id :<?php echo $s->id ; ?>
<h2>nom :<?php  echo $s->titre; ?></h2>
<h5>description :<?php   echo $s->descriptions; ?></h5>
<h4> prix :<?php   echo $s->Prix; ?>Dinars</h4>
<!-- 
<a href="panier.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
 -->
<br><br>
</div>

<?php
}


?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="article.css">
</head>
<body>
<!-- <h1>Ajout de produit</h1> -->
    <!-- <form action="boutique.php" method="POST" >
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
             <li><a href="#"></a> <?php echo stripcslashes($row["titre"]) ?> </li>
             <?php
         }
         
        ?>



    </ul> -->

 <div class="contenu">
 
  
    <table class="table">
    <caption>  <h1>liste des produits</h1></caption>
<tr>
    <th><h3>ID</h3></th>
    <th><h3>Tritre</h3></th>
    <th><h3>Prix</h3></th>
    <th><h3>Descriptions</h3></th>
</tr>
    <?php 
    $bdd= new PDO('mysql:host=localhost;dbname=site_ecommerce','root','root');
    $ajout=("SELECT * FROM articles_produits");
    $result=$bdd->query($ajout);
    $data=$result->fetchAll();
    for($i=0;$i<count($data);$i++){
        $id=$data{$i}['id'];
        $titre= $data{$i}['titre'];
        $descriptions= $data{$i}['descriptions'];
        $Prix=$data{$i}['Prix'];
        echo"<tr><td>$id</td><td><input type='checkbox' id='checkbox'>$titre</td><td>$Prix.dinars</td><td>$descriptions</td></tr>";
        
    }
    ?>

    </table>
    <div class="acheter">
        <button type="submit" value="Acheter" onclick="bouton()">Acheter</button>
    </div>
</div> 
</body>
</html>
<script>
    function bouton(){
         console.log("veillez vous connectez d'abord !!");  
    }
</script>
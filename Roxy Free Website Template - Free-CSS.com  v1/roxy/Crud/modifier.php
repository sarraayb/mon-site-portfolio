<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">

    <title>Document</title>


 

</head>

<body class="bodymodifier">


<?php
require_once('../connexion_bd.php');


//var_dump ($_id); 
$id =$_GET['projetId'];

$requete = "SELECT * FROM page_portfolio WHERE id= $id";
$resultat = $bdd->query($requete); 
$row=$resultat->fetch();

    $nom =$row['nom'];
    $image =$row['image'];
    $description =$row['description'];
    $date_creation=$row['date_creation'];



    if(isset($_POST['submit'])) {
      $nom = $_POST['nom'];
      $image = $_POST['image'];
      $description = $_POST['description'];
      $date_creation = $_POST['date_creation'];


      $resultatModification = $bdd->prepare("UPDATE page_portfolio SET nom = :nom, image = :image, description = :description, date_creation = :date_creation  WHERE id = $id");
      $resultatModification->execute
    ( array(
        'nom' => $nom,
        'image' => $image,
        'description' => $description,
        'date_creation' => $date_creation,

    ));
    if($resultatModification) {
      header ('location: affichageBd.php');
      echo 'Modifier avec succées';
    }
  }
?>

<form action="" method="POST">
<h1 class="titre" >Modifier un projet</h1>

<div>
  
  <div>
    <label class="textajouter" for="nom">nom</label>
    <input class="bouton_nom" type="text" name="nom" value="<?php echo $nom; ?> ">
  </div>


  <div>
    <label class="textajouter" for="image">image</label>
    <input class="bouton_image" type="file" name="image" value="<?php echo $image; ?> ">
  </div>

  <div>
    <label class="textajouter" for="description">description</label>
    <input class= "bouton_des" value="<?php echo $description; ?> "type="text" name="description" >
  </div>

  <div>
    <label class="textajouter" for="date_creation">date_creation</label>
    <input class="bouton_date_creation" value="<?php echo $date_creation; ?> " type="date" name="date_creation" >
  </div>


  <div>
    <input class="bouton_inserer"type="submit" value="Modifier" name="submit">
  </div>
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">

    <title>Document</title>
</head>


<body class=bodyadd>

<?php
//Cette ligne vérifie si le bouton de soumission du formulaire a été cliqué
if(isset($_POST['submit']))
{

    //vérifie si les champs "nom", "image", "description" et "date_creation" sont présents dans les données soumises via la méthode POST
    if  (isset($_POST['nom']) && isset($_POST['image']) && isset($_POST['description']) && isset($_POST['date_creation'])

    //vérifie si les valeurs des champs ne sont pas vides
    && $_POST['nom'] !="" 
    && $_POST['image'] !="" 
    && $_POST['description'] !="" 
    && $_POST['date_creation'] !="" 
    ){

      
        include_once("../connexion_bd.php");
        //extraire les données saisies
        extract($_POST);
        //requete de l'insertion
        $resultat = $bdd->prepare("INSERT INTO page_portfolio (nom, image, description, date_creation) VALUES (:nom, :image, :description, :date_creation)");

        $resultat->execute(array(
            ':nom' => $nom,
            ':image' => $image,
            ':description' => $description,
            ':date_creation' =>$date_creation,
        ));

        if($resultat){
           //s'affiche dans le tableau
          header("location:affichageBd.php");
        }else  {
            header("location:ajouter.php?message= Ajout echoué !");
               }
    }

    else{
        header("location:ajouter.php?message=Champs vide ! ");

    }
}


?>
<h1 class="titre" >Ajouter des projets</h1>
<form action="" method="POST">
  
  <div>
    <label class="textajouter" for="nom">Nom</label>
    <input class="bouton_nom" type="text" name="nom">
  </div>

  <div>

    <label class="textajouter" for="image">Image</label>
    <input class= "bouton_prenom" type="file" name="image">
  </div>

  <div>
    <label for="description"class="textajouter">Description</label>
    <input class="bouton_des" type="text" name="description">
  </div>

  <div>
    <label for="date_creation" class="textajouter">Date de creation</label>
    <input class="bouton_date_creation" type="date" name="date_creation">
  </div>

  <div>
    <input class="bouton_inserer" type="submit" value="Envoyer" name="submit">
  </div>
</form>
    
</body>
</html>
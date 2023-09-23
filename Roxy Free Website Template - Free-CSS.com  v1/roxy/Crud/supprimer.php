
<?php
include_once('../connexion_bd.php');


if (isset($_GET['projetId'])){

    $id =$_GET['projetId'];
    $sql = "DELETE FROM page_portfolio WHERE id = $id";
    $resultat = $bdd->query($sql); 
  if ($resultat) {
    header ('location:affichageBd.php');
  }
}
?>

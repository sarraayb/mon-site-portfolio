<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/select2/select2.min.css">
    <link rel="stylesheet" href="../vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/lightcase/lightcase.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="./style1.css">
    <link rel="stylesheet" href="../css/style.min.css">
</head>



<body class="corps" >
<header>
<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <h3 class="font-weight-bolder mb-0">AYS</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                
                
            <li class="ajouter">
               <a href='ajouter.php?projetId=$id '>Ajouter</a>
            </li>


                <?php 
            session_start();
            if (isset($_SESSION["connected"]) && $_SESSION["connected"] === true) {
            echo"<li class='ajouter'><a href='../deconnexion.php'>Déconnexion</a></li>";
        
            }
            ?>
           
            </ul>
        </div>
    </div>
       

</nav>
</header>

<table>
        <thead>
        <tr>

            <td>Id</td>
            <td>Nom</td>
            <td>Image</td>
            <td>description</td>
            <td>Date de création</td>

            <td></td>
            <td></td>
          
                
        </tr>
        </thead>
    
    <tbody>
            <?php
            include_once('../connexion_bd.php');

                // Récupération des données
                $sql = "SELECT * FROM page_portfolio";
                //prépare la requête SQL en utilisant un objet de déclaration (prepare)
                //L'objet de déclaration permet de sécuriser la requête et d'éviter les attaques par injection SQL
                $stmt = $bdd->prepare($sql);
                $stmt->execute();
                //Cette ligne récupère tous les résultats de la requête sous forme d'un tableau associatif (fetchAll()).
                $elements = $stmt->fetchAll();

                // Affichage des données dans le tableau
                foreach ($elements as $element) {
                    $id=$element['id'];
                    echo '<tr>';
                    echo '<td>'.$element['id'].'</td>';
                    echo '<td>'.$element['nom'].'</td>';
                    echo '<td><img src="../img/'.$element['image'].'" alt="'.$element['image'].'" width="100"></td>';
                    echo '<td>'.$element['description'].'</td>';
                    echo '<td>'.$element['date_creation'].'</td>';
                    

                    echo "<td><button ><a href='modifier.php?projetId=$id'>modifier</a></button></td>";
                    echo "<td><button onClick='return confirmation()'><a  href='supprimer.php?projetId=$id'>Supprimer</a></button></td>";
                    echo '</tr>';
                }

               
            ?>
        </tbody>
    </table>


    <script>
            // Confirmation de suppression d'un element 
            function confirmation(){
            const result = confirm('Souhaitez-vous supprimer cet élément ?');
                if (result){
            alert('Votre élément à été supprimé avec succès');
                  return true;
                }
                else{

                    return false;
                     }
            }
    </script>



</body>
</html>
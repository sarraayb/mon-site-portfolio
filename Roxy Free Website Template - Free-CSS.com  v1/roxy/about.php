<!DOCTYPE html>
<html lang="en">

<head>
    <!--
     - Roxy: Bootstrap template by GettTemplates.com
     - https://gettemplates.co/roxy
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Roxy by GetTemplates.co</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.min.css">
    

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    
<?php
require_once('./header.php');
?>
<?php 

require_once('./connexion_bd.php');
               

    $requete = 'SELECT * FROM a_propos';
      //echo $requete;

      try{
    $resultat = $bdd->query($requete);
    $resultat->setFetchMode(PDO::FETCH_ASSOC);
    $row = $resultat->fetch();
                        
?>

 

</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div class="jumbotron d-flex align-items-center">
        <div class="container text-center">
          
        <h2 class="display-apropos mb-4">A Propos de moi</h2>
        <?php echo "<p class='div2'> " . $row['presentation'] . "</p>";?>
          
        <br>  </br>
          <h2 class="div3" > ● Etudes </h2>
          <?php echo "<p class='div2'> " . $row['études'] . "</p>";?>

        
        <br>  </br>
        <div class="container text-center" >
        <h2 class="div3" >● Competences </h2>
        <?php echo "<p class='div2'> " . $row['compétences'] . "</p>";?>

        </div>
        </div>
        </div>
    
        <div class="rectangle-transparent-1"></div>
        <div class="rectangle-transparent-2"></div>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        
        <div class="triangle triangle-1">
            <img src="img/obj_triangle.png" alt="">
        </div>
        <div class="triangle triangle-2">
            <img src="img/obj_triangle.png" alt="">
        </div>
        <div class="triangle triangle-3">
            <img src="img/obj_triangle.png" alt="">
        </div>
        <div class="triangle triangle-4">
            <img src="img/obj_triangle.png" alt="">
        </div>
    
</section>	
</div>


<div class="container text-center">
<h1 class="div3" > ● MON CV </h1>
    <button  onclick="afficherPDF()">Afficher le PDF</button>
    <iframe  id="pdfIframe" width="100%" height="600px"></iframe>
    </div>
    <script>
        function afficherPDF() {
            var iframe = document.getElementById("pdfIframe");
            iframe.src = "AYEB_CV.pdf";
        }
    </script>



<?php
require_once('./footer.php');
?>

</footer>	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	 
	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script src="//localhost:35729/livereload.js"></script>

<?php 
    } // Fin try
    catch (Exception $e) {
    echo "<br /> erreur sur la requête SELECT ";
    } 
?>


</body>
</html>

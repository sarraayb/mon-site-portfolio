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
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>


    <?php
require_once('./header.php');
?>
	        <?php 
                require_once('./connexion_bd.php');
               

                $requete = 'SELECT * FROM page_portfolio';
                //echo $requete;

                try{
                    $resultat = $bdd->query($requete);
                    $resultat->setFetchMode(PDO::FETCH_ASSOC);
                        
            ?>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">

	<!-- Blog Section -->
<section id="blog" class="bg-grey">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap mb-5" data-aos="fade-up">
                <h2 class="display-apropos mb-4"> Portfolio </h2>            
            </div>

                
        <!-- Btn Filter -->
               
        <!-- End of Btn Filter -->


    <div class="row">
        <!-- Blog -->
                <div class="col-md-12 blog-holder">
                    <div class="row">
        <!-- Blog Item -->
        <?php  while ($row = $resultat->fetch())
                    { ?>
                        
                        <div class="col-md-4 blog-item-wrapper" data-aos="fade-up">

                            <div class="blog-item">
                            <div class="blog-img">
                              <img class='portfolio-item' src="./img/<?php echo $row['image'] ;?>" alt="portfolio-img" class="portfolio-item">
                            </div>

                            <div class="blog-text">       
                            <div class="blog-title">
                                <a href="single.html"><h4 ><?php  echo $row['nom'] ;?></h4></a>
                            </div>
                            <div class="blog-meta">
                                <p class="blog-date"> <?php echo $row['date_creation'] ;?></p>
                            </div>

                            <div class="blog-meta">
                                <p class="blog-date"> <?php echo $row['description'] ;?></p>
                            </div>
                            
                            
                            </div>
                            </div>
                        </div>
                   
    <?php } ?>       
    

    </div>
    
    <div class="rectangle-transparent-1"></div>
    <div class="rectangle-transparent-2"></div>
    
    </div>


    <?php 
    
        } // Fin try
        catch (Exception $e) {
        echo "<br /> erreur sur la requête SELECT ";
        } 
    ?>

  
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

</body>
</html>

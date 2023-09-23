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

</head>


<?php
require_once('./header.php');
include_once("./connexion_bd.php");
?>

<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
</div>		

<?php
    if (isset($_POST['submit'])){
        //extraire les données saisies
        $nom = trim($_POST['name']);
        $mail = trim($_POST['mail']);
        $message = trim($_POST['message']);

        //requete de l'insertion
        $resultat = $bdd->prepare("INSERT INTO me_contacter (nom, mail, message) VALUES (?, ?, ?)");
        $resultat->execute([$nom, $mail, $message]);
    }

?>
  


<!-- Contact Form Section -->
<section id="contact-form" class="bg-white">



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
        </div>	




    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="display-apropos mb-4">Me Contacter</h2>
            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Contact Form Holder -->
                <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                    <form method="post" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" id="mail" name="mail" placeholder="Mail">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button onClick='return confirmation()' class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
</section>

        <script>
                    function confirmation(){
                    alert('Votre message a ete envoyé');
                    }
        </script>


<?php
require_once('./footer.php');
?>
	
</div>
	<!-- External JS -->
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

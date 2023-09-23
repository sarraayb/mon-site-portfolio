	<?php 
                require_once('./connexion_bd.php');
               

                $requete = 'SELECT * FROM auteur';
                //echo $requete;

                try{
                    $resultat = $bdd->query($requete);
                    $resultat->setFetchMode(PDO::FETCH_ASSOC);
                    $row = $resultat->fetch();
                        
                ?>




<div class="jumbotron d-flex align-items-center">
  <div class="container text-center">
  <?php echo "<p class='display-1 mb-4'> Hey I'M " . $row['prenom'] . "</p>";?>
  <?php echo "<h2 class='display-1 mb-4'> A " .nl2br($row['fonction']) . "</h2>"; ?>
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
</div>	

<section id="section-featurettes" class="featurettes overlay bg-fixed" style="background-image: url(img/fond.avif);">

    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center text-white">

                        <div class="col-md-4 offset-md-2 col-sm-6" data-aos="fade-right">
                            <h4 class="mb-4">A propos de moi </h4>
                            <?php echo "<p>" . $row['propos'] . "</p>";?>
                            <button type="button" class="btn btn-outline-primary"> <a href="about.php">En savoir plus</a></button>
                            <button type="button" class="btn btn-outline-primary"> <a href="blog.php">mes projets</a></button>
                        </div><!--/ .col-md-4.col-md-offset-2.col-sm-6 -->

                        <div class="col-md-4 offset-md-right-2 col-sm-6" data-aos="flip-right">
                            <img class="my-5" src="img/mevert.png" alt="">
                        </div><!--/ .col-md-4.col-md-offset-right-2.col-sm-6 -->

                    </div><!--/ .featurettes-item -->

                </div><!--/ .col-md-12 -->

            </div><!--/ .row -->
        </div>
    </div>
    
    
    <!--/ .container -->

</section>	


<section id="section-featurettes" class="featurettes">
</section>	

    
        <?php 
                      } // Fin try
                    catch (Exception $e) {
                        echo "<br /> erreur sur la requête SELECT ";
                    } 
                    ?>
    
    </div>
    
   
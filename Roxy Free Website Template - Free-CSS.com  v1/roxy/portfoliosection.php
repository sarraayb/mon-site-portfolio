
<?php 
                require_once('./connexion_bd.php');
               

                $requete = 'SELECT * FROM portfolio';
                //echo $requete;

                try{
                    $resultat = $bdd->query($requete);
                    $resultat->setFetchMode(PDO::FETCH_ASSOC);
                    $row = $resultat->fetch();
                        
                ?>


<!-- Portfolio Section -->
 <section id="portfolio" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap">
                <h2 class="section-title"> PORTFOLIO </h2 > 
                <?php echo "<p class='section-sub-title'>" . $row['portfolio_home'] . "</p>";?>

            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Portfolio Holder -->
                <div class="col-md-12 portfolio-holder mt-3">
                    <!-- Btn Filter -->
                    <div class="filter-button-group btn-filter d-flex justify-content-center">
                        <a tabindex="0" class="is-checked" data-filter="*">Show All</a>
                        <a tabindex="0" data-filter=".minimalism">Graphisme</a>
                        <a tabindex="0" data-filter=".vintage">Developpement_web</a>
                        <a tabindex="0" data-filter=".creative">Creative</a>
                    </div>
                    <!-- End of Btn Filter -->
                    <!-- Portfolio Content -->
                    <div class="grid-portfolio">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>

 <!-- Portfolio Item -->
                        <div class="grid-item minimalism" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img class='portfolio-item' src="<?php echo $row['projet_1'] ;?>" alt="portfolio-img" class="portfolio-item">

                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/infogra.png" title="Photo-1">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                    </div>
                                </div>

                            </div>
                        </div>
<!-- End of Portfolio Item -->
<!-- Portfolio Item -->
                            <div class="grid-item creative grid-item-height" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img class='portfolio-item' src="<?php echo $row['projet_2'] ;?>" alt="portfolio-img" class="portfolio-item">

                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/livretexpo.png" title="Tracy Portrait">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                    </div>
                                </div>

                            </div>
                        </div>
     <!-- End of Portfolio Item -->
     <!-- Portfolio Item -->
     <div class="grid-item creative" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img class='portfolio-item' src="<?php echo $row['projet_3'] ;?>" alt="portfolio-img" class="portfolio-item">

                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/cube.png" title="Guitar">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                    </div>
                                </div>

                            </div>
                        </div>
<!-- End of Portfolio Item -->
<!-- Portfolio Item -->
<div class="grid-item creative" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img class='portfolio-item' src="<?php echo $row['projet_4'] ;?>" alt="portfolio-img" class="portfolio-item">

                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/machine3d.png" title="Guitar">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                    </div>
                                </div>

                            </div>
                        </div>
 <!-- End of Portfolio Item -->
 <!-- Portfolio Item -->
 <div class="grid-item vintage" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img class='portfolio-item' src="<?php echo $row['projet_5'] ;?>" alt="portfolio-img" class="portfolio-item">
                                

                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/mesange.png" title="Bookself">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                    </div>
                                </div>

                            </div>
                        </div>
<!-- End of Portfolio Item -->
    <!-- Portfolio Item -->
                        <div class="grid-item vintage" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img class='portfolio-item' src="<?php echo $row['projet_6'] ;?>" alt="portfolio-img" class="portfolio-item">

                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/instagram.png" title="Ship">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                    </div>
                                </div>

                            </div>
                        </div>
<!-- End of Portfolio Item -->



</section>
<!-- End of Portfolio Section -->
 <?php 
                      } // Fin try
                    catch (Exception $e) {
                        echo "<br /> erreur sur la requête SELECT ";
                    } 
                    ?>
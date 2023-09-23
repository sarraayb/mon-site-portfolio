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
                <li class="nav-item">
                    <a class="nav-link" href="old_index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <?php 
            session_start();
            if (isset($_SESSION["connected"]) && $_SESSION["connected"] === true) {
            echo"<li class='nav-item'><a class='nav-link' href='./deconnexion.php'>Déconnexion</a></li>";
            
            }
            ?>
             
    

                
            </ul>
        </div>
    </div>


</nav>
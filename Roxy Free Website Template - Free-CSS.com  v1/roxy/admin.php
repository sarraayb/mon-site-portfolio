<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="logincss.css" media="screen" type="text/css" />
 <link rel="stylesheet" href="verificationphp.php" media="screen" type="text/css" />
 <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    

 </head>
 <body>
 </div>
    
    <div class="rectangle-transparent-1"></div>
    <div class="rectangle-transparent-2"></div>
    
    </div>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="admin.php" method="POST">
 <h1 class="textlogin">Connexion</h1>
 
 <label><b class="textlogin" >Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b class="textlogin" >Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value='LOGIN' >

 <?php
 /*if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'> Utilisateur ou mot de passe incorrect</p>";
 }*/
 ?>

<?php

$login = "susu2";
$password = "1234";

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputLogin = $_POST["username"];
    $inputPassword = $_POST["password"];
  
    if ($inputLogin == $login && $inputPassword == $password) {
      $_SESSION["connected"] = true;
      header("Location: Crud/affichageBd.php"); 
      exit();
    } else {
      $errorMessage = "Login ou mot de passe incorrect";
    }
  }
  
  if (isset($_SESSION["connected"]) && $_SESSION["connected"] === true) {
    echo "Bienvenue dans votre espace membre !";
    echo "<br>";
  } else {
    ?>
    
    <?php
    if (isset($errorMessage)) {
      echo "<p style='color: red;'>$errorMessage</p>";
    }
    ?>
  

    <?php
  }
?>


</body>
</html>